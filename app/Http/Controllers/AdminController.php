<?php

namespace App\Http\Controllers;

use App\User;

use App\Product;

use App\Category;

use App\Picture;

use Illuminate\Support\Str;

use App\Notifications\StockDelNotification;

use App\Notification;

use App\Notifications\ChangedPasswordNotification;

use App\Notifications\ProductNotification;

use App\Notifications\CategoryDeletedNotification;

use App\Notifications\CategoryEditedNotification;

use App\Notifications\UserNotification;

use App\Notifications\CategoryNotification;
use App\Stockist;
use Illuminate\Http\File;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

use function GuzzleHttp\json_decode;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::all()->where('user_type', 'user');

        // $orders = Order::all();

        return view('admin/index', compact('users',));
    }
    public function addProduct()
    {
        $getcat = Category::all();

        return view("admin/add-product", compact('getcat'));
    }
    public function orders()
    {
        return view("admin/orders");
    }
    public function adminRegister()
    {
        return view("admin/register");
    }
    public function register()
    {
       $data = request()->validate([
         'name' => 'required',
         'email' => 'required|unique:users',
         'password' => 'required|min:8',
       ]);

       $data['password'] = Hash::make(request('password'));

       User::create($data);
       
       return redirect("/admin/login");
    }
    public function adminLogin()
    {
        return view("admin/login");
    }
    public function login(Request $request)
    {
        $data = request()->validate([
            'email' => "required",
            'password' => "required|min:8",
        ]);
        
        $datas = $request->only(['email', 'password']);

        if (Auth::attempt($datas)) {

            if(Auth::user()->user_type == 'admin'){

            return redirect("/admin");
                
            }else{

            return redirect("/account");

            }
        } else{
            return redirect("/admin/login")->with("msg", 'The password or the Email is not Correct');
        }
    }
    public function logout()
    {
        Auth::logout();

        return redirect('/admin/login');
    }
    public function stockist()
    {
        $stock = Stockist::all();

        return view("admin.stockist", compact("stock"));
    }
    public function delStock($id)
    {
        Stockist::where('id', $id)->delete();

        Auth::user()->notify(new StockDelNotification());

        return redirect('/admin/stockist')->with('msg', 'Stockist Deleted Successfully');
    }
    public function account()
    {
        $auth_id = Auth::user()->id;

        $user = User::all()->where('id', $auth_id);

        return view("admin\account", compact('user'));
    }
    public function allCategory()
    {
        $cat = Category::all();
        return view("admin\category",compact('cat'));
    }
    public function category()
    {
        return view("admin/add-category");
    }
    public function addCategory(Request $request)
    {
        $data = request()->validate([
            'category_name' => 'required',
            'category_image' => 'required|mimes:jpg,jpeg,png,gif',
            'category_description' => 'required',
        ]);

        $data['category_slug'] = Str::slug($request->category_name);

        $file = request()->file('category_image');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move('uploads/category/', $filename);

        $data['category_image'] = $filename;
        
        Category::create($data);

        Auth::user()->notify(new CategoryNotification());

        return redirect('/admin/category')->with('msg', 'Category Added Successfully');
    }
    public function delCategory($id)
    {
        Category::where('id', $id)->delete();
        Auth::user()->notify(new CategoryDeletedNotification());

        return redirect("/admin/category")->with("mssg", "Category deleted Successfully");
    }
    public function editPage($id)
    {
        $getcat = Category::all()->where('id', $id);

        return view("admin/edit", compact('getcat'));
    }
    public function editCategory(Request $request, $id)
    {
        $data['category_name'] = request('category_name');

        $data['category_description'] = request('category_description');
    
        if ($request->hasFile('category_image')) {
        
            $file = request()->file('category_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/category/', $filename);

            $data['category_image'] = $filename;
        }
        
        Category::where('id', $id)->update($data);

        Auth::user()->notify(new CategoryEditedNotification());

        return redirect('admin/category')->with("msag", "Category Updated Successfully");
    }

    public function allUsers(){
        $users = User::all()->where('user_type', 'user');

        return view("admin\users", compact('users'));
    }
    public function delUser($id)
    {
        User::where('id', $id)->delete();

        Auth::user()->notify(new UserNotification());

        return redirect('/admin/users')->with('msg', 'User Deleted Successfully');
    }
    public function oldPass()
    {
        return view("/admin/old");
    }
    public function confPass()
    {
        $pass = request()->validate([
            'password' => 'required|min:8'
        ]);
        $password = request("password");
        
        $log_user = Auth::user()->id;        
        
        $oldPass = User::where('id', $log_user)->first('password');
        
        $passer = encrypt('9202');

        if (password_verify($password, $oldPass->password)) {
           return redirect("/admin/new-password/$passer");
        }else{
            return view("/admin/old")->with("msg", "The Password does not match our Records");
        }
    }
    public function newpassPage($passer)
    {
        $dico = decrypt($passer);
        
        if ($dico == '9202') {
            return view("admin/new");
        }else{
            return redirect('/admin/confirm-password');
        }
    }
    public function change_pass()
    {
        $fu = request()->validate([
            'password' => 'required|min:8',
            'confPass' => 'same:password',
        ]);
        
        $data['password'] = Hash::make(request('password'));

        if (Auth::user()) {
        
        $id = Auth::user()->id;
        
        $new_pass = User::where('id', $id)->update($data);
        
        Auth::user()->notify(new ChangedPasswordNotification());

        return redirect("/admin")->with("mssag", "Your Password was Changed Successfully");

    }else{
        return redirect('/admin/login');
    }
    }
    public function makeProduct(Request $request)
    {
        
        $file = $request->file('image_name');
        $f = [];
    foreach ($file as $item) {
        $extension = $item->getClientOriginalExtension();
        $name = $item->getClientOriginalName();
        $filename = $name.time() . '.' . $extension;
        $f[] = $filename;
        $item->move('uploads/products/', $filename);
    }
       
        $data = request()->validate([
            'name' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'price' => 'required',
        ]);
        $data['quantity'] = '1';
        $data['product_slug'] = Str::slug(request('name'));
        
        $data['image_name'] = json_encode($f);

        Product::create($data);
    //     $pics['image_name'] = json_encode($f);
        
    //    Picture::create($pics);
    
        Auth::user()->notify(new ChangedPasswordNotification());

        return redirect('/admin/products');
    }
    public function products()
    {
        $pics = Product::all();
        foreach ($pics as $pic) {
            $pic['image_name'] = json_decode($pic['image_name'], true);
        // $pics[0]['image_name']; 
        }
        $product = Product::all();

        return view('admin/products', compact('pics','product'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Category;

use App\Mailing;

use App\Destination;

use Illuminate\Support\Facades\DB;

use App\Product;

use App\Stockist;

use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Auth;

class SiteController extends Controller
{
    public function index()
    {
        $uniItem = Product::where(['id'=> '2'])->get();
        foreach ($uniItem as $pic) {
            $pic['image_name'] = json_decode($pic['image_name'], true);
        }
        
        $uniItems = Product::where(['id'=> '8'])->get();

        foreach ($uniItems as $pic) {
            $pic['image_name'] = json_decode($pic['image_name'], true);
        }
        $category = Category::all()->take(5);

        return view('pages.index', compact('category', 'uniItem','uniItems'));
    }
    public function about()
    {
        return view("pages/about");
    }
    public function register()
    {
        return view("pages/register");
    }
    public function userRegister()
    {
        $data = request()->validate([
            "name" => "required",
            "email" => "required|unique:users",
            "password" => "required|min:8",
        ]);
        
        $data['password'] =  Hash::make(request('password'));

        User::create($data);

        return redirect("/pages/login");
    }
    public function login()
    {
        return view("pages/login");
    }
    public function loginUser(Request $request)
    {
        $data = request()->validate([
            'email' => "required",
            'password' => "required|min:8",
        ]);
        
        $datas = $request->only(['email', 'password']);
        if (Auth::attempt($datas)) {
            if(Auth::user()->user_type == 'user'){

                return redirect("/account");
                    
            }else{
    
            return redirect("pages/login")->with("msg", 'The password or the Email is not Correct');
            }
        }
    }

    public function addresses()
    {
        return view("/user/addresses");
    }

    public function address()
    {
        $data = request()->validate([
            'fname' => 'required',
            'lname' => 'required',
            'company' => 'required',
            'address' => 'required',
            'address1' => 'required',
            'city' => 'required',
            'country' => 'required',
            'province' => 'required',
            'zip_code' => 'required',
            'phone' => 'required',
        ]);

        $auth_user = Auth::user()->id;

        $data['user_id'] = $auth_user;
        
        Destination::create($data);

        return redirect('/account')->with('message', "Address Created Successfully");
    }
    public function logout()
    {
        Auth::logout();

        return redirect("/");
    }
    public function all()
    {
        return view("pages/all");
    }
    public function account()
    {
        $log_user = Auth::user()->id;
        
       $dec = Destination::all()->where('user_id', $log_user);
    
       return view("/user/account", compact('dec'));
    }
    public function stockist()
    {
       return view("pages/stockist");
    }
    public function addStockist()
    {
        $data = new Stockist;
        $data['store_name'] = request("store_name");
        $data['rep_name'] = request("rep_name");
        $data['rep_address'] = request("rep_address");
        $data['rep_email'] = request("rep_email");
        $data['rep_phone'] = request("rep_phone");

        $data->save();
        echo "<script>alert('You were Added as a Partner Successfully')</script>";
        echo "<script>window.open('/', '_self')</script>";
    }
    public function category_name($catname)
    {
        $catname = $catname;

        $cat_id = Category::where('category_slug', $catname)->first('id');
        
        $catproduct = Product::all()->where('category_id', $cat_id->id);
        
        $pics = Product::where('category_id', $cat_id->id)->get('image_name');;

        foreach ($pics as $pic) {
            $pic['image_name'] = json_decode($pic['image_name'], true);
        }

        return view("pages/category", compact('catname', 'pics', 'catproduct'));
    }
    public function search(Request $request)
    {
        $search = $request->get('q');
        $post = Product::where('name', 'like', '%' . $search. '%')->paginate(5);

        foreach ($post as $pic) {
            $pic['image_name'] = json_decode($pic['image_name'], true);
            $catid = $pic['category_id'];
        }
        
        $cat = Category::where('id', $catid)->get();
        return view("pages/search", compact("post", "search", "cat"));
    }
    public function cart()
    {
        if (session('cart') != null) {
            $session = session('cart');
            foreach ($session as $value) {
                $val = $value['id'];
            }
            $prod = Product::where('id', $val)->get();
            return view("pages/cart", compact('prod'));

        }else{
            return view("pages/cart");
        }
    }
    public function addToCart($id)
    {
        $product = Product::find($id);
        if(!$product) {
            abort(404);
        }
        $cart = session()->get('cart');
        // if cart is empty then this the first product
        
        $pic['image_name'] = json_decode($product['image_name'], true);
        
        $car = $pic['image_name'][0];
        if(!$cart) {
            $cart = [
                    $id => [
                        "id" => $id,
                        "name" => $product->name,
                        "quantity" => 1,
                        "price" => $product->price,
                        "size" => 'S',
                        "image_name" => $car
                    ]
            ];

            session()->put('cart', $cart);
            return redirect('/pages/cart')->with('msg', ' Product Added to Cart Successfully. You can remove, update or Proceed with the buying Below. Thanks!');
        }
        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {
            $cart[$id]['quantity'];
            session()->put('cart', $cart);
            return redirect('/pages/cart')->with('msg', ' Product Added to Cart Successfully. You can remove, update or Proceed with the buying Below. Thanks!');
        }
        
        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "id" => $id,
            "name" => $product->name,
            "quantity" => 1,
            "price" => $product->price,
            "size" => 'S',
            "image_name" => $car,
        ];
        
        session()->put('cart', $cart);
        return redirect('/pages/cart')->with('msg', ' Product Added to Cart Successfully. You can remove, update or Proceed with the buying Below. Thanks!');
    }

    public function delCart(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');

            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');

            return redirect("/pages/cart")->with('mssg', "Product removed from Cart successfully");
        }
     
    }
    public function editCart(Request $request)
    {  
        if($request->id and $request->quantity and $request->quantity)
        {
            $getProductPrice = Product::where('id', $request->id)->first(['price']);
            // dd($getProductPrice);
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            $cart[$request->id]["price"] = $getProductPrice->price * $request->quantity;
            session()->put('cart', $cart);
            // dd(session()->get('cart'));
            session()->flash('success', 'Cart updated successfully');

            // return redirect("/pages/cart")->with('msasg', "Product Updated successfully!");
        }
      
    }
    public function oneProduct($catname, $id, $desc)
    {
        $desc = $desc;

        $catname = $catname;
        
        $prod = Product::all()->where('id', $id);
        foreach ($prod as $pic) {
            $pic['image_name'] = json_decode($pic['image_name'], true);
        }
        return view("pages/product", compact('desc', 'catname', 'prod'));
    }
    public function subscribe()
    {
        $data = request()->validate([
            'email' => 'required|email|unique:mailings',
        ]);

        Mailing::create($data);

        if (Auth::user()) {
            return redirect('/account/#footertable')->with('mssg', 'You are Successfully added to th Mailing List');
        }else{
            return redirect('/#footertable')->with('mssg', 'You are Successfully added to th Mailing List');
        }

        
    }
}

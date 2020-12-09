@if (Auth::user()->user_type == 'admin')
@include('admin/includes/header')
@include('admin/includes/sidebar')

<div class="be-content">
    <div class="page-head">
        <h2 class="page-head-title">All Users</h2>
        <ol class="breadcrumb page-head-nav">
          <li><a href="/admin">Home</a></li>
          <li>Users</li>
        </ol>
    </div> 
    @if (session()->has('msg'))
        <div id="delUser" class="gritter-main-wrapper success-alert alert">
            <div id="gritter-item-1" class="gritter-item-wrapper color success" style="" role="alert">
            <div class="gritter-item"><div class="gritter-content gritter-without-image">
                <a class="gritter-close"  id="delUser" tabindex="1">Close Notification</a>
                <span class="gritter-title">Success</span>
                <p>User Deleted Successfully</p>
                </div>
            </div>
            </div>
        </div>
    @endif
    <div class="main-content container-fluid">
        <div class="col-md-12">
            <div class="panel panel-default panel-table">
              <div class="panel-heading">Users
                <div class="tools dropdown"><span class="icon mdi mdi-download"></span><a href="#" type="button" data-toggle="dropdown" class="dropdown-toggle"><span class="icon mdi mdi-more-vert"></span></a>
                  <ul role="menu" class="dropdown-menu pull-right">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div>
              </div>
              <div class="panel-body">
                <table class="table table-striped table-hover">
                  <thead>
                    <tr>
                      <th style="width:37%;">Name</th>
                      <th style="width:36%;">Email</th>
                      <th>Date</th>
                      <th>Action</th>
                      <th class="actions"></th>
                    </tr>
                  </thead>
                  @foreach ($users as $item)
                  <tbody>
                    <tr>
                        <td class="user-avatar"> <img src="/assets/assets/img/avatar.png" alt="Avatar">{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->created_at->diffForHumans() }}</td>
                        <td class="actions">
                            <form action="/admin/users/{{ $item->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    <i style="color: #fff" class="icon mdi mdi-delete"></i>
                                </button>
                            </form> 
                        </td> 
                    </tr>
                  </tbody>
                  @endforeach
                </table>
              </div>
            </div>
          </div>
    </div>
</div>
  @include('admin/includes/footer')
@else
<script>window.location="/admin/login"</script>
@endif
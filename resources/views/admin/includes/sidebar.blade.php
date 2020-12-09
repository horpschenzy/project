   <div class="be-left-sidebar">
        <div class="left-sidebar-wrapper"><a href="#" class="left-sidebar-toggle">Dashboard</a>
          <div class="left-sidebar-spacer">
            <div class="left-sidebar-scroll">
              <div class="left-sidebar-content">
                <ul class="sidebar-elements">
                  <li class="divider">Menu</li>
                  <li class="active"><a href="/admin"><i class="icon mdi mdi-home"></i><span>Dashboard</span></a></li>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-face"></i><span>Activities</span></a>
                    <ul class="sub-menu">
                      <li><a href="/admin/category">Category</a>
                      </li> 
                      <li><a href="/admin/products">Products</a>
                      </li>
                      <li><a href="/admin/orders">Orders</a>
                      </li>
                      <li><a href="/admin/users">All Users</a>
                      </li>
                      <li><a href="/admin/stockist">All Stockist</a>
                      </li>
                      <li><a href="/admin/account">My Account</a>
                      </li>
                    </ul>
                  </li>
                  <li class="parent"><a href="charts.html"><i class="icon mdi mdi-chart-donut"></i><span>Products</span></a>
                    <ul class="sub-menu">
                    @php
                        $jun = App\Category::all()->sortBy('category_name');
                    @endphp
                    @foreach ($jun as $item)
                    <li><a href="/pages/{{ $item->category_slug }}">{{ $item->category_name }}</a></li>
                    @endforeach
                     
                    
                    </ul>
                  </li>
                  <li><a href="/admin/logout"><i class="icon mdi mdi-power"></i><span>Logout</span></a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
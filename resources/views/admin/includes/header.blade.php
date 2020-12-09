
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="/assets/assets/img/logo-fav.png">
    <title>Beagle</title>
    <link rel="stylesheet" type="text/css" href="/assets/assets/lib/perfect-scrollbar/css/perfect-scrollbar.min.css"/>
    <link rel="stylesheet" type="text/css" href="/assets/assets/lib/material-design-icons/css/material-design-iconic-font.min.css"/><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="/assets/assets/lib/jquery.vectormap/jquery-jvectormap-1.2.2.css"/>
    <link rel="stylesheet" type="text/css" href="/assets/assets/lib/jqvmap/jqvmap.min.css"/>
    <link rel="stylesheet" type="text/css" href="/assets/assets/lib/datetimepicker/css/bootstrap-datetimepicker.min.css"/>
    <link rel="stylesheet" href="/assets/assets/css/style.css" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="/assets/assets/lib/select2/css/select2.min.css"/>
    <link rel="stylesheet" type="text/css" href="/assets/assets/lib/dropzone/dist/dropzone.css"/>
    <link rel="stylesheet" type="text/css" href="/assets/assets/lib/datatables/css/dataTables.bootstrap.min.css"/>
  </head>
  <body>
    <div class="be-wrapper be-fixed-sidebar">
      <nav class="navbar navbar-default navbar-fixed-top be-top-header">
        <div class="container-fluid">
          <div class="navbar-header"><a href="index" class="navbar-brand"></a>
          </div>
          <div class="be-right-navbar">
            <ul class="nav navbar-nav navbar-right be-user-nav">
              <li class="dropdown" style="margin-top: 15px;"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle">
                @if (Auth::user()->user_image)
                <img src="{{ asset('uploads/users/')}}/{{ Auth::user()->user_image }}" alt="{{ Auth::user()->name }}">
                    @else
                <img src="/assets/assets/img/avatar.png" alt="{{ Auth::user()->name }}">
                @endif
                <span class="user-name">{{ Auth::user()->name }}</span></a>
                <ul role="menu" class="dropdown-menu">
                  <li>
                    <div class="user-info">
                      <div class="user-name">{{ Auth::user()->name }}</div>
                      <div class="user-position online">Available</div>
                    </div>
                  </li>
                  <li><a href="account"><span class="icon mdi mdi-face"></span> Account</a></li>
                  <li><a href="/customer/login"><span class="icon mdi mdi-power"></span> Logout</a></li>
                </ul>
              </li>
            </ul>
            <div class="page-title"><span>Dashboard</span></div>
            <ul class="nav navbar-nav navbar-right be-icons-nav">
              <li class="dropdown" style="margin-top: 15px;"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle">
                <span class="icon mdi mdi-notifications"></span>
                @if (count(Auth::user()->unreadNotifications))
                <span class="indicator"></span>
                @else

                @endif
                </a>
                <ul class="dropdown-menu be-notifications">
                  <li>
                    <div class="title">Notifications<span class="badge">{{ count(Auth::user()->unreadNotifications) }}</span></div>
                    <div class="list">
                      <div class="be-scroller ps-container ps-theme-default ps-active-y" data-ps-id="048602ea-8033-bb61-9752-d7eda96bf0a6">
                        <div class="content">
                          <ul>
                            @forelse (auth::user()->notifications as $notification)
                            <li class="notification notification-unread"><a href="#">
                                <div class="image">
                                  <img src="/assets/assets/img/avatar2.png" alt="Avatar">
                                </div>
                                <div class="notification-info">
                                  <div class="text">
                                    @include('layouts.notifications.'.class_basename($notification->type))
                                        @empty 
                                        <p class="not-p">No Unread Notification</p>
                                    {{-- <span class="user-name">Jessica Caruso</span> accepted your invitation to join the team.</div><span class="date">2 min ago</span> --}}
                                </div></a></li>
                            @endforelse
                          </ul>
                        </div>
                      <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                        <div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;">
                        </div>
                      </div>
                      <div class="ps-scrollbar-y-rail" style="top: 0px; right: 0px;">
                        <div class="ps-scrollbar-y" tabindex="0" style="top: 0px;">
                        </div>
                      </div>
                    </div>
                    </div>
                    <div class="footer"> 
                      <a href="/customer/notification">View all notifications</a>
                    </div>
                  </li>
                </ul>
               </div>
                              </div>
                            </a>
                          </li>
                      </ul>
                    </div>
                  </div>
                </div>
                {{-- <div class="footer"> <a href="#">View all notifications</a></div> --}}
              </li>
            </ul> 
          </li>
        </ul>
      </div>
    </div>
  </nav>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="" >
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!--Meta Responsive tag-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!--Custom style.css-->
    <link rel="stylesheet" href="{{asset('css/quicksand.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!--Font Awesome-->
    <link rel="stylesheet" href="{{asset('css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontawesome.css')}}">
    <!--Chartist CSS-->
    <link rel="stylesheet" href="{{asset('css/chartist.min.css')}}">
    <!--Datatable-->
    <link rel="stylesheet" href="{{asset('css/dataTables.bootstrap4.min.css')}}">
    <!--Bootstrap Calendar-->
    <link rel="stylesheet" href="{{asset('js/calendar/bootstrap_calendar.css')}}">

    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('photo/logo.png')}}">

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <title>Shwe Tha Mae Pin</title>
  </head>
  <body>
    
    <!--Page Wrapper-->

    <div class="container-fluid">

        <!--Header-->
        <div class="row header shadow-sm">
            
            <!--Logo-->
            <div class="col-sm-3 pl-0 text-center header-logo">
               <div class="bg-theme mr-3 pt-3 pb-2 mb-0">
                    <h3 class="logo"><a href="#" class="text-secondary logo"> ရွှေသမှဲ့ပင် (ဝါးဓနိ)<span class="small">admin</span></a></h3>
               </div>
            </div>
            <!--Logo-->

            <!--Header Menu-->
            <div class="col-sm-9 header-menu pt-2 pb-0">
                <div class="row">
                    
                    <!--Menu Icons-->
                    <div class="col-sm-4 col-8 pl-0">
                        <!--Toggle sidebar-->
                        <span class="menu-icon" onclick="toggle_sidebar()">
                            <span id="sidebar-toggle-btn"></span>
                        </span>
                        <!--Toggle sidebar-->
                        <!--Notification icon-->
                        <div class="menu-icon">
                            <a class="" href="#" onclick="toggle_dropdown(this); return false" role="button" class="dropdown-toggle">
                                <i class="fa fa-bell"></i>
                                <span class="badge badge-danger">5</span>
                            </a>
                            <div class="dropdown dropdown-left bg-white shadow border">
                                <a class="dropdown-item" href="#"><strong>Notifications</strong></a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <div class="media">
                                        <div class="align-self-center mr-3 rounded-circle notify-icon bg-primary">
                                            <i class="fa fa-bookmark"></i>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0"><strong>Meeting</strong></h6>
                                            <p>You have a meeting by 8:00</p>
                                            <small class="text-success">09:23am</small>
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <div class="media">
                                        <div class="align-self-center mr-3 rounded-circle notify-icon bg-secondary">
                                            <i class="fa fa-link"></i>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0"><strong>Events</strong></h6>
                                            <p>Launching new programme</p>
                                            <small class="text-success">09:23am</small>
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <div class="media">
                                        <div class="align-self-center mr-3 rounded-circle notify-icon bg-warning">
                                            <i class="fa fa-user"></i>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0"><strong>Personnel</strong></h6>
                                            <p>New employee arrival</p>
                                            <small class="text-success">09:23am</small>
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-center link-all" href="#">See all notifications ></a>
                            </div>
                        </div>
                        <!--Notication icon-->

                        <!--Inbox icon-->
                        <span class="menu-icon inbox">
                            <a class="" href="#" role="button" id="dropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-envelope"></i>
                                <span class="badge badge-danger">4</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-left mt-10 animated zoomInDown" aria-labelledby="dropdownMenuLink3">
                                <a class="dropdown-item" href="#"><strong>Unread messages</strong></a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <div class="media">
                                        <img class="align-self-center mr-3 rounded-circle" src="assets/img/profile.jpg" width="50px" height="50px" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <h6 class="mt-0"><strong>Adam Abdulrahman</strong></h6>
                                            <p>How are you?</p>
                                            <small class="text-success">09:23am</small>
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <div class="media">
                                        <img class="align-self-center mr-3 rounded-circle" src="assets/img/profile.jpg" width="50px" height="50px" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <h6 class="mt-0"><strong>Adam Abdulrahman</strong></h6>
                                            <p>How are you?</p>
                                            <small class="text-success">09:23am</small>
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <div class="media">
                                        <img class="align-self-center mr-3 rounded-circle" src="assets/img/profile.jpg" width="50px" height="50px" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <h6 class="mt-0"><strong>Adam Abdulrahman</strong></h6>
                                            <p>How are you?</p>
                                            <small class="text-success">09:23am</small>
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-center link-all" href="#">View all messages</a>
                            </div>
                        </span>
                        <!--Inbox icon-->
                        <span class="menu-icon">
                            <i class="fa fa-th-large"></i>
                        </span>
                    </div>
                    <!--Menu Icons-->

                    <!--Search box and avatar-->
                    <div class="col-sm-8 col-4 text-right flex-header-menu justify-content-end">
                        <div class="search-rounded mr-3">
                            <input type="text" class="form-control search-box" placeholder="Enter keywords.." />
                        </div>
                        <div class="mr-4">
                            <a class="" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <p>{{ Auth::user()->name }}</p>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right mt-13" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#"><i class="fa fa-user pr-2"></i> Profile</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="fa fa-th-list pr-2"></i> Tasks</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="fa fa-book pr-2"></i> Projects</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-power-off pr-2"></i> Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                            </form>
                            </div>
                        </div>
                    </div>
                    <!--Search box and avatar-->
                </div>    
            </div>
            <!--Header Menu-->
        </div>
        <!--Header-->

        <!--Main Content-->

        <div class="row main-content">
            <!--Sidebar left-->
            
            <div class="col-sm-3 col-md-3 col-lg-3 col-xs-6 sidebar pl-0">
                <div class="inner-sidebar mr-3">
                    
                    <!--Image Avatar-->
                    {{-- <div class="avatar text-center">
                        <img src="assets/img/client-img4.png" alt="" class="rounded-circle" />
                        <p><strong>Jonathan Clarke</strong></p>
                        <span class="text-primary small"><strong>UI/UX Designer</strong></span>
                    </div> --}}
                    <!--Image Avatar-->

                    <!--Sidebar Navigation Menu-->
                    <div class="sidebar-menu-container">
                        <ul class="sidebar-menu pt-4 mb-4">
                            @if(Auth::user()->name == 'admin')
                            {{-- <li class="parent">
                                <a href="widgets.html" class=""><i class="fa fa-puzzle-piece mr-3"></i>
                                    <span class="none">Dashboard </span>
                                </a>
                            </li>
                            <li class="parent">
                                <a href="widgets.html" class=""><i class="fas fa-chart-line mr-3"></i> 
                                    <span class="none"> Daily Report </span>
                                </a>
                            </li> --}}
                            <li class="parent">
                                <a href="{{ route('carpenter.index') }}" class=""><i class="fas fa-hammer mr-3"></i>
                                    <span class="none">Carpenters </span>
                                </a>
                            </li>
                            <li class="parent">
                                <a href="{{ route('item.index') }}" class=""><i class="fas fa-cubes mr-3"></i>
                                    <span class="none">Items </span>
                                </a>
                            </li>
                            <li class="parent">
                                <a href="{{ route('category.index') }}" class=""><i class="fas fa-tags mr-3"></i>
                                    <span class="none">Category </span>
                                </a>
                            </li>
                            
                            <li class="parent">
                                <a href="#" onclick="toggle_menu('ecommerce'); return false" class=""><i class="fa fa-shopping-cart mr-3"></i>
                                    <span class="none">Order <i class="fa fa-angle-down pull-right align-bottom"></i></span>
                                </a>
                                <ul class="children" id="ecommerce">
                                    <li class="child"><a href="{{ route('orderlist.index')}}" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Order List</a></li>
                                    <li class="child"><a href="{{ route('carpenterorder.index')}}" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Carpenters Order</a></li>
                                    <li class="child"><a href="{{ url('/dynamic_pdf/') }}" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Invoice</a></li>
                                    <li class="child"><a href="{{ route('orderconfirm.index')}}" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Order Confirm</a></li>
                                    @else
                                    <li class="child"><a href="{{ route('orderconfirm.index')}}" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Order Confirm</a></li>
                                </ul>
                            </li>
                            @endif
                        </ul>
                    </div>
                    <!--Sidebar Naigation Menu-->
                 
                </div>
            </div>
            
            <!--Sidebar left-->
            <div class="col-sm-9 col-md-9 col-lg-9 col-xs-6 main-panel px-5 pt-3 pl-0">
                {{ $slot }}

                <!--Footer-->
                <div class="row mt-5 mb-4 footer">
                    <div class="col-sm-8">
                        <span>&copy; All rights reserved 2019 designed by <a class="text-info" href="#">A-Fusion</a></span>
                    </div>
                    <div class="col-sm-4 text-right">
                        <a href="#" class="ml-2">Contact Us</a>
                        <a href="#" class="ml-2">Support</a>
                    </div>
                </div>
                <!--Footer-->

            </div>
        </div>

        <!--Main Content-->

    </div>

    <!--Page Wrapper-->

    <!-- Page JavaScript Files-->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    {{-- <script src="{{assets/js/jquery-1.12.4.min.js}}"></script> --}}
    <!--Popper JS-->
    <script src="{{asset('js/popper.min.js')}}"></script>
    <!--Bootstrap-->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!--Sweet alert JS-->
    <script src="{{asset('js/sweetalert.js')}}"></script>
    <!--Progressbar JS-->
    <script src="{{asset('js/progressbar.min.js')}}"></script>
    <!--Datatable-->
    <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/dataTables.bootstrap4.min.js')}}"></script>
    <!--Bootstrap Calendar JS-->
    <script src="{{asset('js/calendar/bootstrap_calendar.js')}}"></script>
    <script src="{{asset('js/calendar/demo.js')}}"></script>
    <!--Bootstrap Calendar-->

    <!--Custom Js Script-->
    <script src="{{asset('js/custom.js')}}"></script>
    <!--Custom Js Script-->
    <script>
        $("#productList").DataTable();
    </script>
  </body>
</html>
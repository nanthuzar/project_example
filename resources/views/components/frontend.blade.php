<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>Shwe Tha Myae Pin</title>

    <link rel="stylesheet" href="{{asset('plugin/style.css')}}">    
    <link rel="stylesheet" href="{{asset('plugin/bootstrap4/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugin/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugin/icofont/icofont.min.css')}}">
     <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css') }}" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:wght@400;600&family=Libre+Baskerville&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Zilla+Slab&display=swap" rel="stylesheet">
    <!-- AOS -->
    <link rel="stylesheet"  href="https://unpkg.com/aos@next/dist/aos.css">

</head>
<body>
    
    <!-- start of header -->
{{-- <div class="container {{ Request::segment(1) === NULL ? '':'topbar-inner-pages'}}"> --}}
    {{-- <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#"><img src="{{ asset('photo/logo.png') }}" width="50px" height="50px" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav">
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="far fa-user px-2 fa-2x mt-1"></i>
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @guest
                            <a class="dropdown-item" href="{{ route('login')}}"><i class="far fa-user px-2 mt-1 "><span class="mx-2">Login</span></i></a>
                            <a class="dropdown-item" href="{{ route('register')}}"><i class="far fa-user px-2 mt-1"><span class="mx-2">Register</span></i></a>
                            @else --}}
                            {{-- <div class="dropdown-divider"></div> --}}
                            {{-- <p>You are a {{ Auth::user()->name }}</p>
                            <a class="dropdown-item" href="#"><i class="far fa-user px-2 mt-1"><span class="mx-2">Account</span></i></a>
                            <a class="dropdown-item" href="javascript:void(0)" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="far fa-user px-2 mt-1"><span class="mx-2">Logout</span></i></a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                            </form>
                        </div>
                    </li>
                    @endif
                    <li><a href="{{ route('frontend.cart') }}" id="shoppingIcon" class="cart mx-3"><i class="fas fa-shopping-cart fa-2x"></i></a>
                    <span id="count" class="count">0</span></li>
                    
            </ul>
                <form class="form-inline">
                    <input type="text" class="searchTerm" placeholder="Search">
                        <button type="submit" class="searchButton">
                        <i class="icofont-search-2"></i>
                    </button>
                </form>
        </div>
    </nav> --}}
{{-- </div> --}}          
    <!-- end of header -->

    <div class="header {{ Request::segment(1) === NULL ? '':'topbar-inner-pages'}}" >
     <div class="container py-2">
        <div class="row">
           <div class="col-md-12 col-lg-3 col-12 text-center"> 
              <a class="navbar-brand text-dark" href="#"><img src="{{asset('photo/logo.png')}}" width="50px" height="50px" alt="">ရွှေသမှဲ့ပင် (ဝါးဓနိ)</a>
           </div>
           <div class="col  col-md-10 col-lg-3  col-sm-10 my-2 p-1 bg-lightshadow-sm my-2">
             <div class="input-group mb-3">
                 <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="icofont-search-2"></i></span>
                 </div>
                 <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
              </div>                  
           </div>
           <div class="col-md-6 col-lg-3 col-12  px-5 mt-3 mb-2 text-center signin">
              <a href="#" style="text-decoration: none; color:black;" ><i class="fa fa-user "></i> Sign or Create Account  </a>
              <div class="dropdown-content">
                 @guest
                 <a class="dropdown-item" href="{{ route('login')}}"><i class="far fa-user px-2 mt-1 "><span class="mx-2">Login</span></i></a>
                 <a class="dropdown-item" href="{{ route('register')}}"><i class="far fa-user px-2 mt-1"><span class="mx-2">Register</span></i></a>
                 @else
                 <p>You are a {{ Auth::user()->name }}</p>
                 <a class="dropdown-item" href="#"><i class="far fa-user px-2 mt-1"><span class="mx-2">Account</span></i></a>
                 <a class="dropdown-item" href="{{ route('frontend.purchase')}}"><i class="fas fa-clipboard-list px-2 mt-1"></i><span class="mx-2">Purchase History</span></i></a>
                 <a class="dropdown-item" href="javascript:void(0)" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="far fa-user px-2 mt-1"><span class="mx-2">Logout</span></i></a>
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                 </form>
                 @endif
              </div>
           </div>
           <div class="col-md-6 col-lg-3 col-12 px-5 mt-3 mb-2 text-center"> 
              <a href="{{ route('frontend.cart') }}" id="shoppingIcon" class="cart" style="text-decoration: none; color:black;" ><i class="fa fa-shopping-cart "></i><sup id="count" class="count"> 0 </sup> Shopping Cart </a>

           </div>
        </div>
     </div>
    </div>




    <!-- start of navbar -->
    {{-- <nav class="navbar navbar-expand-lg navbar-light shadow my-3 {{ Request::segment(1) === NULL ? '':'topbar-inner-pages'}}" id="navone">
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mt-2 mt-lg-0 mx-auto">
                <li class="nav-item active px-4">
                    <a class="nav-link" href="{{ route('frontend.index')}}">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item px-4">
                    <a class="nav-link" href="{{ route('frontend.product')}}">Items</a>
                </li>
                <li class="nav-item px-4">
                    <a class="nav-link" href="{{ route('frontend.about')}}">About</a>
                </li>
                <li class="nav-item px-4">
                    <a class="nav-link" href="{{ route('frontend.contact')}}">Contact</a>
                </li>
            </ul>
        </div>
    </nav> --}}
    <!-- end of navbar -->


    <nav class="navbar navbar-expand-lg navbar-light hadow{{ Request::segment(1) === NULL ? '':'topbar-inner-pages'}}" id="navone">
         <div class="container-fluid">
            <button class="navbar-toggler ms-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav mx-auto">
                @guest
                  <li class="nav-item active px-4">
                     <a class="nav-link" href="{{ route('frontend.index')}}">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item px-4">
                     <a class="nav-link" href="{{ route('frontend.product')}}">Items</a>
                  </li>
                  <li class="nav-item px-4">
                     <a class="nav-link" href="{{ route('frontend.about')}}">About</a>
                  </li>
                  <li class="nav-item px-4">
                     <a class="nav-link" href="{{ route('frontend.contact')}}">Contact</a>
                  </li>
                  @else
                  <li class="nav-item active px-4">
                     <a class="nav-link" href="{{ route('frontend.index')}}">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item px-4">
                     <a class="nav-link" href="{{ route('frontend.product')}}">Items</a>
                  </li>
                  <li class="nav-item px-4">
                     <a class="nav-link" href="{{ route('frontend.about')}}">About</a>
                  </li>
                  <li class="nav-item px-4">
                     <a class="nav-link" href="{{ route('frontend.contact')}}">Contact</a>
                  </li>
                  <li class="nav-item px-4">
                     <a class="nav-link" href="{{ route('frontend.purchase')}}">Purchase History</a>
                  </li>
                  @endif
               </ul>
            </div>
         </div>
      </nav>   


    <main style="background-color:#d3d3d3;">
        {{ $slot }}
    </main>

    
   {{--  <div class="container" id="item">
        <div class="row">            
            <div class="col-md-12 col-12 col-sm-12 col-lg-12">
                {{ $slot }}
            </div>
        </div>
    </div> --}}
    <!-- end of content -->

    {{--  start of slideshow 

    <div class="container my-5">
      <h2 class="text-center">Our Partners</h2>
      <hr class="divided mb-5">
       <section class="customer-logos slider">
          <div class="slide"><img src="https://image.freepik.com/free-vector/luxury-letter-e-logo-design_1017-8903.jpg"></div>
          <div class="slide"><img src="https://image.freepik.com/free-vector/3d-box-logo_1103-876.jpg"></div>
          <div class="slide"><img src="https://image.freepik.com/free-vector/blue-tech-logo_1103-822.jpg"></div>
          <div class="slide"><img src="https://image.freepik.com/free-vector/colors-curl-logo-template_23-2147536125.jpg"></div>
          <div class="slide"><img src="https://image.freepik.com/free-vector/abstract-cross-logo_23-2147536124.jpg"></div>
          <div class="slide"><img src="https://image.freepik.com/free-vector/football-logo-background_1195-244.jpg"></div>
          <div class="slide"><img src="https://image.freepik.com/free-vector/background-of-spots-halftone_1035-3847.jpg"></div>
          <div class="slide"><img src="https://image.freepik.com/free-vector/retro-label-on-rustic-background_82147503374.jpg"></div>
       </section>
    </div>

    <! end of slideshow> --}}

    <!-- start of footer -->
  {{--   <div class="container my-4" id="contact">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-2">
                        <i class="fas fa-truck fa-4x"></i>
                    </div>
                    <div class="col-md-4">
                        <p>Delivery</p>
                    </div>
                    <div class="col-md-2">
                        <i class="fas fa-mobile-alt fa-4x"></i>
                    </div>
                    <div class="col-md-4">
                        <p>09773907753<br>09269822182<br>0973074512</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="list-inline">
                            <li class="list-inline-item mr-2">Payments</li>
                            <li class="list-inline-item mx-2"><img src="{{asset('photo/1.png')}}" width="50px" height="50px"></li>
                            <li class="list-inline-item mx-2"><img src="{{asset('photo/2.png')}}" width="50px" height="50px"></li>
                            <li class="list-inline-item mx-2"><img src="{{asset('photo/3.png')}}" width="100px" height="50px"></li>
                            <li class="list-inline-item mx-2"><img src="{{asset('photo/4.png')}}" width="100px" height="50px"></li>
                        </ul>
                    </div>
                </div>
            </div>          
        </div>
        <div class="row">
            <div class="col-md-6">
                <p>Copyright &copy; 2021</p>
            </div>
            <div class="col-md-6 text-right">
                <p>Developed by Nan Thu Zar Aung & Khine Moe Lwin</p>
            </div>
        </div>
    </div> --}}
    <!-- end of footer -->

    <div class="container-fluid" style="background-color: #aaaaaf;">
         <div class="row mx-5 py-4">
            <div class="col col-sm-6 col-lg-4 mt-3">
               <div class="row">
                  <div class="col-4 text-center">
                     <i class="fas fa-truck fa-3x"></i>
                  </div>
                  <div class="col-8">
                     <h5 >Delivery</h5>
                  </div>
               </div>
            </div>
            <div class="col col-sm-6 col-lg-4 mt-3">
               <div class="row">
                  <div class="col-4 text-center">
                     <i class="fas fa-mobile-alt fa-3x"></i>
                  </div>
                  <div class="col-8">
                     <p><a href="tel:091111111" class="text-dark">09773907753</a><br><a href="tel:091111111" class="text-dark">0973074512</a></p>
                  </div>
               </div>
            </div>
            <div class="col col-12 col-lg-4 mt-3">
               <div class="row">
                  <div class="col-4 text-center">
                     <h5>Payments</h5>
                  </div>
                  <div class="col-2 px-3"><img src="{{asset('photo/1.png')}}" width="50px" height="50px"></div>
                  <div class="col-2 px-3"><img src="{{asset('photo/2.png')}}" width="50px" height="50px"></div>
                  <div class="col-2 px-3"><img src="{{asset('photo/3.png')}}" width="50px" height="50px"></div>
                  <div class="col-2 px-3"><img src="{{asset('photo/4.png')}}" width="50px" height="50px"></div>
                </div>
            </div>
        </div>
    </div>



    <footer class="container-fluid bg-dark text-center">
         <div class="py-4">
            {{-- 
            <p class="text-secondary">
               <a href="tel:091111111"><i class="fas fa-mobile-alt fa-2x mx-2 text-secondary"></i></a>
               <a href="http://facebook.com"><i class="fab fa-facebook fa-2x mx-2 text-secondary"></i></a>
               <a href="http://viber.com"><i class="fab fa-viber fa-2x mx-2 text-secondary" ></i></a>
               <a href="http://gmail.com"><i class="fas fa-envelope-open-text fa-2x mx-2 text-secondary"></i></a>
            </p>
            --}}
            <div class="row">
               <div class="col col-xs-12 col-12 col-md-4 text-center text-light">
                  CopyRight @ 2021
               </div>
               <div class="col col-12 col-md-4 offset-md-4 text-center text-light">
                  Developed by Nan Thuzar Aung and Khine Moe Lwin
               </div>
            </div>
         </div>
      </footer>
    

    <script type="text/javascript" src="{{ asset('plugin/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugin/bootstrap4/js/bootstrap.bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugin/bootstrap4/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/product-carousel.js') }}"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <script type="text/javascript" src="{{ asset('plugin/cart.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugin/calculator.js') }}"></script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <script type="text/javascript">
        $(document).ready(function(){
            $('.customer-logos').slick({
                slidesToShow: 5,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1500,
                arrows: false,
                dots: false,
                pauseOnHover: false,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 4
                    }
                }, {
                    breakpoint: 520,
                    settings: {
                        slidesToShow: 3
                    }
                }]
            });
        });
    </script>
    
</body>
</html>
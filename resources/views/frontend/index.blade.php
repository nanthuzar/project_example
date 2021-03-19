<x-frontend>

	<!-- carousel -->

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" height="400px" src="{{ asset('photo/carousel1.jpg') }}" alt="First slide">
            <div class="carousel_text px-2" style="color:#023e04;">
                <h4 class="fonts">Welcome To Our Shop</h4>
                <h1 class="fonts">Shwe Tha Mae Pin</h1>
                <p class="my-4">A good varity of wooden door and window can be fond in our shop.</p>
                <button class="btn btn-outline-primary">Shop Now</button>
             </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" height="400px" src="{{ asset('photo/carousel2.jpg') }}" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" height="400px" src="{{ asset('photo/carousel3.jpg') }}" alt="Third slide">
          <div class="carousel_text d-none d-md-block" style="color:#FFD700;">
              <h1 class="fonts">Customized size can also order.</h1>
              <p class="mt-5">For your sweet home decoration...</p>
              <button class="btn btn-outline-primary mt-2">Shop Now</button>
          </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
      {{-- <div class="carousel slide carousel-fade" data-bs-ride="carousel" id="Carousel">
         <div class="carousel-inner">
            <div class="carousel-item active">
               <img src="h1.jpg" class="img-fluid w-100">
               <div class="carousel_text ">
                  <h4 class="fonts">Welcome To Our Shop</h4>
                  <h1 class="fonts">Shwe Tha Myae Pin</h1>
                  <p class="my-4">A good varity of wooden door and window can be fond in our shop.</p>
                  <button class="btn btn-outline-primary">Shop Now</button>
               </div>
            </div>
            <div class="carousel-item">
               <img src="door111.jpg" class="img-fluid w-100">
               <div class="carousel_text d-none d-md-block">
                  <h1 class="fonts">Customized size can also order.</h1>
                  <p class="mt-5">For your sweet home decoration...</p>
                  <button class="btn btn-outline-primary mt-2">Shop Now</button>
               </div>
            </div>
         </div>
         <a href="#Carousel" class="carousel-control-prev" data-bs-slide="prev">
         <span class="carousel-control-prev-icon"></span>
         </a>
         <a href="#Carousel" class="carousel-control-next" data-bs-slide="prev">
         <span class="carousel-control-next-icon"></span>
         </a>
      </div> --}}
      <!-- end carousel -->

      <!-- item start-->
      <div class="container my-5">
      	<h2 class="text-center title" data-aos="fade-up" data-aos-delay="500">Newest Items</h2>
        <hr class="divided mb-5" data-aos="fade-up" data-aos-delay="500">
         <div class="row mb-5" data-aos="fade-up" data-aos-delay="500">
	         @foreach($newitems as $newitem)
	         <div class="col col-6 col-md-4 col-lg-3 my-2">
	         
		        <div class="card h-100 box">
	                <img class="card-img-top" src="{{ $newitem->photo }}" width="100%" height="300px" alt="Card image cap">
	                
	                <div class="card-body">
	                    <h5 class="card-title">{{ $newitem->name}}</h5>
	                    <p class="card-text">{{ $newitem->description}}</p>
	                </div>
	                <div class="card-footer">
	                    <ul class="list-inline text-center">
	                        <li class="list-inline-item"><a class="btn btn-warning detailbtn" href="{{ route('frontend.detail', $newitem->id) }}"><i class="fas fa-eye"></i></a></li>
	                        <li class="list-inline-item"><a class="btn btn-success addtoCart" data-id="{{ $newitem->id }}" data-name="{{ $newitem->name }}" data-price="{{ $newitem->price }}" data-photo="{{ asset($newitem->photo) }}" href=""><i class="fas fa-cart-arrow-down"></i></a></li>
	                    </ul>                                    
	                </div>
	            </div> 
	         </div>
	         @endforeach
         </div>
         <h2 class="text-center pt-5 title" data-aos="fade-up" data-aos-delay="500">Popular Items</h2>
         <hr class="divided mb-5" data-aos="fade-up" data-aos-delay="500">
         <div class="row" data-aos="fade-up" data-aos-delay="500">
         @foreach($popularitems as $popularitem)
         <div class="col col-6 col-md-4 col-lg-3 my-2">
         
	        <div class="card h-100">
                <img class="card-img-top" src="{{ $popularitem->photo }}" width="100%" height="300px" alt="Card image cap">
                
                <div class="card-body">
                    <h5 class="card-title">{{ $popularitem->name}}</h5>
                    <p class="card-text">{{ $popularitem->description}}</p>
                </div>
                <div class="card-footer">
                    <ul class="list-inline text-center">
                        <li class="list-inline-item"><a class="btn btn-warning" href="{{ route('frontend.detail', $popularitem->id) }}"><i class="fas fa-eye"></i></a></li>
                        <li class="list-inline-item"><a class="btn btn-success addtoCart" data-id="{{ $popularitem->id }}" data-name="{{ $popularitem->name }}" data-price="{{ $popularitem->price }}" data-photo="{{ asset($popularitem->photo) }}" href=""><i class="fas fa-cart-arrow-down"></i></a></li>
                    </ul>                                    
                </div>
            </div>
            
         </div>
         @endforeach
         </div>
         <h2 class="text-center pt-5 title" data-aos="fade-up" data-aos-delay="500">Random Items</h2>
         <hr class="divided mb-5" data-aos="fade-up" data-aos-delay="500">
         <div class="row mb-5" data-aos="fade-up" data-aos-delay="500">
	         @foreach($randomitems as $randomitem)
	         <div class="col col-6 col-md-4 col-lg-3 my-2">
	         
		        <div class="card h-100 box">
	                <img class="card-img-top" src="{{ $randomitem->photo }}" width="100%" height="300px" alt="Card image cap">
	                
	                <div class="card-body">
	                    <h5 class="card-title">{{ $randomitem->name}}</h5>
	                    <p class="card-text">{{ $randomitem->description}}</p>
	                </div>
	                <div class="card-footer">
	                    <ul class="list-inline text-center">
	                        <li class="list-inline-item"><a class="btn btn-warning detailbtn" href="{{ route('frontend.detail', $randomitem->id) }}"><i class="fas fa-eye"></i></a></li>
	                        <li class="list-inline-item"><a class="btn btn-success addtoCart" data-id="{{ $randomitem->id }}" data-name="{{ $randomitem->name }}" data-price="{{ $randomitem->price }}" data-photo="{{ asset($randomitem->photo) }}" href=""><i class="fas fa-cart-arrow-down"></i></a></li>
	                    </ul>                                    
	                </div>
	            </div> 
	         </div>
	         @endforeach
         </div>         
      </div>
      <!-- item end -->


      <!-- project start -->
      {{-- <div class="container" id="project">
         <h1 class="text-center">Our Projects</h1>
         <div class="row">
            <div class="col col-6 col-md-4 col-lg-3 my-2">
               <img src="w1.jpg" class="img-fluid">
            </div>
            <div class="col col-6 col-md-4 col-lg-3  my-2">
               <img src="w2.jpg" class="img-fluid">
            </div>
            <div class="col col-6 col-md-4 col-lg-3 my-2">
               <img src="w3.jpg" class="img-fluid">
            </div>
            <div class="col col-6 col-md-4 col-lg-3 my-2">
               <img src="w4.jpg" class="img-fluid">
            </div>
            <div class="col col-6 col-md-4 col-lg-3 my-2">
               <img src="w5.jpg" class="img-fluid">
            </div>
            <div class="col col-6 col-md-4 col-lg-3 my-2">
               <img src="w6.jpg" class="img-fluid">
            </div>
            <div class="col col-6 col-md-4 col-lg-3 my-2">
               <img src="w7.jpg" class="img-fluid">
            </div>
            <div class="col col-6 col-md-4 col-lg-3 my-2">
               <img src="w9.jpg" class="img-fluid">
            </div>
            <div class="col col-6 col-md-4 col-lg-3 my-2">
               <img src="w10.jpg" class="img-fluid">
            </div>
            <div class="col col-6 col-md-4 col-lg-3 my-2">
               <img src="w4.jpg" class="img-fluid">
            </div>
            <div class="col col-6 col-md-4 col-lg-3 my-2">
               <img src="w5.jpg" class="img-fluid">
            </div>
            <div class="col col-6 col-md-4 col-lg-3 my-2">
               <img src="w12.jpg" class="img-fluid">
            </div>

         </div>
      </div> --}}

      <!-- carousel -->
      <div style="background-image: linear-gradient(180deg, #fafafa,#dddddd);">
         <div class="container">
            <div class="carousel slide py-5 mt-5" data-bs-ride="carousel" id="Carousel1">
               <h2 class="text-center mt-5 title" data-aos="fade-up" data-aos-delay="500">Testimonials</h2>
               <hr class="divided mb-5" data-aos="fade-up" data-aos-delay="500">
               <div class="carousel-inner" data-aos="fade-up" data-aos-delay="500">
                  <div class="carousel-item active">
                     <div class="user offset-2 col-8 text-center">
                        <div class="user_image">
                           <img src="{{ asset('photo/client4.png') }}" style="width: 180px; height:180px;" class="rounded-circle">
                        </div>
                        <div class="user_text">
                           <p class="my-4">Good afternoon. I am very pleased with the quality of the work of your employee representing your wonderful company. Thanks a lot.</p>
                        </div>
                        <div class="user_name">
                           Helen
                        </div>
                        <div class="user_desk">
                           Designer
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="user offset-2 col-8 text-center">
                        <div class="user_image">
                           <img src="client6.jpg" style="width: 180px; height:180px;" class="rounded-circle">
                        </div>
                        <div class="user_text">
                           <p class="mt-5">All issues are resolved promptly. In communication, the employees are pleasant, helpful. Always offer new ideas, new ways to develop, improve our project.</p>
                        </div>
                        <div class="user_name">
                           John
                        </div>
                        <div class="user_desk">
                           Designer
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="user offset-2 col-8 text-center">
                        <div class="user_image">
                           <img src="" style="width: 180px; height:180px;" class="rounded-circle">
                        </div>
                        <div class="user_text">
                           <p class="mt-5">Excellent client manager. He is always accurate, all promises are fulfilled, all questions get answers, the company presents very attentive and positive approach.</p>
                        </div>
                        <div class="user_name">
                           Robert
                        </div>
                        <div class="user_desk">
                           Designer
                        </div>
                     </div>
                  </div>
                  <div class="carousel-control">
                     <a href="#Carousel1" class="carousel-control-prev" data-bs-slide="prev">
                     <span class="carousel-control-prev-icon"></span>
                     </a>
                     <a href="#Carousel1" class="carousel-control-next" data-bs-slide="prev">
                     <span class="carousel-control-next-icon"></span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end carousel -->

	<!-- start of slideshow -->

    <div class="container py-5">
      <h2 class="text-center mt-5 title" data-aos="fade-up" data-aos-delay="500">Our Partners</h2>
      <hr class="divided mb-5" data-aos="fade-up" data-aos-delay="500">
       <section class="customer-logos slider mb-5" data-aos="fade-up" data-aos-delay="500">
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

    <!-- end of slideshow -->
</x-frontend>
<x-frontend>

    {{-- Start of Modal --}}
    {{-- @if($item->category_id == 2) --}}
    <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Choose Size</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                ) 
                <div class="modal-body">
                
                ၁ ပေ ပတ်လည် (၁ ပေ x ၁ ပေ) = {{ $item->oneft_price }}
               
                <br>
               <form>
                    <div class="form-group row my-4">
                        <label for="staticEmail" class="col-sm-4 col-form-label">အလျား (ပေ)</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="length">
                        </div>  
                    </div>
                    <div class="form-group row my-4">
                        <label for="inputPassword" class="col-sm-4 col-form-label">အနံ (ပေ)</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="width"> 
                        </div>
                    </div>
                    <div class="form-group row my-4">
                        <label for="inputPassword" class="col-sm-4 col-form-label">တန်ဖိုး</label>
                        <div class="col-sm-6">
                            <p class="total"></p> 
                        </div>
                    </div>
                </form>
                </div>
                {{-- @endif --}}
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    {{-- @if($item->category_id == 2) --}}
                    <button type="button" class="btn btn-primary btnsave" data-oneft_price="{{ $item->oneft_price }}">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="Modalthree" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Choose Size</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                 
                <div class="modal-body">
                
                ၁ ပေ ပတ်လည် (၁ ပေ x ၁ ပေ) = {{ $item->oneft_price }}
               
                <br>
               <form>
                    <div class="form-group row my-4">
                        <label for="staticEmail" class="col-sm-4 col-form-label">အလျား (ပေ)</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="length_three">
                        </div>  
                    </div>
                    <div class="form-group row my-4">
                        <label for="inputPassword" class="col-sm-4 col-form-label">အနံ (ပေ)</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="width_three"> 
                        </div>
                    </div>
                    <div class="form-group row my-4">
                        <label for="inputPassword" class="col-sm-4 col-form-label">တန်ဖိုး</label>
                        <div class="col-sm-6">
                            <p class="total"></p> 
                        </div>
                    </div>
                </form>
                </div>
                {{-- @endif --}}
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                {{-- @if($item->category_id == 2) --}}
                    <button type="button" class="btn btn-primary btnsave_three" data-oneft_price="{{ $item->oneft_price }}">Save changes</button>
                
                {{-- @else
                    <button type="button" class="btn btn-primary btnsaveone" data-oneft_price="{{ $item->oneft_price }}">Save changes 2</button>
                @endif --}}
                </div>
            </div>
        </div>
    </div>
    {{-- @endif --}}
    {{-- End of Modal --}}

    <div class="col-sm-9 col-xs-12 content pt-3 pl-0 py-5 px-5 offset-md-1 offset-lg-1">
        <h5 class="mb-0" ><strong>Product detail</strong></h5>
        <span class="text-secondary">Ecommerce <i class="fa fa-angle-right"></i> Product detail</span>
        
        <div class="mt-4 mb-4 p-3 border shadow-sm lh-sm" data-aos="fade-up" data-aos-delay="500" style="background-color:#e5e4e2">
            <!--Product detail-->
            <div class="product-list">
                {{-- @for($i=0; $i<12; $i++) --}}
                {{-- @foreach($data[0] as $item) --}}
                <div class="row">
                    <div class="col-sm-5 col-12">
                        <div class="slider-for border">
                            <img src="{{ $item->photo }}" class="img-fluid" alt="">
                        </div>
                    </div>
                    
                    <div class="col-sm-7 col-12">
                        <div class="p-2">
                            <div class="text-right">
                                <p class="small"><strong>Availability</strong>: <span class="text-primary">In Stock</span></p>
                            </div>
                            
                            <h3 class="mb-3" id="item_name"> Item Name: {{$item->name}}</h3>
                            <h3 class="mb-3" id="customize_item_name"></h3>

                            <div class="rate ">
                                {{-- <div class="col-12 col-sm-12 col-md-12 col-lg-12"> --}}
                                    <input type="radio" id="star1" name="rate" value="1" />
                                    <label for="star1" title="text">1 stars</label>
                                    <input type="radio" id="star2" name="rate" value="2" />
                                    <label for="star2" title="text">2 stars</label>
                                    <input type="radio" id="star3" name="rate" value="3" />
                                    <label for="star3" title="text">3 stars</label>
                                    <input type="radio" id="star4" name="rate" value="4" />
                                    <label for="star4" title="text">4 stars</label>
                                    <input type="radio" id="star5" name="rate" value="5" />
                                    <label for="star5" title="text">5 star</label>  
                                {{-- </div> --}}
                            </div>
                            

                            
                                <h4 class="item_price col-md-12">Price: {{$item->price}}</h4>
                                <h4 class="calculation_price"></h4>
                               
                               
                            
                            <hr>

                            <p class="product-slug">Description: {{ $item->description }}</p>
                            <hr>

                            {{-- <div class="col-sm-3 col-6 col-md-4 pl-0 pr-4 mb-4 mt-4" id="detailamount">
                                <div class="input-group mt-2">
                                    <div class="input-group-append">
                                        <button class="btn btn-secondary dec" type="button"><i class="fa fa-minus"></i></button>
                                    </div>
                                    <input type="text" size="3" class="form-control bg-light text-center" readonly value="" maxlength="3">
                                    <div class="input-group-append">
                                        <button class="btn btn-secondary rounded-0 inc" type="button"><i class="fa fa-plus"></i></button>
                                    </div>
                                </div>
                            </div> --}}

                            @if($item->category_id == 1)
                            <div class="addtocart_div">
                                <button type="button" class="btn btn-theme rounded-0 mr-3 px-3 addtoCart" data-id="{{ $item->id }}" data-name="{{ $item->name }}" data-price="{{ $item->price }}" data-photo="{{ asset($item->photo) }}">
                                    <i class="fa fa-shopping-cart mr-3"></i> 
                                    ADD TO CART
                                </button>
                            </div>

                            @elseif($item->category_id == 2)
                                <div class="form-check my-2">
                                    <button class="btn btn-outline-primary choose_size">Choose Size</button>
                                </div>

                                <div class="addtocart_div">
                                    <button type="button" class="btn btn-theme rounded-0 mr-3 px-3 addtoCart" data-id="{{ $item->id }}" data-name="{{ $item->name }}" data-price="{{ $item->price }}" data-photo="{{ asset($item->photo) }}">
                                        <i class="fa fa-shopping-cart mr-3"></i> 
                                        ADD TO CART
                                    </button>
                                </div>

                                <div class="addtocart_divtwo">
                                <button type="button" class="btn btn-theme rounded-0 mr-3 px-3 addtoCarttwo" data-id="{{ $item->id }}"  data-photo="{{ asset($item->photo) }}" data-oneft_price="{{ $item->oneft_price }}" >
                                    <i class="fa fa-shopping-cart mr-3"></i> 
                                    ADD TO CART 2
                                </button>
                                </div>

                                 <ul class="list-inline">
                                    <div class="calculator_div">
                                        <li class="list-inline-item">
                                            <button class="btn btn-outline-primary" data-toggle="modal" data-target="#Modal" href=""><i class="fas fa-calculator"></i></button>
                                        </li>
                                        <li class="list-inline-item">
                                            <button class="btn btn-outline-danger cancel" href=""><i class="fas fa-ban"></i></button>
                                        </li>
                                    </div>                                     
                                 </ul>
                            {{-- @endif --}}

                            @else
                                <div class="form-check my-2">
                                    <button class="btn btn-outline-primary choose_size_two">Choose Size 2</button>
                                </div>
                                <div class="addtocart_divthree">
                                    <button type="button" class="btn btn-theme rounded-0 mr-3 px-3 addtoCartthree" data-id="{{ $item->id }}"  data-photo="{{ asset($item->photo) }}" data-oneft_price="{{ $item->oneft_price }}" >
                                        <i class="fa fa-shopping-cart mr-3"></i> 
                                        ADD TO CART 3
                                    </button>
                                </div>
                                <ul class="list-inline">
                                    <div class="calculator_divthree">
                                        <li class="list-inline-item">
                                            <button class="btn btn-outline-primary" data-toggle="modal" data-target="#Modalthree" href=""><i class="fas fa-calculator"></i></button>
                                        </li>
                                        <li class="list-inline-item">
                                            <button class="btn btn-outline-danger cancel" href=""><i class="fas fa-ban"></i></button>
                                        </li>
                                    </div>                                     
                                 </ul>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <!--Product Detail-->


        </div>

        <!--Footer-->
        {{-- <div class="row mt-5 mb-4 footer">
            <div class="col-sm-8">
                <span>&copy; All rights reserved 2019 designed by <a class="text-info" href="#">A-Fusion</a></span>
            </div>
            <div class="col-sm-4 text-right">
                <a href="#" class="ml-2">Contact Us</a>
                <a href="#" class="ml-2">Support</a>
            </div>
        </div> --}}
    <!--Footer-->
    </div>

</x-frontend>
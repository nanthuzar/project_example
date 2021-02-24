<x-frontend>

<div class="col-sm-9 col-xs-12 content pt-3 pl-0">
                <h5 class="mb-0" ><strong>Product detail</strong></h5>
                <span class="text-secondary">Ecommerce <i class="fa fa-angle-right"></i> product detail</span>
                
                <div class="mt-4 mb-4 p-3 bg-white border shadow-sm lh-sm">
                    <!--Product detail-->
                    <div class="product-list">
                        {{-- @for($i=0; $i<12; $i++) --}}
                        {{-- @foreach($data[0] as $item) --}}
                        <div class="row">
                            <div class="col-sm-5 col-12">
                                <div class="slider-for border">
                                    <img src="{{ $item->photo }}" alt="">
                                </div>
                            </div>
                            
                            <div class="col-sm-7 col-12">
                                <div class="p-2">
                                    <div class="text-right">
                                        <p class="small"><strong>Availability</strong>: <span class="text-primary">In Stock</span></p>
                                    </div>
                                    
                                    <h3 class="mb-3"> Item Name: {{$item->name}}</h3>

                                    <div class="mt-3 mb-4">
                                        <select id="example">
                                            <option value="1">1</option>
                                            <option value="2" selected>2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>

                                    <h4>Price: {{$item->price}}</h4>
                                    <hr>

                                    <p class="product-slug">Description: {{ $item->description }}</p>
                                    <hr>

                                    <div class="col-sm-3 col-6 col-md-4 pl-0 pr-4 mb-4 mt-4">
                                        <div class="input-group mt-2">
                                            <div class="input-group-append">
                                                <button class="btn btn-secondary" type="button"><i class="fa fa-minus"></i></button>
                                            </div>
                                            <input type="text" size="3" class="form-control bg-light text-center" readonly value="1" maxlength="3">
                                            <div class="input-group-append">
                                                <button class="btn btn-secondary rounded-0" type="button"><i class="fa fa-plus"></i></button>
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <button type="button" class="btn btn-theme rounded-0 mr-3 px-3 addtoCart" data-id="{{ $item->id }}" data-name="{{ $item->name }}" data-price="{{ $item->price }}" data-photo="{{ asset($item->photo) }}">
                                            <i class="fa fa-shopping-cart mr-3"></i> 
                                            ADD TO CART
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Product Detail-->
                </div>

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

</x-frontend>
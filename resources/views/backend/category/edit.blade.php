<x-backend>
            <h5 class="mb-0" ><strong>Categories</strong></h5>
                <span class="text-secondary">Ecommerce <i class="fa fa-angle-right"></i> categories</span>
                
                <div class="mt-4 mb-4 p-3 bg-white border shadow-sm lh-sm">
                    <!--Product Listing-->
                    <div class="product-list">
                        
                        <div class="row border-bottom mb-4">
                            <div class="col-sm-8 pt-2"></div>
                            <div class="col-sm-4 text-right pb-3">
                                <a class="btn btn-round btn-theme ms-auto" href="{{ route('category.index')}}">
                                    <i class="fas fa-arrow-circle-left"></i>Go Back
                                </a>
                                
                            </div>
                        </div>
                        
                        <form action="{{ route('category.update', $category->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="name_id" class="col-sm-2 col-form-label"> Name </label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control @error('name')is-invalid @enderror"  id="name_id" name="name" value="{{ $category->name }}">
                                            @if($errors->first('name'))
                                            <p class="text-danger">{{ $errors->first('name') }}</p>
                                            @endif
                                        </div>
                                </div>
                            </div>
                            <div class="card-action">
                                <button type="submit" class="btn btn-primary"> <i class="icofont-save"></i> Save </button>
                                <button type="reset" class="btn btn-outline-secondary"> <i class="icofont-close"></i> </i> Cancel </button>
                            </div>
                        </form>
                    </div>
                    <!--/Product Listing-->
                </div>
</x-backend>
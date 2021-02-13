<x-backend>
            <h5 class="mb-0" ><strong>Items</strong></h5>
                <span class="text-secondary">Ecommerce <i class="fa fa-angle-right"></i> items</span>
                
                <div class="mt-4 mb-4 p-3 bg-white border shadow-sm lh-sm">
                    <!--Product Listing-->
                    <div class="product-list">
                        <form action="{{ route('item.update',$item->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <input type="hidden" name="oldphoto" value="{{ $item->photo }}">

                            <div class="row border-bottom mb-4">
                                <div class="col-sm-8 pt-2"></div>
                                <div class="col-sm-4 text-right pb-3">
                                    <a class="btn btn-round btn-theme ms-auto" href="{{ route('item.index')}}">
                                        <i class="fas fa-arrow-circle-left"></i>Go Back
                                    </a>                                    
                                </div>
                            </div>                        
                        
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="codeno" class="col-sm-2 col-form-label"> Code No </label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control"  id="codeno" name="codeno" placeholder="Enter Item's Code Number" value="{{ $item->codeno }}">
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-2 col-form-label"> Name </label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control"  id="name" name="name" placeholder="Enter Item's Name" value="{{ $item->name }}">
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label for="photo"class="col-sm-2 col-form-label" > Photo </label>
                                    <input type="file" name="photo" class="form-control">
                                </div>
                                <div class="form-group row">
                                    <label for="price" class="col-sm-2 col-form-label"> Price </label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" id="price" name="price" placeholder="Enter Item's Price" value="{{ $item->price }}">
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label for="description" class="col-sm-2 col-form-label"> Description </label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control"  id="description" name="description" placeholder="Enter Item's Description" value="{{ $item->description }}">
                                        </div>
                                </div>
                                <div class="form-group">
                                    <label> Category Name </label>
                                    <select class="form-control select2" name="categoryid">
                                        <option value="0"> Choose Category </option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
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
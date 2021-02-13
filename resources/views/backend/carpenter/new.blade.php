<x-backend>
            <h5 class="mb-0" ><strong>Carpenter</strong></h5>
                <span class="text-secondary">Carpenter <i class="fa fa-angle-right"></i> New</span>
                
                <div class="mt-4 mb-4 p-3 bg-white border shadow-sm lh-sm">
                    <!--Product Listing-->
                    <div class="product-list">
                        
                        <div class="row border-bottom mb-4">
                            <div class="col-sm-8 pt-2"><h6 class="mb-4 bc-header">Adding Carpenter</h6></div>
                            <diCarpenterv class="col-sm-4 text-right pb-3">
                                <a class="btn btn-round btn-theme ms-auto" href="{{ route('carpenter.index')}}">
                                    <i class="fas fa-arrow-circle-left"></i>Go Back
                                </a>
                                
                            </div>
                        </div>
                        
                        <form action="{{ route('carpenter.store') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="name_id" class="col-sm-2 col-form-label"> Name </label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control @error('name')is-invalid @enderror"  id="name_id" name="name" value="{{ old('name') }}">
                                            @if($errors->first('name'))
                                            <p class="text-danger">{{ $errors->first('name') }}</p>
                                            @endif
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name_id" class="col-sm-2 col-form-label"> Phone </label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control @error('phone')is-invalid @enderror"  id="name_id" name="phone" value="{{ old('phone') }}">
                                            @if($errors->first('phone'))
                                            <p class="text-danger">{{ $errors->first('phone') }}</p>
                                            @endif
                                        </div>
                                </div>
                                {{-- <div class="form-group row">
                                    <label for="name_id" class="col-sm-2 col-form-label"> Item </label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="itemsid">
                                            <option value="0"> Choose Item </option>
                                            @foreach($items as $item)
                                            <option value="{{($item->id)}}">{{($item->name)}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div> --}}
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
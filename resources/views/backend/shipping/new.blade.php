<x-backend>
            <h5 class="mb-0" ><strong>Shipping</strong></h5>
                <span class="text-secondary">Shipping <i class="fa fa-angle-right"></i> New</span>
                
                <div class="mt-4 mb-4 p-3 bg-white border shadow-sm lh-sm">
                    <!--Product Listing-->
                    <div class="product-list">
                        
                        <div class="row border-bottom mb-4">
                            <div class="col-sm-8 pt-2"><h6 class="mb-4 bc-header">Adding Shipping</h6></div>
                            <div class="col-sm-4 text-right pb-3">
                                <a class="btn btn-round btn-theme ms-auto" href="{{ route('shipping.index')}}">
                                    <i class="fas fa-arrow-circle-left"></i>Go Back
                                </a>
                                
                            </div>
                        </div>
                        
                        <form action="{{ route('shipping.store') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="name_id" class="col-sm-2 col-form-label"> Township </label>
                                        <div class="col-sm-10">
                                            <select class="form-control" name="townshipsid">
                                                <option value="0"> Choose Township </option>
                                                @foreach($townships as $township)
                                                <option value="{{($township->id)}}">{{($township->name)}}</option>
                                                @endforeach
                                            </select>   
                                        </div>
                                </div>
                                <div class="fomr-group row">
                                    <label for="name_id" class="col-sm-2 coll-form-lable">Fee</label>
                                    <div class="col-sm-10">
                                           <input type="text" class="form-control @error('fee')is-invalid @enderror"  id="name_id" name="fee" value="{{ old('fee') }}">
                                        @if($errors->first('fee'))
                                        <p class="text-danger">{{ $errors->first('fee') }}</p>
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
</x-backend>Shipping
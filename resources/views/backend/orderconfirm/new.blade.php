<x-backend>

	<h5 class="mb-0" ><strong>Order Confirmation</strong></h5>
	    <span class="text-secondary">Ecommerce <i class="fa fa-angle-right"></i> Order Confirmation</span>
	    
	    <div class="mt-4 mb-4 p-3 bg-white border shadow-sm lh-sm">
	        <!--Product Listing-->
	        <div class="product-list">
	            <form action="{{ route('orderconfirm.store') }}" method="POST" enctype="multipart/form-data">
	                @csrf
	                <div class="row border-bottom mb-4">
	                    <div class="col-sm-8 pt-2"></div>
	                    <div class="col-sm-4 text-right pb-3">
	                        <a class="btn btn-round btn-theme ms-auto" href="{{ route('orderconfirm.index')}}">
	                            <i class="fas fa-arrow-circle-left"></i>Go Back
	                        </a>
	                    </div>
	                </div>
	                <div class="card-body">
	                    <div class="form-group row">
	                       <label for="codeno" class="col-sm-2 col-form-label"> Carpenter Name </label>
	                       <select class="form-control select2" name="carpentername">
	                            <option value="0"> Choose Name </option>
	                            @foreach($carpenters as $carpenter)
	                                <option value="{{ $carpenter->id }}">{{ $carpenter->name }}</option>
	                            @endforeach
	                        </select>
	                    </div>
	                    <div class="form-group row">
	                        <label for="name" class="col-sm-2 col-form-label"> Item Name </label>
	                        <select class="form-control select2" name="itemname">
	                            <option value="0"> Choose Item </option>
	                            @foreach($items as $item)
	                                <option value="{{ $item->id }}">{{ $item->name }}</option>
	                            @endforeach
	                        </select>
	                    </div>
	                    <div class="form-group row">
	                        <label for="number" class="col-sm-2 col-form-label"> Quantity </label>
	                        <div class="col-sm-10">
	                            <input type="number" class="form-control"  id="qty" name="qty" placeholder="Enter the quantity">
	                        </div>
	                    </div>
	                    <div class="form-group row">
	                        <label for="description" class="col-sm-2 col-form-label"> Confirm Date </label>
	                        <div class="col-sm-10">
	                            <input type="date" class="form-control"  id="confirmdate" name="confirmdate" placeholder="Enter Deadline">
	                        </div>
	                    </div>
	                    <div class="form-group row">
	                        <label for="description" class="col-sm-2 col-form-label"> Status </label>
	                        <select class="form-control select2" name="status">
	                            <option value="0"> Choose Status </option>
	                             @foreach($statuses as $status)
	                                <option value="{{ $status->id }}">{{ $status->name }}</option>
	                            @endforeach
	                        </select>
	                    </div>
	                    <div class="form-group row">
	                        <label for="description" class="col-sm-2 col-form-label"> Due Date </label>
	                        <div class="col-sm-10">
	                            <input type="date" class="form-control"  id="duedate" name="duedate" placeholder="Enter Deadline">
	                        </div>
	                    </div>
	                    <div class="card-action">
	                        <button type="submit" class="btn btn-primary"><i class="icofont-save"></i> Save</button>
	                        <button type="reset" class="btn btn-outline-secondary"><i class="icofont-close"></i></i> Cancel </button>
	                    </div>
	                </div>
	            </form>
	        </div>
	    </div>

</x-backend>
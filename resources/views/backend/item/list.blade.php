<x-backend>
            <h5 class="mb-0" ><strong>Items</strong></h5>
                <span class="text-secondary">Ecommerce <i class="fa fa-angle-right"></i> items</span>
                
                <div class="mt-4 mb-4 p-3 bg-white border shadow-sm lh-sm">
                    <!--Product Listing-->
                    <div class="product-list">
                        
                        <div class="row border-bottom mb-4">
                            <div class="col-sm-8 pt-2"><h6 class="mb-4 bc-header">Product listing</h6></div>
                            <div class="col-sm-4 text-right pb-3">
                                <a class="btn btn-round btn-theme ms-auto" href="{{route('item.create')}}"><i class="fa fa-plus"></i> Add Item</a>
                                
                            </div>
                        </div>
                        
                        <div class="table-responsive product-list">
                            @if(session('successMsg') != NULL)
                                <div class="alert alert-success alert-dismissable fade show" role="alert">
                                    <strong>SUCCESS!</strong>
                                    {{ session('successMsg') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="fas fa-times-circle"></i></button>
                                </div>
                            @endif
                            <table class="table table-bordered table-striped mt-3" id="productList">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Code No</th>
                                        <th>Product name</th>
                                        <th>Photo</th>
                                        <th>Price</th>
                                        <th>Description</th>
                                        <th>Category Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i = 1; @endphp
                                    @foreach($items as $item)
                                        
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $item->codeno }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td><img src="{{url($item->photo)}}" width="100px" height="100px"></td>
                                        <td>{{ $item->price }}</td>
                                        <td>{{ $item->description }}</td>
                                        <td>
                                            {{-- @foreach($item->categories as $category) --}} 
                                            {{ $item->category->name }}
                                           {{-- @endforeach --}}
                                        </td>
                                        <td>
                                        <a href="{{ route('item.edit',$item->id)}}" class="btn btn-link text-theme p-1"><i class="fa fa-pencil"></i></a>
                                        
                                        <form class="d-inline-block" action="{{ route('item.destroy',$item->id)}}" method="POST" onsubmit="return confirm('Are you sure want to delete?')">
                                           @csrf
                                           @method('DELETE')
                                           <button class="btn btn-link text-danger p-1"><i class="fas fa-trash"></i></button>
                                        </form>
                                        </td>
                                    </tr>
                                    @endforeach            
                            </tbody>
                        </table>
                    </div>
                </div>
                    <!--/Product Listing-->
            </div>
</x-backend>
<x-backend>

            <h5 class="mb-0" ><strong>Carpenter Orders</strong></h5>
                <span class="text-secondary">Ecommerce <i class="fa fa-angle-right"></i> carpenter orders</span>
                
                <div class="mt-4 mb-4 p-3 bg-white border shadow-sm lh-sm">
                    <!--Product Listing-->
                    <div class="product-list">
                        
                        <div class="row border-bottom mb-4">
                            <div class="col-sm-8 pt-2"><h6 class="mb-4 bc-header">Product listing</h6></div>
                            <div class="col-sm-4 text-right pb-3">
                                <a class="btn btn-round btn-theme ms-auto" href="{{route('carpenterorder.create')}}"><i class="fa fa-plus"></i> Add Order</a>
                                
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
                                        <th>Carpenter Name</th>
                                        <th>Item name</th>
                                        <th>Number</th>
                                        <th>Due Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i = 1; @endphp
                                    @foreach($carpenterorders as $carpenterorder)
                                        
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $carpenterorder->carpenter->name }}</td>
                                        <td>{{ $carpenterorder->item->name }}</td>
                                        <td>{{ $carpenterorder->qty }}</td>
                                        <td>{{ $carpenterorder->due_date }}</td>
                                        <td></td>
                                        <td>

                                        <a href="{{ route('carpenterorder.edit',$carpenterorder->id)}}" class="btn btn-link text-theme p-1"><i class="fa fa-pencil"></i></a>
                                        
                                        <form class="d-inline-block" action="{{ route('carpenterorder.destroy',$carpenterorder->id)}}" method="POST" onsubmit="return confirm('Are you sure want to delete?')">
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
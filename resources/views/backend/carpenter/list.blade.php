<x-backend>
            <h5 class="mb-0" ><strong>Carpenter</strong></h5>
                <span class="text-secondary">Carpenter <i class="fa fa-angle-right"></i> List</span>
                
                <div class="mt-4 mb-4 p-3 bg-white border shadow-sm lh-sm">
                    <!--Product Listing-->
                    <div class="product-list">
                        
                        <div class="row border-bottom mb-4">
                            <div class="col-sm-8 pt-2"><h6 class="mb-4 bc-header">Carpenter listing</h6></div>
                            <div class="col-sm-4 text-right pb-3">
                                <a class="btn btn-round btn-theme ms-auto" href="{{route('carpenter.create')}}"><i class="fa fa-plus"></i> Add Carpenter</a>
                                
                            </div>
                        </div>
                        @if(session('successMsg') != NULL )
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>SUCCESS!</strong>
                                    {{ session('successMsg') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="fas fa-times-circle"></i></button>
                            </div>
                            @endif
                        <div class="table-responsive product-list">
                            
                            <table class="table table-bordered table-striped mt-3" id="productList">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        {{-- <th>Item Name</th> --}}
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                        @php $i = 1; @endphp
                                        @foreach($carpenters as $carpenter)
                                            @php
                                                $id = $carpenter->id;
                                                $name = $carpenter->name;
                                                $phone = $carpenter->phone;
                                                // $item_id=$carpenter->item_id;
                                            @endphp
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$name}}</td>
                                        <td>{{$phone}}</td> 
                                        {{-- <td>{{$carpenter->item->name }}</td> --}}
                                        
                                        <td>
                                            <a href="{{ route('carpenter.edit',$carpenter->id)}}" class="btn btn-link text-theme p-1"><i class="fa fa-pencil"></i></a>
                                        
                                        <form class="d-inline-block" action="{{ route('carpenter.destroy',$carpenter->id)}}" method="POST" onsubmit="return confirm('Are you sure want to delete?')">
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
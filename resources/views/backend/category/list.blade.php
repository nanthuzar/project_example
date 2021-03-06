<x-backend>
            <h5 class="mb-0" ><strong>Categories</strong></h5>
                <span class="text-secondary">Ecommerce <i class="fa fa-angle-right"></i> categories</span>
                
                <div class="mt-4 mb-4 p-3 bg-white border shadow-sm lh-sm">
                    <!--Product Listing-->
                    <div class="product-list">
                        
                        <div class="row border-bottom mb-4">
                            <div class="col-sm-8 pt-2"><h6 class="mb-4 bc-header">Product listing</h6></div>
                            <div class="col-sm-4 text-right pb-3">
                                <a class="btn btn-round btn-theme ms-auto" href="{{route('category.create')}}"><i class="fa fa-plus"></i> Add Category</a>
                                
                            </div>
                        </div>
                        
                        <div class="table-responsive product-list">
                            @if(session('successMsg') != NULL)
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>SUCCESS!</strong>
                                    {{ session('successMsg') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="fas fa-times-circle"></i></button>
                            </div>
                            @endif
                            <table class="table table-bordered table-striped mt-3" id="productList">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Product name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i = 1; @endphp
                                    @foreach($categories as $category)
                                        @php
                                            $id = $category->id;
                                            $name = $category->name;
                                        @endphp
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $name }}</td>
                                        <td>
                                        <a href="{{ route('category.edit',$id)}}" class="btn btn-link text-theme p-1"><i class="fa fa-pencil"></i></a>
                                        
                                        <form class="d-inline-block" action="{{route('category.destroy',$id)}}" method="POST" onsubmit="return confirm('Are you sure want to delete?')">
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
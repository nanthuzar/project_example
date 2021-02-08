<x-backend>
            <h5 class="mb-0" ><strong>Products</strong></h5>
                <span class="text-secondary">Ecommerce <i class="fa fa-angle-right"></i> products</span>
                
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
                            
                            <table class="table table-bordered table-striped mt-3" id="productList">
                                <thead>
                                    <tr>
                                        <th width="6%">Image</th>
                                        <th>Product name</th>
                                        <th>Amount</th>
                                        <th>Stock</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="align-middle"><img src="" width="80px"  alt=""></td>
                                        <td class="align-middle">
                                            <h6><strong>Silver Watch</strong></h6>
                                            <p>Lorem ipsum dolor sit consec te imperdiet iaculis ipsum..</p>
                                        </td>
                                        <td class="align-middle">$200</td>
                                        <td class="align-middle"><span class="text-danger">Out of Stock</span></td>
                                        <td class="align-middle text-center">
                                            <button class="btn btn-link text-theme p-1"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-link text-danger p-1"><i class="fas fa-trash"></i></button>
                                        </td>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--/Product Listing-->
                </div>
</x-backend>
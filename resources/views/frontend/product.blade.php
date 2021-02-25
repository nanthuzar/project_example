<x-frontend>

    {{-- FOUNDATION --}}
    {{-- <div class="row">
        <h3 class="mx-auto mb-3">Foundation</h3>
    </div> --}}
    <div class="container">
        <div class="row my-3">
            {{-- @for($i=0; $i<2; $i++)  --}}
            @foreach($data[0] as $item)
            <div class="col-md-2">
                
                    <div class="card h-100">
                        <img class="card-img-top w-100" src="{{ $item->photo }}" alt="Card image cap">
                        
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->name}}</h5>
                            <p class="card-text">{{ $item->description}}</p>
                        </div>
                        <div class="card-footer">
                            <ul class="list-inline text-center">
                                <li class="list-inline-item"><a class="btn btn-warning" href="{{ route('frontend.detail', $item->id) }}"><i class="fas fa-eye"></i></a></li>
                                <li class="list-inline-item"><a class="btn btn-success addtoCart" data-id="{{ $item->id }}" data-name="{{ $item->name }}" data-price="{{ $item->price }}" data-photo="{{ asset($item->photo) }}" href=""><i class="fas fa-cart-arrow-down"></i></a></li>



                            </ul>                                    
                        </div>
                    </div>
                
            </div>
            @endforeach
            {{-- @endfor --}}
        </div>
    </div>

</x-frontend>
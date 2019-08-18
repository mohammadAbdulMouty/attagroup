@extends('home')
@section('content')
    <div class="container">
        <div class="row">
            <input type="text"  class="product-search form-control" placeholder="Type to search for products">
        </div>
        <div class="products-content">
            <div class="row">
                @php
                  $i =0;  
                @endphp
            @foreach ($product as $prod)
                @php
                    $i++;
                  if($i>3){
                      echo '</div>';
                      echo "<div class='row'>";
                      $i=0;
                  }
                  
                @endphp
                <div class="card-content col-md-4 col-sm-12  ">
                        <div class="front">
                        <h3>{{  $prod->name}}</h3>
                            <img src="img/product.png">
                        </div>
                        <div class="back">
                            <div class="back-info"><p>description</p><span>{{ $prod->description}}</span><br></div>
                            <div class="back-info"><p>weight</p><span>{{$prod->weight}}</span></div>
                            <div class="back-info"><p>origin</p><span>{{$prod->origin}}</span> </div>
                        </div>
                </div>
            @endforeach
            
        </div>
        <div class="pagination-container">
                {{$product->links()}}
        </div>
        
    </div>
    </div>
    
@endsection


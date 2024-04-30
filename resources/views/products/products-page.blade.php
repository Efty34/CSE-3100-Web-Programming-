<x-outer-template>

    <x-product-outer>

        <div class="wrapper1">

            @foreach ($products as $product)
                <div class="single-card1">
                    <div class="img-area1">
                        <img src="products_storage/{{ $product->product_image }}" alt="">
                        <div class="overlay1">
                           @auth
                               
                           <a href="/user-profile#order"><button class="add-to-cart1">Add to Cart</button></a>
                           @else
                           <a href="{{route('auth.login-page')}}"><button class="add-to-cart1">Add to Cart</button></a>
                           @endauth
                            
                        </div>
                    </div>

                    <div class="info1">
                        <h3>{{ $product->product_name }}</h3>
                        <p class="price1">{{ $product->product_price }}$</p>
                    </div>
                </div>
            @endforeach



        </div>

    </x-product-outer>

</x-outer-template>

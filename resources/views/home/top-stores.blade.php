<div class="section-spacing">
    <h2 class="section-title">Top <span>Stores</span></h2>

    <div class="row">

        @foreach ([
            ['icon'=>'fa-shopping-bag','name'=>'TechHaven','rating'=>4.7,'type'=>'Electronics & Gadgets'],
            ['icon'=>'fa-tshirt','name'=>'FashionHub','rating'=>5.0,'type'=>'Clothing & Accessories'],
            ['icon'=>'fa-home','name'=>'HomeEssentials','rating'=>4.2,'type'=>'Home & Kitchen']
        ] as $store)

        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card-custom store-card">
                <div class="store-icon">
                    <i class="fas {{ $store['icon'] }}"></i>
                </div>
                <h3 class="store-name">{{ $store['name'] }}</h3>

                <div class="store-rating">
                    <div class="stars">
                        @for ($i=1; $i<=5; $i++)
                            @if ($i <= floor($store['rating'])) 
                                <i class="fas fa-star"></i>
                            @elseif ($i - $store['rating'] < 1)
                                <i class="fas fa-star-half-alt"></i>
                            @else
                                <i class="far fa-star"></i>
                            @endif
                        @endfor
                    </div>
                    <span class="rating-value ms-2">{{ $store['rating'] }}</span>
                </div>

                <p class="text-soft">{{ $store['type'] }}</p>

                <button class="btn btn-primary-custom mt-2">Visit Store</button>
            </div>
        </div>

        @endforeach

    </div>
</div>

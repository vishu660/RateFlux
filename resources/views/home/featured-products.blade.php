<div class="section-spacing">
    <h2 class="section-title">Featured <span>Products</span></h2>

    <div class="row">

        @foreach ([
            ['icon'=>'fa-laptop','title'=>'UltraBook Pro','cat'=>'Electronics · Laptops','rating'=>4.7,'reviews'=>128,'price'=>1299],
            ['icon'=>'fa-mobile-alt','title'=>'SmartPhone X','cat'=>'Electronics · Phones','rating'=>4.2,'reviews'=>95,'price'=>899],
            ['icon'=>'fa-headphones','title'=>'AudioMax Pro','cat'=>'Electronics · Audio','rating'=>5.0,'reviews'=>64,'price'=>249],
            ['icon'=>'fa-camera','title'=>'PhotoShot 4K','cat'=>'Electronics · Cameras','rating'=>4.8,'reviews'=>142,'price'=>599]
        ] as $p)
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card-custom product-card">
                <div class="product-img">
                    <i class="fas {{ $p['icon'] }}"></i>
                </div>
                <div class="product-info">
                    <h3 class="product-title">{{ $p['title'] }}</h3>
                    <p class="product-category">{{ $p['cat'] }}</p>

                    <div class="rating">
                        <div class="stars">
                            @for ($i=1; $i<=5; $i++)
                                @if ($i <= floor($p['rating'])) 
                                    <i class="fas fa-star"></i>
                                @elseif ($i - $p['rating'] < 1)
                                    <i class="fas fa-star-half-alt"></i>
                                @else
                                    <i class="far fa-star"></i>
                                @endif
                            @endfor
                        </div>
                        <span class="rating-value">{{ $p['rating'] }}</span>
                        <span class="review-count">({{ $p['reviews'] }})</span>
                    </div>

                    <div class="d-flex justify-content-between align-items-center">
                        <span class="price">${{ $p['price'] }}</span>
                        <button class="btn btn-primary-custom btn-sm">View Details</button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>

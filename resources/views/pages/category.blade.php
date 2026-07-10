@extends('layouts.app')

@section('title')
    Store - Categories Page
@endsection

@section('content')
    <div class="page-content page-home">
    <!-- Trend Categories Section -->
    <section class="store-trend-categories">
        <div class="container">
        <div class="row">
            <div class="col-12" data-aos="fade-up">
            <h5>All Categories</h5>
            </div>
        </div>
        <div class="row">
            <!-- Gadgets -->
            <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="100">
            <a href="#" class="component-categories d-block">
                <div class="categories-image">
                <img src="/images/categories-gadgets.svg" alt="Gadgets" class="w-100" />
                </div>
                <p class="categories-text">Gadgets</p>
            </a>
            </div>

            <!-- Furniture -->
            <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="200">
            <a href="#" class="component-categories d-block">
                <div class="categories-image">
                <img src="/images/categories-furniture.svg" alt="Furniture" class="w-100" />
                </div>
                <p class="categories-text">Furniture</p>
            </a>
            </div>

            <!-- Make Up -->
            <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="300">
            <a href="#" class="component-categories d-block">
                <div class="categories-image">
                <img src="/images/categories-makeup.svg" alt="Make Up" class="w-100" />
                </div>
                <p class="categories-text">Make Up</p>
            </a>
            </div>

            <!-- Sneaker -->
            <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="400">
            <a href="#" class="component-categories d-block">
                <div class="categories-image">
                <img src="/images/categories-sneaker.svg" alt="Sneaker" class="w-100" />
                </div>
                <p class="categories-text">Sneaker</p>
            </a>
            </div>

            <!-- Tools -->
            <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="500">
            <a href="#" class="component-categories d-block">
                <div class="categories-image">
                <img src="/images/categories-tools.svg" alt="Tools" class="w-100" />
                </div>
                <p class="categories-text">Tools</p>
            </a>
            </div>

            <!-- Baby -->
            <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="600">
            <a href="#" class="component-categories d-block">
                <div class="categories-image">
                <img src="/images/categories-baby.svg" alt="Baby" class="w-100" />
                </div>
                <p class="categories-text">Baby</p>
            </a>
            </div>
        </div>
        </div>
    </section>

    <!-- New Products Section -->
    <section class="store-new-products">
        <div class="container">
        <div class="row">
            <div class="col-12" data-aos="fade-up">
            <h5>All Products</h5> <!-- FIXED: Typo Porducts -> Products -->
            </div>
        </div>
        <div class="row">
            <!-- Apple Watch 4 -->
            <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100">
            <a href="#" class="component-products d-block">
                <div class="product-thumbnail">
                <div class="products-image" style="background-image: url('/images/Products-apple-watch-4.jpg');"></div>
                </div>
                <div class="products-text">Apple Watch 4</div>
                <div class="products-price">$890</div>
            </a>
            </div>

            <!-- Orange Bogotta -->
            <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="200">
            <a href="#" class="component-products d-block">
                <div class="product-thumbnail">
                <div class="products-image" style="background-image: url('/images/Products-Orange-Bogotta.jpg');"></div>
                </div>
                <div class="products-text">Orange Bogotta</div>
                <div class="products-price">$94,509</div>
            </a>
            </div>

            <!-- Sofa Ternyaman -->
            <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="300">
            <a href="#" class="component-products d-block">
                <div class="product-thumbnail">
                <div class="products-image" style="background-image: url('/images/Products-sofa-ternyaman.jpg');"></div>
                </div>
                <div class="products-text">Sofa Ternyaman</div>
                <div class="products-price">$1,409</div>
            </a>
            </div>

            <!-- Bubuk Maketti -->
            <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="400">
            <a href="#" class="component-products d-block">
                <div class="product-thumbnail">
                <div class="products-image" style="background-image: url('/images/Products-Bubuk-Maketti.jpg');"></div>
                </div>
                <div class="products-text">Bubuk Maketti</div>
                <div class="products-price">$225</div>
            </a>
            </div>

            <!-- Tatakan Gelas -->
            <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="500">
            <a href="#" class="component-products d-block">
                <div class="product-thumbnail">
                <div class="products-image" style="background-image: url('/images/Products-Tatakan-Gelas.jpg');"></div>
                </div>
                <div class="products-text">Tatakan Gelas</div>
                <div class="products-price">$45,184</div>
            </a>
            </div>

            <!-- Mavic Kawe -->
            <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="600">
            <a href="#" class="component-products d-block">
                <div class="product-thumbnail">
                <div class="products-image" style="background-image: url('/images/Products-Mavic-Kawe.jpg');"></div>
                </div>
                <div class="products-text">Mavic Kawe</div>
                <div class="products-price">$503</div>
            </a>
            </div>

            <!-- Black Edition Nike -->
            <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="700">
            <a href="#" class="component-products d-block">
                <div class="product-thumbnail">
                <div class="products-image" style="background-image: url('/images/Products-Black-Edition-Nike.jpg');"></div>
                </div>
                <div class="products-text">Black Edition Nike</div>
                <div class="products-price">$70,482</div>
            </a>
            </div>

            <!-- Monkey Toys -->
            <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="800">
            <a href="#" class="component-products d-block">
                <div class="product-thumbnail">
                <div class="products-image" style="background-image: url('/images/Products-Monkey-Toy.jpg');"></div>
                </div>
                <div class="products-text">Monkey Toys</div>
                <div class="products-price">$783</div>
            </a>
            </div>
        </div>
        </div>
    </section>
    </div>

@endsection

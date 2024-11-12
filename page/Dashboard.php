<section style="position: relative; background-image: url('images/bgeuip.jpg'); background-repeat: no-repeat; background-size: cover;">
    <!-- Overlay for improved readability -->
    <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-color: rgba(0, 0, 0, 0.5);"></div>

    <div class="container-lg position-relative" style="z-index: 1;">
        <div class="row">
            <div class="col-lg-6 pt-5 mt-5">
                <h2 class="display-1 ls-1 text-white">
                    <span class="fw-bold text-primary">Fitness</span> and Health at your <span class="fw-bold">Convenience</span>
                </h2>
                <p class="fs-4 text-white">Join us and reach your fitness goals.</p>
                <div class="d-flex gap-3">
                    <a href="#" class="btn btn-primary text-uppercase fs-6 rounded-pill px-4 py-3 mt-3">Join Now</a>
                    <a href="#" class="btn btn-dark text-uppercase fs-6 rounded-pill px-4 py-3 mt-3">Learn More</a>
                </div>
                <div class="row my-5">
                    <div class="col">
                        <div class="row text-white">
                            <div class="col-auto">
                                <p class="fs-1 fw-bold lh-sm mb-0">100+</p>
                            </div>
                            <div class="col">
                                <p class="text-uppercase lh-sm mb-0">Gym Equipment</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row text-white">
                            <div class="col-auto">
                                <p class="fs-1 fw-bold lh-sm mb-0">20k+</p>
                            </div>
                            <div class="col">
                                <p class="text-uppercase lh-sm mb-0">Satisfied Members</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row text-white">
                            <div class="col-auto">
                                <p class="fs-1 fw-bold lh-sm mb-0">15</p>
                            </div>
                            <div class="col">
                                <p class="text-uppercase lh-sm mb-0">Locations</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-sm-3 row-cols-lg-3 g-3 justify-content-center">
            <div class="col">
                <div class="card border-0 bg-primary rounded-0 p-4 text-light h-100 d-flex align-items-stretch">
                    <div class="row h-100 align-items-center">
                        <div class="col-md-3 text-center">
                            <svg width="60" height="60">
                                <use xlink:href="#weights"></use> <!-- Replace with appropriate fitness icon -->
                            </svg>
                        </div>
                        <div class="col-md-9">
                            <div class="card-body p-0">
                                <h5 class="text-light">State-of-the-art Equipment</h5>
                                <p class="card-text">Our gym is equipped with top-quality machines and weights for all fitness levels.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-0 bg-secondary rounded-0 p-4 text-light h-100 d-flex align-items-stretch">
                    <div class="row h-100 align-items-center">
                        <div class="col-md-3 text-center">
                            <svg width="60" height="60">
                                <use xlink:href="#personal-trainer"></use> <!-- Replace with appropriate fitness icon -->
                            </svg>
                        </div>
                        <div class="col-md-9">
                            <div class="card-body p-0">
                                <h5 class="text-light">Personal Training</h5>
                                <p class="card-text">Certified trainers to guide you every step of the way in your fitness journey.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-0 bg-danger rounded-0 p-4 text-light h-100 d-flex align-items-stretch">
                    <div class="row h-100 align-items-center">
                        <div class="col-md-3 text-center">
                            <svg width="60" height="60">
                                <use xlink:href="#nutrition"></use> <!-- Replace with appropriate fitness icon -->
                            </svg>
                        </div>
                        <div class="col-md-9">
                            <div class="card-body p-0">
                                <h5 class="text-light">Nutrition Plans</h5>
                                <p class="card-text">Custom nutrition and diet plans tailored to help you reach your goals.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<style>
    .category-carousel .swiper-slide img {
        width: 100px;
        /* Adjust the width as needed */
        height: 100px;
        /* Adjust the height as needed */
        object-fit: cover;
        /* Ensure the image covers the area */
        border-radius: 50%;
        /* Make it circular */
    }
</style>

<section class="py-5 overflow-hidden">
    <div class="container-lg">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header d-flex flex-wrap justify-content-between mb-5">
                    <h2 class="section-title">Gym & Fitness Categories</h2>
                    <div class="d-flex align-items-center">
                        <a href="#" class="btn btn-primary me-2">View All</a>
                        <div class="swiper-buttons">
                            <button class="swiper-prev category-carousel-prev btn btn-yellow">❮</button>
                            <button class="swiper-next category-carousel-next btn btn-yellow">❯</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="category-carousel swiper">
                    <div class="swiper-wrapper">
                        <a href="category.html" class="nav-link swiper-slide text-center">
                            <img src="images/category-dumbell.jpg" alt="Dumbbells">
                            <h4 class="fs-6 mt-3 fw-normal category-title">Dumbbells</h4>
                        </a>

                        <a href="category.html" class="nav-link swiper-slide text-center">
                            <img src="images/category-dumbell.jpg" alt="Dumbbells">
                            <h4 class="fs-6 mt-3 fw-normal category-title">Dumbbells</h4>
                        </a>

                        <a href="category.html" class="nav-link swiper-slide text-center">
                            <img src="images/category-dumbell.jpg" alt="Dumbbells">
                            <h4 class="fs-6 mt-3 fw-normal category-title">Dumbbells</h4>
                        </a>

                        <a href="category.html" class="nav-link swiper-slide text-center">
                            <img src="images/category-dumbell.jpg" alt="Dumbbells">
                            <h4 class="fs-6 mt-3 fw-normal category-title">Dumbbells</h4>
                        </a>

                        <a href="category.html" class="nav-link swiper-slide text-center">
                            <img src="images/category-dumbell.jpg" alt="Dumbbells">
                            <h4 class="fs-6 mt-3 fw-normal category-title">Dumbbells</h4>
                        </a>

                        <a href="category.html" class="nav-link swiper-slide text-center">
                            <img src="images/category-dumbell.jpg" alt="Dumbbells">
                            <h4 class="fs-6 mt-3 fw-normal category-title">Dumbbells</h4>
                        </a>

                        <a href="category.html" class="nav-link swiper-slide text-center">
                            <img src="images/category-dumbell.jpg" alt="Dumbbells">
                            <h4 class="fs-6 mt-3 fw-normal category-title">Dumbbells</h4>
                        </a>
                        <a href="category.html" class="nav-link swiper-slide text-center">
                            <img src="images/category-dumbell.jpg" alt="Dumbbells">
                            <h4 class="fs-6 mt-3 fw-normal category-title">Dumbbells</h4>
                        </a>
                        <a href="category.html" class="nav-link swiper-slide text-center">
                            <img src="images/category-dumbell.jpg" alt="Dumbbells">
                            <h4 class="fs-6 mt-3 fw-normal category-title">Dumbbells</h4>
                        </a>
                        <a href="category.html" class="nav-link swiper-slide text-center">
                            <img src="images/category-dumbell.jpg" alt="Dumbbells">
                            <h4 class="fs-6 mt-3 fw-normal category-title">Dumbbells</h4>
                        </a>
                        <a href="category.html" class="nav-link swiper-slide text-center">
                            <img src="images/category-dumbell.jpg" alt="Dumbbells">
                            <h4 class="fs-6 mt-3 fw-normal category-title">Dumbbells</h4>
                        </a>
                        <a href="category.html" class="nav-link swiper-slide text-center">
                            <img src="images/category-dumbell.jpg" alt="Dumbbells">
                            <h4 class="fs-6 mt-3 fw-normal category-title">Dumbbells</h4>
                        </a>
                        <a href="category.html" class="nav-link swiper-slide text-center">
                            <img src="images/category-dumbell.jpg" alt="Dumbbells">
                            <h4 class="fs-6 mt-3 fw-normal category-title">Dumbbells</h4>
                        </a>
                        <!-- Add additional items as needed -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .product-item {
        border: 1px solid #e0e0e0;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        transition: transform 0.2s, box-shadow 0.2s;
        background-color: #ffffff;
        max-width: 280px;
        margin: auto;
        overflow: hidden;
    }

    .product-item:hover {
        transform: translateY(-5px);
        box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.15);
    }

    .product-item figure {
        margin: 0;
        padding: 0;
        text-align: center;
    }

    .product-item img {
        width: 100%;
        max-height: 180px;
        object-fit: contain;
        margin-bottom: 15px;
    }

    .product-item h3 {
        font-size: 1.1rem;
        margin: 10px 0;
        font-weight: 600;
        color: #333;
    }

    .product-item .rating {
        margin: 5px 0;
    }

    .product-item .rating svg {
        margin-right: 2px;
        fill: #ffc107;
        /* Ensure stars have a consistent color */
    }

    .product-item .price-info {
        margin-top: 10px;
        font-size: 0.9rem;
        color: #666;
    }

    .price-info del {
        color: #999;
        margin-right: 5px;
    }

    .product-item .button-area {
        margin-top: 15px;
    }

    .btn-cart {
        width: 100%;
        font-weight: bold;
        padding: 10px;
        font-size: 0.9rem;
        background-color: #007bff;
        color: #ffffff;
        border: none;
        border-radius: 5px;
        transition: background-color 0.2s;
    }

    .btn-cart:hover {
        background-color: #0056b3;
        color: #ffffff;
    }

    .btn-cart svg {
        margin-right: 5px;
        vertical-align: middle;
    }

    .product-item img {
        width: 100%;
        max-height: 180px;
        object-fit: cover;
    }

    .btn-cart,
    .quantity {
        width: 100%;
        font-size: 0.9rem;
    }

    .product-item .quantity {
        max-width: 60px;
    }

    .category-carousel .swiper-button-next,
    .category-carousel .swiper-button-prev {
        width: 40px;
        height: 40px;
        background: #fff;
        border-radius: 50%;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    }
</style>
<script>
    const swiper = new Swiper('.category-carousel', {
        slidesPerView: 5,
        spaceBetween: 20,
        navigation: {
            nextEl: '.category-carousel-next',
            prevEl: '.category-carousel-prev',
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
            1400: {
                slidesPerView: 4,
            },
        },
    });
</script>
<section class="pb-5">
    <div class="container-lg">

        <div class="row">
            <div class="col-md-12">
                <div class="section-header d-flex flex-wrap justify-content-between my-4">
                    <h2 class="section-title">Best Selling Fitness Products</h2>
                    <div class="d-flex align-items-center">
                        <a href="#" class="btn btn-primary rounded-1 me-2">View All</a>
                        <div class="swiper-buttons">
                            <button class="swiper-prev category-carousel-prev btn btn-outline-secondary">❮</button>
                            <button class="swiper-next category-carousel-next btn btn-outline-secondary">❯</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="product-grid row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-5">

                    <!-- dumbell -->
                    <div class="col">
                        <div class="product-item">
                            <figure>
                                <a href="index.html" title="Adjustable Dumbbells">
                                    <img src="/images/product-adjustable-gumbell.jpg" alt="Adjustable Dumbbells">
                                </a>
                            </figure>
                            <div class="d-flex flex-column text-center">
                                <h3 class="fs-6 fw-normal">Adjustable Dumbbells</h3>
                                <div>
                                    <span class="rating">
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-half"></use>
                                        </svg>
                                    </span>
                                    <span>(98)</span>
                                </div>
                                <div class="price-info d-flex justify-content-center align-items-center gap-2">
                                    <del>$80.00</del>
                                    <span class="text-dark fw-semibold">$70.00</span>
                                    <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">15% OFF</span>
                                </div>
                                <div class="button-area p-3 pt-0">
                                    <div class="row g-1 mt-2">
                                        <div class="col-3">
                                            <input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1">
                                        </div>
                                        <div class="col-9">
                                            <a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart">
                                                <svg width="18" height="18">
                                                    <use xlink:href="#cart"></use>
                                                </svg> Add to Cart
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- dumbell -->
                    <div class="col">
                        <div class="product-item">
                            <figure>
                                <a href="index.html" title="Adjustable Dumbbells">
                                    <img src="/images/product-adjustable-gumbell.jpg" alt="Adjustable Dumbbells">
                                </a>
                            </figure>
                            <div class="d-flex flex-column text-center">
                                <h3 class="fs-6 fw-normal">Adjustable Dumbbells</h3>
                                <div>
                                    <span class="rating">
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-half"></use>
                                        </svg>
                                    </span>
                                    <span>(98)</span>
                                </div>
                                <div class="price-info d-flex justify-content-center align-items-center gap-2">
                                    <del>$80.00</del>
                                    <span class="text-dark fw-semibold">$70.00</span>
                                    <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">15% OFF</span>
                                </div>
                                <div class="button-area p-3 pt-0">
                                    <div class="row g-1 mt-2">
                                        <div class="col-3">
                                            <input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1">
                                        </div>
                                        <div class="col-9">
                                            <a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart">
                                                <svg width="18" height="18">
                                                    <use xlink:href="#cart"></use>
                                                </svg> Add to Cart
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- dumbell -->
                    <div class="col">
                        <div class="product-item">
                            <figure>
                                <a href="index.html" title="Adjustable Dumbbells">
                                    <img src="/images/product-adjustable-gumbell.jpg" alt="Adjustable Dumbbells">
                                </a>
                            </figure>
                            <div class="d-flex flex-column text-center">
                                <h3 class="fs-6 fw-normal">Adjustable Dumbbells</h3>
                                <div>
                                    <span class="rating">
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-half"></use>
                                        </svg>
                                    </span>
                                    <span>(98)</span>
                                </div>
                                <div class="price-info d-flex justify-content-center align-items-center gap-2">
                                    <del>$80.00</del>
                                    <span class="text-dark fw-semibold">$70.00</span>
                                    <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">15% OFF</span>
                                </div>
                                <div class="button-area p-3 pt-0">
                                    <div class="row g-1 mt-2">
                                        <div class="col-3">
                                            <input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1">
                                        </div>
                                        <div class="col-9">
                                            <a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart">
                                                <svg width="18" height="18">
                                                    <use xlink:href="#cart"></use>
                                                </svg> Add to Cart
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- dumbell -->
                    <div class="col">
                        <div class="product-item">
                            <figure>
                                <a href="index.html" title="Adjustable Dumbbells">
                                    <img src="/images/product-adjustable-gumbell.jpg" alt="Adjustable Dumbbells">
                                </a>
                            </figure>
                            <div class="d-flex flex-column text-center">
                                <h3 class="fs-6 fw-normal">Adjustable Dumbbells</h3>
                                <div>
                                    <span class="rating">
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-half"></use>
                                        </svg>
                                    </span>
                                    <span>(98)</span>
                                </div>
                                <div class="price-info d-flex justify-content-center align-items-center gap-2">
                                    <del>$80.00</del>
                                    <span class="text-dark fw-semibold">$70.00</span>
                                    <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">15% OFF</span>
                                </div>
                                <div class="button-area p-3 pt-0">
                                    <div class="row g-1 mt-2">
                                        <div class="col-3">
                                            <input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1">
                                        </div>
                                        <div class="col-9">
                                            <a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart">
                                                <svg width="18" height="18">
                                                    <use xlink:href="#cart"></use>
                                                </svg> Add to Cart
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- dumbell -->
                    <div class="col">
                        <div class="product-item">
                            <figure>
                                <a href="index.html" title="Adjustable Dumbbells">
                                    <img src="/images/product-adjustable-gumbell.jpg" alt="Adjustable Dumbbells">
                                </a>
                            </figure>
                            <div class="d-flex flex-column text-center">
                                <h3 class="fs-6 fw-normal">Adjustable Dumbbells</h3>
                                <div>
                                    <span class="rating">
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-half"></use>
                                        </svg>
                                    </span>
                                    <span>(98)</span>
                                </div>
                                <div class="price-info d-flex justify-content-center align-items-center gap-2">
                                    <del>$80.00</del>
                                    <span class="text-dark fw-semibold">$70.00</span>
                                    <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">15% OFF</span>
                                </div>
                                <div class="button-area p-3 pt-0">
                                    <div class="row g-1 mt-2">
                                        <div class="col-3">
                                            <input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1">
                                        </div>
                                        <div class="col-9">
                                            <a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart">
                                                <svg width="18" height="18">
                                                    <use xlink:href="#cart"></use>
                                                </svg> Add to Cart
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <!-- Additional gym-related products can be added following the same structure -->

                </div>
                <!-- / product-grid -->
            </div>
        </div>
    </div>
</section>


<section class="py-3">
    <div class="container-lg">
        <div class="row">
            <div class="col-md-12">

                <div class="banner-blocks">

                    <div class="banner-ad d-flex align-items-center large bg-info block-1" style="background: url('images/banner-ad-1.jpg') no-repeat; background-size: cover;">
                        <div class="banner-content p-5">
                            <div class="content-wrapper text-light">
                                <h3 class="banner-title text-light">Items on SALE</h3>
                                <p>Discounts up to 30%</p>
                                <a href="#" class="btn-link text-white">Shop Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="banner-ad bg-success-subtle block-2" style="background:url('images/banner-ad-2.jpg') no-repeat;background-size: cover">
                        <div class="banner-content align-items-center p-5">
                            <div class="content-wrapper text-light">
                                <h3 class="banner-title text-light">Combo offers</h3>
                                <p>Discounts up to 50%</p>
                                <a href="#" class="btn-link text-white">Shop Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="banner-ad bg-danger block-3" style="background:url('images/banner-ad-3.jpg') no-repeat;background-size: cover">
                        <div class="banner-content align-items-center p-5">
                            <div class="content-wrapper text-light">
                                <h3 class="banner-title text-light">Discount Coupons</h3>
                                <p>Discounts up to 40%</p>
                                <a href="#" class="btn-link text-white">Shop Now</a>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- / Banner Blocks -->

            </div>
        </div>
    </div>
</section>

<section id="featured-products" class="products-carousel">
    <div class="container-lg overflow-hidden py-5">
        <div class="row">
            <div class="col-md-12">

                <div class="section-header d-flex flex-wrap justify-content-between my-4">

                    <h2 class="section-title">Featured products</h2>

                    <div class="d-flex align-items-center">
                        <a href="#" class="btn btn-primary me-2">View All</a>
                        <div class="swiper-buttons">
                            <button class="swiper-prev products-carousel-prev btn btn-primary">❮</button>
                            <button class="swiper-next products-carousel-next btn btn-primary">❯</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">

                <div class="swiper">
                    <div class="swiper-wrapper">

                        <div class="product-item swiper-slide">
                            <figure>
                                <a href="index.html" title="Product Title">
                                    <img src="images/product-thumb-10.png" alt="Product Thumbnail" class="tab-image">
                                </a>
                            </figure>
                            <div class="d-flex flex-column text-center">
                                <h3 class="fs-6 fw-normal">Greek Style Plain Yogurt</h3>
                                <div>
                                    <span class="rating">
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-half"></use>
                                        </svg>
                                    </span>
                                    <span>(222)</span>
                                </div>
                                <div class="d-flex justify-content-center align-items-center gap-2">
                                    <del>$24.00</del>
                                    <span class="text-dark fw-semibold">$18.00</span>
                                    <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                                </div>
                                <div class="button-area p-3 pt-0">
                                    <div class="row g-1 mt-2">
                                        <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                                        <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"><svg width="18" height="18">
                                                    <use xlink:href="#cart"></use>
                                                </svg> Add to Cart</a></div>
                                        <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18">
                                                    <use xlink:href="#heart"></use>
                                                </svg></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product-item swiper-slide">
                            <figure>
                                <a href="index.html" title="Product Title">
                                    <img src="images/product-thumb-11.png" alt="Product Thumbnail" class="tab-image">
                                </a>
                            </figure>
                            <div class="d-flex flex-column text-center">
                                <h3 class="fs-6 fw-normal">Pure Squeezed No Pulp Orange Juice</h3>
                                <div>
                                    <span class="rating">
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-half"></use>
                                        </svg>
                                    </span>
                                    <span>(222)</span>
                                </div>
                                <div class="d-flex justify-content-center align-items-center gap-2">
                                    <del>$24.00</del>
                                    <span class="text-dark fw-semibold">$18.00</span>
                                    <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                                </div>
                                <div class="button-area p-3 pt-0">
                                    <div class="row g-1 mt-2">
                                        <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                                        <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"><svg width="18" height="18">
                                                    <use xlink:href="#cart"></use>
                                                </svg> Add to Cart</a></div>
                                        <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18">
                                                    <use xlink:href="#heart"></use>
                                                </svg></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product-item swiper-slide">
                            <figure>
                                <a href="index.html" title="Product Title">
                                    <img src="images/product-thumb-12.png" alt="Product Thumbnail" class="tab-image">
                                </a>
                            </figure>
                            <div class="d-flex flex-column text-center">
                                <h3 class="fs-6 fw-normal">Fresh Oranges</h3>
                                <div>
                                    <span class="rating">
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-half"></use>
                                        </svg>
                                    </span>
                                    <span>(222)</span>
                                </div>
                                <div class="d-flex justify-content-center align-items-center gap-2">
                                    <del>$24.00</del>
                                    <span class="text-dark fw-semibold">$18.00</span>
                                    <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                                </div>
                                <div class="button-area p-3 pt-0">
                                    <div class="row g-1 mt-2">
                                        <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                                        <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"><svg width="18" height="18">
                                                    <use xlink:href="#cart"></use>
                                                </svg> Add to Cart</a></div>
                                        <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18">
                                                    <use xlink:href="#heart"></use>
                                                </svg></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product-item swiper-slide">
                            <figure>
                                <a href="index.html" title="Product Title">
                                    <img src="images/product-thumb-13.png" alt="Product Thumbnail" class="tab-image">
                                </a>
                            </figure>
                            <div class="d-flex flex-column text-center">
                                <h3 class="fs-6 fw-normal">Gourmet Dark Chocolate Bars</h3>
                                <div>
                                    <span class="rating">
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-half"></use>
                                        </svg>
                                    </span>
                                    <span>(222)</span>
                                </div>
                                <div class="d-flex justify-content-center align-items-center gap-2">
                                    <del>$24.00</del>
                                    <span class="text-dark fw-semibold">$18.00</span>
                                    <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                                </div>
                                <div class="button-area p-3 pt-0">
                                    <div class="row g-1 mt-2">
                                        <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                                        <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"><svg width="18" height="18">
                                                    <use xlink:href="#cart"></use>
                                                </svg> Add to Cart</a></div>
                                        <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18">
                                                    <use xlink:href="#heart"></use>
                                                </svg></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product-item swiper-slide">
                            <figure>
                                <a href="index.html" title="Product Title">
                                    <img src="images/product-thumb-14.png" alt="Product Thumbnail" class="tab-image">
                                </a>
                            </figure>
                            <div class="d-flex flex-column text-center">
                                <h3 class="fs-6 fw-normal">Fresh Green Celery</h3>
                                <div>
                                    <span class="rating">
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-half"></use>
                                        </svg>
                                    </span>
                                    <span>(222)</span>
                                </div>
                                <div class="d-flex justify-content-center align-items-center gap-2">
                                    <del>$24.00</del>
                                    <span class="text-dark fw-semibold">$18.00</span>
                                    <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                                </div>
                                <div class="button-area p-3 pt-0">
                                    <div class="row g-1 mt-2">
                                        <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                                        <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"><svg width="18" height="18">
                                                    <use xlink:href="#cart"></use>
                                                </svg> Add to Cart</a></div>
                                        <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18">
                                                    <use xlink:href="#heart"></use>
                                                </svg></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product-item swiper-slide">
                            <figure>
                                <a href="index.html" title="Product Title">
                                    <img src="images/product-thumb-15.png" alt="Product Thumbnail" class="tab-image">
                                </a>
                            </figure>
                            <div class="d-flex flex-column text-center">
                                <h3 class="fs-6 fw-normal">Sandwich Bread</h3>
                                <div>
                                    <span class="rating">
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-half"></use>
                                        </svg>
                                    </span>
                                    <span>(222)</span>
                                </div>
                                <div class="d-flex justify-content-center align-items-center gap-2">
                                    <del>$24.00</del>
                                    <span class="text-dark fw-semibold">$18.00</span>
                                    <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                                </div>
                                <div class="button-area p-3 pt-0">
                                    <div class="row g-1 mt-2">
                                        <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                                        <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"><svg width="18" height="18">
                                                    <use xlink:href="#cart"></use>
                                                </svg> Add to Cart</a></div>
                                        <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18">
                                                    <use xlink:href="#heart"></use>
                                                </svg></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product-item swiper-slide">
                            <figure>
                                <a href="index.html" title="Product Title">
                                    <img src="images/product-thumb-16.png" alt="Product Thumbnail" class="tab-image">
                                </a>
                            </figure>
                            <div class="d-flex flex-column text-center">
                                <h3 class="fs-6 fw-normal">Honeycrisp Apples</h3>
                                <div>
                                    <span class="rating">
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-half"></use>
                                        </svg>
                                    </span>
                                    <span>(222)</span>
                                </div>
                                <div class="d-flex justify-content-center align-items-center gap-2">
                                    <del>$24.00</del>
                                    <span class="text-dark fw-semibold">$18.00</span>
                                    <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                                </div>
                                <div class="button-area p-3 pt-0">
                                    <div class="row g-1 mt-2">
                                        <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                                        <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"><svg width="18" height="18">
                                                    <use xlink:href="#cart"></use>
                                                </svg> Add to Cart</a></div>
                                        <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18">
                                                    <use xlink:href="#heart"></use>
                                                </svg></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product-item swiper-slide">
                            <figure>
                                <a href="index.html" title="Product Title">
                                    <img src="images/product-thumb-17.png" alt="Product Thumbnail" class="tab-image">
                                </a>
                            </figure>
                            <div class="d-flex flex-column text-center">
                                <h3 class="fs-6 fw-normal">Whole Wheat Sandwich Bread</h3>
                                <div>
                                    <span class="rating">
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-half"></use>
                                        </svg>
                                    </span>
                                    <span>(222)</span>
                                </div>
                                <div class="d-flex justify-content-center align-items-center gap-2">
                                    <del>$24.00</del>
                                    <span class="text-dark fw-semibold">$18.00</span>
                                    <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                                </div>
                                <div class="button-area p-3 pt-0">
                                    <div class="row g-1 mt-2">
                                        <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                                        <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"><svg width="18" height="18">
                                                    <use xlink:href="#cart"></use>
                                                </svg> Add to Cart</a></div>
                                        <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18">
                                                    <use xlink:href="#heart"></use>
                                                </svg></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product-item swiper-slide">
                            <figure>
                                <a href="index.html" title="Product Title">
                                    <img src="images/product-thumb-18.png" alt="Product Thumbnail" class="tab-image">
                                </a>
                            </figure>
                            <div class="d-flex flex-column text-center">
                                <h3 class="fs-6 fw-normal">Honeycrisp Apples</h3>
                                <div>
                                    <span class="rating">
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-half"></use>
                                        </svg>
                                    </span>
                                    <span>(222)</span>
                                </div>
                                <div class="d-flex justify-content-center align-items-center gap-2">
                                    <del>$24.00</del>
                                    <span class="text-dark fw-semibold">$18.00</span>
                                    <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                                </div>
                                <div class="button-area p-3 pt-0">
                                    <div class="row g-1 mt-2">
                                        <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                                        <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"><svg width="18" height="18">
                                                    <use xlink:href="#cart"></use>
                                                </svg> Add to Cart</a></div>
                                        <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18">
                                                    <use xlink:href="#heart"></use>
                                                </svg></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <!-- / products-carousel -->

            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-lg">

        <div class="bg-secondary text-light py-5 my-5" style="background: url('images/banner-newsletter.jpg') no-repeat; background-size: cover;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-5 p-3">
                        <div class="section-header">
                            <h2 class="section-title display-5 text-light">Get 25% Discount on your first purchase</h2>
                        </div>
                        <p>Just Sign Up & Register it now to become member.</p>
                    </div>
                    <div class="col-md-5 p-3">
                        <form>
                            <div class="mb-3">
                                <label for="name" class="form-label d-none">Name</label>
                                <input type="text"
                                    class="form-control form-control-md rounded-0" name="name" id="name" placeholder="Name">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label d-none">Email</label>
                                <input type="email" class="form-control form-control-md rounded-0" name="email" id="email" placeholder="Email Address">
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-dark btn-md rounded-0">Submit</button>
                            </div>
                        </form>

                    </div>

                </div>

            </div>
        </div>

    </div>
</section>

<section id="popular-products" class="products-carousel">
    <div class="container-lg overflow-hidden py-5">
        <div class="row">
            <div class="col-md-12">

                <div class="section-header d-flex justify-content-between my-4">

                    <h2 class="section-title">Most popular products</h2>

                    <div class="d-flex align-items-center">
                        <a href="#" class="btn btn-primary me-2">View All</a>
                        <div class="swiper-buttons">
                            <button class="swiper-prev products-carousel-prev btn btn-primary">❮</button>
                            <button class="swiper-next products-carousel-next btn btn-primary">❯</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">

                <div class="swiper">
                    <div class="swiper-wrapper">

                        <div class="product-item swiper-slide">
                            <figure>
                                <a href="index.html" title="Product Title">
                                    <img src="images/product-thumb-15.png" alt="Product Thumbnail" class="tab-image">
                                </a>
                            </figure>
                            <div class="d-flex flex-column text-center">
                                <h3 class="fs-6 fw-normal">Sandwich Bread</h3>
                                <div>
                                    <span class="rating">
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-half"></use>
                                        </svg>
                                    </span>
                                    <span>(222)</span>
                                </div>
                                <div class="d-flex justify-content-center align-items-center gap-2">
                                    <del>$24.00</del>
                                    <span class="text-dark fw-semibold">$18.00</span>
                                    <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                                </div>
                                <div class="button-area p-3 pt-0">
                                    <div class="row g-1 mt-2">
                                        <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                                        <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"><svg width="18" height="18">
                                                    <use xlink:href="#cart"></use>
                                                </svg> Add to Cart</a></div>
                                        <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18">
                                                    <use xlink:href="#heart"></use>
                                                </svg></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product-item swiper-slide">
                            <figure>
                                <a href="index.html" title="Product Title">
                                    <img src="images/product-thumb-16.png" alt="Product Thumbnail" class="tab-image">
                                </a>
                            </figure>
                            <div class="d-flex flex-column text-center">
                                <h3 class="fs-6 fw-normal">Honeycrisp Apples</h3>
                                <div>
                                    <span class="rating">
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-half"></use>
                                        </svg>
                                    </span>
                                    <span>(222)</span>
                                </div>
                                <div class="d-flex justify-content-center align-items-center gap-2">
                                    <del>$24.00</del>
                                    <span class="text-dark fw-semibold">$18.00</span>
                                    <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                                </div>
                                <div class="button-area p-3 pt-0">
                                    <div class="row g-1 mt-2">
                                        <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                                        <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"><svg width="18" height="18">
                                                    <use xlink:href="#cart"></use>
                                                </svg> Add to Cart</a></div>
                                        <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18">
                                                    <use xlink:href="#heart"></use>
                                                </svg></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product-item swiper-slide">
                            <figure>
                                <a href="index.html" title="Product Title">
                                    <img src="images/product-thumb-17.png" alt="Product Thumbnail" class="tab-image">
                                </a>
                            </figure>
                            <div class="d-flex flex-column text-center">
                                <h3 class="fs-6 fw-normal">Whole Wheat Sandwich Bread</h3>
                                <div>
                                    <span class="rating">
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-half"></use>
                                        </svg>
                                    </span>
                                    <span>(222)</span>
                                </div>
                                <div class="d-flex justify-content-center align-items-center gap-2">
                                    <del>$24.00</del>
                                    <span class="text-dark fw-semibold">$18.00</span>
                                    <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                                </div>
                                <div class="button-area p-3 pt-0">
                                    <div class="row g-1 mt-2">
                                        <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                                        <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"><svg width="18" height="18">
                                                    <use xlink:href="#cart"></use>
                                                </svg> Add to Cart</a></div>
                                        <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18">
                                                    <use xlink:href="#heart"></use>
                                                </svg></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product-item swiper-slide">
                            <figure>
                                <a href="index.html" title="Product Title">
                                    <img src="images/product-thumb-18.png" alt="Product Thumbnail" class="tab-image">
                                </a>
                            </figure>
                            <div class="d-flex flex-column text-center">
                                <h3 class="fs-6 fw-normal">Honeycrisp Apples</h3>
                                <div>
                                    <span class="rating">
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-half"></use>
                                        </svg>
                                    </span>
                                    <span>(222)</span>
                                </div>
                                <div class="d-flex justify-content-center align-items-center gap-2">
                                    <del>$24.00</del>
                                    <span class="text-dark fw-semibold">$18.00</span>
                                    <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                                </div>
                                <div class="button-area p-3 pt-0">
                                    <div class="row g-1 mt-2">
                                        <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                                        <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"><svg width="18" height="18">
                                                    <use xlink:href="#cart"></use>
                                                </svg> Add to Cart</a></div>
                                        <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18">
                                                    <use xlink:href="#heart"></use>
                                                </svg></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product-item swiper-slide">
                            <figure>
                                <a href="index.html" title="Product Title">
                                    <img src="images/product-thumb-19.png" alt="Product Thumbnail" class="tab-image">
                                </a>
                            </figure>
                            <div class="d-flex flex-column text-center">
                                <h3 class="fs-6 fw-normal">Sunstar Fresh Melon Juice</h3>
                                <div>
                                    <span class="rating">
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-half"></use>
                                        </svg>
                                    </span>
                                    <span>(222)</span>
                                </div>
                                <div class="d-flex justify-content-center align-items-center gap-2">
                                    <del>$24.00</del>
                                    <span class="text-dark fw-semibold">$18.00</span>
                                    <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                                </div>
                                <div class="button-area p-3 pt-0">
                                    <div class="row g-1 mt-2">
                                        <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                                        <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"><svg width="18" height="18">
                                                    <use xlink:href="#cart"></use>
                                                </svg> Add to Cart</a></div>
                                        <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18">
                                                    <use xlink:href="#heart"></use>
                                                </svg></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product-item swiper-slide">
                            <figure>
                                <a href="index.html" title="Product Title">
                                    <img src="images/product-thumb-10.png" alt="Product Thumbnail" class="tab-image">
                                </a>
                            </figure>
                            <div class="d-flex flex-column text-center">
                                <h3 class="fs-6 fw-normal">Greek Style Plain Yogurt</h3>
                                <div>
                                    <span class="rating">
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-half"></use>
                                        </svg>
                                    </span>
                                    <span>(222)</span>
                                </div>
                                <div class="d-flex justify-content-center align-items-center gap-2">
                                    <del>$24.00</del>
                                    <span class="text-dark fw-semibold">$18.00</span>
                                    <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                                </div>
                                <div class="button-area p-3 pt-0">
                                    <div class="row g-1 mt-2">
                                        <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                                        <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"><svg width="18" height="18">
                                                    <use xlink:href="#cart"></use>
                                                </svg> Add to Cart</a></div>
                                        <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18">
                                                    <use xlink:href="#heart"></use>
                                                </svg></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product-item swiper-slide">
                            <figure>
                                <a href="index.html" title="Product Title">
                                    <img src="images/product-thumb-11.png" alt="Product Thumbnail" class="tab-image">
                                </a>
                            </figure>
                            <div class="d-flex flex-column text-center">
                                <h3 class="fs-6 fw-normal">Pure Squeezed No Pulp Orange Juice</h3>
                                <div>
                                    <span class="rating">
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-half"></use>
                                        </svg>
                                    </span>
                                    <span>(222)</span>
                                </div>
                                <div class="d-flex justify-content-center align-items-center gap-2">
                                    <del>$24.00</del>
                                    <span class="text-dark fw-semibold">$18.00</span>
                                    <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                                </div>
                                <div class="button-area p-3 pt-0">
                                    <div class="row g-1 mt-2">
                                        <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                                        <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"><svg width="18" height="18">
                                                    <use xlink:href="#cart"></use>
                                                </svg> Add to Cart</a></div>
                                        <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18">
                                                    <use xlink:href="#heart"></use>
                                                </svg></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product-item swiper-slide">
                            <figure>
                                <a href="index.html" title="Product Title">
                                    <img src="images/product-thumb-12.png" alt="Product Thumbnail" class="tab-image">
                                </a>
                            </figure>
                            <div class="d-flex flex-column text-center">
                                <h3 class="fs-6 fw-normal">Fresh Oranges</h3>
                                <div>
                                    <span class="rating">
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-half"></use>
                                        </svg>
                                    </span>
                                    <span>(222)</span>
                                </div>
                                <div class="d-flex justify-content-center align-items-center gap-2">
                                    <del>$24.00</del>
                                    <span class="text-dark fw-semibold">$18.00</span>
                                    <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                                </div>
                                <div class="button-area p-3 pt-0">
                                    <div class="row g-1 mt-2">
                                        <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                                        <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"><svg width="18" height="18">
                                                    <use xlink:href="#cart"></use>
                                                </svg> Add to Cart</a></div>
                                        <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18">
                                                    <use xlink:href="#heart"></use>
                                                </svg></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product-item swiper-slide">
                            <figure>
                                <a href="index.html" title="Product Title">
                                    <img src="images/product-thumb-13.png" alt="Product Thumbnail" class="tab-image">
                                </a>
                            </figure>
                            <div class="d-flex flex-column text-center">
                                <h3 class="fs-6 fw-normal">Gourmet Dark Chocolate Bars</h3>
                                <div>
                                    <span class="rating">
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-half"></use>
                                        </svg>
                                    </span>
                                    <span>(222)</span>
                                </div>
                                <div class="d-flex justify-content-center align-items-center gap-2">
                                    <del>$24.00</del>
                                    <span class="text-dark fw-semibold">$18.00</span>
                                    <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                                </div>
                                <div class="button-area p-3 pt-0">
                                    <div class="row g-1 mt-2">
                                        <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                                        <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"><svg width="18" height="18">
                                                    <use xlink:href="#cart"></use>
                                                </svg> Add to Cart</a></div>
                                        <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18">
                                                    <use xlink:href="#heart"></use>
                                                </svg></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <!-- / products-carousel -->

            </div>
        </div>
    </div>
</section>

<section id="latest-products" class="products-carousel">
    <div class="container-lg overflow-hidden pb-5">
        <div class="row">
            <div class="col-md-12">

                <div class="section-header d-flex justify-content-between my-4">

                    <h2 class="section-title">Just arrived</h2>

                    <div class="d-flex align-items-center">
                        <a href="#" class="btn btn-primary me-2">View All</a>
                        <div class="swiper-buttons">
                            <button class="swiper-prev products-carousel-prev btn btn-primary">❮</button>
                            <button class="swiper-next products-carousel-next btn btn-primary">❯</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">

                <div class="swiper">
                    <div class="swiper-wrapper">

                        <div class="product-item swiper-slide">
                            <figure>
                                <a href="index.html" title="Product Title">
                                    <img src="images/product-thumb-20.png" alt="Product Thumbnail" class="tab-image">
                                </a>
                            </figure>
                            <div class="d-flex flex-column text-center">
                                <h3 class="fs-6 fw-normal">Sunstar Fresh Melon Juice</h3>
                                <div>
                                    <span class="rating">
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-half"></use>
                                        </svg>
                                    </span>
                                    <span>(222)</span>
                                </div>
                                <div class="d-flex justify-content-center align-items-center gap-2">
                                    <del>$24.00</del>
                                    <span class="text-dark fw-semibold">$18.00</span>
                                    <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                                </div>
                                <div class="button-area p-3 pt-0">
                                    <div class="row g-1 mt-2">
                                        <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                                        <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"><svg width="18" height="18">
                                                    <use xlink:href="#cart"></use>
                                                </svg> Add to Cart</a></div>
                                        <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18">
                                                    <use xlink:href="#heart"></use>
                                                </svg></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product-item swiper-slide">
                            <figure>
                                <a href="index.html" title="Product Title">
                                    <img src="images/product-thumb-1.png" alt="Product Thumbnail" class="tab-image">
                                </a>
                            </figure>
                            <div class="d-flex flex-column text-center">
                                <h3 class="fs-6 fw-normal">Whole Wheat Sandwich Bread</h3>
                                <div>
                                    <span class="rating">
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-half"></use>
                                        </svg>
                                    </span>
                                    <span>(222)</span>
                                </div>
                                <div class="d-flex justify-content-center align-items-center gap-2">
                                    <del>$24.00</del>
                                    <span class="text-dark fw-semibold">$18.00</span>
                                    <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                                </div>
                                <div class="button-area p-3 pt-0">
                                    <div class="row g-1 mt-2">
                                        <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                                        <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"><svg width="18" height="18">
                                                    <use xlink:href="#cart"></use>
                                                </svg> Add to Cart</a></div>
                                        <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18">
                                                    <use xlink:href="#heart"></use>
                                                </svg></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product-item swiper-slide">
                            <figure>
                                <a href="index.html" title="Product Title">
                                    <img src="images/product-thumb-21.png" alt="Product Thumbnail" class="tab-image">
                                </a>
                            </figure>
                            <div class="d-flex flex-column text-center">
                                <h3 class="fs-6 fw-normal">Sunstar Fresh Melon Juice</h3>
                                <div>
                                    <span class="rating">
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-half"></use>
                                        </svg>
                                    </span>
                                    <span>(222)</span>
                                </div>
                                <div class="d-flex justify-content-center align-items-center gap-2">
                                    <del>$24.00</del>
                                    <span class="text-dark fw-semibold">$18.00</span>
                                    <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                                </div>
                                <div class="button-area p-3 pt-0">
                                    <div class="row g-1 mt-2">
                                        <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                                        <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"><svg width="18" height="18">
                                                    <use xlink:href="#cart"></use>
                                                </svg> Add to Cart</a></div>
                                        <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18">
                                                    <use xlink:href="#heart"></use>
                                                </svg></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product-item swiper-slide">
                            <figure>
                                <a href="index.html" title="Product Title">
                                    <img src="images/product-thumb-22.png" alt="Product Thumbnail" class="tab-image">
                                </a>
                            </figure>
                            <div class="d-flex flex-column text-center">
                                <h3 class="fs-6 fw-normal">Gourmet Dark Chocolate</h3>
                                <div>
                                    <span class="rating">
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-half"></use>
                                        </svg>
                                    </span>
                                    <span>(222)</span>
                                </div>
                                <div class="d-flex justify-content-center align-items-center gap-2">
                                    <del>$24.00</del>
                                    <span class="text-dark fw-semibold">$18.00</span>
                                    <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                                </div>
                                <div class="button-area p-3 pt-0">
                                    <div class="row g-1 mt-2">
                                        <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                                        <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"><svg width="18" height="18">
                                                    <use xlink:href="#cart"></use>
                                                </svg> Add to Cart</a></div>
                                        <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18">
                                                    <use xlink:href="#heart"></use>
                                                </svg></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product-item swiper-slide">
                            <figure>
                                <a href="index.html" title="Product Title">
                                    <img src="images/product-thumb-23.png" alt="Product Thumbnail" class="tab-image">
                                </a>
                            </figure>
                            <div class="d-flex flex-column text-center">
                                <h3 class="fs-6 fw-normal">Sunstar Fresh Melon Juice</h3>
                                <div>
                                    <span class="rating">
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-half"></use>
                                        </svg>
                                    </span>
                                    <span>(222)</span>
                                </div>
                                <div class="d-flex justify-content-center align-items-center gap-2">
                                    <del>$24.00</del>
                                    <span class="text-dark fw-semibold">$18.00</span>
                                    <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                                </div>
                                <div class="button-area p-3 pt-0">
                                    <div class="row g-1 mt-2">
                                        <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                                        <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"><svg width="18" height="18">
                                                    <use xlink:href="#cart"></use>
                                                </svg> Add to Cart</a></div>
                                        <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18">
                                                    <use xlink:href="#heart"></use>
                                                </svg></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product-item swiper-slide">
                            <figure>
                                <a href="index.html" title="Product Title">
                                    <img src="images/product-thumb-10.png" alt="Product Thumbnail" class="tab-image">
                                </a>
                            </figure>
                            <div class="d-flex flex-column text-center">
                                <h3 class="fs-6 fw-normal">Greek Style Plain Yogurt</h3>
                                <div>
                                    <span class="rating">
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-half"></use>
                                        </svg>
                                    </span>
                                    <span>(222)</span>
                                </div>
                                <div class="d-flex justify-content-center align-items-center gap-2">
                                    <del>$24.00</del>
                                    <span class="text-dark fw-semibold">$18.00</span>
                                    <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                                </div>
                                <div class="button-area p-3 pt-0">
                                    <div class="row g-1 mt-2">
                                        <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                                        <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"><svg width="18" height="18">
                                                    <use xlink:href="#cart"></use>
                                                </svg> Add to Cart</a></div>
                                        <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18">
                                                    <use xlink:href="#heart"></use>
                                                </svg></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product-item swiper-slide">
                            <figure>
                                <a href="index.html" title="Product Title">
                                    <img src="images/product-thumb-11.png" alt="Product Thumbnail" class="tab-image">
                                </a>
                            </figure>
                            <div class="d-flex flex-column text-center">
                                <h3 class="fs-6 fw-normal">Pure Squeezed No Pulp Orange Juice</h3>
                                <div>
                                    <span class="rating">
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-half"></use>
                                        </svg>
                                    </span>
                                    <span>(222)</span>
                                </div>
                                <div class="d-flex justify-content-center align-items-center gap-2">
                                    <del>$24.00</del>
                                    <span class="text-dark fw-semibold">$18.00</span>
                                    <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                                </div>
                                <div class="button-area p-3 pt-0">
                                    <div class="row g-1 mt-2">
                                        <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                                        <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"><svg width="18" height="18">
                                                    <use xlink:href="#cart"></use>
                                                </svg> Add to Cart</a></div>
                                        <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18">
                                                    <use xlink:href="#heart"></use>
                                                </svg></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product-item swiper-slide">
                            <figure>
                                <a href="index.html" title="Product Title">
                                    <img src="images/product-thumb-12.png" alt="Product Thumbnail" class="tab-image">
                                </a>
                            </figure>
                            <div class="d-flex flex-column text-center">
                                <h3 class="fs-6 fw-normal">Fresh Oranges</h3>
                                <div>
                                    <span class="rating">
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-half"></use>
                                        </svg>
                                    </span>
                                    <span>(222)</span>
                                </div>
                                <div class="d-flex justify-content-center align-items-center gap-2">
                                    <del>$24.00</del>
                                    <span class="text-dark fw-semibold">$18.00</span>
                                    <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                                </div>
                                <div class="button-area p-3 pt-0">
                                    <div class="row g-1 mt-2">
                                        <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                                        <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"><svg width="18" height="18">
                                                    <use xlink:href="#cart"></use>
                                                </svg> Add to Cart</a></div>
                                        <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18">
                                                    <use xlink:href="#heart"></use>
                                                </svg></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product-item swiper-slide">
                            <figure>
                                <a href="index.html" title="Product Title">
                                    <img src="images/product-thumb-13.png" alt="Product Thumbnail" class="tab-image">
                                </a>
                            </figure>
                            <div class="d-flex flex-column text-center">
                                <h3 class="fs-6 fw-normal">Gourmet Dark Chocolate Bars</h3>
                                <div>
                                    <span class="rating">
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-full"></use>
                                        </svg>
                                        <svg width="18" height="18" class="text-warning">
                                            <use xlink:href="#star-half"></use>
                                        </svg>
                                    </span>
                                    <span>(222)</span>
                                </div>
                                <div class="d-flex justify-content-center align-items-center gap-2">
                                    <del>$24.00</del>
                                    <span class="text-dark fw-semibold">$18.00</span>
                                    <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                                </div>
                                <div class="button-area p-3 pt-0">
                                    <div class="row g-1 mt-2">
                                        <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                                        <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"><svg width="18" height="18">
                                                    <use xlink:href="#cart"></use>
                                                </svg> Add to Cart</a></div>
                                        <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18">
                                                    <use xlink:href="#heart"></use>
                                                </svg></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- / products-carousel -->

            </div>
        </div>
    </div>
</section>

<section id="latest-blog" class="pb-4">
    <div class="container-lg">
        <div class="row">
            <div class="section-header d-flex align-items-center justify-content-between my-4">
                <h2 class="section-title">Our Recent Blog</h2>
                <a href="#" class="btn btn-primary">View All</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <article class="post-item card border-0 shadow-sm p-3">
                    <div class="image-holder zoom-effect">
                        <a href="#">
                            <img src="images/post-thumbnail-1.jpg" alt="post" class="card-img-top">
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="post-meta d-flex text-uppercase gap-3 my-2 align-items-center">
                            <div class="meta-date"><svg width="16" height="16">
                                    <use xlink:href="#calendar"></use>
                                </svg>22 Aug 2021</div>
                            <div class="meta-categories"><svg width="16" height="16">
                                    <use xlink:href="#category"></use>
                                </svg>tips & tricks</div>
                        </div>
                        <div class="post-header">
                            <h3 class="post-title">
                                <a href="#" class="text-decoration-none">Top 10 casual look ideas to dress up your kids</a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipi elit. Aliquet eleifend viverra enim tincidunt donec quam. A in arcu, hendrerit neque dolor morbi...</p>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-md-4">
                <article class="post-item card border-0 shadow-sm p-3">
                    <div class="image-holder zoom-effect">
                        <a href="#">
                            <img src="images/post-thumbnail-2.jpg" alt="post" class="card-img-top">
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="post-meta d-flex text-uppercase gap-3 my-2 align-items-center">
                            <div class="meta-date"><svg width="16" height="16">
                                    <use xlink:href="#calendar"></use>
                                </svg>25 Aug 2021</div>
                            <div class="meta-categories"><svg width="16" height="16">
                                    <use xlink:href="#category"></use>
                                </svg>trending</div>
                        </div>
                        <div class="post-header">
                            <h3 class="post-title">
                                <a href="#" class="text-decoration-none">Latest trends of wearing street wears supremely</a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipi elit. Aliquet eleifend viverra enim tincidunt donec quam. A in arcu, hendrerit neque dolor morbi...</p>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-md-4">
                <article class="post-item card border-0 shadow-sm p-3">
                    <div class="image-holder zoom-effect">
                        <a href="#">
                            <img src="images/post-thumbnail-3.jpg" alt="post" class="card-img-top">
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="post-meta d-flex text-uppercase gap-3 my-2 align-items-center">
                            <div class="meta-date"><svg width="16" height="16">
                                    <use xlink:href="#calendar"></use>
                                </svg>28 Aug 2021</div>
                            <div class="meta-categories"><svg width="16" height="16">
                                    <use xlink:href="#category"></use>
                                </svg>inspiration</div>
                        </div>
                        <div class="post-header">
                            <h3 class="post-title">
                                <a href="#" class="text-decoration-none">10 Different Types of comfortable clothes ideas for women</a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipi elit. Aliquet eleifend viverra enim tincidunt donec quam. A in arcu, hendrerit neque dolor morbi...</p>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

<section class="pb-4 my-4">
    <div class="container-lg">

        <div class="bg-warning pt-5 rounded-5">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-4">
                        <h2 class="mt-5">Download Organic App</h2>
                        <p>Online Orders made easy, fast and reliable</p>
                        <div class="d-flex gap-2 flex-wrap mb-5">
                            <a href="#" title="App store"><img src="images/img-app-store.png" alt="app-store"></a>
                            <a href="#" title="Google Play"><img src="images/img-google-play.png" alt="google-play"></a>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <img src="images/banner-onlineapp.png" alt="phone" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="py-4">
    <div class="container-lg">
        <h2 class="my-4">People are also looking for</h2>
        <a href="#" class="btn btn-warning me-2 mb-2">Blue diamon almonds</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Angie’s Boomchickapop Corn</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Salty kettle Corn</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Chobani Greek Yogurt</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Sweet Vanilla Yogurt</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Foster Farms Takeout Crispy wings</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Warrior Blend Organic</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Chao Cheese Creamy</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Chicken meatballs</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Blue diamon almonds</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Angie’s Boomchickapop Corn</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Salty kettle Corn</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Chobani Greek Yogurt</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Sweet Vanilla Yogurt</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Foster Farms Takeout Crispy wings</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Warrior Blend Organic</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Chao Cheese Creamy</a>
        <a href="#" class="btn btn-warning me-2 mb-2">Chicken meatballs</a>
    </div>
</section>

<section class="py-5">
    <div class="container-lg">
        <div class="row row-cols-1 row-cols-sm-3 row-cols-lg-5">
            <div class="col">
                <div class="card mb-3 border border-dark-subtle p-3">
                    <div class="text-dark mb-3">
                        <svg width="32" height="32">
                            <use xlink:href="#package"></use>
                        </svg>
                    </div>
                    <div class="card-body p-0">
                        <h5>Free delivery</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipi elit.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-3 border border-dark-subtle p-3">
                    <div class="text-dark mb-3">
                        <svg width="32" height="32">
                            <use xlink:href="#secure"></use>
                        </svg>
                    </div>
                    <div class="card-body p-0">
                        <h5>100% secure payment</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipi elit.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-3 border border-dark-subtle p-3">
                    <div class="text-dark mb-3">
                        <svg width="32" height="32">
                            <use xlink:href="#quality"></use>
                        </svg>
                    </div>
                    <div class="card-body p-0">
                        <h5>Quality guarantee</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipi elit.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-3 border border-dark-subtle p-3">
                    <div class="text-dark mb-3">
                        <svg width="32" height="32">
                            <use xlink:href="#savings"></use>
                        </svg>
                    </div>
                    <div class="card-body p-0">
                        <h5>guaranteed savings</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipi elit.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-3 border border-dark-subtle p-3">
                    <div class="text-dark mb-3">
                        <svg width="32" height="32">
                            <use xlink:href="#offers"></use>
                        </svg>
                    </div>
                    <div class="card-body p-0">
                        <h5>Daily offers</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipi elit.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
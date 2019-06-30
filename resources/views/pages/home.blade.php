@extends('master')
@section('body')
@include('section.slider')

<div role="main" class="main">
    <section class="section section-height-3  border-0 m-0 appear-animation"
        data-appear-animation="fadeIn" data-appear-animation-delay="200">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter"
                    data-appear-animation-delay="400">
                    <img src="{{url('public/asset/theme')}}/img/demos/product-landing/product-2.jpg" class="img-fluid"
                        alt="" />
                </div>
                <div class="col-lg-6">
                    <div class="overflow-hidden mb-4">
                        <h2 class="font-weight-semibold ls-0 mb-0 appear-animation" data-appear-animation="maskUp"
                            data-appear-animation-delay="500">PORTO HEADPHONE</h2>
                    </div>
                    <p class="mb-4 pb-3 appear-animation" data-appear-animation="fadeInUpShorter"
                        data-appear-animation-delay="700">Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                        1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
                        book. It has survived not only five centurie</p>
                    <a href="#"
                        class="btn btn-primary btn-outline btn-rounded font-weight-bold btn-px-5 btn-py-2 appear-animation"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">FEATURES</a>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row align-items-center mt-5">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="overflow-hidden mb-4">
                    <h2 class="font-weight-semibold ls-0 mb-0 appear-animation" data-appear-animation="maskUp"
                        data-appear-animation-delay="300">BLUETHOOTH CONNECTION</h2>
                </div>
                <p class="mb-4 pb-3 appear-animation" data-appear-animation="fadeInUpShorter"
                    data-appear-animation-delay="500">Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                    unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived
                    not only five centuries, but also the leap into electronic typesetting.</p>
                <a href="#"
                    class="btn btn-primary btn-outline btn-rounded font-weight-bold btn-px-5 btn-py-2 appear-animation"
                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">TESTIMONIALS</a>
            </div>
            <div class="col-lg-5 offset-lg-1 appear-animation" data-appear-animation="fadeInLeftShorter"
                data-appear-animation-delay="200">
                <img src="{{url('public/asset/theme')}}/img/demos/product-landing/product-3.jpg" class="img-fluid"
                    alt="" />
            </div>
        </div>
    </div>
@include('section.recentProduct')
    <!-- <section
        class="section section-height-3 bg-color-grey-scale-1 border-0 custom-section-padding-1 m-0 appear-animation"
        data-appear-animation="fadeIn" data-appear-animation-delay="200">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter"
                    data-appear-animation-delay="400">
                    <img src="{{url('public/asset/theme')}}/img/demos/product-landing/product-4.jpg"
                        class="img-fluid custom-product-image-style-2" alt="" />
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="overflow-hidden mb-4">
                        <h2 class="font-weight-semibold ls-0 mb-0 appear-animation" data-appear-animation="maskUp"
                            data-appear-animation-delay="500">EXTRA QUALITY SOUND</h2>
                    </div>
                    <p class="mb-4 pb-3 appear-animation" data-appear-animation="fadeInUpShorter"
                        data-appear-animation-delay="700">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Aliquam ac metus at elit malesuada tristique ut at est. Donec ut iaculis nunc. Nullam egestas
                        nec erat a tincidunt. Mauris metus metus, bibendum id convallis non, commodo in lacus. Maecenas
                        maximus consequat varius. Praesent ullamcorper non lectus ac ultrices.</p>
                    <a href="#"
                        class="btn btn-primary btn-outline btn-rounded font-weight-bold btn-px-5 btn-py-2 appear-animation"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">BUY NOW!</a>
                </div>
            </div>
        </div>
    </section> -->

    <div class="container">
        <div class="row pt-4 mt-5">
            <div class="col text-center">
                <h2 class="font-weight-semibold ls-0 mb-5">TESTIMONIALS</h2>
            </div>
        </div>
        <div class="row pb-4 mb-5">
            <div class="col">
                <div class="owl-carousel owl-theme mb-0"
                    data-plugin-options="{'responsive': {'0': {'items': 1}, '476': {'items': 1}, '768': {'items': 2}, '992': {'items': 2}, '1200': {'items': 2}}, 'dots': true, 'nav': false, 'margin': 40}">
                    <div>
                        <div class="row justify-content-center">
                            <div class="col-6 col-lg-3">
                                <img src="{{url('public/asset/theme')}}/img/clients/client-1.jpg"
                                    class="img-fluid rounded-circle" width="160" alt="" />
                            </div>
                            <div class="col-lg-9">
                                <i class="fas fa-quote-left text-color-primary mb-2"></i>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget quam auctor,
                                    faucibus mi ac, ultrices eros. Sed maximus risus sem, nec imperdiet nulla posuere
                                    vitae. Aenean a rutrum dolor. Ut quis nunc ligula. Fusce.</p>
                                <strong class="text-color-dark font-weight-semibold text-4">John Doe</strong>
                                <input type="text" class="rating-invisible" value="3" title="" data-plugin-star-rating
                                    data-plugin-options="{'displayOnly': true, 'color': 'primary'}">
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="row justify-content-center">
                            <div class="col-6 col-lg-3">
                                <img src="{{url('public/asset/theme')}}/img/clients/client-2.jpg"
                                    class="img-fluid rounded-circle" width="160" alt="" />
                            </div>
                            <div class="col-lg-9">
                                <i class="fas fa-quote-left text-color-primary mb-2"></i>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget quam auctor,
                                    faucibus mi ac, ultrices eros. Sed maximus risus sem, nec imperdiet nulla posuere
                                    vitae. Aenean a rutrum dolor. Ut quis nunc ligula. Fusce.</p>
                                <strong class="text-color-dark font-weight-semibold text-4">John Doe</strong>
                                <input type="text" class="rating-invisible" value="3" title="" data-plugin-star-rating
                                    data-plugin-options="{'displayOnly': true, 'color': 'primary'}">
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="row justify-content-center">
                            <div class="col-6 col-lg-3">
                                <img src="{{url('public/asset/theme')}}/img/clients/client-3.jpg"
                                    class="img-fluid rounded-circle" width="160" alt="" />
                            </div>
                            <div class="col-lg-9">
                                <i class="fas fa-quote-left text-color-primary mb-2"></i>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget quam auctor,
                                    faucibus mi ac, ultrices eros. Sed maximus risus sem, nec imperdiet nulla posuere
                                    vitae. Aenean a rutrum dolor. Ut quis nunc ligula. Fusce.</p>
                                <strong class="text-color-dark font-weight-semibold text-4">John Doe</strong>
                                <input type="text" class="rating-invisible" value="3" title="" data-plugin-star-rating
                                    data-plugin-options="{'displayOnly': true, 'color': 'primary'}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr>

    <!-- <div class="container shop">
        <div class="row align-items-center justify-content-center py-5 my-5">
            <div class="col-lg-7">
                <div class="owl-carousel owl-theme dots-inside mb-0"
                    data-plugin-options="{'responsive': {'0': {'items': 1}, '476': {'items': 1}, '768': {'items': 1}, '992': {'items': 1}, '1200': {'items': 1}}, 'dots': true, 'nav': false}">
                    <div>
                        <img src="{{url('public/asset/theme')}}/img/demos/product-landing/product-carousel-1.jpg"
                            class="img-fluid" alt="" />
                    </div>
                    <div>
                        <img src="{{url('public/asset/theme')}}/img/demos/product-landing/product-carousel-1-2.jpg"
                            class="img-fluid" alt="" />
                    </div>
                    <div>
                        <img src="{{url('public/asset/theme')}}/img/demos/product-landing/product-carousel-1-3.jpg"
                            class="img-fluid" alt="" />
                    </div>
                </div>
            </div>
            <div class="col-lg-5 pt-4">
                <div class="summary entry-summary">

                    <h2 class="font-weight-bold text-7 mb-0">PORTO HEADPHONE</h2>

                    <div class="pb-0 clearfix">
                        <div title="Rated 3 out of 5" class="float-left">
                            <input type="text" class="d-none" value="3" title="" data-plugin-star-rating
                                data-plugin-options="{'displayOnly': true, 'color': 'primary', 'size':'xs'}">
                        </div>
                    </div>

                    <p class="price">
                        <span class="amount">$350</span>
                    </p>

                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempus nibh sed
                        elimttis adipiscing. Fusce in hendrerit purus. Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Sed tempus nibh sed elimttis adipiscing. Fusce in hendrerit purus. </p>

                    <form enctype="multipart/form-data" method="post" class="cart">
                        <div class="quantity quantity-lg">
                            <input type="button" class="minus" value="-">
                            <input type="text" class="input-text qty text" title="Qty" value="1" name="quantity" min="1"
                                step="1">
                            <input type="button" class="plus" value="+">
                        </div>
                        <a href="#" class="btn btn-primary btn-modern text-uppercase">BUY NOW</a>
                    </form>

                </div>

            </div>
        </div>
    </div> -->

    <section class="section section-height-5 border-0 m-0 appear-animation" data-appear-animation="fadeIn"
        data-appear-animation-delay="200"
        style="background-image: url(img/demos/product-landing/backgrounds/background-1.jpg); background-size: cover; background-position: center;">
        <div class="container py-5 my-5">
            <div class="row">
                <div class="col text-center">
                    <h2 class="text-color-light font-weight-semibold text-10 ls-0 appear-animation"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">EXPLORE THE BEST FOR
                        YOU</h2>
                    <a class="text-decoration-none lightbox custom-play-button-1 appear-animation"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600"
                        href="https://vimeo.com/45830194" data-plugin-options="{'type':'iframe'}">
                        <i class="fas fa-play"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@extends('layout')
@section('title')
<title>SeratusPlus || Home</title>
@endsection
@section('content')
<!-- START SLIDER SECTION -->
<div class="home-slider-section section">
    <!-- Home Slider -->
    <div id="home-slider" class="slides">   
        <img src="{{asset('front/img/slider/1.jpg')}}" alt="" title="#slider-caption-1"  />
        <img src="{{asset('front/img/slider/2.jpg')}}" alt="" title="#slider-caption-2"  />
    </div>
    <!-- Caption 1 -->
    <div id="slider-caption-1" class="nivo-html-caption">
        <div class="container">
            <div class="row">
                <div class="hero-slider-content col-md-6 col-md-offset-6 col-sm-7 col-sm-offset-5 col-xs-12">
                    <h4 class="wow rotateInDownLeft" data-wow-duration="1s" data-wow-delay="0.5s">welcome to our</h4>
                    <h1 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">furniture gallery</h1>
                    <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                    <a href="product-details.html" class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="2s">Buy now</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Caption 2 -->
    <div id="slider-caption-2" class="nivo-html-caption">
        <div class="container">
            <div class="row">
                <div class="hero-slider-content col-md-6 col-md-offset-6 col-sm-7 col-sm-offset-5 col-xs-12">
                    <h4 class="wow rotateInDownLeft" data-wow-duration="1s" data-wow-delay="0.5s">welcome to our</h4>
                    <h1 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">furniture gallery</h1>
                    <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                    <a href="product-details.html" class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="2s">Buy now</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END SLIDER SECTION -->
<div class="product-section section pt-20 pb-20" style="height: 150px;">
    <div class="container">
        <div class="row">
            <div class="product-slider product-slider-4">
                <!-- product-item start -->
                <div class="col-xs-12 col-md-12">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="single-banner">
                                <a href="#"><img src="{{asset('front/img/banner/1.jpg')}}" height="110" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xs-6 pt-20 slidermini">
                            <p class="text-cabin" style="color: black;font-size: 9px;line-height: normal;margin-bottom: 20px;" >FEATURED PRODUCT</p>       
                            <p class="text-cabin" style="color: black;font-size: 11px;line-height: normal;" >BIKA LIVING<br>FURNITURE</p>       
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-12">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="single-banner">
                                <a href="#"><img src="{{asset('front/img/banner/1.jpg')}}" height="110" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xs-6 pt-20 slidermini">
                            <p class="text-cabin" style="color: black;font-size: 9px;line-height: normal;margin-bottom: 20px;" >FEATURED PRODUCT</p>       
                            <p class="text-cabin" style="color: black;font-size: 11px;line-height: normal;" >BIKA LIVING<br>FURNITURE</p>       
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-12">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="single-banner">
                                <a href="#"><img src="{{asset('front/img/banner/1.jpg')}}" height="110" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xs-6 pt-20 slidermini">
                            <p class="text-cabin" style="color: black;font-size: 9px;line-height: normal;margin-bottom: 20px;" >FEATURED PRODUCT</p>       
                            <p class="text-cabin" style="color: black;font-size: 11px;line-height: normal;" >BIKA LIVING<br>FURNITURE</p>       
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-12">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="single-banner">
                                <a href="#"><img src="{{asset('front/img/banner/1.jpg')}}" height="110" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xs-6 pt-20 slidermini">
                            <p class="text-cabin" style="color: black;font-size: 9px;line-height: normal;margin-bottom: 20px;" >FEATURED PRODUCT</p>       
                            <p class="text-cabin" style="color: black;font-size: 11px;line-height: normal;" >BIKA LIVING<br>FURNITURE</p>       
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section hidden-md hidden-lg">
    <div class="container" style="">
        <div class="col-sm-12 col-xs-12 text-center pt-10 pb-10" style="font-weight: bold;line-height: 14px;border-bottom: solid 3px black;border-top: solid 3px black;">
            Explore Seratus Plus
        </div>
    </div>
</div>
<div class="section hidden-md hidden-lg">
    <div class="container" style="">
        <div class="col-sm-12 col-xs-12 text-left pt-10 pb-10" style="line-height: 14px;border-bottom: solid 3px black;">
            Product & Work Categoris
        </div>
    </div>
</div>
<div class="section hidden-md hidden-lg">
    <div class="container" style="">
        <div class="col-sm-12 col-xs-12 text-left pt-10 pb-10" style="line-height: 14px;border-bottom: solid 3px black;">
            A-Z Brand & Showroom
        </div>
    </div>
</div>
<div class="banner-section section pt-20 pb-40">
    <div class="container">        
        <div class="col-md-offset-2 col-md-8" style="background-color: darkblue">
            <br>
            <br>
            <br>
        </div>
    </div>
</div>
<div class="banner-section section pt-40 pb-40 hidden-sm hidden-xs" style="background-color: #e0c4cc">
    <div class="container" style="margin-left: 15%;margin-right: 15%;width: 70%">
        <div class="row">
            <div class="col-md-4 text-center">
                <button class="text-cabin box-btn">Browse by<br style="display: block;margin: 6px 0">Product / Work<br style="display: block;margin: 6px 0">Categories</button>
            </div>
            <div class="col-md-4 hidden-sm text-center">
            </div>
            <div class="col-md-4 text-center">
                <button class="text-cabin box-btn">A - Z<br style="display: block;margin: 6px 0">Brand & Showroom<br style="display: block;margin: 6px 0">Names</button>

            </div>
        </div>
    </div>
</div>

<div class="blog-section section pt-30 pb-30 bg-abuabu">
    <div class="container" style="padding-left: 2%;padding-right: 2%;padding-bottom: 0;width: 96%">
        <!--                    <div class="row">
                                <div class="section-title text-center col-xs-12 mb-70">
                                    <h4>latest from</h4>
                                    <h2>out blog</h2>
                                </div>
                            </div>-->
        <div class="row">
            <!-- blog-item start -->
            <div class="col-md-12 pb-20 text-center-sm text-center-xs">
                <span class="text-14 text-cabin" style="font-weight: bold;">CURATED LIST</span>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="blog-item bg-putih">
                    <a class="image" href="blog-details.html"><img src="{{asset('front/img/blog/1.jpg')}}" alt=""></a>
                    <div class="blog-dsc" style="padding-left: 15px">
                        <h4 class="title"><a href="#">100+ GERAI INTERIOR PILIHAN: JAKARTA</a></h4>
                        <span class="author pb-20">
                            <a href="#"><i class="fa fa-facebook pr-15"></i></a>
                            <a href="#"><i class="fa fa-instagram pr-15"></i></a>
                            <a href="#"><i class="fa fa-rss pr-15"></i></a>
                            <a href="#"><i class="fa fa-twitter pr-15"></i></a>
                            <a href="#"><i class="fa fa-pinterest pr-15"></i></a>
                        </span>
                    </div>
                </div>
                <div class="blog-item bg-putih" style="margin-top: 250px">
                    <a class="image" href="blog-details.html"><img src="{{asset('front/img/blog/2.jpg')}}" alt=""></a>
                    <div class="blog-dsc" style="padding-left: 15px">
                        <h4 class="title"><a href="#">100+ GERAI INTERIOR PILIHAN: JAKARTA</a></h4>
                        <span class="author pb-20">
                            <a href="#"><i class="fa fa-facebook pr-15"></i></a>
                            <a href="#"><i class="fa fa-instagram pr-15"></i></a>
                            <a href="#"><i class="fa fa-rss pr-15"></i></a>
                            <a href="#"><i class="fa fa-twitter pr-15"></i></a>
                            <a href="#"><i class="fa fa-pinterest pr-15"></i></a>
                        </span>
                    </div>
                </div>
            </div>
            <!-- blog-item end -->
            <!-- blog-item start -->
            <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="blog-item bg-putih" style="margin-top: 350px">
                    <a class="image" href="blog-details.html"><img src="{{asset('front/img/blog/2.jpg')}}" alt=""></a>
                    <div class="blog-dsc" style="padding-left: 15px">
                        <h4 class="title"><a href="#">100+ GERAI INTERIOR PILIHAN: JAKARTA</a></h4>
                        <span class="author pb-20">
                            <a href="#"><i class="fa fa-facebook pr-15"></i></a>
                            <a href="#"><i class="fa fa-instagram pr-15"></i></a>
                            <a href="#"><i class="fa fa-rss pr-15"></i></a>
                            <a href="#"><i class="fa fa-twitter pr-15"></i></a>
                            <a href="#"><i class="fa fa-pinterest pr-15"></i></a>
                        </span>
                    </div>
                </div>
                <div class="" style="margin-top: 30px;">
                    <img src="{{asset('front/img/blog/1.jpg')}}" width="250" height="250" alt="">                                
                </div>

            </div>
            <!-- blog-item end -->
        </div>
    </div>
</div>

<!-- PRODUCT SECTION START -->
<div class="product-section section pt-30 pb-30">
    <div class="container">
        <p class="text-cabin text-center-sm text-center-xs" style="font-size: 12px;font-weight: 400;color: black;margin-bottom: 20px">Latest Product</p>
    </div>
    <div class="container">        
        <div class="row">
            <div class="product-slider product-slider-4">
                <!-- product-item start -->
                <div class="col-xs-12">
                    <div class="product-item text-center">
                        <div class="product-img">
                            <a class="image" href="product-details.html"><img src="{{asset('front/img/product/1.jpg')}}" height="200" alt=""/></a>                                        
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="product-item text-center">
                        <div class="product-img">
                            <a class="image" href="product-details.html"><img src="{{asset('front/img/product/1.jpg')}}" height="200" alt=""/></a>                                        
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="product-item text-center">
                        <div class="product-img">
                            <a class="image" href="product-details.html"><img src="{{asset('front/img/product/1.jpg')}}" height="200" alt=""/></a>                                        
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="product-item text-center">
                        <div class="product-img">
                            <a class="image" href="product-details.html"><img src="{{asset('front/img/product/1.jpg')}}" height="200" alt=""/></a>                                        
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="product-item text-center">
                        <div class="product-img">
                            <a class="image" href="product-details.html"><img src="{{asset('front/img/product/1.jpg')}}" height="200" alt=""/></a>                                        
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="product-item text-center">
                        <div class="product-img">
                            <a class="image" href="product-details.html"><img src="{{asset('front/img/product/1.jpg')}}" height="200" alt=""/></a>                                        
                        </div>
                    </div>
                </div>
                <!-- product-item end -->
            </div>
        </div>
    </div>
</div>

<div class="blog-section section pt-30 pb-30 bg-abuabu hidden" id="exp">
    <div class="container" style="padding-left: 2%;padding-right: 2%;padding-bottom: 0;width: 96%">
        <div class="row">
            <!-- blog-item start -->            
            <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="blog-item bg-putih">
                    <a class="image" href="blog-details.html"><img src="{{asset('front/img/blog/1.jpg')}}" alt=""></a>
                    <div class="blog-dsc" style="padding-left: 15px">
                        <h4 class="title"><a href="#">100+ GERAI INTERIOR PILIHAN: JAKARTA</a></h4>
                        <span class="author pb-20">
                            <a href="#"><i class="fa fa-facebook pr-15"></i></a>
                            <a href="#"><i class="fa fa-instagram pr-15"></i></a>
                            <a href="#"><i class="fa fa-rss pr-15"></i></a>
                            <a href="#"><i class="fa fa-twitter pr-15"></i></a>
                            <a href="#"><i class="fa fa-pinterest pr-15"></i></a>
                        </span>
                    </div>
                </div>
                <div class="blog-item bg-putih" style="margin-top: 250px">
                    <a class="image" href="blog-details.html"><img src="{{asset('front/img/blog/2.jpg')}}" alt=""></a>
                    <div class="blog-dsc" style="padding-left: 15px">
                        <h4 class="title"><a href="#">100+ GERAI INTERIOR PILIHAN: JAKARTA</a></h4>
                        <span class="author pb-20">
                            <a href="#"><i class="fa fa-facebook pr-15"></i></a>
                            <a href="#"><i class="fa fa-instagram pr-15"></i></a>
                            <a href="#"><i class="fa fa-rss pr-15"></i></a>
                            <a href="#"><i class="fa fa-twitter pr-15"></i></a>
                            <a href="#"><i class="fa fa-pinterest pr-15"></i></a>
                        </span>
                    </div>
                </div>
            </div>
            <!-- blog-item end -->
            <!-- blog-item start -->
            <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="blog-item bg-putih" style="margin-top: 350px">
                    <a class="image" href="blog-details.html"><img src="{{asset('front/img/blog/2.jpg')}}" alt=""></a>
                    <div class="blog-dsc" style="padding-left: 15px">
                        <h4 class="title"><a href="#">100+ GERAI INTERIOR PILIHAN: JAKARTA</a></h4>
                        <span class="author pb-20">
                            <a href="#"><i class="fa fa-facebook pr-15"></i></a>
                            <a href="#"><i class="fa fa-instagram pr-15"></i></a>
                            <a href="#"><i class="fa fa-rss pr-15"></i></a>
                            <a href="#"><i class="fa fa-twitter pr-15"></i></a>
                            <a href="#"><i class="fa fa-pinterest pr-15"></i></a>
                        </span>
                    </div>
                </div>
                <div class="" style="margin-top: 30px;">
                    <img src="{{asset('front/img/blog/1.jpg')}}" width="250" height="250" alt="">                                
                </div>

            </div>
            <!-- blog-item end -->
        </div>
    </div>
</div>
<!-- PRODUCT SECTION END --> 
<div class="section pt-20 pb-50">
    <div class="container">
        <button class="no-border text-cabin pt-20 pb-20" id="more" style="background-color: #e0c4cc;width: 100%;color: black;"> More Curated List</button>
    </div>
</div>
@endsection
@section('css')
<style media="screen" type="text/css">
    .box-btn {
        background-color: #e0c4cc;
        border: solid 2px black; 
        height: 150px;
        width: 125%;
        color: black;
        font-size: 20px;
        font-weight: 500;
        padding-top: 10px;
        padding-bottom: 10px;
    }
    .blog-item .image{
        height: 619px;
    }
</style>
@endsection
@section('js')
</script><script type="text/javascript">
    $(document).ready(function () {
        $('#more').click(function () {
            $('#exp').removeClass('hidden');
        })
    });
</script>

@endsection
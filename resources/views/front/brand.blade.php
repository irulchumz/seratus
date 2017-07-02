@extends('layout')
@section('title')
<title>SeratusPlus || Brands</title>
@endsection
@section('content')
<div class="section pt-60 pb-20">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="#">HOME</a></li>
        </ul>
        <span class="title">PRODUK & KARYA</span>
    </div>
</div>
<!-- PRODUCT SECTION START -->
<div class="container pt-20">
    <h5>Highlight</h5>
</div>
<div class="product-section section pt-20 pb-20 bg-abuabu" style="height: 150px;">
    <div class="container">
        <div class="row">
            <div class="product-slider product-slider-4">
                <!-- product-item start -->
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="product-item text-center">
                                <div class="single-banner">
                                    <a class="image" href="product-details.html"><img src="{{asset('front/img/product/1.jpg')}}" height="110" alt=""/></a>                                        
                                </div>
                            </div>        
                        </div>
                        <div class="col-xs-6 pt-60">
                            <span class="text-16">Title</span><br>      
                            <span class="text-16">Brand</span>      
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="product-item text-center">
                                <div class="single-banner">
                                    <a class="image" href="product-details.html"><img src="{{asset('front/img/product/1.jpg')}}" height="110" alt=""/></a>                                        
                                </div>
                            </div>        
                        </div>
                        <div class="col-xs-6 pt-60">
                            <span class="text-16">Title</span><br>      
                            <span class="text-16">Brand</span>      
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="product-item text-center">
                                <div class="single-banner">
                                    <a class="image" href="product-details.html"><img src="{{asset('front/img/product/1.jpg')}}" height="110" alt=""/></a>                                        
                                </div>
                            </div>        
                        </div>
                        <div class="col-xs-6 pt-60">
                            <span class="text-16">Title</span><br>      
                            <span class="text-16">Brand</span>      
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="product-item text-center">
                                <div class="single-banner">
                                    <a class="image" href="product-details.html"><img src="{{asset('front/img/product/1.jpg')}}" height="110" alt=""/></a>                                        
                                </div>
                            </div>        
                        </div>
                        <div class="col-xs-6 pt-60">
                            <span class="text-16">Title</span><br>      
                            <span class="text-16">Brand</span>      
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="product-item text-center">
                                <div class="single-banner">
                                    <a class="image" href="product-details.html"><img src="{{asset('front/img/product/1.jpg')}}" height="110" alt=""/></a>                                        
                                </div>
                            </div>        
                        </div>
                        <div class="col-xs-6 pt-60">
                            <span class="text-16">Title</span><br>      
                            <span class="text-16">Brand</span>      
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="product-item text-center">
                                <div class="single-banner">
                                    <a class="image" href="product-details.html"><img src="{{asset('front/img/product/1.jpg')}}" height="110" alt=""/></a>                                        
                                </div>
                            </div>        
                        </div>
                        <div class="col-xs-6 pt-60">
                            <span class="text-16">Title</span><br>      
                            <span class="text-16">Brand</span>      
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="product-item text-center">
                                <div class="single-banner">
                                    <a class="image" href="product-details.html"><img src="{{asset('front/img/product/1.jpg')}}" height="110" alt=""/></a>                                        
                                </div>
                            </div>        
                        </div>
                        <div class="col-xs-6 pt-60">
                            <span class="text-16">Title</span><br>      
                            <span class="text-16">Brand</span>      
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- PRODUCT SECTION END --> 
<!-- PRODUCT SECTION END --> 
<div class="section pt-40 pb-10">
    <div class="container">
        <div class="single-sidebar">
            <form action="#" class="sidebar-search">
                <input type="text" name="query" placeholder="Cari: Kursi, Meja, Pantry ...." style="border-color: #e0c4cc;color: #e0c4cc">                
            </form>
        </div>
    </div>
</div>
<div class="section pt-10 pb-20">
    <div class="container">
        <h5 style="margin-bottom: 15px;">Filter By</h5>
        <ul class="menu-bawah">
            <li>
                <div class="item-per-page" style="float: left;">
                    <select style="width: auto">
                        <option value="1">BRANDS/SHOWROOM</option>
                    </select>
                </div>
            </li>
            <li>
                <div class="item-per-page" style="float: left">
                    <select>
                        <option value="1">HIGHLIGHTS</option>
                    </select>
                </div>
            </li>
            <li>
                <div class="item-per-page" style="float: left">
                    <select>
                        <option value="1">LOCATION</option>
                    </select>
                </div>
            </li>
            <li>
                <div class="item-per-page" style="float: left">
                    <select>
                        <option value="1">ORIGIN</option>
                    </select>
                </div>
            </li>
        </ul>
    </div>
</div>
<div class="section pt-10 pb-20">
    <div class="container">
        <h5 style="margin-bottom: 15px;">Sort By</h5>
        <ul class="menu-abjad">
            <li>#</li>
            <li>0 - 9</li>
            <li>A</li>
            <li>B</li>
            <li>C</li>
            <li>E</li>
            <li>F</li>
            <li>G</li>
            <li>H</li>
            <li>I</li>
            <li>J</li>
            <li>J</li>
            <li>K</li>
            <li>L</li>
            <li>M</li>
            <li>N</li>
            <li>O</li>
            <li>P</li>
            <li>Q</li>
            <li>R</li>
            <li>S</li>
            <li>T</li>
            <li>U</li>
            <li>V</li>
            <li>W</li>
            <li>Y</li>
            <li>Z</li>
        </ul>
    </div>
</div>
<div class="section pt-10 pb-10">
    <div class="container">
        <ul class="brand-list">
            <li class="love">AEDI</li>
            <li>AEDI</li>
            <li>AEDI</li>
            <li>AEDI</li>
            <li>AEDI</li>
            <li>AEDI</li>
            <li>AEDI</li>
            <li>AEDI</li>
            <li>AEDI</li>
            <li>AEDI</li>
            <li>AEDI</li>
            <li>AEDI</li>
            <li>AEDI</li>
            <li>AEDI</li>
            <li>AEDI</li>
            <li>AEDI</li>
            <li>AEDI</li>
            <li>AEDI</li>
            <li>AEDI</li>
            <li>AEDI</li>
            <li>AEDI</li>
        </ul>
    </div>
</div>
<div class="section pt-10 pb-40">
    <div class="container">
        <a id="expand"><img class="expand" src="{{asset('front/image/va-slide-down.png')}}"></a>
    </div>
</div>
<div class="section pt-30 pb-30 bg-abuabu">
    <div class="container text-center pt-30 pb-30">
        <p class="text-cabin" style="color: black">INGIN MEMASTIKAN KONSUMEN TAU DIMANA BISA MENDAPATKAN PRODUK ANDA?<br>TEMUKAN CARANYA DISINI</p>
    </div>
</div>

@endsection
@section('css')
<style media="screen" type="text/css">
    img.expand {
        margin-top: -200px;
    }
    ul.menu-abjad > li
    {
        font-family: Cabin;
        font-weight: bold;
        display: inline-block;
        list-style-type: none;
        padding-right: 15px;
        float: left;
        color: black
    }
    ul.brand-list {
        list-style: none;
        /*padding: 0;*/
        padding-left: 1.3em;
    }
    ul.brand-list > li {
        font-family: Cabin;
        font-size: 36px;
        font-weight: bold;
        padding-left: 1.3em;
        line-height: normal;
    }
    ul.brand-list > li.love:before {
        content: "\f004"; /* FontAwesome Unicode */
        color: #0071bc;
        font-family: FontAwesome;
        font-size: 20px;
        display: inline-block;
        margin-left: -1.3em; /* same as padding-left set on li */
        width: 2.9em; /* same as padding-left set on li */
    }
    ul.brand-list > li:before {
        content: "\f004"; /* FontAwesome Unicode */
        color: white;
        font-family: FontAwesome;
        font-size: 20px;
        display: inline-block;
        margin-left: -1.3em; /* same as padding-left set on li */
        width: 2.9em; /* same as padding-left set on li */
    }
</style>
@endsection
@section('js')
<script type="text/javascript">
    $(document).ready(function () {
        $('#expand').click(function () {
            for(var i =0;i<10;i++){
                $('.brand-list').append('<li>CAHAYA</li>');
            }
        })
    });
    function open() {
        $('#modalView').modal('show');
    }
</script>
@endsection
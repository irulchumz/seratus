@extends('layout')
@section('title')
<title>SeratusPlus || Loved Products</title>
@endsection
@section('content')
<div class="section pt-60">
    <div class="container">
        <span class="title" style="">Hello, Fryza&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|<span class="kecil">EDIT ACCOUNT</span></span>
        <span style="float: right;font-weight: 16px;">Januari: The Futurist</span>
    </div>
</div>
<div class="section pt-50" style="">
    <div class="container">
        <button type="button" class="{{($tipe==2)?'lebar-12':'bg-putih'}}" style="border-radius: 15px;padding: 5px 10px;border: solid 1px #d1d2d3"><i class="fa fa-folder-open"></i>&nbsp;&nbsp;&nbsp;Collection</button>
        <button type="button" class="{{($tipe==2)?'bg-putih':'lebar-12'}}" style="border-radius: 15px;padding: 5px 10px;border: solid 1px #d1d2d3;"><i class="fa fa-heart" style="color: blue"></i>&nbsp;&nbsp;&nbsp;Loved</button>
        <span class="text-12" style="float: right;font-weight: bold;padding-top: 5px;">PRODUCTS YOU'RE QUOTING&nbsp;&nbsp;&nbsp;<i class="fa fa-dollar"></i></span>
        <div class="col-md-12" style="padding-left: 0;padding-right: 0;">
            <hr style="color: gray;height: 1px;display: block;background: black;border: 0;margin-top: 5px;margin-bottom: 0;">
        </div>
    </div>
</div>
<div class="section pt-20 pb-10" style="">
    <div class="container">
        <button type="button" class="no-border warnadasar" style="border-radius: 50%;height: 30px;width: 30px;padding-top: 2px;"><i class="fa fa-plus"></i></button>
        <span class="text-12" style="font-weight: bold;padding-top: 5px;margin-left: 10px;">TAMBAH PRODUK</span>
        <button type="button" class="warnadasar no-border text-10" style="float: right;width: 12%;height: 25px;color: black;font-weight: bold;margin-top: 2.5px;">COMPARE PRODUCTS</button>
    </div>
</div>
<div class="section pt-10 pb-10" style="">
    <div class="container">
        @if($tipe==0)
        <div class="col-md-12 bg-abuabu" style="height: 334px;text-align: center;padding-top: 135px;">
            <div style="font-size: 105px;font-weight: bold;color: blue;">No love...? :(</div>><br><br>
            <div style="font-size: 24px;font-weight: bold;color: black;margin-top: 45px;">There must be something <a href="{{URL::to('produk-karya')}}" style="color: blue">here</a> you will love</div>
        </div>
        @elseif($tipe==2)
        <div class="col-md-12" style="padding-left: 0;padding-right: 0;">
            <div class="col-md-3 box-prod" style="">
                <!--<div>-->
                <div class="bg-pink box-product1" style="">
                    <img class="gambar-full" src="{{asset('front/img/product/1.jpg')}}" alt=""/>
                </div>
                <div class="bg-abuabu desc-product1">
                    <span class="text-roboto text-11">Collection</span><br>
                    <span class="" style="font-size: 27px;font-weight: bold">Proyek Rumah Kemang Timur</span>
                </div>
            </div>
            <div class="col-md-3 box-prod" style="">
                <!--<div>-->
                <div class="bg-pink box-product1" style="">
                    <img class="gambar-full" src="{{asset('front/img/product/1.jpg')}}" alt=""/>
                </div>
                <div class="bg-abuabu desc-product1">
                    <span class="text-roboto text-11">Collection</span><br>
                    <span class="" style="font-size: 27px;font-weight: bold">Proyek Rumah Kemang Timur</span>
                </div>
            </div>
            <div class="col-md-3 box-prod" style="">
                <!--<div>-->
                <div class="bg-pink box-product1" style="">
                    <img class="gambar-full" src="{{asset('front/img/product/1.jpg')}}" alt=""/>
                </div>
                <div class="bg-abuabu desc-product1">
                    <span class="text-roboto text-11">Collection</span><br>
                    <span class="" style="font-size: 27px;font-weight: bold">Proyek Rumah Kemang Timur</span>
                </div>
            </div>
            <div class="col-md-3 box-prod" style="">
                <!--<div>-->
                <div class="bg-pink box-product1" style="">
                    <img class="gambar-full" src="{{asset('front/img/product/1.jpg')}}" alt=""/>
                </div>
                <div class="bg-abuabu desc-product1">
                    <span class="text-roboto text-11">Collection</span><br>
                    <span class="" style="font-size: 27px;font-weight: bold">Proyek Rumah Kemang Timur</span>
                </div>
            </div>
        </div>
        @else
        <div class="col-md-12" style="padding-left: 0;padding-right: 0;">
            <div class="col-md-3 box-prod" style="">
                <!--<div>-->
                <div class="bg-pink box-product2" style="">
                    <img class="gambar-full" src="{{asset('front/img/product/1.jpg')}}" alt=""/>
                    <img class="corner-left" src="{{asset('front/image/va-drop.png')}}">
                    <img class="corner-right" src="{{asset('front/image/va-dollar.png')}}">
                </div>
                <div class="bg-abuabu desc-product">
                    <div class="desc-left">
                        Name, Brands, Store
                    </div>
                    <div class="desc-right">
                        <a href="#"><i class="fa fa-plus"></i></a>&nbsp;&nbsp;
                        <a href="#"><i class="fa fa-heart"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 box-prod" style="">
                <!--<div>-->
                <div class="bg-pink box-product2" style="">
                    <img class="gambar-full" src="{{asset('front/img/product/1.jpg')}}" alt=""/>
                    <img class="corner-left" src="{{asset('front/image/va-drop.png')}}">
                    <img class="corner-right" src="{{asset('front/image/va-dollar.png')}}">
                </div>
                <div class="bg-abuabu desc-product">
                    <div class="desc-left">
                        Name, Brands, Store
                    </div>
                    <div class="desc-right">
                        <a href="#"><i class="fa fa-plus"></i></a>&nbsp;&nbsp;
                        <a href="#"><i class="fa fa-heart"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 box-prod" style="">
                <!--<div>-->
                <div class="bg-pink box-product2" style="">
                    <img class="gambar-full" src="{{asset('front/img/product/1.jpg')}}" alt=""/>
                    <img class="corner-left" src="{{asset('front/image/va-drop.png')}}">
                    <img class="corner-right" src="{{asset('front/image/va-dollar.png')}}">
                </div>
                <div class="bg-abuabu desc-product">
                    <div class="desc-left">
                        Name, Brands, Store
                    </div>
                    <div class="desc-right">
                        <a href="#"><i class="fa fa-plus"></i></a>&nbsp;&nbsp;
                        <a href="#"><i class="fa fa-heart"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 box-prod" style="">
                <!--<div>-->
                <div class="bg-pink box-product2" style="">
                    <img class="gambar-full" src="{{asset('front/img/product/1.jpg')}}" alt=""/>
                    <img class="corner-left" src="{{asset('front/image/va-drop.png')}}">
                    <img class="corner-right" src="{{asset('front/image/va-dollar.png')}}">
                </div>
                <div class="bg-abuabu desc-product">
                    <div class="desc-left">
                        Name, Brands, Store
                    </div>
                    <div class="desc-right">
                        <a href="#"><i class="fa fa-plus"></i></a>&nbsp;&nbsp;
                        <a href="#"><i class="fa fa-heart"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 box-prod" style="">
                <!--<div>-->
                <div class="bg-pink box-product2" style="">
                    <img class="gambar-full" src="{{asset('front/img/product/1.jpg')}}" alt=""/>
                    <img class="corner-left" src="{{asset('front/image/va-drop.png')}}">
                    <img class="corner-right" src="{{asset('front/image/va-dollar.png')}}">
                </div>
                <div class="bg-abuabu desc-product">
                    <div class="desc-left">
                        Name, Brands, Store
                    </div>
                    <div class="desc-right">
                        <a href="#"><i class="fa fa-plus"></i></a>&nbsp;&nbsp;
                        <a href="#"><i class="fa fa-heart"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 box-prod" style="">
                <!--<div>-->
                <div class="bg-pink box-product2" style="">
                    <img class="gambar-full" src="{{asset('front/img/product/1.jpg')}}" alt=""/>
                    <img class="corner-left" src="{{asset('front/image/va-drop.png')}}">
                    <img class="corner-right" src="{{asset('front/image/va-dollar.png')}}">
                </div>
                <div class="bg-abuabu desc-product">
                    <div class="desc-left">
                        Name, Brands, Store
                    </div>
                    <div class="desc-right">
                        <a href="#"><i class="fa fa-plus"></i></a>&nbsp;&nbsp;
                        <a href="#"><i class="fa fa-heart"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 box-prod" style="">
                <!--<div>-->
                <div class="bg-pink box-product2" style="">
                    <img class="gambar-full" src="{{asset('front/img/product/1.jpg')}}" alt=""/>
                    <img class="corner-left" src="{{asset('front/image/va-drop.png')}}">
                    <img class="corner-right" src="{{asset('front/image/va-dollar.png')}}">
                </div>
                <div class="bg-abuabu desc-product">
                    <div class="desc-left">
                        Name, Brands, Store
                    </div>
                    <div class="desc-right">
                        <a href="#"><i class="fa fa-plus"></i></a>&nbsp;&nbsp;
                        <a href="#"><i class="fa fa-heart"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 box-prod" style="">
                <!--<div>-->
                <div class="bg-abuabu box-product2" style="">
<!--                    <img class="gambar-full" src="{{asset('front/img/product/1.jpg')}}" alt=""/>
                    <img class="corner-left" src="{{asset('front/image/va-drop.png')}}">
                    <img class="corner-right" src="{{asset('front/image/va-dollar.png')}}">-->
                </div>
                <div class="bg-abuabu desc-product">
                    <!--                    <div class="desc-left">
                                            Name, Brands, Store
                                        </div>
                                        <div class="desc-right">
                                            <a href="#"><i class="fa fa-plus"></i></a>&nbsp;&nbsp;
                                            <a href="#"><i class="fa fa-heart"></i></a>
                                        </div>-->
                </div>
            </div>
        </div>
        @endif
    </div>
</div>
<div class="section pt-40 pb-10">
    <div class="container">
        <div class="col-md-12" style="text-align: center">
            <button type="button" class="no-border warnadasar" style="border-radius: 50%;height: 30px;width: 30px;padding-top: 2px;"><i class="fa fa-plus"></i></button><br>
            <span class="text-12" style="font-weight: bold;padding-top: 5px;margin-left: 10px;">TAMBAH PRODUK</span>
        </div>
    </div>
</div>
<div class="section pt-40 pb-10">
    <div class="container">
        <hr style="color: gray;height: 1px;display: block;background: black;border: 0">
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
    .magazine-left{
        width: 83px;  
        float: left;
    }
    .gambar-full{
        width: 100%;
        height: 100%;
    }   
    .box-prod {
        padding: 0 8px 0 0;
        margin: 3px 0 3px 0;
        /*        background-color: #d1d2d3;*/
    }
    .box-product1 {
        height: 206px;
        width: 100%;
        padding: 0 0 0 0;
    }
    .box-product1 > .corner-left{
        height: 60px;
        width: 60px;
        position: relative;
        margin-top: -260px;
        margin-left: -13px;
        float: left;
    }
    .box-product1 > .corner-right{
        height: 60px;
        width: 60px;
        position: relative;
        margin-top: -255px;
        margin-right: -4px;
        float: right;
    }
    .box-product2 {
        height: 177px;
        width: 100%;
        padding: 0 0 0 0;
    }
    .box-product2 > .corner-left{
        height: 60px;
        width: 60px;
        position: relative;
        margin-top: -190px;
        margin-left: -13px;
        float: left;
    }
    .box-product2 > .corner-right{
        height: 60px;
        width: 60px;
        position: relative;
        margin-top: -185px;
        margin-right: -4px;
        float: right;
    }
    .box-product3 {
        height: 45px;
        width: 100%;
        padding: 0 0 0 0;
    }
    .desc-product {
        height: 40px;
        padding: 10px 10px 20px 10px;
        font-family: cabin;
        font-size: 10px;
    }
    .desc-left{
        float: left;
    }
    .desc-right{
        float: right;
    }
    .desc-product1 {
        height: 106px;
        padding-top: 5px;
        padding-left: 25px;
        padding-right: 25px;
        font-family: cabin;
    }
    .lebar-12{
        width: 12%;
    }
</style>
@endsection
@section('js')
<script type="text/javascript">
    $(document).ready(function () {
        $('.expand').click(function () {
            for (var i = 0; i < 10; i++) {
                $('.brand-list').append('<li>CAHAYA</li>');
            }
        })
    });
    function open() {
        $('#modalView').modal('show');
    }
</script>
@endsection
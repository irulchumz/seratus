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
        <a href="{{URL::to('loved-product/collection')}}"><button type="button" class="{{($tipe==2 || $tipe==3)?'lebar-12':'bg-putih'}}" style="border-radius: 15px;padding: 5px 10px;border: solid 1px #d1d2d3"><i class="fa fa-folder-open"></i>&nbsp;&nbsp;&nbsp;Collection</button></a>
        <a href="{{URL::to('loved-product/')}}"><button type="button" class="{{($tipe==2 || $tipe==3)?'bg-putih':'lebar-12'}}" style="border-radius: 15px;padding: 5px 10px;border: solid 1px #d1d2d3;"><i class="fa fa-heart" style="color: blue"></i>&nbsp;&nbsp;&nbsp;Loved</button></a>
        <a href="{{URL::to('loved-product/quote')}}"><span class="text-12" style="float: right;font-weight: bold;padding-top: 5px;">PRODUCTS YOU'RE QUOTING&nbsp;&nbsp;&nbsp;<i class="fa fa-dollar"></i></span></a>
        <div class="col-md-12" style="padding-left: 0;padding-right: 0;">
            <hr style="color: gray;height: 1px;display: block;background: black;border: 0;margin-top: 5px;margin-bottom: 0;">
        </div>
    </div>
</div>
<div class="section pt-25 pb-15" style="">
    <div class="container">
        <span class="text-roboto" style="font-size: 21px;font-weight: bold;">PRODUCTS YOU'RE QUOTING</span>
    </div>
</div>
<div class="section pt-10 pb-10" style="">
    <div class="container">
        <div class="col-md-12" style="border: solid 1px #d1d2d3;padding: 20px;">
            <div class="row">
                @for($i=0;$i<6;$i++)
                <div class="" style="padding: 20px;background-color: whitesmoke;border-bottom: solid 1px #d1d2d3;float: left;width: 48%;margin: 1%">
                    <div class="col-md-3" style="padding-right: 40px;padding-left: 0">
                        <img class="gambar-full" style="height: 100px;" src="{{asset('front/img/product/1.jpg')}}" alt=""/>
                    </div>
                    <div class="col-md-9" style="height: 100px;/*border-bottom: solid 1px #d1d2d3;*/padding-left: 0;padding-right: 0;">
                        <div class="desc-left">
                            <label class="text-cabin text-14" style="font-weight: bold">Name of Product,</label><br>
                            <label class="text-cabin text-14" style="font-weight: bold">Brand,</label><br>
                            <label class="text-cabin text-14" style="font-weight: bold">Store.</label><br>
                        </div>
                        <div class="desc-right">
                            <label class="text-cabin text-14" style="font-weight: bold">10</label>
                            <label class="text-roboto text-11" style="font-weight: lighter">Piece(s)</label>
                            <i class="fa fa-ellipsis-h no-border warnadasar" style="padding: 5px;border-radius: 50%;position: relative;top: 3px;margin-left: 7px;"></i>
                            <br><i class="fa fa-times pull-right" style="margin-right: 8px;color: #d1d2d3"></i>
                            <!--<button type="button" class="no-border warnadasar" style="font-size: 11px;border-radius: 50%"></button>-->
                        </div>
                    </div>

                    <div class="col-md-offset-3 col-md-5 mt-20 warnadasar text-14" style="border: solid 1px #E5C773;height: 33px;padding-top: 3px;">
                        Price
                    </div>
                    <div class="col-md-4 mt-20 text-right text-roboto text-11" style="border: solid 1px #E5C773;height: 33px;padding-top: 3px;">
                        No Info Yet
                    </div>
                    <div class="col-md-offset-3 col-md-5 warnadasar text-14" style="border: solid 1px #E5C773;margin-top: 1px;height: 33px;padding-top: 3px;">
                        Inbox
                    </div>
                    <div class="col-md-4 text-right text-11 text-roboto" style="border: solid 1px #E5C773;margin-top: 1px;height: 33px;padding-top: 3px;">
                        0 Message(s)
                    </div>
                </div>
                @endfor
            </div>
            <div class="col-md-12 mt-20" style="">
                <button type="button" class="pull-right no-border" style="background-color: white;color: black;font-weight: bold">NEXT&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-right"></i></button>
            </div>
        </div>
    </div>
</div>
<div class="section pt-40 pb-10">
    <div class="container">
        <hr style="color: gray;height: 1px;display: block;background: black;border: 0">
    </div>
</div>
<div class="section pt-30 pb-30" style="background-image: url('{{asset("front/img/bg-box-bottom1.png")}}');background-size:100%;">
    <div class="container text-center pt-30 pb-30">
        <p class="text-cabin" style="color: black">Designers, journalists and buyers, click here to find out how seratusplus.com benefits you!</p>
    </div>
</div>
<!--modal compare-->
<div class="modal fade" style="padding-top: 10%" id="modalCompare" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style="width: 1080px;">
        <div class="modal-content">
            <button type="button" class="tutup" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i>
            </button>
            <div class="modal-body" style="padding-left: 0;padding-right: 0">
                <div class="row" style="margin-left: 0;margin-right: 0">
                    <?php $n = 1; ?>
                    @for($i=0;$i<3;$i++)
                    <div class="col-md-4 {{($n<3)?'br-1':''}}" style="padding-left: 30px;padding-right: 30px;">
                        <div class="col-md-12 box-prod-modal">
                            <!--<div>-->
                            <div class="bg-pink box-product-modal" style="">
                                <img class="gambar-full" src="{{asset('front/img/product/1.jpg')}}" alt=""/>
                            </div>                        
                        </div>
                        <div class="col-md-6 pt-20" style="padding-left: 0">
                            <label class="text-cabin text-16" style="font-weight: bold">Name of Product,</label><br>
                            <label class="text-cabin text-16" style="font-weight: bold">Brand,</label><br>
                            <label class="text-cabin text-16" style="font-weight: bold">Store.</label><br>
                            <p class="pt-30 text-12" style="margin: 0">
                                Spesification#1,<br>
                                Spesification#2,<br>
                                Spesification#3,<br>
                                Spesification#4
                            <p class="pt-20 text-12" style="margin: 0">
                                Price Range<br><br>
                            </p>
                        </div>
                        <div class="col-md-6 pt-20" style="padding-right: 0">

                        </div>
                        <div class="col-md-12" style="padding-left: 0;padding-right: 0">
                            <span class="text-cabin" style="float: left;font-size: 10px">
                                Indonesia, Jakarta, Resor, Furnitur, Aksesori, Tag 6, Tag 7
                            </span>                            
                        </div>
                    </div>
                    <?php $n++; ?>
                    @endfor
                    <div class="col-md-12 mb-20 mt-20">
                        <button type="button" class="warnadasar no-border text-cabin text-12" style="width: 100%;color: black;height: 40px;font-weight: bold"><i class="fa fa-download"></i>&nbsp;&nbsp;&nbsp;DOWNLOAD AS PDF</button>
                    </div>
                </div>
            </div>            
        </div>
    </div>
</div>
<!--modal quote-->
<div class="modal fade" style="padding-top: 10%" id="modalAddQuote" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body" style="padding-left: 0;padding-right: 0">
                <div class="row" style="margin-left: 30px;margin-right: 30px">
                    <div class="col-md-12 mb-30" style="font-size: 20px;font-weight: bold">Asking for Price Quote</div>
                    <div class="col-md-4" style="padding-right: 40px;">
                        <img class="gambar-full" style="height: 100px;" src="{{asset('front/img/product/1.jpg')}}" alt=""/>
                    </div>
                    <div class="col-md-8" style="height: 100px;border-bottom: solid 1px #d1d2d3;padding-left: 0;padding-right: 0;">
                        <div class="desc-left">
                            <label class="text-cabin text-14" style="font-weight: bold">Name of Product,</label><br>
                            <label class="text-cabin text-14" style="font-weight: bold">Brand,</label><br>
                            <label class="text-cabin text-14" style="font-weight: bold">Store.</label><br>
                        </div>
                        <div class="desc-right">
                            <input type="text" class="text-cabin" style="font-size: 20px;color: #d1d2d3;height: 50px;width: 50px;padding-left: 10px;">
                            <br>
                            <label class="text-cabin text-14" style="font-weight: bold;padding-left: 8px">Piece</label>
                        </div>
                    </div>                                     
                    <div class="col-md-offset-4 col-md-8 mb-15" style="padding-left: 0;padding-right: 0;">
                        <textarea class="text-roboto text-11" style="height: 140px;width: 100%;border: solid 1px #d1d2d3;color: #d1d2d3" placeholder="Pesan Anda di sini :"></textarea>
                    </div>
                    <div class="col-md-offset-4 col-md-8 mb-10" style="padding-left: 0;padding-right: 0;">
                        <button type="button" class="warnadasar no-border text-cabin text-14" style="width: 100%;color: black;height: 40px;font-weight: bold">Minta Penawaran Harga</button>
                    </div>                    
                    <div class="col-md-offset-4 col-md-8 mb-30" style="padding-left: 0;padding-right: 0;">
                        <label class="text-roboto text-14" style="font-weight: lighter">Check bla bla bla bla ....</label><br>
                    </div>                    
                </div>
            </div>            
        </div>
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
        text-align: center;
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
    a.add-compare i {
        color: #e0c4cc;
        opacity: 0.7;
    }
    a.add-compare.active i {
        color: blue;
        opacity: 1;
    }
    //modal  
    .modal-content {
        background-color: whitesmoke;
        text-align: center;
        margin-left: auto;
        margin-right: auto;
        margin-top: 10%;
        position: relative;
        -webkit-box-shadow: 0px 4px 6px 0px rgba(0,0,0,0.1);
        -moz-box-shadow: 0px 4px 6px 0px rgba(0,0,0,0.1);
        box-shadow: 0px 4px 6px 0px rgba(0,0,0,0.1);
    }
    button.tutup{
        transition: all 0.5s ease;
        position: absolute;
        background-color: #e5c773;
        right: 0;
        margin-right: -13px;
        margin-top: -13px;
        border-radius: 50%;
        height: 30px;
        width: 30px;
        border: none;
        color: white;
        -webkit-box-shadow: -4px -2px 6px 0px rgba(0,0,0,0.1);
        -moz-box-shadow: -4px -2px 6px 0px rgba(0,0,0,0.1);
        box-shadow: -3px 1px 6px 0px rgba(0,0,0,0.1);
    }
    .box-prod-modal {
        padding: 0 0 0 0;
        margin: 3px 0 3px 0;
    }
    .box-product-modal {
        height: 300px;
        width: 100%;
        padding: 0 0 0 0;
    }
    .box-product-modal > .corner-left{
        height: 60px;
        width: 60px;
        position: relative;
        margin-top: -310px;
        /*margin-left: -10px;*/
        float: left;
    }
    .box-product-modal > .corner-right{
        height: 60px;
        width: 60px;
        position: relative;
        margin-top: -305px;
        /*margin-left: -10px;*/
        float: right;
    }
    .desc-product-modal {
        /*        height: 30px;*/
        padding: 2px 10px 20px 10px;
        font-family: cabin;
        font-size: 10px;
    }
    .br-1{
        border-right: 1px solid black;
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
        $('.add-compare').click(function () {
            var jml = $('.add-compare.active').length;

            if ($(this).hasClass('active')) {
                if (jml < 4) {
                    $(this).removeClass('active');
                } else {
                    alert('Produk yang dipilih tidak boleh lebih dati 3.');
                }
            } else {
                if (jml < 3) {
                    $(this).addClass('active');
                } else {
                    alert('Produk yang dipilih tidak boleh lebih dati 3.');
                }
            }

        });
        $('#compare-btn').click(function () {
            var tipe = $(this).data('tipe');
            if (tipe == '0') {
                $('.add-compare').removeClass('hidden');
                $(this).data('tipe', '1');
            } else {
                $('.add-compare').addClass('hidden');
                $('.add-compare').removeClass('active');
                $(this).data('tipe', '0');
                $('#modalCompare').modal('show');
            }
        });
        $('.add-quote').click(function () {
            $('#modalAddQuote').modal('show');
        });
    });
    function open() {
        $('#modalView').modal('show');
    }
</script>
@endsection
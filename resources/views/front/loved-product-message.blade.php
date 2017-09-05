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
        <a href="{{URL::to('loved-product/collection')}}"><button type="button" class="lebar-12" style="border-radius: 15px;padding: 5px 10px;border: solid 1px #d1d2d3"><i class="fa fa-folder-open"></i>&nbsp;&nbsp;&nbsp;Collection</button></a>
        <a href="{{URL::to('loved-product/')}}"><button type="button" class="bg-putih" style="border-radius: 15px;padding: 5px 10px;border: solid 1px #d1d2d3;"><i class="fa fa-heart" style="color: blue"></i>&nbsp;&nbsp;&nbsp;Loved</button></a>
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
        <div class="col-md-12 no-padding warnadasar">
            <div class="col-md-offset-2 col-md-10 bg-putih" style="border: solid 1px #d1d2d3;padding: 20px;">
                <div class="col-md-12" style="padding: 20px;float: left;">
                    <div class="col-md-3" style="padding-right: 40px;padding-left: 0">
                        <img class="gambar-full" style="height: 150px;" src="{{asset('front/img/product/1.jpg')}}" alt=""/>
                    </div>
                    <div class="col-md-8" style="height: 100px;/*border-bstyleottom: solid 1px #d1d2d3;*/padding-left: 0;padding-right: 0;">
                        <div class="desc-left">
                            <label class="text-cabin text-14" style="font-weight: bold">Name of Product,</label><br>
                            <label class="text-cabin text-14" style="font-weight: bold">Brand,</label><br>
                            <label class="text-cabin text-14" style="font-weight: bold">Store.</label><br>
                        </div>
                        <div class="desc-right">
                            <label class="text-cabin text-14" style="font-weight: bold">10</label>
                            <label class="text-roboto text-11" style="font-weight: lighter">Piece(s)</label>                        
                            <!--<button type="button" class="no-border warnadasar" style="font-size: 11px;border-radius: 50%"></button>-->
                        </div>
                    </div>
                    <div class="col-md-1" style="height: 100px;/*border-bstyleottom: solid 1px #d1d2d3;*/padding-left: 0;padding-right: 0;">
                        <div class="desc-right">
                            <i class="fa fa-ellipsis-h no-border warnadasar" style="padding: 5px;border-radius: 50%;position: relative;top: 3px;margin-left: 7px;"></i>
                            <br><i class="fa fa-times pull-right" style="margin-right: 5px;margin-top: 8px;color: #d1d2d3"></i>
                        </div>
                    </div>
                    <div class="col-md-2 mt-20 warnadasar text-14 text-center" style="border: solid 1px #E5C773;height: 33px;padding-top: 3px;">
                        Price
                    </div>
                    <div class="col-md-6 mt-20 text-right text-roboto text-11" style="border: solid 1px #E5C773;height: 33px;padding-top: 3px;">
                        No Info Yet
                    </div>
                    <div class="col-md-12" style="padding-left: 0;padding-right: 0;padding-top: 33px;">
                        <hr style="margin: 0;">
                    </div>
                </div>
                <div class="col-md-12" style="padding: 20px;float: left;margin-top: 13px;margin-right: 25%">
                    <div class="col-md-offset-3 col-md-6 no-padding">
                        <div class="row">
                            <div class="col-md-12 no-padding" style="font-weight: bold">Message(s)</div>
                            <div class="col-md-12 no-padding" style="">
                                <button class="no-border" style="background-color: whitesmoke;width: 73px;height: 20px;border-radius: 25%;position: relative;bottom: 5px;"></button>
                                <span class="text-roboto text-12" style="margin-left: 35px;font-weight: lighter">Apakah tersedia warna lain jika memesan banyak?</span>
                            </div>
                            <div class="col-md-12 no-padding" style="">
                                <button class="no-border bg-pink" style="width: 73px;height: 20px;border-radius: 25%;position: relative;bottom: 5px;"></button>
                                <span class="text-roboto text-12" style="margin-left: 35px;font-weight: lighter">Bisa, Namun minimal 100 buah</span>
                            </div>
                            <div class="col-md-12 mt-20" style="background-color: whitesmoke;padding: 15px;">
                                <textarea class="text-14 text-roboto" style="height: 133px;width: 100%;border: solid 1px #d1d2d3;color: #d1d2d3" placeholder="Your message here"></textarea>
                            </div>
                            <div class="col-md-12 mt-15 no-padding" style="">
                                <button class="no-border warnadasar pull-right text-14" style="height: 31px;font-weight: bold;color: black;width: 100px;">Send</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
    .gambar-full{
        width: 100%;
        height: 100%;
    }   
    .no-padding{
        padding: 0;
    }
    .desc-left{
        float: left;
    }
    .desc-right{
        float: right;
    }
</style>
@endsection
@section('js')
<script type="text/javascript">
    $(document).ready(function () {

    });
</script>
@endsection
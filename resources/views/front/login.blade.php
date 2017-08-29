@extends('layout')
@section('title')
<title>SeratusPlus || Login</title>
@endsection
@section('content')
<div class="section pt-60 pb-10" style="background-color: #c3dadd;">
    <div class="container">
    </div>
</div>
<div class="section pt-40 pb-10" style="background-color: #c3dadd;">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-3 col-md-6 col-sm-12 col-xs-12 box-login-box" style="">
                <div class="login-box">
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-md-12 mb-40">
                                <label class="title-login" style="">Seratusplus provides various essential materials needed by design professionals, buyers and media journalists. Login to enter your personal access</label>
                            </div>
                            <div id="log1" class=" col-md-12 col-sm-12 col-xs-12">
                                <div class="col-md-12 mb-30">
                                    <label style="font-size: 16px">LOGIN</label>
                                    <hr style="color: gray;height: 1px;display: block;background: gray;border: 0;margin-top: 5px;margin-bottom: 0;">
                                </div>
                                <div class="col-md-4 col-sm-12 col-xs-12 mb-20 login-block login-opt">
                                    <img width="100px" height="100px" style="margin-right: 8px;" src="{{asset('front/img/blog/1.jpg')}}">
                                    <span class="text-18" style="color: black;">GENERAL & PROFESSIONALS</span>
                                </div>
                                <div class="col-md-4 col-sm-12 col-xs-12 mb-20 login-block login-opt">
                                    <img width="100px" height="100px" style="margin-right: 8px;" src="{{asset('front/img/blog/1.jpg')}}">
                                    <span class="text-18" style="color: black;">BRAND</span>
                                </div>
                                <div class="col-md-4 col-sm-12 col-xs-12 mb-20 login-block login-opt">
                                    <img width="100px" height="100px" style="margin-right: 8px;" src="{{asset('front/img/blog/1.jpg')}}">
                                    <span class="text-18" style="color: black;">PRESS</span>
                                </div>
                            </div>
                            <div id="log2" class="hidden">
                                <div class="col-md-12 mb-20">
                                    <label>LOGIN</label>
                                </div>
                                <div class="col-md-12 mb-10">
                                    <label>E-mail</label>
                                    <input  type="text" name="email">
                                </div>
                                <div class="col-md-12 mb-20">
                                    <label>Passwords</label>
                                    <input id="password" name="password" type="password">
                                    <span class="text-small">Forgot your password? reset here.</span>
                                </div>
                                <div class="col-md-12 mb-20">
                                    <button type="submit" class="warnadasar no-border text-cabin text-14" style="width: 100%;color: black;height: 40px;font-weight: bold">ENTER</button>
                                </div>
                            </div>
                            <div class="col-md-12 mb-10">
                                <p class="divide"><span class="text-11">Or,</span></p>
                            </div>
                            <div class="col-md-12">
                                <button type="button" class="bg-putih no-border text-cabin text-14" style="width: 100%;color: black;font-weight: bold">SIGN-UP</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section pt-90 pb-10" style="background-color: #c3dadd;">
    <div class="container">
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
    @media (min-width: 992px) {
        .box-login-box{
            width: 616px;
        }
        .title-login{
            font-size: 20px!important;
            line-height: 20px!important;
            font-weight: 400!important;
            font-family: roboto!important;
        }
        .login-block{
            text-align: center;
        }
    }
    @media (min-width: 768px) and (max-width: 992px) {
        .box-login-box{
            width: 100%;
        }
        .title-login{
            font-size: 14px!important;
            line-height: 16px!important;
            font-weight: 400!important;
            font-family: roboto!important;
        }
        .login-block{
            text-align: left;
            padding-left: 15%;
        }
    }
    @media (max-width: 768px) {
        .box-login-box{
            width: 100%;
        }
        .title-login{
            font-size: 12px!important;
            line-height: 14px!important;
            font-weight: 400!important;
            font-family: roboto!important;
        }
        .login-block{
            text-align: left;
            padding-left: 15%;
        }
    }
    .login-box{
        padding: 30px;
        background-color: white;
        box-shadow: -15px 0px 20px 0px darkgray, 15px 0px 20px 0px darkgray;

    }
    .login-box form input[type="text"], .login-box form input[type="email"], .login-box form input[type="password"] {
        border: 1px solid #ddd;
        background-color: #ddd;
        color: black;
        display: block;
        height: 40px;
        padding: 7px 15px;
        width: 100%;
    }
    .login-box form label {
        display: block;
        font-weight: 400;
        line-height: 14px;
        font-size: 14px;
        margin-bottom: 10px;
        overflow: hidden;
    }
    .login-box form .text-small {
        font-size: 12px;
        font-style: italic;
        float: right;
    }
    p.divide { 
        width:100%;
        text-align:center;
        border-bottom: 2px solid #e0c4cc; 
        line-height:0.1em; 
        margin:10px 0 20px;
        color: black;
    } 
    p.divide span {
        background:#fff;
        padding:0 30px;
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
        $('.login-opt').click(function () {
            $('#log2').removeClass('hidden');
            $('#log1').addClass('hidden');
        });
    });
    function open() {
        $('#modalView').modal('show');
    }
</script>
@endsection
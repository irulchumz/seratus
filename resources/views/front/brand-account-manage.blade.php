@extends('layout')
@section('title')
<title>SeratusPlus | Brand Account</title>
@endsection
@section('content')
<div class="section pt-40 pb-55">
    <div class="container">
        <div class="desc-left">
            <img class="" src="{{asset('front/img/icon/close.png')}}" style="width: 45px;margin-right: 20px;" height="45">
            <select class="select1" style="">
                <option value="1">KEKAYUAN INDONESIA</option>
                <option value="1">Manage Brand Page</option>
                <option value="1">Manage Account</option>
            </select>
            <span class="text-16" style="font-style: italic">Your subcription ends in 3 days. <a href="">Click here</a> to extend</span>
        </div> 
        <div class="desc-right" style="display: inline-flex">
            <div class="header-cart float-left">
                <!-- Cart Toggle -->
                <a class="cart-toggle" href="#" data-toggle="dropdown">
                    <i class="pe-7s-info"></i>
                    <span>2</span>
                </a>
                <!-- Mini Cart Brief -->
                <div class="mini-cart-brief dropdown-menu text-left">
                    <div class="cart-items">Notification</div>
                    <!-- Cart Products -->
                    <div class="all-cart-product clearfix">
                        <div class="single-cart text-12 text-roboto" style="border-bottom: solid 1px #d1d2d3;">
                            Simpul approved your photo
                        </div>                            
                        <div class="single-cart text-12 text-roboto" style="border-bottom: solid 1px #d1d2d3;">
                            Simpul approved your photo
                        </div>                            
                        <div class="single-cart text-12 text-roboto" style="border-bottom: solid 1px #d1d2d3;">
                            Simpul approved your photo
                        </div>                            
                        <div class="single-cart text-12 text-roboto" style="border-bottom: solid 1px #d1d2d3;">
                            Simpul approved your photo
                        </div>                            
                    </div>
                    <!-- Cart Button -->
                    <div class="cart-bottom">
                        <a href="#">VIEW ALL NOTIFICATION</a>
                    </div>
                </div>
            </div>
            <div class="icon-corner">
                <i class="fa fa-envelope"></i>
            </div>

        </div>
    </div>
</div>
<div class="section pt-75 pb-40" style="border-top: solid 1px #c4c4c4">
    <div class="container">
        <div class="col-md-offset-3 col-md-7" style="padding-left: 0;">
            <div class="col-md-12 pb-50 text-15">ACCOUNT</div>
            <div class="col-md-4 text-15 text-roboto">Brand/Store Name</div>
            <div class="col-md-8 text-15 text-roboto">KEKAYUAN INDONESIA</div>
            <div class="col-md-offset-4 col-md-8 text-15 pt-25 pb-25" style="font-style: italic">*If you want to change your store name,please email us <a>here</a></div>
            <div class="col-md-4 text-15 text-roboto" style="line-height: 40px;">Email</div>
            <div class="col-md-8 mb-15">
                <input type="text" class="input1 text-15 text-roboto" value="kekayuanindonesia@gmail.com">
            </div>
            <div class="col-md-4 text-15 text-roboto" style="line-height: 40px;">Current Password</div>
            <div class="col-md-8 mb-15">
                <input type="password" class="input1 text-15 text-roboto" value="">
            </div>
            <div class="col-md-4 text-15 text-roboto" style="line-height: 40px;">New Password</div>
            <div class="col-md-8 mb-15">
                <input type="password" class="input1 text-15 text-roboto" value="">
            </div>
            <div class="col-md-4 text-15 text-roboto" style="line-height: 40px;">Verify Password</div>
            <div class="col-md-8 mb-35">
                <input type="password" class="input1 text-15 text-roboto" value="">
            </div>
            <div class="col-md-12 mb-65">
                <button class="no-border warnadasar text-roboto text-10" style="width: 100%;height: 40px;">SAVE</button>
            </div>
        </div>
        <div class="col-md-12 pb-65" style="border-top: solid 1px #d1d2d3"></div>
        <div class="col-md-offset-3 col-md-7" style="padding-left: 0;">
            <div class="col-md-12 pb-45 text-15">SUBCRIPTION INFO</div>
            <div class="col-md-12 pb-45 text-15" style="font-weight: bold;">Your subscription ended in xx - xx - xxxx</div>
            <div class="col-md-4 text-15 text-roboto" style="">Status</div>
            <div class="col-md-8 mb-20" style="font-weight: bold;">Active</div>
            <div class="col-md-4 text-15 text-roboto" style="">Account Owner</div>
            <div class="col-md-8 mb-20" style="font-weight: bold;">PT Kekayuan Indonesia</div>
            <div class="col-md-4 text-15 text-roboto" style="">Payment Method</div>
            <div class="col-md-8 mb-20" style="font-weight: bold;">Credit Card</div>
            <div class="col-md-12 mt-40 mb-65">
                <button class="no-border warnadasar text-roboto text-10" style="width: 100%;height: 40px;">EXTEND</button>
            </div>
        </div>
    </div>
</div>

@endsection
@section('css')
<style media="screen" type="text/css">
    @media (min-width: 992px) {
    }
    @media (min-width: 768px) and (max-width: 992px) {
        .brand-detail-img{
            height: 230px!important;
        }
        .text-10{
            font-size: 10px!important;
        }
        .deskripsi{
            padding-top: 20px!important;
        }
        .mb-xs-5{
            margin-bottom: 5px!important;
        }
    }
    @media (max-width: 768px) {
        .brand-detail-img{
            height: 230px!important;
        }
        .text-10{
            font-size: 10px!important;
        }
        .deskripsi{
            padding-top: 20px!important;
        }
        .mb-xs-5{
            margin-bottom: 5px!important;
        }
    }
    .input1{
        background-color: #d1d2d3;
        width: 100%;
        border: none;
        height: 40px;
        padding-left: 10px;
    }
    .select1 {
        -moz-appearance: none;
        background: white url("{{asset('front/img/icon/select-arrow-down.png')}}") no-repeat scroll right center;
        border: 1px solid #ddd;
        color: #666;
        font-size: 12px;
        height: 36px;
        padding: 0 30px 0 10px;
        height: 45px;
        margin-right: 25px;
    }
    .select1 option{
        border-bottom: solid 1px #d1d2d3;
        padding: 10px;
    }
    .icon-corner{
        padding-left: 20px;
        padding-right: 20px;
        border-left:solid 1px #b5b5b5;
        border-right:solid 1px #b5b5b5;
    }
    .desc-left{
        float: left;
    }
    .desc-right{
        float: right;
    }
    .header-cart{
        padding: 0 10px;

    }
    .mini-cart-brief .cart-items{
        font-size: 13px;
        background-color: #d1d2d3;
        margin: -20px -20px 0;
        padding: 15px 20px;
    } 
    .single-cart{
        margin-bottom: 0;
        line-height: 44px;
    }
    .cart-bottom{
        margin: -1px -20px -20px;
    }
    .cart-bottom a{
        background-color: gray;
    }
    .cart-bottom a:hover{
        background-color: #e5c773;
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
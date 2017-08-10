@extends('layout')
@section('title')
<title>SeratusPlus | Brand Message</title>
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
<div class="section pt-75 mb-50" style="border-top: solid 1px #c4c4c4">
    <div class="container">
        <div class="col-md-4" style="border: solid 1px #c4c4c4;padding-left: 0;padding-right: 0;padding-bottom: 500px;">
            <div class="col-md-12 text-16 pt-35 text-roboto" style="border-bottom: solid 1px #c4c4c4;">
                <div class="col-md-6">
                    MESSAGE ROOM
                </div>
                <div class="col-md-6" style="padding-bottom: 31px;">
                    <select class="selectpicker" disabled>
                        <option>Actions</option>
                        <option>Mark as Read</option>
                        <option>Delete</option>
                    </select>

                </div>
            </div>
            <div class="col-md-12 text-16 text-roboto" style="border-bottom: solid 1px #c4c4c4;">
                <div class="col-md-1 mt-45 mb-40">
                    <input type="checkbox" name="cek">                    
                </div>
                <div class="col-md-11 mt-30">
                    <div class="text-16 text-roboto" style="font-weight: bold">Erika Tale<span class="text-13 text-roboto pull-right" style="font-weight: lighter">Dec 16, 2016</span></div>
                    <div class="text-16 text-roboto" style="font-weight: normal">Requested Product</div>
                </div>
            </div>
            <div class="col-md-12 text-16 text-roboto" style="border-bottom: solid 1px #c4c4c4;">
                <div class="col-md-1 mt-45 mb-40">
                    <input type="checkbox" name="cek">                    
                </div>
                <div class="col-md-11 mt-30">
                    <div class="text-16 text-roboto" style="font-weight: bold">Erika Tale<span class="text-13 text-roboto pull-right" style="font-weight: lighter">Dec 16, 2016</span></div>
                    <div class="text-16 text-roboto" style="font-weight: normal">Requested Product</div>
                </div>
            </div>
        </div>
        <div class="col-md-8 pb-55" style="border: solid 1px #c4c4c4;padding-left: 0;padding-right: 0;">
            <div class="col-md-12 text-17 text-roboto pt-35 pb-35" style="border-bottom: solid 1px #c4c4c4;font-weight: bold;padding-left: 35px;">Product Requested by Erika Tale</div>
            <div class="col-md-12 pb-30 text-16 text-roboto" style="border-bottom: solid 1px #c4c4c4;overflow-y: scroll;height: 499px;">
                <div class="col-md-3 pt-35" style="padding-left: 20px;">
                    <img class="" src="{{asset('front/img/product/1.jpg')}}" width="155" height="155" alt=""/><br>                    
                </div>
                <div class="col-md-9 pt-40" style="">
                    <div class="text-12 text-roboto" style="font-weight: bold">Name of Product<span class="text-13 text-roboto pull-right" style="font-weight: lighter">December 16, 2016 5:30 PM</span></div>
                    <div class="text-12 text-roboto" style="font-weight: bold">10<span style="margin-left: 50px;font-weight: lighter">Piece</span></div>
                    <div class="col-md-3 mt-70 warnadasar text-12 text-roboto text-center" style="border: solid 1px #E5C773">HARGA</div>
                    <div class="col-md-8 mt-70 text-12 text-roboto text-right" style="border: solid 1px #E5C773">10.000.000</div>
                    <div class="col-md-1 mt-70 text-16 text-roboto text-center" style="border: solid 1px #E5C773"><i class="fa fa-pencil"></i></div>
                </div>
                <div class="col-md-12" style="padding-left: 20px;">
                    <hr style="color: gray;height: 1px;display: block;background: #c4c4c4;border: 0;margin-top: 30px;margin-bottom: 0;">
                </div>
                <div class="col-md-12 pt-35" style="padding-left: 20px;">
                    <div class="text-16 text-roboto" style="font-weight: bold">Erika Tale<span class="text-13 text-roboto pull-right" style="font-weight: lighter">Dec 16, 2016 5:30 PM</span></div>
                    <div class="text-16 text-roboto mt-15" style="font-weight: lighter">Halo, apakah bisa campur warna jika membeli banyak?</div>
                    <hr style="color: gray;height: 1px;display: block;background: #c4c4c4;border: 0;margin-top: 35px;margin-bottom: 0;">
                </div>
                <div class="col-md-12 pt-35" style="padding-left: 20px;">
                    <div class="text-16 text-roboto" style="font-weight: bold">Erika Tale<span class="text-13 text-roboto pull-right" style="font-weight: lighter">Dec 16, 2016 5:30 PM</span></div>
                    <div class="text-16 text-roboto mt-15" style="font-weight: lighter">Halo, apakah bisa campur warna jika membeli banyak?</div>
                    <hr style="color: gray;height: 1px;display: block;background: #c4c4c4;border: 0;margin-top: 35px;margin-bottom: 0;">
                </div>                
                <div class="col-md-12 pt-35" style="padding-left: 20px;">
                    <div class="text-16 text-roboto" style="font-weight: bold">Erika Tale<span class="text-13 text-roboto pull-right" style="font-weight: lighter">Dec 16, 2016 5:30 PM</span></div>
                    <div class="text-16 text-roboto mt-15" style="font-weight: lighter">Halo, apakah bisa campur warna jika membeli banyak?</div>
                    <hr style="color: gray;height: 1px;display: block;background: #c4c4c4;border: 0;margin-top: 35px;margin-bottom: 0;">
                </div>                
                <div class="col-md-12 pt-35" style="padding-left: 20px;">
                    <div class="text-16 text-roboto" style="font-weight: bold">Erika Tale<span class="text-13 text-roboto pull-right" style="font-weight: lighter">Dec 16, 2016 5:30 PM</span></div>
                    <div class="text-16 text-roboto mt-15" style="font-weight: lighter">Halo, apakah bisa campur warna jika membeli banyak?</div>
                    <hr style="color: gray;height: 1px;display: block;background: #c4c4c4;border: 0;margin-top: 35px;margin-bottom: 0;">
                </div>                
                <div class="col-md-12 pt-35" style="padding-left: 20px;">
                    <div class="text-16 text-roboto" style="font-weight: bold">Erika Tale<span class="text-13 text-roboto pull-right" style="font-weight: lighter">Dec 16, 2016 5:30 PM</span></div>
                    <div class="text-16 text-roboto mt-15" style="font-weight: lighter">Halo, apakah bisa campur warna jika membeli banyak?</div>
                    <hr style="color: gray;height: 1px;display: block;background: #c4c4c4;border: 0;margin-top: 35px;margin-bottom: 0;">
                </div>                
            </div>
            <div class="col-md-12 pt-35 text-16 text-roboto" style="">
                <div class="col-md-12" style="padding-left: 20px;">
                    <textarea style="width: 100%;height: 67px;border: solid 1px #c4c4c4;color: #c4c4c4;padding: 15px;" placeholder="Write a reply..."></textarea>
                </div>
                <div class="col-md-4 pt-25" style="padding-left: 20px;">
                    <button class="no-border warnadasar" style="height: 35px;width: 100%">REPLY MESSAGE</button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('css')
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="{{asset('front/css/bootstrap-select.min.css')}}">
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
    .lebar-12{
        width: 12%;
    }
    .lebar-15{
        width: 15%;
    }
    .box-prod {
        padding: 0 8px 0 0;
        margin: 3px 0 3px 0;
        /*        background-color: #d1d2d3;*/
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
    .desc-product {
        height: 40px;
        padding: 10px 10px 20px 10px;
        font-family: cabin;
        font-size: 10px;
    }
    .gambar-full{
        width: 100%;
        height: 100%;
    } 
    //select
    .bootstrap-select:not([class*=col-]):not([class*=form-control]):not(.input-group-btn) {
        width: 100%!important;
    }


</style>
@endsection
@section('js')

<!-- Latest compiled and minified JavaScript -->
<script src="{{asset('front/js/bootstrap-select.min.js')}}"></script>

<script type="text/javascript">
$(document).ready(function () {
    $('.expand').click(function () {
        for (var i = 0; i < 10; i++) {
            $('.brand-list').append('<li>CAHAYA</li>');
        }
    })
    $('.selectpicker').selectpicker({
        style: 'btn-info',
        size: 4
    });

});
function open() {
    $('#modalView').modal('show');
}
</script>
@endsection
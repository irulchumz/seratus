@extends('layout')
@section('title')
<title>SeratusPlus || Brand Details</title>
@endsection
@section('content')
<div class="section pt-60 pb-10" style="background-color: #c3dadd;">
    <div class="container">
    </div>
</div>
<div class="section pt-40 pb-10" style="background-color: #c3dadd;">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-3 col-md-6 col-sm-12 col-xs-12 box-login-box">
                <div class="login-box">
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-md-12 mb-40" id="title">
                                <label class="title-login" style="">Seratusplus will help you plan your next personal design acquisition lorem isum dolorsit amet.</label>
                            </div>
                            <div class="col-md-12 mb-40 hidden" id="title2">
                                <label style="font-size: 22px;font-weight: bold;font-family: roboto">Last one,we promise!</label>
                            </div>
                            <div id="log1" class="">
                                <div class="col-md-12 mb-10">
                                    <label style="font-size: 16px;margin-bottom: 0;">SIGN-UP</label>
                                    <!--<hr style="color: gray;height: 1px;display: block;background: gray;border: 0;margin-top: 5px;margin-bottom: 0;">-->
                                </div>
                                <div class="col-md-12 mb-30">
                                    <input type="text" class="hidden" id="tipe" name="tipe" value="1">
                                    <div class="col-md-3" style="padding-left: 0;">
                                        <div class="radio-item">
                                            <input type="radio" id="opt1" name="tipe1" checked value="1">
                                            <label class="text-12" style="font-weight: bold;" for="opt1">Press/Media</label>
                                        </div>                                        
                                    </div>
                                    <div class="col-md-6" style="padding-left: 0;">
                                        <div class="radio-item">
                                            <input type="radio" id="opt2" name="tipe1" value="2">
                                            <label class="text-12" style="font-weight: bold;" for="opt2">Designer and other professionals</label>
                                        </div>                                        
                                    </div>
                                    <div class="col-md-3" style="padding-left: 0;">
                                        <div class="radio-item">
                                            <input type="radio" id="opt3" name="tipe1" value="3">
                                            <label class="text-12" style="font-weight: bold;" for="opt3">General/Public</label>
                                        </div>                                        
                                    </div>
                                </div>
                                <div class="col-md-12 mb-10">
                                    <label class="form-label">Name</label>
                                    <input type="text" name="nama">
                                </div>
                                <div class="col-md-12 mb-10">
                                    <label class="form-label">E-mail</label>
                                    <input type="text" name="email">
                                </div>
                                <div class="col-md-12 mb-20">
                                    <label class="form-label">Passwords</label>
                                    <input id="password" name="password" type="password">
                                </div>
                                <div class="col-md-12">
                                    <button type="button" id="next" class="bg-putih no-border text-cabin text-14" style="color: black;height: 40px;font-weight: bold;float: right">NEXT</button>
                                </div>
                            </div>
                            <div id="log-press" class="hidden">
                                <div class="col-md-12 col-sm-12 col-xs-12 mb-10">
                                    <label style="font-size: 16px;margin-bottom: 0;">PRESS SIGN-UP</label>
                                    <!--<hr style="color: gray;height: 1px;display: block;background: gray;border: 0;margin-top: 5px;margin-bottom: 0;">-->
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 mb-10">
                                    <div class="col-md-6 col-sm-6 col-xs-6" style="padding-left: 0;">
                                        <label class="form-label">Birthdate</label>
                                        <input type="text" name="nama">
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6" style="padding-right: 0;">
                                        <label class="form-label">Gender</label>
                                        <input type="text" name="nama">
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 mb-10">
                                    <label class="form-label">Company</label>
                                    <input type="text" name="nama">
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 mb-10">
                                    <div class="col-md-6 col-sm-6 col-xs-6" style="padding-left: 0;">
                                        <label class="form-label">Type of Media</label>
                                        <input type="text" name="nama">
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6" style="padding-right: 0;">
                                        <label class="form-label">Roles</label>
                                        <input type="text" name="nama">
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 mb-10">
                                    <div class="col-md-6 col-sm-6 col-xs-6" style="padding-left: 0;">
                                        <label class="form-label">Country</label>
                                        <div class="select_style">
                                            <select>
                                                <option class="text-cabin text-11" value="" disabled selected>Select...</option>
                                                <option class="text-cabin text-11">Tell Me I'm pretty</option>
                                                <option class="text-cabin text-11">Tell Me I'm pretty</option>
                                            </select>
                                            <span></span>
                                            <hr style="color: gray;height: 1px;display: block;background: gray;border: 0;margin-top: 5px;margin-bottom: 0;margin-right: -30px">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6" style="padding-right: 0;">
                                        <label class="form-label">City</label>
                                        <div class="select_style">
                                            <select>
                                                <option class="text-cabin text-11" value="" disabled selected>Select...</option>
                                                <option class="text-cabin text-11">Tell Me I'm pretty</option>
                                                <option class="text-cabin text-11">Tell Me I'm pretty</option>
                                            </select>
                                            <span></span>
                                            <hr style="color: gray;height: 1px;display: block;background: gray;border: 0;margin-top: 5px;margin-bottom: 0;margin-right: -30px">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <button type="button" id="next-press" class="bg-putih no-border text-cabin text-14" style="color: black;height: 40px;font-weight: bold;float: right">NEXT</button>
                                </div>
                            </div>
                            <div id="log-pro" class="hidden">
                                <div class="col-md-12 col-sm-12 col-xs-12 mb-10">
                                    <label style="font-size: 16px;margin-bottom: 0;">PROFESSIONAL SIGN-UP</label>
                                    <!--<hr style="color: gray;height: 1px;display: block;background: gray;border: 0;margin-top: 5px;margin-bottom: 0;">-->
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 mb-10">
                                    <div class="col-md-6 col-sm-6 col-xs-6" style="padding-left: 0;">
                                        <label class="form-label">Birthdate</label>
                                        <input type="text" name="nama">
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6" style="padding-right: 0;">
                                        <label class="form-label">Gender</label>
                                        <input type="text" name="nama">
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 col-sm-12 col-xs-12 mb-10">
                                    <label class="form-label">Occupation</label>
                                    <input type="text" name="nama">
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 mb-10">
                                    <label class="form-label">Company</label>
                                    <input type="text" name="nama">
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 mb-10">
                                    <div class="col-md-6 col-sm-6 col-xs-6" style="padding-left: 0;">
                                        <label class="form-label">Country</label>
                                        <div class="select_style">
                                            <select>
                                                <option class="text-cabin text-11" value="" disabled selected>Select...</option>
                                                <option class="text-cabin text-11">Tell Me I'm pretty</option>
                                                <option class="text-cabin text-11">Tell Me I'm pretty</option>
                                            </select>
                                            <span></span>
                                            <hr style="color: gray;height: 1px;display: block;background: gray;border: 0;margin-top: 5px;margin-bottom: 0;margin-right: -30px">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6" style="padding-right: 0;">
                                        <label class="form-label">City</label>
                                        <div class="select_style">
                                            <select>
                                                <option class="text-cabin text-11" value="" disabled selected>Select...</option>
                                                <option class="text-cabin text-11">Tell Me I'm pretty</option>
                                                <option class="text-cabin text-11">Tell Me I'm pretty</option>
                                            </select>
                                            <span></span>
                                            <hr style="color: gray;height: 1px;display: block;background: gray;border: 0;margin-top: 5px;margin-bottom: 0;margin-right: -30px">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <button type="button" id="next-pro" class="bg-putih no-border text-cabin text-14" style="color: black;height: 40px;font-weight: bold;float: right">NEXT</button>
                                </div>
                            </div>
                            <div id="log-press2" class="hidden">
                                <div class="col-md-12 mb-10">
                                    <label style="font-size: 16px;margin-bottom: 0;">PRESS SIGN-UP</label>
                                    <!--<hr style="color: gray;height: 1px;display: block;background: gray;border: 0;margin-top: 5px;margin-bottom: 0;">-->
                                </div>
                                <div class="col-md-12 mb-10">
                                    <label class="form-label">Phone Numbers</label>
                                    <input class="input-phone" type="text" name="nama">
                                </div>
                                <div class="col-md-12 mb-20">
                                    <button type="button" class="warnadasar no-border text-cabin text-14" style="width: 100%;color: black;height: 40px;font-weight: bold">FINISH UP</button>
                                </div>
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
    .login-box form label.form-label {
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
    .radio-item {
        display: inline-block;
        position: relative;
        padding: 0 6px;
        margin: 0 0 0;
    }

    .radio-item input[type='radio'] {
        display: none;
    }

    .radio-item label {
        color: #666;
        font-weight: normal;
    }

    .radio-item label:before {
        content: " ";
        display: inline-block;
        position: relative;
        top: 5px;
        margin: 0 5px 0 0;
        width: 20px;
        height: 20px;
        border-radius: 11px;
        border: 2px solid #E5C773;
        background-color: transparent;        
    }

    .radio-item input[type=radio]:checked + label:after {
        border-radius: 11px;
        width: 12px;
        height: 12px;
        position: absolute;
        top: 9px;
        left: 10px;
        content: " ";
        display: block;
        background: #E5C773;
    }
    .select_style {
        background: #FFF;
        overflow: hidden;
        //display: inline-block;
        color: #525252;
        font-weight: 300;
        font-family: "helvetica neue",arial;
        position: relative;
        cursor: pointer;
        padding-right:20px;
    }
    .select_style span {
        position: absolute;
        right: 10px;
        width: 8px;
        height: 8px;
        background: url(http://projects.authenticstyle.co.uk/niceselect/arrow.png) no-repeat;
        top: 50%;
        margin-top: -4px;
    }
    .select_style select {
        -webkit-appearance: none;
        appearance:none;
        width:120%;
        background:none;
        background:transparent;
        border:none;
        outline:none;
        cursor:pointer;
        padding:7px 10px;
        font-family: cabin;
        font-size: 11px;
    }
    option[value=""][disabled] {
        display: none;
    }
    .input-phone{
        font-size: 22px!important;
        border: none!important;
        background-color: white!important;
        font-size: 22px!important;
        border-bottom: solid 1px #ddd!important;
        font-weight: bold;
        color: #ddd!important;
        text-align: center;
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
        $("#next").click(function () {
            var tipe = $("[name=tipe]").val();
//            alert(tipe);
            if (tipe == "1") {
                $("#log1").addClass('hidden');
                $("#log-press").removeClass('hidden');
            } else if (tipe == "2") {
                $("#log1").addClass('hidden');
                $("#log-pro").removeClass('hidden');
            } else if (tipe == "3") {
                alert("Sign-up success!!")
            }
        });
        $("#next-press").click(function () {
            $("#log-press").addClass('hidden');
            $("#log-press2").removeClass('hidden');
            $("#title").addClass('hidden');
            $("#title2").removeClass('hidden');
        });
        $("#next-pro").click(function () {
            alert("Sign-up success!!");
        });
        $("[id^=opt]").click(function () {
//            alert("Sign-up success!!");
//            $("[id^=opt]").attr('checked', false);
//            $(this).attr('checked', true);
            $("[name=tipe]").val($(this).val());
//            alert();
        });
    });
    function open() {
        $('#modalView').modal('show');
    }
</script>
@endsection
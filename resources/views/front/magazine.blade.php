@extends('layout')
@section('title')
<title>SeratusPlus || Brand Detailsa</title>
@endsection
@section('content')
<div class="section pt-60">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="#">HOME</a></li>
        </ul>
        <span class="title">Seratusplus Magazine<span class="kecil">Magazine Tagline Here</span></span>
        <span class="month" style="float: right;font-weight: 16px;">Januari: The Futurist</span>
    </div>
</div>
<div class="section pt-60 hidden-sm hidden-xs">
    <div class="container">
        <div class="col-md-2" style="padding-left: 0">
            <a href="{{URL::to('all-articles/personality')}}" style="color: black">
                <span class="text-12 text-cabin">Personality</span>
            </a>
        </div>
        <div class="col-md-2 text-center">
            <a href="{{URL::to('all-articles/a-story')}}" style="color: black">
                <span class="text-12 text-cabin">A Story</span>
            </a>
        </div>
        <div class="col-md-2 text-center">
            <a href="{{URL::to('all-articles/journal')}}" style="color: black">
                <span class="text-12 text-cabin">Journal</span>
        </div>
        <div class="col-md-2 text-center">
            <a href="{{URL::to('all-articles/visual')}}" style="color: black">
                <span class="text-12 text-cabin">Visual</span>
            </a>
        </div>
        <div class="col-md-2 text-center">
            <a href="{{URL::to('all-articles/curation')}}" style="color: black">
                <span class="text-12 text-cabin">Curation</span>
            </a>
        </div>
        <div class="col-md-2" style="text-align: right;padding-right: 0">
            <a href="{{URL::to('all-articles/news')}}" style="color: black">
                <span class="text-12 text-cabin">News</span>
            </a>
        </div>
    </div>
</div>
<div class="section pt-10">
    <div class="container">
        <div class="col-md-12" style="padding-left: 0;padding-right: 0;">
            <hr style="color: gray;height: 1px;display: block;background: black;border: 0;margin-top: 0;margin-bottom: 4px;">
        </div>        
        <div class="col-md-12" style="padding-left: 0;padding-right: 0;">
            <i class="fa fa-youtube-play"></i><span class="text-12">&nbsp;&nbsp;&nbsp;Subscribe to Monthly E-Magazine</span>
            <div class="text-12" style="float: right;">
                <form action="" autocomplete="on" style="border-bottom: solid 1px black">
                    <input class="no-border" name="search" type="text" placeholder="Cari Topik">
                    <button class="no-border bg-putih" style="margin-left: -5px;" type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
        <div class="col-md-12" style="padding-left: 0;padding-right: 0;">
            <hr style="color: gray;height: 1px;display: block;background: black;border: 0;margin-top: 4px;margin-bottom: 0;">
        </div>

    </div>
</div>    
<div class="section pt-35">
    <div class="container">
        <div class="col-md-6 img-main-left" style="">
            <img class="magazine-img" src="{{asset('front/img/product/1.jpg')}}" style="" alt=""/>
        </div>
        <div class="col-md-6 img-desc" style="">
            <div class="text-16 mt-35 mt-sm-15" style="font-weight: bold;">A-Story</div>
            <div class="mt-35 mt-sm-15" style="font-size: 24px;line-height: 42px">Miebi Sikoki</div>
            <div class="mt-45 mt-sm-15 text-16" style="">
                Bermula dari tindakan berolak dari amerika Serikat. Bermula dari tindakan berolak dari amerika Serikat.                
                Bermula dari tindakan berolak dari amerika Serikat. Bermula dari tindakan berolak dari amerika Serikat.                
                Bermula dari tindakan berolak dari amerika Serikat. Bermula dari tindakan berolak dari amerika Serikat.                
            </div>
            <div class="text-10 mt-100 mt-sm-15" style="font-weight: bold">
                12 Desember 2017
            </div>
        </div>
    </div>
</div>
<div class="section pt-35 pb-35">
    <div class="container">
        <div class="col-md-6 img-main-right" style="">
            <img class="magazine-img" src="{{asset('front/img/product/1.jpg')}}" alt=""/>
        </div>
        <div class="col-md-6 img-desc" style="">
            <div class="text-16 mt-35 mt-sm-15" style="font-weight: bold;">A-Story</div>
            <div class="mt-35 mt-sm-15" style="font-size: 24px;line-height: 42px">Miebi Sikoki</div>
            <div class="mt-45 mt-sm-15 text-16" style="padding-right: 30px;">
                Bermula dari tindakan berolak dari amerika Serikat. Bermula dari tindakan berolak dari amerika Serikat.                
                Bermula dari tindakan berolak dari amerika Serikat. Bermula dari tindakan berolak dari amerika Serikat.                
                Bermula dari tindakan berolak dari amerika Serikat. Bermula dari tindakan berolak dari amerika Serikat.                
            </div>
            <div class="text-10 mt-100 mt-sm-15" style="font-weight: bold">
                12 Desember 2017
            </div>
        </div>
    </div>
</div>
<div class="section bg-abuabu">
    <div class="container">
        <div class="col-md-3 col-sm-4 col-xs-4 mt-50 mb-50" style="padding-left: 0;">
            <img class="journal-img" src="{{asset('front/img/product/1.jpg')}}" style="" alt=""/>
        </div>
        <div class="col-md-9 col-sm-8 col-xs-8 mt-50 mt-sm-5 journal-desc" style="">
            <div class="text-16 mt-25 text-sm-10" style="font-weight: bold;">Journal/Joshua Simandjuntak</div>
            <div class="mt-35 mt-sm-5 text-sm-14" style="font-size: 24px;">Miebi Sikoki</div>
            <div class="mt-45 mt-sm-5 text-16 text-sm-10 lh-12" style="">
                Bermula dari tindakan berolak dari amerika Serikat. Bermula dari tindakan berolak dari amerika Serikat.                
                Bermula dari tindakan berolak dari amerika Serikat. Bermula dari tindakan berolak dari amerika Serikat.                
                Bermula dari tindakan berolak dari amerika Serikat. Bermula dari tindakan berolak dari amerika Serikat.                
            </div>
        </div>
    </div>
</div>
<div class="section pt-35">
    <div class="container">
        <div class="col-md-6 col-sm-7 col-xs-7" style="padding-left: 0;">
            <img class="visual-img" src="{{asset('front/img/product/1.jpg')}}" style="" alt=""/>
            <span class="text-14 text-sm-10 visual-title" style="position: absolute;top: 300px;left: 30px;">Visuals</span>
            <span class="text-sm-12 visual-subtitle" style="position: absolute;top: 360px;left: 30px;font-size: 24px;">8 Karya Terbaik Kiat Architects</span>
        </div>
        <div class="col-md-6 col-sm-5 col-xs-5 no-padding" style="">
            <div class="mb-10 mb-sm-4" style="float: left;">
                <div class="col-md-6 col-sm-12 col-xs-12 no-padding" style="">
                    <img class="curation-img" src="{{asset('front/img/product/1.jpg')}}" style="" alt=""/>
                </div>
                <div class="col-md-6 hidden-sm hidden-xs" style="">
                    <div class="text-16 mt-20" style="font-weight: bold;">Curation</div>
                    <div class="mt-35" style="font-size: 24px;font-weight: bold">Amazon Interior Mengkhususkan Diri Pada Properti US</div>
                </div>
            </div>
            <div style="float: left">
                <div class="col-md-6 col-sm-12 col-xs-12 no-padding" style="">
                    <img class="curation-img" src="{{asset('front/img/product/1.jpg')}}" style="" alt=""/>
                </div>
                <div class="col-md-6 hidden-sm hidden-xs" style="">
                    <div class="text-16 mt-20" style="font-weight: bold;">Curation</div>
                    <div class="mt-35" style="font-size: 24px;font-weight: bold">Amazon Interior Mengkhususkan Diri Pada Properti US</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section pt-45">
    <div class="container">
        <div class="bg-pink hg-40" style="float: left;width: 15%;height: 80px;"></div>
        <div class="hg-40" style="float: left;width: 70%;height: 80px;">
            <img src="{{asset('front/img/product/1.jpg')}}" style="height: 100%;width: 100%;" alt=""/>
        </div>
        <div class="bg-pink hg-40" style="float: left;width: 15%;height: 80px;"></div>
    </div>    
</div>
<div class="section pt-10 pb-10">
    <div class="container">
        <span class="text-14 text-cabin">Latest Articles</span>
    </div>
</div>
<div class="blog-section section pb-20">
    <div class="container">
        <div class="row">
            <!-- blog-item start -->
            <div class="col-md-3 col-sm-6 col-xs-6 mb-30">
                <div class="blog-item">
                    <a class="image" style="margin-bottom: 20px;" href="blog-details.html"><img src="{{asset('front/img/blog/1.jpg')}}"  alt=""></a>
                    <div class="blog-dsc pt-5">
                        <span class="text-18" style="display: block;font-weight: bold">10 Best Asian Resort Furniture</span>
                        <span class="text-14" style="margin-top: 20px;display: block">Eksportir dan proyek besar di Seychelles menjadi tujuan utama dunia furnitur saat ini</span>
                    </div>
                </div>
            </div>                      
            <div class="col-md-3 col-sm-6 col-xs-6 mb-30">
                <div class="blog-item">
                    <a class="image" style="margin-bottom: 20px;" href="blog-details.html"><img src="{{asset('front/img/blog/1.jpg')}}"  alt=""></a>
                    <div class="blog-dsc pt-5">
                        <span class="text-18" style="display: block;font-weight: bold">10 Best Asian Resort Furniture</span>
                        <span class="text-14" style="margin-top: 20px;display: block">Eksportir dan proyek besar di Seychelles menjadi tujuan utama dunia furnitur saat ini</span>
                    </div>
                </div>
            </div>                      
            <div class="col-md-3 col-sm-6 col-xs-6 mb-30">
                <div class="blog-item">
                    <a class="image" style="margin-bottom: 20px;" href="blog-details.html"><img src="{{asset('front/img/blog/1.jpg')}}"  alt=""></a>
                    <div class="blog-dsc pt-5">
                        <span class="text-18" style="display: block;font-weight: bold">10 Best Asian Resort Furniture</span>
                        <span class="text-14" style="margin-top: 20px;display: block">Eksportir dan proyek besar di Seychelles menjadi tujuan utama dunia furnitur saat ini</span>
                    </div>
                </div>
            </div>                      
            <div class="col-md-3 col-sm-6 col-xs-6 mb-30">
                <div class="blog-item">
                    <a class="image" style="margin-bottom: 20px;" href="blog-details.html"><img src="{{asset('front/img/blog/1.jpg')}}"  alt=""></a>
                    <div class="blog-dsc pt-5">
                        <span class="text-18" style="display: block;font-weight: bold">10 Best Asian Resort Furniture</span>
                        <span class="text-14" style="margin-top: 20px;display: block">Eksportir dan proyek besar di Seychelles menjadi tujuan utama dunia furnitur saat ini</span>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <button type="button" id="next" class="bg-putih no-border text-cabin text-14" style="color: black;height: 40px;font-weight: bold;float: right">More Article&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-right"></i></button>
            </div>
        </div>
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
        .magazine-img{
            height: 425px;
            width: 100%;
        }
        .img-desc{
            padding-left: 35px;
        }
        .img-main-left{
            padding-left: 0;
            padding-right: 0;
        }
        .img-main-right{
            padding-left: 0;
            padding-right: 0;
            float: right;
        }
        .journal-img{
            height: 310px;
            width: 310px;
            border-radius: 50%;
        }
        .journal-desc{
            padding-left: 40px;
        }
        .visual-img{
            height: 440px;
            width: 100%;
            position: relative;
        }
    }
    @media (min-width: 768px) and (max-width: 992px) {
        .month{
            position: relative;
            top: -60px;
        }
        .magazine-img{
            height: 207px;
            width: 100%;
        }
        .img-desc{
            padding-left: 0px;
        }
        .mt-sm-15{
            margin-top: 15px!important;
        }
        .mt-sm-5{
            margin-top: 5px!important;
        }
        .img-main-left{
            padding-left: 0;
            padding-right: 0;
        }
        .img-main-right{
            padding-left: 0;
            padding-right: 0;
            /*float: right;*/
        }
        .journal-img{
            height: 112px;
            width: 112px;
            border-radius: 50%;
        }
        .journal-desc{
            padding-left: 15px;
        }
        .text-sm-10{
            font-size: 10px!important;
        }
        .text-sm-14{
            font-size: 14px!important;
        }
        .text-sm-12{
            font-size: 12px!important;
        }
        .lh-12{
            line-height: 12px;
        }
        .visual-img{
            height: 208px;
            width: 100%;
            position: relative;
        }
        .visual-title{
            left: 10px!important;
            top: 140px!important;
        }
        .visual-subtitle{
            left: 10px!important;
            top: 165px!important;
        }
        .no-padding{
            padding-left: 0!important;
            padding-right: 0!important;
        }
        .curation-img{
            height: 102px;
            width: 100%;
        }
        .mb-sm-4{
            margin-bottom: 4px!important;
        }
        .hg-40{
            height: 40px!important;
        }
    }
    @media (max-width: 768px) {
        .month{
            position: relative;
            top: -60px;
        }
        .magazine-img{
            height: 207px;
            width: 100%;
        }
        .img-desc{
            padding-left: 0px;
        }
        .mt-sm-15{
            margin-top: 15px!important;
        }
        .mt-sm-5{
            margin-top: 5px!important;
        }
        .img-main-left{
            padding-left: 0;
            padding-right: 0;
        }
        .img-main-right{
            padding-left: 0;
            padding-right: 0;
            /*float: right;*/
        }
        .journal-img{
            height: 112px;
            width: 112px;
            border-radius: 50%;
        }
        .journal-desc{
            padding-left: 15px;
        }  
        .text-sm-10{
            font-size: 10px!important;
        }
        .text-sm-14{
            font-size: 14px!important;
        }
        .text-sm-12{
            font-size: 12px!important;
        }
        .lh-12{
            line-height: 12px;
        }
        .visual-img{
            height: 208px;
            width: 100%;
            position: relative;
        }
        .visual-title{
            left: 10px!important;
            top: 140px!important;
        }
        .visual-subtitle{
            left: 10px!important;
            top: 165px!important;
        }
        .no-padding{
            padding-left: 0!important;
            padding-right: 0!important;
        }
        .curation-img{
            height: 102px;
            width: 100%;
        }
        .mb-sm-4{
            margin-bottom: 4px!important;
        }
        .hg-40{
            height: 40px!important;
        }
    }
    .magazine-left{
        width: 83px;  
        float: left;
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
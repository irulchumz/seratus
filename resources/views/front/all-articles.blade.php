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
        <span style="float: right;font-weight: 16px;">Januari: The Futurist</span>
    </div>
</div>
<div class="section pt-60">
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
        <div class="col-md-3" style="padding-left: 0;padding-right: 0;text-align: center">
            <img src="{{asset('front/img/'.$title.'.png')}}" style="height: 121px;width: 121px;" alt=""/>
            <div class="" style="font-size: 24px;font-weight: bold;padding-top: 15px;">
                {{$title}}
            </div>
        </div>
        <div class="col-md-9" style="padding-left: 35px;">
            <div class="col-md-4">
                <img src="{{asset('front/img/product/1.jpg')}}" style="height: 165px;width: 100%;" alt=""/>
            </div>
            <div class="col-md-8">
                <div class="text-12" style="font-weight: bold">
                    12 December 2017
                </div>
                <div class="" style="font-size: 21px;font-weight: bold;padding-top: 32px;">
                    10 Best Asian Resort Furniture
                </div>
                <div class="mt-10 text-16" style="font-weight: lighter">
                    Bermula dari tindakan berolak dari amerika Serikat. Bermula dari tindakan berolak dari amerika Serikat.                
                    Bermula dari tindakan berolak dari amerika Serikat. Bermula dari tindakan berolak dari amerika Serikat.
                </div>
            </div>
        </div>
        @for($i=0;$i<8;$i++)
        <div class="col-md-offset-3 col-md-9 mt-35" style="padding-left: 35px;">
            <div class="col-md-4">
                <img src="{{asset('front/img/product/1.jpg')}}" style="height: 165px;width: 100%;" alt=""/>
            </div>
            <div class="col-md-8">
                <div class="text-12" style="font-weight: bold">
                    12 December 2017
                </div>
                <div class="" style="font-size: 21px;font-weight: bold;padding-top: 32px;">
                    Miebi Sikoki
                </div>
                <div class="mt-10 text-16" style="">
                    Bermula dari tindakan berolak dari amerika Serikat. Bermula dari tindakan berolak dari amerika Serikat.                
                    Bermula dari tindakan berolak dari amerika Serikat. Bermula dari tindakan berolak dari amerika Serikat.
                </div>
            </div>
        </div>
        @endfor
        <div class="col-md-offset-3 col-md-9 mt-35" style="padding-left: 35px;">
            <button class="pull-right no-border" style="background-color: white;color: black">Next&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-right"></i></button>
        </div>
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
            <div class="col-md-3 col-sm-6 col-xs-12 mb-30">
                <div class="blog-item">
                    <a class="image" style="margin-bottom: 20px;" href="blog-details.html"><img src="{{asset('front/img/blog/1.jpg')}}"  alt=""></a>
                    <div class="blog-dsc pt-5">
                        <span class="text-18" style="display: block;font-weight: bold">10 Best Asian Resort Furniture</span>
                        <span class="text-14" style="margin-top: 20px;display: block">Eksportir dan proyek besar di Seychelles menjadi tujuan utama dunia furnitur saat ini</span>
                    </div>
                </div>
            </div>                      
            <div class="col-md-3 col-sm-6 col-xs-12 mb-30">
                <div class="blog-item">
                    <a class="image" style="margin-bottom: 20px;" href="blog-details.html"><img src="{{asset('front/img/blog/1.jpg')}}"  alt=""></a>
                    <div class="blog-dsc pt-5">
                        <span class="text-18" style="display: block;font-weight: bold">10 Best Asian Resort Furniture</span>
                        <span class="text-14" style="margin-top: 20px;display: block">Eksportir dan proyek besar di Seychelles menjadi tujuan utama dunia furnitur saat ini</span>
                    </div>
                </div>
            </div>                      
            <div class="col-md-3 col-sm-6 col-xs-12 mb-30">
                <div class="blog-item">
                    <a class="image" style="margin-bottom: 20px;" href="blog-details.html"><img src="{{asset('front/img/blog/1.jpg')}}"  alt=""></a>
                    <div class="blog-dsc pt-5">
                        <span class="text-18" style="display: block;font-weight: bold">10 Best Asian Resort Furniture</span>
                        <span class="text-14" style="margin-top: 20px;display: block">Eksportir dan proyek besar di Seychelles menjadi tujuan utama dunia furnitur saat ini</span>
                    </div>
                </div>
            </div>                      
            <div class="col-md-3 col-sm-6 col-xs-12 mb-30">
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
<div class="section pt-30 pb-30" style="background-image: url('{{asset("front/img/bg-box-bottom1.png")}}');background-size:100%;">
    <div class="container text-center pt-30 pb-30">
        <p class="text-cabin" style="color: black">Designers, journalists and buyers, click here to find out how seratusplus.com benefits you!</p>
    </div>
</div>

@endsection
@section('css')
<style media="screen" type="text/css">
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
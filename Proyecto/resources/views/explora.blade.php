@extends('layouts.index')
@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-9">
            <div class="slider-for mx-auto">
                <img class="img-responsive" src="//i.ytimg.com/vi/HaGkk60kcjQ/maxresdefault.jpg" alt="" srcset="" width="412px" height="232px">
                <img class="img-responsive" src="//i.ytimg.com/vi/HaGkk60kcjQ/maxresdefault.jpg" alt="" srcset="" width="412px" height="232px">
                <img class="img-responsive" src="https://i.ytimg.com/vi/HaGkk60kcjQ/maxresdefault.jpg" alt="" srcset="" width="412px" height="232px">
            </div>
            <div class="slider-nav mx-auto">
                <img class="img-responsive" src="//i.ytimg.com/vi/HaGkk60kcjQ/maxresdefault.jpg" alt="" srcset="" width="206px" height="116px">
                <img class="img-responsive" src="//i.ytimg.com/vi/HaGkk60kcjQ/maxresdefault.jpg" alt="" srcset="" width="206px" height="116px">
                <img class="img-responsive" src="//i.ytimg.com/vi/HaGkk60kcjQ/maxresdefault.jpg" alt="" srcset="" width="206px" height="116px">
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="slick/slick.min.js"></script>
<script>
    $(function(){
        $('.slider-for').slick({
            autoplay: true,
            speed: 1000,
            arrows: false,
            asNavFor: ".slider-nav"
        });
        $('.slider-nav').slick({
            slidesToShow: 2,
            speed: 1000,
            asNavFor: ".slider-for"
        });
    });
</script>
@endsection

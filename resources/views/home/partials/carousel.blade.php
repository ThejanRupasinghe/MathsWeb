
<div class="carousel slide" id="screenshot-carousel" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#screenshot-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#screenshot-carousel" data-slide-to="1"></li>
        <li data-target="#screenshot-carousel" data-slide-to="2"></li>
        {{--<li data-target="#screenshot-carousel" data-slide-to="3"></li>--}}
    </ol>
    <div class="carousel-inner">

        <div class="item active">
            <img src="{{ URL::asset('carousel/image1.jpg') }}" alt="First image">
        </div>
        <div class="item">
            <img src="{{ URL::asset('carousel/image2.jpg') }}" alt="First image">
        </div>
        <div class="item">
            <img src="{{ URL::asset('carousel/image3.jpg') }}" alt="First image">
        </div>
        {{--<div class="item">--}}
            {{--<img src="{{ URL::asset('carousel/image4.jpg') }}" alt="First image">--}}
        {{--</div>--}}

    </div>
</div>





<div class="testimonials">
    <div class="container">
        <h3 class="head head1"><span style="font-size: 50px"><i>Time Tables</i></span></h3>
        <ul id="flexiselDemo1">
            <li>
                <div class="wthree_testimonials_grid_main">
                    <div class="wthree_testimonials_grid">
                        {{--<h4>Suspendisse sagittis nibh sit amet nisi imperdiet</h4>--}}
                        {{--<p>Donec laoreet eu purus eu viverra. Vestibulum sed convallis massa,--}}
                            {{--eu aliquet massa. Suspendisse lacinia rutrum tincidunt. Integer id erat porta,--}}
                            {{--convallis tortor a, ullamcorper magna.</p>--}}
                        {{--<div class="wthree_testimonials_grid_pos">--}}
                            {{--<img src="images/2.png" alt=" " class="img-responsive"/>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="wthree_testimonials_grid1">--}}
                        {{--<h5>Mark Henry</h5>--}}
                        {{--<p>Teacher</p>--}}
                        <img src="{{ URL::asset('images/time_table.jpg') }}" alt="First image" style="width: 660px; height: 600px">
                    </div>
                </div>
            </li>
            {{--<li>--}}
                {{--<div class="wthree_testimonials_grid_main">--}}
                    {{--<div class="wthree_testimonials_grid">--}}
                        {{--<h4>Vestibulum sed convallis massa tincidunt</h4>--}}
                        {{--<p>Donec laoreet eu purus eu viverra. Vestibulum sed convallis massa,--}}
                            {{--eu aliquet massa. Suspendisse lacinia rutrum tincidunt. Integer id erat porta,--}}
                            {{--convallis tortor a, ullamcorper magna.</p>--}}
                        {{--<div class="wthree_testimonials_grid_pos">--}}
                            {{--<img src="images/4.png" alt=" " class="img-responsive"/>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="wthree_testimonials_grid1">--}}
                        {{--<h5>Linda Carl</h5>--}}
                        {{--<p>Teacher</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</li>--}}
        </ul>
        <script type="text/javascript">
            $(window).load(function () {
                $("#flexiselDemo1").flexisel({
                    visibleItems: 1,
                    animationSpeed: 1000,
                    autoPlay: true,
                    autoPlaySpeed: 3000,
                    pauseOnHover: true,
                    enableResponsiveBreakpoints: true,
                    responsiveBreakpoints: {
                        portrait: {
                            changePoint: 480,
                            visibleItems: 1
                        },
                        landscape: {
                            changePoint: 640,
                            visibleItems: 1
                        },
                        tablet: {
                            changePoint: 768,
                            visibleItems: 1
                        }
                    }
                });

            });
        </script>
        <script type="text/javascript" src="js/jquery.flexisel.js"></script>
    </div>
</div>
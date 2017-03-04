@extends('templates.master')

@section('body')

	@include('templates.partials.navbar',['home'=>'active','downloads'=>'null','gallery'=>'null','results'=>'null','contact'=>'null'])

	@include('home.partials.carousel')

    <!-- banner-bottom -->
    <div id="about" class="banner-bottom">
        <div class="container">
            <h3 class="head">A<span>brief description <i>about</i> teaching</span></h3>
            <div class="agileits_banner_bottom_grids">
                <div class="col-md-6 agileits_banner_bottom_grid_l">
                    <h4>Aliquam a nunc non erat lobortis</h4>
                    <p><i>Vestibulum nec consequat nisl. Aliquam vehicula egestas commodo.
                            Pellentesque lorem magna, pulvinar sed lacinia et, venenatis in mi.</i>Nullam sodales rutrum
                        nisl, gravida porttitor lectus porta et.
                        Duis purus arcu, semper at magna faucibus, elementum maximus ligula.
                        Etiam imperdiet posuere odio gravida vehicula. Nulla consectetur massa
                        eget tincidunt suscipit. Integer vitae ex eros. Cras ornare dignissim
                        scelerisque.</p>
                </div>
                <div class="col-md-6 agileits_banner_bottom_grid_r">
                    <div class="agileits_banner_btm_grid_r">
                        <img src="images/3.jpg" alt=" " class="img-responsive"/>
                        <div class="agileits_banner_btm_grid_r_pos">
                            <img src="images/2.jpg" alt=" " class="img-responsive"/>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- //banner-bottom -->

    <!-- banner-bottom1 -->
    <div class="banner-bottom1">
        <div class="col-md-6 agile_banner_bottom1_left">
        </div>
        <div class="col-md-6 agile_banner_bottom1_right">
            <h4>Duis at enim sit amet velit mattis</h4>
            <p>Aliquam a tellus nec leo commodo imperdiet sit amet sit amet lacus.
                Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                turpis egestas.</p>
            <ul>
                <li><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>Morbi eu velit eget libero
                    pretium
                </li>
                <li><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>Pellentesque habitant morbi</li>
                <li><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>Senectus et netus et malesuada
                </li>
                <li><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>Fames ac turpis egestas</li>
                <li><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>Tellus nec leo commodo imperdiet
                </li>
                <li><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>Habitant morbi tristique senectus
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- //banner-bottom1 -->

    <!-- testimonials -->
    @include('home.partials.testimonials')
    <!-- //testimonials -->

@endsection






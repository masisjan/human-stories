@extends('layouts.main')
@section('title', 'Contact App | All contacts')
@section('content')

    <div class="fon_1 fon fon_tel_1 more_relative ">
        <h1 id="t1" class="title">ՄԱՐԴԿԱՅԻՆ<br> ՊԱՏՄՈՒԹՅՈՒՆՆԵՐ</h1>
        <div class="center">
            <a href="#t2" class="more">ԱՎԵԼԻՆ<br>
                <img src="{{asset('images/config/button_nerqev.png')}}" class="button_nerqev" alt="">
            </a>
        </div>
    </div>
    <div class="fon_2 fon_tel fon clearfix more_relative">
        <div id="t2" class="container">
            <h2>ՄԵՐ ՆՊԱՏԱԿԸ</h2>
            <div class="block_non_sm center">
                <a href="#t3" class="more">ԱՎԵԼԻՆ<br>
                    <img src="{{asset('images/config/button_nerqev.png')}}" class="button_nerqev" alt="">
                </a>
            </div>
            <div class="col col_6 col_6_md col_12_sm ">
                <h5 class="p_white">ՀԻՇՈՂՈՒԹՅՈՒՆ</h5>
            </div>
            <div class="col col_6 col_6_md col_12_sm ">
                <h5 class="p_white">QR ԿՈԴ</h5>
            </div>
        </div>
    </div>
    <div class="fon_4 fon_tel fon clearfix more_relative">
        <div id="t3" class="container">
            <h2 class="margin_planet">ԾԱՌԱՅՈՒԹՅՈՒՆՆԵՐ</h2>
            <div class="block_non_sm center">
                <a href="#t4" class="more">ԱՎԵԼԻՆ<br>
                    <img src="{{asset('images/config/button_nerqev.png')}}" class="button_nerqev" alt="">
                </a>
            </div>
            <div class="col col_4 col_4_md col_12_sm ">
                <img src="{{asset('images/fon/planeta_02.png')}}" class="image center_img" alt="">
                <p class="p_white center">dgfhkgfjgjfgfhd</p>
            </div>
            <div class="col col_4 col_4_md col_12_sm ">
                <img src="{{asset('images/fon/planeta_01.png')}}" class="image center_img" alt="">
                <p class="p_white center">dgfhkgfjgjfgfhd</p>
            </div>
            <div class="col col_4 col_4_md col_12_sm ">
                <img src="{{asset('images/fon/planeta_03.png')}}" class="image center_img"  alt="">
                <p  class="p_white center">dgfhkgfjgjfgfhd</p>
            </div>
        </div>
    </div>
    <div class="fon_3 fon fon_tel clearfix more_relative">
        <div id="t4" class="container">
            <h2 class="margin_planet">ԳՐԱՆՑՎԱԾ</h2>
            <div class="center block_non_sm">
                <a href="#t5" class="more">ԱՎԵԼԻՆ<br>
                    <img src="{{asset('images/config/button_nerqev.png')}}" class="button_nerqev" alt="">
                </a>
            </div>
            <div class="col col_4 col_4_md col_12_sm ">
                <img src="{{asset('images/fon/planeta_02.png')}}" class="image center_img" alt="">
                <p class="p_white php">{{ $posts->count() }}</p>
                <p class="p_white center">ՊԱՏՄՈՒԹՅՈՒՆՆԵՐ</p>
            </div>
            <div class="col col_4 col_4_md col_12_sm ">
                <img src="{{asset('images/fon/planeta_01.png')}}" class="image center_img"  alt="">
                <p class="p_white center">QR ԿՈԴԵՐ</p>
                <p class="p_white php">{{ $posts->count() }}</p>
            </div>
            <div class="col col_4 col_4_md col_12_sm ">
                <img src="{{asset('images/fon/planeta_03.png')}}" class="image center_img"  alt="">
                <p class="p_white center">ԱՅԼ ԾԱՌԱՅՈՒԹՅՈՒՆՆԵՐ</p>
                <p class="p_white php">{{ $posts->count() }}</p>
            </div>
        </div>
    </div>
    <div class="fon_2 fon fon_tel_1 clearfix more_relative">
        <div id="t5" class="container">
            <h2>ԿԱՊԸ ՄԵԶ ՀԵՏ</h2>
            <div class="center">
                <a href="#t1" class="more">ՍԿԻԶԲ<br>
                    <img src="{{asset('images/config/button_top.png')}}" class="button_nerqev" alt="">
                </a>
            </div>
            <div class="col col_6 col_6_md col_12_sm ">
                <h5 class="p_white">Սևան Պետրոսյան</h5>
                <p>Հեռ.՝ 055-74-74-04</p>
                <p>էլ. փոստ՝</p>
                <p>Վայբեր՝ +374-55-74-74-04</p>
            </div>
            <div class="col col_6 col_6_md col_12_sm ">
                <h5 class="p_white">Աշոտ Բաղդասարյան</h5>
                <p>Հեռ.՝ 077-114-557</p>
                <p>էլ. փոստ՝ 077114557@mail.ru</p>
                <p>Վայբեր՝ +374-77-11-45-57</p>
            </div>
        </div>
    </div>

@endsection

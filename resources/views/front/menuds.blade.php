
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <title>Mobile Template</title>

    <!-- Google font file. If you want you can change. -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,900" rel="stylesheet">

    <!-- Fontawesome font file css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/front/css/font-awesome.min.css')}}">

    <!-- Template global css file. Requared all pages -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/front/css/global.style.css')}}">
</head>

<body>
<style>
    .fda_food_row > .col-9
    {
        max-width: 245px;
    }

    .fda_food_row > div:not(:first-child)
    {
        margin-left: -15px;
    }

    #fda_product_tile
    {
        margin-top: 80px;
        margin-bottom: 20px;
        text-align: center;
        margin-left: 105px;
    }

    #fda_product_tile span
    {
        display: block;
    }

    .fda_food_row div.food_tile
    {
        background-color: rgba(0,0,0,0.05);
        font-size: 11px;
        padding: 0 25px;
        border-radius: 25px;
    }

    .fda_food_row div.food_tile.active
    {
        background-color: rgba(220,230,252,1);
    }

    .fda_food_row div.food_tile img
    {
        position: relative;
        width: 150px;
        border-radius: 100%;
        padding: 20px;
        background-color: rgba(0,0,0,0.05);
        box-shadow: inset 0 0 25px rgba(255,255,255,0.15),
        inset 0 4px 0 rgba(0,0,0,0.05),
        inset 0 -4px 0 rgba(0,0,0,0.05),
        inset 0 10px 10px rgba(0,0,0,0.09),
        0 1px 0px rgba(0,0,0,0.1),
        0 8px 7px rgba(0,0,0,0.15);
        border: 1px solid rgba(0,0,0,0.1);
        margin-top: -60px;
        margin-bottom: 18px;
    }

    div.food_tile.active img
    {
        background-color: rgba(220,230,252,0.85);
    }

    .food_name
    {
        font-size: 15px;
        font-weight: 600;
        color: rgba(38, 29, 86, 1);
        margin-bottom: 12px;
    }

    .food_detail
    {
        font-size: 10px;
        color: rgba(38, 29, 86, 0.4);
        margin-bottom: 15px;
    }

    #food_meta
    {
        margin: 0;
        padding: 0;
    }

    #food_meta li
    {
        list-style: none;
        float: left;
        width: 50%;
        margin-bottom: 25px;
        font-size: 12px;
        font-weight: 500;
        color: rgba(38, 29, 86, 1);
    }

    #food_meta li span
    {
        font-size: 12px;
        font-weight: 500;
        color: rgba(38, 29, 86, 0.5);
    }

    .btn-default
    {
        border: 1px solid rgba(0,0,0,0.5);
        margin-bottom: 15px;
        padding: 12px 40px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 300;
        letter-spacing: 0.5px;
        background-color: transparent;
        color: rgba(0,0,0,0.8);
    }

    .active .btn-default
    {
        border: 1px solid rgba(0,0,0,0.04);
        background-color: #f88e7c;
        color: #fff;
        box-shadow: 0 5px 1px rgba(248,142,124,0.7);
    }
</style>

<div class="wrapper">
    @include('includes.sidebar')
    <div class="wrapper-inline">
        <!-- Header area start -->
        <header> <!-- extra class no-background -->
            <a class="go-back-link" href="javascript:history.back();"><i class="fa fa-arrow-left"></i></a>
            <h1 class="page-title">Menu </h1>
            <div class="navi-menu-button">
                <em></em>
                <em></em>
                <em></em>
            </div>
        </header>

        <div>
            <div class="section-head">
                <h4 class="title-main" style="margin-top: 25px">Menu de la semaine</h4>
            </div>
            @foreach($menu as $menuds)
            <section id="fda_product_tile" class="col-md-12">
                <div class="row fda_food_row">
                    <div class="col-md-9">
                        <div class="food_tile active">
                            <img src="https://i.postimg.cc/9Rnwcz9r/tsr.png" alt="" class="fda_product_img">
                            <span class="food_name"> {{$menuds->jour}} {{$menuds->date}}</span>
                            <span class="food_detail">{!! $menuds->menu !!}</span>
                        </div>
                    </div>
                 </div>
            </section>
            @endforeach
        </div>
     </div>
</div>
<!-- JQuery library file. requared all pages -->
<script src="{{asset('assets/front/js/jquery-3.2.1.min.js')}}"></script>

<!-- Template global script file. requared all pages -->
<script src="{{asset('assets/front/js/global.script.js')}}"></script>


</body>

</html>

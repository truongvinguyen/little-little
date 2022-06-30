<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale= text-capitalize1.0">
    <title>Sự kiện | Đầm Sen Park</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/eventStyle.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>

<body>
    <div class="body-bg">
        <div class="bg">
            <div class="header-top">
                <div class="container">
                    @include('inc.nav')
                </div>
            </div>
            <div class="firework">
                <div class="article-top">
                    <div class="row">
                        <div class="article-top-left col-sm-3">
                            <img class="article-top-1" src="/img/flag-left.svg" alt="">
                        </div>
                        <div class="col-sm-6 d-flex justify-content-center align-items-start">
                            <img class="article-top-2 pt-2" src="/img/Sự kiện nổi bật.svg" alt="">
                        </div>
                        <div class="col-sm-3">
                            <img class="article-top-3 pt-1" src="/img/flag-right.svg" alt="">
                        </div>
                    </div>
                </div>

                <div class="article-main" style="top: -70px;">
                    <a class="ctrl-btn pro-prev">
                        <img src="/img/previous btn.svg" alt="">
                    </a>
                    <a class="ctrl-btn pro-next">
                        <img src="/img/next btn.svg" alt="">
                    </a> 
                    <div class="container" style="width: 1300px;">
                        <div class="slider" id="slider">
                            <div class="slide" id="slide">
                             @foreach($data as $item)
                                <div class="col-sm-1 px-3">
                                    <div class="card" style="border-radius: 10px;width:305px;height: 430px;box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                                        <img src="/img/sukien.png" alt="" style="border-radius: 10px; width:100%; height: 212px;">
                                        <div class="card-body">
                                            <h4 class="card-title text-capitalize text-dark">{{$item->title}}</h4>
                                            <span class="card-text text-capitalize text-secondary">{{$item->address}}</span>
                                            <br>
                                            <img src="./img/calendar.png"/>
                                            <span class="text-dark">{{$item->start_date}} - {{$item->end_date}}</span>
                                            <h3 class="event-price">{{$item->price}} VNĐ</h3>
                                            <br>
                                            <a href="/show/{{$item->id}}" style="    position: absolute;
                                                bottom: 10px;" class="btn px-0"><img src="/img/xem chi tiết btn.png" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            </div>
                          
                        </div>
                    </div> 
                </div>   
            </div>
   <script src="./js/slide.js"></script>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/swiper.js"></script>

</body>

</html>
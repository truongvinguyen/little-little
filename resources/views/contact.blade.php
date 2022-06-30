<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liên hệ | Đầm Sen Park</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./css/contactSlyte.css">
</head>

<body>
    <div class="body-bg">
        <div class="bg" style="height: 790px;">
            <div class="header-top">
                <div class="container">
                   @include('inc.nav')
                </div>
            </div>
            <div class="pb-5">
                <div class="article-top">
                    <div class="container">
                        <div class="row">
                            <div class="article-top-left col-sm-3 mx-auto">
                                <img class="article-left-1" src="/img/Liên hệ.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="article-main m-4">
                    <div class="container">
                        <div class="row">
                                <div class="col-sm-7">
                                    <form action="/send-mail" method="get" enctype="multipart/form-data">
                                        <div class="article-middle-bg-1 px-3 py-2">
                                            <div class="article-middle-dashed-1 px-4 py-3">
                                                <p class="text-dark my-1 mx-3" style="text-align: justify;">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ac mollis justo. Etiam volutpat tellus quis risus volutpat, ut posuere ex facilisis.
                                                </p>
                                                <img class="article-middle-5" src="/img/Alex_AR_Lay_Do shadow 1.svg" alt="">
        
                                                <div class="form-row d-flex my-3 ">
                                                    <div class="form-group col-md-4" >
                                                        <input type="text"  value="{{old('name')}}" name="name" class="form-control" id="inputEmail4" placeholder="Tên">
                                                        @error('name')
                                                            <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-md-1" >
                                                       
                                                    </div>
                                                    <div class="form-group  col-md-7">
                                                        <input type="email" value="{{old('email')}}" name="email"  class="form-control" id="inputDate" placeholder="Mail">
                                                        @error('email')
                                                            <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-row d-flex my-3 ">
                                                    <div class="form-group col-md-4" >
                                                        <input type="tel" value="{{old('phone')}}" name="phone"  class="form-control" id="inputEmail4" placeholder="Số điện thoại">
                                                        @error('phone')
                                                            <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-md-1" >
                                                       
                                                    </div>
                                                    <div class="form-group  col-md-7">
                                                        <input type="text" value="{{old('address')}}" name="address"  min="1" class="form-control" id="inputDate" placeholder="Địa chỉ">
                                                        @error('address')
                                                            <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group  ">
                                                    <textarea style="height: 115px;" class="col-md-12 p-2 form-control" value="{{old('comment')}}" name="comment" class="form-control" name="" id="" rows="2"></textarea>
                                                    @error('comment')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="form-group d-flex justify-content-center align-item-center">
                                                <button type="submit" class="btn" >
                                                    <img src="/img/gui-lien-he.svg" style="width: 80%;" alt="">
                                                </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            <div class="col-sm-5">
                                <div class="article-middle-bg-2 px-3 py-2">
                                    <div class="article-middle-dashed-2 d-flex " style="padding: 26px;">
                                        <img class="article-middle-3" src="/img/adress 1.svg" alt="">
                                        <div class="card-text text-dark" style="padding: 0 10px;">
                                            <h4>Địa chỉ</h4>
                                            <p>86/33 Âu Cơ, F 9,Q Tân Bình, TP Hồ Chí Minh</p>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="article-middle-bg-2 px-3 py-2 my-3">
                                    <div class="article-middle-dashed-2 d-flex " style="padding: 26px;">
                                        <img class="article-middle-3" src="/img/mail-inbox-app 1.svg" alt="">
                                        <div class="card-text text-dark" style="padding: 0 10px;">
                                            <h4>Email</h4>
                                            <p>investigate@your-site.com</p>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="article-middle-bg-2 px-3 py-2">
                                    <div class="article-middle-dashed-2 d-flex " style="padding: 26px;">
                                        <img class="article-middle-3" src="/img/phone.svg" alt="">
                                        <div class="card-text text-dark" style="padding: 0 10px;">
                                            <h4>Điện thoại</h4>
                                            <p>+84 145 689 798</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="messenger" id="mess">
                        <div class="alert bg-light text-dark col-sm-3">
                            <span class="closebtn text-danger h2" style="float: right;cursor: pointer;" onclick="offMess()">&times;</span> 
                            <br>
                            <h5>Gửi liên hệ thành công</h5>
                            <p class="pb-4">Chúng tôi sẽ phản hồi bạn sớm nhất có thể.</p>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- <script src="js/mess.js"></script> -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/swiper.js"></script>
</body>

</html>
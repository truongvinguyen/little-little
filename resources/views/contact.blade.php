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
<style>
    /* From uiverse.io by @mrhyddenn */
/* From uiverse.io by @Ali-Tahmazi99 */
.loading {
  width: 60px;
  height: 60px;
  position: relative;
}

.d1 , .d2 {
  border: 5px solid #6c757d;
  border-radius: 50px;
}

.loading .d1 {
  width: 55px;
  height: 55px;
  position: absolute;
  border-left-color: transparent;
  animation: load161 1s linear infinite;
}

.loading .d2 {
  width: 40px;
  height: 40px;
  border-top-color: transparent;
  border-right-color: transparent;
  margin: 7.5px;
  animation: load2812 1.5s linear infinite;
}

@keyframes load161 {
  0% {
    transform: rotate(0);
  }

  100% {
    transform: rotate(360deg);
  }
}

@keyframes load2812 {
  0% {
    transform: rotate(0);
  }

  100% {
    transform: rotate(-360deg);
  }
}
</style>
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
                                    <form  method="get" id="" >
                                        <div class="article-middle-bg-1 px-3 py-2">
                                            <div class="article-middle-dashed-1 px-4 py-3">
                                                <p class="text-dark my-1 mx-3" style="text-align: justify;">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ac mollis justo. Etiam volutpat tellus quis risus volutpat, ut posuere ex facilisis.
                                                </p>
                                                <img class="article-middle-5" src="/img/Alex_AR_Lay_Do shadow 1.svg" alt="">
        
                                                <div class="form-row d-flex my-3 ">
                                                    <div class="form-group col-md-4" >
                                                        <input type="text"  value="{{old('name')}}" name="name" class="form-control" id="name" placeholder="Tên">
                                                        <span class="text-danger show-error"></span>
                                                    </div>
                                                    <div class="form-group col-md-1" >
                                                       
                                                    </div>
                                                    <div class="form-group  col-md-7">
                                                        <input type="email" value="{{old('email')}}" name="email"  class="form-control" id="email" placeholder="Mail">
                                                        <span class="text-danger show-error"></span>
                                                    </div>
                                                </div>
                                                <div class="form-row d-flex my-3 ">
                                                    <div class="form-group col-md-4" >
                                                        <input type="text" value="{{old('phone')}}" name="phone"  class="form-control" id="phone" placeholder="Số điện thoại">
                                                        <span class="text-danger show-error"></span>
                                                    </div>
                                                    <div class="form-group col-md-1" >
                                                       
                                                    </div>
                                                    <div class="form-group  col-md-7">
                                                        <input type="text" value="{{old('address')}}" name="address"  min="1" class="form-control" id="address" placeholder="Địa chỉ">
                                                        <span class="text-danger show-error"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group  ">
                                                    <textarea style="height: 115px;" class="col-md-12 p-2 form-control" value="{{old('comment')}}" name="" class="form-control" name="" id="feed" rows="2"></textarea>
                                                    <span class="text-danger show-error"></span>
                                                </div>
                                                <div class="form-group d-flex justify-content-center align-item-center">
                                                <button onclick="sendmail()" type="button" class="btn" data-toggle="modal" data-target="#exampleModalCenter">
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
 
      <!-- Modal -->
      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered" style="max-width:390px;">
          <div class="modal-content" style="height: 190px;border-radius: 38px;">
            <div class="modal-header d-flex justify-content-end align-item-center" style="border-bottom: 0;">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="background-color: white;
              color: orange;
              border: 0;">
                  X
              </button>
            </div>
            <div class="modal-body d-flex justify-content-center align-item-center" id="show">
                <div class="loading">
                    <div class="d1"></div>
                    <div class="d2"></div>
                </div>
            </div>
            
          </div>
        </div>
      </div>
    <!-- <script src="js/mess.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="./js/swiper.js"></script>
    <script>
      function sendmail(){
        var name = $("#name").val();
        var email = $("#email").val();
        var phone = $("#phone").val();
        var address = $("#address").val();
        var feed = $("#feed").val();
            $.ajax({
                url: `/send-mail`,
                type: 'POST',
                data:{
                    "_token":"{{ csrf_token() }}",
                    "name":name,
                    "email":email,
                    "phone":phone,
                    "address":address,
                    "feed":feed
                }
            }).done(function (response) {
                
                 $("#show").empty();
                 $("#show").html(response);
            
            });
    }
    </script>
</body>

</html>
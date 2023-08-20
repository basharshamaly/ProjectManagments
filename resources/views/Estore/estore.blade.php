<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css"></head>
    <style>
      body{
        background-color: #fff;
        box-sizing: border-box;
        margin: 10px;
        
        
    
      }
      #plus:hover{
          opacity: 0.5;
        
      }
    
    </style>
<body>
    <header class="p-3 mb-3 border-bottom " style="background-image: linear-gradient(to right, #5BBA60 , #20A9AD);">
        <div class="container">
          <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
              <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
            </a>

            <ul style="margin-left:150px; " class="  gap-5 nav d-flex col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li ><span style="color:white;">EN</span>  <a style="color:white;"  href="#"><i class="fas fa-globe"></i></a></li>

              <li><span style="color:white;">حسابي </span>  <a style="color:white;" href="#"><i class="far fa-user"></i></a></li>
              <li> <span style="color:white; background-color:blueviolet; padding:5px; border-radius:10px;margin-right:5px;">0 </span>  <a style="color:white;" href="#"><i class="fas fa-exchange-alt"></i></a></li>

              <li> <span style="color:white; background-color:orange; padding:5px; border-radius:10px;margin-right:5px;">0 </span> <a style="color:white;" href="#"><i class="fab fa-app-store"></i></a></li>
              <li> <span style="color:white; background-color:red; padding:5px; border-radius:10px;margin-right:5px;">0 </span><a  style="color:white;" href="#"><i class="far fa-heart"></i></a></li>


            </ul>

            <div class="dropdown text-end">
                <div  class="d-block  link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                    <p class="d-inline">كل التصنيفات</p>
                </div>
                <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1" style="">
                  <li><a class="dropdown-item" href="#">New project...</a></li>
                  <li><a class="dropdown-item" href="#">Settings</a></li>
                  <li><a class="dropdown-item" href="#">Profile</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Sign out</a></li>
                </ul>
              </div>
            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3  ">

              <input type="search" class="form-control" placeholder="ما الذي تبحث عنه..." aria-label="Search">
            </form>


            <img style="margin-left:40px;" width="100px" src="{{ asset('image/Estore-white.png') }}" class="img-fluid"  alt="not found">

          </div>
        </div>
      </header>

    <nav class="navbar navbar-expand-lg navbar-light bg-light " style="margin-top: -30px">
        <div class="container-fluid">

          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;margin-left: 600px">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#" style="font-family: 'SST Arabic';font-size:22px" >أجهزة لوحية وكمبيوتر</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#" style="font-family: 'SST Arabic';font-size:22px" >ساعات ذكية</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#" style="font-family: 'SST Arabic';font-size:22px" >الأكسسورات</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#" style="font-family: 'SST Arabic';font-size:22px" >تسلية</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#" style="font-family: 'SST Arabic';font-size:22px" >علامات تجارية</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"><span   style="font-family: 'SST Arabic';font-size:22px" >الموبايلات</span> 

                  
                </a>
              </li>

            </ul>

                <li class="nav-item dropdown d-flex">
                    <a class="nav-link dropdown-toggle" style="color: #26AAA4" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      جميع الفئات
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown" >
                      <li><a class="dropdown-item" href="#">كمبيوترات</a></li>
                      <li><a class="dropdown-item" href="#">جوالات</a></li>
                      <li><a class="dropdown-item" href="#">لابتوبات</a></li>

                      <li><a class="dropdown-item" href="#">اكسسورات</a></li>
                    </ul>
                  </li>
            </div>

        </div>
      </nav>
      <section >
  <div class="row d-flex justify-content-center " style=" width:100%;background-color:#F7F7FB; ">

      <div  class="card mb-3 col-6 gap-4 d-flex  align-items-center justify-content-center" style="background-color:#F7F7FB;" >

        <img height="180px" width="680px" style="border-radius: 30px;  transform:rotate(0deg);margin-left:10px;" src="{{ asset('image/offer banner 1.png') }}"  alt="...">
        <img height="180px" width="680px" style="border-radius: 30px;  transform:rotate(0deg);margin-left:10px;"  src="{{ asset('image/offer banner 1.png') }}"  alt="...">
     </div>


       <div  class="card mb-3 col-6 d-flex  align-items-end justify-content-center" style="background-color:#F7F7FB;">
     
        <img  src="{{ asset('image/offer banner 1.png') }}" style="border-radius: 30px; padding:10px;background-color:#F7F7FB" width="80%" class="img-fluid" alt="...">
        <div style="margin-top:-30px; z-index: 3; background-color:#F7F7FB; padding:10px; border-radius:50px">
<span  style="font-family: 'SST Arabic';font-size:22px;color: #5BBA60" >            أونلاين تشات
</span>            
        <i style="color: #5BBA60;margin-left:5px; font-size:22px;" class="fab fa-whatsapp"></i>
      </div>
      </div>
      </div>



      <div class="row d-flex " style="background-color:#F7F7FB;">
        <div class="caption d-flex   ">

          <li class="nav-item dropdown d-flex  justify-content-start">
            <a class="nav-link dropdown-toggle " style="color: black; margin-left:90px;font-family:SST Arabic Bold;font-size:22px; " href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              عرض الجميع
            </a>
            <ul class="dropdown-menu " aria-labelledby="navbarScrollingDropdown" >
              <li><a class="dropdown-item" href="#">كمبيوترات</a></li>
              <li><a class="dropdown-item" href="#">جوالات</a></li>
              <li><a class="dropdown-item" href="#">لابتوبات</a></li>

              <li><a class="dropdown-item" href="#">اكسسورات</a></li>
            </ul>
          </li>

          <h1 class="justify-content-center align-items-center" style="margin-left: 1000px;font-family:SST Arabic;font-size:42px;opacity:0.8">مقترحة لك</h1>


        </div>
      </div>

      <div class="row d-flex gap-2" style="margin:30px;padding:30px;width: 100%;background-color:#F7F7FB;">

        <div class="card col-2" style="width:16%;border:none;border-radius:10px;">
       <div class="d-flex gap-3" style="padding-top:10px; ">
        <i class="fas fa-heart" style="opacity:0.5;"></i>
        <i class="fas fa-arrow-right" style="opacity:0.5;"></i>
       </div>
          <div class="card-body" style="font-family:SST Arabic Bold;font-size:20px;">
           <img width="140px" src="{{ asset('image/image-6@3x.png') }}" alt="">
        <h4>Lorem ipsum dolor sit amet.</h4>
           <p class="card-text" style="opacity: 0.5">كن أول المقيمين للمنتج</p>
           <div style="background-image: linear-gradient(to right, #5BBA60 , #20A9AD) ;padding:10px 0px 10px 30px; color:white; border-radius:50px;" >
            <i class="fas fa-shopping-bag"></i>
              <a href="#" class="" style=" color:white;text-decoration:none;">أضف ألى السلة</a>

          </div>

          </div>
        </div>
        <div class="card col-2" style="width: 16%;border:none;border-radius:10px;">
             <div class="d-flex gap-3" style="padding-top:10px; ">
        <i class="fas fa-heart" style="opacity:0.5;"></i>
        <i class="fas fa-arrow-right" style=" opacity:0.5;"></i>
       </div>
          <div class="card-body" style="font-family:SST Arabic Bold;font-size:20px;">
            <img width="140px" src="{{ asset('image/image-6@3x.png') }}" alt="">
            <h4>Lorem ipsum dolor sit amet.</h4>
            <p class="card-text" style="opacity: 0.5">كن أول المقيمين للمنتج</p>
            <div style="background-image: linear-gradient(to right, #5BBA60 , #20A9AD) ;padding:10px 0px 10px 30px; color:white; border-radius:50px;" >
              <i class="fas fa-shopping-bag"></i>
                <a href="#" class="" style=" color:white;text-decoration:none;">أضف ألى السلة</a>

            </div>

          </div>
        </div>
        <div class="card col-2" style="width: 16%;border:none;border-radius:10px;">
             <div class="d-flex gap-3" style="padding-top:10px; ">
        <i class="fas fa-heart" style="opacity:0.5;"></i>
        <i class="fas fa-arrow-right" style=" opacity:0.5;"></i>
       </div>
          <div class="card-body" style="font-family:SST Arabic Bold;font-size:20px;">
           <img width="140px" src="{{ asset('image/image-6@3x.png') }}" alt="">
           <h4>Lorem ipsum dolor sit amet.</h4>
            <p class="card-text" style="opacity: 0.5">كن أول المقيمين للمنتج</p>
            <div style="background-image: linear-gradient(to right, #5BBA60 , #20A9AD) ;padding:10px 0px 10px 30px; color:white; border-radius:50px;" >
              <i class="fas fa-shopping-bag"></i>
                <a href="#" class="" style=" color:white;text-decoration:none;">أضف ألى السلة</a>

            </div>

          </div>
        </div>
        <div class="card col-2" style="width: 16%;border-radius:10px;border:solid 1px darkgray;">
             <div class="d-flex gap-3" style="padding-top:10px; ">
        <i class="fas fa-heart" style="opacity:0.5;"></i>
        <i class="fas fa-arrow-right" style="opacity:0.5;"></i>
       </div>
          <div class="card-body" style="font-family:SST Arabic Bold;font-size:20px;" >
            <div class="pp"  style="display:none;background-image: linear-gradient(to right, #5BBA60 , #20A9AD) ;padding:10px 0px 10px 30px; color:white; border-radius:50px; " >
                <i class="fas fa-shopping-bag"></i>
                  <a href="#" class="" style=" color:white;text-decoration:none;">أضف ألى السلة</a>
  
              </div>
           <img width="140px" src="{{ asset('image/image-6@3x.png') }}" id="plus" alt="">
           <h4>Lorem ipsum dolor sit amet.</h4>
            <p class="card-text" style="opacity: 0.5">كن أول المقيمين للمنتج</p>
            <div style="background-image: linear-gradient(to right, #5BBA60 , #20A9AD) ;padding:10px 0px 10px 30px; color:white; border-radius:50px;" >
              <i class="fas fa-shopping-bag"></i>
                <a href="#" class="" style=" color:white;text-decoration:none;">أضف ألى السلة</a>

            </div>

          </div>
        </div>
        <div class="card col-2" style="width: 16%;border:none;border-radius:10px;">
             <div class="d-flex gap-3" style="padding-top:10px; ">
        <i class="fas fa-heart" style="color: red; opacity:0.7;"></i>
        <i class="fas fa-arrow-right" style=" opacity:0.5;"></i>
       </div>
          <div class="card-body" style="font-family:SST Arabic Bold;font-size:20px;">
           <img width="140px" src="{{ asset('image/image-6@3x.png') }}" alt="">
           <h4>Lorem ipsum dolor sit amet.</h4>
            <p class="card-text" style="opacity: 0.5">كن أول المقيمين للمنتج</p>
            <div style="background-image: linear-gradient(to right, #5BBA60 , #20A9AD) ;padding:10px 0px 10px 30px; color:white; border-radius:50px;" >
              <i class="fas fa-shopping-bag"></i>
                <a href="#" class="" style=" color:white;text-decoration:none;">أضف ألى السلة</a>
            </div>

          </div>
        </div>
        <div class="card col-2 " style="width: 16%;border:none;border-radius:10px;">
             <div class="d-flex gap-3" style="padding-top:10px; ">
        <i class="fas fa-heart" style="color: red; opacity:0.7;"></i>
        <i class="fas fa-arrow-right" style="color:#5BBA60"></i>
       </div>
       <div style=" margin-left:110px;margin-top:-20px; ">
<span style="background-color:orange;color:white; padding:3px; border-radius:10px;">        يباع بسرعة
</span>
    </div>
          <div class="card-body"  style="font-family:SST Arabic Bold;font-size:20px;margin-top: -10px;">
           <img width="165px" style="opacity: 0.5" src="{{ asset('image/image-5@3x.png') }}" alt="">
            <h4>Lorem ipsum dolor sit amet.</h4>
       <p><span style="color: #26AAA4">خصم 15%</span>  <del>ILS 7000</del></p>
      <div class="d-flex justify-content-end "style="margin-top: -20px; " >
        <p>(250) <span style="color: orange;">4.8  <i class="fas fa-star"></i></span></p>
      </div>

       {{-- <div class="d-flex justify-content-end ">

      </div> --}}
            <p style="background-color: darkgrey;;padding:10px 0px 10px 10px;text-align:center; border-radius:50px;margin-top:-15px;">انتهى من المخزن</p>
          </div>

        </div>

      </div>

       <div class="row d-flex" style="background-color: #F7F7FB;margin:30px;padding:30px;"  >
        <div class="col-4 d-flex  gap-2"   >
          <img width="300px" style="border-radius: 30px;margin-top:20px;border:none" src="{{ asset('image/Img Frame@3x.png') }}" alt="">
        </div>
        <div class="col-4 d-flex  gap-2"  >
            <img width="300px" style="border-radius: 30px;margin-top:20px;border:none" src="{{ asset('image/image-4@3x.png') }}" alt="">
        </div>
        <div class="col-4 d-flex  gap-2"  >
            <img width="300px" style="border-radius: 30px;margin-top:20px;border:none" src="{{ asset('image/Img Frame@3x.png') }}" alt="">
        </div>
       </div>


       <div class="row d-flex gap-2" style="width: 100%;background-color:#FFD1E5; margin:30px;padding:30px">

        <div class="card col-2" style="width:16%;border:none;border-radius:10px;">
       <div class="d-flex gap-3" style="padding-top:10px; ">
        <i class="fas fa-heart" style="opacity: 0.5"></i>
        <i class="fas fa-arrow-right" style="opacity:0.5;"></i>
       </div>
          <div class="card-body" style="font-family:SST Arabic Bold;font-size:20px;">
           <img width="140px" src="{{ asset('image/image-6@3x.png') }}" alt="">
        <h4>Lorem ipsum dolor sit amet.</h4>
           <p class="card-text" style="opacity: 0.5">كن أول المقيمين للمنتج</p>
           <div style="background-image: linear-gradient(to right, #5BBA60 , #20A9AD) ;padding:10px 0px 10px 30px; color:white; border-radius:50px;" >
            <i class="fas fa-shopping-bag"></i>
              <a href="#" class="" style=" color:white;text-decoration:none;">أضف ألى السلة</a>

          </div>

          </div>
        </div>
        <div class="card col-2" style="width: 16%;border:none;border-radius:10px;">
             <div class="d-flex gap-3" style="padding-top:10px; ">
        <i class="fas fa-heart" style="opacity: 0.5" ></i>
        <i class="fas fa-arrow-right" style=" opacity:0.5;"></i>
       </div>
          <div class="card-body" style="font-family:SST Arabic Bold;font-size:20px;">
            <img width="140px" src="{{ asset('image/image-6@3x.png') }}" alt="">
            <h4>Lorem ipsum dolor sit amet.</h4>
            <p class="card-text" style="opacity: 0.5">كن أول المقيمين للمنتج</p>
            <div style="background-image: linear-gradient(to right, #5BBA60 , #20A9AD) ;padding:10px 0px 10px 30px; color:white; border-radius:50px;" >
              <i class="fas fa-shopping-bag"></i>
                <a href="#" class="" style=" color:white;text-decoration:none;">أضف ألى السلة</a>

            </div>

          </div>
        </div>
        <div class="card col-2" style="width: 16%;border:none;border-radius:10px;">
             <div class="d-flex gap-3" style="padding-top:10px; ">
        <i class="fas fa-heart" style="opacity: 0.5"></i>
        <i class="fas fa-arrow-right" style=" opacity:0.5;"></i>
       </div>
          <div class="card-body" style="font-family:SST Arabic Bold;font-size:20px;">
           <img width="140px" src="{{ asset('image/image-6@3x.png') }}" alt="">
           <h4>Lorem ipsum dolor sit amet.</h4>
            <p class="card-text" style="opacity: 0.5">كن أول المقيمين للمنتج</p>
            <div style="background-image: linear-gradient(to right, #5BBA60 , #20A9AD) ;padding:10px 0px 10px 30px; color:white; border-radius:50px;" >
              <i class="fas fa-shopping-bag"></i>
                <a href="#" class="" style=" color:white;text-decoration:none;">أضف ألى السلة</a>

            </div>

          </div>
        </div>
        <div class="card col-2" style="width: 16%;border:none;border-radius:10px;border:solid 1px darkgray;">
             <div class="d-flex gap-3" style="padding-top:10px; ">
        <i class="fas fa-heart" style="opacity: 0.5"></i>
        <i class="fas fa-arrow-right" style="opacity:0.5;"></i>
       </div>
          <div class="card-body" style="font-family:SST Arabic Bold;font-size:20px;">
           <img width="140px" src="{{ asset('image/image-6@3x.png') }}" id="plus" alt="">
           <h4>Lorem ipsum dolor sit amet.</h4>
            <p class="card-text" style="opacity: 0.5">كن أول المقيمين للمنتج</p>
            <div style="background-image: linear-gradient(to right, #5BBA60 , #20A9AD) ;padding:10px 0px 10px 30px; color:white; border-radius:50px;" >
              <i class="fas fa-shopping-bag"></i>
                <a href="#" class="" style=" color:white;text-decoration:none;">أضف ألى السلة</a>

            </div>

          </div>
        </div>
        <div class="card col-2" style="width: 30%;background-color: #FFD1E5;border:none">

          <div class="card-body "  style="font-family:SST Arabic Bold;font-size:20px;width: 100%;">
           <img width="100%" height="300px" src="{{ asset('image/offer banner 1.png') }}" alt="">

            <div style="background-image: linear-gradient(to right, #5BBA60 , #20A9AD); padding:10px 0px 10px 30px;text-align: center;margin-top:10px; border-radius:50px;" >

                <a href="#" class="" style=" color:white;text-decoration:none; ">  <span>عرض جميع العروض</span></a>
            </div>

          </div>
        </div>
        </div>



        <div class="row d-flex gap-4" style="background-color:#F7F7FB;margin:30px;padding:30px ">

            <div class="card col-2 d-flex " style="width:18%;border-radius:10px;border:1px solid darkgray;">

              <div class="card-body "  style="font-family:SST Arabic Bold;font-size:20px;padding: 30px" >
              <img src="{{ asset('image/feature_original.png') }}" width="25%" class="img-fluid"  style="border-radius: 30px; margin-top:45px;margin-left:50px;" alt="">
              <h1 style="margin-left:30px; ">منتجات أصلية</h1>

                <a class="nav-link dropdown-toggle " style="color: #26AAA4; margin-left:15px;"  href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
تفاصيل أكثر                </a>
                <li class="nav-item dropdown d-flex  justify-content-start">
                <ul class="dropdown-menu " aria-labelledby="navbarScrollingDropdown" >
                  <li><a class="dropdown-item" href="#">كمبيوترات</a></li>
                  <li><a class="dropdown-item" href="#">جوالات</a></li>
                  <li><a class="dropdown-item" href="#">لابتوبات</a></li>

                  <li><a class="dropdown-item" href="#">اكسسورات</a></li>
                </ul>
              </li>
              </div>

              </div>

            <div class="card col-2 d-flex" style="width:18%;border-radius:10px;border:1px solid darkgray;">

                <div class="card-body" style="font-family:SST Arabic Bold;font-size:20px;padding: 30px" >
                <img src="{{ asset('image/feature_ship.png') }}" width="30%" class="img-fluid" style="border-radius: 30px;margin-top:50px; margin-left:50px;" alt="">
                <h1 style="margin-left:10px;"> توصيل مجاني</h1>
                <li class="nav-item dropdown d-flex  justify-content-start">
                    <a class="nav-link dropdown-toggle " style="color: #26AAA4; margin-left:15px;"  href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        تفاصيل أكثر
                      </a>
                      <li class="nav-item dropdown d-flex  justify-content-start">
                  <ul class="dropdown-menu " aria-labelledby="navbarScrollingDropdown" >
                    <li><a class="dropdown-item" href="#">كمبيوترات</a></li>
                    <li><a class="dropdown-item" href="#">جوالات</a></li>
                    <li><a class="dropdown-item" href="#">لابتوبات</a></li>

                    <li><a class="dropdown-item" href="#">اكسسورات</a></li>
                  </ul>
                </li>
                </div>

                </div>

              <div class="card col-2 d-flex" style="width:18%;border-radius:10px;border:1px solid darkgray;">

                <div class="card-body" style="font-family:SST Arabic Bold;font-size:20px;padding: 30px">
                <img src="{{ asset('image/feature_grantee.png') }}" width="20%" class="img-fluid" style="border-radius: 30px; margin-top:40px;margin-left:50px;" alt="">
                <h1 style="margin-left:10px;">منتجات أصلية</h1>
                <li class="nav-item dropdown d-flex  justify-content-start">
                    <a class="nav-link dropdown-toggle " style="color: #26AAA4; margin-left:15px;"  href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        تفاصيل أكثر
                      </a>
                      <li class="nav-item dropdown d-flex  justify-content-start">
                  <ul class="dropdown-menu " aria-labelledby="navbarScrollingDropdown" >
                    <li><a class="dropdown-item" href="#">كمبيوترات</a></li>
                    <li><a class="dropdown-item" href="#">جوالات</a></li>
                    <li><a class="dropdown-item" href="#">لابتوبات</a></li>

                    <li><a class="dropdown-item" href="#">اكسسورات</a></li>
                  </ul>
                </li>
                </div>

                </div>

              <div class="card col-2 d-flex" style="width:18%;border-radius:10px;border:1px solid darkgray;">

                <div class="card-body" style="font-family:SST Arabic Bold;font-size:20px;padding: 30px">
                <img src="{{ asset('image/feature_safe.png') }}" width="20%" class="img-fluid" style="border-radius: 30px; margin-top:30px;margin-left:50px;" alt="">
                <h1 style="margin-left:10px;">منتجات أصلية</h1>
                <li class="nav-item dropdown d-flex  justify-content-start">
                    <a class="nav-link dropdown-toggle " style="color: #26AAA4; margin-left:15px;"  href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        تفاصيل أكثر
                      </a>
                      <li class="nav-item dropdown d-flex  justify-content-start">
                  <ul class="dropdown-menu " aria-labelledby="navbarScrollingDropdown" >
                    <li><a class="dropdown-item" href="#">كمبيوترات</a></li>
                    <li><a class="dropdown-item" href="#">جوالات</a></li>
                    <li><a class="dropdown-item" href="#">لابتوبات</a></li>

                    <li><a class="dropdown-item" href="#">اكسسورات</a></li>
                  </ul>
                </li>
                </div>


            <div class="d-flex " >
                    <div style=""  >
                    <h1 style="margin-left:330px; margin-top:-300px;font-family:SST Arabic Bold;font-size:40px">متجر جوال الالكتروني</h1>
                        <p style="margin-left:260px;  margin-top:10px;opacity:0.5; display:inline-block;">
                           منصة تسويق ألكتروني رائدة محلية<br> توفر مجموعة متنوعة من المنتجات <br>للتسوق بسهولة وأمان                            </p>
                               </div>

                      {{-- <div >

                </div> --}}
                </div>
            </div>





        </div>
        <div class="row d-flex " style="background-color:#F7F7FB; margin-left:30px">
            <div class="caption d-flex   ">

              <li class="nav-item dropdown d-flex  justify-content-start">
                <a class="nav-link dropdown-toggle " style="color: black; margin-left:90px;font-family:SST Arabic;font-size:25px" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  عرض الجميع
                </a>
                <ul class="dropdown-menu " aria-labelledby="navbarScrollingDropdown" >
                  <li><a class="dropdown-item" href="#">كمبيوترات</a></li>
                  <li><a class="dropdown-item" href="#">جوالات</a></li>
                  <li><a class="dropdown-item" href="#">لابتوبات</a></li>

                  <li><a class="dropdown-item" href="#">اكسسورات</a></li>
                </ul>
              </li>

              <h1 class="justify-content-end align-items-end flex-wrap-no-wrap "  style="margin-left:830px;font-family:SST Arabic;font-size:25px;margin-top:10px;"> الأكثر مبيعا هذا الأسبوع</h1>


            </div>
          </div>


           <div class="row d-flex gap-2" style="margin:30px;padding:30px;width: 100%;background-color:#F7F7FB">

    <div class="card col-2" style="width:16%;border-radius:10px;border:none;font-family:SST Arabic Bold;font-size:20px">
   <div class="d-flex gap-3" style="padding-top:10px; ">
    <i class="fas fa-heart" style="opacity: 0.7"></i>
    <i class="fas fa-arrow-right" style="opacity:0.5;"></i>
   </div>
      <div class="card-body">
       <img width="140px" src="{{ asset('image/image-6@3x.png') }}" alt="">
    <h4>Lorem ipsum dolor sit amet.</h4>
       <p class="card-text" style="opacity: 0.5">كن أول المقيمين للمنتج</p>
       <div style="background-image: linear-gradient(to right, #5BBA60 , #20A9AD);padding:10px 0px 10px 30px; color:white; border-radius:50px;" >
        <i class="fas fa-shopping-bag"></i>
          <a href="#" class="" style=" color:white;text-decoration:none;">أضف ألى السلة</a>

      </div>

      </div>
    </div>
    <div class="card col-2" style="width: 16%;border-radius:10px;border:none;font-family:SST Arabic Bold;font-size:20px">
         <div class="d-flex gap-3" style="padding-top:10px; ">
    <i class="fas fa-heart" style="opacity: 0.7" ></i>
    <i class="fas fa-arrow-right" style=" opacity:0.5;"></i>
   </div>
      <div class="card-body">
        <img width="140px" src="{{ asset('image/image-6@3x.png') }}" alt="">
        <h4>Lorem ipsum dolor sit amet.</h4>
        <p class="card-text" style="opacity: 0.5">كن أول المقيمين للمنتج</p>
        <div style="background-image: linear-gradient(to right, #5BBA60 , #20A9AD) ;padding:10px 0px 10px 30px; color:white; border-radius:50px;" >
          <i class="fas fa-shopping-bag"></i>
            <a href="#" class="" style=" color:white;text-decoration:none;">أضف ألى السلة</a>

        </div>

      </div>
    </div>
    <div class="card col-2" style="width: 16%;border-radius:10px;border:none;font-family:SST Arabic;font-size:20px">
         <div class="d-flex gap-3" style="padding-top:10px; ">
    <i class="fas fa-heart" style="opacity: 0.7"></i>
    <i class="fas fa-arrow-right" style=" opacity:0.5;"></i>
   </div>
      <div class="card-body">
       <img width="140px" src="{{ asset('image/image-6@3x.png') }}" alt="">
       <h4>Lorem ipsum dolor sit amet.</h4>
        <p class="card-text" style="opacity: 0.5">كن أول المقيمين للمنتج</p>
        <div style="background-image: linear-gradient(to right, #5BBA60 , #20A9AD) ;padding:10px 0px 10px 30px; color:white; border-radius:50px;" >
          <i class="fas fa-shopping-bag"></i>
            <a href="#" class="" style=" color:white;text-decoration:none;">أضف ألى السلة</a>

        </div>

      </div>
    </div>
    <div class="card col-2" style="width: 16%;border-radius:10px;border:solid 1px darkgray;font-family:SST Arabic;font-size:20px">
         <div class="d-flex gap-3" style="padding-top:10px; ">
    <i class="fas fa-heart" style="opacity: 0.7"></i>
    <i class="fas fa-arrow-right" style="opacity:0.5;"></i>
   </div>
      <div class="card-body">
       <img width="140px" src="{{ asset('image/image-6@3x.png') }}" id="plus" alt="">
       <h4>Lorem ipsum dolor sit amet.</h4>
        <p class="card-text" style="opacity: 0.5">كن أول المقيمين للمنتج</p>
        <div style="background-image: linear-gradient(to right, #5BBA60 , #20A9AD) ;padding:10px 0px 10px 30px; color:white; border-radius:50px;" >
          <i class="fas fa-shopping-bag"></i>
            <a href="#" class="" style=" color:white;text-decoration:none;">أضف ألى السلة</a>

        </div>

      </div>
    </div>
    <div class="card col-2" style="width: 16%;border-radius:10px;border:none;font-family:SST Arabic;font-size:20px">
         <div class="d-flex gap-3" style="padding-top:10px; ">
    <i class="fas fa-heart" style="color: red; opacity:0.5;"></i>
    <i class="fas fa-arrow-right" style=" opacity:0.5;"></i>
   </div>
      <div class="card-body">
       <img width="140px" src="{{ asset('image/image-6@3x.png') }}" alt="">
       <h4>Lorem ipsum dolor sit amet.</h4>
        <p class="card-text" style="opacity: 0.5">كن أول المقيمين للمنتج</p>
        <div style="background-image: linear-gradient(to right, #5BBA60 , #20A9AD) ;padding:10px 0px 10px 30px; color:white; border-radius:50px;" >
          <i class="fas fa-shopping-bag"></i>
            <a href="#" class="" style=" color:white;text-decoration:none;">أضف ألى السلة</a>
        </div>

      </div>
    </div>
    <div class="card col-2 " style="width: 16%;border-radius:10px;border:none;font-family:SST Arabic;font-size:20px">
        <div class="d-flex gap-3" style="padding-top:10px; ">
   <i class="fas fa-heart" style="color: red; opacity:0.7;"></i>
   <i class="fas fa-arrow-right" style="color:#5BBA60"></i>
  </div>
  <div style=" margin-left:110px;margin-top:-20px; ">
<span style="background-color:orange;color:white; padding:3px; border-radius:10px;">        يباع بسرعة
</span>
</div>
     <div class="card-body" style="margin-top: -10px;">
      <img width="165px" style="opacity: 0.5" src="{{ asset('image/image-5@3x.png') }}" alt="">
       <h4>Lorem ipsum dolor sit amet.</h4>
  <p><span style="color: #26AAA4">خصم 15%</span>  <del>ILS 7000</del></p>
 <div class="d-flex justify-content-end "style="margin-top: -20px; " >
   <p>(250) <span style="color: orange;">4.8  <i class="fas fa-star"></i></span></p>
 </div>

  {{-- <div class="d-flex justify-content-end ">

 </div> --}}
       <p style="background-color: darkgrey;;padding:10px 0px 10px 10px;text-align:center; border-radius:50px;margin-top:-15px;">انتهى من المخزن</p>
     </div>

   </div>

  </div>



  <div class="row d-flex gap-5" style="background-color: #F7F7FB;margin:30px; min-height:50vh;"  >
    <div class="col-4 d-flex align-items-center justify-content-start  " style=""    >

        <p style="position: absolute;margin-left:350px;z-index:10; color:white;font-family:SST Arabic Bold;font-size:40px;font-weight:bold">بالتل جيجا فايبر</p>

        <p style="position: absolute;margin-left:420px;z-index:10; color:white; margin-top:100px;font-family:SST Arabic Bold;font-size:40px;">اطلب الان</p>

      <img   height="150px"  style="border-radius: 30px;  transform:rotate(0deg);margin-left:10px;"  src="{{ asset('image/paltel_fiber.png') }}" alt="">
    </div>
    <div class="col-4 d-flex align-items-center justify-content-end  "  style="margin-left:300px;"  >
      <p style="position: absolute;z-index:10; color:white;font-family:SST Arabic Bold;font-size:40px;font-weight:bold; padding:20px;">  شريحتك لعندك</p>

      <p style="position: absolute;z-index:10; color:white; margin-top:100px;  padding:35px;font-family:SST Arabic Bold;font-size:40px;">اطلب الان</p>

      <img   height="150px" style="border-radius: 30px; transform:rotate(0deg);margin-left:10px;" src="{{ asset('image/request_sim.png') }}" alt="">
    </div>

   </div>



   <div class="row d-flex " style="background-color:#F7F7FB; margin-left:30px">
    <div class="caption d-flex   ">

      <li class="nav-item dropdown d-flex  justify-content-start">
        <a class="nav-link dropdown-toggle " style="color: #26AAA4; margin-left:90px;font-family:SST Arabic Bold;font-size:30px;" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          عرض الجميع
        </a>
        <ul class="dropdown-menu " aria-labelledby="navbarScrollingDropdown" >
          <li><a class="dropdown-item" href="#">كمبيوترات</a></li>
          <li><a class="dropdown-item" href="#">جوالات</a></li>
          <li><a class="dropdown-item" href="#">لابتوبات</a></li>

          <li><a class="dropdown-item" href="#">اكسسورات</a></li>
        </ul>
      </li>

      <h1 class="justify-content-end align-items-end flex-wrap-no-wrap "  style="margin-left:930px;font-family:SST Arabic Bold;font-size:40px;"> الأكثر   مشاهدة</h1>


    </div>
  </div>


   <div class="row d-flex gap-2" style="margin:30px;padding:30px;width: 100%;background-color:#F7F7FB">

<div class="card col-2" style="width:16%;border-radius:10px;border:none;font-family:SST Arabic;font-size:20px">
<div class="d-flex gap-3" style="padding-top:10px; ">
<i class="fas fa-heart" style="opacity: 0.7"></i>
<i class="fas fa-arrow-right" style="opacity:0.5;"></i>
</div>
<div class="card-body">
<img width="140px" src="{{ asset('image/image-6@3x.png') }}" alt="">
<h4>Lorem ipsum dolor sit amet.</h4>
<p class="card-text" style="opacity: 0.5">كن أول المقيمين للمنتج</p>
<div style="background-image: linear-gradient(to right, #5BBA60 , #20A9AD) ;padding:10px 0px 10px 30px; color:white; border-radius:50px;" >
<i class="fas fa-shopping-bag"></i>
  <a href="#" class="" style=" color:white;text-decoration:none;">أضف ألى السلة</a>

</div>

</div>
</div>
<div class="card col-2" style="width: 16%;border-radius:10px;border:none;font-family:SST Arabic;font-size:20px">
 <div class="d-flex gap-3" style="padding-top:10px; ">
<i class="fas fa-heart"   style="opacity: 0.7"></i>
<i class="fas fa-arrow-right" style=" opacity:0.5;"></i>
</div>
<div class="card-body">
<img width="140px" src="{{ asset('image/image-6@3x.png') }}" alt="">
<h4>Lorem ipsum dolor sit amet.</h4>
<p class="card-text" style="opacity: 0.5">كن أول المقيمين للمنتج</p>
<div style="background-image: linear-gradient(to right, #5BBA60 , #20A9AD) ;padding:10px 0px 10px 30px; color:white; border-radius:50px;" >
  <i class="fas fa-shopping-bag"></i>
    <a href="#" class="" style=" color:white;text-decoration:none;">أضف ألى السلة</a>

</div>

</div>
</div>
<div class="card col-2" style="width: 16%;border-radius:10px;border:none;font-family:SST Arabic;font-size:20px">
 <div class="d-flex gap-3" style="padding-top:10px; ">
<i class="fas fa-heart"  style="opacity: 0.7"></i>
<i class="fas fa-arrow-right" style=" opacity:0.5;"></i>
</div>
<div class="card-body">
<img width="140px" src="{{ asset('image/image-6@3x.png') }}" alt="">
<h4>Lorem ipsum dolor sit amet.</h4>
<p class="card-text" style="opacity: 0.5">كن أول المقيمين للمنتج</p>
<div style="background-image: linear-gradient(to right, #5BBA60 , #20A9AD) ;padding:10px 0px 10px 30px; color:white; border-radius:50px;" >
  <i class="fas fa-shopping-bag"></i>
    <a href="#" class="" style=" color:white;text-decoration:none;">أضف ألى السلة</a>

</div>

</div>
</div>
<div class="card col-2" style="width: 16%;border-radius:10px;border:solid 1px darkgray;font-family:SST Arabic;font-size:20px">
 <div class="d-flex gap-3" style="padding-top:10px; ">
<i class="fas fa-heart"  style="opacity: 0.7"></i>
<i class="fas fa-arrow-right" style="opacity:0.5;"></i>
</div>
<div class="card-body">
<img width="140px" src="{{ asset('image/image-6@3x.png') }}" id="plus" alt="">
<h4>Lorem ipsum dolor sit amet.</h4>
<p class="card-text" style="opacity: 0.5">كن أول المقيمين للمنتج</p>
<div style="background-image: linear-gradient(to right, #5BBA60 , #20A9AD) ;padding:10px 0px 10px 30px; color:white; border-radius:50px;" >
  <i class="fas fa-shopping-bag"></i>
    <a href="#" class="" style=" color:white;text-decoration:none;">أضف ألى السلة</a>

</div>

</div>
</div>
<div class="card col-2" style="width: 16%;border-radius:10px;border:none;font-family:SST Arabic;font-size:20px">
 <div class="d-flex gap-3" style="padding-top:10px; ">
<i class="fas fa-heart" style="color: red; opacity:0.5;"></i>
<i class="fas fa-arrow-right" style=" opacity:0.5;"></i>
</div>
<div class="card-body">
<img width="140px" src="{{ asset('image/image-6@3x.png') }}" alt="">
<h4>Lorem ipsum dolor sit amet.</h4>
<p class="card-text" style="opacity: 0.5">كن أول المقيمين للمنتج</p>
<div style="background-image: linear-gradient(to right, #5BBA60 , #20A9AD) ;padding:10px 0px 10px 30px; color:white; border-radius:50px;" >
  <i class="fas fa-shopping-bag"></i>
    <a href="#" class="" style=" color:white;text-decoration:none;">أضف ألى السلة</a>
</div>

</div>
</div>
<div class="card col-2 " style="width: 16%;border-radius:10px;border:none;font-family:SST Arabic;font-size:20px">
    <div class="d-flex gap-3" style="padding-top:10px; ">
<i class="fas fa-heart" style="color: red; opacity:0.7;"></i>
<i class="fas fa-arrow-right" style="color:#5BBA60"></i>
</div>
<div style=" margin-left:110px;margin-top:-20px; ">
<span style="background-color:orange;color:white; padding:3px; border-radius:10px;">        يباع بسرعة
</span>
</div>
 <div class="card-body" style="margin-top: -10px;">
  <img width="165px" style="opacity: 0.5" src="{{ asset('image/image-5@3x.png') }}" alt="">
   <h4>Lorem ipsum dolor sit amet.</h4>
<p><span style="color: #26AAA4">خصم 15%</span>  <del>ILS 7000</del></p>
<div class="d-flex justify-content-end "style="margin-top: -20px; " >
<p>(250) <span style="color: orange;">4.8  <i class="fas fa-star"></i></span></p>
</div>

{{-- <div class="d-flex justify-content-end ">

</div> --}}
   <p style="background-color: darkgrey;;padding:10px 0px 10px 10px;text-align:center; border-radius:50px;margin-top:-15px;">انتهى من المخزن</p>
 </div>

</div>


</div>

<div class="row d-flex " style="background-color:#F7F7FB; margin-left:30px">
  <div class="caption d-flex   ">

    <li class="nav-item dropdown d-flex  justify-content-start">
      <a class="nav-link dropdown-toggle " style="color: black; margin-left:90px;font-family:SST Arabic;font-size:20px;font-weight:bold" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
         تصفح أفضل العروض
      </a>
      <ul class="dropdown-menu " aria-labelledby="navbarScrollingDropdown" >
        <li><a class="dropdown-item" href="#">كمبيوترات</a></li>
        <li><a class="dropdown-item" href="#">جوالات</a></li>
        <li><a class="dropdown-item" href="#">لابتوبات</a></li>

        <li><a class="dropdown-item" href="#">اكسسورات</a></li>
      </ul>
    </li>
    <h1 class="justify-content-end align-items-end flex-wrap-no-wrap "  style="margin-left:850px;font-family:SST Arabic;font-size:40px">    ماذا يقول عملاؤنا</h1>
    <span style="color: red;margin-top:5px; padding:5px;margin-left:10px"> <i class="fas fa-heart"></i></span>


  </div>
</div>

<div class="row d-flex" style="background-color: white;margin:30px;padding:30px;margin-left:100px;"  >
  <div class="card mb-3 col-4" style="max-width: 440px; border-radius:30px; margin:10px;border:1px solid darkgray;padding:15px;font-family:SST Arabic;font-size:20px ">
    <div class="row g-0">
      <div class="col-md-4" style="">
        <img src="{{ asset('image/image-4@3x.png') }}" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body ">
         <div class="d-flex gap-2">
          <h4>Anonymas</h4>
          <img class="img-circle img-bordered-sm" width="30px" src="{{ asset('image/feature_grantee.png') }}" alt="">

         </div>
         <p style="margin-left: 30px"><span style="color: darkgrey;font-size:13.5px">  <i class="fas fa-star"></i></span>
          <span style="color: darkgrey; font-size:13.5px;">  <i class="fas fa-star"></i></span>
          <span style="color: orange; font-size:13.5px">  <i class="fas fa-star"></i></span>
          <span style="color: orange; font-size:13.5px">  <i class="fas fa-star"></i></span>
          <span style="color: orange; font-size:13.5px">  <i class="fas fa-star"></i></span>

        </p>

          <p class="card-text" style="text-align: right;">منتجات مميزة وجميلة وتوصيل سريع  وسري ومميز وحلو كتير  منتجات مميزة وجميلة</p>
          <p class="card-text" style="text-align: right;"><small class="text-muted">24 April,2022  <span style="color: green"><i class="far fa-calendar-alt"></i></span></small></p>
        </div>
      </div>
    </div>
  </div>
  <div class="card mb-3 col-4" style="max-width: 400px; border-radius:30px; margin:10px;border:1px solid darkgray;padding:15px; font-family:SST Arabic;font-size:20px ">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="{{ asset('image/image-4@3x.png') }}" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body ">
         <div class="d-flex gap-2">
          <h4>Anonymas</h4>
          <img class="img-circle img-bordered-sm" width="30px" src="{{ asset('image/feature_grantee.png') }}" alt="">

         </div>
         <p style="margin-left: 30px"><span style="color: darkgrey;font-size:13.5px">  <i class="fas fa-star"></i></span>
          <span style="color: darkgrey; font-size:13.5px;">  <i class="fas fa-star"></i></span>
          <span style="color: orange; font-size:13.5px">  <i class="fas fa-star"></i></span>
          <span style="color: orange; font-size:13.5px">  <i class="fas fa-star"></i></span>
          <span style="color: orange; font-size:13.5px">  <i class="fas fa-star"></i></span>

        </p>

          <p class="card-text" style="text-align: right;">منتجات مميزة وجميلة وتوصيل سريع  وسري ومميز وحلو كتير  منتجات مميزة وجميلة</p>
          <p class="card-text" style="text-align: right;"><small class="text-muted">24 April,2022  <span style="color: green"><i class="far fa-calendar-alt"></i></span></small></p>
        </div>
      </div>
    </div>
  </div>
  <div class="card mb-3 col-4 " style="max-width: 400px; border-radius:30px; margin:10px;border:1px solid darkgray;padding:15px; font-family:SST Arabic;font-size:20px  ">
    <div class="row g-0 ">
      <div class="col-md-4 ">
        <img src="{{ asset('image/image-4@3x.png') }}" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body ">
         <div class="d-flex gap-2">
          <h4>Anonymas</h4>
          <img class="img-circle img-bordered-sm" width="30px" src="{{ asset('image/feature_grantee.png') }}" alt="">

         </div>
         <p style="margin-left: 30px"><span style="color: darkgrey;font-size:13.5px">  <i class="fas fa-star"></i></span>
          <span style="color: darkgrey; font-size:13.5px;">  <i class="fas fa-star"></i></span>
          <span style="color: orange; font-size:13.5px">  <i class="fas fa-star"></i></span>
          <span style="color: orange; font-size:13.5px">  <i class="fas fa-star"></i></span>
          <span style="color: orange; font-size:13.5px">  <i class="fas fa-star"></i></span>

        </p>

          <p class="card-text" style="text-align: right;">منتجات مميزة وجميلة وتوصيل سريع  وسري ومميز وحلو كتير  منتجات مميزة وجميلة</p>
          <p class="card-text" style="text-align: right;"><small class="text-muted">24 April,2022  <span style="color: green"><i class="far fa-calendar-alt"></i></span></small></p>
        </div>
      </div>
    </div>
  </div>
 </div>




</div>








    </section>



    <!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted" style="font-family:SST Arabic;font-size:20px">
  <!-- Section: Social media -->
  {{-- <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section> --}}
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="" style="padding: 20px">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->

          <p>
            <a href="#!" style="text-decoration: none; color:black" class="text-reset">حقوق المستهلكين</a>
          </p>
          <p>
            <a href="#!" style="text-decoration: none; color:black" class="text-reset">سياسة الخصوصية</a>
          </p>
          <p>
            <a href="#!" style="text-decoration: none; color:black" class="text-reset">شروط البيع</a>
          </p>
          <p>
            <a href="#!" style="text-decoration: none; color:black" class="text-reset">شروط الاستخدام</a>
          </p>
          <p>
            <a href="#!" style="text-decoration: none; color:black" class="text-reset"> بيع معنا</a>
          </p>
          <p>
            <a href="#!" style="text-decoration: none; color:black" class="text-reset"> سياسة الضمان</a>
          </p>
        </div>

        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h4 class="text-uppercase fw-bold mb-4">
           متواجدين دائما لمساعدتك
          </h4>
          <h6 style="text-align: center;margin-left:-30px">
           تواصل معنا خلال الايميل
          </h6>
          <div style="border: 1px black solid;border-radius:10px; padding:10px;text-align: center; margin-left:-10px;width:250px">
            <span style=" font-size:40px"><i class="far fa-envelope"></i></span>
            <h5>Care@estore.ps</h5>
          </div>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->

        <!-- Grid column -->

        <!-- Grid column -->
        {{-- <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset">Pricing</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Settings</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Orders</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
        </div> --}}
        <!-- Grid column -->

        <!-- Grid column -->

        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h4 class="text-uppercase fw-bold mb-4" style="color: black;font-weight:bold">
           خليك متابع مع كل جديد
          </h4>
          <h6 style="text-align: center;margin-left:-30px">
           اشترك في النشرة الاخبارية وماتفوت اي عرض
          </h6>
          <div style=" padding:10px;text-align: center; margin-left:-10px;width:250px">
            <input type="email" placeholder="أدخل البريد الألكتروني" style="border-radius:50px;padding:10px;text-align:center;width:300px;border:none">

          </div>
         <button style="background-image: linear-gradient(to right, #5BBA60 , #20A9AD);border-radius:50px;padding:10px;text-align:center;width:300px;border:none"> <a href="#" class="" style=" color:white;text-decoration:none;">  أشترك الأن</a></button>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="p-4" style="background-image: linear-gradient(to right, #5BBA60 , #20A9AD);">

  <img width="150px" src="{{ asset('image/poweredBy.png') }}" style="margin-left:30px" alt="">
<span style="margin-left: 1000px;color:white;">  © 2021 Copyright:</span>
  </div>

  <!-- Copyright -->
</footer>
<!-- Footer -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/fontawesome-iconpicker/3.2.0/js/fontawesome-iconpicker.min.js" integrity="sha512-7dlzSK4Ulfm85ypS8/ya0xLf3NpXiML3s6HTLu4qDq7WiJWtLLyrXb9putdP3/1umwTmzIvhuu9EW7gHYSVtCQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.min.js" integrity="sha512-fHY2UiQlipUq0dEabSM4s+phmn+bcxSYzXP4vAXItBvBHU7zAM/mkhCZjtBEIJexhOMzZbgFlPLuErlJF2b+0g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>

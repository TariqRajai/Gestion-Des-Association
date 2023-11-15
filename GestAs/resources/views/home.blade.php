<!DOCTYPE html>
<html lang="en" dir="rtl">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <link rel="icon" href="../images/house-user-solid.svg">
      <!-- site metas -->
      <title>الصفحة الرئيسية </title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->

      <link rel="stylesheet" href="../css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="../css/stylez.css">
      <!-- responsive-->
      <link rel="stylesheet" href="../css/responsive.css">

      <!-- awesome fontfamily -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
      <style>
         .imageC{
            position: relative;
            bottom: -50px;
            left: -50px;
         }
         p{
            font-weight: 800;
         }
         h1{
        color: #efefef;
        font-size: 5vw;

    }
    span{
      position: relative;
      left: 210px;
    }


      </style>
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="../images/loading.gif" alt="" /></div>
      </div>
      <!-- end loader -->

      <div class="top_main">

      <!-- end header -->
      <!-- start slider section -->
      <div class="right_main">
        <div  class=" banner_main">
                  <div id="myCarousel" class="carousel slide" data-ride="carousel">

                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="container">
                              <div class="carousel-caption relative">
                                <div class="row" >
                                   <div class="col-lg-5">
                                     <div class="bluid" >
                                       <h1><span>تطبيق</span><br>إدارة الجمعيات </h1>
                                      <p dir="rtl">تطبيق إدارة الجمعيات هو تطبيق يهدف إلى تسهيل وتحسين إدارة الجمعيات والمنظمات غير الربحية. يتضمن التطبيق مجموعة من الأدوات والميزات التي تساعد على تنظيم وتنسيق أنشطة الجمعية وإدارة العضويات</p>
                                      <a class="read_more" href="{{ url('/register') }}">انشاء حساب جديد</a>
                                      <a class="read_more" href="{{ url('/accueil') }}">تسجيل الدخول</a>
                                     </div>
                                   </div>
                                   <div class="col-lg-7">
                                      <div class="pan_img">
                                         <figure class="imageC"><img src="../images/it-management.png" alt="#"/></figure>
                                      </div>
                                    
                                   </div>
                                </div>
                              </div>
                           </div>
                        </div>


                     </div>

                  </div>
        </div>
      <!-- end slider section -->
       <!-- services -->

      <!-- contact -->

       </div>
     </div>
      <!-- end footer -->
      <!-- Javascript files-->

      <script src="../js/jquery.min.js"></script>
      <script src="../js/bootstrap.bundle.js"></script>

      <script src="../js/custom.js"></script>
   </body>
</html>

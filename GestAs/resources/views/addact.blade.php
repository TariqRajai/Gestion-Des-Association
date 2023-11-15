<!DOCTYPE html dir="rtl">
<html >
<head>
  <meta charset="UTF-8">
  <title>LogIn Form</title>
  <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Arimo' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Hind:300' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>


<link rel="stylesheet" href="../css/style.css">


</head>

<body>
  <div id="login-button">
  <img src="http://dqcgrsy5v35b9.cloudfront.net/cruiseplanner/assets/img/icons/login-w-icon.png">
</div>
<div id="container">
  <h1 dir="rtl">تسجيل الحساب</h1>
  <span class="close-btn">
    <img src="https://cdn4.iconfinder.com/data/icons/miu/22/circle_close_delete_-128.png"></img>
  </span>
  @if(Session::has('success'))
  <div class="alert alert-success" role="alert">
      {{ Session::get('success') }}
  </div>
@endif
  <form action="{{ route('store') }}" method="POST">

    {{ csrf_field() }}

    <label dir="rtl"  class="ligne">الاسم العائلي</label>
    <input  dir="rtl" type="text" name="NomUser" placeholder="الاسم العائلي" required>

    <label dir="rtl"  class="ligne">الاسم الشخصي</label>
    <input dir="rtl" type="text" name="PrenomUser" placeholder="الاسم الشخصي" required>
    <p class="tel" dir="rtl">رقم الهاتف</p>
    <input  dir="rtl" type="text" name="NumTelUser" placeholder=" رقم الهاتف" required>
    <p class="tel" dir="rtl"> كلمة السر</p>
    <input dir="rtl" type="password" name="Password" placeholder="كلمة السر" required>
    <input class="lien" type="submit" name="submit" value="تسجيل الدخول" required>
</form>
</div>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/gsap/1.16.1/TweenMax.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="../js/index.js"></script>

</body>
</html>

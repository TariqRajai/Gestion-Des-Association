<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="icon" href="{{URL::asset('assets/images/user-lock-solid.svg')}}">
	<title>تسجيل الحساب </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../css/utila.css">
	<link rel="stylesheet" type="text/css" href="../css/maina.css">
<!--===============================================================================================-->
<style>
	a {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
  margin-bottom: 20px;

}

a:hover {
  background-color: #ddd;
  color: black;
}

.previous {
  background-color: #f1f1f1;
  color: black;
}


</style>
</head>
<body>

	<div class="limiter">
		<div class="container-login100" >
			<div class="wrap-login100">

    @if(session('error'))
      <div class="alert alert-danger" role="alert">
        {{ session('error') }}
      </div>
    @endif
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-178" action="{{ route('store') }}" method="POST" dir="rtl">
          {{ csrf_field() }}
					<span class="login100-form-title">
						تسجيل الحساب
					</span>

					<div class="wrap-input100 -input m-b-16" >
						<input class="input100" type="text" name="email" placeholder="ادخل الايميل" required>
						<span class="focus-input100"></span>
					</div>


					<div class="wrap-input100 -input">
						<input class="input100" type="password" name="Password" placeholder="كلمة السر" required>
						<span class="focus-input100"></span>
					</div>

					<div class="text-right p-t-13 p-b-23">

					</div>

					<div class="container-login100-form-btn">
						<input class="login100-form-btn" type="submit" name="submit" value="  تسجيل الدخول" required>


					</div>
					<div class="text-right p-t-13 p-b-23">

					</div>
					<div class="container-login100-form-btn">

						<a href="{{route('home')}}" class="previous" dir="ltr">&laquo; الرجوع للصفحة الرئيسية </a>
					</div>

				</form>
			</div>
		</div>
	</div>


<!--===============================================================================================-->
	<script src="../js/jquery-3.3.1.min.js"></script>
<!--===============================================================================================-->

<!--===============================================================================================-->
	<script src="../js/popper.js"></script>
	<script src="../js/bootstrap.min.js"></script>

	<script src="../js/main17.js"></script>

</body>
</html>

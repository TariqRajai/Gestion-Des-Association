<!doctype html>
<html lang="en">
  <head>
	<link rel="icon" href="../images/file-solid.svg">
  	<title>طبع بطاقة جمعية</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="../css/stylefiche.css">
<style>
    .previous {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
  position: relative;
  right: -550px;
  top: 50px;

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
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">طبع بطاقة جمعية</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table table-striped" dir="rtl">
						  <thead>
						    <tr>
						      <th>الرقم الوطني للجمعية</th>
						      <th>اسم الجمعية</th>
						      <th>طبع بطاقة الجمعية</th>
						    </tr>
						  </thead>
						  <tbody>
							@foreach($assoc as $value)
						    <tr>
						      <th scope="row">{{ $value->NumeroNational }}</th>
						      <td scope="row">{{ $value->Nom }}</td>
						      <td scope="row"><a href="{{ url('assoc/word-export/' . $value->NumeroNational) }}" class="btn btn-success">طبع بطاقة الجمعية</a></td>
						    </tr>
							@endforeach
						  </tbody>
						</table>
					</div>
				</div>
			</div>
		</div><a href=" {{ route('hh') }}"class="previous" dir="ltr">&laquo; الرجوع للصفحة الرئيسية </a>
	</section>


	<script src="../js/jquery.min.js"></script>
	<script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
  <script src="../js/mainfiche.js"></script>
	</body>
</html>


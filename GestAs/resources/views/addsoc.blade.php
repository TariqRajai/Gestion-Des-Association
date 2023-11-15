<!DOCTYPE html>
<html>
<head>
  <link rel="icon" href="../images/plus-solid.svg">
<title>اضافة جمعية</title>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
<link href="../css/nucleo-icons.css" rel="stylesheet" />
<link href="../css/nucleo-svg.css" rel="stylesheet" />
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
<link id="pagestyle" href="../css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
<script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

<style>
html, body {
min-height: 100%;
}
body, div, form, input, select, p {
padding: 0;
margin: 0;
outline: none;
font-family: Roboto, Arial, sans-serif;
font-size: 14px;
color: #666;
}
h1 {
margin: 0;
font-weight: 400;
}
h3 {
margin: 12px 0;
color: #8ebf42;
}
.main-block {
display: flex;
justify-content: center;
align-items: center;
background: #fff;
}
form {
width: 100%;
padding: 20px;
}
fieldset {
border: none;
width: 100%;
border-top: 1px solid #8ebf42;
}
.account-details, .personal-details {
display: flex;
flex-wrap: wrap;
justify-content: space-between;
}
.account-details >div, .personal-details >div >div {
display: flex;
align-items: center;
margin-bottom: 10px;
}
.account-details >div, .personal-details >div, input, label {
width: 100%;
}
label {
padding: 0 5px;
text-align: right;
vertical-align: middle;
}
input {
padding: 5px;
vertical-align: middle;
}
.checkbox {
margin-bottom: 10px;
}
select, .children, .gender, .bdate-block {
width: calc(100% + 26px);
padding: 5px 0;
}
select {
background: transparent;
}
.gender input {
width: auto;
}
.gender label {
padding: 0 5px 0 0;
}
.bdate-block {
display: flex;
justify-content: space-between;
}
.birthdate select.day {
width: 35px;
}
.birthdate select.mounth {
width: calc(100% - 94px);
}
.birthdate input {
width: 38px;
vertical-align: unset;
}
.checkbox input, .children input {
width: auto;
margin: -2px 10px 0 0;
}
.checkbox a {
color: #8ebf42;
}
.checkbox a:hover {
color: #82b534;
}
button {
    right: 17%;
padding: 10px 0;
margin: 10px auto;
border-radius: 5px;
border: none;
background: #8ebf42;
font-size: 14px;
font-weight: 600;
color: #fff;
}
button:hover {
background: #82b534;
}
@media (min-width: 568px) {
.account-details >div, .personal-details >div {
width: 50%;
}
label {
width: 40%;
}
input {
width: 60%;
}
select, .children, .gender, .bdate-block {
width: calc(60% + 16px);
}
}
</style>
</head>
<body>

<div class="main-block" dir="rtl">
<form method="POST" action="{{ route('save')}}" enctype="multipart/form-data">  <div class="pull-right">
    <a class="btn btn-primary" href="{{ route('hh') }}"> الرجوع للصفحة الرئيسية</a>
</div>
    {{ csrf_field() }}
<h1>اضافة جمعية</h1>
<fieldset>
<legend>
<h3>معلومات عن الجمعية  </h3>
</legend>
<div class="personal-details">
    <div>
<div><label>الرقم الوطني للجمعية</label><div class="input-group input-group-outline my-3">
    <label class="form-label">الرقم الوطني للجمعية</label>
    <input type="text" class="form-control" name="NumeroNational" required>
  </div></div>
<div><label>اسم الجمعية</label><div class="input-group input-group-outline my-3">
    <label class="form-label">اسم الجمعية</label>
    <input type="text" class="form-control" name="Nom" required></div>
  </div>

  <div><label>تاريخ تاسيس الجمعية</label><div class="input-group input-group-static my-3">
    <label>تاريخ تاسيس الجمعية</label>
    <input type="datetime-local" class="form-control" name="DateCreation" required>
  </div></div>
  <div><label>  مجال النشاط</label><div class="input-group input-group-outline my-3">
    <label class="form-label"> مجال النشاط</label>
    <input type="text" class="form-control" name="TypeActivite" required>
  </div></div>
<div><label>اسم الرئيس</label><div class="input-group input-group-outline my-3">
    <label class="form-label">اسم الرئيس</label>
    <input type="text" class="form-control" name="NomPresident" required>
  </div></div>
<div><label>الهاتف</label><div class="input-group input-group-outline my-3">
    <label class="form-label">الهاتف</label>
    <input type="text" class="form-control" name="NumTel" required>
  </div></div>
<div><label>الرقم الوطني للرئيس</label><div class="input-group input-group-outline my-3">
    <label class="form-label">الرقم الوطني للرئيس</label>
    <input type="text" class="form-control" name="Cin" required>
  </div></div>


  <div><label>مدة تجديد المكتب</label><div class="input-group input-group-static my-3">
    <label>مدة تجديد المكتب</label>
    <input type="datetime-local" class="form-control" name="DureeOffice" required>
  </div></div>
  <div><label>الجمع العام</label><div class="input-group input-group-outline my-3">
    <input type="file" class="form-control" name="document" required>

  </div></div>
  <div><label>مكتب التأسيس</label><div class="input-group input-group-outline my-3">
    <input type="file" class="form-control" name="documentRenouvelementOffice" required>
  </div></div>

</div></div>
</fieldset>
<fieldset>
<legend>
<h3>مكان و مقر الجمعية</h3>
</legend>
<div class="personal-details">
<div>
<div><label>المقاطعة او القيادة</label><div class="input-group input-group-outline my-3">
    <label class="form-label"> </label>
    <select name="Quartier" id="">
      @foreach($quartiers as $quartier)
                                <option value="{{ $quartier->idQuartier }}">{{ $quartier->NomQuartier }}</option>
                            @endforeach
    </select>
  </div></div>
<div><label> مقر الجمعية</label><div class="input-group input-group-outline my-3">
    <label class="form-label">مقر الجمعية</label>
    <input type="text" class="form-control" name="LieuAssoc" required>
  </div></div>
</div>
</div>
</fieldset>

<button type="submit" class="btn btn-secondary btn-lg">اضافة جمعية</button>
</form>
</div>
<script type="text/javascript">
  var SITEURL = "{{URL('/')}}";
  $(function() {
      $(document).ready(function()
      {
          var bar = $('.bar');
          var percent = $('.percent');
          $('form').ajaxForm({
              beforeSend: function() {
                  var percentVal = '0%';
                  bar.width(percentVal)
                  percent.html(percentVal);
              },
              uploadProgress: function(event, position, total, percentComplete) {
                  var percentVal = percentComplete + '%';
                  bar.width(percentVal)
                  percent.html(percentVal);
              },
              complete: function(xhr) {
                  alert('File Uploaded Successfully');
                  window.location.href = SITEURL +"/"+"ajax-file-upload-progress-bar";
              }
          });
      });
  });
</script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/perfect-scrollbar.min.js"></script>
<script src="../js/smooth-scrollbar.min.js"></script>
<script src="../js/chartjs.min.js"></script>
  <script src="../js/Chart.extension.js"></script>
  <script src="../js/material-dashboard.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="../images/plus-solid.svg">
    <title>اضافة نشاط</title>
      <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->

  <link href="../css/nucleo-icons.css" rel="stylesheet" />

  <link href="../css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="fonts/icomoon/style.css">


  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">

  <!-- Style -->
  <link rel="stylesheet" href="../css/style2.css">
    <style>
        input{
            display: block;
        }
        body {
  padding: 1rem;
  color: #797e86;
}

h1 {
  color: #18191b;
  margin-bottom: 2rem;
}

section {
  display: flex;
  flex-flow: row wrap;
}

section > div {
  flex: 1;
  padding: 0.5rem;
}

input[type="radio"] {
  display: none;
}
input[type="radio"]:not(:disabled) ~ label {
  cursor: pointer;
}
input[type="radio"]:disabled ~ label {
  color: #bcc2bf;
  border-color: #bcc2bf;
  box-shadow: none;
}

.lab {
  display: block;
  background: white;
  border: 1px solid #20df80;
  border-radius: 2px;
  padding: 1rem;
  margin-bottom: 1rem;
  text-align: center;
  box-shadow: 0px 3px 10px -2px rgba(161, 170, 166, 0.5);
  position: relative;
}

input[type="radio"]:checked + label {
  background: #20df80;
  color: white;
}
input[type="radio"]:checked + label::after {
  color: #3d3f43;
  font-family: FontAwesome;
  border: 2px solid #1dc973;
  content: "\f00c";
  font-size: 24px;
  position: absolute;
  top: -25px;
  left: 50%;
  transform: translateX(-50%);
  height: 50px;
  width: 50px;
  line-height: 50px;
  text-align: center;
  border-radius: 50%;
  background: white;
  box-shadow: 0px 2px 5px -2px rgba(0, 0, 0, 0.25);
}



@media only screen and (max-width: 700px) {
  section {
    flex-direction: column;
  }
}
h2{
  padding-top: 7px;
}
/****** IGNORE ******/





/****** CODE ******/

.sub{
  margin-top: 40px;
}
.file-upload{display:block;text-align:center;font-family: Helvetica, Arial, sans-serif;font-size: 12px;}
.file-upload .file-select{display:block;border: 2px solid #dce4ec;color: #34495e;cursor:pointer;height:40px;line-height:40px;text-align:left;background:#FFFFFF;overflow:hidden;position:relative;}
.file-upload .file-select .file-select-button{background:#dce4ec;padding:0 10px;display:inline-block;height:40px;line-height:40px;}
.file-upload .file-select .file-select-name{line-height:40px;display:inline-block;padding:0 10px;}
.file-upload .file-select:hover{border-color:#34495e;transition:all .2s ease-in-out;-moz-transition:all .2s ease-in-out;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;}
.file-upload .file-select:hover .file-select-button{background:#34495e;color:#FFFFFF;transition:all .2s ease-in-out;-moz-transition:all .2s ease-in-out;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;}
.file-upload.active .file-select{border-color:#3fa46a;transition:all .2s ease-in-out;-moz-transition:all .2s ease-in-out;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;}
.file-upload.active .file-select .file-select-button{background:#3fa46a;color:#FFFFFF;transition:all .2s ease-in-out;-moz-transition:all .2s ease-in-out;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;}
.file-upload .file-select input[type=file]{z-index:100;cursor:pointer;position:absolute;height:100%;width:100%;top:0;left:0;opacity:0;filter:alpha(opacity=0);}
.file-upload .file-select.file-select-disabled{opacity:0.65;}
.file-upload .file-select.file-select-disabled:hover{cursor:default;display:block;border: 2px solid #dce4ec;color: #34495e;cursor:pointer;height:40px;line-height:40px;margin-top:5px;text-align:left;background:#FFFFFF;overflow:hidden;position:relative;}
.file-upload .file-select.file-select-disabled:hover .file-select-button{background:#dce4ec;color:#666666;padding:0 10px;display:inline-block;height:40px;line-height:40px;}
.file-upload .file-select.file-select-disabled:hover .file-select-name{line-height:40px;display:inline-block;padding:0 10px;}
a {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
  position: relative;

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

<section>

  <div class="choice">
    <input type="radio" id="control_02" name="formSelection" value="form1">
    <label for="control_02" class="lab">
      <h2>اضافة نشاط</h2>
    </label>
  </div>
  <div>
    <input type="radio" id="control_03" name="formSelection" value="form2">
    <label for="control_03" class="lab">
      <h2>التجديد</h2>
    </label>
  </div>
  </section>

  <div class="row align-items-stretch justify-content-center no-gutters">
    <div class="col-md-7">
      @if(session('success'))
      <div class="alert alert-success" role="alert">
        {{ session('success') }}
      </div>
      @endif
        <form class="mb-5"  method="POST" id="form1" action="{{ route('ajouter')}}"  name="contactForm" dir="rtl" enctype="multipart/form-data">
          {{ csrf_field() }}

               <div class="form h-100 contact-wrap p-5">
          <div class="row">
            <div class="col-md-6 form-floating mb-2">
              <input type="text" class="form-control" name="NomActivite" id="floatingInput" placeholder="اسم النشاط" required>
              <label for="floatingInput">اسم النشاط </label>
            </div>
            <div class="col-md-6 form-floating mb-2">
              <input type="text" class="form-control" name="TypeActivite" id="floatingInput" placeholder="نوع النشاط" required>
              <label for="floatingInput">نوع النشاط </label>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 form-floating mb-2">
              <input type="date" class="form-control" name="DateActivite" id="floatingInput" placeholder="تاريخ النشاط" required>
              <label for="floatingInput">تاريخ النشاط </label>
            </div>
          </div>

          <div class="row mb-5">
            <div class="col-md-6 form-floating mb-2">
              <input type="text" class="form-control" name="LieuActivite" id="floatingInput" placeholder="مكان النشاط" required>
              <label for="floatingInput"> مكان النشاط</label>
            </div>
          </div>

          <div class="file-upload" dir="ltr">
            <div class="file-select">
              <div class="file-select-button" id="fileName">Choose File</div>
              <div class="file-select-name" id="noFile">No file chosen...</div>
              <input type="file" name="photo" id="chooseFile" required>
            </div>
          </div>
          <div class="sub">
          <div class="row justify-content-center">
            <div class="col-md-5 form-group text-center">
              <input type="submit" value="اضافة نشاط جديد " class="btn btn-block btn-primary rounded-0 py-2 px-4">
              <a href=" {{ route('hh') }}"class="previous" dir="ltr">&laquo; الرجوع للصفحة الرئيسية </a>
            </div>
            </div>
          </div>
          </div>
        </form>


  </div>

  <div class="row align-items-stretch justify-content-center no-gutters">
    <div class="col-md-7">


        <form class="mb-5" action="" method="post" id="form2" name="contactForm" dir="rtl">

               <div class="form h-100 contact-wrap p-5">
                <div class="col-md-6 form-floating mb-2">
                  <input type="text" class="form-control" id="floatingInput" name="NumeroNational" placeholder="اسم الرئيسس" required>
                  <label for="floatingInput">اسم الرئيس </label>
                </div>
          <div class="row">
            <div class="col-md-6 form-floating mb-2">
              <input type="text" class="form-control" id="floatingInput" name="NomPresident" placeholder="اسم الرئيسس" required>
              <label for="floatingInput">اسم الرئيس </label>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 form-floating mb-2">
              <input type="date" class="form-control" id="floatingInput" name="DureeOffice" placeholder="تاريخ التجديد" required>
              <label for="floatingInput">تاريخ التجديد </label>
            </div>
          </div>

          <div class="row mb-5">

          </div>

          <div class="file-upload" dir="ltr">
            <div class="file-select">
              <div class="file-select-button" id="fileName">Choose File</div>
              <div class="file-select-name" id="noFile">No file chosen...</div>
              <input type="file" name="chooseFile" id="chooseFile" required>
            </div>
          </div>
          <div class="sub">
          <div class="row justify-content-center">
            <div class="col-md-5 form-group text-center">
              <input type="submit" value="  تجديد " class="btn btn-block btn-primary rounded-0 py-2 px-4">
              <a href="{{route('hh')}}" class="previous" dir="ltr">&laquo; الرجوع للصفحة الرئيسية </a>
            </div>
            </div>
          </div>
          </div>
        </form>


  </div>
<script src="../js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>

<script src="../js/jquery.validate.min.js"></script>
<script src="../js/main.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/perfect-scrollbar.min.js"></script>
<script src="../js/smooth-scrollbar.min.js"></script>
<script src="../js/chartjs.min.js"></script>
<script>
    // Get references to the forms and radio buttons
const form1 = document.getElementById('form1');
const form2 = document.getElementById('form2');
const radioButtons = document.getElementsByName('formSelection');

// Initially hide form2
form2.style.display = 'none';

// Add change event listener to the radio buttons
for (let i = 0; i < radioButtons.length; i++) {
  radioButtons[i].addEventListener('change', function() {
    if (this.value === 'form1') {
      // Show form1 and hide form2
      form1.style.display = 'block';
      form2.style.display = 'none';
    } else {
      // Show form2 and hide form1
      form1.style.display = 'none';
      form2.style.display = 'block';
    }
  });
}
$('#chooseFile').bind('change', function () {
  var filename = $("#chooseFile").val();
  if (/^\s*$/.test(filename)) {
    $(".file-upload").removeClass('active');
    $("#noFile").text("No file chosen...");
  }
  else {
    $(".file-upload").addClass('active');
    $("#noFile").text(filename.replace("C:\\fakepath\\", ""));
  }
});

</script>
</body>
</html>

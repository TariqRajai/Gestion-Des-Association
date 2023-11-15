<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{URL::asset('assets/images/chart-simple-solid.svg')}}">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    

    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="{{URL::asset('assets/css/material-dashboard.css')}}?v=3.1.0" rel="stylesheet" />
    <!-- Nepcha Analytics (nepcha.com) -->
    <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
    <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <style>
        body{
            background-color: rgb(151, 209, 133)
        }
    </style>
</head>
<body>
    <h1 style="position:relative; left: -90px; top:30px; ">معلومات عن الجمعية </h1>
    <div class="card" style="position:relative; left: -50px;top:40px; width:1100px;">
        <div class="table-responsive">
          <table id="example" class="table table-striped table-bordered" style="width:100%" dir="rtl">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">الرقم الوطني للجمعية </th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">اسم الجمعية </th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">مقر الجمعية </th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">نوع النشاط </th>
              </tr>
            </thead>
            <tbody>
                @foreach($activites as $activite)
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                    
                    <div class="d-flex flex-column justify-content-center">
                        {{$activite->NumeroNational}}
                    </div>
                  </div>
                </td>
                <td>
                    {{$activite->Nom}}
                </td>
                <td class="align-middle text-center text-sm">
                    {{$activite->LieuAssoc}}
                </td>
                <td class="align-middle text-center">
                    {{$activite->TypeActivite}}
                </td>

              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>



      

      <script src="{{URL::asset('assets/js/popper.min.js')}}"></script>
      <script src="{{URL::asset('assets/js/bootstrap.min.js')}}"></script>
      <script src="{{URL::asset('assets/js/perfect-scrollbar.min.js')}}"></script>
      <script src="{{URL::asset('assets/js/smooth-scrollbar.min.js')}}"></script>
      <script src="{{URL::asset('assets/js/chartjs.min.js')}}"></script>
      <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
      <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
      <script>
        $(document).ready(function () {
    $('#example').DataTable();
});
      </script>
      
</body>
</html>
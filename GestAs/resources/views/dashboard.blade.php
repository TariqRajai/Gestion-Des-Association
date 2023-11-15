<!--
=========================================================
* Material Dashboard 2 - v3.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2023 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" href="../images/user-solid.svg">

  <title> الصفحة الرئيسية </title>
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
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['الشهر', 'عدد الانشطة في الشهر'],
          @php
              foreach($result as $order) {
                  echo "['".$order->mnt."', ".$order->nbr."],";
              }
            @endphp
        ]);

        var options = {
          title: 'عدد الأنشطة في كل شهر',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['table']});
      google.charts.setOnLoadCallback(drawTable);

      function drawTable() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'اسم النشاط');
        data.addColumn('string', '	نوع النشاط');
        data.addColumn('string', 'مكان النشاط');
        data.addColumn('string', 'تاريخ النشاط ');
        data.addRows([
          @php
              foreach($activites as $act) {
                  echo "['".$act->NomActivite."',' ".$act->TypeActivite."',' ".$act->LieuActivite."',' ".$act->DateActivite."'],";
              }
            @endphp
        ]);

        var table = new google.visualization.Table(document.getElementById('table_div'));

        table.draw(data, {showRowNumber: true, width: '100%', height: '100%'});
      }
    </script>



    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["اسم الجمعية", "عدد الانشطة", { role: "style" } ],

        @php
              foreach($assocs as $ord) {
                  echo "['".$ord->NomAssoc."', ".$ord->Nombre.",'#b87333'],";
              }
            @endphp
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "الجمعيات و عدد انشطتها",
        width: 450,
        height: 500,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>
<style>
  .flex-container{
    display: flex;
  }
  /* Style the dropdown button */
    .dropdown {
      position: relative;
      display: inline-block;
      top: 8px;
      right: 13px;
    }

    /* Style the button text */
    .dropdown button {
      background-color: #4CAF50;
      color: white;
      padding: 8px;
      font-size: 14px;
      border: none;
      cursor: pointer;
    }

    /* Style the dropdown content (hidden by default) */
    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 100px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }

    /* Style the dropdown links */
    .dropdown-content a {
      color: black;
      padding: 8px 16px;
      text-decoration: none;
      display: block;
    }

    /* Change color of dropdown links on hover */
    .dropdown-content a:hover {
      background-color: #f1f1f1;
    }

    /* Show the dropdown menu on hover */
    .dropdown:hover .dropdown-content {
      display: block;
    }
  </style>
</head>








<body class="g-sidenav-show rtl bg-gray-200">

  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-end me-3 rotate-caret  bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute start-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>


        <span style="position:relative;right:50px;top:30px;font-size: 19px;" class="me-1 font-weight-bold text-white">مرحبا @foreach($utilisateurs as $client) {{$client->NomUser}}  @endforeach</span>


    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse px-0 w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " href="{{route('assoc')}}">
            <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
              <i class="material-icons-round opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text me-1">اضافة جمعية </span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="{{route('activite')}}">
            <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
              <i class="material-icons-round opacity-10">table_view</i>
            </div>
            <span class="nav-link-text me-1">اضافة نشاط</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="{{route('statistique')}}">
            <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
              <i class="material-icons-round opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text me-1"> جميع الجمعيات</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="{{route('fiche')}}">
            <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
              <i class="material-icons-round opacity-10">view_in_ar</i>
            </div>
            <span class="nav-link-text me-1">بطاقة جمعية </span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link " href="#navbarBlur">
            <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">notifications</i>
            </div>
            <span class="nav-link-text me-1">إشعارات</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="{{route('hh')}}">
            <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
              <i class="material-icons-round opacity-10">person</i>
            </div>
            <span class="nav-link-text me-1">حساب تعريفي</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="{{route('logout')}}">
            <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
              <i class="material-icons-round opacity-10">login</i>
            </div>
            <span class="nav-link-text me-1">تسجيل الخروج </span>
          </a>
        </li>

      </ul>
    </div>

  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg overflow-x-hidden">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">

        <div class="collapse navbar-collapse mt-sm-0 mt-2 px-0" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group input-group-outline">
              <label class="form-label">أكتب هنا...</label>
              <input type="text" class="form-control">
            </div>
          </div>


          <ul class="navbar-nav me-auto ms-0 justify-content-end">

<li class="nav-item px-3">
             <div class="dropdown" >
              <i class="material-icons cursor-pointer">
              notifications
            </i>
            <span class="position-absolute top-5 start-100 translate-middle badge rounded-pill bg-danger border border-white small py-1 px-2">
                  <span class="small">1</span>
                  <span class="visually-hidden">unread notifications</span>
                </span>
  <div class="dropdown-content">@foreach($norti as $nortification)
						    <tr>
                  <div class="d-flex align-items-center py-1">
						      <div class="ms-2">
                        <h6 class="text-sm font-weight-normal mb-0">
                          <option value="">تمت اضافة جمعية جديدة  <mark>{{ $nortification->Nom }}</mark></option>
                        </h6>
                      </div>
                  </div>

						    </tr>
							@endforeach


  </div>
</div>
            </li>

            <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li>


            <li class="nav-item d-flex align-items-center">
              <a href="{{route('logout')}}" class="nav-link text-body font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">تسجيل الخروج </span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-lg-3 col-sm-6 mb-lg-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <a href="{{route('fiche')}}"><div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                <i class="fa fa-file-text" aria-hidden="true"></i>
              </div></a>
              <div class="text-start pt-1">
                <p class="text-sm mb-0 text-capitalize">طبع بطاقة جمعية </p>

              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0 text-start"><span class="text-success text-sm font-weight-bolder ms-1"></span>طبع على شكل word  </p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 mb-lg-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <a href="{{route('statistique')}}"><div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">leaderboard</i>
              </div></a>
              <div class="text-start pt-1">
                <p class="text-sm mb-0 text-capitalize">جميع  الجمعيات </p>

              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0 text-start"><span class="text-success text-sm font-weight-bolder ms-1"> </span>اضهار جميع الجمعيات  </p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 mb-lg-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <a href="{{route('assoc')}}"><div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                <i class="fa fa-plus-square" aria-hidden="true"></i>
              </div></a>
              <div class="text-start pt-1">
                <p class="text-sm mb-0 text-capitalize">اضافة جمعية </p>

              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0 text-start"><span class="text-success text-sm font-weight-bolder ms-1"></span> لاضافة جمعية و معلوماتها </p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <a href="{{route('activite')}}"><div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                <i class="fa fa-plus-square-o" aria-hidden="true"></i>
              </div></a>
              <div class="text-start pt-1">
                <p class="text-sm mb-0 text-capitalize">اضافة نشاط</p>

              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3" dir="rtl">
              <p class="mb-0 text-start" ><span class="text-success text-sm font-weight-bolder ms-1"> </span> لاضافة نشاط او تجديد </p>
            </div>
          </div>
        </div>
      </div>
      <div class="display-flex"></div>
      <div class="flex-container">

      <div id="curve_chart" style="position:relative; width: 450px; height: 500px; top:80px;left:-10px;"></div>
      <div style="position:relative; top:80px;width: 450px; height: 500px;padding-bottom:600px;left:-70px;" id="columnchart_values" ></div>
      </div>
      <h2 style="position:relative; top:110px;left:-40px;">اخر 15 نشاط</h2>
<div style="position:relative; top:130px;width: 900px; height: 500px;padding-bottom:50px;left:-40px;" id="table_div" dir="rtl"></div>


      <footer class="footer py-4  ">

      </footer>
    </div>
  </main>

  <!--   Core JS Files   -->
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/perfect-scrollbar.min.js"></script>
  <script src="../js/smooth-scrollbar.min.js"></script>
  <script src="../js/chartjs.min.js"></script>
  <script>
    var ctx = document.getElementById("chart-bars").getContext("2d");

    new Chart(ctx, {
      type: "bar",
      data: {
        labels: ["M", "T", "W", "T", "F", "S", "S"],
        datasets: [{
          label: "Sales",
          tension: 0.4,
          borderWidth: 0,
          borderRadius: 4,
          borderSkipped: false,
          backgroundColor: "rgba(255, 255, 255, .8)",
          data: [50, 20, 10, 22, 50, 10, 40],
          maxBarThickness: 6
        }, ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              suggestedMin: 0,
              suggestedMax: 500,
              beginAtZero: true,
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
              color: "#fff"
            },
          },
          x: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });


    var ctx2 = document.getElementById("chart-line").getContext("2d");

    new Chart(ctx2, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Mobile apps",
          tension: 0,
          borderWidth: 0,
          pointRadius: 5,
          pointBackgroundColor: "rgba(255, 255, 255, .8)",
          pointBorderColor: "transparent",
          borderColor: "rgba(255, 255, 255, .8)",
          borderColor: "rgba(255, 255, 255, .8)",
          borderWidth: 4,
          backgroundColor: "transparent",
          fill: true,
          data: [50, 40, 300, 320, 500, 350, 200, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });

    var ctx3 = document.getElementById("chart-line-tasks").getContext("2d");

    new Chart(ctx3, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Mobile apps",
          tension: 0,
          borderWidth: 0,
          pointRadius: 5,
          pointBackgroundColor: "rgba(255, 255, 255, .8)",
          pointBorderColor: "transparent",
          borderColor: "rgba(255, 255, 255, .8)",
          borderWidth: 4,
          backgroundColor: "transparent",
          fill: true,
          data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#f8f9fa',
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.1.0"></script>
</body>

</html>
{{-- SELECT Month(DateActivite),count(month(DateActivite)) FROM activites ; --}}

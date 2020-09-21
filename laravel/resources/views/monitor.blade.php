<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Monitor</title>
  
  <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/dashboard/">

  <!-- Bootstrap core CSS -->
  <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- Custom styles for this template -->
  <!-- <link href="https://getbootstrap.com/docs/4.0/examples/dashboard/dashboard.css" rel="stylesheet"> -->
  <!-- Nucleo Icons -->
  <link href="{{ URL::asset('css/nucleo-icons.css') }}" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="{{ URL::asset('css/black-dashboard.min.css?v=1.0.0') }}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <!-- <link href="{{ URL::asset('demo/demo.css') }} " rel="stylesheet" /> -->
  <script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
  <script src="https://www.gstatic.com/firebasejs/5.10.1/firebase.js"></script>
  <script src="{{ URL::asset('js/mulaifirebase.js') }}"></script>
  <!-- Chart JS -->
  <script src="{{ URL::asset('js/plugins/chartjs.min.js') }} "></script>
 
</head>
<body>
  <div class="wrapper">
    <div class="sidebar" data="blue">
      <div class="sidebar-wrapper"> 
        <div class="logo">
          <img src="{{ URL::asset('img/emilyz.jpg') }}" alt="logo">
         
        </div>
        <div class="logo" style="left:0:right:0;">
          <a href="javascript:void(0)" class="simple-text logo-mini">
            MWA
          </a>
          <a href="javascript:void(0)" class="simple-text logo-normal">
            MoBAN Web App
          </a>
        </div>
        <ul class="nav">
          <li class="active ">
            <a href="./dashboard.html">
              <i class="tim-icons icon-chart-pie-36"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="./icons.html">
              <i class="tim-icons icon-atom"></i>
              <p>Tentang Aplikasi</p>
            </a>
          </li>
          <li>
            <a href="./rtl.html">
              <i class="tim-icons icon-send text-succes"></i>
              <p>Beri Masukan</p>
            </a>
          </li>
        </ul>
      </div>    
    </div>

    <div class="main-panel " data="blue">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle d-inline">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:void(0)">MoBAN</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav ml-auto">
              <li class="search-bar input-group">
                <button class="btn btn-link" id="search-button" data-toggle="modal" data-target="#searchModal"><i class="tim-icons icon-zoom-split" ></i>
                  <span class="d-lg-none d-md-block">Search</span>
                </button>
              </li>
              <li class="dropdown nav-item">
                <a href="javascript:void(0)" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <div class="notification d-none d-lg-block d-xl-block"></div>
                  <i class="tim-icons icon-sound-wave"></i>
                  <p class="d-lg-none">
                    Notifications
                  </p>
                </a>
                <ul class="dropdown-menu dropdown-menu-right dropdown-navbar">
                  <li class="nav-link"><a href="#" class="nav-item dropdown-item"><span id="date_time"></a></li>              
                </ul>
              </li>
              <li class="dropdown nav-item">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <div class="photo">
                    <img src="{{ URL::asset('img/anime3.png') }} " alt="Profile Photo">
                  </div>
                  <b class="caret d-none d-lg-block d-xl-block"></b>
                  <p class="d-lg-none">
                    Log out
                  </p>
                </a>
                <ul class="dropdown-menu dropdown-navbar">
                  <li class="nav-link"><span id="date_time"></li>
                </ul>
              </li>
              <li class="separator d-lg-none"></li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="tim-icons icon-simple-remove"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- End Navbar -->
      
      <div class="content">
        <div class="row">
          <div class="col-12">
            <div class="card card-chart">
              <div class="card-header ">
                <div class="row">
                  <div class="col-sm-6 text-left">
                    <h2 class="card-title"><b>Debit Air Sungai</b></h2>
                    <h4 class="card-title">Status : <span id="statusdebit">Data Belum Masuk</span> (<span id="lastdebit">-</span> m<sup>3</sup>/s)</h4>
                  </div>      
                  <div class="col-sm-6">
                  <a href="#lengkap"><button class="btn btn-sm btn-info btn-simple float-right">Lihat Data Lengkap</button></a>
                    
                    <div class="btn-group btn-group-toggle float-right" data-toggle="buttons">
                      <label class="btn btn-sm btn-info btn-simple active" id="0">
                        <input type="radio" name="options" checked>
                        <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Harian</span>
                        <span class="d-block d-sm-none">
                          <!-- <i class="tim-icons icon-atom"></i> tim-icons icon-single-02 -->
                          Harian
                        </span>
                      </label>
                      <label class="btn btn-sm btn-info btn-simple" id="1">
                        <input type="radio" class="d-none d-sm-none" name="options">
                        <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Pekan</span>
                        <span class="d-block d-sm-none">
                          <!-- <i class="tim-icons icon-atom"></i> tim-icons icon-gift-2 -->
                          Pekan
                        </span>
                      </label>
                    </div>
                  </div>
                </div>                
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <canvas id="banjirchart"></canvas><!--chartBig1-->
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="card card-chart">
              <div class="card-header ">
                <div class="row">
                  <div class="col-sm-6 text-left">
                    <h2 class="card-title"><b>Curah Hujan</b></h2>
                    <h4 class="card-title">Status : <span id="statushujan">Data Belum Masuk</span> (<span id="lasthujan">-</span> mm)</h4>
                  </div>      
                  <div class="col-sm-6">
                    <a href="#lengkap"><button class="btn btn-sm btn-info btn-simple float-right">Lihat Data Lengkap</button></a>
                    <?php $epoch = 1596071261;
                    echo gmdate('r', $epoch);
                    echo date('r', $epoch);
                    ?>
                    <div class="btn-group btn-group-toggle float-right" data-toggle="buttons">
                      <label class="btn btn-sm btn-info btn-simple active" id="0">
                        <input type="radio" name="options" checked>
                        <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Harian</span>
                        <span class="d-block d-sm-none">
                          <!-- <i class="tim-icons icon-atom"></i> tim-icons icon-single-02 -->
                          Harian
                        </span>
                      </label>
                      <label class="btn btn-sm btn-info btn-simple" id="1">
                        <input type="radio" class="d-none d-sm-none" name="options">
                        <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Pekan</span>
                        <span class="d-block d-sm-none">
                          <!-- <i class="tim-icons icon-atom"></i> tim-icons icon-gift-2 -->
                          Pekan
                        </span>
                      </label>
                    </div>
                  </div>
                </div>                
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <canvas id="hujanchart"></canvas> <!--chartLinePurple -->
                </div>
              </div>
            </div>
          </div>
        </div>        
        <div class="row" id="lengkap">
          <div class="col-lg-6 col-md-12">
            <div class="card ">
              <div class="card-header">
                <h4 class="card-title"> Debit Air Sungai</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                <table class="table tablesorter " id="ex-table">
                    <thead class=" text-primary">
                      <th>Tanggal</th>
                      <th>Jam</th>
                      <th>Ketinggian</th>
                      <th>Debit</th> 
                    </thead>
                    <tbody id="tbody1">
                    </tbody>
                  </table> 
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12">
            <div class="card ">
              <div class="card-header">
                <h4 class="card-title"> Curah Hujan</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">

                  <table class="table tablesorter " id="ex-table">
                    <thead class=" text-primary">
                      <th>Tanggal</th>
                      <th>Jam</th>
                      <th>Data Hujan</th>
                    </thead>
                    <tbody id="tbody2">
                    </tbody>
                  </table> 
                  <!-- <table class="table tablesorter " id="table1">
                    <thead class=" text-primary">
                      <tr>
                        <th>
                          Name
                        </th>
                        <th>
                          Country
                        </th>
                        <th>
                          City
                        </th>
                        <th class="text-center">
                          Salary
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                    <div id="isitbody1">
                    </div>
                      <tr>
                        <td>
                          Dakota Rice
                        </td>
                        <td>
                          Niger
                        </td>
                        <td>
                          Oud-Turnhout
                        </td>
                        <td class="text-center">
                          $36,738
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Minerva Hooper
                        </td>
                        <td>
                          Curaçao
                        </td>
                        <td>
                          Sinaai-Waas
                        </td>
                        <td class="text-center">
                          $23,789
                        </td>
                      </tr>
                      
                    </tbody>
                  </table> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <footer class="footer">
        <div class="container-fluid">
          <ul class="nav">
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                Creative Tim
              </a>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                About Us
              </a>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                Blog
              </a>
            </li>
          </ul>
          <div class="copyright">
            ©2020
           
          </div>
        </div>
      </footer>

    </div>
  </div>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      //demo.initDashboardPageCharts();
      //demo.initFirebase();
      mulaifirebase();
      
    });
  </script>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');
        $navbar = $('.navbar');
        $main_panel = $('.main-panel');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');
        sidebar_mini_active = true;
        white_color = false;

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();


        $('.fixed-plugin a').click(function(event) {
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .background-color span').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data', new_color);
          }

          if ($main_panel.length != 0) {
            $main_panel.attr('data', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data', new_color);
          }
        });

        $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            sidebar_mini_active = false;
            blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
          } else {
            $('body').addClass('sidebar-mini');
            sidebar_mini_active = true;
            blackDashboard.showSidebarMessage('Sidebar mini activated...');
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);
        });

        $('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (white_color == true) {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').removeClass('white-content');
            }, 900);
            white_color = false;
          } else {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').addClass('white-content');
            }, 900);

            white_color = true;
          }


        });

        $('.light-badge').click(function() {
          $('body').addClass('white-content');
        });

        $('.dark-badge').click(function() {
          $('body').removeClass('white-content');
        });
      });
    });
  </script>
  <!--   Core JS Files   -->
  <script src="{{ URL::asset('js/core/jquery.min.js') }}"></script>
  <script src="{{ URL::asset('js/datetime.js') }}"></script>
  <script src="{{ URL::asset('js/core/popper.min.js') }}"></script>
  <script src="{{ URL::asset('js/core/bootstrap.min.js') }}"></script>
  <script src="{{ URL::asset('js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
  
  <!-- Chart JS -->
  <script src="{{ URL::asset('js/plugins/chartjs.min.js') }} "></script>
  <!--  Notifications Plugin    -->
  <script src="{{ URL::asset('js/plugins/bootstrap-notify.js') }} "></script>
  <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ URL::asset('js/black-dashboard.min.js?v=1.0.0') }} "></script>
</body>
</html>
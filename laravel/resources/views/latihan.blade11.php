<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Hello, world!</title>
  </head>
  <body class="bg-light">
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Mo
      <img src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
        an
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <i class="fa fa-home" aria-hidden="true"></i>
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active"> <!-- kasih active-->
            <a class="nav-link" href="#">Tentang Sistem</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Daftar Tempat
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown bg-dark" >
              <a class="dropdown-item" href="#">Tembalang</a>
              <a class="dropdown-item" href="#">Tlogosari</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Masukkan Saran Tempat</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>      
        </ul>
        <!-- <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form> -->
        <ul class="navbar-nav ">
        `<li class="nav-item active"> <!-- kasih active-->
            <a class="nav-link" href="#"><span id="date_time"></span></a>
          </li>
          
          </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Sign Up | Sign In
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="float:right;">
                    <a class="dropdown-item" href="#">Masuk</a>
                    <a class="dropdown-item" href="#">Daftar</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Logout</a>
                </div>
            </li>
        </ul>
      </div>
    </nav>

    <div class="container-fluid bg-light" >
      <br>
      <div class="card text-white bg-secondary mb-3">
        <div class="card-body">
          <div class="row">
            <div class="col-sm-4">
              <!-- <img src="{{ URL::asset('img/emilyz.jpg') }}" alt=""> -->
              <img class="d-block w-100" src="{{ URL::asset('img/emilyz.jpg') }}" alt="First slide">
            </div>
            <div class="col-sm-8">
              <h1 class="card-title">Moban</h1>
              <hr class="featurette-divider">
              <!-- <p class="card-text"><h4>Moban merupakan Sistem Monitoring Banjir yang mana sistem ini memonitor debit air sungai dan juga Curah Hujan.</h4></p> -->
              <div class="row">
                <div class="col-sm-4">
                  <div class="card text-white bg-info">
                    <div class="card-body">
                      <h1>1</h1>
                      <h5 class="card-title">Jumlah Lokasi</h5>
                      <p class="card-text">m/s</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="card text-white bg-info">
                    <div class="card-body">
                      <h1>199</h1>
                      <h5 class="card-title">Rerata Debit Air Sungai</h5>
                      <p class="card-text">m/s</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="card text-white bg-info">
                    <div class="card-body">
                      <h1>199</h1>
                      <h5 class="card-title">Curah Hujan</h5>
                      <p class="card-text text-">m/s</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>            
          </div>          
        </div>
      </div>
      <hr class="featurette-divider">
      <div class="card text-white bg-secondary mb-3">
        <div class="card-body">
          <div class="row">
            <div class="col-sm-8">
              <!-- <img src="{{ URL::asset('img/emilyz.jpg') }}" alt=""> -->
              <h5 class="card-title">Tentang Sistem</h5>
              <p class="card-text text-right"><h3>Sistem Moban Merupakan Bla-bla-bla yang bla-bla-bla</h3></p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
              
            </div>
            <div class="col-sm-4 bg-light">
              <img class="d-block w-100" src="{{ URL::asset('img/mike.jpg') }}" alt="First slide">
              
            </div>
          </div>
        </div>
      </div>
      <hr class="featurette-divider">
      <div class="card text-white bg-secondary mb-3">
        <div class="card-body">
          <h5 class="card-title">Lokasi</h5>
          <p class="card-text">Alat Monitoring diletakkan pada tempat-tempat yagn strategis. Berikut Daftar dari tempat-tempat tersebut</p>
          <a href="#" class="btn btn-primary">Lihat Lokasi</a>
        </div>
      </div>      
      <hr class="featurette-divider">
      <div class="card text-white bg-secondary mb-3">
        <div class="card-body">
          <h5 class="card-title">Aplikasi</h5>
          <p class="card-text">Dapatkan Notifikasi Real-Time dari ponsel dengan mengunduh aplikasi Moban App pada Play Store</p>
          <a href="#" class="btn btn-primary">Kunjungi Play Store</a>
        </div>
      </div>

      <div class="card text-white text-center bg-dark">
        <div class="card-body">
        <!-- <img class="d-block w-100" src="{{ URL::asset('img/polines.jpg') }}" alt="First slide"> -->
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
      <div class="card text-white text-center bg-dark">
        <div class="card-body">
        <!-- <img class="d-block w-100" src="{{ URL::asset('img/polines.jpg') }}" alt="First slide"> -->
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
      <div class="card img-fluid" style="width:500px">
        <!-- <img class="card-img-top" src="{{ URL::asset('img/polines.jpg') }}" alt="Card image" style="width:100%">
        <div class="card-img-overlay">
          <h4 class="card-title">Avro</h4>
          <p class="card-text">Tutorial for Apache Avro</p>
          <a href="#" class="btn btn-info">Learn</a>
        </div> -->
      </div>
      <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-dark">
        <img class="d-block w-100" src="{{ URL::asset('img/polines.jpg') }}" alt="First slide">
          <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1 class="display-4 font-weight-normal">Punny headline</h1>
            <p class="lead font-weight-normal">And an even wittier subheading to boot. Jumpstart your marketing efforts with this example based on Apple's marketing pages.</p>
            <a class="btn btn-outline-secondary" href="#">Coming soon</a>
          </div>
          <div class="product-device box-shadow d-none d-md-block"></div>
          <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
      </div>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="{{ URL::asset('img/polines.jpg') }}" alt="First slide">
            <div class="container">
              <div class="carousel-caption">
                  <h1>Selamat Datang </h1>
                  <p>Data yang di miliki oleh Tech4water merupakan data yang di ambil langsung dari pos pos telemetri yang telah di bangun </p>
                  <p><a class="btn btn-lg btn-primary" href="#" role="button">Lihat Data</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{ URL::asset('img/polines.jpg') }}" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
                  <h1>Realtime Hydrologi Data</h1>
                  <p>Data yang di miliki oleh Tech4water merupakan data yang di ambil langsung dari pos pos telemetri yang telah di bangun </p>
                  <p><a class="btn btn-lg btn-primary" href="#" role="button">Lihat Data</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{ URL::asset('img/polines.jpg') }}" alt="Third slide">
            <div class="container">
              <div class="carousel-caption">
                  <h1>Realtime Hydrologi Data</h1>
                  <p>Data yang di miliki oleh Tech4water merupakan data yang di ambil langsung dari pos pos telemetri yang telah di bangun </p>
                  <p><a class="btn btn-lg btn-primary" href="#" role="button">Lihat Data</a></p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <div class="carousel-item">
        <img src="{{ URL::asset('img/polines.jpg') }}" alt="asd">
        <div class="carousel-caption d-none d-md-block">
          <h5>...</h5>
          <p>...</p>
        </div>
      </div>
      
      <div class="row">
            <div class="col-12">
              <div class="card card-chart">
                <div class="card-header ">
                  <div class="row">
                    <div class="col-sm-6 text-left">
                      
                      <h2 class="card-title"><b>Tembalang</b></h2>
                    </div>
                    <div class="col-sm-6">
                      <div class="btn-group btn-group-toggle float-right" data-toggle="buttons">
                        <label class="btn btn-sm btn-primary btn-simple active" id="0">
                          <input type="radio" name="options" checked>
                          <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Grafik Banjir</span>
                          <span class="d-block d-sm-none">
                            <i class="tim-icons icon-atom"></i> <!-- tim-icons icon-single-02-->
                          </span>
                        </label>
                        <label class="btn btn-sm btn-primary btn-simple" id="1">
                          <input type="radio" class="d-none d-sm-none" name="options">
                          <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Grafik Curah Hujan</span>
                          <span class="d-block d-sm-none">
                            <i class="tim-icons icon-atom"></i> <!--tim-icons icon-gift-2-->
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
            <div class="col-lg-4">
              <div class="card card-chart">
                <div class="card-header">
                  <h5 class="card-category">Total Shipments</h5>
                  <h3 class="card-title"><i class="tim-icons icon-bell-55 text-primary"></i> 763,215</h3>
                </div>
                <div class="card-body">
                  <div class="chart-area">
                    <canvas id="hujanchart"></canvas> <!--chartLinePurple -->
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card card-chart">
                <div class="card-header">
                  <h5 class="card-category">Daily Sales</h5>
                  <h3 class="card-title"><i class="tim-icons icon-delivery-fast text-info"></i> 3,500€</h3>
                </div>
                <div class="card-body">
                  <div class="chart-area">
                    <canvas id="CountryChart"></canvas>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card card-chart">
                <div class="card-header">
                  <h5 class="card-category">Completed Tasks</h5>
                  <h3 class="card-title"><i class="tim-icons icon-send text-success"></i> 12,100K</h3>
                </div>
                <div class="card-body">
                  <div class="chart-area">
                    <canvas id="chartLineGreen"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>
      <!-- Content here -->
          <h1>Hello, BOB!</h1>
      </div>
      <div class="container-fluid" style="background-color:blue;">
          <h1>Hello, world!</h1>
      </div> -->


      <div class="container">
        <footer class="pt-4 my-md-5 pt-md-5 border-top">
          <div class="row">
            <div class="col-12 col-md">
              <img class="mb-2" src="../../assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
              <small class="d-block mb-3 text-muted">© 2017-2018</small>
            </div>
            <div class="col-6 col-md">
              <h5>Features</h5>
              <ul class="list-unstyled text-small">
                <li><a class="text-muted" href="#">Cool stuff</a></li>
                <li><a class="text-muted" href="#">Random feature</a></li>
                <li><a class="text-muted" href="#">Team feature</a></li>
                <li><a class="text-muted" href="#">Stuff for developers</a></li>
                <li><a class="text-muted" href="#">Another one</a></li>
                <li><a class="text-muted" href="#">Last time</a></li>
              </ul>
            </div>
            <div class="col-6 col-md">
              <h5>Resources</h5>
              <ul class="list-unstyled text-small">
                <li><a class="text-muted" href="#">Resource</a></li>
                <li><a class="text-muted" href="#">Resource name</a></li>
                <li><a class="text-muted" href="#">Another resource</a></li>
                <li><a class="text-muted" href="#">Final resource</a></li>
              </ul>
            </div>
            <div class="col-6 col-md">
              <h5>About</h5>
              <ul class="list-unstyled text-small">
                <li><a class="text-muted" href="#">Team</a></li>
                <li><a class="text-muted" href="#">Locations</a></li>
                <li><a class="text-muted" href="#">Privacy</a></li>
                <li><a class="text-muted" href="#">Terms</a></li>
              </ul>
            </div>
          </div>
        </footer>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="{{ URL::asset('img/polines.jpg') }}"></script> -->
    <script src="{{ URL::asset('js/datetime.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
<!DOCTYPE html> 
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Jateng Tanggap COVID-19</title>
      <link href="https://corona.jatengprov.go.id/assets/images/logo.png" rel="shortcut icon">
      <link rel="stylesheet" href="https://corona.jatengprov.go.id/assets/plugins/bootstrap/bootstrap.min.css">
      <link rel="stylesheet" href="https://corona.jatengprov.go.id/assets/plugins/themify-icons/themify-icons.css">
      <link rel="stylesheet" href="https://corona.jatengprov.go.id/assets/css/owl.carousel.min.css" media="screen">
      <link rel="stylesheet" href="https://corona.jatengprov.go.id/assets/css/owl.theme.green.min.css" media="screen">
      <link rel="stylesheet" href="https://corona.jatengprov.go.id/assets/css/fontawesome-all.css" media="screen">
      <link rel="stylesheet" href="https://corona.jatengprov.go.id/assets/plugins/fancybox/jquery.fancybox.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://corona.jatengprov.go.id/assets/css/stylev2.css?v=1.8">
      <link href="https://fonts.googleapis.com/css?family=Karla&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">

      <script type="text/javascript" src="{{ URL::asset('js/Chart.js') }}"></script>
      <script type="text/javascript" src="{{ URL::asset('js/firebase.js') }}"></script>
      <script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
      <script src="https://www.gstatic.com/firebasejs/5.10.1/firebase.js"></script>

      <!-- JAVASCRIPTS --> <script src="https://corona.jatengprov.go.id/assets/plugins/jquery/jquery.js"></script> <script src="https://corona.jatengprov.go.id/assets/plugins/bootstrap/bootstrap.min.js"></script> <script src="https://corona.jatengprov.go.id/assets/js/jquery.easing.min.js"></script> <script src="https://corona.jatengprov.go.id/assets/js/owl.carousel.min.js"></script> <script src="https://corona.jatengprov.go.id/assets/plugins/fancybox/jquery.fancybox.min.js"></script> <script src="https://corona.jatengprov.go.id/assets/js/script.js?v=1.6"></script> <!-- Global site tag (gtag.js) - Google Analytics --> <script async src="https://www.googletagmanager.com/gtag/js?id=G-7F84FDTJZC"></script> <script> window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments); } gtag('js', new Date()); gtag('config', 'G-7F84FDTJZC'); </script> 
   </head>
   <body class="body-wrapper" data-spy="scroll" data-target=".privacy-nav">
      <nav class="navbar main-nav navbar-expand-lg py-2 fixed-top navbar-toggleable-sm" data-toggle="affix">
         <div class="container-fluid container-nav">
            <a class="navbar-brand" href="http://127.0.0.1:8000/jadi"> <img class="logo" src="https://corona.jatengprov.go.id/assets/images/Putih.png" alt="logo"> </a> 
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"> 
                <span class="icon-bar top-bar"></span> 
                <span class="icon-bar middle-bar"></span> 
                <span class="icon-bar bottom-bar"></span> 
            </button> 
            <div class="collapse navbar-collapse" id="navbarNav"> <!--navbar-->
               <ul class="navbar-nav ml-auto link-hover">
                  <li class="nav-item"> <a class="nav-link smoth-scroll" href="https://corona.jatengprov.go.id/v2">Beranda</a> </li>
                  <li class="nav-item"> <a class="nav-link smoth-scroll" href="https://corona.jatengprov.go.id/data">Data</a> </li>
                  <li class="nav-item"> <a class="nav-link smoth-scroll" href="https://corona.jatengprov.go.id/berita">Berita</a> </li>
                  <li class="nav-item"> <a class="nav-link smoth-scroll" href="https://corona.jatengprov.go.id/rumah-sakit">RS Rujukan</a> </li>
                  <li class="nav-item"> <a class="nav-link smoth-scroll" href="https://corona.jatengprov.go.id/donasi">Donasi</a> </li>
                  <li class="nav-item"> <a class="nav-link smoth-scroll" href="https://corona.jatengprov.go.id/tanya-jawab">F.A.Q</a> </li>
                  <li class="nav-item"> <a class="nav-link smoth-scroll" href="https://corona.jatengprov.go.id/unduhan">Download</a> </li>
                  <li class="nav-item"> <a class="nav-link smoth-scroll" href="https://corona.jatengprov.go.id/link-kabupaten-kota">Link</a> </li>
                  <li class="nav-item"> <a class="nav-link" href="https://corona.jatengprov.go.id/screening">Deteksi Mandiri</a> </li>
               </ul>
            </div>
         </div>
      </nav>
      <section class="section gradient-banner">
         <div class="container"></div>
      </section>
      <section class="section pt-0 position-relative pull-top">
         <div class="container-fluid pl-lg-5 pr-lg-5 pl-md-3 pr-md-3 pl-sm-2 pr-sm-2">
            <div class="row">
               <div class="col-lg-7 col-md-6 col-sm-12 col-12 mb-3">
                  <div class="rounded-15 shadow bg-white">
                     <div class="row justify-content-center">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                           <div id="homeSlider" class="carousel slide" data-ride="carousel">
                              <ol class="carousel-indicators">
                                 <li data-target="#homeSlider" data-slide-to="0" class="active"></li>
                                 <li data-target="#homeSlider" data-slide-to="1"></li>
                              </ol>
                              <div class="carousel-inner rounded-15">
                                 <div class="carousel-item active"> <!--Carousel kiri atas-->
                                    <canvas id="myChart" width="40" height="20"></canvas>
                                    <!--
                                    <div class="carousel-parent d-flex align-items-center justify-content-center"> <img src="https://corona.jatengprov.go.id/assets/images/jateng_mudik.png" alt=""> </div>
                                    -->
                                 </div>
                                 <div class="carousel-item">
                                    <div class="carousel-parent d-flex align-items-center justify-content-center"> <img src="https://corona.jatengprov.go.id/assets/images/wajib_masker.png" alt=""> </div>
                                 </div>
                              </div>
                              <a class="carousel-control-prev" href="#homeSlider" data-slide="prev"> <span class="icon-slide fa fa-chevron-left text-white"></span> </a> <a class="carousel-control-next" href="#homeSlider" data-slide="next"> <span class="icon-slide fa fa-chevron-right text-white"></span> </a> 
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-5 col-md-6 col-sm-12 col-12">
                  <div class="rounded-15 shadow bg-white">
                     <div class="row justify-content-center pb-lg-5 pb-4 card-hotline"> <!--Carousel kanan atas-->
                        <div class="col-md-12 mb-12 text-center p-lg-5 p-3">
                           <h3 class="font-hotline font-weight-bold">Hotline Tanggap <span class="corona-text">COVID-19</span><br /> Jawa Tengah </h3>
                        </div>
                        <div class="col-lg-10 col-md-11 col-sm-11 col-11 py-lg-1"> <a href="tel:0243580713"> <button class="btn btn-danger btn-block border-0 mb-1 hotline" type="submit"> <i class="fa fa-2x fa-phone float-left align-middle mr-2 mt-1" aria-hidden="true"></i> <span class="align-middle float-left">Hotline 1</span> <span class="align-middle float-right mt-2">(024) 3580713</span><br /> <small class="sub-text float-left">Dinas Kesehatan Jawa Tengah</small> </button> </a> </div>
                        <div class="col-lg-10 col-md-11 col-sm-11 col-11 py-lg-1"> <a href="tel:082313600560"> <button class="btn btn-danger btn-block border-0 mb-1 hotline" type="submit"> <i class="fa fa-2x fa-phone float-left align-middle mr-2 mt-1" aria-hidden="true"></i> <span class="align-middle float-left">Hotline 2</span> <span class="align-middle float-right mt-2">082313600560</span><br /> <small class="sub-text float-left">Dinas Kesehatan Jawa Tengah</small> </button> </a> </div>
                        <div class="col-lg-10 col-md-11 col-sm-11 col-11 py-lg-1"> <a href="tel:1500649"> <button class="btn btn-danger btn-block border-0 mb-1 hotline" type="submit"> <i class="fa fa-2x fa-phone float-left align-middle mr-2 mt-1" aria-hidden="true"></i> <span class="align-middle float-left">Hotline 3</span> <span class="align-middle float-right mt-2">1500649</span><br /> <small class="sub-text float-left">Dinas Kesehatan Jawa Tengah (Free Call)</small> </button> </a> </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="section pt-0 position-relative">
         <div class="container-fluid pl-lg-5 pr-lg-5 pl-md-3 pr-md-3 pl-sm-2 pr-sm-2">
            <div class="rounded-15 shadow bg-white">
               <div class="row justify-content-center">
                  <div class="col-lg-7 col-md-12 text-center mb-2">
                     <h3 class="font-hotline font-weight-bold p-4 mt-3">Himbauan Gubernur</h3>
                  </div>
               </div>
               <div class="row justify-content-center">
                  <div class="col-lg-7 col-md-10 col-sm-10 mb-lg-5">
                     <div class="embed-responsive embed-responsive-16by9 youtube"> <iframe class="embed-responsive-item" id="himbauanGub" src="https://www.youtube.com/embed/Lb0fHLuJK3c" allowfullscreen></iframe> </div>
                  </div>
                  <div class="col-lg-5 col-md-10 col-sm-10">
                     <div class="list-group list-video">
                        <a href="https://www.youtube.com/embed/xHbfFoIuXW0&t=2s" class="list-group-item play-list play list-group-item-action align-items-center">
                           <p>Persiapan Rumah Ibadah Menuju New Normal </p>
                           <i class="fa fa-play float-right"></i> 
                        </a>
                        <a href="https://www.youtube.com/embed/f1gGcnJgppw" class="list-group-item play-list list-group-item-action align-items-center">
                           <p>Cek Mall Menuju New Normal </p>
                           <i class="fa fa-play float-right"></i> 
                        </a>
                        <a href="https://www.youtube.com/embed/vDUYkHYLuVY" class="list-group-item play-list list-group-item-action align-items-center">
                           <p>Cek Samsat dan Pelayanan Publik Menuju New Normal </p>
                           <i class="fa fa-play float-right"></i> 
                        </a>
                        <a href="https://www.youtube.com/embed/wod6_sM3PMI" class="list-group-item play-list list-group-item-action align-items-center">
                           <p>Paket Sembako untuk yang Tidak Mudik </p>
                           <i class="fa fa-play float-right"></i> 
                        </a>
                        <a href="https://www.youtube.com/embed/5kEnq96KEfI" class="list-group-item play-list list-group-item-action align-items-center">
                           <p>Cek Stasiun Tawang Semarang </p>
                           <i class="fa fa-play float-right"></i> 
                        </a>
                        <a href="https://www.youtube.com/embed/nCuf5LpKR5o" class="list-group-item play-list list-group-item-action align-items-center">
                           <p>Bandara Ahmad Yani Masih Terkendali </p>
                           <i class="fa fa-play float-right"></i> 
                        </a>
                        <a href="https://www.youtube.com/embed/MlmLLV-AqLo" class="list-group-item play-list list-group-item-action align-items-center">
                           <p>Pasar Harus Jaga Jarak </p>
                           <i class="fa fa-play float-right"></i> 
                        </a>
                        <a href="https://www.youtube.com/embed/Lb0fHLuJK3c" class="list-group-item play-list list-group-item-action align-items-center">
                           <p>Pemudik Wajib Isolasi Diri </p>
                           <i class="fa fa-play float-right"></i> 
                        </a>
                        <a href="https://www.youtube.com/embed/aRBcr0nFEbg" class="list-group-item play-list list-group-item-action align-items-center">
                           <p>Tentang Pasien Tidak Jujur Bikin Ajur </p>
                           <i class="fa fa-play float-right"></i> 
                        </a>
                        <a href="https://www.youtube.com/embed/Ygigte48CIo" class="list-group-item play-list list-group-item-action align-items-center">
                           <p>Bantuan untuk Warga Jateng Terdampak PSBB di Jakarta </p>
                           <i class="fa fa-play float-right"></i> 
                        </a>
                        <a href="https://www.youtube.com/embed/XsLJgjFLLKg" class="list-group-item play-list list-group-item-action align-items-center">
                           <p>Imbauan Jangan Mudik </p>
                           <i class="fa fa-play float-right"></i> 
                        </a>
                        <a href="https://www.youtube.com/embed/oDagmp557sg" class="list-group-item play-list list-group-item-action align-items-center">
                           <p>Jangan Tolak Jenazah Covid-19 </p>
                           <i class="fa fa-play float-right"></i> 
                        </a>
                        <a href="https://www.youtube.com/embed/LYM1VpzBE3A" class="list-group-item play-list list-group-item-action align-items-center">
                           <p>Maklumat Gotong Royong Lawan Corona </p>
                           <i class="fa fa-play float-right"></i> 
                        </a>
                        <a href="https://www.youtube.com/embed/Cpu1cffG-wQ" class="list-group-item play-list list-group-item-action align-items-center">
                           <p>Keringanan Kredit untuk Usaha Terdampak Corona </p>
                           <i class="fa fa-play float-right"></i> 
                        </a>
                        <a href="https://www.youtube.com/embed/IxUq0BCzvW4" class="list-group-item play-list list-group-item-action align-items-center">
                           <p>Ajukan Keringanan Kredit ke Leasing </p>
                           <i class="fa fa-play float-right"></i> 
                        </a>
                        <a href="https://www.youtube.com/embed/x_ZAkI6tXls" class="list-group-item play-list list-group-item-action align-items-center">
                           <p>Kartu Prakerja untuk Korban PHK </p>
                           <i class="fa fa-play float-right"></i> 
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="section pt-0 position-relative">
         <div class="container-fluid pl-lg-5 pr-lg-5 pl-md-3 pr-md-3 pl-sm-2 pr-sm-2">
            <div class="rounded-15 shadow bg-white">
               <div class="row justify-content-center">
                  <div class="col-lg-12 col-md-12 mb-12 text-center p-4">
                     <h3 class="font-hotline font-weight-bold p-3 mb-3">Sebaran Kasus <span class="corona-text">COVID-19</span> Di Jawa Tengah</h3>
                     <p class="text-detail"><b>Update Terakhir : </b> Sabtu, 30 Mei 2020 | 11:11 | <b>Sumber Data : </b> Dinas Kesehatan Provinsi Jawa Tengah 
                  </div>
               </div>
               <div class="row justify-content-center mr-lg-3 mr-sm-5 ml-lg-3 ml-sm-5 mr-1 ml-1">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                     <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item"> <a class="nav-link text-center text-detail active" id="pills-statistic-tab" data-toggle="pill" href="#pills-statistic" role="tab" aria-controls="pills-statistic" aria-selected="true">Statistik</a> </li>
                        <li class="nav-item"> <a class="nav-link text-center text-detail" id="pills-domisili-tab" data-toggle="pill" href="#pills-domisili" role="tab" aria-controls="pills-domisili" aria-selected="false">Peta Domisili</a> </li>
                        <li class="nav-item"> <a class="nav-link text-center text-detail" id="pills-rs-tab" data-toggle="pill" href="#pills-rs" role="tab" aria-controls="pills-rs" aria-selected="false">Peta Rumah Sakit</a> </li>
                     </ul>
                     <div class="tab-content bg-white" id="pills-tabContent">
                        <div class="tab-pane fade show active text-center" id="pills-statistic" role="tabpanel" aria-labelledby="pills-statistic-tab">
                           <div class="row mt-lg-5 mt-2">
                              <div class="col-lg-4 col-md-12 mb-4">
                                 <div class="card shadow card-extend">
                                    <ul class="list-group list-group-flush">
                                       <li class="list-group-item text-center list-header-red font-status"> <i class="fa fa-circle fc-red"></i> Positif COVID-19 </li>
                                       <li class="list-group-item text-center">
                                          <h3 class="font-counter fc-red">1.421</h3>
                                       </li>
                                       <li class="list-group-item list-group-last text-center">
                                          <ul class="list-unstyled list-kasus row">
                                             <li class="list-item col-lg-4 col-md-4 col-sm-4 col-4 text-center list-header-default font-status">
                                                <div class="font-counter-2 fc-red">
                                                   570 <span class="d-inline d-lg-none d-md-none text-white"><br /></span> <span class="badge badge-danger font-12">40,11 %</span> 
                                                   <h6 class="font-kasus font-14 pt-1">Dirawat</h6>
                                                </div>
                                             </li>
                                             <li class="list-item col-lg-4 col-md-4 col-sm-4 col-4 text-center list-header-default font-status">
                                                <div class="font-counter-2 fc-green">
                                                   754 <span class="d-inline d-lg-none d-md-none text-white"><br /></span> <span class="badge badge-success font-12">53,06 %</span> 
                                                   <h6 class="font-kasus font-14 pt-1">Sembuh</h6>
                                                </div>
                                             </li>
                                             <li class="list-item col-lg-4 col-md-4 col-sm-4 col-4 text-center list-header-default font-status">
                                                <div class="font-counter-2 text-black">
                                                   97 <span class="d-inline d-lg-none d-md-none text-white"><br /></span> <span class="badge badge-default bg-black text-white font-12">6,83 %</span> 
                                                   <h6 class="font-kasus font-14 pt-1">Meninggal</h6>
                                                </div>
                                             </li>
                                          </ul>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                              <div class="col-lg-4 col-md-12 mb-4 pl-lg-0 pr-lg-0">
                                 <div class="card shadow card-extend">
                                    <ul class="list-group list-group-flush">
                                       <li class="list-group-item text-center list-header-oren font-status"> <i class="fa fa-circle fc-orange"></i> PDP (Pasien Dalam Pengawasan) </li>
                                       <li class="list-group-item text-center">
                                          <h3 class="font-counter fc-orange">5.463</h3>
                                       </li>
                                       <li class="list-group-item list-group-last text-center">
                                          <ul class="list-unstyled list-kasus row">
                                             <li class="list-item col-lg-4 col-md-4 col-sm-4 col-4 text-center list-header-default font-status">
                                                <div class="font-counter-2 fc-orange">
                                                   728 <span class="d-inline d-lg-none d-md-none text-white"><br /></span> <span class="badge badge-default bg-kuning text-white font-13">13,33 %</span> 
                                                   <h6 class="font-kasus font-14 pt-1">Dirawat</h6>
                                                </div>
                                             </li>
                                             <li class="list-item col-lg-4 col-md-4 col-sm-4 col-4 text-center list-header-default font-status">
                                                <div class="font-counter-2 fc-orange">
                                                   3.967 <span class="d-inline d-lg-none d-md-none text-white"><br /></span> <span class="badge badge-default bg-kuning text-white font-13">72,62 %</span> 
                                                   <h6 class="font-kasus font-14 pt-1">Sembuh</h6>
                                                </div>
                                             </li>
                                             <li class="list-item col-lg-4 col-md-4 col-sm-4 col-4 text-center list-header-default font-status">
                                                <div class="font-counter-2 fc-orange">
                                                   768 <span class="d-inline d-lg-none d-md-none text-white"><br /></span> <span class="badge badge-default bg-kuning text-white font-13">14,06 %</span> 
                                                   <h6 class="font-kasus font-14 pt-1">Meninggal</h6>
                                                </div>
                                             </li>
                                          </ul>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                              <div class="col-lg-4 col-md-12 mb-4">
                                 <div class="card shadow card-extend">
                                    <ul class="list-group list-group-flush">
                                       <li class="list-group-item text-center list-header-ungu font-status"> <i class="fa fa-circle fc-ungu"></i> ODP (Orang Dalam Pemantauan) </li>
                                       <li class="list-group-item text-center">
                                          <h3 class="font-counter fc-ungu">35.386</h3>
                                       </li>
                                       <li class="list-group-item list-group-last text-center">
                                          <ul class="list-unstyled list-kasus-odp row">
                                             <li class="list-item col-lg-6 col-md-6 col-sm-6 col-6 text-center list-header-default font-status">
                                                <div class="font-counter-2 fc-ungu">
                                                   1.300 <span class="d-inline d-lg-none d-md-none text-white"><br /></span> <span class="badge badge-default bg-ungu text-white font-12">3,67 %</span> 
                                                   <h6 class="font-kasus font-13 pt-1">Dalam Pemantauan</h6>
                                                </div>
                                             </li>
                                             <li class="list-item col-lg-6 col-md-6 col-sm-6 col-6 text-center list-header-default font-status">
                                                <div class="font-counter-2 fc-ungu">
                                                   34.086 <span class="d-inline d-lg-none d-md-none text-white"><br /></span> <span class="badge badge-default bg-ungu text-white font-12">96,33 %</span> 
                                                   <h6 class="font-kasus font-13 pt-1">Selesai Pemantauan</h6>
                                                </div>
                                             </li>
                                          </ul>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="pills-domisili" role="tabpanel" aria-labelledby="pills-domisili-tab">
                           <div id="maps-kabko" class="mb-3"></div>
                           <div class="row justify-content-center">
                              <div class="col-lg-12 col-md-12 col-sm-12 mr-3 ml-3">
                                 <p class="text-keterangan mb-2">Keterangan : </p>
                                 <p class="text-justify mb-2"><b>Orang Dalam Pemantauan (ODP)</b> adalah seseorang yang mengalami gejala demam (>38 C) atau riwayat demam tanpa pneumonia yang memiliki riwayat perjalanan ke wilayah yang terjangkit.</p>
                                 <p class="text-justify mb-5"><b>Pasien Dalam Pengawasan (PDP)</b> adalah pasien pnemonia ringan hingga berat yang mengalami demam (>38 C) atau riwayat demam dan memiliki riwayat kontak dengan hewan penular, riwayat kontak dengan pasien COVID-19, atau riwayat perjalanan ke negara terjangkit dalam 14 hari.</p>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade text-center" id="pills-rs" role="tabpanel" aria-labelledby="pills-rs-tab">
                           <div id="maps-rs" class="mb-3"></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row justify-content-center mr-lg-5 mr-sm-5 ml-lg-5 ml-sm-5">
                  <div class="col-lg-4 col-md-6 col-sm-8 col-10 text-center mr-2 ml-2 mb-4"> <a href="https://corona.jatengprov.go.id/data" class="btn btn-outline-danger btn-block p-3 rounded-8">Lihat Data Selengkapnya</a> </div>
               </div>
            </div>
         </div>
      </section>
      <section class="section pt-0 position-relative">
         <div class="container-fluid pl-lg-5 pr-lg-5 pl-md-3 pr-md-3 pl-sm-2 pr-sm-2">
            <div class="rounded-15 shadow bg-white">
               <div class="row justify-content-center">
                  <div class="col-lg-7 col-md-12 mb-12 text-center pb-5 pt-5">
                     <h3 class="font-hotline font-weight-bold">Informasi <span class="corona-text">COVID-19</span></h3>
                     <h3 class="font-hotline font-weight-bold">Berdasarkan Lokasi Anda</h3>
                  </div>
               </div>
               <div class="row justify-content-center mr-lg-5 mr-sm-5 ml-lg-5 ml-sm-5">
                  <div class="col-lg-10 col-md-10 col-sm-10 mb-2 error-lokasi text-center">
                     <p class="text-center font-14" id="pesan-lokasi"></p>
                     <button type="button" id="reload-btn" class="btn btn-success rounded-15 btn-sm text-white mt-1"><i class="fa fa-map-maker d-lg-inline-block"></i> Akses Lokasi</button> 
                  </div>
                  <div class="col-lg-6 col-md-12 col-sm-12">
                     <div class="card card-custom-rs-near border mb-2 mr-2 ml-2" id="rs-near" style="min-height: 320px !important">
                        <ul class="list-group list-group-flush">
                           <li class="list-group-item font-weight-bold text-center pb-3">
                              <h3 class="font-weight-bold"><i class="fa fa-hospital-o fc-orange mr-3"></i> Rumah Sakit Rujukan Terdekat</h3>
                           </li>
                           <li class="list-group-item get-lokasi font-weight-bold"> <span id="rs-nama"></span> </li>
                           <li class="list-group-item get-lokasi mb-2 text-info-rs"><span id="rs-alamat"></span></li>
                           <li class="list-group-item get-lokasi"> <a id="rs-phone" class="btn btn-sm rounded-15 btn-success mb-1"></a> <a id="rs-website" target="_blank" class="btn btn-sm rounded-15 btn-success mb-1 text-white"><i class="fa fa-globe"></i> Website</a> </li>
                           <li class="list-group-item mb-4 get-lokasi"><a id="rs-road" class="btn btn-sm rounded-15 btn-outline-success mb-1" target="_blank"><i class="fa fa-map"></i> Petunjuk Arah</a></li>
                           <li class="list-group-item text-center font-weight-bold bg-gray error-lokasi">
                              <h5 class="font-haeder">Lokasi tidak ditemukan</h5>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-12 col-sm-12">
                     <div class="card card-custom-rs-near border mb-2 mr-2 ml-2" id="covid-near" style="min-height: 320px !important">
                        <ul class="list-group list-group-flush list-radius">
                           <li class="list-group-item font-weight-bold text-center pb-3">
                              <h3 class="font-weight-bold">
                                 <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19.32 13.5C19.5324 13.8057 19.8369 14.0356 20.1891 14.156C20.5413 14.2764 20.9227 14.2812 21.2778 14.1695C21.6329 14.0579 21.943 13.8357 22.1629 13.5353C22.3827 13.235 22.5009 12.8722 22.5 12.5C22.5009 12.1278 22.3827 11.765 22.1629 11.4647C21.943 11.1644 21.6329 10.9421 21.2778 10.8305C20.9227 10.7188 20.5413 10.7236 20.1891 10.844C19.8369 10.9644 19.5324 11.1943 19.32 11.5H18.5C18.5 9.93001 18 8.5 17.1 7.31L18.44 5.97C19 6.07 19.57 5.91 20 5.5C20.67 4.81 20.67 3.7 20 3C19.31 2.33 18.2 2.33 17.5 3C17.09 3.43 16.93 4 17.03 4.56L15.69 5.9C14.77 5.21 13.69 4.75 12.5 4.58V3.18C12.8057 2.96766 13.0356 2.66317 13.156 2.31098C13.2765 1.95878 13.2812 1.57731 13.1695 1.22223C13.0579 0.867152 12.8357 0.55705 12.5353 0.337176C12.235 0.117303 11.8722 -0.000834256 11.5 4.43486e-06C11.1278 -0.000834256 10.7651 0.117303 10.4647 0.337176C10.1644 0.55705 9.94216 0.867152 9.8305 1.22223C9.71884 1.57731 9.72358 1.95878 9.84403 2.31098C9.96447 2.66317 10.1943 2.96766 10.5 3.18V4.58C9.60003 4.71 8.76002 5 8.00002 5.44L6.89002 3.85C7.08002 3.33 7.03002 2.73 6.69002 2.25C6.55821 2.06135 6.39049 1.90055 6.19645 1.77681C6.00241 1.65307 5.78586 1.56882 5.55922 1.52888C5.33257 1.48893 5.10028 1.49409 4.87563 1.54405C4.65098 1.594 4.43838 1.68778 4.25002 1.82C3.46002 2.37 3.26002 3.46 3.82002 4.25C4.16002 4.74 4.70002 5 5.25002 5L6.43002 6.68C6.00002 7.11 5.66002 7.59 5.37002 8.12C5.05479 7.99684 4.71072 7.96718 4.37906 8.03458C4.04739 8.10197 3.74219 8.26357 3.50002 8.5C2.83002 9.2 2.83002 10.3 3.50002 11C3.79002 11.27 4.14002 11.43 4.50002 11.5C4.50002 12.04 4.57002 12.56 4.68002 13.06L3.37002 13.41C2.95002 13.06 2.37002 12.91 1.79002 13.06C1.34181 13.182 0.960415 13.4771 0.729745 13.8803C0.499075 14.2835 0.438025 14.7618 0.560024 15.21C0.682024 15.6582 0.97708 16.0396 1.38028 16.2703C1.78349 16.501 2.26181 16.562 2.71002 16.44C3.28002 16.28 3.71002 15.86 3.89002 15.34L5.40002 14.93C5.85002 15.72 6.45002 16.42 7.15002 17L6.05002 19C5.50002 19.08 5.00002 19.39 4.71002 19.92C4.60103 20.1222 4.53293 20.344 4.50962 20.5725C4.48631 20.8011 4.50825 21.032 4.57418 21.2521C4.64011 21.4721 4.74874 21.6771 4.89387 21.8552C5.039 22.0332 5.21779 22.181 5.42002 22.29C5.62226 22.399 5.84398 22.4671 6.07254 22.4904C6.30109 22.5137 6.532 22.4918 6.75207 22.4258C6.97214 22.3599 7.17708 22.2513 7.35517 22.1062C7.53326 21.961 7.68103 21.7822 7.79002 21.58C8.07002 21.06 8.06002 20.46 7.81002 19.97L8.88002 18C9.69003 18.32 10.57 18.5 11.5 18.5H11.68C11.55 18.76 11.5 19.06 11.5 19.38C11.58 20.35 12.42 21.07 13.38 21C14.34 20.93 15.07 20.08 15 19.12C14.96 18.62 14.71 18.18 14.35 17.89C14.82 17.68 15.27 17.41 15.69 17.1L18.03 19.44C17.93 20 18.09 20.57 18.5 21C19.2 21.67 20.3 21.67 21 21C21.7 20.33 21.67 19.2 21 18.5C20.57 18.09 20 17.93 19.44 18.03L17.1 15.69C17.59 15.04 17.97 14.3 18.21 13.5H19.32ZM10 11.5C9.17002 11.5 8.50002 10.83 8.50002 10C8.50002 9.17 9.17002 8.5 10 8.5C10.83 8.5 11.5 9.17 11.5 10C11.5 10.83 10.83 11.5 10 11.5ZM13.5 14.5C12.95 14.5 12.5 14.05 12.5 13.5C12.5 12.95 12.95 12.5 13.5 12.5C14.05 12.5 14.5 12.95 14.5 13.5C14.5 14.05 14.05 14.5 13.5 14.5Z" fill="#D62522"/>
                                 </svg>
                                 Jumlah Kasus Disekitar Anda 
                              </h3>
                           </li>
                           <li class="list-group-item get-lokasi mb-2 text-info-rs pb-0 pt-2"> <span id="radius-text">Radius : </span> <button type="button" class="btn btn-sm btn-warning warning1 ml-lg-2 mb-2 radius aktif" data-radius="0.5">500 M</button> <button type="button" class="btn btn-sm btn-warning warning1 ml-lg-2 mb-2 radius" data-radius="1">1 KM</button> <button type="button" class="btn btn-sm btn-warning warning1 ml-lg-2 mb-2 radius" data-radius="2">2 KM</button> <button type="button" class="btn btn-sm btn-warning warning1 ml-lg-2 mb-2 radius" data-radius="3">3 KM</button> </li>
                           <li class="list-group-item get-lokasi">
                              <p class="text-info font-12"><b>Hasil Pencarian:</b> Berikut data ODP, PDP dan Positif COVID-19 dalam radius <span id="jarak">500 M</span></p>
                           </li>
                           <li class="list-group-item get-lokasi bg-gray font-18"> <i class="fa fa fa-circle fc-red"></i> Positif COVID-19 <span class="float-right fc-red" id="near_covid">0</span> </li>
                           <li class="list-group-item get-lokasi font-18"> <i class="fa fa fa-circle fc-orange"></i> PDP <span class="float-right fc-orange" id="near_pdp">0</span> </li>
                           <li class="list-group-item get-lokasi bg-gray font-18"> <i class="fa fa fa-circle fc-ungu"></i> ODP <span class="float-right fc-ungu" id="near_odp">0</span> </li>
                           <li class="list-group-item text-center font-weight-bold bg-gray error-lokasi">
                              <h5 class="font-haeder">Lokasi tidak ditemukan</h5>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <small class="col-lg-12 col-md-12 col-sm-12 float-left ml-3 mr-3"><i>Catatan : Jarak Anda dengan kasus Covid-19 di atas adalah berdasarkan titik tengah kelurahan/desa domisili pasien yang sudah tercatat dan ditangani.</i></small> 
                  <div class="col-lg-8 col-md-8 col-sm-8 mb-4 mt-4 text-center p-2 mr-3 ml-3">
                     <p class="text-danger">Tetap waspada jaga kesehatan, jaga kebersihan, dan jaga jarak.<br /> Jauhi kerumunan jika tidak ada keperluan mendesak <b>#bersamamelawancorona</b></p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="section pt-0 position-relative">
         <div class="container-fluid pl-lg-5 pr-lg-5 pl-md-3 pr-md-3 pl-sm-2 pr-sm-2">
            <div class="rounded-15 shadow gradient-deteksi margin-top-2">
               <div class="row justify-content-center">
                  <div class="col-md-10 text-center">
                     <h3 class="font-hotline font-weight-bold p-5 text-white">Cek Kondisi Anda : <br /> Deteksi Mandiri Cepat <span class="corona-text text-white"> COVID-19 </span></h3>
                     <p class="text-detail pl-5 pr-5 pb-5 mb-4 text-white">Deteksi Mandiri Cepat COVID-19 adalah salah satu cara untuk mengetahi apakah Anda memiliki gejala yang memerlukan pemeriksaan dan pengujian lebih lanjut mengenai COVID-19 atau tidak.</p>
                  </div>
                  <div class="col-lg-5 col-md-5 col-sm-6 text-center mr-2 ml-2 pb-lg-2"> <a class="btn btn-default bg-white btn-lg mt-2 mb-4 btn-block p-3 rounded-8 fc-red font-weight-bold" target="_blank" href="https://corona.jatengprov.go.id/screening">Deteksi Dini Sekarang</a> </div>
               </div>
            </div>
         </div>
      </section>
      <section class="section pt-0 position-relative">
         <div class="container-fluid pl-lg-5 pr-lg-5 pl-md-3 pr-md-3 pl-sm-2 pr-sm-2">
            <div class="rounded-15 shadow bg-red-section">
               <div class="row justify-content-center">
                  <div class="col-lg-7 col-md-12 mb-12 text-center p-5">
                     <h3 class="font-hotline font-weight-bold p-3 text-white">Apa Yang Harus Dilakukan?</h3>
                  </div>
               </div>
               <div class="row justify-content-center mr-lg-5 mr-sm-5 ml-lg-5 ml-sm-5">
                  <div class="col-lg-12 col-md-12 col-sm-12 mb-5 mr-3 ml-3">
                     <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item"> <a class="nav-link text-center text-detail active" id="pills-penanganan-tab" data-toggle="pill" href="#pills-penanganan" role="tab" aria-controls="pills-penanganan" aria-selected="true">Pencegahan</a> </li>
                        <li class="nav-item"> <a class="nav-link text-center text-detail" id="pills-pencegahan-tab" data-toggle="pill" href="#pills-pencegahan" role="tab" aria-controls="pills-profile" aria-selected="false">Penanganan</a> </li>
                     </ul>
                     <div class="tab-content bg-white shadow" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-penanganan" role="tabpanel" aria-labelledby="pills-penanganan-tab">
                           <h3 class="text-center text-title pt-5 mb-4">Ayo Lindungi diri dari <span class="corona-text">COVID-19</span></h3>
                           <div class="row">
                              <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                 <img width="170" height="170" class="rounded-circle mx-auto d-block" src="https://corona.jatengprov.go.id/assets/images/website/pic_batuk.png" /> 
                                 <p class="text-detail text-center p-3"> Terapkan etika batuk atau bersin (dengan menutup mulut dan hidung), dan jangan meludah sembarangan </p>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                 <img width="170" height="170" class="rounded-circle mx-auto d-block" src="https://corona.jatengprov.go.id/assets/images/website/hp_bersih.png" /> 
                                 <p class="text-detail text-center p-3"> Bersihkan benda yang sering disentuh </p>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                 <img width="170" height="170" class="rounded-circle mx-auto d-block" src="https://corona.jatengprov.go.id/assets/images/website/masker.png" /> 
                                 <p class="text-detail text-center p-3"> Gunakan masker jika Anda sakit dan segera periksakan diri ke fasilitas kesehatan terdekat </p>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                 <img width="170" height="170" class="rounded-circle mx-auto d-block" src="https://corona.jatengprov.go.id/assets/images/website/cuci_tangan.png" /> 
                                 <p class="text-detail pt-1 text-center p-3"> Cuci tangan dengan sabun </p>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                 <img width="170" height="170" class="rounded-circle mx-auto d-block" src="https://corona.jatengprov.go.id/assets/images/website/ngucek.png" /> 
                                 <p class="text-detail text-center p-3"> Hindari menyentuh mata, hidung, dan mulut dengan tangan yang belum dicuci </p>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                 <img width="170" height="170" class="rounded-circle mx-auto d-block" src="https://corona.jatengprov.go.id/assets/images/website/olahraga.png" /> 
                                 <p class="text-detail text-center p-3"> Konsumsi makanan bergizi dan berolahraga </p>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade text-center" id="pills-pencegahan" role="tabpanel" aria-labelledby="pills-pencegahan-tab">
                           <img class="img-responsive mt-3" width="248" height="248" src="https://corona.jatengprov.go.id/assets/images/website/covid.png" /> 
                           <h3 class="text-center text-title pt-3 mb-4 font-header">Bagaimana Gejala <span class="corona-text">COVID-19</span>?</h3>
                           <p class="text-detail text-center mr-2 ml-2 font-content">Orang yang terinfeksi memiliki gejala seperti demam, batuk, dan kesulitan bernafas. <br /> Gejala dapat berkembang menjadi pneumonia berat.</p>
                           <h3 class="text-center text-title pt-5 mb-4 font-haeder">Lakukan Hal Berikut <br /> Jika Anda Mengalami Gejala Mirip <span class="corona-text">COVID-19</span> :</h3>
                           <div class="col-md-10 col-sm-11 offset-lg-1 pb-3">
                              <ul class="list-unstyled">
                                 <li class="pb-3 text-detail text-justify"><i class="fa fa-check fc-green pr-3"></i>Hubungi nomor layanan COVID-19 di (024) 3580713 atau 082313600560 untuk mendapatkan penanganan</li>
                                 <li class="pb-3 text-detail text-justify"><i class="fa fa-check fc-green pr-3"></i>Kenakan masker dan ganti secara berkala, agar tidak menular ke orang lain</li>
                                 <li class="pb-3 text-detail text-justify"><i class="fa fa-check fc-green pr-3"></i>Tinggal di dalam rumah dan jaga jarak dengan orang lain</li>
                                 <li class="pb-3 text-detail text-justify font-17"><i class="fa fa-check fc-green pr-3"></i>Minta bantuan teman, anggota keluarga, atau layanan jasa lain untuk menyelesaikan urusan di luar rumah</li>
                                 <li class="pb-3 text-detail text-justify"><i class="fa fa-check fc-green pr-3"></i>Lakukan semua poin diatas selama 14 hari untuk membantu mengurangi penyebaran virus</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="section pt-0 position-relative">
         <div class="container-fluid pl-lg-5 pr-lg-5 pl-md-3 pr-md-3 pl-sm-2 pr-sm-2">
            <div class="rounded-15 shadow bg-white">
               <div class="row justify-content-center">
                  <div class="col-lg-7 col-md-12 text-center mb-3">
                     <h3 class="font-hotline font-weight-bold p-4">Video Masyarakat <br /><span class="text-success">#BersamaLawanCorona</span></h3>
                  </div>
               </div>
               <div class="row justify-content-center">
                  <div class="col-lg-12 col-md-12 col-sm-12 mb-4">
                     <div class="owl-carousel owl-theme text-center video-slide">
                        <div class="item-video shadow-1">
                           <div class="embed-responsive embed-responsive-16by9"> <iframe src="https://www.youtube.com/embed/HrHaorgq7_0" allowfullscreen></iframe> </div>
                           <div class="post-title text-center">
                              <h3>Tips Work From Home</h3>
                           </div>
                        </div>
                        <div class="item-video shadow-1">
                           <div class="embed-responsive embed-responsive-16by9"> <iframe src="https://www.youtube.com/embed/GxKfQ0KqLHU" allowfullscreen></iframe> </div>
                           <div class="post-title text-center">
                              <h3>Cari Kerja di Tengah Pandemi</h3>
                           </div>
                        </div>
                        <div class="item-video shadow-1">
                           <div class="embed-responsive embed-responsive-16by9"> <iframe src="https://www.youtube.com/embed/fWVxJHxy9X4" allowfullscreen></iframe> </div>
                           <div class="post-title text-center">
                              <h3>Gejala Corona Beneran atau Nggak?</h3>
                           </div>
                        </div>
                        <div class="item-video shadow-1">
                           <div class="embed-responsive embed-responsive-16by9"> <iframe src="https://www.youtube.com/embed/3apsk7aOv7s" allowfullscreen></iframe> </div>
                           <div class="post-title text-center">
                              <h3>Membuka dan Membuang Masker yang Benar</h3>
                           </div>
                        </div>
                        <div class="item-video shadow-1">
                           <div class="embed-responsive embed-responsive-16by9"> <iframe src="https://www.youtube.com/embed/Jg6pBZhxo2g" allowfullscreen></iframe> </div>
                           <div class="post-title text-center">
                              <h3>Aksi Jogo Tonggo Warga Boyolali</h3>
                           </div>
                        </div>
                        <div class="item-video shadow-1">
                           <div class="embed-responsive embed-responsive-16by9"> <iframe src="https://www.youtube.com/embed/oQOGJjysEaY" allowfullscreen></iframe> </div>
                           <div class="post-title text-center">
                              <h3>Jogo Tonggo Manisrenggo Klaten</h3>
                           </div>
                        </div>
                        <div class="item-video shadow-1">
                           <div class="embed-responsive embed-responsive-16by9"> <iframe src="https://www.youtube.com/embed/3EXJlrVdspo" allowfullscreen></iframe> </div>
                           <div class="post-title text-center">
                              <h3>Jogo Tonggo Banyuurip Boyolali</h3>
                           </div>
                        </div>
                        <div class="item-video shadow-1">
                           <div class="embed-responsive embed-responsive-16by9"> <iframe src="https://www.youtube.com/embed/Q6u008HeXxs" allowfullscreen></iframe> </div>
                           <div class="post-title text-center">
                              <h3>Memutus Rantai Covid-19</h3>
                           </div>
                        </div>
                        <div class="item-video shadow-1">
                           <div class="embed-responsive embed-responsive-16by9"> <iframe src="https://www.youtube.com/embed/bsz5hgKTyvY" allowfullscreen></iframe> </div>
                           <div class="post-title text-center">
                              <h3>Terima Kasih Tenaga Medis</h3>
                           </div>
                        </div>
                        <div class="item-video shadow-1">
                           <div class="embed-responsive embed-responsive-16by9"> <iframe src="https://www.youtube.com/embed/oWGzJUoBQn4" allowfullscreen></iframe> </div>
                           <div class="post-title text-center">
                              <h3>Masker Mencegah Virus Corona</h3>
                           </div>
                        </div>
                        <div class="item-video shadow-1">
                           <div class="embed-responsive embed-responsive-16by9"> <iframe src="https://www.youtube.com/embed/ciRwAED2mVs" allowfullscreen></iframe> </div>
                           <div class="post-title text-center">
                              <h3>Kenal dengan Corona Virus</h3>
                           </div>
                        </div>
                        <div class="item-video shadow-1">
                           <div class="embed-responsive embed-responsive-16by9"> <iframe src="https://www.youtube.com/embed/UcxAziqyL78" allowfullscreen></iframe> </div>
                           <div class="post-title text-center">
                              <h3>Bagaimana Isolasi Mandiri?</h3>
                           </div>
                        </div>
                        <div class="item-video shadow-1">
                           <div class="embed-responsive embed-responsive-16by9"> <iframe src="https://www.youtube.com/embed/VTe_BPF0kh4" allowfullscreen></iframe> </div>
                           <div class="post-title text-center">
                              <h3>Membuat Masker Kain ala Lista Tsurayya</h3>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--<div class="row justify-content-center mr-lg-5 mr-sm-5 ml-lg-5 ml-sm-5"> <div class="col-lg-4 col-md-6 col-sm-10 col-10 text-center p-3 mr-2 ml-2"> <a href="https://corona.jatengprov.go.id/video-masyarakat" class="btn btn-outline-danger btn-block p-3 rounded-8">Lihat Video Lainnya</a> </div> </div> --> 
            </div>
         </div>
      </section>
      <section class="section pt-0 position-relative">
         <div class="container-fluid pl-lg-5 pr-lg-5 pl-md-3 pr-md-3 pl-sm-2 pr-sm-2">
            <ul class="nav nav-tabs" id="infografisTab" role="tablist">
               <li class="nav-item"> <a class="nav-link text-center text-detail active" id="pills-info-tab" data-toggle="pill" href="#pills-info" role="tab" aria-controls="pills-info" aria-selected="true">Infografis</a> </li>
               <li class="nav-item"> <a class="nav-link text-center text-detail" id="pills-hoax-tab" data-toggle="pill" href="#pills-hoax" role="tab" aria-controls="pills-hoax" aria-selected="false">Saber Hoax</a> </li>
            </ul>
            <div class="tab-content bg-white">
               <div class="tab-pane fade show active text-center" id="pills-info" role="tabpanel" aria-labelledby="pills-info-tab">
                  <div class="rounded-15 shadow bg-white">
                     <div class="row justify-content-center">
                        <div class="col-lg-7 col-md-12 text-center mb-3">
                           <h3 class="font-hotline font-weight-bold p-3">Infografis</h3>
                        </div>
                     </div>
                     <div class="row justify-content-center">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                           <div class="owl-carousel owl-theme owl-img-responsive slider-img">
                              <div class="item"><a data-fancybox="gallery" data-caption="New Normal" href="https://admin.corona.jatengprov.go.id/gallery/321805356.jpeg"><img src="https://admin.corona.jatengprov.go.id/gallery/321805356.jpeg" alt="New Normal"></a></div>
                              <div class="item"><a data-fancybox="gallery" data-caption="Corona Dilawan dengan Cuci Tangan" href="https://admin.corona.jatengprov.go.id/gallery/561474155.jpeg"><img src="https://admin.corona.jatengprov.go.id/gallery/561474155.jpeg" alt="Corona Dilawan dengan Cuci Tangan"></a></div>
                              <div class="item"><a data-fancybox="gallery" data-caption="Hotline Bansos" href="https://admin.corona.jatengprov.go.id/gallery/79230656.jpeg"><img src="https://admin.corona.jatengprov.go.id/gallery/79230656.jpeg" alt="Hotline Bansos"></a></div>
                              <div class="item"><a data-fancybox="gallery" data-caption="Tetep Semangat" href="https://admin.corona.jatengprov.go.id/gallery/383749332.jpeg"><img src="https://admin.corona.jatengprov.go.id/gallery/383749332.jpeg" alt="Tetep Semangat"></a></div>
                              <div class="item"><a data-fancybox="gallery" data-caption="Silaturahmi ala Physical Distancing" href="https://admin.corona.jatengprov.go.id/gallery/679617970.jpeg"><img src="https://admin.corona.jatengprov.go.id/gallery/679617970.jpeg" alt="Silaturahmi ala Physical Distancing"></a></div>
                           </div>
                        </div>
                     </div>
                     <div class="row justify-content-center mr-lg-5 mr-sm-5 ml-lg-5 ml-sm-5">
                        <div class="col-lg-4 col-md-6 col-sm-10 col-10 text-center p-3 mr-2 ml-2"> <a href="https://corona.jatengprov.go.id/infografis-dan-hoax" class="btn btn-outline-danger btn-block p-3 rounded-15">Lihat Infografis Lainnya</a> </div>
                     </div>
                  </div>
               </div>
               <div class="tab-pane fade text-center" id="pills-hoax" role="tabpanel" aria-labelledby="pills-hoax-tab">
                  <div class="rounded-15 shadow bg-white">
                     <div class="row justify-content-center">
                        <div class="col-lg-7 col-md-12 text-center mb-3">
                           <h3 class="font-hotline font-weight-bold p-3">Saber Hoax</h3>
                        </div>
                     </div>
                     <div class="row justify-content-center">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                           <div class="owl-carousel owl-theme owl-img-responsive slider-img">
                              <div class="item"><a data-fancybox="Hoax" data-caption="Penjahat Serentak di Solo" href="https://admin.corona.jatengprov.go.id/gallery/987024813.jpeg"><img src="https://admin.corona.jatengprov.go.id/gallery/987024813.jpeg" alt="Penjahat Serentak di Solo"></a></div>
                              <div class="item"><a data-fancybox="Hoax" data-caption="Rokok Terpapar Corona" href="https://admin.corona.jatengprov.go.id/gallery/358490579.jpeg"><img src="https://admin.corona.jatengprov.go.id/gallery/358490579.jpeg" alt="Rokok Terpapar Corona"></a></div>
                              <div class="item"><a data-fancybox="Hoax" data-caption="Arab Saudi Selesai Lockdown" href="https://admin.corona.jatengprov.go.id/gallery/517108097.jpeg"><img src="https://admin.corona.jatengprov.go.id/gallery/517108097.jpeg" alt="Arab Saudi Selesai Lockdown"></a></div>
                              <div class="item"><a data-fancybox="Hoax" data-caption="Nomor Bantuan Kemensos" href="https://admin.corona.jatengprov.go.id/gallery/409104748.jpeg"><img src="https://admin.corona.jatengprov.go.id/gallery/409104748.jpeg" alt="Nomor Bantuan Kemensos"></a></div>
                              <div class="item"><a data-fancybox="Hoax" data-caption="Pertolongan Emergency Covid" href="https://admin.corona.jatengprov.go.id/gallery/942953269.jpeg"><img src="https://admin.corona.jatengprov.go.id/gallery/942953269.jpeg" alt="Pertolongan Emergency Covid"></a></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="section pt-0 berita">
         <div class="container-fluid pl-lg-5 pr-lg-5 pl-md-3 pr-md-3 pl-sm-2 pr-sm-2">
         <div class="rounded-15 shadow bg-white">
         <div class="row justify-content-center">
            <div class="col-lg-7 col-md-12 text-center p-4">
               <h3 class="font-hotline font-weight-bold">Berita <span class="text-danger">Jateng</span></h3>
            </div>
         </div>
         <div class="row justify-content-center m-lg-3 m-1">
            <div class="col-md-12">
               <article class="featured">
                  <!-- Image --> 
                  <div class="image"> <a href="https://corona.jatengprov.go.id/berita-detail/58"><img src="https://admin.corona.jatengprov.go.id/images/619363369.png" alt="Cek Kesiapan New Normal di Jateng, Ganjar Datangi Kantor Samsat dan Pelayanan Terpadu"></a> </div>
                  <div class="content">
                     <h2><a href="https://corona.jatengprov.go.id/berita-detail/58">Cek Kesiapan New Normal di Jateng, Ganjar Datangi Kantor Samsat dan Pelayanan Terpadu</a></h2>
                     <ul class="list-inline post-tag">
                        <li class="list-inline-item"> <img src="https://corona.jatengprov.go.id/assets/images/logo.png" alt="author"> </li>
                        <li class="list-inline-item font-14"> <a href="#">Admin</a> </li>
                        <li class="list-inline-item font-14"> Kamis, 28 Mei 2020 | 12:16 </li>
                     </ul>
                     <p> 
                     <p>Gubernur Jawa Tengah, Ganjar Pranowo, melakukan pengecekan di kantor Samsat Kota Semarang, Rabu (27/5/2020), terkait rencana penerapan new normal oleh pemerintah pusat.</p>
                     <p><br></p>
                     <p>Dalam video... </p>
                  </div>
               </article>
               <article class="featured">
                  <!-- Image --> 
                  <div class="image"> <a href="https://corona.jatengprov.go.id/berita-detail/57"><img src="https://admin.corona.jatengprov.go.id/images/232575690.jpg" alt="Ganjar Kontrol Persiapan Penerapan Normal Baru"></a> </div>
                  <div class="content">
                     <h2><a href="https://corona.jatengprov.go.id/berita-detail/57">Ganjar Kontrol Persiapan Penerapan Normal Baru</a></h2>
                     <ul class="list-inline post-tag">
                        <li class="list-inline-item"> <img src="https://corona.jatengprov.go.id/assets/images/logo.png" alt="author"> </li>
                        <li class="list-inline-item font-14"> <a href="#">Admin</a> </li>
                        <li class="list-inline-item font-14"> Kamis, 28 Mei 2020 | 12:11 </li>
                     </ul>
                     <p> 
                     <p>Gubernur Jawa Tengah, Ganjar Pranowo kembali berkeliling ke tempat-tempat publik dalam rangka persiapan penerapan normal baru.&nbsp; Di gereja Katedral, Ganjar melihat belum ada persiapan khusus ka... </p>
                  </div>
               </article>
               <article class="featured">
               <!-- Image --> 
               <div class="image"> <a href="https://corona.jatengprov.go.id/berita-detail/56"><img src="https://admin.corona.jatengprov.go.id/images/363426184.jpg" alt="Ganjar Pranowo : Jangan Nekat Kembali ke ke Jakarta"></a> </div>
               <div class="content">
                  <h2><a href="https://corona.jatengprov.go.id/berita-detail/56">Ganjar Pranowo : Jangan Nekat Kembali ke ke Jakarta</a></h2>
                  <ul class="list-inline post-tag">
                     <li class="list-inline-item"> <img src="https://corona.jatengprov.go.id/assets/images/logo.png" alt="author"> </li>
                     <li class="list-inline-item font-14"> <a href="#">Admin</a> </li>
                     <li class="list-inline-item font-14"> Kamis, 28 Mei 2020 | 12:08 </li>
                  </ul>
                  <p> 
                  <p style="margin: 1em 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: medium; line-height: 22px; font-family: Roboto;"> </p> </div> </article> </div> </div> <div class="row justify-content-center mr-lg-5 mr-sm-5 ml-lg-5 ml-sm-5"> 
                  <div class="col-lg-4 col-md-6 col-sm-10 col-10 text-center p-3 mr-2 ml-2"> <a href="https://corona.jatengprov.go.id/berita" class="btn btn-outline-danger btn-block p-3 rounded-8">Lihat Berita Lainnya</a> </div>
               </div>
            </div>
         </div>
      </section>
      <footer>
         <div class="footer-main">
            <div class="container-fluid pl-lg-5 pr-lg-5 pl-md-3 pr-md-3 pl-sm-2 pr-sm-2">
               <div class="row">
                  <div class="col-lg-8 col-md-12 m-md-auto align-self-center">
                     <div class="block">
                        <h3 class="text-white font-weight-bold font-phone"><a href="#"><img width="36" height="36" src="https://corona.jatengprov.go.id/assets/images/logo.png" alt="footer-logo" class="mt-2 mr-2"> Pemerintah Provinsi Jawa Tengah</h3>
                        </a> 
                        <p class="text-white">Jl. Pahlawan No.9, Mugassari, Kec. Semarang Sel.,<br />Kota Semarang, Jawa Tengah 50249</p>
                        <ul class="social-icon list-inline pt-2">
                           <li class="list-inline-item"> <a href="https://www.facebook.com/Dinas-Kesehatan-Prov-Jateng-561985847631175/"><i class="ti-facebook"></i></a> </li>
                           <li class="list-inline-item"> <a href="https://twitter.com/dinkesjateng"><i class="ti-twitter"></i></a> </li>
                           <li class="list-inline-item"> <a href="https://www.instagram.com/dinkesjateng_prov/"><i class="ti-instagram"></i></a> </li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-2 col-md-6 col-sm-6 col-12 m-md-auto align-self-center">
                     <div class="block-2">
                        <ul>
                           <li><a target="_blank" href="https://jatengprov.go.id/">Portal Jateng</a></li>
                           <li><a target="_blank" href="https://covid19.kemkes.go.id/">Kemenkes</a></li>
                           <li><a target="_blank" href="https://covid19.kemkes.go.id/situasi-infeksi-emerging/info-corona-virus/tanya-jawab-novel-coronavirus-2019-ncov-faq-update-4-februari-2020/#.XmzSNagzZPZ">Info Corona</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                     <div class="block-2">
                        <ul>
                           <li><a target="_blank" href="https://dinkesjatengprov.go.id/v2018/5-protokol-utama-penanganan-covid-19/">Protocol Penanganan COVID-19</a></li>
                           <li><a target="_blank" href="https://laporgub.jatengprov.go.id/">LaporGub</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="text-center bg-black py-2"> <small class="text-secondary">© Copyright Pemerintah Provinsi Jawa Tengah. All Rights Reserved</small> </div>
      </footer>
      <a id="back-to-top" href="#" class="btn btn-danger back-to-top" role="button"><i class="fa fa-2x fa-chevron-up"></i></a> <!-- Global site tag (gtag.js) - Google Analytics --> <script async src="https://www.googletagmanager.com/gtag/js?id=UA-160611489-1"></script> <script> window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments); } gtag('js', new Date()); gtag('config', 'UA-160611489-1'); </script> 
   </body>
</html>
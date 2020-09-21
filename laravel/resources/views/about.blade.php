@extends('layouts.defaults')
@section('content')
<style>
    body {font-family: Arial, Helvetica, sans-serif;}

    #myImg {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
    }

    #myImg:hover {opacity: 0.7;}

    /* The Modal (background) */
    .modal1 {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
    }

    /* Modal Content (image) */
    .modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    }

    /* Caption of Modal Image */
    #caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 150px;
    }

    /* Add Animation */
    .modal-content, #caption {  
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s;
    }

    @-webkit-keyframes zoom {
    from {-webkit-transform:scale(0)} 
    to {-webkit-transform:scale(1)}
    }

    @keyframes zoom {
    from {transform:scale(0)} 
    to {transform:scale(1)}
    }

    /* The Close Button */
    .close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
    }

    .close:hover,
    .close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
    }

    /* 100% Image Width on Smaller Screens */
    @media only screen and (max-width: 700px){
    .modal-content {
        width: 100%;
    }
    }
</style>
<!-- The Modal -->
<div id="myModal" class="modal1">
  <span onclick="myfunc()" class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>
    <div class="content">
        <div class="row">
            <div class="col-12">
                <div class="card card-chart">
                    <div class="card-header ">
                        <div class="row">
                            <div class="col-sm-6 text-left">
                                <h2 class="card-title"><b>Tentang Aplikasi</b></h2>
                            </div>
                        </div>                
                    </div>
                    <div class="card-header">
                        <div class="row">
                            <div class="col-sm-8 text-left">
                                <h4 class="card-title">
                                    <p>
                                        Aplikasi MOBAN (Monitoring Debit banjir & Curah Hujan) merupakan aplikasi 
                                        yang dapat memantau Debit sungai dan Curah Hujan. Kedua hal ini merupakan parameter penting
                                        pada mitigasi bencana baik itu banjir maupun tanah longsor. 
                                    </p>
                                    <br>
                                    <p>
                                        Tak dapat dipungkiri,
                                        kurangnya informasi mengenai mitigasi bencana menjadi faktor penting dalam peringatan dini terhadap  
                                        potensi bencana yang akan terjadi dan dalam waktu singkat. Aplikasi ini menjadi salah satu solusi
                                        guna mengurangi kerugian maupun korban. Informasi yang diberikan berupa data realtime disampaikan  
                                        melalui infografis yang menarik dan mudah dipahami
                                    </p>
                                </h4>
                            </div>      
                            <div class="col-sm-4 text-center">
                                <img style="width:200px;height:200px;" src="{{ URL::asset('img/logo-moban-white.png') }}" alt="logo">
                                <img src="{{ URL::asset('img/tulisan.png') }}" alt="logo"><br><br>
                            </div>
                        </div>                
                    </div>
                </div>

                <div class="card card-chart">
                    <div class="card-header ">
                        <div class="row">
                            <div class="col-sm-6 text-left">
                                <h2 class="card-title"><b>Dapatkan Notifikasi</b></h2>
                            </div>
                        </div>                
                    </div>
                    <div class="card-header">
                        <div class="row">
                            <div class="col-sm-8 text-left">
                                <h4 class="card-title">
                                    <p>
                                    Dapatkan Notifikasi pada Gawai anda setiap kali potensi bencana datang. Unduh Aplikasi Moban-Android
                                    pada Google Play Store dengan memasukkan kata kunci Moban Android. 
                                    </p>
                                    <br>
                                    <p>
                                    Setelah terunduh, aktifkan Notifikasi pada Aplikasi dalam menu Setting. Notifikasi berupa pesan dan
                                    nada akan muncul otomatis ketika potensi bencana datang.
                                    </p>
                                </h4>
                            </div>      
                            <div class="col-sm-4 text-center">
                                <img src="{{ URL::asset('img/mobanphone.png') }}" alt="mobanphone"><br><br>
                            </div>
                        </div>                
                    </div>
                </div>

                <div class="card card-chart">
                    <div class="card-header ">
                        <div class="row">
                            <div class="col-sm-6 text-left">
                            <h2 class="card-title"><b>Cara Kerja Alat</b></h2>
                            </div>
                        </div>                
                    </div>
                    <div class="card-header ">
                        <div class="row">
                            <div class="col-sm-6 text-left">
                                <h4 class="card-title">
                                    <p>Proses simulasi penghitungan adalah seperti gambar disamping. </p><br>
                                    <p>
                                        Box diibaratkan sebagai pintu air 
                                        pada sungai. Kran keluaran menjadi pintu air yang dapat diatur besar kecilnya aliran yang keluar.
                                        Kemudian air dari shower/sprayer diibaratkan turunnya hujan. Hujan yang diatur curah hujannya dapat diatur
                                        melalui kran pengatur pada bagian atas.
                                    </p> <br>
                                    <p>
                                        Air dipompa untuk dapat naik melalui pipa, kemudian keluar melalui sprayer. 
                                        Air yang keluar dari sprayer diibaratkan proses terjadinya hujan yang mana akan dibaca oleh Rain Gauge Sensor. Kemudian Tinggi air dihitung
                                        menggunakan Ultrasonic sensor, dari tinggi ini kemudian diolah untuk didapatkan nilai debit air yang
                                        berada pada box.
                                    </p>
                                    <br>
                                    <p>
                                        
                                    </p>
                                </h4>
                            </div>      
                            <div class="col-sm-6 text-center">
                                <img id="myImg" src="{{ URL::asset('img/moban2.gif') }}" alt="Cara Kerja Alat"><br>
                                Klik untuk lihat lebih jelas<br><br>
                            </div>
                        </div>                
                    </div>
                </div>
                

                <div class="card card-chart">
                    <div class="card-header ">
                        <div class="row">
                            <div class="col-sm-6 text-left">
                            <h2 class="card-title"><b>Team</b></h2>
                            </div>
                        </div>                
                    </div>
                    <div class="card-header ">
                        <div class="row">
                            <div class="col-sm-8 text-left">
                                <h4 class="card-title">
                                    <p>
                                        Sistem ini dibuat dalam rangka menyelesaikan Tugas Akhir Program Studi Teknik Informatika
                                        Jurusan Teknik Elektro Politeknik Negeri Semarang.
                                    </p>
                                    <br>
                                    <p>
                                        
                                    </p>
                                </h4>
                            </div>      
                            <div class="col-sm-4 text-center">
                                <img style="width:200px;height:200px;" src="{{ URL::asset('img/logo-moban-white.png') }}" alt="logo">
                                <img src="{{ URL::asset('img/tulisan.png') }}" alt="logo">
                            </div>
                        </div>                
                    </div>
                </div>


            </div>
        </div>
    </div>
<script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementById("myImg");
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");
    img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
    }

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() { 
        modal.style.display = "none";
    }
    function myfunc(){
        document.getElementById("myModal").style.display="none";
    }
</script>
@endsection
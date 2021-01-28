@extends('layouts.defaults')
@section('content')
<script src="{{ URL::asset('js/feedback.js') }} "></script>
    <div class="content">
        <div class="row">
            <div class="col-12">
                <div id="alertberhasil" class="alert alert-info" style="display:none;">
                  <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                    <i class="tim-icons icon-simple-remove"></i>
                  </button>
                  <span>Berhasil Mengirim Feedback!</span>
                </div>
            <div class="card card-chart">
                <div class="card-header ">
                    <div class="row">
                        <div class="col-sm-10 text-left">
                        <h2 class="card-title"><b>Saran & Masukan</b></h2>
                            Beri saran & masukan mengenai Aplikasi Moban Baik Web maupun Android dengan mengisi Form berikut.
                        </div>
                    </div>                
                </div>
                <div class="card-header ">
                    <div class="row">
                        <div class="col-sm-10 text-left">
                            <input type="text" name="nama" class="form-control" id="idbos" placeholder="ID anda" style="display:none;">
                            <!-- <form id="addUser" method="POST" action=""> -->
                                <div class="form-group">
                                    <label for="InputName">Nama :</label>
                                    <input type="text" name="nama" class="form-control" id="InputName" placeholder="Masukkan Nama Anda">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Alamat Email :</label>
                                    <input type="email" name="email"class="form-control" id="InputEmail" aria-describedby="emailHelp" placeholder="Enter email">
                                    <small id="emailHelp" class="form-text text-muted">Alamat Email tidak akan disebarluaskan.</small>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Jenis Aplikasi :</label>
                                    <select class="form-control" name="jenis" id="jenis">
                                        <option class="text-dark">Monitoring Web</option>
                                        <option class="text-dark">Monitoring Android</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Saran & Masukan :</label>
                                    <textarea class="form-control" name="saran" id="saran" rows="4" maxlength="200"></textarea>
                                </div>
                                <button id="submitUser" onclick="btnkirim()" type="submit" class="btn btn-sm btn-info btn-simple">Kirim</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   
@endsection
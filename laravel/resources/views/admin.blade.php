@extends('layouts.defaults')
@section('content')
<script src="{{ URL::asset('js/auth.js') }} "></script>
<script src="{{ URL::asset('js/admin.js') }} "></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script> 
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"> defer</script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

<script src="https://cdn.jsdelivr.net/gh/linways/table-to-excel@v1.0.4/dist/tableToExcel.js"></script>

<script>
firebase.auth().onAuthStateChanged(function(user) {
  if (!user){
    alert('Anda mencoba masuk tanpa login. Silahkan Login Dahulu!');
    window.location.replace("./");
    
    /// Kalau belum login langsung disuruh balek login lagi
  }
});
</script>
    <div class="content">
        <div class="row">
          <div class="col-12">
            <div class="alert alert-info">
              <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                <i class="tim-icons icon-simple-remove"></i>
              </button>
              <span>Halo Selamat Datang Admin!</span>
            </div>
            <div id="alertberhasil" class="alert alert-danger" style="display:none;">
              <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                <i class="tim-icons icon-simple-remove"></i>
              </button>
              <span>Berhasil Edit Setting!</span>
            </div>
                <div class="card card-chart">
                    <div class="card-header ">
                        <div class="row">
                            <div class="col-sm-6 text-left">
                              <h2 class="card-title"><b>Moban Admin Page</b></h2>
                              <h4 class="card-title">
                                Setting yang digunakan pada Arduino :
                              </h4>
                            </div>
                            <div class="col-sm-6">
                            <!-- data-toggle="modal" data-target="#exampleModal2" -->
                              <button id="btn1" onClick="opensetting()" class="btn btn-sm btn-info btn-simple float-right">Edit Setting</button>
                              <button id="btn2" onClick="canceledit()" class="btn btn-sm btn-info btn-simple float-right">Batal</button>
                              <button id="btn3" onClick="updateUser()" class="btn btn-sm btn-info btn-simple float-right">Simpan</button>
                              <script>document.getElementById('btn2').style.display = "none";</script>
                              <script>document.getElementById('btn3').style.display = "none";</script>
                            </div>
                        </div>
                    </div>
                    <div class="card-header ">
                        <div class="row">
                            <div class="col-sm text-left">
                                <div class="card-body">
                                  <div class="table-responsive">
                                  <form id="formupdate" method="POST" class="form horizontal" action="">
                                    <table class="table tablesorter bg-dark" id="">
                                      <thead class=" text-primary bg-info">
                                        <tr>
                                          <th>
                                            Name
                                          </th>
                                          <th>
                                            Value
                                          </th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td>
                                            Tinggi Sensor
                                          </td>
                                          <td>
                                            <!-- <input type="text" id="tinggisp"> -->
                                            <input type="number" id="tinggiinp" width="10" disabled class="form-control" min=1 max=200>
                                            <!-- <span id="tinggisp"></span> -->
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>
                                            Lebar
                                          </td>
                                          <td>
                                            <!-- <span id="lebarsp"></span> -->
                                            <input type="number" id="lebarinp" disabled class="form-control" min=1 max=100>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>
                                            Panjang
                                          </td>
                                          <td>
                                            <!-- <span id="panjangsp"></span> -->
                                            <input type="number" id="panjanginp" disabled class="form-control" min=1 max=100>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>
                                            Delay
                                          </td>
                                          <td>
                                            <!-- <span id="delaysp"></span> -->
                                            <input type="number" id="delayinp" disabled class="form-control" min=1 max=100>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                    </form>
                                  </div>
                                </div>
                            </div>
                            <div class="col-sm text-left">
                                <div class="card-body">
                                  <div class="table-responsive">
                                    <table class="table tablesorter table-dark" id="settingtable">
                                      <thead class=" text-primary bg-info">
                                        <tr>
                                          <th>
                                            Name
                                          </th>
                                          <th>
                                            Value
                                          </th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td>
                                            Status 1
                                          </td>
                                          <td>
                                            <!-- <span id="stat1sp"></span> -->
                                            <input type="number" disabled id="stat1inp" class="form-control" min=1 max=100>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>
                                            Status 2
                                          </td>
                                          <td>
                                            <!-- <span id="stat2sp"></span> -->
                                            <input type="number" disabled id="stat2inp" class="form-control" min=1 max=100>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>
                                            Status 3
                                          </td>
                                          <td>
                                            <!-- <span id="stat3sp"></span> -->
                                            <input type="number" disabled id="stat3inp" class="form-control" min=1 max=100>
                                          </td>
                                        </tr>

                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                                
                                <div class="alert alert-info">
                                  <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                                    <i class="tim-icons icon-simple-remove"></i>
                                  </button>
                                  <span>Klik Edit Setting untuk mengubah</span>
                                </div>
                            </div>
                        </div>                
                    </div>
            </div>
          <div class="row">
            <div class="col-12">
              <div class="card ">
                  <div class="card-header">
                    <div class="row">
                      <div class="col-sm-6 text-left">
                        <h4 class="card-title"> Kritik Saran</h4>
                      </div>
                      <div class="col-sm-6">
                        <div class="input-group">
                          <select class="custom-select" id="inputGroupSelect04">
                            <option selected>Choose...</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                          <div class="input-group-append">
                            <button class="btn btn-sm btn-info btn-simple float-right" type="button">Button</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                    <table class="table tablesorter " id="sarantable">
                        <thead class=" text-primary">
                          <th>Tanggal</th>
                          <th>Jam</th>
                          <th>Nama</th>
                          <th>Email</th> 
                          <th>Jenis</th> 
                          <th style="width:30%">Saran</th> 
                        </thead>
                        <tbody id="saranbody">
                        </tbody>
                      </table> 
                    </div>
                  </div>
              </div>
            </div>
          </div>

          <div class="row" id="lengkap">
            <div class="col-lg-6 col-md-12">
              <div class="card ">
                <div class="card-header">
                  <div class="row">
                    <div class="col-sm-4 text-left">
                      <h4 class="card-title"> Debit Air Sungai</h4>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col text-left">
                    <table style="border:1px;">
                      <div class="form-group">
                      <tr>
                        <td>Dari: </td>
                        <td>
                          <input id="startdebit" class="form-control" max=<?php echo date('Y-m-d'); ?> value=<?php echo date('Y-m-d'); ?> type="date">
                        </td>
                      </tr>
                      <tr>
                        <td>Sampai: </td>
                        <td>
                          <input id="enddebit" class="form-control" max=<?php echo date('Y-m-d'); ?> value=<?php echo date('Y-m-d'); ?> type="date">
                        </td>
                        
                      </tr>
                      <tr>
                        <td></td>
                        <td><button class="btn btn-sm btn-info btn-simple float-right" onclick="debittampil()" type="button">Tampilkan</button></td>
                        <td><button class="btn btn-sm btn-info btn-simple float-right" onclick="exportF(4)" type="button">Cetak Data</button></td>
                      </tr>
                      </div>
                    </table>
                    
                      <div class="input-group">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                  <table class="table tablesorter debittable" id="debittable">
                      <thead class=" text-primary">
                        <tr>
                          <th>Nomor</th>
                          <th>Tanggal</th>
                          <th>Jam</th>
                          <th>Ketinggian</th>
                          <th>Debit</th> 
                        </tr>
                        
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
                  <div class="row">
                    <div class="col-sm-4 text-left">
                      <h4 class="card-title"> Curah Hujan</h4>
                    </div>                    
                  </div>
                  <div class="row">
                    <div class="col text-left">
                    <table style="border:1px;">
                      <div class="form-group">
                      <tr>
                        <td>Dari: </td>
                        <td>
                          <input id="starthujan" class="form-control" max=<?php echo date('Y-m-d'); ?> value=<?php echo date('Y-m-d'); ?> type="date">
                        </td>
                      </tr>
                      <tr>
                        <td>Sampai: </td>
                        <td>
                          <input id="endhujan" class="form-control" max=<?php echo date('Y-m-d'); ?> value=<?php echo date('Y-m-d'); ?> type="date">
                          </td>
                        <td><button class="btn btn-sm btn-info btn-simple float-right" onclick="hujantampil()" type="button">Tampilkan</button></td>
                      </tr>
                      </div>
                    </table>
                    
                      <div class="input-group">
                         
                      </div>
                    </div>
                    <!-- <div class="col-sm-4 text-left">
                      <div class="input-group">
                      Sampai:
                        <input class="custom-select" type="number" min="1" max="100">
                        <input class="custom-select" type="number" min="1" max="100">
                        <input class="custom-select" type="number" min="1" max="100">
                      </div>
                      <div class="input-group-append">
                          <button class="btn btn-sm btn-info btn-simple float-right" onclick="hujantampil()" type="button">Tampilkan</button>
                        </div>
                      <button class="btn btn-sm btn-info btn-simple float-right" onclick="exportF(4)" type="button">Cetak Data</button> -->
                      <!-- exportF(4) -->
                    <!-- </div> -->
                  </div>
                </div>
                <div class="card-body">
                  <div class="table-responsive">

                    <table class="table tablesorter " id="hujantable">
                      <thead class=" text-primary">
                      <tr>
                        <th>Nomor</th>
                        <th>Tanggal</th>
                        <th>Jam</th>
                        <th>Data Hujan</th>
                      </tr>
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
    
    
@endsection
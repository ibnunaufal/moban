@extends('layouts.defaults')
@section('content')
<script src="{{ URL::asset('js/mulaifirebase.js') }} "></script>
<script src="{{ URL::asset('js/auth.js') }} "></script>
      <div class="content">
        <div class="row"> 
          <div class="col-12">
            <div class="card card-chart">
              <div class="card-header ">
                <div class="row">
                  <div class="col-sm-6 text-left">
                    <h2 class="card-title"><b>Debit Air Sungai</b></h2>
                    <h4 class="card-title">Status : <span id="statusdebit">Data Belum Masuk</span> (<span id="lastdebit">-</span> m<sup>3</sup>/s)</h4>
                    <h4 class="card-title">Ketinggian : <span id="lasttinggi">-</span> m</h4>
                  </div>      
                  <div class="col-sm-6">
                  <button id="btn1" class="btn btn-sm btn-info btn-simple float-right">Lihat Detail Data</button>
                    
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
                    <h4 class="card-title">Klasifikasi Hujan : <span id="statushujan">Data Belum Masuk</span> (<span id="lasthujan">-</span> mm)</h4>
                  </div>      
                  <div class="col-sm-6">
                    <a href="#lengkap"><button class="btn btn-sm btn-info btn-simple float-right">Lihat Detail Data</button></a>
                    
                    <div class="btn-group btn-group-toggle float-right" data-toggle="buttons">
                      <label class="btn btn-sm btn-info btn-simple active" id="3">
                        <input type="radio" name="options" checked>
                        <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Harian</span>
                        <span class="d-block d-sm-none">
                          <!-- <i class="tim-icons icon-atom"></i> tim-icons icon-single-02 -->
                          Harian
                        </span>
                      </label>
                      <label class="btn btn-sm btn-info btn-simple" id="4">
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
      @endsection
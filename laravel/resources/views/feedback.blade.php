@extends('layouts.defaults')
@section('content')
<script src="{{ URL::asset('js/feedback.js') }} "></script>
    <div class="content">
        <div class="row">
            <div class="col-12">
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
                            <!-- </form>      -->
                            <button onclick="mulaifeedback()" class="btn btn-sm btn-info btn-simple">Kirim</button>
                        </div>      
                    </div>
                    <div class="row" style="height:10px;"></div>    
                                <select id="item1" name="Item 1">
      <option></option>
      <option value="1">Camera</option>
      <option value="2">Microphone</option>
      <option value="3">Tripod</option>
    </select>

    <button onclick="message()">Go!</button>  
                </div>
            </div>
            </div>
        </div>
    </div>
    <!-- <script>
        var configfb = {
            apiKey: "AIzaSyBrPMdssPaCUEl3mHZuHPpJ9UEubeVhK8M",
            authDomain: "bisa-b2497.firebaseapp.com",
            databaseURL: "https://bisa-b2497.firebaseio.com/",
            storageBucket: "bisa-b2497.appspot.com",
        };
        if (!firebase.apps.length) {
            firebase.initializeApp(configfb);
        }
        // Add Data
        $('#submitUser').on('click', function () {
            var values = $("#addUser").serializeArray();
            var nama = values[0].value;
            var email = values[1].value;
            var jenis = values[2].value;
            var saran = values[3].value;
            var saranID = lastIndex + 1;

            console.log(values);

            firebase.database().ref('Saran/' + saranID).set({
                name: nama,
                email: email,
                jenis: jenis,
                saran: saran,
            });

            // Reassign lastID value
            lastIndex = saranID;
            $("#addUser input").val("");
        });
    </script> -->
@endsection
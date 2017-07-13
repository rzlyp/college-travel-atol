@extends('petugas-dashboard') @section('content')

<div class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h3 class="title">Pembelian Tiket</h3>
            </div>
        </div>
    </div>
</div>


<div class="content">
    <div class="container-fluid">
        <div class="stepwizard col-md-12" style="margin-bottom: 48px">
            <div class="stepwizard col-md-offset-3 center">
                <div class="stepwizard-row setup-panel">
                     <div class="stepwizard-step">
                        <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                        <p>Data Pembeli</p>
                    </div>
                    <div class="stepwizard-step">
                        <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                        <p>Pilih Tujuan</p>
                    </div>
                    <div class="stepwizard-step">
                        <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                        <p>Review Tiket</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
            <!--<div class="stepwizard-row setup-panel">
                <div class="stepwizard-step">
                    <a href="#step-1" type="button" class="btn btn-dark-blue btn-circle">1</a>
                    <p>Data Pembeli</p>
                </div>
                <div class="stepwizard-step">
                    <a href="#step-2" type="button" class="btn btn-light-grey btn-circle" disabled="disabled">2</a>
                    <p>Pilih Tujuan</p>
                </div>
                <div class="stepwizard-step">
                    <a href="#step-3" type="button" class="btn btn-light-grey  btn-circle" disabled="disabled">3</a>
                    <p>Review Tiket</p>
                </div>
            </div>
        </div>
        -->
        
            <div class="row setup-content" id="step-1">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Nama Pembeli</label>
                        <input type="text" class="form-control" name="nama" id="f_nama" onChange="getNama(this)" required/>
                    </div>
                    <div class="form-group">
                        <label>Jumlah Tiket yang Dipesan</label>
                        <select class="form-control" id="f_jumlah" name="jumlah_tiket" onChange="getJumlah(this)">
                            <option>-- Jumlah --</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea class="form-control" cols="8" name="alamat" id="f_alamat" required="required" onChange="getAlamat(this)"></textarea>
                    </div>
                    <div class="form-group">
                        <label>No. HP yang Dapat Dihubungi</label>
                        <input type="number" class="form-control" name="hp" id="f_hp" required="required"/>
                    </div>
                    <button class="btn btn-primary nextBtn form-control " type="button">Berikutnya</button>
                </div>
            </div>
            <div class="row setup-content" id="step-2" style="margin-top: 24px;">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Tujuan Pelanggan</label>
                        <select class="form-control" name="tujuan" id="f_tujuan" onChange="getTujuan(this)">
                            <option>-- Tujuan --</option>
                            @foreach($tujuan as $tujuan)
                                <option value="{{$tujuan->id_tujuan}}">{{$tujuan->nama_tujuan}}</option>
                            @endforeach    
                        </select>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Jam Keberangkatan</label>
                                <input type="time" class="form-control" name="jam" id="f_jam" onChange="getJam(this)" required="required"/>
                            </div>
                            <div class="col-md-6">
                                <label>Tanggal Keberangkatan</label>
                                <input type="date" class="form-control" name="tanggal" id="f_tanggal" onChange="getTanggal(this)" required="required"/>
                            </div>
                        </div>
                    </div>

                    <div class="checkbox">
                        <label><input type="checkbox" id="f_jemput" onChange="getJemput(this)">Penjemputan di alamat yang diisi</label>
                    </div>
                    <button class="btn btn-primary nextBtn form-control " type="button">Berikutnya</button>
                </div>
            </div>
            <div class="row setup-content" id="step-3" style="margin-top: 24px;">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="table-responsive" id="tickets">
                        <table class="table table-stripped">
                            <tbody>
                                <tr>
                                    <td>Nama Pembeli</td>
                                    <td id="nama_pembeli"></td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td id="alamat"></td>
                                </tr>
                                <tr>
                                    <td>Tujuan</td>
                                    <td id="tujuan"></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Keberangkatan</td>
                                    <td id="tanggal"></td>
                                </tr>
                                <tr>
                                    <td>Waktu Keberangkatan</td>
                                    <td id="waktu"></td>
                                </tr>
                                <tr>
                                    <td>Dijemput di Lokasi</td>
                                    <td id="jemput">Tidak</td>
                                </tr>
                                <tr>
                                    <td>Jumlah Tiket</td>
                                    <td id="jml_tiket"></td>
                                </tr>
                                <tr>
                                    <td>Harga Tiket</td>
                                    <td id="harga"></td>
                                </tr>
                                <tr>
                                    <td>Diskon</td>
                                    <td id="diskon"></td>
                                </tr>
                                <tr>
                                    <td>Total Bayar</td>
                                    <td id="total"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <button  class="btn btn-primary form-control" id="cetak" onclick="cetak()">Selesai dan Cetak Tiket</button>
                </div>
            </div>
      

    </div>
</div>


@stop
<script type="text/javascript">
    function getNama(data){
        $('#nama_pembeli').text(data.value);
    }
    function getJumlah(data){
        $('#jml_tiket').text(data.value);
    }
    function getAlamat(data){
        $('#alamat').text(data.value);
    }
    function getJam(data){
        $('#waktu').text(data.value);
    }
    function getTanggal(data){
        $('#tanggal').text(data.value);
    }
    function getJemput(data){
        if(document.getElementById('f_jemput').checked){
            $('#jemput').text('');
            $('#jemput').text('Ya');
        }
            
        
    }
    function getTujuan(data){
        $.getJSON( "{{url('/harga/')}}/"+data.value, function( document ) {
            //var harga = JSON.parse(data);
            var harga = document[0].tarif;
            var jumlah = $('#f_jumlah').val();
            var total_harga = parseInt(jumlah) * harga;
            var diskon = 0;
            if(jumlah >= 3){
                diskon = total_harga * 0.2;
                total_harga = total_harga - diskon;
            }

            $('#diskon').text(diskon);
            $('#harga').text(harga);
            $('#total').text(total_harga);
            $('#tujuan').text(document[0].nama_tujuan);
        });
    }
       // function cetak(){
       //      var mode = 'iframe';
       //      var close = mode == "popup";
       //      var options = { mode : mode, popClose : close};
       //      $("#tickets").print( options );
       // }
       function cetak() {
              $('#cetak').text('Menyimpan...');
              var status = 0;
              
                var id = $('#f_tujuan').val();
                $.getJSON( "{{url('/harga')}}/"+id, function( docs ) {
                   console.log(docs);
                    var harga = docs[0].tarif;
                    var jumlah = $('#f_jumlah').val();
                    var total = parseInt(jumlah) * harga;
                    var diskon = 0;
                    if(jumlah >= 3){
                        diskon = total * 0.2;
                        total = total - diskon;
                    }
                    console.log(total);
                    //post to save tiket

                        if(document.getElementById('f_jemput').checked){
                            status = 1;
                        }
                    var data = {
                        nama_pembeli : $('#f_nama').val(),
                        alamat : $('#f_alamat').val(),
                        no_hp : $('#f_hp').val(),
                        jumlah_tiket : $('#f_jumlah').val(),
                        id_tujuan : $('#f_tujuan').val(),
                        jam_keberangkatan : $('#f_jam').val(),
                        tgl_keberangkatan : $('#f_tanggal').val(),
                        status_jemput : status,
                        total_harga : total
                      }
                      $.ajax({
                        url : "{{url('/tiket/save')}}",
                        type: "POST",
                        data : data,
                        success: function(data, textStatus, jqXHR) {
                            $('#cetak').text('Berhasil..');
                            printOut();
                            $('#cetak').text('Mohon tunggu..');
                            location.reload();
                        },
                        error: function (jqXHR, textStatus, errorThrown){
                     
                        }
                    });

                });

              
              
        }
        
        function printOut(){
            var divToPrint= document.getElementById('tickets');
            var newWin=window.open('','Print-Window','height=700,width=900');
            newWin.document.open();
            newWin.document.write('<html><body onload="window.print()"> <center><img src="{{asset("/img/logo-print.png")}}">'+divToPrint.innerHTML+'</center></body></html>');
            newWin.document.close();
        }
</script>
</script>
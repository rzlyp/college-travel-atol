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
        <div class="stepwizard col-md-4" style="margin-bottom: 48px">
            <div class="stepwizard-row setup-panel">
                <div class="stepwizard-step">
                    <a href="#step-1" type="button" class="btn btn-dark-blue btn-circle">1</a>
                    <p>Data Pembeli</p>
                </div>
                <div class="stepwizard-step">
                    <a href="#step-2" type="button" class="btn btn-light-grey btn-circle" disabled="disabled">2</a>
                    <p>Pilih Tujuan</p>
                </div>
                <div class="stepwizard-step">
                    <a href="#step-3" type="button" class="btn btn-light-grey btn-circle" disabled="disabled">3</a>
                    <p>Review Tiket</p>
                </div>
            </div>
        </div>

        <form role="form" action="" method="post">
            <div class="row setup-content" id="step-1">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Nama Pembeli</label>
                        <input type="text" class="form-control" name="nama" required/>
                    </div>
                    <div class="form-group">
                        <label>Jumlah Tiket yang Dipesan</label>
                        <select class="form-control" name="jumlah-tiket">
                            <option value="petugas">1</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea class="form-control" cols="8" name="alamat" required="required"></textarea>
                    </div>
                    <div class="form-group">
                        <label>No. HP yang Dapat Dihubungi</label>
                        <input type="number" class="form-control" name="hp" required="required"/>
                    </div>
                    <button class="btn btn-primary form-control nextBtn" type="button">Berikutnya</button>
                </div>
            </div>
            <div class="row setup-content" id="step-2" style="margin-top: 24px;">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Tujuan Pelanggan</label>
                        <select class="form-control" name="jumlah-tiket">
                            <option value="bandung">Bandung</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Jam Keberangkatan</label>
                                <input type="time" class="form-control" name="jam" required="required"/>
                            </div>
                            <div class="col-md-6">
                                <label>Tanggal Keberangkatan</label>
                                <input type="date" class="form-control" name="tanggal" required="required"/>
                            </div>
                        </div>
                    </div>

                    <div class="checkbox">
                        <label><input type="checkbox">Penjemputan di alamat yang diisi</label>
                    </div>
                    <button class="btn btn-primary form-control nextBtn" type="button">Berikutnya</button>
                </div>
            </div>
            <div class="row setup-content" id="step-3" style="margin-top: 24px;">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="table-responsive">
                        <table class="table table-stripped">
                            <tbody>
                                <tr>
                                    <td>Nama Pembeli</td>
                                    <td>Evan Gilang R</td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>Lorem Ipsum</td>
                                </tr>
                                <tr>
                                    <td>Tujuan</td>
                                    <td>Lorem Ipsum</td>
                                </tr>
                                <tr>
                                    <td>Tanggal Keberangkatan</td>
                                    <td>Lorem Ipsum</td>
                                </tr>
                                <tr>
                                    <td>Waktu Keberangkatan</td>
                                    <td>Lorem Ipsum</td>
                                </tr>
                                <tr>
                                    <td>Dijemput di Lokasi</td>
                                    <td>Lorem Ipsum</td>
                                </tr>
                                <tr>
                                    <td>Jumlah Tiket</td>
                                    <td>Lorem Ipsum</td>
                                </tr>
                                <tr>
                                    <td>Harga Tiket</td>
                                    <td>Lorem Ipsum</td>
                                </tr>
                                <tr>
                                    <td>Diskon</td>
                                    <td>Lorem Ipsum</td>
                                </tr>
                                <tr>
                                    <td>Total Bayar</td>
                                    <td>Lorem Ipsum</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <input type="submit" class="btn btn-primary form-control" type="submit" value="Selesai dan Cetak Tiket"></input>
                </div>
            </div>
        </form>

    </div>
</div>
@stop
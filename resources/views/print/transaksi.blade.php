<!DOCTYPE html>
<html>
<head>
	<title>Data Transaksi</title>
</head>
<body>
	<center>
	 <table border="1">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama Pemesan</th>
                                <th>Tanggal Transaksi</th>
                                <th>Tujuan</th>
                                <th>Qty</th>
                                <th>Tanggal Berangkat</th>
                                <th>Waktu Berangkat</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($transaksi as $data)
                            <tr>
                                <td>{{$data->id_transaksi}}</td>
                                <td>{{$data->nama_pembeli}}</td>
                                <td>{{$data->created_at}}</td>
                                <td>{{$data->nama_tujuan}}</td>
                                <td>{{$data->jumlah_tiket}}</td>
                                <td>{{$data->tgl_keberangkatan}}</td>
                                <td>{{$data->jam_keberangkatan}}</td>
                                <td>{{$data->total_harga}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
     	</center>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tampilkan Semua</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body> 
    <div>  
        <header>
            <h2>MENU</h2>
            <li><a class="active" href="/">Home</a></li>
		    <li><a href="/tampilkan0269">tampilkan semua transaksi</a></li>
            <li><a href="/user0269">user</a></li>
        </header>
        <div class="menu-tengah">
            <div class="kotak">
	            <h3>Data Transaksi</h3><br>
                <center>
                <table>
		            <tr>
			            <th>Transaksi</th>
			            <th>nama barang</th>
			            <th>harga barang</th>
                        <th>nama pembeli</th>
			            <th>alamat pembeli</th>
		            </tr>
		            @foreach($transaksi as $tr)
		            <tr>
			            <td>{{ $tr->id }}</td>
			            <td>{{ $tr->nama_barang }}</td>
                        <td>{{ $tr->harga_barang }}</td>
                        <td>{{ $tr->nama_pelanggan }}</td>
                        <td>{{ $tr->alamat_pelanggan}}</td>
		            </tr>
		            @endforeach
	            </table></center>
	        </div>
        </div>
    </div>
</body>
</html>

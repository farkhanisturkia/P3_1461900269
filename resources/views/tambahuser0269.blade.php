<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div>
        <header>
            <h2>MENU</h2>
            <li><a class="active" href="/">Home</a></li>
		    <li><a href="/tampilkan0269">tampilkan semua transaksi</a></li>
            <li><a href="/user0269">user</a></li>
            <li><a href="/tambahuser0269">tambah user</a></li>
        </header>
        <div class="menu-tengah">
            <div class="kotak">
	            <h3>Tambah User</h3>
                <form action="/user0269/insert" method="post">
		            {{ csrf_field() }}
		            Nama    : <input type="text" name="nama" required="required"> <br/>
		            Username : <input type="text" name="username" required="required"> <br/>
                    Password   : <input type="text" name="password" required="required"> <br/>
		            <input type="submit" value="Simpan Data">
	            </form>
	        </div>
        </div>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User</title>
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
                <a href="/tambahuser0269">TAMBAH DATA USER</a><br>
	            <table>
		            <tr>
                        <th>ID</th>
			            <th>Nama</th>
			            <th>Username</th>
                        <th>Password</th>
		            </tr>
		            @foreach($user as $us)
		            <tr>
                        <td>{{ $us->id }}</td>
			            <td>{{ $us->nama }}</td>
                        <td>{{ $us->username }}</td>
                        <td>{{ $us->password }}</td>
		            </tr>
		            @endforeach
	            </table>
	        </div>
        </div>
    </div>
</body>
</html>

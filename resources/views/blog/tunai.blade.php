<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tunai</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>data Pembayaran Tunai </h2>
	<br>
	<br>
  <table class="table">
    <thead class="thead-dark">
	<tr>
	<th>ID PEMBAYARAN</th>
      <th>NO KTP</th>
      <th>ID RESERVASI</th>
      <th>TANGGAL PEMBAYARAN</th>
		<th>STATUS PEMBAYARAN</th>
			<th>TOTAL PEMBAYARAN</th>
      <th> function </th>


      </tr>
    </thead>
    <tbody>
	@foreach($tunai as $p)
		<tr>
            <td>{{ $p->ID_PEMBAYARAN  }}</td>
			      <td>{{ $p->NO_KTP  }}</td>
			      <td>{{ $p->ID_RESERVASI  }}</td>
            <td>{{ $p->TANGGAL_PEMBAYARAN  }}</td>
			      <td>{{ $p->STATUS_PEMBAYARAN  }}</td>
            <td>{{ $p->TOTAL_PEMBAYARAN  }}</td>

			<td>
      
			<a href="/tunai/edit/{{ $p->ID_PEMBAYARAN }}">edit</a>
			<a href="/tunai/hapus/{{ $p->ID_PEMBAYARAN }}">Hapus</a>
			</td>
			
		</tr>
		@endforeach
    </tbody>
  </table>
  <table class="table">
    <thead class="thead-light">
     
    </tbody>
  </table>
</div>
<div class="w3-container w3-center">
<a class="w3-button w3-black w3-round-xlarge" href="tunai/tambah">tambah</a>    
</div>
</body>
</html>
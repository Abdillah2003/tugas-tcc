<?php 
    include "koneksi.php";
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<title></title>
  <style type="text/css">
    body{
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background: lavender;
      padding: 50px;
      width: 700px;
      border-radius: 10px;
      text-align: justify;
      font-family: sans-serif;
      box-sizing: border-box;
      background-image: url('sun.jpg');
      background-size: cover;
    }
  </style>
</head>
<body>
    <h2 style="border-bottom:3px solid;color: white; ">REGISTRASI AKUN ANDA</h2>
    <form class="row g-3" method="POST" action="regisinput.php">
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label" style="color: white;">Username</label>
          <input type="text" class="form-control" id="inputusername" name="username">
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label" style="color:white;">Password</label>
          <input type="password" class="form-control" id="inputPassword4" name="password">
        </div>
        <div class="col-12">
          <label for="inputAddress2" class="form-label" style="color:white;">Tannggal Lahir</label>
          <input type="date" class="form-control" id="inputAddress2" placeholder="" name="ttl">
        </div>
        <div class="col-12">
          <label for="inputAddress" class="form-label" style="color:white;">Alamat</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="" name="alamat">
        </div>
        <div class="col-md-6">
          <label for="inputCity" class="form-label" style="color:white;">Kota/Kabupaten</label>
          <input type="text" class="form-control" id="inputCity" name="kota"> 
        </div>
        <div class="col-md-4">
          <label for="inputState" class="form-label" style="color:white;">Negara</label>
          <select id="inputState" class="form-select" name="negara">
            <option>Choose</option>
            <option>Indonesia</option>
            <option>Malaysia</option>
            <option>Singapura</option>
            <option>Thailand</option>
            <option>Philipina</option>
            <option>Vietnam</option>
            <option>Brunei Darusalam</option>
            <option>Kamboja</option>
            <option>Laos</option>
            <option>Timur Leste</option>
          </select>
        </div>
        <div class="col-md-2">
          <label for="inputZip" class="form-label" style="color:white;">Kode Pos</label>
          <input type="text" class="form-control" id="inputZip"  name="kode_pos">
        </div>
        <div class="col-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck" style="color:white;">Check me out</label>
          </div>
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Sig-Up</button>
        </div>
      <form method="POST" action="login.php">
        <div class="col-12" style="text-align:center;">
          <label><strong style="color: white;">Sudah punya akun??</strong> </label><br> 
          <button type="submit" class="btn btn-primary">Log-In</button>
        </form>
      </div>
    </form>


</body>
</html>
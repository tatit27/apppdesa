<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script> 
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="text-center">
	
	<div class="login-container">
		<img  src="img/logo.png" alt="" width="50" height="57">
	<h2 class="mt-2">LOGIN</h2><hr>
	<form method="post" action="aksilogin.php">

		<div class="form-floating">
		    <input class="form-control" name="username" id="inputusername" type="text" placeholder="Nama" />
		    <label for="inputnama" class="form-label">Nama</label>
		</div>

		<div class="form-floating">
            <input class="form-control" name="password" id="inputPassword" type="password" placeholder="Create a password" />
            <label for="inputPassword" class="form-label">Password</label> 
        </div>
	  	<div class="mt-4 mb-0">
            <div class="d-grid">
	  		<button type="submit" class="btn btn-primary btn-block">Login</button>
            </div>
        </div>
	</form>
	</div>
    </div>
    <footer>
        <div class="container3">
            <div class="ket">
            <span>Copyright &copy; Panca Mulya 2021</span>
            </div>
        </div>
    </footer>
</body>
</html>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>P2 - Password Generator</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">
<link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="style.css">
<?php 
require('logic.php');
?>
</head>
<body>
<div class="container-fluid">
  <div class="row">
    <header>
      <div class="col-md-12 branding">
        <h1>P2 - Password Generator</h1>
      </div>
    </header>
  </div>
  <div class="row">
    <div class="col-md-12 passwordFinal">
      <h2><?php echo $passwordFinal; ?></h2>
    </div>
  </div>
</div>
</body>
</html>

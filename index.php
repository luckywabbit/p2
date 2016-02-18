<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>XKCD Password Generator</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="scripts.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css">
<?php require('logic.php'); ?>
</head>
<body>
<div class="container-fluid">
  <div class="row">
    <header>
      <div class="col-md-12 branding">
        <h1><a href="index.php">XKCD Password Generator</a></h1>
      </div>
    </header>
  </div>
  <div class="row">
    <div class="col-md-12 passwordFinalForm">
      <h2 class="passwordFinal"><span class="pw"><?php echo $passwordFinal; ?></span> <span class="copy">Copy to clipboard</span></h2>
      <div class="defaultNotice">(Default: 4 Words)</div>
      <div class="col-md-6 pwForm">
        <form action="index.php" method="get">
          <label for="pwCount">How Many Words (Max: 9):</label>
          <input type="number" name="pwCount" id="pwCount" max="9"  min="1" class="pwCount">
          <div class="errMsg"><span class="<?php echo $enabled; ?>">Please add number of words</span></div>
          <div>
            <input type="checkbox" name="pwNum" id="pwNum"  value="yes">
            <label for="pwNum" >Include a digit?</label>
          </div>
          <div>
            <input type="checkbox" name="pwSpChar" id="pwSpChar" value="yes">
            <label for="pwSpChar">Include a special character?</label>
          </div>
          <input type="submit" value="Make password">
        </form>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 about">
      <h3>What's an XKCD Password Genterator?</h3>
      <h4>Comic originally published at: </h4>
      <a href="https://xkcd.com/936/" target="_blank">
      <h4>https://xkcd.com/936/</h4>
      <img src="https://imgs.xkcd.com/comics/password_strength.png" alt="xkcd password"> </a> </div>
  </div>
</div>
</body>
</html>

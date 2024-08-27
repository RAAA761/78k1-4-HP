

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP web server</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

  <?php session_start(); 


  ?>
  
<script>
 var login = <?php $_SESSION['login'] ?>;
  if (login === "1"){
   window.location.href = "protected.html"
  } else {
window.location.href = "index.html"
  }
</script>
</body>
</html>

<?php session_start(); 
$_SESSION['login'] = "1";
//sessionを登録するだけの場所
?>
<script>
  window.location.href = 'protected.html';
</script>

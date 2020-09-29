<?php
  session_start();
  session_destroy();
  echo "<script>alert('Terima Kasih ! Anda telah keluar'); window.location = 'index.php'</script>";
?>

<?php
@session_start();
@$id = $_SESSION['id'];
if($id == ""){
    echo "<script>window.location = '../index.php'</script>";
    exit();
}

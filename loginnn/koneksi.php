<?php
    
    $data = mysqli_connect("localhost","root","","desa lumbung");

    if (!$data){
        echo'gagal';
    }else{
        echo'berhasil';
    }
?>
<?php 
 if( ! isset( $_SESSION['user'] ) ) {
    echo 'not allowed to enter';
 }else{
     print_r( $_SESSION['user'] );
 }
?>
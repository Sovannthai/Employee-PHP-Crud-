<?php
    $time = time() + (30*24*3600);
    setcookie("username","administrator",$time);

    print_r($_COOKIE['username']);
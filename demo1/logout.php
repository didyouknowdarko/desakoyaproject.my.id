<?php
    session_start();
    session_destroy();
    unset($_SESSION['username']);
    header("Location:http://desakoyaproject.my.id/");

    

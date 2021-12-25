<?php

session_start();
   $_SESSION['id_user'];    
   $_SESSION['nama'];    
   $_SESSION['username'];  
   $_SESSION['role'];     


unset($_SESSION["id_user"]);
unset($_SESSION["nama"]);
unset($_SESSION["username"]);
unset($_SESSION["role"]);


session_unset();
session_destroy();

echo "<meta http-equiv='refresh' content='0; url=login'>";

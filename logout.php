<?php
session_start();
session_unset(); // Menghapus semua session
session_destroy(); // Menghancurkan session
echo "Logged out"; // Optional response
?>

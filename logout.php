<?php
echo "Anda telah logout";
session_start();
session_destroy();
header('location:index.html');
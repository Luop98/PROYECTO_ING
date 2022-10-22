<?php

session_start();
session_unset();
session_destroy();
// DIRECCION
header("Location: Index.php");


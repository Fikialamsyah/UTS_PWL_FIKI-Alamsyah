<?php
session_start();
unset($_SESSION['MEMBER']);

header('Location:http://localhost/UTS-PWL-FIKI/index.php?hal=home');
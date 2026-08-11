<?php
session_start();
session_unset();
session_destroy();
header('Location: p7_1login.html');
exit;

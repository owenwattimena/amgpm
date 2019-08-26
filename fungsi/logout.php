<?php

session_start();

unset($_SESSION['loged']);
unset($_SESSION['level']);

session_destroy();
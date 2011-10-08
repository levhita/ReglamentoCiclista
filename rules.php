<?php
  include_once 'main.inc.php';
  $rules = parse_ini_file("rules.ini", true);
  if ( !isset($_GET['rule']) || empty($_GET['rule']) || !isset($rules[$_GET['rule']]) ) {
    header('location: index.php');
  }
  $rule = $rules[$_GET['rule']];
  include "rule_layout.php";
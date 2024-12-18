<?php
$dbc = @mysqli_connect('localhost', 'root', '', 'members_lavandero') 
OR die('Could not connect to MySQL Server: ' . mysqli_connect_error());

mysqli_set_charset($dbc, 'utf8');

//$dbc = @mysqli_connect('localhost', 'JFLavandero', 'JFLavandero', 'members_lavandero')
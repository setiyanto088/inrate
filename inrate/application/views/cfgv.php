<?php

$config_db_prod = array(
	
	'hostname' => 'master.u.1elf.net',
	'username' => 'root',
	'password' => 'aJxTF5XsTDSQ',
	'database' => 'prod_unics'
);


$config_db_maria = array(
	
	'hostname' => 'dev-datamart.u.1elf.net',
	'username' => 'userbrts',
	'password' => 'B8AxEli2kkD7pcTqwU7l',
	'database' => 'inrate',
);

$config_db_clickhouse = array(
	
	'hostname' => 'dev-db.u.1elf.net',
	'username' => 'usertprt',
	'password' => 'CLl1EBW69ZFygJwtQGuL',
	'database' => 'inrate'
);

	$main_url_v = 'http://52.221.249.88/app/inrate/';
	$donwload_base_v = 'http://52.221.249.88/';

    $con = mysqli_connect($config_db_maria['hostname'], $config_db_maria['username'], $config_db_maria['password']);
    mysqli_select_db($con, $config_db_maria['database']);
	
	$con_survey = mysqli_connect($config_db_survey['hostname'], $config_db_survey['username'], $config_db_survey['password']);
    mysqli_select_db($con_survey, $config_db_survey['database']);
	
	$con_maria = mysqli_connect($config_db_maria['hostname'], $config_db_maria['username'], $config_db_maria['password']);
    mysqli_select_db($con_maria, $config_db_maria['database']);
?>
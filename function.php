<?php 
include 'assets/inc/baglan.php';

ob_start();
session_start();

// tüm userleri çekiyoruz

function all_users() {
	global $db;
	$sql = 'SELECT *FROM users';
	$users = $db -> prepare($sql);
	$users -> execute();
	return $users -> fetchAll();
}


// User datalarını çeker
function getUser($user) {
	global $db;
	$sql = 'SELECT *FROM users WHERE id = ?';
	$users = $db -> prepare($sql);
	$users -> execute([$user]);
	return $users -> fetch();
}

function messages($me, $user) {
	global $db;
	$sql = 'SELECT *FROM messages WHERE kimden = ? and kime = ? or kimden = ? and kime = ?';
	$msgs = $db -> prepare($sql);
	$msgs -> execute([$me, $user, $user, $me]);
	return $msgs -> fetchAll();
}

 ?>
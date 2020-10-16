<?php 

function get_db_connection(){

global $db_host, $db_name, $db_user, $db_pass, $db_charset;

$dsn = "mysql:host=$db_host;dbname=$db_name;charset=$db_charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false
];

try {
    $db = new PDO($dsn, $db_user, $db_pass, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

return $db;
}


/******************** SELECT QUERIES *********************/
function get_all_intros(){
	$db = get_db_connection();
	$sql = "SELECT * FROM tbl_intro;";
	$result = $db->query($sql);
	return $result->fetchAll();
}

function get_top_lessons(){
	$db = get_db_connection();
	$sql = "SELECT * FROM tbl_lesson WHERE top_three = 1;";
	$result = $db->query($sql);
	return $result->fetchAll();
}

function get_category_by_id($id){
	$db = get_db_connection();
	$sql = "SELECT * FROM tbl_category WHERE id = $id;";
	$result = $db->query($sql);
    $row = $result->fetch();
    return $row;
}
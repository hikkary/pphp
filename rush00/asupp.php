<?php
ini_set('display_errors','on');
error_reporting(E_ALL);
?>

<?php
$user = json_decode(file_get_contents('json/users.json'));
print_r($user);
// foreach ($user as $u) {
// 	print_r($u);
// 	# code...

?>

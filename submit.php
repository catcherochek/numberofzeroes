<?php
require 'FactorialZeroes.php';
//use src/FactorialZeroes;
// Get JSON as a string
$json_str = file_get_contents('php://input');
// Get as an object
$json_obj = json_decode($json_str);
$val = $json_obj->val;
$factorial = new FactorialZeroes();
header('Content-Type: application/json');
$data = array('zeroes'=>$factorial->countZeroes($val));
echo json_encode($data);

?>

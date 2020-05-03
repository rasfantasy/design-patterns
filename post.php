<?
$data = file_get_contents('php://input');
file_put_contents("data/data.json", $data);
echo $data;
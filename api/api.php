<?php
$id = $_GET['id'];
$name = $_GEt['name']
$data = array(
    'age' => 20,
    'name' => $name,
    'id' => $id
);

$callback = $_GET['callback'];

echo $callback."(".json_encode($data).")";
return;
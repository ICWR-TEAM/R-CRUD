<?php

include('r-crud.php');
$func = New r_crud();

$cfg = [
    "db" => [
        "hostname" => "localhost",
        "username" => "root",
        "password" => "",
        "database" => "r_crud"
    ]
];

$cfg['db']['connection'] = mysqli_connect($cfg['db']['hostname'], $cfg['db']['username'], $cfg['db']['password'], $cfg['db']['database']);

$table = "test";

$data = [
    "a" => 123,
    "b" => "abc",
    "c" => "def"
];

$id = 1;

echo "\n";
echo "Insert Status : " . $func->data_create($cfg['db']['connection'], $table, $data);
echo "\n";

echo "\n";
echo "Read All Status : ";
print_r($func->data_read_all($cfg['db']['connection'], $table));
echo "\n";

$where = [
    "id" => $id,
    "a" => 123,
    "b" => "abc",
    "c" => "def"
];

echo "\n";
echo "Read By Where : ";
print_r($func->data_read_where($cfg['db']['connection'], $table, $where));
echo "\n";

$data_change = [
    "a" => 321,
    "b" => "ghi",
    "c" => "jkl"
];

$where = [
    "id" => $id,
    "a" => 123,
    "b" => "abc"
];

echo "\n";
echo "Update Status : " . $func->data_update($cfg['db']['connection'], $table, $data_change, $where);
echo "\n";

$where = [
    "id" => $id,
    "a" => 321,
    "b" => "ghi",
    "c" => "jkl"
];

echo "\n";
echo "Read By Where : ";
print_r($func->data_read_where($cfg['db']['connection'], $table, $where));
echo "\n";

$where = [
    "id" => $id,
    "a" => 321,
    "b" => "ghi",
    "c" => "jkl"
];

echo "\n";
echo "Delete Status : " . $func->data_delete($cfg['db']['connection'], $table, $where);
echo "\n";
?>

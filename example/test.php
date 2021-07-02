<?php

$cfg = [
    "db" => [
        "hostname" => "localhost",
        "username" => "root",
        "password" => "",
        "database" => "test"
    ]
];

$cfg['db']['connection'] = mysqli_connect($cfg['db']['hostname'], $cfg['db']['username'], $cfg['db']['password'], $cfg['db']['database']);

include('r-crud.php');
$func = New r_crud($cfg['db']['connection']);

$table = "test";

$data = [
    "a" => 123,
    "b" => "abc",
    "c" => "def"
];

$id = 1;

echo "\n";
echo "Insert Status : " . $func->data_create($table, $data);
echo "\n";

echo "\n";
echo "Read All Status : ";
print_r($func->data_read_all($table));
echo "\n";

$where = [
    "id" => $id,
    "a" => 123,
    "b" => "abc",
    "c" => "def"
];

echo "\n";
echo "Read By Where : ";
print_r($func->data_read_where($table, $where));
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
echo "Update Status : " . $func->data_update($table, $data_change, $where);
echo "\n";

$where = [
    "id" => $id,
    "a" => 321,
    "b" => "ghi",
    "c" => "jkl"
];

echo "\n";
echo "Read By Where : ";
print_r($func->data_read_where($table, $where));
echo "\n";

$where = [
    "id" => $id,
    "a" => 321,
    "b" => "ghi",
    "c" => "jkl"
];

echo "\n";
echo "Delete Status : " . $func->data_delete($table, $where);
echo "\n";
?>

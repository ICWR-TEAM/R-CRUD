# R-CRUD
Rusher CRUD ( PHP )

##
### Simple Use

Include this plugins

```php
include('r-crud.php');
```

Create variable function

```php
$func = New r_crud($connection);
```

How to create data

```php
$table = 'table';
$data = [
    "column1" => $value1,
    "column2" => $value2,
    "column3" => $value3
];
$func->data_create($table, $data);
```

How to read data

```php
$table = 'table';
$raw_data = $func->data_read_all($table);

foreach($raw_data as $id => $data) {

  echo $id . " -> " . $data['column'];

}
```

How to read data by "WHERE" query

```php
$table = 'table';
$where = [
    "id" => 1
];
$data = $func->data_read_where($table, $where);
echo $data['column'];
```

How to update data

```php
$table = 'table';
$where = [
    "id" => 1
];
$data_update = [
  'column1' => $value1,
  'column2' => $value2
];
$func->data_update($table, $data_update, $where);
```

How to delete data

```php
$table = 'table';
$where = [
    "id" => 1
];
$func->data_delete($table, $where);
```

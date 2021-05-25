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
$func = New r_crud();
```

How to create data

```php
$table = 'table';
$data = [
    "a" => 200,
    "b" => "kontol",
    "c" => "asw"
];
$func->$func->data_create($connection, $table, $data);
```

How to read data

```php
$table = 'table';
$raw_data = $func->data_read_all($connection, $table);

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
$data = $func->data_read_where($connection, $table, $where);
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
$func->data_update($connection, $table, $data_update, $where);
```

How to delete data

```php
$table = 'table';
$where = [
    "id" => 1
];
$func->data_delete($connection, $table, $where);
```

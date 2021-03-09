<?php

// R-CRUD ( Rusher CRUD ) - Fast & Instant CRUD
// Copyright ©2021 - Afrizal F.A - ICWR-TEAM

class r_crud
{

    public function data_create($connection, $table, $index, $value)
    {

        $query = "INSERT INTO $table ($index) VALUES ($value)";
        $execute = mysqli_query($connection, $query);

        if ($execute) {

            return true;

        } else {

            return false;

        }

    }

    public function data_read($connection, $table)
    {

        $table = mysqli_real_escape_string($connection, $table);
        $query = "SELECT * FROM $table";
        $execute = mysqli_query($connection, $query);
        $data = [];
        $no = 1;

        while ($raw_data = mysqli_fetch_array($execute)) {

            $data[$no++] = $raw_data;

        }

        return $data;

    }

    public function data_read_by_id($connection, $table, $id)
    {

        $table = mysqli_real_escape_string($connection, $table);
        $id = $table = mysqli_real_escape_string($connection, $id;
        $query = "SELECT * FROM $table WHERE id='$id'";
        $execute = mysqli_query($connection, $query);
        $data = mysqli_fetch_array($execute);
        return $data;

    }

    public function data_update($connection, $table, $data, $id)
    {

        $id = mysqli_real_escape_string($connection, $id);
        $table = mysqli_real_escape_string($connection, $table);
        $struct_data = implode(', ', array_map(function ($v, $k) { return sprintf("%s=\"%s\"", $k, $v); }, $data, array_keys($data)));
        $query = "UPDATE $table SET $struct_data WHERE id='$id'";
        $execute = mysqli_query($connection, $query);

        if ($execute) {

            return true;

        } else {

            return false;

        }

    }

    public function data_delete($connection, $table, $id)
    {

        $id = mysqli_real_escape_string($connection, $id);
        $query = "DELETE FROM $table WHERE id='$id'";
        $execute = mysqli_query($connection, $query);

        if ($execute) {

            return true;

        } else {

            return false;

        }

    }

}

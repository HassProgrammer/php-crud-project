<?php
    include 'database.php';
    $obj = new Database();

    $obj->insert('info', ['name'=>'Khan', 'age'=> '1999', 'gender'=> 'M', 'phone'=> '0177798852', 'city'=>'urope']);
    echo "Insert Result Is: ";
    print_r($obj->getResult());

    $obj->update('info', ['name'=>'Md Ahshan', 'age'=> '1999', 'gender'=> 'M', 'phone'=> '0177798852', 'city'=>'urope'], 'id="7"');
    echo "Update Result Is: ";
    print_r($obj->getResult());
?>
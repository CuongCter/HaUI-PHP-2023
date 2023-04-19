<?php

require 'app/views/libs/students.php';

// Thực hiện xóa

$id = isset($_POST['ID']) ? $_POST['ID'] : '';

if ($id){
    echo $id;
    delete_user($id);
}

// Trở về trang danh sách
echo '<meta http-equiv="refresh" content="0;url=admin">'; 
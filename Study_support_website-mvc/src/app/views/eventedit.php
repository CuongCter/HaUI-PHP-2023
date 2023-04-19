<?php

require 'app/views/libs/event.php';

// Lấy thông tin hiển thị lên để người dùng sửa
$id = isset($_GET['id']) ? $_GET['id'] : '';
if ($id){
    $data = get_event($id);
    if (!$data){
        echo '<meta http-equiv="refresh" content="0;url=admin">'; 
    }
}
$data = get_event($id);
// Nếu không có dữ liệu tức không tìm sự kiện cần sửa

// Nếu người dùng submit form
if (!empty($_POST['edit_event']))
{
    // Lay data
    $data['eventName ']    = isset($_POST['Name']) ? $_POST['Name'] : '';
    $data['eventContent']      = isset($_POST['eventContent']) ? $_POST['eventContent'] : '';
    $data['eventDay']    = isset($_POST['eventDay']) ? $_POST['eventDay'] : '';

    
    // Validate thong tin
    $errors = array();
    if (empty($data['eventName '])){
        $errors['eventName '] = 'Chưa nhập tên sự kiện';
    }
    
    if (empty($data['eventContent'])){
        $errors['eventContent'] = 'Chưa nhập content';
    }
    // Neu ko co loi thi insert
    if (!$errors){
        edit_event($data['eventID'], $data['eventName '], $data['eventContent'], $data['eventDay']);
        // Trở về trang danh sách
        echo '<meta http-equiv="refresh" content="0;url=admin">'; 
    }
}

disconnect_db();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Sửa</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Sửa sự kiện</h1>
        <a href="admin">Trở về</a> <br/> <br/>
        <form method="post" action="eventedit?id=<?php echo $data['eventID']; ?>">
            <table width="50%" border="1" cellspacing="0" cellpadding="10">
                <tr>
                    <td>Name</td>
                    <td>
                        <input type="text" name="Name" value="<?php echo $data['eventName']; ?>"/>
                        <?php if (!empty($errors['eventName'])) echo $errors['eventName']; ?>
                    </td>
                </tr>
                
                <tr>
                    <td>Content</td>
                    <td>
                    <input style="width: 500px" type="text" name="eventContent" value="<?php echo $data['eventContent']; ?>"/>
                        <?php if (!empty($errors['eventContent'])) echo $errors['eventContent']; ?>
                    </td>
                </tr>
                <tr>
                    <td>Date</td>
                    <td>
                        <input  type="text" name="eventDay" value="<?php echo $data['eventDay']; ?>"/>
                    </td>
                </tr>
                
                <tr>
                    <td></td>
                    <td>
                        <input type="hidden" name="ID" value="<?php echo $data['eventID']; ?>"/>
                        <input type="submit" name="edit_event" value="Lưu"/>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>

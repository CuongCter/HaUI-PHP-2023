<?php

require 'app/views/libs/students.php';

// Lấy thông tin hiển thị lên để người dùng sửa
$id = isset($_GET['id']) ? $_GET['id'] : '';
if ($id){
    
    $data = get_user($id);
    if (!$data){
        echo '<meta http-equiv="refresh" content="0;url=admin">'; 
    }
}
$data = get_user($id);
// Nếu không có dữ liệu tức không tìm thấy sinh viên cần sửa

// Nếu người dùng submit form
if (!empty($_POST['edit_user']))
{
    // Lay data
    $data['userName']    = isset($_POST['Name']) ? $_POST['Name'] : '';
    $data['gender']      = isset($_POST['gender']) ? $_POST['gender'] : '';
    $data['birthday']    = isset($_POST['birthday']) ? $_POST['birthday'] : '';
    $data['useMsv']     = isset($_POST['useMsv']) ? $_POST['useMsv'] : '';
    $data['hometown']    = isset($_POST['hometown']) ? $_POST['hometown'] : '';
    $data['classUni']    = isset($_POST['classUni']) ? $_POST['classUni'] : '';
    $data['course']      = isset($_POST['course']) ? $_POST['course'] : '';
    $data['email']       = isset($_POST['email']) ? $_POST['email'] : '';
    $data['phone']       = isset($_POST['phone']) ? $_POST['phone'] : '';
    $data['yearPass']    = isset($_POST['yearPass']) ? $_POST['yearPass'] : '';
    $data['status']          = isset($_POST['status']) ? $_POST['status'] : '';
    // Validate thong tin
    $errors = array();
    if (empty($data['userName'])){
        $errors['userName'] = 'Chưa nhập tên ';
    }
    // Neu ko co loi thi insert
    if (!$errors){
        edit_user($data['userID'], $data['userName'], $data['gender'], $data['birthday'], $data['useMsv'],$data['hometown'],$data['classUni'], $data['course'],$data['email'],$data['phone'],$data['yearPass'], $data['status'],);
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
    <style>

    </style>
    <body>
        <h1>Sửa thông tin </h1>
        <a href="admin">Trở về</a> <br/> <br/>
        <form method="post" action="studentedit?id=<?php echo $data['userID']; ?>">
            <table width="50%" border="1" cellspacing="0" cellpadding="10">
                <tr>
                    <td>Name</td>
                    <td>
                        <input type="text" name="Name" value="<?php echo $data['userName']; ?>"/>
                        <?php if (!empty($errors['userName'])) echo $errors['userName']; ?>
                    </td>
                </tr>
                <tr>
                    <td>MSV</td>
                    <td>
                        <input type="text" name="useMsv" value="<?php echo $data['useMsv']; ?>"/>
                        <?php if (!empty($errors['useMsv'])) echo $errors['useMsv']; ?>
                    </td>
                </tr>
                <tr>
                    <td>Class</td>
                    <td>
                        <input type="text" name="classUni" value="<?php echo $data['classUni']; ?>"/>
                        <?php if (!empty($errors['classUni'])) echo $errors['classUni']; ?>
                    </td>
                </tr>
                <tr>
                    <td>Course</td>
                    <td>
                        <input type="text" name="course" value="<?php echo $data['course']; ?>"/>
                        <?php if (!empty($errors['course'])) echo $errors['course']; ?>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="hidden" name="ID" value="<?php echo $data['userID']; ?>"/>
                        <input type="submit" name="edit_user" value="Lưu"/>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>

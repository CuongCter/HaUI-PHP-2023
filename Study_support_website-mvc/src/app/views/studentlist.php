<?php
    require 'app/views/libs/students.php';
    $students = get_all_users();
    disconnect_db();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Danh sách sinh viên</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Danh sách sinh vien</h1>
        <a href="student-add.php">Thêm sinh viên</a> <br/> <br/>
        <table width="100%" border="1" cellspacing="0" cellpadding="10">
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Gender</td>
                <td>Birthday</td>
                <td>Msv</td>
                <td>Hometown</td>
                <td>Lớp ĐH</td>
                <td>Khóa</td>
                <td>email</td>
                <td>phone</td>
                <td>Năm tham gia</td>
                <td>status</td>
            </tr>
            <?php foreach ($students as $item){ ?>
            <tr>
                <td><?php echo $item['userID']; ?></td>
                <td><?php echo $item['userName']; ?></td>
                <td><?php echo $item['gender']; ?></td>
                <td><?php echo $item['birthday']; ?></td>
                <td><?php echo $item['useMsv']; ?></td>
                <td><?php echo $item['hometown']; ?></td>
                <td><?php echo $item['classUni']; ?></td>
                <td><?php echo $item['course']; ?></td>
                <td><?php echo $item['email']; ?></td>
                <td><?php echo $item['phone']; ?></td>
                <td><?php echo $item['yearPass']; ?></td>
                <td><?php echo $item['status']; ?></td>
                <td>
                    <form method="post" action="studentdelete">
                        <input onclick="window.location = 'student-edit?id=<?php echo $item['userID']; ?>'" type="button" value="Sửa"/>
                        <input type="hidden" name="ID" value="<?php echo $item['userID']; ?>"/>
                        <input onclick="return confirm('Bạn có chắc muốn xóa không?');" type="submit" name="delete" value="Xóa"/>
                    </form>
                </td>
            </tr>
            <?php } ?>
        </table>
    </body>
</html>

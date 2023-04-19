<?php
// Biến kết nối toàn cục
global $conn;
 
// Hàm kết nối database
    function connect_db(){
    // Gọi tới biến toàn cục $conn
    global $conn;
    $servername = 'mysql';
    $username = 'buns';
    $password = 'buns';
    $dbname = 'study_support';
    // Nếu chưa kết nối thì thực hiện kết nối
    
    if (!$conn){
        $conn = mysqli_connect($servername, $username, $password, $dbname) or die ('Cant not connect to database');
        // Thiết lập font chữ kết nối
        mysqli_set_charset($conn, 'utf8');
    }
    
}

    // // Hàm ngắt kết nối
    function disconnect_db()
    {
    // Gọi tới biến toàn cục $conn
    global $conn;
    
    // Nếu đã kêt nối thì thực hiện ngắt kết nối
    if ($conn){
        mysqli_close($conn);
    }
}




// Hàm lấy tất cả sinh viên
function get_all_users()
{
    // Gọi tới biến toàn cục $conn
    global $conn;
    
    // Hàm kết nối
    connect_db();
    
    // Câu truy vấn lấy tất cả sinh viên
    $sql = "select * from User";
    
    // Thực hiện câu truy vấn
    $query = mysqli_query($conn, $sql);
    
    // Mảng chứa kết quả
    $result = array();
    
    // Lặp qua từng record và đưa vào biến kết quả
    if ($query){
        while ($row = mysqli_fetch_assoc($query)){
            $result[] = $row;
        }
    }
    
    // Trả kết quả về
    return $result;
}

// Hàm lấy sinh viên theo ID
function get_user($userID)
{
    // Gọi tới biến toàn cục $conn
    global $conn;
    
    // Hàm kết nối
    connect_db();
    
    // Câu truy vấn lấy tất cả sinh viên
    $sql = "select * from User where userID like '$userID'";
    
    // Thực hiện câu truy vấn
    $query = mysqli_query($conn, $sql);
    
    // Mảng chứa kết quả
    $result = array();
    
    // Nếu có kết quả thì đưa vào biến $result
    if (mysqli_num_rows($query) > 0){
        $row = mysqli_fetch_assoc($query);
        $result = $row;
    }
    
    // Trả kết quả về
    return $result;
}

// Hàm thêm sinh viên
// function add_user($userName, $userMsv, $Birthday, $Gender, $Hometown, $)
// {
//     // Gọi tới biến toàn cục $conn
//     global $conn;
    
//     // Hàm kết nối
//     connect_db();
    
//     // Chống SQL Injection
//     $userName = addslashes($userName);
//     $userMsv = addslashes($userMsv);
//     $userBirthday = addslashes($Birthday);
    
//     // Câu truy vấn thêm
//     $sql = "
//             INSERT INTO tb_sinhvien(userName, userMsv, birthday) VALUES
//             ('$userName','$userMsv','$userBirthday')
//     ";
    
//     // Thực hiện câu truy vấn
//     $query = mysqli_query($conn, $sql);
    
//     return $query;
// }


// Hàm sửa sinh viên
function edit_user($userID, $userName, $useMsv, $classUni, $course)
{
    // Gọi tới biến toàn cục $conn
    global $conn;
    
    // Hàm kết nối
    connect_db();
    var_dump($_POST);
    // Chống SQL Injection
    $userName       = $_POST['Name'];
    $useMsv        = $_POST['useMsv'];
    $classUni   = $_POST['classUni'];
    $course      = $_POST['course'];
    
    // Câu truy sửa
    $sql = "
            UPDATE User SET
            userName = '$userName',
            useMsv = '$useMsv',
            classUni = '$classUni',
            course = '$course'
            WHERE userID like '$userID'
    ";
    echo $sql;
    // Thực hiện câu truy vấn
    $query = mysqli_query($conn, $sql);
    
    return $query;
}


// Hàm xóa sinh viên
function delete_user($userID)
{
    // Gọi tới biến toàn cục $conn
    global $conn;
    
    // Hàm kết nối
    connect_db();
    
    // Câu truy sửa
    $sql = "
            DELETE FROM User
            WHERE `userID` like '$userID'";
    
    // Thực hiện câu truy vấn
    $query = mysqli_query($conn, $sql);
    
    return $query;
}
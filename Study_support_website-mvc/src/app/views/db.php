<?php
    
    function connect_db()
    {
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
    // Hàm ngắt kết nối
    function disconnect_db()
    {
        // Gọi tới biến toàn cục $conn
        global $conn;
        
        // Nếu đã kêt nối thì thực hiện ngắt kết nối
        if ($conn){
            mysqli_close($conn);
        }
    }
?>
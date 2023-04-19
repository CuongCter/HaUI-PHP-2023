<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            
        }
        .container{
            width: 100%;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: url('app/asset/banner.png');
            background-position: center; /* Center the image */
            background-repeat: no-repeat; /* Do not repeat the image */
            background-size: cover;
        }
        .main{
            width: 60%;
            height: 90%;
            left: 372px;
            top: 80px;
            background: rgba(255, 255, 255, 0.3);
            border: 2px solid #FFFFFF;
            box-shadow: 10px 10px 25px rgba(86, 86, 86, 0.2);
            border-radius: 80px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .main_content{
            width: 95%;
            height: 95%;
            background: #FFFFFF;
            border-radius: 50px;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        form{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        img{
            position: absolute;
            top: 0;
            left: 0;
        }
        h1{
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 700;
            font-size: 40px;
            line-height: 60px;
            color: #2B2B2B;
        }
        input{
            width: 400px;
            height: 60px;
            background: #F5F5F5;
            border-radius: 40px;
            border: none;
            padding-left: 30px;
            margin-bottom: 20px;  
        }
        button{
            width: 250px;
            height: 60px;

            /* button */
            border: none;
            background: linear-gradient(74.62deg, #FDC830 8.22%, #F37335 92.59%);
            border-radius: 160px;
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 700;
            font-size: 24px;
            line-height: 36px;
            color: #FFFFFF;
            cursor: pointer;
        }
        
        button:hover{
            scale: 1.05;
            transition: 0.5s;
        }
        p{
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            line-height: 24px;
            
        }
        span{
            color: #f70404;
        }
        span:hover{
            cursor: pointer;
        }
    </style>
</head>
<?php
    if(isset($_SESSION['msv'])){
        echo '<meta http-equiv="refresh" content="0;url=admin">'; 
    }

    if(isset($_POST['dangnhap'])){
       $msv = $_POST['msv'];
       $password = $_POST['password'];
       if($msv == 'admin' && $password == '123' ){
        $_SESSION['msv'] = $msv;
        echo '<meta http-equiv="refresh" content="0;url=admin">'; 
       }else if(($msv == '2020600079' && $password == '123') || 
       ($msv == '2020601337' && $password == '123')){
        $_SESSION['msv'] = $msv;
        echo '<meta http-equiv="refresh" content="0;url=/">'; 
       }
    }
?>
<body>
    <div class="container">
        <div class="main">
            <div class="main_content">
                <a href="/">
                    <img src="app/asset/logoHIT1.png" alt="Ảnh login">
                </a>    
                <h1>Đăng nhập</h1>
                    <form action="login" method="post">
                        <input type="text" name="msv"  placeholder="Mã sinh viên:">
                        <input type="password" name="password"  placeholder="Mật khẩu:" >
                        <button type="submit" name="dangnhap" > Đăng nhập</button>
                    </form> 
                <p>Bạn quên mật khẩu? <span>Quên mật khẩu</span></p>
            </div>
        </div>
    </div>
</body>
</html>
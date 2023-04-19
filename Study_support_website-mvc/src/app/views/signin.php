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
            background-color: aquamarine;
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
            line-height: 20px;
            color: #2B2B2B;
        }
        input{
            width: 400px;
            height: 50px;
            background: #F5F5F5;
            border-radius: 40px;
            border: none;
            padding-left: 30px;
            margin-bottom: 10px;  
        }
        button{
            width: 230px;
            height: 50px;

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
            margin-top: 10px; 
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
        a{
            color: #f70404;
            text-decoration: none
        }
        span{
            color: #f70404;
        }
        span:hover{
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="main">
            <div class="main_content">
                <a href="/">
                    <img src="app/asset/logoHIT1.png" alt="Ảnh login">
                </a> 
                <h1>Đăng kí</h1>
                <input type="text" placeholder="Họ tên:">
                <input type="text" placeholder="Mã sinh viên:">
                <input type="text" placeholder="Email:">
                <input type="password" placeholder="Mật khẩu :">
                <input type="password" placeholder="Nhắc lại mật khẩu :">
                <button>Đăng kí </button>
                <p>Bạn đã có tài khoản <span> <a href="/login">Đăng nhập</a></span></p>
            </div>
        </div>
    </div>
</body>
</html>
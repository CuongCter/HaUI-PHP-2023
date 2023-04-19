<?php
    if(isset($_SESSION['msv'])){
        echo '<style>
                .dn{ display:none }
                .dk{ display:none }
            </style>'; 
    }
    if(!isset($_SESSION['msv'])){
        echo '<style>
                .lg{ display:none }
            </style>'; 
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= ucfirst($view) ?></title>
    
    <style>
        body{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        header{
            width: 100%;
            height: 100px;
            display: flex;
            justify-content: space-around;
            align-items: center;
        }
        .nav{
            display: flex;
            justify-content: space-around;
            width: 50%;
        }
        .nav div:hover{
            scale: 1.05;
            transition: 0.5s;
      }
            .nav div a:hover{
                color: #EF8721;
                transition: 0.5s;
            }
        a{
            text-decoration: none;
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 700;
            font-size: 20px;
            color: #2B2B2B;
        }
        .login{
            display: flex;
        }
        .dn{
            width: 170px;
            height: 60px;
            border-radius: 50px;
            border: none;
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 700;
            font-size: 20px;
            line-height: 31px;
            text-align: center;
            background-color: transparent;
        }
        .dk{
            width: 170px;
            height: 60px;
            background: linear-gradient(74.62deg, #FDC830 8.22%, #F37335 92.59%);
            border-radius: 50px;
            border: none;
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 700;
            font-size: 20px;
            line-height: 31px;
            text-align: center;
            
        }
        .lg{
            width: 170px;
            height: 60px;
            background: linear-gradient(74.62deg, #FDC830 8.22%, #F37335 92.59%);
            border-radius: 50px;
            border: none;
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 700;
            font-size: 20px;
            line-height: 31px;
            text-align: center;
            
        }
        .none{
            display: none;
        }
        button:hover{
            scale: 1.05;
            transition: 0.5s;
        }
        footer{
            height: 460px;;
            width: 100%;
            background: #303030;
            display: flex;
            padding: 0 81px;
            justify-content: space-around;
            padding-top: 80px;
        }
        img{
            width: 200px;
            height: 200px;
        }
        p{
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 400;
            font-size: 20px;
            text-align: justify;
            color: #FFFFFF;

        }
        h1{
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 700;
            font-size: 24px;
            color: #FFFFFF;
        }
        .col-1{
            width: 20%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .col-2{
            
            display: flex;
            flex-direction: column;
        }
        .col-3{
            width: 30%;
            position: relative;
        }
        .in{
            margin-top: 30px;
            width: 373px;
            height: 48px;
            background: #FFFFFF;
            border-radius: 100px;
           
        }
        .sub{
            position: absolute;
            width: 100px;
            border: none;
            height: 47px;
            background: #EF8721;
            border-radius: 104px;
            right: 84px;
            top:20.7%;
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 700;
            font-size: 16px;
            color: #FFFFFF;
        }
        .icon{
            display: flex;
            width: 100%;
            
        }
        .icon-item{
            margin-top: 60px;
            width: 15%;
        }
        .icon-item img{
            width: 50px;
            height: 50px;
        }
    </style>
</head>
<body>
    <header>
    <div class="logo">
        <a href="/">
        <img src="app/asset/logoHIT1.png" alt="">
        </a>
            
        </div>
        <div class="nav">
            <div><a href="/">Trang chủ</a></div>
            <div><a href="/event">Sự kiện</a></div>
            <div><a href="/class">Lớp học</a></div>
            <div><a href="/blog">Blog</a></div>
            <div><a href="/dstv">DSTV</a></div>
        </div>
        <div class="login">
            <button id="dn" class="dn"><a href="/login">Đăng nhập</a> </button>
            <button id="lg" class="lg"><a style="color: #FFFFFF;" href="/logout">Logout</a> </button>
            <button id="dk" class="dk"><a style="color: #FFFFFF;" href="/signin">Đăng kí</a> </button>
        </div>
    </header>

    <?php
        include_once getPathView($view);
    ?>

<footer>
        <div class="col-1">
            <img src="app/asset/logoHIT_white.png" alt="">
            <p>Câu lạc bộ Tin học là câu lạc bộ học tập dành cho sinh viên trực thuộc khoa Công nghệ thông tin - Trường Đại học Công nghiệp Hà Nội. Câu lạc bộ được thành lập ngày 18/08/2010.</p>
        </div>
        <div class="col-2">
            <h1>Liên kết</h1>
            <p>About us</p>
            <p>Services</p>
            <p>Teams</p>
            <p>Pricing</p>
            <p>Project</p>
        </div>
        <div class="col-2">
            <h1>Doanh nghiệp</h1>
            <p>Term of sevices</p>
            <p>Privacy policy</p>
            <p>Documentation</p>
            <p>Changelog</p>
            <p>Components</p>
        </div>
        <div class="col-3">
             <h1>Liên hệ với chúng tôi</h1>
             <input class="in" type="text">
             <button class="sub">Subcribe</button>
             <div class="icon">
                <div class="icon-item">
                    <img src="app/asset/instagram.png" alt="">
                </div>
                <div class="icon-item">
                    <img src="app/asset/facebook.png" alt="">
                </div>
                <div class="icon-item">
                    <img src="app/asset/twitter.png" alt="">
                </div>
                <div class="icon-item">
                    <img src="app/asset/linkedin.png" alt="">
                </div>
             </div>
        </div>
    </footer>
</body>
</html>

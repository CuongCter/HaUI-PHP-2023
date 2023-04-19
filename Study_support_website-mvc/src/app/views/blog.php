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
            display: flex;
            flex-direction: column;
            align-items: center;
            background: #FFF3E1;
        }
        .blog{
            margin-top: 100px;
            margin-bottom: 100px;
            width: 85%;
            height: 600px;
            border-radius: 80px;
            background: #FFFFFF;
        }
        .blog h1{
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 700;
            font-size: 50px;
            line-height: 160%;
            /* or 102px */

            text-align: center;
            color: #EF8721;
        }
        .blog-content{
            width: 100%;
            display: flex;
            justify-content: center;
            
        }
        .blog-text{
            width: 45%;
            
        }
        .blog-text p{
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 400;
            font-size: 20px;
            line-height: 31px;
            text-align: justify;
            color: #2B2B2B;
            
        }
        .blog-text button{
            background: linear-gradient(74.62deg, #FDC830 8.22%, #F37335 92.59%);
            border-radius: 50px;
            border: none;
            width: 150px;
            height: 62px;
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 700;
            font-size: 18px;
            line-height: 31px;
            text-align: center;
            color: #FFFFFF;
            margin-top: 10px;
        }
        .blog-anh{
            width: 45%;
        }
        .blog-anh img{
            width: 100%;
            height: 90%;
        }
        .pick{
            background: #FFFFFF;
/* cl2 */   
            display: flex;
            width: 305px;
            height: 70px;
            justify-content: space-between;
            border: 0.5px solid #FFA95A;
            /* shhw */

            box-shadow: -10px 20px 32px rgba(0, 0, 0, 0.08);
            border-radius: 100px;
            align-items: center;
        }
        .item{
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 400;
            font-size: 18px;
            line-height: 31px;
            text-align: center;
            color: #2B2B2B;
            cursor: pointer;
            
        }
        .item:first-child{
            background: #EF8721;
            border-radius: 40px;
            color: #FFFFFF;
            padding: 20px 40px;
        }
        .item:last-child{ 
            padding: 20px 40px;
        }
        .list{
            margin-top: 50px;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items:center;
        }
        .list-blog{
            background: #FFFFFF;
/* shhw */

        box-shadow: -10px 20px 32px rgba(0, 0, 0, 0.08);
        border-radius: 50px;
        width: 90%;
        height:auto;
        margin: 20px;
        }
        .list-blog p{
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 400;
            font-size: 18px;
            line-height: 31px;
            text-align: justify;
            color: #000000;
            padding: 20px 106px;
            
        }
        .info{
            display: flex;
            align-items: center;
        }
        .info img{
            width: 60px;
            height: 60px;
            padding-left:106px;
            padding-bottom: 30px;
        }
        .name{
            margin-left: 30px;
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 700;
            font-size: 20px;
            line-height: 25px;
            margin-bottom: 35px;
            color: #000000;
        }
    </style>
</head>
<body>
    <div class="blog">
        <h1>BLOG</h1>
        <div class="blog-content">
            <div class="blog-text">
                <p>Để chúng ta gắn kết với nhau nhiều hơn, hãy cùng chia sẻ với chúng mình những điều mà bạn luôn ấp ủ về HIT  nhé !!!</p>
                
                <textarea placeholder="Input text"  name="" id="" cols="70" rows="15"></textarea>
                <button>Gửi</button>
            </div>
            <div class="blog-anh">
            <img src="app/asset/blog.png" alt="">
            </div>
        </div>
    </div>
    <div class="pick">
        <div class="item">Nổi bật</div>
        <div class="item">Gần đây</div>
    </div>
    <div class="list">
        <div class="list-blog">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
            <div class="info">
                <div class="avt">
                    <img src="app/asset/avt.png" alt="">
                </div>
                <div class="name">Ngô Thế Tài</div>
            </div>
        </div>
        <div class="list-blog">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
            <div class="info">
                <div class="avt">
                    <img src="app/asset/avt.png" alt="">
                </div>
                <div class="name">Phạm Văn Cương</div>
            </div>
        </div>
        <div class="list-blog">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
            <div class="info">
                <div class="avt">
                    <img src="app/asset/avt.png" alt="">
                </div>
                <div class="name">Hằng Mai</div>
            </div>
        </div>
    </div>
</body>
</html>
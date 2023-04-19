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
        }
        .banner{
            margin-top: 100px;
            margin-bottom: 100px;
            width: 85%;
            height: 490px;
            background: #FFF3E1;
            border-radius: 80px;
        }
        .banner h1{
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 700;
            font-size: 40px;
            line-height: 160%;
            /* or 102px */

            text-align: center;
            color: #EF8721;
        }
        .banner-content{
            width: 100%;
            display: flex;
            justify-content: space-around;
        }
        .content {
            width: 45%;
        }
        .content p{
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 400;
            font-size: 20px;
            line-height: 31px;
            text-align: justify;
            color: #2B2B2B;
        }
        .content button{
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
        }
        .anh{
            width: 45%;

        }
        .anh img{
            width: 90%;
            height: 90%;
            margin-left: 20px;
        }
        .pick{
            background: #FFFFFF;
/* cl2 */   
            display: flex;
            width: 845px;
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
        .list-class{
            position: relative;
            margin-top: 50px;
            display: flex;
            flex-wrap: wrap;
            width: 100%;
            justify-content: center;
        }
        .list{
            
            background: #FFF3E1;
            /* shhw */
            box-shadow: -10px 20px 32px rgba(0, 0, 0, 0.08);
            border-radius: 60px;
            width: 386px;
            height: 496px;
            margin: 20px 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .list img{
            width: 144px;
            height: 118px;
        }
        .list h2{
            color: #EF8721;
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 700;
            font-size: 24px;
            line-height: 0;
            text-align: center;
        }
        .list span{
            color: #2B2B2B;
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 600;
            font-size: 20px;
        }
        .list p{
            color: #2B2B2B;  
        }
        .list button{
            background: linear-gradient(74.62deg, #FDC830 8.22%, #F37335 92.59%);
            border-radius: 50px;
            border: none;
            width: 140px;
            height: 52px;
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 700;
            font-size: 20px;
            line-height: 31px;
            text-align: center;

            color: #FFFFFF;
        }
        .vector{
            position: absolute;
            width: 100%;
            height: 100%;
            opacity: 0.7;
            z-index: -1;
        }
        .v1{
            top: 10%
        }
        .v5{
            top: 15%;
        }
        .v3{
            top: 20%;
        }
        .v4{
            top: 30%;
        }
    </style>
</head>
<body>
    <div class="banner">
        <h1>LỚP HỌC</h1>
        <div class="banner-content">
            <div class="content">
                <p>Với mong muốn xây dựng câu lạc bộ ngày càng phát triển, phát huy truyền thống nhiều năm của câu lạc bộ, lớp học được mở ra xuyên suốt năm học để chia sẻ kiến thức, không những dành cho các bạn thành viên mà còn dành cho các bạn CTV tại Hà Nam. <br>
                Các leader, support - người chia sẽ kiến thức là những anh chị  đã học tại lớp học và có nền tảng kiến thức.</p>
                <button>Đăng kí ngay</button>
            </div>
            <div class="anh">
                <img src="app/asset/class.png" alt="">
            </div>
        </div>
    </div>
    <div class="pick">
        <div class="item">Tất cả</div>
        <div class="item">Sắp diễn ra</div>
        <div class="item">Đang diễn ra</div>
        <div class="item">Đã kết thúc</div>
    </div>
    <div class="list-class">
        <img class="vector v1" src="app/asset/Vector1.png" alt="">
        <img class="vector v5" src="app/asset/Vector5.png" alt="">
        <img class="vector v3" src="app/asset/Vector3.png" alt="">
        <img class="vector v4" src="app/asset/Vector4.png" alt="">
        <div class="list">
            <img src="app/asset/classc.png" alt="">
            <h2>Lớp C++</h2>
            <div>
            <p><span>Địa điểm: </span>  Hà Nam</p>
            <p><span>Thời gian: </span> Thứ 5</p>
            <p><span>Trạng thái: </span>Sắp diễn ra</p>
            </div>
            
            <button>Đăng kí</button>
        </div>
        <div class="list">
            <img src="app/asset/classpython.png" alt="">
            <h2>Lớp Python</h2>
            <div>
            <p><span>Địa điểm: </span>  Hà Nam</p>
            <p><span>Thời gian: </span> Thứ 5</p>
            <p><span>Trạng thái: </span>Sắp diễn ra</p>
            </div>
            
            <button>Đăng kí</button>
        </div>
        <div class="list">
            <img src="app/asset/classjava.png" alt="">
            <h2>Lớp Java</h2>
            <div>
            <p><span>Địa điểm: </span>  Hà Nam</p>
            <p><span>Thời gian: </span> Thứ 5</p>
            <p><span>Trạng thái: </span>Sắp diễn ra</p>
            </div>
            
            <button>Đăng kí</button>
        </div>
        <div class="list">
            <img src="app/asset/classps.png" alt="">
            <h2>Lớp Photoshop</h2>
            <div>
            <p><span>Địa điểm: </span>  Hà Nam</p>
            <p><span>Thời gian: </span> Thứ 5</p>
            <p><span>Trạng thái: </span>Sắp diễn ra</p>
            </div>
            
            <button>Đăng kí</button>
        </div>
        <div class="list">
            <img src="app/asset/classai.png" alt="">
            <h2>Lớp Thiết kế đồ họa</h2>
            <div>
            <p><span>Địa điểm: </span>  Hà Nam</p>
            <p><span>Thời gian: </span> Thứ 5</p>
            <p><span>Trạng thái: </span>Sắp diễn ra</p>
            </div>
            
            <button>Đăng kí</button>
        </div>
        <div class="list">
            <img src="app/asset/classjava.png" alt="">
            <h2>Lớp OOP</h2>
            <div>
            <p><span>Địa điểm: </span>  Hà Nam</p>
            <p><span>Thời gian: </span> Thứ 5</p>
            <p><span>Trạng thái: </span>Sắp diễn ra</p>
            </div>
            
            <button>Đăng kí</button>
        </div>
        <div class="list">
            <img src="app/asset/classhtml.png" alt="">
            <h2>Lớp Thiết kế web</h2>
            <div>
            <p><span>Địa điểm: </span>  Hà Nam</p>
            <p><span>Thời gian: </span> Thứ 5</p>
            <p><span>Trạng thái: </span>Sắp diễn ra</p>
            </div>
            
            <button>Đăng kí</button>
        </div>
        <div class="list">
            <img src="app/asset/classreact.png" alt="">
            <h2>Lớp ReactJS</h2>
            <div>
            <p><span>Địa điểm: </span>  Hà Nam</p>
            <p><span>Thời gian: </span> Thứ 5</p>
            <p><span>Trạng thái: </span>Sắp diễn ra</p>
            </div>
            
            <button>Đăng kí</button>
        </div>
        <div class="list">
            <img src="app/asset/classnode.png" alt="">
            <h2>Lớp NodeJS</h2>
            <div>
            <p><span>Địa điểm: </span>  Hà Nam</p>
            <p><span>Thời gian: </span> Thứ 5</p>
            <p><span>Trạng thái: </span>Sắp diễn ra</p>
            </div>
            
            <button>Đăng kí</button>
        </div>
    </div>
</body>
</html>
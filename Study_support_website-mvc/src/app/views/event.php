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
        .event{
            margin-top: 100px;
            margin-bottom: 200px;
            width: 90%;
            height: 500px;
            left: 159px;
            top: 258px;

            /* cl2 */

            background: #FFA95A;
            border-radius: 60px;
            
        }
        .event h1{
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 700;
            font-size: 40px;
            line-height: 160%;
            /* or 102px */

            text-align: center;

            /* white */

            color: #FFFFFF;
        }
        .event-item{
            display: flex;
            justify-content: space-around;
        }
        .card{
            
            width: 396px;
            height: 332px;
            display: flex;
            /* white */
            flex-direction: column;
            align-items: center;

        }
        .card img{
            margin-top: 10px;
            width: 90%;
            height: 75%;
        }
        .card h2{
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 700;
            font-size: 24px;
            line-height: 41px;
            color: white;
        }
        .card:hover{
            background: #FFFFFF;
/* shhw */
            scale: 1.05;
            transition: 0.5s;
            box-shadow: -10px 20px 32px rgba(0, 0, 0, 0.08);
            border-radius: 20px;
        }
        .card:hover h2{
            color: #EF8721;
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
        .openday{
            display: flex;
            flex-direction: column;
            width: 100%;
            height: 1300px;
            align-items: center;
        }
        .openday h1{
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 700;
            font-size: 40px;
            line-height: 160%;
            /* or 102px */

            text-align: center;
            color: #EF8721;
        }
        .openday h4{
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 700;
            font-size: 18px;
            line-height: 31px;
            align-self: flex-end;
            color: #2B2B2B;
            margin-right: 150px;
        }
        .openday span{
            color: #FFA95A;
        }
        .openday p{
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            line-height: 31px;
            text-align: justify;
            padding: 0 150px;
            /* text title */

            color: #2B2B2B;
        }
        .openday img{
            width: 85%;
            height: 736px;
            
        }
        .card img{
            border-radius: 40px;
        }
    </style>
</head>
<body>
    <div class="event">
    <img class="vector v1" src="app/asset/Vector1.png" alt="">
        <img class="vector v5" src="app/asset/Vector5.png" alt="">
        <img class="vector v3" src="app/asset/Vector3.png" alt="">
        <img class="vector v4" src="app/asset/Vector4.png" alt="">
        <h1>SỰ KIỆN</h1>
        <div class="event-item">
            <div class="card">
                <img src="app/asset/banod.png" alt="">
                <h2>HIT OPEN DAY</h2>
            </div>
            <div class="card">
                <img src="app/asset/teambuilding.jpg" alt="">
                <h2>Teambuilding </h2>
            </div>
            <div class="card">
            <img src="app/asset/contest.jpg" alt="">
                <h2>HIT Contest Series </h2>
            </div>
        </div>
    </div>
    <div class="openday">
        <h1>HIT OPEN DAY</h1>
        <h4>Người phụ trách: <span>Ngô Thế Tài</span> </h4>
        <p>HIT OPEN DAY là sự kiện thường niên lớn nhất của năm do CLB Tin học HIT với xâu chuỗi những hoạt động, nội dung đan xen học tập và giải trí vô cùng thú vị; nhằm mục đích tạo sân chơi trí tuệ, năng động cho các bạn sinh viên đam mê CNTT giao lưu, học hỏi và phát triển bản thân. Đặc biệt, đây cũng là lúc mà mọi người cùng nhìn lại hành trình học tập, hoạt động với hàng loạt chiến tích của CLB trong suốt một năm qua.
            Các cuộc thi trong khuôn khổ bao gồm .......
</p>
        <img src="app/asset/open.png" alt="">
        <p>HIT OPEN DAY là sự kiện thường niên lớn nhất của năm do CLB Tin học HIT với xâu chuỗi những hoạt động, nội dung đan xen học tập và giải trí vô cùng thú vị; nhằm mục đích tạo sân chơi trí tuệ, năng động cho các bạn sinh viên đam mê CNTT giao lưu, học hỏi và phát triển bản thân. Đặc biệt, đây cũng là lúc mà mọi người cùng nhìn lại hành trình học tập, hoạt động với hàng loạt chiến tích của CLB trong suốt một năm qua.
Các cuộc thi trong khuôn khổ bao gồm .......
</p>
    </div>
</body>
</html>
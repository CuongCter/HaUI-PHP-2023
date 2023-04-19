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
        .row-1{
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            height: auto;
            position: relative;
        }
        .row-1 h1{
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 700;
            font-size: 55px;
            color: #EF8721;
        }
        .row-1 h2{
            font-family: 'Google Sans';
            font-weight: 700;
            font-size: 30px;
        }
        .row-1 p{
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 400;
            font-size: 24px;
            padding: 0 210px;
            text-align: center ;
        }
        .pic{
            background: #FFF3E1;
            
            border-radius: 30px;
            width: 1052px;
            height: 650px;
        }
        .pic-item{
            filter: drop-shadow(0px 10px 30px rgba(0, 0, 0, 0.05));
            border-radius: 30px;
            width: 1052px;
            height: 670px;
        }
        .pic-item img{
            width: 100%;
            height: 100%;
        }
        .row-1 .bit1{
            position: absolute;
            top: 15%;
            right: 20%;
            height: 18px;
        }
        .bit2{
            position: absolute;
            top: 25%;
            left: 1%;
            height: 18px;
        }
        .bit3{
            position: absolute;
            top: 60%;
            right:  20%;
            height: 18px;
        }
        .bit4{
            position: absolute;
            top: 80%;
            right:  80%;
            height: 18px;
        }
        .bit5{
            position: absolute;
            top: 100%;
            right:  1%;
            height: 18px;
        }
        .row-1 p{
            color: black;
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
        .row-2{
            position: relative;
            margin-top: 200px;
            display: flex;
            width: 100%;
         
            height: 700px;
        }
        .row-2-pic{
            width: 50%;
            height: 100%;
            position: relative;
            margin-left: 100px;
        }
        .row-2 .row-2-pic .picnic{
           position: absolute;
           width: 566px;
            height: 292px;
           z-index: -1;
           left: 15%;
        }
        .row-2 .row-2-pic .open{
           position: absolute;
           width: 566px;
            height: 292px;
            top: 35%;
          
        }
        .row-2-content{
            width: 50%;
            
        }
        .row-2-content h1{
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 700;
            font-size: 36px;
            line-height: 61px;
            text-align: center;
            color: #2B2B2B;
            display: flex;

        }
        .row-2-content p{
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            line-height: 31px;
            text-align: justify;
            color: #2B2B2B;
            padding-right: 150px;
        }
        .row-2-content button{
            background: linear-gradient(74.62deg, #FDC830 8.22%, #F37335 92.59%);
            border-radius: 50px;
            border: none;
            width: 150px;
            height: 40px;
            
        }
        .row-2-content button a{
            color: #FFFFFF;
        }
        .tron{
            position: absolute;
        }
        .tron1{
            left: 0;
        }
        .tron2{
            right:0;
            top: 50%;
        }
        .row-3{
            display: flex;
            width: 100%;
            height: 700px;
        }
        .row-3-content{
            width: 50%;
        }
        .row-3-content h1{
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 700;
            font-size: 36px;
            line-height: 61px;
            text-align: center;
            color: #2B2B2B;
        }
        .row-3-content p{
            padding: 0 100px 0 150px;
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            line-height: 31px;
            text-align: justify;
            color: #2B2B2B;
        }
        .row-3-content button{
            background: linear-gradient(74.62deg, #FDC830 8.22%, #F37335 92.59%);
            border-radius: 50px;
            border: none;
            width: 150px;
            height: 40px;
            margin-top: 50px;
            margin-left: 150px;
        }
        .row-3-content button a{
            color: #FFFFFF;
            
        }
        .row-3-pic{
            width: 50%;
            position: relative;
        }
        .row-3-pic .icon{
            position: absolute; 
        }
        .java{
            width: 150.81px;
            height: 266.57px;
            top: 25%;
            right: 39%;
        }
        .js{
            width: 184.81px;
            height: 184.81px;
            top: 13%;
            right: 30%;
        }
        .ps{
            width: 107.59px;
            height: 105.16px;
            top: 50%;
            right:62%;
        }
        .python{
            width: 304.26px;
            height: 171.93px;
            top: 21%;
            right: 53%;
        }
        .ai{
            width: 107.65px;
            height: 105.52px;
            top: 32%;
            right: 15%;
        }
        .c{
            width: 99.33px;
            height: 111.4px;
            top: 55%;
            right: 30%;
        }
        .row-4{
            width: 100%;
            height: 800px;
            position: relative;
        }
        .row-4 h1{
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 700;
            font-size: 36px;
            line-height: 61px;
            text-align: center;
            color: #2B2B2B;
        }
        .row-4-content{
            width: 100%;
            display: flex;
            justify-content: space-around;
           
        }
        .bcn-item{
            margin-top: 70px;
            width: 328px;
            height: 430px;
            background: #FFFFFF;
            /* cl2 */

            border: 1px solid #FFA95A;
            /* shhw */
            box-shadow: -10px 20px 32px rgba(0, 0, 0, 0.08);
            border-radius: 60px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .bcn-item img{
            width: 300px;
            height: 290px;
            left: 178px;
            top: 3851.34px;
            border-radius: 50px;
            margin-top: 10px;
            object-fit: cover;
        }
        .bcn-item h2{
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 700;
            font-size: 24px;
            text-align: center;

            /* text title */

            color: #2B2B2B;
        }
        .bcn-item p{
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            margin: 0;
            /* identical to box height */

            text-align: center;

            /* text title */

            color: #2B2B2B;
        }
    </style>
</head>

<body>
    <div class="row-1">
        <img class="bit1" src="app/asset/101010110011.png" alt="">
        <img class="bit2" src="app/asset/101010110011.png" alt="">
        <img class="bit3" src="app/asset/101010110011.png" alt="">
        <img class="bit4" src="app/asset/101010110011.png" alt="">
        <img class="bit5" src="app/asset/101010110011.png" alt="">
        <img class="vector v1" src="app/asset/Vector1.png" alt="">
        <img class="vector v5" src="app/asset/Vector5.png" alt="">
        <img class="vector v3" src="app/asset/Vector3.png" alt="">
        <img class="vector v4" src="app/asset/Vector4.png" alt="">
        <h1>CÂU LẠC BỘ TIN HỌC - HIT</h1>
        <h2>TRƯỜNG ĐẠI HỌC CÔNG NGHIỆP HÀ NỘI</h2>
        <p>Câu lạc bộ Tin học - HIT là Câu lạc bộ học thuật của Khoa CNTT - Trường Đại học Công Nghiệp Hà Nội. 
            HIT được thành lập vào ngày 18/08/2010 và có trụ sở tại tầng 9, tòa nhà A1,  Cơ sở 1 - Hà Nội.</p>
        <div class="pic">
            <div class="pic-item">
                <img  src="app/asset/banner.png" alt="">
            </div>
        </div>
    </div>
    <div class="row-2">
        <img class="tron tron1" src="app/asset/tron.png" alt="">
        <img class="tron tron2" src="app/asset/tron2.png" alt="">
        <div class="row-2-pic">
            <img class="picnic"  src="app/asset/picnic.png" alt="">
            <img class="open" src="app/asset/hitopen.png" alt="">
        </div>
        <div class="row-2-content">
            <h1>SỰ KIỆN TRONG NĂM</h1>
            <p>Ngoài việc học tập, Câu lạc bộ HIT còn đẩy mạnh các hoạt động nhằm tạo sân chơi bổ ích cho các bạn thành viên. 
            Những cuộc thi được tổ chức nhằm mục đích giúp các bạn giao lưu, học hỏi về những kiến thức liên quan đến chuyên ngành. Thêm vào đó là những hoạt động vui chơi, giải trí để các thành viên có thể kết nối với nhau nhiều hơn và tạo thêm không khí vui vẻ sau thời gian học tập căng thẳng</p>
            <button><a href="">Xem thêm</a></button>
        </div>
        
    </div>
    <div class="row-3">
        <img class="vector v3-1" src="app/asset/Vector3-1.png" alt="">
        <img class="vector v4-1" src="app/asset/Vector4-1.png" alt="">
        <img class="vector v5-1" src="app/asset/Vector5-1.png" alt="">
        
        <div class="row-3-content">
            <h1>LỚP HỌC</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
            <button><a href="">Xem thêm</a></button>
        </div>
        <div class="row-3-pic">
            <img  class="icon java" src="app/asset/java.png" alt="">
            <img  class="icon ai" src="app/asset/ai.png" alt="">
            <img  class="icon js" src="app/asset/js.png" alt="">
            <img  class="icon python" src="app/asset/python.png" alt="">
            <img  class="icon c" src="app/asset/c.png" alt="">
            <img  class="icon ps" src="app/asset/ps.png" alt="">
        </div>
    </div>
    <div class="row-4">
    <img class="vector v1" src="app/asset/Vector1.png" alt="">
        <img class="vector v5" src="app/asset/Vector5.png" alt="">
        <img class="vector v3" src="app/asset/Vector3.png" alt="">
        <img class="vector v4" src="app/asset/Vector4.png" alt="">
        <h1>BAN CHỦ NHIỆM</h1>
        <div class="row-4-content">
            <div class="bcn-item">
                <img src="app/asset/Mai.jpg" alt="">
                <h2>Hoàng Thị Sao Mai</h2>
                <p>Phó chủ nhiệm</p>
            </div>
            <div class="bcn-item">
                <img src="app/asset/Cuong.jpg" alt="">
                <h2>Phạm Văn Cương</h2>
                <p>Chủ nhiệm</p>
            </div>
            <div class="bcn-item">
                <img src="app/asset/Tai.jpg" alt="">
                <h2>Ngô Thế Tài</h2>
                <p>Phó chủ nhiệm</p>
            </div>
        </div>
    </div>
</body>
</html>
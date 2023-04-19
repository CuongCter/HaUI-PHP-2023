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
        .title{
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 700;
            font-size: 64px;
            line-height: 160%;
            /* or 102px */

            text-align: center;

            /* button */

            color: #EF8721; 
        }
        table {
            border-style: none;
            height: auto;
            /* Light/background */

            background: #FFFFFF;
            /* shhw */

            box-shadow: -10px 20px 32px rgba(0, 0, 0, 0.08);
            border-radius: 40px;
            margin-bottom: 40px
        }
        td{
            padding: 20px 70px;
            font-family: 'Google Sans';
            font-style: normal;

            font-size: 16px;
            /* text title */
            text-align:center;
            color: #2B2B2B;
        }
        .search{
            width: 48px;
            height: 48px;
            align-self: flex-end;
            margin-right: 150px;
            margin-bottom: 20px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1 class=title>DANH SÁCH THÀNH VIÊN</h1>
    <img class="search" src="app/asset/search.png" alt="">
    <table border=0>
        <tr  style="background-color: #EF8721;">
            <td  style="font-weight: 700; color:white ; border-radius:40px 0 0 0; ">STT</td>
            <td style="font-weight: 700; color:white">Họ và Tên</td>
            <td style="font-weight: 700; color:white">Lớp</td>
            <td style="font-weight: 700; color:white">Khóa</td>
            <td style="font-weight: 700; color:white">Năm tham gia</td>
            <td style="font-weight: 700; color:white; border-radius: 0 40px 0 0;">Nơi công tác</td>
        </tr>
        <tr >
            <td>0</td>
            <td>Đàm Mạnh Đào</td>
            <td>CNTT03</td>
            <td>K15 </td>
            <td align="center">2021</td>
            <td>DHCNHN</td>
        </tr>
        <tr >
            <td>1</td>
            <td>Phạm Văn Cương</td>
            <td>CNTT01</td>
            <td>K15</td>
            <td align="center">2021</td>
            <td>DHCNHN</td>
        </tr>
        <tr >
            <td>2</td>
            <td>Ma Thị Nhị Hằng</td>
            <td>CNTT01</td>
            <td>K15</td>
            <td align="center">2021</td>
            <td>DHCNHN</td>
        </tr>
        <tr >
            <td>3</td>
            <td>Nguyễn Đình Huân</td>
            <td>KTMT02</td>
            <td>K14</td>
            <td align="center">2020</td>
            <td>VTI</td>
        </tr>
        <tr >
            <td>4</td>
            <td>Nguyễn Thị Minh</td>
            <td>KHMT01</td>
            <td>K15 </td>
            <td align="center">2021</td>
            <td>DHCNHN</td>
        </tr>
        <tr >
            <td>5</td>
            <td>Diệp Thị Linh</td>
            <td>CNTT01</td>
            <td>K15 </td>
            <td align="center">2021</td>
            <td>DHCNHN</td>
        </tr>
        <tr >
            <td colspan="6" align="center">1 &nbsp &nbsp 2  &nbsp &nbsp  3 .&nbsp.&nbsp. 7  &nbsp &nbsp  8  &nbsp &nbsp     9</td>    
        </tr>
    </table>
</body>
</html>
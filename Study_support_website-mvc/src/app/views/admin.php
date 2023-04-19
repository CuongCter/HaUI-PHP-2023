<?php
	if(!isset($_SESSION['msv'])){
		echo '<meta http-equiv="refresh" content="0;url=login">'; 
	}
	// require 'app/views/libs/model.php';
	require 'app/views/libs/students.php';
	$students = get_all_users();
	require 'app/views/libs/event.php'; 	   
	$events = get_all_events();
    disconnect_db();
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="app/views/admin.css">

	<title>AdminHub</title>
</head>
<body>

	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">AdminHIT</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a id="tv" href="#">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Quản lý thành viên</span>
				</a>
			</li>
			<li>
				<a id="member" href="#">
					
                    <i class='bx bxs-group' ></i>
					<span class="text">Quản lý đơn</span>
				</a>
			</li>
			<li>
				<a id="finance" href="#">
					
                    <i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Quản lý tài chính</span>
				</a>
			</li>
			<li>
				<a id="class" href="#">
                <i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Quản lý lớp học</span>
				</a>
			</li>
			<li>
				<a id="event" href="#">
					<i class='bx bxs-group' ></i>
					<span class="text">Quản lý sự kiện</span>
				</a>
			</li>
            <li>
				<a id="blog" href="#">
                
                <i class='bx bxs-message-dots' ></i>
					<span class="text">Quản lý bài viết</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
				<a href="/logout" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Tìm kiếm</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="app/asset/avt.png">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
				<a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a>
			</div>

			<ul class="box-info">
				<li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
						<h3>3</h3>
						<p>New Blog</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3>402</h3>
						<p>Member</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
						<h3>10.403.170 đ</h3>
						<p>Total Finance</p>
					</span>
				</li>
			</ul>


			<div class="table-data">
            <div id="ordertv" class="order ordertv">
					<div class="head">
						<h3>Member</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
								<th>User</th>
								<th>MSV</th>
								<th>Class</th>
								<th>Course</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($students as $item){ ?>
								<tr>
									<td>
										<img src="app/asset/avt.png">
										<p><?php echo $item['userName']; ?></p>
									</td>
									<td><?php echo $item['useMsv']; ?></td>
									<td><?php echo $item['classUni']; ?></td>
									<td><?php echo $item['course']; ?></td>
									<td>
										<form method="post" action="studentdelete">
											<input style="border: none" class="status completed" onclick="window.location = 'studentedit?id=<?php echo $item['userID']; ?>'" type="button" value="Sửa"/>
											<input type="hidden" name="ID" value="<?php echo $item['userID']; ?>"/>
											<input  style="border: none" class="status pending" onclick="return confirm('Bạn có chắc muốn xóa không?');" type="submit" name="delete" value="Xóa"/>
											
										</form>
									</td>
								</tr>
							<?php } ?>
							
						</tbody>
					</table>
				</div>
				<div id="order" class="order">
					<div class="head">
						<h3>Recent Orders</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
								<th>User</th>
								<th>Date Order</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<img src="app/asset/avt.png">
									<p>Duy Quân</p>
								</td>
								<td>2022-03-12 22:33:59</td>
								<td><span class="status completed">Completed</span></td>
							</tr>
							<tr>
								<td>
									<img src="app/asset/avt.png">
									<p>Trà Mi</p>
								</td>
								<td>2022-04-01 20:12:14</td>
								<td><span class="status completed">Completed</span></td>
							</tr>
							<tr>
								<td>
									<img src="app/asset/avt.png">
									<p>Duy Đông</p>
								</td>
								<td>2022-03-25 10:43:59</td>
								<td><span class="status pending">Process</span></td>
							</tr>
							<tr>
								<td>
									<img src="app/asset/avt.png">
									<p>Thảo Vân</p>
								</td>
								<td>2022-03-2 12:33:9</td>
								<td><span class="status pending">Pending</span></td>
							</tr>
							<tr>
								<td>
									<img src="app/asset/avt.png">
									<p>Hoàng Phương</p>
								</td>
								<td>2022-03-12 5:30:1</td>
								<td><span class="status completed">Completed</span></td>
							</tr>
						</tbody>
					</table>
				</div>
                <div id="order2" class="order order2">
					<div class="head">
						<h3>Finance</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
								<th>Content</th>
								<th>Date </th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									
									<p>HIT OPENDAY</p>
								</td>
								<td>01-1-2023</td>
								<td><span class="status pending">-820.000 đ</span></td>
							</tr>
							<tr>
								<td>
									
									<p>Team Building</p>
								</td>
								<td>04-12-2022</td>
								<td><span class="status pending">-2.300.000 đ</span></td>
							</tr>
							<tr>
								<td>
									
									<p>HIT Contest</p>
								</td>
								<td>05-9-2022</td>
								<td><span class="status pending">-560.000 đ</span></td>
							</tr>
							<tr>
								<td>
									
									<p>Anh Huân K14 tài trợ</p>
								</td>
								<td>01-9-2022</td>
								<td><span class="status completed">+500.000 đ</span></td>
							</tr>
							
						</tbody>
					</table>
				</div>
				<div id="order3" class="order order3">
					<div class="head">
						<h3>Class</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
								<th>Name</th>
								<th>Class </th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									
									<p>Tiến Anh</p>
								</td>
								<td>NodeJS</td>
								<td><span class="status pending">Đăng kí</span></td>
							</tr>
							<tr>
								<td>
									
									<p>Minh Nghĩa</p>
								</td>
								<td>Python</td>
								<td><span class="status completed">Đang học</span></td>
							</tr>
							<tr>
								<td>
									
									<p>Hằng Mai</p>
								</td>
								<td>Đồ họa</td>
								<td><span class="status pending">Đăng kí</span></td>
							</tr>
							<tr>
								<td>
									
									<p>Dương Trinh</p>
								</td>
								<td>C++</td>
								<td><span class="status completed">Đang học</span></td>
							</tr>
							
						</tbody>
					</table>
				</div>
                <div id="order4" class="order order4">
					<div class="head">
						<h3>Event</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
								<th>Event</th>
								<th>Content</th>
								<th>Date</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
						<?php foreach ($events as $item){ ?>
							<tr>
								<td>
									
									<p><?php echo $item['eventName']; ?></p>
								</td>
								<td><?php echo $item['eventContent']; ?></td>
								<td><?php echo $item['eventDay']; ?></td>
								<td>
									<form method="post" action="eventdelete">
										<input style="border: none"class="status completed"  onclick="window.location = 'eventedit?id=<?php echo $item['eventID']; ?>'" type="button" value="Sửa"/>
										<input type="hidden" name="ID" value="<?php echo $item['eventID']; ?>"/>
										<input style="border: none" class="status pending" onclick="return confirm('Bạn có chắc muốn xóa không?');" type="submit" name="delete" value="Xóa"/>
									</form>
                				</td>
							</tr>
							
						<?php } ?>

						</tbody>
					</table>
				</div>
				<div id="order5" class="order order5">
					<div class="head">
						<h3>Blog</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
								<th>Name</th>
								<th>Date</th>
								<th>Content</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>	
									<p>Đinh Anh Minh</p>
								</td>
								<td>8-2-2023</td>
								<td> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem sequi iure voluptas eum quas aspernatur labore numquam vitae velit. Cumque nihil saepe porro, soluta quas exercitationem aspernatur necessitatibus nisi consectetur. </td>
								<td><span class="status completed">Duyệt</span></td>
								<td><span class="status pending">Xóa</span></td>
							</tr>
							<tr>
								<td>
									
									<p>Thu Trà</p>
								</td>
								<td>27-2-2023</td>
								<td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem sequi iure voluptas eum quas aspernatur labore numquam vitae velit. Cumque nihil saepe porro, soluta quas exercitationem aspernatur necessitatibus nisi consectetur.</td>
								<td><span class="status completed">Duyệt</span></td>
								<td><span class="status pending">Xóa</span></td>
							</tr>
                            <tr>
								<td>
									
									<p>Duy Quân</p>
								</td>
								<td>3-1-2023</td>
								<td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem sequi iure voluptas eum quas aspernatur labore numquam vitae velit. Cumque nihil saepe porro, soluta quas exercitationem aspernatur necessitatibus nisi consectetur.</td>
								<td><span class="status completed">Duyệt</span></td>
								<td><span class="status pending">Xóa</span></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script >
        const allSideMenu = document.querySelectorAll('#sidebar .side-menu.top li a');

        allSideMenu.forEach(item=> {
            const li = item.parentElement;

            item.addEventListener('click', function () {
                allSideMenu.forEach(i=> {
                    i.parentElement.classList.remove('active');
                })
                li.classList.add('active');
            })
        });




        // TOGGLE SIDEBAR
        const menuBar = document.querySelector('#content nav .bx.bx-menu');
        const sidebar = document.getElementById('sidebar');

        menuBar.addEventListener('click', function () {
            sidebar.classList.toggle('hide');
        })

        
const searchButton = document.querySelector('#content nav form .form-input button');
const searchButtonIcon = document.querySelector('#content nav form .form-input button .bx');
const searchForm = document.querySelector('#content nav form');

searchButton.addEventListener('click', function (e) {
	if(window.innerWidth < 576) {
		e.preventDefault();
		searchForm.classList.toggle('show');
		if(searchForm.classList.contains('show')) {
			searchButtonIcon.classList.replace('bx-search', 'bx-x');
		} else {
			searchButtonIcon.classList.replace('bx-x', 'bx-search');
		}
	}
})





        if(window.innerWidth < 768) {
            sidebar.classList.add('hide');
        } else if(window.innerWidth > 576) {
            searchButtonIcon.classList.replace('bx-x', 'bx-search');
            searchForm.classList.remove('show');
        }


        window.addEventListener('resize', function () {
            if(this.innerWidth > 576) {
                searchButtonIcon.classList.replace('bx-x', 'bx-search');
                searchForm.classList.remove('show');
            }
        })



        const switchMode = document.getElementById('switch-mode');

        switchMode.addEventListener('change', function () {
            if(this.checked) {
                document.body.classList.add('dark');
            } else {
                document.body.classList.remove('dark');
            }
        })

        const tv = document.getElementById('tv')
        tv.addEventListener('click', function () {     
                ordertv.classList.add('order')
                order2.classList.add('order2')
                order.classList.add('none')
                ordertv.classList.remove('ordertv')
                order3.classList.add('order3')  
				order5.classList.add('none')
				order4.classList.add('order4')
               
        })
        const member = document.getElementById('member')
        member.addEventListener('click', function () {     
                order.classList.add('order')
                order2.classList.add('order2')
                order.classList.remove('none')
                order3.classList.add('order3')
                ordertv.classList.add('ordertv')
                order4.classList.add('order4')
				order5.classList.add('none')
        })
        const fi = document.getElementById('finance')

        const order = document.getElementById('order')
        fi.addEventListener('click', function () {     
                order.classList.add('none')
                order3.classList.add('order3')
                order2.classList.remove('order2')
                ordertv.classList.add('ordertv')
                order4.classList.add('order4') 
				order5.classList.add('none')        
        })
        const class1 = document.getElementById('class')
        class1.addEventListener('click', function () {     
                order.classList.add('none')
                order2.classList.add('order2')
                order3.classList.remove('order3')
                ordertv.classList.add('ordertv')
                order4.classList.add('order4')
				order5.classList.add('none')
        })
        const event = document.getElementById('event')
        event.addEventListener('click', function () {     
                order.classList.add('none')
                order2.classList.add('order2')
                order3.classList.add('order3')
                order4.classList.remove('order4')
                ordertv.classList.add('ordertv')
				order5.classList.add('none')
        })
		const blog = document.getElementById('blog')
		blog.addEventListener('click', function () {     
                order.classList.add('none')
                order2.classList.add('order2')
                order3.classList.add('order3')
                order4.classList.add('order4')
                ordertv.classList.add('ordertv')
				order5.classList.remove('none')
				order5.classList.remove('order5')
				console.log('a');
        })
    </script>
    
</body>
</html>
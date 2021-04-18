<!DOCTYPE html>
<html>
<head>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@100&display=swap" rel="stylesheet">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-widht">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="wrapper">
		<header class="header">
			<div class="container col-12">
				<div class="header_row col-12">
					<a href="main.php">
						<div class="header_logo col-2">
						</div>
					</a>
					<div class="header_slogan col-2">
						<h4 class="header_text">Смотри в будущее с Uniford’ом!</h4>
					</div>
					<div class="btn_div">
						<button class="btn_modal"><img class="img" src="img/3.png"></button>
					</div>
				</div>
			</div>
		</header>
		<div class="start_block">
			<div class="unifond_photo col-3">
			</div>
			<div class="inv-unifond_photo col-3"></div>
			<div class="inv-unifond_photo2 col-3"></div>
			<div class="text_container col-9">
				<div class="main_text_center col-8">
					<h1 class="start_text">Тесты и статьи</h1>
					<h1 class="start_text">по информационной</h1>
					<h1 class="start_text">грамотности</h1>
				</div>
				<div class="menu_window col-4">
					<div class="menu_header col-12">
						<div class="menu_cancel_box">
							<button class="cancel_btn"><img class="cancel_btn_image mt-1" src="img/cancel.png"></button>
						</div>
						<div class="menu_blocks_container">
							<a class="links" href="join.php">
								<div class="menu_block1 col-10 mx-auto border">
									<h1 class="menu_text">Вход</h1>
								</div>
							</a>
							<a class="links" href="tests.php">
								<div class="menu_block col-10 mx-auto border">
									<h1 class="menu_text">Тесты</h1>
								</div>
							</a>
							<a class="links" href="article.php">
								<div class="menu_block col-10 mx-auto border">
									<h1 class="menu_text">Статьи</h1>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="overlay"></div>
		</div>
		<div class="rotate_main ">
		</div>
		<div class="straight_main col-12">
			<div class="main_text_block col-10 mx-auto">
				<h1 class="main_text">Мы команда Uniford</h1>
				<h1 class="main_text">делаем тесты и статьи по информационной грамотности</h1>
			</div>
		</div>
		<div class="rotate_main2">
		</div>
		<div class="straight_main2">
			<div class="footer_row col-12">
				<div style="background-image: url(img/почта.png);" class="footer mx-auto">
					<h1 class="footer_text mx-auto">ootoivanov</h1>
					<h1 class="footer_text2 mx-auto">@gmail.com</h1>
				</div>
				<div style="background-image: url(img/телефон.png);" class="footer mx-auto">
					<h1 class="footer_text mx-auto">+79151082866</h1>
				</div>
				<div style="background-image: url(img/местоположение.png);" class="footer mx-auto">
					<h1 class="footer_text mx-auto">203-й </h1>
					<h1 class="footer_text2 mx-auto">микрорайон,33</h1>
				</div>
			</div>
		</div>
	</div>
<script type="text/javascript">
	let header_btn = document.querySelector(".btn_modal");
	let text_center = document.querySelector(".main_text_center");
	let menu_window = document.querySelector(".menu_window");
	let unifond_photo = document.querySelector(".unifond_photo");
	let inv_unifond_photo = document.querySelector(".inv-unifond_photo");
	let inv_unifond_photo2 = document.querySelector(".inv-unifond_photo2");
	let cancel_btn = document.querySelector(".cancel_btn");

	logo = function(){
		inv_unifond_photo.style.display = "none";
	}
	logo2 = function(){
		inv_unifond_photo2.style.display = "none";
		unifond_photo.style.display = "block";
	}
	header_btn.onclick = function(){
		menu_window.style.left = "1243" + "px";
		menu_window.style.transition = "3s";
		text_center.style.left = "-20" + "px";
		text_center.style.transition = "3s";
		unifond_photo.style.display = "none";
		inv_unifond_photo.style.display = "block";
		setTimeout(logo, 3000);
	}
	cancel_btn.onclick = function(){
		menu_window.style.left = "2000" + "px";
		menu_window.style.transition = "1s";
		text_center.style.left = "550" + "px";
		text_center.style.transition = "1s";
		inv_unifond_photo2.style.display = "block";
		setTimeout(logo2, 1000);
	}
</script>
</body>
</html>
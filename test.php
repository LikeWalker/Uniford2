<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-widht">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php
	$con = mysqli_connect('127.0.0.1:3306', 'root','','Uniford');
    $questions = mysqli_query($con, "SELECT * FROM questions");
    $stroka = $questions->fetch_assoc();
    ?>
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
						<a class="links" href="articles.php">
							<div class="menu_block col-10 mx-auto border">
								<h1 class="menu_text">Статьи</h1>
							</div>
						</a>
					</div>
				</div>
			</div>
		<div class="test_block col-12">
			<div class="test_name_block col-10 mx-auto">
				<h1 class="test_text">Информационная</h1>
				<h1 class="test_text">Безопасность</h1>
			</div>
			<div class="test1">
				<div class="test_question_block col-8 mx-auto">
					<h1 class="question_text">1/10. Вы используете везде одинаковые пароли для входа в цифровую среду?</h1>
				</div>
				<div class="answers_block col-11 mx-auto">
					<div class="answers_row col-12">
						<div class="answers1 col-5 false1">
							<h1 class="answers_text"> Да</h1>
						</div>
						<div class="answers2 col-5 true1">
							<h1 class="answers_text"> Нет</h1>
						</div>
					</div>
				</div>
				<div style="display: none;" class="test_question_block col-8 mx-auto future introduction2">
					<h1 class="question_text">Вы набрали <span class="scores"></span> баллов, <span class="text_assesment"></span>></h1>
				</div>
			</div>
				<!--Второй вопрос -->
			<div class="test2 none">
				<div class="test_question_block col-8 mx-auto">
					<h1 class="question_text">2/10.Если Вам пришло письмо от неизвестного отправителя с неизвестным содержимым. Вы откроете?</h1>
				</div>
				<div class="answers_block col-11 mx-auto">
					<div class="answers_row col-12">
						<div class="answers1 col-5 false2">
							<h1 class="answers_text"> Да</h1>
						</div>
						<div class="answers2 col-5 true2">
							<h1 class="answers_text"> Нет</h1>
						</div>
					</div>
				</div>
			</div>
			<div class="test3 none">
				<div class="test_question_block col-8 mx-auto">
					<h1 class="question_text">3/10. Вы согласны с утверждением, что в интернете всегда представлена правдивая информация </h1>
				</div>
				<div class="answers_block col-11 mx-auto">
					<div class="answers_row col-12">
						<div class="answers1 col-5 false3">
							<h1 class="answers_text"> Да</h1>
						</div>
						<div class="answers2 col-5 true3">
							<h1 class="answers_text"> Нет</h1>
						</div>
					</div>
				</div>
			</div>
			<div class="test4 none">
				<div class="test_question_block col-8 mx-auto">
					<h1 class="question_text">4/10. Пользуетесь ли антивирусами?</h1>
				</div>
				<div class="answers_block col-11 mx-auto">
					<div class="answers_row col-12">
						<div class="answers1 col-5 true4">
							<h1 class="answers_text"> Да</h1>
						</div>
						<div class="answers2 col-5 false4">
							<h1 class="answers_text"> Нет</h1>
						</div>
					</div>
				</div>
			</div>
			<div class="test5 none">
				<div class="test_question_block col-8 mx-auto">
					<h1 class="question_text">5/10.Вы знаете, как нужно создать пароль трудный для подбора?</h1>
				</div>
				<div class="answers_block col-11 mx-auto">
					<div class="answers_row col-12">
						<div class="answers1 col-5 true5">
							<h1 class="answers_text"> Да</h1>
						</div>
						<div class="answers2 col-5 false5">
							<h1 class="answers_text"> Нет</h1>
						</div>
					</div>
				</div>
			</div>
			<div class="test6 none">
				<div class="test_question_block col-8 mx-auto">
					<h1 class="question_text">6/10. Используете ли вы плагины для защиты?</h1>
				</div>
				<div class="answers_block col-11 mx-auto">
					<div class="answers_row col-12">
						<div class="answers1 col-5 false6">
							<h1 class="answers_text"> Да</h1>
						</div>
						<div class="answers2 col-5 true6">
							<h1 class="answers_text"> Нет</h1>
						</div>
					</div>
				</div>
			</div>
			<div class="test7 none">
				<div class="test_question_block col-8 mx-auto">
					<h1 class="question_text">7/10. Ограничиваете ли Вы размещение личной информации в социальных сетях для защиты от мошенников?</h1>
				</div>
				<div class="answers_block col-11 mx-auto">
					<div class="answers_row col-12">
						<div class="answers1 col-5 true7">
							<h1 class="answers_text">Да</h1>
						</div>
						<div class="answers2 col-5 false7">
							<h1 class="answers_text">Нет</h1>
						</div>
					</div>
				</div>
			</div>
			<div class="test8 none">
				<div class="test_question_block col-8 mx-auto">
					<h1 class="question_text">8/10. Пользуетесь ли вы непроверенным программным обеспечением на своих устройствах?</h1>
				</div>
				<div class="answers_block col-11 mx-auto">
					<div class="answers_row col-12">
						<div class="answers1 col-5 false8">
							<h1 class="answers_text"> Да</h1>
						</div>
						<div class="answers2 col-5 true8">
							<h1 class="answers_text"> Нет</h1>
						</div>
					</div>
				</div>
			</div>
			<div class="test9 none">
				<div class="test_question_block col-8 mx-auto">
					<h1 class="question_text">9/10. Страдали ли вы от вирусов в последние полгода?</h1>
				</div>
				<div class="answers_block col-11 mx-auto">
					<div class="answers_row col-12">
						<div class="answers1 col-5 false9">
							<h1 class="answers_text"> Да</h1>
						</div>
						<div class="answers2 col-5 true9">
							<h1 class="answers_text"> Нет</h1>
						</div>
					</div>
				</div>
			</div>
			<div class="test10 none">
				<div class="test_question_block col-8 mx-auto">
					<h1 class="question_text">10/10. Создаёте ли вы копии ваших цифровых данных?</h1>
				</div>
				<div class="answers_block col-11 mx-auto">
					<div class="answers_row col-12">
						<div class="answers1 col-5 true10">
							<h1 class="answers_text"> Да</h1>
						</div>
						<div class="answers2 col-5 false10">
							<h1 class="answers_text"> Нет</h1>
						</div>
					</div>
				</div>
			</div>
				<!--
				<div class="col-10 mx-auto text-left rick-introduction introduction2 none">
					<p>Значит, ты набрал <span class="score"></span><span class="scores"></span> баллов, <span class="rick-assessment"></span></p>
				</div>
				-->
				<div style="display: none;" class="test_question_block col-8 mx-auto future introduction2">
					<h1 class="question_text">Вы набрали <span class="scores"></span> баллов, <span class="text_assesment"></span></h1>
				</div>
			</div>
		</div>
	</div>
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
<script type="text/javascript">
	let header_btn = document.querySelector(".btn_modal");
	let text_center = document.querySelector(".main_text_center");
	let menu_window = document.querySelector(".menu_window");
	let cancel_btn = document.querySelector(".cancel_btn");
	let test1 = document.querySelector('.test1');
	let true_answer1 = document.querySelector('.true1');
	let false_answer1 = document.querySelectorAll('.false1');
	let test2 = document.querySelector('.test2');
	let true_answer2 = document.querySelector('.true2');
	let false_answer2 = document.querySelectorAll('.false2');
	let test3 = document.querySelector('.test3');
	let true_answer3 = document.querySelector('.true3');
	let false_answer3 = document.querySelectorAll('.false3');
	let test4 = document.querySelector('.test4');
	let true_answer4 = document.querySelector('.true4');
	let false_answer4 = document.querySelectorAll('.false4');
	let test5 = document.querySelector('.test5');
	let true_answer5 = document.querySelector('.true5');
	let false_answer5 = document.querySelectorAll('.false5');
	let test6 = document.querySelector('.test6');
	let true_answer6 = document.querySelector('.true6');
	let false_answer6 = document.querySelectorAll('.false6');
	let test7 = document.querySelector('.test7');
	let true_answer7 = document.querySelector('.true7');
	let false_answer7 = document.querySelectorAll('.false7');
	let test8 = document.querySelector('.test8');
	let true_answer8 = document.querySelector('.true8');
	let false_answer8 = document.querySelectorAll('.false8');
	let test9 = document.querySelector('.test9');
	let true_answer9 = document.querySelector('.true9');
	let false_answer9 = document.querySelectorAll('.false9');
	let test10 = document.querySelector('.test10');
	let true_answer10 = document.querySelector('.true10');
	let false_answer10 = document.querySelectorAll('.false10');
	header_btn.onclick = function(){
		menu_window.style.left = "1243" + "px";
		menu_window.style.transition = "1s";
		text_center.style.left = "-20" + "px";
		text_center.style.transition = "1s";
	}
	cancel_btn.onclick = function(){
		menu_window.style.left = "2000" + "px";
		menu_window.style.transition = "1s";
		text_center.style.left = "550" + "px";
		text_center.style.transition = "1s";
	}
	let intro = document.querySelector('.introduction2');
		let testAssessment = document.querySelector('.text_assesment');
		let scores = document.querySelector('.score');
		let yes = 1;
		let score = 0;
		let scorePoints = function(){
		score = score + yes;
		scores.innerHTML = score;
		}
		let none1 = function(){
			test1.style.display = "none";
			test2.style.display = "block";
		}
		let beaty1 = function(){
			test1.style.opacity = 1;
			test1.style.transition = 2 + "s";
		}
		let none2 = function(){
			test2.style.display = "none";
			test3.style.display = "block";
		}
		let beaty2 = function(){
			test2.style.opacity = 1;
			test2.style.transition = 2 + "s";
		}
		let none3 = function(){
			test3.style.display = "none";
			test4.style.display = "block";
		}
		let beaty3 = function(){
			test3.style.opacity = 1;
			test3.style.transition = 2 + "s";
		}
		let none4 = function(){
			test4.style.display = "none";
			test5.style.display = "block";
		}
		let beaty4 = function(){
			test4.style.opacity = 1;
			test4.style.transition = 2 + "s";
		}
		let none5 = function(){
			test5.style.display = "none";
			test6.style.display = "block";
		}
		let beaty5 = function(){
			test5.style.opacity = 1;
			test5.style.transition = 2 + "s";
		}
		let none6 = function(){
			test6.style.display = "none";
			test7.style.display = "block";
		}
		let beaty6 = function(){
			test6.style.opacity = 1;
			test6.style.transition = 2 + "s";
		}
		let none7 = function(){
			test7.style.display = "none";
			test8.style.display = "block";
		}
		let beaty7 = function(){
			test7.style.opacity = 1;
			test7.style.transition = 2 + "s";
		}
		let none8 = function(){
			test8.style.display = "none";
			test9.style.display = "block";
		}
		let beaty8 = function(){
			test8.style.opacity = 1;
			test8.style.transition = 2 + "s";
		}
		let none9 = function(){
			test9.style.display = "none";
			test10.style.display = "block";
		}
		let beaty9 = function(){
			test1.style.opacity = 1;
			test1.style.transition = 2 + "s";
		}
		let none10 = function(){
			test10.style.display = "none";
		}
		let beaty10 = function(){
			intro.style.display = "block";
		}
			if (score <= 5) {
				testAssessment.innerHTML = "это значит что вы в группе риска";
			}
			if (score >= 6) {
				testAssessment.innerHTML = "это значит что вам надо задуматься о том, чтобы расширить свои познания в области безопасности";
			}
			if (score >= 8) {
				testAssessment.innerHTML = "это значит что вы заботитесь о своей безопасности";
			}
			true_answer1.onclick = function(){
				test1.style.opacity = 0;
				test1.style.transition = 2.5 + "s";
				setTimeout(none1, 2000);
				setTimeout(beaty1, 2500);
				scorePoints();
			}
			for( let i = 0; i < false_answer1.length; i++){
		   		false_answer1[i].onclick = function(){
		   			test1.style.opacity = 0;
					test1.style.transition = 1.9 + "s";
					setTimeout(none1, 2000);
					setTimeout(beaty1, 2500);
		   		}
		 	}
			true_answer2.onclick = function(){
				test2.style.opacity = 0;
				test2.style.transition = 2.5 + "s";
				setTimeout(none2, 2000);
				setTimeout(beaty2, 2500);
				scorePoints();
			}
			for( let i = 0; i < false_answer2.length; i++){
		   		false_answer2[i].onclick = function(){
		   			test2.style.opacity = 0;
					test2.style.transition = 1.9 + "s";
					setTimeout(none2, 2000);
					setTimeout(beaty2, 2500);
		   		}
		 	}
		 	true_answer3.onclick = function(){
				test3.style.opacity = 0;
				test3.style.transition = 2.5 + "s";
				setTimeout(none3, 2000);
				setTimeout(beaty3, 2500);
				scorePoints();
			}
			for( let i = 0; i < false_answer3.length; i++){
		   		false_answer3[i].onclick = function(){
		   			test3.style.opacity = 0;
					test3.style.transition = 1.9 + "s";
					setTimeout(none3, 2000);
					setTimeout(beaty3, 2500);
		   		}
		 	}
			 true_answer4.onclick = function(){
				test4.style.opacity = 0;
				test4.style.transition = 2.5 + "s";
				setTimeout(none4, 2000);
				setTimeout(beaty4, 2500);
				scorePoints();
			}
			for( let i = 0; i < false_answer4.length; i++){
		   		false_answer4[i].onclick = function(){
		   			test4.style.opacity = 0;
					test4.style.transition = 1.9 + "s";
					setTimeout(none4, 2000);
					setTimeout(beaty4, 2500);
		   		}
		 	}
		 	true_answer5.onclick = function(){
				test5.style.opacity = 0;
				test5.style.transition = 2.5 + "s";
				setTimeout(none5, 2000);
				setTimeout(beaty5, 2500);
				scorePoints();
			}
			for( let i = 0; i < false_answer5.length; i++){
		   		false_answer5[i].onclick = function(){
		   			test5.style.opacity = 0;
					test5.style.transition = 1.9 + "s";
					setTimeout(none5, 2000);
					setTimeout(beaty5, 2500);
		   		}
		 	}
			 true_answer6.onclick = function(){
				test6.style.opacity = 0;
				test6.style.transition = 2.5 + "s";
				setTimeout(none6, 2000);
				setTimeout(beaty6, 2500);
				scorePoints();
			}
			for( let i = 0; i < false_answer6.length; i++){
		   		false_answer6[i].onclick = function(){
		   			test6.style.opacity = 0;
					test6.style.transition = 1.9 + "s";
					setTimeout(none6, 2000);
					setTimeout(beaty6, 2500);
		   		}
		 	}
		 	true_answer7.onclick = function(){
				test7.style.opacity = 0;
				test7.style.transition = 2.5 + "s";
				setTimeout(none7, 2000);
				setTimeout(beaty7, 2500);
				scorePoints();
			}
			for( let i = 0; i < false_answer7.length; i++){
		   		false_answer7[i].onclick = function(){
		   			test7.style.opacity = 0;
					test7.style.transition = 1.9 + "s";
					setTimeout(none7, 2000);
					setTimeout(beaty7, 2500);
		   		}
		 	}
		  	true_answer8.onclick = function(){
				test8.style.opacity = 0;
				test8.style.transition = 2.5 + "s";
				setTimeout(none8, 2000);
				setTimeout(beaty8, 2500);
				scorePoints();
			}
			for( let i = 0; i < false_answer8.length; i++){
		   		false_answer8[i].onclick = function(){
		   			test8.style.opacity = 0;
					test8.style.transition = 1.9 + "s";
					setTimeout(none8, 2000);
					setTimeout(beaty8, 2500);
		   		}
		 	}
		  	true_answer9.onclick = function(){
				test9.style.opacity = 0;
				test9.style.transition = 2.5 + "s";
				setTimeout(none9, 2000);
				setTimeout(beaty9, 2500);
				scorePoints();
			}
			for( let i = 0; i < false_answer9.length; i++){
		   		false_answer9[i].onclick = function(){
		   			test9.style.opacity = 0;
					test9.style.transition = 1.9 + "s";
					setTimeout(none9, 2000);
					setTimeout(beaty9, 2500);
		   		}
		 	}
			true_answer10.onclick = function(){
				test10.style.opacity = 0;
				test10.style.transition = 2.5 + "s";
				true_answer10.style.color = "green";
				setTimeout(none10, 2000);
				setTimeout(beaty10, 2500);
				scorePoints();
			}
			for( let i = 0; i < false_answer10.length; i++){
		   		false_answer10[i].onclick = function(){
		   			test10.style.opacity = 0;
					test10.style.transition = 1.9 + "s";
					setTimeout(none10, 2000);
					setTimeout(beaty10, 2500);
		   		}
		 	}	
</script>
</body>
</html>
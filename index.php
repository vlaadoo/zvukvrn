<?php
session_start();
require_once 'inc/db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>#ZVUKVRN</title>
	<link rel="icon" type="image/x-icon" href="img/ico/favicon.ico" />
	<!-- Font Awesome icons (free version)-->
	<script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
	<!-- Google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
	<link
		href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
		rel="stylesheet" />

	<!-- Core theme CSS (includes Bootstrap)-->
	<link href="css/styles.css" rel="stylesheet" />
	<link href="css/main.css" rel="stylesheet" />
	<link href="css/carousel.css" rel="stylesheet" />


</head>

<body id="page-top">
	<!-- Navigation-->
	<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
		<div class="container px-4 px-lg-5">
			<a class="navbar-brand" href="#page-top">#ZVUKVRN</a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
				data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
				aria-label="Toggle navigation">
				Menu
				<i class="fas fa-bars"></i>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ms-auto">
					<li class="nav-item"><a class="nav-link" href="#about">О НАС</a></li>
					<li class="nav-item"><a class="nav-link" href="#services">УСЛУГИ</a></li>
					<li class="nav-item"><a class="nav-link" href="#contact">КОНТАКТЫ</a></li>
					<li class="nav-item"><a class="nav-link" href="#comments">ОТЗЫВЫ</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- Masthead-->
	<header class="masthead">
		<div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
			<div class="d-flex justify-content-center">
				<div class="text-center">
					<h1 class="mx-auto my-0 text-uppercase">#ZVUKVRN</h1>
					<h3 class="text-white-50 mx-auto mt-2 mb-5">Осуществляем полный спектр технического обеспечения
						любого уровня сложности концертов, вечеринок, корпоративов, празднеств, свадеб, выставок,
						презентаций, форумов в Воронеже и Воронежской области</h3>
					<a class="btn btn-primary" href="#about">Кто мы?</a>
				</div>
			</div>
		</div>
	</header>
	<!-- About-->
	<section class="about-section text-center" id="about">
		<div class="container px-4 px-lg-5">
			<div class="row gx-4 gx-lg-5 justify-content-center">
				<div class="col-lg-8">
					<h2 class="text-white mb-4">#ZVUKVRN</h2>
					<p class="text-white-50">
						Мы - команда, занимающаяся арендой, прокатом, установкой и сопровождением ваших мероприятий
					</p>
				</div>
			</div>
			<img class="img-fluid" src="/img/DJ-Mixer-PNG-File-Download-Free.png" alt="..." />
		</div>
	</section>

	<section class="carousel">
		<div class="slideshow-container">

			<div class="text-center">
				<h1 class="mx-auto my-0 text-uppercase text-primary"><br> НАШИ МЕРОПРИЯТИЯ <br> </br> </h1>

			</div>
			<!-- Full-width images with number and caption text -->
			<div class="mySlides fading">

				<figure>
					<img src="img\carousel\8npf6S1vCsY.jpeg" style="max-height: 1000px;">
					<div class="text">Caption Text</div>
				</figure>
			</div>

			<div class="mySlides fading">
				<figure>
					<img src="img\carousel\129nwpsG6Yo.jpeg" style="max-height: 1000px;">
					<div class="text">Caption Two</div>
				</figure>
			</div>

			<div class="mySlides fading">
				<figure>
					<img src="img\carousel\SDkdR7UX_vQ.jpeg" style="max-height: 1000px;">
					<div class="text">Caption Three</div>
				</figure>
			</div>

			<div class="mySlides fading">
				<figure>
					<img src="img\carousel\pBk0b-t51TU.jpg" style="max-height: 1000px;">
					<div class="text">Caption Four</div>
				</figure>
			</div>

			<div class="mySlides fading">
				<figure>
					<img src="img\carousel\6BaIPBNsY2o.jpg" style="max-height: 1000px;">
					<div class="text">Caption Five</div>
				</figure>
			</div>

			<!-- Next and previous buttons -->
			<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			<a class="next" onclick="plusSlides(1)">&#10095;</a>
		</div>
		<br>

		<!-- The dots/circles -->
		<div style="text-align:center">
			<span class="dot" onclick="currentSlide(1)"></span>
			<span class="dot" onclick="currentSlide(2)"></span>
			<span class="dot" onclick="currentSlide(3)"></span>
			<span class="dot" onclick="currentSlide(4)"></span>
			<span class="dot" onclick="currentSlide(5)"></span>
		</div>
	</section>


	<!-- Услуги-->
	<section class="wrapper style2" id="services">
		<div class="inner">
			<header>
				<h2>Наше оборудование</h2>
				<p>Компания предлагает в аренду профессиональный звук, свет и бэклайн ведущих брендов.</p>
			</header>
			<div class="flex flex-tabs">
				<ul class="tab-list">
					<li><a href="/sound/" data-tab="sound" class="active">Звуковое оборудование</a></li>
					<li><a href="/light/" data-tab="light" class="">Световое оборудование</a></li>
					<li><a href="/video/" data-tab="videos" class="">Видео оборудование</a></li>
				</ul>
				<div class="tabs">
					<!-- Tab Sound -->
					<div class="tab sound flex flex-3 active">
						<div class="video col">
							<div class="image fit">
								<img src="/img/services/sound/speakers.jpg" alt="">
								<div class="arrow">
									<div class="icon fa-play"></div>
								</div>
								<div class="caption caption2">
									Акустические системы
								</div>
							</div>
							<a href="/inc/stuff.php?category=Акустические системы" class="link"></a>
						</div>
						<div class="video col">
							<div class="image fit">
								<img src="/img/services/sound/monitors.jpg" alt="">
								<div class="arrow">
									<div class="icon fa-play"></div>
								</div>
								<div class="caption caption2">
									Мониторы
								</div>
							</div>
							<a href="/inc/stuff.php?category=Мониторы" class="link"></a>
						</div>
						<div class="video col">
							<div class="image fit">
								<img src="/img/services/sound/mixer.jpg" alt="">
								<div class="arrow">
									<div class="icon fa-play"></div>
								</div>
								<div class="caption caption2">
									Микшеры
								</div>
							</div>
							<a href="/inc/stuff.php?category=Микшеры" class="link"></a>
						</div>
						<div class="video col">
							<div class="image fit">
								<img src="/img/services/sound/backline.jpg" alt="">
								<div class="arrow">
									<div class="icon fa-play"></div>
								</div>
								<div class="caption caption2">
									Бэклайн
								</div>
							</div>
							<a href="/inc/stuff.php?category=Бэклайн" class="link"></a>
						</div>
						<div class="video col">
							<div class="image fit">
								<img src="/img/services/sound/dj.jpg" alt="">
								<div class="arrow">
									<div class="icon fa-play"></div>
								</div>
								<div class="caption caption2">
									DJ-оборудование
								</div>
							</div>
							<a href="/inc/stuff.php?category=DJ-оборудование" class="link"><span>Подробнее</span></a>
						</div>
						<div class="video col">
							<div class="image fit">
								<img src="/img/services/sound/mic.jpg" alt="">
								<div class="arrow">
									<div class="icon fa-play"></div>
								</div>
								<div class="caption caption2">
									Микрофоны и DI-BOX
								</div>
							</div>
							<a href="/inc/stuff.php?category=Микрофоны и DI-BOX" class="link"><span>Подробнее</span></a>
						</div>
					</div>
					<div class="tab light flex flex-3">

						<div class="video col">
							<div class="image fit">
								<img src="/img/services/light/moving_head.jpg" alt="">
								<div class="arrow">
									<div class="icon fa-play"></div>
								</div>
								<div class="caption caption2">
									Динамические приборы
								</div>
							</div>
							<a href="/inc/stuff.php?category=Динамические приборы"
								class="link"><span>Подробнее</span></a>
						</div>
						<div class="video col">
							<div class="image fit">
								<img src="/img/services/light/colorchanger.jpg" alt="">
								<div class="arrow">
									<div class="icon fa-play"></div>
								</div>
								<div class="caption caption2">
									Заливной свет
								</div>
							</div>
							<a href="/inc/stuff.php?category=Заливной свет" class="link"><span>Подробнее</span></a>
						</div>
						<div class="video col">
							<div class="image fit">
								<img src="/img/services/light/follow_spot.jpg" alt="">
								<div class="arrow">
									<div class="icon fa-play"></div>
								</div>
								<div class="caption caption2">
									Прожекторы
								</div>
							</div>
							<a href="/inc/stuff.php?category=Прожекторы" class="link"><span>Подробнее</span></a>
						</div>
						<div class="video col">
							<div class="image fit">
								<img src="/img/services/light/laser.jpg" alt="">
								<div class="arrow">
									<div class="icon fa-play"></div>
								</div>
								<div class="caption caption2">
									Лазеры
								</div>
							</div>
							<a href="/inc/stuff.php?category=Лазеры" class="link"><span>Подробнее</span></a>
						</div>
						<div class="video col">
							<div class="image fit">
								<img src="/img/services/light/console.jpg" alt="">
								<div class="arrow">
									<div class="icon fa-play"></div>
								</div>
								<div class="caption caption2">
									Пульты управления
								</div>
							</div>
							<a href="/inc/stuff.php?category=Пульты управления" class="link"><span>Подробнее</span></a>
						</div>
						<div class="video col">
							<div class="image fit">
								<img src="/img/services/light/special.jpg" alt="">
								<div class="arrow">
									<div class="icon fa-play"></div>
								</div>
								<div class="caption caption2">
									Машины спецэффектов
								</div>
							</div>
							<a href="/inc/stuff.php?category=Машины спецэффектов"
								class="link"><span>Подробнее</span></a>
						</div>
					</div>
					<!-- Tab Video -->
					<div class="tab videos flex flex-3">
						<div class="video col">
							<div class="image fit">
								<img src="/img/services/video/led.jpg" alt="">
								<div class="arrow">
									<div class="icon fa-play"></div>
								</div>
								<div class="caption caption2">
									Светодиодные экраны
								</div>
							</div>
							<a href="/inc/stuff.php?category=Светодиодные экраны"
								class="link"><span>Подробнее</span></a>
						</div>
						<div class="video col">
							<div class="image fit">
								<img src="/img/services/video/lcd.jpg" alt="">
								<div class="arrow">
									<div class="icon fa-play"></div>
								</div>
								<div class="caption caption2">
									Плазменные и LCD-панели
								</div>
							</div>
							<a href="/inc/stuff.php?category=Плазменные и LCD-панели"
								class="link"><span>Подробнее</span></a>
						</div>
						<div class="video col">
							<div class="image fit">
								<img src="/img/services/video/projector.jpg" alt="">
								<div class="arrow">
									<div class="icon fa-play"></div>
								</div>
								<div class="caption caption2">
									Видеопроекторы
								</div>
							</div>
							<a href="/inc/stuff.php?category=Видеопроекторы" class="link"><span>Подробнее</span></a>
						</div>
						<div class="video col">
							<div class="image fit">
								<img src="/img/services/video/studio.jpg" alt="">
								<div class="arrow">
									<div class="icon fa-play"></div>
								</div>
								<div class="caption caption2">
									Оборудование пультовой
								</div>
							</div>
							<a href="/inc/stuff.php?category=Оборудование пультовой"
								class="link"><span>Подробнее</span></a>
						</div>
						<div class="video col">
							<div class="image fit">
								<img src="/img/services/video/cam.jpg" alt="">
								<div class="arrow">
									<div class="icon fa-play"></div>
								</div>
								<div class="caption caption2">
									Видеокамеры
								</div>
							</div>
							<a href="/inc/stuff.php?category=Видеокамеры" class="link"><span>Подробнее</span></a>
						</div>
						<div class="video col">
							<div class="image fit">
								<img src="/img/services/video/accessories_video.jpg" alt="">
								<div class="arrow">
									<div class="icon fa-play"></div>
								</div>
								<div class="caption caption2">
									Доп. оборудование
								</div>
							</div>
							<a href="/inc/stuff.php?category=Доп. оборудование" class="link"><span>Подробнее</span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Contact-->
	<section class="page-section" id="contact">
		<div class="container">
			<!-- Contact Section Heading-->
			<h2 class="page-section-heading text-center text-uppercase text-warning mt-1 mb-3">Оставьте заявку</h2>
			<!-- Contact Section Form-->
			<div class="row justify-content-center">
				<div class="col-lg-8 col-xl-7">
					<form id="contactForm" action="/inc/feedback.php" method="post">
						<!-- Name input-->
						<div class="form-floating mb-3">
							<input class="form-control" name="name" id="name" type="text"
								placeholder="Enter your name..." onkeyup="checkParams()">
							<label for="name">Ваше имя</label>
						</div>
						<!-- Email address input-->
						<div class="form-floating mb-3">
							<input class="form-control" name="email" id="email" type="email"
								placeholder="name@example.com" onkeyup="checkParams()">
							<label for="email">Ваша почта</label>
						</div>
						<!-- Phone number input-->
						<div class="form-floating mb-3">
							<input class="form-control" name="phone" id="phone" type="tel" placeholder="(123) 456-7890"
								onkeyup="checkParams()">
							<label for="phone">Ваш номер телефона</label>
						</div>
						<!-- Message input-->
						<div class="form-floating mb-3">
							<textarea class="form-control" name="message" id="message" type="text"
								placeholder="Enter your message here..." style="height: 10rem"
								onkeyup="checkParams()"></textarea>
							<label for="message">Ваша заявка</label>
						</div>
						<!-- Submit Button-->
						<input type='submit' id='submit' value='ОТПРАВИТЬ' class="btn btn-primary btn-xl" disabled>
					</form>
				</div>
			</div>
		</div>
	</section>
	<section class="contact-section bg-black-gradient">
		<div class="container px-4 px-lg-5 mb-0">
			<div class="row gx-2 gx-lg-4">
				<div class="col-md-6 mb-4 mb-md-0">
					<div class="card py-4 h-100">
						<div class="card-body text-center">
							<i class="fas fa-envelope text-primary mb-2"></i>
							<h4 class="text-uppercase m-0">Email</h4>
							<hr class="my-4 mx-auto" />
							<div class="small text-black-50"><a
									href="mailto:ilya_dolgov_86@mail.ru">ilya_dolgov_86@mail.ru</a></div>
						</div>
					</div>
				</div>
				<div class="col-md-6 mb-4 mb-md-0">
					<div class="card py-4 h-100">
						<div class="card-body text-center">
							<i class="fas fa-mobile-alt text-primary mb-2"></i>
							<h4 class="text-uppercase m-0">Телефон</h4>
							<hr class="my-4 mx-auto" />
							<div class="small text-black-50"><a href="tel:+79081320089">+7 (908) 132 00 89</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section id="comments" class="comm">
		<div class="comments">
			<?php
		$sql = "SELECT * FROM `comment`";
		$res = mysqli_query($db, $sql);
		if (mysqli_num_rows($res) > 0){
		echo "<h2 class='page-section-heading text-center text-uppercase text-info mb-2'>Отзывы наших клиентов
		</h2>";
		while ($row = $res->fetch_assoc()){
			echo '<div class="containe comment"><p><name>' .$row["name"] . '</name><town>' .$row["town"] .'</town></p>
			<p><date>'. $row["date"] .'</date><message>' .$row["message"] . '</message></p></div>';
		}
	}
		?>
		</div>
		<h2 class="page-section-heading text-center text-uppercase text-warning mt-5 mb-2">Оставьте отзыв прямо
			сейчас!</h2>
		<div class="containe col-lg-8 col-xl-7 mb-0">
			<form id="contactForm" action="/inc/comment.php" method="post">
				<!-- Name input-->
				<div class="form-floating mb-3">
					<input class="form-control" name="nameCom" id="nameCom" type="text" placeholder="Enter your name..."
						onkeyup="checkComment()">
					<label for="name">Ваше Имя</label>
					<div class="invalid-feedback">A name is required.</div>
				</div>
				<!--  address input-->
				<div class="form-floating mb-3">
					<input class="form-control" name="townCom" id="townCom" type="text" placeholder="name@example.com"
						onkeyup="checkComment()">
					<label for="email">Ваш город</label>
				</div>
				<!-- Message input-->
				<div class="form-floating mb-3">
					<textarea class="form-control" name="messageCom" id="messageCom" type="text"
						placeholder="Enter your message here..." style="height: 10rem"
						onkeyup="checkComment()"></textarea>
					<label for="message">Ваш отзыв</label>
				</div>
				<!-- Submit Button-->
				<input type='submit' id='submitCom' value='ОТПРАВИТЬ' class="btn btn-primary btn-xl" disabled>
			</form>
		</div>
	</section>
	<!-- Footer-->
	<footer class="footer bg-black small text-center text-white-50">
		<div class="contact-section-footer">
			<div class="social d-flex justify-content-center">
				<a class="mx-2" href="#!"><i class="fab fa-twitter"></i></a>
				<a class="mx-2" href="https://vk.com/zvuk_vrn"><i class="fab fa-vk"></i></a>
				<a class="mx-2" href="https://www.instagram.com/zvukvrn/"><i class="fab fa-instagram"></i></a>
			</div>
		</div>
		<div class="container px-4 px-lg-5">Copyright &copy; Your Website 2021</>
	</footer>

	<!-- Bootstrap core JS-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
	<!-- Core theme JS-->
	<script src="js/scripts.js"></script>
	<script src="/js/jquery.min.js"></script>
	<script src="/js/jquery.scrolly.min.js"></script>
	<script src="/js/skel.min.js"></script>
	<script src="/js/util.js"></script>
	<script src="/js/main.js"></script>
	<script src="/js/carousel.js"></script>
</body>

</html>
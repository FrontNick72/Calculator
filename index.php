<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="css/slider.css">		
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src = "js/script.js"></script>
	<!-- Для корректной работы в IE тегов HTML5 -->
	<script>
		document.createElement("article");
		document.createElement("footer");
		document.createElement("header");
		document.createElement("hgroup");
		document.createElement("nav");
		document.createElement("menu");
	</script>
	<script src="js/ajax.js"></script>
	<title>Calculator</title>
</head>
<body>
	<div class="container">
		<header class="header">
			<a class="logo">
				<img src="img/logo.png" alt="logo">
			</a>
			<div class="telephone">
				<p class = "paragrapher">8-800-100-5005</p>
				<p class = "paragrapher">+7 (3452) 522-000</p>
			</div>
			<div class="clr"></div>
			<nav class="nav">
				<ul class="nav__list">
					<li class="nav__list-item"><a href="#" class="nav__list-link">Кредитные карты</a></li>
					<li class="nav__list-item"><a href="#" class="nav__list-link current">Вклады</a></li>
					<li class="nav__list-item"><a href="#" class="nav__list-link">Дебетовая карта</a></li>
					<li class="nav__list-item"><a href="#" class="nav__list-link">Страхование</a></li>
					<li class="nav__list-item"><a href="#" class="nav__list-link">Друзья</a></li>
					<li class="nav__list-item"><a href="#" class="nav__list-link">Интернет банк</a></li>
				</ul>
			</nav>
		</header>
		<main class = "content">
			<ul class="breadcrumbs">
				<li class = "breadcrumbs__item"><a href="#" class = "breadcrumbs__item-link">Главная</a> -</li>
				<li class = "breadcrumbs__item"><a href="#" class = "breadcrumbs__item-link">Вклады</a> -</li>
				<li class = "breadcrumbs__item"><a href="#" class = "breadcrumbs__item-link current" >Калькулятор</a></li>
			</ul>
			<form action="" method="POST" id="ajax_form" class="calculator">
				<div class="calculator__title">Калькулятор</div>
				<fieldset class = "form">
					<div class="form__item">
						<label for="datepicker" class = "label-item">Дата оформления вклада</label>
						<input class = "input" name = "date" type="text" id="datepicker" placeholder="дд.мм.гггг" required>
						<div class="clr"></div>
					</div>
					<div class="form__item">
						<label for="range" class = "label-item">Сумма вклада</label>
						<input class = "input" id="range" type="text" name = "summ" value="10000" step="1" min="1000" max="3000000" />
						<div id="slider" class = "slider">
							<div class="min">1 тыс. руб.</div>
							<div class="max">3 000 000</div>
						</div>
						<div class="clr"></div>
					</div>
					<div class="form__item">
						<label for="select" class = "label-item">Срок вклада</label>
						<select class = "select" name="srok" id="select">
							<option value="1">
								1 год
							</option>
							<option value="2">
								2 года
							</option>
							<option value="3">
								3 года
							</option>
							<option value="4">
								4 года
							</option>
								<option value="5">
								5 лет
							</option>
						</select>
						<div class="clr"></div>
					</div>
					<div class="form__item">
						<label for="radio" class = "label-item">Пополнение вклада</label>
						<div class="radio" id = "radio">							
							<input name="dep-rep" type="radio" value="0" class="radio__item" required> Нет
							<input name="dep-rep" type="radio" value="1" class="radio__item" required> Да	
						</div>
						<div class="clr"></div>
					</div>
					<div class="form__item">
						<label for="range1" class = "label-item">Сумма пополнения вклада</label>
						<input class = "input" id="range1" type="text" name = "summ-pop" value="10000" step="1" min="1000" max="3000000" required pattern="\S">
						<div id="slider1" class = "slider">
							<div class="min">1 тыс. руб.</div>
							<div class="max">3 000 000</div>
						</div>
						<div class="clr"></div>
					</div>	
																	
				</fieldset>
				<div class="clr"></div>
				<div class="result">
					<input class = "btn" type="submit" value="Рассчитать">
					<div class="result__val">
						<span class="left">Результат:</span>
						<div id = "result__val-input"></div>
					</div>
					<div class="clr"></div>
				</div>
			</form>
		</main>
		<footer class="footer">
			<div class="container">
				<nav class="nav">
					<ul class="nav__list">
						<li class="nav__list-item"><a href="#" class="nav__list-link">Кредитные карты</a></li>
						<li class="nav__list-item"><a href="#" class="nav__list-link current">Вклады</a></li>
						<li class="nav__list-item"><a href="#" class="nav__list-link">Дебетовая карта</a></li>
						<li class="nav__list-item"><a href="#" class="nav__list-link">Страхование</a></li>
						<li class="nav__list-item"><a href="#" class="nav__list-link">Друзья</a></li>
						<li class="nav__list-item"><a href="#" class="nav__list-link">Интернет банк</a></li>
					</ul>
				</nav>
			</div>
		</footer>
	</div>	
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet"> 
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
	<meta name="description" content="Бесплатные книги.Приложение с бесплатными книгами.Бесплатно.Электронная библиотека">
	<title>FFBook</title>
</head>
<body>
	<div id="app">
		<div id="header">
			<div id="logo">
				<h1>FFBook</h1>
				<h2>Клиент FLibusta</h2>
			</div>
		</div>
		<?php
			require_once 'blocks/slider.php';
		?>
		<?php
			require_once 'blocks/about.php'
		?>
		<?php
			require_once 'blocks/spisok.php'
		?>
		<?php
			require_once 'blocks/button.php'
		?>
		<div id="footer">
			<div id="date">
				<span>14.02.2022-</span>
				<span><?php echo date("d.m.Y"); ?></span>
				<i class = 'bx bxs-cat'></i>
			</div>
			<div id = 'copy'>
				<i class='bx bx-copyright'></i>
				FFBook
			</div>	
		</div>
	</div>
		<img id="full_img" src = 'images/Screenshot_1.png' onclick="remove_full_img(this)">
		<div id="close_full_img"><i class = 'bx bx-x'></i></div>

	<script src="script/img.js"></script>
	<script src="script/spisok.js"></script>
	<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(87520178, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/87520178" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>
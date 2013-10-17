<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Monster Wants Candy</title>
	<style> body { margin: 0; } </style>
	<?php require('js.php'); ?>
	<script src="src/Boot.js"></script>
	<script src="src/Preloader.js"></script>
	<script src="src/MainMenu.js"></script>
	<script src="src/Game.js"></script>
</head>
<body>
<script type="text/javascript">
(function () {
	var game = new Phaser.Game(640, 960, Phaser.AUTO, 'game');
	game.state.add('Boot', Candy.Boot);
	game.state.add('Preloader', Candy.Preloader);
	game.state.add('MainMenu', Candy.MainMenu);
	game.state.add('Game', Candy.Game);
	game.state.start('Boot');
})();
</script>
</body>
</html>
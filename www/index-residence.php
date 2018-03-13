<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Immobiles</title>
  <style>
  	body {
  		background: black;
  		font-size: 30px;
  		color: white;
  	}
  	
  	ul {
  		list-style: none;
  	}
  	
  	li {
  		margin: 20px;
  	}
  	
  	a  {
  		text-decoration: none;
  		color: white;
  	}
  </style>
</head>

<body>
	Immobiles
	<ul>
		<li><a href="http://radio.kxkm.net/player.php?flux=1">Flux 1</a></li>
		<li><a href="http://radio.kxkm.net/player.php?flux=2">Flux 2</a></li>
		<li><a href="http://radio.kxkm.net/player.php?flux=3">Flux 3</a></li>
		<li><a href="http://radio.kxkm.net/player.php?flux=<?=rand(1,3)?>">Random</a></li>
		<li><a href="http://radio.kxkm.net/monitor.php">Monitor</a></li>
	</ul>
	<br />
	<br />
	<?php if ($_GET["test"]): ?>
	<div align="center" id="radioforge1508318056" style="width:250px; height:250px;">
		<script type="text/javascript" src="http://hosted.musesradioplayer.com/mrp.js"></script>
		<script type="text/javascript">MRP.insert({
		'url':'http://radio.kxkm.net:5000/flux0-mp3',
		'lang':'auto',
		'codec':'mp3',
		'volume':100,
		'introurl':'',
		'fallback':'',
		'autoplay':true,
		'jsevents':false,
		'buffering':3,
		'title':'Flux0',
		'welcome':'',
		'bgcolor':'#000000',
		'wmode':'transparent',
		'skin':'kplayer',
		'width':250,
		'height':250});
		</script>
		<div style="float:right; padding-right:3px; margin-top:-25px; z-index:2000; overflow:auto; position:absolute;"></div>
	</div>
	<?php endif; ?>
</body>

</html>

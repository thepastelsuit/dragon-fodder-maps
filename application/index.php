<html>
<head>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script> 
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.13/jquery-ui.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/craftmap.js"></script> 
<script type="text/javascript" src="js/lfdf.js"></script> 
<link href="css/styles.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="favicon.ico" />
<?php 
require_once('data.php');
?>
<title><?php echo $config['app_name']; ?></title>
</head>
<body>

<div class="relative">
	<div class="modal"></div>
	<div class="coords"></div>
	<div class="demo1">
	<?php 
	if(isset($_GET['type']) && isset($maps[$_GET['type']])) {
		$map = $maps[$_GET['type']]; 
	} else {
		$map = $maps['roads'];
	}
	?>
		<img src="images/map/<?php echo $map; ?>" class="imgMap" />
		<?php foreach($locations as $l):?>
		<div class="marker <?php echo $l['icon']; ?>" id="<?php echo $l['val']; ?>" data-coords="<?php echo $l['x'].",".$l['y']; ?>">
			<h3><?php echo $l['title']; ?></h3>
			<p>
				<?php echo $l['desc']; ?>
				<?php foreach($l['images'] as $img): ?>
				<br><a data-image="<?php echo $img['path']; ?>" class="imageview"><?php echo ucfirst($img['text']); ?></a>
				<?php endforeach; ?>
			</p>
		</div>
		<?php endforeach; ?>
	</div>
	 
	<div class="controls">
		<span>Locations</span>
		<?php foreach($locations as $l):?>
		<?php if($l['type'] == 'location'): ?>
		<a href="#" rel="<?php echo $l['val']; ?>"><?php echo $l['title']; ?></a>
		<?php endif; ?>
		<?php endforeach; ?>
	</div>
	
	<div class="compass"></div>
	
	<div class="map_type">
		<span>Map Type</span>
		<?php foreach($maps as $name => $file): ?>
		<a href="?type=<?php echo $name; ?>" id="<?php echo $name; ?>" class="map_picker" data-image="<?php echo $file; ?>"><?php echo ucfirst($name); ?></a><br />
		<?php endforeach; ?>
	</div>
	
	<div class="key">
		<table cellpadding="0" cellspacing="0">
		<thead>
			<tr>
				<td colspan="4" style="text-align:center;border-bottom:1px solid #000;cursor:hand;">
					Key
				</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class="key-icon">
					<img src="images/markers/castle.png" />
				</td>
				<td class="key-text">
					Large City
				</td>
				<td class="key-icon">
					<img src="images/markers/port.png" />
				</td>
				<td class="key-text">
					Port
				</td>
			</tr>
			<tr>
				<td class="key-icon">
					<img src="images/markers/village.png" />
				</td>
				<td class="key-text">
					Small City
				</td>
				<td class="key-icon">
					<img src="images/markers/dungeon.png" />
				</td>
				<td class="key-text">
					Dungeon
				</td>
			</tr>
			<tr>
				<td class="key-icon">
					<img src="images/markers/boat.png" />
				</td>
				<td class="key-text">
					Friendor's Boat
				</td>
				<td class="key-icon">
					<img src="images/marker.png" />
				</td>
				<td class="key-text">
					Player Events
				</td>
			</tr>
			</tbody>
		</table>
	</div>
	<div class="lightbox"></div>
</div>
</body>
</html>
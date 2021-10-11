<?php 
require_once 'system/db.config.php'; 
require_once 'control/index.php'; 
?>

<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">  
		<title>Гостевая книга</title>
		<link rel="stylesheet" href="css/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="css/styles.css">
	</head>
	<body>
		<div id="wrapper">
			<h1>Гостевая книга</h1>
			<?php
				if ($num > 0) {
					while($fetch = $db -> fetch($select)) { ?>
						<div class="note">
							<p>
								<span class="date">
									<?= date('d.m.Y H:i:s', $fetch['time']); ?>
								</span>
								<span class="name"><?= $fetch['name']; ?></span>
							</p>
							<p>
								<?= $fetch['msg']; ?>
							</p>
						</div>
					<?php } 
						if (isset($_SESSION['msg'])) { ?>
							<div class="info alert alert-info">
								<?= $_SESSION['msg'];  ?>
							</div>
			<? } } ?>
			<div id="form">
				<form action="" method="POST">
					<p><input name="name" class="form-control" placeholder="Ваше имя"></p>
					<p><textarea name="msg" class="form-control" placeholder="Ваш отзыв"></textarea></p>
					<p><input name="save" type="submit" class="btn btn-info btn-block" value="Сохранить"></p>
				</form>
			</div>
		</div>
	</body>
</html>

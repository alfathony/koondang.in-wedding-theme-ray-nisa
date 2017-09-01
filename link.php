<!DOCTYPE html>
<html>
<head>
	<title>link</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="http://ramyasausan.com/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<meta name="robots" content="nofollow">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<form action="" method="post">
			  <div class="form-group">
			    <label for="nama">Nama undangan</label>
			    <input type="text" class="form-control" id="nama" name="nama" placeholder="ex. Jainal Abidin dan partner">
			  </div>
			  <div class="form-group">
			    <label for="alamat">Group/alamat/tempat</label>
			    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="ex. Di suatu tempat yang sunyi">
			  </div>
				<div class="form-group">
			    <label for="alamat">Caption</label>
			    <textarea name="caption" rows="8" cols="80" class="form-control" placeholder="ex : Datang ya jangan lupa ke acara resepsinya"></textarea>
			  </div>
			  <div class="form-group">
			    <input type="submit" name="submit" class="btn btn-default" value="Generate Link">
			  </div>
			</form>
		</div>
	</div>

	<div>
	<?php

		if (isset($_POST['submit'])) {

			if ($_POST['nama'] && $_POST['alamat']) {
				// replace spasi dengan strip
				$rep_to_strip_nama = str_replace(" " , "-", $_POST['nama']);
				$rep_to_strip_alamat = str_replace(" ", "-", $_POST['alamat']);

				$clear_nama = str_replace(".", "-", $rep_to_strip_nama);
				$clear_alamat = str_replace(".", "-", $rep_to_strip_alamat);

				$caption = $_POST['caption'];

				echo '<textarea class="form-control" style="height:100%">http://koondang.in/firda/mengundang/'.$clear_nama.'.'.$clear_alamat.'</textarea>';
				?>
				<p>Copy paste dan kirim ke teman yang ingin di undang, atau bagikan langsung ke :</p>

	      <hr class="small">
	      <a href="https://www.facebook.com/sharer.php?u=http://koondang.in/firda/mengundang/<?php 	echo $clear_nama.'.'.$clear_alamat; ?>" target="_blank" class="btn btn-lg">
	        <button class="btn btn-share btn-facebook">
	            <i class="fa fa-facebook-square"></i> Facebook
	        </button>
	      </a>
	      <a href="https://twitter.com/intent/tweet?text=<?php echo $caption; ?> &url=http://koondang.in/firda/mengundang/<?php 	echo $clear_nama.'.'.$clear_alamat; ?>" class="btn btn-lg" target="_blank">
	        <button class="btn btn-share btn-twitter">
	             <i class="fa fa-twitter-square"></i> Twitter
	        </button>
	      </a>
	      <a href="whatsapp://send?text=<?php echo $caption; ?>%20http://koondang.in/firda/mengundang/<?php 	echo $clear_nama.'.'.$clear_alamat; ?>" class="btn btn-lg hidden-md">
	        <button class="btn btn-share btn-whatsapp">
	            <i class="fa fa-whatsapp"></i> WhatsApp
	        </button>
	      </a>
	      <a href="http://line.me/R/msg/text/?<?php echo $caption; ?>  http://koondang.in/firda/mengundang/<?php 	echo $clear_nama.'.'.$clear_alamat; ?>" class="btn btn-lg hidden-md">
	         <button class="btn btn-share btn-line">
	            Line
	         </button>
	      </a>


				<?php
			}else{
				echo "<p>Nama undangan dan group harus di isi</p>";
			}

		}

	?>
	</div>
</div>
</body>
</html>

<?php 
require "header.php";
$contact = get_contact();
while($item = mysqli_fetch_array($contact)){
	$nomor 		= $item['nomor'];
	$deskripsi 	= $item['deskripsi'];
	$gmaps		= $item['gmaps'];
	$email 		= $item['email'];
}
$slider = get_slider();
?>
		<!-- Header Close -->
		<div class="banner">
			<div  class="owl-four owl-carousel" itemprop="image">
			<?php
				while ($item = mysqli_fetch_array($slider)) { ?>
				<img src="view/upload/<?= $item['gambar'] ?>" alt="Image of Bannner">
				<?php } ?>
			</div>
			<div class="container" itemprop="description">
				<h1>SMP NEGERI 2 PATIKRAJA</h1>
				<h3>Sekolah Berwawasan Budi Pekerti</h3>
			</div>
			 <div id="owl-four-nav" class="owl-nav"></div>
		</div>
		
		<section class="contact-page-section">
			<div class="container">
				<div class="people-info-wrap">
					<h2>Contact Form</h2>
					<p></p>
					<form>
						<span>
						<input type="text" placeholder="Name*" class="input- name">
						<input type="email" placeholder="Email*" class="input- email">
						</span>
						<input type="text" placeholder="Subject*" class="input- subject">
						<textarea placeholder="Messages*" class="input-">
							
						</textarea>
						<input type="submit" value="Kirim Pesan">
					</form>
				</div>

				<div class="contact-info">
					<h2>Info</h2>
					<ul class="contact-list">
						<li><i class="fas fa-map-marker-alt"></i> 
							<span>
								<p><?= strip_tags($deskripsi)  ?></p>
							</span>
						</li>
						<li><i class="fas fa-phone"></i>
							<span> 
								<p>Phone: <?= $nomor ?>
							</span>
						</li>
						<li><i class="fas fa-envelope"></i>
							<span>
								<p><?= $email ?></p>
							</span>
						</li>
					</ul>
				</div>
			</div>
		</section>

		<section class="map-section">
			<iframe src="<?= $gmaps ?>" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
		</section>

		<section class="query-section">
			<div class="container">
				
			</div>
		</section>

<?php require('footer.php'); ?>
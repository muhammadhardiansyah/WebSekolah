<!-- End of Query Section -->
<?php
$kontak = get_contact();
while ($item = mysqli_fetch_array($kontak)){
	$nmr 	= $item['nomor'];
	$dskrpsi= $item['deskripsi'];
	$mail	= $item['email'];
}

?>
<footer class="page-footer" itemprop="footer" itemscope itemtype="http://schema.org/WPFooter">
			<div class="footer-first-section">
				<div class="container">
					<div class="box-wrap" itemprop="about">
						<header>
							<h1>about</h1>
						</header>
						<p>Edulab is a great start for and education. Personnel or oganization to start the online business with 1 click</p>

						<h4><a href="tel:+(0281) 6574601"><i class="fas fa-phone"></i><?= $nmr ?></a></h4>
						<h4><a href="mailto:smpn2patikraja@gmail.com"><i class="fas fa-envelope"></i> <?= $mail ?></a></h4>
						<h4><a href="contact.php"><i class="fas fa-map-marker-alt"></i><?= strip_tags($dskrpsi)  ?></a></h4>
					</div>

					
					<div class="box-wrap">
						<header>
							<h1>contact</h1>
						</header>
						<section class="quick-contact">
							<input type="email" name="email" placeholder="Email*">
							<textarea placeholder="Pesan*"></textarea>
							<button>Kirim Pesan</button>
						</section>
					</div>

				</div>
			</div>
			<!-- End of box-Wrap -->
			<div class="footer-second-section">
				<div class="container">
					<hr class="footer-line">
					<ul class="social-list">
						<li><a href=""><i class="fab fa-facebook-square"></i></a></li>
						<li><a href=""><i class="fab fa-twitter"></i></a></li>
						<li><a href=""><i class="fab fa-skype"></i></a></li>
						<li><a href=""><i class="fab fa-youtube"></i></a></li>
						<li><a href=""><i class="fab fa-instagram"></i></a></li>
					</ul>
					<hr class="footer-line">
				</div>
			</div>
			<div class="footer-last-section">
				<div class="container">
					<p>Copyright 2022 &copy; SMP Negeri 2 Patikraja</a></p>
				</div>
			</div>
		</footer>


	</div>
	<script type="text/javascript" src="view/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="view/js/lightbox.js"></script>
	<script type="text/javascript" src="view/js/all.js"></script>
	<script type="text/javascript" src="view/js/isotope.pkgd.min.js"></script>
	<script type="text/javascript" src="view/js/owl.carousel.js"></script>
	<script type="text/javascript" src="view/js/jquery.flexslider.js"></script>
	<script type="text/javascript" src="view/js/jquery.rateyo.js"></script>
	<script type="text/javascript" src="view/js/custom.js"></script>
</body>
</html>
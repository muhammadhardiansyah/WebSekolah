<?php 
require 'core/initLanding.php';
require 'header.php';
$slider = get_slider();
$tenaga_kerja = get_tenaga_kerja();
$contact = get_contact();
while ($item = mysqli_fetch_array($contact)){
	$nomor = $item['nomor'];
}
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

		<section class="team-members" itemprop="contributor">
			<div class="container">
				<h2 class="top-heading">Tenaga Kerja</h2>
				<article class="developer-grid">

				<?php while($item = mysqli_fetch_array($tenaga_kerja)){ ?>
					<div class="developer-wrap">
						<img src="view/upload/<?= $item['gambar'] ?>" alt="developer images">
						<h3><?= $item['nama'] ?></h3>
						<p><?= $item['tenaga_kerja'] ?></p>
					</div>
				<?php } ?>

				</article>
			</div>
		</section>
		
		<!-- End of Others talk -->
		<section class="query-section">
			<div class="container">
				<p>Ada pertanyaan? Hubungi kami <a href="tel:<?= $nomor ?>"><i class="fas fa-phone"></i> <?= $nomor ?></a></p>
			</div>
		</section>

<?php require 'footer.php'; ?>
<?php 
require 'header.php';
$slider = get_slider();
$guru = get_guru();
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
		
		<!-- Guru -->
		<section class="team-members" itemprop="contributor">
			<div class="container">
				<h2 class="top-heading">Guru</h2>
				<article class="developer-grid">
					<?php while($item = mysqli_fetch_array($guru)){ ?>
					<div class="developer-wrap">
						<img src="view/upload/<?= $item['gambar'] ?>" alt="developer images">
						<h3><?= $item['nama']; ?></h3>
						<p><?= $item['jabatan']; ?></p>
					</div>
					<?php } ?>

				</article>
			</div>
		</section>
		
		
		<!-- End of Others talk -->
		<section class="query-section">
			<div class="container">
				<p>Ada pertanyaan? Hubungi kami <a href="tel:<?= $nomor ?>"><i class="fas fa-phone"></i> (0281) 6574601</a></p>
			</div>
		</section>

<?php require 'footer.php'; ?>
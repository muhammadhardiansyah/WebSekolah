<?php
require "header.php";
$slider = get_slider();
$slider2 = get_slider();
$home = get_home();
$berita = get_berita();
$gallery = get_gallery();
$kepsek = get_kepsek();
while ($item = mysqli_fetch_array($kepsek)){
	$gambarKepsek = $item['gambar'];
	$namaKepsek = $item['nama'];
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
		<!-- Banner Close -->

		<section class="about-upper-section" itemprop="">
			<div class="container">
				<article class="who-we-are">
				<?php while ($item = mysqli_fetch_array($home)){ ?>
					<h3 style="text-align: center;" class="top-heading"><?= $item['judul'] ?></h3>
					<div class="float-left" style="text-align: center;">
						<img src="view/upload/<?= $gambarKepsek ?>" alt="gambar kepsek" class="customer-img" style="width: 200px; margin:5px 40px;">
						<figcaption style="text-align: center;">
							<span style="font-size: medium;" itemprop="author"><?= $namaKepsek ?></span>
						</figcaption>
					</div>
					<div class="col-12">
						<p style=""><?= strip_tags($item['deskripsi'])  ?></p>
					</div>
				<?php } ?>
				</article>
			</div>
		</section>
		<section class="page-heading">
			<div class="container">
				<h2>BERITA SEKOLAH</h2>
			</div>
		</section>
		<section class="latest-news">
			<div class="container" itemprop="event" itemscope itemtype=" http://schema.org/Event">
				<div class="owl-two owl-carousel">
					<?php $i = 1;
					while($item = mysqli_fetch_array($berita)){?>
					<div class="news-wrap" itemprop="event">
						<div class="news-img-wrap" itemprop="image">
							<img src="view/upload/<?= $item['gambar'] ?>" alt="Latest News Images">
						</div>
						<div class="news-detail" itemprop="description">
							<a href=""><h1><?= $item['judul'] ?></h1></a>
							<h2 itemprop="startDate">By <?= $item['penulis'] ?> | <?= $item['created_at'] ?></h2>

							<p><?= $item['deskripsi'] ?></p>
						</div>
					</div>
					<?php 
						if ($i >= 3){
							break;
						}
						$i += 1;
					} ?>
				</div>
			</div>
		</section>
		<!-- Closed WhyUs section -->
		<section class="page-heading">
			<div class="container">
				<h2>gallery</h2>
			</div>
		</section>
		<section class="gallery-images-section" id="cGrid">
			<?php while($item = mysqli_fetch_array($gallery)){ ?>
			<div class="gallery-img-wrap grid-item">
				<a href="view/upload/<?= $item['gambar'] ?>" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
					<img src="view/upload/<?= $item['gambar'] ?>" alt="gallery-images">
				</a>
			</div>
			<?php } ?>
		</section>
		<!-- End of gallery Images -->
		
		
		<section class="query-section">
			<div class="container">
				<p>Ingin tahu lebih banyak tentang SMP Negeri 2 Patikraja?  Hubungi kami <a href="tel:(0281) 6574601"><i class="fas fa-phone"></i> (0281) 6574601</a></p>
			</div>
		</section>
		
<?php
require ('footer.php');
?>
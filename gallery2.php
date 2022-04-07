<?php
require 'header.php'; 
$slider = get_slider();
$gallery = get_gallery();
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

		<section class="gallery-section2">
			<div class="container">
				<div id="filters" class="button-group">
					<button class="button" data-filter="*">Semua</button>
  					<button class="button" data-filter=".Pramuka">Pramuka</button>
  					<button class="button" data-filter=".Osis">Osis</button>
  					<button class="button" data-filter=".Extravaganza">Extravaganza</button>
  					<button class="button" data-filter=".Ulang">Ulang Tahun</button>
  					<button class="button" data-filter=".Agustus">17 Agustus</button>
				</div>
			</div>
				<section class="gallery-images-section gallery2" id="cGrid">

					<?php while($item = mysqli_fetch_array($gallery)){ ?>
					<div class="gallery-img-wrap grid-item <?= $item['kategori'] ?>" >
						<a href="view/upload/<?= $item['gambar'] ?>" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
							<img src="view/upload/<?= $item['gambar'] ?>" alt="gallery-images">
						</a>
					</div>
					<?php } ?>
					
				</section>
				<!-- End of gallery Images -->				
		</section>
		

<?php require 'footer.php'; ?>

<?php 
require 'core/initLanding.php';
require 'header.php'; 
$visi_misi = get_visi_misi();
while ($item = mysqli_fetch_array($visi_misi)){
	$visi = $item['visi'];
	$misi = $item['misi'];
}

?>
		<!-- Header Close -->
		<section class="page-content" id="course-page">
			<div class="container">
				<main class="course-detail">
					<h2> Visi dan Misi Sekolah</h2>
					
					<article>
						<section class="course-intro">
							<h3>Visi Sekolah</h3>
							<p><?= strip_tags($visi)?></p>
						</section>

						<section class="course-objective">

							<h3>Misi Sekolah</h3>
							<p><?= strip_tags($misi)?></p>

						</section>
					</article>									
				</main>
					</div>
					<!-- Recent Post Close -->
				</aside>
			</div>
		</section>
		
		<section class="query-section">
			<div class="container">
			</div>
		</section>

<?php require 'footer.php'; ?>

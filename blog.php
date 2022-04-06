<?php
require ('header.php');
$perPage = 4;
$from = isset($_GET['page']) && $_GET['page'] > 1 ? ($_GET['page'] * $perPage) - $perPage : 0;
$berita = get_berita_paginate($from, $perPage);

$berita2 = get_berita_paginate(0,4);
$contact = get_contact();
while ($item = mysqli_fetch_array($contact)){
	$nomor = $item['nomor'];
}
?>
		<!-- Header Close -->	
		<section class="page-heading">
			<div class="container">
				<h2>Berita Terkini</h2>
			</div>
		</section>
		<div class="page-content">
			<div class="container">
				<div class="grid-container" itemscope itemtype=" http://schema.org/Event">
					
				<?php while($item = mysqli_fetch_array($berita)) { ?>
					<div class="grid-box-wrap">
						<div class="grid-img" itemprop="image">
							<img src="view/upload/<?= $item['gambar'] ?>" alt="travel images">
						</div>
						<div class="grid-body">
							<h4 itemprop="date"><?= $item['created_at'] ?> | <?= $item['penulis'] ?> | 0 Comments</h4>
							<h1 itemprop="name"><?= $item['judul'] ?></h1>
							<p itemprop="description"><?= $item['deskripsi'] ?></p>
							<a href="blog-edu-single.php?id_berita=<?= $item['id_berita'] ?>">read more <i class="fas fa-long-arrow-alt-right"></i></a>
						</div>
					</div>
				<?php } ?>
					
				<nav class="navigation pagination" id="halfpag" >
						<div class="nav-links">
						<?php for ($i=1; $i <= get_total_page_berita($perPage); $i++) { ?>
							<a href="blog.php?page=<?= $i; ?>" class="page-numbers <?= ($_GET['page'] ?? 1) == $i ? 'current' : '' ?>"><?= $i; ?></a>
						<?php } ?>
						</div>
				</nav>
				</div>
				<aside>
					<div class="news-letter">
						<h2>Newsletter</h2>
						<hr>
						<p>Don't miss a thing! Sign up to receive daily deals.</p>
						<input type="email" name="userEmail" placeholder="Your Email Address...">
						<a href="#">Subscribe now</a>
					</div>
					<!-- New Letter Ends -->
					<div class="recent-post">
						<h2>recent posts</h2>
						<div class="post">
						<?php 
						$i = 1;
						while($item= mysqli_fetch_array($berita2)){ ?>
							<div class="post-wrap">
								<div class="img-wrap">
									<img src="view/upload/<?= $item['gambar'] ?>" alt="Post Images">
								</div>
								<a href="blog-edu-single.php?id_berita=<?= $item['id_berita'] ?>"><div class="post-content">
									<h3><?= $item['judul'] ?></h3>
									<p>26 Dec, 2018</p>
								</div></a>
							</div>
						<?php } ?>
							
						</div>
					</div>
					<!-- Recent Post Close -->
					<div class="follow-us">
						<h2>Follow us on</h2>
						<hr>
						<div class="socialmedia">
							<a href=""><i class="fab fa-facebook-square"></i></a>
							<a href=""><i class="fab fa-facebook-messenger"></i></a>
							<a href=""><i class="fab fa-twitter"></i></a>
							<a href=""><i class="fab fa-skype"></i></a>
							<a href=""><i class="fab fa-youtube"></i></a>
						</div>
					</div>
				</aside>
			</div>
		</div>
		<section class="query-section">
			<div class="container">
				<p>Ingin tahu lebih banyak tentang SMP Negeri 2 Patikraja?  Hubungi kami <a href="tel:<?= $nomor ?>"><i class="fas fa-phone"></i> <?= $nomor ?></a></p>
			</div>
		</section>

<?php
require "footer.php";
?>
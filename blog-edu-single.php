<?php
require ('header.php');
$slider = get_slider();

if (!isset($_GET['id_berita'])){
	header("Location: blog.php");
}else{
	$id_berita = $_GET['id_berita'];
}

$show_berita = show_berita($id_berita);
while ($item = mysqli_fetch_array($show_berita)){
	$judul 		= $item['judul'];
	$gambar 	= $item['gambar'];
	$penulis 	= $item['penulis'];
	$kategori 	= $item['kategori'];
	$deskripsi 	= $item['deskripsi'];
	$created_at = $item['created_at'];
}
$get_berita = get_berita();

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
		<div class="page-content" itemscope itemtype=" http://schema.org/Blog">
			<div class="container">
				<article class="page-article" itemprop="blogPost">
					<h1 itemprop="about"><?= $judul ?></h1>
					<span><a href="#" itemprop="author">By <?= $penulis ?></a><a href="#"><?= $kategori ?></a><a href="#">Posted on 2nd December, 2018</a><a href="#">5 Comments</a></span>
					<img itemprop="image" src="view/upload/<?= $gambar ?>" alt="Image">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

					<div class="share-section">
						<span>Share Via<a href=""><i class="fab fa-facebook-f"></i></a><a href=""><i class="fab fa-instagram"></i></a><a href=""><i class="fab fa-twitter"></i></a></span>
					</div>
				</article>
				
				<aside>
					<div class="categories-block">
						<h2>categories</h2>
					</div>
					<div class="recent-post">
						<h2>recent posts</h2>
						<div class="post">
							
							<?php 
							$i = 1;
							while($item= mysqli_fetch_array($get_berita)){ ?>
								<div class="post-wrap">
									<div class="img-wrap">
										<img src="view/upload/<?= $item['gambar'] ?>" alt="Post Images">
									</div>
									<a href="blog-edu-single.php?id_berita=<?= $item['id_berita'] ?>"><div class="post-content">
										<h3><?= $item['judul'] ?></h3>
										<p><?= $item['created_at'] ?></p>
									</div></a>
								</div>
							<?php 
								$i += 1;
								if($i > 4){
									break;
								}
							} ?>

							
						</div>
					</div>
					<!-- Recent Post Close -->
				</aside>
				<section class="comment-section">
					<div id="comments" class="comments-area comment" itemprop="comment">
								<h3 class="comments-title">8 Comments</h3>
								<ol class="comment-list">
									<li class="comment even thread-even depth-1 parent">
										<article class="comment-body">
											<footer class="comment-meta">
												<div class="comment-author vcard">
													<img class="avatar photo" src="images/comment-img1.jpg" alt="">
													<b class="fn"><a href="#">Michael</a></b>
												</div>
												<div class="comment-metadata">
													<a href="#"><time datetime="2013-10-02">October 09, 2015</time></a>
												</div><br>
											</footer>
											<div class="comment-content">
												<p>Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum.</p>
											</div>
											<div class="reply">
												<a href="#" class="comment-reply-link">Reply</a>
											</div>
										</article>
										<ol class="children">
											<li class="comment odd alt depth-2 parent">
												<article class="comment-body">
													<footer class="comment-meta">
														<div class="comment-author vcard">
															<img class="avatar photo" src="images/comment-img2.jpg" alt="">
															<b class="fn"><a href="#">John Doe</a></b>
														</div>
														<div class="comment-metadata">
															<a href="#"><time datetime="2013-10-02">October 09, 2015</time></a>
														</div><br>
													</footer>
													<div class="comment-content">
														<p>Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. </p>
													</div>
													<div class="reply">
														<a href="#" class="comment-reply-link">Reply</a>
													</div>
												</article>
												<ol class="children">
													<li class="comment odd alt depth-2 parent">
														<article class="comment-body">
															<footer class="comment-meta">
																<div class="comment-author vcard">
																	<img class="avatar photo" src="images/comment-img3.jpg" alt="">
																	<b class="fn"><a href="#">John Doe</a></b>
																</div>
																<div class="comment-metadata">
																	<a href="#"><time datetime="2013-10-02">October 09, 2015</time></a>
																</div><br>
															</footer>
															<div class="comment-content">
																<p>Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. </p>
															</div>
															<div class="reply">
																<a href="#" class="comment-reply-link">Reply</a>
															</div>
														</article>
													</li>
												</ol>
											</li>
										</ol>
									</li>
									<li class="comment even thread-even depth-1 parent">
										<article class="comment-body">
											<footer class="comment-meta">
												<div class="comment-author vcard">
													<img class="avatar photo" src="images/comment-img4.jpg" alt="">
													<b class="fn"><a href="#">Hilco de Roo</a></b>
												</div>
												<div class="comment-metadata">
													<a href="#"><time datetime="2013-10-02">October 09, 2015</time></a>
												</div><br>
											</footer>
											<div class="comment-content">
												<p>Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. </p>
											</div>
											<div class="reply">
												<a href="#" class="comment-reply-link">Reply</a>
											</div>
										</article>
									</li>
								</ol>
					</div>
					<div class="comment-form">
						<h2>leave a comment</h2>
						<form>
							<input type="text" placeholder="Username*">
							<input type="email" placeholder="Email*">
							<textarea placeholder="Write a comment.....">
							</textarea>
							<input type="submit" value="Submit">
						</form>
						<p>Note: Your email address will not be published</p>
					</div>
				</section>
			</div>
		</div>
		<!-- Page-content closed -->
		<section class="query-section">
			<div class="container">
				<p>Ingin tahu lebih banyak tentang SMP Negeri 2 Patikraja?  Hubungi kami<a href="tel:(0281) 6574601"><i class="fas fa-phone"></i> (0281) 6574601</a></p>
			</div>
		</section>

<?php
require ('footer.php');
?>
@extends('layout.app')
@section('content')
			<div role="main" class="main">

				<section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
					<div class="container">
						<div class="row">
							<div class="col-md-12 align-self-center p-static order-2 text-center">
								<h1 class="text-dark font-weight-bold text-8">Articles</h1>
								<span class="sub-title text-dark">Nos derniers articles</span>
							</div>
							<div class="col-md-12 align-self-center order-1">
								<!-- <ul class="breadcrumb d-block text-center">
									<li><a href="#">Home</a></li>
									<li class="active">Blog</li>
								</ul> -->
							</div>
						</div>
					</div>
				</section>
			</div>

				<div class="container py-4">

					<div class="row">
						<div class="col-lg-3">
							<aside class="sidebar">
								<form action="page-search-results.html" method="get">
									<div class="input-group mb-3 pb-1">
										<input class="form-control text-1" placeholder="Recherche" name="s" id="s" type="text">
										<button type="submit" class="btn btn-dark text-1 p-2"><i class="fas fa-search m-2"></i></button>
									</div>
								</form>
								<h5 class="font-weight-semi-bold pt-4">Catégories</h5>
								<ul class="nav nav-list flex-column mb-5">
									<li class="nav-item"><a class="nav-link" href="#">Culture (2)</a></li>
									<!-- <li class="nav-item">
										<a class="nav-link active" href="#">Photos (4)</a>
										<ul>
											<li class="nav-item"><a class="nav-link" href="#">Animals</a></li>
											<li class="nav-item"><a class="nav-link active" href="#">Business</a></li>
											<li class="nav-item"><a class="nav-link" href="#">Sports</a></li>
											<li class="nav-item"><a class="nav-link" href="#">People</a></li>
										</ul>
									</li> -->
									<li class="nav-item"><a class="nav-link" href="#">Tourisme (3)</a></li>
									<li class="nav-item"><a class="nav-link" href="#">Histoire (2)</a></li>
									<li class="nav-item"><a class="nav-link" href="#">Education (1)</a></li>
								</ul>
								<div class="tabs tabs-dark mb-4 pb-2">
									<ul class="nav nav-tabs">
										<li class="nav-item"><a class="nav-link show active text-1 font-weight-bold text-uppercase" href="#popularPosts" data-bs-toggle="tab">Populaire</a></li>
										<li class="nav-item"><a class="nav-link text-1 font-weight-bold text-uppercase" href="#recentPosts" data-bs-toggle="tab">Recents</a></li>
									</ul>
									<div class="tab-content">
										<div class="tab-pane active" id="popularPosts">
											<ul class="simple-post-list">
												<li>
													<div class="post-image">
														<div class="img-thumbnail img-thumbnail-no-borders d-block">
															<a href="blog-post.html">
																<img src="img/blog/square/blog-11.jpg" width="50" height="50" alt="">
															</a>
														</div>
													</div>
													<div class="post-info">
														<a href="blog-post.html">Nullam Vitae Nibh Un Odiosters</a>
														<div class="post-meta">
															 Nov 10, 2021
														</div>
													</div>
												</li>
												<li>
													<div class="post-image">
														<div class="img-thumbnail img-thumbnail-no-borders d-block">
															<a href="blog-post.html">
																<img src="img/blog/square/blog-24.jpg" width="50" height="50" alt="">
															</a>
														</div>
													</div>
													<div class="post-info">
														<a href="blog-post.html">Vitae Nibh Un Odiosters</a>
														<div class="post-meta">
															 Nov 10, 2021
														</div>
													</div>
												</li>
												<li>
													<div class="post-image">
														<div class="img-thumbnail img-thumbnail-no-borders d-block">
															<a href="blog-post.html">
																<img src="img/blog/square/blog-42.jpg" width="50" height="50" alt="">
															</a>
														</div>
													</div>
													<div class="post-info">
														<a href="blog-post.html">Odiosters Nullam Vitae</a>
														<div class="post-meta">
															 Nov 10, 2021
														</div>
													</div>
												</li>
											</ul>
										</div>
										<div class="tab-pane" id="recentPosts">
											<ul class="simple-post-list">
												<li>
													<div class="post-image">
														<div class="img-thumbnail img-thumbnail-no-borders d-block">
															<a href="blog-post.html">
																<img src="img/blog/square/blog-24.jpg" width="50" height="50" alt="">
															</a>
														</div>
													</div>
													<div class="post-info">
														<a href="blog-post.html">Vitae Nibh Un Odiosters</a>
														<div class="post-meta">
															 Nov 10, 2021
														</div>
													</div>
												</li>
												<li>
													<div class="post-image">
														<div class="img-thumbnail img-thumbnail-no-borders d-block">
															<a href="blog-post.html">
																<img src="img/blog/square/blog-42.jpg" width="50" height="50" alt="">
															</a>
														</div>
													</div>
													<div class="post-info">
														<a href="blog-post.html">Odiosters Nullam Vitae</a>
														<div class="post-meta">
															 Nov 10, 2021
														</div>
													</div>
												</li>
												<li>
													<div class="post-image">
														<div class="img-thumbnail img-thumbnail-no-borders d-block">
															<a href="blog-post.html">
																<img src="img/blog/square/blog-11.jpg" width="50" height="50" alt="">
															</a>
														</div>
													</div>
													<div class="post-info">
														<a href="blog-post.html">Nullam Vitae Nibh Un Odiosters</a>
														<div class="post-meta">
															 Nov 10, 2021
														</div>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<h5 class="font-weight-semi-bold pt-4">A propos de nous</h5>
								<p>Héritage O Nord est une organisation socio-culturelle, éducative, sportive et promotionnelle œuvrant dans la région du Nord. Notre mission consiste à promouvoir les atouts touristiques, culturels, éducatifs, sportifs et historiques du département Nord, ainsi que des départements voisins tels que le Centre, le Nord-est, l'Artibonite et le Nord-ouest </p>
							</aside>
						</div>
						<div class="col-lg-9">
							<div class="blog-posts">

								<div class="row px-3">

									<div class="col-sm-6">
										<article class="post post-medium border-0 pb-0 mb-5">
											<div class="post-image">
												<a href="{{route('article')}}">
													<img src="img/article/presse1.webp" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
												</a>
											</div>

											<div class="post-content">

												<h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a href="{{route('article')}}">Cocktail de Bienvenue</a></h2>
												<p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

												<div class="post-meta">
													<span><i class="far fa-user"></i> Par <a href="#">Binedinie Jean-Louis</a> </span>
													<span><i class="far fa-folder"></i> <a href="#">Education</a>, <a href="#">Culture</a> </span>
													<span><i class="far fa-comments"></i> <a href="#">12 Commentaires</a></span>
													<span class="d-block mt-2"><a href="{{route('article')}}" class="btn btn-xs btn-light text-1 text-uppercase">Voir plus</a></span>
												</div>

											</div>
										</article>
									</div>

									<div class="col-sm-6">
										<article class="post post-medium border-0 pb-0 mb-5">
											<div class="post-image">
												<a href="{{route('celebration')}}">
													<img src="img/article/18mai.jpg" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
												</a>
											</div>

											<div class="post-content">

												<h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a href="{{route('celebration')}}">Celebration des 220 ans du bicolore</a></h2>
												<p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

												<div class="post-meta">
													<span><i class="far fa-user"></i> Par <a href="#">Binedinie Jean-Louis</a> </span>
													<span><i class="far fa-folder"></i> <a href="#">Education</a>, <a href="#">Culture</a> </span>
													<span><i class="far fa-comments"></i> <a href="#">12 Commentaires</a></span>
													<span class="d-block mt-2"><a href="{{route('celebration')}}" class="btn btn-xs btn-light text-1 text-uppercase">Voir plus</a></span>
												</div>

											</div>
										</article>
									</div>

									<div class="col-sm-6">
										<article class="post post-medium border-0 pb-0 mb-5">
											<div class="post-image">
												<a href="{{route('article')}}">
													<img src="img/article/fetedelamusique.jpg" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
												</a>
											</div>

											<div class="post-content">

												<h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a href="blog-post.html">Fete de la musique</a></h2>
												<p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

												<div class="post-meta">
													<span><i class="far fa-user"></i> Par <a href="#">Binedinie Jean-Louis</a> </span>
													<span><i class="far fa-folder"></i> <a href="#">Education</a>, <a href="#">Culture</a> </span>
													<span><i class="far fa-comments"></i> <a href="#">12 Commentaires</a></span>
													<span class="d-block mt-2"><a href="blog-post.html" class="btn btn-xs btn-light text-1 text-uppercase">Voir plus</a></span>
												</div>

											</div>
										</article>
									</div>

									<div class="col-sm-6">
										<article class="post post-medium border-0 pb-0 mb-5">
											<div class="post-image">
												<a href="blog-post.html">
													<img src="img/article/maraton-25.jpg" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
												</a>
											</div>

											<div class="post-content">

												<h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a href="blog-post.html">Marathon, Jenes No ap kouri</a></h2>
												<p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

												<div class="post-meta">
													<span><i class="far fa-user"></i> Par <a href="#">Bob Doe</a> </span>
													<span><i class="far fa-folder"></i> <a href="#">Education</a>, <a href="#">Culture</a> </span>
													<span><i class="far fa-comments"></i> <a href="#">12 Commentaires</a></span>
													<span class="d-block mt-2"><a href="blog-post.html" class="btn btn-xs btn-light text-1 text-uppercase">Voir plus</a></span>
												</div>

											</div>
										</article>
									</div>

									<!-- <div class="col-sm-6">
										<article class="post post-medium border-0 pb-0 mb-5">
											<div class="post-image">
												<a href="blog-post.html">
													<img src="img/blog/medium/blog-5.jpg" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
												</a>
											</div>

											<div class="post-content">

												<h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a href="blog-post.html">The Blue Sky</a></h2>
												<p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

												<div class="post-meta">
													<span><i class="far fa-user"></i> Par <a href="#">Bob Doe</a> </span>
													<span><i class="far fa-folder"></i> <a href="#">Education</a>, <a href="#">Culture</a> </span>
													<span><i class="far fa-comments"></i> <a href="#">12 Commentaires</a></span>
													<span class="d-block mt-2"><a href="blog-post.html" class="btn btn-xs btn-light text-1 text-uppercase">Voir plus</a></span>
												</div>

											</div>
										</article>
									</div>

									<div class="col-sm-6">
										<article class="post post-medium border-0 pb-0 mb-5">
											<div class="post-image">
												<a href="blog-post.html">
													<img src="img/blog/medium/blog-6.jpg" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
												</a>
											</div>

											<div class="post-content">

												<h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a href="blog-post.html">Night Life</a></h2>
												<p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

												<div class="post-meta">
													<span><i class="far fa-user"></i> Par <a href="#">Bob Doe</a> </span>
													<span><i class="far fa-folder"></i> <a href="#">Education</a>, <a href="#">Culture</a> </span>
													<span><i class="far fa-comments"></i> <a href="#">12 Commentaires</a></span>
													<span class="d-block mt-2"><a href="blog-post.html" class="btn btn-xs btn-light text-1 text-uppercase">Voir plus</a></span>
												</div>

											</div>
										</article>
									</div>

									<div class="col-sm-6">
										<article class="post post-medium border-0 pb-0 mb-5">
											<div class="post-image">
												<a href="blog-post.html">
													<img src="img/blog/medium/blog-7.jpg" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
												</a>
											</div>

											<div class="post-content">

												<h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a href="blog-post.html">Another World Perspective</a></h2>
												<p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

												<div class="post-meta">
													<span><i class="far fa-user"></i> Par <a href="#">Bob Doe</a> </span>
													<span><i class="far fa-folder"></i> <a href="#">Education</a>, <a href="#">Culture</a> </span>
													<span><i class="far fa-comments"></i> <a href="#">12 Commentaires</a></span>
													<span class="d-block mt-2"><a href="blog-post.html" class="btn btn-xs btn-light text-1 text-uppercase">Voir plus</a></span>
												</div>

											</div>
										</article>
									</div>

									<div class="col-sm-6">
										<article class="post post-medium border-0 pb-0 mb-5">
											<div class="post-image">
												<a href="blog-post.html">
													<img src="img/blog/medium/blog-8.jpg" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
												</a>
											</div>

											<div class="post-content">

												<h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a href="blog-post.html">The Creative Team</a></h2>
												<p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

												<div class="post-meta">
													<span><i class="far fa-user"></i> Par <a href="#">Bob Doe</a> </span>
													<span><i class="far fa-folder"></i> <a href="#">Education</a>, <a href="#">Culture</a> </span>
													<span><i class="far fa-comments"></i> <a href="#">12 Commentaires</a></span>
													<span class="d-block mt-2"><a href="blog-post.html" class="btn btn-xs btn-light text-1 text-uppercase">Voir plus</a></span>
												</div>

											</div>
										</article>
									</div>

								</div> -->

								<div class="row">
									<div class="col">
										<ul class="pagination float-end">
											<li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-left"></i></a></li>
											<li class="page-item active"><a class="page-link" href="#">1</a></li>
											<li class="page-item"><a class="page-link" href="#">2</a></li>
											<li class="page-item"><a class="page-link" href="#">3</a></li>
											<li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
										</ul>
									</div>
								</div>

							</div>
						</div>
					</div>

				</div>

@stop
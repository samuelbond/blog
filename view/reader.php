<?php
/**
 * @var \component\blog\BlogEntry $entry
 */

/**
 * @var \component\usermanager\User $author
 */
    $author = $reader->getUserDetail($entry->getEntryAuthor());
?>
			<!-- Main content starts -->
	
			<div class="main-block">
				
				<!-- Page heading two starts -->
				
				<div class="page-heading-two">
					<div class="container">
						<h2>Blog Single <span>Something goes here</span></h2>
						<div class="clearfix"></div>
					</div>
				</div>
				
				<!-- Page heading two ends -->
			
				<div class="container">
					
					<!-- blog two -->
					<div class="blog-two">
						<div class="row">
							<!-- Mainbar column -->
							<div class="col-md-8">
							
								<!-- Blog item starts -->
								<div class="blog-two-item">
									<!-- blog two Content -->
									<div class="blog-two-content">
										<!-- Heading -->
										<h3><a href="blog-single.html"><?php echo $entry->getEntryTitle(); ?></a></h3>
										<!-- Blog meta -->
										<div class="blog-meta">
											<!-- Date -->
											<a href="#"><i class="fa fa-calendar"></i> &nbsp; <?php echo $entry->getEntryDate(); ?></a> &nbsp;
											<!-- Author -->
											<a href="#"><i class="fa fa-user"></i> &nbsp; <?php echo $author->getFullName(); ?></a> &nbsp;
											<!-- Comments -->
											<a href="#"><i class="fa fa-comments"></i> &nbsp; 6 Comments</a>
										</div>
										

													<!-- Image -->
													<img src="<?php echo $entry->getEntryCover(); ?>" alt="" class="img-responsive img-thumbnail">

														
										
										<!-- Paragraph -->
                                        <?php echo $entry->getEntry(); ?>
									</div>
								</div>
								<!-- Blog item ends -->
								
								<!-- Social media sharing section -->
								<div class="well">
									<span class="bold">There is Love in Sharing: </span>  &nbsp; &nbsp;
									<span class="brand-bg">
										<a href="#" class="facebook"><i class="fa fa-facebook square-2 rounded-1"></i></a>
										<a href="#" class="twitter"><i class="fa fa-twitter square-2 rounded-1"></i></a>
										<a href="#" class="google-plus"><i class="fa fa-google-plus square-2 rounded-1"></i></a>
										<a href="#" class="linkedin"><i class="fa fa-linkedin square-2 rounded-1"></i></a>
										<a href="#" class="pinterest"><i class="fa fa-pinterest square-2 rounded-1"></i></a>
									</span>
								</div>
								
								<!-- Author section -->
								<div class="blog-author well">
									<!-- Author image -->
									<div class="blog-author-img">
										<a href="#"><img src="<?php echo $author->getProfilePicture(); ?>" alt="" class="img-responsive img-thumbnail" /></a>
									</div>
									<!-- Author details -->
									<div class="blog-author-content">
										<h5><a href="#"><?php echo $author->getFullName(); ?></a></h5>
                                        <?php echo $author->getProfile(); ?>
									</div>
									<div class="clearfix"></div>
								</div>
								
								<!-- Comments section -->
								<div class="blog-comments">
									<h4><i class="fa fa-comments color"></i>&nbsp; 6 Comments</h4>
									<hr />
									
									<!-- Blog comment item -->
									<div class="blog-comment-item">
										<div class="comment-author-image">
											<a href="#"><img src="img/user/1.jpg" alt="" class="img-responsive img-thumbnail" /></a>
										</div>
										<div class="comment-details">
											<!-- Name -->
											<h5><a href="#">Frank Thomas</a> <small>08/08/2013</small></h5>
											<!-- Paragraph -->
											<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.</p>
										</div>
									</div>
									
									<!-- Blog comment item -->
									<div class="blog-comment-item">
										<div class="comment-author-image">
											<a href="#"><img src="img/user/2.jpg" alt="" class="img-responsive img-thumbnail" /></a>
										</div>
										<div class="comment-details">
											<!-- Name -->
											<h5><a href="#">Bob Marley</a> <small>08/08/2013</small></h5>
											<!-- Paragraph -->
											<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et m et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.</p>
										</div>
									</div>

									<!-- Blog comment item -->
									<div class="blog-comment-item comment-reply">
										<div class="comment-author-image">
											<a href="#"><img src="img/user/3.jpg" alt="" class="img-responsive img-thumbnail" /></a>
										</div>
										<div class="comment-details">
											<!-- Name -->
											<h5><a href="#">James Brown</a> <small>08/08/2013</small></h5>
											<!-- Paragraph -->
											<p>Debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.</p>
										</div>
									</div>

									<!-- Blog comment item -->
									<div class="blog-comment-item">
										<div class="comment-author-image">
											<a href="#"><img src="img/user/4.jpg" alt="" class="img-responsive img-thumbnail" /></a>
										</div>
										<div class="comment-details">
											<!-- Name -->
											<h5><a href="#">Jockey Rambo</a> <small>08/08/2013</small></h5>
											<!-- Paragraph -->
											<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptatesdiandae sint et molestiae non recusandae.</p>
										</div>
									</div>									
									
									
								</div>
								
								<br />
								
								<!-- Comment Form -->
								<div class="well">
									<!-- Heading -->
									<h4><i class="fa fa-comments color"></i>&nbsp; Post Comment</h4><!-- Form -->
									<hr />
									<form class="form" role="form">
										<div class="row">
											<div class="col-md-4">
												<div class="form-group">
													<input type="text" class="form-control" placeholder="Enter Name">
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<input type="text" class="form-control" placeholder="Enter Email">
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<input type="text" class="form-control" placeholder="Enter Website">
												</div>
											</div>
										</div>
										<div class="form-group">
											<textarea class="form-control" rows="7" placeholder="Enter Message"></textarea>
										</div>
										<!-- Button -->
										<button type="button" class="btn btn-color">Submit</button>&nbsp;
										<button type="button" class="btn btn-white">Reset</button>
									</form>
								</div>
								
								<!-- Pager -->
								<ul class="pager">
									<li class="previous"><a href="#">&larr; Older</a></li>
									<li class="next"><a href="#">Newer &rarr;</a></li>
								</ul>
								
							</div>
							
							<!-- Sidebar column -->
							<div class="col-md-4">
								<!-- Sidebar -->
								<div class="sidebar">
								
									<!-- Search Widget -->
									<div class="s-widget">
										<!-- Heading -->
										<h5><i class="fa fa-search color"></i>&nbsp; Search</h5>
										<!-- Widgets Content -->
										<div class="widget-content search">
											<form role="form">
												<div class="input-group">
													<input type="text" class="form-control" placeholder="Type Something">
													<span class="input-group-btn">
														<button class="btn btn-color" type="button">Search</button>
													</span>
												</div>
											</form>
										</div>
									</div>
									
									<!-- Categories Widget -->
									<div class="s-widget">
										<!-- Heading -->
										<h5><i class="fa fa-folder color"></i>&nbsp; Categories</h5>
										<!-- Widgets Content -->
										<div class="widget-content categories">
											<ul class="list-6">
												<li><a href="#">Web Designing <span class="color">(5)</span></a></li>
												<li><a href="#">Graphic Design <span class="color">(5)</span></a></li>
												<li><a href="#">PHP Dev <span class="color">(5)</span></a></li>
												<li><a href="#">Android Dev <span class="color">(5)</span></a></li>
												<li><a href="#">Photoshop <span class="color">(5)</span></a></li>
												<li><a href="#">WordPress <span class="color">(5)</span></a></li>
											</ul>
										</div>
									</div>
									
									<!-- Nav tab widget - popular, recent and comments -->
									<div class="s-widget">
										<h5><i class="fa fa-tags color"></i>&nbsp; Nav Tabs</h5>
										<div class="widget-content tabs">
											<div class="nav-tabs-two">
												<!-- Nav tabs -->
												<ul class="nav nav-tabs">
													<li class="active"><a href="#popular" data-toggle="tab">Popular</a></li>
													<li><a href="#recent" data-toggle="tab">Recent</a></li>
													<li><a href="#comments" data-toggle="tab">Comments</a></li>
												</ul>
												<!-- Tab content -->
												<div class="tab-content">
													<!-- Popular posts -->
													<div class="tab-pane fade in active" id="popular">
														<ul>
															<li>
																<a href="#">
																	<!-- Item image -->
																	<img src="img/user/1.jpg" alt="" class="img-responsive img-thumbnail" />
																	<!-- Item title -->
																	<span>Neque porro quisquam estui dolorem ipsum quia dolor sit</span>
																	<div class="clearfix"></div>
																</a>
															</li>
															<li>
																<a href="#">
																	<!-- Item image -->
																	<img src="img/user/2.jpg" alt="" class="img-responsive img-thumbnail" />
																	<!-- Item title -->
																	<span>Temporibus autem quibusdam et aut officiis  aut rerum</span>
																	<div class="clearfix"></div>
																</a>
															</li>
															<li>
																<a href="#">
																	<!-- Item image -->
																	<img src="img/user/3.jpg" alt="" class="img-responsive img-thumbnail" />
																	<!-- Item title -->
																	<span>Voluptates repudiandae sint et molestiae non recusand</span>
																	<div class="clearfix"></div>
																</a>
															</li>
															<li>
																<a href="#">
																	<!-- Item image -->
																	<img src="img/user/4.jpg" alt="" class="img-responsive img-thumbnail" />
																	<!-- Item title -->
																	<span>Neque porro quisquam estui dolorem ipsum quia dolor sit</span>
																	<div class="clearfix"></div>
																</a>
															</li>
														</ul>
													</div>
													<!-- Recent posts -->
													<div class="tab-pane fade" id="recent">
														<ul>
															<li>
																<a href="#">
																	<!-- Item image -->
																	<img src="img/user/1.jpg" alt="" class="img-responsive img-thumbnail" />
																	<!-- Item title -->
																	<span>Neque porro quisquam estui dolorem ipsum quia dolor sit</span>
																	<div class="clearfix"></div>
																</a>
															</li>
															<li>
																<a href="#">
																	<!-- Item image -->
																	<img src="img/user/2.jpg" alt="" class="img-responsive img-thumbnail" />
																	<!-- Item title -->
																	<span>Temporibus autem quibusdam et aut officiis  aut rerum</span>
																	<div class="clearfix"></div>
																</a>
															</li>
															<li>
																<a href="#">
																	<!-- Item image -->
																	<img src="img/user/3.jpg" alt="" class="img-responsive img-thumbnail" />
																	<!-- Item title -->
																	<span>Voluptates repudiandae sint et molestiae non recusand</span>
																	<div class="clearfix"></div>
																</a>
															</li>
															<li>
																<a href="#">
																	<!-- Item image -->
																	<img src="img/user/4.jpg" alt="" class="img-responsive img-thumbnail" />
																	<!-- Item title -->
																	<span>Neque porro quisquam estui dolorem ipsum quia dolor sit</span>
																	<div class="clearfix"></div>
																</a>
															</li>
														</ul>														
													</div>
													<!-- Recent comments -->
													<div class="tab-pane fade" id="comments">
														<ul>
															<li>
																<a href="#">
																	<!-- Item image -->
																	<img src="img/user/1.jpg" alt="" class="img-responsive img-thumbnail" />
																	<!-- Item title -->
																	<span>Neque porro quisquam estui dolorem ipsum quia dolor sit</span>
																	<div class="clearfix"></div>
																</a>
															</li>
															<li>
																<a href="#">
																	<!-- Item image -->
																	<img src="img/user/2.jpg" alt="" class="img-responsive img-thumbnail" />
																	<!-- Item title -->
																	<span>Temporibus autem quibusdam et aut officiis  aut rerum</span>
																	<div class="clearfix"></div>
																</a>
															</li>
															<li>
																<a href="#">
																	<!-- Item image -->
																	<img src="img/user/3.jpg" alt="" class="img-responsive img-thumbnail" />
																	<!-- Item title -->
																	<span>Voluptates repudiandae sint et molestiae non recusand</span>
																	<div class="clearfix"></div>
																</a>
															</li>
															<li>
																<a href="#">
																	<!-- Item image -->
																	<img src="img/user/4.jpg" alt="" class="img-responsive img-thumbnail" />
																	<!-- Item title -->
																	<span>Neque porro quisquam estui dolorem ipsum quia dolor sit</span>
																	<div class="clearfix"></div>
																</a>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
									
									<!-- Tag Widget -->
									<div class="s-widget">
										<h5><i class="fa fa-tags color"></i>&nbsp; Tags</h5>
										<!-- Widgets Content -->
										<div class="widget-content">
											<a href="#" class="label label-color">web</a> 
											<a href="#" class="label label-color">wordpress</a> 
											<a href="#" class="label label-color">php</a> 
											<a href="#" class="label label-color">jquery</a> 
											<a href="#" class="label label-color">java</a> 
											<a href="#" class="label label-color">photoshop</a> 
											<a href="#" class="label label-color">windows</a> 
											<a href="#" class="label label-color">android</a> 
											<a href="#" class="label label-color">ios</a> 
											<a href="#" class="label label-color">chrome</a> 
											<a href="#" class="label label-color">development</a> 
											<a href="#" class="label label-color">plugin</a> 
											<a href="#" class="label label-color">personal</a> 
											<a href="#" class="label label-color">general</a> 
										</div>
									</div>
									
									<!-- Gallery Widget -->
									<div class="s-widget">
										<!-- Heading -->
										<h5><i class="fa fa-photo color"></i>&nbsp; Gallery</h5>
										<!-- Widgets Content -->
										<div class="widget-content gallery">
											<a href="img/gallery/small/1.jpg" class="lightbox"><img src="img/gallery/small/1.jpg" alt="" class="img-responsive img-thumbnail" /></a>
											<a href="img/gallery/small/2.jpg" class="lightbox"><img src="img/gallery/small/2.jpg" alt="" class="img-responsive img-thumbnail" /></a>
											<a href="img/gallery/small/3.jpg" class="lightbox"><img src="img/gallery/small/3.jpg" alt="" class="img-responsive img-thumbnail" /></a>
											<a href="img/gallery/small/1.jpg" class="lightbox"><img src="img/gallery/small/1.jpg" alt="" class="img-responsive img-thumbnail" /></a>
											<a href="img/gallery/small/2.jpg" class="lightbox"><img src="img/gallery/small/2.jpg" alt="" class="img-responsive img-thumbnail" /></a>
											<a href="img/gallery/small/3.jpg" class="lightbox"><img src="img/gallery/small/3.jpg" alt="" class="img-responsive img-thumbnail" /></a>
										</div>
									</div>									
									
									<!-- Social media widget -->
									<div class="s-widget">
										<h5><i class="fa fa-share color"></i>&nbsp; Social Media</h5>
										<!-- Widgets Content -->
										<div class="widget-content brand-bg">
											<!-- Social Media Icons -->
											<a href="#" class="facebook"><i class="fa fa-facebook square-3 rounded-1"></i></a>
											<a href="#" class="twitter"><i class="fa fa-twitter square-3 rounded-1"></i></a>
											<a href="#" class="google-plus"><i class="fa fa-google-plus square-3 rounded-1"></i></a>
											<a href="#" class="linkedin"><i class="fa fa-linkedin square-3 rounded-1"></i></a>
											<a href="#" class="pinterest"><i class="fa fa-pinterest square-3 rounded-1"></i></a>
											<a href="#" class="dropbox"><i class="fa fa-dropbox square-3 rounded-1"></i></a>
											<a href="#" class="foursquare"><i class="fa fa-foursquare square-3 rounded-1"></i></a>
											<a href="#" class="flickr"><i class="fa fa-flickr square-3 rounded-1"></i></a>
											<a href="#" class="github"><i class="fa fa-github square-3 rounded-1"></i></a>
											<a href="#" class="instagram"><i class="fa fa-instagram square-3 rounded-1"></i></a>
											<a href="#" class="skype"><i class="fa fa-skype square-3 rounded-1"></i></a>
											<a href="#" class="tumblr"><i class="fa fa-tumblr square-3 rounded-1"></i></a>
											<a href="#" class="dribbble"><i class="fa fa-dribbble square-3 rounded-1"></i></a>
											<a href="#" class="youtube"><i class="fa fa-youtube square-3 rounded-1"></i></a>
										</div>
									</div>
									
								</div>
							</div>
						</div>
					</div>
									
				</div>
			</div>
			
			<!-- Main content ends -->

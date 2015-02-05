
			
			<!-- Main content starts -->
	
			<div class="main-block">
				
				<!-- Page heading two starts -->
				
				<div class="page-heading-two">
					<div class="container">
						<h2>Blog Two <span>Something goes here</span></h2>

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
									<!-- blog two slider -->
									
									<!-- Carousel -->
										
									<!-- Bootstrap carousel usage 
										Bootstrap carousel should have id. Below i am using "bs-carousel-X". Where "X" denotes number". If a page has more than 1 carousel, then add the new carousel with the id "bs-carousel-1", "bs-carousel-2". You also need to update the id in, "carousel indicators" section and "carousel control" section.  
										
										Carousel comes with 3 main data attributes which you can customize. They are...
										data-interval - Time delay between item cycle. Default value "5000".
										data-pause - Pause on hover. Default value "pause".
										data-wrap - Continues cycle or stop at the end. Default value "true".
									-->


								<!-- Blog item starts -->


                                    <?php

                                    if(sizeof($allEntries) === 0)
                                    {
                                        echo "No blog entry found in this category";
                                    }

                                    foreach($allEntries as $blogEntry)
                                    {
                                        $userData = $reader->getUserDetail($blogEntry['author']);
                                        echo '<div class="blog-two-item">
									<!-- blog two Img -->
									<div class="blog-two-img">
										<!-- Image -->
										<img src="'.$blogEntry['cover'].'" alt="" class="img-responsive img-thumbnail" />
									</div>
									<!-- blog two Content -->
									<div class="blog-two-content">
										<!-- Heading -->
										<h3><a href="blog/entry/'.$blogEntry['entry_id'].'">'.$blogEntry['title'].'</a></h3>
										<!-- Blog meta -->
										<div class="blog-meta">
											<!-- Date -->
											<i class="fa fa-calendar"></i> &nbsp; '.$blogEntry['date_created'].' &nbsp;
											<!-- Author -->
											<i class="fa fa-user"></i> &nbsp; '.$userData->getFullName().' &nbsp;
											<!-- Comments -->

										</div>
										<!-- Paragraph -->
										'.substr($blogEntry['entry'], 0, 150).' ....
									</div>
								</div>';
                                    }

                                    ?>

                                    <!-- Blog item ends -->


								
								<!-- Pagination -->
								<ul class="pagination">
									<!-- List -->
                                    <?php
                                    if($totalPages > 0)
                                        for($k = 0; $k <= $totalPages; $k++)
                                        {
                                            if($currentPage == ($k+1))
                                            {
                                                echo '<li class="active"><a href="#">'.($k+1).' <span class="sr-only">(current)</span></a></li>';
                                            }
                                            else
                                            {
                                                echo '<li><a href="blog/category/'.$currentCategory.'?page='.($k+1).'">'.($k+1).'</a></li>';
                                            }

                                        }
                                    ?>
								</ul>
							</div>
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
                                                <?php

                                                foreach($categories as $category)
                                                {
                                                    echo '<li><a href="blog/category/'.$category['id'].'">'.$category['category'].'</a></li>';
                                                }
                                                ?>

                                            </ul>
										</div>
									</div>

									<!-- Tag Widget -->
									<div class="s-widget">

									</div>
									
									<!-- Gallery Widget -->
									<div class="s-widget">
										<!-- Heading -->


								</div>
							</div>
						</div>
					</div>
									
				</div>
			</div>
			
			<!-- Main content ends -->

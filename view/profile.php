<?php
/**
 * @var \component\usermanager\User $profile
 */
?>
			<!-- Main content starts -->
	
			<div class="main-block">
				
				<!-- Page heading two starts -->
				
				<div class="page-heading-two">
					<div class="container">
						<h2>Profile <span></span></h2>

						<div class="clearfix"></div>
					</div>
				</div>
				
				<!-- Page heading two ends -->
			
				<div class="container">
					
					<!-- Actual content -->
					<div class="ecommerce">
					
						<div class="row">
							<div class="col-md-9 col-sm-8 col-md-push-3 col-sm-push-4">
								<!-- Shopping items content -->
								<div class="shopping-content">
									<!-- Block Title -->
									<h4><i class="fa fa-user color"></i>&nbsp; My Profile&nbsp;</h4>
									<hr />
									<div class="shopping-account">
										<div class="row">
											<div class="col-md-3 col-sm-4 col-xs-4">
												<!-- Image -->
												<img src="<?php echo $profile->getProfilePicture(); ?>" class="img-responsive img-thumbnail" alt="profile picture" />
											</div>
											<div class="col-md-9 col-sm-8 col-xs-8">
												<!-- Your Name / Heading -->
												<h4><?php echo $profile->getFullName(); ?></h4>
												<div class="address">
													<!-- Address -->
													<p><?php echo $profile->getProfile(); ?></p>
													<!-- Email Address -->
													<span><i class="fa fa-envelope color"></i>&nbsp; <?php echo $profile->getEmail(); ?></span>
												</div>
											</div>
										</div>
										<br />
                                        <div class="block-heading-two">
                                            <h3><span>Recent Blog Entries</span></h3>
                                        </div>
										<!-- Recent Purchase Table -->
										<div class="rptable table-responsive">
											<table class="table table-bordered">
												<!-- Table Header -->
												<thead>
													<tr>
														<th>Title</th>
														<th>Date Created</th>
														<th>Published Status</th>
													</tr>
												</thead>
												<!-- Table Body -->
												<tbody>
													<tr>
														<td><a href="#">Why Static Variables</a></td>
														<td>1 February 2015</td>
														<td>Not Published</td>
													</tr>
													<tr>
                                                        <td><a href="#">How to get the best from Doctrine</a></td>
                                                        <td>1 February 2015</td>
                                                        <td>Published</td>
													</tr>
												</tbody>
											</table>
										</div>
																				
										<!-- Pagination -->
										<div class="shopping-pagination">
											<ul class="pagination">
												<li class="disabled"><a href="#">&laquo;</a></li>
												<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
												<li><a href="#">2</a></li>
												<li><a href="#">3</a></li>
												<li><a href="#">4</a></li>
												<li><a href="#">5</a></li>
												<li><a href="#">&raquo;</a></li>
											</ul>
										</div>
										<!-- Pagination end-->
										
									</div>
								</div>
							</div>
							
							<div class="col-md-3 col-sm-4 col-md-pull-9 col-sm-pull-8">
							
								<!-- Shopping Sidebar -->
								<div class="sidebar">
								
									<!-- Heading -->
									<h2>Navigation</h2>
									<!-- Sidebar Menu -->
									<ul class="account-nav">
										<li><a href="profile">My Profile</a></li>
                                        <li><a href="manageprofile">Manage Profile</a></li>
										<li><a href="manageusers">Manage Users</a></li>
										<li><a href="ecommerce-order-history.html">My Blog</a></li>
									</ul>

									</div>
								</div>
								
							</div>
							
						</div>
						<br />

						
					</div>
				</div>
			</div>
			
			<!-- Main content ends -->

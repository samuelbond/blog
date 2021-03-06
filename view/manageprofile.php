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
                        <?php

                        if(isset($error))
                        {
                            echo '<div class="row">
                <div class="col-md-6 col-md-push-3">
                    <div class="alert alert-danger alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>Error!</strong> '.$error.'.
                    </div>
                </div>
                </div>';
                        }

                        if(isset($success))
                        {
                            echo '<div class="row">
                <div class="col-md-6 col-md-push-3">
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>Success!</strong> '.$success.'.
                    </div>
                </div>
                </div>';
                        }


                        if(isset($message))
                        {
                            echo '<div class="row">
                <div class="col-md-6 col-md-push-3">
                    <div class="alert alert-info alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>Heads up!</strong> '.$message.'.
                    </div>
                </div>
                </div>';
                        }

                        ?>
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
                                <h3><span>Update Profile</span></h3>
                                <small style="color:red;">Fill in Fields you want to update only</small>
                            </div>

                            <form method="post" action="manageprofile" enctype="multipart/form-data">
                                <div class="rptable table-responsive">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email Address</label>
                                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName">Fullname</label>
                                        <input type="text" name="fname" class="form-control" id="exampleInputName" placeholder="Enter Fullname">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputProfile">Profile</label>
                                        <textarea class="form-control" name="profile" id="exampleInputProfile" placeholder="Your New Profile"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputProfilePicture">Profile Picture</label>
                                        <input type="file" name="profilepicture" id="exampleInputProfilePicture">
                                    </div>

                                    <div class="form-group">
                                        <label style="color:#ff0000;">To Update your password, please enter your current password and new password</label>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword">Current Password</label>
                                        <input type="password" name="oldpass" class="form-control" id="exampleInputPassword" placeholder="Enter your current password">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">New Password</label>
                                        <input type="password" name="newpass" class="form-control" id="exampleInputPassword1" placeholder="Enter your new password">
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary">Update Profile</button>
                            </form>

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
                            <li><a href="myblog">My Blog</a></li>
                            <li><a href="publishblog">Publish Alerts</a></li>
                            <li><a href="publishcomment">Blog Comments</a></li>
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



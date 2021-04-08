<?php get_header(  );?>
<body>
    <!--Start Preloader-->
    <div class="preloader">
        <div class="preloader-inner-area">
            <div class="loader-overlay">
                <div class="l-preloader">
                    <div class="c-preloader"></div>
                </div>
            </div>
        </div>
    </div> 
    <!--End Preloader-->

    

    
    <div class="page_title_banner banner_blog_single_title_bg">
        <div class="page_title_banner_overlay"></div>
        <div class="container">
            <div class="page_title_banner_text text-center">
                <h2 class="banner_effect">Blog single</h2>
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Pages</a></li>
                    <li class="active">blog single</li>
                </ul>
            </div>
        </div><!--container-->
    </div><!-- page_title_banner -->
	

    <div class="blog_page_area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">


                <?php 
                       if (have_posts()):
                        while (have_posts()):the_post();
                    ?>
                                         <div class="blog_left_side_area">
                        <div class="blog_pic image_fulwidth">
                            <img src="<?php the_post_thumbnail() ?>" alt="images">
                            <h4 class="date_position"><?php echo get_the_date('F j Y');?></h4>
                        </div>

                        <div class="blog_left_single_content blog_single_content para_default">
                            <h3><?php echo get_the_title(  );?></h3>
                            <p><?php echo the_content( );?></p>

                        </div>

                        <div class="blog_tag">
                        <?php the_tags( 'Tags: ', ', ', '<br />' ); ?>
                        </div>

                        <div class="share_blog_single_in_social">
                            <h4>
                                <span>Share</span> 
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </h4>
                        </div>
						
			             <div class="content_blog_a fix">
							<div class="e_blog_A">
								 <img src="images/we_are_alwayes.jpg" alt="a_text_pic">
							</div>
							<div class="blog_a_text">
								<h5><a href="#">Tomas Anderson</a></h5>
								<p>Lorem ipsum dolor sit amet, lacus eu erat integer bibendum rutrum, sed arcu molestie, in quis ornare, rhoncus scelerisque velit, nam</p>
							</div>
						</div>

                        <div class="consultency_comments_form">
                            <h2 class="comments_title">Leave a Reply</h2>
                            <div class="row">
                                <form action="#" method="post">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="E-mail*">
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="url" class="form-control" placeholder="Website">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" rows="4" placeholder="Your Comment"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="send_me_ph">
                                                <a class="submit_btn_quick_contact" href="#">Submit Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div><!-- blog_left_side_area -->
                </div>
                 <?php
                    endwhile;
                    endif;
                    wp_reset_postdata()
                 ?>
                   <!-- col-md-8 -->

                <div class="col-md-4">
                    <div class="blog_right_side_area">
                        <div class="blog_right_widget">
                            <div class="blog_widget">
                                <form action="#" method="post" class="blog_search">
                                    <input type="text" placeholder="Search...">
                                    <div class="blog_search_btn"> <input type="submit" value=""></div>
                                </form>
                            </div>
                        </div><!-- blog_right_widget  -->
                        
                        <div class="blog_right_widget">
                            <div class="blog_widget">
                                <h3 class="blog_widget_title">Categories</h3>
                                <ul>
                                    <li><a href="service-details-page-01.html">Business Modules</a></li>
                                    <li><a href="service-details-page-02.html">Development</a></li>
                                    <li><a href="service-details-page-03.html">Consultancy Service</a></li>
                                    <li><a href="service-details-page-04.html">Marketing Strategy</a></li>
                                    <li><a href="service-details-page-05.html">Finance Management</a></li>
                                    <li><a href="service-details-page-06.html">Audit & Assurance</a></li>
                                    <li><a href="service-details-page-07.html">Taxation</a></li>
                                </ul>
                            </div>
                        </div><!-- blog_right_widget  -->


                        <div class="blog_right_widget">
                            <div class="blog_widget">
                                <h3 class="blog_widget_title">Project</h3>
                                <div class="project_div clearfix">
                                    <figure class="image">
                                        <a href="images/blog_project_item_01.jpg" data-fancybox="gallery">
                                            <img src="images/blog_project_item_01.jpg" alt="images">
                                        </a>
                                    </figure>

                                    <figure class="image">
                                        <a href="images/blog_project_item_02.jpg" data-fancybox="gallery">
                                            <img src="images/blog_project_item_02.jpg" alt="images">
                                        </a>
                                    </figure>

                                    <figure class="image">
                                        <a href="images/blog_project_item_03.jpg" data-fancybox="gallery">
                                            <img src="images/blog_project_item_03.jpg" alt="images">
                                        </a>
                                    </figure>

                                    <figure class="image">
                                        <a href="images/blog_project_item_04.jpg" data-fancybox="gallery">
                                            <img src="images/blog_project_item_04.jpg" alt="images">
                                        </a>
                                    </figure>

                                    <figure class="image">
                                        <a href="images/blog_project_item_05.jpg" data-fancybox="gallery">
                                            <img src="images/blog_project_item_05.jpg" alt="images">
                                        </a>
                                    </figure>

                                    <figure class="image">
                                        <a href="images/blog_project_item_06.jpg" data-fancybox="gallery">
                                            <img src="images/blog_project_item_06.jpg" alt="images">
                                        </a>
                                    </figure>
                                </div>
                            </div>
                        </div><!-- blog_right_widget  -->

                        <div class="blog_right_widget">
                            <div class="blog_widget">
                                <h3 class="blog_widget_title">Archive</h3>
                                <form action="#" method="post">
                                    <div class="form-group">
                                        <select>
                                            <option value="Select Month">
                                                Select Month
                                            </option>
                                            <option value="saab">
                                                January 2017
                                            </option>
                                            <option value="mercedes">
                                                february 2017
                                            </option>
                                            <option value="audi">
                                                March 2017
                                            </option>
                                            <option value="audi">
                                                April 2017
                                            </option>
                                            <option value="audi">
                                                August 2017
                                            </option>
                                            <option value="audi">
                                                Dcember 2017
                                            </option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                        </div><!-- blog_right_widget  -->
                    </div>
                </div><!-- col-md-4 -->
            </div><!-- row -->  
        </div><!-- container -->
    </div><!-- blog_page_area -->

    <footer class="footer_area">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer_widget">
                        <h4 class="widget_title">Our Headquarters</h4>
                        <div class="footer_widget_content para_default">
                            <ul class="contact_info">
                                <li><span class="icon flaticon-phone-call"></span> +088 212 386 5575</li>
                                <li><span class="icon flaticon-contact"></span> helloxpart@gmail.com</li>
                                <li><span class="icon flaticon-placeholder-outline"></span> 1010 Avenue Of The MoonNew York, NY 10018 US.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="footer_widget">
                        <h4 class="widget_title">Company</h4>
                        <div class="footer_widget_content para_default">
                            <ul>
                                <li>
                                    <a href="#">Consultancy Profile</a>
                                </li>
                                <li>
                                    <a href="#">About Us</a>
                                </li>
                                <li>
                                    <a href="#">Our Services</a>
                                </li>
                                <li>
                                    <a href="#">Team Member</a>
                                </li>
                                <li>
                                    <a href="#">Latest News</a>
                                </li>
                                <li>
                                    <a href="#">FAQ's</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="footer_widget">
                        <h4 class="widget_title">Useful Links</h4>
                        <div class="footer_widget_content para_default">
                            <ul>
                                <li>
                                    <a href="#">Create Account</a>
                                </li>
                                <li>
                                    <a href="#">Our process</a>
                                </li>
                                <li>
                                    <a href="#">People</a>
                                </li>
                                <li>
                                    <a href="#">Company Profilile</a>
                                </li>
                                <li>
                                    <a href="#">Client</a>
                                </li>
                                <li>
                                    <a href="#">Help Desk</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="footer_widget">
                        <h4 class="widget_title">Newsletter</h4>
                        <div class="footer_widget_content para_default">
                            <p>Lorem ipsum dolor sit amet, consectet adipisicing elit, sed do eiusmod temporia incididunt ut labore ete.</p>
                            <div class="Newsletter_mail_search">
                                <form action="#" method="post">
                                    <div class="icon-addon addon-md">
                                        <i class="fa fa-paper-plane"></i> <input class="form-control" id="email" placeholder="Email Address" type="text">
                                    </div>
                                </form>
                            </div>
                            <ul class="footer_social_icon">
                                <li>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-pinterest-p"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-youtube"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php get_footer(  );?>
</body>
</html>
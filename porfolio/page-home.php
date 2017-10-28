<?php
/*
	Template Name: Home Page
 */
 
 
//  Custom Fields
$about_me_text			= get_post_meta( 11, 'about_me_text', true);

get_header(); ?>

	
<!-- === SECTION Myself === -->
<section id="myself" data-type="background" data-speed="5">
    <aritcle>
      <div class="container clearfix">
        <div class="row">
          <div class="col-sm-5 myself-text">
            <h1><?php   bloginfo('name'); ?></h1>
            <p class="lead"><?php bloginfo('description'); ?></p>
          </div>
        </div>
        
      </div>
    </aritcle>

</section>
  </header>
</div>
<!--=== MySelf ====-->

<!-- ==== SOCIAL MEDIA ==== -->

<section id="socialMedia">
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="container">
         <h2><?php echo $about_me_text; ?></h2>
      
      
          <a href="https://www.linkedin.com/in/jose-l-riano-15801795/" class="badge social linkedin" target="_blank">
              <i class="fa fa-linkedin"></i>
          <a href="https://github.com/JoseLRiano" class="badge social github" target="_blank">
            <i class="fa fa-github"></i>
          <a href="https://twitter.com/joselriano" class="badge social twitter" target="_blank">
              <i class="fa fa-twitter"></i>
          <a href="https://www.facebook.com/riano1" class="badge social facebook" target="_blank">
              <i class="fa fa-facebook"></i>
          </a>
        </div> <!-- End of Col -->
    </div> <!--End of Row -->
  </div> <!-- Container -->
</section> <!-- End of SocialMedia -->

<?php get_footer(); ?>

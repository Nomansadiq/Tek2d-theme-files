<?php
/*
Template Name: Home
*/
get_header();
?>
 <div class="container">
    <div class="section-one" onload="myFunction()">
      <div class="col">
        <h1 class="main-heading">
           <?php the_field('main_heading'); ?>
        </h1>
        <div class="video">
          <video src="<?php the_field('hero_video'); ?>" controls loop muted
            autoplay></video>
        </div>
        <div class="para">
          <p>
            <?php the_field('paragraph'); ?>
          </p>
        </div>
      </div>
      <div class="scroll-section">
        <a href="#scrolling"><img src="https://new.tek2d.com/wp-content/uploads/2024/07/Layer_1.png" alt=""></a>
      </div>
    </div>
  </div>
<!-- ----------recent---work---strt----- -->
<div class="container">
    <div class="sliders-section" id="scrolling">
      <h2 class="sliders-headings">
        <?php the_field('recent_work_heading'); ?>
      </h2>
      <div class="slider">
        <div class="slide-track">
				<?php if( have_rows('marquee_one') ): ?>
					<?php while( have_rows('marquee_one') ): the_row(); ?>
						<div class="slide">
							<img src="<?php  the_sub_field('marquee_one_image'); ?>" alt="" />
						</div>
					<?php endwhile; ?>
				<?php else: ?>
					No Image
				<?php endif; ?>
        </div>
      </div>
      <div class="slider-left">
        <div class="slider">
          <div class="slide-track-left">
			  <?php if( have_rows('marquee_two') ): ?>
					<?php while( have_rows('marquee_two') ): the_row(); ?>
						<div class="slide">
							<img src="<?php  the_sub_field('marquee_two_image'); ?>" alt="" />
						</div>
					<?php endwhile; ?>
			     <?php else: ?>
					No Image
			  <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
</div>
<!-- -------Companies-work-with----- -->
  <div class="container">
    <div class="our-client">
      <h3 class="client-heading">
        <?php the_field('companies_work_with_label'); ?>
      </h3>
      <div class="client-logo">
		  <?php if( have_rows('comany_work_width_images') ): ?>
			  <?php while( have_rows('comany_work_width_images') ): the_row(); ?>
           <img src="<?php  the_sub_field('company_work_width_image'); ?>" alt="" />
			  <?php endwhile; ?>
			  <?php else: ?>
			  No Image
		  <?php endif; ?>
      </div>
    </div>
  </div>
<!-- -----how-it-works----- -->
<div class="container">
    <div class="how-it-works">
      <div class="row">
        <div class="col">
          <h3 class="how-it-works-heading">
            <?php the_field('how-it-works-label'); ?>
          </h3>
        </div>
      </div>
      <div class="row working">
		  	 <?php if( have_rows('working') ): ?>
			  <?php while( have_rows('working') ): the_row(); ?>
                   <div class="col-lg-4">
          <div class="boxes">
			  <div class="working-image">
				 <img src="<?php  the_sub_field('working_image'); ?>" alt="">  
			  </div>
           
            <h4>
              <?php  the_sub_field('working_number'); ?>
            </h4>
            <h5>
              <?php  the_sub_field('working_heading'); ?>
            </h5>
            <p>
             <?php  the_sub_field('working_paragraph'); ?>
            </p>
          </div>
        </div>
			  <?php endwhile; ?>
			  <?php else: ?>
			  No Image
		  <?php endif; ?>
      </div>
    </div>
    <div class="work">
		<?php if( have_rows('services') ): ?>
			  <?php while( have_rows('services') ): the_row(); ?>
         <h6><?php  the_sub_field('service_name'); ?></h6>
			  <?php endwhile; ?>
			  <?php else: ?>
			  No Image
		 <?php endif; ?>
    </div>
    <div class="six-boxes">
      <div class="row">
		<?php if( have_rows('process') ): ?>
			  <?php while( have_rows('process') ): the_row(); ?>
                   <div class="col-lg-4">
          <div class="icon-boxes">
            <img src="<?php  the_sub_field('process_image'); ?>" alt="">
            <h3><?php  the_sub_field('process_heading'); ?></h3>
            <p><?php  the_sub_field('process_paragraph'); ?> </p>
          </div>
        </div>
			  <?php endwhile; ?>
			  <?php else: ?>
			  No Image
		 <?php endif; ?>  
      </div>
    </div>
  </div>
  <!-- memeber ship secion -->
  <div class="container">
    <div class="pricing-section">
      <h3>
        <?php the_field('membership_heading_'); ?>
      </h3>
      <p>
        <?php the_field('membership_paragraph'); ?>
      </p>
    </div>
    <div class="data-tabs">
      <div class="tab">
        <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen"><?the_field('first_service_name'); ?></button>
        <button class="tablinks" onclick="openCity(event, 'Paris')"><?php the_field('second_service_name_'); ?></button>
        <button class="tablinks" onclick="openCity(event, 'Tokyo')"><?php the_field('third_service_name'); ?></button>
      </div>

      <div id="London" class="tabcontent">
        <div class="slider">
          <div class="slide-track info-box">
          <?php if( have_rows('services_data') ): ?>
					<?php while( have_rows('services_data') ): the_row(); ?>
           <div class="slide info-price">
              <div class="all-data">
                <h3>
                <?php  the_sub_field('basic_service_name'); ?>
                </h3>
                <p>
                <?php  the_sub_field('basic_service_paragraph'); ?>
                </p>
                <h4>
                <?php  the_sub_field('basic_monthly_plan'); ?>
                </h4>
                <h5>
                <?php  the_sub_field('basic_label'); ?>
                </h5>
                <a class="info-btn-one" href="<?php  the_sub_field('mbasic_button_url'); ?>"><?php  the_sub_field('basic_button_text'); ?></a>
                <a class="info-btn-two" href="<?php  the_sub_field('book-a-call_button-url'); ?>"><?php  the_sub_field('basic_book_a_call_button_text'); ?></a>
              </div>
              <div class="price-boxex">
                <div class="all-data">
                  <ul>
                  <?php if( have_rows('baic_services_list') ): ?>
					<?php while( have_rows('baic_services_list') ): the_row(); ?>
                    <li>
                    <?php  the_sub_field('baisc_service_list_name'); ?>
                    </li>
					<?php endwhile; ?>
			     <?php else: ?>
					No Image
			  <?php endif; ?>

                  </ul>
                  <h6>
                    Included services
                  </h6>
                  <div class="services-box">

                  <?php if( have_rows('basic_include_services') ): ?>
					<?php while( have_rows('basic_include_services') ): the_row(); ?>
                    <span><?php  the_sub_field('basic_include_service_name'); ?></span>
					<?php endwhile; ?>
			     <?php else: ?>
					No Image
			  <?php endif; ?>

                    <!-- <span>Graphic design</span><span>Logo design</span><span>Branding</span><span>Web design</span> -->
                  </div>
                </div>
              </div>
            </div>
					<?php endwhile; ?>
			     <?php else: ?>
					No Image
			  <?php endif; ?>
           
          </div>
        </div>
      </div>

      <div id="Paris" class="tabcontent">
        <div class="slider">
          <div class="slide-track info-box">
          <?php if( have_rows('pro_service_data') ): ?>
			  <?php while( have_rows('pro_service_data') ): the_row(); ?>
              <div class="slide info-price">
              <div class="all-data">
                <h3>
                <?php  the_sub_field('pro-name'); ?>
                </h3>
                <p>
                <?php  the_sub_field('pro-paragraph'); ?>
                </p>
                <h4>
                <?php  the_sub_field('pro_monthly_plan'); ?>
                </h4>
                <h5>
                <?php  the_sub_field('pro-label'); ?>
                </h5>
                <a class="info-btn-one" href="<?php  the_sub_field('pro_button_url'); ?>"><?php  the_sub_field('pro_button_text'); ?></a>
                <a class="info-btn-two" href="<?php  the_sub_field('bpro_book_a_call_button_url'); ?>"><?php  the_sub_field('pro_book_a_call_button_text'); ?></a>
              </div>
              <div class="price-boxex">
                <div class="all-data">
                  <ul>
                  <?php if( have_rows('pro_service_list') ): ?>
			  <?php while( have_rows('pro_service_list') ): the_row(); ?>
              <li>
              <?php  the_sub_field('pro_service_list_name'); ?>
                    </li>
			  <?php endwhile; ?>
		 <?php endif; ?>

                  </ul>
                  <h6>
                    Included services
                  </h6>
                  <div class="services-box">
                  <?php if( have_rows('pro_include_services') ): ?>
			  <?php while( have_rows('pro_include_services') ): the_row(); ?>
              <span><?php  the_sub_field('pro_include_service_name'); ?></span>
			  <?php endwhile; ?>
		 <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
			  <?php endwhile; ?>
			  <?php else: ?>
			  No Service
		 <?php endif; ?>
          </div>
        </div>
      </div>

      <div id="Tokyo" class="tabcontent">
      <div class="slider">
          <div class="slide-track info-box">
          <?php if( have_rows('pro_service_data') ): ?>
			  <?php while( have_rows('pro_service_data') ): the_row(); ?>
              <div class="slide info-price">
              <div class="all-data">
                <h3>
                <?php  the_sub_field('pro-name'); ?>
                </h3>
                <p>
                <?php  the_sub_field('pro-paragraph'); ?>
                </p>
                <h4>
                <?php  the_sub_field('pro_monthly_plan'); ?>
                </h4>
                <h5>
                <?php  the_sub_field('pro-label'); ?>
                </h5>
                <a class="info-btn-one" href="<?php  the_sub_field('pro_button_url'); ?>"><?php  the_sub_field('pro_button_text'); ?></a>
                <a class="info-btn-two" href="<?php  the_sub_field('bpro_book_a_call_button_url'); ?>"><?php  the_sub_field('pro_book_a_call_button_text'); ?></a>
              </div>
              <div class="price-boxex">
                <div class="all-data">
                  <ul>
                  <?php if( have_rows('pro_service_list') ): ?>
			  <?php while( have_rows('pro_service_list') ): the_row(); ?>
              <li>
              <?php  the_sub_field('pro_service_list_name'); ?>
                    </li>
			  <?php endwhile; ?>
		 <?php endif; ?>

                  </ul>
                  <h6>
                    Included services
                  </h6>
                  <div class="services-box">
                  <?php if( have_rows('pro_include_services') ): ?>
			  <?php while( have_rows('pro_include_services') ): the_row(); ?>
              <span><?php  the_sub_field('pro_include_service_name'); ?></span>
			  <?php endwhile; ?>
		 <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
			  <?php endwhile; ?>
			  <?php else: ?>
			  No Service
		 <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- bricks section -->
  <div class="container">
    <div class="breakess" >
      <div class="row">
        <div class="col-lg-6">
          <div class="img-text">
            <img src="<?php the_field('subscibe-service-image'); ?>" alt="">
            <h3><?php the_field('serivice-sub-heading'); ?></h3>
          </div>
        </div>
        <div class="col-lg-2 tek2d-text">
          <div class="text">
			  
			  		<?php if( have_rows('service_one') ): ?>
			  <?php while( have_rows('service_one') ): the_row(); ?>
         <h4><?php  the_sub_field('service_name_one'); ?></h4>
			  <?php endwhile; ?>
			  <?php else: ?>
		 <?php endif; ?>
			 
          </div>
        </div>
        <div class="col-lg-2 tek2d-text">
          <div class="text">
			  
			 <?php if( have_rows('service_two') ): ?>
			  <?php while( have_rows('service_two') ): the_row(); ?>
         <h4><?php  the_sub_field('two_service_name'); ?></h4>
			  <?php endwhile; ?>
			  <?php else: ?>
		 <?php endif; ?>
          </div>
        </div>
        <div class="col-lg-2 tek2d-text">
          <div class="text">
			  
			  <?php if( have_rows('service_three') ): ?>
			  <?php while( have_rows('service_three') ): the_row(); ?>
         <h4><?php  the_sub_field('Three_service_name'); ?></h4>
			  <?php endwhile; ?>
			  <?php else: ?>
		 <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
	  <div class="breakes">
	  <div id="hassan-usman"></div>
	  </div>
  </div>
<!-- ---------------FAQS---------------- -->
  <div class="faq-bg">
    <div class="container">
      <div class="faq">
        <h3>
          <?php the_field('faq-title'); ?>
        </h3>
        <p>
          <?php the_field('faq-label'); ?>
        </p>
        <!-------- accordin ------->
		  	<?php if( have_rows('accordoin') ): ?>
			  <?php while( have_rows('accordoin') ): the_row(); ?>
		          <button class="accordion"><?php  the_sub_field('accordoin_title'); ?></button>
        <div class="panel">
          <p><?php  the_sub_field('accordoin_content'); ?></p>
        </div>
			  <?php endwhile; ?>
			  <?php else: ?>
		 <?php endif; ?>
      </div>
    </div>
  </div>
<!-- -------------------text-carousels------------------- -->
  <div class="text-carousels">
    <div class="marquee">
      <span>
         <?php the_field('carousel_text'); ?>
      </span>
    </div>
    <div class="text-part">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <h3 class="before-img">
 <?php the_field('tek2d-innvative-description'); ?>
            </h3>
<!--             <h3>
              Want to collaborate
              with a super down-to-earth, mad-
              talented team? Hit us up!
            </h3> -->
          </div>
          <div class="col-lg-4">
            <h4>
              <ul>
                <li>
                  <a href=" <?php the_field('dribble_url'); ?>"><?php the_field('dribble'); ?></a>
                </li>
                <li>
                  <a href="<?php the_field('instagram_url'); ?>"><?php the_field('instagram'); ?></a>
                </li>
                <li>
                  <a href="<?php the_field('facebook_url'); ?>"><?php the_field('facebook'); ?></a>
                </li>
                <li>
                  <a href="<?php the_field('linkedin_url'); ?>"><?php the_field('linkedin'); ?></a>
                </li>
                <li>
                  <a href="<?php the_field('twitter_url'); ?>"><?php the_field('twitter'); ?></a>
                </li>
              </ul>
            </h4>
            <h4>
              <ul>
                <li>
                  <a href="<?php the_field('our_work_page_url'); ?>"><?php the_field('our_work'); ?></a>
                </li>
                <li>
                 <a href="<?php the_field('about_us_page_url'); ?>"><?php the_field('about_us_'); ?></a>
                </li>
              </ul>
            </h4>
            <h4>
              <ul>
                <li>
                  <a href="<?php the_field('address_url'); ?>">
                    <?php the_field('address'); ?>
                  </a>
                </li>
              </ul>
            </h4>
          </div>
        </div>
        <a href="#">
          <div class="hover-section">
            <div class="blue-box box-1">
              <div class="row">
                <div class="col-lg-9">
                  <h3>
                    <?php the_field('consultaion_text'); ?>
                  </h3>
					<p>
						 <?php the_field('consultation_label'); ?>
					</p>
                
                </div>
                <div class="col-lg-3 box-element">
                  <img src=" <?php the_field('consultation_image'); ?>" alt="">
                </div>
              </div>
            </div>
            <div class="yellow-box box-1">
              <div class="row">
                <div class="col-lg-9">
                  <h3>
                    <?php the_field('consultation_hover_text'); ?>
                  </h3>
                  <p>
                    <?php the_field('consultation_hover_label'); ?>
                  </p>
                </div>
                <div class="col-lg-3 box-element">
                  <img src="<?php the_field('consultation_second_image'); ?>" alt="">
                </div>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
<!-- ---------------------------------------------------------- -->
    <div class="about">
        <div class="boxess box1" id="paralex"></div>
        <div class="boxess box2" id="paralex"></div>
        <div class="boxess box3" id="paralex"></div>
        <div class="boxess box4" id="paralex"></div>
        <div class="boxess box5" id="paralex"></div>
        <div class="boxess boxes-1"></div>
        <div class="boxess box6" id="paralex"></div>
        <div class="boxess box7" id="paralex"></div>
        <div class="boxess boxes-1"></div>
        <div class="boxess box8" id="paralex"></div>
        <div class="boxess box9" id="paralex"></div>
        <div class="boxess box10" id="paralex"></div>
        <div class="boxess box11" id="paralex"></div>
        <div class="boxess box12" id="paralex"></div>
    </div>
<!-- ---------------------------------------------------------- -->
<?php 
get_footer();
?>
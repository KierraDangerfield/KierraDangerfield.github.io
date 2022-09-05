<?php
/**
* Template Name: Full Width
 */

get_header(); ?>

	<!-- <section id="primary" class="content-area col-12">
		<main id="main" class="site-main" role="main">-->

			<!--< ?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>-->

<script>
/* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
particlesJS.load('particles-js', '/wp-content/themes/wp-bootstrap-starter/JS/particles.json', 
function() {
  console.log('callback - particles.js config loaded');
});
</script>

<!--INTRODUCTION/LANDING SECTION-->
	<div class="container-fluid blackbg" id="home">
	<div id="particles-js"></div>
		<div class="container">
			<div class="row">
				<div class="col-12" id="overlay">
				<h1 class="tablet center white mt-5 pt-5">KIERRA DANGERFIELD</h1>
				<h2 class="center white">Front-End Developer</h2>
				</div>
			</div>
		</div>
	</div>
		
		<!--ANIMATION HERO SECTION-->
		<!--<div class="container-fluid blackbg">
		<div class="container">
			<div class="row">
				<div class="col-12 center">
				<img src="/wp-content/themes/wp-bootstrap-starter/images/headshot2.png" alt="Kierra Dangerfield headshot"/>
				</div>
			</div>
		</div>
		</div> -->
        
        <!--ABOUT ME ROW 1-->
        <div class="container-fluid py-5" id="about">
        <div class="container">
			<div class="row">
                <!--vector IMAGE-->
            <div class="col-6 col-12 col-lg-6 center">
                <img src="/wp-content/themes/wp-bootstrap-starter/images/vectorimage.gif" alt="vector image"/>
            </div>
				<div class="col-6 col-12 col-lg-6 border-section-1 px-5">
                <h2 class="purple">About Me</h2>
                <p>Hello, World!<br/>
                My name is Kierra Dangerfield, and I am a Front-End Developer from Tennessee. 
                I am a lover of animals, technology, and horror. I have a passion for learning and creating new technologies.<br/>
                <br/>
                I graduated in May 2018 from Austin Peay State University in Clarksville, Tennessee with a Bachelor of 
                Science degree in Computer Information Technology with a concentration in Internet and Web Technology 
                and a minor in Mobile Software Technology.<br/><br/>
                
                My focus is front-end web development. I also enjoy UI/UX design.
                </p>
				</div>
			</div>
        </div>
        </div>

		<!--ABOUT ME ROW 2-->
		<div class="container-fluid py-5">
        <div class="container">
			<div class="row">
				<div class="col-6 col-12 col-lg-6 border-section-2 py-5 px-5">
                <p>Some of my technical skills are the following but not limited to:</p>
                <table>
                    <tr>
                        <td>HTML</td>
                        <td>CSS</td>
                        <td>JavaScript</td>
                    </tr>
                    <tr>
                        <td>UI/UX Design</td>
                        <td>WordPress</td>
                        <td>SASS</td>
                    </tr>
                    <tr>
                        <td>Adobe Creative Suite</td>
                        <td>Local by FlyWheel</td>
                        <td>Google Analytics</td>
                    </tr>
                </table>
                <p>In the future I want to master creating a variety of web and mobile applications using React and React Native.
                <br/><br/>
                As for my future personal goals, I would like to venture into artificial intelligence, augmented 
                and reality, and robotics to create a variety of game, software, and hardware development.</p>
                </div>
                <!--headshot IMAGE-->
            <div class="col-6 col-12 col-lg-6 center">
                <img src="/wp-content/themes/wp-bootstrap-starter/images/newheadshot.png" alt="Kierra Dangerfield headshot"/>
            </div>
			</div>
		</div>
		</div>

        <!--PROJECTS INTRO-->
        <div class="container-fluid blackbg projects" id="projects">
		<div class="container">
			<div class="row">
				<div class="col-12 mt-5 pt-5">
				<h1 class="tablet center white">Projects</h1>
				</div>
			</div>
        </div>
        </div>

		<!--PROJECTS -->
		<div class="container-fluid pt-5">
        <div class="container">
			<div class="row py-3">
				<div class="col-12 center">
				<?php echo do_shortcode("[gkit id=1]"); ?> 
				</div>
			</div>
		</div>
		</div>

        <!--CONTACT -->
        <div class="container-fluid blackbg py-2" id="contact">
		<div class="container" >
			<div class="row">
				<div class="col-12">
				<h1 class="tablet center white">Contact</h1>
				</div>
			</div>
			            
            <div class="row py-2">

                <div class="col-12 col-md-4 center contact-link">
                    <a href="tel:+19316256367"> 
						<i class="fas fa-mobile-alt"></i> &nbsp;
						(931)625-6367
					</a>
                </div>

                <div class="col-12 col-md-4 center contact-link">
					<a href="mailto:kierradachelle@yahoo.com">
						<i class="fas fa-envelope"></i> &nbsp;
						kierradachelle@yahoo.com
					</a>
                </div>

                <div class="col-12 col-md-4 center contact-link">
					<a href="https://www.linkedin.com/in/kierra-dangerfield-93889213b/" target="_blank">
						<i class="fab fa-linkedin"></i> &nbsp;
						My LinkedIn
					</a>
                </div>

            </div>
		</div>
		</div>

		<!-- </main>< !-- #main -- >
	</section>< !-- #primary -->

<?php
get_footer();
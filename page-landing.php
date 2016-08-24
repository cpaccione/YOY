<?php

/*

Template name: YOY Landing page

*/


?>


<?php get_header(); ?>


    <div class="landing-wrap">
    <!-- Begin page content -->
    <div class="container">

    <header>
    
    	<div class="row">
    		<div class="col-md-12">
    			<div class="landing-page-logo">
    		    	<a href="http://youthoftheyear.org"><img class="center-block" src="<?php bloginfo('template_directory'); ?>/images/yoylogo.png" alt="Youth of the Year logo"></a>		
    			</div>
    		</div>    		
    	</div>

    	<div class="row">
    		<div class="col-md-12 text-center">
    			<div class="hero-copy">
    				<h2>Who Will Be the Next National</h2>
    				<h1>YOUTH OF THE YEAR?</h1>
    			</div>
    		</div>
    	</div>
    	<hr class="blue">
    	<div class="row">
    		<div class="col-md-12">
    			<div class="subhead text-center">
    				<h2>Who's your favorite?</h2>
    				<p>Learn their stories. Show your support. Spread the word!</p>
    			</div>
    		</div>
    	</div>
    </header>
     
     <section class="profile-photos">

     	<div class="row first-row">

     		<div class="col-md-4">
     			<div class="card">
					<div class="front">
						<img class="center-block" src="<?php bloginfo('template_directory'); ?>/images/headshot-07.jpg" alt="boys and girls club">
						<h3>JOCELYN W.</h3>
						<h4>2016 Pacific Youth of the Year</h4>
					</div>
					<div class="back">
						<p>This girl is going places, including D.C. Show your support!</p>
						<!-- Trigger/Open The Modal -->
						<button type="button" class="btn btn-info btn-lg slideRight" data-toggle="modal" data-target="#modal-one">Read More</button>
					</div>
			    </div>
			
			<!-- Modal One -->
			<div class="modal fade" id="modal-one" role="dialog">
			  <div class="modal-dialog modal-lg">

			    <!-- Modal content-->
			    <div class="modal-content">

			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal"><img src="<?php bloginfo('template_directory'); ?>/images/modal-close-icon.png"></button>
			      </div>

			      <div class="modal-body">
		      		<div class="row">
		      			<div class="col-sm-6"></div>
		      			<div class="col-sm-6">
		      				<h2>Jocelyn W.</h2>
		      				<h3>2016 Pacific Youth of the Year</h3>
		      				<p>Boys &amp; Girls Clubs of Silicon Valley</p>
		      				<p>San Jose, California</p>
		      				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		      			</div>
		      		</div>
			      </div>

			      <div class="modal-footer">
			      	<button type="button" class="btn btn-default"><a href="#modal-six" data-toggle="modal" data-dismiss="modal">Previous</a></button>
			        <button type="button" class="btn btn-default"><a href="#modal-two" data-toggle="modal" data-dismiss="modal">Next</a></button>
			      </div>

			    </div>

			  </div>
			</div>
     		</div>
     		<div class="col-md-4">
     			<div class="card">
					<div class="front">
						<img class="center-block" src="<?php bloginfo('template_directory'); ?>/images/headshot-07.jpg" alt="boys and girls club">
						<h3>JOCELYN W.</h3>
						<h4>2016 Pacific Youth of the Year</h4>
					</div>
					<div class="back">
						<p>Check out his road to D.C. and spread the word!</p>
						<!-- Trigger/Open The Modal -->
						<button type="button" class="btn btn-info btn-lg slideRight" data-toggle="modal" data-target="#modal-two">READ MORE</button>
					</div>
			    </div>
			 
			<!-- Modal Two -->
			<div id="modal-two" class="modal fade" role="dialog">
			  <div class="modal-dialog modal-lg">

			    <!-- Modal content-->
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal"><img src="<?php bloginfo('template_directory'); ?>/images/modal-close-icon.png"></button>
			        <h4 class="modal-title"></h4>
			      </div>
			      <div class="modal-body">
			        <p>Modal Two.</p>
			      </div>
			      <div class="modal-footer">
			      	<a href="#modal-one" data-toggle="modal" data-dismiss="modal"><button type="button" class="btn btn-default">Previous</button></a>
			        <a href="#modal-three" data-toggle="modal" data-dismiss="modal"><button type="button" class="btn btn-default">Next</button></a>
			      </div>
			    </div>

			  </div>
			</div>
     		</div>

     		<div class="col-md-4">
				<div class="card">
					<div class="front">
						<img class="center-block" src="<?php bloginfo('template_directory'); ?>/images/headshot-07.jpg" alt="boys and girls club">
						<h3>JOCELYN W.</h3>
						<h4>2016 Pacific Youth of the Year</h4>
					</div>
					<div class="back">
						<p>Learn her many accomplishments. Celebrate her successes!</p>
						<!-- Trigger/Open The Modal -->
						<button type="button" class="btn btn-info btn-lg slideRight" data-toggle="modal" data-target="#modal-three">READ MORE</button>
					</div>
				</div>
     		</div>

     		<!-- Modal Three -->
			<div id="modal-three" class="modal fade" role="dialog">
			  <div class="modal-dialog modal-lg">

			    <!-- Modal content-->
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal"><img src="<?php bloginfo('template_directory'); ?>/images/modal-close-icon.png"></button>
			        <!-- <h4 class="modal-title">Modal Header</h4> -->
			      </div>
			      <div class="modal-body">
			        <p>Modal Three.</p>
			      </div>
			      <div class="modal-footer">
			      	<a href="#modal-two" data-toggle="modal" data-dismiss="modal"><button type="button" class="btn btn-default">Previous</button></a>
			        <a href="#modal-four" data-toggle="modal" data-dismiss="modal"><button type="button" class="btn btn-default">Next</button></a>
			      </div>
			    </div>

			  </div>
			</div>

     	</div> <!-- row close -->

     	    <div class="row second-row">
     		<div class="col-md-4">
     			<div class="card">
					<div class="front">
						<img class="center-block" src="<?php bloginfo('template_directory'); ?>/images/headshot-07.jpg" alt="boys and girls club">
						<h3>JOCELYN W.</h3>
						<h4>2016 Pacific Youth of the Year</h4>
					</div>
					<div class="back">
						<p>Her journey is just beginning. Share her story!</p>
						<!-- Trigger/Open The Modal -->
						<button type="button" class="btn btn-info btn-lg slideRight" data-toggle="modal" data-target="#modal-four">READ MORE</button>
					</div>
			    </div>
     		</div>

     		<!-- Modal Four -->
			<div id="modal-four" class="modal fade" role="dialog">
			  <div class="modal-dialog modal-lg">

			    <!-- Modal content-->
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal"><img src="<?php bloginfo('template_directory'); ?>/images/modal-close-icon.png"></button>
			        <!-- <h4 class="modal-title">Modal Header</h4> -->
			      </div>
			      <div class="modal-body">
			        <p>Modal Four.</p>
			      </div>
			      <div class="modal-footer">
			        <a href="#modal-three" data-toggle="modal" data-dismiss="modal"><button type="button" class="btn btn-default">Previous</button></a>
			        <a href="#modal-five" data-toggle="modal" data-dismiss="modal"><button type="button" class="btn btn-default">Next</button></a>
			      </div>
			    </div>

			  </div>
			</div>
     		<div class="col-md-4">
     			<div class="card">
					<div class="front">
						<img class="center-block" src="<?php bloginfo('template_directory'); ?>/images/headshot-07.jpg" alt="boys and girls club">
						<h3>JOCELYN W.</h3>
						<h4>2016 Pacific Youth of the Year</h4>
					</div>
					<div class="back">
						<p>First of her family to attend college. See her hit her stride in D.C.</p>
						<!-- Trigger/Open The Modal -->
						<button type="button" class="btn btn-info btn-lg slideRight" data-toggle="modal" data-target="#modal-five">READ MORE</button>
					</div>
			    </div>
     		</div>

     		<!-- Modal Five -->
			<div id="modal-five" class="modal fade" role="dialog">
			  <div class="modal-dialog modal-lg">

			    <!-- Modal content-->
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal"><img src="<?php bloginfo('template_directory'); ?>/images/modal-close-icon.png"></button>
			        <!-- <h4 class="modal-title">Modal Header</h4> -->
			      </div>
			      <div class="modal-body">
			        <p>Modal Five.</p>
			      </div>
			      <div class="modal-footer">
			      	<a href="#modal-four" data-toggle="modal" data-dismiss="modal"><button type="button" class="btn btn-default">Previous</button></a>
			        <a href="#modal-six" data-toggle="modal" data-dismiss="modal"><button type="button" class="btn btn-default">Next</button></a>
			      </div>
			    </div>

			  </div>
			</div>

     		<div class="col-md-4">
				<div class="card">
					<div class="front">
						<img class="center-block" src="<?php bloginfo('template_directory'); ?>/images/headshot-07.jpg" alt="boys and girls club">
						<h3>JOCELYN W.</h3>
						<h4>2016 Pacific Youth of the Year</h4>
					</div>
					<div class="back">
						 <p>She seized the opportunity to make a difference. Share her journey!</p>
						<!-- Trigger/Open The Modal -->
						<button type="button" class="btn btn-info btn-lg slideRight" data-toggle="modal" data-target="#modal-six">READ MORE</button>
					</div>
				</div>
     		</div>
     		
     		<!-- Modal Six -->
			<div id="modal-six" class="modal fade" role="dialog">
			  <div class="modal-dialog modal-lg">

			    <!-- Modal content-->
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal"><img src="<?php bloginfo('template_directory'); ?>/images/modal-close-icon.png"></button>
			        <!-- <h4 class="modal-title">Modal Header</h4> -->
			      </div>
			      <div class="modal-body">
			        <p>Modal Six.</p>
			      </div>
			      <div class="modal-footer">
			      	<a href="#modal-five" data-toggle="modal" data-dismiss="modal"><button type="button" class="btn btn-default">Previous</button></a>
			        <a href="#modal-one" data-toggle="modal" data-dismiss="modal"><button type="button" class="btn btn-default">Next</button></a>
			      </div>
			    </div>

			  </div>
			</div>
     	</div> <!-- row close -->


     </section>
    </div>

     <section class="pre-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">

				<h2>Lorem Ipsum</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
			</div>
		</div>
     </section>



<?php get_footer(); ?>
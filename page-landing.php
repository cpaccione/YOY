<?php

/*

Template name: YOY Landing page

*/


?>


<?php get_header(); ?>

    <div class="landing-wrap"> <!-- background image set on landing-wrap -->
    <!-- Begin page content -->
    <div class="container">
      	<div class="row">
      		<div class="col-md-12">
      			<div class="landing-page-logo">
      		    	<a href="http://youthoftheyear.org"><img class="center-block" src="<?php bloginfo('template_directory'); ?>/images/yoy_logo_landing_page.png" alt="Youth of the Year logo"></a>
      			</div>
      		</div>
      	</div>

      	<div class="row">
      		<div class="col-md-12 text-center">
      			<div class="hero-copy">
      				<h2>Who Will Be the Next</h2>
      				<h1>NATIONAL YOUTH OF THE YEAR?</h1>
      			</div>
      		</div>
      	</div>

      	<hr class="blue">

      	<div class="row">
      		<div class="col-md-12">
      			<div class="subhead text-center">
      				<h2>These Teens Are Going Places! Follow Their Lead!</h2>
      				<p>Meet our finalists. Share their stories. Celebrate their journey.</p>
      			</div>
      		</div>
      	</div>
    </div>

    <!-- PROFILE SECTION START -->
    <section class="profile-photos">
      <div class="container">

     	<div class="row first-row">

        <!-- Alexia L. -->
     		<div class="col-md-4">
     			<div class="card">
  					<div class="front">
  						<img class="center-block" src="<?php bloginfo('template_directory'); ?>/images/headshot_alexia.png" alt="Alexia L">
  						<h3>ALEXIA L.</h3>
  						<h4>Northeast Region Youth of the Year</h4>
  					</div>
  					<div class="back">
  						<p>This girl is going places, including D.C. Show your support!</p>
  						<!-- Trigger/Open The Modal -->
  						<button type="button" class="btn btn-info btn-lg slideRight" data-toggle="modal" data-target="#modal-one">Read More</button>
  					</div>
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
                   <div class="col-sm-6">
                     <img src="<?php bloginfo('template_directory')?>/images/profile_alexia.png" alt="Alexia's profile" />
                   </div>
                    <div class="col-sm-6">
                      <h2>ALEXIA L.</h2>
                      <h3>2016 Northeast Region<br>Youth of the Year</h3>
                      <p>Boys &amp; Girls Clubs of Vineland</p>
                      <p>Vineland, NJ</p>
                      <p>A passionate humanitarian and powerful leader, Alexia found her voice at her Boys &amp; Girls Club. Leading 'Bags for Beauties,' she helped collect hygiene items for the homeless. Serving as president of her Club's Keystone Club, she is a champion for gun safety and violence awareness and found of a self-esteem program called 'You Can Too.' She will attend Hampton University this fall and plans to become Chief Justice of the United States.</p>
                      <h4>Cheer for Alexia!</h4>
                      <div class="">
                        <p>
                          SHARE NOW TO SHOW YOUR SUPPORT
                        </p>
                      </div>
                    </div>
                  </div>
                  <!-- <div class="row">
                   <div class="col-sm-12">

                   </div>
                  </div> -->

                </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-default"><a href="#modal-six" data-toggle="modal" data-dismiss="modal">Previous</a></button>
                  <button type="button" class="btn btn-default"><a href="#modal-two" data-toggle="modal" data-dismiss="modal">Next</a></button>
                </div>

              </div>
            </div>
            </div>

        <!-- Raliyah D. -->
     		<div class="col-md-4">
     			<div class="card">
					<div class="front">
						<img class="center-block" src="<?php bloginfo('template_directory'); ?>/images/headshot_raliyah.png" alt="Raliyah D">
						<h3>RALIYAH D.</h3>
						<h4>Southeast Region Youth of the Year</h4>
					</div>
					<div class="back">
						<p>Check out his road to D.C. and spread the word!</p>
						<!-- Trigger/Open The Modal -->
						<button type="button" class="btn btn-info btn-lg slideRight" data-toggle="modal" data-target="#modal-two">READ MORE</button>
					</div>
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

        <!-- Melanie W. -->
     		<div class="col-md-4">
				<div class="card">
					<div class="front">
						<img class="center-block" src="<?php bloginfo('template_directory'); ?>/images/headshot_melanie.png" alt="Melanie W">
						<h3>Melanie W.</h3>
						<h4>Southwest Region Youth of the Year</h4>
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

      <!-- second row start -->
      <div class="row second-row">

        <!-- Abria F. -->
     		<div class="col-md-4">
     			<div class="card">
					<div class="front">
						<img class="center-block" src="<?php bloginfo('template_directory'); ?>/images/headshot_abria.png" alt="Abria F">
						<h3>ABRIA F.</h3>
						<h4>Midwest Region Youth of the Year</h4>
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

        <!-- FPO -->
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

        <!-- Jocelyn W. -->
     		<div class="col-md-4">
				<div class="card">
					<div class="front">
						<img class="center-block" src="<?php bloginfo('template_directory'); ?>/images/headshot_jocelyn.png" alt="Jocelyn W">
						<h3>JOCELYN W.</h3>
						<h4>Pacific Region Youth of the Year</h4>
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
       <!-- </div>
     		</div> -->

       	</div> <!-- second row close -->
      </div> <!-- container close -->
    </section>



    <section class="pre-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
          <div class="pre-footer-wrap">
            <h2>WATCH IT LIVE. WIN BIG!</h2>
            <h3>September 27</h3>
    				<p>One of these six awe-inspiring young leaders will be named the 2016-2017 National Youth of the Year! Watch it all happen during our Facebook <b>LIVE EVENT!</b> Follow us to see highlights from the big day, celebrity alumni and friends walk the Blue Carpet and some surprise guests! Share, comment and participate during our live stream for a chance to win some big prizes.</p>
            <h3>Tune In to Win!</h3>
          </div>
				</div>
			</div>
		</div>
    </section>

  </div>

<?php get_footer(); ?>

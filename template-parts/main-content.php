<div id="fh5co-main-content">
		<div class="dt js-dt">
			<div class="dtc js-dtc">
				<div class="simply-countdown-one animate-box" data-animate-effect="fadeInUp"></div>
				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="col-lg-7">
								<div class="fh5co-intro animate-box">
									<h2><?php the_title(); ?></h2>
									<p><?php the_content(); ?></p>
								</div>
							</div>
						<?php get_template_part('template-parts/email-form'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>

     <?php get_template_part('template-parts/footer-widgets'); ?>
		
	</div>
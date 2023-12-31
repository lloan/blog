<section class="o-section  t-section  ">
	<div class="o-section__header-bg  t-section__header"></div>
	<div class="o-section__content-bg  t-section__content"></div>
	<div class="o-container">
		<div class="o-section__container">
			<header class="o-section__header  t-section__header">
				<div class="o-content">
					<h2 id="education" class="o-section__heading"> <?php _e('Education', 'lloan'); ?> </h2>
				</div>
			</header>
			<div class="o-section__content  t-section__content  u-pt-0">
				<div class="o-content">
					<div class="o-section__full-top-space">
						<?php
						$education = [
							[
								'start'    => '2021-08-01',
								'end'      => null,
								'tense'    => 'future',
								'school'   => __('Claremont Graduate University', 'lloan'),
								'degree'   => __('Doctor of Philosophy', 'lloan'),
								'location' => 'Claremont, CA',
								'desc'     => __("Doctor of philosophy in information systems and technology, IT strategy & innovation. I've chosen to put this academic pursuit on hold to concentrate on other professional endeavors for the time being.", 'lloan')
							],
							[
								'start'    => '2018-07-01',
								'end'      => '2020-03-01',
								'school'   => __('University of Denver', 'lloan'),
								'degree'   => __('Master of Science in ICT', 'lloan'),
								'location' => 'Denver, CO',
								'desc'     => __('Concentration in software design and programming, computer science. Thesis written on what is required to build tech cities that thrive.', 'lloan')
							],
							[
								'start'    => '2010-01-01',
								'end'      => '2015-12-25',
								'school'   => 'Art Institute of California',
								'degree'   => __("Bachelor's of Science", 'lloan'),
								'location' => 'San Bernardino, CA',
								'desc'     => __('Media arts and animation - specialized in rigging and tooling. Trained in traditional art, 2D & 3D animation, 3D modeling, texturing, storyboarding, illustration, graphic design, motion graphics and design principles.', 'lloan')
							],
						];
						$index = 0;

						foreach ($education as $key => $value) {
							$end = $education[ $index ]['end'];
							$start = $education[ $index ]['start'];
							$tense = $education[ $index ]['tense'] ?? 'present';
							$date = ( empty( $end ) || $end === null ) && $tense !== null ? formatDateDifference( $start, $end, $tense ) : formatDateDifference( $start, $end );
							?>
							<div class="c-timeline__item" role="listitem">
								<div class="t-primary-bg"></div>
								<div class="o-content">
									<div class="o-grid">
										<div class="o-grid__col-md-5">
											<div class="c-work__timeframe" aria-label="Date"><?php echo $date; ?></div>
											<h3 class="c-work__heading" aria-label="School"><?php echo $education[$index]['school']; ?></h3>
											<h4 class="c-work__title" aria-label="Degree"><?php echo $education[$index]['degree']; ?></h4>
											<div class="c-work__location" aria-label="Location"><?php echo $education[$index]['location']; ?></div>
										</div>
										<div class="o-grid__col-md-7">
											<p aria-label="Description"><?php echo $education[$index]['desc']; ?></p>
										</div>
									</div>
								</div>
							</div>
							<?php
						$index++;
						} ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
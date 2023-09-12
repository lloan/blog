<section class="o-section  t-section  ">
	<div class="o-section__header-bg  t-section__header"></div>
	<div class="o-section__content-bg  t-section__content"></div>
	<div class="o-container">
		<div class="o-section__container">
			<header class="o-section__header  t-section__header">
				<div class="o-content">
					<h2 class="o-section__heading"> Experience </h2>
				</div>
			</header>
			<div class="o-section__content  t-section__content  u-pt-0">
				<div class="o-content">
					<div class="o-section__full-top-space">
						<?php
						$education = [
							[
								'start'    => '2009-01-01',
								'end'      => '2014-03-01',
								'company'   => 'Freelance',
								'title'   => 'Web Developer',
								'location' => 'Rialto, CA',
								'desc'     => "General web development"
							],
							[
								'start'    => '2014-01-12',
								'end'      => '2015-02-05',
								'company'   => 'Voice Marketing',
								'title'   => 'Web Developer',
								'location' => 'Rancho Cucamonga, CA',
								'desc'     => "Specialized in developing responsive websites, with user-friendly interfaces and cross-browser compatibility. Utilized background in interactive design, graphic design, web design and animation. 
"
							],
							[
								'start'    => '2015-02-15',
								'end'      => '2017-07-01',
								'company'   => 'Voice Marketing',
								'title'   => 'Creative Director',
								'location' => 'Rancho, CA',
								'desc'     => "Directed a group of 14 creatives in the design and development of web development projects and design projects. Managed over 50 different websites for a plethora of different clients, including a national entity with franchises all over the country (Steri-Clean)."
							],
							[
								'start'    => '2017-07-05',
								'end'      => '2018-08-01',
								'company'   => 'Fit Body Boot Camp HQ',
								'title'   => 'Web Developer',
								'location' => 'Chino Hills, CA',
								'desc'     => "Developed and built sites using HTML, CSS, JavaScript/jQuery, PHP, MySQL. Created custom WordPress themes, plugins and extended existing functionality. Led SEO efforts for a network of over 700 gym location sites using a combination of on-site and off-site strategies."
							],
							[
								'start'    => '2019-05-01',
								'end'      => '2019-08-01',
								'company'   => 'Mozilla',
								'title'   => 'DevTools team Intern',
								'location' => 'Remote',
								'desc'     => "Internship through the OutReachy program, working on the Mozilla DevTools products. Also built the search functionality within the Firefox network panel under the product's lead, Honza."
							],
							[
								'start'    => '2019-02-01',
								'end'      => '2019-10-01',
								'company'   => 'Udacity',
								'title'   => 'Mentor',
								'location' => 'Remote',
								'desc'     => "Front-End Web Developer Nanodegree Mentor."
							],
							[
								'start'    => '2018-02-01',
								'end'      => '2019-03-01',
								'company'   => 'Esri',
								'title'   => 'WordPress Developer',
								'location' => 'Redlands, CA',
								'desc'     => "Contract"
							],
							[
								'start'    => '2019-03-01',
								'end'      => '2022-05-01',
								'company'   => 'Esri',
								'title'   => 'Application Developer',
								'location' => 'Redlands, CA',
								'desc'     => "Led the development and maintenance of esri.com blogs framework and authoring experience. Developed tools for image optimization, granular user permissions management across multiple sites, and tools to increase authoring efficiency. Implemented optimizations to legacy code and increased overall performance of sites."
							],
							[
								'start'    => '2021-07-01',
								'end'      => null,
								'date'     => 'Jul 2021 - Present',
								'company'   => 'Mozilla',
								'title'   => 'Software Engineer - Firefox Relay',
								'location' => 'Remote',
								'desc'     => "Develop features and maintain S&P products such as Firefox Relay using React, both the web application and the browser extensions. Implemented telemetry strategies utilizing SQL for consumption by Grafana. "
							],
						];
						$index = count($education) - 1;

						foreach ($education as $key => $value) {
							$end = $education[ $index ]['end'];
							$start = $education[ $index ]['start'];
							$tense = $education[ $index ]['tense'] ?? "present";
							$date = ( empty( $end ) || $end === null ) && $tense !== null ? formatDateDifference( $start, $end, $tense ) : formatDateDifference( $start, $end );
							?>
							<div class="c-timeline__item">
								<div class="t-primary-bg"></div>
								<div class="o-content">
									<div class="o-grid">
										<div class="o-grid__col-md-5">
											<div class="c-work__timeframe"><?php echo $date; ?></div>
											<h3 class="c-work__heading"><?php echo $education[$index]['company']; ?></h3>
											<h4 class="c-work__title"><?php echo $education[$index]['title']; ?></h4>
											<div class="c-work__location"><?php echo $education[$index]['location']; ?></div>
										</div>
										<div class="o-grid__col-md-7">
											<p><?php echo $education[$index]['desc']; ?></p>
										</div>
									</div>
								</div>
							</div>
							<?php
							$index--;
						} ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
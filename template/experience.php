<section class="o-section  t-section  ">
	<div class="o-section__header-bg  t-section__header"></div>
	<div class="o-section__content-bg  t-section__content"></div>
	<div class="o-container">
		<div class="o-section__container">
			<header class="o-section__header  t-section__header">
				<div class="o-content">
					<h2 id="experience" class="o-section__heading"><?php _e('Experience', 'lloan');?></h2>
					<a href="https://lloanalas.com/wp-content/uploads/2023/09/resume-alas.pdf">
						<?php _e('Download Resume', 'lloan'); ?> (PDF)
					</a>
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
								'title'   => __('Web Developer', 'lloan'),
								'location' => 'Rialto, CA',
								'desc'     => __("Translated PDF designs into pixel-perfect web applications. Directed hosting, deployment, and version control. Built accessible, high-performance web architectures. Developed proprietary applications under NDAs.", 'lloan'),
							],
							[
								'start'    => '2014-01-12',
								'end'      => '2015-02-05',
								'company'   => 'Voice Marketing',
								'title'   => __('Web Developer', 'lloan'),
								'location' => 'Rancho Cucamonga, CA',
								'desc'     => __("Specialized in developing responsive websites, with user-friendly interfaces and cross-browser compatibility. Utilized background in interactive design, graphic design, web design and animation.", 'lloan'),
							],
							[
								'start'    => '2015-02-15',
								'end'      => '2017-07-01',
								'company'   => 'Voice Marketing',
								'title'   => __('Lead Web Developer', 'lloan'),
								'location' => 'Rancho, CA',
								'desc'     => __("Oversaw WordPress application development for marketing campaigns. Managed SEO efforts to boost website visibility and traffic. Led cross-functional team, completing hundreds of projects. Collaborated with designers and marketers to integrate web solutions. Managed over 50 different websites for a plethora of different clients, including a national entity with franchises all over the country (Steri-Clean/Hoarders).", 'lloan'),
							],
							[
								'start'    => '2017-07-05',
								'end'      => '2018-08-01',
								'company'   => 'Fit Body Boot Camp HQ',
								'title'   => __('Web Developer', 'lloan'),
								'location' => 'Chino Hills, CA',
								'desc'     => __("Developed custom WordPress themes with Bootstrap 3 & 4 for Multisite Networks, ensuring uniformity across 530+ franchise sites. Led custom theme and plugin development to automate internal processes and enhance operational efficiency. Managed search engine optimization efforts, driving organic traffic to franchise sites and online properties. Implemented version control with GitHub/Git, streamlining feature delivery and ensuring code integrity. Conducted code cleanup, documentation maintenance, and optimization for improved performance.", 'lloan'),
							],
							[
								'start'    => '2019-05-01',
								'end'      => '2019-08-01',
								'company'   => 'Mozilla',
								'title'   => __('DevTools team Intern', 'lloan'),
								'location' => __('Remote', 'lloan'),
								'desc'     => __("Identified and fixed bugs across multiple Firefox browser developer tools products, including console, inspector, and memory monitor. Contributed to various feature implementations, notably the Firefox network panel search functionality.", 'lloan'),
							],
							[
								'start'    => '2019-02-01',
								'end'      => '2019-10-01',
								'company'   => 'Udacity',
								'title'   => __('Mentor', 'lloan'),
								'location' => __('Remote', 'lloan'),
								'desc'     => __("Front-End Web Developer Nanodegree Mentor.", 'lloan'),
							],
							[
								'start'    => '2018-02-01',
								'end'      => '2019-03-01',
								'company'   => 'Esri',
								'title'   => __('WordPress Developer', 'lloan'),
								'location' => 'Redlands, CA',
								'desc'     => __("Contract", 'lloan'),
							],
							[
								'start'    => '2019-03-01',
								'end'      => null,
								'company'   => 'Esri',
								'title'   => __('Application Developer', 'lloan'),
								'location' => 'Redlands, CA',
								'desc'     => __("Spearheaded development of all WordPress applications for Esri.com publications. Developed tools for authoring, including image optimization and user permissions management. Optimized legacy code to improve site performance and improve authoring experience. Throughout my tenure, due to successful development, tech stack adoption increased by 400%.", 'lloan'),
							],
							[
								'start'    => '2021-07-01',
								'end'      => null,
								'date'     => 'Jul 2021 - Feb 2024',
								'company'   => 'Mozilla',
								'title'   => __('Software Engineer - Firefox Relay', 'lloan'),
								'location' => __('Remote', 'lloan'),
								'desc'     => __("Develop and maintain Firefox Relay (Next.js app) features using React. Implemented SQL-based telemetry strategies for Grafana. Enhanced Guardian project, streamlining VPN-FxA integration. Provided React guidance to lower team learning curve, accelerating feature development. Drive front-end enhancements, boosting Relay adoption. Contributed to code refactoring, improving team productivity", 'lloan'),
							],
						];
						$index = count($education) - 1;

						foreach ($education as $key => $value) {
							$end = $education[ $index ]['end'];
							$start = $education[ $index ]['start'];
							$tense = $education[ $index ]['tense'] ?? "present";
							$date = ( empty( $end ) || $end === null ) && $tense !== null ? formatDateDifference( $start, $end, $tense ) : formatDateDifference( $start, $end );
							?>
							<div class="c-timeline__item" role="listitem">
								<div class="t-primary-bg"></div>
								<div class="o-content">
									<div class="o-grid">
										<div class="o-grid__col-md-5">
											<div class="c-work__timeframe" aria-label="Date"><?php echo $date; ?></div>
											<h3 class="c-work__heading" aria-label="Company"><?php echo $education[$index]['company']; ?></h3>
											<h4 class="c-work__title" aria-label="Title"><?php echo $education[$index]['title']; ?></h4>
											<div class="c-work__location" aria-label="Location"><?php echo $education[$index]['location']; ?></div>
										</div>
										<div class="o-grid__col-md-7">
											<p aria-label="Description"><?php echo $education[$index]['desc']; ?></p>
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
<div class="keywords">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<?php the_title(); ?>
			</div>
		</div>
	</div>
</div>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>

<div class="page-section page-section-one">
	<div class="container">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<h2>Threat Intelligence on Current, Active Malicious Domains</h2>
				<p>Websites, like emails, can become infected with malware, ransomware, and other threats. That’s why you need access to the industry's most comprehensive and accurate list of active malicious domains. You need SURBL to improve your detection of phishing, malware, and botnet domains.</p>
			</div>
		</div>
	</div>
</div>

<div class="page-section page-section-two">
	<div class="container">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<h2>What is SURBL?</h2>
				<p>URBL is a highly accurate and highly dynamic list of current, active bad websites, and the data is used to evaluate IP reputation in commercial and open-source mail filters, security appliances, and a wide range of mail and web applications and systems. SURBL data is used to protect more than 1 billion end users.</p>
				<p>SURBL data contains approximately 800,000 to 1,500,000 domains and is updated continuously — every 1 to 2 minutes. That’s why this tool is so highly effective at controlling hard-to-detect phishing, malware, and botnet domains.</p>
				<p>This IP reputation datafeed is the industry's most comprehensive and accurate list of bad domains and is used by security vendors, webmail providers, large and small ISPs, universities, private companies, governments, service providers, and enterprises worldwide to improve defenses against fast-flux, bot-generated, malicious domains. This is done through email filtering, web filtering, and security solutions.</p>
			</div>
		</div>
	</div>
</div>

<div class="page-section page-section-three">
	<div class="container">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<h2>Why use SURBL?</h2>
				<p>You don’t have time to wait for cyberattacks to happen. You need a proactive approach to cybersecurity. SURBL provides fast, dynamic, highly valuable intel to identify advanced phishing and malware data sources. SURBL, in conjunction with the rest of your cybersecurity solutions, provides 360-degree protection from spam and cyber threats that can harm your business.</p>
			</div>
		</div>
	</div>
</div>

<div class="page-section page-section-four">
	<div class="container">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<h2>How to use SURBLE</h2>
				<div class="row">
					<div class="col-md-6">
						<p><strong>Email Filtering:</strong><br> The first stage of defense is an email blacklist like Spamhaus Zen, which detects about 80% to 90% of unsolicited messages at the message transfer agent (MTA). The second stage mail filter then checks messages in the body of websites against SURBLs*, allowing the mail filter to detect more than 75% of the remaining unsolicited messages. Together, Spamhaus and SURBL detect more than 95%** of unsolicited messages.</p>
					</div>
					<div class="col-md-6">
						<p><strong>Security Data:</strong><br> SURBL data provides real-time threat intelligence and is used extensively in security applications. You get quality data thanks to highly sophisticated processing and filtering engines, in addition to manual reviewing and whitelisting, to ensure a highly accurate and effective list.</p>
					</div>
				</div>

				<p>*SURBLs should be used along with multiple, weighted factors to classify messages</p>
				<p>**SURBL data is typically accessed using DNS queries. Small- to medium-sized organizations may use the free public DNS servers, while large organizations of more than 1,000 users should retrieve the data by rsync and serve it from a local DNS mirror or other internal databases. When used in combination with Spamhaus, SURBLs can detect more than 95% of unsolicited messages.</p>

				<p>Ready to find out how SURBL can improve your cybersecurity? Start your FREE trial today, sign up below!</p>

			</div>
		</div>
	</div>
</div>

<div class="sticky-nav">
	<?php

	$args = array(
	    'post_type'      => 'page',
	    'posts_per_page' => -1,
	    'post_parent'    => $post->ID,
	    'order'          => 'ASC',
	    'orderby'        => 'menu_order'
	 );


	$parent = new WP_Query( $args );

	if ( $parent->have_posts() ) : ?>

	    <?php while ( $parent->have_posts() ) : $parent->the_post(); ?>

	        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>

	    <?php endwhile; ?>

	<?php endif; wp_reset_postdata(); ?>
</div>

<?php get_template_part('templates/email', 'capture'); ?>
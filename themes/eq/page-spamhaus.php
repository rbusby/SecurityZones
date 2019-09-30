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
				<p>Spamhaus protects your business and your customers from ransomware, malware, phishing emails, and other cyber threats is non-negotiable. You need to stop spam emails before they reach your inbox. You need Spamhaus.</p>
				<p>The most widely used and highly regarded reputation data worldwide.</p>
			</div>
		</div>
	</div>
</div>

<div class="page-section page-section-two">
	<div class="container">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<h2>What is Spamhaus?</h2>
				<p>Spamhaus is an international spam monitoring and spam-blocking service that blocks email messages from confirmed spam sources. It’s the world’s #1-rated anti-spam blocklist, providing protection to more than 3 billion users worldwide for more than 20 years. With Spamhaus, you get access to the most widely used and highly regarded reputation data worldwide, which provides the highest block rates and lowest, near-zero false positives</p>
				<p>Spamhaus's dependable, real-time threat intelligence data is used by the majority of the internet networks around the globe, including email providers, security vendors, corporations, and universities to:</p>
				<ul class="cool-boxes list-unstyled">
					<li><span class="column">Improve the accuracy and effectiveness of their anti-spam email security</span></li>
					<li><span class="column">Eliminate false positives</span></li>
					<li><span class="column">Improve spam and phishing email block rates</span></li>
					<li><span class="column">Improve customer protection against spam, phishing, and malware</span></li>
				</ul>
			</div>
		</div>
	</div>
</div>

<div class="page-section page-section-three">
	<div class="container">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<h2>How Does Spamhaus Work?</h2>
				<p>Spamhaus maintains several lists of known or suspected spammer and domain IP addresses:</p>
				<ul>
					<li><strong>Spamhaus Block List (SBL)</strong> contains IP addresses that are controlled by known spammers</li>
					<li><strong>Exploits Block List (XBL)</strong> contains IP addresses of virus-compromised computers that are sending spam</li>
					<li><strong>Policy Block List (PBL)</strong> contains IP addresses that should not be delivering unauthenticated SMTP email</li>
					<li><strong>Domain Block List (DBL)</strong> contains a list of spam domains that link to fraud, phishing, and malware sites</li>
				</ul>
				<p>When you subscribe to the Spamhaus Datafeed Service, you get a continuous, real-time feed from ALL Spamhaus lists. The IP blocklists are checked any time an SMTP connection is made to one of your servers. If the sender is listed on one of these IP blocklists, the SMTP connection will not be accepted, allowing you to block spammers from gaining access to your network. </p>

				<p>The DBL is then queried for domains included in the body of the email. The combination of the IP blocklists and the DBL is highly effective, and blocks up to 98% of spam with no false positives.</p>
			</div>
		</div>
	</div>
</div>

<div class="page-section page-section-four">
	<div class="container">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<h2>Benefits of Spamhaus</h2>
				<p>With Spamhaus, you can block more than 90% of junk email before it even enters your network.</p>
				<p>Employing reputation services (using IP blacklists and email blacklists) allows your business to improve the overall effectiveness and performance of your email infrastructure. Blocking such a high rate of malicious domains and emails reduces traffic loads and required server/infrastructure/administration costs, and improves the performance of your email system.</p>
				<p>Because these email messages with IP addresses on the blocklists are refused, your business won’t be responsible for the forwarding or delivery of spam emails, and they won’t take up space in your email infrastructure. This protects your organization's reputation and reduces the risk of your servers becoming blacklisted because of spam being forwarded through email accounts hosted by your company.</p>
				<p>Start protecting your email from spam and malicious domains.</p>
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
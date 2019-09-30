<footer class="content-info">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-12">
		        <a class="brand" href="<?= esc_url(home_url('/')); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo-white.png" alt="<?php bloginfo('name'); ?>"></a>

		        <form id="formAcymailing24641" action="/resources-download/blog" onsubmit="return submitacymailingform('optin','formAcymailing24641')" method="post" name="formAcymailing24641" style="margin-bottom: 30px;">
				<div class="acymailing_module_form" style="display: inline-block;">
					<div class="acymailing_introtext">Sign up below to stay up to date!</div>
						<div class="acymailing_form"><br>
							<p class="onefield fieldacyemail" id="field_email_formAcymailing24641">
								<span class="acyfield_email acy_requiredField">
									<input id="user_email_formAcymailing24641" onfocus="if(this.value == 'E-mail') this.value = '';" onblur="if(this.value=='') this.value='E-mail';" class="alt form-control" type="text" name="user[email]" value="E-mail" title="E-mail">
								</span>
								<span class="input-group-btn">	 
									<input style="border-radius: 100px;margin-top: 10px;" class="btn btn-primary" type="submit" value="Subscribe" name="Submit" onclick="try{ return submitacymailingform('optin','formAcymailing24641'); }catch(err){alert('The form could not be submitted '+err);return false;}">
								</span>
							</p>
						</div>
						<input type="hidden" name="ajax" value="0">
						<input type="hidden" name="acy_source" value="module_112">
						<input type="hidden" name="ctrl" value="sub">
						<input type="hidden" name="task" value="notask">
						<input type="hidden" name="redirect" value="https%3A%2F%2Fwww.securityzones.net%2Fresources-download%2Fblog">
						<input type="hidden" name="redirectunsub" value="https%3A%2F%2Fwww.securityzones.net%2Fresources-download%2Fblog">
						<input type="hidden" name="option" value="com_acymailing">
						<input type="hidden" name="hiddenlists" value="1">
						<input type="hidden" name="acyformname" value="formAcymailing24641">
					</div>
				</form>
			</div>
			<div class="col-md-3 col-sm-4">
				<h2>Spamhaus</h2>
	            <?php
	              if (has_nav_menu('footer_nav_1_navigation')) :
	                wp_nav_menu(['theme_location' => 'footer_nav_1_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'list-unstyled']);
	              endif;
	            ?>
			</div>
			<div class="col-md-2 col-sm-4">
				<h2>SURBL</h2>
	            <?php
	              if (has_nav_menu('footer_nav_2_navigation')) :
	                wp_nav_menu(['theme_location' => 'footer_nav_2_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'list-unstyled']);
	              endif;
	            ?>
			</div>
			<div class="col-md-3 col-sm-4">
				<h2>Our Services</h2>
	            <?php
	              if (has_nav_menu('footer_nav_3_navigation')) :
	                wp_nav_menu(['theme_location' => 'footer_nav_3_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'list-unstyled']);
	              endif;
	            ?>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 tar">
				<p><a href="<?php echo site_url(); ?>/privacy-policy/">Privacy Policy</a> - ©<?php echo date('Y'); ?> SecurityZONES</p>
			</div>
		</div>
	</div>
</div>

<?php echo get_template_part('templates/additional', 'scripts') ?>
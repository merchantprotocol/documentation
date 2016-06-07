<?php $this->layout('theme::layout/00_layout')?>
<?php $this->insert('theme::partials/navbar_content', ['params' => $params]); ?>

<div class="container" style="padding-top: 200px;">
	<header class="text-center margin-bottom-80">
		<h1
			style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;"
			class="nomargin size-50 weight-300 wow fadeInUp animated"
			data-wow-delay="0.4s">MP Documentation</h1>
		<p
			style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;"
			class="lead font-lato size-30 wow fadeInUp animated"
			data-wow-delay="0.7s">Everything That You Need To Work With Our
			Software</p>

		<div class="margin-top-30">
			<?php
			if ($params ['html'] ['repo']) {
				echo '<a href="https://github.com/' . $params ['html'] ['repo'] . '" class="btn btn-3d btn-lg btn-teal">View Us On GitHub</a>';
			}
			?>
	         <span class="size-17 hidden-xs">&nbsp; OR &nbsp;</span> 
	        <?php
			foreach ( $page ['entry_page'] as $key => $node ) {
				echo '<a href="' . $node . '"  class="btn btn-3d btn-lg btn-red">' . $key . '</a>';
			}
			?>
		</div>
	</header>

	<div class="row">

		<div class="col-sm-3 col-md-offset-1">
			<img class="img-responsive" src="https://merchantprotocol.com/wp-content/uploads/2016/05/user-manual-template-image-4.jpg" alt="">
		</div>

		<div class="col-sm-7 col-md-offset-1">
			<p class="lead margin-bottom-60">The Merchant Protocol Documentation
				repository contains everything that you need to know to work with
				our extensions and integrate with our Payment Gateway.</p>
			<p>We've written our manuals as comprehensive as possible and we're
				always finding new things to add based upon our conversations in the
				forums. Be sure to visit the forums to iron out any problems that
				you might have.</p>

			<hr class="hidden-xs">

			<h4>Additional Resources</h4>
			<ul>
				<li><a href="https://merchantprotocol.com/forums/">Support Forums</a></li>
				<li><a
					href="https://merchantprotocol.com/get-a-software-development-quote/">Customization
						Services</a></li>
			</ul>

		</div>

	</div>

</div>

<div class="homepage-content container-fluid margin-top-80">
	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">
                <?php if ($params['html']['search']) { ?>
                    <div id="tipue_search_content" style="display: none"></div>
                <?php } ?>

                <div class="doc_content">
                    <?php echo $page['content']; ?>
                </div>
			</div>
		</div>
	</div>
</div>

<footer id="footer">
	<div class="container">

		<div class="row">

			<div class="col-md-3">
				<!-- Footer Logo -->
				<img class="footer-logo pull-left" style="width: 41px;"
					src="https://merchantprotocol.com/wp-content/themes/protocol/assets/images/merchant-protocol-shield.png"
					alt="">

				<p>We Are Magento Developers from all over the world that have come
					together to provide you with the best possible software.</p>

				<!-- Contact Address -->
				<address>
					<ul class="list-unstyled">
						<li class="footer-sprite address">113 Cherry St. Suite 15329<br>
							Seattle, WA 98104<br>
						</li>
						<li class="footer-sprite phone">Phone: 1-800-207-1221</li>
						<li class="footer-sprite email"><a
							href="mailto:info@merchantprotocol.com">info@merchantprotocol.com</a>
						</li>
					</ul>
				</address>
				<!-- /Contact Address -->

			</div>

			<div id="recent-posts-3"
				class=" col-xs-12 col-sm-5 col-md-3 widget_recent_entries">
				<h4 class="widgettitle">Latest News</h4>
				<ul>
					<li><a
						href="https://merchantprotocol.com/3629/magento-requirements/">Magento
							Requirements</a></li>
					<li><a
						href="https://merchantprotocol.com/3626/quick-magento-installation/">Quick
							Magento Installation</a></li>
					<li><a
						href="https://merchantprotocol.com/3623/magento-installation/">Magento
							Installation</a></li>
					<li><a
						href="https://merchantprotocol.com/3620/ten-of-the-best-free-magento-extensions-available-for-download/">Ten
							Of The Best Free Magento Extensions Available For Download</a></li>
				</ul>
			</div>
			<div id="nav_menu-7"
				class=" col-xs-12 col-sm-7 col-md-2 widget_nav_menu">
				<h4 class="widgettitle">Company</h4>
				<div class="menu-company-container">
					<ul id="menu-company" class="menu">
						<li id="menu-item-122"
							class="menu-item menu-item-type-post_type menu-item-object-page menu-item-122"><a
							href="https://merchantprotocol.com/about-merchant-protocol/">About
								Us</a></li>
						<li id="menu-item-120"
							class="menu-item menu-item-type-post_type menu-item-object-page menu-item-120"><a
							href="https://merchantprotocol.com/merchant-protocol-careers/">Work
								With Us</a></li>
						<li id="menu-item-121"
							class="menu-item menu-item-type-post_type menu-item-object-page menu-item-121"><a
							href="https://merchantprotocol.com/blog/">Blog</a></li>
						<li id="menu-item-3732"
							class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3732"><a
							href="https://merchantprotocol.com/forums/">Support Forums</a></li>
					</ul>
				</div>
			</div>

			<div class="col-md-4">

				<!-- Social Icons -->
				<div class="margin-top-20">
					<!-- 								<a href="#" class="social-icon social-icon-border social-facebook pull-left" data-toggle="tooltip" data-placement="top" title="Facebook"> -->

					<!-- 									<i class="icon-facebook"></i> -->
					<!-- 									<i class="icon-facebook"></i> -->
					<!-- 								</a> -->

					<a data-original-title="Twitter"
						href="https://twitter.com/merchantproto"
						class="social-icon social-icon-border social-twitter pull-left"
						data-toggle="tooltip" data-placement="top" title=""> <i
						class="icon-twitter"></i> <i class="icon-twitter"></i>
					</a> <a data-original-title="Google plus"
						href="https://plus.google.com/+Merchantprotocol/posts"
						class="social-icon social-icon-border social-gplus pull-left"
						data-toggle="tooltip" data-placement="top" title=""> <i
						class="icon-gplus"></i> <i class="icon-gplus"></i>
					</a>

					<!-- 								<a href="#" class="social-icon social-icon-border social-linkedin pull-left" data-toggle="tooltip" data-placement="top" title="Linkedin"> -->
					<!-- 									<i class="icon-linkedin"></i> -->
					<!-- 									<i class="icon-linkedin"></i> -->
					<!-- 								</a> -->

					<a data-original-title="Rss"
						href="https://merchantprotocol.com/feed/"
						class="social-icon social-icon-border social-rss pull-left"
						data-toggle="tooltip" data-placement="top" title=""> <i
						class="icon-rss"></i> <i class="icon-rss"></i>
					</a>

				</div>
				<!-- /Social Icons -->

			</div>

		</div>

	</div>

	<div class="copyright">
		<div class="container">
			<ul class="pull-right nomargin list-inline mobile-block">
				<li><a href="https://merchantprotocol.com/terms-of-use/">Terms &amp;
						Conditions</a></li>
				<li>•</li>
				<li><a href="https://merchantprotocol.com/privacy-policy/">Privacy</a></li>
			</ul>
			© All Rights Reserved, Merchant Protocol ™
		</div>
	</div>
</footer>

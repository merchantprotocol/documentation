<?php $this->layout('theme::layout/00_layout') ?>
<?php $this->insert('theme::partials/navbar_content', ['params' => $params]); ?>

<div class="container margin-top-100">
    
    <div class="row columns content">
        <div class="left-column article-tree col-sm-3 hidden-print">
            <div id="sub-nav-collapse" class="sub-nav-collapse">
                <!-- Navigation -->
                
				<div class="side-nav margin-top-60">
					<div class="side-nav-head">
						<button class="fa fa-bars"></button>
						<h4>Navigation</h4>
					</div>
	                <?php
	                if ($page['language'] !== '') {
	                    echo $this->get_navigation($tree->value[$page['language']], $page['language'], isset($params['request']) ? $params['request'] : '', $base_page, $params['mode']);
	                } else {
	                    echo $this->get_navigation($tree, '', isset($params['request']) ? $params['request'] : '', $base_page, $params['mode']);
	                }
	                ?>
				</div>
                

                <div class="sidebar-links">
                    <?php if (!empty($params['html']['links']) || !empty($params['html']['twitter']) || $params['html']['toggle_code']) { ?>

                        <!-- Links -->
                        <?php
                        foreach ($params['html']['links'] as $name => $url) {
                            echo '<a href="' . $url . '" target="_blank">' . $name . '</a><br>';
                        } ?>

                    
                        <div id="toggleCodeBlock">
                            <br />
                            <span class="code-buttons-text">Code blocks</span>
                            <div class="btn-group" role="group">
                              <button id="code-hide" class="btn btn-sm btn-default">No</button>
                              <button id="code-below" class="btn btn-sm btn-default">Below</button>
                              <button id="code-float" class="btn btn-sm btn-default">Inline</button>
                            </div>
                        </div>

                        <!-- Twitter -->
                        <?php foreach ($params['html']['twitter'] as $handle) { ?>
                            <div class="twitter">
                                <hr/>
                                <iframe allowtransparency="true" frameborder="0" scrolling="no" style="width:162px; height:20px;" src="https://platform.twitter.com/widgets/follow_button.html?screen_name=<?= $handle; ?>&amp;show_count=false"></iframe>
                            </div>
                        <?php } ?>

                        <hr/>
                    <?php } ?>
                    
                </div>
            </div>
        </div>
        <div class="right-column <?= $params['html']['float'] ? 'float-view' : ''; ?> content-area col-sm-9">

            <div class="content-page">
                <?php if ($params['html']['search']) { ?>
                    <div id="tipue_search_content" style="display:none"></div>
                <?php } ?>

                <div class="doc_content">
                    <?= $this->section('content'); ?>
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
							<img class="footer-logo pull-left" style="width: 41px;" src="https://merchantprotocol.com/wp-content/themes/protocol/assets/images/merchant-protocol-shield.png" alt="">

							<p>We Are Magento Developers from all over the world that have come 
							together to provide you with the best possible software.</p>

							<!-- Contact Address -->
							<address>
								<ul class="list-unstyled">
									<li class="footer-sprite address">
										113 Cherry St. Suite 15329<br>
										Seattle, WA 98104<br>
									</li>
									<li class="footer-sprite phone">
										Phone: 1-800-207-1221
									</li>
									<li class="footer-sprite email">
										<a href="mailto:info@merchantprotocol.com">info@merchantprotocol.com</a>
									</li>
								</ul>
							</address>
							<!-- /Contact Address -->

						</div>

								<div id="recent-posts-3" class=" col-xs-12 col-sm-5 col-md-3 widget_recent_entries">		<h4 class="widgettitle">Latest News</h4>		<ul>
					<li>
				<a href="https://merchantprotocol.com/3629/magento-requirements/">Magento Requirements</a>
						</li>
					<li>
				<a href="https://merchantprotocol.com/3626/quick-magento-installation/">Quick Magento Installation</a>
						</li>
					<li>
				<a href="https://merchantprotocol.com/3623/magento-installation/">Magento Installation</a>
						</li>
					<li>
				<a href="https://merchantprotocol.com/3620/ten-of-the-best-free-magento-extensions-available-for-download/">Ten Of The Best Free Magento Extensions Available For Download</a>
						</li>
				</ul>
		</div>								<div id="nav_menu-7" class=" col-xs-12 col-sm-7 col-md-2 widget_nav_menu"><h4 class="widgettitle">Company</h4><div class="menu-company-container"><ul id="menu-company" class="menu"><li id="menu-item-122" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-122"><a href="https://merchantprotocol.com/about-merchant-protocol/">About Us</a></li>
<li id="menu-item-120" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-120"><a href="https://merchantprotocol.com/merchant-protocol-careers/">Work With Us</a></li>
<li id="menu-item-121" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-121"><a href="https://merchantprotocol.com/blog/">Blog</a></li>
<li id="menu-item-3732" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3732"><a href="https://merchantprotocol.com/forums/">Support Forums</a></li>
</ul></div></div>

						<div class="col-md-4">

							<!-- Social Icons -->
							<div class="margin-top-20">
<!-- 								<a href="#" class="social-icon social-icon-border social-facebook pull-left" data-toggle="tooltip" data-placement="top" title="Facebook"> -->

<!-- 									<i class="icon-facebook"></i> -->
<!-- 									<i class="icon-facebook"></i> -->
<!-- 								</a> -->

								<a data-original-title="Twitter" href="https://twitter.com/merchantproto" class="social-icon social-icon-border social-twitter pull-left" data-toggle="tooltip" data-placement="top" title="">
									<i class="icon-twitter"></i>
									<i class="icon-twitter"></i>
								</a>

								<a data-original-title="Google plus" href="https://plus.google.com/+Merchantprotocol/posts" class="social-icon social-icon-border social-gplus pull-left" data-toggle="tooltip" data-placement="top" title="">
									<i class="icon-gplus"></i>
									<i class="icon-gplus"></i>
								</a>

<!-- 								<a href="#" class="social-icon social-icon-border social-linkedin pull-left" data-toggle="tooltip" data-placement="top" title="Linkedin"> -->
<!-- 									<i class="icon-linkedin"></i> -->
<!-- 									<i class="icon-linkedin"></i> -->
<!-- 								</a> -->

								<a data-original-title="Rss" href="https://merchantprotocol.com/feed/" class="social-icon social-icon-border social-rss pull-left" data-toggle="tooltip" data-placement="top" title="">
									<i class="icon-rss"></i>
									<i class="icon-rss"></i>
								</a>

							</div>
							<!-- /Social Icons -->

						</div>

					</div>

				</div>

				<div class="copyright">
					<div class="container">
						<ul class="pull-right nomargin list-inline mobile-block">
							<li><a href="https://merchantprotocol.com/terms-of-use/">Terms &amp; Conditions</a></li>
							<li>•</li>
							<li><a href="https://merchantprotocol.com/privacy-policy/">Privacy</a></li>
						</ul>
						© All Rights Reserved, Merchant Protocol ™
					</div>
				</div>
			</footer>

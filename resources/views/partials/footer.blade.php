<footer id="colophon" class="site-footer footer-two">
    <div class="footer-widgets col-4 clearfix">
        <div class="top-footer-wrap">
            <div class="vmagazine-container">
                <div class="block footer-widget-1">
                    <div id="vmagazine_recent_post-2" class="widget widget_vmagazine_recent_post">
                        <h4 class="block-title"><span class="title-bg">About</span></h4>
                        <div class="vmagazine-rec-posts recent-post-widget block_layout_2">

                        </div>
                    </div>
                </div>

                <div class="block footer-widget-2">
                    <div id="tag_cloud-2" class="widget widget_tag_cloud">
                        <h4 class="widget-title"><span class="title-bg">
                        <span class="title-bg">Tags</span></span></h4>
                        <div class="tagcloud">
                          <a href="tag/buildings/index.html" class="tag-cloud-link tag-link-38 tag-link-position-1" style="font-size: 16.4pt;" aria-label="buildings (2 items)">buildings<span class="tag-link-count"> (2)</span></a>
                      </div>
                   </div>
                </div>

                <div class="block footer-widget-3">
                    <div id="nav_menu-2" class="widget widget_nav_menu"><h4 class="widget-title">
                            <span class="title-bg"><span class="title-bg">Navigation</span></span></h4>
                        <div class="menu-footer-menu-container">
                            <ul id="menu-footer-menu" class="menu vmagazine_mega_menu">
                              @foreach( $categories(0) as $category)
                               <li id="menu-item-132" class="menu-item menu-item-type-taxonomy menu-item-object-category page_item page-item-132 no-mega-menu">
                                   <a href="{{ route('category.index', $category->id) }}">{{ $category->name }}</a>
                               </li>
                             @endforeach
                         </ul>
                        </div>
                    </div>
                </div>

                <div class="block footer-widget-4">
                    <div id="media_gallery-2" class="widget widget_media_gallery"><h4 class="widget-title">
                        <span class="title-bg"><span class="title-bg">Gallery</span></span></h4>
                        <div id='gallery-1' class='gallery galleryid-38 gallery-columns-4 gallery-size-thumbnail'>
                           <figure class='gallery-item'>
                                <div class='gallery-icon landscape'>
                                    <a href='wp-content/uploads/sites/2/2018/02/b1.jpg'><img width="150" height="150" src="wp-content/uploads/sites/2/2018/02/b1-150x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" srcset="https://demo.accesspressthemes.com/vmagazine/demo-one/wp-content/uploads/sites/2/2018/02/b1-150x150.jpg 150w, https://demo.accesspressthemes.com/vmagazine/demo-one/wp-content/uploads/sites/2/2018/02/b1-300x300.jpg 300w, https://demo.accesspressthemes.com/vmagazine/demo-one/wp-content/uploads/sites/2/2018/02/b1-100x100.jpg 100w" sizes="(max-width: 150px) 100vw, 150px" /></a>
                                </div>
                           </figure>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="buttom-footer footer_one">
        <div class="footer-btm-wrap">
            <div class="vmagazine-container">
                <div class="vmagazine-btm-ftr">
                    <div class="footer-credit">
                        <div class="site-info">
                            &copy; 2020 - Vmagazine By <a href="https://accesspressthemes.com/"  title="Premium WordPress Themes & Plugins by AccessPress Themes" target="_blank">AccessPress Themes</a>									</div><!-- .site-info -->
                       </div>
                    <div class="footer-nav">
                        <nav class="footer-navigation">
                            <div class="menu-footer-menu-container">

                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer><!-- #colophon -->


<a href="#" class="scrollup">
    <i class="fa fa-angle-up" aria-hidden="true"></i>
</a>
</div>


<div class='apss-popup-overlay' id="apss-popup-overlay-email" style="display:none"></div>
   <div class="apss_email_share_popup" style="display:none;">
       <div class='apss_email_share_popup_close'>X</div>
	            <div class="apss_popup_top">
	                <div class="title">Share this </div>
	                <div class="apss_email_share_popup_close_bttn"></div>
	                <div class="clear"></div>
	            </div>
	            <div class="apss_email_popup_content">
	               <div class="apss_email_popup_form">
	                <div class="apss_email_popup_name apss-email-block">
	                  <input type="text" id="apss_email_popup_name" placeholder="Your Name" onkeyup="removeMe('apss_email_popup_name_error');">
	                  <div class='error apss_email_popup_name_error'></div>
					</div>
					<div class="apss_email_popup_from apss-email-block">
			          <input type="text" id="apss_email_popup_from" placeholder="Your email" onkeyup="removeMe('apss_email_popup_from_error');">
			          <div class='error apss_email_popup_from_error'></div>
					</div>
					<div class="apss_email_popup_sendto apss-email-block">
	                  <input type="text" id="apss_email_popup_receiver" placeholder="Friend's email address" onkeyup="removeMe('apss_email_popup_sendto_error');">
	                  <div class='error apss_email_popup_sendto_error'></div>
					</div>

					<div class='apss-sub-wrap apss-email-block'>
						<div class="apss_email_popup_label">
		                   Subject:
		                 </div>

						 <div class="apss_email_popup_subject">
							<input type="text" id="apss_email_popup_subject" value="Please visit this link https://demo.accesspressthemes.com:443/vmagazine/demo-one/">
		                </div>
	                </div>
	                <div class='apss-message-wrap apss-email-block'>
						<div class="apss_email_popup_label">
							Message:
						</div>
		                <div class="apss_email_popup_message">
	                            <textarea id="apss_email_popup_message">Hey Buddy!, I found this information for you: "Home". Here is the website link: https://demo.accesspressthemes.com/vmagazine/demo-one/. Thank you.</textarea>
		                </div>
	                </div>
	               </div>
	                <button class="apss-the-button" id="apss_email_popup_send_email">Send</button>
	                <span class="apss_email_popup_loading" style="display:none;"><img src='wp-content/plugins/accesspress-social-pro/images/share/ajax-loader.gif' alt='Ajax loader' /></span>
					<div class="clear"></div>
	                <div class='apss_email_popup_result'> </div>
	            </div>
</div>
            <input type="hidden" id="apss-current-url" value="https://demo.accesspressthemes.com:443/vmagazine/demo-one/"/>
               <span class="apss-temp" style="font-size:14px;position:relative;z-index:99999;"></span>
            <input type="hidden" id="wpcui_page_type" value="static_home">

<script type="text/javascript">
    var c = document.body.className;
    c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
    document.body.className = c;
</script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var frontend_ajax_object = {"ajax_url":"https:\/\/demo.accesspressthemes.com\/vmagazine\/demo-one\/wp-admin\/admin-ajax.php","ajax_nonce":"6996839e22"};
    var frontend_js_object = {"delay_time":"0","whatsapp_hide":"0","viber_hide":"0","sms_hide":"0","messenger_hide":"0","hide_popup_overlay":"0"};
    /* ]]> */
</script>
<script type='text/javascript' src='/vnews/wp-content/plugins/accesspress-social-pro/js/share/frontende34c.js?ver=1.3.5'></script>
<script type='text/javascript' src='/vnews/wp-content/plugins/accesspress-social-pro/js/counter/frontende34c.js?ver=1.3.5'></script>
<script type='text/javascript' src='/vnews/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min44fd.js?ver=2.70'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var wc_add_to_cart_params = {"ajax_url":"\/vnews\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/vmagazine\/demo-one\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"https:\/\/demo.accesspressthemes.com\/vmagazine\/demo-one\/cart\/","is_cart":"","cart_redirect_after_add":"no"};
    /* ]]> */
</script>
<script type='text/javascript' src='/vnews/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min9e95.js?ver=3.8.0'></script>
<script type='text/javascript' src='/vnews/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min6b25.js?ver=2.1.4'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var woocommerce_params = {"ajax_url":"\/vnews\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/vnews\/?wc-ajax=%%endpoint%%"};
    /* ]]> */
</script>
<script type='text/javascript' src='/vnews/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min9e95.js?ver=3.8.0'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var wc_cart_fragments_params = {"ajax_url":"\/vnews\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/vnews\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_ab464509de2de95320b00bbf8abce7bd","fragment_name":"wc_fragments_ab464509de2de95320b00bbf8abce7bd","request_timeout":"5000"};
    /* ]]> */
</script>
<script type='text/javascript' src='/vnews/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min9e95.js?ver=3.8.0'></script>
<script type='text/javascript' src='/vnews/wp-content/themes/vmagazine/assets/library/lazy-load/jquery.lazy.min5a2c.js?ver=1.1.7'></script>
<script type='text/javascript' src='/vnews/wp-content/themes/vmagazine/assets/library/mCustomScrollbar/jquery.mCustomScrollbar5a2c.js?ver=1.1.7'></script>
<script type='text/javascript' src='/vnews/wp-content/themes/vmagazine/assets/js/jquery.fitvids5a2c.js?ver=1.1.7'></script>
<script type='text/javascript' src='/vnews/wp-content/themes/vmagazine/assets/js/navigation5a2c.js?ver=1.1.7'></script>
<script type='text/javascript' src='/vnews/wp-content/themes/vmagazine/assets/js/skip-link-focus-fix5a2c.js?ver=1.1.7'></script>
<script type='text/javascript' src='/vnews/wp-content/themes/vmagazine/assets/library/lightslider/lightslider5a2c.js?ver=1.1.7'></script>
<script type='text/javascript' src='/vnews/wp-content/themes/vmagazine/assets/js/wow5a2c.js?ver=1.1.7'></script>
<script type='text/javascript' src='/vnews/wp-content/themes/vmagazine/assets/library/prettyPhoto/js/jquery.prettyPhoto5a2c.js?ver=1.1.7'></script>
<script type='text/javascript' src='/vnews/wp-content/themes/vmagazine/assets/js/iframe-api5a2c.js?ver=1.1.7'></script>
<script type='text/javascript' src='/vnews/wp-content/themes/vmagazine/assets/library/theia-sticky-sidebar/theia-sticky-sidebar5a2c.js?ver=1.1.7'></script>
<script type='text/javascript' src='/vnews/wp-content/themes/vmagazine/assets/library/slick/slick.min5a2c.js?ver=1.1.7'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var vmagazine_ajax_script = {"mode":"enable","ajax_search":"show","ajaxurl":"https:\/\/demo.accesspressthemes.com\/vmagazine\/demo-one\/wp-admin\/admin-ajax.php","fileUrl":"https:\/\/demo.accesspressthemes.com\/vmagazine\/demo-one\/wp-content\/themes\/vmagazine","lazy":"enable","controls":"1","rtl":"false","preloader":"hide","stickyHeader":"show"};
    /* ]]> */
</script>
<script type='text/javascript' src='/vnews/wp-content/themes/vmagazine/assets/js/vmagazine-custom5a2c.js?ver=1.1.7'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var newsletter = {"messages":{"email_error":"The email is not correct","name_error":"The name is not correct","surname_error":"The last name is not correct","profile_error":"A mandatory field is not filled in","privacy_error":"You must accept the privacy statement"},"profile_max":"20"};
    /* ]]> */
</script>
<script type='text/javascript' src='/vnews/wp-content/plugins/newsletter/subscription/validate8993.js?ver=6.3.9'></script>
<script type='text/javascript' src='/vnews/wp-includes/js/wp-embed.min03ec.js?ver=5.3.4'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var panelsStyles = {"fullContainer":"body"};
    /* ]]> */
</script>
<script type='text/javascript' src='/vnews/wp-content/plugins/siteorigin-panels/js/styling-21013.min2c4f.js?ver=2.10.13'></script>
<script type="text/javascript">document.body.className = document.body.className.replace("siteorigin-panels-before-js","");</script>
<script src="{{asset('js/app.js')}}"></script>

</body>

</html>
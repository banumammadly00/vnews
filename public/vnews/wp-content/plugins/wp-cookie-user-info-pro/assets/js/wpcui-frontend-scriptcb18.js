jQuery(document).ready(function(){

	var url_string = window.location.href; //window.location.href
	var url = new URL(url_string);
	var cookie_param = url.searchParams.get("wpcui_notice_preview");
	var preview = ((cookie_param != null) && (cookie_param > 0))?cookie_param:'no';
	var mobile_device = wpcuiMobileDetect();
	var pluginCookie = getCookie('cookieExpiry');

	var page_type = jQuery('#wpcui_page_type').val();

	if ((pluginCookie != undefined) && (pluginCookie !='hold')) {
		jQuery.post(
				wpcui_js_obj.ajaxurl,
				{
					action: 			'wpcui_frontend_display_hook',
					mobile: 			mobile_device,
					preview: 			preview,
					frontend_referrer: 	url_string,
					page_type: 			page_type
				},
				function(response){
					var clear_response = response.slice(0,-1);
					jQuery(clear_response).insertAfter('footer');
					// alert(clear_response);

					jQuery(".wpcui-cookie-bar-info-confirm , .wpcui_close_btn").click(function(){
						jQuery(".wpcui-cookie-bar-display").fadeOut();
					});

					wpcuiEnableCustomScroller();

					wpcuiPopUpAlternativeClose();
				}
			);
	}
	

	
});

function display_info_content(){
	jQuery('.wpcui-cookie-bar-more-info-wrap').addClass('wpcui_info_show');
}

function wpcuiEnableCustomScroller($ = jQuery) {
	if ($('.wpcui-cookie-bar-display').hasClass('wpcui_cookie_notice_popup')) {
		if ($('.wpcui-cookie-bar-body').hasClass('wpcui_template_Template-11')) {
			wpcuiSetPopupCustomScrollBarHeight('270px','270px'); // param 1: Info Height, param 2: more info height
		}
		else if($('.wpcui-cookie-bar-body').hasClass('wpcui_template_Template-12')){
			wpcuiSetPopupCustomScrollBarHeight('232px','232px'); // param 1: Info Height, param 2: more info height
		}
		else if($('.wpcui-cookie-bar-body').hasClass('wpcui_template_Template-13')){
			wpcuiSetPopupCustomScrollBarHeight('225px','225px'); // param 1: Info Height, param 2: more info height
		}
		else if($('.wpcui-cookie-bar-body').hasClass('wpcui_template_Template-14')){
			wpcuiSetPopupCustomScrollBarHeight('240px','240px'); // param 1: Info Height, param 2: more info height
		}
		else if($('.wpcui-cookie-bar-body').hasClass('wpcui_template_Template-15')){
			wpcuiSetPopupCustomScrollBarHeight('240px','240px'); // param 1: Info Height, param 2: more info height
		}
	}
	else if(
		($('.wpcui-cookie-bar-display').hasClass('wpcui_cookie_notice_bar')) ||
		($('.wpcui-cookie-bar-display').hasClass('wpcui_cookie_notice_floating'))
	){
		wpcuimCustomScrollbar('.wpcui-cookie-info-content div#wpcui_content_area',($(window).height() - 120) + 'px');
	}
}

function wpcuiSetPopupCustomScrollBarHeight(content_height = '200px', more_info_height = '200px') {
	wpcuimCustomScrollbar('.wpcui-cookie-info-content',content_height);
	wpcuimCustomScrollbar('.wpcui_cookie_notice_popup .wpcui_text_container_wrap',more_info_height);
}
function wpcuimCustomScrollbar(content, max_height, $ = jQuery) {
	$(content).mCustomScrollbar({
		theme: 'dark',
		setHeight: max_height,
		scrollInertia: '100'
	});
}

function wpcuiPopUpAlternativeClose($ = jQuery) {
	if ($('#wpcui_cookie_bar_main_display').hasClass('wpcui_cookie_notice_popup')) {
		$(document).on('mousedown',function(e){
		    var container = $("#wpcui_cookie_bar_main_body");
		    // if the target of the click isn't the container nor a descendant of the container
		    if (!container.is(e.target) && container.has(e.target).length === 0) 
		    {
				// alert();
		        container.parent().fadeOut();
		    }
		});
		$(document).on('keyup',function(e) {
		     if (e.keyCode == 27) { // escape key maps to keycode `27`
		        $('#wpcui_cookie_bar_main_display').fadeOut();
		    }
		});
	}
}

function wpcuiMobileDetect(){
	var isMobile = 'no'; //initiate as false
	// device detection
	if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) 
	    || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))) { 
	    isMobile = 'yes';
	}
	return isMobile;
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}
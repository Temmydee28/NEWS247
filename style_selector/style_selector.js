function getCookie(c_name)
{
	"use strict";
	var i,x,y,ARRcookies=document.cookie.split(";");
	for (i=0;i<ARRcookies.length;i++)
	{
		x=ARRcookies[i].substr(0,ARRcookies[i].indexOf("="));
		y=ARRcookies[i].substr(ARRcookies[i].indexOf("=")+1);
		x=x.replace(/^\s+|\s+$/g,"");
		if (x==c_name)
		{
			return unescape(y);
		}
	}
}
function setCookie(c_name,value,exdays)
{
	"use strict";
	var exdate=new Date();
	exdate.setDate(exdate.getDate() + exdays);
	var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
	document.cookie=c_name + "=" + c_value;
}
jQuery.fn.removeClassPrefix = function(prefix) 
{
	"use strict";
    this.each(function(i, el) {
        var classes = el.className.split(" ").filter(function(c) {
            return c.lastIndexOf(prefix, 0) !== 0;
        });
        el.className = jQuery.trim(classes.join(" "));
    });
    return this;
};
jQuery(document).ready(function($){
	"use strict";
	$(".style_selector select option[selected]").prop("selected", true);
	$(".style_selector select input[checked]").prop("checked", true);
	$(".style_selector_icon").on("click", function(){
		$(this).parent().toggleClass("opened");
		setCookie("pr_style_selector", ($(this).parent().hasClass("opened") ? "opened" : ""));
	});
	$(".style_selector_content a").on("click", function(event, param){
		event.preventDefault();
		$(".style_selector_content .layout_chooser li").removeClass("selected");
		$(this).parent().addClass("selected");
		if(parseInt(param)!=1)
			$(".style_selector [name='layout_style']").val("boxed").trigger("change");
		$("body").attr("class", ($(this).attr("class").substr(0,5)=="image" ? $(this).attr("class") + ($("#overlay").is(":checked") ? " overlay" : "") : $(this).attr("class")));
		setCookie("pr_layout_style", $(this).attr("class"));
		if($(this).attr("class").substr(0,5)=="image" && $("#overlay").is(":checked"))
			setCookie("pr_image_overlay", "overlay");
		else
			setCookie("pr_image_overlay", "");
	});
	$(".style_selector_content #overlay").change(function(){
		if($(this).is(":checked"))
		{
			if($("body").is('[class*="image_"]'))
			{
				$("body").addClass("overlay");
				setCookie("pr_image_overlay", "overlay");
			}
			else
				setCookie("pr_image_overlay", "");
		}
		else
		{
			$("body").removeClass("overlay");
			setCookie("pr_image_overlay", "");
		}
	});
	
	$(".style_selector [name='layout_style']").change(function(){
		if($(this).val()=="boxed")
		{
			$(".site_container").addClass("boxed");
			setCookie("pr_layout", "boxed");
			$(".style_selector_content .selected a").trigger("click", [1]);
		}
		else
		{
			$(".site_container").removeClass("boxed");
			setCookie("pr_layout", "");
			$("body").removeClassPrefix("image");
			$("body").removeClassPrefix("pattern");
			$("body").removeClass("overlay");
		}
		$(".slider").trigger('configuration', ['debug', false, true]);
	});
	
	$(".style_selector [name='menu_type']").change(function(){
		if($(this).val()=="sticky")
		{
			$(".menu_container").addClass("sticky");
			setCookie("pr_menu_type", "sticky");
			if(menu_position==null)
				menu_position = $(".menu_container").offset().top;
			$(document).scroll();
		}
		else
		{
			$(".menu_container").removeClass("sticky");
			setCookie("pr_menu_type", "");
		}
	});
	
	if(marker!=null)
	{
		var color_skin = getCookie("pr_color_skin");
		if(color_skin=="light")
			marker.set("icon", new google.maps.MarkerImage("images/icons/other/map_pointer.png", new google.maps.Size(38, 45), null, new google.maps.Point(18, 44)));
		else if(color_skin=="dark")
			marker.set("icon", new google.maps.MarkerImage("images/icons/other/dark_bg/map_pointer.png", new google.maps.Size(38, 45), null, new google.maps.Point(18, 44)));
		else if(color_skin=="high_contrast")
			marker.set("icon", new google.maps.MarkerImage("images/icons/other/high_contrast/map_pointer.png", new google.maps.Size(38, 45), null, new google.maps.Point(18, 44)));
	}
	$(".style_selector [name='color_skin']").change(function(){
		setCookie("pr_color_skin", $(this).val());
		if($(this).val()=="high_contrast")
			$(".style_selector [name='header_style']").val("style_high_contrast");
		else
			$(".style_selector [name='header_style']").val("style_1");
		$(".style_selector [name='header_style']").trigger("change", [1]);
		location.reload();
	});
	$(".style_selector [name='header_style']").change(function(event, param){
		setCookie("pr_header_style", $(this).val());
		if(parseInt(param)!=1)
		{
			$(".header_top_bar_container").removeClass("border");
			$(".header_top_bar .social_icons").removeClass("dark colors");
			$(".header_container").removeClass("small");
			$(".header_top_bar_container, .header_container, .menu_container").removeClassPrefix("style");
		}
		setCookie("pr_header_top_bar_container", "");
		setCookie("pr_header_container", "");
		setCookie("pr_social_icons", "");
		setCookie("pr_menu_container", "");
		if($(this).val()=="style_1")
		{
			if($(".style_selector [name='color_skin']").val()=="dark")
			{
				if(parseInt(param)!=1)
				{
					$(".header_top_bar_container").addClass("style_4");
					$(".header_container").addClass("style_2");
				}
				setCookie("pr_header_top_bar_container", "style_4");
				setCookie("pr_header_container", "style_2");
			}
			if(parseInt(param)!=1)
				$(".header_top_bar .social_icons").addClass("dark");
			setCookie("pr_social_icons", "dark");
		}
		else if($(this).val()=="style_2")
		{
			if($(".style_selector [name='color_skin']").val()=="dark")
			{
				if(parseInt(param)!=1)
				{
					$(".header_top_bar_container").addClass("style_4");
					$(".header_container").addClass("style_2");
				}
				setCookie("pr_header_top_bar_container", "style_4");
				setCookie("pr_header_container", "style_2");
			}
			if(parseInt(param)!=1)
			{
				$(".header_top_bar .social_icons").addClass("dark");
				$(".menu_container").addClass("style_2");
			}
			setCookie("pr_social_icons", "dark");
			setCookie("pr_menu_container", "style_2");
		}
		else if($(this).val()=="style_3")
		{
			if($(".style_selector [name='color_skin']").val()=="dark")
			{
				if(parseInt(param)!=1)
				{
					$(".header_top_bar_container").addClass("style_4");
					$(".header_container").addClass("style_2");
					$(".header_top_bar .social_icons").addClass("dark");
				}
				setCookie("pr_header_top_bar_container", "style_4");
				setCookie("pr_header_container", "style_2");
				setCookie("pr_social_icons", "dark");
			}
			else
			{
				if(parseInt(param)!=1)
					$(".header_top_bar_container").addClass("style_2 border");
				setCookie("pr_header_top_bar_container", "style_2 border");
			}
			if(parseInt(param)!=1)
				$(".menu_container").addClass("style_3");
			setCookie("pr_menu_container", "style_3");
		}
		else if($(this).val()=="style_4")
		{
			if(parseInt(param)!=1)
				$(".header_container").addClass("small");
			setCookie("pr_header_container", "small");
			if($(".style_selector [name='color_skin']").val()=="dark")
			{
				if(parseInt(param)!=1)
				{
					$(".header_top_bar_container").addClass("style_4");
					$(".header_container").addClass("style_2");
				}
				setCookie("pr_header_top_bar_container", "style_4");
				setCookie("pr_header_container", "style_2 small");
			}
			if(parseInt(param)!=1)
			{
				$(".header_top_bar .social_icons").addClass("dark");
				$(".menu_container").addClass("style_4");
			}
			setCookie("pr_social_icons", "dark");
			setCookie("pr_menu_container", "style_4");
		}
		else if($(this).val()=="style_5")
		{
			
			if($(".style_selector [name='color_skin']").val()=="dark")
			{
				if(parseInt(param)!=1)
				{
					$(".header_top_bar_container").addClass("style_4");
					$(".header_container").addClass("style_2");
				}
				setCookie("pr_header_top_bar_container", "style_4");
				setCookie("pr_header_container", "style_2");
			}
			else
			{
				if(parseInt(param)!=1)
					$(".header_top_bar_container").addClass("style_3");
				setCookie("pr_header_top_bar_container", "style_3");
			}
			if(parseInt(param)!=1)
			{
				$(".header_top_bar .social_icons").addClass("colors");
				$(".menu_container").addClass("style_9");
			}
			setCookie("pr_social_icons", "colors");
			setCookie("pr_menu_container", "style_9");
		}
		else if($(this).val()=="style_6")
		{
			if($(".style_selector [name='color_skin']").val()=="dark")
			{
				if(parseInt(param)!=1)
				{
					$(".header_top_bar_container").addClass("style_4");
					$(".header_container").addClass("style_2");
				}
				setCookie("pr_header_top_bar_container", "style_4");
				setCookie("pr_header_container", "style_2");
			}
			else
			{
				if(parseInt(param)!=1)
					$(".header_top_bar_container").addClass("style_3");
				setCookie("pr_header_top_bar_container", "style_3");
			}
			if(parseInt(param)!=1)
			{
				$(".header_top_bar .social_icons").addClass("colors");
				$(".menu_container").addClass("style_6");
			}
			setCookie("pr_social_icons", "colors");
			setCookie("pr_menu_container", "style_6");
		}
		else if($(this).val()=="style_7")
		{
			if(parseInt(param)!=1)
				$(".header_container").addClass("small");
			setCookie("pr_header_container", "small");
			if($(".style_selector [name='color_skin']").val()=="dark")
			{
				if(parseInt(param)!=1)
				{
					$(".header_top_bar_container").addClass("style_4");
					$(".header_container").addClass("style_2");
					$(".header_top_bar .social_icons").addClass("dark");
				}
				setCookie("pr_header_top_bar_container", "style_4");
				setCookie("pr_header_container", "style_2 small");
				setCookie("pr_social_icons", "dark");
			}
			else
			{
				if(parseInt(param)!=1)
					$(".header_top_bar_container").addClass("style_2 border");
				setCookie("pr_header_top_bar_container", "style_2 border");
			}
			if(parseInt(param)!=1)
				$(".menu_container").addClass("style_7");
			setCookie("pr_menu_container", "style_7");
		}
		else if($(this).val()=="style_8")
		{
			if($(".style_selector [name='color_skin']").val()=="dark")
			{
				if(parseInt(param)!=1)
					$(".header_top_bar_container").addClass("style_4");
				setCookie("pr_header_top_bar_container", "style_4");
			}
			else
			{
				if(parseInt(param)!=1)
					$(".header_top_bar_container").addClass("border");
				setCookie("pr_header_top_bar_container", "border");
			}
			if(parseInt(param)!=1)
			{
				$(".header_top_bar .social_icons").addClass("dark");
				$(".header_container").addClass("style_2");
				$(".menu_container").addClass("style_8");
			}
			setCookie("pr_social_icons", "dark");
			setCookie("pr_header_container", "style_2");
			setCookie("pr_menu_container", "style_8");
		}
		else if($(this).val()=="style_9")
		{
			if($(".style_selector [name='color_skin']").val()=="dark")
			{
				if(parseInt(param)!=1)
					$(".header_top_bar_container").addClass("style_4");
				setCookie("pr_header_top_bar_container", "style_4");
			}
			else
			{
				if(parseInt(param)!=1)
					$(".header_top_bar_container").addClass("border");
				setCookie("pr_header_top_bar_container", "border");
			}
			if(parseInt(param)!=1)
			{
				$(".header_top_bar .social_icons").addClass("dark");
				$(".header_container").addClass("style_2 small");
				$(".menu_container").addClass("style_7");
			}
			setCookie("pr_social_icons", "dark");
			setCookie("pr_header_container", "style_2 small");
			setCookie("pr_menu_container", "style_7");
		}
		else if($(this).val()=="style_10")
		{
			if(parseInt(param)!=1)
				$(".header_container").addClass("style_2");
			setCookie("pr_header_container", "style_2");
			if($(".style_selector [name='color_skin']").val()=="dark")
			{
				if(parseInt(param)!=1)
				{
					$(".header_top_bar_container").addClass("style_4");
					$(".header_top_bar .social_icons").addClass("dark");
				}
				setCookie("pr_header_top_bar_container", "style_4");
				setCookie("pr_social_icons", "dark");
			}
			else
			{
				if(parseInt(param)!=1)
					$(".header_top_bar_container").addClass("style_2");
				setCookie("pr_header_top_bar_container", "style_2");
			}
			if(parseInt(param)!=1)
				$(".menu_container").addClass("style_9");
			setCookie("pr_menu_container", "style_9");
		}
		else if($(this).val()=="style_11")
		{
			if($(".style_selector [name='color_skin']").val()=="dark")
			{
				if(parseInt(param)!=1)
					$(".header_top_bar_container").addClass("style_4");
				setCookie("pr_header_top_bar_container", "style_4");
			}
			if(parseInt(param)!=1)
			{
				$(".header_top_bar .social_icons").addClass("dark");
				$(".header_container").addClass("small");
			}
			setCookie("pr_social_icons", "dark");
			setCookie("pr_header_container", "small");
			if($(".style_selector [name='color_skin']").val()=="dark")
			{
				if(parseInt(param)!=1)
					$(".header_container").addClass("style_2");
				setCookie("pr_header_container", "style_2");
			}
		}
		else if($(this).val()=="style_12")
		{
			if(parseInt(param)!=1)
				$(".header_container").addClass("small");
			setCookie("pr_header_container", "small");
			if($(".style_selector [name='color_skin']").val()=="dark")
			{
				if(parseInt(param)!=1)
				{
					$(".header_top_bar_container").addClass("style_4");
					$(".header_container").addClass("style_2");
					$(".header_top_bar .social_icons").addClass("dark");
				}
				setCookie("pr_header_top_bar_container", "style_4");
				setCookie("pr_header_container", "style_2 small");
				setCookie("pr_social_icons", "dark");
			}
			else
			{
				if(parseInt(param)!=1)
					$(".header_top_bar_container").addClass("style_2 border");
				setCookie("pr_header_top_bar_container", "style_2 border");
			}
			if(parseInt(param)!=1)
				$(".menu_container").addClass("style_2");
			setCookie("pr_menu_container", "style_2");
		}
		else if($(this).val()=="style_13")
		{
			if(parseInt(param)!=1)
				$(".header_top_bar .social_icons").addClass("colors");
			setCookie("pr_social_icons", "colors");
			if($(".style_selector [name='color_skin']").val()=="dark")
			{
				if(parseInt(param)!=1)
				{
					$(".header_top_bar_container").addClass("style_4");
					$(".header_container").addClass("style_2");
				}
				setCookie("pr_header_top_bar_container", "style_4");
				setCookie("pr_header_container", "style_2");
			}
			else
			{
				if(parseInt(param)!=1)
					$(".header_top_bar_container").addClass("style_3");
				setCookie("pr_header_top_bar_container", "style_3");
			}
			if(parseInt(param)!=1)
				$(".menu_container").addClass("style_8");
			setCookie("pr_menu_container", "style_8");
		}
		else if($(this).val()=="style_14")
		{
			if($(".style_selector [name='color_skin']").val()=="dark")
			{
				if(parseInt(param)!=1)
				{
					$(".header_top_bar_container").addClass("style_4");
					$(".header_container").addClass("style_2");
					$(".header_top_bar .social_icons").addClass("dark");
				}
				setCookie("pr_header_top_bar_container", "style_4");
				setCookie("pr_header_container", "style_2");
				setCookie("pr_social_icons", "dark");
			}
			else
			{
				if(parseInt(param)!=1)
					$(".header_top_bar_container").addClass("style_2 border");
				setCookie("pr_header_top_bar_container", "style_2 border");
			}
			if(parseInt(param)!=1)
				$(".menu_container").addClass("style_5");
			setCookie("pr_menu_container", "style_5");
		}
		else if($(this).val()=="style_15")
		{
			if($(".style_selector [name='color_skin']").val()=="dark")
			{
				if(parseInt(param)!=1)
					$(".header_top_bar_container").addClass("style_4");
				setCookie("pr_header_top_bar_container", "style_4");
			}
			else
			{
				if(parseInt(param)!=1)
					$(".header_top_bar_container").addClass("border");
				setCookie("pr_header_top_bar_container", "border");
			}
			if(parseInt(param)!=1)
			{
				$(".header_top_bar .social_icons").addClass("dark");
				$(".header_container").addClass("style_2 small");
				$(".menu_container").addClass("style_10");
			}
			setCookie("pr_social_icons", "dark");
			setCookie("pr_header_container", "style_2 small");
			setCookie("pr_menu_container", "style_10");
		}
		else if($(this).val()=="style_high_contrast")
		{
			if(parseInt(param)!=1)
			{
				$(".header_top_bar_container").addClass("style_5 border");
				$(".header_top_bar .social_icons").addClass("dark");
				$(".header_container").addClass("style_3");
			}
			setCookie("pr_header_top_bar_container", "style_5 border");
			setCookie("pr_social_icons", "dark");
			setCookie("pr_header_container", "style_3");
		}
	});
});
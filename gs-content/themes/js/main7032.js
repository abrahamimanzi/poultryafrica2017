
function supports_mp4() {
  try {
    return !!document.createElement('video').canPlayType('video/mp4; codecs="avc1.42E01E"').replace(/^no$/,'');
  } catch(e) {
    return false;
  }
}

document.documentElement.className += supports_mp4() == true ? ' has-mp4' : ' no-mp4';
document.documentElement.className += (("ontouchstart" in document.documentElement) ? ' touch' : ' no-touch');

if(navigator.userAgent.match(/(iPad|iPhone|iPod)/g))
{
	(function(doc) {
		var metas = doc.querySelectorAll('meta[name="viewport"]'),
		forEach = [].forEach;
		function fixMetas(isFirstTime) {
			var scales = isFirstTime === true ? ['1.0', '1.0'] : ['0.25', '1.6'];
			forEach.call(metas, function(el) {
				el.content = 'width=device-width,minimum-scale=' + scales[0] + ',maximum-scale=' + scales[1];
			});
		}
		fixMetas(true);
		doc.addEventListener('gesturestart', fixMetas, false);
	}(document));
	document.documentElement.className += ' ios';
}
else
{
	document.documentElement.className += ' not-ios';
}
if(navigator.userAgent.match(/(Android)/g))
{
	document.documentElement.className += ' is-andoid';
}


jQuery(document).ready(function($) {	
	//mobile menu 
	 
	$('.menu-item-has-children > a').on('click',function(e){
		var mobile_behave = $('body').find('.hamburger:visible').length < 1;
		var menu = $('.menu > ul');
		if($(this).parent('li').is('.menu-item-open'))
		{
			$(this).parent('li').removeClass('menu-item-open');
			$(this).parent('li').find('.menu-item-open').removeClass('menu-item-open');
		}
		else
		{
			$(this).parent('li').addClass('menu-item-open');		 
			menu.animate({
				scrollTop: $(this).offset().top - menu.offset().top + menu.scrollTop()
			},200);
  
		}		 	
		return mobile_behave;
	});
	 
	
	var hamburger = document.querySelector(".hamburger");	 
	if(hamburger && hamburger!== null){
		var holder = document.querySelector("html");
		hamburger.addEventListener("click", function(e) {  			
			holder.classList.toggle("menu-active");			
		});
	}
	 
 
	var mySwiper = new Swiper ('.swiper-container', {      
//      pagination: '.swiper-pagination',
	  	nextButton: '.swiper-button-next',
      	prevButton: '.swiper-button-prev',
//		scrollbar: '.swiper-scrollbar',
        slidesPerView: 'auto',
        centeredSlides: false,
        paginationClickable: true,
        spaceBetween: 0,		
        scrollbarHide: true,      
        grabCursor: true,	
//		effect: 'coverflow',       
//        coverflow: {
//            rotate: 50,
//            stretch: 0,
//            depth: 100,
//            modifier: 1,
//            slideShadows : true
//        },
		freeMode: true,	
    })
	 
	$('.has-video').on('click',function(e){		
		var holder = $(this);		
		var video = holder.find('video');
		var stream = video.attr('data-stream');	
		e.preventDefault();
									
		if(holder.is('.playing'))
		{			
			video[0].pause(); 
			holder.removeClass('playing').removeClass('open-wrap');			
		}
		else
		{
			holder.addClass('open-wrap');
			holder.addClass('playing');	
			holder.find('img').remove();	
			video[0].play();						   
			//if(Hls.isSupported()) 
//			{
//				var hls = new Hls();
//				hls.loadSource(stream);
//				hls.attachMedia(video[0]);
//				hls.on(Hls.Events.MANIFEST_PARSED,function() {
//					 holder.addClass('playing');	
//					 video[0].play();
//				});					 
//			}	
//			else
//			{
//				//ios
//				var direct_stream = '<source src="'+stream+'" type="application/x-mpegURL">';
//				if(video.find('source').length < 1)
//				{					 
//					$(direct_stream).appendTo(video);
//				}				 
//				holder.addClass('playing');	
//				video[0].play();				 
//			}
		}
	}); 
	  
	$('.search-container').parents('form').on('submit',function(e){		
		var holder = $(this);		
		e.preventDefault();	
		if(holder.is('.text-added') && holder.is('.search-active'))	
		{
			holder[0].submit();			 
		}
		else
		{	
			$('.search-container input').focus();
			holder.addClass('search-active');		
		}
	});
	
	$('.search-container .search-close-button').on('click',function(e){		
		var holder = $(this).parents('form');
		e.preventDefault();	
		holder.removeClass('search-active focused');
		if(holder.find('input').val().length < 1)
		{
			holder.removeClass('text-added');
		}
	});
	
	$('.search-container input').on('focus',function(e){		
		var holder = $(this).parents('form');
		e.preventDefault();	
		holder.addClass('focused');
	});
	
	$('.search-container input').on('blur',function(e){	
		var holder = $(this).parents('form');
		holder.removeClass('focused');		
		if($(this).val().length < 1)
		{
			holder.removeClass('text-added');
		}
	});
	
	$('.search-container input').on('input',function(e){ 
		var holder = $(this).parents('form');
		holder.addClass('text-added');	
		if($(this).val().length < 1)
		{
			holder.removeClass('text-added');		 
			holder.find('label').text(holder.find('label').attr('placeholder'));
		}
	});
	
	$('.checklist-option').find('label').on('click',function(e){ 		 
		$(this).show();
	});
	
	
	if( $('.alphabet').length > 0)
	{
		function delay_each(elem,cl){
			elem.removeClass(cl);			
			elem.each(function(i,el){				 
			   setTimeout(function() {
				  $(el).addClass(cl);
			   }, i * 80);			 
			});
		}
						
		var exhib = $(".list-exhibitor"); 
		ordered = exhib.sort(function(a,b){
			var y = $(a).find(".exhib-list-title").text().toLowerCase();
			var z = $(b).find(".exhib-list-title").text().toLowerCase();			 
			return (y < z) ? -1 : (y > z) ? 1 : 0;			
		});
		$(".exhibitors-holder").html(ordered);
		delay_each($(".list-exhibitor"),"seen");
		 
		
		$('.alphabet > a').on('click',function(event) {
			event.preventDefault();	
			var pressed_letter = $(this).text();
			$('.active-letter').removeClass('active-letter');
			$(this).addClass('active-letter');
			$('.main-active').text($(this).text());
			
			if($(this).is('.show-all'))
			{
				$(".exhibitors-holder").html(ordered);	
				delay_each($(".list-exhibitor"),"seen");
			}
			else if($(this).is('.special'))
			{
				$(".exhibitors-holder").html('');		
				ordered.each(function(){	
					var test_letter = $(this).find(".exhib-list-title").text().substring(0, 1);
					if(!test_letter.match(/[a-z]/i))
					{						 
						$(".exhibitors-holder").append($(this));		
					}
				});
				delay_each($(".list-exhibitor"),"seen");	 
			}
			else
			{				   
				 
				$(".exhibitors-holder").html('');
				ordered.each(function(){	
					if($(this).find(".exhib-list-title").text().substring(0, 1).toLowerCase() == pressed_letter.toLowerCase())
					{					   
					   $(".exhibitors-holder").append($(this));						  
					}
				});
				delay_each($(".list-exhibitor"),"seen");	 
			}
		});	
	}
	
	$('.qa-head').on('click',function(e){		
		var holder = $(this).parents('.qa');		
		e.preventDefault();							
		if(holder.is('.qa-open'))
		{
			holder.removeClass('qa-open').addClass('scales');
			setTimeout(function(){holder.removeClass('scales');},450);
		}
		else
		{
			holder.addClass('qa-open scales');				
			top_q = $(this).offset().top-72;
			setTimeout(function(){holder.removeClass('scales');},450);
			setTimeout(function(){$('html,body').animate({scrollTop:top_q},300);}, 650);
		}
	}); 
	
	//do the ink stuff
	ink_elements = $('.has-ink');	
	ink_elements.on('click',function(e){		 
		
		parent = $(this);
		if(parent.find(".ink").length == 0)
		{
 			parent.prepend("<div class='ink'></div>");
		}
		ink = parent.find(".ink");
		ink.removeClass("ripple");
		if(!ink.height() && !ink.width())
		{ 
			d = Math.min(parent.outerWidth(), parent.outerHeight()) < 200 ? Math.min(parent.outerWidth(), parent.outerHeight()) : 200;
			ink.css({height: d, width: d});
		}
		x = e.pageX - parent.offset().left - ink.width()/2;
		y = e.pageY - parent.offset().top - ink.height()/2;
		ink.css({top: y+'px', left: x+'px'}).addClass("ripple");
	});
 
  
});
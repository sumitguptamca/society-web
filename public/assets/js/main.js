!function(o){"use strict";setTimeout((function(){o("#spinner").length>0&&o("#spinner").removeClass("show")}),1),(new WOW).init(),o(window).scroll((function(){o(this).scrollTop()>45?o(".navbar").addClass("sticky-top shadow-sm"):o(".navbar").removeClass("sticky-top shadow-sm")}));const t=o(".dropdown"),e=o(".dropdown-toggle"),s=o(".dropdown-menu"),i="show";o(window).on("load resize",(function(){this.matchMedia("(min-width: 992px)").matches?t.hover((function(){const t=o(this);t.addClass(i),t.find(e).attr("aria-expanded","true"),t.find(s).addClass(i)}),(function(){const t=o(this);t.removeClass(i),t.find(e).attr("aria-expanded","false"),t.find(s).removeClass(i)})):t.off("mouseenter mouseleave")})),o('[data-toggle="counter-up"]').counterUp({delay:10,time:2e3}),o(".skill").waypoint((function(){o(".progress .progress-bar").each((function(){o(this).css("width",o(this).attr("aria-valuenow")+"%")}))}),{offset:"80%"}),o(window).scroll((function(){o(this).scrollTop()>100?o(".back-to-top").fadeIn("slow"):o(".back-to-top").fadeOut("slow")})),o(".back-to-top").click((function(){return o("html, body").animate({scrollTop:0},1500,"easeInOutExpo"),!1})),o(".testimonial-carousel").owlCarousel({autoplay:!0,smartSpeed:1500,dots:!0,loop:!0,center:!0,responsive:{0:{items:1},576:{items:1},768:{items:2},992:{items:3}}}),o(".vendor-carousel").owlCarousel({loop:!0,margin:45,dots:!1,loop:!0,autoplay:!0,smartSpeed:1e3,responsive:{0:{items:2},576:{items:4},768:{items:6},992:{items:8}}});var a=o(".portfolio-container").isotope({itemSelector:".portfolio-item",layoutMode:"fitRows"});o("#portfolio-flters li").on("click",(function(){o("#portfolio-flters li").removeClass("active"),o(this).addClass("active"),a.isotope({filter:o(this).data("filter")})})),o(".project-carousel").owlCarousel({autoplay:!0,smartSpeed:1e3,items:1,dots:!1,loop:!0,nav:!0,navText:['<i class="bi bi-arrow-left"></i>','<i class="bi bi-arrow-right"></i>']})}(jQuery);
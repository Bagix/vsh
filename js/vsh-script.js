

jQuery("document").ready(function() {

  window.addEventListener("scroll", bringmenu);
  var currentPos = 0;
  function bringmenu() {
    var top = jQuery(window).scrollTop();

    if(currentPos < top && currentPos > 0) {
      jQuery('.mobile-nav-bar').addClass('out');
    } else {
      jQuery('.mobile-nav-bar').removeClass('out');
    }

    if(window.matchMedia("(min-width: 992px)").matches) {
      if(currentPos < top && currentPos > 0) {
        jQuery('#nav').addClass('out');
      } else {
        jQuery('#nav').removeClass('out');
      }
    }

    currentPos = top;
}

  if(readCookie("VR-mode")) {
    if (readCookie("VR-mode") === "1") {
      showVR();
    } else {
      showAR();
    }
  } else {
    if(window.matchMedia("(min-width: 992px)").matches) {
      document.cookie = "VR-mode=1";
      showVR();
    } else {
      document.cookie = "VR-mode=0";
      showAR();
    }
  }

  // Check which language is selected ans hide it in nav.
  var lang_options = jQuery("#nav > .holder > ul > li.lang-switcher a");

  for(let i=0; i<lang_options.length; i++) {
      if(window.location.href.indexOf("/en/") > 0 && lang_options[i].href.indexOf("/en/") > 0) {
          jQuery(lang_options[i]).parent().hide();
      }
      if(window.location.href.indexOf("/pl/") > 0 && lang_options[i].href.indexOf("/pl/") > 0) {
          jQuery(lang_options[i]).parent().hide();
      }
  }

  jQuery("#nav ul > li.sub-menu-trigger > a").on("click", function(e) {
    e.preventDefault();
  });

  jQuery("#go-down").on("click", function() {
    jQuery("html, body").animate({
      scrollTop: jQuery("#discover").offset().top
    }, 800)
  })

  jQuery('#vr-btn').on('click', function() {
    document.cookie = "VR-mode=1";
    showVR();
  })

  jQuery('#ar-btn').on('click', function() {
    document.cookie = "VR-mode=0";
    showAR();
  })

  jQuery(".mobile-nav-bar .trigger").on("click", function() {
    jQuery("#nav").addClass("open");
    jQuery("body").addClass("hold");
    jQuery("html").addClass("hold");
  })
  jQuery("#nav .close-icon").on("click", function() {
    jQuery("#nav").removeClass("open");
    jQuery("body").removeClass("hold");
    jQuery("html").removeClass("hold");
  })

  jQuery(".sub-menu-trigger").on("click", function() {
    if(!jQuery(".sub-menu").hasClass("open")) {
      jQuery(".sub-menu").addClass("open");
    } else {
      jQuery(".sub-menu").removeClass("open");
    }
  })

  function showVR() {
    jQuery("#vr-btn").addClass("active");
    jQuery("#ar-btn").removeClass("active");
    jQuery("#switch-bg").removeClass("right");
    jQuery("#ar-box").removeClass("show");
    jQuery("#vr-box").addClass("show");
  }

  function showAR () {
    jQuery("#vr-btn").removeClass("active");
    jQuery("#ar-btn").addClass("active");
    jQuery("#switch-bg").addClass("right");
    jQuery("#ar-box").addClass("show");
    jQuery("#vr-box").removeClass("show");
  }

  jQuery('.col-2 .wpcf7-list-item > label > input').prop('checked', false);

  jQuery('.col-2 .wpcf7-list-item > label > input').on('change', function() {
    jQuery('.col-2 .wpcf7-list-item > label ').removeClass("selected");
    if (this.checked) {
      var label = this.closest('label')
      jQuery(label).addClass("selected")
    }
  })

})

function readCookie(name) {
  var nameEQ = name + "=";
  var ca = document.cookie.split(";");
  for (var i = 0; i < ca.length; i++) {
      var c = ca[i];
      while (c.charAt(0) == " ") c = c.substring(1, c.length);
      if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
  }
  return null;
}
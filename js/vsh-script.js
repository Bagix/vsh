

jQuery("document").ready(function() {

  if(readCookie("VR-mode")) {
    if (readCookie("VR-mode") === "1") {
      showVR();
    } else {
      showAR();
    }
  } else {
    document.cookie = "VR-mode=1";
    showVR();
  }

  // Check which language is selected ans hide it in nav.
  var lang_options = jQuery("#nav > ul > li.lang-switcher a");
  // if(window.location.href.indexOf("/en/") > 0) {
  //     jQuery("body").attr("data-lang", "eng");
  // }
  for(let i=0; i<lang_options.length; i++) {
      if(window.location.href.indexOf("/en/") > 0 && lang_options[i].href.indexOf("/en/") > 0) {
          jQuery(lang_options[i]).parent().hide();
      }
      if(window.location.href.indexOf("/pl/") > 0 && lang_options[i].href.indexOf("/pl/") > 0) {
          jQuery(lang_options[i]).parent().hide();
      }
  }

  jQuery("#nav > ul > li.sub-menu-trigger > a").on("click", function(e) {
    e.preventDefault();
  });

  jQuery("#go-down").on("click", function() {
    jQuery("html, body").animate({
      scrollTop: jQuery("#discover").offset().top
    }, 800)
  })

  jQuery("#switcher").on('click', function() {
    if (readCookie("VR-mode") === "1") {
      document.cookie = "VR-mode=0";
      showAR();
    } else {
      document.cookie = "VR-mode=1";
      showVR();
    }
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

  jQuery('.wpcf7-list-item > label > input').prop('checked', false);

  jQuery('.wpcf7-list-item > label > input').on('change', function() {
    jQuery('.wpcf7-list-item > label ').removeClass("selected");
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
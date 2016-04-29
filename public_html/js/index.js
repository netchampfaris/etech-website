$(document).ready(function() {
  console.log('reaady');

  navbarFix();

  smoothScroll(300);

  scrollSpy();

});

$(window).load(function() {
  initMap();

  $('#about').addClass('animated fadeInUp');
});


function navbarFix() {
  $(window).scroll(function() {
    var sticky = $('#navbar'),
      scroll = $(window).scrollTop(),
      headerHeight = $('.header').outerHeight();
    console.log('scroll')

    var stickyPosition = sticky.offset().top;

    if (scroll >= headerHeight) sticky.addClass('fixed');
    else sticky.removeClass('fixed');
  });
}

function scrollSpy() {
  // Cache selectors
  var lastId,
    topMenu = $(".navbar"),
    topMenuHeight = topMenu.outerHeight() + 15,
    // All list items
    menuItems = topMenu.find("a"),
    // Anchors corresponding to menu items
    scrollItems = menuItems.map(function() {
      var item = $($(this).attr("href"));
      if (item.length) {
        return item;
      }
    });

  // Bind to scroll
  $(window).scroll(function() {
    // Get container scroll position
    var fromTop = $(this).scrollTop() + topMenuHeight;

    // Get id of current scroll item
    var cur = scrollItems.map(function() {
      if ($(this).offset().top < fromTop)
        return this;
    });
    // Get the id of the current element
    cur = cur[cur.length - 1];
    var id = cur && cur.length ? cur[0].id : "";

    if (lastId !== id) {
      lastId = id;
      // Set/remove active class
      menuItems
        .parent().removeClass("active")
        .end().filter("[href='#" + id + "']").parent().addClass("active");
    }
  });
}

function smoothScroll(duration) {
  $('a[href^="#"]').on('click', function(event) {
    var navH = $('.navbar').outerHeight();
    // console.log(navH);
    if($('#navbar').hasClass('fixed') === false)
      navH *= 2;


    var target = $($(this).attr('href'));
    // console.log(target.offset());
    if (target.length) {
      event.preventDefault();
      $('html, body').animate({
        scrollTop: target.offset().top - navH
      }, duration);
    }
  });
}

function initMap() {
  var var_location = new google.maps.LatLng(19.073159, 72.880370);

        var var_mapoptions = {
          center: var_location,
          zoom: 15
        };

		var var_marker = new google.maps.Marker({
			position: var_location,
            map: var_map,
			title:"E-Tech Academy"});
      // console.log(var_marker);

        var var_map = new google.maps.Map(document.getElementById("map-container"),
            var_mapoptions);
		var_marker.setMap(var_map);
}


//animation for each
function isElementInViewport(elem) {
    var $elem = $(elem);

    // Get the scroll position of the page.
    var scrollElem = ((navigator.userAgent.toLowerCase().indexOf('webkit') != -1) ? 'body' : 'html');
    var viewportTop = $(scrollElem).scrollTop();
    var viewportBottom = viewportTop + $(window).height();

    // Get the position of the element on the page.
    var elemTop = Math.round( $elem.offset().top );
    var elemBottom = elemTop + $elem.height();

    return ((elemTop < viewportBottom) && (elemBottom > viewportTop));
}

// Check if it's time to start the animation.
function checkAnimation(elem) {
    var $elem = $(elem);

    // If the animation has already been started
    if ($elem.hasClass('animated')) return;

    if (isElementInViewport($elem)) {
        // Start the animation
        $elem.addClass('animated fadeInUp');
    }
}

// Capture scroll events
$(window).scroll(function(){
    checkAnimation('#about');
    checkAnimation('#courses');
    checkAnimation('#achievements');
    checkAnimation('#testimonials');
    checkAnimation('#contact');
});

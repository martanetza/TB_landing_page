/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can 
 * always reference jQuery with $, even when in .noConflict() mode.
 *
 * Google CDN, Latest jQuery
 * To use the default WordPress version of jQuery, go to lib/config.php and
 * remove or comment out: add_theme_support('jquery-cdn');
 * ======================================================================== */

(function($) {
  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Roots = {
    // All pages
    common: {
      init: function() {
        // JavaScript to be fired on all pages
      }
    },
    // Home page
    home: {
      init: function() {
        // JavaScript to be fired on the home page
      }
    },
    // About us page, note the change from about-us to about_us.
    about_us: {
      init: function() {
        // JavaScript to be fired on the about us page
      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var namespace = Roots;
      funcname = funcname === undefined ? "init" : funcname;
      if (
        func !== "" &&
        namespace[func] &&
        typeof namespace[func][funcname] === "function"
      ) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      UTIL.fire("common");

      $.each(document.body.className.replace(/-/g, "_").split(/\s+/), function(
        i,
        classnm
      ) {
        UTIL.fire(classnm);
      });
    }
  };

  $(document).ready(UTIL.loadEvents);
})(jQuery); // Fully reference jQuery after this point.

let randomValue;
let allObj = document.querySelectorAll(
  ".obj-1, .obj-2, .obj-3, .obj-4, .obj-5, .obj-6"
);
let i = 0;
let value = 0;
while (value < 5) {
  i++;
  value++;
  TweenMax.to(allObj[i], 8, {
    delay: i,
    y: "-=150",
    opacity: 0,
    repeat: 1
  });
}
var path = document.querySelector(".cls-8");
var path_road = document.querySelector(".cls-4");
var l = path_road.getTotalLength();
// TweenMax.set(path, { strokeDasharray: l });
// TweenMax.fromTo(path, 5, { strokeDashoffset: l }, { strokeDashoffset: 0 });
var tl_hand = new TimelineMax({
  repeat: 0,
  repeatDelay: 0,
  delay: 15
});
tl_hand.to(path, 5, {
  opacity: 1
});
tl_hand.to(path, 0.5, {
  x: -550,
  y: -250
});
tl_hand.to(path, 0.3, {
  rotation: 15,
  yoyo: true,
  repeat: 8,
  transformOrigin: "center"
});
tl_hand.to(".cls-3", 2, {
  opacity: 1
});
tl_hand.to(".cls-2", 2, {
  opacity: 0.3
});
TweenMax.set(path_road, { strokeDasharray: l });
tl_hand.fromTo(path_road, 2, { strokeDashoffset: l }, { strokeDashoffset: 0 });
tl_hand.to(path, 0.3, {
  rotation: 180,
  yoyo: false,
  transformOrigin: "center"
});
tl_hand.to(".cls-7", 0.1, {
  fill: "#f7e659"
});
tl_hand.to(path, 3, {
  bezier: {
    values: [
      { x: -600, y: -165 },
      { x: -550, y: -175 },
      { x: -500, y: -185 },
      { x: -450, y: -195 },
      { x: -400, y: -210 },
      { x: -350, y: -230 },
      { x: -300, y: -245 },
      { x: -250, y: -265 },
      { x: -200, y: -295 },
      { x: -150, y: -350 },
      { x: -100, y: -450 }
    ],
    type: "thru"
  },
  ease: Linear.easeNone
});
tl_hand.to(path, 2, {
  opacity: 0
});
tl_hand.to(".cls-13a", 1, {
  opacity: 1
});
tl_hand.to(".cls-13", 1, {
  opacity: 0
});
TweenMax.to(".up", 1, {
  x: -1,
  y: -1,
  repeat: -1,
  repeatDelay: 2,
  ease: Power1.easeOut
});
TweenMax.to(".down", 1, {
  x: 1.2,
  y: 1.2,
  repeat: -1,
  repeatDelay: 2,
  ease: Power1.easeOut
});
TweenMax.to(".hand", 1, {
  y: -120,
  repeat: 25,
  yoyo: true,
  ease: Power1.easeOut
});

//change color header

document
  .querySelector(".navbar-header button")
  .addEventListener("click", () => {
    document.querySelector(".navbar-header").classList.toggle("nav-bg-color");
  });

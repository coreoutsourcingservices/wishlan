(function ($) {
  "use strict";

  // color switcher

  if ($("#styleOptions").length) {
    $("#styleOptions").styleSwitcher({
      hasPreview: false,
      fullPath: "css/colors/",
      cookie: {
        expires: 999,
        isManagingLoad: true
      }
    });
  }

  if ($(".style-switcher").length) {
    $("#switcher-toggler").on("click", function (e) {
      e.preventDefault();
      $(".style-switcher").toggleClass("active");
    });
  }

  // --- Cookies-related code removed to fix 'Cookies is not defined' error ---
  $("#styleOptions .color-default").on("click", function () {
    let thmLogo = "images/nav-logo.png";
    let dLogo = "images/logo-dark.png";
    let fLogo = "images/nav-logo.png";
    let favicon = "images/favicon.png";
    let error404 = "images/icons/404-image.png";

    $("#thm-logo").attr("src", thmLogo);
    $("#dLogo").attr("src", dLogo);
    $("#fLogo").attr("src", fLogo);
    $("#error-404").attr("src", error404);
    $("#fav-shortcut").attr("href", favicon);
    $("#fav-icon").attr("href", favicon);
  });

  $("#styleOptions .color-2").on("click", function () {
    let thmLogo = "images/colors/color-2/nav-logo.png";
    let dLogo = "images/colors/color-2/logo-dark.png";
    let fLogo = "images/colors/color-2/nav-logo.png";
    let favicon = "images/colors/color-2/favicon.png";
    let error404 = "images/colors/color-2/icons/404-image.png";

    $("#thm-logo").attr("src", thmLogo);
    $("#dLogo").attr("src", dLogo);
    $("#fLogo").attr("src", fLogo);
    $("#error-404").attr("src", error404);
    $("#fav-shortcut").attr("href", favicon);
    $("#fav-icon").attr("href", favicon);
  });

  $("#styleOptions .color-3").on("click", function () {
    let thmLogo = "images/colors/color-3/nav-logo.png";
    let dLogo = "images/colors/color-3/logo-dark.png";
    let fLogo = "images/colors/color-3/nav-logo.png";
    let favicon = "images/colors/color-3/favicon.png";
    let error404 = "images/colors/color-3/icons/404-image.png";

    $("#thm-logo").attr("src", thmLogo);
    $("#dLogo").attr("src", dLogo);
    $("#fLogo").attr("src", fLogo);
    $("#error-404").attr("src", error404);
    $("#fav-shortcut").attr("href", favicon);
    $("#fav-icon").attr("href", favicon);
  });

  $("#styleOptions .color-4").on("click", function () {
    let thmLogo = "images/colors/color-4/nav-logo.png";
    let dLogo = "images/colors/color-4/logo-dark.png";
    let fLogo = "images/colors/color-4/nav-logo.png";
    let favicon = "images/colors/color-4/favicon.png";
    let error404 = "images/colors/color-4/icons/404-image.png";

    $("#thm-logo").attr("src", thmLogo);
    $("#dLogo").attr("src", dLogo);
    $("#fLogo").attr("src", fLogo);
    $("#error-404").attr("src", error404);
    $("#fav-shortcut").attr("href", favicon);
    $("#fav-icon").attr("href", favicon);
  });

  $("#styleOptions .color-5").on("click", function () {
    let thmLogo = "images/colors/color-5/nav-logo.png";
    let dLogo = "images/colors/color-5/logo-dark.png";
    let fLogo = "images/colors/color-5/nav-logo.png";
    let favicon = "images/colors/color-5/favicon.png";
    let error404 = "images/colors/color-5/icons/404-image.png";

    $("#thm-logo").attr("src", thmLogo);
    $("#dLogo").attr("src", dLogo);
    $("#fLogo").attr("src", fLogo);
    $("#error-404").attr("src", error404);
    $("#fav-shortcut").attr("href", favicon);
    $("#fav-icon").attr("href", favicon);
  });

  $("#styleOptions .color-6").on("click", function () {
    let thmLogo = "images/colors/color-6/nav-logo.png";
    let dLogo = "images/colors/color-6/logo-dark.png";
    let fLogo = "images/colors/color-6/nav-logo.png";
    let favicon = "images/colors/color-6/favicon.png";
    let error404 = "images/colors/color-6/icons/404-image.png";

    $("#thm-logo").attr("src", thmLogo);
    $("#dLogo").attr("src", dLogo);
    $("#fLogo").attr("src", fLogo);
    $("#error-404").attr("src", error404);
    $(".bg-image").css("background-image", "url(" + bannerBg + ")");
    $("#fav-shortcut").attr("href", favicon);
    $("#fav-icon").attr("href", favicon);
  });
  
  // All cookie-related "set" and "get" lines have been removed.

})(jQuery);
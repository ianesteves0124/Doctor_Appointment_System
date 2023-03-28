"use strict";

function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
  $("#name").text(profile.getName());
  $("#email").text(profile.getEmail());
  $("#image").attr('src', profile.getImageUrl());
  $(".data").css("display", "block");
  $("g.g-signin2").css("display", "none");
}

function signOut() {
  var auth2 = gapi.auth2.getAuthInstance();
  auth2.signOut().then(function () {
    alert("You have Signed Out Successfully!");
    $("g.g-signin2").css("display", "block");
    $(".data").css("display", "none");
  });
}
//# sourceMappingURL=testing api.dev.js.map

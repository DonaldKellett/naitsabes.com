/*
 * contact.js
 * A simple script that powers the contact form located at /index.php among other things
 * (c) Donald Sebastian Leung. All rights reserved.
 */

window.onload = function () {
  // Enable strict mode
  "use strict";

  // Load my Codewars badge asynchronously
  // (Previously when the badge was loaded synchronously, it sometimes
  // blocked the entire page from rendering for about 15-20 seconds when
  // Codewars servers were down or lagging which is highly undesirable)
  var cwBadgeReq = new XMLHttpRequest();
  cwBadgeReq.onreadystatechange = function () {
    if (this.readyState === 4 && this.status === 200)
      document.getElementById("badge").innerHTML = this.responseText;
  };
  cwBadgeReq.open("GET", "assets/php/badge.php", true);
  cwBadgeReq.send();

  // Repurpose submit button in contact form to work asynchronously
  document.getElementById("submit").onclick = function (event) {
    event.preventDefault();
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
      if (this.readyState === 4 && this.status === 200) {
        document.getElementById("status").innerHTML = this.responseText;
        window.setTimeout(function () {
          document.getElementById("status").innerHTML = "";
        }, 5000);
      }
    };
    xhttp.open("POST", "assets/php/contact.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(
      "name=" + encodeURIComponent(document.getElementById("name").value) + "&" +
      "email=" + encodeURIComponent(document.getElementById("email").value) + "&" +
      "message=" + encodeURIComponent(document.getElementById("message").value)
    );
  };
};

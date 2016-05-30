<?php

  #we use HTML entitities to hide latin text, just a little trick
  echo "<i>&#67;&#111;&#112;&#121;&#114;&#105;&#103;&#104;&#116;
  &#32;(&#99;)&#32;".date("Y")."</i>";


?>

</div>  <!-- w3-content -->

<!-- http://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_templates_band&stacked=h -->
<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>

<!DOCTYPE html>
<html><body>
<p id="demo"></p>
<p id="demo2"></p>
<script>
v=loadXMLDoc();
function loadXMLDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML =
      this.responseText;
    }
  };
xhttp.open("GET", "https://pagalbanaya.000webhostapp.com/Li1.php", true);
  xhttp.send();
}
  </script></body></html>

<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<style type="text/css">
body {
    font-family: Lato, 'Product Sans', Impact, "Times New Roman", sans-serif;
    color: #000000;
}
</style>
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://seetow.ga/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="https://seetow.ga/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
<script>
function showRSS(str) {
  if (str.length==0) { 
    document.getElementById("rssOutput").innerHTML="";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("rssOutput").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","getrss.php?q="+str,true);
  xmlhttp.send();
}
</script>
</head><body>
  <nav class="light-blue lighten-1" role="navigation">
<ul id="dropdown5" class="dropdown-content">
  <li><a href="/ch-prc/">Chinese (PRC)</a></li>
  <li class="divider"></li>
      <li><a href="/jp-jp/">Japanese (JPN)</a></li>
  <li class="divider"></li>
      <li><a href="/en/oldindex.php">English (Old)</a></li>
  <li class="divider"></li>
      <li><a href="/en/mobile">Mobile (Old)</a></li>
  <li class="divider"></li>
      <li><a href="https://translate.google.com/translate?hl=en&sl=auto&tl=fr&u=https%3A%2F%2Fseetow.ga" target="_blank">Other</a></li>
</ul>
    <div class="nav-wrapper container"><a id="logo-container" href="/" class="brand-logo"><i class="material-icons">arrow_back</i></a>
      <ul class="right hide-on-med-and-down">
      <li><a class="dropdown-button" href="#!" data-activates="dropdown5"><i class="material-icons">language</i></a></li>
      </ul>
  </nav>
<form>
<select onchange="showRSS(this.value)">
<option value="">Select a news website:</option>
<option value="Google">The Straits Times</option>
<option value="NBC">BBC News</option>
<option value="pcmr">Reddit PCMasterRace</option>
<option value="rnews">Reddit News</option>
<option value="NYTimes">New York Times</option>
</select>
</form>
<br>
<div id="rssOutput">News will be listed here.</div>
<br /><br /><br /><br /><br />
  <footer class="page-footer orange">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">About Me</h5>
          <p class="grey-text text-lighten-4">I love working with HTML, PHP, Node.js and related programming languages. Now if only my web hosting supported CGI and Perl, I can start making web games!</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Contact Us</h5>
          <ul>
            <li><a class="white-text" target="_blank" href="https://www.google.com.sg/maps/place/ACS+Independent/@1.3027021,103.7783637,17z/data=!3m1!4b1!4m5!3m4!1s0x31da1a5eaea609f1:0xc1dccf9e79c299cf!8m2!3d1.3027021!4d103.7805524">Location</a></li>
            <li><a class="white-text" href="tel:+65-9421-9292">Call Us</a></li>
            <li><a class="white-text" href="mailto:admin@seetow.ga">Drop an email</a></li>
            <li><a class="white-text" target="_blank" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Get Rickrolled</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">What made this site possible</h5>
          <ul>
            <li><a class="white-text" target="_blank" href="//byet.host">Byethost</a></li>
            <li><a class="white-text" target="_blank" href="//intel.com">Intel</a></li>
            <li><a class="white-text" target="_blank" href="//cloudflare.com">CloudFlare</a></li>
            <li><a class="white-text" target="_blank" href="//freenom.com">Freenom</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      © 2017 <a class="orange-text text-lighten-3" href="https://seetow.ga">See Tow.</a> All Rights Reserved. Made using Materialise.
      </div>
    </div>
  </footer>
</body>
</html>
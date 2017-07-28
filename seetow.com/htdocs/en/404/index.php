<!DOCTYPE html>
<html lang="en">
<head>
<style type="text/css">
.instagram-media{
  margin: 15px auto !important;
}
</style>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>See Tow's Website</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
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
  <nav class="light-blue lighten-1" >
    <div class="nav-wrapper">
      <form id="search">
        <div class="input-field">
          <input id="search2" type="search" required>
          <label class="label-icon" for="search"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
        </div>
      </form>
    </div>
  </nav>
<script>
  var form       = document.querySelector('#search'),
      text_field = document.querySelector('#search2');

  function submitHandler(){
    // build the new url and open a new window
    var url = form.action + 'https://google.com.sg/search?q=site:seetow.ga%20' + text_field.value;
    window.open(url);

    // prevent form from being submitted because we already 
    // called the request in a new window
    return false;
  }

  // attach custom submit handler
  form.onsubmit = submitHandler;
</script>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center orange-text">Error 404</h1>
      <div class="row center">
        <h5 class="header col s12 light"><i class="material-icons">https</i>See Tow's Website does not contain the specified document!</h5>
      </div>
      <div class="row center">
<?php
echo("<br /> <br />Your User-Agent Is:");
echo("<br />".$_SERVER['HTTP_USER_AGENT']."");

?>
<br />
<?php

$user_agent     =   $_SERVER['HTTP_USER_AGENT'];

function getOS() { 

    global $user_agent;

    $os_platform    =   "Unknown OS Platform";

    $os_array       =   array(
                            '/windows nt 10/i'     =>  'Windows 10 ',
                            '/windows nt 6.3/i'     =>  'Windows 8.1',
                            '/windows nt 6.2/i'     =>  'Windows 8',
                            '/windows nt 6.1/i'     =>  'Windows 7',
                            '/windows nt 6.0/i'     =>  'Windows Vista',
                            '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                            '/windows nt 5.1/i'     =>  'Windows XP',
                            '/windows xp/i'         =>  'Windows XP',
                            '/windows nt 5.0/i'     =>  'Windows 2000',
                            '/windows me/i'         =>  'Windows ME',
                            '/win98/i'              =>  'Windows 98',
                            '/win95/i'              =>  'Windows 95',
                            '/win16/i'              =>  'Windows 3.11',
                            '/macintosh|mac os x/i' =>  'OS X',
                            '/mac_powerpc/i'        =>  'Mac OS 9',
                            '/linux/i'              =>  'Linux',
                            '/ubuntu/i'             =>  'Ubuntu',
                            '/iphone/i'             =>  'iPhone',
                            '/ipod/i'               =>  'iPod',
                            '/ipad/i'               =>  'iPad',
                            '/android/i'            =>  'Android',
                            '/blackberry/i'         =>  'BlackBerry',
                            '/webos/i'              =>  'Mobile',
                            '/iphone/i'              =>  'iOS',
                        );

    foreach ($os_array as $regex => $value) { 

        if (preg_match($regex, $user_agent)) {
            $os_platform    =   $value;
        }

    }   

    return $os_platform;

}

function getBrowser() {

    global $user_agent;

    $browser        =   "Unknown Browser";

    $browser_array  =   array(
                            '/msie/i'       =>  'I cannot believe you are still using IE.',
                            '/firefox/i'    =>  'Firefox',
                            '/safari/i'     =>  'Safari on Mac OS X',
                            '/chrome/i'     =>  'Google Chrome ',
                            '/edge/i'       =>  'Edge (ok, but seriously get Chrome or Firefox!)',
                            '/opera/i'      =>  'Opera',
                            '/netscape/i'   =>  'Netscape (THAT BROWSER FROM 1998)',
                            '/maxthon/i'    =>  'WTF DO YOU USE MAXTHON?!',
                            '/konqueror/i'  =>  'Konqueror',
                            '/mobile/i'     =>  'A Mobile Browser',
                            '/iphone/i'     =>  'an iPhone',
                        );

    foreach ($browser_array as $regex => $value) { 

        if (preg_match($regex, $user_agent)) {
            $browser    =   $value;
        }

    }

    return $browser;

}


$user_os        =   getOS();
$user_browser   =   getBrowser();

$device_details =   "We suspect you are using <b>".$user_browser."</b> on <b>".$user_os."</b>.";

print_r($device_details);
?>
      </div>
      <br><br>

    </div>
  </div>


  <div class="container">

    <div class="section">
<a name="start"></a>
<p>Looks like you followed a dead link! Try searching for your item using the search bar above or going to the homepage by clicking the left facing arrow!</p>
</div>
  </div>

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


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="/js/materialize.js"></script>
  <script src="/js/init.js"></script>

  </body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-9218984794093639",
    enable_page_level_ads: true
  });
</script>
<?php

function ip_info($ip = NULL, $purpose = "location", $deep_detect = TRUE) {
    $output = NULL;
    if (filter_var($ip, FILTER_VALIDATE_IP) === FALSE) {
        $ip = $_SERVER["HTTP_CF_CONNECTING_IP"];
        if ($deep_detect) {
            if (filter_var(@$_SERVER['HTTP_X_FORWARDED_FOR'], FILTER_VALIDATE_IP))
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
            if (filter_var(@$_SERVER['HTTP_CLIENT_IP'], FILTER_VALIDATE_IP))
                $ip = $_SERVER['HTTP_CLIENT_IP'];
        }
    }
    $purpose    = str_replace(array("name", "\n", "\t", " ", "-", "_"), NULL, strtolower(trim($purpose)));
    $support    = array("country", "countrycode", "state", "region", "city", "location", "address");
    $continents = array(
        "AF" => "Africa",
        "AN" => "Antarctica",
        "AS" => "Asia",
        "EU" => "Europe",
        "OC" => "Australia (Oceania)",
        "NA" => "North America",
        "SA" => "South America"
    );
    if (filter_var($ip, FILTER_VALIDATE_IP) && in_array($purpose, $support)) {
        $ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));
        if (@strlen(trim($ipdat->geoplugin_countryCode)) == 2) {
            switch ($purpose) {
                case "location":
                    $output = array(
                        "city"           => @$ipdat->geoplugin_city,
                        "state"          => @$ipdat->geoplugin_regionName,
                        "country"        => @$ipdat->geoplugin_countryName,
                        "country_code"   => @$ipdat->geoplugin_countryCode,
                        "continent"      => @$continents[strtoupper($ipdat->geoplugin_continentCode)],
                        "continent_code" => @$ipdat->geoplugin_continentCode
                    );
                    break;
                case "address":
                    $address = array($ipdat->geoplugin_countryName);
                    if (@strlen($ipdat->geoplugin_regionName) >= 1)
                        $address[] = $ipdat->geoplugin_regionName;
                    if (@strlen($ipdat->geoplugin_city) >= 1)
                        $address[] = $ipdat->geoplugin_city;
                    $output = implode(", ", array_reverse($address));
                    break;
                case "city":
                    $output = @$ipdat->geoplugin_city;
                    break;
                case "state":
                    $output = @$ipdat->geoplugin_regionName;
                    break;
                case "region":
                    $output = @$ipdat->geoplugin_regionName;
                    break;
                case "country":
                    $output = @$ipdat->geoplugin_countryName;
                    break;
                case "countrycode":
                    $output = @$ipdat->geoplugin_countryCode;
                    break;
            }
        }
    }
    return $output;
}

 
//ASSIGN VARIABLES TO USER INFO
$time = date("M j G:i:s Y"); 
$ip = getenv('HTTP_CF_CONNECTING_IP');
$userAgent = getenv('HTTP_USER_AGENT');
$referrer = getenv('HTTP_REFERER');
$query = getenv('QUERY_STRING');
 
//COMBINE VARS INTO OUR LOG ENTRY
$msg = "IP Address: " . $ip . " Time: " . $time . " Referrer: " . $referrer . " Query String: " . $query . " User Agent: " . $userAgent . " Country " . ip_info("Visitor", "Address");
 
//CALL OUR LOG FUNCTION
writeToLogFile($msg);
 
function writeToLogFile($msg) {
     $today = date("Y_m_d"); 
     $logfile = $today."_log.txt"; 
     $dir = 'logs';
     $saveLocation=$dir . '/' . $logfile;
     if  (!$handle = @fopen($saveLocation, "a")) {
          exit;
     }
     else {
          if (@fwrite($handle,"$msg\r\n") === FALSE) {
               exit;
          }
   
          @fclose($handle);
     }
}
 
?>
<style type="text/css">
.instagram-media{
  margin: 15px auto !important;
}
body {
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
<ul id="dropdown1" class="dropdown-content">
      <li><a target="_blank" href="https://www.youtube.com/seetowshiunhou">YouTube</a></li>
  <li class="divider"></li>
      <li><a target="_blank" href="/twitter">Twitter</a></li>
  <li class="divider"></li>
      <li><a target="_blank" href="https://steamcommunity.com/id/hi1307/">Steam</a></li>
  <li class="divider"></li>
      <li><a target="_blank" href="https://plus.google.com/+JohnTanseetowsh">Google+</a></li>
  <li class="divider"></li>
      <li><a target="_blank" href="https://www.facebook.com/profile.php?id=100008235543326">Facebook</a></li>
  <li class="divider"></li>
      <li><a target="_blank" href="https://www.instagram.com/seetowsh/">Instagram</a></li>
  <li class="divider"></li>
      <li><a target="_blank" href="https://reddit.com/u/hi1307">Reddit</a></li>
</ul>
<ul id="dropdown2" class="dropdown-content">
      <li><a target="_blank" href="http://ratings.fide.com/card.phtml?event=5816130">FIDE</a></li>
  <li class="divider"></li>
      <li><a target="_blank" href="http://www.rtsoft.com/forums/member.php?139947-hi1307">RTSoft Forums</a></li>
  <li class="divider"></li>
      <li><a target="_blank" href="http://www.rtsoft.com/forums/member.php?218941-hi1307-of-Legend">RTSoft Forums (2)</a></li>
  <li class="divider"></li>
      <li><a target="_blank" href="http://boombeach.wikia.com/wiki/User:Hi1307">Boom Beach Wiki</a></li>
  <li class="divider"></li>
      <li><a target="_blank" href="http://minecraft.gamepedia.com/User:Hi1307">Minecraft Wiki</a></li>
  <li class="divider"></li>
      <li><a target="_blank" href="http://growtopia.wikia.com/wiki/User:Hi1307">Growtopia Wiki</a></li>
  <li class="divider"></li>
      <li><a target="_blank" href="http://forums.sgtrains.com/member.php?action=profile&uid=1744/">SGTrains Forums</a></li>
</ul>
<ul id="dropdown3" class="dropdown-content">
      <li><a target="_blank" href="/dinosaur/chrome">Chrome Dinosaur (With Internet!)</a></li>
  <li class="divider"></li>
      <li><a target="_blank" href="/en/games/solitaire/">Solitaire</a></li>
  <li class="divider"></li>
      <li><a target="_blank" href="/en/games/minesweeper/">Minesweeper</a></li>
</ul>
<ul id="dropdown4" class="dropdown-content">
  <li><a href="/welcome/">About</a></li>
  <li class="divider"></li>
      <li><a href="/en/blog/latest">Blog</a></li>
  <li class="divider"></li>
      <li><a href="/changelog">Changelog</a></li>
  <li class="divider"></li>
      <li><a href="/register/">Register!</a></li>
  <li class="divider"></li>
      <li><a target="_blank" href="/welcome/my%20files/">MY FILES</a></li>
  <li class="divider"></li>
      <li><a target="_blank" href="/en/rss/">News</a></li>
</ul>
<ul id="dropdown5" class="dropdown-content">
  <li><a href="/ch-prc/">Chinese (PRC)</a></li>
  <li class="divider"></li>
      <li><a href="/jp-jp/">Japanese (JPN)</a></li>
  <li class="divider"></li>
      <li><a href="/en/oldindex.php">English (Old)</a></li>
  <li class="divider"></li>
      <li><a href="/en/mobile">Mobile (Old)</a></li>
</ul>
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo"><i class="material-icons">home</i></a>
      <ul class="right hide-on-med-and-down">
      <li><a class="dropdown-button" href="#!" data-activates="dropdown1"><i class="material-icons">group</i></a></li>
      <li><a class="dropdown-button" href="#!" data-activates="dropdown2"><i class="material-icons">forum</i></a></li>
      <li><a class="dropdown-button" href="#!" data-activates="dropdown3"><i class="material-icons">videogame_asset</i></a></li>
      <li><a class="dropdown-button" href="#!" data-activates="dropdown4"><i class="material-icons">explore</i></a></li>
      <li><a href="/html/"><i class="material-icons">code</i></a></li>
      <li><a target="_blank" href="https://hi1307.carto.com/builder/1a581f66-353a-11e7-84ef-0e3ff518bd15/embed?state=%7B%22map%22%3A%7B%22ne%22%3A%5B1.2317471514699085%2C103.58081817626955%5D%2C%22sw%22%3A%5B1.4836751010717422%2C104.06421661376953%5D%2C%22center%22%3A%5B1.357714408032226%2C103.82251739501955%5D%2C%22zoom%22%3A12%7D%7D"><i class="material-icons">map</i></a></li>
      <li><a href="/logs/"><i class="material-icons">access_time</i></a></li>
      <li><a class="dropdown-button" href="#!" data-activates="dropdown5"><i class="material-icons">language</i></a></li>
      <li><a href="https://translate.google.com/translate?hl=en&sl=auto&tl=fr&u=https%3A%2F%2Fseetow.com" target="_blank"><i class="material-icons">translate</i></a></li>
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
    var url = form.action + 'https://google.com.sg/search?q=site:seetow.com%20' + text_field.value;
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
      <h1 class="header center orange-text">See Tow's Website</h1>
      <div class="row center">
        <h5 class="header col s12 light">ウェブサイトに <em><? echo $_SERVER["HTTP_CF_CONNECTING_IP"]; ?></em> を歓迎します</h5>
      </div>
      <div class="row center">
        <a href="#start" id="download-button" class="btn-large waves-effect waves-light orange">開始</a><br />
<a class="orange-text text-lighten-3" href="#">すべての言語</a>
<?php
echo("<br /> <br />インターネットブラウザ:");
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
                            '/msie/i'       =>  'Internet Explorer.',
                            '/firefox/i'    =>  'Firefox',
                            '/safari/i'     =>  'Safari',
                            '/chrome/i'     =>  'Google Chrome ',
                            '/edge/i'       =>  'Microsoft Edge',
                            '/opera/i'      =>  'Opera',
                            '/netscape/i'   =>  'Netscape (THAT BROWSER FROM 1998)',
                            '/maxthon/i'    =>  'Maxthon',
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

$device_details =   "<b>".$user_os."</b>オペレーティングシステムで<b>".$user_browser."</b>を使用しています";

print_r($device_details);
?>
<br />
<p>都市、国 <b><?php echo ip_info("Visitor", "Address"); ?></b>.</p>
      </div>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Main1 -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-9218984794093639"
     data-ad-slot="3565267507"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<script> 
  
  // Run after all the page elements have loaded
  window.onload = function(){ 
  
    // This will take care of asynchronous Google ads
    setTimeout(function() { 
      
      // We are targeting the first banner ad of AdSense
      var ad = document.querySelector("ins.adsbygoogle");
      
      // If the ad contains no innerHTML, ad blockers are at work
      if (ad && ad.innerHTML.replace(/\s/g, "").length == 0) {
        
        // Since ad blocks hide ads using CSS too
        ad.style.cssText = 'display:block !important'; 
        
        // You can put any text, image or even IFRAME tags here
        ad.innerHTML = '<p>Please turn off your adblocker for the best experience on See Tow's Website</p>';
      
      }
      
    }, 2000); // The ad blocker check is performed 2 seconds after the page load 
  }; 
  
</script>
      <br><br>

    </div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <h4 class="header center orange-text">New Website Design Goals</h4>
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">flash_on</i></h2>
            <h5 class="center">Speeds up development</h5>

            <p class="light">CSS and Javascript is now streamlined, meaning smaller file sizes and easier code testing and debugging. For users, it means faster page loadtimes and better AMP / Mobile compatibility!</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">group</i></h2>
            <h5 class="center">User Experience Focused</h5>

            <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">settings</i></h2>
            <h5 class="center">Easy to work with</h5>

            <p class="light">Better code examples mean faster development and overall a much better website due to more frequent updates. Additionally, using Google's Material Design enables me to utilise Google's resources to aid website development.</p>
          </div>
        </div>
      </div>

    </div>
    <br><br>

    <div class="section">
<a name="start"></a>
      <h4 class="header center orange-text">Latest YouTube Video</h4>
<iframe width="100%" height="500" src="https://www.youtube.com/embed?max-results=1&rel=0&listType=user_uploads&list=seetowshiunhou&vq=hd720&autoplay=1&cc_load_policy=1&rel=0&theme=light&color=white&autohide=0" frameborder="0"></iframe>
<video src="https://cdn.rawgit.com/Hi1307/seetowcdn/ebc65e5c/Music%20Videos/National%20Anthem%20of%20Singapore.mp4" width="100%" type="video/mp4" autoplay="true" controls="false" loop></video>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- YouTube - Stream -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-9218984794093639"
     data-ad-slot="8037336303"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<h4 class="header center orange-text">Twitch/YouTube Livestream</h4>
<p class="center orange-text">Friday 5pm/7pm, Saturday 1pm/3pm</p>
<br />
<?php
$streamChannel = "hi1307";  

$json_array = json_decode(file_get_contents("https://api.twitch.tv/kraken/streams/hi1307?client_id=qkqw4nj06we2k8upndf79w0q180a86"), true);  

if(isset($json_array['streams'][0]['channel'])) {  
echo '<iframe src="https://player.twitch.tv/?channel=hi1307" frameborder="0" allowfullscreen="false" scrolling="no" height="100%" width="500"></iframe>';  
} else {  
echo '<p class="center orange-text">Hi1307 is not streaming to Twitch</p>';  
}  

?>
<br />
<?php
$API_KEY = 'AIzaSyBhQjLLm_PxvUyAV7QAILaEb9Sg9dJoNX0';
$ChannelID = 'UCqRKAWBLo7zF4u44oXUqHaQ';

$channelInfo = 'https://www.googleapis.com/youtube/v3/search?part=snippet&channelId='.$ChannelID.'&type=video&eventType=live&key='.$API_KEY;

$extractInfo = file_get_contents($channelInfo);
$extractInfo = str_replace('},]',"}]",$extractInfo);
$showInfo = json_decode($extractInfo, true);

if($showInfo['pageInfo']['totalResults'] === 0){

echo '<p class="center orange-text">Hi1307 is not streaming to YouTube</p>';

}else{

echo '<iframe width="100%" height="500" src="https://www.youtube.com/embed/z0rcIb20o3k?cc_load_policy=1&rel=0&theme=light&color=white&autohide=0" frameborder="0"></iframe>';

}
?>
      <h4 class="header center orange-text">Latest Liked Instagram Photo</h4>
<blockquote class="instagram-media" data-instgrm-captioned data-instgrm-version="7" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:8px;"> <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:30.925925925925924% 0; text-align:center; width:100%;"> <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div></div> <p style=" margin:8px 0 0 0; padding:0 4px;"> <a href="https://www.instagram.com/p/BWXizdej_2T/" style=" color:#000; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none; word-wrap:break-word;" target="_blank">We’re just 7 days down to MG Week! 🎉🎉🎉 Get ready to kick start a week of fun and bonding to celebrate 130 years of God’s blessings! #LiftHighHerBanner</a></p> <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">A post shared by MG Shouts (@mgshouts_) on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2017-07-10T13:33:34+00:00">Jul 10, 2017 at 6:33am PDT</time></p></div></blockquote> <script async defer src="//platform.instagram.com/en_US/embeds.js"></script>
      <h4 class="header center orange-text">Latest Reddit Selfpost</h4>
<blockquote class="reddit-card" data-card-created="1493864001"><a href="https://www.reddit.com/r/pcmasterrace/comments/68rk0x/my_class_knows_whats_up/?ref=share&ref_source=embed">My class knows what's up</a> from <a href="http://www.reddit.com/r/pcmasterrace">pcmasterrace</a></blockquote>
<script async src="//embed.redditmedia.com/widgets/platform.js" charset="UTF-8"></script>
      <h4 class="header center orange-text">Geog CartoDB Map</h4>
<iframe width="100%" height="520" frameborder="0" src="https://hi1307.carto.com/builder/1a581f66-353a-11e7-84ef-0e3ff518bd15/embed" allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe>
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
            <li><a class="white-text" target="_blank" href="https://www.google.com.sg/maps/place/ACS+Independent/@1.3027021,103.7783637,17z/data=!3m1!4b1!4m5!3m4!1s0x31da1a5eaea609f1:0xc1dccf9e79c299cf!8m2!3d1.3027021!4d103.7805524"><i class="material-icons">location_on</i></a></li>
            <li><a class="white-text" href="tel:+65-9421-9292"><i class="material-icons">call</i></a></li>
            <li><a class="white-text" href="mailto:admin@seetow.com"><i class="material-icons">email</i></a></li>
            <li><a class="white-text" target="_blank" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><i class="material-icons">videocam</i></a></li>
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
      © 2017 <a class="orange-text text-lighten-3" href="https://seetow.com">See Tow.</a> All Rights Reserved. Made using Materialise. CDN kindly provided by StackPath, RawGit and GitHub.
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="/js/materialize.js"></script>
  <script src="/js/init.js"></script>
  </body>
</html>
		
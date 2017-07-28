<!doctype html>
<html>
<head>
<link rel="amphtml" href="https://seetow.ga/mobile/index.php" />
  <script type="text/javascript" src="//code.jquery.com/jquery-1.10.1.js"></script>
<script type='text/javascript'>//<![CDATA[
$(window).load(function(){
$(".popup").click(function () {
    var $this = $(this);
    var $iframe = $("<iframe>").attr("src", $this.data("link")).css({"width": 400, "height": 300});
    var $title = $("<h1>").text($this.data("title"));
    $("#video-view").html($title).append($iframe);
    $iframe.wrap("<div class='class-video'>");
});
});//]]> 

</script>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta name="robots" content="noindex, nofollow">
  <meta name="googlebot" content="noindex, nofollow">
<script src="/en-sg/DM_redirect.js" type="text/javascript"></script>
<script type="text/javascript">DM_redirect("/mobile");</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-52921261-3', 'auto');
  ga('send', 'pageview');

</script>
<script type='text/javascript'>//<![CDATA[
$(window).load(function(){
$("[data-media]").on("click", function(e) {
    e.preventDefault();
    var $this = $(this);
    var videoUrl = $this.attr("data-media");
    var popup = $this.attr("href");
    var $popupIframe = $(popup).find("iframe");
    
    $popupIframe.attr("src", videoUrl);
    
    $this.closest(".page").addClass("show-popup");
});

$(".popup").on("click", function(e) {
    e.preventDefault();
    e.stopPropagation();
    
    $(".page").removeClass("show-popup");
});

$(".popup > iframe").on("click", function(e) {
    e.stopPropagation();
});
});//]]> 

</script>
<link href='https://fonts.googleapis.com/css?family=Product+Sans:400,400i,700,700i' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<style type="text/css">
::-webkit-scrollbar {
    width: 12px;
}
 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
    border-radius: 10px;
}
 
::-webkit-scrollbar-thumb {
    border-radius: 10px;
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5); 
}
.boxed {
  border: 1px solid black ;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #ffffff;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #ffffff;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #FFFF00}

.dropdown:hover .dropdown-content {
    display: block;
}
body  {
    background-image: url("https://media.giphy.com/media/11TXNUbbdop22A/giphy.gif");
    background-color: #cccccc;
}
p {
    font-family: Lato, 'Product Sans', Impact, "Times New Roman", sans-serif;
    font-size: 18px;
    color: #000000;
}
h1 {
    font-family: Lato, 'Product Sans', Impact, "Times New Roman", sans-serif;
    font-size: 35px;
    text-align: center;
    color: #000000;
    background-color: #ffffff;
}
h2 {
    font-family: Lato, 'Product Sans', Impact, "Times New Roman", sans-serif;
    font-size: 26px;
    text-align: center;
    color: #000000;
    background-color: #ffffff;
}
h3 {
    font-family: Lato, 'Product Sans', Impact, "Times New Roman", sans-serif;
    font-size: 20px;
    color: #ffffff;
}
strong {
    font-family: Lato 'Product Sans', Impact, "Times New Roman", sans-serif;
    font-size: 22px;
    color: #ffffff;
}
.popup {
    position:absolute;
    z-index:2;
    top:0;
    left:0;
    width:100%;
    height:100%;
    background:rgba(0,0,0,0.7);
    opacity:0;
    visibility:hidden;
    transition:.3s ease;
}

.show-popup .popup {
    opacity:1;
    visibility: visible;    
}

.popup > iframe {
    position:absolute;
    top:50px;
    left:50%;
    margin-left:-280px;
}
#box {
    position: fixed;
    top: 0;
    width: 100%;
}
#footer {
    line-height:26px;
    position: fixed;
    bottom: 0px;
    width: 100%;
}
.btn {
  -webkit-border-radius: 23;
  -moz-border-radius: 23;
  border-radius: 23px;
  font-family: Lato;
  color: #ffffff;
  font-size: 20px;
  background: #34d939;
  padding: 10px 50px 10px 50px;
  text-decoration: none;
}

.btn:hover {
  background: #ff0000;
  text-decoration: none;
}
div button {
    position:absolute;
    left:0;
    right:0;
    margin:auto;
}
</style>
<title>See Tow's™ Website (Singapore English)</title>
<link rel="alternate" href="seetow.byethost17.com/en-sg" hreflang="en-sg" />
<link rel="alternate" href="seetow.byethost17.com/en" hreflang="en" />
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
buffer<br>
buffer<br>
FULL 1.3.5 (release 13/10)<br>
<h1>Welcome <em><? echo $_SERVER["REMOTE_ADDR"]; ?></em> (That's <em>YOUR</em> IP) to See Tow's Website!</h1>
<div id="footer">
<h2>SeeTow.GA is written in the following languages: <a href="#en">English</a> <a href="/ch-prc">华文</a> <a href="/jp-jp">日本語</a></h2>
<h2><marquee behavior="scroll" direction="left" scrollamount="15">Latest Blog Post <a href="/blog/latest" target="_blank">here</a>. NEWS >> <a href="/en/rss">News can now be found here!</a></marquee></h2></div>
<div id="box">
<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="/welcome/">About</a></li>
<li class="dropdown">
    <a href="#" class="dropbtn">Social Media</a>
    <div class="dropdown-content">
      <a target="_blank" href="https://www.youtube.com/seetowshiunhou">YouTube</a>
      <a target="_blank" href="/twitter">Twitter</a>
      <a target="_blank" href="https://plus.google.com/+JohnTanseetowsh">Google+</a>
      <a target="_blank" href="https://www.facebook.com/profile.php?id=100008235543326"><img src="https://cdn1.iconfinder.com/data/icons/logotypes/32/square-facebook-512.png" alt="FB" height="42" width="42">Facebook</a>
      <a target="_blank" href="https://www.instagram.com/seetow.2/"><img src="https://i.imgur.com/LXJNocm.png" alt="Insta" height="42" width="42">Instagram</a>
      <a target="_blank" href="https://reddit.com/u/hi1307"><img src="https://i.imgur.com/CduSn7x.png" alt="Snoo" height="42" width="42">Reddit</a>
    <div>
  <li>
<li class="dropdown">
    <a href="#" class="dropbtn">Profiles</a>
    <div class="dropdown-content">
      <a target="_blank" href="http://ratings.fide.com/card.phtml?event=5816130">FIDE</a>
      <a target="_blank" href="http://www.rtsoft.com/forums/member.php?139947-hi1307">RTSoft Forums</a>
      <a target="_blank" href="http://www.rtsoft.com/forums/member.php?218941-hi1307-of-Legend">RTSoft Forums (2)</a>
      <a target="_blank" href="http://boombeach.wikia.com/wiki/User:Hi1307">Boom Beach Wiki</a>
      <a target="_blank" href="http://minecraft.gamepedia.com/User:Hi1307">Minecraft Wiki</a>
      <a target="_blank" href="http://growtopia.wikia.com/wiki/User:Hi1307">Growtopia Wiki</a>
      <a target="_blank" href="http://forums.sgtrains.com/member.php?action=profile&uid=1744/">SGTrains Forums</a>
      </div></li>
<li class="dropdown">
    <a href="#" class="dropbtn">Games</a>
    <div class="dropdown-content">
      <a target="_blank" href="/dinosaur/chrome">Chrome Dinosaur (With Internet!)</a>
    <div>
  <li>
      <li><a href="/html/">HTML</a></li>
      <li><a href="/blog/">Blog</a></li>
      <li><a href="/changelog">Changelog</a></li>
      <li><a href="/register/">Register!</a></li>
      <li><a target="_blank" href="/welcome/my%20files/">MY FILES</a></li>
      <li><a target="_blank" href="https://www.google.com/?q=site:seetow.ga%20(query)">Search Website</a></li></ul></div>
  <div><button type="button" class="btn" onclick="location.href='http://youtube.com/seetowshiunhou?sub_confirmation=1'">Subscribe! ▶</button></div>
<div class="boxed">
<p>Your Computer Information Is As Follows:<p>
<?php

$user_agent     =   $_SERVER['HTTP_USER_AGENT'];

function getOS() { 

    global $user_agent;

    $os_platform    =   "Unknown OS Platform";

    $os_array       =   array(
                            '/windows nt 10/i'     =>  'Windows 10 👍',
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
                            '/10_12/i' => 'MacOS Sierra 👍' ,
                            '/10_11/i' => 'OS X El Capitan 👍' ,
                            '/mac_powerpc/i'        =>  'Mac OS 9',
                            '/linux/i'              =>  'Linux',
                            '/ubuntu/i'             =>  'Ubuntu',
                            '/iphone/i'             =>  'iPhone',
                            '/ipod/i'               =>  'iPod',
                            '/ipad/i'               =>  'iPad',
                            '/android/i'            =>  'Android',
                            '/blackberry/i'         =>  'BlackBerry',
                            '/webos/i'              =>  'Mobile'
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
                            '/chrome/i'     =>  'Google Chrome 👍',
                            '/edge/i'       =>  'Edge (ok, but seriously get Chrome or Firefox!)',
                            '/opera/i'      =>  'Opera',
                            '/netscape/i'   =>  'Netscape (THAT BROWSER FROM 1998)',
                            '/maxthon/i'    =>  'WTF DO YOU USE MAXTHON?!',
                            '/konqueror/i'  =>  'Konqueror',
                            '/mobile/i'     =>  'Safari on iPhone? Browser on Android?'
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

$device_details =   "<strong>Browser: </strong>".$user_browser."<br /><strong>Operating System: </strong>".$user_os."";

print_r($device_details);

echo("<br /> <br />Your User-Agent String Is (This will be kept, don't you stalk me or I'll ban your IP Address):");
echo("<br />".$_SERVER['HTTP_USER_AGENT']."");

?>
</div>


<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_donations">
<input type="hidden" name="business" value="J3Z93D36TC7JC">
<input type="hidden" name="lc" value="SG">
<input type="hidden" name="item_name" value="Bodil300 / Hi1307">
<input type="hidden" name="button_subtype" value="services">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="cn" value="Add special instructions to the seller:">
<input type="hidden" name="no_shipping" value="2">
<input type="hidden" name="currency_code" value="SGD">
<input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHosted">
<input type="image" src="https://www.paypalobjects.com/en_GB/SG/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal � The safer, easier way to pay online.">
<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
</form>

<a href="/blog/latest" target="_blank"><h2>Latest Blog Post</h2></a>

<h2>Latest YouTube Video</h2>
<iframe width=100%" height="540" src="https://www.youtube.com/embed?max-results=1&rel=0&listType=user_uploads&list=seetowshiunhou" frameborder="0" allowfullscreen></iframe> 
<hr />
<h2>Latest Liked Photo on Instagram</h2>
<blockquote class="instagram-media" data-instgrm-captioned data-instgrm-version="7" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:8px;"> <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:33.101851851851855% 0; text-align:center; width:100%;"> <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div></div> <p style=" margin:8px 0 0 0; padding:0 4px;"> <a href="https://www.instagram.com/p/BTETbG-AuEI/" style=" color:#000; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none; word-wrap:break-word;" target="_blank">The finals of the 58th National Inter Schools Swimming Championships will be held on the 20th and 21st of April after 3 days of heats. With 3 grand slams under their belt, the team is looking to take home the 4th, and we wish them all the best! Photo taken by Mdm Goh Hwee Hwee #ACsports</a></p> <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">A post shared by (Independent) Online (@indeponline) on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2017-04-19T12:39:25+00:00">Apr 19, 2017 at 5:39am PDT</time></p></div></blockquote> <script async defer src="//platform.instagram.com/en_US/embeds.js"></script>
<script async defer src="//platform.instagram.com/en_US/embeds.js"></script>

<hr />
<h2>Latest Facebook Post</h2>
<div class="fb-post" data-href="https://www.facebook.com/growtopia/photos/a.281390545320639.64126.278076995651994/1123431371116548/?type=3&amp;theater" data-width="500" data-show-text="true"><blockquote cite="https://www.facebook.com/growtopia/posts/1123431371116548:0" class="fb-xfbml-parse-ignore"><p>Growganoth has returned to Growtopia!!!  Behold the unimaginable horror in the world GROWGANOTH. Plus get some really cool prizes from him.  It&#039;s Halloween Week!</p>Posted by <a href="https://www.facebook.com/growtopia/">Growtopia</a> on <a href="https://www.facebook.com/growtopia/posts/1123431371116548:0">Friday, 28 October 2016</a></blockquote></div>

<h2>Twitter Feed</h2>
<a class="twitter-timeline" data-width="100%" data-height="1000" data-theme="dark" data-link-color="#E81C4F" href="https://twitter.com/mcpe_feed">Tweets by mcpe_feed</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

</body></html>
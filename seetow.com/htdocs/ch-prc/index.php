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
    background-image: url("https://i.imgur.com/t5JkhWw.png");
    background-color: #cccccc;
}
p {
    font-family: KaiTi, 'Product Sans', Impact, "Times New Roman", sans-serif;
    font-size: 18px;
    color: #000000;
}
h1 {
    font-family: KaiTi, 'Product Sans', Impact, "Times New Roman", sans-serif;
    font-size: 35px;
    text-align: center;
    color: #000000;
    background-color: #ffffff;
}
h2 {
    font-family: KaiTi, 'Product Sans', Impact, "Times New Roman", sans-serif;
    font-size: 26px;
    text-align: center;
    color: #000000;
    background-color: #ffffff;
}
h3 {
    font-family: KaiTi, 'Product Sans', Impact, "Times New Roman", sans-serif;
    font-size: 20px;
    color: #ffffff;
}
strong {
    font-family: KaiTi, 'Product Sans', Impact, "Times New Roman", sans-serif;
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
<title>司徒™的网站</title>
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
<h1>欢迎<em><? echo $_SERVER["REMOTE_ADDR"]; ?></em> (那是<em>你的</em>IP)来到司徒的网站！</h1>
<div id="footer"><h2>SeeTow.GA 使用下列语言: <a href="/en">English</a> <a href="#ch">华文</a> <a href="/jp-jp">日本語</a></h2></div>
<div id="box">
<ul>
  <li><a class="active" href="#home">首页</a></li>
  <li><a href="/welcome/">关于网站</a></li>
<li class="dropdown">
    <a href="#" class="dropbtn">社交媒体</a>
    <div class="dropdown-content">
      <a target="_blank" href="https://www.youtube.com/seetowshiunhou">油管</a>
      <a target="_blank" href="/twitter">推特</a>
      <a target="_blank" href="https://plus.google.com/+JohnTanseetowsh">谷歌+</a>
      <a target="_blank" href="https://www.facebook.com/profile.php?id=100008235543326">脸书（非死不可）</a>
    </div>
  </li>
<li class="dropdown">
    <a href="#" class="dropbtn">轮廓—帐户</a>
    <div class="dropdown-content">
      <a target="_blank" href="http://ratings.fide.com/card.phtml?event=5816130">世界旗协会</a>
      <a target="_blank" href="http://www.rtsoft.com/forums/member.php?139947-hi1307">RTSoft 论坛</a>
      <a target="_blank" href="http://www.rtsoft.com/forums/member.php?218941-hi1307-of-Legend">RTSoft 论坛 (二)</a>
      <a target="_blank" href="http://boombeach.wikia.com/wiki/User:Hi1307">Boom Beach 百科</a>
      <a target="_blank" href="http://minecraft.gamepedia.com/User:Hi1307">Minecraft 百科</a>
      <a target="_blank" href="http://growtopia.wikia.com/wiki/User:Hi1307">Growtopia 百科</a>
      <a target="_blank" href="http://forums.sgtrains.com/member.php?action=profile&uid=1744/">新加坡地铁电车论坛</a>
      </div></li>
<li class="dropdown">
    <a href="#" class="dropbtn">游戏</a>
    <div class="dropdown-content">
      <a target="_blank" href="/dinosaur/chrome">谷歌浏览器游戏（英文）</a>
    </div>
  </li>
      <li><a href="/html/">HTML</a></li>
      <li><a href="/blog/">博客</a></li>
      <li><a href="/changelog">更新日志</a></li>
      <li><a href="/register/">注册</a></li>
      <li><a target="_blank" href="/welcome/my%20files/">我的文档</a></li>
      <li><a target="_blank" href="https://www.google.com/?q=site:seetow.ga%20(搜索)">搜索网站（使用谷歌）</a></li></ul></div>
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
<?php

function ip_info($ip = NULL, $purpose = "location", $deep_detect = TRUE) {
    $output = NULL;
    if (filter_var($ip, FILTER_VALIDATE_IP) === FALSE) {
        $ip = $_SERVER["REMOTE_ADDR"];
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

?></div>


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



<a href="/blog/latest" target="_blank"><h2>最新的轮盘</h2></a>

<h2>最新的你管影片</h2>
<iframe width=100%" height="540" src="https://www.youtube.com/embed?max-results=1&rel=0&listType=user_uploads&list=seetowshiunhou" frameborder="0" allowfullscreen></iframe> 
<hr />
<h2>Instagram</h2>
<img src="https://i.imgur.com/r8ZC61t.jpg">
<blockquote class="instagram-media" data-instgrm-captioned data-instgrm-version="7" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:8px;"> <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:50.0% 0; text-align:center; width:100%;"> <div style=" background:url(https://i.imgur.com/r8ZC61t.jpg); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div></div> <p style=" margin:8px 0 0 0; padding:0 4px;"> <a href="https://www.instagram.com/p/BML2SsDhqJ0rQppnmg1xwiswfbwHewTpjGjVXA0/?taken-by=yaphangry" style=" color:#000; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none; word-wrap:break-word;" target="_blank">#relantionshipgoals</a></p> <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">A photo posted by Yap Han (@yaphangry) on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2017-01-13T12:10:44+00:00">Jan 13, 2017 at 5:10am PDT</time></p></div></blockquote>
<script async defer src="//platform.instagram.com/en_US/embeds.js"></script>

<hr />
<h2>最新的脸书</h2>
<div class="fb-post" data-href="https://www.facebook.com/growtopia/photos/a.281390545320639.64126.278076995651994/1123431371116548/?type=3&amp;theater" data-width="500" data-show-text="true"><blockquote cite="https://www.facebook.com/growtopia/posts/1123431371116548:0" class="fb-xfbml-parse-ignore"><p>Growganoth has returned to Growtopia!!!  Behold the unimaginable horror in the world GROWGANOTH. Plus get some really cool prizes from him.  It&#039;s Halloween Week!</p>Posted by <a href="https://www.facebook.com/growtopia/">Growtopia</a> on <a href="https://www.facebook.com/growtopia/posts/1123431371116548:0">Friday, 28 October 2016</a></blockquote></div>

<h2>推特</h2>
<a class="twitter-timeline" data-width="100%" data-height="1000" data-theme="dark" data-link-color="#E81C4F" href="https://twitter.com/mcpe_feed">Tweets by mcpe_feed</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

</body></html>
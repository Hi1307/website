<!doctype html><html><head>
<style>
html *
{
   font-family: KaiTi !important;
}
</style>
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
<title>欢迎</title>
</head><body>
<h1>司徒迅昊的专题作业</h1>
<p>观看</p>
<p>如果你要下载，你要在视频播放器里右键点击,然后选“Save video as”，然后选一个地方保存存档。</p>
<video src="https://cdn.rawgit.com/Hi1307/seetowcdn/8dfede7b/coursework.mp4" autoplay loop width="100%"></video>
<hr />
<h2>报告</h2>
<a href="https://cdn.rawgit.com/Hi1307/seetowcdn/528f7ea5/chcw/coursework%20report.docx">下载</a>
</body></html>

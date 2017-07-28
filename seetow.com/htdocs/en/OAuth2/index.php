
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no" name="viewport"><link rel="stylesheet" href="https://discordapp.com/assets/53ba3f36c410cfc6745a.css" integrity="sha256-ktyc2NzYSzvPBczedkYY3u4SK5d/qvYJ0ppXqUSGGNc= sha512-ibOIw+kTFI3e1IJPbijFmsEtKZpmrdhZsK1Zlh5uiKS97mBu+/g07e1gN7WbhPDUy8CliLPjFOwWQrzYIiXy+Q=="><link rel="icon" href="https://discordapp.com/assets/07dca80a102d4149e9736d4b162cff6f.ico" />  <title>Discord</title>
</head>
<body>
  <div id="app-mount"></div>
  <script>window.__require = window.require</script>
  <script>window.__OVERLAY__ = window.overlay != null</script><script>!function(){if(null!=window.WebSocket){var n=function(n){try{var e=localStorage.getItem(n);return null==e?null:JSON.parse(e)}catch(o){return null}},e=n("token"),o=n("gatewayURL");if(e&&o){var t=null!=window.__require?"etf":"json",a=6,r=o+"?encoding="+t+"&v="+a;console.log("[FAST CONNECT] "+r+", encoding: "+t+", version: "+a);var s=new WebSocket(r);s.binaryType="arraybuffer";var l=Date.now(),c={open:!1,gateway:r,messages:[]};s.onopen=function(){console.log("[FAST CONNECT] connected in "+(Date.now()-l)+"ms"),c.open=!0},s.onclose=s.onerror=function(){window._ws=null},s.onmessage=function(n){c.messages.push(n)},window._ws={ws:s,state:c}}}}();</script><script src="https://discordapp.com//d2wy8f7a9ursnm.cloudfront.net/bugsnag-3.min.js" data-apikey="261992831938f41f01ac83576bec95da"></script>
<script src="https://discordapp.com/assets/b9b6fe627039ec494526.js" integrity="sha256-mknfAfMxCJ44Z5G6VbZu9qU8K5AW42u8Mfx/DRe0UW0= sha512-vM5rwasOrFTHNwrCq0RVq/1j6Cwq4z2xYRoRgHS0p0F35e1hF132P425lBuvgcjHv4u37EJZPoGe0Pjex8xhJg=="></script><script src="https://discordapp.com/assets/53ba3f36c410cfc6745a.js" integrity="sha256-zEhuolrn3yWbxZRE9NOKV+5kpkD5DjWWe4A6WXvVSyY= sha512-lCRPWE/VIQMDqUIadVZL+XPhm99gtFc4a4X9kjGCJsQFHXJBEykf3Ie+WG1z6H5ulQ6Mr+qehTk7nXRCMZyxtg=="></script></body>
</html>

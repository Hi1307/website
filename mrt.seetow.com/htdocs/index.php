<!DOCTYPE html>
<link href="https://www.fontify.me/wf/e05b899e7a9820c43710772fbb31b046" rel="stylesheet" type="text/css">
<!--  Last Published: Fri Jul 21 2017 12:06:25 GMT+0000 (UTC)  -->
<html data-wf-page="596eaa3da18e1f1ba60f3d1a" data-wf-site="596eaa3da18e1f1ba60f3d19">
<head>
  <meta charset="utf-8">
  <title>MRTOK â€“ MRT okay or not?</title>
  <meta content="Queries social media for possible Singapore train incidents and display them on a single page." name="description">
  <meta content="MRTOK â€“ MRT okay or not?" property="og:title">
  <meta content="Queries social media for possible Singapore train incidents and display them on a single page." property="og:description">
  <meta content="summary" name="twitter:card">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <link href="https://cdn.rawgit.com/Hi1307/mrtok/747cf89a/normalise.css" rel="stylesheet" type="text/css">
  <link href="https://cdn.rawgit.com/Hi1307/mrtok/747cf89a/components.css" rel="stylesheet" type="text/css">
  <link href="https://cdn.rawgit.com/Hi1307/mrtok/edc05d1/mrtok.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
  <script type="text/javascript">WebFont.load({
  google: {
    families: ["Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic"]
  }
});</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);
</script>
  <link href="images/mrtok32.png" rel="shortcut icon" type="image/x-icon">
  <link href="images/mrtok.png" rel="apple-touch-icon">
  <script type="text/javascript">(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-72679927-2', 'auto');
ga('send', 'pageview');
</script>
  <meta name="theme-color">
  <meta name="msapplication-navbutton-color">
  <meta name="apple-mobile-web-app-status-bar-style">
  <style>
#incidents { display: none; }
.post:hover * { opacity: 1; }
.post-domain:before { content: 'on '; }
.post-votes:before { content: 'with '; }
.post-votes:after { content: ' votes'; }
</style>
  <script src="https://cdn.rawgit.com/moment/moment/develop/min/moment.min.js" type="text/javascript"></script>
  <script src="https://cdn.rawgit.com/moment/moment-timezone/develop/builds/moment-timezone.min.js" type="text/javascript"></script>
  <script>
if(location.hostname == 'mrtok.com') console.log = function() {};
var statusYes = '<span class="green">Yes</span>, it\'s business as usual.';
var statusNo = '<span class="red">NO!</span> the MRT seems to be delayed.';
var colRed = '#DD0000';
var colGreen = '#009900';
var displayDateFormat = 'dddd, Do MMM YYYY h:mm a';
var rResults = {}, tResults = {};
function matchTags(str) {
  str = str.toLowerCase();
  var tags = [];
  if(str.match(/\bnsl?\b/) || str.match(/north.south/)) tags.push('nsl');
  if(str.match(/\bewl?\b/) || str.match(/east.west/)) tags.push('ewl');
  if(str.match(/\bnel?\b/) || str.match(/north.east/)) tags.push('nel');
  if(str.match(/\bccl?\b/) || str.match(/circle line/)) tags.push('ccl');
  if(str.match(/\bdtl?\b/) || str.match(/downtown line/)) tags.push('dtl');
  if(str.match(/\btel?\b/) || str.match(/thomson line/)) tags.push('tel');
  if(str.match(/\bjrl?\b/) || str.match(/jurong region/)) tags.push('jrl');
  if(str.match(/\bcrl?\b/) || str.match(/cross island/)) tags.push('crl');
  if(str.match(/\bbplrt\b/)) tags.push('bplrt');
  else if(str.match(/\bsklrt\b/)) tags.push('sklrt');
  else if(str.match(/\bpglrt\b/)) tags.push('pglrt');
  else if(str.match(/lrt/)) tags.push('lrt');
  return tags;
}
</script>
</head>
<body>
  <div class="header section" id="header">
    <div class="w-container">
      <div class="text-center">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- MRTOK -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-9218984794093639"
     data-ad-slot="7012515974"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
        <h1>MRT okay or not?</h1>
        <div class="msg-status" id="msg-status">Loading...</div>
<!-- MRTOK -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-9218984794093639"
     data-ad-slot="7012515974"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
      </div>
    </div>
  </div>
  <div class="section" id="incidents">
    <div class="w-container">
      <h3 class="section-header">Incident Reports</h3>
      <div class="incident-list" id="incident-list">
        <div class="post">
          <div class="post-title-wrapper">
            <div class="tag-list">
              <div class="post-official tag" title="Official Account">Official</div>
              <div class="tag tag-nsl">NSL</div>
              <div class="tag tag-ewl">EWL</div>
              <div class="tag tag-nel">NEL</div>
              <div class="tag tag-ccl">CCL</div>
              <div class="tag tag-dtl">DTL</div>
              <div class="tag tag-tel">TEL</div>
              <div class="tag tag-jrl">JRL</div>
              <div class="tag tag-crl">CRL</div>
              <div class="tag tag-bplrt">BPLRT</div>
              <div class="tag tag-sklrt">SKLRT</div>
              <div class="tag tag-pglrt">PGLRT</div>
              <div class="tag tag-lrt">LRT</div>
            </div><a class="post-title" target="_blank">Title</a></div>
          <a class="text-link w-inline-block" href="#" target="_blank" title="read more...">
            <div class="post-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</div>
            <div class="post-meta">
              <div class="post-date">Tuesday, 18th Jul 2017 7:27 pm</div>
              <div class="post-domain">on reddit.com</div>
              <div class="post-votes">with 10 votes</div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="footer section">
    <div class="w-container">
      <div>© 2017 <a href="https://seetow.com" target="_blank">See Tow</a>. <a href="https://feedback.seetow.com" target="_blank">Feedback</a>. Made using open-source libraries.</div>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>
  <script src="https://cdn.rawgit.com/Hi1307/mrtok/747cf89a/mrtok.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
  <script>
function changeMobileThemeColor(color) {
  $('meta[name$="-color"], meta[name$="-bar-style"]').attr('content', color);
}
Webflow.push(function() {
  moment.tz.add('UTC|UTC|0|0|');
  moment.tz.add('Asia/Singapore|SMT +07 +0720 +0730 +09 +08|-6T.p -70 -7k -7u -90 -80|0123435|-2Bg6T.p 17anT.p l5XE 17bO 8Fyu 1so1u|71e5');
  moment.tz.setDefault('Asia/Singapore');
  var today = moment();
  var eightHrsAgo = today.subtract(8, 'hours');
  var $incidents = $('#incidents');
  var $postTemplate = $incidents.find('.post').first();
  var $statusElem = $('#msg-status');
  // Reddit
  (function() {
    var rUrl = 'https://www.reddit.com/r/singapore/search.json?q=';
    var rOpts = '&sort=new&restrict_sr=on&t=day';
    var rTerms = [
      'mins delay',
      'mrt delay',
      'train delay',
      'track fault',
      'signalling fault',
    ];
    rTerms.forEach(function(term) {
      $.getJSON(rUrl + term + rOpts, function(data) {
        $.each(data.data.children, function(k, v) {
          var post = v.data;
          var postDate = moment.tz(post.created_utc*1000, 'UTC');
          var postDateFormatted = postDate.tz('Asia/Singapore').format(displayDateFormat);
          if(!post.is_self || post.ups < 4 || post.downs > 10 
             || !postDate.isAfter(eightHrsAgo) || post.title.match(/\?$/) != null) return;
          rResults[post.id] = {
            title: post.title,
            selftext: post.selftext,
            selftext_html: post.selftext_html,
            created_utc: post.created_utc,
            date_formatted: postDateFormatted,
            ups: post.ups,
            downs: post.downs,
            tags: matchTags(post.title + ' ' + post.selftext),
            url: post.url,
            domain: 'reddit.com',
            is_official: false,
          };
        });
      });
    });
  })();
  // Official Twitters
  (function() {
    var tUrl = 'https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=SMRT_Singapore&count=10';
    $.getJSON(tUrl, function(data) {
      $.each(data, function(k, post) {
        var postDate = moment.tz(post.created_at, 'ddd MMM DD HH:mm:ss ZZ YYYY', 'UTC');
        var postDateFormatted = postDate.tz('Asia/Singapore').format(displayDateFormat)
        var t = post.text.toLowerCase();
        if(t.match(/(nsl|ewl|nel|ccl|dtl|tel|jrl|crl|lrt)\b/) == null || 
           t.match(/(delay|fault)/) == null || 
           t.indexOf('cleared') > -1 || 
           !postDate.isAfter(eightHrsAgo)) return;
        tResults[post.id] = {
          title: post.text,
          selftext: "",
          selftext_html: "",
          created_utc: postDate.unix(),
          date_formatted: postDateFormatted,
          ups: -1,
          downs: -1,
          tags: matchTags(post.text),
          url: 'http://twitter.com/' + post.user.screen_name + '/status/' + post.id_str,
          domain: 'twitter.com',
          is_official: true,
        };
      });
    });
  })();
  $(document).ajaxStop(function() {
    var numRedditResults = Object.keys(rResults).length;
    var numTwitterResults = Object.keys(tResults).length;
    console.log(rResults, tResults);
    if(numRedditResults == 0 && numTwitterResults == 0) {
      $statusElem.html(statusYes);
      changeMobileThemeColor(colGreen);
      return; // no further processing if okay
    }
    $statusElem.html(statusNo);
    changeMobileThemeColor(colRed);
    // Display twitter results
    Object.keys(tResults).forEach(function(key) {
      var post = tResults[key];
      var $post = $postTemplate.clone(true);
      $post.addClass('pinned');
      $post.attr('data-timestamp', post.created_utc);
      $post.find('a').attr('href', post.url);
      if(!post.is_official) $post.find('.post-official').remove();
      $post.find('.post-votes').remove();
      $post.find('.post-title').html(post.title);
      $post.find('.post-text').remove();
      $post.find('.post-date').text(post.date_formatted);
      $post.find('.post-domain').text(post.domain);
      $post.find('.tag:not(.post-official)').filter(function(i, el) {
        return !post.tags.includes(this.className.match(/[a-z]+$/)[0]);
      }).remove();
      $post.insertAfter($postTemplate);
    });
    // Display reddit results
    Object.keys(rResults).forEach(function(key) {
      var post = rResults[key];
      var $post = $postTemplate.clone(true);
      $post.attr('data-timestamp', post.created_utc);
      $post.find('a').attr('href', post.url);
      if(!post.is_official) $post.find('.post-official').remove();
      $post.find('.post-votes').text(post.ups - post.downs);
      $post.find('.post-title').text(post.title);
      $post.find('.post-text').text(post.selftext);
      $post.find('.post-date').text(post.date_formatted);
      $post.find('.post-domain').text(post.domain);
      $post.find('.tag:not(.post-official)').filter(function(i, el) {
        return !post.tags.includes(this.className.match(/[a-z]+$/)[0]);
      }).remove();
      $post.insertAfter($postTemplate);
    });
    $postTemplate.remove();
    $('.post').sort(function(a,b) {
      return +b.dataset.timestamp - +a.dataset.timestamp;
    }).appendTo('#incident-list');
    $('.post.pinned').prependTo('#incident-list');
    $incidents.show();
    $('.tag-list').filter(function() { return this.innerText == ''; }).remove();
  });
});
</script>
</body>
</html>
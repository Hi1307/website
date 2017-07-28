<!DOCTYPE HTML><html><body><p>This is a social experiment. You will be redirected in <span id="counter">10</span> second(s). The redirect might be a little late because of webpage latency.</p>
<script type="text/javascript">
function countdown() {
    var i = document.getElementById('counter');
    if (parseInt(i.innerHTML)<=-2) {
        location.href = 'https://www.youtube.com/watch?v=dQw4w9WgXcQ';
    }
    i.innerHTML = parseInt(i.innerHTML)-1;
}
setInterval(function(){ countdown(); },1000);
</script></body></html>
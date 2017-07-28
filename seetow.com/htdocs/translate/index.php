<title>See Tow Translate</title>
<style type="text/css">
.bottom {
    position: fixed;
    bottom: 0;
}
</style>
<h1 style="font-family:Arial;">See Tow Translate</h1>      
<p style="font-family:Arial;">Enter the phrase or website URL you want to translate in the box below.</p>
<p style="font-family:Arial;">The default language is Japanese and Chinese.</p>
      <form id="search1">
        <div class="input-field">
          <input size="100%" id="search3" type="search" required>
          <label class="label-icon" for="search"></label>
        </div>
<button type="submit" form="search1" value="Submit">Translate to Chinese</button>
      </form>
      <form id="search">
        <div class="input-field">
          <input size="100%" id="search2" type="search" required>
          <label class="label-icon" for="search"></label>
        </div>
<button type="submit" form="search" value="Submit">Translate to Japanese (and Others)</button>
      </form>
      <form id="search4">
        <div class="input-field">
          <input size="100%" id="search5" type="search" required>
          <label class="label-icon" for="search"></label>
        </div>
<button type="submit" form="search4" value="Submit">Translate to English</button>
      </form>
<script>
  var form       = document.querySelector('#search'),
      text_field = document.querySelector('#search2');

  function submitHandler(){
    // build the new url and open a new window
    var url = form.action + 'https://translate.google.com/#en/ja/' + text_field.value;
    window.open(url);

    // prevent form from being submitted because we already 
    // called the request in a new window
    return false;
  }

  // attach custom submit handler
  form.onsubmit = submitHandler;
</script>
<script>
  var form       = document.querySelector('#search1'),
      text_field = document.querySelector('#search3');

  function submitHandler(){
    // build the new url and open a new window
    var url = form.action + 'https://fanyi.baidu.com/#en/zh/' + text_field.value;
    window.open(url);

    // prevent form from being submitted because we already 
    // called the request in a new window
    return false;
  }

  // attach custom submit handler
  form.onsubmit = submitHandler;
</script>
<script>
  var form       = document.querySelector('#search4'),
      text_field = document.querySelector('#search5');

  function submitHandler(){
    // build the new url and open a new window
    var url = form.action + 'https://translate.google.com/#auto/en/' + text_field.value;
    window.open(url);

    // prevent form from being submitted because we already 
    // called the request in a new window
    return false;
  }

  // attach custom submit handler
  form.onsubmit = submitHandler;
</script>
<p class="bottom" style="font-family:Arial;">Powered by Google and Baidu Translate.</p>
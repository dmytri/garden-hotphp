<?php

class Component
{
  public function main($config)
  {
    echo <<<HTML
      <!DOCTYPE html>
      <html>
        <head>
        <title>Hot PHP</title>
        </head>
        <style>
          body {
            font-size: 16pt;
            font-weight: bold;
            color: #baddad;
            background-color: black;
          }
        </style>
        <body>
          <h1>Change Me?</h1>
          <p>Change something here to see if dev mode works.</p>
          <hr>
          <pre>Config: $config</pre>
          <pre>
            &gt; Counting <span id="cmd">0</span> ...
            &gt; <span id="blink">_</span>
          </pre>
        </body>
        <script type="text/javascript">
          var cmd = document.getElementById('cmd');
          var ii = 1
          setInterval(function() {
              cmd.innerHTML = ii
              ii++
          }, 1000);
          var blink = document.getElementById('blink');
          setInterval(function() {
              blink.style.opacity = (blink.style.opacity == 0 ? 1 : 0);
          }, 800);
        </script>
      </html>
    HTML;
    }
}

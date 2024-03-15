<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="/global.css" />
    <link rel="stylesheet" href="/result.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@700&display=swap"
    />
  </head>
  <body onload="setInterval(run_me,1000)">
    <div class="result">
      <img class="viral-ai-icon1" alt="" src="/public/viral-ai.svg" />

      <b class="result1">Processing...</b>
      <div class="result-child">Wait for <i id="num_wait">10</i> Sec</div>
      <div class="dev1">
        <b class="developed-by-1">Developed by-</b>
        <b class="aryan-jaswal1">ARYAN JASWAL</b>
        <b class="b1">&</b>
        <b class="dr-sanjit-ningthoujam1">Dr. Sanjit Ningthoujam</b>
      </div>
    </div>
  </body>
</html>

<script>
    let n = 10
    function run_me(){
    
        document.getElementById("num_wait").innerHTML = n;
        n = n -1;
        if (n <0){
            document.location.href= document.location.href;
            n = 10;
        }
    }
    </script>
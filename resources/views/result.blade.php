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

      <b class="result1">Result</b>
      <div class="result-child">
        <img src='/public/{{$results->img_path}}' width=50% height=30%></img>
        <br>

        You Can get Views In Between {{$results->views}}.
        <br><br>
        Probability Chart
        <br><br>
        <table style="font-size:20px;" border=5>
            <tr>
                <th>
                Views Range
                <th>
                Probability %
</tr>
<tr>
    <th>
        0 to 1,000
        <th>
            {{$results->pred_1}}%
            <tr>
                <th>
                    1,000 to 5,000
                    <th>
                    {{$results->pred_3}}%
                    <tr>
                        <th>
                            5,000 to 10,000
                            <th>
                            {{$results->pred_6}}%
                            <tr>
                                <th>
                                    10,000 to 25,000
                                    <th>
                                    {{$results->pred_2}}%
                                    <tr>
                                        <th>
                                            25,000 to 50,000
                                            <th>
                                            {{$results->pred_4}}%
                                            <tr>
                                            <th>    
                                            50,000 to viral
                                            <th>
                                            {{$results->pred_5}}%
                                            <tr>
                                                <th>
                                                Max Pro %
                                                <th>
                                                {{$results->max_acc}}

</tr>
</table>


      </div>
      <div class="dev1">
        <b class="developed-by-1">Developed by-</b>
        <b class="aryan-jaswal1">ARYAN JASWAL</b>
        <b class="b1">&</b>
        <b class="dr-sanjit-ningthoujam1">Dr. Sanjit Ningthoujam</b>
      </div>
    </div>
  </body>
</html>

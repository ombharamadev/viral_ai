<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./index.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@700&display=swap"
    />
  </head>
  <body>
    <div class="main">
      <img class="viral-ai-icon" alt="" src="./public/viral-ai.svg" />

      <b class="ai-help-you"
        >Ai Help you Find out how much view you can get before Posting Reels
        Video</b
      >
      <div class="main-child">
      <form action="upload" method="POST" enctype="multipart/form-data" class="form-container">
    @csrf
    <label for="file" class="custom-file-upload">
        <i class="fas fa-cloud-upload-alt"></i> Upload Thumbnail Image
    </label>
    <input type="file" name="file" id="file" accept=".jpg,.png,.jpeg">
    


<style>
    /* styles.css */

/* Custom style for the file input button */
.custom-file-upload {
  display: inline-block;
  padding: 10px 20px;
  cursor: pointer;
  background-color: #3490dc;
  color: #fff;
  border-radius: 50px;
}

/* Hide the default file input button */
.form-container input[type="file"] {
  display: none;
}

/* Style the "Upload" button (you can customize this as needed) */
.form-container button {
  background-color: #38c172;
  color: #fff;
  padding: 10px 20px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  margin-top: 10px;
}

    </style>


      </div>
      
      <div class="but">
        <button type="submit">
        <div class="but-child"></div>
        <b class="submit" style="color:white;font-size:30px;">SUBMIT</b>
</button>
      </div>
</form>

      <div class="dev">
        <b class="developed-by-">Developed by-</b>
        <b class="aryan-jaswal">Aryan Jaswal</b>
        <b class="b">Email</b>
        <b class="dr-sanjit-ningthoujam">ombharamadev@proton.me</b>
      </div>
    </div>
  </body>
</html>

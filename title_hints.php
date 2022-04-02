<!DOCTYPE html>


<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/styles.css">
  </head>

  <body>

    <p><b>Start typing a movie title in the input field below:</b></p>
    <form>
      Movie Title: <input type="text" onkeyup="showHint(this.value)"><!--exectues function on key press-->
    </form>
    <p>Suggestions: <span id="txtHint"></span></p>

  <script type="text/javascript" src="js/movieSearch.js"></script>

  </body>

</html>

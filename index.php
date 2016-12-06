<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Viedoeditor</title>

  <!-- CSS -->
  <link rel="stylesheet" href="css/dropzone.css">
  <link rel="stylesheet" href="css/main.css">



</head>

<body>
<div class="wrapper">
  <div class="top-nav">
    <ul>
      <li id="undo_but"><a href="#">Undo</a></li>
      <li id="redo_but"><a href="#">Redo</a></li>
    </ul>
  </div>
  <form action="upload.php"  class="dropzone">
    <div class="fallback">
      <input name="file" type="file" multiple />
    </div>
  </form>
</div>
</body>

<!-- Sripts -->

<script src="js/dropzone.js"></script>
<script src="js/jquery-3.1.1.min.js"></script>
</html>

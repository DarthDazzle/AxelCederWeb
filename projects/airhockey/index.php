<!DOCTYPE html>
<html lang="en-us">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <body style='background-color:#343538'>
    <title>Airhockey Example</title>
    
    <link rel="shortcut icon" href="TemplateData/favicon.ico">
    <link rel="stylesheet" href="TemplateData/style.css">
    <script src="TemplateData/UnityProgress.js"></script>  
    <script src="Build/UnityLoader.js"></script>
    <script>
      var gameInstance = UnityLoader.instantiate("gameContainer", "Build/testOutput.json", {onProgress: UnityProgress});
      gameInstance.SetFullscreen(1);
    </script>
    
		<link rel="stylesheet" href="../css/styles.css">
		<script type="text/javascript" src="../js/jquery-3.1.0.min.js"></script>
		<link rel="shortcut icon" href="../resources/image/logo/ico.png" type="image/png">
  </head>
  <body>
    <div class="webgl-content">
      <div id="gameContainer" style="width: 960px; height: 600px"></div>
      <div class="footer">
        <div class="webgl-logo"></div>
        <div class="fullscreen" onclick="gameInstance.SetFullscreen(1)"></div>
        <div class="title">Airhockey Example</div>
      </div>
    </div>
    <div color="#F4F4F4">
      Press C to change view <br>
      Press Left Mouse-Button to turn of game
    </div>
  </body>
</html>
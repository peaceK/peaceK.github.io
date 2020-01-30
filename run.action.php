<?php
$testId = uniqid();
?>

<!doctype html>
<html lang="en">
  <meta charset="utf-8">
  <title>Peacekeeper</title>
  <meta name="viewport" content="width=1000">
  <link rel="stylesheet" href="css/benchmark-style.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="css/application-style2.css" media="all" />
  <script type="text/javascript" src="js/logger.js"></script>
  <script type="text/javascript" src="js/assetmanager.js"></script>
  <script type="text/javascript" src="js/libs/jquery-1.6.4.min.js"></script>
  <script type="text/javascript" src="js/ui.js"></script>
  <script>
    ui.resultActionUrl = "results.action.php";
    ui.testId = "<?php echo $testId ?>";
  </script>
</head>
<body>

  <div id="wrapper">

    <div id="run-header">
      <div id="logo-area">
        <h1><img src="images/v2/pk-logo-small.png" /></h1>
   			<div id="progressBarContainer">
     			<div id="progressBarLabel"><p>Running...</p></div>
     			<div id="progressBarAnchor">
       			<div id="progressBar"></div>
       			<div id="progressBarBackground"></div>
     			</div>
          <div id="progressRemaining"><p>5 min left</p> </div>
        </div>
      </div>
    </div>

    <div id="playgroundContainer">
      
      <div id="background-container">
        <div id="background-string"></div>
        <div id="background-array"></div>
        <div id="background-dom"></div>
      </div>	
      
      
      
        <iframe id="testFrame" width="992" height="558" frameborder="no" scrolling="no" src="runTest.action.php?testId=<?php echo $testId ?>"></iframe>
      
      
    </div>	

    <div id="test-description">
      description
    </div>

    <div id="log">
      Loading Peacekeeper...
    </div>

  </div>

</body>
</html>

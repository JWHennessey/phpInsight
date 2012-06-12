<?php
  include 'sentiment.class.php';

  $sentiment = new Sentiment();

  $example1 = $sentiment->categorise('Today was rubbish'); //Neg
  $example2 = $sentiment->categorise('Today was amazing'); // Pos
  $example3 = $sentiment->categorise('Today was ok'); // Neu


?>
<html>
<head>
</head>

<body>
  <h1>phpInsight Example</h1>

  <h2>Example 1</h2>

  <p>Today was rubbish</p>
  <p>Classification - <?php echo $example1; ?></p>

  <h2>Example 2</h2>

  <p>Today was amazing</p>
  <p>Classification - <?php echo $example2; ?></p>

  <h2>Example 3</h2>

  <p>Today was ok</p>
  <p>Classification - <?php echo $example3; ?></p>

</body>
</html>


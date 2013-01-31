<?php
include 'sentiment.class.php';

$sentiment = new Sentiment();

$examples = array(
	1 => 'Weather today is rubbish',
	2 => 'This cake looks amazing',
	3 => 'His skills are mediocre',
	4 => 'He is very talented',
	5 => 'She is seemingly very agressive',
	6 => 'Marie was enthusiastic about the upcoming trip. Her brother was also passionate about her leaving - he would finally have the house for himself.',
	7 => 'To be or not to be?',
);
?>
<html>
	<head>
		<style>

			body {
				font-family:Arial,sans-serif;
			}
			blockquote {
				border:1px solid #e8e8e8;
				background:white;
				padding:10px;
			}

			div.example {
				border-left:2px solid black;
				margin:10px;
				padding:20px;
				background:#f4f4f4;
			}

			.neu {
				color:gray;
			}
			.pos {
				color:green;
			}
			.neg {
				color:red;
			}
			
		</style>
	</head>

	<body>
		<h1>phpInsight Example</h1>

		<?php
		foreach ($examples as $key => $example) {

			echo '<div class="example">';
			echo "<h2>Example $key</h2>";
			echo "<blockquote>$example</blockquote>";

			echo "Scores: <br />";
			$scores = $sentiment->score($example);

			echo "<ul>";
			foreach ($scores as $class => $score) {
				$string = "$class -- <i>$score</i>";
				if ($class == $sentiment->categorise($example)) {
					$string = "<b class=\"$class\">$string</b>";
				}
				echo "<ol>$string</ol>";
			}
			echo "</ul>";
			echo '</div>';
		}
		?>

	</body>
</html>


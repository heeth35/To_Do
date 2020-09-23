<html>

<head>
	<title>Answers Choice</title>
	
	<style>
	
		#container
		{
			
		}
		
	</style>
</head>

<body>

	<div id="container">
	
	<?php

		if(isset($_POST['submit']))
		{
		
			$arr = ["" ,$_POST['q1'] , $_POST['q2'] , $_POST['q3'] , $_POST['q4'] , $_POST['q5'] , $_POST['q6'] , $_POST['q7'] , $_POST['q8'] , $_POST['q9'] , $_POST['q10']  ];
			
			echo "<center>" ;
			
			echo "<table>" ;
			echo "<tr><th colspan=2><h1>Answers Choosen</h1></th><tr>" ;
			echo "<tr><td>Responses:</td> <td></td><br>" ;
			
			for($i = 1 ; $i<=10 ; $i++)
			{
				if ( $arr[$i] == "" )
				{
					echo "<tr><td>Q" . $i .".</td><td>Not Attempted</td></tr><br>" ;
				}
				else
				{
					echo "<tr><td>Q" . $i .".</td><td>" . $arr[$i] . "</td></tr><br>" ;
				}
				
			}
			
			echo "</table>" ;
		
			echo "</center>" ;
		
		
		/*
			//Hard Coding
			$q1 = $_POST['q1'];
			$q2 = $_POST['q2'];
			$q3 = $_POST['q3'];
			$q4 = $_POST['q4'];
			$q5 = $_POST['q5'];
			$q6 = $_POST['q6'];
			$q7 = $_POST['q7'];
			$q8 = $_POST['q8'];
			$q9 = $_POST['q9'];
			$q10 = $_POST['q10'];
			
			echo "<center>" ;
			echo "<table>" ;
			echo "<tr><td>Responses:</td> <td></td></tr><br>" ;
			echo "<tr><td>Q1.</td><td>" . $q1 . "</td></tr><br>";
			echo "<tr><td>Q2.</td><td>" . $q2 . "</td></tr><br>";
			echo "<tr><td>Q3.</td><td>" . $q3 . "</td></tr><br>";
			echo "<tr><td>Q4.</td><td>" . $q4 . "</td></tr><br>";
			echo "<tr><td>Q5.</td><td>" . $q5 . "</td></tr><br>";
			echo "<tr><td>Q6.</td><td>" . $q6 . "</td></tr><br>";
			echo "<tr><td>Q7.</td><td>" . $q7 . "</td></tr><br>";
			echo "<tr><td>Q8.</td><td>" . $q8 . "</td></tr><br>";
			echo "<tr><td>Q9.</td><td>" . $q9 . "</td></tr><br>";
			echo "<tr><td>Q10.</td><td>" . $q10 . "</td></tr><br>";
			echo "</table>";
			echo "</center>" ;
		*/	
		}	

	?>
	
	</div>

</body>

</html>

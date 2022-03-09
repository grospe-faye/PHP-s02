<?php require_once "./code.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>S02: Repetition Control Structures and Array Manipulation</title>
</head>
<body>

	<h2>Divisible by 5</h2>
	<?php divisibleByFive(); ?>

	<h2>Array Manipulation</h2>
<!-- 	<pre><?php print_r($student); ?></pre> -->
	<p><?php echo var_dump($student); ?></p>
	<pre><?php echo count($student);?></pre>

	<?php array_push($student, 'Jane Smith') ?>
    <!-- <pre><?php print_r($student); ?></pre> -->
    <p><?php echo var_dump($student); ?></p>
    <pre><?php echo count($student);?></pre>

    <?php array_shift($student) ;?>
    <!-- <pre><?php print_r($student) ;?></pre> -->
    <p><?php echo var_dump($student); ?></p>
    <pre><?php echo count($student);?></pre>


	
</body>
</html>
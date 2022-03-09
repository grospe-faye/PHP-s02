<?php require_once "./code.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>S02: Repetition Control Structures and Array Manipulation</title>
</head>
<body>
	<h1>Repetition Control Structures</h1>

	<h2>While Loop</h2>
	<?php whileLoop(); ?>

	<h2>Do-While Loop</h2>
	<?php doWhileLoop(); ?>

	<h2>For Loop</h2>
	<?php forLoop(); ?>

	<h2>Continue and Break</h2>
	<?php modifiedForLoop(); ?>
	
	<h1>Array Manipulation</h1>

	<h2>Types of Arrays</h2>

	<h3>Simple Array</h3>

	<ul> <!-- foreach iterating using "as" keyword para madisplay lahat ng laman ng array -->
		<?php foreach($computerBrands as $brand){ ?>
			<li><?php echo $brand; ?></li>
		<?php } ?>
	</ul>

	<h3>Associative Array</h3>
	<ul>
		<?php foreach($gradePeriods as $period => $grade){ ?>

			<li>Grade in <?= $period ?> is <?= $grade ?> </li>
		<?php }?>
	</ul>

	<h3>Multidimensional Array</h3>
	<!-- <ul>
		<?php
			foreach($heroes as $team){
				foreach($team as $member){
					?>
					<li><?php echo $member ?></li>
				<?php }
			}
		?>
		
	</ul> -->

	<!-- Displaying a specific element in 2dim array -->
	<p><?php echo $heroes[2][2]?></p>

	<ul>
        <?php foreach($heroes as $team){
            foreach($team as $member){
                echo '<li>'.$member.'</li>';
            }
        }?>
    </ul>

    <h2>Array Functions</h2>

    <h3>Sorting</h3>
    <pre><?php print_r($sortedBrands); ?></pre>

    <h3>Sorting (reversed)</h3>
    <pre><?php print_r($reverseSortedBrands); ?></pre>

    <h3>Append</h3>
    <?php array_push($computerBrands, 'Apple') ?>
    <pre><?php print_r($computerBrands); ?></pre>

    <?php array_unshift($computerBrands, 'Dell');?>
    <pre><?php print_r($computerBrands); ?></pre>

    <h3>Remove</h3>
    <?php array_pop($computerBrands); ?>
    <pre><?php print_r($computerBrands); ?></pre>

    <?php array_shift($computerBrands) ;?>
    <pre><?php print_r($computerBrands) ;?></pre>

    <h3>Others</h3>

    <h4>Count</h4>
    <pre><?php echo count($computerBrands);?></pre>

    <h4>In Array</h4>
    <p><?php echo searchBrand($computerBrands, 'Apple'); ?></p>

    <h4>Reversed Grade periods</h4>
    <pre><?php print_r($reversedGradePeriods);?></pre>
</body>
</html>
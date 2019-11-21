<!DOCTYPE html>
<html>
<head>
	<title>Latihan 1</title>
	<style>
		.warna{
			background-color: silver;
		}

	</style>
</head>
<body>
	<table border="1" cellpadding="10" cellspacing="0">
		<?php for ($i = 1; $i <= 5; $i++) : ?>
		<?php if( $i % 2 == 1) : ?>
			<tr class="warna">
		<?php else :  ?>
			<tr>
		<?php endif ; ?>
				<?php for ($j = 1; $j <= 5; $j++) :  ?>
					<td><?= "$i,$j";  ?></td>
				<?php endfor ; ?>
			</tr>

		<?php endfor; ?>
	
		
	</table>

</body>
</html>
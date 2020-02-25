<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="http://www.cs.washington.edu/education/courses/cse190m/09sp/labs/4-buyagrade/buyagrade.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		<h1>Thanks, sucker!</h1>

		<p>Your information has been recorded.</p>

		<dl>
			<dt>Name</dt>
			<dd><?php
 			echo $_REQUEST["cname"];?>
 			</dd>

			<dt>Section</dt>
			<dd>
				<?php
				echo $_REQUEST["favoritecharacter"];?>
			</dd>

			<dt>Credit Card</dt>
			<dd>
				<?php
				echo $_REQUEST["ccd"]."(".$_REQUEST["cc"].")";
				?>
			</dd>
			<?php
			$file = 'sucker.txt';
// Open the file to get existing content
			$current = file_get_contents($file);
// Append a new person to the file
			$current .= $_REQUEST["cname"].";".$_REQUEST["favoritecharacter"].";".$_REQUEST["ccd"].";".$_REQUEST["cc"]."\n";
// Write the contents back to the file
			file_put_contents($file, $current);
			?>
		</dl>
		<p>Here all the sucker who have submitted here:</p>
		<?php
		$fp = fopen($file, "r");
		while (!feof($fp)){ $current_line = fgets ($fp);
			echo $current_line.'<br>';
}
		?>
	</body>
</html>  
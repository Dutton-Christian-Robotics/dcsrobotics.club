<!DOCTYPE html>
<html>
	<head>
		<title>DCS Robotics Photos</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<style type="text/css">
			.smaller {
				font-size:60%;
			}
		</style>
	</head>
	<body style="background:#ddd;">
		<div class="d-flex flex-wrap">
<?
	$dir = new DirectoryIterator(".");

	$files = array();

	foreach ($dir as $fileinfo) {
		if (!$fileinfo->isDot() && $fileinfo->isFile() && (strcasecmp($fileinfo->getExtension(), "JPG") === 0)) {
			array_push($files, $fileinfo->getFilename());
		}
	}
	usort($files, function($a, $b) {
		$a_exif = exif_read_data("./" . $a);
		$b_exif = exif_read_data("./" . $b);
		$a_date = new DateTime($a_exif['DateTimeOriginal']);
		$b_date = new DateTime($b_exif['DateTimeOriginal']);
		$a_u = $a_date->format('U');
		$b_u = $b_date->format('U');
		if ($a_u == $b_u) {
			return 0;
		}
		return ($a_u > $b_u) ? -1 : 1;

	});
	foreach ($files as $fileinfo) {
		$exif = exif_read_data("./" . $fileinfo);
		if ($exif !== false) {
// 				$dt = var_export($exif, true);
			$dt_object = new DateTime($exif['DateTimeOriginal']);
			$dt = $dt_object->format("F j, Y @ g:ia");
		} else {
			$dt = "";
		}
		print "<div class=\"p-3 m-2 bg-white border rounded border-secondary\"><div><a href=\"/media/photos/" . $fileinfo . "\" target=\"_new\"><img src=\"/media/thumbs/" .$fileinfo . "\"/></a></div><div class=\"small text-center text-muted mt-2\">" . $fileinfo . "</div><div class=\"smaller text-muted text-center\">$dt</div></div>";
		unset($exif);

	}

?>
		</div>
	</body>
</html>
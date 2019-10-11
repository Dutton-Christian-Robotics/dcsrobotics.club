<?
require_once './PHPThumb/PHPThumb.php';
require_once './PHPThumb/GD.php';

$dir = new DirectoryIterator("./photos");

ini_set("memory_limit","128M");
ob_end_flush();
ob_implicit_flush();

foreach ($dir as $fileinfo) {
	set_time_limit(30);
	if (!$fileinfo->isDot() && $fileinfo->isFile() && (strcasecmp($fileinfo->getExtension(), "JPG") === 0)) {
		if (file_exists("./thumbs/" . $fileinfo->getFilename())) {
			print "<div style=\"color:#999;\">Thumb exists for " . $fileinfo->getFilename() . "</div>";
		} else {
			$thumb = new PHPThumb\GD("./photos/" . $fileinfo->getFilename());
			$thumb->resize(200, 200);
			$thumb->save("./thumbs/" . $fileinfo->getFilename());
			print "<div style=\"color:green;\">Thumb created for " . $fileinfo->getFilename() . "</div>";
			unset($thumb);
		}
	}
}





/*
if (file_exists("./thumbs/" . $_GET['s'])) {
	header("Location: /media/thumbs/" . $_GET['s']);

} else if (file_exists("./photos/" . $_GET['s'])) {
	ini_set("memory_limit","128M");

	$thumb = new PHPThumb\GD("./photos/" . $_GET['s']);
	$thumb->resize(200, 200);
	$thumb->save("./thumbs/" . $_GET['s']);
	header("Location: /media/thumbs/" . $_GET['s']);
} else {
	print "does not exist";
}

?>
*/


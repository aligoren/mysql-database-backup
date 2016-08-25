<?php 

$f = $_GET['f'];

$f_ex = explode('.', $f);
$f_ex = end($f_ex);

if ($f_ex === "zip") {

	if ($f and file_exists($f)) 
	{
		header('Content-Description: File Transfer');
		header('Content-Type: application/zip');
		header('Content-Disposition: attachment; filename='.basename($f));
		header('Content-Transfer-Encoding: binary');
		header('Expires: 0');
		header('Cache-Control: must-revalidate');
		header('Pragma: public');
		header('Content-Length: ' . filesize($f));
		ob_clean();
		flush();

		if (readfile($f)) 
		{
			unlink($f);
		}
	} else {
		header('Location: ../error');
	}

} else {
	header('Location: ../error');
}
?>
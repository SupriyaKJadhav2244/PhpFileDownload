<!DOCTYPE html>
<html>
<head>
	<title>File Upload</title>
</head>
<body>
	<form action="fileDownload.php" method="post">  
    Select File:  
	    <input type="file" name="fileToUpload"/><br><br>     
	    <input type="submit" value="Download File" name="DownloadFile"/>
</form>  
</body>
</html>


<?php
	if (isset($_POST['DownloadFile'])) { 
		
		$file_url = 'http://www.javatpoint.com/f.txt';   
		header('Content-Type: application/octet-stream');  
		header("Content-Transfer-Encoding: utf-8");   
		header("Content-disposition: attachment; filename=\"" . basename($file_url) . "\"");   
		readfile($file_url);  
	}
?>
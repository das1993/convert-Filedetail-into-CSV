<?php 
$fileName = 'Files.csv';
 
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header('Content-Description: File Transfer');
header("Content-type: text/csv");
header("Content-Disposition: attachment; filename={$fileName}");
header("Expires: 0");
header("Pragma: public");

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
 

    foreach ($_FILES['files'] as $key => $value) 
    {
    	for ($i=0; $i < sizeof($_FILES['files'][$key] ) ; $i++) { 
    		
    		$UploadedFile[$i]= array($_FILES['files']['name'][$i],$_FILES['files']['size'][$i]);
    	}
    	
    }

   $fh = @fopen( 'php://output', 'w' );

 $header = array("file_name","size");

$headerDisplayed = false;

foreach ($UploadedFile as $data ) {
   
    if ( !$headerDisplayed ) {

        fputcsv($fh, $header);
        $headerDisplayed = true;
    }
 

    fputcsv($fh, $data);
}

fclose($fh);

}

?>

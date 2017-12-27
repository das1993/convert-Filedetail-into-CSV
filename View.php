<html>
<head><title>upload folder</title>

<style type="text/css">
	
	.inputfile {
	width: 0.1px;
	height: 0.1px;
	opacity: 0;
	overflow: hidden;
	position: absolute;
	z-index: -1;
}

.inputfile + label {
       font-size: 1.25em;
    font-weight: 700;
    color: black;
    display: inline-block;
    margin-top: 11px;
    background: white;
    padding: 6px;
    border: 2px solid black
}

.inputfile:focus + label,
.inputfile + label:hover {
    background:  #FF9800;
    
}

.divBox{
	    background: #e7f377;
    border-radius: 5px;
    width: 295px;
    height: 96px;
    margin-top: 19px;
    margin-left: 11px;
}

.button{
	background: #b1d9ea;
    /* border: 3px black; */
    padding: 6px;
    margin-top: 9px;
      border-radius: 5px;
      border: 1px solid #9E9E9E;
}

input:hover {
	background: #cddc39;

  
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
	<body>
	<div class="divBox">
			<center>
			<form method="post" enctype="multipart/form-data" action="http://localhost/upload-folder/action.php">
    		<input type="file" name="files[]" id="files" multiple="" directory="" webkitdirectory="" mozdirectory="" class="inputfile" data-multiple-caption="{count} files selected">
    		<Label for="files"><i class="fa fa-download" aria-hidden="true"></i> Choose Folder/Directory</Label>
    		<input class="button" type="submit" value="Export to CSV"/>
			</form>
			</center>
	</div>	

	</body>
</html>

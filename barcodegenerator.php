<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<!-- jQuery -->

<title>Barcode Generator | Maamedia Tools</title>
<style>
img.barcode {
    border: 1px solid #ccc;
    padding: 20px 10px;
    border-radius: 5px;
}
</style>
</head>
<body class="">
<div role="navigation" class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="https://maamedia.org/toolskit/barcodegenerator.php">Generator</a></li>
           
          </ul>
         
        </div><!--/.nav-collapse -->
      </div>
    </div>
	
	<div class="container" style="min-height:500px;">
	<div class=''>
	</div>
<div class="container">
	<h2>Create free Barcode with Maamedia Tools software.</h2>	
	<br>
	<br>
	<div class="row">	
		<div class="col-md-4">
			<form method="post">
				<div class="row">
					<div class="col-md-8">
						<div class="form-group">
							<label>Product Name or Number</label>
							<input type="text" name="barcodeText" class="form-control" value="<?php echo @$_POST['barcodeText'];?>">
						</div>
					</div>		
				</div>	
				<div class="row">
				   <div class="col-md-6">
						<div class="form-group">
							<label>Barcode Type</label>
							<select name="barcodeType" id="barcodeType" class="form-control">
								<option value="codabar" <?php echo (@$_POST['barcodeType'] == 'codabar' ? 'selected="selected"' : ''); ?>>Codabar</option>
								<option value="code128" <?php echo (@$_POST['barcodeType'] == 'code128' ? 'selected="selected"' : ''); ?>>Code128</option>
								<option value="code39" <?php echo (@$_POST['barcodeType'] == 'code39' ? 'selected="selected"' : ''); ?>>Code39</option>
							</select> 
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						 <div class="form-group">
							 <label>Barcode Display</label>
							 <select name="barcodeDisplay" class="form-control" required>
								<option value="horizontal" <?php echo (@$_POST['barcodeDisplay'] == 'horizontal' ? 'selected="selected"' : ''); ?>>Horizontal</option>
								<option value="vertical" <?php echo (@$_POST['barcodeDisplay'] == 'vertical' ? 'selected="selected"' : ''); ?>>Vertical</option>
							 </select>
						 </div>
					</div>
				</div>	
				<div class="row">
					<div class="col-md-7">
						<input type="hidden" name="barcodeSize" id="barcodeSize" value="20">
						<input type="hidden" name="printText" id="printText" value="true">
						<input type="submit" name="generateBarcode" class="btn btn-success form-control" value="Generate Barcode">
					</div>
				</div>
			</form>
		</div>
		<div class="col-md-4">
		 <?php
			if(isset($_POST['generateBarcode'])) {
				$barcodeText = trim($_POST['barcodeText']);
				$barcodeType=$_POST['barcodeType'];
				$barcodeDisplay=$_POST['barcodeDisplay'];
				$barcodeSize=$_POST['barcodeSize'];
				$printText=$_POST['printText'];
				if($barcodeText != '') {
					echo '<h4>Barcode:</h4>';
					echo '<img class="barcode" alt="'.$barcodeText.'" src="barcode.php?text='.$barcodeText.'&codetype='.$barcodeType.'&orientation='.$barcodeDisplay.'&size='.$barcodeSize.'&print='.$printText.'"/>';
				} else {
					echo '<div class="alert alert-danger">Enter product name or number to generate barcode!</div>';
				}
			}
		?>
		</div>
	</div>		
</div>
<div class="insert-post-ads1" style="margin-top:20px;">
<div class="vector-body multicol-normal" id="bodyContent" style="font-family: sans-serif; font-size: calc(0.875em); line-height: 1.6; position: relative; z-index: 0;"><div class="mw-body-content mw-content-ltr" dir="ltr" id="mw-content-text" lang="fi" style="direction: ltr;"><div class="mw-parser-output"><div style="background-color: #f0d000; border-color: rgb(202, 149, 16) rgb(218, 165, 32) rgb(218, 165, 32) rgb(202, 149, 16); border-image: initial; border-radius: 10px; border-style: solid; border-width: 0.5em; float: left; margin: 0.5em; padding: 0em; text-align: center; width: 280px;"><div style="color: #202122; margin-top: -5px;"><p style="margin: 0.5em 0px;"><a class="image" href="https://g.foolcdn.com/editorial/images/478634/gold-earth.jpg" style="background: none; color: #0645ad; text-decoration-line: none;"><img alt="Puzzle globe banner, bright and close.png" data-file-height="172" data-file-width="797" decoding="async" height="183" src="https://g.foolcdn.com/editorial/images/478634/gold-earth.jpg" srcset="//https://g.foolcdn.com/editorial/images/478634/gold-earth.jpg 1.5x, //https://g.foolcdn.com/editorial/images/478634/gold-earth.jpg 2x" style="border: 0px; margin: 0px; vertical-align: middle;" width="268" /></a></p><div style="line-height: 1em; margin-bottom: 3em; margin-left: 0.5em; margin-top: -4em; text-align: left;"><big><b>CERTIFICATE</b></big></div><div style="line-height: 1em; margin-bottom: 3em; margin-left: 0.5em; margin-top: -4em; text-align: left;"><big><b><br /></b></big></div><div style="line-height: 1em; margin-bottom: 3em; margin-left: 0.5em; margin-top: -4em; text-align: left;"><big><b><br /></b></big></div></div><div style="padding: 0.5em;"><p style="margin: 0.5em 0px;"><b><span style="color: #202122;">Hello! This is </span><span style="color: red;">official</span><span style="color: #202122;"> Maamedia Tools software.</span></b></p><p style="color: #202122; margin: 0.5em 0px;">Certificate ID is: 19626</p><p style="color: #202122; margin: 0.5em 0px;">See certificates in <a href="https://meta.maamedia.org/wiki/Certified_Maamedia_tools">Maamedia Meta</a>.</p></div></div></div></div></div>
</div>
</div>
</body></html>


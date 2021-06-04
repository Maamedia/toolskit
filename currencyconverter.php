<!DOCTYPE html>
<html lan="en_US">
<head>
    <meta charset="utf-8" />
    <title>Curency Converter</title>
    <script type="text/javascript" src="js/jquerycurrency.js"></script>
    <link href='css/currency.bs.css' rel='stylesheet' />
    <link href='css/styles.converter.css' rel='stylesheet' />
    <link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
</head>
<body>
    <div class="container">
        <div class="page-header">
    
        <h1 class="center">Currency Converter</h1>
        </div>
        
        <form class="center" id="conversion" name="converter" action="" method="post" onsubmit="return checkSameCurrency()" role="form">
            <div class="form-group">
                <label for="from">From</label>
                <select name="from" class="form-control text-center" >
                    <?php 	require_once 'assets/modelController.php'; selectFromBox($fromCurrencies) ; ?>
                </select>
            </div>
            <br>
            <div class="form-group">
                <label for="to">To</label>
                <select name="to" class="form-control">
                    <?php 	require_once 'assets/modelController.php'; selectToBox($toCurrencies) ; ?>
                </select>
            </div>
            <br>
            <div class="form-group">
                <label for="c_input">Amount</label>
                <input type="number" step="any" class="form-control" name="camount" required=""/>
            </div>
            <br>
            <input type="submit" value="Convert" name="convert" class="btn btn-success"  />
        </form>
        <hr>
        <div id="result" class="center">
            <?php 	require_once 'assets/currencyController.php' ?>
        </div>
        <hr>
    </div>
    <footer class="center">
        <small>© Copyright <?php echo date("Y"); ?>, Maamedia Tools</small>
        <center><div class="vector-body multicol-normal" id="bodyContent" style="font-family: sans-serif; font-size: calc(0.875em); line-height: 1.6; position: relative; z-index: 0; float:center; text-align:center;"><div class="mw-body-content mw-content-ltr" dir="ltr" id="mw-content-text" lang="fi" style="direction: ltr;"><div class="mw-parser-output"><div style="background-color: #f0d000; border-color: rgb(202, 149, 16) rgb(218, 165, 32) rgb(218, 165, 32) rgb(202, 149, 16); border-image: initial; border-radius: 10px; border-style: solid; border-width: 0.5em; float: left; margin: 0.5em; padding: 0em; text-align: center; width: 280px;"><div style="color: #202122; margin-top: -5px;"><p style="margin: 0.5em 0px;"><a class="image" href="https://g.foolcdn.com/editorial/images/478634/gold-earth.jpg" style="background: none; color: #0645ad; text-decoration-line: none;"><img alt="Puzzle globe banner, bright and close.png" data-file-height="172" data-file-width="797" decoding="async" height="183" src="https://g.foolcdn.com/editorial/images/478634/gold-earth.jpg" srcset="//https://g.foolcdn.com/editorial/images/478634/gold-earth.jpg 1.5x, //https://g.foolcdn.com/editorial/images/478634/gold-earth.jpg 2x" style="border: 0px; margin: 0px; vertical-align: middle;" width="268" /></a></p><div style="line-height: 1em; margin-bottom: 3em; margin-left: 0.5em; margin-top: -4em; text-align: left;"><big><b>CERTIFICATE</b></big></div><div style="line-height: 1em; margin-bottom: 3em; margin-left: 0.5em; margin-top: -4em; text-align: left;"><big><b><br /></b></big></div><div style="line-height: 1em; margin-bottom: 3em; margin-left: 0.5em; margin-top: -4em; text-align: left;"><big><b><br /></b></big></div></div><div style="padding: 0.5em;"><p style="margin: 0.5em 0px;"><b><span style="color: #202122;">Hello! This is </span><span style="color: red;">official</span><span style="color: #202122;"> Maamedia Tools software.</span></b></p><p style="color: #202122; margin: 0.5em 0px;">Certificate ID is: 18892</p><p style="color: #202122; margin: 0.5em 0px;">See certificates in <a href="https://meta.maamedia.org/wiki/Certified_Maamedia_tools">Maamedia Meta</a>.</p></div></div></div></div></div></center>
    </footer>
    <script type="text/javascript" src="js/currency.validate.js"></script>
</body>
</html>

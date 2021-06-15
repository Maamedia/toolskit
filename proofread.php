<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<body id="body">
<title>Proofreading | Maamedia Tools</title>
<style>
body {
  padding: 25px;
  background-color: white;
  color: black;
  font-size: 25px;
}
.overlay {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.9);
  overflow-x: hidden;
  transition: 0.5s;
}

.overlay-content {
  position: relative;
  top: 25%;
  width: 100%;
  text-align: center;
  margin-top: 30px;
}

.overlay a {
  padding: 8px;
  text-decoration: none;
  font-size: 36px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
  color: #f1f1f1;
}

.overlay .closebtn {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
}

@media screen and (max-height: 450px) {
  .overlay a {font-size: 20px}
  .overlay .closebtn {
  font-size: 40px;
  top: 15px;
  right: 35px;
  }
}

</style>


<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Settings</span>
<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
          <div style="font-size:150%; color:white;">Line Numbers</div>
                            <label class="switch">
                                <input onclick="lineNumbers(); return false" type="checkbox" checked>
                                    <span class="slider round"></span>
                            </label>
          <div style="font-size:150%; color:white;">Dark Mode</div>
                            <label class="switch">
                                <input onclick="darkMode(); return false" type="checkbox" checked>
                                    <span class="slider round"></span>
                            </label>
  </div>
</div>

<script>
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
</script>
<div class="container">
	<h2 style="text-align:center;">Proofread the text so that it is free of typos.</h2>	
	<div style="text-align:center; font-size:80%">Text with an error is underlined in <u style="color:red;">red</u>.</div>
	<br>
	<br>

	<div class="row">	
		<div class="col-md-4">
		    
			<form method="post">
				<div class="row">
					<div class="col-md-8">
						<div class="form-group">
							<div style="text-align:center"><label>Text Area</label></div>
<textarea class="form-control" id="proofreadtextarea" rows="9" cols="50" style="margin: 0px -910.016px 0px 0px; width: 1141px; height: 359px;"></textarea>	
                            <button class="btn btn-primary" type="reset" value="Clear text">Clear text</button>
                            <button class="btn btn-warning" type="reload" value="Reload">Reload site</button>   


                        </div>
					</div>		
				</div>	
</body>
</html>
<script>
function lineNumbers() {
  document.getElementById("proofreadtextarea").style.background = "url(http://i.imgur.com/2cOaJ.png)";
  document.getElementById("proofreadtextarea").style.backgroundAttachment = "local";
  document.getElementById("proofreadtextarea").style.backgroundRepeat = "no-repeat";
  document.getElementById("proofreadtextarea").style.paddingLeft = "35px";
  document.getElementById("proofreadtextarea").style.paddingTop = "10px";
  document.getElementById("proofreadtextarea").style.borderColor = "#ccc";
}

function darkMode() {
    document.getElementById("body").style.color = "white";
    document.getElementById("body").style.backgroundColor = "black";
}
</script>


<style>
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;

}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>
<div class="vector-body multicol-normal" id="bodyContent" style="font-family: sans-serif; font-size: calc(0.875em); line-height: 1.6; position: relative; z-index: 0;"><div class="mw-body-content mw-content-ltr" dir="ltr" id="mw-content-text" lang="fi" style="direction: ltr;"><div class="mw-parser-output"><div style="background-color: #f0d000; border-color: rgb(202, 149, 16) rgb(218, 165, 32) rgb(218, 165, 32) rgb(202, 149, 16); border-image: initial; border-radius: 10px; border-style: solid; border-width: 0.5em; float: left; margin: 0.5em; padding: 0em; text-align: center; width: 280px;"><div style="color: #202122; margin-top: -5px;"><p style="margin: 0.5em 0px;"><a class="image" href="https://g.foolcdn.com/editorial/images/478634/gold-earth.jpg" style="background: none; color: #0645ad; text-decoration-line: none;"><img alt="Puzzle globe banner, bright and close.png" data-file-height="172" data-file-width="797" decoding="async" height="183" src="https://g.foolcdn.com/editorial/images/478634/gold-earth.jpg" srcset="//https://g.foolcdn.com/editorial/images/478634/gold-earth.jpg 1.5x, //https://g.foolcdn.com/editorial/images/478634/gold-earth.jpg 2x" style="border: 0px; margin: 0px; vertical-align: middle;" width="268" /></a></p><div style="line-height: 1em; margin-bottom: 3em; margin-left: 0.5em; margin-top: -4em; text-align: left;"><big><b>CERTIFICATE</b></big></div><div style="line-height: 1em; margin-bottom: 3em; margin-left: 0.5em; margin-top: -4em; text-align: left;"><big><b><br /></b></big></div><div style="line-height: 1em; margin-bottom: 3em; margin-left: 0.5em; margin-top: -4em; text-align: left;"><big><b><br /></b></big></div></div><div style="padding: 0.5em;"><p style="margin: 0.5em 0px;"><b><span style="color: #202122;">Hello! This is </span><span style="color: red;">official</span><span style="color: #202122;"> Maamedia Tools software.</span></b></p><p style="color: #202122; margin: 0.5em 0px;">Certificate ID is: 26730</p><p style="color: #202122; margin: 0.5em 0px;">See certificates in <a href="https://meta.maamedia.org/wiki/Certified_Maamedia_tools">Maamedia Meta</a>.</p></div></div></div></div></div>

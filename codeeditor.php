<!DOCTYPE html>
<html>
<head>

  <!-- Site Information -->
  <meta charset="utf-8" />
  <title>Code Editor (Live) | Maamedia Tools</title>
  <meta name="description" content="Maamedia Tools: free online realtime code editor." />
  <meta name="keywords" content="editor, realtime editor, jsfiddle, codepen, stackoverflow, HTML, CSS, JavaScript" />
  <meta property="og:title" content="Code Editor Maamedia Tools" />
  <meta property="og:url" content="https://maamedia.org/toolskit/codeeditor.php" />
  <meta property="og:description" content="Maamedia Tools: free online realtime code editor." />

  <!-- Cascading Style Sheets -->
  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
  <link href="css/global.css" rel="stylesheet">

  <!-- JavaScript -->
  <script src="js/jquery.min.js" type="text/javascript"></script>
  <script src="js/editor.js" type="text/javascript"></script>

  <!-- Mobile Settings -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no, minimal-ui" />
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="format-detection" content="telephone=no">

</head>
<body>
  <section>
    <h1>Live Code Editor</h1><a class="clearLink" href="#" title="Click to clear all">clear</a>
    <textarea id="html" value="" placeholder="HTML" autocapitalize="off" autofocus></textarea>
    <textarea id="css" value="" placeholder="CSS" autocapitalize="off"></textarea>
    <textarea id="js" value="" placeholder="JavaScript" autocapitalize="off"></textarea>
    <iframe id="preview"></iframe>
  </section>
</body>
</html>

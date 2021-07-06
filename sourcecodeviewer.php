<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

<?php

// Disable a WebKit security feature
// which would prevent from showing the source code.
header('X-XSS-Protection: 0');

if (isset($_GET['source']) || isset($_POST['source'])) {
        $source = file_get_contents($_POST['source']);

        // To prevent this control from showing up
        // in the output source code
        // enable the code below.
        /*
        $lines_to_remove = 26;
        $source = explode("\n", $source, $lines_to_remove);
        $source = $source[$lines_to_remove - 1];
        */

        $source = highlight_string($source, true);
        echo $source;

        return;
}

?>
<h1>Website Source Code Viewer</h1>

<?php

//show user input
$source=@$_POST['source'];
echo '<br>Website: '.$source;

?>
<form action="" method="post">
    <div class="form-group">
    <input type="text" name="source" class="form-control">
    <button class="btn btn-primary" type="submit" value="Refresh">Go</button>
    </div>
</form>

<h1 style="font-size:180%">About this Tool</h1>
<p>This tool is Powered by <span style="font-weight:bold;">Maamedia Tools</span> and it's show all other website's HTML, JavaScript and CSS source code.</p>
<img src="https://commons.maamedia.org/images/4/40/Powered_by_MaamediaTools.png">
<p><a href="https://github.com/maamedia/">This tool Source Code</a></p><p><a href="https://maamedia.org">Maamedia.org</a></p><p><a href="https://maamedia.org/toolskit">Toolskit</a></p><p><a href="https://maamedia.org/privacy-policy/">Privacy Policy</a></p><p style="font-weight:bold">Certificate: 67201</p>
<style>
body {
    margin: 50px;
}
form {
    width: 600px;
}
h1, p {
    text-align: center;
}
</style>

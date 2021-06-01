<!DOCTYPE html>
<html>
    <title>MD5 Hash Generator | Maamedia Tools</title>
    <head><style>
        
        *{
            font-family:arial;
            font-size:100%
        }
        

        
        body{
            margin: auto; 
            width:600px;
            height:100%
        }
        
        h1{
        margin: 2em 0;}
        
        input {
            border: dashed 1px black;
                margin: 0em 2em 2em 0em;
    padding: 1em;
}
   
                input[type="submit"] {
    background: black;
    color: white;
            border: 0;
}
        
        </style>
        
    </head>
<body>


    
    
    <?php

 echo "<h1>MD5 Hash Generator</h1>";

	echo '<form action="'.$PHP_SELF.'" method="post">
 
<h2>Password:</h2>
	<input name="password">
 
	<input type="submit" name="md5" value="Generate">
 
	</form>';


echo "<h2>MD5-Hash:</h2>";
echo "<h3>". md5($_POST["password"]) ."</h3>";
 
?>
<p><small>This MD5 Hash Generator is one of Maamedia Tools. This production version is 1.0. Upcoming productions can be followed on GitHub <a href="https://github.com/Maamedia/toolskit/blob/main/md5.php">here</a>.</small></p>
</body>
</html>

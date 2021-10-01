<!DOCTYPE html>
<html>
  
<head>
    <title>
        How to pass variables and data
        from PHP to JavaScript?
    </title>
</head>
  
<body style="text-align:center;">
      
    <h1 style="color:green;">GeeksforGeeks</h1>
      
    <h4>
        How to pass variables and data
        from PHP to JavaScript?
    </h4>
    <script>
    var p1 = 'http://52.66.204.194:8000/github/Enterprise';
    console.log(p1);
    </script>
     
    <?php
    	$domain="<script>document.writeln(p1);</script>";
    	require("simple_html_dom.php");
		echo "hello Printing php";
        echo $domain;
		$html = file_get_html($domain);

		$final=$html->plaintext;
        echo $final;
        echo "end of php";
    ?>
  
    <script type="text/javascript">
        var x = "<?php echo"$final"?>";
        document.write(x);
        console.log("Javascript"+x);
        console.log("Hiiiii");
    </script>
</body>
  
<html>

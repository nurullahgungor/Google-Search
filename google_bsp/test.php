

<!DOCTYPE html>
 <html>
<head>
     <title>Google search box in PHP website </title>
</head>
<body>
     <form action="test.php" method="post">
          <input name="searchbox" type="text">
          <input type="submit" value="Search">
     </form>
	 <?php 
	 ob_start();
     //collect
     if(isset($_POST['searchbox'])){
          $searchbox=$_POST['searchbox'];
          //echo $searchbox;
          header("Location: https://www.google.com/search?q=".$searchbox);
     }
?>
 </body>
 </html

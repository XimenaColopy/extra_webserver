<?php
   if( $_GET["name"] || $_GET["age"] ) { 
	  $name = $_GET['name'];
      echo "Welcome $name <br />";
      echo "You are ". $_GET['age']. " years old.";
      
      exit();
   }
?>
<html>
   <body>
   
      <form action = "<?php $_PHP_SELF ?>" method = "GET"> <!-- This line is kind of confusing. Basically '<?php $_PHP_SELF ?>' is embedded php in this html '$_PHP_SELF' is a variable that repersents this file. You could theoretically have this be an html file and instead of "<?php $_PHP_SELF ?>" have the path to a different php file. After this form is excuted the php above is going to be executed. You don't need to memorize this just have a basic understanding of what is going on  --> 
         Name: <input type = "text" name = "name" />
         Age: <input type = "text" name = "age" />
         <input type = "submit" /> <!-- creates submit button that submits all the information in the form --> 
      </form>
      
   </body>
</html>

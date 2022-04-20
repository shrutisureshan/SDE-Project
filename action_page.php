<?php 
      //connection to the database 
      $servername = "localhost";  
       $firstname = "spri";  
       $lastname = "1234";  
       // create connection string
       $conn = mysql_connect ($servername , $firstname , $lastname) or die("unable to connect to host");  

       
       $sql = mysql_select_db ('newdb',$conn) or die("unable to connect to database");     
            
      // sql Query 
        $sql = "select * from form";    


        $result = mysql_query($sql);  
          
       // verification of result 
        if($result)
        {
            echo "true";
        }
        else{

            echo "false";
        }
?>
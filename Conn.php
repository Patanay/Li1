<?php
   $conn = pg_connect("host=ec2-54-87-34-201.compute-1.amazonaws.com port=5432 dbname=dedlg7nokqgirj user=gkployqpqsndvv password=e6d2be1e0ad461a6a5cb012ce399dba704be2eb7f3f9ec0a55bbb93d5035784c");
   if(!$conn) {
      echo "Error : Unable to open database\n"; 
   } else {
      echo "Opened database successfully\n";
   }
error_reporting(0);
?>

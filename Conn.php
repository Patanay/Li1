<?php
   $host        = "host = 127.0.0.1";
   $port        = "port = 5432";
   $dbname      = "dbname = testdb";
   $credentials = "user = postgres password=pass123";

   $db = pg_connect("host=ec2-54-87-34-201.compute-1.amazonaws.com port=5432 dbname=dedlg7nokqgirj user=gkployqpqsndvv password=e6d2be1e0ad461a6a5cb012ce399dba704be2eb7f3f9ec0a55bbb93d5035784c");
   if(!$db) {
      echo "Error : Unable to open database\n"; 
   } else {
      echo "Opened database successfully\n";
   }
$sql =<<<EOF
      DROP TABLE company;
EOF;
   $ret = pg_query($db, $sql);
   if(!$ret) {
      echo pg_last_error($db);
      exit;
   } 
   
   echo "Operation done successfully\n";
   pg_close($db);
echo"HO Gaya Hey5";
?>

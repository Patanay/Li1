<?php
   //$conn = pg_connect("host=ec2-54-87-34-201.compute-1.amazonaws.com port=5432 dbname=dedlg7nokqgirj user=gkployqpqsndvv password=e6d2be1e0ad461a6a5cb012ce399dba704be2eb7f3f9ec0a55bbb93d5035784c");
  $conn = pg_connect("host=ec2-34-193-112-164.compute-1.amazonaws.com port=5432 dbname=d2npov84jjvu5s user=voghnfirazvdxe password=8b9ecc072ebb19975c1eb28b9637a12e459e726bf150995455e601e93141f9c0");
 if(!$conn) {
      echo "Error : Unable to open database\n"; 
   } else {
      echo "";
   }
error_reporting(0);
?>

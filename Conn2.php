<?php include("Conn.php");
$sql1 =<<<EOF
      CREATE TABLE movie1
      (id SERIAL PRIMARY KEY NOT NULL,
      name  VARCHAR(50)    NOT NULL);
EOF;
   $ret1 = pg_query($conn, $sql1);
   if(!$ret1) {
      echo pg_last_error($conn);
   } else {
      echo "Table created successfully\n";
   }
   
$sql2 =<<<EOF
      CREATE TABLE movie2
      (id SERIAL PRIMARY KEY NOT NULL,
      name  VARCHAR(50)    NOT NULL);
EOF;
   $ret2 = pg_query($conn, $sql2);
   if(!$ret2) {
      echo pg_last_error($conn);
   } else {
      echo "Table created successfully\n";
   }
   
$sql3 =<<<EOF
      CREATE TABLE movie3
      (id SERIAL PRIMARY KEY NOT NULL,
      name  VARCHAR(50)    NOT NULL);
EOF;
   $ret3 = pg_query($conn, $sql3);
   if(!$ret3) {
      echo pg_last_error($conn);
   } else {
      echo "Table created successfully\n";
   }
   
$sql4 =<<<EOF
      CREATE TABLE movie4
      (id SERIAL PRIMARY KEY NOT NULL,
      name  VARCHAR(50)    NOT NULL);
EOF;
   $ret4 = pg_query($conn, $sql4);
   if(!$ret4) {
      echo pg_last_error($conn);
   } else {
      echo "Table created successfully\n";
   }
   
$sql5 =<<<EOF
      CREATE TABLE movie5
      (id SERIAL PRIMARY KEY NOT NULL,
      name  VARCHAR(50)    NOT NULL);
EOF;
   $ret5 = pg_query($conn, $sql5);
   if(!$ret5) {
      echo pg_last_error($conn);
   } else {
      echo "Table created successfully\n";
   }
   pg_close($conn);
?>

<?php
$conn=pg_connect("host=ec2-54-87-34-201.compute-1.amazonaws.com port=5432 dbname=dedlg7nokqgirj user=gkployqpqsndvv password=e6d2be1e0ad461a6a5cb012ce399dba704be2eb7f3f9ec0a55bbb93d5035784c");
if($conn)
{
	echo"Successfull";
	}
	else{
		echo "Connection Failed";
		}
$sqlList = "CREATE TABLE IF NOT EXISTS sampleTable (
id serial PRIMARY KEY,
sampleField character varying(20) NOT NULL UNIQUE
)";

$conn->exec($sqlList);
		?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<?php
/* $dbhost = 'localhost';
$dbuser = '	root';
$dbpass = '';
$db='delegacje'; */

/*$dbhost = 'sql11.freesqldatabase.com';
$dbuser = '	sql11486207';
$dbpass = 'llLSMBYgR9';
$db = 'delegacje';
$port = '3306'; */

define("DB_SERVER", "sql11.freesqldatabase.com");
define("DB_USER", "sql11486207");
define("DB_PASSWORD", "llLSMBYgR9");
define("DB_DATABASE", "sql11486207");
define("DB_PORT", "3306");

// Create connection
$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE, DB_PORT) or die("failed");
//$db = mysqli_connect($dbhost, $dbuser, $dbpass, $db) or die("failed");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

//$sqlquery = "INSERT INTO delegacje_tab (,FROM_,TO_,M_WYJAZDU,M_PRZYJAZDU )
//VALUES ('T1','T1','T1','T1',
//'T1')";

//data: { NIP:NIP, REGON:REGON, NAZWA:NAZWA,PLATNIK:PLATNIK, ULICA:ULICA ,N_DOMU:N_DOMU,N_MIESZKANIA:N_MIESZKANIA},

$NIP = $_POST['REGON'];

//echo $NIP;
$REGON = $_POST['REGON'];
$NAZWA = $_POST['NAZWA'];
$PLATNIK = $_POST['PLATNIK'];
$ULICA = $_POST['ULICA'];
$N_DOMU = $_POST['N_DOMU'];
$N_MIESZKANIA = $_POST['N_MIESZKANIA'];

/* 
$NIP = 'NIP';
$REGON = 'REGON';
$NAZWA = 'NAZWA';
$PLATNIK = 'PLATNIK';
$ULICA = 'ULICA';
$N_DOMU = 'N_DOMU';
$N_MIESZKANIA = 'N_MIESZKANIA';
 */

//var_dump($author);


$sqlquery = "INSERT INTO kontrahenci_db (NIP,REGON,NAZWA,CZY_PLATNIK_VAT,ULICA,NR_DOMU,NR_MIESZKANIA) VALUES ('NIP','$REGON','NAZWA','PLATNIK','ULICA',
//'N_DOMU','N_MIESZKANIA');";

//$sqlquery = "INSERT INTO kontrahenci_db (Lp,IMIE_NAZWISKO,DATA_OD,DATA_DO,M_WYJAZDU,M_PRZYJAZDU) VALUES ('999','1','1','1','1','1');";



if ($conn->query($sqlquery) === TRUE) {
    echo "record inserted successfully";
} else {
    echo "Error: " . $sqlquery . "<br>" . $conn->error;
}



$conn->close();
 

//$conn = mysql_connect($dbhost, $dbuser, $dbpass,$db);

//Lp:LP, NAMES:NAMES, FROM:FROM, TO:TO, M_WYJAZDU:M_WYJAZDU, M_PRZYJAZDU:M_PRZYJAZDU

/* if (!$conn)
{
die('Could not connect: ' . mysql_error());
} */

//if (!get_magic_quotes_gpc())
//{
// $LP = addslashes($_POST['LP']);
/*
$NAMES = addslashes($_POST['NAMES']);
$FROM = addslashes($_POST['FROM']);
$TO = addslashes($_POST['TO']);
$M_WYJAZDU = addslashes($_POST['M_WYJAZDU']);
$M_PRZYJAZDU = addslashes($_POST['M_PRZYJAZDU']);
} else
{
/* $author = $_POST['name'];
$mousepositions = $_POST['position'];
*/
// $LP =$_POST['LP']);


/*$NAMES = $_POST['NAMES'];
$FROM = $_POST['FROM'];
$TO = $_POST['TO'];
$M_WYJAZDU = $_POST['M_WYJAZDU'];
$M_PRZYJAZDU = $_POST['M_PRZYJAZDU'];
}*/

//var_dump($author);
/*
$sql = "INSERT INTO Delegacje_tab (NAMES,FROM_,TO_,M_WYJAZDU,M_PRZYJAZDU ) VALUES ('$NAMES','$FROM','$TO','$M_WYJAZDU',
'$M_PRZYJAZDU')";


mysql_select_db('db_to_use');
$retval = mysql_query($sql, $conn);

if (!$retval) {
    die('Could not enter data: ' . mysql_error());
}

echo "Entered data successfully\n";*/
//mysql_close($conn);

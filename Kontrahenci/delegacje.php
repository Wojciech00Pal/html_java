<!DOCTYPE HTML>
<html>
	<!--
		@author Ben Poole, http://benpoole.com
		Example HTML5 code for playing with the local WebKit (Opera too?) SQL database.
		@see http://benpoole.com/weblog/201106222227
	-->
	<head>

	<title>Rekrutacja_2022!</title>
	
		<style type="text/css">
		body {font-family: Helvetica, sans-serif; font-size: 100%; line-height: 1.4em}
		input, button {width: 25em; font-size: 100%; padding: .25em}
		</style>

		<link rel="stylesheet" href="index.css">

	</head>

	<body>
	<div class="sidebar">
	<ul>	
	 <li>
		<a href="index.html">
			<span class="text">Różne kontrolki </span>
		</a>
	</li>
	<li>	
	 <a href="tabela_pracownikow.html">
		<span class="text">Tabela Pracowników</span>
	</a>
	</li>
	<li> 
	 <a href="faktury.html">
		<span class="text">Tabela Faktur VAT</span>
	</a>
	</li>
	<li> 
	 <a href="delegacje.html">
		 <span class="text"> Tabela Delegacji BD</span>
		</a>
	</li> 
	<li> 
		<a href="#">
			<span class="text">Dane Kontrahentów</span>
		   </a>
	   </li> 
	

	</ul> 
	</div>
	<div class="page">
	<table>	
    <tr>
    <th>L.p</th>   
    <th>Imie i Nazwisko</th>   
    <th>Data od</th>   
    <th>Data do</th>   
    <th>Miejsce wyjazdu</th>   
    <th>Miejsce przyjazdu</th>   
    </tr>

	<?php
    $conn = mysqli_connect("sql11.freesqldatabase.com","sql11486207","llLSMBYgR9","Delegacje","3306");
    if($conn->connect_error){
        die("Connection failed:" .$conn->connect_error);
    }

    $sql= "SELECT * FROM `Delegacje`";
    $result =$conn ->query($sql);

    if($result->num_rows >0){
        while($row=$result->fetch_assoc()){
            echo "<tr><td>".$row["L.p"]."</td><td>".$row["IMIE_NAZWISKO"]."</td><td>".$row["DATA_OD"]."</td><td>".
            $row["DATA_DO"]."</td><td>".$row["M_WYJAZDU"]."</td><td>".$row["M_PRZYJAZDU"]."</td></tr>";
        }
       echo "</table>"; 
    }
    else{
        echo "0 result";
    }
    $conn->close();

    ?>

	</div>

	</body>



</html>
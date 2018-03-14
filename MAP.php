<!DOCTYPE html>
<html>
  <head>
	<?php 
	 echo "<br>";
	include ("Connect.php");

	
		  
	?>
    <meta charset="UTF-8" http-equiv="refresh" content="15">
    <title>Table Grid</title>
	<style>
		html {background-color: white;}
		table, th, td {
			border: 5px solid black;
			border-spacing: 5px;
			border-radius: 15px;
			padding: 10px;
			
		}
		th {color:white;
			text-shadow: 2px 2px 5px red;
			}
		table { height: 100%; width:100%; 
			text-align: center;}
		button{border-radius:10px;
			background-color:#74fc25;}
		td {background: red;
		}
		P,th {font-size: 17px;
			text-align: center;}
	 	table{ background-color: black;}
		#row { background-color: #34f409;
			font-size: 10px;
		}
		iframe {width:auto;
				height:30%;}
		
		
		</style>
		
  </head>
  <body>
  <script> 
			function col(){ var myWindow = window.open("Pallet_Scan_in.php?Location=<?php echo $A; ?>", "", "width=300,height=300");
			} 
		</script>
  <?php
	
    
	
	?>
<table name="table1" style="width:100%" "height:100%" border="5px" >
		
  <tr>
    <th id = "row"> POS.</th><th>1</th> <th>2</th> <th>3</th> <th>4</th> <th>5</th> <th>6</th>
    <th>7</th> <th>8</th> <th>9</th> <th>10</th> <th>11</th> <th>12</th>
  </tr>
	
	<?php
			

			
			$sqlA = "SELECT PalletLocation, So FROM tbl_staging 
			WHERE PalletLocation LIKE 'A%' 
			ORDER BY PalletLocation + 0 ASC;";
			
			$sqlB = "SELECT PalletLocation, So FROM tbl_staging 
			WHERE PalletLocation LIKE 'B%' 
			ORDER BY PalletLocation + 0 ASC;";
			
			$sqlC = "SELECT PalletLocation, So FROM tbl_staging 
			WHERE PalletLocation LIKE 'C%' 
			ORDER BY PalletLocation + 0 ASC;";
			
			$sqlD = "SELECT PalletLocation, So FROM tbl_staging 
			WHERE PalletLocation LIKE 'D%' 
			ORDER BY PalletLocation + 0 ASC;";
			
			$sqlE = "SELECT PalletLocation, So FROM tbl_staging 
			WHERE PalletLocation LIKE 'E%' 
			ORDER BY PalletLocation + 0 ASC;";
			
			$sqlT = "SELECT PalletLocation, So FROM tbl_staging 
			WHERE PalletLocation LIKE 'T%' 
			ORDER BY PalletLocation + 0 ASC;";
			
			$sqlR = "SELECT PalletLocation, So FROM tbl_staging 
			WHERE PalletLocation LIKE 'R%' 
			ORDER BY PalletLocation + 0 ASC;";
			
			

			
	?>
	
	
	<!--- Outputs row A  --->
 <tr>
 
 <td id = "row"  name = "row"> A </td>
 
	<?php
		$result = $conn->query($sqlA);
		if ($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
			$A = $row['PalletLocation'];	
	?>
		
		
		<td name = "row" id = "<?php Echo $A;?>"> 
		
		<?php
			echo "";
			echo $row['PalletLocation'] ." <> ". "<button  value = . $A . onclick = col();>" . $row['So'];
			if($row['So']== 0 or $row['So']== null){
				
				echo "<script>document.getElementById('$A').style.backgroundColor='green';</script>";
				
			}
			echo "<br>";
		}
	}
		?>
		
			</button>
	</td> 
 </tr>
	<!--- Outputs row B  --->
<tr>
<td id = "row" > B </td>
	<?php
			
		$result = $conn->query($sqlB);
		if ($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
			$B = $row['PalletLocation'];
	?>
	<td  name = "Location" id = "<?php Echo $B;?>">
	
	
		<?php
			
			echo $row['PalletLocation'] ." <> ". "<button onclick = col();>". $row['So'];
			
			if($row['So']== 0 or $row['So']== null){
				
				echo "<script>document.getElementById('$B').style.backgroundColor='green';</script>";
				
			}
			echo "<br>";
		}
	}
	?>
	</td> 
	
  </tr>
	<!--- Outputs row C  ---> 
 
 <tr>
 <td id = "row" > C </td>
	<?php
			
		$result = $conn->query($sqlC);
		if ($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
			$C = $row['PalletLocation'];
	?>
	<td id = "<?php Echo $C;?>">
	
	
		<?php
			
			echo $row['PalletLocation'] ." <> ". "<button onclick = col();>". $row['So'];
			if($row['So']== 0 or $row['So']== null){
				
				echo "<script>document.getElementById('$C').style.backgroundColor='green';</script>";
			}
			echo "<br>";
		}
	}
	?>
	</td>
	
  </tr>

	<!--- Outputs row D  ---> 
 
 <tr>
 <td id = "row" > D </td>
	<?php
			
		$result = $conn->query($sqlD);
		if ($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
			$D = $row['PalletLocation'];
	?>
	<td id = "<?php Echo $D;?>">
	
	
		<?php
			
			echo $row['PalletLocation'] ." <> ". "<button onclick = col();>". $row['So'];
			if($row['So']== 0 or $row['So']== null){
				
				echo "<script>document.getElementById('$D').style.backgroundColor='green';</script>";
			}
			echo "<br>";
		}
	}
	?>
	</td>
	
  </tr>
  
	<!--- Outputs row E  ---> 
 
 <tr>
 <td id = "row" > E </td>
	<?php
			
		$result = $conn->query($sqlE);
		if ($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
			$E = $row['PalletLocation'];
	?>
	<td id = "<?php Echo $E;?>">
	
	
		<?php
			
			echo $row['PalletLocation'] ." <> ". "<button onclick = col();>". $row['So'];
			if($row['So']== 0 or $row['So']== null){
				
				echo "<script>document.getElementById('$E').style.backgroundColor='green';</script>";
			}
			echo "<br>";
		}
	}
	?>
	</td>
	
  </tr>

  
	<!--- Outputs row T  ---> 
 
 <tr>
 <td id = "row" > T </td>
	<?php
			
		$result = $conn->query($sqlT);
		if ($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
			$T = $row['PalletLocation'];
	?>
	<td id = "<?php Echo $T;?>">
	
	
		<?php
			
			echo $row['PalletLocation'] ." <> ". "<button onclick = col();>". $row['So'];
			if($row['So']== 0 or $row['So']== null){
				
				echo "<script>document.getElementById('$T').style.backgroundColor='green';</script>";
			}
			echo "<br>";
		}
	}
	?>
	</td>
	
  </tr>
  
	<!--- Outputs row R  ---> 
 
 <tr>
 <td id = "row" > R </td>
	<?php
			
		$result = $conn->query($sqlR);
		if ($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
			$R = $row['PalletLocation'];
	?>
	<td id = "<?php Echo $R;?>" >
	
	
		<?php
			
			echo $row['PalletLocation'] ." <> ". "<button onclick = col();>". $row['So'];
			if($row['So']== 0 or $row['So']== null){
				
				echo "<script>document.getElementById('$R').style.backgroundColor='green';</script>";
			}
			echo "<br>";
		}
	}
	
	
	?>
	</td>
	
  </tr>
  </table>
  <?php 
	$sql = "SELECT
		tbl_staging.PalletLocation,
		tbl_staging.So,
		saw_order.Wo,
		saw_order.Status
		FROM saw_order
		INNER JOIN tbl_staging
			ON saw_order.Wo = tbl_staging.So
		GROUP BY tbl_staging.PalletLocation,
         tbl_staging.So,
         saw_order.Wo,
         saw_order.Status
		HAVING saw_order.Status = 80 or saw_order.Status = 81";
		$result = $conn->query($sql);
		if ($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
				
			$pal = $row["PalletLocation"];

				if($row["Status"] == 80 or $row["Status"] == 81){
					$sql2 = "update tbl_staging set So = null where PalletLocation = \"$pal\"";
					$result = $conn->query($sql2);
				}
			}
			
		}
	
  ?>
  
 </body>
 <?php
	mysqli_close($conn);
 ?>
 </html>
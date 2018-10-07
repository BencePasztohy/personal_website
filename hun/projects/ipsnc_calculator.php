<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../../css/main.css">
    <title>Eredmény <?php include('../title.html'); ?></title>
</head>

<body id="bg-img">
<?php include("../header.php"); ?>
<main id="php_subnet_calc">
<?php include('include/lang-selector.php'); ?>
	<div class="subnet">
		<?php
		
		function backButton() {
			echo '<a href="http://localhost/portfolio.ws/hun/projects/php_subnet_calc.php" class="button">Vissza</a>';
		}
		function safety($input) {
			$input = trim($input);
			$input = stripslashes($input);
			$input = htmlspecialchars($input);
			return $input;
		}
		function validateIp($input) {
			if ($input == "") {
				// echo "No IP or SM entered.<br>";
				echo "Üres IP vagy SM mező.<br>";
				backButton();
				die;
			} else if (filter_var($input, FILTER_VALIDATE_IP)) {
				return $input;
			} else {
				// echo "$input is not a valid IP address.<br>";
				echo "$input nem egy valós IP cím.<br>";
				backButton();
				die;
			}
		}
		function validateSm($input) {
			if ($input == "") {
				// echo "No IP or SM entered.<br>";
				echo "Üres IP vagy SM mező.<br>";
				backButton();
				die;
			} else if ($input < 1 || $input > 32) {
				// echo "$input is not a valid Subnet Mask.<br>";
				echo "$input nem egy valódi Alhálózati Maszk.<br>";
				backButton();
				die;
			} else if ($input > 30) {
				// echo "No assignable addresses with Subnet Mask $input.<br>";
				echo "$input. Alhálózati Maszkkal nincs kiosztható IP cím.<br>";
				backButton();
				die;
			} else return $input;
		}
		function separater ($delimiters,$string) {
			$ready=str_replace($delimiters, $delimiters[0], $string);
			$launch=explode($delimiters[0], $ready);
			return $launch;
		}
		$input_ip = safety($_GET["input_ip"]);
		$input_sm = safety($_GET["input_sm"]);
		$input_ip = validateIp($input_ip);
		$input_sm = validateSm($input_sm);
		
		$input_ip=separater(array(".",".",".","."),$input_ip);
		$input = array($input_ip[0], $input_ip[1], $input_ip[2], $input_ip[3], $input_sm);

		$last_ip=array(-1,-1,-1,-1);
		$sm=array(255,255,255,255);
		switch ($input[4]) {
			case "1":
				$sm[0]=128;
				$sm[1]=0;
				$sm[2]=0;
				$sm[3]=0;
				$last_ip[1]=255;
				$last_ip[2]=255;
				$last_ip[3]=255;
				break;
			case "2":
				$sm[0]=192;
				$sm[1]=0;
				$sm[2]=0;
				$sm[3]=0;
				$last_ip[1]=255;
				$last_ip[2]=255;
				$last_ip[3]=255;
				break;
			case "3":
				$sm[0]=224;
				$sm[1]=0;
				$sm[2]=0;
				$sm[3]=0;
				$last_ip[2]=255;
				$last_ip[1]=255;
				$last_ip[3]=255;
				break;
			case "4":
				$sm[0]=240;
				$sm[1]=0;
				$sm[2]=0;
				$sm[3]=0;
				$last_ip[1]=255;
				$last_ip[2]=255;
				$last_ip[3]=255;
				break;
			case "5":
				$sm[0]=248;
				$sm[1]=0;
				$sm[2]=0;
				$sm[3]=0;
				$last_ip[1]=255;
				$last_ip[2]=255;
				$last_ip[3]=255;
				break;
			case "6":
				$sm[0]=252;
				$sm[1]=0;
				$sm[2]=0;
				$sm[3]=0;
				$last_ip[1]=255;
				$last_ip[2]=255;
				$last_ip[3]=255;
				break;
			case "7":
				$sm[0]=254;
				$sm[1]=0;
				$sm[2]=0;
				$sm[3]=0;
				$last_ip[1]=255;
				$last_ip[2]=255;
				$last_ip[3]=255;
				break;
			case "8":
				$sm[0]=255;
				$sm[1]=0;
				$sm[2]=0;
				$sm[3]=0;
				$last_ip[1]=255;
				$last_ip[2]=255;
				$last_ip[3]=255;
				break;
			case "9":
				$sm[1]=128;
				$sm[2]=0;
				$sm[3]=0;
				$last_ip[2]=255;
				$last_ip[3]=255;
				break;
			case "10":
				$sm[1]=192;
				$sm[2]=0;
				$sm[3]=0;
				$last_ip[2]=255;
				$last_ip[3]=255;
				break;
			case "11":
				$sm[1]=224;
				$sm[2]=0;
				$sm[3]=0;
				$last_ip[2]=255;
				$last_ip[3]=255;
				break;
			case "12":
				$sm[1]=240;
				$sm[2]=0;
				$sm[3]=0;
				$last_ip[2]=255;
				$last_ip[3]=255;
				break;
			case "13":
				$sm[1]=248;
				$sm[2]=0;
				$sm[3]=0;
				$last_ip[2]=255;
				$last_ip[3]=255;
				break;
			case "14":
				$sm[1]=252;
				$sm[2]=0;
				$sm[3]=0;
				$last_ip[2]=255;
				$last_ip[3]=255;
				break;
			case "15":
				$sm[1]=254;
				$sm[2]=0;
				$sm[3]=0;
				$last_ip[2]=255;
				$last_ip[3]=255;
				break;
			case "16":
				$sm[1]=255;
				$sm[2]=0;
				$sm[3]=0;
				$last_ip[2]=255;
				$last_ip[3]=255;
				break;
			case "17":
				$sm[2]=128;
				$sm[3]=0;
				$last_ip[3]=255;
				break;
			case "18":
				$sm[2]=192;
				$sm[3]=0;
				$last_ip[3]=255;
				break;
			case "19":
				$sm[2]=224;
				$sm[3]=0;
				$last_ip[3]=255;
				break;
			case "20":
				$sm[2]=240;
				$sm[3]=0;
				$last_ip[3]=255;
				break;
			case "21":
				$sm[2]=248;
				$sm[3]=0;
				$last_ip[3]=255;
				break;
			case "22":
				$sm[2]=252;
				$sm[3]=0;
				$last_ip[3]=255;
				break;
			case "23":
				$sm[2]=254;
				$sm[3]=0;
				$last_ip[3]=255;
			case "24":
				$sm[3]=0;
				$last_ip[3]=255;
				break;
			case "25":
				$sm[3]=128;
				break;	
			case "26":
				$sm[3]=192;
				break;
			case "27":
				$sm[3]=224;
				break;
			case "28":
				$sm[3]=248;
				break;	
			case "29":
				$sm[3]=252;
				break;
			case "30":
				$sm[3]=254;
				break;	
			default:
				$sm[3]=0;
		}
		
		$first_ip=array(
			(sprintf('%08d',decbin($input[0])) & sprintf('%08d',decbin($sm[0]))),
			(sprintf('%08d',decbin($input[1])) & sprintf('%08d',decbin($sm[1]))),
			(sprintf('%08d',decbin($input[2])) & sprintf('%08d',decbin($sm[2]))),
			(sprintf('%08d',decbin($input[3])) & sprintf('%08d',decbin($sm[3]))));
		
		if ($last_ip[0]<0) {
			switch ($input[4]) {
				case "1":
					$last_ip[0]=bindec($first_ip[0])+127;
					break;
				case "2":
					$last_ip[0]=bindec($first_ip[0])+63;
					break;
				case "3":
					$last_ip[0]=bindec($first_ip[0])+31;
					break;
				case "4":
					$last_ip[0]=bindec($first_ip[0])+15;
					break;	
				case "5":
					$last_ip[0]=bindec($first_ip[0])+7;
					break;	
				case "6":
					$last_ip[0]=bindec($first_ip[0])+3;
					break;	
				case "7":
					$last_ip[0]=bindec($first_ip[0])+1;
					break;	
				default:
					$last_ip[0]=bindec($first_ip[0]);
			}
		}
		if ($last_ip[1]<0) {
			switch ($input[4]) {
				case "8":
					$last_ip[1]=bindec($first_ip[1])+255;
					break;
				case "9":
					$last_ip[1]=bindec($first_ip[1])+127;
					break;
				case "10":
					$last_ip[1]=bindec($first_ip[1])+63;
					break;
				case "11":
					$last_ip[1]=bindec($first_ip[1])+31;
					break;
				case "12":
					$last_ip[1]=bindec($first_ip[1])+15;
					break;	
				case "13":
					$last_ip[1]=bindec($first_ip[1])+7;
					break;	
				case "14":
					$last_ip[1]=bindec($first_ip[1])+3;
					break;	
				case "15":
					$last_ip[1]=bindec($first_ip[1])+1;
					break;	
				default:
					$last_ip[1]=bindec($first_ip[1]);
			}
		}
		if ($last_ip[2]<0) {
			switch ($input[4]) {
				case "16":
					$last_ip[2]=bindec($first_ip[2])+255;
					break;
				case "17":
					$last_ip[2]=bindec($first_ip[2])+127;
					break;
				case "18":
					$last_ip[2]=bindec($first_ip[2])+63;
					break;
				case "19":
					$last_ip[2]=bindec($first_ip[2])+31;
					break;	
				case "20":
					$last_ip[2]=bindec($first_ip[2])+15;
					break;
				case "21":
					$last_ip[2]=bindec($first_ip[2])+7;
					break;
				case "22":
					$last_ip[2]=bindec($first_ip[2])+3;
					break;
				case "23":
					$last_ip[2]=bindec($first_ip[2])+1;
					break;
				default:
					$last_ip[2]=bindec($first_ip[2]);
			}
		}
		if ($last_ip[3]<0) {
			$last_ip[3]=bindec($first_ip[3])+$number_of_addresses;
		}
		
		//Display result
		echo "<table>";
		echo "<tr>";
		echo "<td>Bevitt IP: </td>";
		echo "<td>".$input[0].".".$input[1].".".$input[2].".".$input[3]."</td>";
		echo "</tr>";
		
		echo "<tr>";
		echo "<td>Bevitt SM: ";
		echo "<td>".$input_sm."</td>";
		echo "</tr>";

		$number_of_addresses=pow(2,32-$input[4]);
		echo "<tr>";
		echo "<td>Kiosztható Címek: </td>";
		echo "<td>".number_format($number_of_addresses-2,0,' ',' ')."</td>";
		echo "</tr>";

		echo "<tr>";
		echo "<td>Maszk: </td>";
		echo "<td>".$sm[0].".".$sm[1].".".$sm[2].".".$sm[3]. "</td>";
		echo "</tr>";

		echo "<tr>";
		echo "<td>Alhálózat Címe: </td>";
		echo "<td>".bindec($first_ip[0]).".".bindec($first_ip[1]).".".bindec($first_ip[2]).".".bindec($first_ip[3])."</td>";
		echo "</tr>";

		echo "<tr>";
		echo "<td>Első IP: </td>";
		echo "<td>".bindec($first_ip[0]).".".bindec($first_ip[1]).".".bindec($first_ip[2]).".".bindec($first_ip[3]+1)."</td>";
		echo "</tr>";

		$last_address=$last_ip[3]-1;
		echo "<tr>";
		echo "<td>Utolsó IP: </td>";
		echo "<td>".$last_ip[0].".".$last_ip[1].".".$last_ip[2].".".$last_address."</td>";
		echo "</tr>";

		echo "<tr>";
		echo "<td>Broadcast Cím: </td>";
		echo "<td>".$last_ip[0].".".$last_ip[1].".".$last_ip[2].".".$last_ip[3]."</td>";
		echo "</tr>";
		echo "</table>";
		?>
		
	</div>
	<?php backButton(); ?>
</main>
<script src="../../js/binary_clock.js"></script>
</body>

</html>




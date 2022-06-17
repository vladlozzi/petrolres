<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Reserves / resources :: IFNTUOG</title>
	<style>
	.table_pq {
		table-layout: fixed;
		width: 100%;
		border: 2px solid;
		border-collapse: collapse;
	}
	.table_pq td {
		text-align: center;
		border: 1px solid;
	}
	.table_pq th {
		text-align: center;
		border: 1px solid;
	}
	</style>
	<style media="print">
		.noprint {display: none;}
	</style>
</head>
<body><?php session_start(); ?>
	<h2 style="text-align: right; margin: 0% 1% -1% auto;">
		<img src="/UA-logo.svg" alt="UA-logo" height=20 width=36> <a href="/">Українською</a></h2>
	<h3 style="text-align: center; margin: 0% auto -2% auto;">
		Ivano-Frankivsk National Technical University of Oil and Gas</h3>
	<h3 style="text-align: center; margin: 2% auto -3% auto;">
		Department of Oil and Gas Field Geology and Prospecting</h3>
	<h1 style="text-align: center; margin: 4% auto 0% auto;">Estimation of petroleum reserves / resources</h1>
<?php
function AreaSymp($y, $n, $x0, $xk, $m) { // Обчислення площі методом Сімпсона
	$k = intdiv($n, 2); $s2 = 0; $s4 = 0; $i = 1; $j = 2;
	do { $s2 += ($y[$j] - $y[$n - $j]); $j += 2; } while (!($j > $k - 2));
	do { $s4 += ($y[$i] - $y[$n - $i]); $i += 2; } while (!($i > $k - 1));
	$f = ($s2 * 2 + $s4 * 4) * ($xk - $x0) / (3 * $k);
	return ($f * ($m * $m));
} /* areasymp */

ini_set("error_reporting", E_ALL); ini_set("display_errors", 1); ini_set("display_startup_errors", 1);
define("From_Index", TRUE); $tdStyle = ' style="border: 1px solid black;"';

$tdCenterStyle = ' style="border: 1px solid black; text-align: center;"'; ?>
<form id="formDatas" method="post" target="_self">
<?php $_POST['radMethod'] = isset($_POST['radMethod']) ? $_POST['radMethod'] : "Volumetric"; ?>
<p style="text-align: center; font-size: 150%; margin: 1% auto 0% auto;">
<a href="/en/PetrolResUserManualEng.pdf" target=_blank>User Manual</a> &nbsp; &nbsp; &nbsp; &nbsp;
<input type="radio" name="radMethod" value="Volumetric" onclick="submit()"
	<?php if ($_POST['radMethod'] == "Volumetric") echo "checked"; ?> >Volumetric method &nbsp; &nbsp;
<input type="radio" name="radMethod" value="Balance" onclick="submit()"
	<?php if ($_POST['radMethod'] == "Balance") echo "checked"; ?> >Pressure reduction method 
	<span style="font-size: 60%; ">(for free gas reserves only)</span>
</p><?php
switch ($_POST['radMethod']) {
	case "Volumetric":
?><?php $_POST['radCalcul'] = isset($_POST['radCalcul']) ? $_POST['radCalcul'] : "Oil"; ?>
<p style="text-align: center; font-size: 150%; margin: 1% auto -1% auto;">
<input type="radio" name="radCalcul" value="Oil" onclick="submit()"
	<?php if ($_POST['radCalcul'] == "Oil") echo "checked"; ?> >Oil reserves / resources &nbsp; &nbsp;
<input type="radio" name="radCalcul" value="Gas" onclick="submit()"
	<?php if ($_POST['radCalcul'] == "Gas") echo "checked"; ?> > Gas reserves / resources &nbsp; &nbsp;
<input type="radio" name="radCalcul" value="Petroleum" onclick="submit()"
	<?php if ($_POST['radCalcul'] == "Petroleum") echo "checked"; ?> > Reserves of oil and dissolved gas<br>
<input type="radio" name="radCalcul" value="Square" onclick="submit()"
	<?php if ($_POST['radCalcul'] == "Square") echo "checked"; ?> >Oil(gas)bearing / trap area
</p><?php
	switch ($_POST['radCalcul']) {
		case "Oil": require "field.php"; require "oil.php"; break;
		case "Gas": require "field.php"; require "gas.php"; break;
		case "Petroleum": require "field.php"; require "petroleum.php"; break;
		case "Square":
		$_POST['radAreaMode'] = isset($_POST['radAreaMode']) ? $_POST['radAreaMode'] : "Single"; ?>
		<p style="text-align: center; font-size: 125%; margin: 1% auto -1% auto;">Type of area: &nbsp;
			<input type="radio" name="radAreaMode" value="Single" onclick="submit()"
				<?php if ($_POST['radAreaMode'] == "Single") echo "checked"; ?> > Solid &nbsp; &nbsp;
			<input type="radio" name="radAreaMode" value="Ring" onclick="submit()"
				<?php if ($_POST['radAreaMode'] == "Ring") echo "checked"; ?> > Annular
		</p><?php
			require "field.php"; require "square.php"; break;
	} break;
	case "Balance": require "field_bal.php"; break;
}
$_POST['sbtNext1'] = isset($_POST['sbtNext1']) ? $_POST['sbtNext1'] : "";
if (!empty($_POST['sbtNext1'])) { ?>
<p style="text-align: center;">
		<span class="noprint"><input style="font-size: 120%;" type="button" value="Print!" onclick="print()" ></span>
	</p><?php
} ?>
</form>
</body>
</html>
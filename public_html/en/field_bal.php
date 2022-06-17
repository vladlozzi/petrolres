<?php
if (!defined("From_Index")) { echo "<p style=\"text-align: center; color: red; font-weight: bold; font-size: 150%;\">".
                               "Enter to field_bal.php is prohibited</p>"; return; }

$_POST['txtName'] = isset($_POST['txtName']) ? $_POST['txtName'] : "";
$_POST['txtField'] = isset($_POST['txtField']) ? $_POST['txtField'] : "";
$_POST['txtDeposit'] = isset($_POST['txtDeposit']) ? $_POST['txtDeposit'] : "";
$_POST['nmbPzQ'] = isset($_POST['nmbPzQ']) ? $_POST['nmbPzQ'] : 25;
for ($iCell = 0; $iCell < 30; $iCell++)
	$_POST['nmbPressure'.($iCell+1)] = isset($_POST['nmbPressure'.($iCell+1)]) ? $_POST['nmbPressure'.($iCell+1)] : "";
for ($iCell = 0; $iCell < 30; $iCell++)
	$_POST['nmbZPress'.($iCell+1)] = isset($_POST['nmbZPress'.($iCell+1)]) ? $_POST['nmbZPress'.($iCell+1)] : "";
for ($iCell = 0; $iCell < 30; $iCell++)
	$_POST['nmbQCumul'.($iCell+1)] = isset($_POST['nmbQCumul'.($iCell+1)]) ? $_POST['nmbQCumul'.($iCell+1)] : "";
$_POST['sbtCalc'] = isset($_POST['sbtCalc']) ? $_POST['sbtCalc'] : "";
if (!empty($_POST['sbtCalc'])) {
	$n = $_POST['nmbPzQ']; $pz = array(); $qcum = array();
	for ($i = 0; $i < $n; $i++) {
		$pz[$i + 1] = $_POST['nmbPressure'.($i + 1)] / $_POST['nmbZPress'.($i + 1)];
		$qcum[$i + 1] = $_POST['nmbQCumul'.($i + 1)];
	} $Sx = 0; $Sy = 0; $Sxy = 0; $SSx = 0; $SSy = 0;
	for ($i = 0; $i < $n; $i++) {
		$Sx += $qcum[$i + 1]; $Sy += $pz[$i + 1]; $Sxy += $qcum[$i + 1] * $pz[$i + 1];
		$SSx += $qcum[$i + 1] * $qcum[$i + 1]; $SSy += $pz[$i + 1] * $pz[$i + 1];
	}
	$A1 = ($Sxy - $Sx * $Sy / $n) / ($SSx - $Sx * $Sx / $n);
	$A0 = ($Sy - $A1 * $Sx) / $n;
	$r = ($Sxy - $Sx * $Sy / $n) / sqrt(($SSx - $Sx * $Sx / $n) * ($SSy - $Sy * $Sy / $n));
	if ($r > 0) {
		echo "<script> alert('Помилка - величини p/z та Q одночасно зростають або спадають. Виправте введені дані!'); </script>";
		return;
	}
	$Q = (0.1 - $A0) / $A1; // echo $A0." ".$A1." ".$r." ".$Q;
} ?>
<p style="text-align: center; font-size: 120%; margin: 2% auto -1% auto;">
This module is under construction, to be ready next time<?php return; ?>
	Виконавець:
	<input style="width: 400px; font-size: 100%;" type="text" name="txtName" required value="<?php echo $_POST['txtName']; ?>"><br>
	Родовище / площа: 
	<input style="width: 400px; font-size: 100%;" type="text" name="txtField" required value="<?php echo $_POST['txtField']; ?>"><br>
	Поклад / горизонт / пласт: 
	<input style="width: 360px; font-size: 100%;" type="text" name="txtDeposit" required value="<?php echo $_POST['txtDeposit']; ?>"><br>
	Кількість вимірів [p<sub>пл</sub>, z, Q<sub>накоп</sub>] (від 5 до 25): 
	<input style="width: 60px; font-size: 100%;" type="number" name="nmbPzQ" min="5" max="25" step="1" 
				required value="<?php echo $_POST['nmbPzQ']; ?>" onchange="submit()"><br>
	<table class="table_pq">
		<tr><th>№</th><?php for ($iCell = 0; $iCell < $_POST['nmbPzQ']; $iCell++) echo "<td>".($iCell+1)."</td>"; ?></tr>
		<tr><th>p<sub>пл</sub>, МПа</th><?php
for ($iCell = 0; $iCell < $_POST['nmbPzQ']; $iCell++) { ?>
				<td><input style="width: 70px; font-size: 100%;" type="number" name="nmbPressure<?php echo $iCell+1; ?>" 
									min="1.0" max="100.0" step="0.1" required value="<?php echo $_POST['nmbPressure'.($iCell+1)]; ?>">
				</td><?php
} ?></tr>
		<tr><th>z(p<sub>пл</sub>)</th><?php
for ($iCell = 0; $iCell < $_POST['nmbPzQ']; $iCell++) { ?>
				<td><input style="width: 70px; font-size: 100%;" type="number" name="nmbZPress<?php echo $iCell+1; ?>" 
									min="0.100" max="3.000" step="0.001" required value="<?php echo $_POST['nmbZPress'.($iCell+1)]; ?>">
				</td><?php
} ?></tr>
		<tr><th>Q<sub>накоп</sub>, млн&nbsp;м<sup>3</sup></th><?php
for ($iCell = 0; $iCell < $_POST['nmbPzQ']; $iCell++) { ?>
				<td><input style="width: 70px; font-size: 100%;" type="number" name="nmbQCumul<?php echo $iCell+1; ?>" 
									min="1" max="100000" step="1" required value="<?php echo $_POST['nmbQCumul'.($iCell+1)]; ?>">
				</td><?php
} ?></tr>
	</table><br>
	<input style="font-size: 110%;" type="submit" name="sbtCalc" value="Обчислити"><?php
if (isset($Q)) { ?><br><br>
	Рівняння регресії: p<sub>пл</sub>/z = <?php echo round($A0, 1); ?> - <?php echo round(abs($A1), 5); ?>Q<sub>накоп</sub> &nbsp; 
	з коефіцієнтом кореляції r = <?php echo round($r, 3); ?><br>
	Початкові видобувні запаси вільного газу становлять <?php echo round($Q, 1); ?> млн м<sup>3</sup><?php
} ?>
</p>
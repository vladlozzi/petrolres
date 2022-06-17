<?php
if (!defined("From_Index")) { echo "<p style=\"text-align: center; color: red; font-weight: bold; font-size: 150%;\">".
                               "Помилка входу в модуль square.php</p>"; return; }

$_POST['sbtNext1'] = isset($_POST['sbtNext1']) ? $_POST['sbtNext1'] : "";
$_POST['nmbTrapFilling'] = isset($_POST['nmbTrapFilling']) ? $_POST['nmbTrapFilling'] : 1.00;
?>
<p style="text-align: center; font-size: 120%;">
	<table style="margin: auto;"><?php
$iCell = 0;
for ($iRow = 0; $iRow < 0; $iRow++) { ?>
		<tr><?php
	for ($iCol = 0; $iCol < 20; $iCol++) { $iCell++; ?>
			<td style="width: 50px; font-size: 100%;"></td><?php
	} ?>
		</tr><?php
} ?><tr><td style="text-align: center; font-size: 120%;" colspan=20>
					Площовий коефіцієнт заповнення пастки: 
					<input style="font-size: 125%;" type="number" name="nmbTrapFilling" 
								value="<?php echo $_POST['nmbTrapFilling']; ?>" step="0.01" min="0.10" max="1.00">
				</td></tr>
<tr><td style="text-align: center;" colspan=20>
					<span class="noprint"><input style="font-size: 125%;" type="submit" name="sbtNext1" value="Обчислити"></span>
				</td></tr>
	</table><?php
if (!empty($_POST['sbtNext1'])) { ?>
	<span style="font-weight: bold; font-size: 110%;">Результати обчислень:</span><br><?php
	$trapFill = $_POST['nmbTrapFilling']; $x0 = $_POST['nmbXLeft']; $xk = $_POST['nmbXRight']; 
	if (!($trapFill > 0 and $trapFill <= 1)) { ?>
		<span style="color: red; font-size: 125%">Неправильно задано площовий коефіцієнт заповнення пастки. Виправте!</span><?php } else {
		if ($x0 >= $xk) { ?><span style="color: red; font-size: 125%">Неправильно задані абсциси точок. Виправте!</span><?php } else {
			$n = $_POST['nmbPoints']; /* echo $n." "; */ $y = array(); $NumCount = 0;
			for ($i = 0; $i < $n; $i++) if (is_numeric($_POST['nmbYCont'.($i + 1)])) $NumCount++;
			if ($NumCount < $n) { ?><span style="color: red; font-size: 125%">Введіть усі ординати точок!</span><?php } else {
				for ($i = 0; $i < $n; $i++) { $y[$i] = $_POST['nmbYCont'.($i + 1)]; /* echo $y[$i]." "; */ }
				$m = str_replace(" ","",$_POST['nmbMes']) / 1000;
				$F = round(AreaSymp($y, $n, $x0, $xk, $m) / 1000, 0) * $trapFill; $FInt = 0;
				if (isset($_POST['radAreaMode']) and $_POST['radAreaMode'] == "Ring") {
					$x0 = $_POST['nmbXLeftInt']; $xk = $_POST['nmbXRightInt'];
					if ($x0 >= $xk) { ?><span style="color: red; font-size: 125%">Неправильно задані абсциси точок. Виправте!</span><?php } else {
						$n = $_POST['nmbPointsInt']; /* echo $n." "; */ $y = array(); $NumCount = 0;
						for ($i = 0; $i < $n; $i++) if (is_numeric($_POST['nmbYContInt'.($i + 1)])) $NumCount++;
						if ($NumCount < $n) { ?><span style="color: red; font-size: 125%">Введіть усі ординати точок!</span><?php } else {
							for ($i = 0; $i < $n; $i++) { $y[$i] = $_POST['nmbYContInt'.($i + 1)]; /* echo $y[$i]." "; */ }
							$m = str_replace(" ","",$_POST['nmbMes']) / 1000;
							$FInt = round(AreaSymp($y, $n, $x0, $xk, $m) / 1000, 0) * $trapFill;
						}
					}
				}
			} ?>
			Площа нафто(газо)носності - <?php echo $F - $FInt; ?> тис. м<span style="font-size: 75%; vertical-align: super;">2</span><br><br>
			З метою використання цього значення площі в подальших розрахунках можна виділити його і скопіювати в буфер (Ctrl+C)
<?php
		}
	}
} ?>
</p>

<?php
if (!defined("From_Index")) { echo "<p style=\"text-align: center; color: red; font-weight: bold; font-size: 150%;\">".
                               "Помилка входу в модуль petroleum.php</p>"; return; }

$_POST['txtThickness'] = isset($_POST['txtThickness']) ? $_POST['txtThickness'] : "";
$_POST['txtPority'] = isset($_POST['txtPority']) ? $_POST['txtPority'] : "";
$_POST['txtSaturation'] = isset($_POST['txtSaturation']) ? $_POST['txtSaturation'] : "";
$_POST['txtVolumeCoef'] = isset($_POST['txtVolumeCoef']) ? $_POST['txtVolumeCoef'] : "";
$_POST['txtDensity'] = isset($_POST['txtDensity']) ? $_POST['txtDensity'] : "";
$_POST['txtExtract'] = isset($_POST['txtExtract']) ? $_POST['txtExtract'] : "";
$_POST['txtInitGas'] = isset($_POST['txtInitGas']) ? $_POST['txtInitGas'] : "";
$_POST['selMode'] = isset($_POST['selMode']) ? $_POST['selMode'] : "";
$_POST['txtFinalGas'] = isset($_POST['txtFinalGas']) ? $_POST['txtFinalGas'] : "";
$_POST['txtFinalPressure'] = isset($_POST['txtFinalPressure']) ? $_POST['txtFinalPressure'] : 1;
$_POST['txtFinalZFactor'] = isset($_POST['txtFinalZFactor']) ? $_POST['txtFinalZFactor'] : "";
$_POST['sbtNext1'] = isset($_POST['sbtNext1']) ? $_POST['sbtNext1'] : "";
?>
<p style="text-align: center; font-size: 120%;">
	<table style="margin: auto;">
		<tr><td style="text-align: center; font-size: 120%;" colspan=20>Підрахункові параметри:</td></tr>
		<tr>
			<td style="font-size: 120%;" colspan=10>Ефективна нафтонасичена товщина, м: 
			<input style="width: 70px; font-size: 100%;" type="number" name="txtThickness"
						 value="<?php echo $_POST['txtThickness']; ?>" step="0.1" min="0.1" max="999.9"
						 required>
			</td>
			<td style="font-size: 120%;" colspan=10>&nbsp; &nbsp; Коефіцієнт відкритої пористості: 
			<input style="width: 70px; font-size: 100%;" type="number" name="txtPority"
						 value="<?php echo $_POST['txtPority']; ?>" step="0.001" min="0.030" max="0.500"
						 required>
			</td>
		</tr>
		<tr>
			<td style="font-size: 120%;" colspan=10>Коефіцієнт нафтонасиченості: 
			<input style="width: 70px; font-size: 100%;" type="number" name="txtSaturation"
						 value="<?php echo $_POST['txtSaturation']; ?>" step="0.01" min="0.30" max="0.90"
						 required>
			<td style="font-size: 120%;" colspan=10>&nbsp; &nbsp; Обʼємний коефіцієнт нафти: 
			<input style="width: 70px; font-size: 100%;" type="number" name="txtVolumeCoef"
						 value="<?php echo $_POST['txtVolumeCoef']; ?>" step="0.01" min="1.01" max="9.99"
						 required>
			</td>
		</tr>
		<tr>
			<td style="font-size: 120%;" colspan=10>Густина нафти при стандартних умовах, кг/м<span 
					style="font-size: 75%; vertical-align: super;">3</span>: 
			<input style="width: 70px; font-size: 100%;" type="number" name="txtDensity"
						 value="<?php echo $_POST['txtDensity']; ?>"  step="1" min="650" max="1040"
						 required>
			</td>
			<td style="font-size: 120%;" colspan=10>&nbsp; &nbsp; Коефіцієнт вилучення нафти: 
			<input style="width: 70px; font-size: 100%;" type="number" name="txtExtract"
						 value="<?php echo $_POST['txtExtract']; ?>" step="0.001" min="0.050" max="0.900"
						 required>
			</td>
		</tr>
		<tr>
			<td style="font-size: 120%;" colspan=10>Початковий газовміст нафти, м<span 
					style="font-size: 75%; vertical-align: super;">3</span>/т: 
			<input style="width: 70px; font-size: 100%;" type="number" name="txtInitGas"
						 value="<?php echo $_POST['txtInitGas']; ?>"  step="1" min="1" max="1000"
						 required>
			</td>
			<td style="font-size: 120%;" colspan=10>&nbsp; &nbsp; Режим покладу: 
				<select style="font-size: 110%;" name="selMode" onchange="submit()" required>
					<option <?php if ($_POST['selMode'] == "водонапірний") echo "selected"; ?>>водонапірний</option>
					<option <?php if ($_POST['selMode'] == "пружноводонапірний") echo "selected"; ?>>пружноводонапірний</option>
					<option <?php if ($_POST['selMode'] == "гравітаційний") echo "selected"; ?>>гравітаційний</option>
					<option <?php if ($_POST['selMode'] == "розчиненого газу") echo "selected"; ?>>розчиненого газу</option>
					<option <?php if ($_POST['selMode'] == "газової шапки") echo "selected"; ?>>газової шапки</option>
					<option <?php if ($_POST['selMode'] == "мішаний") echo "selected"; ?>>мішаний</option>
				</select>
			</td>
		</tr><?php
if ($_POST['radResCategory'] == "C1z+C2") { ?>
		<tr><td style="text-align: center; font-size: 120%;" colspan=20>Підрахункові параметри в зоні дренажу:</td></tr>
		<tr>
			<td style="font-size: 120%; text-align: center;" colspan=20>Радіус зони дренажу, м: 
			<input style="width: 70px; font-size: 100%;" type="number" name="txtZoneRadius"
						 value="<?php echo $_POST['txtZoneRadius']; ?>" step="1" min="1" max="1000"
						 required>
			</td>
		</tr>
		<tr>
			<td style="font-size: 120%;" colspan=10>Ефективна нафтонасичена товщина, м: 
			<input style="width: 70px; font-size: 100%;" type="number" name="txtZoneThickness"
						 value="<?php echo $_POST['txtZoneThickness']; ?>" step="0.1" min="0.1" max="999.9"
						 required>
			</td>
			<td style="font-size: 120%;" colspan=10>&nbsp; &nbsp; Коефіцієнт відкритої пористості: 
			<input style="width: 70px; font-size: 100%;" type="number" name="txtZonePority"
						 value="<?php echo $_POST['txtZonePority']; ?>" step="0.001" min="0.030" max="0.500"
						 required>
			</td>
		</tr>
		<tr>
			<td style="font-size: 120%;" colspan=10>Коефіцієнт нафтонасиченості: 
			<input style="width: 70px; font-size: 100%;" type="number" name="txtZoneSaturation"
						 value="<?php echo $_POST['txtZoneSaturation']; ?>" step="0.01" min="0.30" max="0.90"
						 required>
			<td style="font-size: 120%;" colspan=10>&nbsp; &nbsp; Обʼємний коефіцієнт нафти: 
			<input style="width: 70px; font-size: 100%;" type="number" name="txtZoneVolumeCoef"
						 value="<?php echo $_POST['txtZoneVolumeCoef']; ?>" step="0.001" min="1.001" max="9.999"
						 required>
			</td>
		</tr>
		<tr>
			<td style="font-size: 120%;" colspan=10>Густина нафти при стандартних умовах, кг/м<span 
					style="font-size: 75%; vertical-align: super;">3</span>: 
			<input style="width: 70px; font-size: 100%;" type="number" name="txtZoneDensity"
						 value="<?php echo $_POST['txtZoneDensity']; ?>"  step="1" min="650" max="1040"
						 required>
			</td>
			<td style="font-size: 120%;" colspan=10>&nbsp; &nbsp; Коефіцієнт вилучення нафти: 
			<input style="width: 70px; font-size: 100%;" type="number" name="txtZoneExtract"
						 value="<?php echo $_POST['txtZoneExtract']; ?>" step="0.001" min="0.050" max="0.900"
						 required>
			</td>
		</tr>
<?php 
}
if ($_POST['selMode'] == "розчиненого газу" 
		or $_POST['selMode'] == "газової шапки" 
		or $_POST['selMode'] == "мішаний") { ?>
		<tr>
			<td style="font-size: 120%;" colspan=10>Кінцевий газовміст нафти, м<span 
					style="font-size: 75%; vertical-align: super;">3</span>/т: 
			<input style="width: 70px; font-size: 100%;" type="number" name="txtFinalGas"
						 value="<?php echo $_POST['txtFinalGas']; ?>"  step="1" min="1" max="1000"
						 required>
			</td>
			<td style="font-size: 120%;" colspan=10>&nbsp; &nbsp; Кінцевий пластовий тиск, МПа: 
			<input style="width: 70px; font-size: 100%;" type="number" name="txtFinalPressure"
						 value="<?php echo $_POST['txtFinalPressure']; ?>" step="0.1" min="1.0" max="10.0"
						 required>
			</td>
		</tr>
		<tr>
			<td colspan=10></td>
			<td style="font-size: 120%;" colspan=10>&nbsp; &nbsp; Кінцевий коеф. надстисливості: 
			<input style="width: 70px; font-size: 100%;" type="number" name="txtFinalZFactor"
						 value="<?php echo $_POST['txtFinalZFactor']; ?>" step="0.001" min="0.500" max="2.000"
						 required>
			</td>
		</tr>
<?php
} $iCell = 0;
for ($iRow = 0; $iRow < 0; $iRow++) { ?>
		<tr><?php
	for ($iCol = 0; $iCol < 20; $iCol++) { $iCell++; ?>
			<td style="width: 50px; font-size: 100%;"></td><?php
	} ?>
		</tr><?php
} ?><tr><td style="text-align: center;" colspan=20>
					<input style="font-size: 125%;" type="submit" name="sbtNext1" value="Обчислити">
				</td></tr>
	</table><?php
if (!empty($_POST['sbtNext1'])) { ?>
	<span style="font-weight: bold; font-size: 110%;">Результати обчислень:</span><br><?php
	switch ($_POST['radResCategory']) {
		case "A": $Cat = "розвідані запаси"; $categoryWord = "категорії"; break;
		case "B": $Cat = "розвідані запаси"; $categoryWord = "категорії"; break;
		case "A+B": $Cat = "розвідані запаси"; $categoryWord = "категорій"; break;
		case "A+B+C1": $Cat = "розвідані запаси"; $categoryWord = "категорій"; break;
		case "A+B+C1+C2": $Cat = "запаси"; $categoryWord = "категорій"; break;
		case "B+C1": $Cat = "розвідані запаси"; $categoryWord = "категорій"; break;
		case "B+C1+C2": $Cat = "запаси"; $categoryWord = "категорій"; break;
		case "C1": $Cat = "розвідані запаси"; $categoryWord = "категорії"; break;
		case "C2": $Cat = "попередньо розвідані запаси"; $categoryWord = "категорії"; break;
		case "C1+C2": $Cat = "запаси"; $categoryWord = "категорій"; break;
		case "C1z+C2": $Cat = "запаси"; $categoryWord = "категорій"; break;
		case "C3": $Cat = "перспективні ресурси"; $categoryWord = "категорії"; break;
		case "C3+D1+D2": $Cat = "ресурси"; $categoryWord = "категорій"; break;
		case "D1": $Cat = "прогнозні ресурси"; $categoryWord = "категорії"; break;
		case "D2": $Cat = "прогнозні ресурси"; $categoryWord = "категорії"; break;
		case "D1+D2": $Cat = "прогнозні ресурси"; $categoryWord = "категорій"; break;
	}
	if ($_POST['cbxIHaveSquare'] == "on") { // Не обчислюємо площу
		$F = str_replace(',', '.', $_POST['nmbSquare']);
		$Thickness = str_replace(',', '.', $_POST['txtThickness']); $Pority = str_replace(',', '.', $_POST['txtPority']);
		$Saturation = str_replace(',', '.', $_POST['txtSaturation']); $VolumeCoef = str_replace(',', '.', $_POST['txtVolumeCoef']);
		$Density = str_replace(',', '.', $_POST['txtDensity']); $Extract = str_replace(',', '.', $_POST['txtExtract']);
		$InitGas = str_replace(',', '.', $_POST['txtInitGas']);
		$QGen = round($F * $Thickness * $Pority * $Saturation / $VolumeCoef * $Density / 1000, 0);
		$QGasGen = round($QGen * $InitGas / 1000, 0);
		$QExt = round($QGen * $Extract, 0); 
		// об'єм, який займають видобувні запаси нафти в пласті
		$QVExt = round($F * $Thickness * $Pority * $Saturation * $Extract / 1000, 0);
		if ($_POST['selMode'] == "розчиненого газу" 
				or $_POST['selMode'] == "газової шапки" 
				or $_POST['selMode'] == "мішаний") {
			$FinalGas = str_replace(',', '.', $_POST['txtFinalGas']);
			$FinalPressure = str_replace(',', '.', $_POST['txtFinalPressure']);
			$FinalZFactor = str_replace(',', '.', $_POST['txtFinalZFactor']);
			$QGasExt = round(
												($QExt * $InitGas + 
													($QGen - $QExt) * ($InitGas - $FinalGas) - 
													$QVExt * $FinalPressure / (0.1 * $FinalZFactor)
												) / 1000, 0
											);
		} else $QGasExt = round($QExt * $InitGas / 1000, 0); ?>
			Площа нафтоносності - <?php echo $F; ?> тис. м<span style="font-size: 75%; vertical-align: super;">2</span><br>
			Початкові загальні <?php echo $Cat; ?> нафти кат.&nbsp;<?php $CatSub = $_POST['radResCategory'];
			for ($i = 1; $i < 4; $i++) $CatSub = str_replace($i, "<sub>".$i."</sub>", $CatSub);
			$CatSub = str_replace("z", "", $CatSub); echo $CatSub." - ".$QGen; ?> тис. т<br>
			Початкові загальні <?php echo $Cat; ?> розчиненого газу кат.&nbsp;<?php $CatSub = $_POST['radResCategory'];
			for ($i = 1; $i < 4; $i++) $CatSub = str_replace($i, "<sub>".$i."</sub>", $CatSub);
			$CatSub = str_replace("z", "", $CatSub); 
			echo $CatSub." - ".$QGasGen; ?> млн. м<span style="font-size: 75%; vertical-align: super;">3</span><br>
			Початкові добувні <?php echo $Cat; ?> нафти кат.&nbsp;<?php echo $CatSub." - ".$QExt; ?> тис. т<br>
			Початкові добувні <?php echo $Cat; ?> розчиненого газу кат.&nbsp;<?php 
			echo $CatSub." - ".$QGasExt; ?> млн. м<span style="font-size: 75%; vertical-align: super;">3</span>
			<?php
		return;
	}
	$x0 = $_POST['nmbXLeft']; $xk = $_POST['nmbXRight'];
	if ($x0 >= $xk) { ?><span style="color: red; font-size: 125%">Неправильно задані абсциси точок. Виправте!</span><?php } else {
		$n = $_POST['nmbPoints']; /* echo $n." "; */ $y = array(); $NumCount = 0;
		for ($i = 0; $i < $n; $i++) if (is_numeric($_POST['nmbYCont'.($i + 1)])) $NumCount++;
		if ($NumCount < $n) { ?><span style="color: red; font-size: 125%">Введіть усі ординати точок!</span><?php } else {
			for ($i = 0; $i < $n; $i++) { $y[$i] = $_POST['nmbYCont'.($i + 1)]; /* echo $y[$i]." "; */ }
			$m = str_replace(" ","",$_POST['nmbMes']) / 1000; $F = round(AreaSymp($y, $n, $x0, $xk, $m) / 1000, 0);
			$Thickness = str_replace(',', '.', $_POST['txtThickness']); $Pority = str_replace(',', '.', $_POST['txtPority']);
			$Saturation = str_replace(',', '.', $_POST['txtSaturation']); $VolumeCoef = str_replace(',', '.', $_POST['txtVolumeCoef']);
			$Density = str_replace(',', '.', $_POST['txtDensity']); $Extract = str_replace(',', '.', $_POST['txtExtract']);
			$InitGas = str_replace(',', '.', $_POST['txtInitGas']);
			$QGen = round($F * $Thickness * $Pority * $Saturation / $VolumeCoef * $Density / 1000, 0);
			$QGasGen = round($QGen * $InitGas / 1000, 0);
			$QExt = round($QGen * $Extract, 0); 
			// об'єм, який займають видобувні запаси нафти в пласті
			$QVExt = round($F * $Thickness * $Pority * $Saturation * $Extract / 1000, 0);
			if ($_POST['selMode'] == "розчиненого газу" 
					or $_POST['selMode'] == "газової шапки" 
					or $_POST['selMode'] == "мішаний") {
				$FinalGas = str_replace(',', '.', $_POST['txtFinalGas']);
				$FinalPressure = str_replace(',', '.', $_POST['txtFinalPressure']);
				$FinalZFactor = str_replace(',', '.', $_POST['txtFinalZFactor']);
				$QGasExt = round(
													($QExt * $InitGas + 
														($QGen - $QExt) * ($InitGas - $FinalGas) - 
														$QVExt * $FinalPressure / (0.1 * $FinalZFactor)
													) / 1000, 0
												);
			} else $QGasExt = round($QExt * $InitGas / 1000, 0); ?>
			Площа нафтоносності - <?php echo $F; ?> тис. м<span style="font-size: 75%; vertical-align: super;">2</span><br>
			Початкові загальні <?php echo $Cat; ?> нафти <?php echo $categoryWord; ?>&nbsp;<?php $CatSub = $_POST['radResCategory'];
			for ($i = 1; $i < 4; $i++) $CatSub = str_replace($i, "<sub>".$i."</sub>", $CatSub);
			$CatSub = str_replace("z", "", $CatSub); echo $CatSub." - ".$QGen; ?> тис. т<br>
			Початкові загальні <?php echo $Cat; ?> розчиненого газу <?php echo $categoryWord; ?>&nbsp;<?php $CatSub = $_POST['radResCategory'];
			for ($i = 1; $i < 4; $i++) $CatSub = str_replace($i, "<sub>".$i."</sub>", $CatSub);
			$CatSub = str_replace("z", "", $CatSub); 
			echo $CatSub." - ".$QGasGen; ?> млн. м<span style="font-size: 75%; vertical-align: super;">3</span><br>
			Початкові добувні <?php echo $Cat; ?> нафти <?php echo $categoryWord; ?>&nbsp;<?php echo $CatSub." - ".$QExt; ?> тис. т<br>
			Початкові добувні <?php echo $Cat; ?> розчиненого газу <?php echo $categoryWord; ?>&nbsp;<?php 
			echo $CatSub." - ".$QGasExt; ?> млн. м<span style="font-size: 75%; vertical-align: super;">3</span><?php
		}
	}
} ?>
</p>

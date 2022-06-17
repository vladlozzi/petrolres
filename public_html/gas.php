<?php 
if (!defined("From_Index")) { echo "<p style=\"text-align: center; color: red; font-weight: bold; font-size: 150%;\">".
                               "Помилка входу в модуль gas.php</p>"; return; }

$_POST['txtThickness'] = isset($_POST['txtThickness']) ? $_POST['txtThickness'] : "";
$_POST['txtPority'] = isset($_POST['txtPority']) ? $_POST['txtPority'] : "";
$_POST['txtSaturation'] = isset($_POST['txtSaturation']) ? $_POST['txtSaturation'] : "";
$_POST['txtPressure'] = isset($_POST['txtPressure']) ? $_POST['txtPressure'] : "";
$_POST['txtTemperature'] = isset($_POST['txtTemperature']) ? $_POST['txtTemperature'] : "";
$_POST['txtZFactor'] = isset($_POST['txtZFactor']) ? $_POST['txtZFactor'] : "";
$_POST['txtExtract'] = isset($_POST['txtExtract']) ? $_POST['txtExtract'] : "";
$_POST['txtZoneRadius'] = isset($_POST['txtZoneRadius']) ? $_POST['txtZoneRadius'] : "250";
$_POST['txtZoneThickness'] = isset($_POST['txtZoneThickness']) ? $_POST['txtZoneThickness'] : "";
$_POST['txtZonePority'] = isset($_POST['txtZonePority']) ? $_POST['txtZonePority'] : "";
$_POST['txtZoneSaturation'] = isset($_POST['txtZoneSaturation']) ? $_POST['txtZoneSaturation'] : "";
$_POST['txtZonePressure'] = isset($_POST['txtZonePressure']) ? $_POST['txtZonePressure'] : "";
$_POST['txtZoneTemperature'] = isset($_POST['txtZoneTemperature']) ? $_POST['txtZoneTemperature'] : "";
$_POST['txtZoneZFactor'] = isset($_POST['txtZoneZFactor']) ? $_POST['txtZoneZFactor'] : "";
$_POST['txtZoneExtract'] = isset($_POST['txtZoneExtract']) ? $_POST['txtZoneExtract'] : "";
$_POST['sbtNext1'] = isset($_POST['sbtNext1']) ? $_POST['sbtNext1'] : "";
?>
<p style="text-align: center; font-size: 120%;">
	<table style="margin: auto;">
		<tr><td style="text-align: center; font-size: 120%;" colspan=20>Підрахункові параметри:</td></tr>
		<tr>
			<td style="font-size: 120%;" colspan=10>Ефективна газонасичена товщина, м: 
				<input style="width: 70px; font-size: 100%;" type="number" name="txtThickness"
							 value="<?php echo $_POST['txtThickness']; ?>" step="0.1" min="0.1" max="999.9"
							 required>
			</td>
			<td style="font-size: 120%;" colspan=10>&nbsp; &nbsp; Коефіцієнт відкритої пористості: 
				<input style="width: 70px; font-size: 100%;" type="number" name="txtPority" 
							 value="<?php echo $_POST['txtPority']; ?>" step="0.001" min="0.010" max="0.500" 
							 required>
			</td>
		</tr>
		<tr>
			<td style="font-size: 120%;" colspan=10>Коефіцієнт газонасиченості: 
				<input style="width: 70px; font-size: 100%;" type="number" name="txtSaturation" 
							 value="<?php echo $_POST['txtSaturation']; ?>" step="0.001" min="0.030" max="0.950"
							 required>
			<td style="font-size: 120%;" colspan=10>&nbsp; &nbsp; Пластовий тиск, МПа: 
				<input style="width: 70px; font-size: 100%;" type="number" name="txtPressure" 
							 value="<?php echo $_POST['txtPressure']; ?>" step="0.1" min="1.0" max="200.0"
							 required>
			</td>
		</tr>
		<tr>
			<td style="font-size: 120%;" colspan=10>Пластова температура, &deg;C: 
				<input style="width: 70px; font-size: 100%;" type="number" name="txtTemperature" 
							 value="<?php echo $_POST['txtTemperature']; ?>" step="0.1" min="50.0" max="300.0"
							 reqiured>
			</td>
			<td style="font-size: 120%;" colspan=10>&nbsp; &nbsp; Коефіцієнт надстисливості газу: 
				<input style="width: 70px; font-size: 100%;" type="number" name="txtZFactor" 
							 value="<?php echo $_POST['txtZFactor']; ?>" step="0.001" min="0.500" max="5.000"
							 required>
			</td>
		</tr>
		<tr>
			<td style="font-size: 120%;" colspan=10></td>
			<td style="font-size: 120%;" colspan=10>&nbsp; &nbsp; Коефіцієнт вилучення газу: 
				<input style="width: 70px; font-size: 100%;" type="number" name="txtExtract" 
							 value="<?php echo $_POST['txtExtract']; ?>" step="0.001" min="0.100" max="0.980"
							 required>
			</td>
		</tr>
		<tr><?php
for ($iCol = 0; $iCol < 20; $iCol++) { ?>
			<td style="width: 50px; font-size: 100%;"></td><?php
} ?>
		</tr>
<?php
if ($_POST['radResCategory'] == "C1z+C2") { ?>
		<tr>
			<td style="font-size: 120%; text-align: center;" colspan=20>Радіус зони дренажу, м: 
			<input style="width: 70px; font-size: 100%;" type="number" name="txtZoneRadius"
						 value="<?php echo $_POST['txtZoneRadius']; ?>" step="1" min="1" max="1000"
						 required>
			</td>
		</tr>
		<tr><td style="text-align: center; font-size: 120%;" colspan=20>Підрахункові параметри в зоні дренажу:</td></tr>
		<tr>
			<td style="font-size: 120%;" colspan=10>Ефективна газонасичена товщина, м: 
				<input style="width: 70px; font-size: 100%;" type="number" name="txtZoneThickness"
							 value="<?php echo $_POST['txtZoneThickness']; ?>" step="0.1" min="0.1" max="999.9"
							 required>
			</td>
			<td style="font-size: 120%;" colspan=10>&nbsp; &nbsp; Коефіцієнт відкритої пористості: 
				<input style="width: 70px; font-size: 100%;" type="number" name="txtZonePority" 
							 value="<?php echo $_POST['txtZonePority']; ?>" step="0.001" min="0.010" max="0.500" 
							 required>
			</td>
		</tr>
		<tr>
			<td style="font-size: 120%;" colspan=10>Коефіцієнт газонасиченості: 
				<input style="width: 70px; font-size: 100%;" type="number" name="txtZoneSaturation" 
							 value="<?php echo $_POST['txtZoneSaturation']; ?>" step="0.001" min="0.030" max="0.950"
							 required>
			<td style="font-size: 120%;" colspan=10>&nbsp; &nbsp; Пластовий тиск, МПа: 
				<input style="width: 70px; font-size: 100%;" type="number" name="txtZonePressure" 
							 value="<?php echo $_POST['txtZonePressure']; ?>" step="0.1" min="10.0" max="200.0"
							 required>
			</td>
		</tr>
		<tr>
			<td style="font-size: 120%;" colspan=10>Пластова температура, &deg;C: 
				<input style="width: 70px; font-size: 100%;" type="number" name="txtZoneTemperature" 
							 value="<?php echo $_POST['txtZoneTemperature']; ?>" step="0.1" min="50.0" max="300.0"
							 reqiured>
			</td>
			<td style="font-size: 120%;" colspan=10>&nbsp; &nbsp; Коефіцієнт надстисливості газу: 
				<input style="width: 70px; font-size: 100%;" type="number" name="txtZoneZFactor" 
							 value="<?php echo $_POST['txtZoneZFactor']; ?>" step="0.001" min="0.500" max="5.000"
							 required>
			</td>
		</tr>
		<tr>
			<td style="font-size: 120%;" colspan=10></td>
			<td style="font-size: 120%;" colspan=10>&nbsp; &nbsp; Коефіцієнт вилучення газу: 
				<input style="width: 70px; font-size: 100%;" type="number" name="txtZoneExtract" 
							 value="<?php echo $_POST['txtZoneExtract']; ?>" step="0.001" min="0.100" max="0.980"
							 required>
			</td>
		</tr>
<?php
} ?>
		<tr><td style="text-align: center;" colspan=20>
					<span class="noprint"><input style="font-size: 125%;" type="submit" name="sbtNext1" value="Обчислити"></span>
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
		$Saturation = str_replace(',', '.', $_POST['txtSaturation']);
		$Pressure = str_replace(',', '.', $_POST['txtPressure']); $ZFactor = str_replace(',', '.', $_POST['txtZFactor']); 
		$Temperature = str_replace(',', '.', $_POST['txtTemperature']); $Extract = str_replace(',', '.', $_POST['txtExtract']);
		$QGen = round($F * $Thickness * $Pority * $Saturation * ($Pressure / 0.1) / $ZFactor * 
									(293 / (273 + $Temperature)) / 1000, 0);
		$QExt = round($QGen * $Extract, 0);
		if ($_POST['radResCategory'] == "C1z+C2") {
			$ZoneF = round(M_PI * $_POST['txtZoneRadius'] * $_POST['txtZoneRadius'] / 1000, 0);
			$ZThickness = str_replace(',', '.', $_POST['txtZoneThickness']); $ZPority = str_replace(',', '.', $_POST['txtZonePority']);
			$ZSaturation = str_replace(',', '.', $_POST['txtZoneSaturation']); 
			$ZPressure = str_replace(',', '.', $_POST['txtZonePressure']); $ZZFactor = str_replace(',', '.', $_POST['txtZoneZFactor']); 
			$ZTemperature = str_replace(',', '.', $_POST['txtZoneTemperature']); 
			$ZExtract = str_replace(',', '.', $_POST['txtZoneExtract']);
			$ZoneQGen = round($ZoneF * $ZThickness * $ZPority * $ZSaturation * ($ZPressure / 0.1) /
												$ZZFactor * (293 / (273 + $ZTemperature)) / 1000, 0);
			$ZoneQExt = round($ZoneQGen * $ZExtract, 0);
			$OutZoneF = $F - $ZoneF;
			// echo "$OutZoneF * $Thickness * $Pority * $Saturation * ($Pressure / 0.1) / $ZFactor * (293 / (273 + $Temperature))";
			$OutZoneQGen = round($OutZoneF * $Thickness * $Pority * $Saturation * 
														($Pressure / 0.1) / $ZFactor * (293 / (273 + $Temperature)) / 1000, 0);
			$OutZoneQExt = round($OutZoneQGen * $Extract, 0); ?>
			<table style="margin: auto; width: 550px; font-size: 110%; border-collapse: collapse;">
				<tr><th<?php echo str_replace('""','',$tdStyle.'" text-align: left;"'); ?>>Результати для категорій запасів</th>
					<th<?php echo $tdStyle; ?>>C<sub>1</sub></th>
					<th<?php echo $tdStyle; ?>>C<sub>2</sub></th>
					<th<?php echo $tdStyle; ?>>C<sub>1</sub>+C<sub>2</sub></th></tr>
				<tr><td<?php echo $tdStyle; ?>>
							Площа газоносності, тис. м<span style="font-size: 75%; vertical-align: super;">2</span>
						</td>
						<td<?php echo $tdCenterStyle; ?>><?php echo $ZoneF; ?></td>
						<td<?php echo $tdCenterStyle; ?>><?php echo $OutZoneF; ?></td>
						<td<?php echo $tdCenterStyle; ?>><?php echo $F; ?></td>
				</tr>
				<tr><td<?php echo $tdStyle; ?>>
							Початкові загальні <?php echo $Cat; ?> газу, млн. м<span style="font-size: 75%; vertical-align: super;">3</span>
						</td>
						<td<?php echo $tdCenterStyle; ?>><?php echo $ZoneQGen; ?></td>
						<td<?php echo $tdCenterStyle; ?>><?php echo $OutZoneQGen; ?></td>
						<td<?php echo $tdCenterStyle; ?>><?php echo $ZoneQGen + $OutZoneQGen; ?></td>
				</tr>
				<tr><td<?php echo $tdStyle; ?>>
							Початкові добувні <?php echo $Cat; ?> газу, млн. м<span style="font-size: 75%; vertical-align: super;">3</span>
						</td>
						<td<?php echo $tdCenterStyle; ?>><?php echo $ZoneQExt; ?></td>
						<td<?php echo $tdCenterStyle; ?>><?php echo $OutZoneQExt; ?></td>
						<td<?php echo $tdCenterStyle; ?>><?php echo $ZoneQExt + $OutZoneQExt; ?></td>
				</tr>
			</table>
		<?php
		} else { ?>
				Площа газоносності - <?php echo $F; ?> тис. м<span style="font-size: 75%; vertical-align: super;">2</span><br>
				Початкові загальні <?php echo $Cat; ?> газу <?php echo $categoryWord; ?>&nbsp;<?php $CatSub = $_POST['radResCategory'];
				for ($i = 1; $i < 4; $i++) $CatSub = str_replace($i, "<sub>".$i."</sub>", $CatSub);
				$CatSub = str_replace("z", "", $CatSub); echo $CatSub." - ".$QGen; ?> млн. м<span style="font-size: 75%; vertical-align: super;">3</span><br>
				Початкові добувні <?php echo $Cat; ?> газу <?php echo $categoryWord; ?>&nbsp;<?php echo $CatSub." - ".$QExt; ?> 
				млн. м<span style="font-size: 75%; vertical-align: super;">3</span><?php
		}
		return;
	}
	$x0 = $_POST['nmbXLeft']; $xk = $_POST['nmbXRight']; $m = str_replace(" ","",$_POST['nmbMes']) / 1000;
	if ($x0 >= $xk) { ?><span style="color: red; font-size: 125%">Неправильно задані абсциси точок. Виправте!</span><?php } else {
		$n = $_POST['nmbPoints']; /* echo $n." "; */ $y = array(); $NumCount = 0;
		for ($i = 0; $i < $n; $i++) if (is_numeric($_POST['nmbYCont'.($i + 1)])) $NumCount++;
		if ($NumCount < $n) { ?><span style="color: red; font-size: 125%">Введіть усі ординати точок!</span><?php } else {
			for ($i = 0; $i < $n; $i++) { $y[$i] = $_POST['nmbYCont'.($i + 1)]; /* echo $y[$i]." "; */ }
			$F = round(AreaSymp($y, $n, $x0, $xk, $m) / 1000, 0);
			$Thickness = str_replace(',', '.', $_POST['txtThickness']); $Pority = str_replace(',', '.', $_POST['txtPority']);
			$Saturation = str_replace(',', '.', $_POST['txtSaturation']);
			$Pressure = str_replace(',', '.', $_POST['txtPressure']); $ZFactor = str_replace(',', '.', $_POST['txtZFactor']); 
			$Temperature = str_replace(',', '.', $_POST['txtTemperature']); $Extract = str_replace(',', '.', $_POST['txtExtract']);
			$QGen = round($F * $Thickness * $Pority * $Saturation * ($Pressure / 0.1) / $ZFactor * 
										(293 / (273 + $Temperature)) / 1000, 0);
			$QExt = round($QGen * $Extract, 0);
			if ($_POST['radResCategory'] == "C1z+C2") {
				$ZoneF = round(M_PI * $_POST['txtZoneRadius'] * $_POST['txtZoneRadius'] / 1000, 0);
				$ZThickness = str_replace(',', '.', $_POST['txtZoneThickness']); $ZPority = str_replace(',', '.', $_POST['txtZonePority']);
				$ZSaturation = str_replace(',', '.', $_POST['txtZoneSaturation']); 
				$ZPressure = str_replace(',', '.', $_POST['txtZonePressure']); $ZZFactor = str_replace(',', '.', $_POST['txtZoneZFactor']); 
				$ZTemperature = str_replace(',', '.', $_POST['txtZoneTemperature']); 
				$ZExtract = str_replace(',', '.', $_POST['txtZoneExtract']);
				$ZoneQGen = round($ZoneF * $ZThickness * $ZPority * $ZSaturation * ($ZPressure / 0.1) /
													$ZZFactor * (293 / (273 + $ZTemperature)) / 1000, 0);
				$ZoneQExt = round($ZoneQGen * $ZExtract, 0);
				$OutZoneF = $F - $ZoneF;
				// echo "$OutZoneF * $Thickness * $Pority * $Saturation * ($Pressure / 0.1) / $ZFactor * (293 / (273 + $Temperature))";
				$OutZoneQGen = round($OutZoneF * $Thickness * $Pority * $Saturation * 
															($Pressure / 0.1) / $ZFactor * (293 / (273 + $Temperature)) / 1000, 0);
				$OutZoneQExt = round($OutZoneQGen * $Extract, 0); ?>
				<table style="margin: auto; width: 550px; font-size: 110%; border-collapse: collapse;">
					<tr><th<?php echo str_replace('""','',$tdStyle.'" text-align: left;"'); ?>>Результати для категорій запасів</th>
						<th<?php echo $tdStyle; ?>>C<sub>1</sub></th>
						<th<?php echo $tdStyle; ?>>C<sub>2</sub></th>
						<th<?php echo $tdStyle; ?>>C<sub>1</sub>+C<sub>2</sub></th></tr>
					<tr><td<?php echo $tdStyle; ?>>
								Площа газоносності, тис. м<span style="font-size: 75%; vertical-align: super;">2</span>
							</td>
							<td<?php echo $tdCenterStyle; ?>><?php echo $ZoneF; ?></td>
							<td<?php echo $tdCenterStyle; ?>><?php echo $OutZoneF; ?></td>
							<td<?php echo $tdCenterStyle; ?>><?php echo $F; ?></td>
					</tr>
					<tr><td<?php echo $tdStyle; ?>>
								Початкові загальні <?php echo $Cat; ?> газу, млн. м<span style="font-size: 75%; vertical-align: super;">3</span>
							</td>
							<td<?php echo $tdCenterStyle; ?>><?php echo $ZoneQGen; ?></td>
							<td<?php echo $tdCenterStyle; ?>><?php echo $OutZoneQGen; ?></td>
							<td<?php echo $tdCenterStyle; ?>><?php echo $ZoneQGen + $OutZoneQGen; ?></td>
					</tr>
					<tr><td<?php echo $tdStyle; ?>>
								Початкові добувні <?php echo $Cat; ?> газу, млн. м<span style="font-size: 75%; vertical-align: super;">3</span>
							</td>
							<td<?php echo $tdCenterStyle; ?>><?php echo $ZoneQExt; ?></td>
							<td<?php echo $tdCenterStyle; ?>><?php echo $OutZoneQExt; ?></td>
							<td<?php echo $tdCenterStyle; ?>><?php echo $ZoneQExt + $OutZoneQExt; ?></td>
					</tr>
				</table>
			<?php
			} else { ?>
				Площа газоносності - <?php echo $F; ?> тис. м<span style="font-size: 75%; vertical-align: super;">2</span><br>
				Початкові загальні <?php echo $Cat; ?> газу <?php echo $categoryWord; ?>&nbsp;<?php $CatSub = $_POST['radResCategory'];
				for ($i = 1; $i < 4; $i++) $CatSub = str_replace($i, "<sub>".$i."</sub>", $CatSub);
				$CatSub = str_replace("z", "", $CatSub); echo $CatSub." - ".$QGen; ?> млн. м<span style="font-size: 75%; vertical-align: super;">3</span><br>
				Початкові добувні <?php echo $Cat; ?> газу <?php echo $categoryWord; ?>&nbsp;<?php echo $CatSub." - ".$QExt; ?> 
				млн. м<span style="font-size: 75%; vertical-align: super;">3</span><?php
			}
		}
	}
}
?>
</p>

<?php
if (!defined("From_Index")) { echo "<p style=\"text-align: center; color: red; font-weight: bold; font-size: 150%;\">".
                               "Enter to oil.php module is prohibited</p>"; return; }

$_POST['txtThickness'] = isset($_POST['txtThickness']) ? $_POST['txtThickness'] : "";
$_POST['txtPority'] = isset($_POST['txtPority']) ? $_POST['txtPority'] : "";
$_POST['txtSaturation'] = isset($_POST['txtSaturation']) ? $_POST['txtSaturation'] : "";
$_POST['txtVolumeCoef'] = isset($_POST['txtVolumeCoef']) ? $_POST['txtVolumeCoef'] : "";
$_POST['txtDensity'] = isset($_POST['txtDensity']) ? $_POST['txtDensity'] : "";
$_POST['txtExtract'] = isset($_POST['txtExtract']) ? $_POST['txtExtract'] : "";
$_POST['txtZoneRadius'] = isset($_POST['txtZoneRadius']) ? $_POST['txtZoneRadius'] : "250";
$_POST['txtZoneThickness'] = isset($_POST['txtZoneThickness']) ? $_POST['txtZoneThickness'] : "";
$_POST['txtZonePority'] = isset($_POST['txtZonePority']) ? $_POST['txtZonePority'] : "";
$_POST['txtZoneSaturation'] = isset($_POST['txtZoneSaturation']) ? $_POST['txtZoneSaturation'] : "";
$_POST['txtZoneVolumeCoef'] = isset($_POST['txtZoneVolumeCoef']) ? $_POST['txtZoneVolumeCoef'] : "";
$_POST['txtZoneDensity'] = isset($_POST['txtZoneDensity']) ? $_POST['txtZoneDensity'] : "";
$_POST['txtZoneExtract'] = isset($_POST['txtZoneExtract']) ? $_POST['txtZoneExtract'] : "";
$_POST['sbtNext1'] = isset($_POST['sbtNext1']) ? $_POST['sbtNext1'] : "";
?>
<p style="text-align: center; font-size: 120%;">
	<table style="margin: auto;">
		<tr><td style="text-align: center; font-size: 120%;" colspan=20>Calculation parameters:</td></tr>
		<tr>
			<td style="font-size: 120%;" colspan=10>Effective oil saturated thickness, m: 
			<input style="width: 70px; font-size: 100%;" type="number" name="txtThickness"
						 value="<?php echo $_POST['txtThickness']; ?>" step="0.1" min="0.1" max="999.9"
						 required>
			</td>
			<td style="font-size: 120%;" colspan=10>&nbsp; &nbsp; Coefficient of porosity: 
			<input style="width: 70px; font-size: 100%;" type="number" name="txtPority"
						 value="<?php echo $_POST['txtPority']; ?>" step="0.001" min="0.010" max="0.500"
						 required>
			</td>
		</tr>
		<tr>
			<td style="font-size: 120%;" colspan=10>Oil saturation factor: 
			<input style="width: 70px; font-size: 100%;" type="number" name="txtSaturation"
						 value="<?php echo $_POST['txtSaturation']; ?>" step="0.001" min="0.300" max="0.900"
						 required>
			<td style="font-size: 120%;" colspan=10>&nbsp; &nbsp; Volume coefficient: 
			<input style="width: 70px; font-size: 100%;" type="number" name="txtVolumeCoef"
						 value="<?php echo $_POST['txtVolumeCoef']; ?>" step="0.01" min="1.01" max="9.99"
						 required>
			</td>
		</tr>
		<tr>
			<td style="font-size: 120%;" colspan=10>Density of oil, kg/m<span 
					style="font-size: 75%; vertical-align: super;">3</span>: 
			<input style="width: 70px; font-size: 100%;" type="number" name="txtDensity"
						 value="<?php echo $_POST['txtDensity']; ?>"  step="1" min="650" max="1040"
						 required>
			</td>
			<td style="font-size: 120%;" colspan=10>&nbsp; &nbsp; Oil extractive coefficient: 
			<input style="width: 70px; font-size: 100%;" type="number" name="txtExtract"
						 value="<?php echo $_POST['txtExtract']; ?>" step="0.001" min="0.030" max="0.900"
						 required>
			</td>
		</tr><?php
if ($_POST['radResCategory'] == "C1z+C2") { ?>
		<tr><td style="text-align: center; font-size: 120%;" colspan=20>Calculation parameters in drainage zone:</td></tr>
		<tr>
			<td style="font-size: 120%; text-align: center;" colspan=20>Drainage radius, m:
			<input style="width: 70px; font-size: 100%;" type="number" name="txtZoneRadius"
						 value="<?php echo $_POST['txtZoneRadius']; ?>" step="1" min="1" max="1000"
						 required>
			</td>
		</tr>
		<tr>
			<td style="font-size: 120%;" colspan=10>Effective oil saturated thickness, m: 
			<input style="width: 70px; font-size: 100%;" type="number" name="txtZoneThickness"
						 value="<?php echo $_POST['txtZoneThickness']; ?>" step="0.1" min="0.1" max="999.9"
						 required>
			</td>
			<td style="font-size: 120%;" colspan=10>&nbsp; &nbsp; Coefficient of porosity: 
			<input style="width: 70px; font-size: 100%;" type="number" name="txtZonePority"
						 value="<?php echo $_POST['txtZonePority']; ?>" step="0.001" min="0.010" max="0.500"
						 required>
			</td>
		</tr>
		<tr>
			<td style="font-size: 120%;" colspan=10>Oil saturation factor: 
			<input style="width: 70px; font-size: 100%;" type="number" name="txtZoneSaturation"
						 value="<?php echo $_POST['txtZoneSaturation']; ?>" step="0.001" min="0.300" max="0.900"
						 required>
			<td style="font-size: 120%;" colspan=10>&nbsp; &nbsp; Volume coefficient: 
			<input style="width: 70px; font-size: 100%;" type="number" name="txtZoneVolumeCoef"
						 value="<?php echo $_POST['txtZoneVolumeCoef']; ?>" step="0.01" min="1.01" max="9.99"
						 required>
			</td>
		</tr>
		<tr>
			<td style="font-size: 120%;" colspan=10>Density of oil, kg/m<span 
					style="font-size: 75%; vertical-align: super;">3</span>: 
			<input style="width: 70px; font-size: 100%;" type="number" name="txtZoneDensity"
						 value="<?php echo $_POST['txtZoneDensity']; ?>"  step="1" min="650" max="1040"
						 required>
			</td>
			<td style="font-size: 120%;" colspan=10>&nbsp; &nbsp; Oil extractive coefficient: 
			<input style="width: 70px; font-size: 100%;" type="number" name="txtZoneExtract"
						 value="<?php echo $_POST['txtZoneExtract']; ?>" step="0.001" min="0.030" max="0.900"
						 required>
			</td>
		</tr><?php 
} $iCell = 0;
for ($iRow = 0; $iRow < 0; $iRow++) { ?>
		<tr><?php
	for ($iCol = 0; $iCol < 20; $iCol++) { $iCell++; ?>
			<td style="width: 50px; font-size: 100%;"></td><?php
	} ?>
		</tr><?php
} ?><tr><td style="text-align: center;" colspan=20>
					<span class="noprint"><input style="font-size: 125%;" type="submit" name="sbtNext1" value="To calculate"></span>
				</td></tr>
	</table><?php
if (!empty($_POST['sbtNext1'])) { ?>
	<span style="font-weight: bold; font-size: 110%;">Results:</span><br><?php
	require "category.php";
	if ($_POST['cbxIHaveSquare'] == "on") { // Не обчислюємо площу
		$F = str_replace(',', '.', $_POST['nmbSquare']);
		$Thickness = str_replace(',', '.', $_POST['txtThickness']); $Pority = str_replace(',', '.', $_POST['txtPority']);
		$Saturation = str_replace(',', '.', $_POST['txtSaturation']); $VolumeCoef = str_replace(',', '.', $_POST['txtVolumeCoef']);
		$Density = str_replace(',', '.', $_POST['txtDensity']); $Extract = str_replace(',', '.', $_POST['txtExtract']);
		$QGen = round($F * $Thickness * $Pority * $Saturation / $VolumeCoef * $Density / 1000, 0);
		$QExt = round($QGen * $Extract, 0);
		if ($_POST['radResCategory'] == "C1z+C2") { 
			$ZoneF = round(M_PI * $_POST['txtZoneRadius'] * $_POST['txtZoneRadius'] / 1000, 0);
			$ZThickness = str_replace(',', '.', $_POST['txtZoneThickness']); $ZPority = str_replace(',', '.', $_POST['txtZonePority']);
			$ZSaturation = str_replace(',', '.', $_POST['txtZoneSaturation']); 
			$ZVolumeCoef = str_replace(',', '.', $_POST['txtZoneVolumeCoef']);
			$ZDensity = str_replace(',', '.', $_POST['txtZoneDensity']); $ZExtract = str_replace(',', '.', $_POST['txtZoneExtract']);
			$ZoneQGen = round($ZoneF * $ZThickness * $ZPority * $ZSaturation / $ZVolumeCoef * $ZDensity / 1000, 0);
			$ZoneQExt = round($ZoneQGen * $ZExtract, 0);
			$OutZoneF = $F - $ZoneF;
			$OutZoneQGen = round($OutZoneF * $Thickness * $Pority * $Saturation / $VolumeCoef * $Density / 1000, 0);
			$OutZoneQExt = round($OutZoneQGen * $Extract, 0);
		?>
			<table style="margin: auto; width: 550px; font-size: 110%; border-collapse: collapse;">
				<tr><th<?php echo str_replace('""','',$tdStyle.'" text-align: left;"'); ?>>Results for reserves by classes</th>
					<th<?php echo $tdStyle; ?>>C<sub>1</sub></th>
					<th<?php echo $tdStyle; ?>>C<sub>2</sub></th>
					<th<?php echo $tdStyle; ?>>C<sub>1</sub>+C<sub>2</sub></th></tr>
				<tr><td<?php echo $tdStyle; ?>>
							Area value, thousand m<span style="font-size: 75%; vertical-align: super;">2</span>
						</td>
						<td<?php echo $tdCenterStyle; ?>><?php echo $ZoneF; ?></td>
						<td<?php echo $tdCenterStyle; ?>><?php echo $OutZoneF; ?></td>
						<td<?php echo $tdCenterStyle; ?>><?php echo $F; ?></td>
				</tr>
				<tr><td<?php echo $tdStyle; ?>>
							Initial total oil <?php echo $Cat; ?>, thousand&nbsp;t
						</td>
						<td<?php echo $tdCenterStyle; ?>><?php echo $ZoneQGen; ?></td>
						<td<?php echo $tdCenterStyle; ?>><?php echo $OutZoneQGen; ?></td>
						<td<?php echo $tdCenterStyle; ?>><?php echo $ZoneQGen + $OutZoneQGen; ?></td>
				</tr>
				<tr><td<?php echo $tdStyle; ?>>
							Initial extractive oil <?php echo $Cat; ?>, thousand&nbsp;t
						</td>
						<td<?php echo $tdCenterStyle; ?>><?php echo $ZoneQExt; ?></td>
						<td<?php echo $tdCenterStyle; ?>><?php echo $OutZoneQExt; ?></td>
						<td<?php echo $tdCenterStyle; ?>><?php echo $ZoneQExt + $OutZoneQExt; ?></td>
				</tr>
			</table>
		<?php
		} else { ?>
			Area value is <?php echo $F; ?> thousand m<span style="font-size: 75%; vertical-align: super;">2</span><br>
			Initial total oil <?php echo $Cat; ?> <?php echo $categoryWord; ?>&nbsp;<?php $CatSub = $_POST['radResCategory'];
			for ($i = 1; $i < 4; $i++) $CatSub = str_replace($i, "<sub>".$i."</sub>", $CatSub);
			$CatSub = str_replace("z", "", $CatSub); echo $CatSub." are ".$QGen; ?> thousand t<br>
			Initial extractive oil <?php echo $Cat; ?> <?php echo $categoryWord; ?>&nbsp;<?php echo $CatSub." are ".$QExt; ?> thousand t<?php
		}
		return;
	}
	$x0 = $_POST['nmbXLeft']; $xk = $_POST['nmbXRight'];
	if ($x0 >= $xk) { ?><span style="color: red; font-size: 125%">X<sub>min</sub> and/or X<sub>max</sub> values are incorrect. Fix them</span><?php } else {
		$n = $_POST['nmbPoints']; /* echo $n." "; */ $y = array(); $NumCount = 0;
		for ($i = 0; $i < $n; $i++) if (is_numeric($_POST['nmbYCont'.($i + 1)])) $NumCount++;
		if ($NumCount < $n) { ?><span style="color: red; font-size: 125%">Enter all ordinates of points</span><?php } else {
			for ($i = 0; $i < $n; $i++) { $y[$i] = $_POST['nmbYCont'.($i + 1)]; /* echo $y[$i]." "; */ }
			$m = str_replace(" ","",$_POST['nmbMes']) / 1000; $F = round(AreaSymp($y, $n, $x0, $xk, $m) / 1000, 0);
			$Thickness = str_replace(',', '.', $_POST['txtThickness']); $Pority = str_replace(',', '.', $_POST['txtPority']);
			$Saturation = str_replace(',', '.', $_POST['txtSaturation']); $VolumeCoef = str_replace(',', '.', $_POST['txtVolumeCoef']);
			$Density = str_replace(',', '.', $_POST['txtDensity']); $Extract = str_replace(',', '.', $_POST['txtExtract']);
			$QGen = round($F * $Thickness * $Pority * $Saturation / $VolumeCoef * $Density / 1000, 0);
			$QExt = round($QGen * $Extract, 0);
			if ($_POST['radResCategory'] == "C1z+C2") { 
				$ZoneF = round(M_PI * $_POST['txtZoneRadius'] * $_POST['txtZoneRadius'] / 1000, 0);
				$ZThickness = str_replace(',', '.', $_POST['txtZoneThickness']); $ZPority = str_replace(',', '.', $_POST['txtZonePority']);
				$ZSaturation = str_replace(',', '.', $_POST['txtZoneSaturation']); 
				$ZVolumeCoef = str_replace(',', '.', $_POST['txtZoneVolumeCoef']);
				$ZDensity = str_replace(',', '.', $_POST['txtZoneDensity']); $ZExtract = str_replace(',', '.', $_POST['txtZoneExtract']);
				$ZoneQGen = round($ZoneF * $ZThickness * $ZPority * $ZSaturation / $ZVolumeCoef * $ZDensity / 1000, 0);
				$ZoneQExt = round($ZoneQGen * $ZExtract, 0);
				$OutZoneF = $F - $ZoneF;
				$OutZoneQGen = round($OutZoneF * $Thickness * $Pority * $Saturation / $VolumeCoef * $Density / 1000, 0);
				$OutZoneQExt = round($OutZoneQGen * $Extract, 0);
			?>
				<table style="margin: auto; width: 550px; font-size: 110%; border-collapse: collapse;">
					<tr><th<?php echo str_replace('""','',$tdStyle.'" text-align: left;"'); ?>>Results for reserves by classes</th>
						<th<?php echo $tdStyle; ?>>C<sub>1</sub></th>
						<th<?php echo $tdStyle; ?>>C<sub>2</sub></th>
						<th<?php echo $tdStyle; ?>>C<sub>1</sub>+C<sub>2</sub></th></tr>
					<tr><td<?php echo $tdStyle; ?>>
								Area value, thousand m<span style="font-size: 75%; vertical-align: super;">2</span>
							</td>
							<td<?php echo $tdCenterStyle; ?>><?php echo $ZoneF; ?></td>
							<td<?php echo $tdCenterStyle; ?>><?php echo $OutZoneF; ?></td>
							<td<?php echo $tdCenterStyle; ?>><?php echo $F; ?></td>
					</tr>
					<tr><td<?php echo $tdStyle; ?>>
								Initial total oil <?php echo $Cat; ?>, thousand&nbsp;t
							</td>
							<td<?php echo $tdCenterStyle; ?>><?php echo $ZoneQGen; ?></td>
							<td<?php echo $tdCenterStyle; ?>><?php echo $OutZoneQGen; ?></td>
							<td<?php echo $tdCenterStyle; ?>><?php echo $ZoneQGen + $OutZoneQGen; ?></td>
					</tr>
					<tr><td<?php echo $tdStyle; ?>>
								Initial extractive oil <?php echo $Cat; ?>, thousand&nbsp;t
						</td>
						<td<?php echo $tdCenterStyle; ?>><?php echo $ZoneQExt; ?></td>
						<td<?php echo $tdCenterStyle; ?>><?php echo $OutZoneQExt; ?></td>
						<td<?php echo $tdCenterStyle; ?>><?php echo $ZoneQExt + $OutZoneQExt; ?></td>
					</tr>
				</table>
			<?php
			} else { ?>
				Area value is <?php echo $F; ?> thousand m<span style="font-size: 75%; vertical-align: super;">2</span><br>
				Initial total oil <?php echo $Cat; ?> <?php echo $categoryWord; ?>&nbsp;<?php $CatSub = $_POST['radResCategory'];
				for ($i = 1; $i < 4; $i++) $CatSub = str_replace($i, "<sub>".$i."</sub>", $CatSub);
				$CatSub = str_replace("z", "", $CatSub); echo $CatSub." are ".$QGen; ?> thousand t<br>
				Initial extractive oil <?php echo $Cat; ?> <?php echo $categoryWord; ?>&nbsp;<?php echo $CatSub." are ".$QExt; ?> thousand t<?php
			}
		}
	}
}
?>
</p>

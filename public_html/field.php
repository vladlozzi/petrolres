<?php
if (!defined("From_Index")) { echo "<p style=\"text-align: center; color: red; font-weight: bold; font-size: 150%;\">".
                               "Помилка входу в модуль field.php</p>"; return; }

$_POST['txtName'] = isset($_POST['txtName']) ? $_POST['txtName'] : "";
$_POST['txtField'] = isset($_POST['txtField']) ? $_POST['txtField'] : "";
$_POST['txtDeposit'] = isset($_POST['txtDeposit']) ? $_POST['txtDeposit'] : "";
$_POST['selResCategory'] = isset($_POST['selResCategory']) ? $_POST['selResCategory'] : "A";
$_POST['radResCategory'] = isset($_POST['radResCategory']) ? $_POST['radResCategory'] : "A";
$_POST['cbxIHaveSquare'] = isset($_POST['cbxIHaveSquare']) ? $_POST['cbxIHaveSquare'] : "";
$_POST['nmbSquare'] = isset($_POST['nmbSquare']) ? $_POST['nmbSquare'] : "";
$_POST['nmbMes'] = isset($_POST['nmbMes']) ? $_POST['nmbMes'] : "";
$_POST['nmbPoints'] = isset($_POST['nmbPoints']) ? $_POST['nmbPoints'] : 8;
$_POST['nmbXLeft'] = isset($_POST['nmbXLeft']) ? $_POST['nmbXLeft'] : "";
$_POST['nmbXRight'] = isset($_POST['nmbXRight']) ? $_POST['nmbXRight'] : "";
for ($iCell = 0; $iCell < 100; $iCell++)
	$_POST['nmbYCont'.($iCell+1)] = isset($_POST['nmbYCont'.($iCell+1)]) ? $_POST['nmbYCont'.($iCell+1)] : "";
$ContourExtUkr = "";
if (isset($_POST['radAreaMode']) and $_POST['radAreaMode'] == "Ring") {
	$ContourExtUkr = "зовнішнього"; $ContourIntUkr = "внутрішнього";
	$_POST['nmbPointsInt'] = isset($_POST['nmbPointsInt']) ? $_POST['nmbPointsInt'] : 8;
	$_POST['nmbXLeftInt'] = isset($_POST['nmbXLeftInt']) ? $_POST['nmbXLeftInt'] : "";
	$_POST['nmbXRightInt'] = isset($_POST['nmbXRightInt']) ? $_POST['nmbXRightInt'] : "";
	for ($iCell = 0; $iCell < 100; $iCell++)
		$_POST['nmbYContInt'.($iCell+1)] = isset($_POST['nmbYContInt'.($iCell+1)]) ? $_POST['nmbYContInt'.($iCell+1)] : "";
} ?>
<p style="text-align: center; font-size: 120%; margin: 2% auto -1% auto;">
	Виконавець: 
	<input style="width: 400px; font-size: 100%;" type="text" name="txtName" required value="<?php echo $_POST['txtName']; ?>"><br>
	Родовище / площа: 
	<input style="width: 400px; font-size: 100%;" type="text" name="txtField" required value="<?php echo $_POST['txtField']; ?>"><br>
	Поклад / горизонт / пласт: 
	<input style="width: 360px; font-size: 100%;" type="text" name="txtDeposit" required value="<?php echo $_POST['txtDeposit']; ?>"><?php
if ($_POST['radCalcul'] != "Square") { ?><br>
	Категорія запасів<?php if ($_POST['radCalcul'] == "Oil" or $_POST['radCalcul'] == "Gas") { ?> / ресурсів <?php } ?>: 
	<input type="radio" name="radResCategory" value="A" onclick="submit()"
		<?php if ($_POST['radResCategory'] == "A") echo "checked"; ?> >A &nbsp;
	<input type="radio" name="radResCategory" value="B" onclick="submit()"
		<?php if ($_POST['radResCategory'] == "B") echo "checked"; ?> >B &nbsp;
	<input type="radio" name="radResCategory" value="A+B" onclick="submit()"
		<?php if ($_POST['radResCategory'] == "A+B") echo "checked"; ?> >A+B &nbsp;
	<input type="radio" name="radResCategory" value="A+B+C1" onclick="submit()"
		<?php if ($_POST['radResCategory'] == "A+B+C1") echo "checked"; ?> >A+B+C<sub>1</sub> &nbsp;
	<input type="radio" name="radResCategory" value="A+B+C1+C2" onclick="submit()"
		<?php if ($_POST['radResCategory'] == "A+B+C1+C2") echo "checked"; ?> >A+B+C<sub>1</sub>+C<sub>2</sub> &nbsp;
	<input type="radio" name="radResCategory" value="B+C1" onclick="submit()"
		<?php if ($_POST['radResCategory'] == "B+C1") echo "checked"; ?> >B+C<sub>1</sub> &nbsp;
	<input type="radio" name="radResCategory" value="B+C1+C2" onclick="submit()"
		<?php if ($_POST['radResCategory'] == "B+C1+C2") echo "checked"; ?> >B+C<sub>1</sub>+C<sub>2</sub><br>
	<input type="radio" name="radResCategory" value="C1" onclick="submit()"
		<?php if ($_POST['radResCategory'] == "C1") echo "checked"; ?> >C<sub>1</sub> &nbsp;
	<input type="radio" name="radResCategory" value="C2" onclick="submit()"
		<?php if ($_POST['radResCategory'] == "C2") echo "checked"; ?> >C<sub>2</sub> &nbsp;
	<input type="radio" name="radResCategory" value="C1+C2" onclick="submit()"
		<?php if ($_POST['radResCategory'] == "C1+C2") echo "checked"; ?> >C<sub>1</sub>+C<sub>2</sub><?php 
	if ($_POST['radCalcul'] == "Oil" or $_POST['radCalcul'] == "Gas") { ?> &nbsp;
		<input type="radio" name="radResCategory" value="C1z+C2" onclick="submit()"
			<?php if ($_POST['radResCategory'] == "C1z+C2") echo "checked"; ?> >C<sub>1</sub>(зона дренажу)+С<sub>2</sub> &nbsp;
		<input type="radio" name="radResCategory" value="C3" onclick="submit()"
			<?php if ($_POST['radResCategory'] == "C3") echo "checked"; ?> >C<sub>3</sub><!-- &nbsp;
		<input type="radio" name="radResCategory" value="C3+D1+D2" onclick="submit()"
			<?php if ($_POST['radResCategory'] == "C3+D1+D2") echo "checked"; ?> >C<sub>3</sub>+D<sub>1</sub>+D<sub>2</sub> &nbsp;
		<input type="radio" name="radResCategory" value="D1" onclick="submit()"
			<?php if ($_POST['radResCategory'] == "D1") echo "checked"; ?> >D<sub>1</sub> &nbsp;
		<input type="radio" name="radResCategory" value="D2" onclick="submit()"
			<?php if ($_POST['radResCategory'] == "D2") echo "checked"; ?> >D<sub>2</sub> &nbsp;
		<input type="radio" name="radResCategory" value="D1+D2" onclick="submit()"
			<?php if ($_POST['radResCategory'] == "D1+D2") echo "checked"; ?> >D<sub>1</sub>+D<sub>2</sub> --><?php
	}
} ?>
	<table style="margin: 0% auto -1% auto;"><?php
if ($_POST['radCalcul'] != "Square") { ?>
		<tr><td style="text-align: center; font-size: 120%;" colspan=20>
					<input type="checkbox" name="cbxIHaveSquare" onclick="submit()"
						<?php echo ($_POST['cbxIHaveSquare'] == "on") ? "checked" : ""; ?>
					>&nbsp;Значення площі нафто(газо)носності відоме
				</td></tr><?php // echo "<br>cbxIHaveSquare = '".$_POST['cbxIHaveSquare']."'";
} else {
	$_POST['cbxIHaveSquare'] = "";
}
if ($_POST['cbxIHaveSquare'] == "on") { ?>
		<tr><td style="text-align: center; font-size: 120%;" colspan=20>
					Вставте з буфера (Ctrl+V) або введіть значення площі, тис. м<sup>2</sup>:
					<input style="width: 100px; font-size: 100%;" type="number" name="nmbSquare" min="1" step="1" 
								value="<?php echo $_POST['nmbSquare']; ?>" >
				</td></tr>
<?php
} else { ?>
		<tr><td style="text-align: center; font-size: 120%;" colspan=20>
					Геометрія <?php echo $ContourExtUkr; ?> контуру нафто(газо)носності:</td></tr>
		<tr>
			<td colspan=4> </td>
			<td style="font-size: 120%;" colspan=6>Масштаб 1: 
				<input style="width: 100px; font-size: 100%;" type="text" name="nmbMes" list="lstMes"
							 value="<?php echo $_POST['nmbMes']; ?>">
				<datalist id="lstMes">
					<option>50 000</option><option>25 000</option>
					<option>250 000</option><option>200 000</option><option>100 000</option>
					<option>10 000</option><option>5 000</option><option>1 000</option>
				</datalist>
			</td>
			<td style="font-size: 120%;" colspan=10>Абсциса лівої точки, мм: 
				<input style="width: 70px; font-size: 100%;" type="number" name="nmbXLeft" min="0" max="100" step="1"
							 value="<?php echo $_POST['nmbXLeft']; ?>" required>
			</td>
		</tr>
		<tr>
			<td colspan=4> </td>
			<td style="font-size: 120%;" colspan=6>Кількість точок контуру: 
				<input style="width: 70px; font-size: 100%;" type="number" name="nmbPoints" min="8" max="100" step="4"
							 value="<?php echo $_POST['nmbPoints']; ?>" required></td>
			<td style="font-size: 120%;" colspan=10>Абсциса правої точки, мм: 
				<input style="width: 70px; font-size: 100%;" type="number" name="nmbXRight" min="0" max="999" step="1"
							 value="<?php echo $_POST['nmbXRight']; ?>" required>
			</td>
		</tr>
		<tr><td style="text-align: center; font-size: 120%;" colspan=20>
						Ординати точок (обхід <?php echo $ContourExtUkr; ?> контуру за стрілкою годинника), мм:</td></tr><?php 
	$iCell = 0;
	for ($iRow = 0; $iRow < 5; $iRow++) { $iCellInRow = 0; ?>
		<tr><?php
		for ($iCol = 0; $iCol < 20; $iCol++) { $iCell++; $iCellInRow++; ?>
			<td>
				<span <?php if ($iRow > 0 and $_POST['nmbYCont'.$iCell] == "") { ?>class="noprint"<?php } ?> >
					<input style="width: 50px; font-size: 100%;" type="number"
							name="nmbYCont<?php echo $iCell; ?>" value="<?php echo $_POST['nmbYCont'.$iCell]; ?>">
				</span>
			</td><?php
		} ?>
		</tr><?php
	}
	if (isset($_POST['radAreaMode']) and $_POST['radAreaMode'] == "Ring") { ?>
		<tr><td style="text-align: center; font-size: 120%;" colspan=20>
					Геометрія <?php echo $ContourIntUkr; ?> контуру нафто(газо)носності:</td></tr>
		<tr>
			<td colspan=4> </td><td colspan=6> </td>
			<td style="font-size: 120%;" colspan=10>Абсциса лівої точки, мм: 
				<input style="width: 70px; font-size: 100%;" type="number" name="nmbXLeftInt" min="0" max="300" step="1"
							 value="<?php echo $_POST['nmbXLeftInt']; ?>" required>
			</td>
		</tr>
		<tr>
			<td colspan=4> </td>
			<td style="font-size: 120%;" colspan=6>Кількість точок контуру: 
				<input style="width: 70px; font-size: 100%;" type="number" name="nmbPointsInt" min="8" max="100" step="4"
							 value="<?php echo $_POST['nmbPointsInt']; ?>" required></td>
			<td style="font-size: 120%;" colspan=10>Абсциса правої точки, мм: 
				<input style="width: 70px; font-size: 100%;" type="number" name="nmbXRightInt" min="0" max="999" step="1"
							 value="<?php echo $_POST['nmbXRightInt']; ?>" required>
			</td>
		</tr>
		<tr><td style="text-align: center; font-size: 120%;" colspan=20>
						Ординати точок (обхід <?php echo $ContourIntUkr; ?> контуру за стрілкою годинника), мм:</td></tr><?php 
		$iCell = 0;
		for ($iRow = 0; $iRow < 5; $iRow++) { $iCellInRow = 0; ?>
		<tr><?php
			for ($iCol = 0; $iCol < 20; $iCol++) { $iCell++; $iCellInRow++; ?>
			<td>
				<span <?php if ($iRow > 0 and $_POST['nmbYContInt'.$iCell] == "") { ?>class="noprint"<?php } ?> >
					<input style="width: 50px; font-size: 100%;" type="number"
							name="nmbYContInt<?php echo $iCell; ?>" value="<?php echo $_POST['nmbYContInt'.$iCell]; ?>">
				</span>
			</td><?php
			} ?>
		</tr><?php
		}
	}
}	?>
	</table>
</p>
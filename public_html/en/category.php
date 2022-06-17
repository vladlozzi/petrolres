<?php
if (!defined("From_Index")) { echo "<p style=\"text-align: center; color: red; font-weight: bold; font-size: 150%;\">".
	"Enter to category.php module is prohibited</p>"; return; 
}
switch ($_POST['radResCategory']) {
	case "A": $Cat = "proved reserves"; $categoryWord = "of class"; break;
	case "B": $Cat = "proved reserves"; $categoryWord = "of class"; break;
	case "A+B": $Cat = "proved reserves"; $categoryWord = "of classes"; break;
	case "A+B+C1": $Cat = "proved reserves"; $categoryWord = "of classes"; break;
	case "A+B+C1+C2": $Cat = "reserves"; $categoryWord = "of classes"; break;
	case "B+C1": $Cat = "proved reserves"; $categoryWord = "of classes"; break;
	case "B+C1+C2": $Cat = "reserves"; $categoryWord = "of classes"; break;
	case "C1": $Cat = "proved reserves"; $categoryWord = "of class"; break;
	case "C2": $Cat = "probable reserves"; $categoryWord = "of class"; break;
	case "C1+C2": $Cat = "reserves"; $categoryWord = "of classes"; break;
	case "C1z+C2": $Cat = "reserves"; $categoryWord = "of classes"; break;
	case "C3": $Cat = "prospective resources"; $categoryWord = "of class"; break;
	case "C3+D1+D2": $Cat = "resources"; $categoryWord = "of classes"; break;
	case "D1": $Cat = "prognozed resources"; $categoryWord = "of class"; break;
	case "D2": $Cat = "prognozed resources"; $categoryWord = "of class"; break;
	case "D1+D2": $Cat = "prognozed resources"; $categoryWord = "of classes"; break;
}

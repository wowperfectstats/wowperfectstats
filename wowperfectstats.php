<?php
$stats = $_POST['statstotal'];
$charstring = $_POST['charstring'];
$i = 1;
//Full = 24 | 
$cont = 0;

// Mini
function sMINIp() {
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 75, 20, 05, 00);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 65, 30, 05, 00);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 60, 20, 20, 00);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 55, 35, 10, 00);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 50, 25, 25, 00);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 45, 45, 10, 00);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 40, 40, 10, 10);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
}

function sRB1p() {
	echo swapPos($GLOBALS['i'], $GLOBALS['stats'], 75, 20, 05, 00);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 75, 15, 05, 05);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 70, 25, 05, 00);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 70, 15, 15, 00);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont']; 
}

function sRB2p() {
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 65, 35, 00, 00);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 65, 25, 10, 00);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 65, 20, 15, 00);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 60, 20, 20, 00);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
}

function sRB3p() {
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 60, 18, 17, 05);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 60, 35, 05, 00);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 55, 45, 00, 00);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 55, 30, 15, 00);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	
}

function sRB4p() {
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 55, 20, 20, 05);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 50, 45, 05, 00);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 40, 25, 25, 10);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 35, 35, 30, 00);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
}

function sRB5p() {
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 35, 35, 20, 10);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 35, 30, 20, 15);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 30, 30, 30, 10);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 30, 25, 25, 20);
}

// 75%
function s75p() {
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 75, 25, 00, 00);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 75, 20, 05, 00);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 75, 15, 05, 05);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 75, 15, 10, 00);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 75, 10, 10, 05);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
}
// 70%
function s70p() {
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 70, 30, 00, 00);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 70, 25, 05, 00);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 70, 20, 10, 00);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 70, 20, 05, 05);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 70, 15, 15, 00);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 70, 15, 10, 05);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 70, 10, 10, 10);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
}

// 65%
function s65p() {
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 65, 35, 00, 00);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 65, 30, 05, 00);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 65, 25, 10, 00);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 65, 25, 05, 05);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 65, 20, 10, 05);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 65, 20, 15, 00);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 65, 15, 15, 05);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 65, 15, 10, 10);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
}

// 60%
function s60p() {
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 60, 20, 20, 00);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 60, 25, 15, 00);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 60, 15, 15, 10);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 60, 18, 17, 05);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 60, 30, 10, 00);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 60, 28, 07, 05);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 60, 35, 05, 00);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 60, 30, 05, 05);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
}

// 55%
function s55p() {
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 55, 45, 00, 00);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 55, 40, 05, 00);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 55, 35, 10, 00);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 55, 35, 05, 05);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 55, 30, 15, 00);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 55, 30, 10, 05);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 55, 25, 20, 00);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 55, 25, 15, 05);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 55, 25, 10, 10);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 55, 25, 10, 10);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 55, 20, 20, 05);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 55, 15, 15, 15);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
}

// 50%
function s50p() {
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 50, 50, 00, 00);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 50, 45, 05, 00);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 50, 40, 10, 00);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 50, 40, 05, 05);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 50, 35, 15, 00);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 50, 35, 10, 05);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 50, 30, 20, 00);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 50, 30, 15, 05);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 50, 30, 10, 10);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 50, 25, 20, 05);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 50, 25, 25, 00);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 50, 25, 15, 10);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 50, 20, 20, 10);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 50, 20, 15, 15);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
}

// 45%
function s45p() {
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 45, 45, 10, 00);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 45, 45, 05, 05);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 45, 40, 15, 00);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 45, 40, 10, 05);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 45, 35, 20, 00);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 45, 35, 15, 05);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 45, 35, 10, 10);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 45, 30, 25, 00);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 45, 30, 20, 05);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 45, 30, 15, 10);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 45, 25, 20, 10);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 45, 20, 20, 15);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
}

// 40%
function s40p() {
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 40, 40, 20, 00);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 40, 40, 15, 05);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 40, 40, 10, 10);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 40, 35, 25, 00);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 40, 35, 20, 05);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 40, 35, 15, 10);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 40, 30, 30, 00);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 40, 30, 25, 05);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 40, 30, 20, 10);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 40, 30, 15, 15);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 40, 25, 25, 10);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 40, 25, 20, 15);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 40, 20, 20, 20);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
}

// 35%
function s35p() {
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 35, 35, 30, 00);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 35, 35, 25, 05);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 35, 35, 20, 10);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 35, 35, 15, 15);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 35, 30, 30, 05);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 35, 30, 25, 10);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 35, 30, 20, 15);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 35, 25, 25, 15);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 35, 25, 20, 20);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
}

// 30%
function s30p() {
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 30, 30, 30, 10);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 30, 30, 25, 15);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 30, 30, 20, 20);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 30, 25, 25, 20);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
}

function s25p() {
	echo swapPos($GLOBALS['i'] ,$GLOBALS['stats'], 25, 25, 25, 25);
	$GLOBALS['i'] = $GLOBALS['i'] + $GLOBALS['cont'];
}

function swapPos($i ,$stats ,$p1, $p2, $p3, $p4) {
	printString($GLOBALS['i']++, $GLOBALS['stats'], $p1, $p2, $p3, $p4);
	printString($GLOBALS['i']++, $GLOBALS['stats'], $p1, $p2, $p4, $p3);
	printString($GLOBALS['i']++, $GLOBALS['stats'], $p1, $p3, $p2, $p4);
	printString($GLOBALS['i']++, $GLOBALS['stats'], $p1, $p3, $p4, $p2);
	printString($GLOBALS['i']++, $GLOBALS['stats'], $p1, $p4, $p2, $p3);
	printString($GLOBALS['i']++, $GLOBALS['stats'], $p1, $p4, $p3, $p2);

	printString($GLOBALS['i']++, $GLOBALS['stats'], $p2, $p1, $p3, $p4);
	printString($GLOBALS['i']++, $GLOBALS['stats'], $p2, $p1, $p4, $p3);
	printString($GLOBALS['i']++, $GLOBALS['stats'], $p2, $p3, $p1, $p4);
	printString($GLOBALS['i']++, $GLOBALS['stats'], $p2, $p3, $p4, $p1);
	printString($GLOBALS['i']++, $GLOBALS['stats'], $p2, $p4, $p1, $p3);
	printString($GLOBALS['i']++, $GLOBALS['stats'], $p2, $p4, $p3, $p1);

	printString($GLOBALS['i']++, $GLOBALS['stats'], $p3, $p1, $p2, $p4);
	printString($GLOBALS['i']++, $GLOBALS['stats'], $p3, $p1, $p4, $p2);
	printString($GLOBALS['i']++, $GLOBALS['stats'], $p3, $p2, $p1, $p4);
	printString($GLOBALS['i']++, $GLOBALS['stats'], $p3, $p2, $p4, $p1);
	printString($GLOBALS['i']++, $GLOBALS['stats'], $p3, $p4, $p1, $p2);
	printString($GLOBALS['i']++, $GLOBALS['stats'], $p3, $p4, $p2, $p1);

	printString($GLOBALS['i']++, $GLOBALS['stats'], $p4, $p1, $p2, $p3);
	printString($GLOBALS['i']++, $GLOBALS['stats'], $p4, $p1, $p3, $p2);
	printString($GLOBALS['i']++, $GLOBALS['stats'], $p4, $p2, $p1, $p3);
	printString($GLOBALS['i']++, $GLOBALS['stats'], $p4, $p2, $p3, $p1);
	printString($GLOBALS['i']++, $GLOBALS['stats'], $p4, $p3, $p1, $p2);
	printString($GLOBALS['i']++, $GLOBALS['stats'], $p4, $p3, $p2, $p1);
	
}

function printString($i, $stats, $p1, $p2, $p3, $p4) {
	
	$c = $GLOBALS['stats'] * (0.01 * $p1);
	$h = $GLOBALS['stats'] * (0.01 * $p2);
	$m = $GLOBALS['stats'] * (0.01 * $p3);
	$v = $GLOBALS['stats'] * (0.01 * $p4);
	
	$c = (integer)$c;
	$h = (integer)$h;
	$m = (integer)$m;
	$v = (integer)$v;
	echo "
copy=#$i.c$p1.h$p2.m$p3.v$p4
gear_crit_rating=$c
gear_haste_rating=$h
gear_mastery_rating=$m
gear_versatility_rating=$v
";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<title>SimC Stats</title>

	<style type="text/css">
	<!--
	.style3 {
		font-family: Georgia, "Times New Roman", Times, serif;
	}
	.style4 {
		font-size: 24px;
		font-weight: bold;
	}
	-->
</style>
</head>

<body>
	<div align="center">
		<table width="800" border="0">
			<tr>
				<td colspan="5"><div align="center" class="style4">SimC Stats</div></td>
			</tr>
			<tr>
				<td colspan="5">&nbsp;</td>
			</tr>
			<tr>
				<td width="159"><div align="center"></div>
					<label>
						<div align="center"><br />
							<td width="155"><div align="center"><span class="style3">RaidBots String #1<br />
								<textarea name="charstring1" id="charstring2" disabled="disabled" cols="20" rows="30"><?php echo $charstring; sRB1p(); ?></textarea>
							</span></div></td>
							<td width="155"><div align="center"><span class="style3">RaidBots String #2<br />
								<textarea name="charstring2" id="charstring2" disabled="disabled" cols="20" rows="30"><?php echo $charstring; sRB2p(); ?></textarea>
							</span></div></td>
							<td width="155"><div align="center"><span class="style3">RaidBots String #3<br />
								<textarea name="charstring3" id="charstring3" disabled="disabled" cols="20" rows="30"><?php echo $charstring; sRB3p(); ?></textarea>
							</span></div></td>
							<td width="155"><div align="center"><span class="style3">RaidBots String #4<br />
								<textarea name="charstring4" id="charstring4" disabled="disabled" cols="20" rows="30"><?php echo $charstring; sRB4p(); ?></textarea>
							</span></div></td>
							<td width="155"><div align="center"><span class="style3">RaidBots String #5<br />
								<textarea name="charstring5" id="charstring5" disabled="disabled" cols="20" rows="30"><?php echo $charstring; sRB5p(); ?></textarea>
								<br />
							</p></td>
						</tr>
						<tr>
						</tr>
					</table>
				</div>
			</body>
			</html>

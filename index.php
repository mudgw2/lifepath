<!doctype html>
<html class="no-js" lang="en">
<?php 
//Clear SESSION scope
	session_start();
	session_unset();
	session_destroy();
	session_write_close();
	setcookie(session_name(),'',0,'/');
	session_regenerate_id(true);
	include "header.php";
	include "functions.php";
	
	$level 	= 1;
	$age 	= 0;
?>
<body id="page-top">
<div class="container">
<h1>Lifepath Generator</h1>
<p>http://www.dandwiki.com/wiki/Character_Lifepath_(3.5e_Variant_Rule)</p>

<div class='row'>
<h3>Childhood</h3>
<p>You grew up <?php generate('birth');?>, raised by <?php generate('caretakers_origin');?>.  You come from a line of <?php generate('background');?>, and <?php generate('environment');?>.  <?php generate('caretakers_status');?>.</p>
</div>

<div class='row'>
<h3>Siblings</h3>
<p>You were raised  <?php siblings();?></p>
</div>

<div class='row'>
<h3>Personality and Style</h3>
<p>You like to wear <?php generate('clothing');?>, and you <?php generate('hair');?>.</p>
<p>You have <?php generate('mark'); ?></p>
</div>

<div class='row'>
<h3>Fate</h3>
<?php
fate();
?>
</div>

</div>
</body>
</html>

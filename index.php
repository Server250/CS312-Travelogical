<!DOCTYPE html>
<?php 

$submitted = isset($_POST['submit-button']);

if ($submitted===true)
{

extract($_POST);

// Fuel type: $fueltype = "diesel", "petrol" or "electric"
// Engine size: $enginetype = int 2 to 6

// GET LOCATION DATA THROUGH TOO

}


?>

<html><head>

<title>CAR</title>

<link href="https://fonts.googleapis.com/css?family=Alata&display=swap" rel="stylesheet"> 
<link type="text/css" rel="stylesheet" href="stylesheets/car-global.css"/>
<link type="text/css" rel="stylesheet" href="stylesheets/car-header.css"/>
<link type="text/css" rel="stylesheet" href="stylesheets/car-form.css"/>
<link type="text/css" rel="stylesheet" href="stylesheets/car-result.css"/>
<link type="text/css" rel="stylesheet" href="stylesheets/car-footer.css"/>
<link type="text/css" rel="stylesheet" href="stylesheets/car-reactive.css"/>

<script src="https://kit.fontawesome.com/08b9c3aade.js" crossorigin="anonymous"></script>

<script src="formValidation.js"></script>

</head>

<body>

<header style="">
<a href="logout.php" class="header-right">log out</a>
<a href="myaccount.php" class="header-right">my account</a>

<a href="index.php" class="header-left">home</a>
</header><br>


<div id="content-wrapper">
<div class="vspacer" style="grid-row-start:1;"></div>

<input type="text" <?php if ($submitted === true) {echo 'placeholder="location 1" disabled';} else {echo 'placeholder="here"';} ?> class="location-input" id="from-input"/>

<div id="todescriptor">
<p>to</p>
<i class="fas fa-arrow-right"></i>
</div>

<input type="text" <?php if ($submitted === true) {echo 'placeholder="location 2" disabled';} else {echo 'placeholder="here"';} ?> class="location-input" id="to-input"/>

<div class="hspacer" style="grid-column-start:1;"></div>

<div id="map-view">

<?php if ($submitted===true) { echo '<div id="route-save-button">Save Route?</div>'; } ?>

</div>

<div class="hspacer" style="grid-column-start:3;"></div>

<form id="info-form" method="post" onsubmit="return(validateMainForm());">

<?php // First Header
if ($submitted === true)
{
echo '<p style="grid-column-start:1;grid-column-end:4;grid-row-start:2;grid-row-end:3;"><span class="bold">Your Carbon Footprint</span></p>';
}
else
{
echo '<p style="grid-column-start:1;grid-column-end:4;grid-row-start:2;grid-row-end:3;">What size of engine do you have?</p>';	
}
?>

<?php // First content
if ($submitted === true)
{
echo '
<div class="result-smalltext" style="grid-column-start:1;grid-column-end:4;grid-row-start:3;grid-row-end:4;">

<p>Your commute creates around x tonnes of carbon footprint. In a year, that\'s about 240x tonnes. Too much.</p>

</div>';

}
else
{
echo '
<div class="radio-container-container" style="grid-column-start:1;grid-column-end:4;grid-row-start:3;grid-row-end:4;">
<label class="radio-container">
  <input type="radio" name="enginetype" value="1-1.9">
  <div class="radio-custom">1-1.9 Litres</div>
</label>

<label class="radio-container">
  <input type="radio" name="enginetype" value="2-2.9">
  <div class="radio-custom">2-2.9 Litres</div>
</label>

<label class="radio-container">
  <input type="radio" name="enginetype" value="3-3.9">
  <div class="radio-custom">3-3.9 Litres</div>
</label>

<label class="radio-container">
  <input type="radio" name="enginetype" value="4-4.9">
  <div class="radio-custom">4-4.9 Litres</div>
</label>

<label class="radio-container">
  <input type="radio" name="enginetype" value="5+">
  <div class="radio-custom">5+ <br>Litres</div>
</label>
</div>
';
}
?>

<?php // Second header
if ($submitted===true)
{
echo '<p style="grid-column-start:1;grid-column-end:4;grid-row-start:4;grid-row-end:5;"><span class="bold">Your Money</span></p>';
}
else
{
echo '<p style="grid-column-start:1;grid-column-end:4;grid-row-start:4;grid-row-end:5;">Which type of fuel do you use?</p>';
}
?>

<?php // Second content
if ($submitted===true)
{
echo '<div class="result-smalltext" style="grid-column-start:1;grid-column-end:4;grid-row-start:5;grid-row-end:6;">

<p>Your commute is costing you around £x.xx every day. About 240x times that every year, just for work. You could use that somewhere else.</p>

</div>';
}
else
{
echo '<div class="radio-container-container" style="grid-column-start:2;grid-column-end:4;grid-row-start:5;grid-row-end:6;">
<label class="radio-container">
  <input type="radio" name="fueltype" value="petrol">
  <div class="radio-custom">Petrol</div>
</label>

<label class="radio-container">
  <input type="radio" name="fueltype" value="diesel">
  <div class="radio-custom">Diesel</div>
</label>

<label class="radio-container">
  <input type="radio" name="fueltype" value="electric">
  <div class="radio-custom">Electric</div>
</label>
</div>';
}
?>

<?php // Final element
if ($submitted === true)
{
echo '<h1 class="result-bigtext" style="grid-column-start:1;grid-column-end:4;grid-row-start:7;grid-row-end:8;">It would only take x minutes to cycle.</h1>';
}
else
{
echo '<input id="form-submit" type="submit" name="submit-button" value="Go" style="grid-column-start:1;grid-column-end:4;grid-row-start:7;grid-row-end:8;"/>';
}
?>

</form>

<div class="hspacer" style="grid-column-start:5;"></div>

<div class="vspacer" style="grid-row-start:3;"></div>

<?php 

if ($submitted===true)
{
echo '<a href="index.php" id="back-link" style="grid-row-start:5;grid-column-start:2;grid-column-end:3;"><p>back</p></a>
<div class="vspacer" style="grid-row-start:5;grid-column-start:3;"></div>';
}
else
{
echo '<div class="vspacer" style="grid-row-start:5;"></div>';
}

?>

</div>


<footer>

<div id="footer-container">
<p>Map data/API ©2018 Google | Website and functionality created by Cameron Gemmell, Paul Hutchison, David McFadyen, Heather Thorburn, Ross Williamson for the Web Applications Development (CS312) Class, University of Strathclyde</p>
</div>

</footer>

</body></html>
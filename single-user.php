
<?php


// COMANDA CURL PENTRU A MANIPULA BECUREILE//

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://v0wwaqqnpa.execute-api.eu-west-1.amazonaws.com/V1/sites/site_exp/devices/16f54737-c30b-4241-b771-9c93d3bff7d2/level");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "{ \"level\": 0}");
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");


$headers = array();
$headers[] = "Accept: application/json";
$headers[] = "X-Api-Key: DdyGSdexeO0RUthvqnLI9z4yySVxkG4fe2WX6hd0";
$headers[] = "Content-Type: application/json";
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close ($ch);
?>

<!DOCTYPE html>

<html data-wf-page="5bf88a85512cb0588f11c425" data-wf-site="5bf87719cc327d74789cd815">
<head>
  <meta charset="utf-8">
  <title>Single user</title>
  <meta content="Single user" property="og:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/ciubotarus-first-project.webflow.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Varela:400","Bitter:400,700,400italic","Ubuntu:300,300italic,400,400italic,500,500italic,700,700italic"]  }});</script>
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="https://daks2k3a4ib2z.cloudfront.net/img/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="https://daks2k3a4ib2z.cloudfront.net/img/webclip.png" rel="apple-touch-icon">

  
  
  </head>
<body>
  <div class="div-block-4"></div>
  <div class="section-3">
    <div class="div-block-11"><img src="images/left-arrow.png" width="100" alt="" class="image-3"></div>
    <div class="_1"><img src="images/logo.svg" width="300" alt="" class="image"></div>
    <div class="div-block-5"><img src="images/001-cold.png" width="60" alt="">
      <h1 class="heading-3">Temperature</h1>
      <div class="text-block"><span  id="temp"></span></div>
    </div>
    <div class="div-block-5"><img src="images/002-humidity.png" width="60" alt="">
      <h1 class="heading-3">Humidity</h1>
      <div class="text-block">75 mbar</div>
    </div>
    <div class="div-block-5"><img src="images/003-co2.png" width="60" alt="">
      <h1 class="heading-3">CO2 concentration</h1>
      <div class="text-block">18%</div>
    </div>
    <div class="div-block-5"><img src="images/004-oxygen.png" width="60" alt="">
      <h1 class="heading-3">O2 concentration</h1>
      <div class="text-block">23%</div>
    </div>
  </div>
  <div class="section-4">
    <div class="div-block-6">
      <h1 class="heading-5">I will create a new <br>VAISALA sauna ID</h1>
      <div class="form-block-2 w-form">
        <form id="email-form" name="email-form" data-name="Email Form"><label for="name" class="field-label-2">Age</label><input type="text" id="name" name="name" data-name="Name" maxlength="256" class="text-field-2 w-input"><label for="name-2" class="field-label-2">Any known disease</label>
          <div class="checkbox-field w-checkbox"><input type="checkbox" id="checkbox" name="checkbox" data-name="Checkbox" class="checkbox w-checkbox-input"><label for="checkbox" class="checkbox-label w-form-label">Disease no 1</label></div>
          <div class="checkbox-field w-checkbox"><input type="checkbox" id="checkbox-4" name="checkbox-4" data-name="Checkbox 4" class="checkbox w-checkbox-input"><label for="checkbox-4" class="checkbox-label w-form-label">Disease no 2</label></div>
          <div class="checkbox-field w-checkbox"><input type="checkbox" id="checkbox-3" name="checkbox-3" data-name="Checkbox 3" class="checkbox w-checkbox-input"><label for="checkbox-3" class="checkbox-label w-form-label">Disease no 3</label></div>
          <div class="checkbox-field w-checkbox"><input type="checkbox" id="checkbox-2" name="checkbox-2" data-name="Checkbox 2" class="checkbox w-checkbox-input"><label for="checkbox-2" class="checkbox-label w-form-label">Disease no 4</label></div><input type="submit" value="Submit" data-wait="Please wait..." class="submit-button-2 w-button"></form>
        <div class="w-form-done">
          <div>Thank you! Your submission has been received!</div>
        </div>
        <div class="w-form-fail">
          <div>Oops! Something went wrong while submitting the form.</div>
        </div>
      </div>
    </div>
    <div class="div-block-7">
      <h1 class="heading-5">I will be using my own<br>VAISALA sauna ID</h1>
      <div class="div-block-10"><a href="#" class="button-2 w-button">Tap here for face recognition</a></div>
      <h1 class="heading-6">or</h1>
      <div class="form-block-3 w-form">
        <form id="email-form-2" name="email-form-2" data-name="Email Form 2" class="form-2"><label for="name-3" class="field-label-2">Enter your unique ID</label><input type="text" id="name-2" name="name-2" data-name="Name 2" maxlength="256" class="text-field-2 w-input"><input type="submit" value="Submit" data-wait="Please wait..." class="submit-button-2 w-button"></form>
        <div class="w-form-done">
          <div>Thank you! Your submission has been received!</div>
        </div>
        <div class="w-form-fail">
          <div>Oops! Something went wrong while submitting the form.</div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" type="text/javascript" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
<script>

var getData = function() {
	var element = document.getElementById('temp');
	fetch('https://apigtw.vaisala.com/hackjunction2018/saunameasurements/latest?SensorID=Stove1&limit=1')
	.then(function(response) {
		return response.json()
	}).then(function(data) {
			element.innerHTML = '';
			element.innerHTML = data[0].Measurements.Temperature.value + ' °C';
	}).catch(function(error) {
		console.log(error);
	});
}

getData();
setInterval(getData, 2000);



</script>
  </body>


</html>
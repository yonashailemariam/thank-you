<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400|Montserrat:700' rel='stylesheet' type='text/css'>
    <style>
        @import url(//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css);
        @import url(//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);
    </style>
    <link rel="stylesheet" href="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/default_thank_you.css">
    <script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/jquery-1.9.1.min.js"></script>
    <script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/html5shiv.js"></script>
    <link href="css.css" rel="stylesheet">
    <link rel="icon" type="image/ico" href="favicon.ico"/>
</head>
<body>
<div class="wrapper-1">
    <img style="width: 30%; display: block; padding-top: 2%;" class="center" src="sky_logo_new.png">
    <div class="wrapper-2">
        <h3 style="margin: 2em;">Dear <span style="text-decoration: auto; "><?php echo $_POST['name']['first']; ?>&nbsp;<?php echo $_POST['name']['last']?></span></h3>
        <h1 >Thank You !</h1>
        <p>We have received your request. </p>
        <p>Please check out your email to fill the request form.</p>
        <button class="go-home" id="myButton">
            go home
        </button>
    </div>
</div>

<footer class="site-footer" id="footer" style="color: #3D3935;">
    <p class="site-footer__fineprint" id="fineprint">Copyright @&nbsp;<span id="year"></span> | Ethiopian Skylight Hotel&nbsp;</p>
</footer>
</body>
<script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
        location.href = "https://ethiopianskylighthotel.jotform.com/app/241731534491859";
    };
</script>
<script type="application/javascript">
    document.getElementById("year").innerHTML = new Date().getFullYear();
</script>
<script src="https://run.confettipage.com/here.js" data-confetticode="U2FsdGVkX19TI2X7uyzeOBAKBUT20UiIFJz2NJU6mbrttWoILbZsBrc8I56awvkMQE6uDSQFLJ0I47Q7Ct7TrDmNq7OX3LtLnarnqzNH9Z/bvY/OYyaMopOa3IR/lRBYw96+4zAthj1lhxUP3p+ojHongO6VaT/mVAMNvq0ZJFhth2T9l+GikTZgdNWviRl+LDSuIBLUGZeosq9Dv1sTnLpepXfuojXSvLa1iH0OFMFj9jhX35e+GaIdddrn7eELtP+PmiXsIIe1NBwGYhlUgX6hE8H4aMrqVkglxir8C1772EUK5zz3lT1m5qNKtZ+mh51ZKEWpnpzLLeJWq0qkwD4gcvzJYwIWNcdE6vDhPtngtOKSZbX+itylLb4PI2otpYchVfYkHLwoWUDFzQv1u5H41mvDiLHRcP57SyyTaTviiD5a8Vdg08IxFIaBVGrGyTKQfMYTHBU0TjZSdSvKnNdF5tLbAt66w9q/S1Bsuh4YBFP8PEolN/Lf4T1WjNTGdSPWiK4fbbrSayyGS5dhPVB6DVqfZbmgAzrDYEKa4zRvN9THSoppu/GmX6ge0WvyZcCDZtOU7UlyNxKUtNN7/eeUh7LMHLFM3g4z3O1RAOVsKMaxJpJca6dTyg2HuRFECync+uD1BxouWljV26/S+8Nn1PZpv12FEyG3Zmabxl+1hxqGmSA/3XgNgRQp6mIMwVM2e4qV3TtS3b8Fda33VTanWqnLNW12KK2HS2RV2Wf++ZyOhSPaW0AqoveQ8crk22bSQj+IlhhknBcB4X2uhS2Z2bROXdpKGK4WibKNWACQ5lLqTNUgTlfhWmXRr21r"></script>
</html>

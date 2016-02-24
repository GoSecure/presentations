<?php
header("Content-Security-Policy: default-src 'self' 'unsafe-inline'");
?>
<html ng-app>
<head>
        <meta charset="utf-8">
        <script src="angular.min.js"></script>
</head>
<body>

<!-- BOF The relevant part -->
<span class="<?php echo htmlentities($_GET['userId']);?>">Hello Confoo</span>
<!-- EOF The relevant part -->

<br/><br/><br/><br/><br/>
 <b>CSP Bypass in Chrome + AngularJS</b><br/>
<a href="https://html5sec.org/cspbypass/">Original demo</a> :  bu Mario Heiderich
</body>

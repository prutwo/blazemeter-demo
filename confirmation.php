<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>BlazeMeter Demo App</title>
    <meta name="description" content="BlazeMeter demo app">
    <meta name="sage" content="flights app">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="assets/bootstrap.min.js"></script>
    <script src="assets/bootstrap-table.js"></script>
    <link href="assets/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="assets/bootstrap-table.css" rel="stylesheet" media="screen">
    <style type="text/css">
        body { background: #f5f5f5); }
        .hero-unit { background-color: #fff; }
        .center { display: block; margin: 0 auto; }
    </style>
</head>

<body>
<?php include 'gtm_inc.php'; ?>
<div class="navbar navbar-fixed-top navbar-inverse">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="index.php">Travel The World</a>

        </div>
    </div>
</div>

<div class="container hero-unit">
    <h1>Thank you for your purchase today!</h1>
</div>
Order made at:  

<?php
// sleep for 3 seconds
sleep(1);

// wake up !
echo date(DATE_RFC2822) . "\n";
?>
</body>
</html>

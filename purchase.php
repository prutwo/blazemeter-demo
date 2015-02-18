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
    <?php
    $fromPort = $_POST['fromPort'];
    $toPort = $_POST['toPort'];
    $flight = $_POST['flight'];
    $airline = $_POST['airline'];
    $price = $_POST['price'];
    $tax = 514.76;
    $total = $price + $tax;
    ?>
<h2>Your flight from <?php echo $fromPort; ?> to <?php echo $toPort; ?> has been reserved.</h2>
    <p>Airline: <?php echo $airline ?></p>
    <p>Flight Number: <?php echo $flight ?></p>
    <p>Price: <?php echo $price ?></p>
    <p>Arbitrary Fees and Taxes: <?php echo $tax; ?></p>
    <hr></hr>
    <p>Total Cost: <em><?php echo $total; ?> </em></p>
    <p>Please submit the form below to purchase the flight.</p>



<form class="form-horizontal" action="confirmation.php" method="post">
    <div class="control-group">
        <label class="control-label" for="inputName">Name</label>
        <div class="controls">
            <input type="text" name="inputName" id="inputName" placeholder="First Last">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="address">Address</label>
        <div class="controls">
            <input type="text" name="address" id="address" placeholder="123 Main St.">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="city">City</label>
        <div class="controls">
            <input type="text" name="city" id="city" placeholder="Anytown">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="state">State</label>
        <div class="controls">
            <input type="text" name="state" id="state" placeholder="State">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="zipCode">Zip Code</label>
        <div class="controls">
            <input type="text" name="zipCode" id="zipCode" placeholder="12345">
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="creditCardType">Card Type</label>
        <div class="controls">
            <select class="form-inline" name="cardType" id="cardType">
                <option value="visa">Visa</option>
                <option value="amex">American Express</option>
                <option value="dinersclub">Diner's Club</option>
             </select>
        </div>
      </div>

        <div class="control-group">
            <label class="control-label" for="creditCardNumber">Credit Card Number</label>
            <div class="controls">
                <input type="text" id="creditCardNumber" name="creditCardNumber" placeholder="Credit Card Number">
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="nameOnCard">Name on Card</label>
            <div class="controls">
                <input type="text" id="nameOnCard" placeholder="John Smith" name="nameOnCard">
            </div>
        </div>


    <div class="control-group">
        <div class="controls">
            <label class="checkbox">
                <input type="checkbox" name="rememberMe" id="rememberMe"> Remember me
            </label>
            <input value="Purchase Flight" type="submit" class="btn btn-primary">
        </div>
    </div>
</form>
    </div>
</body>
</html>


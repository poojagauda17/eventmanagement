<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Payment</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" type="text/css" href="demo.css">
</head>

<body>

    <!-- The HTML for our form will go here -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="jquery.payform.min.js" charset="utf-8"></script>
    <script src="script.js"></script>
    <div class="creditCardForm">
    <div class="heading">
        <h1>Confirm Purchase</h1>
    </div>
    <div class="payment">
        <form action="successfull.php">
            <div class="form-group owner">
                <label for="owner">Owner</label>
                <input type="text" class="form-control" id="owner">
            </div>
            <div class="form-group CVV">
                <label for="cvv">CVV</label>
                <input type="text" class="form-control" id="cvv">
            </div>
            <div class="form-group" id="card-number-field">
                <label for="cardNumber">Card Number</label>
                <input type="text" class="form-control" id="cardNumber">
            </div>
            <div class="form-group" id="expiration-date">
                <label>Expiration Date</label>
                <select>
                    <option value="01">January</option>
                    <option value="02">February </option>
                    <option value="03">March</option>
                    <option value="04">April</option>
                    <option value="05">May</option>
                    <option value="06">June</option>
                    <option value="07">July</option>
                    <option value="08">August</option>
                    <option value="09">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                </select>
                <select>
                    <option value="16"> 2024</option>
                    <option value="17"> 2025</option>
                    <option value="18"> 2026</option>
                    <option value="19"> 2027</option>
                    <option value="20"> 2028</option>
                    <option value="21"> 2029</option>
                    <option value="21"> 2030</option>
                    <option value="21"> 2031</option>
                    <option value="21"> 2032</option>
                    <option value="21"> 2033</option>
                    <option value="21"> 2034</option>
                    <option value="21"> 2035</option>
                    <option value="21"> 2036</option>
                    <option value="21"> 2037</option>
                    <option value="21"> 2038</option>
                </select>
            </div>
            <div class="form-group" id="credit_cards">
                <img src="assets/images/visa.jpg" id="visa">
                <img src="assets/images/mastercard.jpg" id="mastercard">
                <img src="assets/images/amex.jpg" id="amex">
            </div>
            <div class="form-group" id="pay-now">
                <button type="submit" class="btn btn-default" id="confirm-purchase">Confirm</button>
            </div>
        </form>
    </div>
</div>
</body>

</html>
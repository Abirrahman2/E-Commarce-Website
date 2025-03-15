<?php
session_start();

// Check if the payment method was selected
if (isset($_POST['payment_method'])) {
    $payment_method = $_POST['payment_method'];

    
    if ($payment_method == "online_pay") {
        
        $message = "Payment completed successfully! Thank you for your purchase.";
    } elseif ($payment_method == "visa") {
        
        $message = "Payment completed successfully! Thank you for your purchase.";
    } elseif ($payment_method == "paypal") {
        
        $message = "Payment completed successfully! Thank you for your purchase.";
    }

    // Set payment method message for display
    $payment_method_name = ucfirst($payment_method);
} else {
    $message = "No payment method selected!";
    $payment_method_name = "";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Status</title>

    <!-- Include Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            color: #333;
        }

        .container {
            margin-top: 50px;
            padding: 30px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .payment-status {
            margin-top: 20px;
            font-size: 18px;
            font-weight: bold;
        }

        .message {
            font-size: 20px;
            color: #28a745;
        }

        .payment-method {
            font-size: 22px;
            font-weight: 600;
            color: #007bff;
            margin-top: 20px;
        }

        .back-btn {
            margin-top: 30px;
        }

        .back-btn a {
            color: #007bff;
            text-decoration: none;
            font-size: 16px;
        }

        .back-btn a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <div class="container text-center">
        <h2 class="mb-4">Payment Status</h2>

        <?php if (isset($message)): ?>
            <div class="payment-status">
                <p class="message"><?php echo $message; ?></p>
            </div>
            <div class="payment-method">
                <p>Payment method: <?php echo $payment_method_name; ?></p>
            </div>
        <?php endif; ?>

        <div class="back-btn">
            <a href="payment_methods.php">Go back to choose another payment method</a>
        </div>

    </div>

    <!-- Include Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>

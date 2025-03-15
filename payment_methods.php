<?php
session_start();
?>

<?php include('layouts/header.php'); ?>

<!-- Payment Method Section -->
<section class="my-5 py-5">
    <div class="container text-center mt-3 pt-5">
        <h2 class="form-weight-bold">Choose Payment Method</h2>
        <hr class="mx-auto">
    </div>
    <div class="mx-auto container text-center">
        <form action="process_payment.php" method="POST">
            <h4>Select a payment method</h4>
            <div class="form-group">
                <label for="payment_method">Payment Method</label>
                <select class="form-control" name="payment_method" id="payment_method" required>
                    <option value="online_pay">Online Pay</option>
                    <option value="visa">Visa</option>
                    <option value="paypal">PayPal</option>
                </select>
            </div>

            <div class="mt-3">
                <input type="submit" class="btn btn-primary" value="Proceed to Payment">
            </div>
        </form>
    </div>
</section>

<?php include('layouts/footer.php'); ?>

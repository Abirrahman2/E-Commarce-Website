<?php
session_start();

if(!isset($_SESSION['logged_in'])){
    header('location: login.php');
    exit;
}

?>

<?php include('layouts/header.php'); ?>

<!-- Payment Section -->
<section class="my-5 py-5">
    <div class="container text-center mt-3 pt-5">
        <h2 class="form-weight-bold">Payment</h2>
        <hr class="mx-auto">
    </div>
    <div class="mx-auto container text-center">
        <p>
            <?php 
            if (isset($_GET['order_status'])) { 
                echo $_GET['order_status']; 
            } 
            ?>
        </p>
        <p>Total payment: $<?php 
            if (isset($_SESSION['order_total'])) { 
                echo $_SESSION['order_total']; 
            } else {
                echo "0.00"; 
            } 
        ?></p>

        <?php if (isset($_SESSION['order_total']) && $_SESSION['order_total'] > 0) { ?>
        <form action="payment_methods.php" method="POST">
            <input class="btn btn-primary" type="submit" name="pay_now" value="Pay Now"/>
        </form>
        <?php } ?>

        <?php if (isset($_GET['order_status']) && $_GET['order_status'] == "not paid") { ?>
        <form action="payment_methods.php" method="POST">
            <input class="btn btn-primary" type="submit" name="pay_now" value="Pay Now"/>
        </form>
        <?php } ?>
    </div>
</section>

<?php include('layouts/footer.php'); ?>
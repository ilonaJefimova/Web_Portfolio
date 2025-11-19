<?php
session_start ();
error_reporting (0);
$cookie = $_COOKIE ['cart_items_cookie'] ?? "";
$cookie = stripslashes ($cookie);
$cart = json_decode ($cookie, true);

include ("../model/API.php");

$total = 0;
$items = [];

foreach ($cart as $id => $qty) 
{
    $itemtxt = getSushi ($id);
    $item = json_decode ($itemtxt);

    $item->quantity = $qty;
    $item->subtotal = $item->price * $qty;

    $total += $item->subtotal;
    $items [] = $item;
}

$success_message = $_SESSION ["success_message"] ?? null;
$error_message = $_SESSION ["error_message"] ?? null;
unset ($_SESSION ["success_message"], $_SESSION ["error_message"]);
?>
<?php include ('../model/header.php'); ?>

<div class="container my-5">
    <div class="card shadow rounded-4">
        <div class="card-header bg-dark text-white text-center rounded-top-4">
            <h3 class="mb-0">Complete Your Payment</h3>
        </div>
        <div class="card-body row p-4">
            <!-- Payment Form -->
            <div class="col-md-6">
                <form id="paymentForm" method="POST" action="../controller/transaction.php">
                    <div class="mb-3">
                        <label class="form-label"> <?= $id?> Card Number</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-credit-card-2-front"></i></span>
                            <input type="text" class="form-control" name="card" placeholder="1234 5678 9012 3456" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 mb-3">
                            <label class="form-label">Expiry</label>
                            <input type="text" class="form-control" name="expiry" placeholder="MM/YY" required>
                        </div>
                        <div class="col-6 mb-3">
                            <label class="form-label">CVV</label>
                            <input type="text" class="form-control" name="cvv" placeholder="123" required>
                        </div>
                    </div>
                    <input type="hidden" name="price" value="<?= $total ?>">
                    <button type="submit" class="btn btn-success w-100 btn-lg rounded-pill mt-3">Pay £<?= number_format ($total, 2) ?></button>
                </form>
            </div>

            <!-- Order Summary -->
            <div class="col-md-6 border-start mt-4 mt-md-0">
                <h4 class="text-center mb-3">Order Summary</h4>
                <?php foreach ($items as $i): ?>
                    <div class="d-flex align-items-center justify-content-between border rounded p-2 mb-2 shadow-sm">
                        <img src="../image/<?= $i->image ?>" alt="<?= $i->name ?>" style="height:60px; width:60px; object-fit:cover; border-radius:10px;">
                            <div class="ms-3 flex-grow-1">
                                <strong><?= $i->name ?></strong><br>
                                <span class="text-muted">Qty: <?= $i->quantity ?></span>
                            </div>
                            <div class="text-danger fw-bold">£<?= number_format ($i->subtotal, 2) ?></div>
                    </div>
                <?php endforeach; ?>
                <div class="text-center mt-4">
                    <h3 class="fw-bold text-success">Total: £<?= number_format ($total, 2) ?></h3>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p>myWebsite@example.com</p>
        <small class="text-secondary">&copy; 2021 Web Project</small>
    </footer>

    <script>
    document.getElementById ('paymentForm').addEventListener ('submit', function (e) {
        e.preventDefault ();

        Swal.fire({
            title: 'Processing Payment...',
            allowOutsideClick: false,
            didOpen: () => Swal.showLoading ()
        });

        this.submit();
    });

    <?php if ($success_message): ?>
    Swal.fire({
        icon: 'success',
        title: 'Success!',
        text: '<?= addslashes ($success_message) ?>',
        confirmButtonText: 'Back to Sushi page'
    }).then(() => { window.location.href = 'Sushi.php'; });
    <?php endif; ?>

    <?php if ($error_message): ?>
    Swal.fire({
        icon: 'error',
        title: 'Error!',
        text: '<?= addslashes ($error_message) ?>',
        confirmButtonText: 'Back'
    }).then(() => { window.location.href = 'Sushi.php'; });
    <?php endif; ?>
    </script>

</body>
</html>

<?php
  error_reporting (0);

  $cookie = isset ($_COOKIE ['cart_items_cookie']) ? $_COOKIE ['cart_items_cookie'] : "";
  $cookie = stripslashes ($cookie);
  $saved_cart_items = json_decode ($cookie, true);

  include ('../model/header.php');
?>

<div class="d-flex align-items-center mb-4">
    <img src="../image/Sushi_Admin.jpg" alt="Cart" class="img-fluid" style="max-height:100px; border-radius:8px; margin-right:15px;">
    <h2 class="mb-0">Sushi - Cart</h2>
</div>

<?php
include ("../model/API.php");

if (!empty ($saved_cart_items)) 
{
    $overallTotal = 0;
    ?>

    <div class="d-flex justify-content-start gap-3 mb-4">
        <a href="Sushi.php" class="btn btn-outline-primary">&larr; Back to Sushi Page</a>

        <!-- Empty Cart Button -->
        <a href="../controller/empty_cart.php" class="btn btn-outline-danger"
        onclick="return confirm('Are you sure you want to empty your cart?');">
        <img src="../image/bin.png" alt="Delete">Empty Cart</a>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered align-middle">
            <thead class="table-dark">
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price (£)</th>
                    <th>Quantity</th>
                    <th>Subtotal (£)</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
            foreach ($saved_cart_items as $id => $quantity) 
            {
                $itemtxt = getSushi ($id);
                $item = json_decode ($itemtxt);

                $subtotal = $item->price * $quantity;
                $overallTotal += $subtotal;
                ?>
                <tr>
                    <td><img src="../image/<?= $item->image ?>" alt="<?= $item->name ?>" style="height:80px; object-fit:contain;"></td>
                    <td><?= $item->name ?></td>
                    <td><?= $item->description ?></td>
                    <td class="text-danger"><?= number_format ($item->price, 2) ?></td>
                    <td>
                        <div class="d-flex align-items-center gap-2">
                            <form action="../controller/update_item.php" method="post" style="display:inline;">
                                <input type="hidden" name="id" value="<?= $id ?>">
                                <input type="hidden" name="action" value="decrease">
                                <button type="submit" class="btn btn-sm btn-outline-secondary">-</button>
                            </form>
                            <span><?= $quantity ?></span>
                            <form action="../controller/update_item.php" method="post" style="display:inline;">
                                <input type="hidden" name="id" value="<?= $id ?>">
                                <input type="hidden" name="action" value="increase">
                                <button type="submit" class="btn btn-sm btn-outline-secondary">+</button>
                            </form>
                        </div>
                    </td>
                    <td class="text-danger"><?= number_format ($subtotal, 2) ?></td>
                    <td>
                        <form action="../controller/update_item.php" method="post" onsubmit="return confirm('Remove this item?');">
                            <input type="hidden" name="id" value="<?= $id ?>">
                            <input type="hidden" name="action" value="delete">
                            <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php
            }
            ?>
            <tr class="table-secondary">
                <td colspan="5" class="text-end"><strong>Total</strong></td>
                <td class="text-danger"><strong>£<?= number_format ($overallTotal, 2) ?></strong></td>
                <td></td>
            </tr>
            </tbody>
        </table>
    </div>

    <div class="text-end mt-3">
        <?php if (isset ($_SESSION ["username"])): ?>
            <a href="order_process.php" class="btn btn-success btn-lg">Pay Now</a>
        <?php else: ?>
            <span class="text-muted">Please Log in to pay</span>
        <?php endif; ?>
    </div>
    <?php
} 
else 
{
    echo '<div class="text-center">';
    echo '<h4>Your cart is empty</h4>';
    echo '<a href="Sushi.php" class="btn btn-outline-primary mt-2">&larr; Back to Sushi Page</a>';
    echo '</div>';
}
?>

<?php include ('../model/footer.php');?>

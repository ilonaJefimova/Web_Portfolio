<?php error_reporting (0); ?>
<div id="loginModal" class="modal-login">
    <div class="modal-content-login">
        <span class="close" onclick="closeModal('loginModal')" style="cursor:pointer; float:right; font-size:22px;">&times;</span>
        <div class="modal-avatar">
            <img src="../image/img_avatar2.png" alt="Avatar">
        </div>
        <h3 class="text-center mb-3">Login</h3>

        <form action="../controller/loginrec.php" method="POST">
            <input type="text" name="username" class="form-control" placeholder="Username" required>
            <input type="password" name="password" class="form-control" placeholder="Password" required>
            <button type="submit" class="btn btn-primary w-100 mt-2 rounded-pill">Login</button>
        </form>
    </div>
</div>
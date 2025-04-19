<?php
// Kiểm tra trạng thái đăng nhập
session_start();
$isLoggedIn = isset($_SESSION['user_id']);
?>
<div class="header">
  <div>
    <div class="logo">
      <img src="../public/images/logousave.png" />
    </div>
    <div class="menu">
      <ul>
        <li><a href="doan.php">Trang Chủ</a></li>
        <li><a href="gioithieu.php">Giới Thiệu</a></li>
        <li class="menu-item">
          <a href="dichvu.php">Dịch Vụ</a>
          <ul class="sub-menu">
            <li><a href="dichvu.php">Tour Du Lịch</a></li>
            <li><a href="dichvu.php">Khách Sạn</a></li>
          </ul>
        </li>
        <li><a href="lienhe.php">Liên Hệ</a></li>
        <li><a href="thongtin.php">Thông Tin</a></li>
        <li><a href="danhgia.php">Đánh Giá</a></li>
      </ul>
    </div>
  </div>

  <div class="user-login">
    <?php if (!$isLoggedIn): ?>
      <a href="login.php" class="login-button">Đăng Nhập</a>
    <?php else: ?>
      <span id="user-info"><?php echo htmlspecialchars($_SESSION['username']); ?></span>
      <button id="logout" class="logout">Đăng Xuất</button>
    <?php endif; ?>
  </div>
</div> 
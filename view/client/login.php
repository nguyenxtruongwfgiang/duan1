<div class="boxtitle">Tài khoản</div>
<div class="boxcontent fromtaikhoan">
    <?php
    if (isset($_SESSION['user'])) {
        extract($_SESSION['user']);
    ?>
        
        <div class="row mb10">
            <li>
                <a href="index.php?act=quenmk">Quên mật khẩu</a>
            </li>
            <li>
                <a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a>
            </li>
            <li>
                <a href="admin/index.php">Đăng nhập Admin</a>
            </li>
            <li>
                <a href="index.php?url=thoat">Thoát</a>
            </li>
        </div>
    <?php
    } else {
    ?>
        <form action="index.php?url=dangnhap" method="POST" enctype="multipart/form-data">
            <div class="row mb10">
                Tên đăng nhập <br>
                <input type="text" name="email">
            </div>
            <div class="row mb10">
                Mặt khẩu <br>
                <input type="password" name="pass">
            </div>
            <div class="row mb10">
                <input type="checkbox" name="">Ghi nhớ tài khoản
            </div>
</div>
<div class="row mb10">
    <button type="submit" value="Đăng nhập" name="dang_nhap"></button>
</div>
</form>
<li>
    <a href="#">Quên mật khẩu</a>
</li>
<li>
    <a href="index.php?act=dangky">Đăng ký thành viên</a>
</li>
<?php } ?>

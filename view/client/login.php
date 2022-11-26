<section class="account-page-area section-gap-equal">
    <div class="container position-relative">
        <div class="row g-5 justify-content-center">
            <div class="col-lg-5">
                <div class="login-form-box">
                    <h3 class="title">Đăng Nhập</h3>
                    <p>Chưa có tài khoản? <a href="index.php?url=register">Đăng ký</a></p>
                    <form action="index.php?url=login" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="current-log-email">Email*</label>
                            <input type="email" name="email" id="current-log-email" placeholder="Email or username">
                        </div>
                        <div class="form-group">
                            <label for="current-log-password">Mật Khẩu*</label>
                            <input type="password" name="pass" id="password" placeholder="Password">
                            <span class="password-show" id="togglePassword"><i class="icon-76"></i></span>
                        </div>
                        <div class="form-group chekbox-area">
                            <div class="edu-form-check">
                                <input type="checkbox" id="remember-me">
                                <label for="remember-me">Remember Me</label>
                            </div>
                            <!-- <a href="#" class="password-reset">Lost your password?</a> -->
                        </div>
                        <div class="form-group">
                            <button type="submit" name="dang_nhap" class="edu-btn btn-medium">Đăng Nhập <i class="icon-4"></i></button>
                        </div>
                    </form>
                </div>
                <script>
                    const togglePassword = document.querySelector("#togglePassword");
                    const password = document.querySelector("#password");

                    togglePassword.addEventListener("click", function() {
                        // toggle the type attribute
                        const type = password.getAttribute("type") === "password" ? "text" : "password";
                        password.setAttribute("type", type);

                        // toggle the icon
                        // this.classList.toggle("bi-eye");
                    });

                    // prevent form submit
                    const form = document.querySelector("form");
                    form.addEventListener('submit', function(e) {
                        e.preventDefault();
                    });
                </script>
            </div>
        </div>
        <ul class="shape-group">
            <li class="shape-1 scene"><img data-depth="2" src="view/assets/images/about/shape-07.png" alt="Shape"></li>
            <li class="shape-2 scene"><img data-depth="-2" src="view/assets/images/about/shape-13.png" alt="Shape"></li>
            <li class="shape-3 scene"><img data-depth="2" src="view/assets/images/counterup/shape-02.png" alt="Shape"></li>
        </ul>
    </div>
</section>
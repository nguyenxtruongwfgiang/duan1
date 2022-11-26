<section class="account-page-area section-gap-equal">
    <div class="container position-relative">
        <div class="row g-5 justify-content-center">
            <div class="col-lg-5">
                <div class="login-form-box registration-form">
                    <h3 class="title">Đăng Ký</h3>
                    <p>Đã có tài khoản? <a href="index.php?url=login">Đăng Nhập</a></p>
                    <form action="index.php?url=register" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="reg-name">Họ tên*</label>
                            <input type="text" name="fullname" id="reg-name" placeholder="Full name">
                        </div>
                        <div class="form-group">
                            <label for="log-email">Email*</label>
                            <input type="email" name="email" id="log-email" placeholder="Email or username">
                        </div>
                        <div class="form-group">
                            <label for="log-password">Mật Khẩu*</label>
                            <input type="password" name="password" id="password" placeholder="Password">
                            <span class="password-show" id="togglePassword"><i class="icon-76"></i></span>
                        </div>
                        <div class="form-group chekbox-area">
                            <div class="edu-form-check">
                                <input type="checkbox" id="terms-condition">
                                <label for="terms-condition">I agree the User Agreement and <a href="terms-condition.html">Terms & Condition.</a> </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="dangky" class="edu-btn btn-medium">Đăng Ký <i class="icon-4"></i></button>
                        </div>
                    </form>
                </div>
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
        <ul class="shape-group">
            <li class="shape-1 scene"><img data-depth="2" src="view/assets/images/about/shape-07.png" alt="Shape"></li>
            <li class="shape-2 scene"><img data-depth="-2" src="view/assets/images/about/shape-13.png" alt="Shape"></li>
            <li class="shape-3 scene"><img data-depth="2" src="view/assets/images/counterup/shape-02.png" alt="Shape"></li>
        </ul>
    </div>
</section>
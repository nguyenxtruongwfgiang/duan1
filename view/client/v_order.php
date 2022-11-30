<section class="checkout-page-area section-gap-equal">
    <div class="container">
        <form action="index.php?url=complete_order" method="POST" enctype="multipart/form-data">
            <div class="checkout-notice">
                <div class="coupn-box">
                    <h6 class="toggle-bar"> Có mã giảm giá?
                        <a href="javascript:void(0)" class="toggle-btn">Nhấn vào đây để nhập mã</a>
                    </h6>
                    <div class="toggle-open">
                        <p>Nhập mã giảm giá vào ô dưới đây.</p>
                        <div class="input-group">
                            <input placeholder="nhập mã giảm giá" type="text">
                            <div class="apply-btn">
                                <button type="submit" class="edu-btn btn-medium">Áp dụng</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row--25">
                <div class="col-lg-6">
                    <div class="order-summery checkout-summery">
                        <div class="summery-table-wrap">
                            <h4 class="title">Your Orders</h4>
                            <table class="table summery-table">
                                <tbody>
                                    <tr>
                                        <td>Tên khoá học</td>
                                        <td><?= $course['ten_khoa_hoc'] ?> <span class="quantity"></span></td>
                                    </tr>
                                    <tr>
                                        <td>Học Phí <span class="quantity"></span></td>
                                        <td><?= number_format($course['hoc_phi']) ?> đ</td>
                                    </tr>
                                    <tr>
                                        <td>Thời gian học <span class="quantity"></span></td>
                                        <td><?= $course['thoi_gian'] ?> tuần</td>
                                    </tr>
                                    <tr>
                                        <td>Lớp</td>
                                        <td><?= $class['ten_lop'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Địa điểm học</td>
                                        <td><?= $class['dia_diem_hoc'] ?></td>
                                    </tr>
                                    <tr class="order-total">
                                        <td>Tổng thanh toán</td>
                                        <td><?= number_format($course['hoc_phi']) ?> đ</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="order-payment" style="margin: 0;">
                        <h4 class="title">Phương thức thanh toán</h4>
                        <div class="payment-method">
                            <div class="form-group">
                                <div class="edu-form-check">
                                    <input type="radio" id="pay-bank" name="payment">
                                    <label for="pay-bank">Chuyển qua: </label>
                                </div>
                                <p>Số Tài Khoản: 19038543686016 (Ngân hàng TechcomBank) - Chủ tài khoản: Nguyễn Trường Giang</p>
                            </div>
                            <div class="form-group">
                                <div class="edu-form-check">
                                    <input type="radio" id="pay-pal" name="payment">
                                    <label for="pay-pal">Thanh toán trực tiếp tại lớp học</label>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="gia_tien" value="<?= $course['hoc_phi'] ?>">
                        <input type="hidden" name="ma_lop" value="<?= $class['ma_lop'] ?>">
                        <button type="submit" name="complete_order" class="edu-btn order-place">Hoàn tất thanh toán <i class="icon-4"></i></button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
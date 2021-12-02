<main class="container">
    <nav class="nav-top">
        <ul>
            <li><a href=""><i class="fas fa-home"></i>Trang chủ</a></li><span>/</span>
            <li><a href="">Thanh toán</a></li>
        </ul>
    </nav>
    <section class="checkout">
        <h1 class="checkout-title">Chi tiết thanh toán</h1>
        <section class="checkout-main">
            <form action="" class="form-checkout">
                <label for="">Họ và tên <sup style="color: red;">*</sup></label>
                <input type="text" placeholder="Họ và tên...">

                <label for="">Số điện thoại <sup style="color: red;">*</sup></label>
                <input type="text" placeholder="Số điện thoại...">

                <label for="">Địa chỉ <sup style="color: red;">*</sup></label>
                <textarea name="" id="" cols="30" rows="10" placeholder="Địa chỉ nhận hàng..."></textarea>

                <label for="">Ghi chú đơn hàng</label>
                <textarea name="" id="" cols="30" rows="10" placeholder="Ghi chú cho đơn hàng..."></textarea>

                <label class="title" for="">Hình thức thanh toán <sup style="color: red;">*</sup></label>
                <div class="form-payment">
                    <div class="form-group">
                        <input type="radio" value="payLater" name="banking" id="payLater" checked>
                        <label for="payLater">Thanh toán khi nhận hàng</label>
                    </div>
                    <div class="form-group">
                        <input type="radio" value="banking" id="banking" name="banking">
                        <label for="banking">Chuyển khoảng ngân hàng</label>
                    </div>
                </div>
                <div class="content-banking content-banking-none">
                    <div class="box">
                        <img src="https://znews-stc.zdn.vn/static/topic/company/vietcom.jpg" alt="">
                        <div class="content-banking-p">
                            <p>Nội dung: Thanh toán cho đơn hàng <span class="bold">MKOOPS09</span></p>
                            <p>Số tiền <span class="b-600">100.000 VNĐ</span></p>
                            <p>Chủ tài khoản: <span class="b-600">Meta Coffee</span></p>
                            <p>Số tài khoản: <span class="b-600">99999999999</span></p>
                            <p>Ngân hàng: <span class="b-600">Vietcombank</span></p>
                        </div>
                    </div>
                </div>
            </form>
            <div class="checkout-cart">
                <h3>Đơn hàng</h3>
                <div class="product-item">
                    <img class="thumbnail-checkoit-pr" src="http://localhost/DuAn1/MVC/public/images/products/trasua.png" alt="">
                    <div class="text-product">
                        <p>Trà sưa trân châu đường đen</p>
                        <p>Size: Lớn</p>
                        <p class="b-600">100.000 VNĐ</p>
                    </div>
                </div>
                <div class="product-item">
                    <img class="thumbnail-checkoit-pr" src="http://localhost/DuAn1/MVC/public/images/products/trasua.png" alt="">
                    <div class="text-product">
                        <p>Trà sưa trân châu đường đen</p>
                        <p>Size: Lớn</p>
                        <p class="b-600">100.000 VNĐ</p>
                    </div>
                </div>
                <div class="price-checkout">
                    <div class="d-between price-checkout-pr">
                        <p>Số tiền</p>
                        <p>100.000 VNĐ</p>
                    </div>
                    <div class="d-between price-checkout-ship">
                        <p>Phí vận chuyển</p>
                        <p>0 VNĐ</p>
                    </div>
                </div>
                <div class="d-between price-checkout-total">
                    <p>Tổng thanh toán</p>
                    <p>100.000 VNĐ</p>
                </div>
                <a href="" class="btn-checkout">Tiến hành đặt hàng</a>
            </div>
        </section>
    </section>
</main>
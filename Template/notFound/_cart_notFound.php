<section id="cart" class="py-3 mb-5">
    <div class="container-fluid w-75">
        <h5 class="font-baloo font-size-20">Giỏ hàng</h5>

        <div class="row">
            <div class="col-sm-8">
                    <div class="row border-top py-3 mt-3">
                        <div class="col-sm-12 text-center py-2">
                            <img src="./assets/blog/empty_cart.png" alt="Empty Cart" class="img-fluid" style="height: 200px;">
                            <p class="font-baloo font-size-16 text-black-50">Giỏ hàng trống</p>
                        </div>
                    </div>
            </div>
            <div class="col-sm-4">
                <div class="sub-total border text-center mt-2">
                    <h6 class="font-size-12 font-rale text-success py-3"><i class="fas fa-check"></i>Đơn hàng của bạn được MIỄN PHÍ vận chuyển.</h6>
                    <div class="border-top py-4">
                        <h5 class="font-baloo font-size-20">Tổng tiền ( <?php echo isset($subTotal) ? count($subTotal) : 0; ?> sản phẩm):&nbsp; <span class="text-danger"><span class="text-danger" id="deal-price"><?php echo isset($subTotal) ? $Cart->getSum($subTotal) : 0; ?></span>VNĐ </span> </h5>
                        <button type="submit" class="btn btn-warning mt-3">Thanh toán ngay</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="cart" class="py-3">
    <div class="container">
        <h5 class="font-baloo font-size-20">Keranjang Belanja</h5>

        <!-- Shopping cart items -->
        <div class="row">
            <div class="col-sm-9">
                <!-- cart item -->
                <div class="row border-top py-3 mt-3">
                    <div class="col-sm-2">
                        <img src="./assets/products/sayur/sayurkol.jpeg" alt="sayurkol" class="img-fluid" />
                    </div>
                    <div class="col-sm-8">
                        <h5 class="font-baloo font-size-20">Sayur Kol</h5>
                        <small>dari ladang Bapak Dayat</small>
                        <!-- product rating -->
                        <div class="d-flex">
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <a href="#" class="px-2 font-rale font-size-14">1.852 rating</a>
                        </div>
                        <!-- product rating end -->

                        <!-- product qty -->
                        <div class="qty d-flex pt-2">
                            <div class="d-flex font-rale w-50">
                                <button class="qty-up border bg-light" data-id="pro1"><i class="fas fa-angle-up"></i></button>
                                <input data-id="pro1" type="text" class="qty-input border px-2 mx-2 w-100 bg-light" disabled value="1" placeholder="1" />
                                <button class="qty-down border bg-light" data-id="pro1"><i class="fas fa-angle-down"></i></button>
                            </div>
                            <button type="submit" class="btn font-baloo text-danger px-3 border-right">Hapus</button>
                            <button type="submit" class="btn font-baloo text-danger">Simpan Perubahan</button>
                        </div>
                        <!-- product qty end -->
                    </div>
                    <div class="col-sm-2 text-end">
                        <div class="font-size-20 text-danger font-baloo">
                            Rp <span>5.000</span>
                        </div>
                    </div>
                </div>
                <!-- cart item end -->
                <!-- cart item -->
                <div class="row border-top py-3 mt-3">
                    <div class="col-sm-2">
                        <img src="./assets/products/daging/ayamkampung.png" alt="ayamkampung" class="img-fluid" />
                    </div>
                    <div class="col-sm-8">
                        <h5 class="font-baloo font-size-20">Ayam Kampung</h5>
                        <small>dari peternakan Bapak Rudi</small>
                        <!-- product rating -->
                        <div class="d-flex">
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <a href="#" class="px-2 font-rale font-size-14">1.276 rating</a>
                        </div>
                        <!-- product rating end -->

                        <!-- product qty -->
                        <div class="qty d-flex pt-2">
                            <div class="d-flex font-rale w-50">
                                <button data-id="pro2" class="qty-up border bg-light"><i class="fas fa-angle-up"></i></button>
                                <input data-id="pro2" type="text" class="qty-input border px-2 mx-2 w-100 bg-light" disabled value="1" placeholder="1" />
                                <button data-id="pro2" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                            </div>
                            <button type="submit" class="btn font-baloo text-danger px-3 border-right">Hapus</button>
                            <button type="submit" class="btn font-baloo text-danger">Simpan Perubahan</button>
                        </div>
                        <!-- product qty end -->
                    </div>
                    <div class="col-sm-2 text-end">
                        <div class="font-size-20 text-danger font-baloo">
                            Rp <span>50.000</span>
                        </div>
                    </div>
                </div>
                <!-- cart item end -->
            </div>
            <div class="col-sm-3">
                <!-- subtotal -->
                <div class="sub-total border text-center mt-2">
                    <h6 class="font-rale font-size-12 text-success py-3"><i class="fas fa-check"></i> Anda berhak mendapat GRATIS ongkir</h6>
                    <div class="border-top py-4">
                        <h5 class="font-baloo font-size-20">Total Belanja (2 item)</h5>
                        <p><span class="text-danger font-size-20">Rp <span class="text-danger" id="deal-price">55.000</span></span></p>
                        <button type="submit" class="btn btn-warning mt-3">Proses Pembelian</button>
                    </div>
                </div>
                <!-- subtotal end -->
            </div>
        </div>
        <!-- Shopping cart items end -->
    </div>
</section>
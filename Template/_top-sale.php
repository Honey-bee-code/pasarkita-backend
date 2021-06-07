<!-- Top Sale -->
<?php
$product_shuffle = $product->getData();
?>
<section id="top-sale">
    <div class="container py-5">
        <h4 class="font-rubik font-size-20">Produk Terlaris</h4>
        <hr />

        <!-- owl carousel -->
        <div class="owl-carousel owl-theme">
            <?php foreach($product_shuffle as $item) { ?>
            <div class="item py-2 px-1">
                <div class="product font-rale">
                    <a href="#"><img src="<?= $item['item_image'] ?  : './assets/products/product.jpg' ?>" alt="product image" class="img-fluid" /></a>
                    <div class="text-center">
                        <h6><?= $item['item_name'] ? : 'Tanpa Nama' ?></h6>
                        <div class="rating text-warning font-size-12">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="far fa-star"></i></span>
                        </div>
                        <div class="price py-2">
                            <span>Rp <?= $item['item_price'] ? : '0' ?></span>
                        </div>
                        <button type="submit" class="btn btn-warning font-size-12">Tambah ke Keranjang</button>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        <!-- owl carousel end -->
    </div>
</section>
<!-- Top Sale End -->
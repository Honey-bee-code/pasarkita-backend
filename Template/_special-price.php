
<!-- Special Price -->
<?php
    $brand = array_map(function($pro){return $pro['item_brand'];}, $product_shuffle);
    $unique = array_unique($brand);
?>
<section id="special-price">
    <div class="container">
        <h4 class="font-rubik font-size-20">Harga Special</h4>
        <div id="filters" class="button-group text-end font-baloo">
            <button class="btn is-checked" data-filter="*">Semua Produk</button>
            <?php
            array_map(function($brand){
                printf('<button class="btn" data-filter=".%s">%s</button>', $brand, $brand);
                
            }, $unique)
            ?>
        </div>

        <div class="grid">
            <?php array_map(function($item){ ?>
            <div class="grid-item <?= $item['item_brand'] ? : 'Brand' ?> border">
                <div class="item py-2">
                    <div class="product font-rale">
                        <a href="#"><img src="<?= $item['item_image'] ? : './assets/products/product.jpg' ?>" alt="sayurbayam" class="img-fluid" /></a>
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
            </div>
            <?php }, $product_shuffle); ?>
        </div>
    </div>
</section>
<!-- Special Price End -->
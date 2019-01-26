<div class="products-row clearfix">
    <div class="row">
        <?php foreach ($products as $product): ?>
            <div class="col-xl-4 col-md-6">
                <div class="product">
                    <p class="product-title"><?=$product->title;?><a href="<?=PATH;?>/main/delete?id=<?=$product->id;?>" class="del close">×</a></p>
                    <div class="product-img">
                        <?php foreach ($image as $img): ?>
                            <?php if($product->id == $img->product_id): ?>
                                <img class="largeImage-<?=$product->id;?>" src="img/<?=$img->title;?>">
                                <?php break; ?>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div> <!-- /.product-img -->
                    <div class="product-galery-img thumbs">
                        <?php $i = 0; foreach ($image as $img): ?>
                            <?php if($product->id == $img->product_id): ?>
                                <img data-id="<?=$product->id;?>" <?php if ($i == 0) echo 'class="select"'; ?> style="height: 40px" src="img/<?=$img->title;?>">
                            <?php $i++; endif; ?>
                        <?php endforeach; ?>
                    </div> <!-- /.product-galery-img -->
                </div> <!-- /.product -->
            </div> <!-- /.col-xl-4 col-md-6 -->

        <?php endforeach; ?>
    </div> <!-- /.row -->
</div> <!-- /.products-row clearfix -->
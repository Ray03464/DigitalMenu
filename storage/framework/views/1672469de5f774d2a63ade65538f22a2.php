


<article class="product-card">
    <div class="product-image-frame<?php echo e($product->containImage ? ' is-contain' : ''); ?>">
        <img src="<?php echo e($product->imageUrl); ?>"
             alt="<?php echo e($product->name); ?>"
             loading="lazy"
             onerror="this.onerror=null;this.src='https://images.unsplash.com/photo-1544025162-d76694265947?w=480&q=75';" />
    </div>
    <div class="product-body">
        <h4 class="product-name"> <?php echo e($product->number); ?> &nbsp; <?php echo e($product->name); ?></h4>
        
        <div class="product-price">
            <span>$<?php echo e($product->formattedPriceUsd()); ?></span>
            <?php if($product->priceKhr !== null): ?>
                <span>៛<?php echo e($product->formattedPriceKhr()); ?></span>
            <?php endif; ?>
        </div>
    </div>
</article>
<?php /**PATH C:\wamp64\www\digital-menu\resources\views/components/menu-product-card.blade.php ENDPATH**/ ?>
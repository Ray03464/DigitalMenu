


<section class="brand-section" id="brand-<?php echo e($brand->id); ?>" data-brand-section="<?php echo e($brand->id); ?>">
    <?php if(!empty($brand->description)): ?>
        <p class="brand-section-desc"><?php echo e($brand->description); ?></p>
    <?php endif; ?>

    <?php $__currentLoopData = $brand->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <section class="menu-category">
            <header class="menu-category-header">
                <h2 class="menu-category-title">
                    <span class="brand-section-title"><?php echo e($brand->title); ?></span>
                    <span class="menu-category-separator">-</span>
                    <span><?php echo e($category->name); ?></span>
                </h2>
            </header>

            <div class="product-grid">
                <?php $__currentLoopData = $category->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo $__env->make('components.menu-product-card', ['product' => $product], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </section>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</section>
<?php /**PATH C:\wamp64\www\digital-menu\resources\views/components/brand-menu-section.blade.php ENDPATH**/ ?>


<?php $__env->startSection('title', 'Sandoo Kitchen Digital Menu'); ?>

<?php $__env->startSection('content'); ?>
<?php
    $brands = [
        ['id' => $cbite->id, 'title' => $cbite->title, 'logo' => '/image/brandLogo/cbite.png',         'alt' => 'CBITE logo'],
        ['id' => $mama->id,  'title' => $mama->title,  'logo' => '/image/brandLogo/mamafriedrice.png', 'alt' => 'Mama Fried Rice logo'],
        ['id' => $soo->id,   'title' => $soo->title,   'logo' => '/image/brandLogo/soochicken.png',    'alt' => 'Soo Chicken logo'],
        ['id' => $tori->id,  'title' => $tori->title,  'logo' => '/image/brandLogo/torilab.jpg',       'alt' => 'Tori Lab logo'],
        ['id' => $drink->id, 'title' => $drink->title, 'logo' => '/image/brandLogo/drinklogo.png',     'alt' => 'Drinks logo'],
    ];
    $sections = [
        ['brand' => $cbite],
        ['brand' => $mama],
        ['brand' => $soo],
        ['brand' => $tori],
        ['brand' => $drink],
    ];
?>

<div id="menu-page" class="menu-shell">
    <header class="brand-nav-wrap">
        <nav class="brand-nav" aria-label="Brand navigation">
            <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a class="brand-tab brand-tab--<?php echo e($brand['id']); ?>"
                   href="#brand-<?php echo e($brand['id']); ?>"
                   data-brand-target="brand-<?php echo e($brand['id']); ?>">
                    <span class="brand-mark brand-mark--sm brand-mark--<?php echo e($brand['id']); ?>">
                        <img src="<?php echo e($brand['logo']); ?>" alt="<?php echo e($brand['alt']); ?>" />
                    </span>
                    <?php echo e($brand['title']); ?>

                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </nav>
    </header>

    <div class="menu-body">
        <?php $__currentLoopData = $sections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo $__env->make('components.brand-menu-section', [
                'brand' => $section['brand'],
            ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <footer class="menu-footer">
        Sandoo Kitchen &middot; Phnom Penh &middot; Allergen info available on request
    </footer>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.menu', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\wamp64\www\digital-menu\resources\views/home/index.blade.php ENDPATH**/ ?>
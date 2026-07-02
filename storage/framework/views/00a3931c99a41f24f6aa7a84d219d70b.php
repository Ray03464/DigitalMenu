<?php $__env->startSection('title', 'Sandoo Kitchen QR'); ?>

<?php $__env->startSection('content'); ?>
<!-- ============================================================
QR LANDING PAGE
============================================================ -->
<div id="qr-page">
    <div class="qr-wordmark">
        <img class="sandoo-logo sandoo-logo-lg" src="/image/brandLogo/sandookitchen.jpg" alt="Sandoo Kitchen logo" />
        Sandoo <em>Kitchen</em>
    </div>
    <p class="qr-subtitle">4 Brands &nbsp;·&nbsp; One Kitchen &nbsp;·&nbsp; Phnom Penh</p>

    <div class="qr-frame">
        <div id="qrcode"></div>
    </div>

    <p class="qr-scan-label">Scan to view our full menu</p>

    <div class="brand-pills">
        <div class="brand-pill"><img class="brand-logo-img" src="/image/brandLogo/cbite.png" alt="MAMA logo"> Mama Fried Rice</div>
        <div class="brand-pill"><img class="brand-logo-img" src="/image/brandLogo/mamafriedrice.jpg" alt="CBITE logo"> CBITE</div>
        <div class="brand-pill"><img class="brand-logo-img" src="/image/brandLogo/soochicken.png" alt="SOO logo"> Soo Chicken</div>
        <div class="brand-pill"><img class="brand-logo-img" src="/image/brandLogo/torilab.jpg" alt="TORI logo"> Tori Lab</div>
    </div>

    <a class="view-menu-btn" href="<?php echo e(route('home')); ?>">Browse Full Menu →</a>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
<script>
    new QRCode(document.getElementById('qrcode'), {
        text: new URL('<?php echo e(route('home')); ?>', window.location.origin).href,
        width: 200,
        height: 200,
        colorDark: '#4A4E52',
        colorLight: '#ffffff',
        correctLevel: QRCode.CorrectLevel.H
    });
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.menu', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\wamp64\www\digital-menu\resources\views/home/qr.blade.php ENDPATH**/ ?>
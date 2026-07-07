@extends('layouts.menu')

@section('title', 'Sandoo Kitchen QR')

@section('content')
<!-- ============================================================
QR LANDING PAGE
============================================================ -->
<div id="qr-page">
    <div class="qr-wordmark">
        <img class="sandoo-logo sandoo-logo-lg" src="/image/brandlogo/sandookitchen.jpg" alt="Sandoo Kitchen logo" />
        Sandoo <em>Kitchen</em>
    </div>
    <p class="qr-subtitle">4 Brands &nbsp;·&nbsp; One Kitchen &nbsp;·&nbsp; Phnom Penh</p>

    <div class="qr-frame">
        <div id="qrcode"></div>
    </div>

    <p class="qr-scan-label">Scan to view our full menu</p>

    <div class="brand-pills">
        <div class="brand-pill"><img class="brand-logo-img" src="/image/brandlogo/cbite.png" alt="CBITE logo"> CBITE</div>
        <div class="brand-pill"><img class="brand-logo-img" src="/image/brandlogo/mamafriedrice.jpg" alt="MAMA logo"> Mama Fried Rice</div>
        <div class="brand-pill"><img class="brand-logo-img" src="/image/brandlogo/soochicken.png" alt="SOO logo"> Soo Chicken</div>
        <div class="brand-pill"><img class="brand-logo-img" src="/image/brandlogo/torilab.jpg" alt="TORI logo"> Tori Lab</div>
    </div>

    <a class="view-menu-btn" href="{{ route('home') }}">Browse Full Menu →</a>
</div>
@endsection

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
<script>
    new QRCode(document.getElementById('qrcode'), {
        text: new URL('{{ route('home') }}', window.location.origin).href,
        width: 200,
        height: 200,
        colorDark: '#4A4E52',
        colorLight: '#ffffff',
        correctLevel: QRCode.CorrectLevel.H
    });
</script>
@endpush

{{-- components/menu-product-card.blade.php --}}
{{-- Variable: $product (MenuProduct) --}}

<article class="product-card">
    <div class="product-image-frame{{ $product->containImage ? ' is-contain' : '' }}">
        <img src="{{ $product->imageUrl }}"
             alt="{{ $product->name }}"
             loading="lazy"
             onerror="this.onerror=null;this.src='https://images.unsplash.com/photo-1544025162-d76694265947?w=480&q=75';" />
    </div>
    <div class="product-body">
        <h4 class="product-name">{{ $product->name }}</h4>
        <div class="product-price">
            <span>${{ $product->formattedPriceUsd() }}</span>
            @if ($product->priceKhr !== null)
                <span>៛{{ $product->formattedPriceKhr() }}</span>
            @endif
        </div>
    </div>
</article>

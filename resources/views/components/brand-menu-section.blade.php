{{-- components/brand-menu-section.blade.php --}}
{{-- Variables: $brand (BrandMenu) --}}

<section class="brand-section" id="brand-{{ $brand->id }}" data-brand-section="{{ $brand->id }}">
    @if (!empty($brand->description))
        <p class="brand-section-desc">{{ $brand->description }}</p>
    @endif

    @foreach ($brand->categories as $category)
        <section class="menu-category">
            <header class="menu-category-header">
                <h2 class="menu-category-title">
                    <span class="brand-section-title">{{ $brand->title }}</span>
                    <span class="menu-category-separator">-</span>
                    <span>{{ $category->name }}</span>
                </h2>
            </header>

            <div class="product-grid">
                @foreach ($category->products as $product)
                    @include('components.menu-product-card', ['product' => $product])
                @endforeach
            </div>
        </section>
    @endforeach
</section>

# Sandoo Kitchen Digital Menu — Laravel

Converted from ASP.NET MVC (.NET 8) to Laravel 11/12.

## Requirements

- PHP 8.2+
- Composer
- Extensions: `php-xml`, `php-mbstring`, `php-curl`, `php-zip`

## Setup

```bash
# 1. Install dependencies
composer install

# 2. Copy environment file and generate app key
cp .env.example .env
php artisan key:generate

# 3. Create storage symlink (optional, not needed for this app)
php artisan storage:link

# 4. Start development server
php artisan serve
```

Then open http://localhost:8000

## Image Assets

Place your image folders inside `public/`:

```
public/
  image/
    brandLogo/
      cbite.jpg
      mamafriedrice.jpg
      soochicken.png
      torilab.jpg
      sandookitchen.jpg
      cbitebanner.png
    cbitemenu/
      01.jpg  02.jpg  ...
    mamamenu/
      01.jpg  02.jpg  ...
    soochickenmenu/
      G-01.png  G-02.png  ...
    torimenu/
      01.jpg  02.jpg  ...
```

These paths are identical to the original ASP.NET project's `wwwroot/image/` folder —
just copy the entire `image/` folder from the original project's `wwwroot/` into `public/`.

## Project Structure

```
app/
  Data/
    BrandMenu.php           — Brand data class (was BrandMenu.cs record)
    MenuCategory.php        — Category data class
    MenuProduct.php         — Product data class
    CbiteMenuData.php       — CBITE menu data (was CbiteMenuData.cs)
    MamaMenuData.php        — Mama Fried Rice menu data
    SooChickenMenuData.php  — Soo Chicken menu data
    ToriLabMenuData.php     — Tori Lab menu data
  Http/Controllers/
    HomeController.php      — Routes: / and /qr and /privacy

resources/views/
  layouts/
    menu.blade.php          — Base layout (was _MenuLayout.cshtml)
  home/
    index.blade.php         — Menu page (was Index.cshtml)
    qr.blade.php            — QR landing page (was Qr.cshtml)
    privacy.blade.php       — Privacy page
  components/
    brand-menu-section.blade.php  — Brand section (was _BrandMenuSection.cshtml)
    menu-product-card.blade.php   — Product card (was _MenuProductCard.cshtml)

public/
  css/site.css              — Unchanged from original
  js/site.js                — Unchanged from original
  image/                    — Copy from wwwroot/image/ (not included)

routes/
  web.php                   — GET / , GET /qr , GET /privacy
```

## Key Conversions

| ASP.NET MVC                        | Laravel                              |
|------------------------------------|--------------------------------------|
| `_MenuLayout.cshtml`               | `layouts/menu.blade.php`             |
| `@RenderBody()`                    | `@yield('content')`                  |
| `@RenderSectionAsync("Scripts")`   | `@stack('scripts')`                  |
| `@section Scripts { ... }`         | `@push('scripts') ... @endpush`      |
| `<partial name="X" model="Y" />`   | `@include('components.x', [...])`    |
| `asp-action="Index"`               | `route('home')`                      |
| C# `record` with `init` props      | PHP `readonly` constructor properties|
| `product.PriceUsd.ToString("0.00")`| `$product->formattedPriceUsd()`      |
| `number.ToString("N0")`            | `number_format($n)`                  |

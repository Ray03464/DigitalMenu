<?php

namespace App\Data;

class DrinkMenuData
{
    private const IMG = '/image/drink';

    public static function get(): BrandMenu
    {
        return new BrandMenu(
            id: 'drink',
            title: 'Drinks',
            accentCssVar: '--drink',
            bannerImageUrl: '/image/brandlogo/drinklogo.png',
            categories: [
                new MenuCategory(
                    code: 'A',
                    name: 'Drinks',
                    products: [
                        self::product('D 01.', 'Coca-Cola', 'Chilled Coca-Cola, crisp and refreshing.', 1.00, 'CocaCola.jpg', 4000),
                        self::product('D 02.', 'Sprite', 'Chilled Sprite lemon-lime soda.', 1.00, 'Sprite.png', 4000),
                        self::product('D 03.', 'Fanta', 'Chilled Fanta orange soda in a 250mL can.', 1.00, 'FantaCan - 250mL.jpg', 4000),
                        self::product('D 04.', 'Dasani', 'Bottled Dasani drinking water.', 0.75, 'dasani.png', 3000),
                    ]
                ),
            ]
        );
    }

    private static function product(
        string $number,
        string $name,
        string $description,
        float $priceUsd,
        string $imageFile,
        ?int $priceKhr = null,
        ?string $badge = null,
        bool $containImage = true
    ): MenuProduct {
        return new MenuProduct($number, $name, $description, $priceUsd, self::IMG . '/' . $imageFile, priceKhr: $priceKhr, badge: $badge, containImage: $containImage);
    }
}

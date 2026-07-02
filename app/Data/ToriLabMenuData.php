<?php

namespace App\Data;

class ToriLabMenuData
{
    private const IMG = '/image/torimenu';

    public static function get(): BrandMenu
    {
        return new BrandMenu(
            id: 'tori',
            title: 'Tori Lab',
            accentCssVar: '--tori',
            bannerImageUrl: '/image/brandLogo/torilab.jpg',
            categories: [
                new MenuCategory(
                    code: 'A',
                    name: 'Yakitori Rice Sets',
                    products: [
                        self::product('01', 'Duo Yakitori Rice Set', 'Chicken thigh, chicken wing, and steamed rice.', 2.90, self::IMG . '/01.jpg', 11500),
                        self::product('02', 'Trio Yakitori Rice Set', 'Chicken with green pepper, chicken wing, chicken fillet, and steamed rice.', 4.20, self::IMG . '/02.jpg', 17000),
                        self::product('03', 'Mixed Yakitori Rice Set', 'Chicken thigh, quail egg, mushroom with pork belly, and steamed rice.', 3.80, self::IMG . '/03.jpg', 15000),
                        self::product('04', 'Spicy Yakitori Rice Set', 'Chicken with green pepper, chicken wing, chicken fillet, and steamed rice.', 4.40, self::IMG . '/04.jpg', 18000),
                    ]
                ),
                new MenuCategory(
                    code: 'B',
                    name: 'Yakitori Skewers',
                    products: [
                        self::product('05', 'Chicken Thigh', 'Juicy grilled chicken thigh glazed with signature yakitori sauce.', 0.95, self::IMG . '/05.jpg', 3800),
                        self::product('06', 'Chicken with Green Pepper', 'Tender chicken skewered with fresh green pepper and glazed with yakitori sauce.', 1.20, self::IMG . '/06.jpg', 4800),
                        self::product('07', 'Chicken Wing', 'Crispy-edged chicken wing brushed with signature yakitori sauce.', 1.20, self::IMG . '/07.jpg', 4800),
                        self::product('08', 'Chicken Fillet', 'Lean chicken fillet skewered and flame-grilled with a clean, balanced taste.', 1.20, self::IMG . '/08.jpg', 4800),
                        self::product('09', 'Chicken Meatball', 'Hand-formed chicken meatball grilled and coated in yakitori glaze.', 1.40, self::IMG . '/09.jpg', 5600),
                        self::product('10', 'Quail Egg', 'Grilled quail egg lightly brushed with yakitori sauce.', 1.00, self::IMG . '/10.jpg', 4000),
                        self::product('11', 'Mushroom with Pork Belly', 'Fresh mushroom wrapped in pork belly, flame-grilled and glazed with yakitori sauce.', 1.20, self::IMG . '/11.jpg', 4800),
                    ]
                ),
                new MenuCategory(
                    code: 'C',
                    name: 'Add On',
                    products: [
                        self::product('12', 'Steamed Rice with Seaweed', 'Add steamed rice to enjoy your yakitori as a full meal.', 1.10, self::IMG . '/13.jpg', 4400),
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
        string $imageUrl,
        ?int $priceKhr = null,
        ?string $badge = null,
        bool $containImage = true
    ): MenuProduct {
        return new MenuProduct($number, $name, $description, $priceUsd, $imageUrl, priceKhr: $priceKhr, badge: $badge, containImage: $containImage);
    }
}

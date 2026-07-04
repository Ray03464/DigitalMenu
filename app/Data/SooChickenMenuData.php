<?php

namespace App\Data;

class SooChickenMenuData
{
    private const IMG = '/image/soochickenmenu';

    public static function get(): BrandMenu
    {
        return new BrandMenu(
            id: 'soo',
            title: 'Soo Chicken',
            accentCssVar: '--soo',
            bannerImageUrl: self::IMG . '/G-10.png',
            categories: [
                new MenuCategory(
                    code: 'A',
                    name: 'Fried Chicken',
                    products: [
                        self::product('SC 01.', 'Boneless Chicken size S', 'Crispy fried boneless chicken pieces, juicy inside and coated with your choice of sauce.', 4.90, self::IMG . '/G-01.png', 20000),
                        self::product('SC 02.', 'Boneless Chicken size M', 'Crispy fried boneless chicken pieces, juicy inside and coated with your choice of sauce.', 8.50, self::IMG . '/G-02.png', 34000),
                        self::product('SC 03.', 'Boneless Chicken size L', 'Crispy fried boneless chicken pieces, juicy inside and coated with your choice of sauce.', 12.90, self::IMG . '/G-03.png', 52000),
                        self::product('SC 04.', 'Chicken Wings - Whole Wings (3pcs)', 'Whole chicken wings fried until crispy and golden, juicy inside with a rich chicken taste. Served with your choice of sauce.', 4.90, self::IMG . '/G-04.png', 20000),
                        self::product('SC 05.', 'Chicken Wings - Whole Wings (5pcs)', 'Whole chicken wings fried until crispy and golden, juicy inside with a rich chicken taste. Served with your choice of sauce.', 7.90, self::IMG . '/G-05%20.png', 32000),
                        self::product('SC 06.', 'Chicken Drumsticks (2pcs)', 'Crispy Chicken Drumsticks, fried until crispy and golden on the outside, tender on the inside, delicious and can be customized with flavors of your choice.', 3.20, self::IMG . '/G-06.png', 13000),
                        self::product('SC 07.', 'Chicken Drumsticks (4pcs)', 'Crispy Chicken Drumsticks, fried until crispy and golden on the outside, tender on the inside, delicious and can be customized with flavors of your choice.', 6.00, self::IMG . '/G-07.png', 24000),
                    ]
                ),
                new MenuCategory(
                    code: 'B',
                    name: 'Sets & Combos',
                    products: [
                        self::product('SC 08.', 'Solo Set (Boneless (S), Fries, Coke)', 'A simple solo meal with Boneless Chicken (S), French Fries, and one Coke.', 6.90, self::IMG . '/G-08.png', 28000),
                        self::product('SC 09.', 'Soo Twin Set (Wings (3 pcs), Boneless (S), Fries, 2 Coke)', 'A sharing set for two, including Chicken Wings (3pcs), Boneless Chicken (S), French Fries, and 2 Cokes.', 10.90, self::IMG . '/G-09.png', 44000),
                        self::product('SC 10.', 'Soo Family Set (Boneless (L), Drumsticks (4 pcs), Fries, Steamed Rice, 3 Cokes)', 'A family sharing set including Boneless Chicken (L), Chicken Drumsticks (4 pcs), French Fries, Steamed Rice, and 3 Cokes.', 18.90, self::IMG . '/G-10.png', 76000),
                    ]
                ),
                new MenuCategory(
                    code: 'C',
                    name: 'Add on',
                    products: [
                        self::product('SC 11.', 'French Fries', 'Classic strips of potato, fried until golden and crispy, the perfect salty side dish.', 1.50, self::IMG . '/G-11.png', 6000),
                        self::product('SC 12.', 'Rice', 'A portion of simple, fluffy white rice to balance out the savory fried chicken.', 0.75, self::IMG . '/G-12.png', 3000),
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

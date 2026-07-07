<?php

namespace App\Data;

class CbiteMenuData
{
    private const IMG = '/image/cbitemenu';
    private const SIGNATURE_PRICE = 3.50;

    public static function get(): BrandMenu
    {
        return new BrandMenu(
            id: 'cbite',
            title: 'CBITE',
            accentCssVar: '--cbite',
            bannerImageUrl: '/image/brandlogo/cbite.png',
            categories: [
                new MenuCategory(
                    code: 'A',
                    name: 'Signature Bites',
                    products: [
                        self::product(
                            'CB 01.',
                            'Pickled Chicken Feet - Original Flavor',
                            'Crunchy boneless chicken feet pickled with vinegar, garlic, and light spices. Refreshing, savory, and perfectly balanced. Best enjoyed chilled.',
                            self::SIGNATURE_PRICE,
                            self::IMG . '/01.jpg',
                            badge: '⭐ Signature'
                        ),
                        self::product(
                            'CB 02.',
                            'Pickled Chicken Feet - Spicy & Sour Flavor',
                            'Crunchy boneless chicken feet pickled with chili, vinegar, and garlic. Bold spicy-sour kick, refreshing and addictive. Best enjoyed chilled.',
                            self::SIGNATURE_PRICE,
                            self::IMG . '/02.jpg',
                        ),
                        self::product(
                            'CB 03.',
                            'Pickled Chicken Feet - Mala Flavor',
                            'Crunchy boneless chicken feet pickled with Sichuan mala spices, garlic, and light vinegar. Numbing, spicy, and aromatic — bold yet refreshing. Best enjoyed chilled.',
                            self::SIGNATURE_PRICE,
                            self::IMG . '/03.jpg',
                        ),
                        self::product(
                            'CB 04.',
                            'Pickled Chicken Feet - Pickled Chili Flavor',
                            'Crunchy boneless chicken feet pickled with fermented chili, garlic, and light vinegar. Bright chili aroma, mildly sour, and deeply flavorful. Best enjoyed chilled.',
                            self::SIGNATURE_PRICE,
                            self::IMG . '/04.jpg',
                        ),
                        self::product(
                            'CB 05.',
                            'Pickled Chicken Feet - Garlic Flavor',
                            'Boneless chicken feet marinated in a fragrant garlic brine. Savory, refreshing, and perfect as a cold snack or add-on.',
                            self::SIGNATURE_PRICE,
                            self::IMG . '/05.jpg',
                        ),
                        self::product(
                            'CB 06.',
                            'Pickled Pig Ear - Original Flavor',
                            'Thin-sliced pig ear with a crunchy, chewy texture, pickled with vinegar, garlic, and light spices. Clean, savory, and refreshing — a classic cold snack best enjoyed chilled.',
                            self::SIGNATURE_PRICE,
                            self::IMG . '/06.png',
                        ),
                    ]
                ),
                new MenuCategory(
                    code: 'B',
                    name: 'Mini Classic Cold Noodles',
                    products: [
                        self::product(
                            'CB 07.',
                            'Mini Classic Cold Noodles',
                            "Light cold noodle snack with chewy noodles, pickled vegetables, and shrimp, tossed in CBITE's classic refreshing sauce. Designed as a mini portion for light eating.",
                            2.90,
                            self::IMG . '/07.png',
                        ),
                    ]
                ),
                new MenuCategory(
                    code: 'C',
                    name: 'Hot Snacks',
                    products: [
                        self::product(
                            'CB 08.',
                            'French Fries',
                            'Crispy golden French fries, lightly salted.',
                            1.50,
                            self::IMG . '/08.jpg',
                        ),
                        self::product(
                            'CB 09.',
                            'Chicken Nuggets (6 pcs)',
                            'Crispy chicken nuggets, golden on the outside and tender inside. A perfect hot snack or side dish.',
                            2.80,
                            self::IMG . '/09.jpg',
                        ),
                        self::product(
                            'CB 10.',
                            'Chicken Nuggets (10 pcs)',
                            'Crispy chicken nuggets, golden on the outside and tender inside. A perfect hot snack or side dish.',
                            4.20,
                            self::IMG . '/10.jpg',
                        ),
                    ]
                ),
                new MenuCategory(
                    code: 'D',
                    name: 'Combos & Sets',
                    products: [
                        self::product(
                            'CB 11.',
                            'Cold Snack Combo (Cold Noodle, Pickled Chicken Feet, Soft Drink)',
                            "A refreshing combo featuring our signature cold noodles, pickled chicken feet, and one chilled Coke.",
                            6.90,
                            self::IMG . '/11.jpg',
                            badge: 'Combo'
                        ),
                        self::product(
                            'CB 12.',
                            'Hot Snack Combo (Chicken Nuggets (6pcs), French Fries, Soft Drink)',
                            'A classic hot snack combo with crispy French fries, 6 pieces of chicken nuggets, and one chilled Coke.',
                            4.70,
                            self::IMG . '/12.jpg',
                            badge: 'Combo'
                        ),
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
        ?string $badge = null,
        bool $containImage = false
    ): MenuProduct {
        return new MenuProduct($number, $name, $description, $priceUsd, $imageUrl, badge: $badge, containImage: $containImage);
    }
}

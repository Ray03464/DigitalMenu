<?php

namespace App\Data;

class MamaMenuData
{
    private const IMG = '/image/mamamenu';
    private const PRICE_380 = 3.80;
    private const PRICE_430 = 4.30;
    private const PRICE_480 = 4.80;
    private const KHR_380 = 15500;
    private const KHR_430 = 17500;
    private const KHR_480 = 19500;

    public static function get(): BrandMenu
    {
        return new BrandMenu(
            id: 'mama',
            title: 'Mama Fried Rice',
            accentCssVar: '--mama',
            bannerImageUrl: '/image/brandLogo/mamafriedrice.jpg',
            categories: [
                new MenuCategory(
                    code: 'A',
                    name: 'Mixed Meat fried rice',
                    products: [
                        self::product('MFR 01.', 'Yangzhou Fried Rice', 'Wok-fried rice loaded with shrimp, pork, egg, carrots, and green peas for a classic Cantonese balance of color and texture.', self::PRICE_380, '01.jpg', self::KHR_380),
                        self::product('MFR 02.', 'Fish Ball with Shrimp and Sesame Fried Rice', 'Savory fried rice tossed with fresh shrimp, fish balls, egg, and toasted sesame seeds for a light seafood finish.', self::PRICE_430, '02.jpg', self::KHR_430),
                        self::product('MFR 03.', 'Shrimp and Nasi Goreng Fish Fried Rice', 'Aromatic fried rice built on nasi goreng spice, shrimp, fish fillet, and a fried egg for a bold Southeast Asian profile.', self::PRICE_430, '03.jpg', self::KHR_430),
                        self::product('MFR 04.', 'Shrimp and Sausage Fried Rice', 'Wok-tossed rice with sweet sausage, shrimp, egg, and chopped vegetables for a crowd-pleasing savory plate.', self::PRICE_380, '04.jpg', self::KHR_380),
                        self::product('MFR 05.', 'Bacon and Shrimp Fried Rice', 'Fluffy fried rice combining crispy bacon strips, shrimp, egg, and green onions for a rich land-and-sea pairing.', self::PRICE_430, '05.png', self::KHR_430, containImage: true),
                        self::product('MFR 06.', 'Fish with Bacon and Shrimp Fried Rice', 'Wok-fried rice mixed with tender fish pieces, juicy shrimp, bacon, and egg for a smoky, layered finish.', self::PRICE_480, '06.png', self::KHR_480, containImage: true),
                        self::product('MFR 07.', 'Bacon and Squid Fried Rice', 'Wok-fried rice tossed with tender squid, smoky bacon, egg, and scallions for a briny and savory bite.', self::PRICE_430, '07.jpg', self::KHR_430),
                        self::product('MFR 08.', 'Pineapple with Shrimp and Coconut Fried Rice', 'Fragrant coconut rice tossed with shrimp, sweet pineapple chunks, and egg for a tropical sweet-savory burst.', self::PRICE_380, '08.jpg', self::KHR_380),
                        self::product('MFR 09.', 'Cauliflower and Shrimp Fried Rice', 'Lightly seasoned fried rice paired with crisp cauliflower florets, shrimp, and egg for a balanced plate.', self::PRICE_380, '09.jpg', self::KHR_380),
                        self::product('MFR 10.', 'Shiitake Mushroom and Shrimp Fried Rice', 'Wok-seared rice infused with earthy shiitake mushrooms, shrimp, egg, and premium soy sauce.', self::PRICE_380, '10.jpg', self::KHR_380),
                        self::product('MFR 11.', 'Shrimp and Basil Fried Rice', 'A fiery stir-fry of rice with fresh shrimp, holy basil, chili, and egg for a fragrant finish.', self::PRICE_380, '11.png', self::KHR_380, containImage: true),
                    ]
                ),
                new MenuCategory(
                    code: 'B',
                    name: 'Seafood',
                    products: [
                        self::product('MFR 12.', 'Seafood Fried Rice', 'Mixed seafood fried rice with shrimp, squid, egg, and scallions in a light savory sauce.', self::PRICE_430, '12.jpg', self::KHR_430),
                        self::product('MFR 13.', 'Crab and Shrimp Fried Rice', 'A rich fried rice plate with crab meat, shrimp, egg, and chopped greens for a sweeter seafood note.', self::PRICE_430, '13.jpg', self::KHR_430),
                        self::product('MFR 14.', 'Squid and Shrimp Fried Rice', 'Chewy squid and plump shrimp tossed with egg and garlic-seasoned rice for a clean seafood profile.', self::PRICE_380, '14.jpg', self::KHR_380),
                        self::product('MFR 15.', 'Pineapple Shrimp Fried Rice', 'Bright pineapple fried rice with shrimp, egg, cashew, and herbs for a sweeter tropical balance.', self::PRICE_430, '15.jpg', self::KHR_430),
                        self::product('MFR 16.', 'Coconut Shrimp Fried Rice', 'Coconut-scented rice with shrimp, egg, and basil for a round, fragrant seafood plate.', self::PRICE_380, '16.png', self::KHR_380, containImage: true),
                        self::product('MFR 17.', 'Seafood Basil Fried Rice', 'Shrimp, squid, egg, and basil fried at high heat for a punchy aromatic finish.', self::PRICE_430, '17.png', self::KHR_430, containImage: true),
                        self::product('MFR 18.', 'Seafood Curry Fried Rice', 'Curried fried rice with shrimp, mixed seafood, egg, and vegetables for a warm spice note.', self::PRICE_480, '18.png', self::KHR_480, containImage: true),
                        self::product('MFR 19.', 'Mackerel Coconut Fried Rice', 'Deeply satisfying fried rice blending coconut milk, mackerel, egg, and local herbs for a coastal flavor.', self::PRICE_430, '19.jpg', self::KHR_430),
                    ]
                ),
                new MenuCategory(
                    code: 'C',
                    name: 'Fish',
                    products: [
                        self::product('MFR 20.', 'Korean BBQ Chicken Fried Rice', 'Fluffy rice tossed with tender chicken marinated in Korean BBQ sauce, egg, and stir-fried greens.', self::PRICE_380, '20.jpg', self::KHR_380),
                        self::product('MFR 22.', 'Roasted Duck Breast Fried Rice', 'Premium fried rice cooked with dark soy sauce, roasted duck breast, egg, and scallions.', self::PRICE_380, '22.jpg', self::KHR_380),
                        self::product('MFR 24.', 'Beef Laksa Fried Rice', 'A bold fusion creation packing laksa curry paste, beef, and egg into a wok-fried rice bowl.', self::PRICE_430, '24.jpg', self::KHR_430),
                        self::product('MFR 25.', 'Mackerel Coconut Fried Rice', 'Deeply savory fried rice blending creamy coconut, flaked mackerel, egg, and local herbs.', self::PRICE_380, '25.png', self::KHR_380),
                    ]
                ),
                new MenuCategory(
                    code: 'D',
                    name: 'Chicken | duck | beef',
                    products: [
                        self::product('MFR 26.', 'Fish with Kimchi Fried Rice', 'A light yet flavorful dish mixing fermented kimchi, delicate fish fillets, sesame oil, and egg.', self::PRICE_430, '26.png', self::KHR_430, containImage: true),
                        self::product('MFR 27.', 'Stir-fried Coconut Rice with Small Fish and Sweet Basil', 'Rustic coconut rice with crispy small dried fish, sweet basil, and light seasoning for a fresh aromatic bowl.', self::PRICE_380, '27.png', self::KHR_380, containImage: true),
                        self::product('MFR 28.', 'Flash-fried rice with fried egg and togarashi', 'Meat-free flash-fried rice dusted with Japanese togarashi, fried egg, scallions, and sesame.', self::PRICE_380, '28.png', self::KHR_380, containImage: true),
                        self::product('MFR 29.', 'Golden Pork Cutlet Fried Rice', 'Comforting egg fried rice topped with a crispy pork cutlet for a texture-rich and filling plate.', self::PRICE_430, '29.jpg', self::KHR_430),
                        self::product('MFR 30.', 'Chicken Cutlet Fried Rice', 'Savory egg fried rice served with a crispy breaded chicken cutlet for a classic comfort combo.', self::PRICE_430, '30.jpg', self::KHR_430),
                        self::product('MFR 31.', 'Spicy Mala Chicken Thigh Rice', 'Steamed rice topped with juicy chicken thigh tossed in a fiery mala Sichuan peppercorn sauce and red chilies.', self::PRICE_430, '31.jpg', self::KHR_430),
                        self::product('MFR 32.', 'Mixed Skewer Rice Bowl', 'A fun and flavorful rice bowl loaded with assorted grilled skewers and a sweet-savory glaze.', self::PRICE_430, '32.jpg', self::KHR_430),
                        self::product('MFR 33.', 'Fried Rice With Smoked Duck Breast', 'Classic fried rice topped with tender smoked duck breast, seasoned and finished with rich smoky aroma.', self::PRICE_430, '33.png', self::KHR_430, containImage: true),
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

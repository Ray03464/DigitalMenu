<?php

namespace App\Data;

class BrandMenu
{
    public function __construct(
        public readonly string $id,
        public readonly string $title,
        public readonly string $accentCssVar,
        public readonly array $categories,
        public readonly ?string $bannerImageUrl = null,
        public readonly ?string $description = null,
    ) {}
}

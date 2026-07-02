<?php

namespace App\Data;

class MenuProduct
{
    public function __construct(
        public readonly string $number,
        public readonly string $name,
        public readonly string $description,
        public readonly float $priceUsd,
        public readonly string $imageUrl,
        public readonly ?string $nameKhmer = null,
        public readonly ?int $priceKhr = null,
        public readonly ?string $badge = null,
        public readonly bool $containImage = false,
    ) {}

    public function formattedPriceUsd(): string
    {
        return number_format($this->priceUsd, 2);
    }

    public function formattedPriceKhr(): ?string
    {
        if ($this->priceKhr === null) {
            return null;
        }
        return number_format($this->priceKhr);
    }
}

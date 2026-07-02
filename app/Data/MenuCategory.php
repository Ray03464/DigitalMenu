<?php

namespace App\Data;

class MenuCategory
{
    public function __construct(
        public readonly string $name,
        public readonly array $products,
        public readonly ?string $code = null,
        public readonly ?string $nameKhmer = null,
        public readonly ?string $note = null,
    ) {}
}

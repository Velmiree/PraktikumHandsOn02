<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Contracts\RepositoriProduk;

final class RepositoriProdukArray implements RepositoriProduk
{
    /** @var array<int, array<string, mixed>> */
    private array $produk = [
        [
            'sku' => 'BRG-001',
            'nama' => 'Beras 5 Kg',
            'kategori' => 'kebutuhan_rumah',
            'harga' => 75000,
            'stok' => 20,
        ],
        [
            'sku' => 'BRG-002',
            'nama' => 'Minyak Goreng 1 L',
            'kategori' => 'kebutuhan_rumah',
            'harga' => 18000,
            'stok' => 30,
        ],
        [
            'sku' => 'BRG-003',
            'nama' => 'Mie Instan',
            'kategori' => 'makanan',
            'harga' => 3500,
            'stok' => 50,
        ],
    ];

    public function semua(): array
    {
        return $this->produk;
    }

    public function cariSku(string $sku): ?array
    {
        foreach ($this->produk as $produk) {
            if ($produk['sku'] === $sku) {
                return $produk;
            }
        }

        return null;
    }

    public function kurangiStok(string $sku, int $kuantitas): void
    {
        foreach ($this->produk as $index => $produk) {
            if ($produk['sku'] === $sku) {
                $this->produk[$index]['stok'] -= $kuantitas;
                return;
            }
        }
    }
}
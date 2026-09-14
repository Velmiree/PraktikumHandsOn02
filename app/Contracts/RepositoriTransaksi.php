<?php

declare(strict_types=1);

namespace App\Contracts;

/**
 * Kontrak sumber data transaksi.
 *
 * Implementasi saat ini menggunakan berkas JSON.
 * Pada Modul 4 implementasinya dapat diganti dengan Eloquent
 * tanpa mengubah service maupun controller.
 */
interface RepositoriTransaksi
{
    /** @return array<int, array<string, mixed>> */
    public function semua(): array;

    /** @return array<string, mixed>|null */
    public function cariNomor(string $nomor): ?array;

    /** @param array<string, mixed> $data */
    public function simpan(array $data): void;

    /** @param array<string, mixed> $perubahan */
    public function ubah(string $nomor, array $perubahan): void;
}
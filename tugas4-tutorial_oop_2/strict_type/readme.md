# Interface

[Kembali](readme.md)

## Deskripsi

Pada dasarnya bahasa pemrograman terbagi menjadi 2 jenis yaitu:
- Strongly typed: variabel tidak akan secara otomatis dikonversi dari satu jenis ke jenis lainnya
- Weakly typed: variabel akan secara otomatis dikonversi dari satu jenis ke jenis lainnya selama masih memungkinkan

Untuk bahasa pemrograman PHP menggunakan jenis Weakly typed, sebagai contoh bisa dilihat pada bagian berikut

```php
<?php

function tambah(int $a, int $b): int {
    return $a + $b;
};
var_dump(tambah(9, '5.3'));
```

Meskipun telah menggunakan type hinting, namun potongan kode tersebut akan mengeluarkan output berupa `int` dengan nilai `14` tanpa mengeluarkan error apapun. Hal ini tentu menimbulkan masalah apabila programmer tidak menyadari ini. Bisa saja programmer berekspektasi output berupa 14.3 (`float`) namun yang keluar tidak seperti itu. Efek samping dari weakly typed ini membuat software yang dibuat berpotensi menimbulkan bug yang tidak disadari.

Oleh karena itu, PHP strict type akan membuat programmer lebih disiplin dan meminimalisir hasil yang tidak diekspektasikan karena konsep ini akan memberikan `TypeError` ketika tipe data dari variabel yang dimasukkan tidak sesuai dengan ketentuan.

## Sintaks

Untuk mengaktifkan fitur `TypeError` hanya perlu menambahkan `declare(strict_types = 1);` di awal kode program

```php
<?php declare(strict_types = 1);
?>
```

## Contoh

Di contoh ini akan menggunakan kembali fungsi yang sudah ada pada bagian deskripsi

## Langkah - langkah

1. Membuat fungsi
    ```php
    <?php

    function tambah(int $a, int $b): int {
        return $a + $b;
    };
    var_dump(tambah(9, '5.3'));
    ```

2. Mengaktifkan `TypeError`
    ```php
    <?php declare(strict_types = 1);

    function tambah(int $a, int $b): int {
        return $a + $b;
    };
    var_dump(tambah(9, '5.3'));
    ```

    Di tahap ini akan menghasilkan error seperti berikut
    ```
    Expected type 'int'. Found 'float'.intelephense(1006)
    ```

3. Memperbaiki fungsi

    Di bagian ini ada dua alternatif perbaikan yaitu:
    
    - Mengubah tipe data pada parameter b dan output menjadi float
        ```php
        <?php declare(strict_types = 1);

        function tambah(int $a, float $b): float {
            return $a + $b;
        };

        var_dump(tambah(9, 5.3));
        ```
    - Mengubah tipe data pada parameter b menjadi string dan output menjadi float
        ```php
        <?php declare(strict_types = 1);

        function tambah(int $a, string $b): float {
            return $a + $b;
        };

        var_dump(tambah(9, '5.3'));
        ```

## Kesimpulan

Walaupun cenderung lebih susah dalam penulisan, namun strict typing akan mempermudah programmer dalam melacak hasil yang tidak sesuai ekspektasi dan memudahkan untuk membuat self-documenting code (Kode yang tidak perlu dijelaskan alurnya dalam dokumentasi, namun bisa langsung dipahami hanya dengan melihat kodenya).
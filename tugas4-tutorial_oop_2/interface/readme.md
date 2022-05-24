# Interface

[Kembali](readme.md)

## Deskripsi

- Secara sederhana, Interface adalah sebuah kontrak atau perjanjian implementasi method.
- Bagi class yang menggunakan interface, class tersebut harus mengimplementasikan ulang seluruh method yang ada di dalam interface.
- Untuk cara pembuatan interface diperlukan 4 yaitu: nama interface, access modifiers method (default sebagai public function),nama method, parameter (optional jika diperlukan)
- Untuk penjelasan lebih lanjut bisa dilihat pada bagian sintaks

## Sintaks

1. Berikut sintaks untuk mendefinisikan interface
```php
<?php

// nama interface: nama_interface
interface nama_interface{
    // access modifiers method: tidak didefinisikan (default sebagai public function) 
    // nama method: nama_method_1
    // parameter: -
    function nama_method_1();

    // access modifiers method: public function
    // nama method: nama_method_2
    // parameter: nama
    public function nama_method_2($nama);
}
```

2. Berikut sintaks untuk mengimplementasikan interface pada class
```php
// class mendefinisikan interface apa yang diimplementasikan
class nama_class implements nama_interface{
    // mengimplementasikan ulang method yang ada pada interface
    function nama_method_1(){
        return null;
    }

    public function nama_method_2($nama){
        return $nama;
    }
}
?>
```

3. Pada tahap ini pengimplementasian interaface pada class sudah selesai dan class sudah bisa digunakan.

## Contoh

Di contoh kali ini saya akan mencontohkan penggunaan interface pada handphone. Di kasus ini, saya akan membuat 2 interface yaitu `PowerOn` dan `OperatingSystem`, dimana pastinya setiap handphone memiliki method untuk menghidupkan handphone dan memiliki sistem operasinya masing-masing. Pada interface `PowerOn` memiliki method bernama `turn_on` tanpa parameter sedangkan `OperatingSystem` memiliki method `show_ui` tanpa parameter. Lalu class yang akan mengimplementasikan kedua interface tersebut direpresentasikan dengan ketiga merk handphone yaitu `Xiaovo`, `Realsus`, dan `Vime`. Kriteria method pada masing - masing class yaitu:

- Xiaovo
    - turn_on: return `[Gambar Kodok] Xiaovo sedang booting...`
    - show_ui: return `Welcome to MUIU OS!`
- Realsus
    - turn_on: return `[Tulisan SnSV] Realsus sedang booting...`
    - show_ui: return `Welcome to Realsus OS!`
- Vime
    - turn_on: return `[Gambar Robot] Vime sedang booting...`
    - show_ui: return `Welcome to Sentuh Lucu OS!`

Sekarang studi kasusnya sudah jelas dan saatnya kita masuk ke tahapan pengimplementasiannya

### Langkah - langkah

1. Membuat interface

    Disini diminta 2 interface dengan nama interface yaitu `PowerOn` dan `OperatingSystem`, maka pertama definisikan kedua interface

    ```php
    <?php
    interface PowerOn{
        //isi dari interface PowerOn
    }

    interface OperatingSystem{
        //Isi dari interface OperatingSystem
    }
    ?>
    ```

2. Mendefinisikan method pada interface

    Pada kasus di atas diminta method `turn_on` tanpa parameter pada interface `PowerOn` dan method show_ui tanpa parameter pada interface `OperatingSystem`.

    ```php
    <?php
    interface PowerOn{
        public function turn_on();
    }

    interface OperatingSystem{
        public function show_ui();
    }
    ?>
    ```

3. Mengimplementasikan interface pada class
    
    Disini kita akan mengimplementasikan kedua interface ke ketiga class yaitu `Xiaovo`, `Realsus`, dan `Vime`.

    ```php
    <?php
    interface PowerOn{
        public function turn_on();
    }

    interface OperatingSystem{
        public function show_ui();
    }
    
    class Xiaovo implements PowerOn, OperatingSystem{
        //... Isi class Xiaovo
    }
    
    class Realsus implements PowerOn, OperatingSystem{
        //... Isi class Xiaovo
    }
    
    class Vime implements PowerOn, OperatingSystem{
        //... Isi class Xiaovo
    }
    ?>
    ```

4. Mendefinisikan ulang method dari interface

    Pada tahap sebelumnya class sudah mengimplementasikan interface tetapi method dari interface belum didefinisikan. Sekarang kita akan mendifinisikan method dari interface yang ada sesuai dengan ketentuan di atas.

    ```php
    <?php
    interface PowerOn{
        public function turn_on();
    }

    interface OperatingSystem{
        public function show_ui();
    }
    
    class Xiaovo implements PowerOn, OperatingSystem{
        public function turn_on() {
        return "[Gambar Kodok] Xiaovo sedang booting...";
        }
    
        public function show_ui() {
        return "Welcome to MUIU OS!";
        }
    }
    
    class Realsus implements PowerOn, OperatingSystem{
        public function turn_on() {
        return "[Tulisan SnSV] Realsus sedang booting...";
        }
    
        public function show_ui() {
        return "Welcome to Realsus OS!";
        }
    }
    
    class Vime implements PowerOn, OperatingSystem{
        public function turn_on() {
        return "[Gambar Robot] Vime sedang booting...";
        }
        
        public function show_ui() {
        return "Welcome to Sentuh Lucu OS!";
        }
    }
    ?>    
    ```

5. membuat Objek untuk setiap class

    Karena class sudah siap digunakan, kita coba implementasikan langsung setiap method yang telah didefinisikan.

    ```php
    <?php
    interface PowerOn{
        public function turn_on();
    }

    interface OperatingSystem{
        public function show_ui();
    }
    
    class Xiaovo implements PowerOn, OperatingSystem{
        public function turn_on() {
        return "[Gambar Kodok] Xiaovo sedang booting...";
        }
    
        public function show_ui() {
        return "Welcome to MUIU OS!";
        }
    }
    
    class Realsus implements PowerOn, OperatingSystem{
        public function turn_on() {
        return "[Tulisan SnSV] Realsus sedang booting...";
        }
    
        public function show_ui() {
        return "Welcome to Realsus OS!";
        }
    }
    
    class Vime implements PowerOn, OperatingSystem{
        public function turn_on() {
        return "[Gambar Robot] Vime sedang booting...";
        }
        
        public function show_ui() {
        return "Welcome to Sentuh Lucu OS!";
        }
    }
    ?>

    $Xiaovo = new Xiaovo();
    $Vime = new Vime();
    $Realsus = new Realsus();

    echo "Xiaovo : ".$Xiaovo->turn_on()."\n";
    echo "Vime : ".$Vime->turn_on()."\n";
    echo "Realsus : ".$Realsus->turn_on()."\n";

    echo "Ketika booting"."\n";

    echo "Xiaovo : ".$Xiaovo->show_ui()."\n";
    echo "Vime : ".$Vime->show_ui()."\n";
    echo "Realsus : ".$Realsus->show_ui()."\n";
    ```

    Berikut output yang akan dihasilkan pada terminal
    ```
    Xiaovo : [Gambar Kodok] Xiaovo sedang booting...  
    Vime : [Gambar Robot] Vime sedang booting...      
    Realsus : [Tulisan SnSV] Realsus sedang booting...
    Ketika booting
    Xiaovo : Welcome to MUIU OS!
    Vime : Welcome to Sentuh Lucu OS!
    Realsus : Welcome to Realsus OS!
    ```

## Kesimpulan

Penggunaan interface pada beberapa class, memungkinkan untuk class-class tersebut menggunakan suatu method atau fungsi yang sama, namun memiliki perlakuan yang berbeda. Hal tersebut membantu programmer untuk mengingatkan fungsi dasar apa saja yang harus ada dan wajib diisikan pada suatu class yang mengimplementasikan interface, agar tidak terdapat suatu fungsi yang miss atau gagal dijalankan oleh user.
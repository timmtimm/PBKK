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
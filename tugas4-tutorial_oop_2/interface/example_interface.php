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

?>
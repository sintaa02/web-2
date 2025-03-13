<?php
class Animal {
    public $animals = ["Kucing", "Harimau", "Buaya", "Ular", "Kelinci"];
    function index(){
        echo "<ol>"; 
        foreach ($this->animals as $key => $value){
            echo "<li>$value</li>";
        }
        echo "</ol>";
    }
    function store($hewan){
        array_push($this->animals, $hewan);

        $this->index();
    } 
    public function update($key, $value){
        if(isset($this->animals[$key])) {
            $this->animals[$key] = $value;
            //Memanggil method index
            $this->index();
        } else {
            echo "hewam tidak ditemukan";
        }

    }
    public function destroy($key){
        if(isset($this->animals[$key])) {
            unset($this->animals[$key]);
            //Memanggil method index
            $this->index();
        } else {
            echo "hewan tidak ditemukan";
        }
    }
}

$hewan = new Animal();
echo "Index - menampilkan seluruh data Hewan<br>";
$hewan->index();
echo "<br>";

echo "Store - Menambahkan data Hewan baru (Burung)<br>";
$hewan->store("Burung");
echo "<br>";

echo "Update - Mengubah data Hewan <br>";
$hewan->update(6, "Kucing Anggora");
echo "<br>";

echo "Destory - Menghapus data Hewan <br>";
$hewan->destroy(0);
echo "<br>";
?>
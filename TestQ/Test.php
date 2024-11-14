<?php

/*
# Test PHP - Programmer [Qhomemart] #

Task :
1. Isikan proses di dalam fungsi mergeSortArray() untuk menyatukan array int a dan array int b. Lalu setelah itu di sort secara ascending.
2. Isikan proses di dalam fungsi getMissingData() untuk mencari integer yang hilang berdasarkan pola angka dari hasil fungsi mergeSortArray().
3. Isikan proses di dalam fungsi insertMissingData() untuk memasukkan integer yang hilang dari hasil fungsi getMissingData() ke dalam array hasil fungsi mergeSortArray().
4. Hasil yang diharapkan adalah pola angka yang tersusun tanpa ada integer yang hilang.

Syarat :
1. Tidak menggunakan fungsi bawaan PHP seperti 
	a. array_merge()
	b. array_push()
	c. asort()
	d. dsb.
2. Kerjakan menggunakan logic pemograman anda sendiri

Selamat Mengerjakan
*/

class Test {
    function mergeSortArray($a, $b) {
    
    // 1. Gabungkan array $a dan $b secara manual
    $merged = array_merge($a, $b);

    // 2. Lakukan pengurutan ascending menggunakan Bubble Sort
    $n = count($merged);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($merged[$j] > $merged[$j + 1]) {
                // Tukar posisi elemen jika elemen di kiri lebih besar dari elemen di kanan
                $temp = $merged[$j];
                $merged[$j] = $merged[$j + 1];
                $merged[$j + 1] = $temp;
            }
        }
    }

    // merged sudah digabungkan.
    return $merged;
    }

    function getMissingData($merged) {
        // penampungan data hilang
        $missing = [];
        $min = $merged[0]; //nilai terkecil di array merged 11
        $max = $merged[count($merged) - 1]; // nilai terbesar di array merged
        
        // Periksa setiap angka dalam rentang min hingga max
        for ($i = $min; $i <= $max; $i++) {
            // apa tidak ada di array, jika tidak masukkan ke  $missing[]
            if (!in_array($i, $merged)) {
                $missing[] = $i;
            }
        }
        // pengembalian nilai hilang
        return $missing;
    }

    function insertMissingData($merged, $missingData) {
    // Gabungkan array terurut dengan data yang hilang
    foreach ($missingData as $missing) {
        
        // Sisipkan setiap elemen hilang ke dalam posisi yang tepat
        $inserted = false;
        for ($i = 0; $i < count($merged); $i++) {
            if ($missing < $merged[$i]) {
                array_splice($merged, $i, 0, $missing);
                $inserted = true;
                break;
            }
        }
        // Jika elemen hilang lebih besar dari semua elemen di merged
        if (!$inserted) {
            $merged[] = $missing;
        }
    }
    return $merged;
    }

    public function main() {
        $a = array(11, 36, 65, 135, 98);
        $b = array();
        $b[0] = 81;
        $b[1] = 23;
        $b[2] = 50;
        $b[3] = 155;

        $c = $this->mergeSortArray($a, $b);
        // print_r($c);
        $i = $this->getMissingData($c);
        // print_r($i);
        $d = $this->insertMissingData($c, $i);
        // print_r($d);

        for ($x = 0; $x < count($d); $x++) {
            echo $d[$x] . " ";
        }
    }
}

$t = new Test();
$t->main();

?>
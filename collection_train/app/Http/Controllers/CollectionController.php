<?php

namespace App\Http\Controllers;

use Illuminate\http\Request;
use Illuminate\Routing\Controller;

class CollectionController extends Controller
{

    public function CollectionSatu() {
        $collection = collect([32,12,42,15,6,1,2,3,4]);
        echo "<pre>";
        var_dump($collection);
        echo "</pre>";
    }

    public function CollectionDua() {
        $collection = collect([32,12,42,15,123,1,2,3,4]);
        echo $collection[0];
    
        foreach($collection as $value){
            echo "$value, ";
        }
    }

    public function CollectionTiga() {
        $collection = collect(["belajar","laravel", "Mudah dan menyenangkan bukan?", "BUKANN!!"]);

        foreach($collection as $value){
            echo "$value ";
        }
        

        $collection = collect([
            "nama" => "Udin",
            "kampus" => "SLB Bandung",
            "kota" => "zimbabwe",
            "prodi" => "Psikopat"
        ]);

        echo $collection;

    }
}

?>
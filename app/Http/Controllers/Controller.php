<?php namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController {
    use AuthorizesRequests,
    DispatchesJobs,
    ValidatesRequests;

    public function answer1() {

        $words=array("kita", "atik", "tika", "aku", "kia", "makan", "kua");
        $result=array();
        $dumpArr=array();

        for($i=0; $i<count($words); $i++) {
            $anagramArr=array();

            if(in_array($words[$i], $dumpArr)) {
                continue;
            }

            for($j=0; $j<count($words); $j++) {
                if($this->isAnagram($words[$i], $words[$j])===1) {
                    $anagramArr[]=$words[$j];
                    $dumpArr[]=$words[$j];
                }
            }

            $result[]=$anagramArr;
        }

        echo json_encode($result);
    }

    public function answer2($size) {

        for ($i=0; $i < $size-1; $i++) {

            // print spaces 
            for ($j=0; $j < $size - $i - 1; $j++) {
                echo "+";
            }

            // print stars 
            for ($k=0; $k < 2 * $i + 1; $k++) {
                echo "-";
            }

            // print spaces 
            for ($j=0; $j < $size - $i - 1; $j++) {
                echo "+";
            }

            echo "<br>";
        }

        for ($i=0; $i < $size; $i++) {

            // print spaces
            for ($j=0; $j < $i; $j++) {
                echo "+";
            }

            // print stars
            for ($k=0; $k < 2 * ($size - $i) - 1; $k++) {
                echo "-";
            }

            for ($j=0; $j < $i; $j++) {
                echo "+";
                ;
            }

            echo "<br>";
        }
    }



    public function isAnagram($str1, $str2) {
        $char1=str_split($str1);
        $char2=str_split($str2);
        $status=0;

        if(count($char1) !=count($char2)) {
            return $status;
        }

        sort($char1);
        sort($char2);

        for ($i=0; $i<count($char1); $i++) {
            if ($char1[$i] !==$char2[$i]) {
                $status=0;
                break;
            }

            else {
                if($i==count($char1)-1) {
                    $status=1;
                }
            }
        }

        return $status;
    }
}

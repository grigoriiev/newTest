<?php
declare(strict_types=1);

namespace App;


/**
 * Class StringRevert
 * @package App
 */
class StringRevert
{

    /**
     * @var bool
     */
    public $upper=false;

    /**
     * @param $str
     * @return bool
     */
    public function startsWithUpper($str) {

        $chr = mb_substr ($str, 0, 1, "UTF-8");

        return mb_strtolower($chr, "UTF-8") != $chr;
    }

    /**
     * @param $str
     * @return string
     */
    public function mb_strrev($str){

        $r = '';

        $u='';

        for ($i = mb_strlen($str); $i>=0; $i--) {

            if(preg_match("/[0-9.!?,;:]$/", $str)){

                $last=substr($str, -1);

                $str = substr($str,0,-1);

            }

            if ($this->startsWithUpper($str)){

                $this->upper=true;

                $u.=mb_strtolower(mb_substr($str, $i, 1), "UTF-8");

            }else{

                $this->upper=false;

                $r .= mb_substr($str, $i, 1);
            }

        }
        return  $u.$r.$last;
    }


    /**
     * @param $string
     * @return string
     */
    public function revertCharacters($string){

        $arr = explode(" ", $string);

        $newArr=[];

        foreach ($arr as $key =>$value){


            $string = $this->mb_strrev($value);

            if($this->upper) {

                $newArr[]=mb_convert_case($string, MB_CASE_TITLE) ;

            }else{
                $newArr[]=$string;
            }

        }

        return implode(" ", $newArr);
    }

}
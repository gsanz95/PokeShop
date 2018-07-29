<?php
function getContent($line, $nr){
    if(empty($line)){
        return "NULL";
    }
    $line =  strtolower($line);
    switch ($nr) {
        case 1:
            $valid = strpos($line,"height");
            if($valid === false) {
                $line = "NULL";
                break;
            }
            $line = str_replace("height:", "", $line);
            preg_match_all("/[0-9]+/", $line,$height_arr);
            //preg_match("/[0-9]+\"/", $line,$height_arr[1]);
            return $height_arr;
            break;
        case 2:
            $valid = strpos($line,"weight");
            if($valid === false) {
                $line = "NULL";
                break;
            }
            $line = str_replace("weight:", "", $line);
            $line = str_replace(" lbs", "", $line);
            break;
        case 3:
            $valid = strpos($line,"gender");
            if($valid !== false) {
                if(strpos($line,"e/f") !== false)
                {
                    $line = "b";
                }elseif(strpos($line,"female") !== false)
                {
                    $line = "f";
                }elseif(strpos($line,"male") !== false)
                {
                    $line ="m";
                }else{
                    $line ="u";
                }
                break;
            }
            break;
        case 4:
            $valid = strpos($line,"category");
            if($valid === false) {
                $line = "NULL";
                break;
            }
            $line = str_replace("category:", "", $line);
            break;
        case 5:
            if(strpos($line,"abilit") === false)
            {
                $line = "NULL";
                break;
            }
            $line = str_replace("abilities:", "", $line);
            break;
        case 6:
            $valid = strpos($line,"intimidate");
            if($valid !== false) {
                $line = str_replace("intimidate:", "", $line);
                break;
            }
            break;
        case 7:
            $valid = strpos($line,"type");
            if($valid !== false) {
                $line = str_replace("type:", "", $line);
                break;
            }
            break;
        case 8:
            if(strpos($line,"weak") === false)
            {
                $line = "NULL";
                break;
            }
            $line = str_replace("weaknesses:", "", $line);
            break;
        default:
            break;
    }

    return $line;
}

function removeEmptyLines($str){
    $str = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $str);
    return $str;
}

function isEmpty($str){
    if(count($str) !== 0) {
        return $str;
    }elseif(empty($str)){
        $str = "NULL";
    }else{
        return $str;
    }
}

function evalContents($e){
    $e = strtolower($e);
    if(strpos($e,"height") !== false) {
        $nr = 1;
    }elseif (strpos($e,"weight") !== false) {
        $nr = 2;
    }elseif (strpos($e,"gender") !== false) {
        $nr = 3;
    }elseif (strpos($e,"category") !== false) {
        $nr = 4;
    }elseif (strpos($e,"abilit") !== false) {
        $nr = 5;
    }elseif (strpos($e,"intimidate") !== false) {
        $nr = 6;
    }elseif (strpos($e,"type") !== false) {
        $nr = 7;
    }elseif (strpos($e,"weakness") !== false) {
        $nr = 8;
    }else{
        $nr = null;
    }
    return $nr;
}

// Cutoff description point
function tokenTruncate($string, $width) {
    $string = substr($string, 0, strrpos(substr($string, 0, $width), ' '));
    return $string;
}
/**
 * Created by PhpStorm.
 * User: Giancarlo
 * Date: 7/28/2018
 * Time: 5:40 PM
 */
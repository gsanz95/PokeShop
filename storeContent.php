<?php
include "config.php";
include "functions.php";

$path = realpath("B:/pokemart/descriptions");

$di = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($path, FilesystemIterator::SKIP_DOTS),
    RecursiveIteratorIterator::LEAVES_ONLY
);

// Fill each pokemon index with information
foreach($di as $name => $fio) {

    $p_description = $height[0] =$height[1] = $weight = $gender = $category = $abilities = $intimidate = $type = $weaknesses = $out = "NULL";
    //Debug
    //echo $fio, "<br>";

    $file_name = basename($fio, ".txt");

    $file = fopen($path . DIRECTORY_SEPARATOR . basename($fio),"r") or die("Couldn't open file");
    $p_description = addslashes(fgets($file));
    //Debug
    //echo $file_name, "<br>";

    $file_content = fread($file, filesize($path . DIRECTORY_SEPARATOR . basename($fio)));
    $file_content = removeEmptyLines($file_content);

    $separator = "\r\n";
    $column = strtok($file_content, $separator);
    $x = 1;

    //Get all info from $file_content
    while ($column !== false) {

        $x = evalContents($column);
        if($x === 0){
            die("Document Improperly Formatted");
        }

        //Debug
        //echo $x,"&nbsp;", $column, "<br>";

        // Strip unnecessary info from $column
        if($x == 1) {
            $height = getContent($column, $x);
        }else{
            $out = getContent($column, $x);
        }


        /*/Debug
        if(is_array($height) && $x == 1) {
            print_r($height);
            echo "<br>";
        }else{
            echo $out, "<br>";
        }*/

        switch ($x){
            case 1:
                $height = isEmpty($height[0]);
                break;
            case 2:
                $weight = isEmpty($out);
                break;
            case 3:
                $gender = isEmpty($out);
                break;
            case 4:
                $category = isEmpty($out);
                break;
            case 5:
                $abilities = isEmpty($out);
                break;
            case 6:
                $intimidate = isEmpty($out);
                break;
            case 7:
                $type = isEmpty($out);
                break;
            case 8:
                $weaknesses = isEmpty($out);
                break;
            default:
                break;
        }

        $column = strtok( $separator );
    }

    $update_query = "update products set p_description='$p_description',p_height_ft='$height[0]',p_height_in='$height[1]',p_weight='$weight',p_gender='$gender',p_category='$category',p_abilities='$abilities',p_intimidate='$intimidate',p_type='$type',p_weakness='$weaknesses' where p_name='$file_name'";
    //Debug
    //echo $update_query, "<br><br>";
    $update_obj = mysqli_query($conn, $update_query);
    if($update_obj == false){
        echo "Failure!", "<br>";
    }else{
        echo "<h2>Success!</h2>", "<br>";
    }

    fclose($file);
}
/**
 * Created by PhpStorm.
 * User: Giancarlo
 * Date: 7/28/2018
 * Time: 10:51 AM
 */
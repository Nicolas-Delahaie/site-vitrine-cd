<?php
    define("larg_vign", 200);
    define("long_vign", 200);

    header("Content-type: image/png");   
    $image = imagecreatefrompng($_GET["cheminImage"]);       //$_GET["cheminImage"]
    $imgReduite = imagecreatetruecolor(larg_vign, long_vign);
    // imageCopyResized($image, $imgReduite, 0,0,0,0, larg_vign, long_vign);
    // $couleur = ImageColorAllocate($image,255,0,0);
    
    imagejpeg($image);
    imagedestroy($image);
?>
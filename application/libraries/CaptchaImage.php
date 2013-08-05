<?php
class CaptchaImage{

    var $length;
    var $string;
    var $ttfFont;
    var $charWidth;

    //var $background_colour;
    //var $text_colour;
    //var $colours = array();
    //var $shadow_height;
    //var $shadow_dark;

 /**
  * PHP4 constructor.
  *
  * @access   public
  * @param    string   $length   captcha string length
  * @param    string   $string   captcha string
  * @return   void
  */
  function CaptchaImage($length = 5, $string = null){

    $this->length    = $length;
    $this->ttfFont   = './system/fonts/captcha.ttf';
    $this->charWidth = 12;
        $this->font_size = 18;
    if (!isset($string)){
      $this->mystring = $this->randomString($length);
    } else {
      $this->mystring = $string;
    }
  }
  /**/

  function setFont($ttfpath, $ttfsize = 8){
        if(file_exists($ttfpath)){
            $this->ttfFont = $ttfpath;
            $this->font_size = $ttfsize;
        } else {
            $this->ttfFont = 2;
            //echo 'font can't be found';
        }
    }

  function randomString($length){

    //alphanumeric array widthout ambiguous chars
    $alphanumericArr  = array ('a','b','c','d','e','f','g','h','j','k','m','n','p','t','4','2','3','8','9');
    shuffle($alphanumericArr);
    $alphanumericArr = array_slice($alphanumericArr, 0, $length-1);
    $string = join("",$alphanumericArr);
    return $string;

  }


  function draw(){
        header("Cache-Control: no-store, no-cache, must-revalidate"); // HTTP/1.1
        header("Cache-Control: post-check=0, pre-check=0", false);
        header("Pragma: no-cache");
        header("Content-Type: image/png");
        header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); // Date in the past
        header("Last-Modified: ".gmdate("D, d M Y H:i:s", time())." GMT");

    $length     = $this->length * $this->charWidth;
    $height     = 22;

    $image      = imagecreate($length, $height);
    $background = imagecolorallocate($image, 00, 0, 0);

    $textcolor  = imagecolorallocate($image, 255,255,255);
    $linecolor  = imagecolorallocate($image, 0, 0, 255);
        $border_color    = ImageColorAllocate($image, 153, 102, 102);


   $this->DrawLines($image, $length, $height);
    imagettftext($image, $this->font_size, 0, 4, 18,
                 $textcolor,
                 $this->ttfFont,
                 $this->mystring);
    // -----------------------------------
    //  Create the border
    // -----------------------------------
    imagerectangle($image, 0, 0, $length-1, $height-1, $border_color);

    // -----------------------------------
    //  Generate the image
    // -----------------------------------
    imagepng($image);

    //echo $this->ttfFont;
    exit();

  }


  function getString(){
    return $this->mystring;
  }

    function _colourHex($img, $HexColorString){
        $R = hexdec(substr($HexColorString, 0, 2));
        $G = hexdec(substr($HexColorString, 2, 2));
        $B = hexdec(substr($HexColorString, 4, 2));
        return ImageColorAllocate($img, $R, $G, $B);
    }

    function _colourHexshadow($img, $HexColorString, $mork){
        $R = hexdec(substr($HexColorString, 0, 2));
        $G = hexdec(substr($HexColorString, 2, 2));
        $B = hexdec(substr($HexColorString, 4, 2));
        if($mork){
            ($R > 99) ? $R -= 100 : $R = 0;
            ($G > 99) ? $G -= 100 : $G = 0;
            ($B > 99) ? $B -= 100 : $B = 0;
        } else {
            ($R < 220) ? $R += 35 : $R = 255;
            ($G < 220) ? $G += 35 : $G = 255;
            ($B < 220) ? $B += 35 : $B = 255;
        }
        return ImageColorAllocate($img, $R, $G, $B);
    }

  function DrawLines($oImage, $length, $height) {
        for ($i = 0; $i < 48; $i++) {
          // allocate colour
          if (true) {
             $iLineColour = imagecolorallocate($oImage, rand(90, 100), rand(100, 140), rand(120, 130));
          } else {
             $iRandColour = rand(100, 250);
             $iLineColour = imagecolorallocate($oImage, $iRandColour, $iRandColour, $iRandColour);
          }
            //imagecolorallocatealpha($oImage, rand(90, 100), rand(100, 140), rand(120, 130), rand(100, 120));
          // draw line
          imageline($oImage, rand(0, $length), rand(0, 0), rand(0, $length), rand($height, $height), $iLineColour);
        }
    }

}
?>
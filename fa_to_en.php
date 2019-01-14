<?php

   function fa_to_en($number)
   {
      if(empty($number))
         return '0';

      $en = array("0","1","2","3","4","5","6","7","8","9");
      $fa = array("۰","۱","۲","۳","۴","۵","۶","۷","۸","۹");

      return str_replace($fa, $en, $number);
   }

?>
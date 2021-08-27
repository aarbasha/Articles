<?php

namespace App\Traits;

 trait articleTraits{

     function SavaImagse($photo ,$folder){
        //save photo in storag file in public/images/articles
       //###########################################################
       //جلب لاحقة الصورة
       $file_ex = $photo->getClientOriginalExtension();
       //اعادة تسمية الصورة
       $file_name = time() . "." . $file_ex;
       //تحديد مسار الصورة
       $path = $folder;
       //نقل الصورة
       $photo->move($path ,$file_name );
       //############################################################
       return $file_name;
   }
}

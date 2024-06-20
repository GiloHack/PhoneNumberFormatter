/**
    Written by Gilbert Oloya

**/
class PhoneNumberFormatting{
        static function intl_format_one($number){
            //if number starts with 0;
            $filtered = "";
            if(strpos($number, 0) == 0){
                   $filtered = "+256".substr($number, 1,9);
            
            }
            return $filtered;
        
      }
       static function intl_format_two($number){
            //if number starts with 0;
            $filtered = "";
            if(strpos($number, 0) == 0){
                   $filtered = "256".substr($number, 1,9);
            
            }else if(strpos($number, "+")==0){
                  $filtered = "256".substr($number, 1,9);
            }
            return $filtered;
        
      }
         
}

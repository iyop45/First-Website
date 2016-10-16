<?php

namespace JBBCode\validators;

require_once dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'InputValidator.php';

class FontSize implements \JBBCode\InputValidator
{

    /**
     * Returns true if $input is a valid font.
     *
     * @param $input  the string to validate
     */
    public function validate($input)
    {
        if (is_numeric($input)){
            if($input<8 && $input >0){
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }

}

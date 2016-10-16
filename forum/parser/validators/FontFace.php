<?php

namespace JBBCode\validators;

require_once dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'InputValidator.php';

class FontFace implements \JBBCode\InputValidator
{

    /**
     * Returns true if $input is a valid font.
     *
     * @param $input  the string to validate
     */
    public function validate($input)
    {
        /*$fonts = array('Arial',
                        'Arial Black',
                        'Arial, Helvetica, sans',
                        'Comic Sans MS',
                        'Courier New',
                        'Georgia',
                        'Impact',
                        'Sans-serif',
                        'Serif',
                        'Times New Roman',
                        'Trebuchet MS',
                        'Verdana',
                        );*/
        $fonts = array('arial',
                        'arial black',
                        'arial, helvetica, sans',
                        'arial, helvetica, sans-serif',
                        'comic sans ms',
                        'courier new',
                        'georgia',
                        'impact',
                        'sans-serif',
                        'serif',
                        'times new roman',
                        'trebuchet ms',
                        'verdana',
                        );
        if (in_array(strtolower($input), $fonts)){
            return true;
        }else{
            return false;
        }
    }

}

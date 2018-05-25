<?php
namespace techberry;
class strings
{
    public function humanTiming($time,$compressed=1)
    {
        $time   = time() - $time; // To get the time since that moment
		if($compressed==1){
			$tokens = array(
				31536000 => ' yr',
				2592000 => ' mth',
				604800 => ' wk',
				86400 => ' d',
				3600 => ' hr',
				60 => ' m',
				1 => ' s'
			);
		}else{
			$tokens = array(
				31536000 => ' year',
				2592000 => ' month',
				604800 => ' week',
				86400 => ' day',
				3600 => ' hour',
				60 => ' minute',
				1 => ' second'
			);		
		}
        foreach ($tokens as $unit => $text)
        {
            if ($time < $unit)
                continue;
            $numberOfUnits = floor($time / $unit);
            return $numberOfUnits . $text;
        }
    }
    public function abbreviateNumber($number)
    {
        if ($number >= 1000000)
        {
            $output = round(($number / 1000000), 2) . 'm';
        }
        elseif ($number >= 1000)
        {
            $output = round(($number / 1000), 2) . 'k';
        }
        else
        {
            $output = $number;
        }
        return $output;
    }
    /*
    Creates SEO friendly URLS
    */
    public function urlFreindly($text)
    {
        // Replace all non letters or digits with -
        $text = preg_replace('/\W+/', '-', $text);
        // Trim and lower-case
        $text = strtolower(trim($text, '-'));
        return $text;
    }
    
    public function singleTags($input)
    {
        $output = str_replace('[hr]', '<hr>', $input);
        $output = str_replace('[br]', '<br>', $output);
        return $output;
    }
}
?>
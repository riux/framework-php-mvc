<?php
class HTML {
    static function a($href, $content, $opcional){

        return "<a href='".ROUTER::create_action_url($href)."' $opcional>$content</a>";
    }
    static function br($lenght){
        $x = 0;
        $br = null;
        while ($x < $lenght) {
            $br .= "<br> \n";
            $x++;
        }
        return $br;
    }


}
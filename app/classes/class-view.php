<?php
class View{
    public static function __callstatic($name,$arguments){
        if($name=='render'){
            self::render_view($arguments[0]);
        }
    }
        private static function render_view($view_name){
            get_template_part('views/'.$view_name);
        }
    
}
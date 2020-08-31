<?php
    namespace application\service;

    class Service{

        public static function codeAleatoire()
        {
            $string = "";
            $chaine = "2643789ABDCEFGHJKMNPRTUVW";
            srand((double)microtime()*1000000);
            for($i=0; $i<8; $i++)
            {
                $string .= $chaine[rand()%strlen($chaine)];
            }
            return $string;
        }

        public static function cleRip()
        {
            $string = "";
            $chaine = "012643789";
            srand((double)microtime()*1000000);
            do{
                for($i=0; $i<2; $i++)
                {
                    $string .= $chaine[rand()%strlen($chaine)];
                }
            }while($string=="99" || $string=="98");

            return intval($string);
        }
    }
?>
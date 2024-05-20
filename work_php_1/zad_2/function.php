<?php
    function discriminate(int $a, int $b, int $c): ?float
    {
        $dis = pow($b, 2) - 4 * $a * $c;
        if($dis>=0){
            return sqrt($dis);
        }
        return null;
//        try{
//            return sqrt(pow($b, 2) - 4 * $a * $c);
//        }
//        catch(Exception $e){
//            return null;
//        }
    }
    function genders(string $name): ?string
    {
        $name = iconv('UTF-8','windows-1251',$name);
        $men = ['й', 'н', 'р', 'д', 'л', 'к'];
        $women = ['а', 'я'];
        $chars = substr($name, strlen($name) - 1, 1);
        $chars = iconv('windows-1251','UTF-8',$chars);
        if (in_array($chars, $women)){
            return "women";
        }
        elseif (in_array($chars, $men)){
            return "men";
        }
        else
            return null;
    }

    assert(0 == discriminate(1,4,4));
    assert(7 == discriminate(1,-3,-10));
    assert(null == discriminate(1,2,2));
    assert("women" == genders("Алина"));
    assert("women" == genders("Наталия"));
    assert("men" == genders("Андрей"));
    assert("men" == genders("Константин"));
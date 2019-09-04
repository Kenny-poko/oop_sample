<?php

class blacky
{
    public $hp;

    public $mp;
    function guard()
    {
        echo "身を守った";
        echo "<br>";
    }

    function substitute ()
    {
        echo "身代わりを出した";
        echo "<br>";
    }

    function poison ()
    {
        echo "相手を毒にした";
        echo "<br>";        
    }
}
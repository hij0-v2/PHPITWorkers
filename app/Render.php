<?php

namespace ITWorkersApp;

class Render
{
    static public function Show($data)
    {
        foreach ($data as $item => $value) {
            echo $item.": ";
            echo $value." | ";
        }
    }
}
<?php
require_once ('autoload.php');

interface NormalizerInterface 
{
    public static function createFromRow($row);
}

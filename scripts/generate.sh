#!/bin/bash/

controller()
{
    controller_name=`echo $($n:0:1)|tr '[:lower:]' '[:upper:]'`

    content="<?php defined('SYSPATH') OR die('No direct access allowed.');\nclass"+$name+"_Controller extends Controller\n}"
    $content < touch application/controllers/$controller_name.php 
}

model()
{
    echo ${1:0:1}| tr '[:lower:]' '[:upper:]'
    echo 
     
    
    
    #content="<?php defined('SYSPATH') OR die('No direct access allowed.');\nclass"+$model_name+"_Model extends Model\n}"
    #$content < touch application/models/$model_name.php
}

view()
{
    view_name=`echo $($n:0:1)|tr '[:lower:]' '[:upper:]'`

    content="<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">\n<html>\n<head>\n</head>\n<body>\n</body>\n</html>"
    $content < touch application/views/$view_name.php
}

kurwa()
{
    echo "$1 kurwa mać"
}

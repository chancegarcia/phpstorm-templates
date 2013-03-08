<?php
#if(${Package})#end
#if(${Subpackage})#end
#parse("chance license.php")

namespace ${Namespace};

use Zend\Form\Form,
    Zend\Form\Element;

class ${NAME}
    extends #if(${Extends} == "")Form#else${Extends}#end
    #if(${Implements} != "")implements ${Implements}#end
{
    public function init()
    {
        
    }
}


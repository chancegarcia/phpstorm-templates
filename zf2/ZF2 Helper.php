<?php
#if(${Package})#end
#if(${Subpackage})#end
#parse("chance license.php")

namespace ${Namespace};

use Zend\View\Helper\AbstractHelper;

class ${NAME}
    extends #if(${Extends} == "")AbstractHelper#else${Extends}#end
    #if(${Implements} != "")implements ${Implements}#end
{
    public function __invoke()
    {
        
    }
}


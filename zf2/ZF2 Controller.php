<?php
#if(${Package})#end
#parse("chance license.php")

namespace ${Namespace};

use Zend\Mvc\Controller\\${Controller},
    Zend\View\Model\ViewModel#if(${Use} != ''),
    ${Use}#end;

class ${NAME}
    extends ${Controller}
    #if(${Implements} != "")implements ${Implements}#end
{
    public function indexAction()
    {
        
    }
    
    public function notFoundAction()
    {
        //@todo need to trace and find a listener to have it redirect all actions not found
        \$this->plugin('redirect')->toRoute('error/404');
    }
}


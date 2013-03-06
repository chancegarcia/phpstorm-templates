<?php
#if(${Package})#end
#parse("chance license.php")

namespace ${Namespace};

use ${Use};

class ${NAME}
    #if(${Extends} != "")extends ${Extends}#end
    #if(${Implements} != "")implements ${Implements}#end
{

}


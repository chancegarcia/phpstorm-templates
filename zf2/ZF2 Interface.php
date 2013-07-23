<?php
#if(${Package})#end
#if(${Subpackage})#end
#parse("chance license.php")

namespace ${Namespace};

#if(${Use} != "")use ${Use};
#end
interface ${NAME}
    #if(${Extends} != "")extends ${Extends}#end
    #if(${Implements} != "")implements ${Implements}#end
{

}


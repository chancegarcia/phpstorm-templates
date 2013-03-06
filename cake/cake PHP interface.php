<?php
#parse("chance license.php")
#if(${Package})#end
interface ${ClassName}#if(${ExtraClassInfo} != "")_${ExtraClassInfo}#end
    #if(${Extends} != "")extends ${Extends}#end
{
    
}

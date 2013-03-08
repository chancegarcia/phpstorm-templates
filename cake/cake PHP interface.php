<?php
#parse("chance license.php")
#if(${Package})#end
#if(${Subackage})#end
interface ${ClassName}#if(${ExtraClassInfo} != "")_${ExtraClassInfo}#end
    #if(${Extends} != "")extends ${Extends}#end
{
    
}

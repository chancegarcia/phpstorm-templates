<?php
#parse("chance license.php")
#if(${Subackage})#end

class ${Package}_#if(${ExtraClassInfo} != "")_${ExtraClassInfo}#end${NAME}
    #if(${Extends} != "")extends ${Extends}#end
    #if(${Implements} != "")implements ${Implements}#end
{

}


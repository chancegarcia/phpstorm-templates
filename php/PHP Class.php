<?php
#parse("chance license.php")

class ${Package}_#if(${ExtraClassInfo} != "")_${ExtraClassInfo}#end${NAME}
    #if(${Extends} != "")extends ${Extends}#end
    #if(${Implements} != "")implements ${Implements}#end
{

}


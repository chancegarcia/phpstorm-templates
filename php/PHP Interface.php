<?php
#parse("chance license.php")

interface ${Package}_#if(${ExtraClassInfo} != "")${ExtraClassInfo}_#end${NAME}
    #if(${Extends} != "")extends ${Extends}#end
{

}


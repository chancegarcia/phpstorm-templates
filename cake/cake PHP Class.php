<?php
#parse("chance license.php")
#if(${Package})#end
#if(${Subackage})#end
class ${ClassName}#if(${ExtraClassInfo} != "")_${ExtraClassInfo}#end
    #if(${Extends} != "")extends ${Extends}#end
    #if(${Implements} != "")implements ${Implements}#end
{
    public \$name = '${ClassName}';
    public \$useDbConfig = '${DbConfig}';
}

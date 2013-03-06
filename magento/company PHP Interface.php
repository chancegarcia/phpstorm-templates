<?php
#parse("Company license.php")

interface Company_${Module}_#if(${ExtraClassInfo} != "")${ExtraClassInfo}_#end${NAME}
    #if(${Extends} != "")extends ${Extends}#end
{

}


<?php
#parse("CompanyC license.php")
 
class Company_${Module}_#if(${ExtraClassInfo} != "")${ExtraClassInfo}_#end${NAME}
    #if(${Extends} != "")extends ${Extends}#end
    #if(${Implements} != "")implements ${Implements}#end
{

}


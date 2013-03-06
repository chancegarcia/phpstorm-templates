<?php
#if(${Package})#end
#parse("chance license.php")

namespace ${Namespace};

use Zend\Db\TableGateway\TableGateway,
    Zend\Db\Adapter\Adapter,
    Zend\Db\ResultSet\ResultSet;

class ${NAME}
    extends TableGateway
    #if(${Implements} != "")implements ${Implements}#end
{
    public function __construct(Adapter \$adapter = null, \$databaseSchema = null,
        ResultSet \$selectResultPrototype = null)
    {
        return parent::__construct('${TableName}', \$adapter, \$databaseSchema,
            \$selectResultPrototype);
    }

    public function fetchAll()
    {
        \$resultSet = \$this->select();
        return \$resultSet;
    }
    
    #set( $tmp = ${TableName})
    #set( $upper = $tmp.substring(0,1).toUpperCase() )
    #set( $rest = $tmp.substring(1))
    #set( $cappedTableName = "$upper$rest" )
    
    public function get$cappedTableName(\$id)
    {
        \$id  = (int) \$id;
        \$rowset = \$this->select(array('id' => \$id));
        \$row = \$rowset->current();
        if (!\$row) {
            throw new \Exception("Could not find row \$id");
        }
        return \$row;
    }
    
    public function add$cappedTableName(\$data)
    {
        \$this->insert(\$data);
    }
    
    public function update$cappedTableName(\$id, \$data)
    {
        \$this->update(\$data, array('id' => \$id));
    }
    
    public function delete$cappedTableName(\$id)
    {
        \$this->delete(array('id' => \$id));
    }
}


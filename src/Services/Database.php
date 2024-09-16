<?php

use Services\Intefaces\IDatabase;

//TODO: This class will be the connection and interaction with the db layer
final class Database implements IDatabase
{
    public function __construct(Type $var = null) {
        $this->var = $var;
    }
    function execute(string $sql)
    {
        return $this->db->execute($sql);
    }
    function query(string $sql)
    {
        return $this->db->query($sql);
    }
    function resultSet() : array
    {
        return $this->db->resultSet();
    }
}

<?php

namespace JacsonSantos\Controllers;

class BeerController
{
    private $connection;

    public function __construct(\PDO $connection)
    {
        $this->connection = $connection;
    }

    public function getIndex()
    {
        $statement = $this->connection->query("SELECT * FROM Beers");

        $data = $statement->fetchAll(\PDO::FETCH_ASSOC);

        return json_encode($data);
    }
}
<?php

// This class is focussed on dealing with queries for one type of data
// That allows for easier re-using and it's rather easy to find all your queries
// This technique is called the repository pattern
class GunplaRepository
{
    private DatabaseManager $databaseManager;

    // This class needs a database connection to function
    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }

    public function create($name, $grade, $series, $date): void
    {
        $name = $_POST["name"] ?? '';
        $grade = $_POST["grade"] ?? '';
        $series = $_POST["series"] ?? '';
        $date = $_POST["date"] ?? '';


        try {
            $query = "INSERT INTO gundam (Name, Grade, Series, Date) VALUES (?, ?, ?, ?)";
            $statement = $this->databaseManager->connection->prepare($query);
            $statement->execute([$name, $grade, $series, $date]);
        } catch (PDOException $error) {
            echo $error->getMessage();
        }
    }

    // Get one
    public function find(): array
    {

    }

    // Get all
    public function get(): array
    {
        try {
            
            $connection = $this->databaseManager->connection;
        // TODO: Create an SQL query
            $query = "SELECT * FROM gundam";

            $statement = $connection->query($query);

            $result = $statement->fetchAll();
            
            return $result;
            } catch (PDOException $error) {
            echo "Error: " . $error->getMessage();
            return [];
            }

        // TODO: Use your database connection (see $databaseManager) and send your query to your database.
        // TODO: fetch your data at the end of that action.
        // TODO: replace dummy data by real one
        // return [
        //     ['name' => 'dummy one'],
        //     ['name' => 'dummy two'],
        // ];

        // We get the database connection first, so we can apply our queries with it
        // return $this->databaseManager->connection-> (runYourQueryHere)
    }

    public function update(): void
    {

    }

    public function delete(): void
    {

    }

}
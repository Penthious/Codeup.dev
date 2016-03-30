<?php

// __DIR__ is a *magic constant* with the directory path containing this file.
// This allows us to correctly require_once Model.php, no matter where this file is being required from.
require_once __DIR__ . '/Model.php';

class User extends Model
{
    /** Insert a new entry into the database */
    protected function insert()
    {
        // @TODO: Use prepared statements to ensure data security
        self::dbConnect();
        $stmt = self::$dbc->prepare('INSERT INTO users_table(first_name,last_name,email,stored_password)
        VALUES (:first_name,:last_name,:email,:stored_password)');
        foreach ($this->attributes as $key=>$value) {
            $stmt->bindValue(":$key", $value, PDO::PARAM_STR);
        }

        $stmt->execute();

        $lastId = self::$dbc->lastInsertId();

        $this->id=$lastId;
        var_dump($this->attributes);

        // @TODO: You will need to iterate through all the attributes to build the prepared query

        // @TODO: After the insert, add the id back to the attributes array
        //        so the object properly represents a DB record
    }

    /** Update existing entry in the database */
    protected function update()
    {
        // @TODO: Use prepared statements to ensure data security
        self::dbConnect();
        $stmt = self::$dbc->prepare('UPDATE users_table SET first_name = :first_name, last_name = :last_name, email = :email, stored_password = :stored_password WHERE id =:id');
        foreach ($this->attributes as $key=>$value) {
            $stmt->bindValue(":$key", $value, PDO::PARAM_STR);
        }
        $stmt->execute();

        // @TODO: You will need to iterate through all the attributes to build the prepared query
    }

    /**
     * Find a single record in the DB based on its id
     *
     * @param int $id id of the user entry in the database
     *
     * @return User An instance of the User class with attributes array set to values from the database
     */
    public static function find($id)
    {
        // Get connection to the database
        self::dbConnect();
        $query = "SELECT * FROM users_table WHERE id=:id";
        $stmt = self::$dbc->prepare($query);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        // @TODO: Create select statement using prepared statements

        // @TODO: Store the result in a variable named $result

        // The following code will set the attributes on the calling object based on the result variable's contents
        $instance = null;
        if ($result) {
            $instance = new static($result);
        }
        return $instance;
    }

    /**
     * Find all records in a table
     *
     * @return User[] Array of instances of the User class with attributes set to values from database
     */
    public static function all()
    {
        self::dbConnect();
        $stmt = self::$dbc->query("SELECT * FROM users_table");
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $results;
        // @TODO: Learning from the find method, return all the matching records
    }
    public function createTable(){


    }

}

<?php 
class makeDB{

    public static function get_make()
    {
        global $db;
        $query = 'SELECT * FROM makes ORDER BY Make';
        $statement = $db -> prepare($query);
        $statement->execute();
        $make = $statement->fetchall();
        $statement-> closeCursor();
        return $make;
    }

    public static function get_make_ID()
    {
        global $db;
        $query = 'SELECT * FROM makes ORDER BY ID';
        $statement = $db -> prepare($query);
        $statement->execute();
        $make = $statement->fetchall();
        $statement-> closeCursor();
        return $make;
    }

    public static function add_make($make_name)
    {
        global $db;
        $query = 'INSERT INTO makes (Make) VALUES (:makeName)';
        $statement = $db -> prepare($query);
        $statement -> bindValue(':makeName', $make_name);
        $statement->execute();
        $statement-> closeCursor();
    }

    public static function delete_make($makeID)
    {
        global $db;
        $query ='DELETE FROM makes WHERE ID = :make_id';
        $statement = $db -> prepare($query);
        $statement -> bindValue(':make_id', $makeID);
        $statement->execute();
        $statement-> closeCursor();
    }
}
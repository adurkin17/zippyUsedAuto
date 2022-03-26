<?php 
class typeDB{

    public static function get_type()
    {
        global $db;
        $query = 'SELECT * FROM type ORDER BY Type';
        $statement = $db -> prepare($query);
        $statement->execute();
        $type = $statement->fetchall();
        $statement-> closeCursor();
        return $type;
    }

    public static function get_type_ID()
    {
        global $db;
        $query = 'SELECT * FROM type ORDER BY ID';
        $statement = $db -> prepare($query);
        $statement->execute();
        $type = $statement->fetchall();
        $statement-> closeCursor();
        return $type;
    }

    public static function add_type($type_name)
    {
        global $db;
        $query = 'INSERT INTO type (Type) VALUES (:typeName)';
        $statement = $db -> prepare($query);
        $statement -> bindValue(':typeName', $type_name);
        $statement->execute();
        $statement-> closeCursor();
    }

    public static function delete_type($typeID)
    {
        global $db;
        $query ='DELETE FROM type WHERE ID = :type_id';
        $statement = $db -> prepare($query);
        $statement -> bindValue(':type_id', $typeID);
        $statement->execute();
        $statement-> closeCursor();
    }
}
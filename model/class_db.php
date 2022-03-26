<?php 
class classDB{


    public static function get_new_class()
    {
        global $db;
        $query = 'SELECT * FROM class ORDER BY Class';
        $statement = $db -> prepare($query);
        $statement->execute();
        $class = $statement->fetchall();
        $statement-> closeCursor();
        return $class;
    }

    public static function get_new_class_ID()
    {
        global $db;
        $query = 'SELECT * FROM class ORDER BY ID';
        $statement = $db -> prepare($query);
        $statement->execute();
        $class = $statement->fetchall();
        $statement-> closeCursor();
        return $class;
    }

    public static function add_class($class_name)
    {
        global $db;
        $query = 'INSERT INTO class (Class) VALUES (:className)';
        $statement = $db -> prepare($query);
        $statement -> bindValue(':className', $class_name);
        $statement->execute();
        $statement-> closeCursor();
    }

    public static function delete_class($classID)
    {
        global $db;
        $query ='DELETE FROM class WHERE ID = :class_id';
        $statement = $db -> prepare($query);
        $statement -> bindValue(':class_id', $classID);
        $statement->execute();
        $statement-> closeCursor();
    }
}
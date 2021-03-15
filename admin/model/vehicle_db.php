<?php
    function get_vehicle_by_price()
    {
        global $db;
        $query = 'SELECT V.ID,V.Year,V.Model,V.Price,C.Class,M.Make,T.type FROM vehicle V 
            LEFT JOIN class C ON V.classID = C.ID LEFT JOIN type T ON V.typeID = T.ID 
            LEFT JOIN makes M ON V.makeID = M.ID ORDER BY Price DESC ';
        $statement = $db -> prepare($query);
        $statement->execute();
        $vehicle = $statement->fetchall();
        $statement-> closeCursor(); 
        return $vehicle;
    }

    function get_vehicle_by_year()
    {
        global $db;
        $query = 'SELECT V.ID,V.Year,V.Model,V.Price,C.Class,M.Make,T.type FROM vehicle V 
            LEFT JOIN class C ON V.classID = C.ID LEFT JOIN type T ON V.typeID = T.ID 
            LEFT JOIN makes M ON V.makeID = M.ID ORDER BY Year DESC ';
        $statement = $db -> prepare($query);
        $statement->execute();
        $vehicle = $statement->fetchall();
        $statement-> closeCursor(); 
        return $vehicle;
    }

    function get_vehicle_by_make_year($makeID)
    {
        global $db;
        $query = 'SELECT V.ID,V.Year,V.Model,V.Price,C.Class,M.Make,T.type FROM vehicle V 
            LEFT JOIN class C ON V.classID = C.ID LEFT JOIN type T ON V.typeID = T.ID 
            LEFT JOIN makes M ON V.makeID = M.ID WHERE makeID = :make_id ORDER BY Year DESC';
        $statement = $db -> prepare($query);
        $statement -> bindValue(':make_id', $makeID);
        $statement->execute();
        $vehicle = $statement->fetchall();
        $statement-> closeCursor(); 
        return $vehicle;
    }
    function get_vehicle_by_make_price($makeID)
    {
        global $db;
        $query = 'SELECT V.ID,V.Year,V.Model,V.Price,C.Class,M.Make,T.type FROM vehicle V 
            LEFT JOIN class C ON V.classID = C.ID LEFT JOIN type T ON V.typeID = T.ID 
            LEFT JOIN makes M ON V.makeID = M.ID WHERE M.ID = :make_id ORDER BY Price DESC';
        $statement = $db -> prepare($query);
        $statement -> bindValue(':make_id', $makeID);
        $statement->execute();
        $vehicle = $statement->fetchall();
        $statement-> closeCursor(); 
        return $vehicle;
    }
    function get_vehicle_by_type_year($makeID)
    {
        global $db;
        $query = 'SELECT V.ID,V.Year,V.Model,V.Price,C.Class,M.Make,T.type FROM vehicle V 
            LEFT JOIN class C ON V.classID = C.ID LEFT JOIN type T ON V.typeID = T.ID 
            LEFT JOIN makes M ON V.makeID = M.ID WHERE T.ID = :type_id ORDER BY Year DESC';
        $statement = $db -> prepare($query);
        $statement -> bindValue(':type_id', $typeid);
        $statement->execute();
        $vehicle = $statement->fetchall();
        $statement-> closeCursor(); 
        return $vehicle;
    }
    function get_vehicle_by_type_price($typeID)
    {
        global $db;
        $query = 'SELECT V.ID,V.Year,V.Model,V.Price,C.Class,M.Make,T.type FROM vehicle V 
            LEFT JOIN class C ON V.classID = C.ID LEFT JOIN type T ON V.typeID = T.ID 
            LEFT JOIN makes M ON V.makeID = M.ID WHERE T.ID = :type_id ORDER BY Price DESC';
        $statement = $db -> prepare($query);
        $statement -> bindValue(':type_id', $typeID);
        $statement->execute();
        $vehicle = $statement->fetchall();
        $statement-> closeCursor(); 
        return $vehicle;
    }
    function get_vehicle_by_class_year($classID)
    {
        global $db;
        $query = 'SELECT V.ID,V.Year,V.Model,V.Price,C.Class,M.Make,T.type FROM vehicle V 
            LEFT JOIN class C ON V.classID = C.ID LEFT JOIN type T ON V.typeID = T.ID 
            LEFT JOIN makes M ON V.makeID = M.ID WHERE C.ID = :class_id ORDER BY Year DESC';
        $statement = $db -> prepare($query);
        $statement -> bindValue(':class_id', $classID);
        $statement->execute();
        $vehicle = $statement->fetchall();
        $statement-> closeCursor(); 
        return $vehicle;
    }
    function get_vehicle_by_class_price($classID)
    {
        global $db;
        $query = 'SELECT V.ID,V.Year,V.Model,V.Price,C.Class,M.Make,T.type FROM vehicle V 
            LEFT JOIN class C ON V.classID = C.ID LEFT JOIN type T ON V.typeID = T.ID 
            LEFT JOIN makes M ON V.makeID = M.ID WHERE C.ID = :class_id ORDER BY Price DESC' ;
        $statement = $db -> prepare($query);
        $statement -> bindValue(':class_id', $classID);
        $statement->execute();
        $vehicle = $statement->fetchall();
        $statement-> closeCursor(); 
        return $vehicle;
    }

    function delete_vehicle($vehicle_id) {
        global $db;
        $query = 'DELETE FROM vehicle WHERE ID = :vehicle_id';
        $statement = $db -> prepare($query);
        $statement -> bindValue(':vehicle_id', $vehicle_id);
        $statement->execute();
        $statement-> closeCursor();
        }

    function add_vehicle($year,$model,$price, $typeID, $makeID,$classID ) {
        global $db;
        $query = 'INSERT INTO vehicle (year,model,price,typeID,makeID,classID) VALUES (:year,:model,:price,:type_id,:make_id,:class_id)';
        $statement = $db -> prepare($query);
        $statement -> bindValue(':year', $year);
        $statement -> bindValue(':model', $model);
        $statement -> bindValue(':price', $price);
        $statement -> bindValue(':type_id', $typeID);
        $statement -> bindValue(':make_id', $makeID);
        $statement -> bindValue(':class_id', $classID);
        $statement->execute();
        $statement-> closeCursor();
        }
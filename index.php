<?php
    require('..\model\database.php');
    require('..\admin\model\vehicle_db.php');
    require('..\admin\model\makes_db.php');
    require('..\admin\model\type_db.php');
    require('..\admin\model\class_db.php');

    $makeID = filter_input(INPUT_POST, 'makeID', FILTER_VALIDATE_INT);
    $classID = filter_input(INPUT_POST, 'classID', FILTER_VALIDATE_INT);
    $typeID = filter_input(INPUT_POST, 'typeID', FILTER_VALIDATE_INT);
    $action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING);
    if (!$action) {
        $action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
            if(!$action)
            {
                $action = '';
            }
    }

    switch($action) {
        case "vehicle_price":
            if($classID)
            {
                $vehicle = get_vehicle_by_class_price($classID);
            }
            else if ($makeID)
            {
                $vehicle = get_vehicle_by_make_price($makeID);
            }
            else if ($typeID)
            {
                $vehicle = get_vehicle_by_type_price($typeID);
            }
            else
            {
                $vehicle = get_vehicle_by_price();
            }
            $make = get_make();
            $class = get_new_class();
            $type = get_type();
            include('autoFrontPage.php');
            break;
        case "vehicle_year":
            if($classID)
            {
                $vehicle = get_vehicle_by_class_year($classID);
            }
            else if ($makeID)
            {
                $vehicle = get_vehicle_by_make_year($makeID);
            }
            else if ($typeID)
            {
                $vehicle = get_vehicle_by_type_year($typeID);
            }
            else
            {
                $vehicle = get_vehicle_by_year();
            }
            $make = get_make();
            $class = get_new_class();
            $type = get_type();
            include('autoFrontPage.php');
            break;
        default:
            $make = get_make();
            $class = get_new_class();
            $type = get_type();
            $vehicle = get_vehicle_by_price();
            include ('autoFrontPage.php');
    }


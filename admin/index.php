<?php
    require('model/database.php');
    require('model/vehicle_db.php');
    require('model/makes_db.php');
    require('model/type_db.php');
    require('model/class_db.php');

    $makeID = filter_input(INPUT_POST, 'makeID', FILTER_VALIDATE_INT);
    $classID = filter_input(INPUT_POST, 'classID', FILTER_VALIDATE_INT);
    $typeID = filter_input(INPUT_POST, 'typeID', FILTER_VALIDATE_INT);
    $vehicleID = filter_input(INPUT_POST, 'vehicleID', FILTER_VALIDATE_INT);
    $class_name = filter_input(INPUT_POST, 'class_name', FILTER_SANITIZE_STRING);
    $type_name = filter_input(INPUT_POST, 'type_name', FILTER_SANITIZE_STRING);
    $make_name = filter_input(INPUT_POST, 'make_name', FILTER_SANITIZE_STRING);
    $price = filter_input(INPUT_POST, 'price', FILTER_SANITIZE_STRING);
    $year = filter_input(INPUT_POST, 'year', FILTER_SANITIZE_STRING);
    $model = filter_input(INPUT_POST, 'model', FILTER_SANITIZE_STRING);

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
            include('frontPage.php');
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
            include('frontPage.php');
            break;
        case "vehicle":
            $make = get_make();
            $class = get_new_class();
            $type = get_type();
            include('vehicle_add.php');
            break;
        case "list_class":
            $class = get_new_class_ID();
            include('class_list.php');
            break;
        case "list_make":
            $make = get_make_ID();
            include('make_list.php');
            break;
        case "list_type":
            $type = get_type_ID();
            include('type_list.php');
            break;
        case "add_class":
            add_class($class_name);
            header("Location: .?action=list_class");
            break;
        case "add_type":
            add_type($type_name);
            header("Location: .?action=list_type");
            break;
        case "add_make":
            add_make($make_name);
            header("Location: .?action=list_make");
            break;
        case "delete_class":
            delete_class($classID);
            header("Location: .?action=list_class");
            break;
        case "delete_make":
            delete_make($makeID);
            header("Location: .?action=list_make");
            break;
        case "delete_type":
            delete_type($typeID);
            header("Location: .?action=list_type");
            break;
        case "add_vehicle":
            add_vehicle($year,$model,$price, $typeID, $makeID,$classID);
            header("Location: .?action=vehicle");
            break;
        case"delete_vehicle":
            delete_vehicle($vehicleID);
            header("Location: .?action=front_page");
            break;
        default:
            $make = get_make();
            $class = get_new_class();
            $type = get_type();
            $vehicle = get_vehicle_by_price();
            include ('frontPage.php');
    }

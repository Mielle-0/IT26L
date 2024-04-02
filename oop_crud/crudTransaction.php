<?php
//start session
session_start();

//including the database connection file
include_once('Crud.php');

if (isset($_POST['action']))
    $action = $_POST['action'];
else
    $action = $_GET['action'];

switch ($_POST['action']) {


    case "edit":
        //getting the id
        $id = $_GET['id'];

        $crud = new Crud();

        if (isset($_POST['edit'])) {
            $firstname = $crud->escape_string($_POST['firstname']);
            $lastname = $crud->escape_string($_POST['lastname']);
            $address = $crud->escape_string($_POST['address']);

            //update data
            $sql = "UPDATE members SET firstname = '$firstname', lastname = '$lastname', address = '$address' WHERE id = '$id'";

            if ($crud->execute($sql)) {
                $_SESSION['message'] = 'Member updated successfully';
            } else {
                $_SESSION['message'] = 'Cannot update member';
            }

            header('location: index.php');
        } else {
            $_SESSION['message'] = 'Select user to edit first';
            header('location: index.php');
        }

        break;



    case 'delete':

        if (isset($_GET['id'])) {

            //getting the id
            $id = $_GET['id'];

            $crud = new Crud();

            //delete data
            $sql = "DELETE FROM members WHERE id = '$id'";

            if ($crud->execute($sql)) {
                $_SESSION['message'] = 'Member deleted successfully';
            } else {
                $_SESSION['message'] = 'Cannot delete member';
            }

            header('location: index.php');
        } else {
            $_SESSION['message'] = 'Select user to delete first';
            header('location: index.php');
        }
        break;








    case 'add':

        $crud = new Crud();

        if (isset($_POST['add'])) {
            $firstname = $crud->escape_string($_POST['firstname']);
            $lastname = $crud->escape_string($_POST['lastname']);
            $address = $crud->escape_string($_POST['address']);
            $gender = $crud->escape_string($_POST['age']);
            $gender = $crud->escape_string($_POST['gender']);

            //insert data to database
            $sql = "INSERT INTO member (firstname, lastname, address, age, gender) VALUES ('$firstname','$lastname','$address','$age','$gender')";

            if ($crud->execute($sql)) {
                $_SESSION['message'] = 'Member added successfully';
            } else {
                $_SESSION['message'] = 'Cannot add member';
            }

            header('location: index.php');
        } else {
            $_SESSION['message'] = 'Fill up add form first';
            header('location: index.php');
        }
        break;
        // default:
        //code block
}

function delete()
{
}

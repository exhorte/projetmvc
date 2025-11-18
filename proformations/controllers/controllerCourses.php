<?php

include_once('models/modelCourses.php');

function addOneCourse(){
    if (isset($_POST['enregistrer'])) {
        if (!empty($_POST['courseCode']) && !empty($_POST['courseTitle']) && !empty($_POST['courseLangage'])) {
            addCourses($_POST['courseCode'] ,$_POST['courseTitle'] ,$_POST['courseLangage']);
        }else {
            echo "Tout les champs sont requis";
        }
    }
    require_once('views/viewCourse.php');
}



function getAllCourses(){
    $resultGetCourses = getCourses();
    if (!$resultGetCourses) {
        $message = "Action invalide !";
    } else {
        $nb_courses = $resultGetCourses->rowCount();
        if ($nb_courses == 0) {
            $message = "Liste des cours vide !";
            addOneCourse();
        }else {
            require_once('views/viewAllCourses.php');
        }
    }

    $resultGetCourses->closeCursor();
}

?>
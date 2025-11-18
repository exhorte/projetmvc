<?php

include_once('models/model.php');

function addCourses($courseCode, $courseTitle, $courseLangage){
    $bddPDO = connexionBDD();

    $requete = $bddPDO->prepare('INSERT INTO courses(courseCode, courseTitle, courseLangage)
    VALUES (:courseCode, :courseTitle, :courseLangage)');

    $requete->bindvalue(':courseCode', $courseCode);
    $requete->bindvalue(':courseTitle', $courseTitle);
    $requete->bindvalue(':courseLangage', $courseLangage);

    $result = $requete->execute();

    return $result;
}


function getCourses(){
    $bddPDO = connexionBDD();

    $requete = "SELECT * FROM courses ORDER BY courseId ASC"; 
    $resultGetCourses = $bddPDO->query($requete);
    return $resultGetCourses;
}

?>
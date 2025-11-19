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

function getCourse($courseId) {
    $bddPDO = connexionBDD();
    $requete = "SELECT * FROM courses WHERE courseId = $courseId";
    $result = $bddPDO->query($requete);
    $data = $result->fetch(PDO::FETCH_ASSOC);
    return $data;
}

function updateCourse($id, $code, $title, $lang) {
    $pdo = connexionBDD();
    $stmt = $pdo->prepare("UPDATE courses 
                           SET courseCode=?, courseTitle=?, courseLangage=? 
                           WHERE courseId=?");
    return $stmt->execute([$code, $title, $lang, $id]);
}

?>
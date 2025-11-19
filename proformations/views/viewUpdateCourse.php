<?php
require_once('header.html');

if (isset($message)) { echo $message;}
?>

<!-- <form action="controllerCourses/getUpdateCourse/" method="post"> -->
<form action="controllerCourses/setUpdateCourse/<?=$data['courseId']?>" method="post">

    <center>
        <h2>Modification d'un cours</h2>
        <table>
            <tr>
                <td>Code:</td>
                <td><input type="text" name="courseCode" size="50" maxlength="150" value="<?=$data['courseCode']?>" id="" ></td>
            </tr>
            <tr>
                <td>Titre:</td>
                <td><input type="text" name="courseTitle" size="50" maxlength="50" value="<?=$data['courseTitle']?>" id="" ></td>
            </tr>
            <tr>
                <td>Langue:</td>
                <td><input type="text" name="courseLangage" size="50" maxlength="50" value="<?=$data['courseLangage']?>" id="" ></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="reset" name="effacer" value="Effacer">
                    <input type="submit" name="update" value="Enregistrer">
                </td>
            </tr>
        </table>
    </center>
    <input type="hidden" name="id" value="<?=$data['courseId']?>">
</form>

<?php require_once('footer.html')?>
<?php
require_once('header.html');

if (isset($message)) { echo $message;}
?>

<h2>Liste de tous les cours</h2>
<h4>Il y'a <?=$nb_courses?> cours</h4>

<table border="1">
    <center>
    <tr>
        <th>code du cours</th>
        <th>Intitule du cours</th>
        <th>Langue d'enseignement</th>
    </tr>

    <?php
    $ligne = $resultGetCourses->fetchAll(PDO::FETCH_NUM);
    foreach ($ligne as $course) {
        echo "<tr>";
        echo "<td>" . $course[1] . "</td>";
        echo "<td>" . $course[2] . "</td>";
        echo "<td>" . $course[3] . "</td>";
        echo "</tr>";
    }
    ?>
    </center>
</table>

    

<?php
require_once('footer.html');
?>
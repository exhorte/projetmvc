<?php
require_once('header.html');
if (isset($message)) echo $message;?>

<h2>Liste de tous les cours</h2>
<h4>Il y'a <?=$nb_courses?> cours</h4>

<table border="1">
    <center>
    <tr>
        <th>code du cours</th>
        <th>Intitule du cours</th>
        <th>Langue d'enseignement</th>
        <th>Modification</th>
    </tr>

    <?php
    $ligne = $resultGetCourses->fetchAll(PDO::FETCH_NUM);
    foreach ($ligne as $valeur) {
        echo "<tr>";
        echo "<td>" . $valeur[1] . "</td>";
        echo "<td>" . $valeur[2] . "</td>";
        echo "<td>" . $valeur[3] . "</td>";
        echo '<td><a href="controllerCourses/getUpdateCourse/' . $valeur[0] . '">Modifier</a></td>';
        echo "</tr>";
    }
    ?>
</table>
</table>

    

<?php
require_once('footer.html');

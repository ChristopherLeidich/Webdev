<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mein Stundenplan</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <p><a href="http://132web.site/student/christopher/index.html">Startseite</a> | <a href="http://132web.site/student/christopher/firstpage.html">About Me</a> | <a href="http://132web.site/student/christopher/vacation.html">Meine liebsten Urlaubsorte</a></p>
        <h1>Mein Stundenplan</h1>
        <table>
            <tr>
                <th>#</th>
                <th>Montag</th>
                <th>Dienstag</th>
                <th>Mittwoch</th>
                <th>Donnerstag</th>
                <th>Freitag</th>
            </tr>
            <tr>
                <th>9:00 Uhr bis 10:30 Uhr</th>
                <td> </td>
                <td>GUI</td>
                <td>Webdev</td>
                <td>Entwicklung mobiler<br>Anwendungen</td>
                <td>Software Qualität</td>
            </tr>
            <tr>
                <th>10:45 Uhr bis 12:15 Uhr</th>
                <td> </td>
                <td>GUI</td>
                <td>Webdev Uebung</td>
                <td>Entwicklung mobiler <br> Anwendungen</td>
                <td>Software Qualität<br>Übung</td>
            </tr>
            <tr>
                <th>12:15 Uhr bis 13:30 Uhr</th>
                <td colspan="5" id="pause">Mittagspause</td>
            </tr>
            <tr>    
                <th>13:30 Uhr bis 14:00 Uhr</th>
                <td>Software Engineering</td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
            </tr>
            <tr>
                <th>14:00 Uhr bis 15:00 Uhr</th>
                <td>Software Enginerring</td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
            </tr>
            <tr>
                <th>15:15 Uhr bis 16:45 Uhr</th>
                <td>Software Engineering Übung</td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
            </tr>
        </table>
        <p>Welche Vorlesung gefällt ihnen derzeit am Besten?</p>
            <form action="http://132web.site/student/christopher/schedule.php" method="post">
              <input type="radio" id="Webdev" name="kurs" value="Webdev">
              <label for="Webdev">132 WEB - Webentwicklung</label><br>
              <input type="radio" id="SWQ" name="kurs" value="SWQ">
              <label for="SWQ">131 SWQ - Softwarequalität</label><br>
              <input type="radio" id="AppDev" name="kurs" value="AppDev">
              <label for="AppDev">Development of Mobile Applications</label><br>
              <input type="radio" id="GUI" name="kurs" value="GUI">
              <label for="GUI">505 GUI - Programmieren Graphischer Oberflächen</label><br>
              <input type="submit" value="Senden" name="Senden">
            </form>
            <br><br>
            <?php
                if (isset($_POST['Senden'])){
                    $radioVal = $_POST["kurs"];

                    if($radioVal == "Webdev"){
                        echo("You chose the first button. Good choice. :D");
                    } else if ($radioVal == "SWQ") {
                        echo("Second, eh?");
                    } else if ($radioVal == "AppDev") {
                        echo("Third, ok?");
                    } else if ($radioVal == "GUI") {
                        echo("Last? You wanna be special?");
                    }
                }
            ?>
    </body>
</html>

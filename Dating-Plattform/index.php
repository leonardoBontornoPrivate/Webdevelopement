<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>DateWay</title>
    <link type="text/css" rel="stylesheet" href="style.css">
    <link type="image/ico" rel="icon" href="Logo.ico">
  </head>
  <body id="body">

    <?php
      $conn = mysqli_connect("localhost", "root", "", "db_registration");

      if(isset($_POST["registrieren"])) {
        $vorname = $_POST["Vorname-Text-PHP"];
        $nachname = $_POST["Repaired-Nachname"];
        $benutzername = $_POST["Benutzername-Text-PHP"];
        $email = $_POST["Email-Text-PHP"];
        $passwort = $_POST["Passwort-Text-PHP"];
        $passwortWiederholen = $_POST["Passwort-Wiederholen-Text-PHP"];

        $query = "INSERT INTO db_values VALUES('', '$vorname', '$nachname', '$benutzername', '$email', '$passwort', '$passwortWiederholen')";
        mysqli_query($conn, $query);

        $sql = "SELECT * FROM db_values";
        $res = $conn->query($sql);

        if($res->num_rows > 0) {
          while($i = $res->fetch_assoc()) {
            echo "ID: ". $i['user']. " - Name: ". $i["name"] . "<br>";
          }
        }
        echo "<p>deine Daten wurden erfolgreich gespeichert</p>";
      }
    ?>

    <div id="head">
      <h1 id="Head-Überschrift">DateWay</h1>
    </div>
    <hr id="trennstrich01">
    <div id="bodyteil">
      <div id="Registrierung">
        <h1 id="Registrierung-Überschrift">Registrierung</h1>
        <hr id="trennstrich02"><br><br>
        <form action="" method="post">
          <p style="float: left; color: red; margin: 1px; margin-top: 4px;">*</p><p id="Vorname-label">Vorname:</p><input name="Vorname-Text-PHP" id="Vorname-Text-CSS" type="text" class="textfields"><br>
          <p style="float: left; color: red; margin: 1px; margin-top: 4px; margin-left: -80px;">*</p><p class="labelstyle" id="Nachname-label">Nachname:</p><input name="Repaired-Nachname" id="Nachname-Text-CSS" type="text" class="textfields"><br>
          <p style="float: left; color: red; margin: 1px; margin-top: 4px; margin-left: -93px;">*</p><p class="labelstyle" id="Benutzername-label">Benutzername:</p><input name="Benutzername-Text-PHP" id="Benutzername-Text-CSS" type="text" class="textfields"><br>
          <p style="float: left; color: red; margin: 1px; margin-top: 4px; margin-left: -119.5px;">*</p><p class="labelstyle" id="Email-Addresse-label">E-Mail-Addresse:</p><input name="Email-Text-PHP" id="Email-Text-CSS" type="text" class="textfields"><br>
          <p style="float: left; color: red; margin: 1px; margin-top: 4px; margin-left: -134px;">*</p><p class="labelstyle" id="Passwort-label">Passwort:</p><input name="Passwort-Text-PHP" id="Passwort-Text-CSS" type="text" class="textfields"><br>
          <p style="float: left; color: red; margin: 1px; margin-top: 4px; margin-left: 0px;">*</p><p class="labelstyle" id="Passwort-Wiederholen-label">Passwort (nochmal):</p><input name="Passwort-Wiederholen-Text-PHP" id="Passwort-Wiederholen-Text-CSS" type="text" class="textfields"><br>
          <p style="float: left; color: red; margin: 1px; margin-top: 4px; margin-left: -157px;">*</p><p class="labelstyle" id="Geschlecht-label">Geschlecht:</p><select name="Geschlecht-PHP" id="Geschlecht-Selection-CSS"><option>--</option><option>Mann</option><option>Frau</option></select><br>
          <p style="float: left; color: red; margin: 1px; margin-top: 9px; margin-left: 10px; font-size: 12px;">*</p><p class="labelstyle" id="Nutzungsbedingungen-akzeptieren-label">Ich habe mir die <a id="Nutzungsbedingungen-öffnen" onclick="nutzungsbedingungenclicköffnen()">Nutzungsbedingungen</a> durchgelesen und akzeptiere sie demendsprechend.</p><br><br><br>
          <input name="Nachname-Text-PHP" id="Nutzungsbedingungen-Checkbox-CSS" type="checkbox" class="textfields">
          <input name="registrieren" type="submit" id="registrieren" value="Registrieren" disabled>
          <br>
        </form>
      </div>
      <div id="Nutzungsbedingungen-Fenster">
        <h1 id="Nutzungsbedingungen-Titel">Nutzungsbedingungen</h1>
        <div id="Nutzungsbedingungen"><p id="Nutzungsbedingungen-Text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Mit dieser Vorlage kann eine Nutzungsbedingung für eine Website erstellt werden. Die Vorlage wurde den Bestimmungen der Datenschutz-Grundverordnung angepasst. Gemäß der Datenschutz-Grundverordnung (DSGVO) sollten Websites mehr Transparenz über den Datenschutz anbieten. Dadurch soll der Schutz von Nutzern gewährleistet werden.

Durch diese Nutzungsbedingung können Nutzer, die auf einer Website (Forum, Blog usw.) verkehren, über die Nutzung des Informationsangebots aufgeklärt werden. Aus den Nutzungsbedingungen können also die wesentlichen Informationen der Betreiber der Website entnommen werden, wie auch die Form und Dauer der Speicherung von Informationen.

Nutzungsbedingungen sind ein einseitig vorformulierter Vertrag, mit dem der Anbieter (der Inhaber der Website) die Nutzer der Website über ihre Rechte und Pflichten informiert. Nutzungsbedingungen sollten nicht mit den Verkaufsbedingungen (bzw. Allgemeinen Geschäftsbedingungen) verwechselt werden.

Allgemeine Geschäftsbedingungen (abgekürzt AGB) sind alle für eine Vielzahl von Verträgen vorformulierten Vertragsbedingungen, die eine Vertragspartei (der Verwender) der anderen Vertragspartei bei Abschluss eines Vertrages stellt.

Zu unterscheiden sind die Nutzungsbedingungen auch von einer Datenschutzerklärung. Eine Datenschutzerklärung beschreibt, wie Daten von einer Organisation verarbeitet werden, das heißt, wie diese Daten gesammelt, genutzt und ob sie an Dritte weitergegeben werden.


WAS SOLLTE BEACHTET WERDEN?

Ein Teil dieses Dokuments enthält Bestimmungen, die gesetzlich vorgeschrieben sind und zwingend angegeben werden müssen. Damit die vertraglichen Bestimmungen der Nutzungsbedingungen rechtskräftig werden, muss vom Anbieter vorgesehen werden, dass der Nutzer die Nutzungsbedingungen problemlos elektronisch akzeptieren kann.

Hier bietet sich an, dem Nutzer diese Möglichkeit zu geben, bevor er die Dienste in Anspruch nimmt. Der Nutzer kann also ein Kästchen ankreuzen, wenn er mit den Nutzungsbedingungen einverstanden ist.

Auf diese Weise wird sichergestellt, dass der Nutzer den Nutzungsbedingungen zustimmt. Zusätzlich kann dadurch im Streitfall die Zustimmung des Nutzers nachgewiesen werden. Es sollte beachtet werden, dass der Kunde für die Wirksamkeit der Nutzungsbedingungen ausdrücklich auf diese hingewiesen werden muss.


WIE WIRD DAS DOKUMENT VERWENDET?

Nachdem die Vorlage entsprechend ausgefüllt wurde, sollte sie in die Website integriert werden. Den Nutzern muss es ermöglicht werden, auf einer einfachen Art und Weise, Zugang zu dieser Website zu bekommen. Dies kann z.B. durch einen Link auf der Homepage, Link in einer Auswahltabelle oder als Anhang in einer E-Mail, wenn ein Kauf oder eine Registrierung erfolgen.


ANWENDBARES RECHT

Bürgerliches Gesetzbuch, Rechtsdienstleistungsgesetz, Telemediengesetz, Urheberrechtsgesetz, Markengesetz, Produkthaftungsgesetz, Datenschutz-Grundverordnung


DIE VORLAGE ÄNDERN?

Sie füllen einen Vordruck aus. Das Dokument wird nach und nach vor Ihren Augen auf Grundlage Ihrer Antworten erstellt.

Am Ende erhalten Sie es in den Formaten Word und PDF. Sie können es ändern und es wiederverwenden.
        </p>
        </div>
        <input type="button" id="Nutzungsbedingungen-akzeptieren-button" onclick="nutzungsbedingungenclickakzeptieren()" value="Akzeptieren">
        <input type="button" id="Nutzungsbedingungen-schliessen-button" onclick="nutzungsbedingungenclickschliessen()" value="Schliessen">
      </div>
    </div>
  </body>
  <script src="script.js"></script>
</html>

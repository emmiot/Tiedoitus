<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ryhmätiedoitus</title>
    </head>
    <body>
        <?php
        echo "Hello world!"
        ?> <br><br>
        <form id='login' action='kirjaudu.php' method='post' accept-charset='UTF-8'>
            <fieldset >
                <legend>Kirjaudu sisään:</legend>

                <label for='username' >Käyttäjätunnus:</label>
                <input type='text' name='tunnus' id='tunnus'  maxlength="40" />

                <br>
                
                <label for='password' >Salasana:</label>
                <input type='password' name='salasana' id='salasana' maxlength="40" />

                <br>
                
                <input type='submit' name='Submit' value='Kirjaudu' />

            </fieldset>
        </form>
    </body>
</html>

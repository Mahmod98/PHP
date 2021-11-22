<!DOCTYPE html>
<html>
    <body>
        <?php
            echo $_POST['fname'];
            echo "<br />";
            echo $_POST['lname'];
            echo "<br />";
            echo $_POST['birthday'];
            echo "<br />";
        ?> 
        <form action="indexx.php" method="post">
            Name: <input type="text" name= "fname"> <br />
            Surname: <input type="text" name= "lname"> <br />
            <label for="birthday">Birthday:</label>
            <input type="date" id="birthday" name="birthday"><br />
            <input type="submit" name= "submit">
        </form>

        <?php
            date_default_timezone_set("Europe/Riga");
            $current_timezone = date_default_timezone_get();
            echo $current_timezone. '<br />';
            echo date("Y-m-d H:i:s")
        ?>
                
    </body>
</html>


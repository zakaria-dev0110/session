<!DOCTYPE html>
<html>
        <?php
            session_start();
            if (!isset($_SESSION['inputs'])) {
                $_SESSION['inputs'] = array();
            }
            if ($_SERVER["REQUEST_METHOD"] == 'POST') {
                array_push($_SESSION['inputs'], $_POST['name']);
            }
        ?>


    <form method="POST">
        <input type="text" name="name" required/>
        <input type="submit" value="Submit"/>
    </form>
    <h1>
        <?php
        echo "<pre>";
        print_r($_SESSION['inputs']);
        echo "</pre>";
        ?>
    </h1>
</html>


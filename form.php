<!doctype html>
<html>

<head>
    <title>Insert data into db</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>

<body>
    <h1>Insert data into Mysql Database using OOPS in PHP | SoftAOX</h1>
    <form method="post">
        <label>Nom</label>
        <input type="text" name="">
        <br />
        <label>Prenom</label>
        <input type="text" name="">
        <br />
        <br />
        <label>Age</label>
        <input type="" name="age">
        <br />
        <br />
        <label>cours_id</label>
        <input type="" name="">
        <br />
        <br />
        <input type="submit" name="submit" value="Submit">

        <span>
            <?php
            if (isset($msg)) {
                echo $msg;
            }
            ?>
        </span>
    </form>
</body>

</html>
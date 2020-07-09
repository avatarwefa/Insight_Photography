<?php
// include $_SERVER['DOCUMENT_ROOT'] . "Config/setup.php";
require "lib/queries.php";
myConnect();
// mysqli_select_db("insight");
error_reporting(E_ALL ^ E_NOTICE);
$notify = "";
$name = $_POST['name'];
$comment = $_POST['comment'];
$submit = $_POST['submit'];
if (isset($_POST['notify_box'])) {
    $notify = $_POST['notify_box'];
}
$dbLink = myConnect();
mysqli_query($dbLink, "SET character_set_client=utf8");
mysqli_query($dbLink, "SET character_set_connection=utf8");

if ($submit) {
    if ($name && $comment) {
        $insert = mysqli_query($dbLink, "INSERT INTO comment (name,comment) VALUES ('$name','$comment') ");
        echo "INSERT INTO comment (name,comment) VALUES ('$name','$comment') ";
        echo "submit roi ne :'(";
    } else {
        echo "please fill out all fields";
    }
}

$dbLink = myConnect();;
mysqli_query($dbLink, "SET character_set_results=utf8");
mb_language('uni');
mb_internal_encoding('UTF-8');

$sql = "SELECT * FROM comment";
echo $sql;
$getquery = mysqli_query($dbLink, $sql);
?>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Comment box</title>
    <style type="text/css">
        body {
            margin: auto 48px;
        }
    </style>
</head>

<body>
    <div>
        <table id="commentTable">
            <colgroup>
                <col width="25%" />
                <col width="75%" />
            </colgroup>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Comment</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($getquery = mysqli_query($dbLink, $sql)) {
                    while ($row = mysqli_fetch_array($getquery)) {
                        echo '<td>' . $row['name'] . '</td>';
                        echo '<td>' . $row['comment'] . '</td>';
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
    <form action="comment.php" method="POST">
        <colgroup>
            <col widht="25%" style="vertical-align:top;" />
            <col widht="75%" style="vertical-align:top;" />
        </colgroup>
        <table>
            <tr>
                <td><label for="name">Name</label></td>
                <td><input type="text" name="name" /></td>
            </tr>
            <tr>
                <td><label for="comment">Comment:</label></td>
                <td><textarea name="comment" rows="10" cols="50"></textarea></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="submit" value="Comment"></td>
            </tr>
        </table>
    </form>
</body>

</html>
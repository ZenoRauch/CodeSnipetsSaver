<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!--own css-->
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="container-fluid">
        <?php
        include("header.html");
        $CONNECTION = mysqli_connect("", "root", "", "codesnippetsaver");


        $html = "<div class='row frame'><div class='col-12'>";
        $html = $html . "<div class='container-fluid'><div class='row'><div class='col-1'>";
        #language
        $html = $html . "<table id='langauge'>";
        $html = $html . "<tr><th><h5> Languages </h5></td></tr>";
        $html = $html . "<tr><td> +++ </td></tr>";
        $sql = "SELECT * FROM language";
        $resLanguages = mysqli_query($CONNECTION, $sql);
        if ($resLanguages == null) {
        } else {
            while($dsatz = mysqli_fetch_assoc($resLanguages)){
                $id = $dsatz["id"];
                $name = $dsatz["name"];
                $html = $html . "<tr><td><a href='?gettopics=$id'> $name </a></td></tr>";
            }
        }
        $html = $html . "";
        $html = $html . "</table></div>";
        #topic
        $html = $html . "<div class='col-1'><table id='topic'>";
        $html = $html . "<tr><th><h5> Topics </h5></th></tr>";
        $html = $html . "<tr><td> +++ </td></tr>";
        $html = $html . "";
        $html = $html . "</table></div>";
        #snippet
        $html = $html . "<div class='col-1'><table id=''codesnippet>";
        $html = $html . "<tr><th></th></tr>";
        $html = $html . "";
        $html = $html . "";
        $html = $html . "</table></div>";


        $html = $html . "</div></div></div>";

        $html = $html . "</div></div>";
        echo $html;
        ?>
    </div>
</body>

</html>
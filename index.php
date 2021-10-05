<?php
class Movie
{
    public $title;
    public $director;
    public $genre;

    public function __construct($_title, $_director, $_genre)
    {
        $this->title = $_title;
        $this->director = $_director;
        $this->genre = $_genre;
    }

    public function getAllInfo()
    {
        $info = [
            'title' => $this->title,
            'director' => $this->director,
            'genre' => $this->genre,
        ];
        return $info;
    }
}

$shutter_island = new Movie("Shutter Island", "Martin Scorsese", "Thriller");
$sinister = new Movie("Sinister", "Scott Derrickson", "Horror");

$shutter_island_details = $shutter_island->getAllInfo();
$sinister_details = $sinister->getAllInfo();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Movies</h1>
    <ul>
        <?php
        foreach ($shutter_island_details as $key => $detail) {
            echo "<li><h3>" . $key . ":</h3> " . $detail . "</li>";
        }
        ?>
    </ul>
    <ul>
        <?php
        foreach ($sinister_details as $key => $detail) {
            echo "<li><h3>" . $key . ":</h3> " . $detail . "</li>";
        }
        ?>
    </ul>
</body>

</html>
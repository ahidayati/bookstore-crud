<?php
include '_header.php';
include 'class/Genre.php';

$i = 1;
$newGenre = new Genre();

$displayGenre = $newGenre->displayAllGenre();

?>

<div class="container">
    <div class="col-6 mx-auto">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead
            <tbody>
            <?php
            foreach ($displayGenre as $genreEach){
            ?>
                <tr>
                    <td><?php echo $i++ ?></td>
                    <td><?php echo $genreEach["name_genre"]; ?></td>
                    <td>edit delete</td>
                </tr>
            <?php
            }
            ?>
            </tbody>
        </table>
    </div>
</div>
<?php
include '_header.php';
include 'class/Type.php';

$i = 1;
$newType = new Type();

$displayType = $newType->displayAllType();

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
            foreach ($displayType as $typeEach){
                ?>
                <tr>
                    <td><?php echo $i++ ?></td>
                    <td><?php echo $typeEach["name_type"]; ?></td>
                    <td>edit delete</td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
    </div>
</div>
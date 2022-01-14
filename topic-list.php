<?php
include '_header.php';
include 'class/Topic.php';

$i = 1;
$newTopic= new Topic();

$displayTopic = $newTopic->displayAllTopic();

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
            foreach ($displayTopic as $topicEach){
                ?>
                <tr>
                    <td><?php echo $i++ ?></td>
                    <td><?php echo $topicEach["name_topic"]; ?></td>
                    <td>edit delete</td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
    </div>
</div>
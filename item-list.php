<?php
include '_header.php';
include 'class/PrintedItem.php';

$i = 1;
$newItem = new PrintedItem();

$displayItem = $newItem->displayAllItem();

?>;

<div class="container">
    <div class="col-6 mx-auto">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>No.</th>
                <th>Title</th>
                <th>Author</th>
                <th>Action</th>
            </tr>
            </thead
            <tbody>
            <?php
            foreach ($displayItem as $itemEach){
                var_dump($itemEach);
                ?>
                <tr>
                    <td><?php echo $i++ ?></td>
                    <td><?php echo $itemEach["title"]; ?></td>
                    <td><?php echo $itemEach["author"]; ?></td>
                    <td>edit delete</td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
    </div>
</div>
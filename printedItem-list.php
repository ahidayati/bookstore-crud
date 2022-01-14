<?php
include '_header.php';
include 'class/PrintedItem.php';

$i = 1;
$newItem = new PrintedItem();

$displayItem = $newItem->displayAllItem();

?>;

<div class="container">
    <div class="col mx-auto">
        <table class="table table-striped">
            <thead>
            <tr class="text-center">
                <th>No.</th>
                <th>Title</th>
                <th>Author</th>
                <th>Genre</th>
                <th>Topic</th>
                <th>Type</th>
                <th>EAN/ISBN</th>
                <th>Publisher</th>
                <th>Published Date</th>
                <th>Stock</th>
                <th>Price</th>
                <th colspan="2"></th>
            </tr>
            </thead
            <tbody>
            <?php
            foreach ($displayItem as $itemEach){
//                var_dump($itemEach);
                ?>
                <tr>
                    <td><?php echo $i++ ?></td>
                    <td><?php echo $itemEach["title"]; ?></td>
                    <td><?php echo $itemEach["author"]; ?></td>
                    <td class="text-center"><?php
                        if (isset($itemEach["name_genre"])) {
                            echo $itemEach["name_genre"];
                        } else {
                            echo "-";
                        }
                    ?></td>
                    <td class="text-center"><?php
                        if (isset($itemEach["name_topic"])) {
                            echo $itemEach["name_topic"];
                        } else {
                            echo "-";
                        }
                    ?></td>
                    <td class="text-center"><?php
                        if (isset($itemEach["name_type"])) {
                            echo $itemEach["name_type"];
                        } else {
                            echo "-";
                        }
                    ?></td>
                    <td class="text-center"><?php
                        if (isset($itemEach["ean_isbn"])) {
                            echo $itemEach["ean_isbn"];
                        } else {
                            echo "-";
                        }
                    ?></td>
                    <td class="text-center"><?php
                        if (isset($itemEach["publisher"])) {
                            echo $itemEach["publisher"];
                        } else {
                            echo "-";
                        }
                    ?></td>
                    <td class="text-end"><?php
                        if (isset($itemEach["published_date"])) {
                            echo date('d-m-Y' , strtotime($itemEach["published_date"]));
                        } else {
                            echo "-";
                        }
                    ?></td>
                    <td class="text-end"><?php echo $itemEach["stock"]; ?></td>
                    <td class="text-end"><?php
                        if (isset($itemEach["price"])) {
                            echo $itemEach["price"]."€";
                        } else {
                            echo "-";
                        }
                    ?></td>
                    <td class="text-center"><a href="printedItem-edit-form.php?edit=<?php echo $itemEach['id'] ?>" title="Edit"><i class="fas fa-edit"></i></a></td>
                    <td class="text-center"><a data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $itemEach['id'] ?>" title="Delete"><i class="far fa-trash-alt"></i></a></td>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal<?php echo $itemEach['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Delete Artist</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Are you sure you want to delete "<?php echo $itemEach['title'] ?>" data?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No, I change my mind</button>
                                    <a type="button" class="btn btn-danger" href="artist-delete.php?remove=<?php echo $artistItem['id'] ?>">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Modal -->

                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
    </div>
</div>

<?php
include '_footer.php';
?>
<div class="col-md-12">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Image</th>
                <th scope="col">Created At</th>
                <th scope="col">Updated At</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
        if (!empty($categories) && is_array($categories)) {
            foreach ($categories as $category) {
                ?>
                <tr>
                    <td><?php echo $category['id']; ?></td>
                    <td><?php echo $category['name']; ?></td>
                    <td><?php echo $category['description']; ?></td>
                    <td>
                        <a href="/imagecate/<?php echo  $category['image']; ?>" target="_blank">
                            <img src="/imagecate/<?php echo  $category['image']; ?>" class="rounded mx-auto d-block" width="150px" alt="">
                        </a>
                    </td>
                    <td><?php echo $category['createdAt']; ?></td>
                    <td><?php echo $category['updatedAt']; ?></td>
                    <td>
                        <a href="./update_category_view.php?id=<?php echo $category['id']; ?>" class="btn btn-primary btn-sm">
                            <i class="fas fa-edit"></i> Edit
                        </a>

                        <a href="./delete_category_logic.php?id=<?php echo $category['id']; ?>" class="btn btn-danger btn-sm">
                            <i class="fas fa-trash"></i> Delete
                        </a>
                    </td>
                </tr>
                <?php
            }
        }
        ?>
        </tbody>
    </table>
</div>
<?php include 'includes/header.php' ?>

<section class="py-5 bg-secondary-subtle">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">All Students Info</div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                            </tr>
                            <?php foreach ($students as $student) { ?>
                                <tr>
                                    <td><?php echo $student['id']; ?></td>
                                    <td><?php echo $student['name']; ?></td>
                                    <td><?php echo $student['email']; ?></td>
                                    <td><?php echo $student['mobile']; ?></td>
                                </tr>
                            <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php' ?>
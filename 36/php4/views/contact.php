<?php include 'includes/header.php' ?>

<section class="py-5 bg-danger-subtle">
    <div class="container">
        <div class="row">
            <div class="col-sm-7 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3>Full Name Program</h3>
                    </div>
                    <div class="card-body">
                        <form action="web.php" method="POST">
                            <div class="row mb-3">
                                <label class="col-md-3">First Name:</label>
                                <div class="col-md-9">
                                    <input type="text" name="first_name" id="" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Last Name:</label>
                                <div class="col-md-9">
                                    <input type="text" name="last_name" id="" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Full Name:</label>
                                <div class="col-md-9">
                                    <!-- <input type="text" name="" id="" class="form-control" value="NIYD"> -->
                                    <input type="text" name="" id="" class="form-control"
                                        value="<?php echo isset($_GET['result']) ? $_GET['result'] : ' '; ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" name="full_name_button" id="" class="btn btn-success"
                                        value="Make Full Name">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php' ?>
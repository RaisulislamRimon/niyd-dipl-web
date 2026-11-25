<?php include 'includes/header.php' ?>

<section class="py-5 bg-success-subtle">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card card-body">
                    <!-- <h1> This is Read More Page </h1> -->
                    <img src="<?php echo $singleProduct['image'] ?>" height="600" alt="">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card card-body">
                    <h1> <?php echo $singleProduct['name']; ?> </h1>
                    <p>TK. <?php echo $singleProduct['price'] ?></p>
                    <p>TK. <?php echo $singleProduct['description'] ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php' ?>
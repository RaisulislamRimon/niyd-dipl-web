<?php include 'includes/header.php' ?>

<section class="py-5 bg-dark-subtle">
    <div class="container">
        <h2 class="text-center"> This is Products page </h2>
        <div class="row">
            <?php foreach ($products as $product) { ?>
                <div class="col-md-3 col-sm-6 mb-3">
                    <div class="card">
                        <!-- <img src="assets/img/tshirt.jpg" alt="tshirt"> -->
                        <img src="<?php echo $product['image'] ?>" height="300" alt="">
                        <div class="card-body">
                            <h4> <?php echo $product['name'] ?> </h4>
                            <!-- <h4> <?php echo $product['id'] ?> </h4> -->
                            <p> TK. <?php echo $product['price'] ?> </p>
                            <a href="web.php?page=read-more&&id=<?php echo $product['id']; ?>" class="btn btn-success">Read
                                More</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <!-- <div class="col-md-3 col-sm-6 mb-3">
                <div class="card">
                    <img src="assets/img/tshirt.jpg" alt="tshirt">
                    <div class="card-body">
                        <h4> This is Products title </h4>
                        <p> TK. 12312 </p>
                        <a href="" class="btn btn-success">Read More</a>
                    </div>
                </div>
            </div> -->
        </div>
    </div>

</section>
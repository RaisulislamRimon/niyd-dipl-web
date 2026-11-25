<?php include "includes/header.php" ?>

<section class="py-5 bg-danger-subtle">
	<div class="container">
		<div class="row">
			<div class="col-sm-7 mx-auto">
				<div class="card">
					<div class="card-header">Odd Even Program</div>
					<div class="card-body">
						<form action="web.php" method="POST">
							<div class="row mb-3">
								<label class="col-md-3">Given Number</label>
								<div class="col-md-9">
									<input type="text" name="given_number" class="form-control">
								</div>
							</div>
							<div class="row mb-3">
								<label class="col-md-3">Result</label>
								<div class="col-md-9">
									<input type="text" value="<?php echo isset($_GET['result']) ? $_GET['result'] : '' ?>" class="form-control">
								</div>
							</div>
							<div class="row mb-3">
								<label class="col-md-3"></label>
								<div class="col-md-9">
									<input type="submit" name="odd_even_btn" class="btn btn-success" value="Make Result">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include "includes/footer.php" ?>
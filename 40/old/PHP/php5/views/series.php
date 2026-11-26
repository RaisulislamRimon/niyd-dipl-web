<?php include "includes/header.php"; ?>

<section class="py-5 bg-danger-subtle">
	<div class="container">
		<div class="row">
			<div class="col-sm-7 mx-auto">
				<div class="card">
					<div class="card-header">Series Program</div>
					<div class="card-body">
						<form action="web.php" method="POST">
							<div class="row mb-3">
								<label class="col-md-3">Starting Number</label>
								<div class="col-md-9">
									<input type="number" name="starting_number" class="form-control">
								</div>
							</div>
							<div class="row mb-3">
								<label class="col-md-3">Ending Number</label>
								<div class="col-md-9">
									<input type="number" value="10" name="ending_number" class="form-control">
								</div>
							</div>
							<div class="row mb-3">
                                <label class="col-md-3">Your Choice</label>
                                <div class="col-md-9">
                                    <label><input type="radio" value="odd" name="choice"/> Odd</label>
                                    <label><input type="radio" value="even" name="choice"/> Even</label>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Result</label>
                                <div class="col-md-9">
                                    <textarea class="form-control"><?php echo isset($_GET['result']) ? $_GET['result'] : ''; ?></textarea>
                                </div>
                            </div>
							<div class="row mb-3">
								<label class="col-md-3"></label>
								<div class="col-md-9">
									<input type="submit" name="series_btn" class="btn btn-success" value="Make Series">
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
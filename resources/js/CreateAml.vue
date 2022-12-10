<template>
	<div>
		
		<div class="card">
			<form action="">
				<div class="card-header">
					<h4>Create AML</h4>
				</div>
				<div class="card-body parent">
					<div class="row mb-4">
						<div class="col">
							<div class="card">
								<div class="card-body">
									<h4 class="text-dark mb-3">Client Information</h4>
									<div class="row">
										<div class="col-6 mb-2">
											<label 
												for="client_id" 
												class="text-dark"
											>Client ID</label>
											<input 
												type="text" 
												class="form-control" 
												id="client_id" 
												value="thinu" 
												readonly 
											/>
										</div>
									</div>
									<div class="row">
										<div class="col">
											<label 
												for="client_id" 
												class="text-dark"
											>Business name</label>
											<input 
												type="text" 
												class="form-control" 
												id="client_id"
											>
										</div>
										<div class="col">
											<label 
												for="client_id" 
												class="text-dark"
											>Client Name</label>
											<input 
												type="text" 
												class="form-control" 
												id="client_id"
											>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row mb-4">
						<div class="col">
							<div class="card">
								<div class="card-body">
									<h4 class="text-dark mb-3">Passport details</h4>
									<div class="row">
										<div class="col">
											<label 
												for="client_id" 
												class="text-dark"
											>Passport expiry date</label>
											<input 
												type="date" 
												class="form-control" 
												id="client_id"
											>
										</div>
										<div class="col">
											<label 
												for="client_id" 
												class="text-dark"
											>Passport proff</label>
											<input 
												type="file" 
												class="form-control" 
												id="client_id"
											>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<div class="card">
								<div class="card-body">
									<h4 class="text-dark mb-3">Address details</h4>
									<div class="row">
										<div class="col">
											<label 
												for="client_id" 
												class="text-dark"
											>Address expiry date</label>
											<input 
												type="date" 
												class="form-control" 
												id="client_id"
											>
										</div>
										<div class="col">
											<label 
												for="client_id" 
												class="text-dark"
											>Address proff</label>
											<input 
												type="file" 
												class="form-control" 
												id="client_id"
											>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="card-footer">
					<input type="submit" name="btn-createAml" class="btn btn-success" value="Create AML">
				</div>
			</form>
		</div>
	</div>
</template>

<script>

</script>

<style>
.parent {
	background: linear-gradient(to bottom, rgb(238, 237, 237), rgb(226, 222, 222));
        color: white;
}
</style>


<template>
	<!-- <div>
		<div class="container">
			<div class="card" id="contant">
				<div class="card-body">
					<div class="card-header">
						<h3>Signup</h3>
					</div>
					<br>
					<form 
						@submit.prevent="userRegister"
						action=""
					>
						<div 
							class="row">
							<div 
								class="col">
								<label 
									for="username" 
									class="form-label"
								>First Name</label>
									<input 
										type="text" 
										class="form-control"
										placeholder="Enter username"
										id="username"
									>
							</div>
							<div 
								class="col">
								<label 
									for="username" 
									class="form-label"
								>Last Name</label>
									<input 
										type="text" 
										class="form-control"
										placeholder="Enter username"
										id="username"
									>
							</div>
						</div>
						<br>
						<div 
							class="row">
							<div 
								class="col">
								<label 
									for="username" 
									class="form-label"
								>User name</label>
									<input 
										type="text" 
										class="form-control"
										placeholder="Enter username"
										v-model="user.username"
										id="username"
									>
							</div>
							<div class="col">
								<label 
									for="username" 
									class="form-label"
								>Email</label>
									<input 
										type="email" 
										class="form-control"
										placeholder="Enter username"
										id="username"
									>
							</div>
						</div>
						<br>
						<div 
							class="row">
							<div 
								class="col">
								<label 
									for="password"
									class="form-label"
								>password</label>
								<input 
									type="password"
									class="form-control" 
									v-model="user.password"
									id="password"
								>
							</div>
							<div 
								class="col">
									<label 
										for="password"
										class="form-label"
									>Confirm password</label>
									<input 
										type="password"
										class="form-control" 
										id="password"
									>
							</div>
						</div>
						<br />
						<div 
							class="row">
							<div 
								class="col">
									<label 
											for="password"
											class="form-label"
										>Address</label>
										<input 
											type="password"
											class="form-control" 
											id="password"
										>
							</div>
							<div 
								class="col">
								<label 
									class="form-label" 
									for="inputGroupSelect01"
								>Role</label>
								<select 
									class="form-select"
									v-model="user.role"
								>
									<option value="admin">Admin</option>
									<option value="staff">staff</option>
								</select>
							</div>
						</div>
					 <p>if you alredy have account <router-link to="/signin">login</router-link></p>
						<br/>
						<button 
							type="submit"
							class="btn btn-primary"
						>Signup</button>
					</form>
				</div>
			</div>
		</div>
	</div> -->
	<div>
		<div class="d-flex justify-content-center">
			<div class="card mt-5 mb-5 w-70">
				<div class="card-header">
					<h3>Register Your Business</h3>
					<p>Please provide all required details to register your business with us</p>
				</div>
				<div class="card-body">
					<div class="row">
						<h6 class="p-2">Business Owner</h6>
					</div>

					<div class="row">
						<div class="col">
							<input type="password" class="form-control" id="password">
							<label class="form-label" for="inputGroupSelect01">First Name</label>
						</div>
						<div class="col">
							<input type="password" class="form-control" id="password">
							<label class="form-label" for="inputGroupSelect01">Last Name</label>
						</div>
					</div>

					<div class="row mt-3">
						<div class="col">
							<div class="row">
								<h6 class="p-2">User Name</h6>
							</div>
							<input type="text" class="form-control" id="password">
						</div>
						<div class="col">
						</div>
					</div>

					<div class="row mt-3">
						<div class="col">
							<div class="row">
								<h6 class="p-2">Contact Number</h6>
							</div>
							<input type="number" class="form-control" id="password">
						</div>
						<div class="col">
						</div>
					</div>

					<div class="row mt-3">
						<div class="row">
							<h6 class="p-2">E-mail</h6>
						</div>
						<div class="col">
							<input type="email" class="form-control" id="password">
							<label class="form-label" for="inputGroupSelect01">example@example.com</label>
						</div>
						<div class="col">
						</div>
					</div>

					<div class="row mt-3">
						<div class="row">
							<h6 class="p-2">Address</h6>
						</div>
						<div class="col">
							<input type="text" class="form-control" id="password">
							<label class="form-label" for="inputGroupSelect01">Street Address</label>
						</div>
					</div>

					<div class="row mt-3">
						<div class="col">
							<input type="text" class="form-control" id="password">
							<label class="form-label" for="inputGroupSelect01">Street Address Line 2</label>
						</div>
					</div>

					<div class="row mt-3">
						<div class="col">
							<input type="text" class="form-control" id="password">
							<label class="form-label" for="inputGroupSelect01">City</label>
						</div>
						<div class="col">
							<input type="text" class="form-control" id="password">
							<label class="form-label" for="inputGroupSelect01">State / Province</label>
						</div>
					</div>
					
					<div class="row mt-3">
						<div class="col">
							<input type="text" class="form-control" id="password">
							<label class="form-label" for="inputGroupSelect01">Postal / Zip Code</label>
						</div>
					</div>

					<div class="row mt-3">
						<div class="col">
							<div class="row">
								<h6 class="p-2">Role</h6>
							</div>
							<select class="form-select" >
								<option value="admin">Admin</option>
								<option value="staff">staff</option>
							</select>
						</div>
					</div>

					<div class="row mt-3">
						<div class="col">
							<div class="row">
								<h6 class="p-2">Comments</h6>
							</div>
							<textarea class="form-control" aria-label="With textarea"></textarea>
						</div>
					</div>
				</div>
				<div class="card-footer">
					<div class="d-flex justify-content-center">
						<button type="submit" class="btn btn-success">Sumit Registration</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
	import fetchData from "./Fetch.js"

	export default {
		name: 'Register',
		data () {
			return {
				user: {}
			}
		},
		methods: {
			userRegister() {
				fetchData({
					url: '/register-user',
					method: 'POST',
					body: this.user,
					success: (res) => {
						console.log(res)
						this.$router.push({
              path: '/signin'
            })
					},
					error: (e) => {
						console.log(e.message)
					}
				})
			}
		}	
	}
</script>

<style>
	#contant {
		margin-top:100px;
	}
	body {
		background:#EDF2F7;
	}
</style>


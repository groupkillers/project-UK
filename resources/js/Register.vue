<template>
	<div>
		<form 
			@submit.prevent="userRegister"
			action=""
		>
			<div 
				class="d-flex justify-content-center"
			>
				<div 
					class="card mt-5 mb-5 w-70"
				>
					<div 
						class="card-header"
					>
						<h3>Register Your Business</h3>
						<p>Please provide all required details to register your business with us</p>
					</div>
					<div 
						class="card-body"
					>
						<div 
							class="row"
						>
							<h6 class="p-2">Business Owner</h6>
						</div>

						<div 
							class="row"
						>
							<div 
								class="col"
							>
								<input 
									type="text" 
									class="form-control" 
									id="firstname"
									v-model="user.firstname"
								>
								<label 
									class="form-label" 
									for="firstname"
								>First Name</label>
								<div
									class="text-danger small mb-2"
									v-if="errors.firstname"
								>
									<span
										v-for="(data, index) in errors.firstname"
										:key="index"
									>
										{{data}}
									</span>
								</div>
							</div>
							<div 
								class="col"
							>
								<input 
									type="text" 
									class="form-control" 
									id="lastname"
									v-model="user.lastname"
								>
								<label 
									class="form-label" 
									for="lastname"
								>Last Name</label>
								<div
									class="text-danger small mb-2"
									v-if="errors.lastname"
								>
									<span
										v-for="(data, index) in errors.lastname"
										:key="index"
									>
										{{data}}
									</span>
								</div>
							</div>
						</div>

						<div 
							class="row mt-3"
						>
							<div 
								class="col"
							>
								<div 
									class="row"
								>
									<h6 
										class="p-2"
									>User Name</h6>
								</div>
								<input 
									type="text" 
									class="form-control" 
									v-model="user.username"
								>
								<div
									class="text-danger small mb-2"
									v-if="errors.username"
								>
									<span
										v-for="(data, index) in errors.username"
										:key="index"
									>
										{{data}}
									</span>
								</div>
							</div>
							<div class="col">
							</div>
						</div>

						<div 
							class="row mt-3"
						>
							<div 
								class="col"
							>
								<div 
									class="row"
								>
									<h6 
										class="p-2"
									>Contact Number</h6>
								</div>
								<input 
									type="number" 
									class="form-control" 
									v-model="user.contactnumber"
								>
								<div
									class="text-danger small mb-2"
									v-if="errors.contactnumber"
								>
									<span
										v-for="(data, index) in errors.contactnumber"
										:key="index"
									>
										{{data}}
									</span>
								</div>
							</div>
							<div class="col">
							</div>
						</div>

						<div 
							class="row mt-3"
						>
							<div 
								class="row"
							>
								<h6 class="p-2">E-mail</h6>
							</div>
							<div 
								class="col"
							>
								<input 
									type="email" 
									class="form-control" 
									id="e-mail"
									v-model="user.email"
								>
								<label 
									class="form-label" 
									for="e-mail"
								>example@example.com</label>
								<div
									class="text-danger small mb-2"
									v-if="errors.email"
								>
									<span
										v-for="(data, index) in errors.email"
										:key="index"
									>
										{{data}}
									</span>
								</div>
							</div>
							<div class="col">
							</div>
						</div>

						<div 
							class="row mt-3"
						>
							<div 
								class="row"
							>
								<h6 class="p-2">Address</h6>
							</div>
							<div 
								class="col"
							>
								<input 
									type="text" 
									class="form-control" 
									id="Street-address"
									v-model="user.streetaddress"
								>
								<label 
									class="form-label" 
									for="inputGroupSelect01"
								>Street Address</label>
								<div
									class="text-danger small mb-2"
									v-if="errors.streetaddress"
								>
									<span
										v-for="(data, index) in errors.streetaddress"
										:key="index"
									>
										{{data}}
									</span>
								</div>
							</div>
						</div>

						<div 
							class="row mt-3"
						>
							<div 
								class="col">
								<input 
									type="text" 
									class="form-control" 
									id="line_2"
									v-model="user.addressline"
								>
								<label 
									class="form-label" 
									for="line_2"
								>Street Address Line 2</label>
								<div
									class="text-danger small mb-2"
									v-if="errors.addressline"
								>
									<span
										v-for="(data, index) in errors.addressline"
										:key="index"
									>
										{{data}}
									</span>
								</div>
							</div>
						</div>

						<div 
							class="row mt-3"
						>
							<div 
								class="col"
							>
								<input 
									type="text" 
									class="form-control" 
									id="city"
									v-model="user.city"
								>
								<label 
									class="form-label" 
									for="city"
								>City</label>
								<div
									class="text-danger small mb-2"
									v-if="errors.city"
								>
									<span
										v-for="(data, index) in errors.city"
										:key="index"
									>
										{{data}}
									</span>
								</div>
							</div>
							<div 
								class="col"
							>
								<input 
									type="text" 
									class="form-control" 
									id="State"
									v-model="user.state"
								>
								<label 
									class="form-label" 
									for="State"
								>State / Province</label>
								<div
									class="text-danger small mb-2"
									v-if="errors.state"
								>
									<span
										v-for="(data, index) in errors.state"
										:key="index"
									>
										{{data}}
									</span>
								</div>
							</div>
						</div>
						
						<div 
							class="row mt-3"
						>
							<div 
								class="col"
							>
								<input 
									type="text" 
									class="form-control" 
									id="Postal"
									v-model="user.postal_code"
								>
								<label 
									class="form-label" 
									for="Postal"
								>Postal / Zip Code</label>
								<div
									class="text-danger small mb-2"
									v-if="errors.postal_code"
								>
									<span
										v-for="(data, index) in errors.postal_code"
										:key="index"
									>
										{{data}}
									</span>
								</div>
							</div>
						</div>

						<div 
							class="row mt-3"
						>
							<div 
								class="row"
							>
								<h6 class="p-2">Date of birth</h6>
							</div>
							<div 
								class="col"
							>
								<input 
									type="date" 
									class="form-control" 
									v-model="user.birthdate"
								>
								<div
									class="text-danger small mb-2"
									v-if="errors.birthdate"
								>
									<span
										v-for="(data, index) in errors.birthdate"
										:key="index"
									>
										{{data}}
									</span>
								</div>
							</div>
						</div>

						<div 
							class="row mt-3"
						>
							<div 
								class="col"
							>
								<div 
									class="row"
								>
									<h6 
										class="p-2"
									>Role</h6>
								</div>
								<select 
									class="form-select" 
									v-model="user.role"
								>
									<option value="admin">Admin</option>
									<option value="staff">staff</option>
								</select>
								<div
									class="text-danger small mb-2"
									v-if="errors.role"
								>
									<span
										v-for="(data, index) in errors.role"
										:key="index"
									>
										{{data}}
									</span>
								</div>
							</div>
						</div>

						<div 
							class="row mt-3"
						>
							<div 
								class="row"
							>
								<h6 class="p-2">Password</h6>
							</div>
							<div 
								class="col"
							>
								<input 
									type="password" 
									class="form-control" 
									v-model="user.password"
								>
								<div
									class="text-danger small mb-2"
									v-if="errors.password"
								>
									<span
										v-for="(data, index) in errors.password"
										:key="index"
									>
										{{data}}
									</span>
								</div>
							</div>
						</div>

						<div 
							class="row mt-3"
						>
							<div 
								class="row"
							>
								<h6 class="p-2">Client ID</h6>
							</div>
							<div 
								class="col"
							>
								<input 
									type="text" 
									class="form-control" 
									v-model="user.client_id"
								>
								<div
									class="text-danger small mb-2"
									v-if="errors.client_id"
								>
									<span
										v-for="(data, index) in errors.client_id"
										:key="index"
									>
										{{data}}
									</span>
								</div>
							</div>
						</div>

						<div 
							class="row mt-3"
						>
							<div 
								class="col"
								>
								<div 
									class="row"
								>
									<h6 
										class="p-2"
									>Comments</h6>
								</div>
								<textarea 
									class="form-control" 
									aria-label="With textarea"
									v-model="user.comments"
								></textarea>
							</div>
						</div>
					</div>
					<div 
						class="card-footer"
					>
						<div 
							class="d-flex justify-content-center"
						>
							<button 
								type="submit" 
								class="btn btn-success"
								:disabled="formSubmitStatus"
							>{{formSubmitStatus ? 'Validating...':'Sumit Registration'}}</button>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</template>

<script>
	import fetchData from "./Fetch.js"

	export default {
		name: 'Register',
		data () {
			return {
				user: {},
				formSubmitStatus:false,
				errors:{}
			}
		},
		methods: {
			userRegister() {
				this.formSubmitStatus = true
				this.errors = {}
				fetchData({
					url: '/register-user',
					method: 'POST',
					body: this.user,
					success: (res) => {
						console.log(res)
						setTimeout(
							this.$router.push({
								path: '/signin'
							}),3000)
					},
					error: (e) => {
						console.log(e.message)
						this.formSubmitStatus = false
						this.errors = e.errors
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


<template>
	<div>
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


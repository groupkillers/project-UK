<template>
	<div>
		<div class="container">
			<div class="card" id="contant">
				<div class="card-body">
					<h3>Signup</h3>
					<form 
						@submit.prevent="userRegister"
						action=""
					>
						<label 
							for="username" 
							class="form-label"
						>Username</label>
							<input 
								type="text" 
								class="form-control"
								placeholder="Enter username"
								v-model="user.username"
								id="username"
							>
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
						<br />
						<div class="input-group mb-3">
							<label 
								class="input-group-text" 
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
					 <router-link to="/signin">Signin</router-link>
						<br/>
						<button 
							type="submit"
							class="btn btn-primary"
						>Click</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
	import fetchData from "./Fetch.js"

	export default {
		name:'Register',
		data() {
			return {
				user: {
					role: 'admin'
				}
			}
		},
		methods: {
			userRegister() {
				fetchData( 'http://127.0.0.1:8000/api/registerUser', 'POST', this.user)
			}
		},
		success: () => {
			
		}	
	}
</script>

<style>
	#contant {
		margin-top:100px;
	}
</style>


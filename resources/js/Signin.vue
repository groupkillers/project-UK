<template>
	<div>
		<div 
			class="container"
		>
			<div 
				class="d-flex justify-content-center"
			>
				<div 
					class="card w-50" 
					id="contant"
				>
					<div 
						class="card-body" 
					>
						<div 
							class="card-header"
						>
							<h3>Signin</h3>
						</div>
						<br>
						<form 
							@submit.prevent="signinUser" 
							action=""
						>
						<div 
							class="row"
						>
							<div 
								class="col"
							>
								<label 
									for="usernam" 
									class="form-label"
								>Username</label>
								<input 
									type="text" 
									class="form-control"
									placeholder="Enter username"
									v-model="user.username"
									id="username"
									required 
								>
							</div>
						</div>
						<br>
						<div 
							class="row"
						>
							<div 
								class="col"
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
									required
								>
							</div>
						</div>
						<br/>
						<div 
							class="row"
						>
							<input type="checkbox" checked="checked" name="remember"> Remember me
						</div>
						<br/>
						<button 
							type="submit"
							class="btn btn-primary"
						>Signin</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
	export default {
		name:'Singnin',
		data() {
			return {
				user: {}
			}
		},
		methods: {
			signinUser() {
				fetchData({
					url: '/login-user',
					method: 'POST',
					body: this.user,
					success: (res) => {
						console.log(res)
						// setTimeout(
						// 	this.$router.push({
						// 		path: '/aml'
						// 	}),3000)
					},
					error: (e) => {
						console.log(e.message)
					}
				})
			},
		}
	}
</script>




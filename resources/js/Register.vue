<template>
	<div>
		<form 
			@submit.prevent="userRegister"
			action=""
		>
			<label for="usernam">Username</label>
				<input 
					type="text" 
					v-model="user.username"
					id="usernam"
				>
			<label for="password">password</label>
			<input 
				type="text" 
				v-model="user.password"
				id="password"
			>
			<label for="role">Role</label>
			<select 
				v-model="user.role"
			>
				<option value="admin">Admin</option>
				<option value="staff">staff</option>
			</select>
			<button 
				type="submit"
			>Click</button>
		</form>
	</div>
</template>

<script>
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
				fetch('http://127.0.0.1:8000/api/registerUser', {
					method: 'POST', // or 'PUT'
					headers: {
						'Content-Type': 'application/json',
					},
					body: JSON.stringify(this.user),
				})
				.then((response) => response.json())
				.then((data) => {
					console.log('Success:', data)
				})
				.catch((error) => {
					console.error('Error:', error)
				})
			}
		}
	}
</script>


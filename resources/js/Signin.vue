<template>
	<div>
		<router-link to="/signup">Signup</router-link>
		<!--<router-link to="/dashboard">dashboard</router-link>-->
        <h5>Signin</h5>
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
		name:'Singnin',
		data() {
			return {
				user: {
					role: 'admin'
				}
			}
		},
		methods: {
			userRegister() {
				
			}
		}
	}
</script>


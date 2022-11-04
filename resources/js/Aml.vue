<template>
	<div>
		<table class="table table-striped">
			<tr>
				<th>id</th>
				<th>client id</th>
				<th>passport pfoff</th>
				<th>date</th>
				<th>Action</th>
			</tr>
			<tr v-for="item in Aml">
				<td>{{item.id}}</td>
				<td>{{item.client_ID}}</td>
				<td>{{item.passport_proff}}</td>
				<td>{{item.passport_expire_date}}</td>
				<td>
					<button 
						type="button" 
						class="btn"
						@click="showModal = true"
					>
						<i class="fa-solid fa-pen-nib"></i>
					</button>
				</td>
			</tr>
		</table>
		<vue-final-modal v-model="showModal" classes="modal-container" content-class="modal-content">
      <button 
				class="modal__close"
				@click="showModal = false"
			>
        <mdi-close>X</mdi-close>
      </button>
      <span 
				class="modal__title"
			>
				Update AML
			</span>
      <div 
				class="modal__content"
			>
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
								id="username"
							>
						<label 
							for="password"
							class="form-label"
						>password</label>
						<input 
							type="password"
							class="form-control" 
						
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
								
							>
								<option value="admin">Admin</option>
								<option value="staff">staff</option>
							</select>
						</div>
						{}
					 <router-link to="/signin">Signin</router-link>
						<br/>
						<button 
							type="submit"
							class="btn btn-primary"
						>Signup</button>
					</form>
      </div>
    </vue-final-modal>
	</div>
</template>

<script>
	import fetchData from "./Fetch.js"
	import { $vfm, VueFinalModal, ModalsContainer } from 'vue-final-modal'
	export default {
		name:'Register',
		data() {
			return {
				Aml: [],
				showModal:false,
				showConfirmModal: false
			}
		},
		components: {
			VueFinalModal,
			ModalsContainer
		},
		created () {
			fetchData({
					url: '/aml',
					success: (res) => {
						this.Aml = res
					},
					error: (e) => {
						console.log(e)
					}
				})
		},
		method:{
			modelOpen() {
				components
			}
			
		}
	}
</script>

<style scoped>
::v-deep .modal-container {
  display: flex;
  justify-content: center;
  align-items: center;
}
::v-deep .modal-content {
  position: relative;
  display: flex;
  flex-direction: column;
  max-height: 90%;
  margin: 0 1rem;
  padding: 1rem;
  border: 1px solid #e2e8f0;
  border-radius: 0.25rem;
  background: rgb(22, 18, 18);
	width:600px;
	color:white;
}
.modal__title {
  margin: 0 2rem 0.5rem 0;
  font-size: 1.5rem;
  font-weight: 700;
}
.modal__content {
  flex-grow: 1;
  overflow-y: auto;
	color:#e2e8f0;
}
.modal__action {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-shrink: 0;
  padding: 1rem 0 0;
}
.modal__close {
  position: absolute;
  top: 0.5rem;
  right: 0.5rem;
}

label {
	color:white;
}
</style>

<style scoped>
.dark-mode div::v-deep .modal-content {
  border-color: #2d3748;
  background-color: #1a202c;
}
</style>


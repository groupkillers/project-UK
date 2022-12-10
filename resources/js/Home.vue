<template>
  <div
	@click="d[d.length] = 1"
  >
	{{user}}
	<br>
	awegae
	<input 
		type="text" 
		id="" v-for="(i, d) in d"
		v-model="user[d]"
	>
  </div>
</template>

<script>
	export default {
		name: 'Home',
		data () {
			return {
				d: [],
				user: []
			}
		},
	}
</script>

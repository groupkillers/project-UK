<template>
  <div
	@click="d[d.length] = 1"
  >
	awegae
	<input type="text" name="" id="" v-for="i in d">
  </div>
</template>

<script>
	export default {
		name: 'Home',
		data () {
			return {
				d: [],
				info: null
			}
		},
		
	}
	
	
</script>

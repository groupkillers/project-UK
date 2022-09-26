<template>
	<Register/>
</template>

<script>
	import Register from './Register.vue'

	export default {
		name: 'App',
		data () {
			return {
				info: null
			}
		},
		components: {
			Register
		},	
		created () {
			
			/* axios
				.get('https://api.coindesk.com/v1/bpi/currentprice.json')
				.then(response => (this.info = response)) */
		}
	}
	
	
</script>

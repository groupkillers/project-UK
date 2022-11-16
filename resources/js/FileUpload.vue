<template>
    <div>
			<input type="file" @change="onFileSelected">
    </div>
</template>

<script>
export default {
	name: 'FileUpload',
	data () {
		return {
			msg: 'welcome file upload'
		}
	},
	method: {
		onFileSelected (event) {
			console.log(event)
		}
	}
}
</script>
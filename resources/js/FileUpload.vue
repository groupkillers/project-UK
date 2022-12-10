<template>
    <div>
			{{msg}}
			<input type="file" @change="getFileContent">
    </div>
</template>

<script>
import uploadFile from "./Fetch.js"
export default {
	name: 'FileUpload',
	data () {
		return {
			msg: 'welcome file upload'
		}
	},
	methods: {
		getFileContent (e) {
			let file = e.target.files[0]
			let date = {
				file: file,
				url: "http://127.0.0.1:8000/api/image-handel",
				progress: (e) => {
					console.log(e)
				}
			}
			if(file) {
				uploadFile.uploadFile(date);
			}
		},
	}
}
</script>
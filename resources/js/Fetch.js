import axios from 'axios'

const headers = {
	headers: {
	  'Accept': 'application/json',
	}
  }

const fetchData = async (data) =>  {
	let header = {
		method: data.method||'GET',
		headers: {
			'Content-Type': 'application/json',
			'Accept': 'application/json',
		}
	}

	if(typeof data.body != 'undefined') {
		let body = new Proxy(data.body, {
			get: function(obj, prop) {
				return obj[prop] ? obj[prop] : 'property does not exist';
			}
		})
		header.body = JSON.stringify(body)
	}

	let f = await fetch('http://127.0.0.1:8000/api' + data.url, header)

	try {
		let j = f.json()
		if(f.statusText == 'OK') {	
			j.then(result => {
				data.success(result)
			})
		} else {
			j.then(result => {
				data.error(result)
			})
		}
	} catch (e) {
		data.error(e)
	}
}

async function uploadFile (data) {
	let header = {...headers}

	const formData = new FormData()
  formData.append('file', data.file)
	console.log(data.file)
	try {
	  let res = await axios({
			method: 'POST',
			url: data.url,
			headers: header.headers,
			data: formData,
			onUploadProgress: (e) => {
				data.progress(e)
			}
	  })
	data.success
	
	} catch (e) {
		return Promise.reject(e) 
	}
}

  
export default{uploadFile,fetchData} 


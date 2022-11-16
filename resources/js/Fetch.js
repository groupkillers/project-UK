// import axios from 'axios'

// const fetchAxios = async (data) => {

// }

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


export default fetchData
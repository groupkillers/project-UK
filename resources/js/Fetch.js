const fetchData = ( url, method, deatils ) => {
	fetch(url, {
		method: method, // or 'PUT'
		headers: {
				'Content-Type': 'application/json',
		},
		body: JSON.stringify(deatils),
	})
	.then((response) => response.json())
	.then((data) => {
			console.log('Success:', data)
	})
	.catch((error) => {
			console.error('Error:', error)
	})
}

export default fetchData
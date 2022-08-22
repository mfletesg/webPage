async function sendEmail(){

	if (validateFormContact() === false) {
		return false;
	}

	let inputName = document.getElementById('inputName').value;
	let inputEmail = document.getElementById('inputEmail').value;
	let inputSubject = document.getElementById('inputSubject').value;
	let inputMessage = document.getElementById('inputMessage').value;

	let data = {
		'inputName' : inputName,
		'inputEmail' : inputEmail,
		'inputSubject' : inputSubject,
		'inputMessage' : inputMessage,
	}

	let options = {
    "method": 'POST',
    "headers": {
        "Content-Type": "application/json",
        "accept": "application/json",
        "url": "/contact",
        'X-CSRF-Token': document.querySelector('meta[name="csrf-token"]').content
    },
    "body" : JSON.stringify(data)
  };

  let url = '/contact';	

	try{
		let res = await fetch(url, options);
		let response =  await res.json();

		if (response.error == 1) {
			return false;
		}
		showNotificationSuccess('Message sent successfully', 'Thanks for getting in contact with me.');
		console.log(response);
	}catch(e) {
		console.log(e);
	}
}


function validateFormContact(){
	if (document.getElementById('inputName') === null || document.getElementById('inputName') === '') {
		return false;
	}

	if (document.getElementById('inputEmail') === null || document.getElementById('inputEmail') === '') {
		return false;
	}

	if (validaEmail(document.getElementById('inputEmail')) === false) {
		return false;
	}


	if (document.getElementById('inputSubject') === null || document.getElementById('inputSubject') === '') {
		return false;
	}

	if (document.getElementById('inputMessage') === null || document.getElementById('inputMessage') === '') {
		return false;
	}

	return true;
}

function validaEmail(email){
	return String(email)
    .toLowerCase()
    .match(
      /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    );
}


function showNotificationSuccess($title, $message){

	setTimeout(function() {
		tata.success($title, $message,{
			duration: 5000
		})
	}, 2000);

	
}

showNotificationSuccess();
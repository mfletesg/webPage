$( document ).ready(function() {
	clearInpurContact()
  var maxChars = 255;
  var textLength = 0;
  var inputMessage = "";
  var outOfChars = 'You have reached the limit of ' + maxChars + ' characters';

  /* initalize for when no data is in localStorage */
  var count = maxChars;
  $('#characterCount').text(count + ' characters left');

  /* fix val so it counts carriage returns */
  $.valHooks.textarea = {
    get: function(e) {
      return e.value.replace(/\r?\n/g, "\r\n");
    }
  };

  function checkCount() {
    textLength = $('#inputMessage').val().length;
    if (textLength >= maxChars) {
      $('#characterCount').text(outOfChars);
    }
    else {
      count = maxChars - textLength;
      $('#characterCount').text(count + ' characters left');
    }
  }

  /* on keyUp: update #characterCount as well as count & inputMessage in localStorage */
  $('#inputMessage').keyup(function() {
    checkCount();
    inputMessage = $(this).val();
    localStorage.setItem("inputMessage", inputMessage);
  });

  /* on pageload: get check for inputMessage text in localStorage, if found update inputMessage & count */
  if (localStorage.getItem("inputMessage") != null) {
    $('#inputMessage').text(localStorage.getItem("inputMessage"));
    checkCount();
  }
});


async function sendEmail(){
	showLoading(true)
	disabledButtonEmail(true)
	if (validateFormContact() === false) {
		showLoading(false)
		disabledButtonEmail(false)
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
		showLoading(false);
		disabledButtonEmail(false);
		if (response.error == 1) {
			return false;
		}
		clearInpurContact()
		showNotificationSuccess('Message sent successfully', 'Thanks for getting in contact with me. 🤘');
		console.log(response);
	}catch(e) {
		showLoading(false);
		disabledButtonEmail(false);
		console.log(e);
	}
}


function validateFormContact(){


	if (document.getElementById('inputName').value === null || document.getElementById('inputName').value === '') {
		document.getElementById('inputName').focus();
		return false;
	}

	if (document.getElementById('inputEmail').value === null || document.getElementById('inputEmail').value === '') {
		document.getElementById('inputEmail').focus();
		return false;
	}

	if (validaEmail(document.getElementById('inputEmail').value) === false) {
		document.getElementById('inputEmail').focus();
		return false;
	}

	console.log(validaEmail(document.getElementById('inputEmail').value))

	if (document.getElementById('inputSubject').value === null || document.getElementById('inputSubject').value === '') {
		document.getElementById('inputSubject').focus();
		return false;
	}

	if (document.getElementById('inputMessage').value === null || document.getElementById('inputMessage').value === '') {
		document.getElementById('inputMessage').focus();
		return false;
	}

	return true;
}

function validaEmail(email){
	if( /(.+)@(.+){2,}\.(.+){2,}/.test(email) ){
		return true;
	} else {
	  return false;
	}
}


function showNotificationSuccess($title, $message){

	setTimeout(function() {
		tata.success($title, $message,{
			duration: 5000,
			position: 'br'
		})
	}, 300);
}


function showLoading(flag){
	let loader = document.getElementById('lds-ring');
	if (flag === true) {
		loader.style.display = 'block';
	}
	else{
		loader.style.display = 'none';
	}
	
}


function disabledButtonEmail(flag){
	document.getElementById("btnSendMessage").disabled = flag;
}


function clearInpurContact(){
	document.getElementById('inputName').value = "";
	document.getElementById('inputEmail').value = "";
	document.getElementById('inputSubject').value = "";
	document.getElementById('inputMessage').value = "";
}

	/*showNotificationSuccess();*/
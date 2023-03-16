async function convertIMG() {
    console.log('Hola Mundo');

    let file = document.getElementById('inputIMG').files;
    if (file.length === 0) {
        alert('Seleccione un archivo valido');
        return false;
    }

    var formData = new FormData();

    if(file.length == 0){
        return false
    }

    formData.append("fileIMG", file[0]);

    const url = `/imgConvert`;

    let config = {
        method: 'POST',
        headers: {
            'X-CSRF-Token': document.querySelector('meta[name="csrf-token"]').content
        },
        body: formData
    }

    try {
        let res = await fetch(url, config)
        response = await res.json()
        console.log(response);

        const cipheredText = response.message;
        const shift = 3;
        const decipheredText = caesarDecipher(cipheredText, shift);
        console.log(decipheredText);

        //response = await res.blob()
    } catch (e) {
        alert('Hubo un problema en conectarse al servidor')
        console.log(e);
        return false
    }

}


function caesarDecipher(cipheredText, shift) {
    let decipheredText = "";
    for (let i = 0; i < cipheredText.length; i++) {
        let c = cipheredText.charCodeAt(i);
        if (c >= 65 && c <= 90) {
            c = 65 + ((c - 65 - shift + 26) % 26);
        } else if (c >= 97 && c <= 122) {
            c = 97 + ((c - 97 - shift + 26) % 26);
        }
        decipheredText += String.fromCharCode(c);
    }
    return decipheredText;
}

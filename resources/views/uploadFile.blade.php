<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Miguel Fletes 🎸</title>
    <link rel="icon" type="image/x-icon" href="{{asset('./img/icon-terminal.svg')}}">


    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');

        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;
            background-color: #010B2B;
            width: 100%;
        }

        .form-container {
            width: 100%;
            height: 94.8vh;
            background-color: #121b53;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .upload-files-container {
            background-color: #f7fff7;
            width: 420px;
            padding: 30px 60px;
            border-radius: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 10px 20px, rgba(0, 0, 0, 0.28) 0px 6px 6px;
        }

        .drag-file-area {
            border: 2px dashed #402cbf;
            border-radius: 40px;
            margin: 10px 0 15px;
            padding: 30px 50px;
            width: 350px;
            text-align: center;
        }

        .drag-file-area .upload-icon {
            font-size: 50px;
        }

        .drag-file-area h3 {
            font-size: 26px;
            margin: 15px 0;
        }

        .drag-file-area label {
            font-size: 19px;
        }

        .drag-file-area label .browse-files-text {
            color: #7b2cbf;
            font-weight: bolder;
            cursor: pointer;
        }

        .browse-files span {
            position: relative;
            top: -25px;
        }

        .default-file-input {
            opacity: 0;
        }

        .cannot-upload-message {
            background-color: #ffc6c4;
            font-size: 17px;
            display: flex;
            align-items: center;
            margin: 5px 0;
            padding: 5px 10px 5px 30px;
            border-radius: 5px;
            color: #BB0000;
            display: none;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        .cannot-upload-message span,
        .upload-button-icon {
            padding-right: 10px;
        }

        .cannot-upload-message span:last-child {
            padding-left: 20px;
            cursor: pointer;
        }

        .file-block {
            color: #f7fff7;
            background-color: #7b2cbf;
            transition: all 1s;
            width: 390px;
            position: relative;
            display: none;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            margin: 10px 0 15px;
            padding: 10px 20px;
            border-radius: 25px;
            cursor: pointer;
        }

        .file-info {
            display: flex;
            align-items: center;
            font-size: 15px;
        }

        .file-icon {
            margin-right: 10px;
        }

        .file-name,
        .file-size {
            padding: 0 3px;
        }

        .remove-file-icon {
            cursor: pointer;
        }

        .progress-bar {
            display: flex;
            position: absolute;
            bottom: 0;
            left: 4.5%;
            width: 0;
            height: 5px;
            border-radius: 25px;
            background-color: #4BB543;
        }

        .upload-button {
            font-family: 'Montserrat';
            background-color: #7b2cbf;
            color: #f7fff7;
            display: flex;
            align-items: center;
            font-size: 18px;
            border: none;
            border-radius: 20px;
            margin: 10px;
            padding: 7.5px 50px;
            cursor: pointer;
        }

        .main-footer {
            background-color: #010B2B !important;
            margin-top: 0px;
            border: none;
            width: 100%;
            height: 5.0vh !important;
            align-content: center;
            align-items: center;
            align-self: center;
            display: flex;
        }

        .text-footer {
            background-color: #010B2B !important;
            text-align: center;
            color: #ffffff;
            width: 100%;
            margin-top: 0px;
            margin-bottom: 0px;
        }




        .bubbly-button {
            font-family: "Helvetica", "Arial", sans-serif;
            display: inline-block;
            font-size: 1em;
            padding: 1em 2em;
            margin-top: 30px;
            margin-left: 30px;
            margin-bottom: 60px;
            -webkit-appearance: none;
            appearance: none;
            background-color: #ff0081;
            color: #fff;
            border-radius: 4px;
            border: none;
            cursor: pointer;
            position: fixed;
            transition: transform ease-in 0.1s, box-shadow ease-in 0.25s;
            box-shadow: 0 2px 25px rgba(255, 0, 130, 0.5);
        }

        .bubbly-button:focus {
            outline: 0;
        }

        .bubbly-button:before,
        .bubbly-button:after {
            position: absolute;
            content: "";
            display: block;
            width: 140%;
            height: 100%;
            left: -20%;
            z-index: -1000;
            transition: all ease-in-out 0.5s;
            background-repeat: no-repeat;
        }

        .bubbly-button:before {
            display: none;
            top: -75%;
            background-image: radial-gradient(circle, #ff0081 20%, transparent 20%), radial-gradient(circle, transparent 20%, #ff0081 20%, transparent 30%), radial-gradient(circle, #ff0081 20%, transparent 20%), radial-gradient(circle, #ff0081 20%, transparent 20%), radial-gradient(circle, transparent 10%, #ff0081 15%, transparent 20%), radial-gradient(circle, #ff0081 20%, transparent 20%), radial-gradient(circle, #ff0081 20%, transparent 20%), radial-gradient(circle, #ff0081 20%, transparent 20%), radial-gradient(circle, #ff0081 20%, transparent 20%);
            background-size: 10% 10%, 20% 20%, 15% 15%, 20% 20%, 18% 18%, 10% 10%, 15% 15%, 10% 10%, 18% 18%;
        }

        .bubbly-button:after {
            display: none;
            bottom: -75%;
            background-image: radial-gradient(circle, #ff0081 20%, transparent 20%), radial-gradient(circle, #ff0081 20%, transparent 20%), radial-gradient(circle, transparent 10%, #ff0081 15%, transparent 20%), radial-gradient(circle, #ff0081 20%, transparent 20%), radial-gradient(circle, #ff0081 20%, transparent 20%), radial-gradient(circle, #ff0081 20%, transparent 20%), radial-gradient(circle, #ff0081 20%, transparent 20%);
            background-size: 15% 15%, 20% 20%, 18% 18%, 20% 20%, 15% 15%, 10% 10%, 20% 20%;
        }

        .bubbly-button:active {
            transform: scale(0.9);
            background-color: #e60074;
            box-shadow: 0 2px 25px rgba(255, 0, 130, 0.2);
        }

        .bubbly-button.animate:before {
            display: block;
            animation: topBubbles ease-in-out 0.75s forwards;
        }

        .bubbly-button.animate:after {
            display: block;
            animation: bottomBubbles ease-in-out 0.75s forwards;
        }

        @keyframes topBubbles {
            0% {
                background-position: 5% 90%, 10% 90%, 10% 90%, 15% 90%, 25% 90%, 25% 90%, 40% 90%, 55% 90%, 70% 90%;
            }

            50% {
                background-position: 0% 80%, 0% 20%, 10% 40%, 20% 0%, 30% 30%, 22% 50%, 50% 50%, 65% 20%, 90% 30%;
            }

            100% {
                background-position: 0% 70%, 0% 10%, 10% 30%, 20% -10%, 30% 20%, 22% 40%, 50% 40%, 65% 10%, 90% 20%;
                background-size: 0% 0%, 0% 0%, 0% 0%, 0% 0%, 0% 0%, 0% 0%;
            }
        }

        @keyframes bottomBubbles {
            0% {
                background-position: 10% -10%, 30% 10%, 55% -10%, 70% -10%, 85% -10%, 70% -10%, 70% 0%;
            }

            50% {
                background-position: 0% 80%, 20% 80%, 45% 60%, 60% 100%, 75% 70%, 95% 60%, 105% 0%;
            }

            100% {
                background-position: 0% 90%, 20% 90%, 45% 70%, 60% 110%, 75% 80%, 95% 70%, 110% 10%;
                background-size: 0% 0%, 0% 0%, 0% 0%, 0% 0%, 0% 0%, 0% 0%;
            }
        }



        .lds-ring {
            display: inline-block;
            position: relative;
            width: 80px;
            height: 80px;

        }

        .lds-ring div {
            box-sizing: border-box;
            display: block;
            position: absolute;
            width: 64px;
            height: 64px;
            margin: 8px;
            border: 8px solid #fff;
            border-radius: 50%;
            animation: lds-ring 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
            border-color: #000000 transparent transparent transparent;
        }

        .lds-ring div:nth-child(1) {
            animation-delay: -0.45s;
        }

        .lds-ring div:nth-child(2) {
            animation-delay: -0.3s;
        }

        .lds-ring div:nth-child(3) {
            animation-delay: -0.15s;
        }

        @keyframes lds-ring {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .img-cheems {
            width: 240px;
            padding-left: 50px;
        }

    </style>



    @if($name =='127.0.0.1')
    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
    <script src="{{asset('dist/js/adminlte.min.js')}}"></script>


    @else
    <script src="{{secure_asset('plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{secure_asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{secure_asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
    <script src="{{secure_asset('dist/js/adminlte.min.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            document.body.style.webkitTouchCallout = 'none';
            document.oncontextmenu = function () {
                return false
            }
        });

    </script>


    @endif
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-W8TXJNX4ZG"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-W8TXJNX4ZG');

    </script>

<body>

    <button class="bubbly-button" onclick="principalPage()"><span>Ir a pagina principal</span></button>

    <form class="form-container" enctype='multipart/form-data'>
        <div class="upload-files-container">
            <div class="drag-file-area">
                <span class="material-icons-outlined upload-icon">Subir Archivo</span>
                <h3 class="dynamic-message">Arrastra tu archivo</h3>
                <label class="label"><span class="browse-files">

                        <input type="file" class="default-file-input" name="fileXML" id="inputFile"
                            accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" />

                        <br>
                        <span>o con el </span><span class="browse-files-text">explorador de archivos</span> </span>
                </label>
            </div>
            <span class="cannot-upload-message"> <span class="material-icons-outlined">error</span> Please select a file
                first <span class="material-icons-outlined cancel-alert-button">cancel</span> </span>
            <div class="file-block">
                <div class="file-info"> <span class="material-icons-outlined file-icon">description</span> <span
                        class="file-name"> </span> | <span class="file-size"> </span> </div>
                <span class="material-icons remove-file-icon">Eliminar</span>
                <div class="progress-bar"> </div>
            </div>
            <button type="button" class="upload-button" onclick="uploadButton1()"> Subir y descargar archivo </button>

            <div class="lds-ring" id="loading" style="display: none;">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>

        <img src="./img/dlf.pt-mlg-doge-png-55923991.png" class="img-cheems">
    </form>

    <footer class="main-footer">
        <p class="text-footer">Make with 🎸, 🍺 & ☕ by <b>Mike Fletes</b></p>
    </footer>

</body>


<script>
    function principalPage() {
        window.location.href = "/";
    }

    var isAdvancedUpload = function () {
        var div = document.createElement('div');
        return (('draggable' in div) || ('ondragstart' in div && 'ondrop' in div)) && 'FormData' in window &&
            'FileReader' in window;
    }();

    let draggableFileArea = document.querySelector(".drag-file-area");
    let browseFileText = document.querySelector(".browse-files");
    let uploadIcon = document.querySelector(".upload-icon");
    let dragDropText = document.querySelector(".dynamic-message");
    let fileInput = document.querySelector(".default-file-input");
    let cannotUploadMessage = document.querySelector(".cannot-upload-message");
    let cancelAlertButton = document.querySelector(".cancel-alert-button");
    let uploadedFile = document.querySelector(".file-block");
    let fileName = document.querySelector(".file-name");
    let fileSize = document.querySelector(".file-size");
    let progressBar = document.querySelector(".progress-bar");
    let removeFileButton = document.querySelector(".remove-file-icon");
    uploadButton = document.querySelector(".upload-button");
    let fileFlag = 0;

    fileInput.addEventListener("click", () => {
        fileInput.value = '';
        console.log(fileInput.value);
    });

    fileInput.addEventListener("change", e => {
        console.log(" > " + fileInput.value)
        uploadIcon.innerHTML = 'Cargado';
        dragDropText.innerHTML = 'Archivo Cargado';
        fileName.innerHTML = fileInput.files[0].name;
        fileSize.innerHTML = (fileInput.files[0].size / 1024).toFixed(1) + " KB";
        uploadedFile.style.cssText = "display: flex;";
        progressBar.style.width = 0;
        fileFlag = 0;
    });


    async function uploadButton1() {



        let file = document.getElementById('inputFile').files;
        console.log(file)


        if (file.length === 0) {
            alert('Seleccione un archivo valido');
            return false;
        }

        document.getElementById('loading').style.display = 'block';

        var formData = new FormData();
        formData.append("fileXML", file[0]);

        //console.log(formData)

        //console.log(!!formData.entries().next().value);

        const url = `/api/file`;

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
            //response = await res.blob()
        } catch (e) {
            alert('Hubo un problema en conectarse al servidor')
            console.log(e);
            document.getElementById('loading').style.display = 'block';
            return false
        }

        document.getElementById('loading').style.display = 'none';

        console.log(response)
        return false;

        let random = Math.random() * 2;
        const urlFile = window.URL.createObjectURL(new Blob([response]));
        const link = document.createElement("a");
        link.href = urlFile;
        link.setAttribute("download", 'file_' + random + '.xml');
        document.body.appendChild(link);
        link.click();
        link.remove();

        return false;
    }

    uploadButton.addEventListener("click", (e) => {
        return false;
        let isFileUploaded = fileInput.value;
        if (isFileUploaded != '') {
            if (fileFlag == 0) {
                fileFlag = 1;
                var width = 0;
                var id = setInterval(frame, 50);

                function frame() {
                    if (width >= 390) {
                        clearInterval(id);
                        uploadButton.innerHTML =
                            `<span class="material-icons-outlined upload-button-icon"> check_circle </span> Uploaded`;
                    } else {
                        width += 5;
                        progressBar.style.width = width + "px";
                    }
                }
            }
        } else {
            cannotUploadMessage.style.cssText = "display: flex; animation: fadeIn linear 1.5s;";
        }
    });

    cancelAlertButton.addEventListener("click", () => {
        cannotUploadMessage.style.cssText = "display: none;";
    });

    if (isAdvancedUpload) {
        ["drag", "dragstart", "dragend", "dragover", "dragenter", "dragleave", "drop"].forEach(evt =>
            draggableFileArea.addEventListener(evt, e => {
                e.preventDefault();
                e.stopPropagation();
            })
        );

        ["dragover", "dragenter"].forEach(evt => {
            draggableFileArea.addEventListener(evt, e => {
                e.preventDefault();
                e.stopPropagation();
                uploadIcon.innerHTML = 'file_download';
                dragDropText.innerHTML = 'Drop your file here!';
            });
        });

        draggableFileArea.addEventListener("drop", e => {
            uploadIcon.innerHTML = 'Cargado';
            dragDropText.innerHTML = 'Archivo Cargado';
            uploadButton.innerHTML = `Descargar archivo XML`;

            let files = e.dataTransfer.files;
            fileInput.files = files;
            console.log(files[0].name + " " + files[0].size);
            console.log(document.querySelector(".default-file-input").value);
            fileName.innerHTML = files[0].name;
            fileSize.innerHTML = (files[0].size / 1024).toFixed(1) + " KB";
            uploadedFile.style.cssText = "display: flex;";
            progressBar.style.width = 0;
            fileFlag = 0;
        });
    }

    removeFileButton.addEventListener("click", () => {
        location.reload();
        return false;
        uploadedFile.style.cssText = "display: none;";
        fileInput.value = '';
        uploadIcon.innerHTML = 'Subir Archivo';
        dragDropText.innerHTML = 'Arrastra tu archivo CSV';
        document.querySelector(".label").innerHTML =
            `<span>o con el </span><span class="browse-files"> <input type="file" class="default-file-input"/ <span class="browse-files-text">explorador de archivos</span>  </span> </label>`;
        uploadButton.innerHTML = `Upload`;
    });

</script>

</html>

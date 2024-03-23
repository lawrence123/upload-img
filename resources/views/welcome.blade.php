<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet"/>
        <!-- Cropper -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.css"/>
    </head>
<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
    }
    body {
        background-color: #ffffff;
    }
    .wrapper {
        width: 2000px;
        position: absolute;
        transform: translateX(-50%);
        top: 1em;
        left: 50%;
        background-color: #ffffff;
        padding: 2em 3em;
        border-radius: 0.5em;
    }
    .pre{
        margin-left: 20%;
        width: 1143px;
    }
    .image-container,
    .preview-container {
        width: 1000px;

        margin-left: 20%;
    }

    img {
        display: block;

        max-width: 100%;
    }
    .image-container {
        width: 60%;
        margin: 0 auto;
    }
    .prebtn {
        padding: 1em;
        border-radius: 0.3em;
        border: 2px solid orange;
        background-color: orange;
        color: #ffffff;
    }
    .upload {
        padding: 1em;
        border-radius: 0.3em;
        border: 2px solid #025bee;
        background-color: #025bee;
        color: #ffffff;
    }
    .btns {
        display: flex;
        justify-content: center;
        gap: 1em;
        margin-top: 1em;
    }
    .btns a {
        border: 2px solid green;
        background-color: green;
        color: #ffffff;
        text-decoration: none;
        padding: 1em;
        font-size: 1em;
        border-radius: 0.3em;
    }
    .hide{
        display: none;
    }
</style>
    <body class="antialiased">
      <!--  home pages
        @auth
        <p>admin can see this line</p>
        <p>  <a href="{{route('inside')}}">inside</a></p>
        @endauth
        <a href="{{route('login')}}">login</a>
        <a href="{{route('logout')}}">logout</a>-->
       <div class="wrapper">
         
            <div class="image-container">
                <img id="image" />
            </div>

            <div class="pre">
                <img id="preview-image"  />
            </div>
            
            <div class="btns">
                <button onclick="loadImage()" class="upload">Upload</button>
                <button id="preview" class="prebtn">Preview</button>
                <a href="" id="download">Download</a>
            </div>
        </div>
    </body>
<script>
    let image = document.getElementById("image");
    let downloadButton = document.getElementById("download");
    const previewButton = document.getElementById("preview");
    const previewImage = document.getElementById("preview-image");
    let cropper = "";
    let code = "";

    const toDataURL = url => fetch(url)
            .then(response => response.blob())
            .then(blob => new Promise((resolve, reject) => {
            const reader = new FileReader()
            reader.onloadend = () => resolve(reader.result)
            reader.onerror = reject
            reader.readAsDataURL(blob)
            }))
            //set path here
            toDataURL('chart1-1_tc.png')
            .then(dataUrl => {
            code = dataUrl
            })
            
    function loadImage() {
        image.setAttribute("src", code);
        if (cropper) {
        cropper.destroy();
        }
        cropper = new Cropper(image);
    }

    previewButton.addEventListener("click", (e) => {
    e.preventDefault();
    let imgSrc = cropper.getCroppedCanvas({}).toDataURL();
    previewImage.src = imgSrc;
    downloadButton.download = `cropped_123.png`;//set download name
    downloadButton.setAttribute("href", imgSrc);
    });
</script>

</html>

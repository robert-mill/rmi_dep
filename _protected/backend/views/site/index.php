<?php

/* @var $this yii\web\View */
use richardfan\widget\JSRegister;


?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <form id="form1" enctype="multipart/form-data" method="post" action="Upload.aspx">

                <div>

                    <label for="fileToUpload">Take or select photo(s)</label><br />

                    <input type="file" name="fileToUpload" id="fileToUpload" onchange="fileSelected();" accept="image/*" capture="camera" />

                </div>

                <div id="details"></div>

                <div>

                    <input type="button" onclick="uploadFile()" value="Upload" />

                </div>

                <div id="progress"></div>

            </form>
        </div>

    </div>
</div>
<?php JSRegister::begin(); ?>
<script>
    function fileSelected() {
        var count = document.getElementById('fileToUpload').files.length;
        document.getElementById('details').innerHTML = "";
        for (var index = 0; index < count; index ++){
            var file = document.getElementById('fileToUpload').files[index];
            var fileSize = 0;
            if (file.size > 1024 * 1024)
                fileSize = (Math.round(file.size * 100 / (1024 * 1024)) / 100).toString() + 'MB';
            else
                fileSize = (Math.round(file.size * 100 / 1024) / 100).toString() + 'KB';
            document.getElementById('details').innerHTML += 'Name: ' + file.name + '<br>Size: ' + fileSize + '<br>Type: ' + file.type;
            document.getElementById('details').innerHTML += '<p>';
        }
    }
    function uploadFile() {
        var fd = new FormData();
        var count = document.getElementById('fileToUpload').files.length;
        for (var index = 0; index < count; index ++){
            var file = document.getElementById('fileToUpload').files[index];
            fd.append('myFile', file);
        }
        var xhr = new XMLHttpRequest();
        xhr.upload.addEventListener("progress", uploadProgress, false);
        xhr.addEventListener("load", uploadComplete, false);
        xhr.addEventListener("error", uploadFailed, false);
        xhr.addEventListener("abort", uploadCanceled, false);
        xhr.open("POST", "savetofile.php");
        xhr.send(fd);
    }
    function uploadProgress(evt) {
        if (evt.lengthComputable) {
            var percentComplete = Math.round(evt.loaded * 100 / evt.total);
            document.getElementById('progress').innerHTML = percentComplete.toString() + '%';
        }else{
            document.getElementById('progress').innerHTML = 'unable to compute';
        }
    }
    function uploadComplete(evt) { /* This event is raised when the server send back a response */
        alert(evt.target.responseText);
    }
    function uploadFailed(evt) {
        alert("There was an error attempting to upload the file.");
    }
    function uploadCanceled(evt) {
        alert("The upload has been canceled by the user or the browser dropped the connection.");
    }
</script>
<?php JSRegister::end(); ?>
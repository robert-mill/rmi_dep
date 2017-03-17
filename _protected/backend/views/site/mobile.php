<?php

/* @var $this yii\web\View */
use backend\models\StockItems;

use richardfan\widget\JSRegister;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$stockitemClass = new StockItems();
$stockitemData = $stockitemClass->find()->all();
?>
    <div class="statusbar-overlay"></div>
    <div class="panel-overlay"></div>

    <!-- Left panel -->
    <div class="panel panel-left panel-reveal">
        <div class="line"></div>

        <div class="logo-box">
            <h2>Rosemary Interiors</h2>
            <div>World of minatures</div>
        </div>

        <div class="list-block mt-15">
            <div class="list-group">
                <nav>
                    <ul>
                        <li class="divider">
                            Menu
                        </li>
                        <li>
                            <a href="index.html" class="item-link close-panel item-content">
                                <div class="item-media">
                                    <i class="fa fa-home"></i>
                                </div>
                                <div class="item-inner">
                                    <div class="item-title">Dashboard</div>
                                    <div class="item-after">
                                        <span class="badge badge-primary">32</span>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="js-toggle-menu"><span class="icon-chevron-down"></span></a>

                            <ul>
                                <li>
                                    <a href="index.html" class="item-link close-panel item-content">
                                        <div class="item-media">
                                            <i class="fa fa-th"></i>
                                        </div>
                                        <div class="item-inner">
                                            <div class="item-title">Menu</div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="login.html" class="item-link close-panel item-content">
                                        <div class="item-media">
                                            <i class="fa fa-lock"></i>
                                        </div>
                                        <div class="item-inner">
                                            <div class="item-title">Login</div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="dashboard.html" class="item-link close-panel item-content">
                                        <div class="item-media">
                                            <i class="fa fa-user"></i>
                                        </div>
                                        <div class="item-inner">
                                            <div class="item-title">Profile 1</div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="dashboard-1.html" class="item-link close-panel item-content">
                                        <div class="item-media">
                                            <i class="fa fa-user"></i>
                                        </div>
                                        <div class="item-inner">
                                            <div class="item-title">Profile 2</div>
                                        </div>
                                    </a>
                                </li>

                            </ul>

                        </li>

                        <li>
                            <a href="charts.html" class="item-link close-panel item-content">
                                <div class="item-media">
                                    <i class="fa fa-area-chart"></i>
                                </div>
                                <div class="item-inner">
                                    <div class="item-title">Charts</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="about.html" class="item-link close-panel item-content">
                                <div class="item-media">
                                    <i class="fa fa-file-text-o"></i>
                                </div>
                                <div class="item-inner">
                                    <div class="item-title">Article</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="blog.html" class="item-link close-panel item-content">
                                <div class="item-media">
                                    <i class="fa fa-newspaper-o"></i>
                                </div>
                                <div class="item-inner">
                                    <div class="item-title">Blog</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="features.html" class="item-link close-panel item-content">
                                <div class="item-media">
                                    <i class="fa fa-magic"></i>
                                </div>
                                <div class="item-inner">
                                    <div class="item-title">Features</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="gallery-3col.html" class="item-link close-panel item-content">
                                <div class="item-media">
                                    <i class="fa fa-picture-o"></i>
                                </div>
                                <div class="item-inner">
                                    <div class="item-title">Gallery</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="videos.html" class="item-link close-panel item-content">
                                <div class="item-media">
                                    <i class="fa fa-video-camera"></i>
                                </div>
                                <div class="item-inner">
                                    <div class="item-title">Videos</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="contact.html" class="item-link close-panel item-content">
                                <div class="item-media">
                                    <i class="fa fa-envelope-o"></i>
                                </div>
                                <div class="item-inner">
                                    <div class="item-title">Contact</div>
                                </div>
                            </a>
                        </li>
                        <li class="divider">
                            Social
                        </li>
                        <li>
                            <a href="twitter.html" class="item-link close-panel item-content">
                                <div class="item-media">
                                    <i class="fa fa-twitter"></i>
                                </div>
                                <div class="item-inner">
                                    <div class="item-title">Twitter</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="flickr.html" class="item-link close-panel item-content">
                                <div class="item-media">
                                    <i class="fa fa-flickr"></i>
                                </div>
                                <div class="item-inner">
                                    <div class="item-title">Flickr</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="chat.html" class="item-link close-panel item-content">
                                <div class="item-media">
                                    <i class="fa fa-weixin"></i>
                                </div>
                                <div class="item-inner">
                                    <div class="item-title">Chat</div>
                                    <div class="item-after">
                                        <span class="badge badge-secondary">5</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

    </div>

    <!-- Right panel -->
    <div class="panel panel-right panel-reveal">
        <div class="line"></div>

        <div class="user-banner">
        <span class="ava-box">
            <img src="../themes/mobile/img/tmp/ava4.jpg" alt="">
        </span>
        </div>

        <div class="welcome-msg">
            <h3>Hello <strong>Lu</strong>!</h3>
            <h4>How is your day going?</h4>
        </div>

        <div class="list-block mt-15">
            <div class="list-group">
                <nav>
                    <ul>
                        <li>
                            <a href="index.html" class="item-link close-panel item-content">
                                <div class="item-media">
                                    <i class="fa fa-user"></i>
                                </div>
                                <div class="item-inner">
                                    <div class="item-title">Profile</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="settings.html" class="item-link close-panel item-content">
                                <div class="item-media">
                                    <i class="fa fa-cog"></i>
                                </div>
                                <div class="item-inner">
                                    <div class="item-title">Settings</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="index.html" class="item-link close-panel item-content">
                                <div class="item-media">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="item-inner">
                                    <div class="item-title">Messages</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="index.html" class="item-link close-panel item-content">
                                <div class="item-media">
                                    <i class="fa fa-heart-o"></i>
                                </div>
                                <div class="item-inner">
                                    <div class="item-title">I Like It</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="index.html" class="item-link close-panel item-content">
                                <div class="item-media">
                                    <i class="fa fa-users"></i>
                                </div>
                                <div class="item-inner">
                                    <div class="item-title">Friends</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="index.html" class="item-link close-panel item-content">
                                <div class="item-media">
                                    <i class="fa fa-sign-out"></i>
                                </div>
                                <div class="item-inner">
                                    <div class="item-title">Logout</div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="list-group mt-20">
                <nav>
                    <ul>
                        <li>
                            <a href="#" class="item-link item-primary close-panel item-content">
                                <div class="item-media">
                                    <i class="fa fa-info-circle"></i>
                                </div>
                                <div class="item-inner">
                                    <div class="item-title">About APP/Website</div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

        </div>

    </div>

    <!-- Views -->
    <div class="views">
        <div class="view view-main">

            <div class="navbar navbar-clear">
                <div class="navbar-inner">
                    <div class="left">
                        <a href="#" class="link icon-only open-panel">
                            <span class="kkicon icon-menu"></span>
                        </a>
                    </div>
                    <div class="center sliding">Dashboard</div>
                    <div class="right">
                        <a href="#" class="link icon-only open-panel" data-panel="right">
                            <span class="kkicon icon-user"></span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="pages navbar-fixed toolbar-fixed">
                <div data-page="index" class="page page-bg">

                    <div class="toolbar">
                        <div class="toolbar-inner">
                            <a href="#" data-picker=".picker-social" class="open-picker link">
                                <span class="icon-share2"></span>
                            </a>
                            <a href="#" class="link">
                                <span class="icon-color-sampler"></span>
                            </a>
                            <a href="#" class="link open-popup" data-popup=".popup-splash">
                                <span class="icon-bookmark2"></span>
                            </a>
                            <a href="#" class="link open-popup" data-popup=".popup-login">
                                <span class="icon-lock"></span>
                            </a>
                        </div>
                    </div>

                    <div class="page-content">
                        <nav class="dashboard-menu">
                            <div class="row text-center">
                                <div class="col-33">
                                    <a href="#" data-popup=".popup-addproduct" class="open-popup menu-link">
                                        <span class="icon-news"></span>
                                        <span>Add Product</span>
                                    </a>
                                </div>
                                <div class="col-33">
                                    <a href="features.html" class="menu-link">
                                        <span class="icon-magic-wand"></span>
                                        <span>Features</span>
                                    </a>
                                </div>
                                <div class="col-33">
                                    <a href="blog.html" class="menu-link">
                                        <span class="icon-pen2"></span>
                                        <span>Blog</span>
                                    </a>
                                </div>
                            </div>
                            <div class="row text-center">
                                <div class="col-33">
                                    <a href="#" data-popup=".popup-mystock" class="open-popup menu-link">
                                        <span class="icon-picture"></span>
                                        <span>My Stock</span>
                                    </a>
                                </div>
                                <div class="col-33">
                                    <a href="tabs.html" class="menu-link">
                                        <span class="icon-folder"></span>
                                        <span>Tabs</span>
                                    </a>
                                </div>
                                <div class="col-33">
                                    <a href="#" data-popup=".popup-login" class="open-popup menu-link">
                                        <span class="icon-lock"></span>
                                        <span>Login</span>
                                    </a>
                                </div>
                            </div>
                            <div class="row text-center">
                                <div class="col-33">
                                    <a href="#" data-picker=".picker-social" class="open-picker menu-link">
                                        <span class="icon-share2"></span>
                                        <span>Social</span>
                                    </a>
                                </div>
                                <div class="col-33">
                                    <a href="videos.html" class="menu-link">
                                        <span class="icon-camera"></span>
                                        <span>Video</span>
                                    </a>
                                </div>
                                <div class="col-33">
                                    <a href="contact.html" class="menu-link">
                                        <span class="icon-envelope-open"></span>
                                        <span>Contact</span>
                                    </a>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="popup popup-splash">
        <div class="content-block">
            <a href="#" class="close-popup">
                skip
            </a>

            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide text-center">

                        <h2>Responsive</h2>

                        <h3>flexible layout</h3>
                        <img src="../themes/mobile/img/tmp/slide1.png" alt=""/>

                    </div>
                    <div class="swiper-slide text-center">

                        <h2>Very Detailed</h2>

                        <h3>20+ page templates</h3>
                        <img src="../themes/mobile/img/tmp/slide2.png" alt=""/>

                    </div>
                    <div class="swiper-slide text-center">

                        <h2>Call<br>Us Now</h2>

                        <h3>Lorem ipsum dolor sit amet enim. Etiam ullamcorper. Suspendisse a pellentesque dui, non felis.
                            Maecenas malesuada elit lectus felis, malesuada ultricies.</h3>
                        <a href="#" class="button mt-50">Click to call!</a>

                    </div>
                </div>
                <div class="bottom-color"></div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </div>

<div class="popup popup-mystock">
    <a class="content-block">
        <div class="close-popup-block">
        <a href="#" class="close-popup">
            Close!
        </a>
        </div>
        <br>
        <section class="item_box">
            <?php
            $url = Yii::getAlias("@frontimgurl");
            foreach ($stockitemData as $sitm): ?>
                <div class="col-xs-4">
                    <a href="#" data-popup=".popup-mystockdetail" class="open-popup menu-link view-stock-item" id="detailpopup_<?=$sitm->id?>">
                        <?=Html::img($url."/".$sitm->image)?>
                        <?=$sitm->title?>
                    </a>
                </div>

            <?php endforeach;?>
        </section>
</div>

<div class="popup popup-mystockdetail">
    <div class="content-block">
        <a href="#" class="close-popup">
            Close
        </a>
        <div id="myStockItemDetail">

        </div>

    </div>
</div>




    <div class="popup popup-addproduct">
        <div class="content-block">
            <a href="#" class="close-popup">
                Close
            </a>

            <?php
            $model = new StockItems();
                $form = ActiveForm::begin([
                    'method' => 'post',
                    'action' => ['/stock-items/addproduct'],
                    'options' => ['enctype' => 'multipart/form-data']
                ]);
            ?>
            <?= $form->field($model, 'category')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, 'file')->fileInput([
                    'maxlength' => true,
                    'accept' => 'image/*',
                    'capture' => 'camera',

            ]) ?>

            <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'discountprice')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'instock')->textInput() ?>

            <?= $form->field($model, 'size')->textInput(['maxlength' => true]) ?>

            <div class="form-group">
                <?= Html::submitButton( 'Create', ['class' => 'btn btn-success' ]) ?>
            </div>
             <?php
                ActiveForm::end();
            ?>
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

    <div class="popup popup-login">
        <div class="content-block">
            <a href="#" class="close-popup">
                skip
            </a>

            <div class="text-center mt-70">
                <h2>Hello!</h2>

                <h3>You wont to login?!</h3>
            </div>

            <div class="forms mt-50">
                <form method="post"
                      class="js-validate"
                      novalidate="novalidate">

                    <div class="form-row">
                        <div class="input-text">
                            <input type="text" name="login" placeholder="Login" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="input-text">
                            <input type="password" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="input-submit">
                            <a href="#" class="button button-big js-form-submit button-fill button-primary">Login</a>
                        </div>
                    </div>
                </form>
            </div>

            <a href="#" class="more-info">I don't have a APP account.</a>
        </div>
    </div>


    <!-- Picker -->
    <div class="picker-modal picker-social">
        <div class="toolbar">
            <div class="toolbar-inner">
                <div class="left"></div>
                <div class="right"><a href="#" class="close-picker">Done</a></div>
            </div>
        </div>
        <div class="picker-modal-inner">
            <div class="content-block mt-15 mb-10">
                <h3>Sharing is sexy!</h3>

                <p>Duis ac nibh ac quam quam sagittis tortor. Cum sociis natoque penatibus et neque.</p>

                <div class="social-buttons">
                    <a href="#"><i class="fa fa-twitter-square"></i></a>
                    <a href="#"><i class="fa fa-facebook-square"></i></a>
                    <a href="#"><i class="fa fa-pinterest-square"></i></a>
                    <a href="#"><i class="fa fa-linkedin-square"></i></a>
                    <a href="#"><i class="fa fa-google-plus-square"></i></a>
                    <a href="#"><i class="fa fa-flickr"></i></a>
                </div>
            </div>
        </div>
    </div>

<?php JSRegister::begin(); ?>
<script>
    $(function(){
        $("#stockitems-image").on("change", function(){
            fileSelected();
        })
        $(".view-stock-item").on("click touchstart", function(){
            var itemID = $(this).attr("id").split("_");
            var targetDiv =  $("#myStockItemDetail");
            itemID = itemID[1];
            $.get('stock-items/itemdetail', {itemID : itemID}, function(data){
                var datas  = $.parseJSON(data);
                targetDiv.empty();
                targetDiv.append($("<div>",{
                    class : "stockItemBlock"
                }).append($("<div>", {
                    class : 'stockItemHead',
                    html : datas.title
                }))).append($("<div>",{
                    class : "stockItemImg",
                    html : "<img src='<?=$url?>/"+datas.image+"'>"
                })).append($("<div>", {
                    class : "stockItemText",
                    html : datas.description
                })).append($("<div>",{
                    class : "stockItemPrice",
                    html : "Discount Price: &#163;"+datas.price
                })).append($("<div>",{
                    class : "stockItemDiscountPrice",
                    html : "Price: &#163;"+datas.discountprice
                })).append($("<div>",{
                    class : "stockItemInstock",
                    html : "Stock: " + datas.instock
                })).append($("<div>",{
                    class : "stockItemsize",
                    html : "Size: " + datas.size
                })).append($("<form>",{
                    action : '/backend/stock-items/amend'
                }).append($('<input type="text" name="id" value="'+datas.id+'">',{
                    name : 'id'
                })).append($('<input type="submit" value="Amend">',{

                })));
            });
        });
    })
    function fileSelected() {

        var count = document.getElementById('stockitems-image').files.length;
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


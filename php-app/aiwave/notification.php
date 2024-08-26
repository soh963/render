<!DOCTYPE html>
<html lang="en">

<?php $title='Notification' ?>

<?php include './partials/head.php' ?>

<body>
    <main class="page-wrapper rbt-dashboard-page">
        <div class="rbt-panel-wrapper">

        <?php include './partials/header_2.php' ?>

        <?php include './partials/pop_mobile.php' ?>

            <!--..:: Imroz Preloader ::..-->
            <?php include './partials/preloader.php' ?>

            <!--..:: Start Left panel ::..-->
            <?php include './partials/start_Left_panel.php' ?>
            <!--..:: End Left panel ::..-->

            <!--..:: Main content ::..-->
            <div class="rbt-main-content mb--0">
                <div class="rbt-daynamic-page-content center-width">

                    <!--..:: Dashboard Center Content ::..-->
                    <div class="rbt-dashboard-content">
                        <div class="banner-area">
                            <!--..:: AiWavesmall Slider ::..-->
                            <div class="settings-area">
                                <h3 class="title">Settings</h3>
                                <ul class="user-nav">
                                    <li>
                                        <a href="profile-details.php">
                                            <span>Profile Details</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="notification.php">
                                            <span>Notification</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="chat-export.php">
                                            <span>Chat Export</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="appearance.php">
                                            <span>Apperance</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="plans-billing.php">
                                            <span>Plans and Billing</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="sessions.php">
                                            <span>Sessions</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="content-page pb--50">
                            <div class="chat-box-list">

                                <!--..:: AiWaveNotification Section ::..-->
                                <div class="single-settings-box notification-box overflow-hidden">
                                    <div class="form-check form-switch notification-box-switch">
                                        <h4 class="title">Notification</h4>
                                    </div>
                                    <div class="rbt-sm-separator mt-0"></div>
                                    <div class="rbt-checkbox-grp">
                                        <h5 class="title">Pixcels Platform</h5>
                                        <div class="rbt-checkbox-wrapper">
                                            <input id="rbt-checkbox-1" name="rbt-checkbox-1" type="checkbox" value="yes">
                                            <label for="rbt-checkbox-1">Generate Notification</label>
                                        </div>
                                        <div class="rbt-checkbox-wrapper">
                                            <input id="rbt-checkbox-2" name="rbt-checkbox-2" type="checkbox" value="yes">
                                            <label for="rbt-checkbox-2">New Notificaton</label>
                                        </div>
                                        <div class="rbt-checkbox-wrapper">
                                            <input id="rbt-checkbox-3" name="rbt-checkbox-3" type="checkbox" value="yes">
                                            <label for="rbt-checkbox-3">New Comment</label>
                                        </div>
                                        <div class="rbt-checkbox-wrapper">
                                            <input id="rbt-checkbox-4" name="rbt-checkbox-4" type="checkbox" value="yes">
                                            <label for="rbt-checkbox-4">Random Message</label>
                                        </div>
                                        <div class="rbt-checkbox-wrapper">
                                            <input id="rbt-checkbox-5" name="rbt-checkbox-5" type="checkbox" value="yes">
                                            <label for="rbt-checkbox-5">Mentioned</label>
                                        </div>
                                        <div class="rbt-checkbox-wrapper">
                                            <input id="rbt-checkbox-6" name="rbt-checkbox-6" type="checkbox" value="yes">
                                            <label for="rbt-checkbox-6">Text Notification</label>
                                        </div>
                                    </div>
                                    <div class="rbt-checkbox-grp">
                                        <h5 class="title">From team</h5>
                                        <div class="rbt-checkbox-wrapper">
                                            <input id="rbt-checkbox-7" name="rbt-checkbox-7" type="checkbox" value="yes">
                                            <label for="rbt-checkbox-7">New Notificaton</label>
                                        </div>
                                        <div class="rbt-checkbox-wrapper">
                                            <input id="rbt-checkbox-8" name="rbt-checkbox-8" type="checkbox" value="yes">
                                            <label for="rbt-checkbox-8">Random Message</label>
                                        </div>
                                    </div>
                                    <div class="rbt-checkbox-grp">
                                        <h5 class="title">From Synapse</h5>
                                        <div class="rbt-checkbox-wrapper">
                                            <input id="rbt-checkbox-9" name="rbt-checkbox-9" type="checkbox" value="yes">
                                            <label for="rbt-checkbox-9">Mentioned</label>
                                        </div>
                                        <div class="rbt-checkbox-wrapper">
                                            <input id="rbt-checkbox-11" name="rbt-checkbox-11" type="checkbox" value="yes">
                                            <label for="rbt-checkbox-11">New Comment</label>
                                        </div>
                                    </div>
                                    <div class="form-group mt--40 mb--0">
                                        <a class="btn-default" href="#">Save Changes</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--..::New Chat Section Modal HTML ::..-->
        <div id="newchatModal" class="modal rbt-modal-box copy-modal fade" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content wrapper">
                    <div class="section-title text-center mb--30 sal-animate" data-sal="slide-up" data-sal-duration="400" data-sal-delay="150">
                        <h3 class="title mb--0 w-600">Unlock the power of AI</h3>
                    </div>
                    <div class="genarator-section">
                        <ul class="genarator-card-group">
                            <li>
                                <a href="text-generator.php" class="genarator-card">
                                    <div class="inner">
                                        <div class="left-align">
                                            <div class="img-bar">
                                                <img src="assets/images/generator-icon/text.png" alt="AI Generator">
                                            </div>
                                            <h5 class="title">Text Generator</h5>
                                        </div>
                                        <div class="right-align">
                                            <div class="icon-bar"><i class="fa-sharp fa-solid fa-arrow-right"></i></div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="image-generator.php" class="genarator-card">
                                    <div class="inner">
                                        <div class="left-align">
                                            <div class="img-bar">
                                                <img src="assets/images/generator-icon/photo.png" alt="AI Generator">
                                            </div>
                                            <h5 class="title">Image Generator</h5>
                                        </div>
                                        <div class="right-align">
                                            <div class="icon-bar"><i class="fa-sharp fa-solid fa-arrow-right"></i></div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="image-editor.php" class="genarator-card">
                                    <div class="inner">
                                        <div class="left-align">
                                            <div class="img-bar">
                                                <img src="assets/images/generator-icon/photo.png" alt="AI Generator">
                                            </div>
                                            <h5 class="title">Photo Editor</h5>
                                        </div>
                                        <div class="right-align">
                                            <div class="icon-bar"><i class="fa-sharp fa-solid fa-arrow-right"></i></div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="code-generator.php" class="genarator-card">
                                    <div class="inner">
                                        <div class="left-align">
                                            <div class="img-bar">
                                                <img src="assets/images/generator-icon/code-editor.png" alt="AI Generator">
                                            </div>
                                            <h5 class="title">Code Generator</h5>
                                        </div>
                                        <div class="right-align">
                                            <div class="icon-bar"><i class="fa-sharp fa-solid fa-arrow-right"></i></div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="text-generator.php" class="genarator-card">
                                    <div class="inner">
                                        <div class="left-align">
                                            <div class="img-bar">
                                                <img src="assets/images/generator-icon/text-voice.png" alt="AI Generator">
                                            </div>
                                            <h5 class="title">Text to speech</h5>
                                        </div>
                                        <div class="right-align">
                                            <div class="icon-bar"><i class="fa-sharp fa-solid fa-arrow-right"></i></div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="text-generator.php" class="genarator-card">
                                    <div class="inner">
                                        <div class="left-align">
                                            <div class="img-bar">
                                                <img src="assets/images/generator-icon/voice.png" alt="AI Generator">
                                            </div>
                                            <h5 class="title">Speech to text</h5>
                                        </div>
                                        <div class="right-align">
                                            <div class="icon-bar"><i class="fa-sharp fa-solid fa-arrow-right"></i></div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="video-generator.php" class="genarator-card">
                                    <div class="inner">
                                        <div class="left-align">
                                            <div class="img-bar">
                                                <img src="assets/images/generator-icon/video-camera.png" alt="AI Generator">
                                            </div>
                                            <h5 class="title">Video Generator</h5>
                                        </div>
                                        <div class="right-align">
                                            <div class="icon-bar"><i class="fa-sharp fa-solid fa-arrow-right"></i></div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="genarator-card disabled" tabindex="-1">
                                    <div class="inner">
                                        <div class="left-align">
                                            <div class="img-bar">
                                                <img src="assets/images/generator-icon/website-design.png" alt="AI Generator">
                                            </div>
                                            <h5 class="title">Website Generator</h5>
                                        </div>
                                        <div class="right-align">
                                            <span class="rainbow-badge-card">Coming</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="code-generator.php" class="genarator-card">
                                    <div class="inner">
                                        <div class="left-align">
                                            <div class="img-bar">
                                                <img src="assets/images/generator-icon/code-editor.png" alt="AI Generator">
                                            </div>
                                            <h5 class="title">HTML Generator</h5>
                                        </div>
                                        <div class="right-align">
                                            <div class="icon-bar"><i class="fa-sharp fa-solid fa-arrow-right"></i></div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="text-generator.php" class="genarator-card disabled" tabindex="-1">
                                    <div class="inner">
                                        <div class="left-align">
                                            <div class="img-bar">
                                                <img src="assets/images/generator-icon/document.png" alt="AI Generator">
                                            </div>
                                            <h5 class="title">Chat with Documents</h5>
                                        </div>
                                        <div class="right-align">
                                            <span class="rainbow-badge-card">Coming</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="email-generator.php" class="genarator-card">
                                    <div class="inner">
                                        <div class="left-align">
                                            <div class="img-bar">
                                                <img src="assets/images/generator-icon/email.png" alt="AI Generator">
                                            </div>
                                            <h5 class="title">Email Writer</h5>
                                        </div>
                                        <div class="right-align">
                                            <div class="icon-bar"><i class="fa-sharp fa-solid fa-arrow-right"></i></div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="genarator-card disabled" tabindex="-1">
                                    <div class="inner">
                                        <div class="left-align">
                                            <div class="img-bar">
                                                <img src="assets/images/generator-icon/lyrics.png" alt="AI Generator">
                                            </div>
                                            <h5 class="title">Lyrics Generator</h5>
                                        </div>
                                        <div class="right-align">
                                            <span class="rainbow-badge-card">Coming</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <button class="close-button" data-bs-dismiss="modal">
                        <i class="fa-sharp fa-regular fa-x"></i>
                    </button>
                </div>
            </div>
        </div>

        <!--..::Like_DisLike_Share Modal HTML ::..-->
        <?php include './partials/like_section.php' ?>

        <!--..::DisLike Section Modal HTML ::..-->
        <?php include './partials/dislike.php' ?>

        <!--..::Share Section Modal HTML ::..-->
        <?php include './partials/share.php' ?>

    </main>
    <!--..:: All Scripts  ::..-->
    <?php include './partials/Scripts.php' ?>
</body>

</html>
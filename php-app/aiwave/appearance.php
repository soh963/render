<!DOCTYPE html>
<html lang="en">

<?php $title='Settings' ?>

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
                                <!--..:: AiWaveApearance Select ::..-->
                                <div class="single-settings-box">
                                    <h4 class="title">Appearance</h4>
                                    <div class="switcher-btn-grp">
                                        <button class="dark-switcher active">
                                            <img src="assets/images/switcher-img/dark.png" alt="Switcher Image">
                                            <span class="text">Dark Mode</span>
                                        </button>
                                        <button class="light-switcher disabled" disabled>
                                            <img src="assets/images/switcher-img/light.png" alt="Switcher Image">
                                            <span class="text">Light Mode</span>
                                            <s class="rainbow-badge-card badge-sm position-top-right">Coming</s>
                                        </button>
                                    </div>
                                </div>

                                <!--..:: AiWaveLanguage Select ::..-->
                                <div class="single-settings-box">
                                    <h4 class="title">Languages</h4>
                                    <div class="select-area">
                                        <h6 class="text">System Language</h6>

                                        <div class="rbt-modern-select bg-transparent height-45">
                                            <select>
                                                <option data-content="<img class='left-image' src='assets/images/icons/en-us.png' alt='Language Images'> English">English</option>
                                                <option data-content="<img class='left-image' src='assets/images/icons/fr.png' alt='Language Images'> Spanish">Spanish</option>
                                                <option data-content="<img class='left-image' src='assets/images/icons/en-us.png' alt='Language Images'> Italiic">Italic</option>
                                                <option data-content="<img class='left-image' src='assets/images/icons/fr.png' alt='Language Images' > French">French</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="select-area mt--20">
                                        <h6 class="text">Generate Language</h6>

                                        <div class="rbt-modern-select bg-transparent height-45">
                                            <select>
                                                <option data-content="<img class='left-image' src='assets/images/icons/en-us.png' alt='Language Images'> English">English</option>
                                                <option data-content="<img class='left-image' src='assets/images/icons/fr.png' alt='Language Images'> Spanish">Spanish</option>
                                                <option data-content="<img class='left-image' src='assets/images/icons/en-us.png' alt='Language Images'> Italiic">Italic</option>
                                                <option selected data-content="<img class='left-image' src='assets/images/icons/fr.png' alt='Language Images' > French">French</option>
                                            </select>
                                        </div>
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
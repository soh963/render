<!DOCTYPE html>
<html lang="en">

<?php $title='Dashboard' ?>

<?php include './partials/head.php' ?>

<body>
    <main class="page-wrapper rbt-dashboard-page">
        <div class="rbt-panel-wrapper">

        <?php include './partials/header_2.php' ?>

            <?php include './partials/pop_mobile.php' ?>

            <!--..:: Imroz Preloader ::..-->
            <?php include './partials/preloader.php' ?>

            <!--..:: Start Left panel ::..-->
            <div class="rbt-left-panel popup-dashboardleft-section">
                <div class="rbt-default-sidebar">
                    <div class="inner">
                        <div class="content-item-content">
                            <div class="rbt-default-sidebar-wrapper">
                                <nav class="mainmenu-nav">
                                    <ul class="dashboard-mainmenu rbt-default-sidebar-list">
                                        <li><a href="text-generator.php"><img src="assets/images/generator-icon/text.png" alt="AI Generator"><span>Text Generator</span></a></li>
                                        <li><a href="image-generator.php"><img src="assets/images/generator-icon/photo.png" alt="AI Generator"><span>Image Generator</span>
                                                <div class="rainbow-badge-card badge-sm ml--10">NEW</div>
                                            </a></li>
                                        <li><a href="code-generator.php"><img src="assets/images/generator-icon/code-editor.png" alt="AI Generator"><span>Code Generator</span></a></li>
                                        <li><a href="image-editor.php"><img src="assets/images/generator-icon/photo.png" alt="AI Generator"><span>Image Editor</span></a></li>
                                        <li><a href="video-generator.php"><img src="assets/images/generator-icon/video-camera.png" alt="AI Generator"><span>Video Generator</span></a></li>
                                        <li><a href="email-generator.php"><img src="assets/images/generator-icon/email.png" alt="AI Generator"><span>Email Generator</span></a></li>
                                        <li><a tabindex="-1" class="disabled" aria-disabled="true"><img src="assets/images/generator-icon/website-design.png" alt="AI Generator"><span>Website Generator</span>
                                                <div class="rainbow-badge-card badge-sm ml--10">PRO</div>
                                            </a></li>
                                    </ul>
                                </nav>

                                <div class="rbt-sm-separator"></div>

                                <nav class="mainmenu-nav">
                                    <ul class="dashboard-mainmenu rbt-default-sidebar-list">
                                        <li class="has-submenu"><a class="collapse-btn collapsed" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="fa-sharp fa-solid fa-circle-plus"></i><span>Setting</span></a>
                                            <div class="collapse" id="collapseExample">
                                                <ul class="submenu rbt-default-sidebar-list">
                                                    <li>
                                                        <a href="profile-details.php">
                                                            <i class="fa-sharp fa-regular fa-user"></i>
                                                            <span>Profile Details</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="notification.php">
                                                            <i class="fa-sharp fa-regular fa-shopping-bag"></i>
                                                            <span>Notification</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="chat-export.php">
                                                            <i class="fa-sharp fa-regular fa-users"></i>
                                                            <span>Chat Export</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="appearance.php">
                                                            <i class="fa-sharp fa-regular fa-home"></i>
                                                            <span>Apperance</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="plans-billing.php">
                                                            <i class="fa-sharp fa-regular fa-briefcase"></i>
                                                            <span>Plans and Billing</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="sessions.php">
                                                            <i class="fa-sharp fa-regular fa-users"></i>
                                                            <span>Sessions</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="application.php">
                                                            <i class="fa-sharp fa-regular fa-list"></i>
                                                            <span>Application</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="#"><i class="fa-sharp fa-regular fa-award"></i><span>Help & FAQ</span></a></li>
                                    </ul>
                                    <div class="rbt-sm-separator"></div>
                                    <ul class="dashboard-mainmenu rbt-default-sidebar-list">
                                        <li><a href="release-notes.php"><i class="fa-sharp fa-regular fa-bell"></i><span>Release notes</span></a></li>
                                        <li><a href="terms-policy.php"><i class="fa-sharp fa-regular fa-briefcase"></i><span>Terms & Policy</span></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="subscription-box">
                        <div class="inner">
                            <a href="profile-details.php" class="autor-info">
                                <div class="author-img active">
                                    <img class="w-100" src="assets/images/team/team-01sm.jpg" alt="Author">
                                </div>
                                <div class="author-desc">
                                    <h6>Adam Milner</h6>
                                    <p>trentadam@net</p>
                                </div>
                                <div class="author-badge">Free</div>
                            </a>
                            <div class="btn-part">
                                <a href="pricing.php" class="btn-default btn-border">Upgrade To Pro</a>
                            </div>
                        </div>
                    </div>
                    <p class="subscription-copyright copyright-text text-center b3  small-text">© 2024 <a href="https://themeforest.net/user/pixcelsthemes">Pixcels Themes</a>.</p>
                </div>
            </div>
            <!--..:: End Left panel ::..-->

            <!--..:: Main content ::..-->
            <div class="rbt-main-content">
                <div class="rbt-daynamic-page-content">

                    <!--..:: Dashboard Center Content ::..-->
                    <div class="rbt-dashboard-content">
                        <div class="banner-area">
                            <!--..:: AiWavesmall Slider ::..-->
                            <div class="rainbow-slider-section slick-grid-15 rainbow-slick-dot sm-slider-carosel-activation">
                                <div class="aiwave-small-slider slide-single-layout">
                                    <div class="inner bg-one">
                                        <div class="content">
                                            <h4 class="title">Frequently Asked Questions</h4>
                                            <p class="desc">Explore our comprehensive repository</p>
                                        </div>
                                        <div class="img-section">
                                            <img src="assets/images/slider-bg/slider-sm-01.png" alt="sm slider img">
                                        </div>
                                    </div>
                                </div>
                                <div class="aiwave-small-slider slide-single-layout">
                                    <div class="inner bg-three">
                                        <div class="content">
                                            <h4 class="title">Cognitive Services Hub</h4>
                                            <p class="desc">Immerse yourself in the world of cutting-edge</p>
                                        </div>
                                        <div class="img-section">
                                            <img src="assets/images/slider-bg/slider-sm-03.png" alt="sm slider img">
                                        </div>
                                    </div>
                                </div>
                                <div class="aiwave-small-slider slide-single-layout">
                                    <div class="inner bg-four">
                                        <div class="content">
                                            <h4 class="title">Best Quantum AI Services</h4>
                                            <p class="desc">Elevate your ventures with our AI Services</p>
                                        </div>
                                        <div class="img-section">
                                            <img src="assets/images/slider-bg/slider-sm-02.png" alt="sm slider img">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content-page">
                            <div class="chat-box-list">

                                <div class="welcome-wrapper">
                                    <div class="content-section">
                                        <h4 class="title">👋 Welcome, Adam</h4>
                                    </div>
                                    <div class="btn-section">
                                        <a class="btn-default bg-solid-primary" data-bs-toggle="modal" data-bs-target="#newchatModal">
                                            <span class="icon"><i class="fa-sharp fa-regular fa-circle-plus"></i></span>
                                            <span>New Chat</span>
                                        </a>
                                    </div>
                                </div>

                                <!--..:: AiWaveGenerator ::..-->
                                <div class="rainbow-generartor-section rainbow-section-gap">
                                    <div class="section-title text-center sal-animate" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                                        <h4 class="subtitle "><span class="theme-gradient">ChaetenAI</span></h4>
                                        <h2 class="title w-600 mb--20">Unleashing the Power of ChatAI</h2>
                                        <p class="description b1">We provide Mastering the Art of ChatAI generate your text <br>Pioneering Conversations with AI.</p>
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
                                </div>

                            </div>
                        </div>
                        <div class="rbt-static-bar collapse-width">
                            <form class="new-chat-form border-gradient">
                                <textarea id="txtarea" rows="1" placeholder="Send a message..."></textarea>
                                <div class="left-icons">
                                    <div title="AiWave" class="form-icon icon-gpt">
                                        <i class="fa-sharp fa-regular fa-aperture"></i>
                                    </div>
                                </div>
                                <div class="right-icons">
                                    <div class="form-icon icon-plus" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="Choose File">
                                        <input type="file" class="input-file" name="myfile" multiple>
                                        <i class="fa-sharp fa-regular fa-circle-plus"></i>
                                    </div>
                                    <button class="form-icon icon-mic" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="Voice Search">
                                        <i class="fa-sharp fa-regular fa-microphone"></i>
                                    </button>
                                    <button class="form-icon icon-send" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="Send message">
                                        <i class="fa-sharp fa-regular fa-paper-plane"></i>
                                    </button>
                                </div>
                            </form>
                            <ul class="staticbar-btn-grp d-none d-md-flex">
                                <li>
                                    <button class="btn-default btn-small btn-border"><span>Ask Tough Question</span>
                                    </button>
                                </li>
                                <li>
                                    <button class="btn-default btn-small btn-border"><span>Create Image Artwork</span>
                                    </button>
                                </li>
                                <li>
                                    <button class="btn-default btn-small btn-border"><span>Image Editor Options</span>
                                    </button>
                                </li>
                                <li>
                                    <button class="btn-default btn-small btn-border"><span>Give Voice command</span>
                                    </button>
                                </li>
                            </ul>
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
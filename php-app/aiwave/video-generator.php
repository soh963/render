<!DOCTYPE html>
<html lang="en">

<?php $title='Video-Generator' ?>

<?php include './partials/head.php' ?>

<body>
    <main class="page-wrapper rbt-dashboard-page">
        <div class="rbt-panel-wrapper">

        <?php include './partials/header.php' ?>

        <?php include './partials/pop_mobile.php' ?>

            <!--..:: Imroz Preloader ::..-->
            <?php include './partials/preloader.php' ?>

            <!--..:: Start Left panel ::..-->
            <?php include './partials/Start_Left_panel.php' ?>
            <!--..:: End Left panel ::..-->

            <!--..:: Main content ::..-->
            <div class="rbt-main-content">
                <div class="rbt-daynamic-page-content">

                    <!--..:: Dashboard Center Content ::..-->
                    <div class="rbt-dashboard-content">
                        <div class="content-page">
                            <div class="chat-box-section">
                                <div class="chat-top-bar">
                                    <div class="section-title">
                                        <div class="icon">
                                            <img src="assets/images/icons/video-icon.png" alt="">
                                        </div>
                                        <h6 class="title">Create a talking avatar for this script:</h6>
                                    </div>
                                    <div class="dropdown history-box-dropdown">
                                        <button type="button" class="more-info-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa-regular fa-ellipsis"></i>
                                        </button>
                                        <ul class="dropdown-menu style-one">
                                            <li><a class="dropdown-item" href="#"><i class="fa-sharp fa-solid fa-arrows-rotate"></i> Regenerate</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa-sharp fa-solid fa-tag"></i> Pin Chat</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-file-lines"></i> Rename</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-share-nodes"></i> Share</a></li>
                                            <li><a class="dropdown-item delete-item" href="#"><i class="fa-solid fa-trash-can"></i> Delete Chat</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="chat-box-list pt--30" id="chatContainer">

                                    <!--..:: Video Generator ::..-->
                                    <div class="chat-box author-speech ">
                                        <div class="inner">
                                            <div class="chat-section">
                                                <div class="author">
                                                    <img class="w-100" src="assets/images/team/team-01sm.jpg" alt="Author">
                                                </div>
                                                <div class="chat-content">
                                                    <h6 class="title">Adam Milner</h6>
                                                    <p class="mb--10">Create a talking avatar for this script</p>
                                                    <p class="mb--20">Create a talking avatar for this script: "Welcome to our new product, the Talking Avatar Video Creator. With this powerful tool, you can easily create engaging videos featuring a virtual spokesperson that delivers your message in a personalized and natural way.</p>
                                                    <div class="img-box img-box-frame w-100">
                                                        <img class="w-100 radius" src="assets/images/generator-img/photo-11.png" alt="Image Generation">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-box ai-speech ">
                                        <div class="inner">
                                            <div class="chat-section generate-section">
                                                <div class="author">
                                                    <i class="fa-sharp fa-solid fa-check"></i>
                                                </div>
                                                <div class="chat-content">
                                                    <h6 class="title color-text-off mb--0">Scanning the data...</h6>
                                                </div>
                                            </div>
                                            <div class="chat-section generate-section">
                                                <div class="author">
                                                    <img src="assets/images/icons/loader-one.gif" alt="Loader Animated Icon">
                                                </div>
                                                <div class="chat-content">
                                                    <h6 class="title color-text-off mb--0">Generating answers for you…</h6>
                                                </div>
                                            </div>
                                            <div class="chat-section generate-details-section">
                                                <div class="author">
                                                    <img class="w-100" src="assets/images/team/avater.png" alt="AiWave">
                                                </div>
                                                <div class="chat-content">
                                                    <p class="mb--20">In alignment with the gender identified in the uploaded image, the video has been automatically generated with a male voice. Nevertheless, you retain the flexibility to tailor your video by choosing from the provided customization options below:</p>

                                                    <div class="image-caption mb--20">
                                                        <h5 class="caption-title theme-gradient">Unleash the Power of Persuasion! 3:1 --q 4 --s 580</h5>
                                                    </div>
                                                    <div class="video-popup icon-center frame-image gradient-secondary frame-image-author mb--20 p-0">
                                                        <img class="w-100 radius" src="assets/images/generator-img/photo-11.png" alt="Image Generation">
                                                        <div class="video-icon">
                                                            <a class="btn-default rounded-player popup-video border bg-white-dropshadow" href="https://www.youtube.com/watch?v=ikEdN260zRg">
                                                                <span><i class="fa-duotone fa-play"></i></span>
                                                            </a>
                                                        </div>
                                                        <button class="download-btn btn-default btn-small bg-solid-primary">
                                                            <i class="fa-sharp fa-regular fa-download"></i><span>Download</span>
                                                        </button>
                                                    </div>
                                                    <div class="reaction-section">
                                                        <div class="btn-grp">
                                                            <div class="left-side-btn dropup">
                                                                <button data-bs-toggle="modal" data-bs-target="#likeModal" class="react-btn btn-default btn-small btn-border"><i class="fa-sharp fa-regular fa-thumbs-up"></i></button>
                                                                <button data-bs-toggle="modal" data-bs-target="#dislikeModal" class="react-btn btn-default btn-small btn-border"><i class="fa-sharp fa-regular fa-thumbs-down"></i></button>
                                                                <button data-bs-toggle="modal" data-bs-target="#shareModal" class="react-btn btn-default btn-small btn-border"><i class="fa-sharp fa-solid fa-share"></i></button>
                                                                <button type="button" class="react-btn btn-default btn-small btn-border dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="fa-regular fa-ellipsis-vertical"></i>
                                                                </button>
                                                                <ul class="dropdown-menu style-one">
                                                                    <li><a class="dropdown-item" href="#"><i class="fa-sharp fa-solid fa-copy"></i> Copy</a></li>
                                                                    <li><a class="dropdown-item" href="#"><i class="fa-sharp fa-solid fa-tag"></i> Pin Chat</a></li>
                                                                    <li><a class="dropdown-item" href="#"><i class="fa-solid fa-file-lines"></i> Rename</a></li>
                                                                    <li><a class="dropdown-item delete-item" href="#"><i class="fa-solid fa-trash-can"></i> Delete Chat</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="right-side-btn">
                                                                <button class="react-btn btn-default btn-small btn-border">
                                                                    <i class="fa-sharp fa-solid fa-repeat"></i><span>Regenerate</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>


                                <div class="rbt-static-bar">
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
                                                <i class="fa-sharp fa-regular fa-plus"></i>
                                            </div>
                                            <button class="form-icon icon-mic" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="Voice Search">
                                                <i class="fa-regular fa-waveform-lines"></i>
                                            </button>
                                            <button class="form-icon icon-send" id="sendButton" onclick="sendMessage()" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="Send message">
                                                <i class="fa-sharp fa-solid fa-paper-plane-top"></i>
                                            </button>
                                        </div>
                                    </form>
                                    <p class="b3 small-text">AiWave can make mistakes. Consider checking important information.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--..:: Dashboard Right Content ::..-->
                    <div class="rbt-right-side-panel popup-dashboardright-section">

                        <div class="right-side-top">
                            <a class="btn-default bg-solid-primary" data-bs-toggle="modal" data-bs-target="#newchatModal">
                                <span class="icon"><i class="fa-sharp fa-regular fa-circle-plus"></i></span>
                                <span>New Chat</span>
                            </a>
                        </div>
                        <div class="right-side-bottom">
                            <div class="small-search search-section mb--20">
                                <input type="search" placeholder="Search Here...">
                                <i class="fa-sharp fa-regular fa-search"></i>
                            </div>

                            <div class="chat-history-section">
                                <h6 class="title">Today</h6>
                                <ul class="chat-history-list">
                                    <li class="history-box active">
                                        AiWaveDefination
                                        <div class="dropdown history-box-dropdown">
                                            <button type="button" class="more-info-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-regular fa-ellipsis"></i>
                                            </button>
                                            <ul class="dropdown-menu style-one">
                                                <li><a class="dropdown-item" href="#"><i class="fa-sharp fa-solid fa-arrows-rotate"></i> Regenerate</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-sharp fa-solid fa-tag"></i> Pin Chat</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-file-lines"></i> Rename</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-share-nodes"></i> Share</a></li>
                                                <li><a class="dropdown-item delete-item" href="#"><i class="fa-solid fa-trash-can"></i> Delete Chat</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="history-box">
                                        Your last Question
                                        <div class="dropdown history-box-dropdown">
                                            <button type="button" class="more-info-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-regular fa-ellipsis"></i>
                                            </button>
                                            <ul class="dropdown-menu style-one">
                                                <li><a class="dropdown-item" href="#"><i class="fa-sharp fa-solid fa-arrows-rotate"></i> Regenerate</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-sharp fa-solid fa-tag"></i> Pin Chat</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-file-lines"></i> Rename</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-share-nodes"></i> Share</a></li>
                                                <li><a class="dropdown-item delete-item" href="#"><i class="fa-solid fa-trash-can"></i> Delete Chat</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="history-box">
                                        Business Shortcurt Methode
                                        <div class="dropdown history-box-dropdown">
                                            <button type="button" class="more-info-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-regular fa-ellipsis"></i>
                                            </button>
                                            <ul class="dropdown-menu style-one">
                                                <li><a class="dropdown-item" href="#"><i class="fa-sharp fa-solid fa-arrows-rotate"></i> Regenerate</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-sharp fa-solid fa-tag"></i> Pin Chat</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-file-lines"></i> Rename</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-share-nodes"></i> Share</a></li>
                                                <li><a class="dropdown-item delete-item" href="#"><i class="fa-solid fa-trash-can"></i> Delete Chat</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="history-box">
                                        Best way to maintain code Quality
                                        <div class="dropdown history-box-dropdown">
                                            <button type="button" class="more-info-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-regular fa-ellipsis"></i>
                                            </button>
                                            <ul class="dropdown-menu style-one">
                                                <li><a class="dropdown-item" href="#"><i class="fa-sharp fa-solid fa-arrows-rotate"></i> Regenerate</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-sharp fa-solid fa-tag"></i> Pin Chat</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-file-lines"></i> Rename</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-share-nodes"></i> Share</a></li>
                                                <li><a class="dropdown-item delete-item" href="#"><i class="fa-solid fa-trash-can"></i> Delete Chat</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="chat-history-section has-show-more">
                                <h6 class="title">Yesterday</h6>
                                <ul class="chat-history-list has-show-more-inner-content">
                                    <li class="history-box">
                                        How to write a code
                                        <div class="dropdown history-box-dropdown">
                                            <button type="button" class="more-info-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-regular fa-ellipsis"></i>
                                            </button>
                                            <ul class="dropdown-menu style-one">
                                                <li><a class="dropdown-item" href="#"><i class="fa-sharp fa-solid fa-arrows-rotate"></i> Regenerate</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-sharp fa-solid fa-tag"></i> Pin Chat</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-file-lines"></i> Rename</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-share-nodes"></i> Share</a></li>
                                                <li><a class="dropdown-item delete-item" href="#"><i class="fa-solid fa-trash-can"></i> Delete Chat</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="history-box">
                                        Form Html CSS JS
                                        <div class="dropdown history-box-dropdown">
                                            <button type="button" class="more-info-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-regular fa-ellipsis"></i>
                                            </button>
                                            <ul class="dropdown-menu style-one">
                                                <li><a class="dropdown-item" href="#"><i class="fa-sharp fa-solid fa-arrows-rotate"></i> Regenerate</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-sharp fa-solid fa-tag"></i> Pin Chat</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-file-lines"></i> Rename</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-share-nodes"></i> Share</a></li>
                                                <li><a class="dropdown-item delete-item" href="#"><i class="fa-solid fa-trash-can"></i> Delete Chat</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="history-box">
                                        HTML Shortcurt Methode
                                        <div class="dropdown history-box-dropdown">
                                            <button type="button" class="more-info-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-regular fa-ellipsis"></i>
                                            </button>
                                            <ul class="dropdown-menu style-one">
                                                <li><a class="dropdown-item" href="#"><i class="fa-sharp fa-solid fa-arrows-rotate"></i> Regenerate</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-sharp fa-solid fa-tag"></i> Pin Chat</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-file-lines"></i> Rename</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-share-nodes"></i> Share</a></li>
                                                <li><a class="dropdown-item delete-item" href="#"><i class="fa-solid fa-trash-can"></i> Delete Chat</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="history-box">
                                        Best way to maintain code Quality
                                        <div class="dropdown history-box-dropdown">
                                            <button type="button" class="more-info-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-regular fa-ellipsis"></i>
                                            </button>
                                            <ul class="dropdown-menu style-one">
                                                <li><a class="dropdown-item" href="#"><i class="fa-sharp fa-solid fa-arrows-rotate"></i> Regenerate</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-sharp fa-solid fa-tag"></i> Pin Chat</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-file-lines"></i> Rename</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-share-nodes"></i> Share</a></li>
                                                <li><a class="dropdown-item delete-item" href="#"><i class="fa-solid fa-trash-can"></i> Delete Chat</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="history-box">
                                        AiWaveDefination
                                        <div class="dropdown history-box-dropdown">
                                            <button type="button" class="more-info-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-regular fa-ellipsis"></i>
                                            </button>
                                            <ul class="dropdown-menu style-one">
                                                <li><a class="dropdown-item" href="#"><i class="fa-sharp fa-solid fa-arrows-rotate"></i> Regenerate</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-sharp fa-solid fa-tag"></i> Pin Chat</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-file-lines"></i> Rename</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-share-nodes"></i> Share</a></li>
                                                <li><a class="dropdown-item delete-item" href="#"><i class="fa-solid fa-trash-can"></i> Delete Chat</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="history-box">
                                        Your last Question
                                        <div class="dropdown history-box-dropdown">
                                            <button type="button" class="more-info-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-regular fa-ellipsis"></i>
                                            </button>
                                            <ul class="dropdown-menu style-one">
                                                <li><a class="dropdown-item" href="#"><i class="fa-sharp fa-solid fa-arrows-rotate"></i> Regenerate</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-sharp fa-solid fa-tag"></i> Pin Chat</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-file-lines"></i> Rename</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-share-nodes"></i> Share</a></li>
                                                <li><a class="dropdown-item delete-item" href="#"><i class="fa-solid fa-trash-can"></i> Delete Chat</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="history-box">
                                        Unique Shortcurt Methode
                                        <div class="dropdown history-box-dropdown">
                                            <button type="button" class="more-info-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-regular fa-ellipsis"></i>
                                            </button>
                                            <ul class="dropdown-menu style-one">
                                                <li><a class="dropdown-item" href="#"><i class="fa-sharp fa-solid fa-arrows-rotate"></i> Regenerate</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-sharp fa-solid fa-tag"></i> Pin Chat</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-file-lines"></i> Rename</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-share-nodes"></i> Share</a></li>
                                                <li><a class="dropdown-item delete-item" href="#"><i class="fa-solid fa-trash-can"></i> Delete Chat</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="history-box">
                                        Generate a circle Image
                                        <div class="dropdown history-box-dropdown">
                                            <button type="button" class="more-info-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-regular fa-ellipsis"></i>
                                            </button>
                                            <ul class="dropdown-menu style-one">
                                                <li><a class="dropdown-item" href="#"><i class="fa-sharp fa-solid fa-arrows-rotate"></i> Regenerate</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-sharp fa-solid fa-tag"></i> Pin Chat</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-file-lines"></i> Rename</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-share-nodes"></i> Share</a></li>
                                                <li><a class="dropdown-item delete-item" href="#"><i class="fa-solid fa-trash-can"></i> Delete Chat</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                                <div class="rbt-show-more-btn">Show More</div>
                            </div>

                            <div class="chat-history-section has-show-more">
                                <h6 class="title">Previous 7 days</h6>
                                <ul class="chat-history-list has-show-more-inner-content">
                                    <li class="history-box">
                                        User Assistant Request
                                        <div class="dropdown history-box-dropdown">
                                            <button type="button" class="more-info-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-regular fa-ellipsis"></i>
                                            </button>
                                            <ul class="dropdown-menu style-one">
                                                <li><a class="dropdown-item" href="#"><i class="fa-sharp fa-solid fa-arrows-rotate"></i> Regenerate</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-sharp fa-solid fa-tag"></i> Pin Chat</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-file-lines"></i> Rename</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-share-nodes"></i> Share</a></li>
                                                <li><a class="dropdown-item delete-item" href="#"><i class="fa-solid fa-trash-can"></i> Delete Chat</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="history-box">
                                        Funtion Js
                                        <div class="dropdown history-box-dropdown">
                                            <button type="button" class="more-info-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-regular fa-ellipsis"></i>
                                            </button>
                                            <ul class="dropdown-menu style-one">
                                                <li><a class="dropdown-item" href="#"><i class="fa-sharp fa-solid fa-arrows-rotate"></i> Regenerate</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-sharp fa-solid fa-tag"></i> Pin Chat</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-file-lines"></i> Rename</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-share-nodes"></i> Share</a></li>
                                                <li><a class="dropdown-item delete-item" href="#"><i class="fa-solid fa-trash-can"></i> Delete Chat</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="history-box">
                                        Generate a Image
                                        <div class="dropdown history-box-dropdown">
                                            <button type="button" class="more-info-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-regular fa-ellipsis"></i>
                                            </button>
                                            <ul class="dropdown-menu style-one">
                                                <li><a class="dropdown-item" href="#"><i class="fa-sharp fa-solid fa-arrows-rotate"></i> Regenerate</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-sharp fa-solid fa-tag"></i> Pin Chat</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-file-lines"></i> Rename</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-share-nodes"></i> Share</a></li>
                                                <li><a class="dropdown-item delete-item" href="#"><i class="fa-solid fa-trash-can"></i> Delete Chat</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="history-box">
                                        Best way to maintain code Quality
                                        <div class="dropdown history-box-dropdown">
                                            <button type="button" class="more-info-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-regular fa-ellipsis"></i>
                                            </button>
                                            <ul class="dropdown-menu style-one">
                                                <li><a class="dropdown-item" href="#"><i class="fa-sharp fa-solid fa-arrows-rotate"></i> Regenerate</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-sharp fa-solid fa-tag"></i> Pin Chat</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-file-lines"></i> Rename</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-share-nodes"></i> Share</a></li>
                                                <li><a class="dropdown-item delete-item" href="#"><i class="fa-solid fa-trash-can"></i> Delete Chat</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="history-box">
                                        AiWaveDefination
                                        <div class="dropdown history-box-dropdown">
                                            <button type="button" class="more-info-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-regular fa-ellipsis"></i>
                                            </button>
                                            <ul class="dropdown-menu style-one">
                                                <li><a class="dropdown-item" href="#"><i class="fa-sharp fa-solid fa-arrows-rotate"></i> Regenerate</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-sharp fa-solid fa-tag"></i> Pin Chat</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-file-lines"></i> Rename</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-share-nodes"></i> Share</a></li>
                                                <li><a class="dropdown-item delete-item" href="#"><i class="fa-solid fa-trash-can"></i> Delete Chat</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="history-box">
                                        Your last Question
                                        <div class="dropdown history-box-dropdown">
                                            <button type="button" class="more-info-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-regular fa-ellipsis"></i>
                                            </button>
                                            <ul class="dropdown-menu style-one">
                                                <li><a class="dropdown-item" href="#"><i class="fa-sharp fa-solid fa-arrows-rotate"></i> Regenerate</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-sharp fa-solid fa-tag"></i> Pin Chat</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-file-lines"></i> Rename</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-share-nodes"></i> Share</a></li>
                                                <li><a class="dropdown-item delete-item" href="#"><i class="fa-solid fa-trash-can"></i> Delete Chat</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="history-box">
                                        Business Shortcurt Methode
                                        <div class="dropdown history-box-dropdown">
                                            <button type="button" class="more-info-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-regular fa-ellipsis"></i>
                                            </button>
                                            <ul class="dropdown-menu style-one">
                                                <li><a class="dropdown-item" href="#"><i class="fa-sharp fa-solid fa-arrows-rotate"></i> Regenerate</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-sharp fa-solid fa-tag"></i> Pin Chat</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-file-lines"></i> Rename</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-share-nodes"></i> Share</a></li>
                                                <li><a class="dropdown-item delete-item" href="#"><i class="fa-solid fa-trash-can"></i> Delete Chat</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="history-box">
                                        Best way to maintain Remote Team
                                        <div class="dropdown history-box-dropdown">
                                            <button type="button" class="more-info-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-regular fa-ellipsis"></i>
                                            </button>
                                            <ul class="dropdown-menu style-one">
                                                <li><a class="dropdown-item" href="#"><i class="fa-sharp fa-solid fa-arrows-rotate"></i> Regenerate</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-sharp fa-solid fa-tag"></i> Pin Chat</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-file-lines"></i> Rename</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-share-nodes"></i> Share</a></li>
                                                <li><a class="dropdown-item delete-item" href="#"><i class="fa-solid fa-trash-can"></i> Delete Chat</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                                <div class="rbt-show-more-btn">Show More</div>
                            </div>

                            <div class="chat-history-section mb--100 has-show-more">
                                <h6 class="title">November</h6>
                                <ul class="chat-history-list has-show-more-inner-content">
                                    <li class="history-box">
                                        AI writing: Free Trial
                                        <div class="dropdown history-box-dropdown">
                                            <button type="button" class="more-info-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-regular fa-ellipsis"></i>
                                            </button>
                                            <ul class="dropdown-menu style-one">
                                                <li><a class="dropdown-item" href="#"><i class="fa-sharp fa-solid fa-arrows-rotate"></i> Regenerate</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-sharp fa-solid fa-tag"></i> Pin Chat</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-file-lines"></i> Rename</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-share-nodes"></i> Share</a></li>
                                                <li><a class="dropdown-item delete-item" href="#"><i class="fa-solid fa-trash-can"></i> Delete Chat</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="history-box">
                                        Your last Question
                                        <div class="dropdown history-box-dropdown">
                                            <button type="button" class="more-info-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-regular fa-ellipsis"></i>
                                            </button>
                                            <ul class="dropdown-menu style-one">
                                                <li><a class="dropdown-item" href="#"><i class="fa-sharp fa-solid fa-arrows-rotate"></i> Regenerate</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-sharp fa-solid fa-tag"></i> Pin Chat</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-file-lines"></i> Rename</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-share-nodes"></i> Share</a></li>
                                                <li><a class="dropdown-item delete-item" href="#"><i class="fa-solid fa-trash-can"></i> Delete Chat</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="history-box">
                                        Education Shortcurt Methode
                                        <div class="dropdown history-box-dropdown">
                                            <button type="button" class="more-info-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-regular fa-ellipsis"></i>
                                            </button>
                                            <ul class="dropdown-menu style-one">
                                                <li><a class="dropdown-item" href="#"><i class="fa-sharp fa-solid fa-arrows-rotate"></i> Regenerate</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-sharp fa-solid fa-tag"></i> Pin Chat</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-file-lines"></i> Rename</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-share-nodes"></i> Share</a></li>
                                                <li><a class="dropdown-item delete-item" href="#"><i class="fa-solid fa-trash-can"></i> Delete Chat</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="history-box">
                                        1992 Environment Policy
                                        <div class="dropdown history-box-dropdown">
                                            <button type="button" class="more-info-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-regular fa-ellipsis"></i>
                                            </button>
                                            <ul class="dropdown-menu style-one">
                                                <li><a class="dropdown-item" href="#"><i class="fa-sharp fa-solid fa-arrows-rotate"></i> Regenerate</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-sharp fa-solid fa-tag"></i> Pin Chat</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-file-lines"></i> Rename</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-share-nodes"></i> Share</a></li>
                                                <li><a class="dropdown-item delete-item" href="#"><i class="fa-solid fa-trash-can"></i> Delete Chat</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="history-box">
                                        Senior UX/UI Design
                                        <div class="dropdown history-box-dropdown">
                                            <button type="button" class="more-info-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-regular fa-ellipsis"></i>
                                            </button>
                                            <ul class="dropdown-menu style-one">
                                                <li><a class="dropdown-item" href="#"><i class="fa-sharp fa-solid fa-arrows-rotate"></i> Regenerate</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-sharp fa-solid fa-tag"></i> Pin Chat</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-file-lines"></i> Rename</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-share-nodes"></i> Share</a></li>
                                                <li><a class="dropdown-item delete-item" href="#"><i class="fa-solid fa-trash-can"></i> Delete Chat</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="history-box">
                                        Your last Question
                                        <div class="dropdown history-box-dropdown">
                                            <button type="button" class="more-info-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-regular fa-ellipsis"></i>
                                            </button>
                                            <ul class="dropdown-menu style-one">
                                                <li><a class="dropdown-item" href="#"><i class="fa-sharp fa-solid fa-arrows-rotate"></i> Regenerate</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-sharp fa-solid fa-tag"></i> Pin Chat</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-file-lines"></i> Rename</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-share-nodes"></i> Share</a></li>
                                                <li><a class="dropdown-item delete-item" href="#"><i class="fa-solid fa-trash-can"></i> Delete Chat</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="history-box">
                                        Dark Mode Html CSS JS
                                        <div class="dropdown history-box-dropdown">
                                            <button type="button" class="more-info-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-regular fa-ellipsis"></i>
                                            </button>
                                            <ul class="dropdown-menu style-one">
                                                <li><a class="dropdown-item" href="#"><i class="fa-sharp fa-solid fa-arrows-rotate"></i> Regenerate</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-sharp fa-solid fa-tag"></i> Pin Chat</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-file-lines"></i> Rename</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-share-nodes"></i> Share</a></li>
                                                <li><a class="dropdown-item delete-item" href="#"><i class="fa-solid fa-trash-can"></i> Delete Chat</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="history-box">
                                        Best way to maintain code Quality
                                        <div class="dropdown history-box-dropdown">
                                            <button type="button" class="more-info-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-regular fa-ellipsis"></i>
                                            </button>
                                            <ul class="dropdown-menu style-one">
                                                <li><a class="dropdown-item" href="#"><i class="fa-sharp fa-solid fa-arrows-rotate"></i> Regenerate</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-sharp fa-solid fa-tag"></i> Pin Chat</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-file-lines"></i> Rename</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-share-nodes"></i> Share</a></li>
                                                <li><a class="dropdown-item delete-item" href="#"><i class="fa-solid fa-trash-can"></i> Delete Chat</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                                <div class="rbt-show-more-btn">Show More</div>
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

        <!--..::Like Section Modal HTML ::..-->
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
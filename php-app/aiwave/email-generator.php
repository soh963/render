<!DOCTYPE html>
<html lang="en">

<?php $title='Email-Generator' ?>

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
                                            <img src="assets/images/icons/document-file.png" alt="">
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

                                    <!--..:: Text Generator ::..-->
                                    <div class="chat-box author-speech ">
                                        <div class="inner">
                                            <div class="chat-section">
                                                <div class="author">
                                                    <img class="w-100" src="assets/images/team/team-01sm.jpg" alt="Author">
                                                </div>
                                                <div class="chat-content">
                                                    <h6 class="title">You</h6>
                                                    <p>Write an email to your Office boss for 2 days off</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-box ai-speech ">
                                        <div class="inner">
                                            <div class="chat-section">
                                                <div class="author">
                                                    <img class="w-100" src="assets/images/team/avater.png" alt="AiWave">
                                                </div>
                                                <div class="chat-content">
                                                    <h6 class="title">AiWave<span class="rainbow-badge-card">Bot</span></h6>
                                                    <p class="mb--20">Subject: Request for Two-Day Leave</p>
                                                    <p class="mb--20">Dear [Boss's Name],</p>
                                                    <p class="mb--20">I hope this email finds you well. I am writing to formally request a two-day leave from work on [start date] to [end date]. The reason for my request is [mention the reason briefly, such as personal commitments, family matters, or any other relevant reason].</p>
                                                    <p class="mb--20">I have ensured that all my current tasks and responsibilities are up to date, and I have briefed [colleague's name or team] about the status of my ongoing projects. I am committed to ensuring a smooth transition during my absence and will make myself available for any necessary handovers or additional information as needed.</p>
                                                    <p class="mb--20">I understand the importance of my role in the team and will do my best to minimize any disruption caused by my temporary absence. I am confident that my colleagues will be able to handle any urgent matters in my absence, and I will ensure that I am reachable in case of any critical issues that may arise.</p>
                                                    <p class="mb--20">Thank you for considering my request. I look forward to your approval and will be available to discuss any further details if necessary.</p>
                                                    <p class="mb--10">Best regards,</p>
                                                    <p class="mb--20">[Your Full Name]</p>
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
                                    <div class="chat-box author-speech ">
                                        <div class="inner">
                                            <div class="chat-section">
                                                <div class="author">
                                                    <img class="w-100" src="assets/images/team/team-01sm.jpg" alt="Author">
                                                </div>
                                                <div class="chat-content">
                                                    <h6 class="title">You</h6>
                                                    <p>Write an email to your Teacher for Study Tour</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-box ai-speech ">
                                        <div class="inner">
                                            <div class="chat-section">
                                                <div class="author">
                                                    <img class="w-100" src="assets/images/team/avater.png" alt="AiWave">
                                                </div>
                                                <div class="chat-content">
                                                    <h6 class="title">AiWave<span class="rainbow-badge-card">Bot</span></h6>
                                                    <p class="mb--20">Subject: Request for Participation in Study Tour</p>
                                                    <p class="mb--20">Dear [Teacher's Name],</p>
                                                    <p class="mb--20">I trust this email finds you in good health. My name is [Your Name], and I am a student in your [Class/Subject] class. I am writing to express my interest in and request permission to participate in the upcoming study tour that you mentioned during our recent class.</p>
                                                    <p class="mb--20">I believe that the study tour would be a valuable opportunity for practical learning and exposure to real-world applications of the concepts we have been studying in class. The prospect of gaining firsthand experience in [mention specific areas or topics of the tour] is particularly exciting, and I am eager to enhance my understanding through this practical experience.</p>
                                                    <p class="mb--20">If there are specific forms or procedures I need to follow to formally apply for participation, please guide me accordingly. Additionally, I am willing to provide any necessary information or documentation to support my request.</p>
                                                    <p class="mb--20">Thank you for considering my request. I look forward to your guidance on the next steps and appreciate the opportunity to be part of this enriching educational experience.</p>
                                                    <p class="mb--10">Best regards,</p>
                                                    <p class="mb--20">[Your Full Name]</p>
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
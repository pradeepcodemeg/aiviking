<?php
require_once 'language.php';
?>


<!DOCTYPE html>
<html lang="<?= $lang ?>">

<head>
    <title><?= $langArr['aiviking'] ?></title>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png" />
    <meta name="theme-color" content="#ffffff" />
    <!-- Css -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/select2.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/responsive.css" />
</head>

<body>
    <header class="header-section">
        <div class="container">
            <div class="hdr-singel">
                <div class="hdr-logo">
                    <a href="index.php">
                        <span><img src="images/logo.svg" alt="Logo" /></span>
                    </a>
                </div>
                <div class="rght-hdr">
                    <div class="htr-inner">
                        <nav>
                            <ul>
                                <li><a href="#home" class="active"><?= $langArr['Home'] ?></a></li>
                                <li><a href="#services"><?= $langArr['Services'] ?></a></li>
                                <li><a href="#about"><?= $langArr['About_us'] ?></a></li>
                                <li><a href="#process"><?= $langArr['Process'] ?></a></li>
                                <li><a href="#letsConnect"><?= $langArr['Lets_connect'] ?></a></li>
                            </ul>
                        </nav>
                        <div class="close-menu">
                            <span></span>
                        </div>
                    </div>
                    <div class="auth-main">
                        <div class="ltscnct-btn">
                            <a href="#letsConnect" class="btn primary-btn"><?= $langArr['Lets_connect'] ?></a>
                        </div>
                        <div class="langue-main">
                            <div class="select-box">
                                <select onchange="languageChanged()" id="languageSelect" class="selectpicker select2" title="Select Language">
                                    <!-- <option value="en"><?= $langArr['Select_Language'] ?></option> -->
                                    <option value="en" <?= ($lang == 'en') ? 'selected' : '' ?>>English</option>
                                    <option value="sv" <?= ($lang == 'sv') ? 'selected' : '' ?>>Swedish</option>
                                    <option value="no" <?= ($lang == 'no') ? 'selected' : '' ?>>Norwegian</option>
                                    <option value="da" <?= ($lang == 'da') ? 'selected' : '' ?>>Danish</option>
                                </select>
                            </div>
                        </div>
                        <div class="menu-icon">
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="overlay"></div>
        </div>
    </header>
    <main>
        <section id="home" class="banner-section" style="background-image: url(images/bnr-bg.png)">
            <div class="container">
                <div class="bnr-main">
                    <div class="bnr-inner60">
                        <div class="bnr-left">
                            <div class="bnr-description">
                                <p><?= $langArr['We_build_your_dream_online'] ?></p>
                                <h3><?= $langArr['Conquer_the_world_digitally_we_deliver_the _code_for_your_success'] ?>

                                </h3>
                                <h1><?= $langArr['aiviking'] ?></h1>
                            </div>
                        </div>
                    </div>
                    <div class="bnr-inner40">
                        <div class="card contact-card">
                            <div class="card-body">
                                <div class="form-main">
                                    <form method="POST" id="enquiry_form">
                                        <div class="form-flex">
                                            <div class="form-inner-flx-100">
                                                <div class="singel-input">
                                                    <label><?= $langArr['name'] ?><em>*</em> </label>
                                                    <input type="text" placeholder="<?= $langArr['Enter_full_name'] ?>" name="name" required />
                                                </div>
                                            </div>
                                            <div class="form-inner-flx-100">
                                                <div class="singel-input">
                                                    <label><?= $langArr['email'] ?><em>*</em></label>
                                                    <input type="email" placeholder="<?= $langArr['Enter_the_email'] ?>" name="email" required />
                                                </div>
                                            </div>
                                            <div class="form-inner-flx-48">
                                                <div class="singel-input">
                                                    <label><?= $langArr['phone_number'] ?><em>*</em></label>
                                                    <input type="text" placeholder="<?= $langArr['Enter_phone_number'] ?>" name="phone" />
                                                </div>
                                            </div>
                                            <div class="form-inner-flx-48">
                                                <div class="singel-input">
                                                    <label><?= $langArr['budget'] ?><em>*</em></label>
                                                    <div class="select-box">
                                                        <select class="selectpicker select2" title="Select Budget Range" name="budget">
                                                            <option><?= $langArr['Select_Budget_Range'] ?></option>
                                                            <option>5000</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-inner-flx-100">
                                                <div class="singel-input">
                                                    <label><?= $langArr['Description'] ?></label>
                                                    <textarea type="text" placeholder="<?= $langArr['Enter_Description'] ?>" name="description" rows="4"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bnr-btn">
                                            <button type="submit" id="send_btn" class="btn primary-btn"><?= $langArr['Send_Message'] ?></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="services" class="services-section">
            <div class="container">
                <div class="top-heading">
                    <h3> <?= $langArr['our'] ?> <span> <?= $langArr['services'] ?></span></h3>
                    <p> <?= $langArr['At_AI_Viking_we_specialize_in_delivering_cutting-edge_AI_solutions_tailored_to_your_business_needs'] ?> </p>
                </div>
                <div class="services-main">
                    <ul>
                        <li>
                            <div class="card srvces-crd">
                                <div class="srvces-contain">
                                    <div class="srvces-icon">
                                        <span>
                                            <img src="images/services-1.png" alt="" />
                                        </span>
                                    </div>
                                    <div class="srvces-description">
                                        <h3><?= $langArr['App_Development'] ?></h3>
                                        <h6><?= $langArr['Crafting_Customized_Mobile_Solutions'] ?></h6>
                                        <p><?= $langArr['Our_app_development_service_offers_tailor_made_solutions_crafted_with_cutting_edge_technologies_to_meet_your_unique_business_needs_From_conceptualization_to_deployment_we_ensure_seamless_user_experiences_across_iOS_and_Android_platforms_empowering_your_brand_to_thrive_in_the_mobile_ecosystem'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="card srvces-crd">
                                <div class="srvces-contain">
                                    <div class="srvces-icon">
                                        <span>
                                            <img src="images/services-2.png" alt="" />
                                        </span>
                                    </div>
                                    <div class="srvces-description">
                                        <h3><?= $langArr['websites'] ?></h3>
                                        <h6><?= $langArr['Designing_Dynamic_Web_Experiences'] ?></h6>
                                        <p><?= $langArr['Experience_the_epitome_of_web_excellence_with_our_web_development_service_We_blend_creativity_with_functionality_to_deliver_responsive_and_feature_rich_websites_that_captivate_your_audience_Whether_youre_launching_a_startup_or_revamping_an_existing_site_our_expertise_ensures_a_digital_presence_that_leaves_a_lasting_impression'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="card srvces-crd">
                                <div class="srvces-contain">
                                    <div class="srvces-icon">
                                        <span>
                                            <img src="images/services-3.png" alt="" />
                                        </span>
                                    </div>
                                    <div class="srvces-description">
                                        <h3><?= $langArr['AI_Solutions'] ?></h3>
                                        <h6><?= $langArr['Innovative_AI_for_Your_Business_Needs'] ?></h6>
                                        <p><?= $langArr['Unlock_the_power_of_artificial_intelligence_with_our_innovative_AI_solutions_From_predictive_analytics_to_natural_language_processing_we_harness_the_latest_advancements_to_optimize_processes_drive_insights_and_enhance_decision_making_Let_our_AI_expertise_propel_your_business_into_the_future'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section id="about" class="about-section">
            <div class="container">
                <div class="abt-main">
                    <div class="abt-inner60">
                        <div class="abt-contain">
                            <h6><?= $langArr['About_us'] ?></h6>
                            <h4><?= $langArr['Why_Choose_AI_Viking'] ?></h4>
                            <h3><?= $langArr['Fast_Professional_and_Tailored_Solutions'] ?></h3>
                            <div class="abt-description">
                                <ul>
                                    <li>
                                        <div class="abt-details">
                                            <span>
                                                <svg height="20" viewBox="0 0 24 24" width="20" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="m5.536 21.886c.146.076.305.114.464.114.2 0 .398-.06.569-.178l13-9c.27-.187.431-.494.431-.822s-.161-.635-.431-.822l-13-9c-.305-.211-.704-.236-1.033-.064-.33.173-.536.514-.536.886v18c0 .372.206.713.536.886z" />
                                                </svg></span>
                                            <p><?= $langArr['We_Handle_Projects_of_All_Sizes'] ?></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="abt-details">
                                            <span>
                                                <svg height="20" viewBox="0 0 24 24" width="20" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="m5.536 21.886c.146.076.305.114.464.114.2 0 .398-.06.569-.178l13-9c.27-.187.431-.494.431-.822s-.161-.635-.431-.822l-13-9c-.305-.211-.704-.236-1.033-.064-.33.173-.536.514-.536.886v18c0 .372.206.713.536.886z" />
                                                </svg></span>
                                            <p><?= $langArr['Customized_Budgeting_Options'] ?></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="abt-details">
                                            <span>
                                                <svg height="20" viewBox="0 0 24 24" width="20" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="m5.536 21.886c.146.076.305.114.464.114.2 0 .398-.06.569-.178l13-9c.27-.187.431-.494.431-.822s-.161-.635-.431-.822l-13-9c-.305-.211-.704-.236-1.033-.064-.33.173-.536.514-.536.886v18c0 .372.206.713.536.886z" />
                                                </svg></span>
                                            <p><?= $langArr['Multilingual_Customer_Support_Swedish_Norwegian_Danish_English'] ?></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="abt-details">
                                            <span>
                                                <svg height="20" viewBox="0 0 24 24" width="20" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="m5.536 21.886c.146.076.305.114.464.114.2 0 .398-.06.569-.178l13-9c.27-.187.431-.494.431-.822s-.161-.635-.431-.822l-13-9c-.305-.211-.704-.236-1.033-.064-.33.173-.536.514-.536.886v18c0 .372.206.713.536.886z" />
                                                </svg></span>
                                            <p><?= $langArr['Flexible_Payment_Options_Partial_Payments_for_Each_Milestone'] ?></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="abt-inner40">
                        <div class="abt-image">
                            <img src="images/abt-right.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="process" class="develpoment-section">
            <div class="container">
                <div class="top-heading">
                    <h3><?= $langArr['Our_Mobile_App_Web_Development'] ?> <span><?= $langArr['process'] ?></span></h3>
                </div>
                <div class="phase-wraqpper-max-width500">
                    <div class="phase-main">
                        <div class="repeat-data">
                            <p><?= $langArr['WE_REPEAT_UNTIL_FINSIHED'] ?></p>
                            <span class="reptdata-box"></span>
                        </div>
                        <div class="phase-inner">
                            <div class="phase-tp-heading phase-frst-line">
                                <h3><?= $langArr['PHASE_A'] ?></h3>
                            </div>
                            <div class="phase-list">
                                <ul>
                                    <li>
                                        <div class="phase-card">
                                            <div class="phase-sequence">
                                                <h4>A<span>1</span></h4>
                                            </div>
                                            <div class="phase-icon">
                                                <span>
                                                    <svg width="24" height="24" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M29.8501 10.9349C26.8651 10.9349 25.6447 8.83291 27.1289 6.25475C27.9865 4.7604 27.4753 2.85552 25.9745 2.00161L23.1214 0.375888C21.8186 -0.395918 20.1364 0.0638815 19.3613 1.36117L19.1799 1.67318C17.6957 4.25134 15.2549 4.25134 13.7541 1.67318L13.5727 1.36117C12.8306 0.0638815 11.1484 -0.395918 9.84558 0.375888L6.9925 2.00161C5.49175 2.85552 4.98051 4.77682 5.83808 6.27117C7.33883 8.83291 6.11844 10.9349 3.13343 10.9349C1.41829 10.9349 0 12.3307 0 14.0549V16.9451C0 18.6529 1.4018 20.0652 3.13343 20.0652C6.11844 20.0652 7.33883 22.1671 5.83808 24.7452C4.98051 26.2396 5.49175 28.1445 6.9925 28.9984L9.84558 30.6241C11.1484 31.3959 12.8306 30.9361 13.6057 29.6388L13.7871 29.3268C15.2714 26.7487 17.7121 26.7487 19.2129 29.3268L19.3943 29.6388C20.1694 30.9361 21.8516 31.3959 23.1544 30.6241L26.0075 28.9984C27.5082 28.1445 28.0195 26.2232 27.1619 24.7452C25.6612 22.1671 26.8816 20.0652 29.8666 20.0652C31.5817 20.0652 33 18.6693 33 16.9451V14.0549C32.9835 12.3471 31.5817 10.9349 29.8501 10.9349ZM16.4918 20.837C13.5397 20.837 11.1319 18.4394 11.1319 15.5C11.1319 12.5606 13.5397 10.163 16.4918 10.163C19.4438 10.163 21.8516 12.5606 21.8516 15.5C21.8516 18.4394 19.4438 20.837 16.4918 20.837Z" fill="#137EC6" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <h3><?= $langArr['Specification_Planning'] ?></h3>
                                            <p><?= $langArr['planning_descrp'] ?></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="phase-card">
                                            <div class="phase-sequence">
                                                <h4>A<span>2</span></h4>
                                            </div>
                                            <div class="phase-icon">
                                                <span>
                                                    <svg width="24" height="24" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M0 16.5C0 25.6127 7.3873 33 16.5 33C25.6127 33 33 25.6127 33 16.5C33 7.3873 25.6127 0 16.5 0C7.3873 0 0 7.3873 0 16.5ZM14.5664 5.80078C14.5664 4.73286 15.4321 3.86719 16.5 3.86719C17.5679 3.86719 18.4336 4.73286 18.4336 5.80078V15.3836L23.3835 18.2415C24.3084 18.7754 24.6252 19.958 24.0913 20.8828C23.5574 21.8076 22.3748 22.1245 21.4499 21.5906L15.5332 18.1746C14.9135 17.8167 14.5672 17.1676 14.5667 16.5H14.5664V5.80078Z" fill="#137EC6" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <h3><?= $langArr['Estimates_Timelines'] ?></h3>
                                            <p><?= $langArr['timelines_descrp'] ?></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="phase-card">
                                            <div class="phase-sequence">
                                                <h4>A<span>3</span></h4>
                                            </div>
                                            <div class="phase-icon">
                                                <span>
                                                    <svg width="24" height="24" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M10.1141 23.1521C16.5486 15.6758 31.1225 1.07243 37.289 0.759247C41.104 0.393851 33.5038 13.928 15.4969 28.7373M18.3711 15.4269L23.0744 20.1768L18.3711 15.4269ZM0.750015 37.9471C2.2281 32.7233 1.29558 35.2904 1.80016 29.2748C2.06889 28.3841 2.60956 25.6202 5.98664 24.2427C9.82539 22.6768 12.6396 25.0439 13.3669 26.1562C15.5098 28.4796 15.7581 31.365 13.3669 34.6612C10.9756 37.9575 3.88235 38.7764 0.750015 37.9471Z" fill="#137EC6" />
                                                        <path d="M10.1141 23.1521C16.5486 15.6758 31.1225 1.07243 37.289 0.759247C41.104 0.393851 33.5038 13.928 15.4969 28.7373M18.3711 15.4269L23.0744 20.1768M0.750015 37.9471C2.2281 32.7233 1.29558 35.2904 1.80016 29.2748C2.06889 28.3841 2.60956 25.6202 5.98664 24.2427C9.82539 22.6768 12.6396 25.0439 13.3669 26.1562C15.5098 28.4796 15.7581 31.365 13.3669 34.6612C10.9756 37.9575 3.88235 38.7764 0.750015 37.9471Z" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <h3><?= $langArr['Design_Wireframe_Prototype'] ?></h3>
                                            <p><?= $langArr['prototype_descrp'] ?></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="phase-inner">
                            <div class="phase-tp-heading phase-second-line">
                                <h3><?= $langArr['PHASE_B'] ?></h3>
                            </div>
                            <div class="phase-list">
                                <ul>
                                    <li>
                                        <div class="phase-card">
                                            <div class="phase-sequence">
                                                <h4>B<span>1</span></h4>
                                            </div>
                                            <div class="phase-icon">
                                                <span>
                                                    <svg width="24" height="24" viewBox="0 0 41 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M6.78906 13.3906H6.08594C5.50345 13.3906 5.03125 13.8628 5.03125 14.4453V19.3672C5.03125 19.9497 5.50345 20.4219 6.08594 20.4219H6.78906C7.37155 20.4219 7.84375 19.9497 7.84375 19.3672V14.4453C7.84375 13.8628 7.37155 13.3906 6.78906 13.3906Z" fill="#137EC6" />
                                                        <path d="M40.8906 9.875C40.8906 9.31556 40.6684 8.77903 40.2728 8.38345C39.8772 7.98786 39.3407 7.76562 38.7812 7.76562H28.9375V3.54688C28.9375 2.80095 28.6412 2.08558 28.1137 1.55814C27.5863 1.03069 26.8709 0.734375 26.125 0.734375H14.875C14.1291 0.734375 13.4137 1.03069 12.8863 1.55814C12.3588 2.08558 12.0625 2.80095 12.0625 3.54688V7.76562H2.21875C1.65931 7.76562 1.12278 7.98786 0.727197 8.38345C0.331612 8.77903 0.109375 9.31556 0.109375 9.875V15.5C0.112928 15.9823 0.281678 16.4489 0.5875 16.8219C0.440203 16.9559 0.321819 17.1185 0.239604 17.2999C0.157389 17.4812 0.113074 17.6775 0.109375 17.8766V28.5922C0.109375 29.5625 1.0375 30.2656 2.21875 30.2656H38.7812C39.9625 30.2656 40.8906 29.5625 40.8906 28.5922V17.8766C40.8878 17.6773 40.8438 17.4808 40.7616 17.2994C40.6793 17.1179 40.5605 16.9553 40.4125 16.8219C40.7183 16.4489 40.8871 15.9823 40.8906 15.5V9.875ZM16.9844 4.95312H24.0156V7.76562H16.9844V4.95312ZM39.0906 17.6094H37.375V19.3672C37.375 20.0199 37.1157 20.6458 36.6542 21.1073C36.1927 21.5688 35.5667 21.8281 34.9141 21.8281H34.2109C33.5583 21.8281 32.9323 21.5688 32.4708 21.1073C32.0093 20.6458 31.75 20.0199 31.75 19.3672V17.6094H9.25V19.3672C9.25 20.0199 8.99072 20.6458 8.52921 21.1073C8.06769 21.5688 7.44174 21.8281 6.78906 21.8281H6.08594C5.43326 21.8281 4.80731 21.5688 4.34579 21.1073C3.88428 20.6458 3.625 20.0199 3.625 19.3672V17.6094H1.90937C1.30469 17.6094 0.8125 17.293 0.8125 16.9062C0.8125 16.5195 1.30469 16.2031 1.90937 16.2031H3.625V14.4453C3.625 13.7926 3.88428 13.1667 4.34579 12.7052C4.80731 12.2437 5.43326 11.9844 6.08594 11.9844H6.78906C7.44174 11.9844 8.06769 12.2437 8.52921 12.7052C8.99072 13.1667 9.25 13.7926 9.25 14.4453V16.2031H31.75V14.4453C31.75 13.7926 32.0093 13.1667 32.4708 12.7052C32.9323 12.2437 33.5583 11.9844 34.2109 11.9844H34.9141C35.5667 11.9844 36.1927 12.2437 36.6542 12.7052C37.1157 13.1667 37.375 13.7926 37.375 14.4453V16.2031H39.0906C39.6953 16.2031 40.1875 16.5195 40.1875 16.9062C40.1875 17.293 39.6953 17.6094 39.0906 17.6094Z" fill="#137EC6" />
                                                        <path d="M34.9141 13.3906H34.2109C33.6284 13.3906 33.1562 13.8628 33.1562 14.4453V19.3672C33.1562 19.9497 33.6284 20.4219 34.2109 20.4219H34.9141C35.4966 20.4219 35.9688 19.9497 35.9688 19.3672V14.4453C35.9688 13.8628 35.4966 13.3906 34.9141 13.3906Z" fill="#137EC6" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <h3><?= $langArr['build'] ?></h3>
                                            <p><?= $langArr['build_descrp'] ?></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="phase-card">
                                            <div class="phase-sequence">
                                                <h4>B<span>2</span></h4>
                                            </div>
                                            <div class="phase-icon">
                                                <span>
                                                    <svg width="24" height="24" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M31.6531 15.8266V26.2653H30.6429V9.22656H25.9286V27.6123H30.6429H32.3265C32.6985 27.6123 33 27.3108 33 26.9388V15.8266H31.6531Z" fill="#137EC6" />
                                                        <path d="M28.9074 3.78176C28.8028 3.53076 28.5576 3.36731 28.2857 3.36731C28.0138 3.36731 27.7686 3.53076 27.664 3.78176L26.0128 7.74486H30.5587L28.9074 3.78176Z" fill="#137EC6" />
                                                        <path d="M25.9286 32.3265C25.9286 32.6985 26.2301 33 26.602 33H29.9694C30.3413 33 30.6429 32.6985 30.6429 32.3265V29.0939H25.9286V32.3265Z" fill="#137EC6" />
                                                        <path d="M7.7449 25.2551H5.72449V27.2755H7.7449V25.2551Z" fill="#137EC6" />
                                                        <path d="M7.7449 17.8469H5.72449V19.8673H7.7449V17.8469Z" fill="#137EC6" />
                                                        <path d="M7.7449 10.4387H5.72449V12.4591H7.7449V10.4387Z" fill="#137EC6" />
                                                        <path d="M18.5203 7.07143H17.8469H17.0388H17.0387V0H0.673469C0.301512 0 0 0.301512 0 0.673469V32.3265C0 32.6985 0.301512 33 0.673469 33H23.5714C23.9434 33 24.2449 32.6985 24.2449 32.3265V7.07143H23.5714H18.5203ZM10.102 9.42857H13.4694V10.7755H10.102V9.42857ZM10.102 16.8367H13.4694V18.1837H10.102V16.8367ZM10.102 24.2449H13.4694V25.5918H10.102V24.2449ZM9.09184 27.949C9.09184 28.3209 8.79032 28.6224 8.41837 28.6224H5.05102C4.67906 28.6224 4.37755 28.3209 4.37755 27.949V24.5816C4.37755 24.2097 4.67906 23.9082 5.05102 23.9082H8.41837C8.79032 23.9082 9.09184 24.2097 9.09184 24.5816V27.949ZM9.09184 20.5408C9.09184 20.9128 8.79032 21.2143 8.41837 21.2143H5.05102C4.67906 21.2143 4.37755 20.9128 4.37755 20.5408V17.1735C4.37755 16.8015 4.67906 16.5 5.05102 16.5H8.41837C8.79032 16.5 9.09184 16.8015 9.09184 17.1735V20.5408ZM9.09184 13.1327C9.09184 13.5046 8.79032 13.8061 8.41837 13.8061H5.05102C4.67906 13.8061 4.37755 13.5046 4.37755 13.1327V9.76531C4.37755 9.39335 4.67906 9.09184 5.05102 9.09184H8.41837C8.79032 9.09184 9.09184 9.39335 9.09184 9.76531V13.1327ZM19.1939 28.2857H10.102V26.9388H19.1939V28.2857ZM19.1939 20.8776H10.102V19.5306H19.1939V20.8776ZM19.1939 13.4694H10.102V12.1224H19.1939V13.4694Z" fill="#137EC6" />
                                                        <path d="M18.5203 0.394409V5.58975H23.7158L18.5203 0.394409Z" fill="#137EC6" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <h3><?= $langArr['test'] ?></h3>
                                            <p><?= $langArr['test_descrp'] ?></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="phase-card">
                                            <div class="phase-sequence">
                                                <h4>B<span>3</span></h4>
                                            </div>
                                            <div class="phase-icon">
                                                <span>
                                                    <svg width="24" height="24" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M25.8 6H19.2C13.7893 6 11.0839 6 9.1662 7.32246C8.4567 7.81171 7.83958 8.41948 7.3428 9.11823C6 11.0069 6 13.6713 6 19C6 24.3287 6 26.9931 7.3428 28.8818C7.83958 29.5805 8.4567 30.1883 9.1662 30.6776C11.0839 32 13.7893 32 19.2 32H25.8C31.2107 32 33.916 32 35.8338 30.6776C36.5433 30.1883 37.1604 29.5805 37.6572 28.8818C39 26.9931 39 24.3287 39 19C39 13.6713 39 11.0069 37.6572 9.11823C37.1604 8.41948 36.5433 7.81171 35.8338 7.32246C33.916 6 31.2107 6 25.8 6Z" fill="#137EC6" stroke="#137EC6" stroke-width="1.332" stroke-linecap="round" />
                                                        <path d="M27 39L26.4321 38.2669C25.1519 36.6146 24.8344 34.0902 25.6442 32M18 39L18.5679 38.2669C19.8481 36.6146 20.1656 34.0902 19.3558 32" stroke="#5DB7F4" stroke-width="1.332" stroke-linecap="round" />
                                                        <path d="M14 39H31" stroke="#5DB7F4" stroke-width="1.332" stroke-linecap="round" />
                                                        <path d="M21 28H24" stroke="#5DB7F4" stroke-width="1.332" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <h3><?= $langArr['launch'] ?></h3>
                                            <p><?= $langArr['launch_descrp'] ?></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="letsConnect" class="calendar-section">
            <div class="container">
                <div class="calendar-main">
                    <div class="calendar-inner50">
                        <div class="calendar-image">
                            <a href="https://calendly.com/sales-karlsson/30min?back=1&month=2024-03" target="_blank">
                                <img src="images/Calendar.png" alt="" />
                            </a>
                        </div>
                    </div>
                    <div class="calendar-inner50">
                        <div class="clender-description">
                            <h6><?= $langArr['calendar'] ?></h6>
                            <h3><?= $langArr['Book_a'] ?> <span><?= $langArr['consultation'] ?> </span><?= $langArr['and_get_Customized_Quote_from_Our_Expert_Team'] ?></h3>
                            <p><?= $langArr[' In_our_Calendar_section_easily_schedule_consultations_via_video_or_voice_calls_Discuss_your_project_needs_with_AI_Viking_for_tailored_solutions_Book_now_for_personalized_attention'] ?></p>
                        </div>
                        <div class="clender-btn">
                            <a href="#" class="btn primary-btn"><?= $langArr['Book_Now'] ?></a>
                            <a href="#" class="btn secondary-btn"><span>
                                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.74129 5.44482C6.80129 6.33482 6.95129 7.20482 7.19129 8.03482L5.99129 9.23482C5.58129 8.03482 5.32129 6.76482 5.23129 5.44482H6.74129ZM16.6013 17.4648C17.4513 17.7048 18.3213 17.8548 19.2013 17.9148V19.4048C17.8813 19.3148 16.6113 19.0548 15.4013 18.6548L16.6013 17.4648ZM7.70129 3.44482H4.20129C3.65129 3.44482 3.20129 3.89482 3.20129 4.44482C3.20129 13.8348 10.8113 21.4448 20.2013 21.4448C20.7513 21.4448 21.2013 20.9948 21.2013 20.4448V16.9548C21.2013 16.4048 20.7513 15.9548 20.2013 15.9548C18.9613 15.9548 17.7513 15.7548 16.6313 15.3848C16.5313 15.3448 16.4213 15.3348 16.3213 15.3348C16.0613 15.3348 15.8113 15.4348 15.6113 15.6248L13.4113 17.8248C10.5813 16.3748 8.26129 14.0648 6.82129 11.2348L9.02129 9.03482C9.30129 8.75482 9.38129 8.36482 9.27129 8.01482C8.90129 6.89482 8.70129 5.69482 8.70129 4.44482C8.70129 3.89482 8.25129 3.44482 7.70129 3.44482Z" fill="#137EC6" />
                                    </svg> </span><?= $langArr['Schedule_a_Call'] ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="ftr-top">
            <div class="container">
                <div class="ftr-main">
                    <div class="ftr-logo">
                        <img src="images/white-logo.svg" alt="" />
                    </div>
                    <div class="ftr-address-main">
                        <div class="aurth-address">
                            <span>
                            <svg width="27" height="23" viewBox="0 0 27 23" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1 4.03711L9.53961 8.87572C12.6878 10.6595 14.018 10.6595 17.1663 8.87572L25.7059 4.03711" stroke="white" stroke-width="1.5" stroke-linejoin="round"/>
<path d="M1.01948 13.272C1.10023 17.0589 1.14061 18.9523 2.53789 20.3549C3.93516 21.7575 5.87982 21.8063 9.76914 21.904C12.1662 21.9643 14.5397 21.9643 16.9367 21.904C20.8261 21.8063 22.7707 21.7575 24.168 20.3549C25.5653 18.9523 25.6056 17.0589 25.6864 13.272C25.7124 12.0544 25.7124 10.844 25.6864 9.62641C25.6056 5.83957 25.5653 3.94616 24.168 2.54357C22.7707 1.14097 20.8261 1.09211 16.9367 0.994392C14.5397 0.934164 12.1662 0.934161 9.76913 0.994384C5.87982 1.0921 3.93516 1.14095 2.53788 2.54355C1.14061 3.94614 1.10023 5.83956 1.01947 9.62639C0.993508 10.844 0.993509 12.0544 1.01948 13.272Z" stroke="white" stroke-width="1.5" stroke-linejoin="round"/>
</svg>
                            </span>
                            <p>info@aiviking.se</p>
                        </div>
                        <!-- <div class="aurth-address">
                            <span>
                                <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M1.49134 1.88964C2.11796 1.27471 2.85051 0.931396 3.65835 0.931396C3.97767 0.931396 4.30261 0.999213 4.59953 1.1409C4.90631 1.2833 5.18593 1.50134 5.40332 1.81408L7.3336 4.53473C7.50444 4.77228 7.6381 5.0047 7.73485 5.24002C7.8331 5.47065 7.90002 5.72843 7.90002 5.98973C7.90002 6.31212 7.8061 6.62025 7.63919 6.89755C7.49735 7.14626 7.30358 7.38612 7.07971 7.61058L6.50575 8.2072C6.51156 8.22092 6.51936 8.23948 6.5278 8.26098C6.65252 8.47965 6.87337 8.7874 7.20826 9.1834C7.57502 9.60715 7.96402 10.0365 8.38369 10.4645C8.82694 10.8994 9.24677 11.2946 9.67069 11.6546C10.0715 11.9936 10.3839 12.2098 10.6109 12.3332C10.6292 12.3411 10.6461 12.3488 10.6599 12.3551L11.2346 11.7879C11.4625 11.5602 11.7069 11.3596 11.9677 11.2202C12.2402 11.058 12.5373 10.9647 12.8667 10.9647C13.1166 10.9647 13.3635 11.0181 13.6117 11.1196C13.8474 11.2161 14.0783 11.3488 14.3098 11.5062L14.315 11.5098L17.0758 13.4698C17.3713 13.6751 17.6029 13.9351 17.7471 14.263L17.7514 14.2727L17.7554 14.2826C17.8615 14.5481 17.9334 14.8356 17.9334 15.1647C17.9334 15.5585 17.8456 15.9578 17.6652 16.34C17.5733 16.5346 17.4656 16.7248 17.3389 16.9097C17.2949 16.974 17.2486 17.0375 17.2 17.1001C17.1362 17.1826 17.0684 17.2634 16.9964 17.3427C16.8179 17.5395 16.6295 17.7183 16.4302 17.8777C16.1142 18.1306 15.7736 18.3329 15.4054 18.484C14.8269 18.7248 14.2038 18.8481 13.5417 18.8481C12.5929 18.8481 11.6011 18.6248 10.58 18.1897C9.57377 17.761 8.5746 17.1865 7.59052 16.47L7.58969 16.4694C6.60561 15.7506 5.67355 14.9552 4.78522 14.0755L4.78093 14.0712C3.90125 13.183 3.10566 12.2507 2.39475 11.2742L2.39264 11.2714C1.6873 10.2908 1.1126 9.30056 0.691437 8.30906L0.690662 8.30723C0.264345 7.29477 0.041687 6.3039 0.041687 5.33973C0.041687 4.6996 0.154687 4.07916 0.385737 3.50091C0.620745 2.90434 0.989879 2.36393 1.49134 1.88964Z" fill="white" />
                                </svg>
                            </span>
                            <p><?= $langArr['Contact_us_123-4567-891'] ?></p>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="ftr-btm">
            <div class="container">
                <div class="ftr-social-main">
                    <div class="copy-right">
                        <p><?= $langArr['footer_content'] ?></p>
                    </div>
                    <div class="social-list">
                        <ul>
                            <li>
                                <div class="auth-social">
                                    <span>
                                        <a href="#">
                                            <svg width="10" height="16" viewBox="0 0 10 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.38861 3.91975V6.09822H9.0827L8.6561 9.03274H6.38861V15.7938C5.93399 15.8568 5.46886 15.8898 4.99673 15.8898C4.45175 15.8898 3.91657 15.8463 3.39541 15.7622V9.03274H0.910767V6.09822H3.39541V3.43277C3.39541 1.77913 4.73545 0.437988 6.38931 0.437988V0.439391C6.39421 0.439391 6.39841 0.437988 6.40332 0.437988H9.0834V2.97592H7.33217C6.8117 2.97592 6.38931 3.39844 6.38931 3.91906L6.38861 3.91975Z" fill="#137EC6" />
                                            </svg>
                                        </a>
                                    </span>
                                </div>
                            </li>
                            <li>
                                <div class="auth-social">
                                    <a href="#">
                                        <span>
                                            <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10.0857 0.958496H3.89893C2.18973 0.958496 0.799255 2.34938 0.799255 4.05908V9.72071C0.799255 11.4304 2.18973 12.8213 3.89893 12.8213H10.0857C11.7949 12.8213 13.1853 11.4304 13.1853 9.72071V4.05908C13.1853 2.34938 11.7949 0.958496 10.0857 0.958496ZM1.89272 4.05908C1.89272 2.95268 2.79285 2.05228 3.89893 2.05228H10.0857C11.1917 2.05228 12.0919 2.95268 12.0919 4.05908V9.72071C12.0919 10.8271 11.1917 11.7275 10.0857 11.7275H3.89893C2.79285 11.7275 1.89272 10.8271 1.89272 9.72071V4.05908Z" fill="#137EC6" />
                                                <path d="M6.99235 9.77327C8.58177 9.77327 9.87557 8.47978 9.87557 6.88919C9.87557 5.29861 8.58247 4.00513 6.99235 4.00513C5.40224 4.00513 4.10913 5.29861 4.10913 6.88919C4.10913 8.47978 5.40224 9.77327 6.99235 9.77327ZM6.99235 5.09962C7.97935 5.09962 8.78211 5.90261 8.78211 6.8899C8.78211 7.87718 7.97935 8.68018 6.99235 8.68018C6.00536 8.68018 5.2026 7.87718 5.2026 6.8899C5.2026 5.90261 6.00536 5.09962 6.99235 5.09962Z" fill="#137EC6" />
                                                <path d="M10.1424 4.47114C10.5704 4.47114 10.9193 4.12289 10.9193 3.69407C10.9193 3.26524 10.5711 2.91699 10.1424 2.91699C9.71374 2.91699 9.3656 3.26524 9.3656 3.69407C9.3656 4.12289 9.71374 4.47114 10.1424 4.47114Z" fill="#137EC6" />
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="auth-social">
                                    <a href="#">
                                        <span>
                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0.757222 2.53705C0.493838 2.2925 0.362854 1.98981 0.362854 1.62965C0.362854 1.26949 0.494538 0.953473 0.757222 0.708229C1.02061 0.463686 1.35965 0.341064 1.77504 0.341064C2.19043 0.341064 2.51616 0.463686 2.77885 0.708229C3.04223 0.952772 3.17321 1.26038 3.17321 1.62965C3.17321 1.99891 3.04153 2.2925 2.77885 2.53705C2.51546 2.78159 2.18132 2.90421 1.77504 2.90421C1.36875 2.90421 1.02061 2.78159 0.757222 2.53705ZM2.95186 3.93984V11.4373H0.583502V3.93984H2.95186Z" fill="#137EC6" />
                                                <path d="M10.8359 4.68068C11.3521 5.24124 11.6099 6.01061 11.6099 6.99018V11.3051H9.36063V7.29428C9.36063 6.80029 9.23244 6.41631 8.97676 6.14303C8.72108 5.86976 8.37644 5.73243 7.94494 5.73243C7.51344 5.73243 7.16878 5.86906 6.9131 6.14303C6.65742 6.41631 6.52923 6.80029 6.52923 7.29428V11.3051H4.26666V3.91902H6.52923V4.8986C6.75829 4.57207 7.06723 4.31422 7.4553 4.12433C7.84337 3.93444 8.27977 3.83984 8.76521 3.83984C9.62962 3.83984 10.3203 4.12012 10.8359 4.67998V4.68068Z" fill="#137EC6" />
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/select2.min.js"></script>
    <script src="js/custom.js"></script>

    <!-- alert library -->
    <link rel="stylesheet" href="css/toastr.min.css" />
    <script src="js/toastr.min.js"></script>

    <script>
        function languageChanged() {
            var locale = document.getElementById("languageSelect").value;
            var url = document.URL.split('?')[0] + "?lang=" + locale;
            window.location.href = url;
        }

        // send contact mail
        $(document).ready(function() {
            $("#enquiry_form").submit(function(e) {
                e.preventDefault();

                // Get form data
                var formData = $(this).serialize();
                $("#send_btn").prop("disabled", true);
                $("#send_btn").text("Sending...");
                // AJAX request
                $.ajax({
                    type: "POST",
                    url: "./mail.php",
                    data: formData,
                    success: function(response) {
                        console.log(response);
                        $("#send_btn").prop("disabled", false);
                        $("#send_btn").text("Send Message");

                        // alert message
                        toastr.success(response);

                        $('#enquiry_form')[0].reset();
                    },
                    error: function(error) {
                        console.error("AJAX request failed", error);

                        $("#send_btn").prop("disabled", false);
                        $("#send_btn").text("Send Message");

                        toastr.error("Something went wrong please try later.");

                        setTimeout(() => {
                            location.href = "./index.php";
                        }, 2000);
                    },
                });
            });
        });
    </script>
</body>

</html>

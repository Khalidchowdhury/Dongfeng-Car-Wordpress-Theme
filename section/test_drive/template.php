<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5" />
    <link rel="icon" type="image/png" href="images/favicon/favicon-32x32.png" sizes="32x32" />
    <meta name="description" content="Book your test drive today to experience Dongfeng's innovative electric vehicles designed for performance and sustainability!" />
    <meta name="keywords" content="EV battery technology, Dongfeng cars Singapore, Certified Dongfeng dealer, Certified Dongfeng dealership, Buy electric vehicles Singapore, Deepal, MG 5, MG 4, MG ZS, MG EV" />
    <title>Book Test Drive | Electric Vehicles Singapore: Dongfeng Innovations</title>
    <link href="css/MasterPage.min.css" rel="stylesheet" />
    <link href="css/Book-Test-Drive.min.css" rel="stylesheet" />
</head>
<body>
    <form method="post" action="./Book-A-Test-Drive" id="form1">
        
        <div id="SmoothScroll">
            <div id="BookDrive">
                <picture class="wave-image">
                    <source srcset="images/book-test-drive/wave.webp" type="image/webp">
                    <source srcset="images/book-test-drive/wave.png" type="image/png">
                    <img loading="lazy" src="images/book-test-drive/wave.webp" class="img">
                </picture>
                <picture class="bg-top">
                    <source srcset="images/book-test-drive/bg-top.webp" type="image/webp">
                    <source srcset="images/book-test-drive/bg-top.png" type="image/png">
                    <img loading="lazy" src="images/book-test-drive/bg-top.webp" class="img">
                </picture>
                <picture class="bg-bottom">
                    <source srcset="images/book-test-drive/bg-bottom.webp" type="image/webp">
                    <source srcset="images/book-test-drive/bg-bottom.png" type="image/png">
                    <img loading="lazy" src="images/book-test-drive/bg-bottom.webp" class="img">
                </picture>
                <div class="Book-Container">
                    <div class="book-left-container">
                        <div class="book-title-container" data-inviewport="contentSlideUp">
                            <p class="FZHeavy-36 light-white">BOOK TEST DRIVE</p>
                            <p class="sub-title">Experience a Test Drive Today</p>
                        </div>
                        <div id="left-image" data-inviewport="contentSlideUp">
                            <img src="images/book-test-drive/left-image.jpg" class="desk" />
                            <img src="images/book-test-drive/left-image-mobile.jpg" class="mobile" />
                        </div>
                    </div>

                    <div id="Contact-Form" data-inviewport="contentSlideLeft">
                        <div class="contact-form-box">
                            <div id="body_UpdatePanel" class="contact-form-inner-container">
                                <div id="body_pnlName" class="contact-form-wrapper">
                                    <div id="body_pnlName_form" class="contact-forms-one-text">
                                        <input name="ctl00$body$txtName" type="text" id="body_txtName" class="inputText FZRegular-14 white" placeholder=" " />
                                        <span id="body_lbName" class="formlabel FZRegular-14 white">Full Name</span>
                                    </div>
                                </div>
                                <div id="body_pnlEmail" class="contact-form-wrapper">
                                    <div id="body_pnlEmail_form" class="contact-forms-one-text">
                                        <input name="ctl00$body$txtEmail" type="text" id="body_txtEmail" class="inputText FZRegular-14 white" placeholder=" " />
                                        <span id="body_lbEmail" class="formlabel FZRegular-14 white">Email Address</span>
                                    </div>
                                </div>
                                <div id="body_pnlPhone" class="contact-form-wrapper">
                                    <div id="body_pnlPhone_form" class="contact-forms-one-text phone">
                                        <input name="ctl00$body$txtphone" type="tel" maxlength="8" id="body_txtphone" class="inputText FZRegular-14 white" placeholder=" " />
                                        <span id="body_lbphone" class="formlabel notempty FZRegular-14 white">Contact Number</span>
                                    </div>
                                </div>
                                <div id="body_pnlSubject" class="contact-form-wrapper">
                                    <div id="body_pnlSubject_form" class="contact-forms-one-text contact-ddl subject" style="pointer-events: none;">
                                        <span id="body_lbSubject" class="formlabel notempty FZRegular-14">Subject</span>
                                        <select name="ctl00$body$ddlSubject" id="body_ddlSubject" class="ddl FZRegular-14 white">
                                            <option selected="selected" value="Book a Test Drive">Book a Test Drive</option>
                                        </select>
                                    </div>
                                </div>
                                <div id="body_pnlDate" class="contact-form-wrapper">
                                    <div id="body_pnlDate_form" class="contact-forms-one-text added">
                                        <span id="body_lbDate" class="formlabel FZRegular-14 white notempty">Preferred Date</span>
                                        <input name="ctl00$body$txtDate" type="text" value="2/9/2025" id="body_txtDate" class="inputText FZRegular-14 white datepicker" placeholder=" " />
                                        <img src="images/contact-us/date.svg" class="date-svg" />
                                    </div>
                                </div>
                                <div id="body_pnlTime" class="contact-form-wrapper">
                                    <div id="body_pnlTime_form" class="contact-forms-one-text added">
                                        <span id="body_lbTime" class="formlabel FZRegular-14 white notempty">Preferred Time</span>
                                        <input name="ctl00$body$txtTime" type="text" value="11:18 PM" id="body_txtTime" class="inputText FZRegular-14 white timepicker" placeholder=" " />
                                        <img src="images/contact-us/clock.svg" class="date-svg" />
                                    </div>
                                </div>
                                <div id="body_pnlCar" class="contact-form-wrapper">
                                    <div id="body_pnlCar_form" class="contact-forms-one-text contact-ddl contact-time-ddl car-model" style="pointer-events: none;">
                                        <span id="body_lbCar" class="formlabel notempty FZRegular-14">Choose a Car Model</span>
                                        <select name="ctl00$body$ddlCar" id="body_ddlCar" class="ddl FZRegular-14 white">
                                            <option selected="selected" value="BOX">BOX</option>
                                        </select>
                                        <img src="images/contact-us/car.svg" class="car-svg" />
                                    </div>
                                </div>
                                <div id="body_pnlContact" class="contact-form-wrapper check-container">
                                    <div id="body_pnlContact_form" class="contact-forms-one-text contact-forms-two">
                                        <span id="body_lbContact" class="formlabel notempty FZRegular-14">I would like to be contacted via</span>
                                        <table id="body_checkbox" class="contact-forms-two-text FZRegular-14 white">
                                            <tr>
                                                <td><input id="body_checkbox_0" type="checkbox" name="ctl00$body$checkbox$0" value="Email" /><label for="body_checkbox_0">Email</label></td>
                                            </tr>
                                            <tr>
                                                <td><input id="body_checkbox_1" type="checkbox" name="ctl00$body$checkbox$1" value="Phone Call" /><label for="body_checkbox_1">Phone Call</label></td>
                                            </tr>
                                            <tr>
                                                <td><input id="body_checkbox_2" type="checkbox" name="ctl00$body$checkbox$2" value="WhatsApp" /><label for="body_checkbox_2">WhatsApp</label></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div id="body_pnlMessage" class="contact-form-wrapper contact-form-2-wrapper">
                                    <div id="body_pnlMessage_form" class="contact-forms-one-text">
                                        <textarea name="ctl00$body$txtMessage" rows="15" cols="20" id="body_txtMessage" class="inputText FZRegular-14 white">Hi, I would like to schedule for a test drive.</textarea>
                                        <span id="body_lbMessage" class="formlabel notempty FZRegular-14 white">Message</span>
                                    </div>
                                </div>
                                <div id="body_pnlFirstCheck" class="check-container FZRegular-14">
                                    <div id="body_pnlFirst_form" class="contact-forms-two-text contact-test">
                                        <input id="body_FirstCheck" type="checkbox" name="ctl00$body$FirstCheck" /><label for="body_FirstCheck">I accept the Terms and Conditions of Volt Auto’s Personal Data Protection Notice. I consent to Volt Auto’s collection, use, disclosure and processing of the information provided by me in accordance with the Privacy Policy and applicable laws.</label>
                                    </div>
                                </div>
                                <div id="body_pnlSecondCheck" class="check-container FZRegular-14">
                                    <div id="body_pnlSecond_form" class="contact-forms-two-text contact-test">
                                        <input id="body_SecondCheck" type="checkbox" name="ctl00$body$SecondCheck" /><label for="body_SecondCheck">I consent to receive marketing information about your promotions, events, products, and services via electronic means (including but not limited to: email, SMS and WhatsApp), telephone calls and postal mailing.</label>
                                    </div>
                                </div>
                            </div>
                            <div class="contact-forms-submit-wrapper">
                                <a id="body_lkSubmit" class="link-button" href="#">
                                    <p class="link-texts white">SUBMIT</p>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <rect x="0" y="0" width="20" height="20" rx="10" fill="#E60021"></rect>
                                        <path class="button-arrow-01" d="M7,13l6-6 M13,7H8.108 M13,7v4.892" stroke="white" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path class="button-arrow-02" d="M7,13l6-6 M13,7H8.108 M13,7v4.892" stroke="white" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>



        <script src="js/jquery-3.7.1.min.js"></script>
        <script src="js/jquery.nicescroll.min.js"></script>
        <script>
            $(document).ready(function () {
                if (window.innerWidth > 768) {
                    $("body").niceScroll({
                        cursoropacitymax: 0,
                        scrollspeed: 60,
                        mousescrollstep: 40,
                    });
                }
                $("img").attr("alt", "Dong Feng Motor, Singapore.");
                $("a").attr("alt", "Dong Feng Motor, Singapore.");
                $("a").attr("aria-label", "Dong Feng Motor, Singapore.");
                onScroll();
                $(document).click(function (event) {
                    if (!$(event.target).closest('.onScrollNav').length) {
                        $('.onScrollNav').removeClass('nav--open');
                    }
                });
                $('.onScrollNav').click(function (event) {
                    event.stopPropagation();
                });
                $('#top-nav').click(function (event) {
                    event.stopPropagation();
                });
                $(".nav-tabs-discover").click(function () {
                    $(this).parent().toggleClass("open-parent");
                });
                $(".menu-button").click(function () {
                    $(this).parents().children("nav").addClass("nav--open");
                });
                $(".close-btn").click(function () {
                    $(this).parents().children("nav").removeClass("nav--open");
                });
                $('.inputText').on('input', function () {
                    if ($(this).val().trim() !== '') {
                        $(this).parent().addClass('added');
                    } else {
                        $(this).parent().removeClass('added');
                    }
                });
            });
            function onScroll() {
                $("body").getNiceScroll().resize()
                var window_top_position = $(window).scrollTop();
                if (window_top_position != 0) {
                    $("#top-nav").addClass("onScroll");
                    $("nav").addClass("onScrollNav");
                } else {
                    $("#top-nav").removeClass("onScroll");
                    $("nav").removeClass("onScrollNav");
                }
            }
            $(window).on('scroll resize', onScroll);
            const inViewport = (entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting == true) {
                        entry.target.classList.add("is-inViewport");
                    }
                });
            };
            const Obs = new IntersectionObserver(inViewport);
            const ELs_inViewport = document.querySelectorAll('[data-inviewport]');
            ELs_inViewport.forEach(EL => {
                Obs.observe(EL, {});
            });
        </script>
    </form>
</body>
</html>
@extends('layouts.app')
@section('content')

    <div style="position: relative;" class="d-none d-lg-block">
        <div style="position:absolute; bottom: 40%; left: 50%; transform: translate(-50%, -50%); width: 100%;">
            <h2 id="great-txt">
                You <span class="text-red">belong</span> here
                <ion-icon name="heart"></ion-icon>
                <br>
                <span style="font-size: 0.5em; font-weight: normal; text-shadow: 1px 2px 4px black;" class="txt-crimson">Your child will fall in love with dance with our classes for ages 2-18!</span>
                <br>
                <a href="/schedule"><div class="shadow btn btn-lg btn-danger">Find Your Class</div></a>
            </h2>
        </div>
        <img src="/images-lava/welcome.jpg" alt="" class="img-fluid" style="z-index: 0; width: 100%;">
    </div>

    <div class="d-block d-lg-none">
        <div class="container">
            <p class="text-center" style="font-size: 1.5em;">
                <span class="font-staat" style="font-size: 50px; line-height: 0.9;"><strong>You <span class="text-red">belong</span> here <ion-icon name="heart"></ion-icon></strong></span>
                <br>
                <small class="txt-crimson font-syne">Your child will fall in love with dance with our classes for ages 2-18!</small>
            </p>
            <div class="d-flex justify-content-center mt-0 pt-0 mb-3">
                <a href="/schedule" class="text-white text-decoration-none"><div class="shadow btn btn-danger">Find Your Class</div></a>
            </div>
        </div>
        <img src="/images-lava/welcome.jpg" alt="" class="img-fluid" style="z-index: 0;">
    </div>

    {{--<div class="bg-red py-5">--}}
    {{--    <div class="container">--}}
    {{--        <div class="row">--}}
    {{--            <div class="col-sm d-flex justify-content-center">--}}
    {{--                <div class="text-center text-white">--}}
    {{--                    <div class="fw-bold" style="font-size: 2em;">FIND JOY IN MOVING</div>--}}
    {{--                    <div class="txt-crimson" style="font-size: 1.5em;">Try your <u>FREE</u> trial class today.</div>--}}
    {{--                    --}}{{--                        <div class="txt-crimson" style="font-size: 1.5em;">Our Experienced Dance Instructors Will Guide You In A <u>FREE</u> Video-Recorded Dance Lesson. Enter Your Email To Get Started.</div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="col-sm d-flex justify-content-center align-items-center">--}}
    {{--                <form action="">--}}
    {{--                    <div class="row g-0 align-items-center">--}}
    {{--                        <div class="col-auto mx-0">--}}
    {{--                            <input type="email" id="inputEmail" class="form-control mx-0" placeholder="Email">--}}
    {{--                        </div>--}}
    {{--                        <div class="col-auto mx-0">--}}
    {{--                            <button type="submit" id="buttonSubmit" class="btn btn-flip-danger fw-bold shadow mx-0">SUBMIT</button>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </form>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--</div>--}}

    <div class="bg-red py-5" id="skip" style="position: relative;">
        <div class="container">
            <h3 class="font-staat text-white" style="font-size: 100px; line-height: 0.9em;">Taking Talent To The Next Level!</h3>
            <p class="text-white font-syne" style="font-size: 22px;">
                In 2003, Elite Dance Academy was founded in League City, Texas offering a full schedule of dance classes for ages three to adult, from beginner to advanced levels. Under the direction of Lanette Cook, we are dedicated to providing quality instruction for all skill levels while maintaining a positive experience. Our highly qualified staff has pursued a higher education in dance, as well as successful professional performing careers. We strive to find a class for everyone interested in learning and offer classes from Ballet, Pointe, Tap and Jazz, to Contemporary and Hip-Hop.
                <br><br>
                In addition to our studio program, we also house a competitive dance company. These dancers commit to training extensively for 12-15 hours per week and participate in various competitive venues. Our dancers also participate in various workshops, master classes and private training and have gone on to win national titles, scholarships, as well as hired for local shows. Educating young minds in dance is a top priority at Elite Dance Academy and we find it important to take talent to the next level.
                <br><br>
                Stop by the studio, meet our staff, and find out what Elite Dance Academy has to offer! If you can't make it by the studio, please give us a call at 281.554.5200 or send an email to infoelitedancing@gmail.com
            </p>
        </div>
        <div style="height: 118px;"></div>
        <div class="custom-shape-divider-bottom-1663856745">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M598.97 114.72L0 0 0 120 1200 120 1200 0 598.97 114.72z" class="shape-fill"></path>
            </svg>
        </div>
        {{--    <div style="height: 123px;"></div>--}}
        {{--    <div class="custom-shape-divider-bottom-1648525246" style="transform: translateY(1px);">--}}
        {{--        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">--}}
        {{--            <path d="M892.25 114.72L0 0 0 120 1200 120 1200 0 892.25 114.72z" class="shape-fill"></path>--}}
        {{--        </svg>--}}
        {{--    </div>--}}
    </div>

    <div style="position: relative; height: 990px;" class="d-none d-lg-block">
        <div class="container" style="height: 100%;">
            <div id="apple-effect-wrap" style="height: 100%;">
                <h3 class="apple-effect font-staat text-lowercase text-center" style="font-size: 100px; position: absolute; top: 36%; left: 50%; transform: translate(-50%, -50%); width: 100%; color: #E71B9D; z-index: 5 !important; line-height: 0.9;">
                    {{--                    <span style="color: transparent;">keepi</span>--}}
                    keeping your dancer<br>
                    <a style="color: inherit;">happy</a>,
                    <a style="color: inherit;">healthy</a>,
                    <a style="color: inherit;">safe</a>, &
                    <a style="color: inherit;">loved</a>
                </h3>
                <div>
                    <img src="/images/fluidframes1.png" alt="female contemporary dancer" class="img-fluid" id="happy-healthy-safe-image">
                </div>
                <h3 class="apple-effect font-staat text-lowercase text-center" style="font-size: 100px; position: absolute; top: 36%; left: 50%; transform: translate(-50%, -50%); width: 100%; color: #D90036; z-index: 1 !important; line-height: 0.9;">keeping your dancer<br>
                    <a style="color: inherit;">happy</a>,
                    <a style="color: inherit;">healthy</a>,
                    <a style="color: inherit;">safe</a>, &
                    <a style="color: inherit;">loved</a>
                </h3>
            </div>
        </div>
    </div>

    <div style="position: relative; height: 850px;" class="d-block d-lg-none">
        <div class="container" style="height: 100%;">
            <div id="apple-effect-wrap" style="height: 100%;">
                <h3 class="apple-effect font-staat text-lowercase text-center" style="font-size: 100px; position: absolute; top: 36%; left: 50%; transform: translate(-50%, -50%); width: 100%; color: #E71B9D; z-index: 5 !important; line-height: 0.9;">
                    {{--                    <span style="color: transparent;">keeping your dancer</span><br>--}}
                    keeping your dancer<br>
                    <a style="color: inherit;">happy</a>,
                    {{--                        <span style="color: transparent;">happy</span></a>--}}
                    <a style="color: inherit;">healthy</a>,
                    <a style="color: inherit;">safe</a>, and
                    <a style="color: inherit;">loved</a>
                </h3>
                <div>
                    <img src="/images/fluidframes1.png" alt="female contemporary dancer" class="img-fluid" id="happy-healthy-safe-mobile">
                </div>
                <h3 class="apple-effect font-staat text-lowercase text-center" style="font-size: 100px; position: absolute; top: 36%; left: 50%; transform: translate(-50%, -50%); width: 100%; color: #D90036; z-index: 1 !important; line-height: 0.9;">keeping your dancer<br>
                    <a style="color: inherit;">happy</a>,
                    <a style="color: inherit;">healthy</a>,
                    <a style="color: inherit;">safe</a>, and
                    <a style="color: inherit;">loved</a>
                </h3>
            </div>
        </div>
    </div>

    <div class="bg-red text-white py-5" style="position: relative;">
        <div class="container mb-5">
            <div class="row row-cols-3 row-cols-sm-3 row-cols-md-3 row-cols-lg-3">
                <div class="col-sm text-center mt-5">
{{--                    <img class="review-img shadow mb-4" src="/images-lava/review.png" alt="">--}}
                    <div class="fw-bold" style="font-size: 1.25em;">Anne Eadie</div>
                    <div class="txt-crimson" style="font-size: 1.125em;">
                        My girls entered Elite Dance Academy at 4 years old, incredibly shy, and very little confidence in themselves. That studio has become their 2nd home- they are now out-going, full of confidence, and have made friendships that are going to last their whole lives. Their dance teachers push them to learn new skills in a way that motivates my girls without making them feel discouraged. They are beautiful dancers who are learning the technique that supports their dancing and becoming amazing dancers. I’m so grateful for everything Elite has done to improve their dancing and self-esteem.
                    </div>
                </div>
                <div class="col-sm text-center mt-5">
{{--                    <img class="review-img shadow mb-4" src="/images-lava/review.png" alt="">--}}
                    <div class="fw-bold" style="font-size: 1.25em;">Allison Keller</div>
                    <div class="txt-crimson" style="font-size: 1.125em;">
                        Our daughter has been dancing at Elite for 3 years and on the competitive team for 1 year. In that time, she has grown as a dancer and become more confident in everyday life. Our shy little girl shines when she goes out on stage! We are very happy with the teachers, classes, and dance family that we have joined at Elite!                    </div>
                </div>
                <div class="col-sm text-center mt-5">
                    <div class="fw-bold" style="font-size: 1.25em;">Angela Tanous</div>
                    <div class="txt-crimson" style="font-size: 1.125em;">We have been with Elite since 2018 and currently have our three daughters enrolled at the studio, two of whom are on the competitive team. The studio feels like a second home at this point. Not only have our girls grown as dancers, they're also learning valuable lessons about responsibility, teaming and self-discipline. The teachers have been a constant source of encouragement and motivation and the girls are surrounded with amazingly supportive teammates. We love Elite and can't wait to see the growth that our daughters achieve over the next few years!</div>
                </div>
                <div class="col-sm text-center mt-5">
                    <div class="fw-bold" style="font-size: 1.25em;">Marita Corkill</div>
                    <div class="txt-crimson" style="font-size: 1.125em;">My girls and I LOVED our first year competing at Elite Dance Academy! I saw my girls grow in their abilities as dancers and as a team of girls and beautiful friendships. Thank you for all the extra special moments created by the studio for team building and really feeling like a family. We are excited for a new year and season!</div>
                </div>
                <div class="col-sm text-center mt-5">
                    <div class="fw-bold" style="font-size: 1.25em;">Krysten Arriaga</div>
                    <div class="txt-crimson" style="font-size: 1.125em;">Elite Dance Academy is a small, local gem right in the heart of East League City. The instructors are passionate and wonderful with children of all ages. We especially love the carefree, fun approach in the early combo classes to really instill a love of dance in the littles. Then, as they get older Elite offers a variety of classes for varying skill sets and interests. The studio’s intimate atmosphere fosters personalized learning and a welcoming community vibe. Elite is a perfect studio for anyone looking to learn or refine their dance skills in a fun, friendly environment. Highly recommend!</div>
                </div>
                <div class="col-sm text-center mt-5">
                    <div class="fw-bold" style="font-size: 1.25em;">Joni Nava</div>
                    <div class="txt-crimson" style="font-size: 1.125em;">My girls have been blessed to call Elite their second home for seven years.  Between myself and both my girls, we have an accumulation of forty years in dance.  I can whole heartedly say Elite, by far, is amazing!  The education, love and mentorship the staff provides is exceptional.  I have not found a better environment for my children to grow up in and express their love of dance.  Don’t walk…RUN to Elite Dance Academy!!</div>
                </div>
{{--                <div class="col-sm text-center mt-5">--}}
{{--                    <div class="fw-bold" style="font-size: 1.25em;"></div>--}}
{{--                    <div class="txt-crimson" style="font-size: 1.125em;"></div>--}}
{{--                </div>--}}

{{--                <div class="col-sm text-center mt-5">--}}
{{--                    <img class="review-img shadow mb-4" src="/images-lava/review-sarah-fecht.png" alt="">--}}
{{--                    <div class="fw-bold" style="font-size: 1.25em;">Sarah Fecht</div>--}}
{{--                    <div class="txt-crimson" style="font-size: 1.125em;">--}}
{{--                        I'm so thankful we found this studio and that my children are gaining life skills that will propel them into a successful adulthood.--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-sm text-center mt-5">--}}
{{--                    <img class="review-img shadow mb-4" src="/images-lava/review-jean-arends.png" alt="">--}}
{{--                    <div class="fw-bold" style="font-size: 1.25em;">Jean Arends</div>--}}
{{--                    <div class="txt-crimson" style="font-size: 1.125em;">--}}
{{--                        Even when the classrooms were closed the speed with which the studio was able to adapt and offer Virtual Classes was amazing!--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-sm text-center mt-5">--}}
{{--                    <img class="review-img shadow mb-4" src="/images-lava/review-elizabeth-bruns.png" alt="">--}}
{{--                    <div class="fw-bold" style="font-size: 1.25em;">Elizabeth Bruns</div>--}}
{{--                    <div class="txt-crimson" style="font-size: 1.125em;">--}}
{{--                        We couldn't be more pleased with the quality of instruction. Our girls have grown so much in their dance knowledge and skill.--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
        <div style="height: 118px;"></div>
        <div class="custom-shape-divider-bottom-1663856745">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M598.97 114.72L0 0 0 120 1200 120 1200 0 598.97 114.72z" class="shape-fill"></path>
            </svg>
        </div>
    </div>


    <div style="position: relative; height: 700px;">
        <div class="container" style="height: 100%;">
            <div class="row my-0 py-0 d-flex align-items-center" style="height: 100%;">
                <div class="col-sm-8">
                    <div class="mb-4">
                        <h2 style="font-size: 2.75em;" class="fw-bold text-center">Parents
                            <ion-icon name="heart-outline"></ion-icon>
                            Elite...</h2>
                    </div>
                    <div class="d-flex justify-content-center">
                        <p class="txt-crimson d-none d-lg-block" style="font-size: 1.75em;">
                            <span class="text-red"><ion-icon name="heart"></ion-icon></span> CPR Certified
                            <br><span class="text-red"><ion-icon name="heart"></ion-icon></span> Sprung floors for safety
                            <br><span class="text-red"><ion-icon name="heart"></ion-icon></span> Highly trained staff
                            <br><span class="text-red"><ion-icon name="heart"></ion-icon></span> Positive environment
                            <br><span class="text-red"><ion-icon name="heart"></ion-icon></span> Viewing windows for each classroom
                            <br><span class="text-red"><ion-icon name="heart"></ion-icon></span> CCISD PE Waiver Approved
                        </p>
                        <p class="txt-crimson d-block d-lg-none" style="font-size: 1.5em;">
                            <span class="text-red"><ion-icon name="heart"></ion-icon></span> CPR Certified
                            <br><span class="text-red"><ion-icon name="heart"></ion-icon></span> Sprung floors for safety
                            <br><span class="text-red"><ion-icon name="heart"></ion-icon></span> Highly trained staff
                            <br><span class="text-red"><ion-icon name="heart"></ion-icon></span> Positive environment
                            <br><span class="text-red"><ion-icon name="heart"></ion-icon></span> Viewing windows for each classroom
                            <br><span class="text-red"><ion-icon name="heart"></ion-icon></span> CCISD PE Waiver Approved
                        </p>
                    </div>
                    {{--                    <div class="d-flex justify-content-center mt-4">--}}
                    {{--                        <a href="/#section-cta"><div class="btn btn-lg btn-outline-danger shadow">Try A Free Class</div></a>--}}
                    {{--                    </div>--}}
                </div>
                <div class="col-sm-4"></div>
            </div>
        </div>
        <div>
            <img src="/images/fluidframes3.png" alt="" class="img-fluid d-none d-lg-block" id="parents-image">
        </div>
    </div>

    <div class="bg-red text-white py-5" style="position: relative;">
        <div class="container">
            <h2 class="fw-bold text-center" style="font-size: 2.75em;">21 Years in Business</h2>
{{--            <p class="text-center">We provide dance classes for La Crosse, Onalaska, & Holmen families</p>--}}
            <div class="row" style="font-size: 1.5em;">
                <div class="col-sm text-center d-flex align-items-center justify-content-center" style="border-right: 1px solid white;"><p class="py-5"><span class="fw-bold" style="font-size: 1.75em;"><ion-icon name="home"></ion-icon><br>1</span><br> location</p></div>
                <div class="d-md-none"><hr></div>
                <div class="col-sm text-center d-flex align-items-center justify-content-center"><p class="py-5"><span class="fw-bold" style="font-size: 1.75em;"><ion-icon name="school"></ion-icon><br>6</span><br>Faculty Members</p></div>
                <div class="d-md-none"><hr></div>
                <div class="col-sm text-center d-flex align-items-center justify-content-center" style="border-left: 1px solid white;"><p class="py-5"><span class="fw-bold" style="font-size: 1.75em;"><ion-icon name="calendar"></ion-icon><br>30+</span><br> classes per week</p></div>
            </div>
        </div>
        <div style="height: 101px;"></div>
        <div class="custom-shape-divider-bottom-1663852805">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M598.97 114.72L0 0 0 120 1200 120 1200 0 598.97 114.72z" class="shape-fill"></path>
            </svg>
        </div>
    </div>

    <div class="py-5">
        <div class="container">
            <h2 class="fw-bold text-center" style="font-size: 2.75em;">If you let me dance...</h2>
            <div class="d-flex justify-content-center">
                <video poster="/images/elite-poster.png" src="/images/elite-video.mp4" type="video/mp4" controls="" class="shadow rounded" style="max-width: 950px; width: 100%; height: auto;"></video>
            </div>
        </div>
    </div>

    {{--    <div class="bg-red-solid py-5 d-none d-lg-block" style="position: relative; height: 1080px;">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-4">--}}
    {{--                <div class="col-sm d-flex align-items-center font-staat text-white" style="font-size: 100px; transform: rotate(-90deg);">classes</div>--}}
    {{--                <div class="col-sm" style="position: relative;">--}}
    {{--                    <img src="/images-lava/la-crosse-dance-classes-1-2.jpg" alt="dancer posing" class="img-fluid">--}}
    {{--                    <a class="triangle-and-text" href="/fall#age-2-4">--}}
    {{--                        <div id="triangle-bottomleft"></div>--}}
    {{--                        <div class="triangle-text font-staat m-2" style="font-size: 30px; line-height: 0.9em; position: absolute; bottom: 0; left: 12px;">Age 1-2</div>--}}
    {{--                    </a>--}}
    {{--                </div>--}}
    {{--                <div class="col-sm" style="position: relative;">--}}
    {{--                    <img src="/images-lava/la-crosse-dance-classes-3-4.jpg" alt="dancer posing" class="img-fluid">--}}
    {{--                    <a class="triangle-and-text" href="/fall#age-2-4">--}}
    {{--                        <div id="triangle-bottomleft"></div>--}}
    {{--                        <div class="triangle-text font-staat m-2" style="font-size: 30px; line-height: 0.9em; position: absolute; bottom: 0; left: 12px;">Age 3-4</div>--}}
    {{--                    </a>--}}
    {{--                </div>--}}
    {{--                <div class="col-sm" style="position: relative;">--}}
    {{--                    <img src="/images-lava/la-crosse-dance-classes-5-6-resize.jpg" alt="dancer posing" class="img-fluid">--}}
    {{--                    <a class="triangle-and-text" href="/fall#age-k-1st">--}}
    {{--                        <div id="triangle-bottomleft"></div>--}}
    {{--                        <div class="triangle-text font-staat m-2" style="font-size: 30px; line-height: 0.9em; position: absolute; bottom: 0; left: 12px;">Ages 5-6</div>--}}
    {{--                    </a>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="mt-4 row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-4">--}}
    {{--                <div class="col-sm" style="position: relative; z-index: 3;">--}}
    {{--                    <img src="/images-lava/la-crosse-dance-classes-7-8.jpg" alt="dancer posing" class="img-fluid">--}}
    {{--                    <a class="triangle-and-text" href="/fall#age-2nd-3rd">--}}
    {{--                        <div id="triangle-bottomleft"></div>--}}
    {{--                        <div class="triangle-text font-staat m-2" style="font-size: 30px; line-height: 0.9em; position: absolute; bottom: 0; left: 12px;">Ages 7-8</div>--}}
    {{--                    </a>--}}
    {{--                </div>--}}
    {{--                <div class="col-sm" style="position: relative; z-index: 3;">--}}
    {{--                    <img src="/images-lava/la-crosse-dance-classes-9-12.jpg" alt="dancer posing" class="img-fluid">--}}
    {{--                    <a class="triangle-and-text" href="/fall#age-graded">--}}
    {{--                        <div id="triangle-bottomleft"></div>--}}
    {{--                        <div class="triangle-text font-staat m-2" style="font-size: 30px; line-height: 0.9em; position: absolute; bottom: 0; left: 12px;">Ages 9-12</div>--}}
    {{--                    </a>--}}
    {{--                </div>--}}
    {{--                <div class="col-sm" style="position: relative; z-index: 3;">--}}
    {{--                    <img src="/images-lava/la-crosse-dance-classes-teens.jpg" alt="dancer posing" class="img-fluid">--}}
    {{--                    <a class="triangle-and-text" href="/fall#age-teen">--}}
    {{--                        <div id="triangle-bottomleft"></div>--}}
    {{--                        <div class="triangle-text font-staat m-2" style="font-size: 30px; line-height: 0.9em; position: absolute; bottom: 0; left: 12px;">Teens</div>--}}
    {{--                    </a>--}}
    {{--                </div>--}}
    {{--                <div class="col-sm" style="position: relative; z-index: 3;">--}}
    {{--                    <img src="/images-lava/la-crosse-dance-classes-guys.jpg" alt="dancer posing" class="img-fluid">--}}
    {{--                    <a class="triangle-and-text" href="/fall#age-2nd-3rd">--}}
    {{--                        <div id="triangle-bottomleft"></div>--}}
    {{--                        <div class="triangle-text font-staat m-2" style="font-size: 30px; line-height: 0.9em; position: absolute; bottom: 0; left: 12px;">Guys Only</div>--}}
    {{--                    </a>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--        <div class="custom-shape-divider-bottom-1648524823" style="transform: translateY(1px);">--}}
    {{--            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">--}}
    {{--                <path d="M892.25 114.72L0 0 0 120 1200 120 1200 0 892.25 114.72z" class="shape-fill"></path>--}}
    {{--            </svg>--}}
    {{--        </div>--}}
    {{--    </div>--}}

    {{--    <div id="mobile-classes-section" class="bg-red-solid py-5 d-block d-lg-none" style="position: relative; height: 100%;">--}}
    {{--        <div class="container">--}}
    {{--            <div class="col-sm font-staat text-white text-center" style="font-size: 100px;">classes</div>--}}
    {{--            <div class="row row-cols-2 row-cols-sm-2 row-cols-md-2 row-cols-lg-4">--}}
    {{--                <div class="col-sm my-3" style="position: relative;">--}}
    {{--                    <img src="/images-lava/la-crosse-dance-classes-1-2.jpg" alt="dancer posing" class="img-fluid">--}}
    {{--                    <a class="triangle-and-text" href="/fall#age-2-4">--}}
    {{--                        <div id="triangle-bottomleft-mobile"></div>--}}
    {{--                        <div class="triangle-text font-staat m-2" style="font-size: 30px; line-height: 0.9em; position: absolute; bottom: 0; left: 12px;">Age 1-2</div>--}}
    {{--                    </a>--}}
    {{--                </div>--}}
    {{--                <div class="col-sm my-3" style="position: relative;">--}}
    {{--                    <img src="/images-lava/la-crosse-dance-classes-3-4.jpg" alt="dancer posing" class="img-fluid">--}}
    {{--                    <a class="triangle-and-text" href="/fall#age-2-4">--}}
    {{--                        <div id="triangle-bottomleft-mobile"></div>--}}
    {{--                        <div class="triangle-text font-staat m-2" style="font-size: 30px; line-height: 0.9em; position: absolute; bottom: 0; left: 12px;">Age 3-4</div>--}}
    {{--                    </a>--}}
    {{--                </div>--}}
    {{--                <div class="col-sm my-3" style="position: relative;">--}}
    {{--                    <img src="/images-lava/la-crosse-dance-classes-5-6-resize.jpg" alt="dancer posing" class="img-fluid">--}}
    {{--                    <a class="triangle-and-text" href="/fall#age-k-1st">--}}
    {{--                        <div id="triangle-bottomleft-mobile"></div>--}}
    {{--                        <div class="triangle-text font-staat m-2" style="font-size: 30px; line-height: 0.9em; position: absolute; bottom: 0; left: 12px;">Ages 5-6</div>--}}
    {{--                    </a>--}}
    {{--                </div>--}}
    {{--                <div class="col-sm my-3" style="position: relative; z-index: 3;">--}}
    {{--                    <img src="/images-lava/la-crosse-dance-classes-7-8.jpg" alt="dancer posing" class="img-fluid">--}}
    {{--                    <a class="triangle-and-text" href="/fall#age-2nd-3rd">--}}
    {{--                        <div id="triangle-bottomleft-mobile"></div>--}}
    {{--                        <div class="triangle-text font-staat m-2" style="font-size: 30px; line-height: 0.9em; position: absolute; bottom: 0; left: 12px;">Ages 7-8</div>--}}
    {{--                    </a>--}}
    {{--                </div>--}}
    {{--                <div class="col-sm my-3" style="position: relative; z-index: 3;">--}}
    {{--                    <img src="/images-lava/la-crosse-dance-classes-9-12.jpg" alt="dancer posing" class="img-fluid">--}}
    {{--                    <a class="triangle-and-text" href="/fall#age-graded">--}}
    {{--                        <div id="triangle-bottomleft-mobile"></div>--}}
    {{--                        <div class="triangle-text font-staat m-2" style="font-size: 30px; line-height: 0.9em; position: absolute; bottom: 0; left: 12px;">Ages 9-12</div>--}}
    {{--                    </a>--}}
    {{--                </div>--}}
    {{--                <div class="col-sm my-3" style="position: relative; z-index: 3;">--}}
    {{--                    <img src="/images-lava/la-crosse-dance-classes-teens.jpg" alt="dancer posing" class="img-fluid">--}}
    {{--                    <a class="triangle-and-text" href="/fall#age-teen">--}}
    {{--                        <div id="triangle-bottomleft-mobile"></div>--}}
    {{--                        <div class="triangle-text font-staat m-2" style="font-size: 30px; line-height: 0.9em; position: absolute; bottom: 0; left: 12px;">Teens</div>--}}
    {{--                    </a>--}}
    {{--                </div>--}}
    {{--                <div class="col-sm my-3" style="position: relative; z-index: 3;">--}}
    {{--                    <img src="/images-lava/la-crosse-dance-classes-guys.jpg" alt="dancer posing" class="img-fluid">--}}
    {{--                    <a class="triangle-and-text" href="/fall#age-2nd-3rd">--}}
    {{--                        <div id="triangle-bottomleft-mobile"></div>--}}
    {{--                        <div class="triangle-text font-staat m-2" style="font-size: 30px; line-height: 0.9em; position: absolute; bottom: 0; left: 12px;">Guys Only</div>--}}
    {{--                    </a>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--        <div class="custom-shape-divider-bottom-1648524823" style="transform: translateY(1px);">--}}
    {{--            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">--}}
    {{--                <path d="M892.25 114.72L0 0 0 120 1200 120 1200 0 892.25 114.72z" class="shape-fill"></path>--}}
    {{--            </svg>--}}
    {{--        </div>--}}
    {{--    </div>--}}

    {{--<div class="bg-red py-5">--}}
    {{--    <div class="container my-5">--}}
    {{--        <h2 class="fw-bold text-center text-white" style="font-size: 2.75em;">Our classes</h2>--}}
    {{--        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-4">--}}
    {{--            <div class="col-sm mt-4" style="position: relative;">--}}
    {{--                <div class="d-flex justify-content-center">--}}
    {{--                    <img src="/images-lava/classes-1-2.jpg" alt="little medium dancer" class="img-fluid shadow rounded" style="height: 428px; width: auto; object-fit: cover; object-position: center;">--}}
    {{--                    <div class="btn btn-lg btn-flip-danger text-white shadow" style="position: absolute; bottom: 7.5%; left: 50%; transform: translateX(-50%); width: 75%;">Age 1-2</div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="col-sm mt-4" style="position: relative;">--}}
    {{--                <div class="d-flex justify-content-center">--}}
    {{--                    <img src="/images-lava/classes-3-4.jpg" alt="medium dancer" class="img-fluid shadow rounded" style="height: 428px; width: auto; object-fit: cover; object-position: center;">--}}
    {{--                    <div class="btn btn-lg btn-flip-danger text-white shadow" style="position: absolute; bottom: 7.5%; left: 50%; transform: translateX(-50%); width: 75%;">Age 3-4</div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="col-sm mt-4" style="position: relative;">--}}
    {{--                <div class="d-flex justify-content-center">--}}
    {{--                    <img src="/images-lava/classes-5-6.jpg" alt="medium big dancer" class="img-fluid shadow rounded" style="height: 428px; width: auto; object-fit: cover; object-position: center;">--}}
    {{--                    <div class="btn btn-lg btn-flip-danger text-white shadow" style="position: absolute; bottom: 7.5%; left: 50%; transform: translateX(-50%); width: 75%;">Ages 5-6</div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="col-sm mt-4" style="position: relative;">--}}
    {{--                <div class="d-flex justify-content-center">--}}
    {{--                    <img src="/images-lava/classes-7-8.jpg" alt="big dancer" class="img-fluid shadow rounded" style="height: 428px; width: auto; object-fit: cover; object-position: center;">--}}
    {{--                    <div class="btn btn-lg btn-flip-danger text-white shadow" style="position: absolute; bottom: 7.5%; left: 50%; transform: translateX(-50%); width: 75%;">Ages 7-8</div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="col-sm mt-4" style="position: relative;">--}}
    {{--                <div class="d-flex justify-content-center">--}}
    {{--                    <img src="/images-lava/classes-9-12.jpg" alt="little medium dancer" class="img-fluid shadow rounded" style="height: 428px; width: auto; object-fit: cover; object-position: center;">--}}
    {{--                    <div class="btn btn-lg btn-flip-danger text-white shadow" style="position: absolute; bottom: 7.5%; left: 50%; transform: translateX(-50%); width: 75%;">Ages 9-12</div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="col-sm mt-4" style="position: relative;">--}}
    {{--                <div class="d-flex justify-content-center">--}}
    {{--                    <img src="/images-lava/classes-teens.jpg" alt="medium dancer" class="img-fluid shadow rounded" style="height: 428px; width: auto; object-fit: cover; object-position: center;">--}}
    {{--                    <div class="btn btn-lg btn-flip-danger text-white shadow" style="position: absolute; bottom: 7.5%; left: 50%; transform: translateX(-50%); width: 75%;">Teens</div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="col-sm mt-4" style="position: relative;">--}}
    {{--                <div class="d-flex justify-content-center">--}}
    {{--                    <img src="/images-lava/classes-guys.jpg" alt="medium big dancer" class="img-fluid shadow rounded" style="height: 428px; width: auto; object-fit: cover; object-position: center;">--}}
    {{--                    <div class="btn btn-lg btn-flip-danger text-white shadow" style="position: absolute; bottom: 7.5%; left: 50%; transform: translateX(-50%); width: 75%;">Guys Only</div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="col-sm mt-4" style="position: relative;">--}}
    {{--                <div class="d-flex justify-content-center">--}}
    {{--                    <img src="/images-lava/classes-schedule.jpg" alt="big dancer" class="img-fluid shadow rounded" style="height: 428px; width: auto; object-fit: cover; object-position: center;">--}}
    {{--                    <div class="btn btn-lg btn-flip-danger text-white shadow" style="position: absolute; bottom: 7.5%; left: 50%; transform: translateX(-50%); width: 75%;">Full Schedule</div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--</div>--}}

{{--    <div class="py-5">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-sm d-flex align-items-center">--}}
{{--                    <div>--}}
{{--                        <div class="d-flex justify-content-center mb-0">--}}
{{--                            <img src="/images-lava/darbys-dancers-logo.jpeg" alt="darbys dancers logo" class="img-fluid">--}}
{{--                        </div>--}}
{{--                        <p class="text-center txt-crimson" style="font-size: 1.25em;">--}}
{{--                            MDU is proud to offer through a chapter of the national non-profit organization Darby’s Dancers, an opportunity for children with special needs to participate in the performing arts through dance education at no cost to their families. MDU's chapter of Darby's Dancers is supported by the--}}
{{--                            <a href="https://www.chancetodancefoundation.org" target="_blank">Chance to Dance Foundation</a>.--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-sm d-flex align-items-center justify-content-center">--}}
{{--                    <div class="">--}}
{{--                        <img src="/images-lava/darbys-dance-la-crosse.jpg" alt="darbys dancer on stage" class="img-fluid rounded shadow">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <div class="bg-red text-white py-5" style="position: relative;">
        <div class="container">
            <div class="d-flex justify-content-center align-items-center">
                {{--                <img class="review-img shadow mt-4" src="/images-lava/review-sandy-helfrich.png" alt="">--}}
                <div class="fw-bold mx-4" style="font-size: 1.25em;">Marisa Lillywhite</div>
            </div>
            <div class="text-center txt-crimson" style="font-size: 1.5em;">
                Elite Dance Academy is not just a studio; it's a dance family. Since 2003, Elite has been a vital part of my life and now my daughter's for the past 7 years. The studio is special to us, filled with rewarding memories of growth, fun, and hard work. The high standards of technique, behavior, teamwork, and dance education make it an exceptional place.
                <br><br>
                The instructors are passionate, creative, and well-educated. My daughter started dancing here at 2 years old and has thrived in their nurturing environment, building her self-esteem and confidence. As a member of the competitive company, she experiences true teamwork and support. Mrs. Katelyn, the company director, is incredibly dedicated and pours her heart into the studio. We are so lucky to have her!
                <br><br>
                I highly recommend Elite Dance Academy to anyone looking to dance and for future generations to come!
            </div>
        </div>
        <div style="height: 60px;"></div>
        <div class="custom-shape-divider-bottom-1663854216">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M892.25 114.72L0 0 0 120 1200 120 1200 0 892.25 114.72z" class="shape-fill"></path>
            </svg>
        </div>
    </div>

    <div style="position: relative; height: 325px;">
        {{--<div style="position: relative; height: 300px;">--}}
        <div class="container" style="height: 100%;">
            <div class="row" style="width: 100%; height: 100%; z-index: 1; position: relative;">
                <div class="col-sm d-flex justify-content-center align-items-center">
                    <div class="text-center">
                        <div class="fw-bold" style="font-size: 4em;">
                            <span style="font-family: 'Pacifico', cursive;">
                            Find joy in moving
                            </span>
                        </div>
                                                <div class="txt-crimson" style="font-size: 1.5em;">Try your <a href="" target="_blank"><div class="btn btn-lg btn-flip-danger fw-bold shadow text-white"><u>FREE</u> trial class</div></a> today.</div>
{{--                        <div class="txt-crimson" style="font-size: 1.5em;">Try our <a href="/promotions"><div class="btn btn-lg btn-flip-danger fw-bold shadow text-white">Mini-Sessions</div></a></div>--}}
{{--                        <div class="mt-2"><small>dance lessons Onalaska &middot; dance lessons La Crosse &middot; dance lessons Holmen</small></div>--}}
                    </div>
                </div>
                <div class="col-sm d-flex justify-content-center align-items-center">
                                        <form action="">
                                            <div class="row g-0 align-items-center">
                                                <div class="col-auto mx-0">
                                                    <input type="email" id="inputEmail" class="form-control mx-0" placeholder="Email">
                                                </div>
                                                <div class="col-auto mx-0">
                                                    <button type="button" id="buttonSubmit" class="btn btn-flip-danger fw-bold shadow mx-0" data-bs-toggle="modal" data-bs-target="#exampleModal">SUBMIT</button>
                                                </div>
                                            </div>
                                        </form>
                </div>
            </div>
        </div>
        <div>
            <img src="/images/fluidframes2.png" alt="" class="img-fluid d-none d-lg-block" id="joy-image">
{{--            <img src="/images/fluidframes2.png" alt="" class="img-fluid d-block d-lg-none" id="joy-mobile">--}}
        </div>
    </div>

    <div id="did-you-know" class="bg-red text-white" style="position: relative;">
        <div class="container py-5">
            <h2 class="fw-bold text-center text-white" style="font-size: 2.75em;">Did you know...</h2>
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm d-flex justify-content-center">
                    <div class="txt-crimson" style="font-size: 1.75em;">
                        Students who regularly participate in dance:
                        <ul>
                            <li>Earn higher GPAs</li>
                            <li>Perform better in science, math, and writing</li>
                            <li>Earn higher test scores on SATs</li>
                            <li>Enroll in 4-year colleges and earn mostly As</li>
                        </ul>
                        <em>Source: National Endowment for the Arts</em>
                    </div>
                </div>
                <div class="col-sm-1"></div>
            </div>
            <div class="mt-3">
                <p class="text-center rounded p-3" style="font-size: 1.75em; border: 4px solid #89CFF0;">
                    <span>
                        Additionally, dance boosts confidence, coordination, and compassion for others. Dancers learn hard work, perseverance, and team work. Or as we like to say around here...Dance makes great kids!
                    </span>
                </p>
            </div>
{{--            <div class="text-center font-staat mb-3" style="font-size: 1.5em;"><small>Whether you live in Onalaska, Holmen, or La Crosse dance with us today!</small></div>--}}
            <div>
                <p class="text-center txt-crimson" style="font-size: 1.75em;">
                    At Elite Dancing Academy, we don't teach kids to make great dancers.<br>We teach dance to make great kids! - <em>Misty Lown</em>
                </p>
            </div>
        </div>
        <div style="height: 165px;"></div>
        <div class="custom-shape-divider-bottom-1663856371">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M598.97 114.72L0 0 0 120 1200 120 1200 0 598.97 114.72z" class="shape-fill"></path>
            </svg>
        </div>
        {{--    <div class="custom-shape-divider-bottom-1663852805">--}}
        {{--        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">--}}
        {{--            <path d="M598.97 114.72L0 0 0 120 1200 120 1200 0 598.97 114.72z" class="shape-fill"></path>--}}
        {{--        </svg>--}}
        {{--    </div>--}}
    </div>

{{--    @include('trial-modal')--}}
    <div style="position: relative; height: 500px;" class="d-none d-lg-block">
        <div class="container pt-5" style="height: 100%;">
            {{--    <div style="position:absolute; bottom: 40%; left: 50%; transform: translate(-50%, -50%); width: 100%;">--}}
            <div class="font-staat text-lowercase" style="font-size: 85px; position: absolute; top: 10%; left: 5%; width: 100%; color: black; line-height: 0.9; z-index: -3 !important;">
                <div class="apple-effect-right">See what dance can</div>
                <div class="apple-effect-left"><span style="color: transparent;">se</span>do for your child!</div>
            </div>

            <div style="z-index: 2; position: relative;" class="mt-5 pt-5" id="section-cta">
                <div style="height: 75px;"></div>
                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-lg-3 pt-4">
                    <div class="col-sm">
                        <div class="next-step mx-1 shadow py-5">
                            <p class="txt-green">Ready To Leap In?</p>
                            <a href="https://app.thestudiodirector.com/mistysdance/portal.sd?page=Login" target="_blank"
                               class="">
                                <div class="shadow btn btn-lg btn-green btn-family">&#10097; Enroll today!</div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm">
                                                <div class="next-step mx-1 shadow py-5">
                                                    <p class="txt-blue">Want To Give It A Try?</p>
                                                    <a href="" target="_blank"
                                                       class="">
                                                        <div class="shadow btn btn-lg btn-blue btn-family">&#10097; Schedule a Trial!</div>
                                                    </a>
                                                </div>
                    </div>
                    <div class="col-sm">
                        <div class="next-step mx-1 shadow py-5">
                            <p class="txt-pink">Still Have Questions?</p>
                            <a href="#footer" class="">
                                <div class="shadow btn btn-lg btn-pink btn-family">&#10097; Contact Us!</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <img src="/images/fluidframes4.png" alt="" class="img-fluid d-none d-lg-block" id="cta-image">
        </div>
    </div>

    <div id="mobile-cta-section" style="position: relative; height: 100%;" class="d-block d-lg-none my-5">
        <div class="container" style="height: 100%;">
            <div class="font-staat text-lowercase text-center" style="font-size: 85px; width: 100%; color: black; line-height: 0.9;">
                <div>See what dance can do for your child!</div>
            </div>

            <div>
                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-lg-3">
                    <div class="col-sm my-3">
                        <div class="next-step mx-1 shadow py-5">
                            <p class="txt-green">Ready To Leap In?</p>
                            <a href="https://app.thestudiodirector.com/mistysdance/portal.sd?page=Login" target="_blank"
                               class="">
                                <div class="shadow btn btn-lg btn-green btn-family">&#10097; Enroll today!</div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm my-3">
                                                <div class="next-step mx-1 shadow py-5">
                                                    <p class="txt-blue">Want To Give It A Try?</p>
                                                    <a href="" target="_blank"
                                                       class="">
                                                        <div class="shadow btn btn-lg btn-blue btn-family">&#10097; Schedule a Trial!</div>
                                                    </a>
                                                </div>
                    </div>
                    <div class="col-sm my-3">
                        <div class="next-step mx-1 shadow py-5">
                            <p class="txt-pink">Still Have Questions?</p>
                            <a href="/contact" class="">
                                <div class="shadow btn btn-lg btn-pink btn-family">&#10097; Contact Us!</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

{{--    <div class="bg-red text-white py-5" style="position: relative;">--}}
{{--        <div class="container my-5">--}}
{{--            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-lg-6">--}}
{{--                <div class="col d-flex align-items-center justify-content-center text-center px-2" id="main-review-stars">--}}
{{--                    <div>--}}
{{--                        <p class="font-staat pb-0 mb-0" style="color: seashell;"><small>dance studios Onalaska<br>dance studios La Crosse<br>dance studios Holmen</small></p>--}}
{{--                        <p style="font-size: 1.5em;" class="fw-bold mb-0">OUTSTANDING 4.9/5</p>--}}
{{--                        <ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon>--}}
{{--                        <p style="color: seashell;"><small>based on <strong>54</strong> reviews</small></p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col px-2" id="review-stars">--}}
{{--                    <ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon>--}}
{{--                    <p class="mb-0"><small><strong>They teach dance, but stress the importance of being a kind, hard working individual.</strong></small></p>--}}
{{--                    <p class="mb-0"><small>They care about each student as a person, not just a dancer.</small></p>--}}
{{--                    <div style="width: 30px; height: 1px; background: seashell;" class="my-1"></div>--}}
{{--                    <p style="color:seashell;"><small>Heather Storbeck</small></p>--}}
{{--                </div>--}}
{{--                <div class="col px-2" id="review-stars">--}}
{{--                    <ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon>--}}
{{--                    <p class="mb-0"><small><strong>We love that this studio values character and modesty, along with excellence in dance.</strong></small></p>--}}
{{--                    <p class="mb-0"><small>The teachers have encouraged and nurtured our girls in their love of dance.</small></p>--}}
{{--                    <div style="width: 30px; height: 1px; background: seashell;" class="my-1"></div>--}}
{{--                    <p style="color:seashell;"><small>Shari Peterson</small></p>--}}
{{--                </div>--}}
{{--                <div class="col px-2" id="review-stars">--}}
{{--                    <ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon>--}}
{{--                    <p class="mb-0"><small><strong>My daughter loves the relationships she has built with other kids her age.</strong></small></p>--}}
{{--                    <p class="mb-0"><small>She looks forward to dance each night and had become a stronger more confident dancer</small></p>--}}
{{--                    <div style="width: 30px; height: 1px; background: seashell;" class="my-1"></div>--}}
{{--                    <p style="color:seashell;"><small>Natasha Remis</small></p>--}}
{{--                </div>--}}
{{--                <div class="col px-2" id="review-stars">--}}
{{--                    <ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon>--}}
{{--                    <p class="mb-0"><small><strong>Very clean and nice dance studio.</strong></small></p>--}}
{{--                    <p class="mb-0"><small>Our granddaughter is 22 months old and we got to watch her dance so it was awesome!</small></p>--}}
{{--                    <div style="width: 30px; height: 1px; background: seashell;" class="my-1"></div>--}}
{{--                    <p style="color:seashell;"><small>Randy Schroeder</small></p>--}}
{{--                </div>--}}
{{--                <div class="col px-2" id="review-stars">--}}
{{--                    <ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon>--}}
{{--                    <p class="mb-0"><small><strong>Our young woman is nurtured and challenged as a dancer, a student, a leader and a friend</strong></small></p>--}}
{{--                    <p class="mb-0"><small>A place in addition to their home and school that children are safe, cared for, and are able to grow</small></p>--}}
{{--                    <div style="width: 30px; height: 1px; background: seashell;" class="my-1"></div>--}}
{{--                    <p style="color:seashell;"><small>Janet Holter</small></p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div style="height: 67px;"></div>--}}
{{--        <div class="custom-shape-divider-bottom-1663853988">--}}
{{--            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">--}}
{{--                <path d="M892.25 114.72L0 0 0 120 1200 120 1200 0 892.25 114.72z" class="shape-fill"></path>--}}
{{--            </svg>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="container my-5 py-5" id="brand">--}}
{{--        <h2 class="text-center fw-bold" style="font-size: 2.75em;">Proudly partnering with these outstanding organizations</h2>--}}
{{--        <div class="row row-cols-3 row-cols-sm-3 row-cols-md-3 row-cols-lg-3">--}}
{{--            <div class="col p-0 d-flex align-items-center justify-content-center"><div><a href="https://www.reedmusicstudios.com" target="_blank"><img src="/images-lava/partner1.jpeg" alt="logo"></a></div></div>--}}
{{--            <div class="col p-0 d-flex align-items-center justify-content-center"><div><a href="https://www.viterbo.edu" target="_blank"><img src="/images-lava/partner4.png" alt="logo"></a></div></div>--}}
{{--            <div class="col p-0 d-flex align-items-center justify-content-center"><div><a href="https://morethanjustgreatdancing.com" target="_blank"><img src="/images-lava/partner2.png" alt="logo"></a></div></div>--}}
{{--            <div class="col p-0 d-flex align-items-center justify-content-center"><div><a href="https://www.lacrossesymphony.org" target="_blank"><img src="/images-lava/partner3.png" alt="logo"></a></div></div>--}}
{{--            <div class="col p-0 d-flex align-items-center justify-content-center"><div><a href="https://www.chancetodancefoundation.org" target="_blank"><img src="/images-lava/logo-a-chance-to-dance.png" alt="logo"></a></div></div>--}}
{{--            <div class="col p-0 d-flex align-items-center justify-content-center"><div><a href="https://www.couleeparenting.com" target="_blank"><img src="/images-lava/logo-coulee-parenting.jpg" alt="logo"></a></div></div>--}}
{{--            <div class="col p-0 d-flex align-items-center justify-content-center"><div><a href="https://www.webercenterarts.org" target="_blank"><img src="/images-lava/logo-weber-center.png" alt="logo" style="filter: invert(100%);"></a></div></div>--}}
{{--            <div class="col p-0 d-flex align-items-center justify-content-center"><div><a href="https://www.balletlacrosse.com" target="_blank"><img src="/images-lava/logo-blc-2.jpg" alt="logo"></a></div></div>--}}
{{--            <div class="col p-0 d-flex align-items-center justify-content-center"><div><a href="https://www.thewillowandgrace.com" target="_blank"><img src="/images-lava/logo-willow-and-grace.png" alt="logo"></a></div></div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <section id="guarantee" style="position: relative;">
        <div class="bg-red text-white py-5">
{{--            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-lg-3 mb-4">--}}
{{--                <div class="col"><p class="text-white-50 text-center font-staat" style="font-size: 1.5em;"><small>dance La Crosse</small></p></div>--}}
{{--                <div class="col"><p class="text-white-50 text-center font-staat" style="font-size: 1.5em;"><small>dance Onalaska</small></p></div>--}}
{{--                <div class="col"><p class="text-white-50 text-center font-staat" style="font-size: 1.5em;"><small>dance Holmen</small></p></div>--}}
{{--            </div>--}}
            <div class="d-flex justify-content-center">
                <img src="/images-lava/gauranteed-best-dance-la-crosse.png" alt="" class="img-fluid">
            </div>
            <h2 class="fw-bold text-center text-white" style="font-size: 2.75em;">Our Guarantee</h2>
            <p class="text-center txt-crimson" style="font-size: 1.75em;">You'll love your experience or we'll work with you to make it right!</p>
            <div class="d-flex justify-content-center">
                {{--                <a href="/fall"><div class="btn btn-lg btn-flip-danger shadow mx-4 text-white">Find Your Class</div></a>--}}
                <a href="mailto:infoelitedancing@gmail.com?subject=Schedule A Call"><div class="btn btn-lg btn-flip-danger shadow mx-4 text-white">Schedule A Call</div></a>
            </div>
        </div>
    </section>

@endsection

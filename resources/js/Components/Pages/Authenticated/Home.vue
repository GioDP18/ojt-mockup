<template>
    <div>
        <div class="main-content container-fluid justify-content-center" id="home">
            <!-- ======================= Home ======================= -->
            <section class="home-section">
                <div class="row no-gutters row-gap-5 align-content-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="image-content">
                            <div class="image-bg">
                                <img :src="'../storage/me.png'" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 align-content-center">
                        <div class="my-content">
                            <div class="name-content">
                                <div class="name text-center mb-xs-5">
                                    <h1 class="">GIO O. DELA PEÑA</h1>
                                    <h4 class="text-light">Full Stack Web Developer</h4>
                                </div>
                                <div class="mt-4 intro">
                                    <h5 class="fw-medium text-light">Career Objective:</h5>
                                </div>
                                <div class="mt-3 fw-normal text-light text-xs-center">
                                    <span style="margin-left:3rem">Enthusiastic</span> and detail-oriented Full-Stack Web
                                    Developer with a
                                    strong foundation in some key technologies. My passion lies in
                                    creating seamless and streamlined web applications that not only
                                    meet but exceed user's expectations. With a proven track record of
                                    successfully delivering end-to-end solutions, I am eager to bring my
                                    proficiency in PHP scripting language and expertise to a dynamic team
                                    where I can contribute my skills in front-end and back-end
                                    development, or even in a full stack position. Adept at problem-solving and committed to
                                    staying
                                    updated with the latest industry trends, I am ready to tackle new
                                    challenges, adapt new programming languages/frameworks and play a
                                    pivotal role in driving the success of innovative web projects.
                                </div>
                                <div class="flr-buttons d-flex gap-3 justify-content-center mt-4">
                                    <button class="btn flr-button1 p-3 fw-medium">
                                        Hire Me
                                    </button>
                                    <button class="btn flr-button2 p-3 fw-medium" @click="downloadResume">
                                        Download Resume
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ======================= About ======================= -->
            <section class="about-section mb-5" id="about">
                <div class="about mt-5 mb-5 row no-gutters align-content-center">
                    <div class="about-title text-center">
                        <h1>About</h1>
                    </div>
                    <div class="about-subtitle d-flex mb-4">
                        <div class="about-subtitle-side"></div>
                        <div class="text-light">Me</div>
                        <div class="about-subtitle-side"></div>
                    </div>
                    <div class="d-flex justify-content-center gap-lg-5 flex-wrap">
                        <div class="col-lg-6 col-md-12 d-flex align-items-center">
                            <div class="mt-3 fw-normal text-light">
                                <span style="margin-left:3rem"></span> I am Gio Oledan Dela Pena, a detail oriented full stack 
                                web developer with 1 year and 9 months of experience as an IT Team Lead in Junior Programmer's Guild 
                                and 2 years and 5 months experience as a FUll Stack Web Developer in SupSoft Tech.

                                With my strong analytical skills and solid foundation in web development, I bring expertise in 
                                front-end and back-end technologies, as well as a proven ability to collaborate on cross-functional projects.

                                As a web developer, my proficiency in various programming languages especially in Laravel and vue 
                                utilizing the power of MySQL technology for efficient database management, coupled with my experience in 
                                creating responsive and user-friendly websites, positions me as a valuable asset to your company. 
                                I am adept at leveraging the various technologies to deliver efficient and cutting-edge solutions 
                                with visually appealing web applications.
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 d-flex justify-content-center">
                            <div class="about-image">
                                <div class="about-image-bg mt-3">
                                    <img src="file:///C:/Users/Gio%20O.%20Dela%20Pe%C3%B1a/Pictures/about-me.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </section>

            <!-- ======================= Education ======================= -->
            <section class="education-section mt-5 mb-5" id="education">
                <div class="education mt-5 row no-gutters align-content-center">
                    <div class="education-title text-center">
                        <h1>Education</h1>
                    </div>
                    <div class="education-subtitle d-flex mb-4">
                        <div class="education-subtitle-side"></div>
                        <div class="text-light">Me</div>
                        <div class="education-subtitle-side"></div>
                    </div>
                    <div class="col-lg-8 col-md-12 m-auto d-flex justify-content-center ">
                        <div id="carouselExampleDark" class="carousel carousel-dark bg-light slide col-12">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                                    aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="10000">
                                    <div class="carousel-title">
                                        <h1>Primary</h1>
                                    </div>
                                    <div class="carousel-image">
                                        <img :src="'../storage/education/cassidy.jpg'" alt="">
                                    </div>
                                    <div class="carousel-info mb-5">
                                        <h5>Cassidy Elementary School</h5>
                                        <p>2013-2014</p>
                                    </div>
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <div class="carousel-title">
                                        <h1>High School</h1>
                                    </div>
                                    <div class="carousel-image">
                                        <img :src="'../storage/education/cnhs.jpg'" alt="">
                                    </div>
                                    <div class="carousel-info mb-5">
                                        <h5>Carigara National High School</h5>
                                        <p>2019-2020</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="carousel-title">
                                        <h1>College</h1>
                                    </div>
                                    <div class="carousel-image">
                                        <img :src="'../storage/education/evsu.jpg'" alt="">
                                    </div>
                                    <div class="carousel-info mb-5">
                                        <h5>Eastern Visayas State University Carigara Campus</h5>
                                        <p>2023-2024</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ======================= Honors & Awards ======================= -->
            <section class="honorsAwards-section mb-5" id="honorsAwards">
                <div class="honorsAwards mt-5 mb-5 row no-gutters align-content-center">
                    <div class="honorsAwards-title text-center">
                        <h1>Honors & Awards</h1>
                    </div>
                    <div class="honorsAwards-subtitle d-flex mb-4">
                        <div class="honorsAwards-subtitle-side"></div>
                        <div class="text-light">Slide Horizontal</div>
                        <div class="honorsAwards-subtitle-side"></div>
                    </div>
                    <div class="honorsAwards-container col-12">
                        <div class="honorsAwards-images-container col-lg-12">
                            <div class="col-12 col-lg-10" style="overflow: visible;">
                                <div class="honorsAwards-images container gap-3 gap-lg-5 p-md-4 p-lg-5 flex-lg-wrap justify-content-lg-center">
                                    <div class="card col-10">
                                        <img class="col-12 " :src="'../storage/awards/award-1.jpg'" alt="">
                                        <div class="card__content">
                                            <p class="card__title">With Honors
                                            </p><p class="card__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                                        </div>
                                    </div>
                                    <div class="card col-10">
                                        <img class="col-12 " :src="'../storage/awards/award-2.jpg'" alt="">
                                        <div class="card__content">
                                            <p class="card__title">With Honors
                                            </p><p class="card__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                                        </div>
                                    </div>
                                    <div class="card col-10">
                                        <img class="col-12 " :src="'../storage/awards/award-2.jpg'" alt="">
                                        <div class="card__content">
                                            <p class="card__title">With Honors
                                            </p><p class="card__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                                        </div>
                                    </div>
                                    <div class="card col-10">
                                        <img class="col-12 " :src="'../storage/awards/award-3.jpg'" alt="">
                                        <div class="card__content">
                                            <p class="card__title">With Honors
                                            </p><p class="card__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                                        </div>
                                    </div>
                                    <div class="card col-10">
                                        <img class="col-12 " :src="'../storage/awards/award-4.jpg'" alt="">
                                        <div class="card__content">
                                            <p class="card__title">With Honors
                                            </p><p class="card__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                                        </div>
                                    </div>
                                    <div class="card col-10">
                                        <img class="col-12 " :src="'../storage/awards/award-5.jpg'" alt="">
                                        <div class="card__content">
                                            <p class="card__title">Academic Excellence Awardee
                                            </p><p class="card__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ======================= Certificates ======================= -->
            <section class="certificates-section mb-5" id="certificates">
                <div class="certificates mt-5 mb-5 row no-gutters align-content-center">
                    <div class="certificates-title text-center">
                        <h1>Certificates</h1>
                    </div>
                    <div class="certificates-subtitle d-flex mb-4">
                        <div class="certificates-subtitle-side"></div>
                        <div class="text-light">My Certificates</div>
                        <div class="certificates-subtitle-side"></div>
                    </div>
                    <div class="certificates-container col-12 d-flex align-items-center justify-content-center">
                        <div class="certificates-images-container mt-3 col-lg-10">
                            <div class="certificates-images gap-3 gap-lg-5 col-md-8 col-xl-10 flex-lg-wrap">
                                <img class="col-lg-3" :src="'../storage/awards/cert-1.jpg'" alt="">
                                <img class="col-lg-3" :src="'../storage/awards/cert-2.png'" alt="">
                                <img class="col-lg-3" :src="'../storage/awards/cert-3.png'" alt="">
                                <img class="col-lg-3" :src="'../storage/awards/cert-4.png'" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ======================= Skills ======================= -->
            <section class="skills-section mb-5" id="skills">
                <div class="skills mt-5 mb-5 row no-gutters align-content-center">
                    <div class="skills-title text-center">
                        <h1>Skills</h1>
                    </div>
                    <div class="skills-subtitle d-flex mb-4">
                        <div class="skills-subtitle-side"></div>
                        <div class="text-light">My Skills</div>
                        <div class="skills-subtitle-side"></div>
                    </div>
                    <div class="skills-container col-12 d-flex align-items-center justify-content-center">
                        <div class="skills-images-container col-12 col-lg-10 mt-3 d-flex gap-3 gap-md-5">
                            <div class="skill col-5 col-md-4 col-lg-3">
                                <img :src="'../storage/skills-icon/html.png'" alt="">
                                <h5>HTML</h5>
                            </div>
                            <div class="skill col-5 col-md-4 col-lg-3">
                                <img :src="'../storage/skills-icon/css.png'" alt="">
                                <h5>CSS</h5>
                            </div>
                            <div class="skill col-5 col-md-4 col-lg-3">
                                <img :src="'../storage/skills-icon/js.png'" alt="">
                                <h5>JavaScript</h5>
                            </div>
                            <div class="skill col-5 col-md-4 col-lg-3">
                                <img :src="'../storage/skills-icon/bootstrap.png'" alt="">
                                <h5>Bootstrap</h5>
                            </div>
                            <div class="skill col-5 col-md-4 col-lg-3">
                                <img :src="'../storage/skills-icon/php.png'" alt="">
                                <h5>PHP</h5>
                            </div>
                            <div class="skill col-5 col-md-4 col-lg-3">
                                <img :src="'../storage/skills-icon/codeigniter.png'" alt="">
                                <h5>Codeigniter</h5>
                            </div>
                            <div class="skill col-5 col-md-4 col-lg-3">
                                <img :src="'../storage/skills-icon/laravel.png'" alt="">
                                <h5>Laravel</h5>
                            </div>
                            <div class="skill col-5 col-md-4 col-lg-3">
                                <img :src="'../storage/skills-icon/vue.png'" alt="">
                                <h5>Vue</h5>
                            </div>
                            <div class="skill col-5 col-md-4 col-lg-3">
                                <img :src="'../storage/skills-icon/mysql.png'" alt="">
                                <h5>MySQL</h5>
                            </div>
                            <div class="skill col-5 col-md-4 col-lg-3">
                                <img :src="'../storage/skills-icon/jquery.png'" alt="">
                                <h5>JQuery</h5>
                            </div>
                            <div class="skill col-5 col-md-4 col-lg-3">
                                <img :src="'../storage/skills-icon/python.png'" alt="">
                                <h5>Python</h5>
                            </div>
                            <div class="skill col-5 col-md-4 col-lg-3">
                                <img :src="'../storage/skills-icon/vscode.png'" alt="">
                                <h5>Visual Studio Code</h5>
                            </div>
                            <div class="skill col-5 col-md-4 col-lg-3">
                                <img :src="'../storage/skills-icon/git.png'" alt="">
                                <h5>Git</h5>
                            </div>
                            <div class="skill col-5 col-md-4 col-lg-3">
                                <img :src="'../storage/skills-icon/jira.png'" alt="">
                                <h5>Jira</h5>
                            </div>
                            <div class="skill col-5 col-md-4 col-lg-3">
                                <img :src="'../storage/skills-icon/slack.png'" alt="">
                                <h5>Slack</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ======================= Projects ======================= -->
            <section class="projects-section mb-5" id="projects">
                <div class="projects mt-5 mb-5 row no-gutters align-content-center">
                    <div class="projects-title text-center">
                        <h1>Projects</h1>
                    </div>
                    <div class="projects-subtitle d-flex mb-4">
                        <div class="projects-subtitle-side"></div>
                        <div class="text-light">My Projects</div>
                        <div class="projects-subtitle-side"></div>
                    </div>
                    <div class="projects-container col-12 d-flex align-items-center justify-content-center">
                        <div class="projects-info-container col-12 col-lg-10 mt-3 d-flex gap-3 gap-md-4">
                            <div class="project-info col-10 col-md-5">
                                <h5>BAC-ProcSys</h5>
                                <img class="image-fluid" :src="'../storage/projects/project-1.png'" alt="">
                                <p>A Streamlined Web Application Enhancing Efficiency And Transparency In Bids And Awards Committee Procurement With Advanced PR Tracking Capability.</p>
                            </div>
                            <div class="project-info col-10 col-md-5">
                                <h5>A-Keep</h5>
                                <img class="image-fluid" :src="'../storage/projects/project-2.png'" alt="">
                                <p>Revision Management And Tracking System For LGU Carigara Assessor's Office</p>
                            </div>
                            <div class="project-info col-10 col-md-5">
                                <h5>EVSU-OMS</h5>
                                <img class="image-fluid" :src="'../storage/projects/project-3.png'" alt="">
                                <p>Empowering Organizational Excellence through the EVSU Organization Management System - Streamlining Operations and Cultivating Collaboration</p>
                            </div>
                            <div class="project-info col-10 col-md-5">
                                <h5>AquaSpectra</h5>
                                <img class="image-fluid" :src="'../storage/projects/project-4.png'" alt="">
                                <p>Carigara Bay Water Quality Data Visualization</p>
                            </div>
                            <div class="project-info col-10 col-md-5">
                                <h5>iDTR</h5>
                                <img class="image-fluid" :src="'../storage/projects/project-5.png'" alt="">
                                <p>Unlocking productivity, one clock-in at a time. iDTR: Where dedication meets efficiency, shaping a seamless journey through time records and unlocking the door to professional growth.</p>
                            </div>
                            <div class="project-info col-10 col-md-5">
                                <h5>TripleCJ</h5>
                                <img class="image-fluid" :src="'../storage/projects/project-6.png'" alt="">
                                <p>Triple CJ General Merchant is a bakeshop that offers freshly baked quality bread, delicacies and cakes. We ensure that your every purchase is worth spending for.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>


        <footer class="footer">
            <div class="d-flex flex-column flex-lg-row">
                <div class="col-lg-6">
                    <div class="footer-image-bg">
                        <img :src="'../storage/me.png'" alt="">
                    </div>
                    <div class="footer-item mt-3 mb-3 col-12">
                        <div class="footer-item-content">
                            <h5>GIO O. DELA PEÑA</h5>
                            <p>Full Stack Web Developer</p>
                            <small>Email: giolagariza@gmail.com</small>
                            <br>
                            <small>Contact: 09635839945</small>
                        </div>
                    </div>
                    <div class="footer-item mb-3 col-12">
                        <div class="footer-item-content d-flex justify-content-center gap-4">
                            <div class="social-icon col-3">
                                <button>
                                    <a href="https://www.facebook.com/profile.php?id=61552732646005" >
                                        <font-awesome-icon :icon="['fab', 'facebook-f']" />
                                    </a>
                                </button>
                            </div>
                            <div class="social-icon col-3">
                                <button>
                                    <a href="https://www.linkedin.com/in/gio-dela-pe%C3%B1a-328aa6283?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app">
                                        <font-awesome-icon :icon="['fab', 'linkedin-in']" />
                                    </a>
                                </button>
                            </div>
                            <div class="social-icon col-3">
                                <button>
                                    <a href="https://www.instagram.com/delapenagio?igsh=MXNlNnNsdnNkdmNlMg==">
                                        <font-awesome-icon :icon="['fab', 'instagram']" />
                                    </a>
                                </button>
                            </div>
                            <div class="social-icon col-3">
                                <button>
                                    <a href="https://github.com/GioDP18">
                                       <font-awesome-icon :icon="['fab', 'github']" /> 
                                    </a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-item col-lg-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1373.1401119547436!2d124.72598431086465!3d11.264264206028027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x330809626421183b%3A0x92030fe7b53f8adf!2sVergabriel&#39;s%20Heights%20Subdivision!5e1!3m2!1sen!2sph!4v1706529690038!5m2!1sen!2sph" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </footer>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    methods: {
        async downloadResume() {
            try {
                await axios.get('http://localhost:8000/api/auth/downloadResume');
                console.log('Download Resume Success');
            } catch (error) {
                console.error('Download Resume Failed:', error);
            }
        }
    }
}
</script>

<style scoped>
.main-content {
    width: 100%;
    padding-top: 4rem;
    min-height: 90vh;
}

/* ======================= Home Section ======================= */
.image-content {
    display: flex;
    align-self: center;
    justify-content: center;
    text-align: center;
}

.image-bg {
    overflow: hidden;
    position: relative;
    width: 21rem;
    height: 21rem;
    background-image: linear-gradient(to top right, #3498db, #8e44ad);
    border-radius: 75% 25% 56% 44% / 63% 60% 40% 37%;
    box-shadow: 5px 7px 10px;
}

.image-bg img {
    /* position: absolute; */
    overflow: hidden;
    width: 20rem;
    left: 5rem;
    margin-top: -5.5rem;
}


.name-content .name h1 {
    font-size: 2.3rem;
    font-weight: bold;
    text-align: center;
    color: #87CEFA;
}

.intro {
    padding-top: 1.3rem;
}

.flr-buttons button {
    width: 11rem;
    border: 1px solid #87CEFA;
}

.flr-button1 {
    width: 11rem;
    background-color: #87CEFA;
}

.flr-button2 {
    width: 11rem;
    color: #87CEFA;
}

.flr-button2:hover {
    background-color: #87CEFA;
    color: black;
}


.flr-button1:hover {
    border: 1px solid #4E54C8;
}

/* ======================= About Section ======================= */

.about-section .about .about-title h1 {
    color: #87CEFA;
}

.about-section .about .about-subtitle {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 1rem;
}

.about-section .about .about-subtitle .about-subtitle-side {
    width: 10rem;
    height: 1px;
    background-color: white;
}

.about-image {
    display: relative;
}

.about-image .about-image-bg {
    /* overflow: hidden; */
    position: relative;
    width: 21rem;
    height: 21rem;
    background-image: linear-gradient(to top right, #3498db, #8e44ad);
    box-shadow: 5px 7px 10px;
    border-radius: 10px;
}

.about-image .about-image-bg img {
    position: absolute;
    width: 21rem;
    height: 21rem;
    border-radius: 10px;
    box-shadow: 5px 7px 10px;
}

/* ======================= Education Section ======================= */
.education-section .education .education-title h1 {
    color: #87CEFA;
}

.education-section .education .education-subtitle {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 1rem;
}

.education-section .education .education-subtitle .education-subtitle-side {
    width: 10rem;
    height: 1px;
    background-color: white;
}

.carousel{
    border-radius: 5px;
}

.carousel-inner{
    display: flex;
}

.carousel-inner .carousel-item{
    text-align: center;
    padding-top: 10px;
    position: relative;
}

.carousel-inner .carousel-item .carousel-title h1{
    text-align: center;
}

.carousel-inner .carousel-item .carousel-image img{
    margin: auto;
}

.carousel-inner .carousel-item .carousel-info{
    width: 100%;
}


/* ======================= Honors & Awards Section ======================= */
.honorsAwards-section .honorsAwards .honorsAwards-title h1 {
    color: #87CEFA;
}

.honorsAwards-section .honorsAwards .honorsAwards-subtitle {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 1rem;
}

.honorsAwards-section .honorsAwards .honorsAwards-subtitle .honorsAwards-subtitle-side {
    width: 6rem;
    height: 1px;
    background-color: white;
}

.honorsAwards-images-container{
    display: flex;
    justify-content: center;
    overflow-x: auto;
}

.honorsAwards-images{
    display: flex;
    overflow: visible;
    overflow-x: auto;
}

.honorsAwards-images img{
    border-radius: 5px;

}

.card {
    position: relative;
    width: 300px;
    height: 200px;
    background: linear-gradient(to top right, #3498db, #8e44ad);
    border: 1px solid linear-gradient(to top right, #3498db, #8e44ad);
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    transition: all 0.6s cubic-bezier(0.23, 1, 0.320, 1);
}

.card svg {
    width: 48px;
    fill: #333;
    transition: all 0.6s cubic-bezier(0.23, 1, 0.320, 1);
}

.card:hover {
    transform: rotate(-5deg) scale(1.1);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
}

.card__content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%) rotate(-45deg);
    width: 100%;
    height: 100%;
    padding: 20px;
    box-sizing: border-box;
    background-color: #fff;
    opacity: 0;
    transition: all 0.6s cubic-bezier(0.23, 1, 0.320, 1);
}

.card:hover .card__content {
    transform: translate(-50%, -50%) rotate(0deg);
    opacity: 1;
}

.card__title {
    margin: 0;
    font-size: 24px;
    color: #333;
    font-weight: 700;
}

.card__description {
    margin: 10px 0 0;
    font-size: 14px;
    color: #777;
    line-height: 1.4;
}

.card:hover svg {
    scale: 0;
    transform: rotate(-45deg);
}


/* ============== Certificates Section ======================= */
.certificates-section .certificates .certificates-title h1 {
    color: #87CEFA;
}

.certificates-section .certificates .certificates-subtitle {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 1rem;
}

.certificates-section .certificates .certificates-subtitle .certificates-subtitle-side {
    width: 6rem;
    height: 1px;
    background-color: white;
}


.certificates-images-container{
    overflow-x: auto;
    display: flex;
    justify-content: center;
}

.certificates-images{
    display: flex;
    justify-content: center;
    overflow-x: auto;
}

.certificates-images img{
    border-radius: 5px;
    object-fit: cover;
}


/* ============== Skills Section ======================= */
.skills-section .skills .skills-title h1 {
    color: #87CEFA;
}

.skills-section .skills .skills-subtitle {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 1rem;
}

.skills-section .skills .skills-subtitle .skills-subtitle-side {
    width: 6rem;
    height: 1px;
    background-color: white;
}

.skills-container .skills-images-container{
    justify-content: center;
    flex-wrap: wrap;
}

.skills-container .skills-images-container .skill{
    text-align: center;
    background-image: linear-gradient(to top right, #3498db, #8e44ad);
    border-radius: 5px;
    box-shadow: 5px 7px 10px;
    padding: 5px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.skills-container .skills-images-container .skill img{
    width: 5rem;
    margin:auto;
}

/* ============== Projects Section ======================= */
.projects-section .projects .projects-title h1 {
    color: #87CEFA;
}

.projects-section .projects .projects-subtitle {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 1rem;
}

.projects-section .projects .projects-subtitle .projects-subtitle-side {
    width: 6rem;
    height: 1px;
    background-color: white;
}

.projects-info-container{
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    border: 2px solid white;
}

.projects-info-container .project-info{
    background-color: white;
    overflow: hidden;
    padding: 10px;
}

.projects-info-container .project-info h5{
    text-align: center;
    font-weight: bold;
}

.projects-info-container .project-info img{
    width: 100%
}

.projects-info-container .project-info p{
    margin-top: 5px;
    text-align: center;
}


/* ============== Footer Section ======================= */
footer{
    width: 100%;
    padding: 2rem 1rem;
    background-color: #060b60;
}

.footer-item{
    display: flex;
    justify-content: center;
    text-align: center;
}

.footer-item .footer-item-content{
    color: white;
}

.footer-image-bg{
    overflow: hidden;
    position: relative;
    width: 10rem;
    height: 10rem;
    background-image: linear-gradient(to top right, #3498db, #8e44ad);
    border-radius: 75% 25% 56% 44% / 63% 60% 40% 37%;
    box-shadow: 3px 5px 7px;
    margin: auto;
}

.footer-image-bg img{
    position: absolute;
    overflow: hidden;
    width: 9rem;
    left: .5rem;
    top: -2rem;
}

.social-icon{
    background-image: linear-gradient(to top right, #3498db, #8e44ad);
    border-radius: 10px;
}

.social-icon button{
    background-color: transparent;
    border: none;
}

.social-icon button a{
    color: black;
}

.footer-item iframe {
    width: 100%;
    height: 100%;
    border: 0;
  }







@media only screen and (min-width: 768px) {
    .image-bg {
        width: 30rem;
        height: 30rem;
    }

    .image-bg img {
        width: 29rem;
        left: 4rem;
        margin-top: -8rem;
    }

    .carousel-image img{
        width: 50rem;
        height: 20rem;
    }
}

@media only screen and (min-width: 992){
    .footer-map iframe{
        width: 10rem;
        height: 20rem;
    }
}

@media only screen and (max-width: 992px){
    .certificates-images{
        flex-direction: column;
    }
}

</style>
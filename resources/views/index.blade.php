@extends('layouts.app')

@section('content')

    <!-- section intro -->
    <section id="intro">
        <div class="slogan">
            <div class="icon">
                <i class="icon-beaker icon-10x"></i>
            </div>
            <h1> Приветствуем Вас на <span>Obzzivalka</span> creative studio</h1>
            <h2>Хотите узнать что-то о преподе или прокоментировать его работу? Тогда вы попали куда нужно</h2>
        </div>
    </section>
    <!-- end intro -->
    <!-- Section about -->
    <section id="about" class="section">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div class="heading">
                        <h3><span>About us</span></h3>
                    </div>
                    <div class="sub-heading">
                        <p>
                            У нас вы найдете информацию о любом преподе в любом универе.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end section about -->
    <!-- section services -->
    <section id="services" class="section parallax dark">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div class="heading">
                        <h3><span>Университеты</span></h3>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="span3">


                </div>
            </div>
        </div>
    </section>
    <!-- end section services -->
    <!-- section works -->
    <section id="works" class="section gray-bg">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div class="heading">
                        <h3><span>Преподаватели</span></h3>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- section works -->
    <!-- section contact -->
    <section id="contact" class="section">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div class="heading">
                        <h3><span>Обратная связь</span></h3>
                    </div>
                    <div class="sub-heading">
                        <p>

                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">

            <div class="row">
                <div class="span6">
                    <h4><i class="icon-envelope"></i><strong>Contact form</strong></h4>
                    <p>

                    </p>
                    <!-- start contact form -->
                    <form action="" method="post" role="form" class="contactForm">
                        <div id="sendmessage">Your message has been sent. Thank you!</div>
                        <div id="errormessage"></div>

                        <ul class="contact-list">
                            <li class="form-group">
                                <label>Name <span>*</span></label>
                                <input type="text" name="name" class="form_input" id="name" placeholder="Your Name"
                                       data-rule="minlen:4" data-msg="Please enter at least 4 chars"/>
                                <div class="validation"></div>
                            <li class="form-group">
                                <label>Email <span>*</span></label>
                                <input type="email" class="form_input" name="email" id="email" placeholder="Your Email"
                                       data-rule="email" data-msg="Please enter a valid email"/>
                                <div class="validation"></div>
                            </li>
                            <li class="form-group">
                                <label>Subject <span>*</span></label>
                                <input type="text" class="form_input" name="subject" id="subject" placeholder="Subject"
                                       data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject"/>
                                <div class="validation"></div>
                            </li>

                            <li class="form-group">
                                <label>Your message <span>*</span></label>
                                <textarea class="form_textarea" name="message" rows="12" data-rule="required"
                                          data-msg="Please write something for us" placeholder="Message"></textarea>
                                <div class="validation"></div>
                            </li>
                            <li class="last">
                                <button class="btn btn-large btn-theme" type="submit" id="send">Send a message</button>
                            </li>
                        </ul>
                    </form>

                    <!-- end contact form -->
                </div>
            </div>
        </div>
        <!-- end section contact -->
    </section>
@endsection

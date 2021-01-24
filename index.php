<!DOCTYPE html>
<html lang="en">

<head>
    <!--Import Google Icon Font-->
    <title>Prep50 - Books</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="css/style.css" media="screen,projection" />

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Facebook Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '682339515822965');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" src="https://www.facebook.com/tr?id=682339515822965&ev=PageView
    &noscript=1" />
    </noscript>
    <!-- End Facebook Pixel Code -->
    <!-- <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/jquery-2.2.2.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <!-- <script type="text/javascript" src="js/main.js"> -->
    <script>
        $(document).ready(function(e) {
            //select 
            $('.modal').modal();
            $('select').formSelect();
            $("#contactform").on('submit', (function(e) {
                e.preventDefault();
                $("#mail-status").hide();
                $('#send-message').hide();
                $('#loader-icon').show();
                $("#contactform").show();
                $.ajax({
                    url: "./php/contactmail.php",
                    type: "POST",
                    dataType: 'json',
                    data: {
                        "fullname": $('input[name="fullname"]').val(),
                        "email": $('input[name="email"]').val(),
                        "phone": $('input[name="phone"]').val(),
                        "state": $('input[name="state"]').val(),
                        "bundle_waec": $('select[name="bundle_waec"]').val(),
                        "bundle_jamb": $('select[name="bundle_jamb"]').val(),
                        "g-recaptcha-response": $('textarea[id="g-recaptcha-response"]').val()
                    },
                    success: function(response) {
                        $("#mail-status").show();
                        $('#loader-icon').hide();
                        if (response.type == "error") {
                            $('#send-message').show();
                            $("#mail-status").attr("class", "error");
                        } else if (response.type == "message") {
                            $('#send-message').hide();
                            $("#mail-status").attr("class", "success");
                        }
                        $("#mail-status").html(response.text);
                    },
                    error: function() {}
                });
            }));
        });
    </script>
</head>

<body>
    <!-- multistep form -->
    <div class="container">
        <h4>Secret to A1 in WAEC and 350 in JAMB exam revealed…..No Malpractice</h4>

        We will share with you a previously held secret method for exam preparation, used only by one of the Maltina
        Teacher of the year to prepare her students for guaranteed success

        <h4>“Would you have graduated with this kind of sitting arrangement?”</h4>

        <img class="responsive-img" src="img/sch.jpg" />

        <p>ofcourse, You cannot write what you did not learn</p>
        <p>These days many people believe that they must cheat in the exam hall to pass. It has even become the norm in
            many secondary schools today that they contribute money for the invigilators to allow them to cheat, some with
            the support of their teachers and school authorities. This is a horrible situation.</p>

        <p>Imagine how you would feel if you are in a 12hr flight and something strange happens up there and a passenger
            reliably confirms that the pilot and co-pilots are friends who graduated by sorting out their lecturers with
            money….</p>

        <p>What will be your faith when you suddenly realize that the medical doctor about to surgically operate on your
            mother cheated to pass all through his medical school? Both situations are shocking and hopeless right? That how
            we feel when we think about the state of education in Nigeria.</p>

        <p>See, It is not just about ENDSARS or END POLICE BRUTALITY or BRIBERY & CORRUPTION, we also have to end exam
            malpractices and all other forms of academic dishonesty for this nation to truly prosper and if you are like me
            or If you honestly want your child to LEARN and prepare well for WAEC and JAMB exams, a former Maltina teacher
            of the year has revealed her study tools and techniques which she uses to help students master different topics
            10times faster than thought possible… Schools among the top 10 Best secondary schools in Nigeria are already
            using it. It’s a book series and in the next one week, I will be giving out ONE extra book FREE if you buy the
            WAEC bundle.</p>

        <p>So I urge you</p>

        <h5>Dear Parents,</h5>

        <p>What you do to help your child prepare for WAEC and JAMB exams matter. The difference between a good exam
            preparation tool and a bad one can have huge impact on your child’s WAEC result or JAMB score and their ability
            to either get admitted into a higher institution or stay at home for another one year.</p>
        <p>The tools she designed will help your child to:</p>
        <ul>
            <li><b>a.</b> Give Structure to his/her learning activities</li>
            <li><b>b.</b> Help them to easily retain and recall what they have learnt</li>
            <li><b>c.</b> Train their mind on how to learn anything even the most difficult subjects</li>
            <li><b>d.</b> Help them to see clearly how questions are patterned for each topic and each subject.</li>
            <li><b>e.</b> Observe and capture how teachers and examiners think when they create questions.</li>
            <li><b>f.</b> Develop the ability to predict new questions</li>
        </ul>
        <div>
            <p>So even if your child is not intelligent, even if they are not that smart or they are mostly distracted, there is a formula behind passing exams and they can grab it without malpractice and still succeed. I can show you how when you click on Learn more</p>

            <h4>Secret to A1 in WAEC and 350 in JAMB exam revealed…..No Malpractice</h4>

            <p>We will share with you a previously held secret method for exam preparation, used only by one of the Maltina Teacher of the year to prepare her students for guaranteed success.</p>

            <img class="responsive-img" src="img/ckc.jpg" />

            <h5>CKC 2020</h5>

            <p>Before now, when students are in SS3 and want to prepare for exams. They usually buy and make use of the past questions arranged year by year (like 1988 - 2020). On each year, take the subject – Physics for instance, you have 60 questions drawn from 30 to 40 topics in Physics. Attempting to study the set of questions in a year and really learn anything about them is virtually impossible but yet students persist in studying that way. Secondly, most students do not even have an idea of what WAEC or JAMB questions are like until few months to the exams. </p>


            <p>The problem with this kind of past questions arranged in years is that by studying them, you want to learn something about 40 topics in an hour. Nobody studies like that. It’s more like going to the market to buy an item you don’t know where the sellers are. You will have to virtually walk through the whole market to see exactly what you are looking for. If you have to read “Scalar and vector Quantities” in Physics in a day, It will take you the whole day to try to search for all the questions year by year from that topic from your usual past questions. This is time consuming and unproductive.</p>

            <p>But come to think of it, our markets are even more structured than the preparatory tools most students use to prepare for their exams. We now have foodstuffs market, electricals market, building materials market, computer village market etc and even in bigger markets, we have lines that help to organize sellers in a way that is very easy for customers to find them at the least possible time. </p>


            <p><b>Our Solution:</b> What we have learned from the best teachers is that they have as one of their teaching tools, all WAEC and JAMB questions sorted topic by topic using the WAEC and JAMB syllabus. By doing so, </p>
            <ul>

                <li><b>*</b> it is easy for them to see all the WAEC & JAMB questions under any topic at a glance. </li>
                <li><b>*</b> It helps them to teach differently because they already understood the different ways questions can be framed from a topic.</li>
                <li><b>*</b> Students enjoy their teaching because, there is no question they cannot tackle after listening to them</li>

        </div>
        <div>
            <p>This is what we have done with the <b>PREP50 past questions for WAEC and for JAMB</b>. We have redesigned and re-conceptualized it by re-arranging the questions topic by topic. This arrangement helps students to focus on a particular topic one after the other and see all the questions WAEC and JAMB has drawn from that particular topic over the years. It’s more like a past question in a textbook format.</p>

            <p>No preparation is better than this and the topics are further narrowed down to sub-topics to help for easy structure and bite-sized learning which is how typical any human mind learns. From your Nursery School till University, teachers introduce lessons in small chunks and spread it out over days and some weeks depending on the volume of material to be covered.</p>

            <p>That’s not all, the topics are also divided into the classes, SS1, SS2 & SS3 topics to help every student to start learning from SS1 and not wait for SS3. In the schools where these teachers are, they use the prep50 books every day to see and solve questions from the topics they have just learned. </p>

            <p>Teachers who make use of Prep50 books will always guarantee their students an ‘A’ in their subject because there is no how you can study this way from SS1 to SS3 and not make an A in any subject.</p>


            <p>The truth is all SS3 student will buy a past question someday. But what it should be is that all in SS1 should buy and start using Prep50 past questions for their studies. You have to be a not so organized person not to be amazed on how we structured our book.</p>

            <h5>Available Subjects in WAEC</h5>
            <ul>
                <li>English Language</li>
                <li>Mathematics</li>
                <li>Biology</li>
                <li>Chemistry</li>
                <li>Physics</li>
                <li>Government</li>
                <li>Economics</li>
                <li>Literature WAEC & JAMB combined</li>
                <li>CRS</li>
                <li>Civic and Trade Subjects</li>
            </ul>

            <p>Back cover for all the waec subjects arranged</p>


            <h5>Available Subjects in JAMB</h5>
            <ul>
                <li>English Language</li>
                <li>Mathematics</li>
                <li>Biology</li>
                <li>Chemistry</li>
                <li>Physics</li>
                <li>Government</li>
                <li>Economics</li>
                <li> WAEC & JAMB combined</li>
                <li>CRS</li>
            </ul>
        </div>
        <div>
            <p> Back cover for all the JAMB subjects arranged</p>

            <h5>IN the Pack</h5>
            <b>What you get</b>
            <ul>
                <li>Jamb = four books</li>
                <li>Waec = 6/7 books</li>
                <li>1 Office file for credentials</li>
                <li>I free past questions booklet that contains Civic Education, Marketing, Data processing, Computer Studies</p>
                <li>Free novel (Midsummer Night) for English Language…WAEC and JAMB</li>
                <li>1 biro</li>
                <li>One month access to our prep50 online tutorial classes on JAMB</li>
                <li>Free Delivery to your location</li>
            </ul>

            <h5>Pricing</h5>
            <ul>
                <li>JAMB bundle is 7,500</li>
                <li>WAEC bundle is 9,500</li>
            </ul>
            <p>Pay before delivery to:</p>
            <p>Deacons Educational Consult & Data Centre</p>
            <p>Zenith Bank - 1016993496.</p>

            <h5>Procedure: </h5>
            <p>When you place an order for any of the bundle, we will give you a call to confirm the subjects you need within the bundle as they may vary from one student to another. </p>

            <p>Once your order is confirmed and the subjects properly selected, you will be expected to make payment before we send out your order for delivery</p>

            <h5>Phone: 09038356928</h5>
        </div>
        <!-- Modal Trigger -->
        <a style="background-color:red; " class="waves-effect waves-light btn modal-trigger" href="#modal1">Click Here to Order Your!</a>

        <!-- Modal Structure -->
        <div id="modal1" class="modal modal-fixed-footer">
            <div class="modal-content">
                <div class="col s12 z-depth-6 card-panel">
                    <div class="row">
                        <form class="col s12" method="POST" name="contactform" id="contactform">
                            <div class="card" style="text-align: center; color: red;">
                                <h2>Prep50 Books</h2>
                                <p>Please fill the following information</p>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <input name="fullname" id="full_name" type="text" class="validate" required>
                                    <label for="full_name">Full Name</label>
                                </div>
                                <div class="input-field col s6">
                                    <input id="phone_number" name="phone" type="text" class="validate" required>
                                    <label for="phone_number">Phone Number</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="email" name="email" type="email" class="validate" required>
                                    <label for="email">Email</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="state" type="text" name="state" class="validate" required>
                                    <label for="state">Enter Your Full Address including the city and state</label>
                                </div>

                            </div>
                            <div class="row">
                                <div class="input-field col s12 m6">
                                    <h4 style="text-align: center; color: red;">WAEC Bundle</h4>
                                    <select class="browser-default" name="bundle_waec">
                                        <option value="" disabled selected>Choose your Bundle</option>
                                        <option value="waec_Science_Bundle" data-icon="images/sample-1.jpg">Science Bundle
                                            &#8358;9,500</option>
                                        <option value="waec_Art_Bundle" data-icon="images/office.jpg">Art Bundle
                                            &#8358;9,500
                                        </option>
                                        <option value="waec_commercial_Bundle" data-icon="images/yuna.jpg">Commercial Bundle
                                            &#8358;9,500</option>
                                    </select>
                                    <!-- <label>Images in select</label> -->
                                </div>
                                <div class="input-field col s12 m6">
                                    <h4 style="text-align: center; color: red;">JAMB Bundle</h4>
                                    <select class="browser-default" name="bundle_jamb">
                                        <option value="" disabled selected>Choose your Bundle</option>
                                        <option value="Jamb_Science_Bundle" data-icon="images/sample-1.jpg" class="left">
                                            Science
                                            Bundle &#8358;7,500</option>
                                        <option value="Jamb_social_Science_Bundle" data-icon="images/office.jpg" class="left">
                                            Social Science Bundle &#8358;7,500</option>
                                        <option value="jamb_art_Bundle" data-icon="images/yuna.jpg" class="left">Art Bundle
                                            &#8358;7,500</option>
                                    </select>
                                    <!-- <label>Images in select</label> -->
                                </div>

                            </div>
                            <div class="row">
                                <div class="g-recaptcha" data-sitekey="6Lflb7UUAAAAAAatiqb1FywgTX6TpXqlohBGs2qs">
                                </div>
                                <div class="card">
                                    <div class="input-field col s12" id="mail-status"> </div>
                                </div>
                            </div>
                            <button class="btn waves-effect waves-light" id="send-message" type="submit" name="action">
                                Submit
                                <i class="material-icons right">send</i>
                            </button>

                    </div>
                    </form>
                    <div class="progress" id="loader-icon" style="display:none; ">
                        <div class="indeterminate"></div>
                    </div>
                </div>
            </div>
            <!-- <div class="modal-footer">
                <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Agree</a>
            </div> -->
        </div>
    </div>

    <!-- <div class="container">
        <div class="col s12 z-depth-6 card-panel">
            <div class="row">
                <form class="col s12" method="POST" name="contactform" id="contactform">
                    <div class="card" style="text-align: center; color: red;">
                        <h2>Prep50 Books</h2>
                        <p>Please fill the following information</p>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input name="fullname" id="full_name" type="text" class="validate" required>
                            <label for="full_name">Full Name</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="phone_number" name="phone" type="text" class="validate" required>
                            <label for="phone_number">Phone Number</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="email" name="email" type="email" class="validate" required>
                            <label for="email">Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="state" type="text" name="state" class="validate" required>
                            <label for="state">Enter Your Full Address including the city and state</label>
                        </div>

                    </div>
                    <div class="row">
                        <div class="input-field col s12 m6">
                            <h4 style="text-align: center; color: red;">WAEC Bundle</h4>
                            <select class="browser-default" name="bundle_waec">
                                <option value="" disabled selected>Choose your Bundle</option>
                                <option value="waec_Science_Bundle" data-icon="images/sample-1.jpg">Science Bundle
                                    &#8358;9,500</option>
                                <option value="waec_Art_Bundle" data-icon="images/office.jpg">Art Bundle
                                    &#8358;9,500
                                </option>
                                <option value="waec_commercial_Bundle" data-icon="images/yuna.jpg">Commercial Bundle
                                    &#8358;9,500</option>
                            </select>
                        </div>
                        <div class="input-field col s12 m6">
                            <h4 style="text-align: center; color: red;">JAMB Bundle</h4>
                            <select class="browser-default" name="bundle_jamb">
                                <option value="" disabled selected>Choose your Bundle</option>
                                <option value="Jamb_Science_Bundle" data-icon="images/sample-1.jpg" class="left">
                                    Science
                                    Bundle &#8358;7,500</option>
                                <option value="Jamb_social_Science_Bundle" data-icon="images/office.jpg" class="left">
                                    Social Science Bundle &#8358;7,500</option>
                                <option value="jamb_art_Bundle" data-icon="images/yuna.jpg" class="left">Art Bundle
                                    &#8358;7,500</option>
                            </select>
                        </div>

                    </div>
                    <div class="row">
                        <div class="g-recaptcha" data-sitekey="6Lflb7UUAAAAAAatiqb1FywgTX6TpXqlohBGs2qs">
                        </div>
                        <div class="card">
                            <div class="input-field col s12" id="mail-status"> </div>
                        </div>
                    </div>
                    <button class="btn waves-effect waves-light" id="send-message" type="submit" name="action">
                        Submit
                        <i class="material-icons right">send</i>
                    </button>

            </div>
            </form>
            <div class="progress" id="loader-icon" style="display:none; ">
                <div class="indeterminate"></div>
            </div>
        </div>
    </div>
    </div> -->
</body>

</html>
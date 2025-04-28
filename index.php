<?php
if (isset($_GET['message_send_successfully'])) {
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Thank You,</strong> I recived your message. i\'ll reply you soon.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
} elseif (isset($_GET['message_not_sent'])) {
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Sorry,</strong> Something went wrong please try again.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}
?>
<!DOCTYPE html>
<html lang=en>

<head>
  <meta charset=UTF-8>
  <meta name=viewport content="width=device-width, initial-scale=1.0">
  <meta http-equiv=X-UA-Compatible content="ie=edge">
  <link rel="shortcut icon" href=images/icon.PNG type=image/x-icon>
  <title>Md. Fahad Monshi - Full Stack Web Developer From Bangladesh.</title>
  <link rel=stylesheet href=css/bootstrap.min.css type=text/css>
  <link rel=stylesheet href=fonts/icons/css/all.min.css>
  <link rel=stylesheet href=css/slick.css>
  <link rel=stylesheet href=css/slick-theme.css type=text/css>
  <link rel=stylesheet href=styles.css type=text/css>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="100">
  <section class="preloader">
    <h1>Loading...</h1>
  </section>
  <header class=topHeader id=homeFront>
    <nav class="navbar navbar-expand-md" id=navbar>
      <a href="./index.php" class=navbar-brand>Md. Fahad Monshi</a>
      <span class="mobilemenu right">
        <li style=list-style:none><button onclick=toggle()><i class="fas fa-bars"></i></button></li>
      </span>
      <ul id=nav-mobile class="navbar-nav ml-auto">
        <li class=nav-item><a href=#homeFront class="nav-link active">Home</a></li>
        <li class=nav-item><a class=nav-link href=#portfolio>Projects</a></li>
        <li class=nav-item><a class=nav-link href=#skills>Skills</a></li>
        <li class=nav-item><a class=nav-link href=#about>About</a></li>
        <li class=nav-item><a class=nav-link href=#contact>Contact</a></li>
        <li class=nav-item><a class=nav-link href='./blog.php'>Blog</a></li>
        <li class=nav-item><a class="btn btn-warning" href="images/Md_Fahad_Monshi_CV.pdf" target="_blank">Download
            CV</a></li>
      </ul>
    </nav>
    <section class=header>
      <div class=row id=particles-js>
        <div class=overlay></div>
        <div class="col-sm-12 col-md-12 col-lg-8 z2">
          <div class=meFront>
            <div class=row>
              <div class="col-lg-5 col-md-5 col-sm-12">
                <img src=images/me.jpg width=300>
              </div>
              <div class="col-lg-7 col-md-7 col-sm-12">
                <h1 class=text-white>Md. Fahad Monshi_</h1>
                <span class="text-white lead" id=typed></span><br><br>
                <div class="row mb-10">
                  <div class="col-2 text-info">
                    AGE:
                  </div>
                  <div class="col-10 text-white lead">
                    26
                  </div>
                </div>
                <div class="row mb-10">
                  <div class="col-2 text-info">
                    PHONE:
                  </div>
                  <div class="col-10 text-white lead">
                    +8801571764180
                  </div>
                </div>
                <div class="row mb-10">
                  <div class="col-2 text-info">
                    EMAIL:
                  </div>
                  <div class="col-10 text-white lead">
                    fahad4bangladesh@gmail.com
                  </div>
                </div>
                <div class="row mb-10">
                  <div class="col-2 text-info">
                    ADDRESS:
                  </div>
                  <div class="col-10 text-white lead">
                    3, 4, 5, K.P Ghosh Street, Armanitola, Dhaka-1100
                  </div>
                </div>
                <div class=icon-bar>
                  <a href="https://facebook.com/mdfahad.index" target=_blank class=text-white><i
                      class="fab fa-facebook-square"></i></a>
                  <a href="https://www.x.com/bd_fahad" target=_blank class=text-white><i
                      class="fab fa-twitter-square"></i></a>
                  <a href="https://github.com/MohammadFahad1/" target=_blank class=text-white><i
                      class="fab fa-github-square"></i></a>
                  <a href="https://www.linkedin.com/in/fahad4bd/" target=_blank class=text-white><i
                      class="fab fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-4 z2">
          <div class=meFront>
            <div class=row>
              <div class="col-sm-4 col-md-4 col-lg-12">
                <div class="progress blue">
                  <span class=progress-left>
                    <span class=progress-bar></span>
                  </span>
                  <span class=progress-right>
                    <span class=progress-bar></span>
                  </span>
                  <div class=progress-value>
                    <span style=font-size:50%>Responsive Web Design</span><br>
                    100%
                  </div>
                </div>
              </div>
              <div class="col-sm-4 col-md-4 col-lg-12">
                <div class="progress yellow">
                  <span class=progress-left>
                    <span class=progress-bar></span>
                  </span>
                  <span class=progress-right>
                    <span class=progress-bar></span>
                  </span>
                  <div class=progress-value>
                    <span style=font-size:50%>Back End Development</span>
                    90%
                  </div>
                </div>
              </div>
              <div class="col-sm-4 col-md-4 col-lg-12">
                <div class="progress pink">
                  <span class=progress-left>
                    <span class=progress-bar></span>
                  </span>
                  <span class=progress-right>
                    <span class=progress-bar></span>
                  </span>
                  <div class=progress-value>
                    <span style=font-size:50%>Fully Secured</span><br>
                    80%
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </header>
  <section class=about id=about>
    <div class=container>
      <div class=row>
        <div class=col-12>
          <h1>About Me_</h1>
          <p class=lead>My interest in programming started back in 2014 when I first explored editing and customizing
            web applications. Since then, I have been passionate about building user-friendly, efficient, and dynamic
            web solutions.
            <br>
            Here are some of the technologies I have been working with recently:
          <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-3">
              <ul style="margin-left: 20px" class="custom-list ">
                <li>HTML</li>
                <li>CSS</li>
                <li>JavaScript</li>
                <li>Bootstrap</li>
                <li>TailwindCSS</li>
                <li>ReactJs</li>
                <li>NextJs</li>
              </ul>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3">
              <ul class="custom-list">
                <li>NodeJs</li>
                <li>ExpressJs</li>
                <li>Firebase</li>
                <li>MongoDB</li>
                <li>MySQL</li>
                <li>Python</li>
                <li>Django</li>
              </ul>
            </div>
          </div>
          </p>
          <button class=button><a href=#portfolio>View Projects</a></button>
        </div>
      </div>
    </div>
  </section>
  <section class=projectsDone>
    <div class=container>
      <div class=row>
        <div class="col-sm-12 col-md-6 col-lg-3">
          <div class=pdone>
            <h1 class=counter>43</h1>
            <h1>+</h1>
            <br>
            <h5>Responsive Web Design</h5>
            <img src=images/funfact_wave.png alt>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3">
          <div class=pdone>
            <h1 class=counter>62</h1>
            <h1>+</h1>
            <br>
            <h5>Back End Development</h5>
            <img src=images/funfact_wave.png alt>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3">
          <div class=pdone>
            <h1 class=counter>28</h1>
            <h1>+</h1>
            <br>
            <h5>Woocommerce Website</h5>
            <img src=images/funfact_wave.png alt>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3">
          <div class=pdone>
            <h1 class=counter>22</h1>
            <h1>+</h1>
            <br>
            <h5>Wordpress Theme Customize</h5>
            <img src=images/funfact_wave.png alt>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class=skills id=skills>
    <div class=container>
      <p class=lead>GENERAL SKILLS_</p>
      <div class=row>
        <div class="col-sm-12 col-md-12 col-lg-6">
          HTML/HTML5
          <div class=skill>
            95%
            <div class=skillExp style=width:95%;background:orangered></div>
          </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6">
          CSS/CSS3
          <div class=skill>
            90%
            <div class=skillExp style=width:90%;background:#1abc9c></div>
          </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6">
          JAVASCRIPT
          <div class=skill>
            85%
            <div class=skillExp style=width:85%;background:#049dff></div>
          </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6">
          React Js
          <div class=skill>
            90%
            <div class=skillExp style=width:88%;background:#ed687c></div>
          </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6">
          BOOTSTRAP
          <div class=skill>
            80%
            <div class=skillExp style=width:90%;background:#e47042></div>
          </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6">
          TailwindCSS
          <div class=skill>
            85%
            <div class=skillExp style=width:90%;background:#e47042></div>
          </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6">
          NextJs
          <div class=skill>
            80%
            <div class=skillExp style=width:95%;background:#47e978></div>
          </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6">
          NodeJs/Express Js
          <div class=skill>
            90%
            <div class=skillExp style="width:95%;background:rgb(2, 159, 151)"></div>
          </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6">
          MongoDB
          <div class=skill>
            70%
            <div class=skillExp style="width:75%;background:rgb(129, 3, 9)"></div>
          </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6">
          MySQL
          <div class=skill>
            85%
            <div class=skillExp style="width:80%;background:rgb(12, 142, 58)"></div>
          </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6">
          Python
          <div class=skill>
            90%
            <div class=skillExp style=width:75%;background:#c002b0></div>
          </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6">
          Django
          <div class=skill>
            95%
            <div class=skillExp style=width:80%;background:#8047e9></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class=clientTestimonial>
    <div class=quote>
      <p><i class="fas fa-quote-right"></i></p>
    </div>
    <div class=container>
      <div class=row>
        <div class=col-12>
          <div class="autoplay utslider">
            <div class=utslide>
              <img src="images/clients/image01.jpg" height="100" width="100">
              <h2>Samim Sarkar</h2>
              <p><i class="fas fa-quote-left"></i>Great Worker with awsome skill's. i'll deffenietly hire him again.<i
                  class="fas fa-quote-right"></i></p>
            </div>
            <div class=utslide>
              <img src=images/clients/image02.jpg>
              <h2>Sujan Saha</h2>
              <p><i class="fas fa-quote-left"></i>Good, Proffetional & Responsive design. Good Experience.<i
                  class="fas fa-quote-right"></i></p>
            </div>
            <div class=utslide>
              <img src=images/clients/image03.png>
              <h2>Partha Paul</h2>
              <p><i class="fas fa-quote-left"></i>Great work man, i got my project 2 days before. very fast and
                proffetional work. <i class="fas fa-quote-right"></i></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class=portfolio id=portfolio>
    <div class=container>
      <div class=row>
        <div class=col-lg-12>
          <h5>MY PORTFOLIO_</h5>
          <div class=tab>
            <button class=tablinks onclick="openCity(event,'trueresell')" id=defaultOpen>TrueReseell</button>
            <button class=tablinks onclick="openCity(event,'immigration')">Immigration & Visa</button>
            <button class=tablinks onclick="openCity(event,'knowledgedot')">Learning Platform</button>
          </div>
          <div title="portfolio">
            <div id=trueresell class=tabcontent>
              <div class=row>
                <div class="col-sm-12 col-md-4 col-lg-4 hov">
                  <img src="images/trueresell.png" width=100%>
                </div>
                <div class="col-sm-12 col-md-8 col-lg-8 hov">
                  <div class=projectDescription>
                    <h5>Second Hand Watch Reselling Marketplace</h5>
                    <p>This is a second hand watch reselling marketplace. Any user can come and register in two
                      different roles Buyer or Seller. User will see different options in the dashboard based on their
                      role.</p>
                    <br>
                    <h5>We Used:</h5>
                    <div class="d-flex justify-content-between">
                      <div>
                        <div class="btn btn-info btn-sm">ReactJs</div>
                        <div class="btn btn-info btn-sm">NodeJs</div>
                        <div class="btn btn-info btn-sm">ExpressJs</div>
                        <div class="btn btn-info btn-sm">Firebase</div>
                        <div class="btn btn-info btn-sm">MongoDB</div>
                        <div class="btn btn-info btn-sm">JWT</div>
                      </div>
                      <a href="./projects/trueresell.php"><button class="btn btn-warning">Details</button></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div title="portfolio">
            <div id=immigration class=tabcontent>
              <div class=row>
                <div class="col-sm-12 col-md-4 col-lg-4 hov">
                  <img src="images/immigrationvisa.png" width=100%>
                </div>
                <div class="col-sm-12 col-md-8 col-lg-8 hov">
                  <div class=projectDescription>
                    <h5>Immigration & VISA Consultation Site</h5>
                    <p>This is an immigration and visa consultation service review website. Any user can come and
                      register to give feedback or review to the service they like. they see their reviews on
                      different
                      services that will help other users to pick the best service.</p>
                    <br>
                    <h5>We Used:</h5>
                    <div class="d-flex justify-content-between">
                      <div>
                        <div class="btn btn-info btn-sm">ReactJs</div>
                        <div class="btn btn-info btn-sm">NodeJs</div>
                        <div class="btn btn-info btn-sm">ExpressJs</div>
                        <div class="btn btn-info btn-sm">MongoDB</div>
                        <div class="btn btn-info btn-sm">Firebase</div>
                        <div class="btn btn-info btn-sm">JWT</div>
                        <div class="btn btn-info btn-sm">Tailwind CSS</div>
                      </div>
                      <a href="./projects/immigration.php"><button class="btn btn-warning">Details</button></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div title="portfolio">
            <div id="knowledgedot" class="tabcontent">
              <div class=row>
                <div class="col-sm-12 col-md-4 col-lg-4 hov">
                  <img src="images/knowledgedot.png" width=100%>
                </div>
                <div class="col-sm-12 col-md-8 col-lg-8 hov">
                  <div class=projectDescription>
                    <h5>Learn your favorite Programming Language</h5>
                    <p>This is a free learning platform or tutorial website where any user can come and sign in
                      through
                      various way such as facebook, github or by email. after logging in they can take the course they
                      like and continue to lear.</p>
                    <br>
                    <h5>We Used:</h5>
                    <div class="d-flex justify-content-between">
                      <div>
                        <div class="btn btn-info btn-sm">ReactJs</div>
                        <div class="btn btn-info btn-sm">Node Js</div>
                        <div class="btn btn-info btn-sm">Express Js</div>
                        <div class="btn btn-info btn-sm">MongoDB</div>
                        <div class="btn btn-info btn-sm">Firebase</div>
                        <div class="btn btn-info btn-sm">Tailwind Css</div>
                      </div>
                      <a href="./projects/knowledge.php"><button class="btn btn-warning">Details</button></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="contact" id="contact">
    <div class="container">
      <h5>CONTACT WITH ME</h5>
      <form action="mail.php" method="post" class="form-group">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12"><input type="text" name="name" placeholder="Enter Your Full Name..."
              class="form-control" required></div>
          <div class="col-lg-6 col-md-6 col-sm-12"><input type="email" name="email"
              placeholder="Enter Your Email Address..." class="form-control" required></div>
          <div class="col-lg-12"><input type="text" name="subject" placeholder="Enter Subject..." class="form-control"
              required></div>
          <div class="col-lg-12"><textarea rows="6" name="message" placeholder="Enter Your Message" class="form-control"
              required></textarea></div>
          <div class="col-lg-12"><input type="submit" name="submit" value="Submit" class="btn btn-info"></div>
        </div>
      </form>
    </div>
  </div>
  <section class=map>
    <div class=row>
      <div class=col-lg-12>
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d228.30737482526175!2d90.40344033344101!3d23.714622243947407!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s5%20k.p%20ghsh%20street%2C%20armanitola%2C%20Dhaka!5e0!3m2!1sbn!2sbd!4v1745824123615!5m2!1sbn!2sbd"
          width=100% height=450 frameborder=0 style=border:0 allowfullscreen></iframe>
      </div>
    </div>
  </section>
  <section class=footer>
    <h5>Copyright &copy; Md. Fahad Monshi (2015 - 2019)</h5>
    <a href=https://facebook.com/mdfahad.index target="_blank"><i class="fab fa-facebook"></i></a>
    <a href=https://x.com/bd_fahad target="_blank"><i class="fab fa-twitter-square"></i></a>
    <a href=https://github.com/MohammadFahad1/ target="_blank"><i class="fab fa-github"></i></a>
    <a href=https://www.linkedin.com/in/fahad4bd/ target="_blank"><i class="fab fa-linkedin"></i></a>
  </section>
  <script src=js/jquery-3.4.1.min.js type=text/javascript></script>
  <script src=js/bootstrap.min.js type=text/javascript></script>
  <script src=js/typed.min.js type=text/javascript></script>
  <script src=js/particles.min.js type=text/javascript></script>
  <script src=js/app.js type=text/javascript></script>
  <script src=js/jquery.waypoints.min.js type=text/javascript></script>
  <script src=js/jquery.counterup.min.js type=text/javascript></script>
  <script src=js/slick.min.js type=text/javascript></script>
  <script src=js/script.js type=text/javascript></script>
</body>

</html>

 @extends('layouts.main')

 @section('main-container')

  <!-- Main Content-->
  <main>
    <!-- First Section: Heading lines and image -->
    <section id="intro" class="section scrollspy full-height">
      <div class="overlay"></div>
      <div class="container">
        <div class="col-md-9">
          <div class="content section-padding valign" style="margin-left: 10%; margin-top: 50px;">
            <div class="caption">
              <h2>Hi, I'm <span class="teal">sahil chotaliya.</span></h2>
              <h5 style="color:#fff">A <span class="typing" style="font-weight: 300; color:#004d40"></span></h5>
              <!-- <h5 style="color:#00796b">A <span class="typing" style="font-weight: 300; color:#fff"></span></h5> -->
              <h5>Self-driven, quick starter, passionate programmer with a curious mind who enjoys solving a complex and challenging real-world problems.</h5>
            </div>
            <div class="social">
              <a href="https://www.linkedin.com/in/sahil-chotaliya-02b24a1aa" target="_blank">
                <button class="icon-btn linkedin">
                  <i class="fa fa-linkedin"></i>
                </button>
              </a>
              <a href="https://github.com/" target="_blank">
                <button class="icon-btn github">
                  <i class="fa fa-github"></i>
                </button>
              </a>

              
            </div>
            <div class='buttons'>
              <a href="#about" class="readme">Read More</a>
              <a href="#contact" class="contactme">Contact Me</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Second Section: About -->
    <section id="about" class="section scrollspy">
      <h3 class="page-title white-text teal">About</h3>
      <div class="container flow-text">
        <!-- <blockquote>
          <h2>
            A Software Developer with a passion for Backend Development and Artificial Intelligence.

          </h2>
        </blockquote> -->        
        <p>
          I am a Information Technology Student at Uka tarsadia University. I enjoy problem-solving and coding. Always strive to bring 100% to the work I do.

          I have worked on technologies like Java, PHP, Android, MySQL, , , HTML5, CSS, , C++ during my Diploma's.
          I am passionate about developing complex applications that solve real-world problems impacting millions of users.
        </p>
        <p>
          <ul>
            <li><b>Languages:</b> Python, Java, JavaScript, C, C++, HTML/CSS </li>
            <li><b>Databases:</b> MySQL, MongoDB</li>
            <li><b>Libraries:</b> NumPy, Pandas, </li>
            <li><b>Frameworks:</b> Laravel, Node.js, Bootstrap, Apache Xampp</li>
           
          </ul>
          
        </p>
          
        
       
        
      </div>
    </section>


    <!-- Third Section: Experience -->
    <section id="experience" class="section scrollspy">
      <h3 class="page-title white-text teal">Experience</h3>
      <div class="container">

        <!-- Latest Experience -->
        <div class="card">
          <div class="card-content">
            <div class="row">
              <div class="col s12 m2">
                <a href="Www.oceanbitsolutions.com" target="_blank"><img alt="Oceanbit Pvt.Ltd"
                    src="{{URL::asset('fronted//assets/img/oceanbit.jpg')}}" class="responsive-img center-block" /></a>
              </div>
              <!-- <div class="col s12 m10"> -->
              <div class="col s12 m10">
                <p>
                  <span class="card-title"><a href="{{URL('http://www.oceanbitsolutions.com/')}}" target="_blank"
                      class="teal-text hoverline">oceanbit pvt.ltd</a></span>
                </p>
              </div>
            </div>
            <div class="role brown-text text-darken-2">Software Engineer</div>
            <ul>
              <li>
                currently working from summer internship
              </li>
              
              <li>
                <b>Tools:</b> Java, Android, Laravel
              </li>
            </ul>
          </div>
          <div class="card-action">
            <span>July 2023 - Present | gujrat, India</span>
          </div>
        </div>

        
        

      </div>
    </section>

    <!-- Fourth Section: Projects -->
    <section id="projects" class="section scrollspy">
      <h3 class="page-title white-text teal">Projects</h3>
      <div class="container">
        <div class="row">

          <div class="col s12 m6 l4">
            <div class="card medium">
              <div class="card-image waves-effect waves-block waves-light">
                <img alt=" online library app" src="{{URL::asset('fronted/assets/img/library.jpg')}}" style="height: 100%; width: 100%" class="activator" />
              </div>
              <div class="card-content">
                <span class="card-title activator teal-text hoverline">Online Library System<i
                    class="mdi-navigation-more-vert right"></i></span>
                <p>
                  A  online library app based on Android
                </p>
              </div>
              <div class="card-reveal">
                <!-- TODO: change this -- only close button -->
                <!-- <span class="card-title brown-text">Accomplishments<i class="mdi-navigation-close right"></i></span> -->
                <span class="card-title grey-text"><small>Accomplishments</small><i
                    class="mdi-navigation-close right"></i></span>
                <ul>
                  <li><b>Tools:</b> Android, HTML, CSS, Bootstrap, SQLite,  PhpmyAdmin</li>
                  <li>Register/login to the web app(with OAuth-based Google Sign-In).</li>
                  <li>Search and filter Books based on language and Author.</li>
                  
               


                </ul>
               
              </div>
            </div>
          </div>

          
          

          <!-- Flask Project -->
         
    </section>

    <!-- Fifth Section: Skills -->
    <section id="skills" class="section scrollspy">
      <h3 class="page-title white-text teal">Skills</h3>
      <div class="container">
        <!-- Languages and Databases -->
        <div class="card">
          <div class="card-content">
            <h4 class="brown-text light">Languages and Databases</h4>
            <div class="row text-center">
              <div class="col s4 m2">
                <img alt="" src="{{URL::asset('fronted/assets/img/python-logo-1-300x300.jpg')}}" class="responsive-img" />Python
              </div>
              <div class="col s4 m2">
                <img alt="" src="{{URL::asset('fronted/assets/img/html5-300x300.jpg')}}" class="responsive-img" />HTML5
              </div>
              <div class="col s4 m2">
                <img alt="" src="{{URL::asset('fronted/assets/img/css3-300x300.jpg')}}" class="responsive-img" />CSS3
              </div>
              <div class="col s4 m2">
                <img alt="" src="{{URL::asset('fronted/assets/img/mysql-logo-1-300x300.jpg')}}" class="responsive-img" />MySQL
              </div>
              
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-content">
            <h4 class="brown-text light">Libraries</h4>
            <div class="row text-center">
              <div class="col s4 m2">
                <img alt="" src="{{URL::asset('fronted/assets/img/numpy-logo-1-500x500.jpg')}}" class="responsive-img" />NumPy
              </div>
              <div class="col s4 m2">
                <img alt="" src="{{URL::asset('fronted/assets/img/pandas-logo-2-500x500.jpg')}}" class="responsive-img" />Pandas
              </div>
            
            </div>
          </div>
        </div>

        <!-- Frameworks -->
        <div class="card">
          <div class="card-content">
            <h4 class="brown-text light">Frameworks</h4>
            <div class="row text-center">
              <div class="col s4 m2">
                <img alt="" src="{{URL::asset('fronted//assets/img/django-logo.webp')}}" class="responsive-img" />Django
              </div>
              
              <div class="col s4 m2">
                <img alt="" src="{{URL::asset('fronted//assets/img/bootstrap.png')}}" class="responsive-img" />Bootstrap
              </div>
             
              
              <div class="col s4 m2">
                <img alt="" src="{{URL::asset('fronted//assets/img/laravel.jpg')}}" class="responsive-img" />Laravel
              </div>
            </div>
          </div>
        </div>

        
    </section>

    <!-- Seventh Section: Education -->
    <section id="education" class="section scrollspy">
      <h3 class="page-title white-text teal">Education</h3>
      <div class="container">
        <div class="row">
          <!-- Education -->
          <div class="col s12 m6 l6">
            <div class="card">
              <div class="card-content">
                <p>
                  <span class="card-title"><a href="http://utu.ac.in/" target="_blank" class="teal-text hoverline">Uka Tarsadia University</a></span>
                </p>
                <p class="brown-text">bardoli, INDIA</p>
                <p>
                  <b>Degree: </b>bachelor's in information technology    
                  <br>
                  <b>CGPA: </b>7.0/10.0
                </p>

                <ul>
                  <p>
                    <b>Relevant Courseworks:</b>
                  <ul>
                    <li>Html</li>
                    <li>Laravel</li>
                    <li>Foundations of Algorithms</li>                    
                  </ul>
                  </p>

                </ul>
              </div>
            </div>

            
          </div>
          <div class="col s12 m6 l6">
            <div class="card">
              <div class="card-content">
                <p>
                  <span class="card-title"><a href="www.gprj.cteguj.in" target="_blank" class="teal-text hoverline">GOVERNMENT POLYTECHNIC, RAJKOT
                      University</a></span>
                </p>
                <p class="brown-text">Rajkot, India</p>
                <p>
                  <b>Degree: </b>Diploma in Information  Technology
                  <br>
                  <b>CGPA: </b>8.65/10.00
                </p>

                <ul>
                  <p>
                    <b>Relevant Courseworks:</b>
                  <ul>
                    <li>Data Structures and Algorithms</li>
                    <li>Database Management Systems</li>
                    <li>Operating Systems</li>
                    <li>Machine Learning</li>
                    <li>Computer Vision</li>
                  </ul>
                  </p>

                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="contact" class="section scrollspy full-height">
      <h3 class="page-title white-text teal">Contact</h3>
      <div class="container">
        <p>
          <a aria-label="Call sahil" data-position="top" data-tooltip="Call Varad"
            class="btn-floating btn-large waves-effect waves-light blue-grey tooltipped"><i class="fa fa-phone"></i><a
              aria-label="Call Varad">7990256225</a></a>
        </p>
        <p>
          <a aria-label="Email sahil" href="chotaliyasahil7890@gmail.com" target="_blank" data-position="top"
            data-tooltip="Email Varad" class="btn-floating btn-large waves-effect waves-light blue-grey tooltipped"><i
              class="fa fa-envelope"></i><a aria-label="Email Varad" href="mailto:vbhogayata@gmail.com"
              class="hoverline">chotaliyasahil7890@gmail.com</a></a>
        </p>
       
        <p>
          <a aria-label="View sahil on LinkedIn" href="https://www.linkedin.com/in/sahil-chotaliya-02b24a1aa" target="_blank"
            data-position="top" data-tooltip="View Varad on LinkedIn"
            class="btn-floating btn-large waves-effect waves-light blue-grey tooltipped"><i
              class="fa fa-linkedin"></i><a aria-label="Varad on LinkedIn" href="https://www.linkedin.com/in/sahil-chotaliya-02b24a1aa"
              class="hoverline" target="_blank">linkedin.com/sahil chotaliya></a>
        </p>
      </div>
    </section>
  </main>

    
    
    

@endsection
    
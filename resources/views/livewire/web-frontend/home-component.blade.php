<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About</h2>
          <p>Hi, I'm Orlando, an Engineer and Backend Developer with experience in PHP and Laravel.

            I'm passionate about creating scalable and efficient web applications that meet the needs of my clients.
            
            and I'm passionate about using technology to solve real-world problems; I'm also always looking for new ways to improve my skills, and always willing to share my adquired knowledge with others.</p>
        </div>

        @if($about)

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="assets/img/profile-img.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3 class="mb-4">{{$about->title}}</h3>
          
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>{{$about->website}}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>{{$about->phone}}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Origin Country:</strong> <span>{{$about->origin_country}}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Country of Residence:</strong> <span>{{$about->country_of_residence}}</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>{{$about->age}}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>{{$about->degree}}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>{{$about->email}}</span></li>
              
                </ul>
              </div>
            </div>
            <p>
              
            </p>
          </div>
        </div>

        @else

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="assets/img/profile-img.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>Mechatronics Engineer  &amp; Backend Developer.</h3>
            <p class="fst-italic">
              
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>www.example.com</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+4915128022111</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Origin Country:</strong> <span>Honduras</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Country of Residence:</strong> <span>Germany</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>26</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Bachelor of Mechatronics Engineering</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>vidaurre0438@gmail.com</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
                </ul>
              </div>
            </div>
            <p>
              
            </p>
          </div>
        </div>

        @endif

      </div>
    </section><!-- End About Section -->

  

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Skills</h2>
          <p>I am a developer with experience in a variety of technologies: </p>
        </div>

        <div class="row skills-content">

          <div class="col-lg-6" data-aos="fade-up">
            @forelse ( $skills as $skill )

            <div class="progress">
              <span class="skill">{{$skill->name}}  <i class="val">{{$skill->percentage}}</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="{{$skill->percentage}}" aria-valuemin="0" aria-valuemax="95"></div>
              </div>
            </div>

         
          @empty

          <div class="progress">
            <span class="skill">HTML <i class="val">95%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="95"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">CSS <i class="val">90%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">JavaScript <i class="val">75%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
              <span class="skill">MySQL <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">C <i class="val">70%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            </div>
          @endforelse
        </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

            @forelse ($skills2 as $skill )
            <div class="progress">
                <span class="skill">{{$skill->name}} <i class="val">{{$skill->percentage}}</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="{{$skill->percentage}}" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            @empty
            <div class="progress">
                <span class="skill">Laravel <i class="val">90%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
  
  
              <div class="progress">
                  <span class="skill">Docker <i class="val">80%</i></span>
                  <div class="progress-bar-wrap">
                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
  
                <div class="progress">
                  <span class="skill">C++ <i class="val">65%</i></span>
                  <div class="progress-bar-wrap">
                    <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
  
              <div class="progress">
            </div>
            <span class="skill">React <i class="val">45%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            @endforelse

  

        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">

        <div class="section-title">
          <h2>Resume</h2>
         
        </div>
        @if($resume)
  <div class="row">
    <div class="col-lg-6" data-aos="fade-up">
      <h3 class="resume-title">Sumary</h3>
      <div class="resume-item pb-0">
        <h4>Orlando Vidaurre </h4>
        {!! $resume->summary!!}
      </div>

      <h3 class="resume-title">Education</h3>
      <div class="resume-item">
        {!! $resume->education!!}
      </div>
     
    </div>
    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
      <h3 class="resume-title">Professional Experience</h3>
      <div class="resume-item">
        {!! $resume->experience!!}
      </div>
    </div>
  </div>
        @else 
        
        <div class="row">
          <div class="col-lg-6" data-aos="fade-up">
            <h3 class="resume-title">Sumary</h3>
            <div class="resume-item pb-0">
              <h4>Orlando Vidaurre </h4>
              <p><em>Passionate Engineer and Programming Developer with a strong desire to continually learn and grow in my field. I enjoy exploring new technologies and techniques, and I am always eager to share my knowledge and collaborate with others. With a diverse set of skills and a dedication to staying current with industry trends, I am confident in my ability to deliver high-quality work and exceed expectations..</em></p>
              <ul>

                <li></li>
                
                <li></li>

                <li></li>

              </ul>
            </div>

            <h3 class="resume-title">Education</h3>
            <div class="resume-item">
              <h4>Bachelor of Engineering in Mechatronics</h4>
              <h5>2014 - 2020</h5>
              <p><em>Universidad Tecnológica Centroamericana[UNITEC][Honduras, Cortés]
            </em></p>
              
            </div>
            <div class="resume-item">
                <h4>Mechatronic design, Mechatronic System(150 hours)</h4>
                <h5>2018 - 2018</h5>
                <p><em>Universidad Politécnica de Valencia[UPV][España, Valencia]</em></p>
              
              </div>
            <div class="resume-item">
              <h4>High School Diploma of Science and Letters, basic school life completed. </h4>
              <h5>2007 - 2013</h5>
              <p><em>Alfa & Omega[Honduras, Copán]</em></p>
            
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Professional Experience</h3>
            <div class="resume-item">
              <h4>Full Stack PHP Developer</h4>
              <h5>2022 - Present</h5>
              <p><em>Remote</em></p>
              <ul>
                <li>Junior web developer with 1+ year of experience in HTML5, CSS/SASS, JavaScript, PHP, and Laravel.</li>
                <li>Customer Service and Relationships 
                </li>
                <li>Expertise in building modern and interactive websites, developing small-scale web applications, and creating containerized environments.</li>
                <li>Proven ability to use version control systems, make asynchronous requests, and manage MySQL databases.</li>
                <li>Skilled in OPP, MVC architecture and responsive and mobile-friendly design.</li>
              </ul>
            </div>
            <div class="resume-item">
              <h4>Electronic Workshop Supervisor </h4>
              <h5>2020 - 2022</h5>
              <p><em>Supervisor Maintenance</em></p>
              <ul>
                <li>Provided maintenance services for equipment and systems, ensuring optimal functionality.</li>
                <li>Managed and oversaw daily operations of a self-owned store.</li>
                <li>Implemented efficient systems and processes to optimize store operations.
                </li>
                <li>Addressed technical issues and provided reliable solutions using strong problem-solving abilities.</li>
              </ul>
            </div>
          </div>
        </div>
        @endif 

      </div>
    </section><!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Portfolio</h2>
          
        </div>


       

      
        <div class="row portfolio-container" data-aos="fade-up"  data-aos-delay="100"  >

         

          @forelse ($projects as $project )
          <div class="col-lg-4 col-md-6 portfolio-item filter-{{$project->title}}">
            <img src="{{asset('assets/img/project')}}/{{$project->project_image}}" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="{{asset('assets/img/project')}}/{{$project->project_image}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{$project->title}}"><i class="bx bx-plus"></i></a>
                <a href="{{url($project->link)}}" target="_blank" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
          @empty

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
          @endforelse

          

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Services</h2>
          <p>I am able to effectively communicate my ideas to clients and team members, and I am always willing to go the extra mile to ensure that everyone is happy and satisfied with the final product.</p>
        </div>

        <div class="row">

          @forelse ($services as $service )
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
            <div class="icon"><i class="bi bi-file-code"></i></div>
            <h4 class="title"><a href="">{{$service->title}}</a></h4>
            <p class="description">{{$service->description}}</p>
          </div>
          @empty
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
            <div class="icon"><i class="bi bi-file-code"></i></div>
            <h4 class="title"><a href="">Web development</a></h4>
            <p class="description">I can create custom websites for businesses and individuals, using a variety of technologies and platforms. I have experience with HTML, CSS, JavaScript, PHP, MySQL, and other web development languages and frameworks.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="bi bi-menu-app"></i></div>
            <h4 class="title"><a href="">Web application development</a></h4>
            <p class="description">I can develop web applications for a variety of purposes, including e-commerce, social media, and content management. I have experience with a variety of web application frameworks, including Laravel, and React.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="bi bi-terminal"></i></div>
            <h4 class="title"><a href="">Web API development</a></h4>
            <p class="description">I can develop web APIs to expose data and functionality to other applications. I have experience with a variety of API development technologies, including REST.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><i class="bi bi-check-circle"></i></div>
            <h4 class="title"><a href="">Web performance optimization</a></h4>
            <p class="description">I can optimize websites and web applications for performance and scalability. I have experience with a variety of web performance optimization techniques, including caching, minification, and image optimization.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
            <div class="icon"><i class="bi bi-shield-check"></i></div>
            <h4 class="title"><a href="">Web security</a></h4>
            <p class="description">I can secure websites and web applications from attack. I have experience with a variety of web security technologies, including SSL/TLS, authentication, and authorization.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
            <div class="icon"><i class="bi bi-calendar4-week"></i></div>
            <h4 class="title"><a href="">Web maintenance and support</a></h4>
            <p class="description">I can provide ongoing maintenance and support for websites and web applications. This includes fixing bugs, making updates, and ensuring that websites and web applications are running smoothly and securely.</p>
          </div>
          @endforelse
          
        </div>

      </div>
    </section><!-- End Services Section -->

  

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>If you are looking for a talented and experienced web developer, please contact me today. I would be happy to discuss your project and provide you with a quote.</p>
        </div>

        <div class="row" data-aos="fade-in">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Angelikastr Essen, Germany</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>vidaurre0438@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+491512802111</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2487.007961400959!2d7.013931176465657!3d51.439647671797985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47b8dd2cd5633fe9%3A0x4aade1db77fb66cf!2sAngelikastra%C3%9Fe%2C%2045130%20Essen!5e0!3m2!1sen!2sde!4v1695415382217!5m2!1sen!2sde" width="100%" height="290px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" rameborder="0" ></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch " wire:ignore.self>
            <form wire:submit.prevent='addMessage' role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required wire:model='name'>
                  @error('name')
                    <span class="text-danger">{{$message}}</span>
                  @enderror
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required wire:model='email'>
                  @error('email')
                  <span class="text-danger">{{$message}}</span>
                @enderror
                </div>
              </div>
              <div class="form-group">
                <label for="name">Phone</label>
                <input type="number" class="form-control" name="phone" id="phone" require wire:model='phone'>
                @error('phone')
                <span class="text-danger">{{$message}}</span>
              @enderror
              </div>
              <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" name="message" rows="10" required wire:model='message'></textarea>
                @error('message')
                <span class="text-danger">{{$message}}</span>
              @enderror
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main>

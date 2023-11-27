<!DOCTYPE html>
<html lang="en">
  <head>
    <title>NewLife Hospitals-Our Doctors</title>
    <link rel="stylesheet" href="doctors.css" />
    <script>
      function cons(name) {
        localStorage.setItem("cons", name);
        window.open("appointment.php", "_blank");
      }
    </script>
  </head>

  <body>

    <nav>
      <button id="d1" onclick="window.location.href='homepage.php';">
        <img id="back" src="backarrow.png" alt="Back to homepage" />
      </button>
      <div id="d13">Back to Homepage</div>
      <a href="login.php" target="_blank">Login</a>
      <div id="d0">Workdays: Mon-Sun (24x7)</div>
    </nav>

    <header>
      <img id="d4" src="img6.jpg" />
      <div>
        <div id="d2">
          <img src="logo.jpeg" alt="NewLife Hospitals" /><br />
          Our Doctors
        </div>
        <p>An expert team of doctors, dedicated to your care.</p>
      </div>
    </header>

    <section id="d5">

      <div class="dropdown1" style="margin-top: 20px">
        Cardiology
        <div class="dropdown-content">
          <div>
            <img src="doc1.jpg" alt="Dr.Varun Bahri" width="300" height="200" />
            <div class="desc">
              <b>Dr. Varun Bahri</b><br />MBBS, MS-Cardiothoracic Surgery<br />31
              years experience
            </div>
            <button onclick="cons('Dr. Varun Bahri')">book appointment</button>
          </div>
          <div>
            <img
              src="doc2.jpeg"
              alt="Dr.Prerana Chandra"
              width="300"
              height="200"
            />
            <div class="desc">
              <b>Dr. Prerana Chandra</b><br />MBBS, MS-Cardiology<br />25 years
              experience
            </div>
            <button onclick="cons('Dr. Prerana Chandra')">
              book appointment
            </button>
          </div>
          <div>
            <img
              src="doc3.jpeg"
              alt="Dr. Maitreyi Raghavan"
              width="300"
              height="200"
            />
            <div class="desc">
              <b>Dr. Maitreyi Raghavan</b><br />MBBS, MD-Cardiology<br />16
              years experience
            </div>
            <button onclick="cons('Dr. Maitreyi Raghavan')">book appointment</button>
          </div>
          <div>
            <img src="doc4.jpeg" alt="Dr. Krishna Kumar" width="300" height="200" />
            <div class="desc">
              <b>Dr. Krishna Kumar</b><br />MBBS, MD-Cardiology<br />19 years
              experience
            </div>
            <button onclick="cons('Dr. Krishna Kumar')">
              book appointment
            </button>
          </div>
        </div>
      </div>

      <div class="dropdown2" style="margin-top: 20px">
        Gynaecology
        <div class="dropdown-content">
          <div>
            <img src="doc5.jpeg" alt="Dr. Sunita Vishwani" width="300" height="200" />
            <div class="desc">
              <b>Dr. Sunita Vishwani</b><br />MBBS, MS-Gynaecology<br />20 years
              experience
            </div>
            <button onclick="cons('Dr. Sunita Vishwani')">
              book appointment
            </button>
          </div>
          <div>
            <img src="doc6.jpeg" alt="Dr. Vani Harinath" width="300" height="200" />
            <div class="desc">
              <b>Dr. Vani Harinath</b><br />MBBS, MS-Gynaecology<br />14 years
              experience
            </div>
            <button onclick="cons('Dr. Vani Harinath')">
              book appointment
            </button>
          </div>
          <div>
            <img src="doc7.jpeg" alt="Dr. Usha Sane" width="300" height="200" />
            <div class="desc">
              <b>Dr. Usha Sane</b><br />MBBS, MS-Gynaecology<br />10 years
              experience
            </div>
            <button onclick="cons('Dr. Usha Sane')">
              book appointment
            </button>
          </div>
          <div>
            <img src="doc8.jpeg" alt="Dr. Mary Alberto" width="300" height="200" />
            <div class="desc">
              <b>Dr. Mary Alberto</b><br />MBBS, MS-Gynaecology<br />5 years
              experience
            </div>
            <button onclick="cons('Dr. Mary Alberto')">
              book appointment
            </button>
          </div>
        </div>
      </div>
      <div class="dropdown3">
        General Care
        <div class="dropdown-content">
          <div>
            <img src="doc9.jpeg" alt="Dr. Leela Dutta" width="300" height="200" />
            <div class="desc">
              <b>Dr. Leela Dutta</b><br />MBBS, MD-General Physician<br />13
              years experience
            </div>
            <button onclick="cons('Dr. Leela Dutta')">
              book appointment
            </button>
          </div>
          <div>
            <img src="doc10.jpeg" alt="Dr. Jaishankar Jaishwal" width="300" height="200" />
            <div class="desc">
              <b>Dr. Jaishankar Jaishwal</b><br />MBBS, MD-General Physician<br />6
              years experience
            </div>
            <button onclick="cons('Dr. Jaishankar Jasihwal')">
              book appointment
            </button>
          </div>
          <div>
            <img src="doc11.jpeg" alt="Dr. Karan Manohar" width="300" height="200" />
            <div class="desc">
              <b>Dr. Karan Manohar</b><br />MBBS, MD-General Physician<br />18
              years experience
            </div>
            <button onclick="cons('Dr. Karan Manohar')">
              book appointment
            </button>
          </div>
          <div>
            <img src="doc12.jpeg" alt="Dr. Maryam Sheik" width="300" height="200" />
            <div class="desc">
              <b>Dr. Maryam Sheik</b><br />MBBS, MD-General Physician<br />10
              years experience
            </div>
            <button onclick="cons('Dr. Maryam Sheik')">
              book appointment
            </button>
          </div>
        </div>
      </div>
      <div class="dropdown4">
        Neurology
        <div class="dropdown-content">
          <div>
            <img src="doc13.jpeg" alt="Dr. Hari Gopal" width="300" height="200" />
            <div class="desc">
              <b>Dr. Hari Gopal</b><br />MBBS, MS-Neurology<br />20 years
              experience
            </div>
            <button onclick="cons('Dr. Hari Gopal')">
              book appointment
            </button>
          </div>
          <div>
            <img src="doc14.jpeg" alt="Dr. Aditya Thakur" width="300" height="200" />
            <div class="desc">
              <b>Dr. Aditya Thakur</b><br />MBBS, MS-Neurology<br />25 years
              experience
            </div>
            <button onclick="cons('Dr. Aditya Thakur')">
              book appointment
            </button>
          </div>
          <div>
            <img src="doc15.jpeg" alt="Dr. Anjani Mandan" width="300" height="200" />
            <div class="desc">
              <b>Dr. Anjani Mandan</b><br />MBBS, MS-Neurology<br />24 years
              experience
            </div>
            <button onclick="cons('Dr. Anjani Mandan')">
              book appointment
            </button>
          </div>
          <div>
            <img src="doc16.jpg" alt="Dr. Fatima Begum" width="300" height="200" />
            <div class="desc">
              <b>Dr. Fatima Begum</b><br />MBBS, MS-Neurology<br />18 years
              experience
            </div>
            <button onclick="cons('Dr. Fatima Begum')">
              book appointment
            </button>
          </div>
        </div>
      </div>
      <div class="dropdown5">
        Orthopaedics
        <div class="dropdown-content">
          <div>
            <img src="doc17.jpeg" alt="Dr. Sayana Chawla" width="300" height="200" />
            <div class="desc">
              <b>Dr. Sayana Chawla</b><br />MBBS, MS-Orthopaedics<br />23 years
              experience
            </div>
            <button onclick="cons('Dr. Sayana Chawla')">
              book appointment
            </button>
          </div>
          <div>
            <img src="doc18.jpeg" alt="Dr. Raghuveer karne" width="300" height="200" />
            <div class="desc">
              <b>Dr. Raghuveer karne</b><br />MBBS, D. Ortho<br />12 years
              experience
            </div>
            <button onclick="cons('Dr. Raghuveer karne')">
              book appointment
            </button>
          </div>
          <div>
            <img src="doc19.jpeg" alt="Dr. Inaya Akhtar" width="300" height="200" />
            <div class="desc">
              <b>Dr. Inaya Akhtar</b><br />MBBS, MS-Orthopaedics<br />14 years
              experience
            </div>
            <button onclick="cons('Dr. Inaya Akhtar')">
              book appointment
            </button>
          </div>
          <div>
            <img src="doc20.jpeg" alt="Dr. David Solomon" width="300" height="200" />
            <div class="desc">
              <b>Dr. David Solomon</b><br />MBBS, MS-Orthopaedics<br />11 years
              experience
            </div>
            <button onclick="cons('Dr. David Solomon')">
              book appointment
            </button>
          </div>
        </div>
      </div>
      <div class="dropdown6">
        Pediatrics
        <div class="dropdown-content">
          <div>
            <img src="doc21.jpg" alt="Dr. Sujata Rao" width="300" height="200" />
            <div class="desc">
              <b>Dr. Sujata Rao</b><br />MBBS, MD-Pediatrics<br />20 years
              experience
            </div>
            <button onclick="cons('Dr. Sujata Rao')">
              book appointment
            </button>
          </div>
          <div>
            <img src="doc22.jpeg" alt="Dr. Suresh Kumar" width="300" height="200" />
            <div class="desc">
              <b>Dr. Suresh Kumar</b><br />MBBS, MD-Pediatrics<br />25 years
              experience
            </div>
            <button onclick="cons('Dr. Suresh Kumar')">
              book appointment
            </button>
          </div>
          <div>
            <img src="doc23.jpeg" alt="Dr. Anjali Singh" width="300" height="200" />
            <div class="desc">
              <b>Dr. Anjali Singh</b><br />MBBS, MD-Pediatrics<br />16 years
              experience
            </div>
            <button onclick="cons('Dr. Anjali Singh')">
              book appointment
            </button>
          </div>
          <div>
            <img src="doc24.jpeg" alt="Dr. Akbar Khan" width="300" height="200" />
            <div class="desc">
              <b>Dr. Akbar Khan</b><br />MBBS, MD-Pediatrics<br />19 years
              experience
            </div>
            <button onclick="cons('Dr. Akbar Khan')">
              book appointment
            </button>
          </div>
        </div>
      </div>
      <div class="dropdown7">
        Radiology
        <div class="dropdown-content">
          <div>
            <img src="doc25.jpeg" alt="Dr. Uma Devi" width="300" height="200" />
            <div class="desc">
              <b>Dr. Uma Devi</b><br />B.Sc Radiology<br />15 years experience
            </div>
            <button onclick="c('Dr. Uma Devi')">
              book appointment
            </button>
          </div>
          <div>
            <img src="doc26.jpeg" alt="Dr. George Kanipella" width="300" height="200" />
            <div class="desc">
              <b>Dr. George Kanipella</b><br />MBBS, MD-Radiology<br />13 years
              experience
            </div>
            <button onclick="c('Dr. George Kanipella')">
              book appointment
            </button>
          </div>
          <div>
            <img src="doc27.jpeg" alt="Dr. Garima Patil" width="300" height="200" />
            <div class="desc">
              <b>Dr. Garima Patil</b><br />MBBS, MD-Radiology<br />21 years
              experience
            </div>
            <button onclick="c('Dr. Garima Patil')">
              book appointment
            </button>
          </div>
          <div>
            <img src="doc28.jpg" alt="Dr. Swapna Neyer" width="300" height="200" />
            <div class="desc">
              <b>Dr. Swapna Neyer</b><br />MBBS, MD-Radiology<br />20 years
              experience
            </div>
            <button onclick="c('Dr. Swapna Neyer')">
              book appointment
            </button>
          </div>
        </div>
      </div>
    </section>
    <footer>
      <div id="d10">
        <h3>Contact:</h3>
        <p>Phone: 1234567890</p>
        <p>
          Email:
          <a href="mailto:newlifecare@gmail.com">newlifecare@gmail.com</a>
        </p>
        <p>&copy; Geethanjali College of Engineering and Technology</p>
      </div>
      <div id="d12">
        <h3>Our Locations:</h3>
        <ul>
          <li>Hyderbad</li>
          <li>Pune</li>
          <li>Delhi</li>
          <li>Mumbai</li>
          <li>Vishakapatnam</li>
          <li>Bangalore</li>
        </ul>
      </div>
    </footer>
  </body>
</html>

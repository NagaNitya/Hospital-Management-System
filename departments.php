<!DOCTYPE html>
<html>
  <head>
    <title>NewLife Hospitals-Departments</title>
    <link rel="stylesheet" href="departments.css" />
    <script>
      function cons(){
        localStorage.setItem("cons", 'None');
        window.open("appointment.php", "_blank");
      }
    </script>
  </head>
  <body>
    <nav>
      <button id="d1" onclick="window.location.href='homepage.php'">
        <img id="back" src="backarrow.png" alt="Back to homepage" />
      </button>
      <div id="d13">Back to Homepage</div>
      <a href="login.php" target="_blank">Login</a>
      <div id="d0">Workdays: Mon-Sun (24x7)</div>
    </nav>
    <header>
      <img id="d4" src="img9.jpg" />
      <div>
        <div id="d2">
          <img id="d14" src="logo.jpeg" alt="logo"/><br>
          Departments
        </div>
        <p>World class infrastructure, for your comfort.</p>
      </div>
    </header>

    <section id="d19">
      <ul>
        <li><a href="#gynaecology">Gynaecology</a></li>
        <li><a href="#neurology">Neurology</a></li>
        <li><a href="#radiology">Radiology</a></li>
        <li><a href="#paediatrics">Paediatrics</a></li>
        <li><a href="#cardiology">Cardiology</a></li>
        <li><a href="#orthopaedics">Orthopaedics</a></li>
        <li><a href="#general-care">General Care</a></li>
      </ul>
    </section>

    <div class="department-section" id="gynaecology">
      <h2>Gynaecology Department</h2>
      <p>
        Gynecology is a medical discipline dedicated to female health care
        concerns including the development, diagnosis, prevention, and therapy
        of disorders and diseases distinct to the female reproductive system.
      </p>
    </div>

    <div class="department-section" id="neurology">
      <h2>Neurology Department</h2>
      <p>
        Neurology is a branch of medical science that is concerned with
        disorders and diseases of the nervous system.There are around a hundred
        billion neurons in the brain, capable of generating their own impulses
        and of receiving and transmitting impulses from neighbouring cells.
      </p>
    </div>

    <div class="department-section" id="radiology">
      <h2>Radiology Department</h2>
      <p>
        Radiology, also known as diagnostic imaging, is a series of tests that
        take pictures or images of parts of the body. The field encompasses two
        areas — diagnostic radiology and interventional radiology — that both
        use radiant energy to diagnose and treat diseases. While there are
        several different imaging exams, some of the most common include x-ray,
        MRI, ultrasound, CT scan and PET scan.
      </p>
    </div>

    <div class="department-section" id="paediatrics">
      <h2>Paediatrics Department</h2>
      <p>
        Pediatrics is the branch of medicine dealing with the health and medical
        care of infants, children, and adolescents from birth up to the age of
        18, Paediatrics is concerned not only about immediate management of the
        ill child but also long term effects on quality of life, disability and
        survival.
      </p>
    </div>

    <div class="department-section" id="cardiology">
      <h2>Cardiology Department</h2>
      <p>
        Cardiology is a medical specialty and a branch of internal medicine
        concerned with disorders of the heart. It deals with the diagnosis and
        treatment of such conditions as congenital heart defects, coronary
        artery disease, electrophysiology, heart failure and valvular heart
        disease. Subspecialties of the cardiology field include cardiac
        electrophysiology, echocardiography, interventional cardiology and
        nuclear cardiology.
      </p>
    </div>

    <div class="department-section" id="orthopaedics">
      <h2>Orthopaedics Department</h2>
      <p>
        Orthopedists use surgical and nonsurgical approaches to treat
        musculoskeletal issues, such as sports injuries, joint pain, and back
        problems,Orthopedics focuses on treating the musculoskeletal system,This
        system comprises muscles, bones, joints, ligaments, and tendons. A
        person who specializes in orthopedics is known as an orthopedist.
      </p>
    </div>

    <div class="department-section" id="general-care">
      <h2>General Care Department</h2>
      <p>
        General care is the initial point of contact between a patient and the
        healthcare system that provides individuals with access to the
        information and resources they need for optimal health outcomes.
      </p>
    </div>
      <button id="d16" onclick="cons()">Book an appointment</button>
    <footer>
        <div id="d17">
            <h3>Contact:</h3>
            <p>Phone: 1234567890</p>
            <p>Email: 
                <a href="mailto:newlifecare@gmail.com">newlifecare@gmail.com</a>
            </p>
            <p>&copy; Geethanjali College of Engineering and Technology</p>
        </div>
        <div id="d18">
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

<!DOCTYPE html>
<html>
    <head>
        <title>NewLife Hospitals-About Us</title>
        <link rel="stylesheet" href="about.css">
        <script>
            function cons(){
                localStorage.setItem('cons', 'None');
                window.open('appointment.php', '_blank');
            }
        </script>
    </head>
    <body>
        <nav>
            <button id="d1" onclick="window.location.href='homepage.php'"><img id="back" src="backarrow.png" alt="Back to homepage"/></button>
            <div id="d13">Back to Homepage</div>
            <a href="login.php" target="_blank">Login</a>
            <div id="d0">
              Workdays: Mon-Sun (24x7)
          </div>
        </nav>
        <header>
            <img id="d4" src="img7.jpg">
            <div>
                <div id="d2">
                    <img src="logo.jpeg" alt="logo"><br>
                    &nbsp;&nbsp;About Us</div>
                <p>NewLife: Your Hospital for Life.</p>
            </div>    
        </header>
        <section id="d5">
            <div>NewLife Hospitals was established with an aim to provide quality care to all of our patients. we achieve this through and expert team of doctrs and medical atff, state-of-the-arthealthcare infrastructure, and a comprehensive record-keeping system, helping our patients enjoy uninterrupted care.</div>
            <div>
                <div id="d6">Our Mission</div>
                <p>Our mission is to provide the best healthcare facilities to our patients.</p>
            </div>
            <div>
                <div id="d7">Our Vision</div>
                <p>Our vision is to be a global leader in healthcare, offering quality, comprehensive care for our patients.</p>
            </div>
            <div>
                <div id="d8">Our Values</div>
                <p>We value sincerity, affordability and effective care.</p>
            </div>
        </section>
        <div id="d9">Patient Testimonies</div>
        <section id="d10">
            <div id="d11">
                NewLife Hospitals has one of the best teams of doctors, nurses, and medical staff, who were extremely kind, giving me prompt and effective diagnosis and treatment.<br>~Manasa Bandan
            </div>
            <div id="d12">
                I would like to thank you on behalf of my entire family for the help and consideration shown to me in what was a very difficult time. Again, I would like to thank you for the services you provide to patients and their families.<br>~Sai Kiran
            </div>
            <div id="d14">
                Lovely caring nursing staff. Relaxing,warm atmosphere and peace of mind that I am being taken care of and advised as necessary. Thank you!<br>~Navya Sri
            </div>
        </section>
        <button id="d16" onclick="cons()">Book an Appointment</button>
        <section id="d15">
            <img src="GCETLogo.png" alt="GCET">
            <p>Geethanjali College of Engineering and Technology is equipped and geared to take on the responsibility of providing the student community with technical education on par with the latest advances in the field in a committed academic ambience and as we understand that acquiring a competency is not a one time event, but rather an ongoing process, the focus is on developing competencies in students for the future. What goes into making a great Institution, Geethanjali has it all.</p>
        </section>
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
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>NewLife Hospitals-Home</title>
        <link rel="stylesheet" href="homepage.css">
        <script>
            function cons(){
                localStorage.setItem('cons', 'None');
                window.open('appointment.php', '_blank');
            }
        </script>
    </head>
    <body>
        <nav>
            <div id="d2">
                <a href="about.php">About Us</a>
                <a href="doctors.php">Our Doctors</a>
                <a href="departments.php">Departments</a>
                <a href="login.php" target="_blank">Login</a>
            </div>
            <div id="d3">
                Workdays: Mon-Sun (24x7)
            </div>
        </nav>

        <header>
            <img id="d4" src="logo.jpeg" alt="logo" id="logo">
        </header>
        <button id="d16" onclick="cons()">Book an Appointment</button>

        <section id="info">
            <img src="cardio.jpg" id="d5">
            <div id="pd5">
                <h2>Cardiology</h2>
                <p>NewLife Hospitals specialises in all types of cardiac treatment, including invasive, non-invasive 
                    and interventional procedures</p>
            </div>
            <img src="neuro.jpg" id="d6">
            <div id="pd6">
                <h2>Neurology</h2>
                <p>The neurology department offers specialised, holistic care for all areas of the nervous system, 
                    including the brain, nerves, muscles and spinal cord. </p>
            </div>
            <img src="radio.jpg" id="d7">
            <div id="pd7">
                <h2>Radiology</h2>
                <p>The radiology department at NewLife Hospitals is equipped with the latest technology and offers a wide range of 
                    diagnostic services, including X-ray, CT, MRI, ultrasound and mammography.</p>
            </div>
            <img src="pedia.jpg" id="d8">
            <div id="pd8">
                <h2>Pediatrics</h2>
                <p>Our paediatric department offers a wide range of services for children, including vaccinations, 
                    developmental assessments, and treatment for common childhood illnesses.</p>
            </div>
            <button id="d11" onclick="window.location.href='departments.php'"><b></b>More Departments</b></button>
        </section>

        <footer>
            <div id="d10">
                <h3>Contact:</h3>
                <p>Phone: 1234567890</p>
                <p>Email: 
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

        
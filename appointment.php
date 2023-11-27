<!DOCTYPE html>
<html>
    <head>
        <title>NewLife hospitals-Appointment Booking</title>
        <link rel="stylesheet" href="appointment.css">
        <script>
            function dispdets()
            {
                var doc=localStorage.getItem('cons');
                document.getElementById("doc").value=doc;
            }
        </script>
    </head>
    <body onload="dispdets()">
        <img id="d1" src="img12.jpg" alt="smiley">
        <section id="d2">
            <img id="d3" src="logo.jpeg" alt="NewLife">
            <h3>Make an Appointment</h3>
          
            <form action="payment.php" method="POST">
                <input type="text" name="name" placeholder="Name" id="uname" required><br><br>
                <input type="text" name="phno" placeholder="Phone number" id="phno" required><br><br>
                <input type="email" name="email" placeholder="Email" id="email" required><br><br>
                <label for="date">Select appointment date:&nbsp;&nbsp;</label>
                <input type="date" id="date" name="date" required><br><br>
                <label for="time">Select appointment time:&nbsp;&nbsp;</label>
                <select id="time" name="time" required>
                    <option value="10:00-10:30">10:00-10:30</option>
                    <option value="10:30-11:00">10:30-11:00</option>
                    <option value="11:00-11:30">11:00-11:30</option>
                    <option value="11:30-12:00">11:30-12:00</option>
                    <option value="12:00-12:30">12:00-12:30</option>
                    <option value="2:00-2:30">2:00-2:30</option>
                    <option value="2:30-3:00">2:30-3:00</option>
                    <option value="3:00-3:30">3:00-3:30</option>
                    <option value="3:30-4:00">3:30-4:00</option>
                </select><br><br>
                <label for="status">I am a:&nbsp;&nbsp;</label>
                <select name="status" id="status" required>
                    <option value="student">Student</option>
                    <option value="teacher">Teacher</option>
                    <option value="other">Neither</option>
                </select><br><br>
                <input type="hidden" name="doc" id="doc">
                <input type="submit" value="Book" id="b1" name="b1">
            </form>
        </section>
    </body>
</html>
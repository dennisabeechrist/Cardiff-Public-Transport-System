<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cardiff Bus Management System</title>
</head>
<body>
    <header>
        <h1>Cardiff Bus Management System</h1>
        <nav>
            <ul>
                <li><a href="#home" onclick="showTab('home')">Home</a></li>
                <li><a href="#check-schedule" onclick="showTab('check-schedule')">Check Schedule</a></li>
                <li><a href="#book-ticket" onclick="showTab('book-ticket')">Book Ticket</a></li>
                <li><a href="#manage-buses" onclick="showTab('manage-buses')">Manage Buses</a></li>
                <li><a href="#about-us" onclick="showTab('about-us')">About Us</a></li>
            </ul>
        </nav>
    </header>

    <main>
    <div id="home" class="tab-content">
        <h2>Welcome to the Cardiff Bus Management System</h2>
        <img src="cardiffbus.jpg" alt="Cardiff Bus" class="main-image">
        <p>Find and book your bus tickets easily. Explore various routes across Cardiff and enjoy a seamless travel experience.</p>

        <div class="features">
            <div class="feature-item">
                <h3>Reliable Service</h3>
                <p>Our buses are known for their on-time arrival and high reliability across the city.</p>
            </div>
            <div class="feature-item">
                <h3>Wide Coverage</h3>
                <p>We cover all major routes in Cardiff, ensuring you're never too far from a bus stop.</p>
            </div>
            <div class="feature-item">
                <h3>Easy Booking</h3>
                <p>Book your tickets easily online and avoid queues at the stations!</p>
            </div>
        </div>

        <a href="#book-ticket" class="book-ticket-btn" onclick="showTab('book-ticket')" style="background-color: orange; color: white; padding: 15px 30px; font-size: 20px; font-weight: bold; border: none; border-radius: 5px; display: inline-block; text-align: center; text-decoration: none; margin-top: 20px;">Book a Ticket Now</a>

    </div>

        <div id="about-us" class="tab-content" style="display:none;">
        <img src="history.jpg" alt="History of Cardiff" class="about-image">
            <h2><br>The Cardiff Bus Story<br></h2>

            <p>It all began in 1902, when the Corporation of Cardiff started running electric powered trams in the city between Newport Road and the city centre. The Corporation had taken over the private Cardiff Tramway Company which had run horse trams and buses since 1870, although other operators had been running horse buses in the area since at least 1845. <br><br>

Until 1943, conductors were employed to collect the fares, but that year all tramcars were converted to run with a pay-as-you enter system without a conductor - like modern buses today. Then you paid just one old penny for any distance. No ticket was issued, but in 1949 the fare did go up by a halfpenny. Trams actually lasted right through to 1950, when trolleybuses (buses that took their electrical power from overhead lines) eventually replaced them, the first trolleybuses having been introduced in 1942. <br><br>
 
Cardiff was unusual in that it had single-deck trolleybuses as well as double-deckers, due to several low bridges in the docks area.<br>

From 1962 motor buses began to replace the trolleys, and the last trolleybus ran in Cardiff in 1970. Motor buses were operated since the early part of the 20th century, too. Early motorbus journeys would have been rather uncomfortable as pneumatic tyres were not fitted until 1924, and the top decks stayed open to the weather until roofs were first provided in 1925.<br><br>

All sorts of different makes were bought, but from the early 1930s right through to just after the Second World War, the manufacturer AEC was favoured, the same company that built many of London’s buses in those days.<br>

Traditionally buses in Cardiff were crimson and cream, but in the 1970s this was changed to orange and white. Although the first ‘driver only’ buses had been seen as long ago as 1923, one-person-operation on a large scale really began in the 1970s, with the Snowden Road route the last to lose its conductors in 1980.<br><br>

Although Cardiff had small buses before, it was in the 1980s that the minibus phenomenom gained momentum, and Cardiff’s Clipper buses could be seen all over the city. Probably a good idea at the time, the swing back to larger buses was inevitable, and during the 1990s the idea of making buses easier to use for everyone soon took hold. Buses without steps - what we call ‘low-floor’ - began to replace older types, and now in Cardiff all our buses are low-floor, even our latest double-deckers.<br>

The familiar Cardiff Bus green first appeared in 1999, and we bought our first bendybuses in 2006, adding a touch of European style to our capital city. We now carry 100,000 passengers every day on 3,000 journeys covering 27,000 miles. That’s an annual equivalent of going to the moon and back 20 times! Cardiff bus is busier than ever today, providing capital transport for our capital city. <br><br> </p>

            <p>Cardiff Bus Management System is designed to provide easy access to bus schedules, ticket booking, and bus management services across Cardiff. Our mission is to ensure that transportation is accessible and seamless for all our users.</p>
            <p>We are committed to delivering a user-friendly platform that helps commuters plan their journeys efficiently and offers bus operators a tool for managing services effectively.</p>
            <p>Contact us at <a href="mailto:info@cardiffbus.com">info@cardiffbus.com</a> for more information.</p>
        </div>


        <section id="check-schedule" class="tab-content" style="display:none;" aria-labelledby="check-schedule">
            <h2>Check Bus Schedule</h2>
            <form action="" method="get" novalidate>
                <div class="form-group">
                    <label for="source">Pick-up Point:</label>
                    <input type="text" id="source" name="source" required aria-required="true">
                </div>
                <div class="form-group">
                    <label for="destination">Destination:</label>
                    <input type="text" id="destination" name="destination" required aria-required="true">
                </div>
                <div class="form-group">
                    <label for="date_of_travel">Date of Travel:</label>
                    <input type="date" id="date_of_travel" name="date_of_travel" required aria-required="true">
                </div>
                <button type="submit" class="btn">Check Schedule</button>
            </form>

            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['source'])) {
                $source = htmlspecialchars($_GET['source']);
                $destination = htmlspecialchars($_GET['destination']);
                $date_of_travel = htmlspecialchars($_GET['date_of_travel']);

                echo "<h3>Bus Schedule from $source to $destination on $date_of_travel</h3>";
                echo "<ul>
                        <li>Bus 101: Departure 08:00 AM, Arrival 12:00 PM</li>
                        <li>Bus 202: Departure 10:00 AM, Arrival 02:00 PM</li>
                      </ul>";
            }
            ?>
        </section>

        <section id="book-ticket" class="tab-content" style="display:none;" aria-labelledby="book-ticket">
            <h2>Book Your Ticket</h2>
            <form action="" method="post" novalidate>
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required aria-required="true">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required aria-required="true">
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number:</label>
                    <input type="tel" id="phone" name="phone" required aria-required="true">
                </div>
                <div class="form-group">
                    <label for="bus_number">Bus Number:</label>
                    <input type="text" id="bus_number" name="bus_number" required aria-required="true">
                </div>
                <button type="submit" class="btn">Book Ticket</button>
            </form>

            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['passenger_name'])) {
                $passenger_name = htmlspecialchars($_POST['passenger_name']);
                $bus_no = htmlspecialchars($_POST['bus_no']);
                $date_of_journey = htmlspecialchars($_POST['date_of_journey']);

                echo "<h3>Booking Confirmation</h3>";
                echo "<p>Passenger: $passenger_name</p>";
                echo "<p>Bus Number: $bus_no</p>";
                echo "<p>Date of Journey: $date_of_journey</p>";
                echo "<p>Your booking has been successfully completed!</p>";
            }
            ?>
        </section>

        <div class="container" id="manage-buses" style="display:none;">
            <h1>Admin Control</h1>

            <?php


    if (basename($_SERVER['PHP_SELF']) == 'project.php') { 
        if (isset($_POST['password']) && $_POST['password'] === 'tiger') {
            $_SESSION['password_verified'] = true;
        }

        if (!isset($_SESSION['password_verified'])) {
            echo '<form method="POST">';
            echo '<label for="password">Enter Password:</label>';
            echo '<input type="password" name="password" placeholder="Enter your password" required>';
            echo '<input type="submit" value="Submit">';
            echo '</form>';
        } else {
            echo '<form method="POST">';
            echo '<label for="operation">Select Operation:</label>';
            echo '<select name="operation" required>';
            echo '<option value="">--Choose--</option>';
            echo '<option value="insert">Insert</option>';
            echo '<option value="update">Update</option>';
            echo '<option value="delete">Delete</option>';
            echo '</select>';

            echo '<label for="bus_id">Bus ID:</label>';
            echo '<input type="text" name="bus_id" placeholder="Enter Bus ID (e.g., 101)" required>';

            echo '<label for="route_number">Route Number:</label>';
            echo '<input type="text" name="route_number" placeholder="Enter Route Number" required>';

            echo '<label for="origin">Origin:</label>';
            echo '<input type="text" name="origin" placeholder="Enter Origin" required>';

            echo '<label for="destination">Destination:</label>';
            echo '<input type="text" name="destination" placeholder="Enter Destination" required>';

            echo '<label for="departure_time">Departure Time:</label>';
            echo '<input type="time" name="departure_time" required>';

            echo '<label for="arrival_time">Arrival Time:</label>';
            echo '<input type="time" name="arrival_time" required>';

            echo '<input type="submit" value="Execute">';
            echo '</form>';

            include 'db_connect.php'; 

            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['operation'])) {
                $operation = $_POST['operation'];
                $bus_id = $_POST['bus_id'];
                $route_number = $_POST['route_number'];
                $origin = $_POST['origin'];
                $destination = $_POST['destination'];
                $departure_time = $_POST['departure_time'];
                $arrival_time = $_POST['arrival_time'];

                if ($operation == 'insert') {
                    $sql = "INSERT INTO bus_services (bus_id, route_number, origin, destination, departure_time, arrival_time) 
                            VALUES ('$bus_id', '$route_number', '$origin', '$destination', '$departure_time', '$arrival_time')";
                    $conn->query($sql);
                } elseif ($operation == 'update') {
                    $sql = "UPDATE bus_services SET route_number='$route_number', origin='$origin', destination='$destination', 
                            departure_time='$departure_time', arrival_time='$arrival_time' WHERE bus_id='$bus_id'";
                    $conn->query($sql);
                } elseif ($operation == 'delete') {
                    $sql = "DELETE FROM bus_services WHERE bus_id='$bus_id'";
                    $conn->query($sql);
                }
            }

            $result = $conn->query("SELECT * FROM bus_services");
            if ($result->num_rows > 0) {
                echo "<table><tr><th>Bus ID</th><th>Route Number</th><th>Origin</th><th>Destination</th><th>Departure Time</th><th>Arrival Time</th></tr>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>{$row['bus_id']}</td><td>{$row['route_number']}</td><td>{$row['origin']}</td><td>{$row['destination']}</td><td>{$row['departure_time']}</td><td>{$row['arrival_time']}</td></tr>";
                }
                echo "</table>";
            } else {
                echo "<p>No bus services found.</p>";
            }

            $conn->close();
        }
    }
    ?>
        </div>

    </main>

    <footer>
        <p>&copy; 2023 Cardiff Bus Management System</p>
    </footer>

    <script>
        function showTab(tabId) {
            var tabContents = document.querySelectorAll('.tab-content, .container');
            for (var i = 0; i < tabContents.length; i++) {
                tabContents[i].style.display = 'none';
            }
            document.getElementById(tabId).style.display = 'block';
        }
    </script>
</body>
</html>
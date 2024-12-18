<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - Blood Donation System</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link your CSS file here -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }
        
        h1, h2 {
            text-align: center;
            color: #d32f2f; /* A blood-red color for headings */
            text-decoration: underline;
        }

        .services-section {
            padding: 50px 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            margin: 30px auto;
            max-width: 1200px;
        }

        .services-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .service-card {
            background-color: #e3f2fd;
            padding: 20px;
            margin: 15px;
            width: 300px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: 0.3s;
        }

        .service-card:hover {
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
        }

        .service-card h2 {
            color: #1976d2; /* Blue color for subheadings */
            font-size: 1.5em;
            margin-bottom: 10px;
        }

        .service-card p {
            color: #616161; /* Grey color for text */
            font-size: 1em;
            line-height: 1.6;
        }

      

    </style>
</head>
<body>
    <!-- Include the navigation bar -->
    <?php include 'navBar.php'; ?>

    <!-- Main Content -->
    <div class="services-section">
        <h1>Our Services</h1>
        <p>At Blood Donation System, we strive to provide essential services for the well-being of our community. Below are the various services we offer to ensure that no life is lost due to lack of blood.</p>

        <div class="services-container">
            <!-- Service 1: Donor Registration -->
            <div class="service-card">
                <h2>Donor Registration</h2>
                <p>We make it simple for individuals to register as blood donors. Once registered, you will receive notifications and reminders about upcoming donation opportunities based on your location. Your information is securely stored in our database, and we ensure that all donations are tracked and managed efficiently.</p>
                <p>Registered donors are also periodically informed about the blood types that are in high demand, allowing them to contribute whenever there is an urgent need.</p>
            </div>

            <!-- Service 2: Blood Donation Camps -->
            <div class="service-card">
                <h2>Blood Donation Camps</h2>
                <p>To facilitate easy access to blood donation, we regularly organize donation camps in collaboration with hospitals, NGOs, and community organizations. These camps are set up in convenient locations to encourage a large turnout of donors. Our camps are fully equipped with medical staff and the necessary facilities to ensure a smooth and safe donation experience.</p>
                <p>Blood collected from these camps is stored in approved blood banks, where it is properly screened and distributed to hospitals as per demand. Join us at our next camp and make a life-saving contribution.</p>
            </div>

            <!-- Service 3: Emergency Blood Requests -->
            <div class="service-card">
                <h2>Emergency Blood Requests</h2>
                <p>In times of medical emergencies, every second counts. Our emergency blood request system is designed to quickly connect patients in urgent need of blood with compatible donors. Whether due to accidents, surgeries, or medical conditions, patients can rely on our platform to find the required blood type from nearby donors.</p>
                <p>We maintain a real-time database of donors, categorized by blood type and location, ensuring that blood requests are fulfilled as swiftly as possible. Our team is available 24/7 to manage requests and coordinate donations.</p>
            </div>

            <!-- Service 4: Blood Bank Information -->
            <div class="service-card">
                <h2>Blood Bank Information</h2>
                <p>Blood Donation System maintains a comprehensive list of approved blood banks across the country. You can access up-to-date information about the availability of specific blood types at these banks. Our platform is regularly updated with inventory details from these banks to ensure transparency and accuracy in blood availability.</p>
                <p>Whether you are a donor looking to donate at a blood bank or a patient searching for a specific blood type, our blood bank directory will provide you with the nearest and most accessible options.</p>
            </div>

            <!-- Service 5: Volunteer and Community Engagement -->
            <div class="service-card">
                <h2>Volunteer and Community Engagement</h2>
                <p>We believe that blood donation is a community effort, and we welcome volunteers who wish to help us organize events, spread awareness, or assist at blood donation camps. Our volunteers are an essential part of our mission, helping us reach more people and save more lives.</p>
                <p>From distributing information about blood donation to recruiting new donors, there are many ways to get involved. Join our team of dedicated volunteers and make a difference in your community.</p>
            </div>

            <!-- Service 6: Health and Safety Guidelines -->
            <div class="service-card">
                <h2>Health and Safety Guidelines</h2>
                <p>Your safety is our top priority. We adhere to strict health and safety standards during blood donations. All our procedures are in line with medical guidelines to ensure that both donors and recipients are protected.</p>
                <p>We also provide information on eligibility criteria for blood donation, such as age, weight, and medical history, so you can be confident that you meet the requirements before donating. Additionally, our staff is trained to handle any medical emergencies that may arise during the donation process.</p>
            </div>

        </div>
    </div>

    <!-- Footer -->
    
</body>
</html>

<?php
include __DIR__ . "/config/db.php";

/* Fetch all entries with coordinates */
$result = $conn->query("
    SELECT latitude, longitude, remarks
    FROM sustainability_data
    WHERE latitude IS NOT NULL AND longitude IS NOT NULL
");
$markers = $result->fetch_all(MYSQLI_ASSOC);
?>


    <meta charset="UTF-8">
    <title>CPCIC</title>
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"/>
    <style>
        body { margin:0; font-family: Arial, sans-serif; }
        h2 { text-align:center; padding:10px; }
        #map { height: 90vh; width: 100%; }
    </style>
</head>
<body>





<html lang="en" style="scroll-behavior: smooth;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cpcic.css">
</head>
<body style="background-color:rgb(251, 251, 255);">

<div>
    <header style="width:100%; height:9%; padding:10px ;  display:flex; align-items:center; justify-content:space-between; border-bottom:2px solid #eee; font-family:Arial, sans-serif;">

        <!-- LOGO -->
        <div style="display:flex; align-items:center; gap:10px;">
            <img src="logo.jpeg" alt="Logo" style="width:45px; height:45px; border-radius:40px ;">
            <h1 style="font-size:18px; color:black; letter-spacing:1px; text-transform:uppercase; margin:0;">Cleaner Production and Climate Innovation Centre</h1>
        </div>

        <!-- NAVIGATION -->
        <nav style="flex-grow:1; margin-left:80px;">
            <ul style="display:flex; align-items:center; list-style:none; gap:1px; margin:0; padding:0;">
                <li><a href="#" class="top" style="color: green ; font-weight: bolder;" >HOME</a></li>
                <li><a href="#about" class="top"  style="color: gray ; font-weight: bolder;">ABOUT</a></li>
                <li>
                    <div style="position:relative; display:inline-block;">
                        <!-- Dropdown Button -->
                        <div class="top" style="color: gray;">
                            SECTORS &#x25BC;
                        </div>

                        <!-- Dropdown List -->
                        <ul style="position:absolute; top:110%; left:0; background:white; border:1px solid #ddd; border-radius:4px; list-style:none; padding:0; margin:0; width:200px; box-shadow:0 3px 8px rgba(0,0,0,0.1); display:none; z-index:1000;">
                            <li><a href="agriculture.html" class="section">AGRICULTURE</a></li>
                            <li><a href="industry.html" class="section">INDUSTRY</a></li>
                            <li><a href="mining.html" class="section">MINING</a></li>
                            <li><a href="tourism.html" class="section">TOURISM & HOSPITALITY</a></li>
                            <li><a href="manufacture.html" class="section">MANUFACTURING</a></li>
                            <li><a href="construction.html" class="section">CONSTRUCTION</a></li>
                        </ul>
                    </div>

                    <!-- HOVER SCRIPT (INLINE) -->
                    <script>
                        const dropdown = document.querySelector('div[style*="position:relative"]');
                        const list = dropdown.querySelector('ul');

                        let isInside = false;

                        dropdown.addEventListener("mouseenter", () => {
                            isInside = true;
                            list.style.display = "block";
                        });

                        dropdown.addEventListener("mouseleave", () => {
                            isInside = false;
                            setTimeout(() => {
                                if (!isInside) list.style.display = "none";
                            }, 150); // small delay prevents flicker
                        });

                        list.addEventListener("mouseenter", () => {
                            isInside = true;
                            list.style.display = "block";
                        });

                        list.addEventListener("mouseleave", () => {
                            isInside = false;
                            setTimeout(() => {
                                if (!isInside) list.style.display = "none";
                            }, 150);
                        });
                
                </script>
                </li>

                
                <a href="#gallery" class="top" style="color: gray ; font-weight: bolder;">GALLERY</a></li>
                <li><a href="#team" class="top" style="color: gray ; margin-left: -5px; font-weight: bolder;">TEAM</a></li>
               
               <li> <a href="publication.html" class="top" style="color: gray ; margin-left: -5px; font-weight: bolder;">PUBLICATION</a></li>

            </ul>
        </nav>

        <!-- CONTACT BUTTON -->
        <a href="#contact" class="contact_button">Contact Us</a>
    </header>

    <div class="video">
        <!-- Video element -->
        <video autoplay muted loop>
            <source src="hand.mp4" type="video/mp4">
        </video>

        <!-- Moving text -->
        <div class="moving-text">Innovation for a Sustainable Future</div>
        <div class="moving-text">Green Technologies for Tomorrow</div>
        <div class="moving-text">Sustainability and Growth</div>
        <div class="moving-text">Influences credit regulations</div>
    </div>
</div>











<!--  for updating the news --> 



<section class="cpcic-news">

  <!-- HEADER -->
  <div class="news-header">
    <h2>CPCIC News & Updates</h2>
    <p>Official announcements, reports, events, and video highlights</p>
  </div>

  <!-- NEWS GRID -->
  <div class="news-grid">

    <!-- FEATURED NEWS -->
    <article class="news-featured">
      <h3>CPCIC Releases 2025 Construction Performance Report</h3>
      <span class="news-meta">September 2025 • Official Report</span>
      <p>
        CPCIC publishes its annual performance report highlighting growth trends,
        private sector contributions, infrastructure investment, and policy reforms
        shaping Rwanda’s construction industry.
      </p>
      <a href="#">Read Full Report →</a>
    </article>

    <!-- SIDE NEWS -->
    <div class="news-list">

      <article>
        <h4>New Construction Safety Guidelines Announced</h4>
        <p>Improved health and safety standards introduced for all registered contractors.</p>
        <span>Policy Update</span>
      </article>

      <article>
        <h4>CPCIC Signs Partnership with Local Manufacturers</h4>
        <p>Promoting Made-in-Rwanda construction materials nationwide.</p>
        <span>Industry News</span>
      </article>

      <article>
        <h4>Annual General Meeting Scheduled</h4>
        <p>Members to discuss investments, policy reforms, and sector growth.</p>
        <span>Events</span>
      </article>

    </div>
  </div>

  <!-- VIDEO SECTION -->
  <div class="video-section">
    <h3>CPCIC Video Highlights</h3>

    <div class="video-grid">

      <!-- MAIN VIDEO (YouTube embed) -->
      <div class="video-main">
        <iframe
          src="n.mp4"
          title="CPCIC Overview"
          allowfullscreen>
        </iframe>

        <h4>Rwanda Construction Sector Overview</h4>
        <p>Insights from CPCIC on national infrastructure development.</p>
      </div>

      <!-- SMALL VIDEOS -->
      <div class="video-list">

        <div class="video-item">
          <iframe
            src="e.mp4"
            title="Site Visit">
          </iframe>
          <p>Project site inspection highlights</p>
        </div>

        <div class="video-item">
          <iframe
            src="w.mp4"
            title="AGM Highlights">
          </iframe>
          <p>Annual General Meeting highlights</p>
        </div>

      </div>
    </div>
  </div>

</section>

















<div class="partners-wrapper">

    <!-- Government Institutions -->
    <div class="partners-group">
        <h2>Government of Rwanda Institutions</h2>

        <div class="pill-container">

            <div class="pill">
                <img src="min.PNG" alt="">
                
                <span><a class="t" style="text-decoration: none; color: darkgreen;" href="https://www.environment.gov.rw/">MoE</a></span>
            </div>

            <div class="pill">
                <img src="rfa.PNG" alt="">
                <span><a class="t" style="text-decoration: none; color: darkgreen; "href="https://www.rfa.rw/">RFA</a></span>
            </div>

            <div class="pill">
                <img src="ur.PNG" alt="">
                <span><a class="t" style="text-decoration: none; color: darkgreen; "href="https://ur.ac.rw/">UR</a></span>
            </div>

            <div class="pill">
                <img src="hec.PNG" alt="">
                <span><a class="t" style="text-decoration: none; color: darkgreen; "href="https://www.hec.gov.rw/home"> HEC</a></span>
            </div>

            <div class="pill">
                <img src="rura.PNG" alt="">
                <span><a class="t" style="text-decoration: none; color: darkgreen;"href="https://licensing.rura.rw/agent/login" >RURA</a></span>
            </div>

            <div class="pill">
                <img src="risa.PNG" alt="">
                <span><a style="text-decoration: none; color: darkgreen;"href="https://www.risa.gov.rw/" >RISA</a></span>
            </div>

            <div class="pill">
                <img src="min.PNG" alt="">
                <span><a style="text-decoration: none; color: darkgreen;"href="https://www.minagri.gov.rw/" >MINAGRI</a></span>
            </div>

        </div>
    </div>

    <!-- International & NGO Partners -->
    <div class="partners-group">
        <h2>International, NGO & Private Partners</h2>

        <div class="pill-container">



            <div class="pill">
                <img src="mining.jpg" alt="">
                <span>World Vision</span>
            </div>

            <div class="pill">
                <img src="mining.jpg" alt="">
                <span>CARE International</span>
            </div>

            <div class="pill">
                <img src="mining.jpg" alt="">
                <span>IFAD</span>
            </div>

            <div class="pill">
                <img src="usaid.PNG" alt="">
                <span>USAID</span>
            </div>

            <div class="pill">
                <img src="mining.jpg" alt="">
            <span><a style="text-decoration: none; color: darkgreen;"href="https://oneacrefund.org/" >One Arc Fund </a></span>
            
            </div>

            <div class="pill">
                <img src="mining.jpg" alt="">
                <span><a style="text-decoration: none; color: darkgreen;"href="https://www.rwandabiosolution.org/" ></a>BioSolutions Ltd</a></span>
            </div>

        </div>
    </div>

</div>


<!-- Statistics Section -->
<div class="stats-container">
    <div class="stat-box">
        <i class="fas fa-project-diagram"></i>
        <span class="number">120</span>
        <p>Projects</p>
    </div>
    <div class="stat-box">
        <i class="fas fa-industry"></i> 
        <span class="number">15</span>





        
        <p>Industries</p>
    </div>
    <div class="stat-box">
        <i class="fas fa-bullseye"></i>
        <span class="number">2050</span>
        <p>Goal : Net Zero Emissions</p>
    </div>
</div>



<!--gallery -->



<!-- Example Gallery Section -->
 <h2 style="text-align:center; margin-top:70px;" id="gallery">CPCIC Gallery</h2>
   

<!-- Gallery Section 1: Climate Map -->
<div class="gallery-section">
    <div class="gallery-item">
        <img src="tour1 (1).jpeg" alt="Climate Map Left">
        <div class="overlay">Climate Map Left</div>
    </div>
    <div class="gallery-item">
        <img src="ind3.jpeg" alt="Climate Map Center">
        <div class="overlay">Climate Map Center</div>
    </div>
    <div class="gallery-item">
        <img src="mine (4).jpeg" alt="Climate Map Right">
        <div class="overlay">Climate Map Right</div>
    </div>
</div>

<!-- Gallery Section 2: Carbon Footprint -->
<div class="gallery-section">
    <div class="gallery-item">
        <img src="agri3.jpeg" alt="Carbon Footprint Left">
        <div class="overlay">Carbon Footprint Left</div>
    </div>
    <div class="gallery-item">
        <img src="tour1 (6).jpeg" alt="Carbon Footprint Center">
        <div class="overlay">Carbon Footprint Center</div>
    </div>
    <div class="gallery-item">
        <img src="tour1 (7).jpeg" alt="Carbon Footprint Right">
        <div class="overlay">Carbon Footprint Right</div>
    </div>
</div>

<!-- Gallery Section 3: Renewable Energy -->
<div class="gallery-section">
    <div class="gallery-item">
        <img src="tour1 (3).jpeg" alt="Renewable Energy Left">
        <div class="overlay">Renewable Energy Left</div>
    </div>
    <div class="gallery-item">
        <img src="agri4.PNG" alt="Renewable Energy Center">
        <div class="overlay">Renewable Energy Center</div>
    </div>
    <div class="gallery-item">
        <img src="ind5.jpeg" alt="Renewable Energy Right">
        <div class="overlay">Renewable Energy Right</div>
    </div>
</div>

<!-- Gallery Section 4: Community Projects -->
<div class="gallery-section">
    <div class="gallery-item">
        <img src="agri6.jpeg" alt="Community Projects Left">
        <div class="overlay">Community Projects Left</div>
    </div>
    <div class="gallery-item">
        <img src="ind1.jpeg" alt="Community Projects Center">
        <div class="overlay">Community Projects Center</div>
    </div>
    <div class="gallery-item">
        <img src="mine (4).jpeg" alt="Community Projects Right">
        <div class="overlay">Community Projects Right</div>
    </div>
</div> 
<!--team -->
<h2 id="team" style="text-align:center; margin-top:120px;">Meet Our Team</h2>

<div class="team-section">

    <!-- Top Three Members -->
    <div class="team-row top-team">
        <div class="team-member">
            <img src="ceo (1).jpeg" alt="Member 1">
            <h3>Jane Doe</h3>
            <p>CEO</p>
            <p>Leading strategy & sustainability initiatives</p>
        </div>
        <div class="team-member">
            <img src="ceo (2).jpeg" alt="Member 2">
            <h3>John Smith</h3>
            <p>CTO</p>
            <p>Innovating cleaner technologies</p>
        </div>
        <div class="team-member">
            <img src="ceo (3).jpeg" alt="Member 3">
            <h3>Mary Johnson</h3>
            <p>CFO</p>
            <p>Managing finances & green investments</p>
        </div>
    </div>

    <!-- Lower Two Members -->
    <div class="team-row lower-team">
        <div class="team-member">
            <img src="ceo (4).jpeg" alt="Member 4">
            <h3>David Lee</h3>
            <p>Head of Research</p>
            <p>Driving sustainability research projects</p>
        </div>
        <div class="team-member">
            <img src="ceo (5).jpeg" alt="Member 5">
            <h3>Linda Brown</h3>
            <p>Project Manager</p>
            <p>Overseeing climate innovation initiatives</p>
        </div>
    </div>

</div>



<p id="contact" style="font-size: 22px; color: #333; text-align: center; font-family: Arial, sans-serif; 
          margin-top: 150px; letter-spacing: 1px;">
    Contact Us
</p>
<div style="
    display:flex;
    justify-content:space-between;
    max-width:1100px;
    margin:50px auto;
    gap:20px;
    padding:20px;
    background:#f9f9f9;
    border-radius:10px;
">
    <!-- Left Column -->
    <div style="display:flex; flex-direction:column; gap:20px; flex:1;">
        
        <div style="
            background:#fff;
            padding:30px;
            text-align:center;
            border-radius:12px;
            box-shadow:0 6px 15px rgba(0,0,0,0.1);
            font-family:Arial, sans-serif;
            font-size:18px;
            color:#333;
            transition:transform 0.3s ease, box-shadow 0.3s ease;
        ">
            <h3 style="margin-bottom:15px; color:#00796b;">Head Office</h3>
            <p style="margin:5px 0;">123 Green Street, Kigali, Rwanda</p>
        </div>

        <div style="
            background:#fff;
            padding:30px;
            text-align:center;
            border-radius:12px;
            box-shadow:0 6px 15px rgba(0,0,0,0.1);
            font-family:Arial, sans-serif;
            font-size:18px;
            color:#333;
            transition:transform 0.3s ease, box-shadow 0.3s ease;
        ">
            <h3 style="margin-bottom:15px; color:#00796b;">Phone</h3>
            <p style="margin:5px 0;">+250 788 123 456</p>
            <p style="margin:5px 0;">+250 789 654 321</p>
        </div>
    </div>

    <!-- Right Column -->
    <div style="display:flex; flex-direction:column; gap:20px; flex:1.5;">
        
        <div style="
            background:#fff;
            padding:30px;
            text-align:center;
            border-radius:12px;
            box-shadow:0 6px 15px rgba(0,0,0,0.1);
            font-family:Arial, sans-serif;
            font-size:18px;
            color:#333;
            transition:transform 0.3s ease, box-shadow 0.3s ease;
        ">
            <h3 style="margin-bottom:15px; color:#00796b;">Contact Us</h3>

            <form style="display:flex; flex-direction:column; gap:15px;" class="contact-form">
                
                <input type="text" name="name" placeholder="Your Name" required
                style="padding:12px; border:1px solid #ccc; border-radius:8px; font-size:16px; width:100%; box-sizing:border-box; transition:border-color 0.3s ease, box-shadow 0.3s ease;">
                
                <input type="email" name="email" placeholder="Your Email" required
                style="padding:12px; border:1px solid #ccc; border-radius:8px; font-size:16px; width:100%; box-sizing:border-box; transition:border-color 0.3s ease, box-shadow 0.3s ease;">
                
                <input type="tel" name="phone" placeholder="Your Phone" required
                style="padding:12px; border:1px solid #ccc; border-radius:8px; font-size:16px; width:100%; box-sizing:border-box; transition:border-color 0.3s ease, box-shadow 0.3s ease;">
                
                <textarea name="message" placeholder="Your Message" rows="4" required
                style="padding:12px; border:1px solid #ccc; border-radius:8px; font-size:16px; width:100%; box-sizing:border-box; transition:border-color 0.3s ease, box-shadow 0.3s ease;"></textarea>
                
                <button type="submit"
                style="padding:12px; border:none; border-radius:8px; background:#00796b; color:#fff; font-size:16px; cursor:pointer; transition:background 0.3s ease;">
                    Send Message
                </button>
            </form>
        </div>

        <div style="
            background:#fff;
            padding:30px;
            text-align:center;
            border-radius:12px;
            box-shadow:0 6px 15px rgba(0,0,0,0.1);
            font-family:Arial, sans-serif;
            font-size:18px;
            color:#333;
            transition:transform 0.3s ease, box-shadow 0.3s ease;
        ">
            <h3 style="margin-bottom:15px; color:#00796b;">Office Hours</h3>
            <p style="margin:5px 0;">Monday - Friday: 8:00 AM - 5:00 PM</p>
            <p style="margin:5px 0;">Saturday: 9:00 AM - 1:00 PM</p>
        </div>

    </div>
</div>


    
    
<!-- About Us Section -->
<div class="about" style="display: flex; align-items: center; justify-content: space-between; padding: 20px; max-width: 1100px; margin: 0 auto; font-family: Arial, sans-serif;">
    
    <!-- Left Side (Text Section) -->
    <div style="flex: 1; padding-right: 20px;">
        <h2 id="about" style="font-size: 28px; color: #082400; text-align: left; margin-top: 30px;">About CPCIC</h2>

        <h3  style="font-size: 22px; color: #023500;">Our Mission & Goals</h3>
        <p style="font-size: 18px; color: #555;">
            At <strong>CPCIC</strong>, we aim to drive sustainability by helping industries implement <strong>cleaner production technologies</strong> that reduce their environmental footprint. Our focus is on developing innovative solutions to tackle climate change and improve resource efficiency across multiple sectors.
        </p>
        <p style="font-size: 18px; color: #555;">
            Our primary goal is to create a <strong>greener global economy</strong> by facilitating the transition to <strong>sustainable technologies</strong>, promoting resource conservation, and mitigating climate change through industry-wide transformations.
        </p>

        <h3 style="font-size: 22px; color: #333;">What We Do</h3>
        <p style="font-size: 18px; color: #555;">
            CPCIC provides <strong>expert consultation</strong> and <strong>training programs</strong> to businesses, helping them adopt <strong>green practices</strong> and improve their <strong>environmental performance</strong>. We conduct <strong>cutting-edge research</strong> to discover new ways of reducing emissions, conserving resources, and enhancing industry sustainability.
        </p>
        <p style="font-size: 18px; color: #555;">
            Our work spans key sectors, including:
        </p>
        <ul style="font-size: 18px; color: #555;">
            <li><strong>Agriculture:</strong> Sustainable farming practices and water conservation.</li>
            <li><strong>Manufacturing:</strong> Energy optimization and waste management.</li>
            <li><strong>Mining:</strong> Cleaner technologies for reducing environmental damage.</li>
            <li><strong>Tourism & Hospitality:</strong> Eco-friendly practices and resource-efficient solutions.</li>
        </ul>

        <h3 style="font-size: 22px; color: #333;">Our Financial Goal</h3>
        <p style="font-size: 18px; color: #555;">
            Our target is to generate <strong>$5 million</strong> over the next 5 years to fund the development of new technologies that help industries transition to more sustainable practices. These funds will also help CPCIC scale its global impact through new partnerships and expanded research initiatives.
        </p>

        <p style="font-size: 18px; color: #555;">
            By investing in <strong>green innovations</strong>, we aim to reinvest these earnings into further <strong>research</strong>, <strong>technology development</strong>, and initiatives to reduce global carbon emissions.
        </p>
    </div>

    <!-- Right Side (Graph/Image Section) -->
    <div style="flex: 1;">
        <img src="graph.jpeg" alt="Projected Impact of CPCIC Initiatives on Sustainability" style="max-width: 100%; height: auto;">

        <p style="font-size: 16px; color: #555; text-align: center;">Graph: Projected Impact of CPCIC Initiatives on Sustainability</p>
    </div>

</div>









<button id="implantButton">Implant Assessment</button>

<!-- Modal popup -->
<div id="passwordModal" style="display:none;">
    <div style="position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,0.5);display:flex;justify-content:center;align-items:center;z-index:2000;">
        <div style="background:#fff;padding:20px;border-radius:8px;max-width:300px;width:100%;text-align:center;position:relative;">
            <h3>Enter 4-digit Code</h3>
            <div style="display:flex;justify-content:space-between;margin:10px 0; position: relative;">
                <input type="password" maxlength="1" class="digitInput" style="width:20%;padding:10px;font-size:18px;text-align:center;">
                <input type="password" maxlength="1" class="digitInput" style="width:20%;padding:10px;font-size:18px;text-align:center;">
                <input type="password" maxlength="1" class="digitInput" style="width:20%;padding:10px;font-size:18px;text-align:center;">
                <input type="password" maxlength="1" class="digitInput" style="width:20%;padding:10px;font-size:18px;text-align:center;">
                <!-- Eye icon for toggle -->
                <span id="toggleEye" style="position:absolute;right:-10px;top:5px;cursor:pointer;font-size:18px;">👁️</span>
            </div>
            <button id="submitCode" style="width:100%;padding:10px;background:#2e7d32;color:#fff;border:none;border-radius:6px;cursor:pointer;">Submit</button>
            <button id="closeModal" style="margin-top:10px;width:100%;padding:10px;background:#ccc;color:#000;border:none;border-radius:6px;cursor:pointer;">Cancel</button>
            <p id="errorMsg" style="color:red;display:none;margin-top:10px;"></p>
        </div>
    </div>
</div>

<style>
#implantButton {
    position: fixed;
    bottom: 20px;
    right: 20px;
    z-index: 1000;
    padding: 12px 18px;
    background-color: #2e7d32;
    color: #fff;
    border: none;
    border-radius: 6px;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    box-shadow: 0 2px 6px rgba(0,0,0,0.3);
    transition: background 0.3s;
}
#implantButton:hover { background-color: #1b5e20; }
.digitInput { border:1px solid #ccc; border-radius:4px; }
</style>

<script>
const correctCode = "4321"; // Change to your 4-digit code

// Show modal
document.getElementById("implantButton").addEventListener("click", function() {
    document.getElementById("passwordModal").style.display = "flex";
    document.querySelectorAll('.digitInput')[0].focus();
});

// Close modal
document.getElementById("closeModal").addEventListener("click", function() {
    document.getElementById("passwordModal").style.display = "none";
    document.getElementById("errorMsg").style.display = "none";
    document.querySelectorAll('.digitInput').forEach(input => input.value = '');
});

// Auto move to next input on keypress
document.querySelectorAll('.digitInput').forEach((input, idx, arr) => {
    input.addEventListener('input', function() {
        if (this.value.length === 1 && idx < arr.length-1) arr[idx+1].focus();
    });
    input.addEventListener('keydown', function(e) {
        if(e.key === "Backspace" && this.value === "" && idx > 0) arr[idx-1].focus();
    });
});

// Submit code
document.getElementById("submitCode").addEventListener("click", function() {
    let enteredCode = Array.from(document.querySelectorAll('.digitInput')).map(i => i.value).join('');
    if(enteredCode === correctCode){
        window.location.href = "implant.php";
    } else {
        const err = document.getElementById("errorMsg");
        err.innerText = "You are not an agent of Implant Assessment!";
        err.style.display = "block";
    }
});

// Toggle visibility
document.getElementById("toggleEye").addEventListener("click", function(){
    const inputs = document.querySelectorAll('.digitInput');
    inputs.forEach(input => {
        if(input.type === "password") input.type = "text";
        else input.type = "password";
    });
});
</script>

<!-- Container for map and legend -->
<div style="display:flex; gap:20px; max-width:900px; margin:20px auto; align-items:flex-start;">

    <!-- Left legend/info div -->
    <div style="flex: 1; background:#f9f9f9; padding:20px; border-radius:10px; box-shadow:0 4px 8px rgba(0,0,0,0.1); font-family:Arial, sans-serif;">
        <h3>Legend / Remarks</h3>
        <p><span style="color:red; font-weight:bold;">●</span> Areas for improvement (Red)</p>
        <p><span style="color:orange; font-weight:bold;">●</span> Medium improvements needed (Yellow)</p>
        <p><span style="color:green; font-weight:bold;">●</span> Perfect condition (Green)</p>
        <p>These colors correspond to the regional sustainability status based on collected data.</p>
    </div>

    <!-- Right map div (smaller) -->
    <div id="map" style="flex: 1.2; height:300px; border-radius:10px; overflow:hidden;"></div>

</div>

<!-- Leaflet JS -->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script>
var map = L.map('map').setView([-1.9403, 29.8739], 8);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '© OpenStreetMap contributors'
}).addTo(map);

/* Markers data from PHP */
var markers = <?= json_encode($markers); ?>;

markers.forEach(function(m) {
    var color = 'green';
    if (m.remarks < 50) color = 'red';
    else if (m.remarks < 75) color = 'yellow';

    L.circleMarker([m.latitude, m.longitude], {
        radius: 6,
        color: color,
        fillColor: color,
        fillOpacity: 0.8
    }).addTo(map);
});
</script>
<!-- Footer -->
<footer style="
    background: linear-gradient(135deg, #004d40, #26a69a);
    color: #fff;
    padding: 50px 20px;
    font-family: 'Arial', sans-serif;
    text-align: center;
">

    <div style="max-width: 1100px; margin: auto; display: flex; flex-wrap: wrap; gap: 30px; justify-content: space-between; align-items: flex-start;">

        <!-- Left: Company Info -->
        <div style="flex:1; min-width: 250px;">
            <h3 style="margin-bottom:10px; font-size: 20px; letter-spacing:1px;">CPCIC - Kigali, Rwanda</h3>
            <p style="margin:5px 0;">123 Green Street, Kigali, Rwanda</p>
            <p style="margin:5px 0;">Email: <a href="mailto:info@cpcic.rw" style="color:#fff;text-decoration:underline;">info@cpcic.rw</a></p>
            <p style="margin:5px 0;">Phone: +250 788 123 456</p>

            <!-- Social Media -->
            <div style="margin-top:15px;">
                <!-- Replace the href values with your social media page URLs -->
                <a href="https://facebook.com/YourPage" target="_blank" style="color:#fff; font-size:20px; margin-right:15px; transition: color 0.3s;">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://www.instagram.com/cpcic.rw/" target="_blank" style="color:#fff; font-size:20px; margin-right:15px; transition: color 0.3s;">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://x.com/RwandaCPCIC/with_replies" target="_blank" style="color:#fff; font-size:20px; margin-right:15px; transition: color 0.3s;">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="https://www.linkedin.com/posts/rwanda-cpcic-cleaner-production-and-climate-innovation-center-84b7a531b_circulareconomy-rwanda-innovation-activity-7379475608780673024-dXaG" target="_blank" style="color:#fff; font-size:20px; transition: color 0.3s;">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>

            <p style="margin-top:20px; font-size:14px;">&copy; 2025 CPCIC. All rights reserved.</p>
        </div>

        <!-- Right: Mini Map -->
        <div style="flex:1; min-width: 250px; height:200px; border-radius:12px; overflow:hidden; box-shadow:0 6px 15px rgba(0,0,0,0.3);">
            <div id="footerMap" style="width:100%; height:100%; border-radius:12px;"></div>
        </div>
    </div>
</footer>

<!-- Font Awesome for Social Media Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" crossorigin="anonymous" />

<!-- Leaflet JS -->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script>
var footerMap = L.map('footerMap', {
    zoomControl: false,
    dragging: false,
    scrollWheelZoom: false,
    doubleClickZoom: false,
     boxZoom: false,
    keyboard: false,
    tap: false
}).setView([-1.9403, 29.8739], 12); // Kigali

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '© OpenStreetMap contributors'
}).addTo(footerMap);

L.marker([-1.9403, 29.8739])
    .addTo(footerMap)
    .bindPopup("<b>CPCIC Head Office</b><br>Kigali, Rwanda")
    .openPopup();
</script>

<style>
/* Social media hover effect */
footer a:hover {
    color: #ffd700; /* golden color on hover */
}
</style>

</body>
</html>

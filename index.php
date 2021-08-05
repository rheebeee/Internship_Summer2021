<!DOCTYPE html>
<html>
<head>
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">


<style>


body {
    color: #097969; 
    font-family: 'Poppins';
    font-size: 85%;
    padding-left: 20px;
}
a {
    color: #097969;
}
h1 {
   color: black;
   font-weight: bold;
   font-size: 250%;
}
h2 {
   color: #A9A9A9;
   font-size: 100%;
   font-weight: normal;
   padding-bottom: 35px;
}
h5 {
   color: #A9A9A9;
   font-size: 130%;
   font-weight: normal;
   padding-bottom: 35px;
}
h3 {
    color: black;
    font-weight: bold;
    font-size: 150%;
}
h4 {
    color: white;
    font-weight: bold;
    font-size: 300%;
}
h5 {
    color: white;
    font-weight: bold;
    font-size: 95%;
    margin-bottom: -40px;
    margin-top:-10px;
}

#textboxid{
    height: 150px;
    width: 500px;
}
input[type=submit]{
  background-color: #097969;
  border: none;
  color: white;
  border:1px solid transparent;
  padding:8px 20px;
  text-align:center;
  vertical-align:middle;
  font-size:12px;
  font-weight: bold;
  border-radius:20px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}
.square {
  height: 1500px;
  width: 600px;
  background-color: #DCDCDC;
  padding-left: 20px;
  padding-top: -200px;
  position: relative;
  top:-150px;
  left:110px;
}

.form-control{
    border: 0;
    border-bottom: 1px solid #097969;
    outline: 0;
    background: transparent;
    color: black;
    font-family: 'Poppins';
}
.label {
    color: red !important; 
    display: inline; 
    float: none;
}
/* Style the header */
.header {
  padding: 6px 16px;
  position:relative;
  left:0px;
  color: #f1f1f1;
  z-index:999;
}

/* Page content */
.content {
  padding: 16px;
}

/* The sticky class is added to the header with JS when it reaches its scroll position */
.sticky {
  position: fixed;
  top: 0;
  width: 100%
}
.styleHeaderNew {
    background-color: white;
}

/* Add some top padding to the page content to prevent sudden quick movement (as the header gets a new position at the top of the page (position:fixed and top:0) */
.sticky + .content {
  padding-top: 102px;
}
.textInput {
    
    outline:none;
    border-width: 0 0 1px;
    border-color: #097969; 
    padding-bottom: 5px;
    width: 250px;
    color: black;
    font-family: 'Poppins';

}
.labels {
    display:inline-block;
    padding-top: 35px;
}
.headerLabels{
    color: #A9A9A9;
    padding:20px 60px;
}
.headerScrollLabels{
    color: white;
}
.headerLabels2{
    color: #A9A9A9;
    padding:20px 60px;
}
.dropLabels{
    color: #097969;
    padding:20px 60px
    align: left;
}
.bg{
    width:105%;
    z-index:0;
    position: relative;
    left:-50px;
    background: black;
    overflow: hidden;
    opacity:0.4;

}
.overlay{
    width:105%;
    z-index:0;
    position: relative;
    left:-50px;
    background: black;
    overflow: hidden;
}
.bigImage{
    position:  relative;
    top: -74px;
}
hr{
    display: inline-block;

}
option {
    color: black;
    font-family: 'Poppins';
}
.blackHeader {
    position:  relative;
    left:-100px;
    top:  -10px;
    height: 30px;
    width:  1400px;
    padding: 6px 16px;
    background: #303030;
    color: #f1f1f1;
}
.blackLabels {
    color: white;
    position: relative;
    left: 870px;
    top: 10px;
    padding:0px 20px;
    
}
.side{
    color:transparent;
    position: relative;
    left:800px;
    top:-1300px;
    width:400px;
}
.title {
    color:transparent;
    position: relative;
    left:0px;
    top:-350px;
}
.innerSquare {
    position: relative;
    left:0px;
    top:-220px;
    padding-top:100px;
}
  
}
.item {
    break-inside: avoid-column;   
}
.item:nth-of-type(1){
    break-after:column;
    display:block;
}
footer{
    background: #303030;
    position: relative;
    left: -28px;
    width: 1350px;
    column-count: 4;
    padding-top: 40px;
    padding-left:10px;
    padding-bottom: 40px;
}
.styles{
    filter: brightness(0) invert(1);
}
.styles:hover {opacity: 0.5}

.footerExtra{
    height: 200px;
    position: relative;
    left: -28px;
    width: 1340px;
    background-color: #303030;
    padding-left: 20px;
    margin-right:20px;
    padding-top: -200px;
    position: relative;
    
}
input[type="text"]{
        border: 0;
        border-bottom: 1px solid #097969;
        outline: 0;
        background: transparent;
}

.nav {

    color: white;
    text-decoration: none;
}
.nav2 {

    color: #A9A9A9;
    text-decoration: none;

}
.logo {

}

a:hover {color: #097969;}

/* Dropdown Button */
.dropbtn {
  background-color: transparent;
  padding: 16px;
  font-size: 16px;
  border: none;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: relative; /* WAS ORIGINALLY ABSOLUTE*/
  background-color: white;
  min-width: 1340px;
  min-height: 500px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
    color: #A9A9A9;
    font-size: 100%;
    font-weight: normal;
    padding: 12px 16px;
    padding-top: 30px;
    text-decoration: none;
    display: block;
}


/* Change color of dropdown links on hover */
.dropdown-content a:hover {color: #097969; }

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block; padding-top:15px;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: white;}

.dropbtn:hover .headerLabels2{color: #097969; font-weight: bold} 

.column {
  float: left;
  width: 25%;
}
.column5 {
  float: left;
  width: 20%;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* SEARCH BAR CODE */

.dropbtnsearch {
  background-color: transparent;
  font-size: 16px;
  border: none;
}

/* The container <div> - needed to position the dropdown search */
.dropdownsearch {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-contentsearch {
  display: none;
  position: relative;
  top: 80px;
  left: -150px;
  background-color: white;
  min-width: 1000px;
  min-height: 100px;
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-contentsearch input[type="text"] {
    color: #A9A9A9;
    font-size: 100%;
    font-weight: normal;
    padding: 12px 16px;
    padding-top: 30px;
    padding-left: 20px;
    text-decoration: none;
    display: block;

}


/* Change color of dropdown links on hover */
.dropdown-contentsearch input[type="text"]:hover {color: #097969; }

/* Show the dropdown menu on hover */
.dropdownsearch:hover .dropdown-contentsearch {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdownseach:hover .dropbtnsearch {background-color: white;}


.searchBar {
    width:  20px;
    height:  20px;
    position:  relative;
    top: 6px;
    left: 990px;
}
.arrow {
    color: white;
}
.delete{
    color: transparent;
    background:  transparent;
}
.arrowRight {
    transform: rotate(270deg);
}


</style>
</head>

<body>

<div class="blackHeader" id="contacts">
    <label for="Contact Us" class= blackLabels ><a class="nav" href="https://www.bakerhughes.com/contact-us">Contact Us</a></label>
    <label for="Careers 🡥" class= blackLabels><a class="nav" href="https://careers.bakerhughes.com/global/en">Careers 🡥</a></label>
    <label for="Investors 🡥" class= blackLabels><a class="nav" href="https://investors.bakerhughes.com/">Investors 🡥</a></label>
    <label for="BKR $23.09" class= blackLabels><a class="nav" href="https://investors.bakerhughes.com/stock-information/stock-quote-chart">BKR $23.09</a></label>
</div>


</div>

<div class="header" id="myHeader">
    <a class= "delete" href= "https://www.bakerhughes.com/">
        <img class="logo" id= "whiteLogo" src="logo-alt.png" alt="BH Logo" width= "200" height= "30">
    </a>


    <div class= "dropdownsearch">
        <button class="dropbtnsearch" id="s" >
            <img class= "searchBar" src="search.png" alt="Magnifying Glass Icon"> 
                <div class="dropdown-contentsearch">
                    <input type="text" class= textInput name="search" placeholder= "Search"><br>
                </div>

        </button>
    </div>


  <div class="dropdown" id="drops">
    <button class="dropbtn" id="fc" >
       <label for="Featured Capabilities" class= headerLabels2 id="myButtons">Featured Capabilities
        <img class= "arrow" id= "arrow" src="arrow.svg">
       </label>  
        <div class="dropdown-content">
            <div class="row">
                <div class="column5">
                    <img src="energy transition.png" alt="energy" width= "45" height= "45">
                    <a href="https://www.bakerhughes.com/energy-transition">Energy Transition</a>

                    <img src="remote ops.png" alt="energy" width= "45" height= "45">
                    <a href="https://www.bakerhughes.com/remote-operations">Remote Operations</a>

                    <img src="view.png" alt="energy" width= "45" height= "45">
                    <a href="https://www.bakerhughes.com/featured-capabilities">View All </a>
                </div>

                <div class="column5">
                    <img src="hydrogen.png" alt="energy" width= "45" height= "45">
                    <a href="https://www.bakerhughes.com/hydrogen-technologies">Hydrogen Technologies</a>
                    
                    <img src="ai.png" alt="energy" width= "45" height= "45">
                    <a href="https://www.bakerhughes.com/ai-bakerhughesc3ai">AI by BakerHughesC3.ai</a> 
                </div>

                <div class="column5">
                    <img src="geothermal.png" alt="energy" width= "45" height= "45">
                    <a href="https://www.bakerhughes.com/geothermal-solutions">Geothermal Solutions</a>

                    <img src="gas.png" alt="energy" width= "45" height= "45">
                    <a href="https://www.bakerhughes.com/lng-solutions">Liquefied Natural Gas</a>
                </div>

                <div class="column5">
                    <img src="carbon.png" alt="energy" width= "45" height= "45">
                    <a href="https://www.bakerhughes.com/carbon-capture-use-and-storage-ccus">Carbon Capture and Storage</a>

                    <img src="industrial.png" alt="energy" width= "45" height= "45">
                    <a href="https://www.bakerhughes.com/industrial-technology">Industrial Technology</a>
                </div>

                <div class="column5">
                    <img src="emissions.png" alt="energy" width= "45" height= "45">
                    <a href="https://www.bakerhughes.com/emissions-management">Emissions Management</a>

                    <img src="subsea.png" alt="energy" width= "45" height= "45">
                    <a href="https://www.bakerhughes.com/subsea-connect">Subsea Connect</a>
                </div>

            </div>
        </div>

    </button>
  </div>

  <div class="dropdown">
    <button class="dropbtn" id="ps" > 
         <label for="Products & Services" class= headerLabels2 id="myButtons">Products & Services
            <img class= "arrow" id= "arrow" src="arrow.svg">
         </label>
        <div class="dropdown-content">
            <div class="row">
                <div class="column">
                    <label for= "Subheader" class= dropLabels>Oilfield</label>
                    <a href="https://www.bakerhughes.com/contact-us">Evaluation
                    <img class= "arrowRight" id= "arrow" src="arrow.svg">
                    </a>
                    <a href="https://www.bakerhughes.com/contact-us">Pre-Commissioning & Maintenance
                    <img class= "arrowRight" id= "arrow" src="arrow.svg">
                    </a>
                    <a href="https://www.bakerhughes.com/contact-us">Drilling
                    <img class= "arrowRight" id= "arrow" src="arrow.svg">
                    </a>
                    <a href="https://www.bakerhughes.com/contact-us">Completions
                    <img class= "arrowRight" id= "arrow" src="arrow.svg">
                    </a>
                    <a href="https://www.bakerhughes.com/contact-us">Production
                    <img class= "arrowRight" id= "arrow" src="arrow.svg">
                    </a>
                    <a href="https://www.bakerhughes.com/contact-us">Integrated Well Services
                    <img class= "arrowRight" id= "arrow" src="arrow.svg">
                    </a>
                    <a href="https://www.bakerhughes.com/contact-us">Processing
                    <img class= "arrowRight" id= "arrow" src="arrow.svg">
                    </a>
                    <a href="https://www.bakerhughes.com/contact-us">Subsea
                    <img class= "arrowRight" id= "arrow" src="arrow.svg">
                    </a>
                    <a href="https://www.bakerhughes.com/contact-us">Pipeline Inspection</a>
                    <a href="https://www.bakerhughes.com/contact-us">Intervention
                    <img class= "arrowRight" id= "arrow" src="arrow.svg">
                    </a>
                    <a href="https://www.bakerhughes.com/contact-us">Decommissioning
                    <img class= "arrowRight" id= "arrow" src="arrow.svg">
                    </a>
                    <a href="https://www.bakerhughes.com/contact-us">Digital
                    <img class= "arrowRight" id= "arrow" src="arrow.svg">
                    </a>
                </div>
                
                <div class="column">
                    <label for= "Subheader" class= dropLabels>Turbomachinery & Process Solutions</label>
                    <a href="https://www.bakerhughes.com/company/corporate-responsibility">Gas Turbines
                    <img class= "arrowRight" id= "arrow" src="arrow.svg">
                    </a>
                    <a href="https://www.bakerhughes.com/company/corporate-responsibility/people">Steam Turbines
                    <img class= "arrowRight" id= "arrow" src="arrow.svg">
                    </a>
                    <a href="https://www.bakerhughes.com/company/corporate-responsibility/planet">Centrifugal & Axial Compressors
                    <img class= "arrowRight" id= "arrow" src="arrow.svg">
                    </a>
                    <a href="https://www.bakerhughes.com/company/corporate-responsibility/principles">Reciprocating Compressors
                    <img class= "arrowRight" id= "arrow" src="arrow.svg">
                    </a>
                    <a href="https://www.bakerhughes.com/company/corporate-responsibility/download-center">Gearboxes & Gear Couplings
                    <img class= "arrowRight" id= "arrow" src="arrow.svg">
                    </a>
                    <a href="https://www.bakerhughes.com/company/corporate-responsibility">Expanders & Air Cooled Heat <br> Exchangers
                    <img class= "arrowRight" id= "arrow" src="arrow.svg">
                    </a>
                    <a href="https://www.bakerhughes.com/company/corporate-responsibility/people">Remote & Digital Solutions
                    <img class= "arrowRight" id= "arrow" src="arrow.svg">
                    </a>
                    <a href="https://www.bakerhughes.com/company/corporate-responsibility/planet">Turbomachinery Services
                    <img class= "arrowRight" id= "arrow" src="arrow.svg">
                    </a>
                    <a href="https://www.bakerhughes.com/company/corporate-responsibility/principles">Centrifugal Pumps
                    <img class= "arrowRight" id= "arrow" src="arrow.svg">
                    </a>
                    <a href="https://www.bakerhughes.com/company/corporate-responsibility/download-center">Valves 🡥</a>
                    <a href="https://www.bakerhughes.com/company/corporate-responsibility/download-center">Talent Development
                    <img class= "arrowRight" id= "arrow" src="arrow.svg">
                    </a>
                </div>
                
                <div class="column">
                    <label for= "Subheader" class= dropLabels>Software & Analytics</label>
                    <a href="https://www.bakerhughes.com/company/newsroom">BakerHughesC3.ai
                    <img class= "arrowRight" id= "arrow" src="arrow.svg">
                    </a>
                    <a href="https://www.bakerhughes.com/company/energy-forward">Oilfield Services Digital
                    <img class= "arrowRight" id= "arrow" src="arrow.svg">
                    </a>
                </div>

                <div class="column">
                    <label for= "Subheader" class= dropLabels>Measurement, Texting & Controls</label>
                    <a href="https://www.bakerhughes.com/industrial-controls-cybersecurity">Industrial Controls and Cybersecurity</a>
                    <a href="https://www.bakerhughes.com/condition-monitoring">Condition Monitoring</a>
                    <a href="https://www.bakerhughes.com/sensors">Sensors</a>
                    <a href="https://www.bakerhughes.com/industrial-asset-inspection">Industrial Asset Inspection</a>
                </div>
        </div>

    </button>
  </div>

  <div class="dropdown">
    <button class="dropbtn" id="ps" >
          <label for="Company" class= headerLabels2 id="myButtons">Company
            <img class= "arrow" id= "arrow" src="arrow.svg">
          </label>
       <div class="dropdown-content">
            <div class="row">
                <div class="column">
                    <label for= "Subheader" class= dropLabels>Baker Hughes</label>
                    <a href="https://www.bakerhughes.com/company/about-us">About Us</a>
                    <a href="https://www.bakerhughes.com/company/innovation-technology">Innovation and Technology</a>
                    <a href="https://www.bakerhughes.com/company/about-us/company-leadership?team_list=46">Company Leadership</a>
                    <a href="https://www.bakerhughes.com/contact-us">Consultancy Services
                    <img class= "arrowRight" id= "arrow" src="arrow.svg">
                    </a>
                    <a href="https://www.bakerhughes.com/upcoming-events">Upcoming Events</a>
                    <a href="https://www.bakerhughes.com/event-proceedings">Event Proceedings</a>
                </div>
                
                <div class="column">
                    <label for= "Subheader" class= dropLabels>Corporate Responsibility</label>
                    <a href="https://www.bakerhughes.com/company/corporate-responsibility">Framework</a>
                    <a href="https://www.bakerhughes.com/company/corporate-responsibility/people">People
                    <img class= "arrowRight" id= "arrow" src="arrow.svg">
                    </a>
                    <a href="https://www.bakerhughes.com/company/corporate-responsibility/planet">Planet
                    <img class= "arrowRight" id= "arrow" src="arrow.svg">
                    </a>
                    <a href="https://www.bakerhughes.com/company/corporate-responsibility/principles">Principles
                    <img class= "arrowRight" id= "arrow" src="arrow.svg">
                    </a>
                    <a href="https://www.bakerhughes.com/company/corporate-responsibility/download-center">Reports & Policies</a>
                </div>
                
                <div class="column">
                    <label for= "Subheader" class= dropLabels>News & Knowledge</label>
                    <a href="https://www.bakerhughes.com/company/newsroom">Newsroom</a>
                    <a href="https://www.bakerhughes.com/company/energy-forward">Energy Forward Stories</a>
                    <a href="https://www.bakerhughes.com/case-study">Case Study Library</a>
                    <a href="https://bakerhughesrigcount.gcs-web.com/rig-count-overview">Rig Count 🡥</a>
                    <a href="https://am2021.bakerhughes.com/">Annual Meeting 2021</a>
                </div>

                <div class="column">
                    <label for= "Subheader" class= dropLabels>Resources</label>
                    <a href="https://www.bakerhughes.com/suppliers">Supplier Resources</a>
                    <a href="https://www.bakerhughes.com/channel-partner-resources">Channel Partner Resources</a>
                    <a href="https://www.bakerhughes.com/customer-resources">Customer Resources</a>
                    <a href="https://www.bakerhughes.com/contact-us">Additional Resources
                    <img class= "arrowRight" id= "arrow" src="arrow.svg">
                    </a>
                </div>
                
            </div>
        </div>
            

    </button>
  </div>

</div>
  
  







</div>

<div class= "bigImage">
    <div class="overlay">
        <img class= "bg" src="background.jpeg">
    </div>
</div>

<div class="square">
    <div class= "title">
        <h4> How can we help you? </h4>
        <h5> Let us know how we can help you with your existing or future projects, and one of our sales or support representatives will contact you shortly.</h5>
    </div>
    <div class= "innerSquare">
        <hr align="left" width="3%" color="#097969">
        <h1> Contact us </h1>
        <h2> Connect with Baker Hughes by completing the form below. </h2>

        <form name="data" action="submit.php" onsubmit= "return validateForm()" method="post">
            <label for="First Name" class= labels >First Name</label><div class="label">*</div><br>
            <input type="text" class= textInput name="firstname" placeholder= "First Name"><br>

            <label for="Last Name" class= labels >Last Name</label><div class="label">*</div><br>
            <input type="text" class= textInput name="lastname" placeholder= "Last Name" ><br>

            <label for="Email"class= labels >Company Email Address</label><div class="label">*</div><br>
            <input type="text" class= textInput name="email" placeholder= "Company Email Address"><br>

            <label for="Company Name"class= labels >Company Name</label><div class="label">*</div><br>
            <input type="text" class= textInput name="company" placeholder= "Company Name" ><br>

            <label for="Phone"class= labels >Primary Phone Number</label><div class="label">*</div><br>
            <input type="text" class= textInput name="phone" placeholder= "Primary Phone Number" ><br>

            <label for="Job Title"class= labels >Job Title</label><div class="label">*</div><br>
            <input type="text" class= textInput name="job" placeholder= "Job Title" ><br>

            <label for="country" class= labels >Country or Territory</label><div class="label">*</div><br>      
                
                    <select id="country" name="country" class="form-control">
                        <option value="Header">Select Country or Territory</option>
                        <option value="Afghanistan">Afghanistan</option>
                        <option value="Åland Islands">Åland Islands</option>
                        <option value="Albania">Albania</option>
                        <option value="Algeria">Algeria</option>
                        <option value="American Samoa">American Samoa</option>
                        <option value="Andorra">Andorra</option>
                        <option value="Angola">Angola</option>
                        <option value="Anguilla">Anguilla</option>
                        <option value="Antarctica">Antarctica</option>
                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                        <option value="Argentina">Argentina</option>
                        <option value="Armenia">Armenia</option>
                        <option value="Aruba">Aruba</option>
                        <option value="Australia">Australia</option>
                        <option value="Austria">Austria</option>
                        <option value="Azerbaijan">Azerbaijan</option>
                        <option value="Bahamas">Bahamas</option>
                        <option value="Bahrain">Bahrain</option>
                        <option value="Bangladesh">Bangladesh</option>
                        <option value="Barbados">Barbados</option>
                        <option value="Belarus">Belarus</option>
                        <option value="Belgium">Belgium</option>
                        <option value="Belize">Belize</option>
                        <option value="Benin">Benin</option>
                        <option value="Bermuda">Bermuda</option>
                        <option value="Bhutan">Bhutan</option>
                        <option value="Bolivia">Bolivia</option>
                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                        <option value="Botswana">Botswana</option>
                        <option value="Bouvet Island">Bouvet Island</option>
                        <option value="Brazil">Brazil</option>
                        <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                        <option value="Brunei Darussalam">Brunei Darussalam</option>
                        <option value="Bulgaria">Bulgaria</option>
                        <option value="Burkina Faso">Burkina Faso</option>
                        <option value="Burundi">Burundi</option>
                        <option value="Cambodia">Cambodia</option>
                        <option value="Cameroon">Cameroon</option>
                        <option value="Canada">Canada</option>
                        <option value="Cape Verde">Cape Verde</option>
                        <option value="Cayman Islands">Cayman Islands</option>
                        <option value="Central African Republic">Central African Republic</option>
                        <option value="Chad">Chad</option>
                        <option value="Chile">Chile</option>
                        <option value="China">China</option>
                        <option value="Christmas Island">Christmas Island</option>
                        <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                        <option value="Colombia">Colombia</option>
                        <option value="Comoros">Comoros</option>
                        <option value="Congo">Congo</option>
                        <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                        <option value="Cook Islands">Cook Islands</option>
                        <option value="Costa Rica">Costa Rica</option>
                        <option value="Cote D'ivoire">Cote D'ivoire</option>
                        <option value="Croatia">Croatia</option>
                        <option value="Cuba">Cuba</option>
                        <option value="Cyprus">Cyprus</option>
                        <option value="Czech Republic">Czech Republic</option>
                        <option value="Denmark">Denmark</option>
                        <option value="Djibouti">Djibouti</option>
                        <option value="Dominica">Dominica</option>
                        <option value="Dominican Republic">Dominican Republic</option>
                        <option value="Ecuador">Ecuador</option>
                        <option value="Egypt">Egypt</option>
                        <option value="El Salvador">El Salvador</option>
                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                        <option value="Eritrea">Eritrea</option>
                        <option value="Estonia">Estonia</option>
                        <option value="Ethiopia">Ethiopia</option>
                        <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                        <option value="Faroe Islands">Faroe Islands</option>
                        <option value="Fiji">Fiji</option>
                        <option value="Finland">Finland</option>
                        <option value="France">France</option>
                        <option value="French Guiana">French Guiana</option>
                        <option value="French Polynesia">French Polynesia</option>
                        <option value="French Southern Territories">French Southern Territories</option>
                        <option value="Gabon">Gabon</option>
                        <option value="Gambia">Gambia</option>
                        <option value="Georgia">Georgia</option>
                        <option value="Germany">Germany</option>
                        <option value="Ghana">Ghana</option>
                        <option value="Gibraltar">Gibraltar</option>
                        <option value="Greece">Greece</option>
                        <option value="Greenland">Greenland</option>
                        <option value="Grenada">Grenada</option>
                        <option value="Guadeloupe">Guadeloupe</option>
                        <option value="Guam">Guam</option>
                        <option value="Guatemala">Guatemala</option>
                        <option value="Guernsey">Guernsey</option>
                        <option value="Guinea">Guinea</option>
                        <option value="Guinea-bissau">Guinea-bissau</option>
                        <option value="Guyana">Guyana</option>
                        <option value="Haiti">Haiti</option>
                        <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                        <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                        <option value="Honduras">Honduras</option>
                        <option value="Hong Kong">Hong Kong</option>
                        <option value="Hungary">Hungary</option>
                        <option value="Iceland">Iceland</option>
                        <option value="India">India</option>
                        <option value="Indonesia">Indonesia</option>
                        <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                        <option value="Iraq">Iraq</option>
                        <option value="Ireland">Ireland</option>
                        <option value="Isle of Man">Isle of Man</option>
                        <option value="Israel">Israel</option>
                        <option value="Italy">Italy</option>
                        <option value="Jamaica">Jamaica</option>
                        <option value="Japan">Japan</option>
                        <option value="Jersey">Jersey</option>
                        <option value="Jordan">Jordan</option>
                        <option value="Kazakhstan">Kazakhstan</option>
                        <option value="Kenya">Kenya</option>
                        <option value="Kiribati">Kiribati</option>
                        <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                        <option value="Korea, Republic of">Korea, Republic of</option>
                        <option value="Kuwait">Kuwait</option>
                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                        <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                        <option value="Latvia">Latvia</option>
                        <option value="Lebanon">Lebanon</option>
                        <option value="Lesotho">Lesotho</option>
                        <option value="Liberia">Liberia</option>
                        <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                        <option value="Liechtenstein">Liechtenstein</option>
                        <option value="Lithuania">Lithuania</option>
                        <option value="Luxembourg">Luxembourg</option>
                        <option value="Macao">Macao</option>
                        <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                        <option value="Madagascar">Madagascar</option>
                        <option value="Malawi">Malawi</option>
                        <option value="Malaysia">Malaysia</option>
                        <option value="Maldives">Maldives</option>
                        <option value="Mali">Mali</option>
                        <option value="Malta">Malta</option>
                        <option value="Marshall Islands">Marshall Islands</option>
                        <option value="Martinique">Martinique</option>
                        <option value="Mauritania">Mauritania</option>
                        <option value="Mauritius">Mauritius</option>
                        <option value="Mayotte">Mayotte</option>
                        <option value="Mexico">Mexico</option>
                        <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                        <option value="Moldova, Republic of">Moldova, Republic of</option>
                        <option value="Monaco">Monaco</option>
                        <option value="Mongolia">Mongolia</option>
                        <option value="Montenegro">Montenegro</option>
                        <option value="Montserrat">Montserrat</option>
                        <option value="Morocco">Morocco</option>
                        <option value="Mozambique">Mozambique</option>
                        <option value="Myanmar">Myanmar</option>
                        <option value="Namibia">Namibia</option>
                        <option value="Nauru">Nauru</option>
                        <option value="Nepal">Nepal</option>
                        <option value="Netherlands">Netherlands</option>
                        <option value="Netherlands Antilles">Netherlands Antilles</option>
                        <option value="New Caledonia">New Caledonia</option>
                        <option value="New Zealand">New Zealand</option>
                        <option value="Nicaragua">Nicaragua</option>
                        <option value="Niger">Niger</option>
                        <option value="Nigeria">Nigeria</option>
                        <option value="Niue">Niue</option>
                        <option value="Norfolk Island">Norfolk Island</option>
                        <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                        <option value="Norway">Norway</option>
                        <option value="Oman">Oman</option>
                        <option value="Pakistan">Pakistan</option>
                        <option value="Palau">Palau</option>
                        <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                        <option value="Panama">Panama</option>
                        <option value="Papua New Guinea">Papua New Guinea</option>
                        <option value="Paraguay">Paraguay</option>
                        <option value="Peru">Peru</option>
                        <option value="Philippines">Philippines</option>
                        <option value="Pitcairn">Pitcairn</option>
                        <option value="Poland">Poland</option>
                        <option value="Portugal">Portugal</option>
                        <option value="Puerto Rico">Puerto Rico</option>
                        <option value="Qatar">Qatar</option>
                        <option value="Reunion">Reunion</option>
                        <option value="Romania">Romania</option>
                        <option value="Russian Federation">Russian Federation</option>
                        <option value="Rwanda">Rwanda</option>
                        <option value="Saint Helena">Saint Helena</option>
                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                        <option value="Saint Lucia">Saint Lucia</option>
                        <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                        <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                        <option value="Samoa">Samoa</option>
                        <option value="San Marino">San Marino</option>
                        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                        <option value="Saudi Arabia">Saudi Arabia</option>
                        <option value="Senegal">Senegal</option>
                        <option value="Serbia">Serbia</option>
                        <option value="Seychelles">Seychelles</option>
                        <option value="Sierra Leone">Sierra Leone</option>
                        <option value="Singapore">Singapore</option>
                        <option value="Slovakia">Slovakia</option>
                        <option value="Slovenia">Slovenia</option>
                        <option value="Solomon Islands">Solomon Islands</option>
                        <option value="Somalia">Somalia</option>
                        <option value="South Africa">South Africa</option>
                        <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                        <option value="Spain">Spain</option>
                        <option value="Sri Lanka">Sri Lanka</option>
                        <option value="Sudan">Sudan</option>
                        <option value="Suriname">Suriname</option>
                        <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                        <option value="Swaziland">Swaziland</option>
                        <option value="Sweden">Sweden</option>
                        <option value="Switzerland">Switzerland</option>
                        <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                        <option value="Taiwan">Taiwan</option>
                        <option value="Tajikistan">Tajikistan</option>
                        <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                        <option value="Thailand">Thailand</option>
                        <option value="Timor-leste">Timor-leste</option>
                        <option value="Togo">Togo</option>
                        <option value="Tokelau">Tokelau</option>
                        <option value="Tonga">Tonga</option>
                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                        <option value="Tunisia">Tunisia</option>
                        <option value="Turkey">Turkey</option>
                        <option value="Turkmenistan">Turkmenistan</option>
                        <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                        <option value="Tuvalu">Tuvalu</option>
                        <option value="Uganda">Uganda</option>
                        <option value="Ukraine">Ukraine</option>
                        <option value="United Arab Emirates">United Arab Emirates</option>
                        <option value="United Kingdom">United Kingdom</option>
                        <option value="United States">United States</option>
                        <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                        <option value="Uruguay">Uruguay</option>
                        <option value="Uzbekistan">Uzbekistan</option>
                        <option value="Vanuatu">Vanuatu</option>
                        <option value="Venezuela">Venezuela</option>
                        <option value="Viet Nam">Viet Nam</option>
                        <option value="Virgin Islands, British">Virgin Islands, British</option>
                        <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                        <option value="Wallis and Futuna">Wallis and Futuna</option>
                        <option value="Western Sahara">Western Sahara</option>
                        <option value="Yemen">Yemen</option>
                        <option value="Zambia">Zambia</option>
                        <option value="Zimbabwe">Zimbabwe</option>
                    </select><br>

            <label for="Reason" class= labels >Which category best describes your reason for contacting us?</label><div class="label">*</div><br>
                
                <select id="reason" name="Reason" class="form-control">
                    <option value="Header">Select Question Type</option>
                    <option value="Recieve a Quotation">Recieve a Quotation</option>
                    <option value="Learn more about Baker Hughes Products and services">Learn more about Baker Hughes Products and services</option>
                    <option value="Technical Support">Technical Support</option>
                    <option value="Service Request">Service Request</option>
                    <option value="Careers/ Job Opportunities">Careers/ Job Opportunities</option>
                    <option value="Supplier Information">Supplier Information</option>
                    <option value="Sustainability Information">Sustainability Information</option>
                    <option value="Login.BakerHughes.com Question">Login.BakerHughes.com Question</option>
                    <option value="Other">Other</option>
                </select><br>

                <label for="interest" class= labels >Area of Interest</label><div class="label">*</div><br>      
                
                <select id="reason" name="type" class="form-control"> 
                    <option value="Header">Select...</option>
                    <option value="Oilfield">Oilfield</option>
                    <option value="Turbomachinery & Process Solutions">Turbomachinery & Process Solutions</option>
                    <option value="Measurement, Testing & Controls">Measurement, Testing & Controls</option>
                    <option value="Software & Analytics">Software & Analytics</option>
                </select><br>
            
            <label for="Details" class= labels >Please provide details about your request.</label><div class="label">*</div><br>
            <textarea placeholder= "Write your request here." rows = "5" cols = "60" name = "description" class="form-control"></textarea><br>

            <label for="Communication" class= labels >Communications Preference</label><div class="label">*</div><br>
            <input type="radio" id="option1" name="options" value= "Yes">
            <label for="option1"> Yes, please keep me informed of topics and innovations transforming my industry, including special event invitations, surveys, newsletters, product and service incentives and new product announcements from Baker Hughes Company and its affiliated companies (together “Baker Hughes”).</label><br><br>

            <input type="radio" id="option2" name="options" value= "No">
            <label for="option2"> No, please exclude me from marketing communications from Baker Hughes.</label><br>       


            <h2>Detailed information about how the personal data you have supplied is collected, stored and processed can be found in the <a href= "https://www.bakerhughes.com/privacy"> Baker Hughes Privacy Notice </a>. If you have opted in to receive marketing communications, you can withdraw your consent at any time by visiting the <a href= "https://info.bhge.com/Preference-Center-Login-LP.html?_ga=2.195467948.1030807973.1624893898-1401285524.1624656341"> Baker Hughes Communications Preference Center</a>, or by using the unsubscribe link found at the bottom of all emails from Baker Hughes.
            </h2>

            <input type= "submit" value="SUBMIT CONTACT REQUEST">

        </form>
    </div>
</div>

<div class="side">
    <h1> Useful Links </h1>
    <h3> Career opportunities </h3>
    <h2> For career opportunities or to check your job applications, please click <a href= "https://careers.bakerhughes.com/global/en"> here. </a> </h2>
    <h3> Supplier relations </h3>
    <h2> For supplier relations, please click <a href= "https://www.bakerhughes.com/suppliers"> here. </a> </h2>
    <h3> Media contacts </h3>
    <h2> For media contacts, please click  <a href= "https://www.bakerhughes.com/media-contacts"> here. </a> </h2>
    <h3> Report a concern </h3>
    <h2> Baker Hughes is committed to doing the right thing, always. To report an ethics, compliance, or other concern, please click <a href= "http://reportconcerns.bakerhughes.com/"> here. </a> </h2>

</div>

<footer>
    <a href= "https://www.bakerhughes.com/">
        <img src="logo-alt.png" alt="BH Logo" width= "200" height= "30">
    </a>
    <div class="item"></div>
    <h5> More Baker Hughes </h5>
    <h2><a class= "nav2" href= "https://careers.bakerhughes.com/global/en"> Rig Count </a> <br>
        <a class= "nav2" href= "https://www.bakerhughesds.com/?_ga=2.143196853.1261990512.1626279194-1916276671.1626279193"> Digital Solutions 🡥 </a> <br>
        <a class= "nav2" href= "https://www.bakerhughesc3.ai/"> BakerHughesC3.ai 🡥 </a> <br>
        <a class= "nav2" href= "https://www.shopbakerhughes.com/?_ga=2.207283859.1261990512.1626279194-1916276671.1626279193"> Shop Baker Hughes 🡥</a>
    </h2>
    <div class="item"></div>
    <h5> Helpful Links </h5>
    <h2><a class= "nav2" href= "https://www.bakerhughes.com/company/newsroom"> Newsroom </a>  <br>
        <a class= "nav2" href= "https://www.bakerhughes.com/company/about-us/company-leadership?team_list=46"> Company Leadership </a>  <br>
        <a class= "nav2" href= "https://www.bakerhughes.com/company/energy-forward"> Energy Forward Stories 🡥 </a>  <br>
        <a class= "nav2" href= "https://www.bakerhughes.com/digital-transformation"> Digital Transformation </a> 
    </h2>

    <div class="item"></div>
    <h5> Social </h5> <br>
    <a href= "https://twitter.com/bakerhughesco">
        <img src="twitter.png" alt="Contacts Bar" width= "30" height= "30" class="styles">
    </a>
    <a href= "https://www.youtube.com/channel/UCxhgTNB0eD0xUeeJnP9Ow4g">
        <img src="yt.png" alt="Contacts Bar" width= "30" height= "30" class="styles">
    </a>    
    <a href= "https://www.linkedin.com/company/bakerhughes/">
        <img src="in.png" alt="Contacts Bar" width= "30" height= "30" class="styles">
    </a>
    <a href= "https://www.facebook.com/bakerhughesco/>">
        <img src="fb.png" alt="Contacts Bar" width= "30" height= "30" class="styles">
    </a>

</footer>
<div class="footerExtra">
    <hr align="center" width="90%" color="#097969">
    <h2>© 2021 Baker Hughes Company</h2>
    <h2 style="text-align:right"> 
        <a class= "nav2" href= "https://www.bakerhughes.com/company/newsroom"> Cookies </a> &nbsp; 
        <a class= "nav2" href= "https://www.bakerhughes.com/terms"> Terms </a> &nbsp; 
        <a class= "nav2" href= "https://www.bakerhughes.com/conflict-minerals"> Conflict Minerals </a>  &nbsp; 
        <a class= "nav2" href= "https://www.bakerhughes.com/privacy">Privacy Notice </a> &nbsp; 
        <a class= "nav2" href= "https://info.bakerhughes.com/Preference-Center-Login-LP.html">Preferences 🡥 </a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    </h2> 
</div>

<script>
window.onscroll = function() {myFunction()};
window.onload = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;
var changeLogo= document.getElementById("whiteLogo")
var changeLogo= document.getElementById("whiteLogo")
var changer= document.getElementById("myButtons")

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
    changeLogo.src="logo.png";
    header.classList.add("styleHeaderNew");
  } else {
    header.classList.remove("sticky");
    header.classList.remove("styleHeaderNew");
    /*changeLogo.src="logo-alt.png";*/
  }

}

function validateForm() {
  let a = document.forms["data"]["firstname"].value;
  let b = document.forms["data"]["lastname"].value;
  let c = document.forms["data"]["email"].value;
  let d = document.forms["data"]["company"].value;
  let e = document.forms["data"]["phone"].value;
  let f = document.forms["data"]["job"].value;
  let g = document.forms["data"]["country"].value;
  let h = document.forms["data"]["Reason"].value;
  let i = document.forms["data"]["type"].value;
  let j = document.forms["data"]["description"].value;
  let k = document.forms["data"]["options"].value;

  var message="The following fields must be filled out:\r\n"
  value=true;
  
  if (a == ""){ 
    message= message + "•First Name\r\n";
    value= false; 
    }
  if(b == "") {
    message= message + "•Last Name\r\n"; 
    value= false;
}
  if(c == ""){
    message= message + "•Company Email Address\r\n";
    value= false;
}
  if(d == ""){
    message= message + "•Company Name\r\n";
    value= false;
}
  if(e == ""){
    message= message + "•Primary Phone Number\r\n";
    value= false;
}
    if(f == ""){
        message= message + "•Job Title\r\n";
        value= false;
    }
    if(g == "Header"){
        message= message + "•Country\r\n";
        value= false;
    }
    if(h == "Header"){
        message= message + "•Category\r\n";
        value= false;
    }
    if(i == "Header"){
        message= message + "•Area of Interest\r\n";
        value= false;
    }
    if( j == ""){
        message= message + "•Details\r\n";
        value= false;
    }
    if( k == ""){
        message= message + "•Communications Preference\r\n";
        value= false;
    }

    if(value==false)
        alert(message);

      return value;
    }


</script>

</body>
</html>


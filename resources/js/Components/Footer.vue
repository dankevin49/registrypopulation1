<template>
    <footer class="py-4">
      <div class="text1">
        <p class="text-sm">{{copyrightText}} &copy; {{currentYear}}</p>
      </div>
      <div class="footerlinks">
            <div class="da">
                <img src="images/da.png">
            </div>
            <div class="seal">
                <img src="images/seal.png"/>
            </div>
            <div class="sealdscrpt">
                 <p>All content is in public domain<br>unless otherwise stated</p>
            </div>
            <div class="visit">
                <h2>VISIT US</h2>
                <p>City Hall<br>Victoria corner Cardona Street, Barangay E,<br>City of Borongan, Eastern Samar, Philippines</p>
            </div>
            <div class="contact">
                <h3>CONTACT US</h3>
                <p>borongancityinfo@gmail.com</p>
                <div class="facebook">
                    <a href="https://web.facebook.com/borongancityinfo"><p>Borongan City Information Office</p></a>
                </div>
            </div>
            <div class="government">
                <h3>GOVERNMENT LINKS</h3>
                <div class="officeofp">
                    <a href=" https://op-proper.gov.ph/"><p>Office of the President</p></a>
                </div>
                <div class="officeofvp">
                    <a href="https://ovp.gov.ph/"><p>Office of the Vice President</p></a>
                </div>
                <div class="senate">
                    <a href="http://legacy.senate.gov.ph/"><p>Senate of the Philippines</p></a>
                </div>
                <div class="house">
                    <a href="https://www.congress.gov.ph/"><p>House of Representatives</p></a>
                </div>
                <div class="DILG">
                    <a href="https://dilg.gov.ph/"><p>Department of Interior and Local Government</p></a>
                </div>
            </div>
      </div>
    </footer>
  </template>
  
  <script>
  export default {
    data() {
      return {
        copyrightText: 'Borongan City Government',
        currentYear: new Date().getFullYear(),
      };
    },
  };
  </script>
  
  <style scoped>
  footer {
    background-color: #38b52480;
    color: white;
    font-family: 'Poppins';
   font-size: 15px;
    position: absolute;
    bottom: -300%;
    height: 300px;
    width: 100%;
  }
  .text1{
    position: absolute;
   bottom: 0;
   width: 100%;
   text-align: center;
   
  }
  .footerlinks .da{
    position: absolute;
    width: 15%;
    height: 85px;
    left: 5%;
    bottom:  30%;    
}
.footerlinks .da img{
    width: 80px;
}
.footerlinks .seal{
    position: absolute;
    right: 0%;
    bottom: 30%;
}
.footerlinks .seal img{
    width: 250px;
}
.footerlinks .sealdscrpt{
    position: absolute;
    width: 185px;
    height: 36px;
    right: 2.5%;
    bottom: 25%;
    
    font-family: 'Poppins';
    font-style: normal;
    font-weight: 400;
    font-size: 10px;
    line-height: 18px;
    text-align: center;
    
    color: #FFFFFF;
    
}
.footerlinks .visit h2{
    position: absolute;
    width: 58px;
    height: 23px;
    left: 14.5%;
    top: 20%; 
    font-family: 'Poppins';
    font-style: normal;
    font-weight: 400;
    font-size: 13px;
    line-height: 22px;
    text-align: center;         
    color: #FFFFFF;  
}
.footerlinks .visit p{
    position: absolute;
    width: 220px;
    height: 60px;
    left: 15%;
    top: 30%;
    
    font-family: 'Poppins';
    font-style: normal;
    font-weight: 400;
    font-size: 10px;
    line-height: 15px;
    
    color: #FFFFFF;
}
.footerlinks .contact h3{
    position: absolute;
    width: max-width;
    height: 23px;
    left: 40%;
    top: 20%; 
    font-family: 'Poppins';
    font-style: normal;
    font-weight: 400;
    font-size: 13px;
    line-height: 22px;
    text-align: center;         
    color: #FFFFFF;  
}
.footerlinks .contact p{
    position: absolute;
    width: 220px;
    height: 60px;
    left: 40%;
    top: 30%;
    font-family: 'Poppins';
    font-style: normal;
    font-weight: 400;
    font-size: 10px;
    line-height: 15px;
    color: #FFFFFF;
}
.footerlinks .facebook{
    position: absolute;
    width: 220px;
    height: 60px;
    left: 32.7%;
    top: 30%;
    font-family: 'Poppins';
    font-style: normal;
    font-weight: 400;
    font-size: 10px;
    line-height: 15px;
    color: #FFFFFF;
}
.footerlinks .government h3{
    position: absolute;
    width: 147px;
    height: 23px;
    left: 60%;
    top: 20%;
    font-family: 'Poppins';
    font-style: normal;
    font-weight: 400;
    font-size: 13px;
    line-height: 22px;
    text-align: center;
    color: #FFFFFF;  
}
.footerlinks .officeofp{
    position: absolute;
    width: 220px;
    height: 60px;
    left: 61%;
    top: 30%;
    font-family: 'Poppins';
    font-style: normal;
    font-weight: 400;
    font-size: 10px;
    line-height: 15px;
    color: #FFFFFF;
}
.footerlinks .officeofvp{
    position: absolute;
    width: 220px;
    height: 60px;
    left: 61%;
    top: 35%;
    font-family: 'Poppins';
    font-style: normal;
    font-weight: 400;
    font-size: 10px;
    line-height: 15px;
    color: #FFFFFF;
}
.footerlinks .senate{
    position: absolute;
    width: 220px;
    height: 60px;
    left: 61%;
    top: 40%;
    font-family: 'Poppins';
    font-style: normal;
    font-weight: 400;
    font-size: 10px;
    line-height: 15px;
    color: #FFFFFF;
}
.footerlinks .house{
    position: absolute;
    width: 220px;
    height: 60px;
    left: 61%;
    top: 45%;
    font-family: 'Poppins';
    font-style: normal;
    font-weight: 400;
    font-size: 10px;
    line-height: 15px;
    color: #FFFFFF;
}
.footerlinks .DILG{
    position: absolute;
    width: 220px;
    height: 60px;
    left: 61%;
    top: 50%;
    font-family: 'Poppins';
    font-style: normal;
    font-weight: 400;
    font-size: 10px;
    line-height: 15px;
    color: #FFFFFF;
}
  </style>
  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITES - Home</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">

    <style>
        body {
            font-family: "Maven Pro", sans-serif;
            margin: 0;
            padding: 0;
            overflow-x:hidden;
        }
        header {
            background: black;
            position: fixed;
            top: 0;
            width: 100vw;
            z-index: 30000;
        }
        .menu {
            display: flex;
            padding: 20px;
            color: white;
        }
        .menu .leftmenu img {
            width: 120px;
        }
        .menu .rightmenu {
            position: absolute;
            right: 0;
            margin-right: 30px;
        }
        .menu .rightmenu ul {
            display: flex;
            margin-top: 5px;
        }
        .menu .rightmenu ul li {
            list-style-type: none;
            margin-left: 20px;
            font-size: 18px;
        }
        .menu .rightmenu ul li a {
            text-decoration: none;
            color: white;
        }
        .menu .rightmenu ul li a:hover {
            color: rgb(0, 151, 206);
            font-size: 18.5px;
        }
        .menu .rightmenu ul li:first-child a {
            color: rgb(0, 151, 206);
        }
        .menu .rightmenu ul li:last-child a {
            border: 1px solid rgb(0, 151, 206);
            padding: 8px 20px;
            border-radius: 25px;
        }
        .menu .rightmenu ul li:last-child a:hover {
            background-color: rgb(0, 151, 206);
            color: white;
        }
        .menu .navbar {
            position: absolute;
            right: 0;
            margin-right: 30px;
            margin-top: -15px;
            display: none;
        }
        .menu .navbar span div {
            background: white;
            width: 50px;
            height: 5px;
            margin-top: 10px;
        }
        .close {
            display: none;
        }
        .webdesc {
            height: calc(70vh - 80px); /* Adjust according to the header height */
            width: 100vw;
            color: white;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            margin-top: 80px; /* Adjust according to the header height */
        }
        .weblandpage,
        .marketlandpage {
            background: url("/IMAGES/taylor-vick.png") center center / cover no-repeat;
            position: absolute;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            width: 100%;
            transition: opacity 1s ease-in-out;
        }
        .marketlandpage {
            opacity: 0;
        }
        .content,
        .marketcontent {
            z-index: 5000;
            position: relative;
            width: 80%;
            text-align: center;
        }
        .content h1,
        .marketcontent h1 {
            font-size: 4rem;
            line-height: 1;
            font-weight: 700;
            color: rgba(255, 255, 255, 1);
        }
        .content button,
        .marketcontent button {
            margin-top: ;
            padding: 15px 30px;
            border: none;
            background: rgb(0, 151, 206);
            color: white;
            text-transform: capitalize;
            border-radius: 9999px;
            font-size:20px
        }
        .overlay {
            width: 100vw;
            height: calc(70vh - 80px); /* Adjust according to the header height */
            background-color: black;
            opacity: 0.67;
            z-index: 500;
            position: absolute;
            top: 80px; /* Adjust according to the header height */
        }

        .servicesabout{
            background: url("/IMAGES/croped-bg.webp") center center / cover no-repeat;
          
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            width: 100%;
           
        }
        .services{
            color:white;
            background:rgba(0,0,0,0.1   );;
            
        }
        .servicescontent{
            margin:30px;
            text-align:center;
           
        }
        @media screen and (max-width: 756px) {
            .menu .navbar {
                display: block;
            }
            .menu .rightmenu {
                display: none;
            }
            .close {
                display: block;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="menu">
            <div class="leftmenu">
                <img src="/IMAGES/ITESLOGO.webp" alt="logo">
            </div>
            <div class="rightmenu">
                <div class="close">x</div>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">About US</a></li>
                    <li><a href="#">Contact US</a></li>
                    <li><a href="#">Market</a></li>
                    <li><a href="#">Sign In</a></li>
                </ul>
            </div>
            <div class="navbar">
                <span>
                    <div></div>
                    <div></div>
                    <div></div>
                </span>
            </div>
        </div>
    </header>
    <div class="webdesc">
        <div class="weblandpage">
            <div class="content">
                <h1>We offer Innovative Technology Solutions</h1>
                <button>contact us now</button>
            </div>
        </div>
        <div class="marketlandpage">
            <div class="marketcontent">
                <h1>Our Market offers High quality computer electronics</h1>
                
                <button>visit market</button>
            </div>
        </div>
    </div>
    <div class="overlay"></div>

    <div class="servicesabout">
      <div class="services" >
        <div class="servicescontent">
            <div class="network">
                    <!-- Icon -->
                <svg class="w-12 h-12 mx-auto" width="42" height="40" viewBox="0 0 42 40" fill="none" class="" mx-auto" xmlns="http://www.w3.org/2000/svg">
                   <path d="M13.014 3.975C10.1568 4.63121 7.31895 5.34475 4.50301 6.115C4.24588 6.18441 4.01731 6.31261 3.84334 6.48499C3.66937 6.65736 3.55699 6.867 3.51901 7.09C1.85702 17.4825 5.69701 25.065 10.278 30.06C12.2176 32.196 14.5302 34.0777 17.139 35.6425C18.177 36.2525 19.095 36.6925 19.818 36.975C20.178 37.1175 20.472 37.2125 20.697 37.27C20.7954 37.2988 20.8969 37.3197 21 37.3325C21.1019 37.3187 21.2023 37.2978 21.3 37.27C21.528 37.2125 21.822 37.1175 22.182 36.975C22.902 36.6925 23.823 36.25 24.861 35.6425C27.4697 34.0777 29.7824 32.196 31.722 30.06C36.303 25.0675 40.143 17.4825 38.481 7.09C38.4433 6.86689 38.3311 6.65712 38.1571 6.4847C37.9831 6.31227 37.7543 6.18415 37.497 6.115C35.544 5.5825 32.247 4.715 28.986 3.9775C25.656 3.225 22.593 2.6675 21 2.6675C19.41 2.6675 16.344 3.225 13.014 3.9775V3.975ZM12.216 1.4C15.471 0.6625 18.93 0 21 0C23.07 0 26.529 0.6625 29.784 1.4C33.114 2.15 36.471 3.0375 38.445 3.575C39.2703 3.80213 40.002 4.21866 40.556 4.77675C41.1101 5.33484 41.4639 6.01185 41.577 6.73C43.365 17.9225 39.216 26.2175 34.182 31.705C32.0473 34.0525 29.502 36.1196 26.631 37.8375C25.6383 38.4319 24.5865 38.9547 23.487 39.4C22.647 39.73 21.744 40 21 40C20.256 40 19.356 39.73 18.513 39.4C17.4135 38.9547 16.3617 38.432 15.369 37.8375C12.4981 36.1196 9.95275 34.0524 7.81801 31.705C2.78401 26.2175 -1.36498 17.9225 0.423016 6.73C0.536078 6.01185 0.889945 5.33484 1.44397 4.77675C1.99799 4.21866 2.72969 3.80213 3.55501 3.575C6.42059 2.79202 9.30843 2.06681 12.216 1.4Z" fill="white"/>
                   <path d="M25.5011 16.25C25.5016 17.0258 25.2133 17.7827 24.676 18.4162C24.1387 19.0498 23.3788 19.5289 22.5011 19.7875L23.6561 24.7625C23.6981 24.9435 23.6916 25.1299 23.637 25.3085C23.5824 25.4871 23.4811 25.6535 23.3404 25.7956C23.1996 25.9378 23.0228 26.0522 22.8228 26.1308C22.6227 26.2093 22.4043 26.2501 22.1831 26.25H19.8191C19.5982 26.2497 19.3801 26.2087 19.1804 26.13C18.9807 26.0513 18.8043 25.9368 18.6639 25.7947C18.5234 25.6525 18.4224 25.4863 18.368 25.3079C18.3136 25.1295 18.3071 24.9433 18.3491 24.7625L19.5011 19.7875C18.7234 19.5584 18.0362 19.1555 17.5147 18.6229C16.9931 18.0903 16.6573 17.4485 16.5439 16.7677C16.4304 16.0868 16.5437 15.393 16.8715 14.7622C17.1992 14.1313 17.7287 13.5877 18.4021 13.1907C19.0755 12.7937 19.8669 12.5585 20.6898 12.511C21.5127 12.4634 22.3355 12.6053 23.0682 12.921C23.8009 13.2368 24.4154 13.7143 24.8444 14.3014C25.2735 14.8885 25.5007 15.5626 25.5011 16.25Z" fill="white"/>
                </svg>

                    <!-- Service Title -->
                <h3>Computer Networks and Network Security</h3>
                <p> We have expert engineers who can help you build from scratch or maintain your network infrastructure, protecting your network and data from breaches, intrusions and other threats. We provide hardware and software solutions that ensures your network be well protected. We have expertise in a cross section of network equipment’s i.e. Cisco, Ubiquiti, Huawei, and juniper, among others. If you buy network or security equipment’s from us, we provide free design, configuration and documentation. </p>      
            </div>
             
            <div class="audit">
                   
                <svg class="w-12 h-12 mx-auto" width="51" height="49" viewBox="0 0 51 49" fill="none" class="" xmlns="http://www.w3.org/2000/svg">
                   <path d="M42.5 36.75C44.8375 36.75 46.7287 34.9125 46.7287 32.6667L46.75 12.25C46.75 11.167 46.3022 10.1284 45.5052 9.36264C44.7082 8.59686 43.6272 8.16666 42.5 8.16666H8.5C6.14125 8.16666 4.25 9.98374 4.25 12.25V32.6667C4.25 33.7496 4.69777 34.7882 5.4948 35.554C6.29183 36.3198 7.37283 36.75 8.5 36.75H0V40.8333H51V36.75H42.5ZM8.5 32.6667V12.25H42.5V32.6871L8.5 32.6667ZM19.3311 20.3207C19.3311 18.2239 21.1076 16.515 23.2921 16.515C25.4745 16.515 27.2531 18.2239 27.2531 20.3207C27.2514 21.3295 26.8336 22.2966 26.0911 23.0099C25.3486 23.7233 24.3421 24.1247 23.2921 24.1264C22.2421 24.1247 21.2356 23.7233 20.4931 23.0099C19.7507 22.2966 19.3328 21.3295 19.3311 20.3207V20.3207ZM34.2741 28.9692L28.9999 23.9018C29.7295 22.8389 30.1188 21.5939 30.1197 20.3207C30.1181 18.5811 29.3979 16.9132 28.1174 15.6832C26.8368 14.4533 25.1006 13.7619 23.29 13.7608C21.4795 13.7624 19.7437 14.454 18.4633 15.6838C17.1829 16.9136 16.4625 18.5812 16.4602 20.3207C16.4625 22.0604 17.1828 23.7282 18.4631 24.9583C19.7435 26.1884 21.4793 26.8805 23.29 26.8826C24.5898 26.8802 25.8615 26.5187 26.9535 25.8414L32.2426 30.919L34.272 28.9692H34.2741Z" fill="#CCCCCC"/>
                </svg>                

                   
                <h3>IT Audit and Information Systems Security</h3>
                <p>We identify and analyse potential IT risks, their mitigation or removal in your business. In our work auditing work, we apply established auditing standards throughout the IT spectrum. We have expert’s engineers in Application Security, Infrastructure Security, Cloud Security and Cryptography. Our work ensure you have well secured, maintained and functioning Information Systems that effectively and efficiently delivers on your organisation overall business objectives. </p>
            </div>
                            
            <div class="cabling">
                    
                <svg class="w-12 h-12 mx-auto" width="40" height="40" viewBox="0 0 40 40" fill="none" class="" xmlns="http://www.w3.org/2000/svg">
                  <path d="M33.3333 8.33333V6.66667C33.3333 5.75 32.5833 5 31.6667 5H28.3333C27.4167 5 26.6667 5.75 26.6667 6.66667V8.33333H25V15C25 15.9167 25.75 16.6667 26.6667 16.6667H28.3333V28.3333C28.3333 30.1667 26.8333 31.6667 25 31.6667C23.1667 31.6667 21.6667 30.1667 21.6667 28.3333V11.6667C21.6667 7.98333 18.6833 5 15 5C11.3167 5 8.33333 7.98333 8.33333 11.6667V23.3333H6.66667C5.75 23.3333 5 24.0833 5 25V31.6667H6.66667V33.3333C6.66667 34.25 7.41667 35 8.33333 35H11.6667C12.5833 35 13.3333 34.25 13.3333 33.3333V31.6667H15V25C15 24.0833 14.25 23.3333 13.3333 23.3333H11.6667V11.6667C11.6667 9.83333 13.1667 8.33333 15 8.33333C16.8333 8.33333 18.3333 9.83333 18.3333 11.6667V28.3333C18.3333 32.0167 21.3167 35 25 35C28.6833 35 31.6667 32.0167 31.6667 28.3333V16.6667H33.3333C34.25 16.6667 35 15.9167 35 15V8.33333H33.3333Z" fill="white"/>
                </svg>
                

                <h3 class="text-3xl font-bold">Network Cabling</h3>
                <p>We have certified engineers in network cabling, Ethernet and Fiber-optic cable. We ensure a clean well designed and documented installation.</p>
            </div>

             <div class="cloud">
                    
                <svg class="w-12 h-12 mx-auto" width="41" height="40" viewBox="0 0 41 40" fill="none" class="" xmlns="http://www.w3.org/2000/svg">
                   <path d="M11.1041 33.3334C8.51317 33.3334 6.29974 32.4584 4.46385 30.7084C2.62683 28.9584 1.70831 26.8195 1.70831 24.2917C1.70831 22.125 2.37741 20.1945 3.7156 18.5C5.0538 16.8056 6.80484 15.7222 8.96873 15.25C9.68053 12.6945 11.1041 10.625 13.2396 9.04169C15.375 7.45835 17.7951 6.66669 20.5 6.66669C23.8312 6.66669 26.6568 7.79835 28.9767 10.0617C31.2978 12.3261 32.4583 15.0834 32.4583 18.3334C34.4229 18.5556 36.0532 19.3817 37.3493 20.8117C38.6442 22.2428 39.2916 23.9167 39.2916 25.8334C39.2916 27.9167 38.5445 29.6878 37.0503 31.1467C35.5549 32.6045 33.7396 33.3334 31.6041 33.3334H11.1041Z" fill="white"/>
                </svg>
                
                 <h3 class="text-3xl font-bold">Cloud Services</h3>
                 <p>We can help your business migrate to the cloud whether it be Infrastructure-as-a-Service (IaaS), Platform-as-a-Service (PaaS), Software-as-a-Service (SaaS), Hybrid cloud, Test and development and big data analytics. We also provide Web hosting services.</p>
                    
            </div>
            
            <div class="pentest">
                    
                <svg class="w-12 h-12 mx-auto" width="42" height="42" viewBox="0 0 42 42" fill="none" class="" xmlns="http://www.w3.org/2000/svg">
                  <path d="M34.125 19.0312H31.3359V9.84375C31.3359 6.94395 28.9857 4.59375 26.0859 4.59375H15.9141C13.0143 4.59375 10.6641 6.94395 10.6641 9.84375V19.0312H7.875C7.14902 19.0312 6.5625 19.6178 6.5625 20.3438V36.0938C6.5625 36.8197 7.14902 37.4062 7.875 37.4062H34.125C34.851 37.4062 35.4375 36.8197 35.4375 36.0938V20.3438C35.4375 19.6178 34.851 19.0312 34.125 19.0312ZM22.1484 28.752V30.9258C22.1484 31.1063 22.0008 31.2539 21.8203 31.2539H20.1797C19.9992 31.2539 19.8516 31.1063 19.8516 30.9258V28.752C19.513 28.5089 19.2603 28.1646 19.1298 27.7688C18.9993 27.3729 18.9978 26.9459 19.1255 26.5491C19.2532 26.1524 19.5035 25.8064 19.8403 25.5609C20.1772 25.3155 20.5832 25.1832 21 25.1832C21.4168 25.1832 21.8228 25.3155 22.1597 25.5609C22.4965 25.8064 22.7468 26.1524 22.8745 26.5491C23.0022 26.9459 23.0007 27.3729 22.8702 27.7688C22.7397 28.1646 22.487 28.5089 22.1484 28.752ZM28.3828 19.0312H13.6172V9.84375C13.6172 8.57637 14.6467 7.54688 15.9141 7.54688H26.0859C27.3533 7.54688 28.3828 8.57637 28.3828 9.84375V19.0312Z" fill="white"/>
                </svg>
                
                <h3 class="text-3xl font-bold">Penetration Testing</h3>
                <p>Our engineers can provide authorised simulated attacks on your computer systems to evaluate their security using the same tools, techniques, and processes as attackers to find and demonstrate the business impacts of weaknesses in your computer system. The update situational awareness status of your cyber defence could benefit your organisation security posture. </p>
            </div>
                
            <div class="hardware">
                    
                <svg class="w-12 h-12 mx-auto" width="40" height="40" viewBox="0 0 40 40" fill="none" class="" xmlns="http://www.w3.org/2000/svg">
                   <g clip-path="url(#clip0_208_51)">
                   <path d="M36.6667 0H3.33333C2.44928 0 1.60143 0.35119 0.976311 0.976311C0.35119 1.60143 0 2.44928 0 3.33333L0 36.6667C0 37.5507 0.35119 38.3986 0.976311 39.0237C1.60143 39.6488 2.44928 40 3.33333 40H36.6667C37.5507 40 38.3986 39.6488 39.0237 39.0237C39.6488 38.3986 40 37.5507 40 36.6667V3.33333C40 2.44928 39.6488 1.60143 39.0237 0.976311C38.3986 0.35119 37.5507 0 36.6667 0V0ZM10 26.6667C9.67036 26.6667 9.34813 26.5689 9.07405 26.3858C8.79997 26.2026 8.58635 25.9423 8.4602 25.6378C8.33405 25.3333 8.30105 24.9982 8.36536 24.6748C8.42967 24.3515 8.5884 24.0546 8.82149 23.8215C9.05458 23.5884 9.35155 23.4297 9.67485 23.3654C9.99815 23.301 10.3333 23.3341 10.6378 23.4602C10.9423 23.5863 11.2026 23.8 11.3858 24.074C11.5689 24.3481 11.6667 24.6704 11.6667 25C11.6662 25.4419 11.4905 25.8656 11.178 26.178C10.8656 26.4905 10.4419 26.6662 10 26.6667ZM36.6667 10H33.0267C32.6335 8.88798 31.8599 7.95074 30.8425 7.35395C29.8252 6.75715 28.6296 6.53922 27.4671 6.73867C26.3046 6.93813 25.2501 7.54212 24.4898 8.4439C23.7296 9.34568 23.3126 10.4872 23.3126 11.6667C23.3126 12.8461 23.7296 13.9877 24.4898 14.8894C25.2501 15.7912 26.3046 16.3952 27.4671 16.5947C28.6296 16.7941 29.8252 16.5762 30.8425 15.9794C31.8599 15.3826 32.6335 14.4454 33.0267 13.3333H36.6667V20H30V23.3333H36.6667V26.6667H33.3333V30H36.6667V36.6667H23.3333V34.6933C24.4454 34.3002 25.3826 33.5266 25.9794 32.5092C26.5762 31.4918 26.7941 30.2963 26.5947 29.1338C26.3952 27.9713 25.7912 26.9167 24.8894 26.1565C23.9877 25.3963 22.8461 24.9793 21.6667 24.9793C20.4872 24.9793 19.3457 25.3963 18.4439 26.1565C17.5421 26.9167 16.9381 27.9713 16.7387 29.1338C16.5392 30.2963 16.7572 31.4918 17.3539 32.5092C17.9507 33.5266 18.888 34.3002 20 34.6933V36.6667H11.6667V29.6933C12.7787 29.3002 13.7159 28.5266 14.3127 27.5092C14.9095 26.4918 15.1274 25.2963 14.928 24.1338C14.7285 22.9713 14.1245 21.9167 13.2228 21.1565C12.321 20.3963 11.1795 19.9793 10 19.9793C8.82052 19.9793 7.67901 20.3963 6.77723 21.1565C5.87545 21.9167 5.27146 22.9713 5.07201 24.1338C4.87255 25.2963 5.09049 26.4918 5.68728 27.5092C6.28408 28.5266 7.22131 29.3002 8.33333 29.6933V36.6667H3.33333V3.33333H10V13.3333H13.3333V3.33333H16.6667V20H20V3.33333H36.6667V10ZM30 11.6667C30 11.9963 29.9023 12.3185 29.7191 12.5926C29.536 12.8667 29.2757 13.0803 28.9711 13.2065C28.6666 13.3326 28.3315 13.3656 28.0082 13.3013C27.6849 13.237 27.3879 13.0783 27.1548 12.8452C26.9217 12.6121 26.763 12.3151 26.6987 11.9918C26.6344 11.6685 26.6674 11.3334 26.7935 11.0289C26.9197 10.7243 27.1333 10.464 27.4074 10.2809C27.6815 10.0977 28.0037 10 28.3333 10C28.7752 10.0004 29.1989 10.1762 29.5114 10.4886C29.8238 10.8011 29.9996 11.2248 30 11.6667Z" fill="white"/>
                  </g>
                  <defs>
                  <clipPath id="clip0_208_51">
                   <rect width="40" height="40" fill="white"/>
                   </clipPath>
                    </defs>
                </svg>                

                <h3>ICT Hardware and Software</h3>
                <p>Our expert engineers can help you fix a wide ranging of computer hardware and software problems.  This could be desktops, laptops, servers and printers. We also build web based and mobile based software solutions based on your requirements</p>
            </div>
                            
            <div class="training">
                    
                <svg class="w-12 h-12 mx-auto" width="40" height="40" viewBox="0 0 40 40" fill="none" class="" xmlns="http://www.w3.org/2000/svg">
                   <path d="M33.3333 28.3333C34.2174 28.3333 35.0652 27.9821 35.6904 27.357C36.3155 26.7319 36.6667 25.884 36.6667 25V6.66665C36.6667 5.78259 36.3155 4.93474 35.6904 4.30962C35.0652 3.6845 34.2174 3.33331 33.3333 3.33331H15.7667C16.35 4.34998 16.6667 5.49998 16.6667 6.66665H33.3333V25H18.3333V28.3333M25 11.6666V15H15V36.6666H11.6667V26.6666H8.33333V36.6666H5V23.3333H2.5V15C2.5 14.1159 2.85119 13.2681 3.47631 12.643C4.10143 12.0178 4.94928 11.6666 5.83333 11.6666H25ZM13.3333 6.66665C13.3333 7.5507 12.9821 8.39855 12.357 9.02367C11.7319 9.64879 10.8841 9.99998 10 9.99998C9.11595 9.99998 8.2681 9.64879 7.64298 9.02367C7.01786 8.39855 6.66667 7.5507 6.66667 6.66665C6.66667 5.78259 7.01786 4.93474 7.64298 4.30962C8.2681 3.6845 9.11595 3.33331 10 3.33331C10.8841 3.33331 11.7319 3.6845 12.357 4.30962C12.9821 4.93474 13.3333 5.78259 13.3333 6.66665Z" fill="white"/>
                </svg>
                
                <h3>ICT Training</h3>
                <p> We provide a wide ranging of ICT trainings. Our certified trainers in a number of well-respected industry certifications such as Cisco, CompTIA, ISACA, PeopleCert, and VMware, among others, can help you achieve your certification goals or simply acquire the knowledge and skills. Tell us any of your training needs and we will deliver to your satisfaction. We have the software and hardware resources that gives enables us to deliver practical based trainings. We also provide Fiber Optic Networking Training.</p>
                
            </div>
            
            <div class="consulting">
                   
                <svg class="w-12 h-12 mx-auto" width="40" height="40" viewBox="0 0 40 40" fill="none" class="" xmlns="http://www.w3.org/2000/svg">
                  <path d="M20 6.17249C10.335 6.17249 2.5 12.0475 2.5 19.2975C2.5 21.7725 3.425 24.0887 5.02 26.065L2.5 31.59L9.51625 29.79C12.4412 31.435 16.0625 32.4225 20 32.4225C29.665 32.4225 37.5 26.5475 37.5 19.2975C37.5 12.0475 29.665 6.17249 20 6.17249V6.17249ZM17.13 24.3375L14.2075 27.2575L6.17 19.22L14.2075 11.1787L17.13 14.1037L12.0175 19.2187L17.13 24.3375V24.3375ZM25.9675 27.2537L23.0475 24.3287L28.1625 19.2162L23.0475 14.1037L25.9687 11.1787L34.0062 19.2112L25.9687 27.2525L25.9675 27.2537Z" fill="white"/>
                </svg>
            
                 <h3>ICT Consulting</h3>
                <p>We also work as consultants on special assignments. Our engineer’s expertise in ICT consultancies is cross cutting and we have a rich pool base of engineers. We further provide some consulting services for free based on the nature of the work. We guarantee our expert input in delivering your business objectives.</p>
            </div>
        
            <div class="datamanagenmt">
                  
                <svg class="w-12 h-12 mx-auto" width="40" height="40" viewBox="0 0 40 40" fill="none" class="" xmlns="http://www.w3.org/2000/svg">
                  <path d="M12.3333 26.6667L17.4167 21.5833L20.75 24.9167L26.6667 19.0417V21.6667H30V13.3333H21.6667V16.6667H24.2917L20.75 20.2083L17.4167 16.875L10 24.3333L12.3333 26.6667ZM8.33333 35C7.41667 35 6.63167 34.6739 5.97833 34.0217C5.32611 33.3683 5 32.5833 5 31.6667V8.33333C5 7.41667 5.32611 6.63167 5.97833 5.97833C6.63167 5.32611 7.41667 5 8.33333 5H31.6667C32.5833 5 33.3683 5.32611 34.0217 5.97833C34.6739 6.63167 35 7.41667 35 8.33333V31.6667C35 32.5833 34.6739 33.3683 34.0217 34.0217C33.3683 34.6739 32.5833 35 31.6667 35H8.33333Z" fill="white"/>
                </svg>                

                <h3>Data Management and Analytics</h3>
                <p>We can help your business extract insights from your data. Our engineers have mastered the right processes, tools and techniques of data analysis and management, including the collection, organization, and storage of data. Our engineers further leverage the power of Artificial Intelligence (AI) in data management and analytics.</p>
                    
            </div>

        </div>
      </div>


    </div>

    <div class="servicesoveray" style="width:100vw;height: 200px;background:darkgray;position:relative;opacity:0.1"></div>

    <script>
        $(document).ready(function() {
            let currentPage = 0;
            const pages = ['.weblandpage', '.marketlandpage'];

            function switchPages() {
                $(pages[currentPage]).css('opacity', 0);
                currentPage = (currentPage + 1) % pages.length;
                $(pages[currentPage]).css('opacity', 1);
            }

            setInterval(switchPages, 5000); // Switch every 5 seconds

            $(".navbar").click(function() {
                $(".navbar").hide();
                $(".rightmenu").show().css({
                    "background-color": "black",
                    "top": "0",
                    "margin-right": "0"
                });
                $(".rightmenu ul").css({
                    "display": "block",
                    "padding": "0",
                    "width": "100vw",
                    "height": "100vh"
                });
                $(".rightmenu ul li").css({
                    "padding": "5px",
                    "margin-left": "10px"
                });
                $(".rightmenu ul li a").css({
                    "color": "white"
                });
                $(".close").css({
                    "right": "0",
                    "position": "absolute",
                    "padding": "5px",
                    "font-size": "30px"
                });
            });

            $(".close").click(function() {
                $(".rightmenu").hide("slow");
                $(".navbar").show("slow");
                $(".close").css({
                    "right": "0",
                    "position": "absolute",
                    "padding": "5px",
                    "margin-right": "20px",
                    "font-size": "30px"
                });
            });
        });
    </script>
</body>
</html>

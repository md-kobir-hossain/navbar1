<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Navbar</title>
</head>
    <style>
        .nav-section {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            background: #002147;
        }

        .head-text {
            display: flex;
            align-items: center;
            padding: 15px 30px;
            background: #000D33;
            border-radius: 15px;
            margin: 10px;
            border: 0.01px solid rgba(255, 255, 255, 0.3);
        }

        .logo {
            width: 60px;
            height: 60px;
            border-radius: 2%;
            margin-right: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 8px 25px rgba(255, 107, 107, 0.3);
            position: relative;
            overflow: hidden;
            background-color: transparent;
        }

        
        .logo img {
            width: 100%;
            height: 100%;
            object-fit: cover; 
        }

        .logo::before {
            font-size: 24px;
            animation: float 3s ease-in-out infinite;
        }

        .logo::after {
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transform: rotate(45deg);
            animation: shine 3s infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-5px); }
        }

        @keyframes shine {
            0% { transform: translateX(-100%) translateY(-100%) rotate(45deg); }
            50% { transform: translateX(100%) translateY(100%) rotate(45deg); }
            100% { transform: translateX(-100%) translateY(-100%) rotate(45deg); }
        }

        .name {
            margin-left: 30%;
            text-align: center;  
        }

        .name h1 {
            font-size: 28px;
            font-weight: 700;
            color: #FFB606;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
            margin-bottom: 5px;
            letter-spacing: 2px;
        }

        .name p {
            font-size: 16px;
            color: #FFB606;
            font-weight: 300;
            letter-spacing: 1px;
        }


        .nav-menu {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0.5px 15px 7px;
        }

        .nav-option {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .menu-icon {
            font-size: 24px;
            color: white;
            cursor: pointer;
            padding: 10px;
            border-radius: 10px;
            background: #000D33;
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;
        }

        .menu-icon:hover {
            background: rgba(255, 255, 255, 0.2);
            color:black;
            transform: scale(1.1);
        }

        #home {
            color: white;
            text-decoration: none;
            font-weight: 600;
            padding: 12px 24px;
            border-radius: 25px;
            background:  #000D33;
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }

        #home:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-2px);
            color:black;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
        }

        .fc {
            display: flex;
            gap: 30px;
            align-items: center;
        }

        .dropdown-menu, .club {
            position: relative;
        }

        .f, .c {
            color: white;
            text-decoration: none;
            font-weight: 600;
            padding: 12px 20px;
            border-radius: 20px;
            background: #000D33;
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;
            display: block;
            backdrop-filter: blur(10px);
        }

        .f:hover, .c:hover {
            background: rgba(255, 255, 255, 0.2);
            color:black;
            transform: translateY(-2px);
        }

        .dropdown-menu-1 {
            position: absolute;
            top: 100%;
            left: 0;
            background: rgba(16, 16, 16, 0.31);
            backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 15px;
            padding: 10px 0;
            min-width: 150px;
            opacity: 0;
            visibility: hidden;
            transform: translateY(-10px);
            transition: all 0.3s ease;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
        }

        .dropdown-menu:hover .dropdown-menu-1,
        .club:hover .dropdown-menu-1 {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .dropdown-menu-1 a {
            display: block;
            padding: 10px 20px;
            color: white;
            text-decoration: none;
            transition: all 0.3s ease;
            border-radius: 10px;
            margin: 2px 10px;
        }

        .dropdown-menu-1 a:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateX(5px);
        }

        .log-in-pannel {
            display: flex;
            gap: 15px;
        }

        .log-in a, .register a {
            color: #000D33;
            text-decoration: none;
            font-weight: 600;
            padding: 10px 20px;
            border-radius: 25px;
            transition: all 0.3s ease;
            display: block;
        }

        .log-in a {
            background: #FFB606;
            box-shadow: 0 8px 25px rgba(79, 172, 254, 0.3);
        }

        .register a {
            background: #FFB606;
            box-shadow: 0 8px 25px rgba(118, 1, 36, 0.2);
        }

        .log-in a:hover, .register a:hover {
            background-color: transparent;
            color: white !important;
            transform: translateY(-3px);
            box-shadow: 4px 12px 35px rgba(255, 2, 2, 0.59);
        }

        /* Sidebar Styles */
        .sidebar {
            position: fixed;
            top: 0;
            left: -300px;
            width: 300px;
            height: 100vh;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-right: 1px solid rgba(255, 255, 255, 0.2);
            transition: left 0.3s ease;
            z-index: 1001;
            padding: 60px 0 20px;
        }

        .sidebar.open {
            left: 0;
        }

        .close-btn {
            position: absolute;
            top: 20px;
            right: 20px;
            font-size: 30px;
            color: white;
            cursor: pointer;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
        }

        .close-btn:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: rotate(90deg);
        }

        .sidebar a {
            display: block;
            padding: 15px 30px;
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
            border-left: 3px solid transparent;
        }

        .sidebar a:hover {
            background: rgba(255, 255, 255, 0.1);
            border-left-color: #4facfe;
            padding-left: 40px;
        }

        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1000;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }

        .overlay.show {
            opacity: 1;
            visibility: visible;
        }

        /* Demo content */
        .demo-content {
            padding: 40px;
            text-align: center;
            color: white;
        }

        .demo-content h2 {
            font-size: 48px;
            margin-bottom: 20px;
            text-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
        }

        .demo-content p {
            font-size: 20px;
            opacity: 0.8;
            max-width: 600px;
            margin: 0 auto;
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .head-text {
                padding: 10px 20px;
                margin: 8px;
            }

            .name {
                margin-left: 20%;
            }

            .name h1 {
                font-size: 24px;
                letter-spacing: 1px;
            }

            .name p {
                font-size: 14px;
            }

            .nav-menu {
                padding: 5px 10px;
            }

            .fc {
                gap: 20px;
            }

            .f, .c {
                padding: 10px 16px;
                font-size: 14px;
            }

            .log-in a, .register a {
                padding: 8px 16px;
                font-size: 14px;
            }
        }

        @media (max-width: 768px) {
            .head-text {
                flex-direction: row;
                justify-content: flex-start;
                align-items: center;
                padding: 8px 15px;
                margin: 5px;
            }

            .logo {
                width: 50px;
                height: 50px;
                margin-right: 15px;
            }

            .name {
                margin-left: 0;
                text-align: center;
                flex: 1;
            }

            .name h1 {
                font-size: 20px;
                margin-bottom: 3px;
            }

            .name p {
                font-size: 12px;
            }

            .nav-menu {
                flex-wrap: wrap;
                padding: 5px 10px;
                gap: 15px;
            }

            .fc {
                display: none; /* Hide dropdown menus on mobile */
            }

            .nav-option {
                gap: 15px;
            }

            .f, .c {
                padding: 8px 14px;
                font-size: 13px;
                white-space: nowrap;
            }

            .log-in-pannel {
                gap: 10px;
            }

            .log-in a, .register a {
                padding: 8px 14px;
                font-size: 13px;
            }

            #home {
                padding: 8px 16px;
                font-size: 13px;
            }
        }

        @media (max-width: 576px) {
            .head-text {
                padding: 8px 10px;
                margin: 5px;
            }

            .logo {
                width: 45px;
                height: 45px;
                margin-right: 10px;
            }

            .name h1 {
                font-size: 16px;
                letter-spacing: 1px;
            }

            .name p {
                font-size: 10px;
            }

            .nav-menu {
                flex-direction: row;
                justify-content: space-between;
                align-items: center;
                gap: 10px;
                padding: 5px;
            }

            .nav-option {
                gap: 15px;
            }

            .fc {
                display: none; /* Keep hidden on smaller screens */
            }

            .f, .c {
                padding: 6px 12px;
                font-size: 12px;
            }

            .log-in-pannel {
                gap: 8px;
            }

            .log-in a, .register a {
                padding: 6px 12px;
                font-size: 12px;
            }

            #home {
                padding: 6px 12px;
                font-size: 12px;
            }

            .menu-icon {
                padding: 8px;
                font-size: 20px;
            }

            /* Adjust dropdown positioning on mobile */
            .dropdown-menu-1 {
                left: 50%;
                transform: translateX(-50%) translateY(-10px);
                min-width: 120px;
            }

            .dropdown-menu:hover .dropdown-menu-1,
            .club:hover .dropdown-menu-1 {
                transform: translateX(-50%) translateY(0);
            }

            .sidebar {
                width: 250px;
                left: -250px;
            }
        }

        @media (max-width: 420px) {
            .name h1 {
                font-size: 14px;
            }

            .name p {
                font-size: 9px;
            }

            .f, .c {
                padding: 5px 10px;
                font-size: 11px;
            }

            .log-in a, .register a {
                padding: 5px 10px;
                font-size: 11px;
            }

            .fc {
                gap: 8px;
            }

            .log-in-pannel {
                gap: 6px;
            }
        }

        /* Landscape mobile adjustments */
        @media (max-height: 500px) and (orientation: landscape) {
            .head-text {
                padding: 5px 15px;
            }

            .name h1 {
                font-size: 18px;
                margin-bottom: 2px;
            }

            .name p {
                font-size: 11px;
            }

            .nav-menu {
                padding: 3px 10px;
            }

            .logo {
                width: 40px;
                height: 40px;
            }
        }
    </style>
<body>
    <div class="navbar">
            <header class="nav-section">
        <div class="head-text">
            <div class="logo">
                <img src="kiu3.png" alt="Logo">
            </div>
            <div class="name">
                <h1>STUDENT INFORMATION</h1>
                <p id="varsity-name">UNIVERSITY OF KISHOREGANJ</p>
            </div>
        </div>
        <div class="nav-menu">
            <div class="nav-option">
                <div class="icon_home">
                    <i class="fa-solid fa-bars menu-icon" onclick="toggleSidebar()"></i>
                    <div class="sidebar" id="sidebar">
                        <span class="close-btn" onclick="toggleSidebar()">&times;</span>
                        <a href="#">Home</a>
                        <a href="#">About</a>
                        <a href="#">Services</a>
                        <a href="#">Contact</a>
                    </div>
                    <!-- Overlay -->
                    <div class="overlay" id="overlay" onclick="toggleSidebar()"></div>
                    <a id="home" href="/bsmru_student_information/">HOME</a>
                </div>
            </div>
            <div class="fc">
                <div class="dropdown-menu">
                    <div class="faculty">
                        <a href="#" class="f" id="ank">STUDENT INFORMATION</a>
                        <div class="dropdown-menu-1">
                            <a href="dept_of_cse.php" id="ank">CSE</a>
                            <a href="dept_of_math.php" id="ank">MAT</a>
                            <a href="dept_of_english.php" id="ank">ENG</a>
                            <a href="dept_of_accounting.php" id="ank">ACC</a>
                        </div>
                    </div>
                </div>
                <div class="club">
                    <a href="#" class="c " id="ank">CLUB</a>
                    <div class="dropdown-menu-1">
                        <a href="https://bpc.bsmru.ac.bd/" id="ank">BCPC</a>
                        <a href="#" id="ank">MAT</a>
                        <a href="#" id="ank">ENG</a>
                        <a href="#" id="ank">ACC</a>
                    </div>
                </div>
            </div>
            <div class="log-in-pannel">
                <div class="log-in">
                    <a id="log" href="link.php">LOG-IN</a>
                </div>
                <div class="register">
                    <a id="reg" href="register.php">REGISTER</a>
                </div>
            </div>
        </div>
    </header>
    </div>

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('overlay');
            
            sidebar.classList.toggle('open');
            overlay.classList.toggle('show');
        }
        // Add scroll effect to header
        window.addEventListener('scroll', function() {
            const header = document.querySelector('.nav-section');
            if (window.scrollY > 100) {
                header.style.background = 'rgba(255, 255, 255, 0.2)'; // Transparent white
                header.style.boxShadow = '0 12px 40px rgba(0, 0, 0, 0.2)';
            } else {
                header.style.background = '#002147'; // Solid blue color
                header.style.boxShadow = '0 8px 32px rgba(0, 0, 0, 0.1)';
            }
        });
    </script>
</body>
</html>
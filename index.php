<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agricultural Machinery</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #f0f8ff;
            color: #000;
            line-height: 1.6;
        }

        header {
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            color: white;
            padding: 1.5rem;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        nav {
            background-color: #1e3c72;
            padding: 1rem;
        }

        nav ul {
            display: flex;
            justify-content: center;
            list-style: none;
        }

        nav li {
            margin: 0 1.5rem;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        nav a:hover {
            color: #a8d0ff;
        }

        .container {
            max-width: 1200px;
            margin: auto;
            padding: 2rem;
        }

        .content,
        .contact-form {
            background-color: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 2rem;
        }

        h1,
        h2,
        h3 {
            margin-bottom: 1rem;
        }

        p {
            margin-bottom: 1rem;
            text-align: justify;
        }

        .highlight {
            background-color: #e6f2ff;
            padding: 1.5rem;
            border-left: 4px solid #2a5298;
            margin: 1.5rem 0;
        }

        label {
            font-weight: bold;
            color: #1e3c72;
            display: block;
            margin-bottom: 0.5rem;
        }

        input,
        textarea {
            width: 100%;
            padding: 0.75rem;
            margin-bottom: 1rem;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            color: white;
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background: linear-gradient(135deg, #2a5298, #3a6bc2);
        }

        footer {
            background-color: #1e3c72;
            color: white;
            padding: 2rem;
            text-align: center;
        }

        .cookie-consent {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: #2a5298;
            color: white;
            padding: 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 1000;
        }

        /* ✅ WhatsApp Floating Button */
        .whatsapp-float {
            position: fixed;
            bottom: 80px;
            right: 20px;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 2000;
            transition: transform 0.2s ease;
        }

        .whatsapp-float:hover {
            transform: scale(1.1);
        }

        @media (max-width: 768px) {
            nav ul {
                flex-direction: column;
            }
        }
    </style>
</head>

<body>

    <header>
        <h1>Agricultural Machinery</h1>
        <p>Modern equipment for efficient agriculture</p>
    </header>

    <nav>
        <ul>
            <li><a href="#about">About Us</a></li>
            <li><a href="#equipment">Machinery</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#contact">Contacts</a></li>
        </ul>
    </nav>

    <div class="container">
        <div class="content">
            <h2 id="about">Modern Agricultural Machinery</h2>
            <p>Agricultural machinery plays a key role in modern farming by improving efficiency and reducing labor
                costs.</p>

            <div class="highlight">
                <h3>Evolution of Machinery</h3>
                <p>From manual tools to GPS-enabled autonomous tractors, agriculture has transformed rapidly.</p>
            </div>

            <h3 id="equipment">Types of Machinery</h3>
            <p><strong>Tractors, Harvesters, Sprayers, Seeders</strong> — all optimized for productivity.</p>

            <h3 id="services">Maintenance & Service</h3>
            <p>Regular servicing ensures long equipment life and optimal performance.</p>
        </div>

        <div class="contact-form">
            <h2 id="contact">Feedback Form</h2>
            <form id="feedbackForm">
                <label>Your Name</label>
                <input type="text" required>

                <label>Email</label>
                <input type="email" required>

                <label>Message</label>
                <textarea rows="4" required></textarea>

                <button type="submit">Send Message</button>
            </form>
        </div>
    </div>

    <footer>
        <p>© 2023 Agricultural Machinery. All rights reserved.</p>
    </footer>

    <!-- Cookie Consent -->
    <div class="cookie-consent" id="cookieConsent">
        <p>We use cookies to improve website performance.</p>
        <button id="acceptCookies">Accept</button>
    </div>

    <!-- ✅ WhatsApp Button -->
    <a href="https://api.whatsapp.com/send?phone=918766212530" target="_blank" class="whatsapp-float" aria-label="Chat on WhatsApp">
        <svg viewBox="0 0 48 48" version="1.1" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
                <title>Whatsapp-color</title>
                <desc>Created with Sketch.</desc>
                <defs> </defs>
                <g id="Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Color-" transform="translate(-700.000000, -360.000000)" fill="#67C15E">
                        <path
                            d="M723.993033,360 C710.762252,360 700,370.765287 700,383.999801 C700,389.248451 701.692661,394.116025 704.570026,398.066947 L701.579605,406.983798 L710.804449,404.035539 C714.598605,406.546975 719.126434,408 724.006967,408 C737.237748,408 748,397.234315 748,384.000199 C748,370.765685 737.237748,360.000398 724.006967,360.000398 L723.993033,360.000398 L723.993033,360 Z M717.29285,372.190836 C716.827488,371.07628 716.474784,371.034071 715.769774,371.005401 C715.529728,370.991464 715.262214,370.977527 714.96564,370.977527 C714.04845,370.977527 713.089462,371.245514 712.511043,371.838033 C711.806033,372.557577 710.056843,374.23638 710.056843,377.679202 C710.056843,381.122023 712.567571,384.451756 712.905944,384.917648 C713.258648,385.382743 717.800808,392.55031 724.853297,395.471492 C730.368379,397.757149 732.00491,397.545307 733.260074,397.27732 C735.093658,396.882308 737.393002,395.527239 737.971421,393.891043 C738.54984,392.25405 738.54984,390.857171 738.380255,390.560912 C738.211068,390.264652 737.745308,390.095816 737.040298,389.742615 C736.335288,389.389811 732.90737,387.696673 732.25849,387.470894 C731.623543,387.231179 731.017259,387.315995 730.537963,387.99333 C729.860819,388.938653 729.198006,389.89831 728.661785,390.476494 C728.238619,390.928051 727.547144,390.984595 726.969123,390.744481 C726.193254,390.420348 724.021298,389.657798 721.340985,387.273388 C719.267356,385.42535 717.856938,383.125756 717.448104,382.434484 C717.038871,381.729275 717.405907,381.319529 717.729948,380.938852 C718.082653,380.501232 718.421026,380.191036 718.77373,379.781688 C719.126434,379.372738 719.323884,379.160897 719.549599,378.681068 C719.789645,378.215575 719.62006,377.735746 719.450874,377.382942 C719.281687,377.030139 717.871269,373.587317 717.29285,372.190836 Z"
                            id="Whatsapp"> </path>
                    </g>
                </g>
            </g>
        </svg>
    </a>

    <script>
        document.getElementById('acceptCookies').onclick = () => {
            document.getElementById('cookieConsent').style.display = 'none';
        };

        document.getElementById('feedbackForm').onsubmit = e => {
            e.preventDefault();
            alert('Thank you! We will contact you soon.');
            e.target.reset();
        };
    </script>

</body>

</html>
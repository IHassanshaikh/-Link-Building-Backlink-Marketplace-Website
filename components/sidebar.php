<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <!-- Sidebar for Mobile Navigation -->
    <div class="sidebar" id="sidebar">
      <!-- Company Logo -->
      <div class="sidebar-header">
        <img src="./src/assets/images/logo.PNG" alt="Company Logo" class="sidebar-logo" />
        <button class="close-btn" onclick="toggleSidebar()">✖</button>
      </div>

      <!-- Navigation Links -->
      <ul class="sidebar-menu">
        <li><a href="/">Home </a></li>
        <li>
          <p onclick="toggleSubSidebar(this)">
            Service <span class="arrow">&gt;</span>
          </p>
          <div class="sub-sidebar sb1" id="sub-sidebar">
            <div class="subbar-header">
              <span onclick="toggleMainSidebar(this)">
                <span class="arrow-left">&lt;</span>Main Menu
              </span>
              <button class="close-btn" onclick="toggleSidebar()">✖</button>
            </div>
            <h2 class="subbar-heading">Services</h2>
            <ul class="service-menu">
              <li>
                <span><a>Link Building</a>
                  <!-- Change all toggle buttons to pass 'this' -->
                  <span class="toggle-btn" onclick="toggleSubItems(this)">+</span></span>
                <ul class="sub-items">
                  <li><a href="#">Guest Posting Service</a></li>
                  <li><a href="#">Niche Edits Service (Link Insertions)</a></li>
                </ul>
              </li>
              <li>
                <span><a>Local SEO</a>
                  <span class="toggle-btn" onclick="toggleSubItems(this)">+</span></span>
                <ul class="sub-items">
                  <li><a href="#">Local Citation Building Services</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </li>

        <li>
          <p onclick="toggleSubSidebar(this)">
            Package <span class="arrow">&gt;</span>
          </p>
          <div class="sub-sidebar sb2" id="sub-sidebar">
            <div class="subbar-header">
              <span onclick="toggleMainSidebar(this)">
                <span class="arrow-left">&lt;</span>Main Menu
              </span>
              <button class="close-btn" onclick="toggleSidebar()">✖</button>
            </div>
            <h2 class="subbar-heading">Package</h2>
            <ul class="service-menu">
              <li>
                <span><a>Link Building</a>
                  <!-- Change all toggle buttons to pass 'this' -->
                  <span class="toggle-btn" onclick="toggleSubItems(this)">+</span></span>
                <ul class="sub-items">
                  <li><a href="#">DA50+ Package</a></li>
                  <li><a href="#">DA60+ Package</a></li>
                  <li><a href="#">DA70+ Package</a></li>
                </ul>
              </li>
              <li>
                <span><a>Local SEO</a>
                  <span class="toggle-btn" onclick="toggleSubItems(this)">+</span></span>
                <ul class="sub-items">
                  <li><a href="#">USA Local Citation Building Service</a></li>
                  <li><a href="#">Canada Local Citation Building Service </a></li>
                  <li><a href="#">UK Local Citation Building Service </a></li>
                  <li>
                    <a href="#">Australia Local Citation Building Service </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </li>

        <li>
          <p onclick="toggleSubSidebar(this)">
            Niches <span class="arrow">&gt;</span>
          </p>
          <div class="sub-sidebar sb3" id="sub-sidebar">
            <div class="subbar-header">
              <span onclick="toggleMainSidebar(this)">
                <span class="arrow-left">&lt;</span>Main Menu
              </span>
              <button class="close-btn" onclick="toggleSidebar()">✖</button>
            </div>
            <h2 class="subbar-heading">Niches</h2>
            <ul class="service-menu">
              <li><a href="">Agriculture & Farming</a></li>
              <li><a href="">Beauty</a></li>
              <li><a href="">Computers & Electronics</a></li>
              <li><a href="">Education</a></li>
              <li><a href="">E-commerce</a></li>
              <li><a href="">For Men</a></li>
              <li><a href="">General</a></li>
              <li><a href="">Internet & Telecommunication</a></li>
              <li><a href="">Magazines & Newspapers</a></li>
              <li><a href="">Others (Miscellaneous)</a></li>
              <li><a href="">Real Estate</a></li>
              <li><a href="">Social Media</a></li>
              <li><a href="">Wedding</a></li>
              <li><a href="">Animals & Pets</a></li>
              <li><a href="">Blockchain and Cryptocurrency</a></li>
              <li><a href="">Construction & Repairs</a></li>
              <li><a href="">Energy</a></li>
              <li><a href="">Family</a></li>
              <li><a href="">For Women</a></li>
              <li><a href="">Graphics & Design</a></li>
              <li><a href="">Jobs & Employment</a></li>
              <li><a href="">Manufacturing & Industry</a></li>
              <li><a href="">Parenting & Mommy</a></li>
              <li><a href="">Review Sites</a></li>
              <li><a href="">Sports</a></li>
              <li><a href="">Arts & Photography</a></li>
              <li><a href="">Books & Literature</a></li>
              <li><a href="">Crafts and DIY</a></li>
              <li><a href="">Entertainment</a></li>
              <li><a href="">Fashion</a></li>
              <li><a href="">Gadgets & Technology</a></li>
              <li><a href="">Health (Fitness)</a></li>
              <li><a href="">Legal</a></li>
              <li><a href="">Music & Instruments</a></li>
              <li><a href="">Personal Development</a></li>
              <li><a href="">Science</a></li>
              <li><a href="">Transport & Logistic</a></li>
              <li><a href="">Automobiles & Cars</a></li>
              <li><a href="">Business</a></li>
              <li><a href="">Culture & Society</a></li>
              <li><a href="">Environment & Nature</a></li>
              <li><a href="">Food</a></li>
              <li><a href="">Gaming</a></li>
              <li><a href="">Home Improvement</a></li>
              <li><a href="">Leisure and Hobbies</a></li>
              <li><a href="">News & Media</a></li>
              <li><a href="">Pharmacy</a></li>
              <li><a href="">Services</a></li>
              <li><a href="">Tourism & Travel</a></li>
              <li><a href="">Banking & Finance</a></li>
              <li><a href="">Casino (Gambling)</a></li>
              <li><a href="">Digital Marketing & Advertising</a></li>
              <li><a href="">Equipment</a></li>
              <li><a href="">For Children</a></li>
              <li><a href="">Gardening and Lawn Care</a></li>
              <li><a href="">Insurance</a></li>
              <li><a href="">Lifestyle</a></li>
              <li><a href="">Outdoors</a></li>
              <li><a href="">Politics</a></li>
              <li><a href="">Shopping</a></li>
              <li><a href="">Websites & Software Development</a></li>
            </ul>
          </div>
        </li>

        <li>
          <p onclick="toggleSubSidebar(this)">
            Sites <span class="arrow">&gt;</span>
          </p>
          <div class="sub-sidebar sb4" id="sub-sidebar">
            <div class="subbar-header">
              <span onclick="toggleMainSidebar(this)">
                <span class="arrow-left">&lt;</span>Main Menu
              </span>
              <button class="close-btn" onclick="toggleSidebar()">✖</button>
            </div>
            <h2 class="subbar-heading">Sites</h2>
            <ul class="service-menu">
              <li>
                <span></span><a href="">🔥Premium Guest Posting Sites | Top Tier Publishers List</a>
              </li>
              <li>
                <a href="">📈 List of Guest Posting Sites with Organic Traffic</a>
              </li>
              <li>
                <a href="">🌿 Top Sites for CBD, THC, Vaping, Cannabis Guest Posts</a>
              </li>
              <li>
                <a href="">🎰 Websites that accept Casino (Gambling) Guest Posts</a>
              </li>
              <li><a href="">🔗 Link Insertions (Niche Edits) Sites List</a></li>
              <li><a href="">❤️ Favorite Websites</a></li>
              <li><a href="">📚 All Publishers</a></li>
              <li>
                <a href="">🔝 Websites that accept Sidebar/Footer/Blogroll Backlinks</a>
              </li>
              <li><a href="">💡 100+ Organic Keywords Websites</a></li>
              <li>
                <a href="">₿ List of Websites that Accept Crypto Guest Posts</a>
              </li>
              <li>
                <a href="">⚡ Instant Article Publishing (20-25 Mins TAT Sites List)</a>
              </li>
              <li><a href="">🌍 Traffic Websites by Country</a></li>
            </ul>
          </div>
        </li>

        <li>
          <p onclick="toggleSubSidebar(this)">
            My Accounts <span class="arrow">&gt;</span>
          </p>
          <div class="sub-sidebar sb5" id="sub-sidebar">
            <div class="subbar-header">
              <span onclick="toggleMainSidebar(this)">
                <span class="arrow-left">&lt;</span>Main Menu
              </span>
              <button class="close-btn" onclick="toggleSidebar()">✖</button>
            </div>
            <h2 class="subbar-heading">My Accounts</h2>
            <ul class="service-menu">
              <li><span></span><a href="">Invoices</a></li>
              <li><span></span><a href="">Service orders</a></li>
            </ul>
          </div>
        </li>

        <li>
          <p onclick="toggleSubSidebar(this)">
            Tools <span class="arrow">&gt;</span>
          </p>
          <div class="sub-sidebar sb6" id="sub-sidebar">
            <div class="subbar-header">
              <span onclick="toggleMainSidebar(this)">
                <span class="arrow-left">&lt;</span>Main Menu
              </span>
              <button class="close-btn" onclick="toggleSidebar()">✖</button>
            </div>
            <h2 class="subbar-heading">Tools</h2>
            <ul class="service-menu">
              <li><span></span><a href="">Bulk DA PA Checker</a></li>
              <li><span></span><a href="">Case Converter</a></li>
            </ul>
          </div>
        </li>
      </ul>
    </div>

    <!-- Overlay (for closing sidebar when clicking outside) -->
    <div class="overlay" id="overlay" onclick="toggleSidebar()"></div>
</body>
</html>
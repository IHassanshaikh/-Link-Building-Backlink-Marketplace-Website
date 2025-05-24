<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Product</title>
  <link rel="stylesheet" href="../../style.css" />
  <link rel="stylesheet" href="./Product.css" />
  <link rel="stylesheet" href="../../css/Navbar/Header.css" />
  <link rel="stylesheet" href="../../css/Navbar/sidebar.css" />
  <link rel="stylesheet" href="../../css/Navbar/sub-sidebar.css" />
  <link rel="stylesheet" href="../../css/countryTraffic/Traffic.css" />
  <link rel="stylesheet" href="../../css/Footer/Footer.css" />
  <link rel="stylesheet" href="./Review.css" />
</head>

<body>
  <!-- Product Page Structure -->
  <div class="product-page">
    <!-- Header -->
    <header class="product-header">
      <div class="header-content">
        <img src="../../assets/images/logo.png" alt="Logo" class="logo" />
        <div class="header-icons">
          <img src="../../assets/svg/cart.svg" alt="Cart" class="icon" />
          <img src="../../assets/svg/profile.svg" alt="Profile" class="icon" />
        </div>
      </div>
    </header>

    <header class="Header pr-header">
      <div style="display: flex; gap: 10px">
        <!-- Hamburger Icon -->
        <img class="hamburger" src="../../assets/svg/hamburger.svg" alt="hamburger" onclick="toggleSidebar()" />
        <img class="Header_logo hidden" src="../../assets/images/logo.PNG" alt="Logo" width="230" />
      </div>
      <nav class="Navbar_nav">
        <ul>
          <li><a href="#">Home</a></li>
          <li class="service_nav">
            <a>Service</a><img src="../../assets/svg/next.svg" alt="" />
            <div class="Service_dropdown">
              <ul>
                <h2>Link Building</h2>
                <li><a href="#">Guest Posting Service</a></li>
                <li><a href="#">Niche Edits Service (Link Insertions)</a></li>
              </ul>

              <ul>
                <h2>Local SEO</h2>
                <li><a href="#">Local Citation Building Services</a></li>
              </ul>
            </div>
          </li>
          <li class="Package_nav">
            <a>Package</a><img src="../../assets/svg/next.svg" alt="" />
            <div class="Package_dropdown">
              <ul>
                <h2>Link Building</h2>
                <li><a href="#">DA50+ Package</a></li>
                <li><a href="#">DA60+ Package</a></li>
                <li><a href="#">DA70+ Package</a></li>
              </ul>

              <ul>
                <h2>Local SEO</h2>
                <li>
                  <a href="/usa-local-citation">USA Local Citation Building Service</a>
                </li>
                <li>
                  <a href="/canada-local-citation">Canada Local Citation Building Service</a>
                </li>
                <li>
                  <a href="/uk-local-citation">UK Local Citation Building Service</a>
                </li>
                <li>
                  <a href="/australia-local-citation">Australia Local Citation Building Service</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="Niche_nav">
            <a>Niches</a><img src="../../assets/svg/next.svg" alt="" />
            <div class="Niches_drop">
              <ul>
                <li><a href="#">Agriculture & Farming</a></li>
                <li><a href="#">Beauty</a></li>
                <li><a href="#">Computers & Electronics</a></li>
                <li><a href="#">Education</a></li>
                <li><a href="#">E-commerce</a></li>
                <li><a href="#">For Men</a></li>
                <li><a href="#">General</a></li>
                <li><a href="#">Internet & Telecommunication</a></li>
                <li><a href="#">Magazines & Newspapers</a></li>
                <li><a href="#">Others (Miscellaneous)</a></li>
                <li><a href="#">Real Estate</a></li>
                <li><a href="#">Social Media</a></li>
                <li><a href="#">Wedding</a></li>
              </ul>

              <ul>
                <li><a href="#">Animals & Pets</a></li>
                <li><a href="#">Blockchain and Cryptocurrency</a></li>
                <li><a href="#">Construction & Repairs</a></li>
                <li><a href="#">Energy</a></li>
                <li><a href="#">Family</a></li>
                <li><a href="#">For Women</a></li>
                <li><a href="#">Graphics & Design</a></li>
                <li><a href="#">Jobs & Employment</a></li>
                <li><a href="#">Manufacturing & Industry</a></li>
                <li><a href="#">Parenting & Mommy</a></li>
                <li><a href="#">Review Sites</a></li>
                <li><a href="#">Sports</a></li>
              </ul>
              <ul>
                <li><a href="#">Arts & Photography</a></li>
                <li><a href="#">Books & Literature</a></li>
                <li><a href="#">Crafts and DIY</a></li>
                <li><a href="#">Entertainment</a></li>
                <li><a href="#">Fashion</a></li>
                <li><a href="#">Gadgets & Technology</a></li>
                <li><a href="#">Health (Fitness)</a></li>
                <li><a href="#">Legal</a></li>
                <li><a href="#">Music & Instruments</a></li>
                <li><a href="#">Personal Development</a></li>
                <li><a href="#">Science</a></li>
                <li><a href="#">Transport & Logistic</a></li>
              </ul>
              <ul>
                <li><a href="#">Automobiles & Cars</a></li>
                <li><a href="#">Business</a></li>
                <li><a href="#">Culture & Society</a></li>
                <li><a href="#">Environment & Nature</a></li>
                <li><a href="#">Food</a></li>
                <li><a href="#">Gaming</a></li>
                <li><a href="#">Home Improvement</a></li>
                <li><a href="#">Leisure and Hobbies</a></li>
                <li><a href="#">News & Media</a></li>
                <li><a href="#">Pharmacy</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Tourism & Travel</a></li>
              </ul>

              <ul>
                <li><a href="#">Banking & Finance</a></li>
                <li><a href="#">Casino (Gambling)</a></li>
                <li><a href="#">Digital Marketing & Advertising</a></li>
                <li><a href="#">Equipment</a></li>
                <li><a href="#">For Children</a></li>
                <li><a href="#">Gardening and Lawn Care</a></li>
                <li><a href="#">Insurance</a></li>
                <li><a href="#">Lifestyle</a></li>
                <li><a href="#">Outdoors</a></li>
                <li><a href="#">Politics</a></li>
                <li><a href="#">Shopping</a></li>
                <li><a href="#">Websites & Software Development</a></li>
              </ul>
            </div>
          </li>
          <li class="Sites_nav">
            <a>Sites</a><img src="../../assets/svg/next.svg" alt="" />
            <div class="Site_drop">
              <ul>
                <li>
                  <a href="#">⭐ Premium Guest Posting Sites | Top Tier Publishers
                    List</a>
                </li>
                <li>
                  <a href="#">🌿 Top Sites for CBD, THC, Vaping, Cannabis Guest
                    Posts</a>
                </li>
                <li>
                  <a href="#">🔗 Link Insertions (Niche Edits) Sites List</a>
                </li>
                <li><a href="#">🔍 100+ Organic Keywords Websites</a></li>
                <li>
                  <a href="#">⚡ Instant Article Publishing (20-25 Mins TAT Sites
                    List)</a>
                </li>
              </ul>

              <ul>
                <li>
                  <a href="#">💯 List of Guest Posting Sites with Organic Traffic</a>
                </li>
                <li>
                  <a href="#">🎰 List of Websites that Accept Gambling, Casino Blog
                    Posts</a>
                </li>
                <li>
                  <a href="#">📶 Websites that accept Sidebar/Footer/Blogroll
                    Backlinks</a>
                </li>
                <li>
                  <a href="#">₿ List of Websites that Accept Crypto Guest Posts</a>
                </li>
                <li><a href="#">🌍 Traffic Websites by Country</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>
      <div class="Header_Buttons hidden pr-header-btn">
        <img src="../../assets/svg/cart.svg" alt="cart" />
        <img class="profile-svg" src="../../assets/svg/profile.svg" alt="profile" />
      </div>
    </header>

    <?php include('../../../components/sidebar.php'); ?>

    <!-- Breadcrumb -->
    <div class="breadcrumb">
      <a href="../../../index.">Home</a> / <span>Product</span>
    </div>

    <!-- Product Container -->
    <div class="product-container">
      <!-- Part 1: Image Gallery -->
      <div class="product-gallery">
        <div class="main-image">
          <img src="../../assets/images/product.jpg" alt="Jalantikus.com Example" />
        </div>
        <div class="thumbnail-grid">
          <div>
            <img src="../../assets/images/product.jpg" alt="Thumb 1" />
          </div>
          <div>
            <img src="../../assets/images/product2.jpg" alt="Thumb 2" />
          </div>
          <div>
            <img src="../../assets/images/product3.jpg" alt="Thumb 3" />
          </div>
        </div>
        <div class="product-details show-768px">
          <p>Publish Guest Post on jalantikus.com</p>
          <div class="price-row">
            <div class="price">$250</div>
            <div class="service-types">
              <span class="service-tag">📰 Content Placement</span>
              <span class="service-tag">🔗 Link Insertion</span>
            </div>
          </div>

          <div class="tat-row">
            <strong> 🕒 Estimated publication time (TAT):</strong> 7 days
          </div>

          <div class="Link_Stickers">
            <span class="Sticker">
              <span class="Sticker_img"><img src="../../assets/svg/moz.svg" alt="" width="35px" height="10px" /></span>
              <span class="Sticker_label">DA</span>
              <span class="qty">900 </span>
            </span>
            <!-- --------------------- -->
            <span class="Sticker">
              <img class="Sticker_img" src="../../assets/svg/SEEMRUSH.png" alt="SEEMRUSH" width="30px" height="15px" />
              <span class="Sticker_label">CF</span>
              <span class="qty">20k</span>
            </span>
            <!-- --------------------- -->
            <span class="Sticker">
              <span class="Sticker_img"><img src="../../assets/svg/logo_semrush.svg" alt="" height="15px"
                  width="75px" /></span>
              <span class="Sticker_label">RANK</span>
              <span class="qty">4.5M</span>
            </span>
            <!-- --------------------- -->
            <span class="Sticker">
              <span class="Sticker_img"><img src="../../assets/svg/moz.svg" alt="" width="35px" height="10px" /></span>
              <span class="Sticker_label">DA</span>
              <span class="qty">90k</span>
            </span>
            <!-- --------------------- -->
            <span class="Sticker">
              <span class="Sticker_img"><img src="../../assets/svg/ahref.svg" alt="" width="40px"
                  height="10px" /></span>

              <span class="Sticker_label">Keywords</span>
              <span class="qty">4.5k</span>
            </span>
            <!-- --------------------- -->
            <span class="Sticker">
              <span class="Sticker_img"><img src="../../assets/svg/moz.svg" alt="" width="35px" height="10px" /></span>
              <span class="Sticker_label">DA</span>
              <span class="qty">900 </span>
            </span>
            <!-- --------------------- -->
            <span class="Sticker">
              <img class="Sticker_img" src="../../assets/svg/SEEMRUSH.png" alt="SEEMRUSH" width="30px" height="15px" />
              <span class="Sticker_label">CF</span>
              <span class="qty">20k</span>
            </span>
            <!-- --------------------- -->
            <span class="Sticker">
              <span class="Sticker_img"><img src="../../assets/svg/logo_semrush.svg" alt="" height="15px"
                  width="75px" /></span>
              <span class="Sticker_label">RANK</span>
              <span class="qty">4.5M</span>
            </span>
            <!-- --------------------- -->
            <span class="Sticker">
              <span class="Sticker_img"><img src="../../assets/svg/moz.svg" alt="" width="35px" height="10px" /></span>
              <span class="Sticker_label">DA</span>
              <span class="qty">90k</span>
            </span>
            <!-- --------------------- -->
            <span class="Sticker">
              <span class="Sticker_img"><img src="../../assets/svg/ahref.svg" alt="" width="40px"
                  height="10px" /></span>

              <span class="Sticker_label">Keywords</span>
              <span class="qty">4.5k</span>
            </span>
            <!-- --------------------- -->
          </div>
        </div>
        <div class="slider-container">
          <h2 class="slider-heading">🌍 Top 5 Traffic Countries</h2>
          <div class="slider-item">
            <div class="info">USA - 90%</div>
            <input type="range" min="0" max="100" value="90" readonly />
          </div>
          <div class="slider-item">
            <div class="info">UK - 80%</div>
            <input type="range" min="0" max="100" value="80" readonly />
          </div>
          <div class="slider-item">
            <div class="info">Canada - 70%</div>
            <input type="range" min="0" max="100" value="70" readonly />
          </div>
          <div class="slider-item">
            <div class="info">Australia - 60%</div>
            <input type="range" min="0" max="100" value="60" readonly />
          </div>
          <div class="slider-item">
            <div class="info">Germany - 50%</div>
            <input type="range" min="0" max="100" value="50" readonly />
          </div>
          <div class="slider-item">
            <div class="info">France - 40%</div>
            <input type="range" min="0" max="100" value="40" readonly />
          </div>
        </div>
        <div class="slider-container">
          <h2 class="slider-heading">📈 Traffic by Sources</h2>
          <div class="slider-item">
            <div class="info">Search - 90%</div>
            <input type="range" min="0" max="100" value="90" readonly />
          </div>
          <div class="slider-item">
            <div class="info">Direct - 80%</div>
            <input type="range" min="0" max="100" value="80" readonly />
          </div>
          <div class="slider-item">
            <div class="info">Social - 70%</div>
            <input type="range" min="0" max="100" value="70" readonly />
          </div>
          <div class="slider-item">
            <div class="info">Refferals - 60%</div>
            <input type="range" min="0" max="100" value="60" readonly />
          </div>
          <div class="slider-item">
            <div class="info">Mail - 50%</div>
            <input type="range" min="0" max="100" value="50" readonly />
          </div>
          <div class="slider-item">
            <div class="info">Display - 40%</div>
            <input type="range" min="0" max="100" value="40" readonly />
          </div>
        </div>
      </div>

      <!-- Part 2: Product Details -->
      <div class="product-details">
        <p class="hidden-768p">Publish Guest Post on jalantikus.com</p>

        <div class="price-row hidden-768p">
          <div class="price">$250</div>
          <div class="service-types">
            <span class="service-tag">📰 Content Placement</span>
            <span class="service-tag">🔗 Link Insertion</span>
          </div>
        </div>

        <div class="tat-row hidden-768p">
          <strong class="hidden-768p"> 🕒 Estimated publication time (TAT):</strong> 7 days
        </div>

        <div class="Link_Stickers hidden-768p">
          <span class="Sticker">
            <span class="Sticker_img"><img src="../../assets/svg/moz.svg" alt="" width="35px" height="10px" /></span>
            <span class="Sticker_label">DA</span>
            <span class="qty">900 </span>
          </span>
          <!-- --------------------- -->
          <span class="Sticker">
            <img class="Sticker_img" src="../../assets/svg/SEEMRUSH.png" alt="SEEMRUSH" width="30px" height="15px" />
            <span class="Sticker_label">CF</span>
            <span class="qty">20k</span>
          </span>
          <!-- --------------------- -->
          <span class="Sticker">
            <span class="Sticker_img"><img src="../../assets/svg/logo_semrush.svg" alt="" height="15px"
                width="75px" /></span>
            <span class="Sticker_label">RANK</span>
            <span class="qty">4.5M</span>
          </span>
          <!-- --------------------- -->
          <span class="Sticker">
            <span class="Sticker_img"><img src="../../assets/svg/moz.svg" alt="" width="35px" height="10px" /></span>
            <span class="Sticker_label">DA</span>
            <span class="qty">90k</span>
          </span>
          <!-- --------------------- -->
          <span class="Sticker">
            <span class="Sticker_img"><img src="../../assets/svg/ahref.svg" alt="" width="40px" height="10px" /></span>

            <span class="Sticker_label">Keywords</span>
            <span class="qty">4.5k</span>
          </span>
          <!-- --------------------- -->
          <span class="Sticker">
            <span class="Sticker_img"><img src="../../assets/svg/moz.svg" alt="" width="35px" height="10px" /></span>
            <span class="Sticker_label">DA</span>
            <span class="qty">900 </span>
          </span>
          <!-- --------------------- -->
          <span class="Sticker">
            <img class="Sticker_img" src="../../assets/svg/SEEMRUSH.png" alt="SEEMRUSH" width="30px" height="15px" />
            <span class="Sticker_label">CF</span>
            <span class="qty">20k</span>
          </span>
          <!-- --------------------- -->
          <span class="Sticker">
            <span class="Sticker_img"><img src="../../assets/svg/logo_semrush.svg" alt="" height="15px"
                width="75px" /></span>
            <span class="Sticker_label">RANK</span>
            <span class="qty">4.5M</span>
          </span>
          <!-- --------------------- -->
          <span class="Sticker">
            <span class="Sticker_img"><img src="../../assets/svg/moz.svg" alt="" width="35px" height="10px" /></span>
            <span class="Sticker_label">DA</span>
            <span class="qty">90k</span>
          </span>
          <!-- --------------------- -->
          <span class="Sticker">
            <span class="Sticker_img"><img src="../../assets/svg/ahref.svg" alt="" width="40px" height="10px" /></span>

            <span class="Sticker_label">Keywords</span>
            <span class="qty">4.5k</span>
          </span>
          <!-- --------------------- -->
        </div>

        <div class="rules-row">
          📌 Publishing Rules:
          <ul class="rules-list">
            <li>🔗 No. of Backlinks: 2</li>
            <li>🔄 Link Validity: Permanent</li>
            <li>✅ DoFollow Backlinks</li>
            <li>📄 Article Length: 600 - 3000 words</li>
            <li><strong>Marked as Sponsored Post: Yes</strong></li>
            <li>
              Our editorial team may make changes to the title, Images, or
              content to maintain quality, website aesthetics, and SEO
              standards.
            </li>
          </ul>
        </div>

        <div class="editor-note">
          <strong>🗂️ Publisher Niches:</strong> Beauty, Family, Fashion, Food,
          General, Health
        </div>

        <div class="metrics-icons">
          <div>
            <span class="label"><img alt="Allowed Casino, Gambling?" src="../../assets/images/gambling.png" width="50px"
                loading="lazy" /></span>Gambling content allowed?: <br />
            <nobr><i class="icon" data-icon="❌"></i><b> No</b></nobr>
          </div>
          <div>
            <span class="label"><img alt="Allowed Crypto?" src="../../assets/images/crypto.png" width="50px"
                loading="lazy" /></span>Crypto content allowed?: <br />
            <nobr><i class="icon" data-icon="❌"></i><b> No</b></nobr>
          </div>
          <div class="l3">
            <span class="label"><img alt="Allowed CBD?" src="../../assets/images/cbc-content.png" width="50px"
                loading="lazy" /></span>CBD content allowed?: <br />
            <nobr><i class="icon" data-icon="❌"></i><b> No</b></nobr>
          </div>
        </div>

        <p class="special-note">
          <u>Note</u>: After checkout, you will be redirected to Requirement
          Page, where you can upload the
          <b>Article, Anchor Text, Target URL</b>, or any other details.
        </p>

        <div class="money-back-guarentee">
          <img src="../../assets/images/moneyback.png" alt="Money Protection Guarantee"
            title="Money Protection Guarantee" loading="lazy" />
          <p>
            <span class="title">MONEY PROTECTION GUARANTEE</span><br />
            <span>Guest Post Published or
              <a href="/refund-policy/" target="_blank">Your Money Back</a>.</span>
          </p>
        </div>

        <button class="cta-button">Add to Cart</button>
        <!-- Add right before </div> closing tag of product-details -->
        <div class="modal-overlay" id="modalOverlay">
          <div class="modal-content">
            <span class="close-modal">&times;</span>
            <h2>Contact Information</h2>
            <form id="contactForm">
              <div class="form-group">
                <label for="name">Name *</label>
                <input type="text" id="name" name="name" required>
              </div>
              <div class="form-group">
                <label for="email">Email *</label>
                <input type="email" id="email" name="email" required>
              </div>
              <div class="form-group">
                <label for="message">Message *</label>
                <textarea id="message" name="message" rows="4" required></textarea>
              </div>
              <button type="submit" class="submit-btn">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="tab-container">
      <div class="tab-buttons">
        <button class="tab-btn active" onclick="showTab('description')">
          Description
        </button>
        <button class="tab-btn" onclick="showTab('reviews')">
          Reviews (0)
        </button>
      </div>

      <!-- Description Tab Content -->
      <div id="description" class="tab-content active description-content">
        <p>High-Quality DoFollow Guest Posting on General Websites</p>

        <h3>Website Metrics:</h3>
        <ul>
          <li>Domain Authority (DA): <span class="highlight">83</span></li>
          <li>Page Authority (PA): <span class="highlight">56</span></li>
          <li>Domain Rating (DR): <span class="highlight">82</span></li>
          <li>Trust Flow (TF): <span class="highlight">26</span></li>
          <li>Citation Flow (CF): <span class="highlight">34</span></li>
          <li>Ahref Rank: <span class="highlight">10k-50k</span></li>
          <li>Link Type: <span class="highlight">DoFollow</span></li>
          <li>Link Validity: <span class="highlight">Permanent</span></li>
          <li>
            Number of Backlinks Allowed: <span class="highlight">3</span>
          </li>
          <li>
            Accept Foreign Language Anchor Text?:
            <span class="highlight">No</span>
          </li>
        </ul>

        <h3>Relevant Niche/Categories:</h3>
        <ul>
          <li>Beauty</li>
          <li>Family</li>
          <li>Fashion</li>
          <li>Food</li>
          <li>General</li>
          <li>Health</li>
        </ul>

        <h3>Submit Your Article:</h3>
        <p>
          If your article follows all publisher guidelines, we will post it in
          the relevant niche section of the website. This service offers a
          permanent DoFollow backlink guaranteed.
        </p>
        <p>The article must be:</p>
        <ul>
          <li>Unique</li>
          <li>Well-written</li>
          <li>Max of 3 backlinks per guest post</li>
          <li>Plagiarism-free</li>
          <li>Without any grammatical errors</li>
        </ul>

        <h3>A Professional Article Writing Service (Addon):</h3>
        <p>
          Our expert writers will research and write 100% manual,
          SEO-optimized, easy-to-read, plagiarism-free articles on any topic
          of your choice.
        </p>
        <p>Backlinks are included with anchor texts provided by you.</p>

        <h3>Benefits for Your Website:</h3>
        <p>
          Your website will get a powerful and permanent high-quality natural
          backlink, skyrocketing your website rank in Google and other search
          engines. Guest Posts on high DA and DR websites are among the most
          important factors in obtaining high Google positions as this pass
          quality link juice and creates authority in Google’s eyes. In
          addition, this powerful SEO link building helps to get more organic
          traffic to your website generating more leads, sales and
          conversions.
        </p>

        <p>Estimated Delivery Time: 7 Days</p>

        <p>
          If you have any questions related to our Guest Post Service, please
          visit our <a class="faq-link" href="#">FAQs</a>.Page regarding all
          doubts or questions about Guest Posting like What is Guest Posting
          Service, Why you should buy GuestPost Service and so on.
        </p>

        <!-- Add remaining description content here -->
      </div>

      <!-- Reviews Tab Content -->
      <div id="reviews" class="tab-content">
        <div class="reviews-container">
          <div class="rating-card">
            <div class="ratingcard-header">
              <h1>0.0</h1>
              <span>0 Publisher ratings</span>
            </div>
            <div class="rating-row">
              <span class="rating-number">5</span><span class="star">★</span>
              <div class="slider" data-value="5"></div>
            </div>
            <div class="rating-row">
              <span class="rating-number">4</span><span class="star">★</span>
              <div class="slider" data-value="4"></div>
            </div>
            <div class="rating-row">
              <span class="rating-number">3</span><span class="star">★</span>
              <div class="slider" data-value="3"></div>
            </div>
            <div class="rating-row">
              <span class="rating-number">2</span><span class="star">★</span>
              <div class="slider" data-value="2"></div>
            </div>
            <div class="rating-row">
              <span class="rating-number">1</span><span class="star">★</span>
              <div class="slider" data-value="1"></div>
            </div>
            <div class="rating-footer">
              <span>Review This Publisher</span>
              <small>Share your thoughts with other customers</small>
              <button class="cta-button" onclick="openModal()">Write a Review</button>
            </div>

            <!-- Modal -->
            <div id="loginModal" class="modal">
              <div class="modal-content">
                <span class="close" onclick="closeModal()">&times;</span>
                <h2>Login Required</h2>
                <p>Only logged in customers who have purchased this publisher may leave a review.</p>
                <!-- <button class="login-btn">Login</button> -->
              </div>
            </div>

          </div>

          <div class="existing-reviews">
            <h3>Recent Reviews</h3>
            <!-- Sample Review Cards -->
            <div class="review-card">
              <div class="review-header">
                <span class="user-name">John Doe</span>
                <span class="rating-stars">★★★★☆</span>
              </div>
              <p class="review-text">
                Great service! Fast delivery and high quality websites.
              </p>
            </div>

            <div class="review-card">
              <div class="review-header">
                <span class="user-name">Jane Smith</span>
                <span class="rating-stars">★★★★★</span>
              </div>
              <p class="review-text">
                Excellent results, helped improve our search rankings
                significantly.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- TRAFFIC  -->
    <div class="traffic">
      <h1 class="traffic-heading">
        Traffic Websites <span>by Country</span>
      </h1>

      <div class="country-buttons">
        <button class="country-button">United States</button>
        <button class="country-button">Canada</button>
        <button class="country-button">United Kingdom</button>
        <button class="country-button">Australia</button>
        <button class="country-button">Germany</button>
        <button class="country-button">France</button>
        <button class="country-button">Italy</button>
        <button class="country-button">Spain</button>
        <button class="country-button">India</button>
        <button class="country-button">Brazil</button>
        <button class="country-button">Mexico</button>
        <button class="country-button">China</button>
        <button class="country-button">Japan</button>
        <button class="country-button">Japan</button>
        <button class="country-button">Japan</button>
        <button class="country-button">Japan</button>
        <button class="country-button">Japan</button>
        <button class="country-button">Japan</button>
        <button class="country-button">Japan</button>
        <button class="country-button">Japan</button>
        <button class="country-button">Japan</button>
        <button class="country-button">Japan</button>
        <button class="country-button">Japan</button>
        <button class="country-button">Japan</button>
        <button class="country-button">Japan</button>
        <button class="country-button">Japan</button>
        <button class="country-button">Japan</button>
        <button class="country-button">Japan</button>
        <button class="country-button">Japan</button>
        <button class="country-button">Japan</button>
        <button class="country-button">Japan</button>
        <button class="country-button">Japan</button>
        <button class="country-button">Japan</button>
        <button class="country-button">Japan</button>
        <button class="country-button">Japan</button>
        <button class="country-button">Japan</button>
        <button class="country-button">Japan</button>
        <button class="country-button">Russia</button>
        <button class="country-button">South Africa</button>
      </div>
    </div>

    <!-- FOOTER  -->
    <footer class="footer">
      <div class="copyright-line"></div>
      <!-- Line above -->
      <div class="footer-container">
        <!-- Section 1: Larger Width -->
        <div class="footer-section fs1">
          <img src="../../assets/images/logo.png" alt="Company Logo" class="footer-logo" />
          <p class="footer-description">
            GUESTPOSTLINKS offers straightforward, fast, and cheaper
            in-content High-Quality Contextual whitehat backlinks from High
            Authority relevant niche websites. High-Quality backlinks help
            increase search engine rankings and get more traffic, sales, and
            leads for your targeted keywords.
          </p>
          <a href="mailto:info@example.com" class="footer-email">info@example.com</a>
          <div class="social-icons">
            <a href="#"><img src="../../assets/svg/facebook.svg" alt="Facebook" /></a>
            <a href="#"><img src="../../assets/svg/linkedin.svg" alt="LinkedIn" /></a>
            <a href="#"><img src="../../assets/svg/skype.svg" alt="Skype" /></a>
            <a href="#"><img src="../../assets/svg/telegram.svg" alt="Telegram" /></a>
            <a href="#"><img src="../../assets/svg/whatsapp.svg" alt="Whatsapp" /></a>
          </div>
        </div>

        <!-- Section 2: Smaller Width -->
        <div class="footer-section fs2">
          <h3>Services</h3>
          <ul class="footer-links">
            <li><a href="#">Guest Posting Service</a></li>
            <li><a href="#">Niche Edits Service (Link Insertions)</a></li>
            <li><a href="#">Guest Posting Sites List</a></li>
          </ul>
          <h3>SEO Tools</h3>
          <ul class="footer-links">
            <li><a href="#">Bulk DA PA Checker</a></li>
            <li><a href="#">Case Converter</a></li>
          </ul>
        </div>

        <!-- Section 3: Smaller Width -->
        <div class="footer-section fs3">
          <h3>Resources</h3>
          <ul class="footer-links">
            <li><a href="#">Blog</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
          <h3>Legal</h3>
          <ul class="footer-links">
            <li><a href="#">Terms of Use</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Refund Policy</a></li>
          </ul>
        </div>

        <!-- Section 4: Larger Width -->
        <div class="footer-section fs4">
          <h3>Latest Blogs</h3>
          <p class="latest-blogs">
            160+ SaaS Directories Sites List to Submit Your Product
          </p>
          <p class="latest-blogs">
            Semrush Authority Score Now Integrated: A Smarter Way to Choose
            Publishers
          </p>
          <p class="latest-blogs">
            Guest Post Backlinks: What They Are and Why They Matter for Your
            SEO
          </p>
          <p class="latest-blogs">
            Guest Posts vs. Niche Edits: Which Link-Building Strategy Will
            Boost Your Organic Traffic?
          </p>
          <p class="latest-blogs">
            300+ Business Listing Sites [High DA] You Shouldn’t Miss in 2025
          </p>

          <h3>We Accept</h3>
          <div class="payment-logos">
            <img src="../../assets/images/card.png" alt="Visa" />
            <img src="../../assets/images/coins.png" alt="bitcoins" />
          </div>
        </div>
      </div>

      <div class="copyright-section">
        <div class="copyright-line"></div>
        <!-- Line above -->
        <p class="copyright-text">
          All product names, logos, and brands are the property of their
          respective owners. All company, product, and service names used in
          this website are for identification purposes only. Use of these
          names, logos, and brands does not imply endorsement.
        </p>
        <p class="copyright-info">
          <strong>FORTUNE DIGITAL INNOVATIONS</strong> | © Copyright 2022
          <strong>GUESTPOSTLINKS.NET</strong>
        </p>
      </div>
    </footer>
  </div>
</body>
<script src="./Product.js"></script>
<script src="../../css/Navbar/header.js"></script>

</html>
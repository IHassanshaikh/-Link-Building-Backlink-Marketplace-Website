// ✅ Define toggleSidebar globally
window.toggleSidebar = function () {
  const sidebar = document.getElementById("sidebar");
  const overlay = document.getElementById("overlay");

  if (!sidebar || !overlay) {
    console.error("Sidebar or overlay element not found!");
    return;
  }

  sidebar.classList.toggle("active");
  overlay.classList.toggle("active");

  // Disable scrolling when sidebar is open
  if (sidebar.classList.contains("active")) {
    document.body.style.overflow = "hidden";
  } else {
    document.body.style.overflow = "auto";
  }
};

window.toggleSubSidebar = function () {
  const subSidebar = document.getElementById("sub-sidebar");

  if (!subSidebar) {
    console.error("Sub-sidebar element not found!");
    return;
  }

  // Debugging
  console.log("Toggling sub-sidebar");

  subSidebar.classList.toggle("active");

  // Slide in effect
  if (subSidebar.classList.contains("active")) {
    subSidebar.style.transform = "translateX(0)"; // Bring it in
  } else {
    subSidebar.style.transform = "translateX(107%)"; // Move it out
  }
};

// Close sub-sidebar
window.toggleSubSidebar = function (element) {
  const parentLi = element.closest('li');
  const subSidebar = parentLi.querySelector('.sub-sidebar');

  // Close all other sub-sidebars
  document.querySelectorAll('.sub-sidebar').forEach(sb => {
    if (sb !== subSidebar) sb.classList.remove('active');
  });

  subSidebar.classList.toggle('active');
};

// Add this to close sub-sidebars when clicking close button
document.querySelectorAll('.sub-sidebar .close-btn').forEach(btn => {
  btn.addEventListener('click', (e) => {
    e.stopPropagation();
    btn.closest('.sub-sidebar').classList.remove('active');
  });
});

// Updated JavaScript
window.toggleSubItems = function (clickedElement) {
  // Get parent list item of the clicked button
  const parentLi = clickedElement.closest('li');

  // Find the specific sub-items and toggle button within this parent
  const subItems = parentLi.querySelector('.sub-items');
  const toggleBtn = parentLi.querySelector('.toggle-btn');

  if (subItems.classList.contains('active')) {
    // Collapse if open
    subItems.classList.remove('active');
    toggleBtn.textContent = "+";
  } else {
    // Expand if closed
    subItems.classList.add('active');
    toggleBtn.textContent = "-";
  }
};


// Close other open submenus
document.querySelectorAll('.sub-items.active').forEach(openSubmenu => {
  if (openSubmenu !== subItems) {
    openSubmenu.classList.remove('active');
    openSubmenu.closest('li').querySelector('.toggle-btn').textContent = "+";
  }
});


// Add this function
window.toggleMainSidebar = function (element) {
  const subSidebar = element.closest('.sub-sidebar');
  subSidebar.classList.remove('active');

  // Optional: Add main sidebar animation
  const mainSidebar = document.getElementById('sidebar');
  mainSidebar.style.transform = 'translateX(0)';
};

// Update your existing toggleSubSidebar function
window.toggleSubSidebar = function (element) {
  const parentLi = element.closest('li');
  const subSidebar = parentLi.querySelector('.sub-sidebar');
  const mainSidebar = document.getElementById('sidebar');

  // Close all other sub-sidebars
  document.querySelectorAll('.sub-sidebar').forEach(sb => {
    if (sb !== subSidebar) sb.classList.remove('active');
  });

  // Animate main sidebar slightly left
  mainSidebar.style.transform = 'translateX(0%)';
  subSidebar.classList.add('active');
};

function initNavbar() {
  const navbar = document.querySelector(".Header");

  if (!navbar) {
    console.error("Navbar element not found! Retrying...");
    setTimeout(initNavbar, 100);
    return;
  }

  window.addEventListener("scroll", function () {
    if (window.scrollY > 300) {
      navbar.classList.add("fixed");
    } else {
      navbar.classList.remove("fixed");
    }
  });

  console.log("Navbar script initialized!");
}

document.addEventListener("DOMContentLoaded", async () => {
  try {
    console.log("Loading components...");

    initNavbar(); // Initialize navbar after it's loaded

    console.log("All components loaded successfully!");
  } catch (error) {
    console.error("Error loading components:", error);
  }
});

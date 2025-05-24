document.querySelectorAll('.thumbnail-grid img').forEach(thumb => {
  thumb.addEventListener('click', (e) => {
    const mainImg = document.querySelector('.main-image img');
    mainImg.src = e.target.src;
    mainImg.alt = e.target.alt;
  });
});

// Add service tag selection
document.querySelectorAll('.service-tag').forEach(tag => {
  tag.addEventListener('click', () => {
    document.querySelectorAll('.service-tag').forEach(t => t.classList.remove('active'));
    tag.classList.add('active');

    // Update price based on selection if needed
    const priceElement = document.querySelector('.price');
    priceElement.textContent = tag.textContent === 'Content Replacement' ? '$250' : '$300';
  });
});


// for Review 
function showTab(tabName) {
  // Hide all tab contents
  document.querySelectorAll('.tab-content').forEach(content => {
    content.classList.remove('active');
  });

  // Remove active class from all buttons
  document.querySelectorAll('.tab-btn').forEach(btn => {
    btn.classList.remove('active');
  });

  // Show selected tab content
  document.getElementById(tabName).classList.add('active');

  // Add active class to clicked button
  event.currentTarget.classList.add('active');
}

// Open Modal
function openModal() {
  document.getElementById("loginModal").style.display = "flex";
}

// Close Modal
function closeModal() {
  document.getElementById("loginModal").style.display = "none";
}

// Close modal if clicked outside of content
window.onclick = function (event) {
  let modal = document.getElementById("loginModal");
  if (event.target === modal) {
    modal.style.display = "none";
  }
};

document.addEventListener('DOMContentLoaded', function () {
  const ctaButton = document.querySelector('.cta-button');
  const modalOverlay = document.getElementById('modalOverlay');
  const closeModalButton = document.querySelector('.close-modal');

  // Function to close the modal
  function closeModal() {
    modalOverlay.style.display = 'none';
  }

  // Open modal on CTA button click
  ctaButton.addEventListener('click', function (e) {
    e.preventDefault();
    modalOverlay.style.display = 'flex';
  });

  // Close modal on close button click
  closeModalButton.addEventListener('click', closeModal);

  // Close modal when clicking outside the modal content
  modalOverlay.addEventListener('click', function (e) {
    if (e.target === modalOverlay) {
      closeModal();
    }
  });

  // Close modal with Escape key
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') {
      closeModal();
    }
  });
});


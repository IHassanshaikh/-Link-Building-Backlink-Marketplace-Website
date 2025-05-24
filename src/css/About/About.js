document.addEventListener('DOMContentLoaded', () => {
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        document.querySelector('.about-left').classList.add('animate');
        document.querySelector('.about-right').classList.add('animate');
      }
    });
  }, {
    threshold: 0.2 // Trigger when 20% of section is visible
  });

  observer.observe(document.getElementById('about-section'));
});
<footer class="site-footer">
    <div class="container">
      <div class="footer-content">
        <div class="footer-logo">
          <img src="img/logo-puutarhaliike-neilikka-sm.png" alt="Logo">
        </div>
        <div class="footer-links">
          <ul>
            <li><a href="#">Etusivu</a></li>
            <li><a href="#">Tuotteet</a></li>
            <li><a href="#">Yhteystiedot</a></li>
          </ul>
        </div>
      </div>
      <div class="footer-bottom">
        <p>&copy; 2023 Puutarha Oy. Kaikki oikeudet pidätetään.</p>
      </div>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>  
  <script>
    // Add scroll effect for shrinking navbar
    window.addEventListener('scroll', function() {
      const navbar = document.querySelector('.navbar');
      if (window.scrollY > 10) {
        navbar.classList.add('navbar-shrink');
      } else {
        navbar.classList.remove('navbar-shrink');
      }
    });
  </script>
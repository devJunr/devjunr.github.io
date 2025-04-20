// Theme Toggle Functionality
document.addEventListener("DOMContentLoaded", () => {
    const themeToggle = document.getElementById("theme-toggle")
    const themeIcon = themeToggle.querySelector("i")
  
    // Check for saved theme preference or use device preference
    const savedTheme = localStorage.getItem("theme")
    const prefersDark = window.matchMedia("(prefers-color-scheme: dark)").matches
  
    if (savedTheme === "dark" || (!savedTheme && prefersDark)) {
      document.documentElement.setAttribute("data-theme", "dark")
      themeIcon.classList.remove("fa-moon")
      themeIcon.classList.add("fa-sun")
    }
  
    // Toggle theme on button click
    themeToggle.addEventListener("click", () => {
      const currentTheme = document.documentElement.getAttribute("data-theme")
  
      if (currentTheme === "dark") {
        document.documentElement.removeAttribute("data-theme")
        localStorage.setItem("theme", "light")
        themeIcon.classList.remove("fa-sun")
        themeIcon.classList.add("fa-moon")
      } else {
        document.documentElement.setAttribute("data-theme", "dark")
        localStorage.setItem("theme", "dark")
        themeIcon.classList.remove("fa-moon")
        themeIcon.classList.add("fa-sun")
      }
    })
  
    // Navbar active link update on scroll
    const sections = document.querySelectorAll("section")
    const navLinks = document.querySelectorAll(".nav-link")
  
    window.addEventListener("scroll", () => {
      let current = ""
  
      sections.forEach((section) => {
        const sectionTop = section.offsetTop
        const sectionHeight = section.clientHeight
  
        if (pageYOffset >= sectionTop - sectionHeight / 3) {
          current = section.getAttribute("id")
        }
      })
  
      navLinks.forEach((link) => {
        link.classList.remove("active")
        if (link.getAttribute("href") === `#${current}`) {
          link.classList.add("active")
        }
      })
  
      // Show/hide back to top button
      const backToTop = document.querySelector(".back-to-top")
      if (window.pageYOffset > 300) {
        backToTop.classList.add("active")
      } else {
        backToTop.classList.remove("active")
      }
    })
  
    // Navbar collapse on link click (mobile)
    const navLinks2 = document.querySelectorAll(".nav-link")
    const navbarCollapse = document.querySelector(".navbar-collapse")
  
    navLinks2.forEach((link) => {
      link.addEventListener("click", () => {
        if (navbarCollapse.classList.contains("show")) {
          navbarCollapse.classList.remove("show")
        }
      })
    })
  
    // Form submission
    const contactForm = document.getElementById("contact-form")
  
    if (contactForm) {
      contactForm.addEventListener("submit", (e) => {
        e.preventDefault()
  
        // Get form values
        const name = document.getElementById("name").value
        const email = document.getElementById("email").value
        const subject = document.getElementById("subject").value
        const message = document.getElementById("message").value
  
        // Here you would typically send the form data to a server
        // For demonstration, we'll just log it and show an alert
        console.log("Form submitted:", { name, email, subject, message })
  
        // Show success message
        alert("Mensagem enviada com sucesso! Obrigado por entrar em contato.")
  
        // Reset form
        contactForm.reset()
      })
    }
  
    // Add animation on scroll
    const animateOnScroll = () => {
      const elements = document.querySelectorAll(".skill-card, .project-card, .about-img, .contact-info, .contact-form")
  
      elements.forEach((element) => {
        const elementPosition = element.getBoundingClientRect().top
        const windowHeight = window.innerHeight
  
        if (elementPosition < windowHeight - 100) {
          element.style.opacity = "1"
          element.style.transform = "translateY(0)"
        }
      })
    }
  
    // Set initial state for animation
    const elementsToAnimate = document.querySelectorAll(
      ".skill-card, .project-card, .about-img, .contact-info, .contact-form",
    )
    elementsToAnimate.forEach((element) => {
      element.style.opacity = "0"
      element.style.transform = "translateY(20px)"
      element.style.transition = "opacity 0.5s ease, transform 0.5s ease"
    })
  
    // Run animation on load and scroll
    window.addEventListener("load", animateOnScroll)
    window.addEventListener("scroll", animateOnScroll)
  })
  
// <!-- Progress bar script  -->
    
      window.addEventListener("scroll", () => {
        const scrollTop = window.scrollY;
        const height =
          document.documentElement.scrollHeight - window.innerHeight;

        const progress = (scrollTop / height) * 100;

        document.getElementById("progressBar").style.width = progress + "%";
      });
    
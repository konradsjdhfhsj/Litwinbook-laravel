      //tryb ciemny
      const Bnt = document.getElementById("nocdzien");
      const emotka = document.getElementById("emotka");
      const stan = localStorage.getItem("stan");
      
      if(stan === "dark"){
        document.documentElement.classList.add("dark");
        Bnt.checked = true;
        emotka.innerText = "🌑";
      } else {
        document.documentElement.classList.remove("dark");
        Bnt.checked = false;
        emotka.innerText = "☀️";
      }
      //localstorage zapamietywanie zmian
      Bnt.addEventListener("change", () =>{
        if(Bnt.checked){
          document.documentElement.classList.add("dark");
          emotka.innerText = "🌑";
          localStorage.setItem("stan", "dark");
        }else{
          document.documentElement.classList.remove("dark");
          emotka.innerText = "☀️";
          localStorage.setItem("stan", "light");
        }
      });
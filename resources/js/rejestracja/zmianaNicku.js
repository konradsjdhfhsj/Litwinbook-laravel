/*
      //zmiana nicku skrypt
        document.addEventListener("DOMContentLoaded", () => {
    const formNazwa = document.getElementById("nazwa_form");
    const aktNazwa = document.getElementById("aktualna_nazwa");
    const nowNazwa = document.getElementById("now_nazwa");
    const pasNazwa = document.getElementById("nazwa_haslo");
    const sumNazwa = document.getElementById("nazwa_sumbit");

    sumNazwa.addEventListener("click", (event) => {
        event.preventDefault();
        const nowNazwaValue = nowNazwa.value;
        const isDark = document.documentElement.classList.contains("dark");
        //animaCJE swal
        Swal.fire({
            title: "Jesteś pewien?",
            text: `Po zmianie Twoim nickiem będzie ${nowNazwaValue}`,
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            cancelButtonText: "Anuluj",
            confirmButtonText: "Zmień!",
            background: isDark ? "#1f2937" : "#ffffff",
            color: isDark ? "white" : "#1f2937"
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    title: "Zmieniono!",
                    text: "Twój nick został zmieniony.",
                    icon: "success",
                    timer: 450,
                    background: isDark ? "#1f2937" : "#ffffff",
                    color: isDark ? "white" : "#1f2937",
                    showConfirmButton: false
                }).then(() => {
                    formNazwa.submit();
                });
            }
        });
    });
});
*/
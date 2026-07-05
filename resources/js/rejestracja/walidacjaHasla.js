document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("form-rej");
    const haslo = document.getElementById("haslo");
    const isDark = document.documentElement.classList.contains("dark");

    if (!form || !haslo) return;

    form.addEventListener("submit", (event) => {
        event.preventDefault();

        let message = "";

        const pass = haslo.value;

        if (pass.length < 4) {
            message += "Hasło musi zawierać co najmniej 4 znaki.\n";
        }

        if (!/\d/.test(pass)) {
            message += "Hasło musi zawierać cyfrę.\n";
        }

        if (message) {
            Swal.fire({
                icon: "error",
                title: "Błędy w haśle",
                text: message,
                background: isDark ? "#1f2937" : "#ffffff",
                color: isDark ? "white" : "#1f2937"
            });
        } else {
            Swal.fire({
                icon: "success",
                title: "Konto stworzone",
                timer: 1500,
                showConfirmButton: false
            }).then(() => {
                form.submit();
            });
        }
    });
});
import Swal from "sweetalert2";
import "preline";

window.Swal = Swal;

document.addEventListener("livewire:navigated", () => {
    window.HSStaticMethods.autoInit();
});

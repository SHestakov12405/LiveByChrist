function showToast(message, type = "info") {
    const container = document.getElementById("toast-container");
    const toast = document.createElement("div");

    const styles = {
        success: "bg-green-500",
        error: "bg-red-500",
        info: "bg-blue-500",
    };

    toast.className = `
        flex items-center px-4 py-3 rounded-lg shadow-lg text-white 
        ${styles[type]} opacity-0 translate-y-2 transition-all duration-500 ease-out
    `;

    // Иконка + текст
    toast.innerHTML = `
        <span class="mr-2">
            ${type === "success" ? "✅" : type === "error" ? "❌" : "ℹ️"}
        </span>
        <span class="flex-1">${message}</span>
    `;

    container.appendChild(toast);

    // Плавное появление
    setTimeout(() => {
        toast.classList.remove("opacity-0", "translate-y-2");
        toast.classList.add("opacity-100", "translate-y-0");
    }, 50);

    // Плавное исчезновение и удаление
    setTimeout(() => {
        toast.classList.remove("opacity-100", "translate-y-0");
        toast.classList.add("opacity-0", "translate-y-2");
        setTimeout(() => toast.remove(), 500);
    }, 5000);
}
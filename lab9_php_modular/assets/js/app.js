// Highlight menu yang sedang aktif
document.addEventListener("DOMContentLoaded", () => {
  const links = document.querySelectorAll("nav a");
  const currentPage = window.location.href;

  links.forEach((link) => {
    if (currentPage.includes(link.getAttribute("href"))) {
      link.classList.add("active");
    }
  });
});

// Validasi form otomatis untuk halaman Add & Edit
function validateForm(formId) {
  const form = document.getElementById(formId);
  if (!form) return;

  form.addEventListener("submit", function (e) {
    const inputs = form.querySelectorAll(
      "input[type='text'], input[type='number']"
    );

    for (let input of inputs) {
      if (input.value.trim() === "") {
        alert("Semua field wajib diisi!");
        input.focus();
        e.preventDefault();
        return false;
      }
    }
  });
}

// Konfirmasi delete global
function confirmDelete(url) {
  if (confirm("Yakin ingin menghapus data ini?")) {
    window.location = url;
  }
}

let a = 1;

const plus = document.querySelector(".plus");
minus = document.querySelector(".minus");
num = document.querySelector(".num");

plus.addEventListener("click", () => {
    a++;
    a = (a < 10) ? "0" + a : a;
    num.innerText = a;
});

minus.addEventListener("click", () => {
    if (a > 1) {
        a--;
        a = (a < 10) ? "0" + a : a;
        num.innerText = a;
    }
});

document.addEventListener('DOMContentLoaded', () => {
    const productButtons = document.querySelectorAll('#product-card');
    const prodOverview = document.getElementById('prod-overview');
    const productsGrid = document.getElementById('products-grid');

    productButtons.forEach(button => {
        button.addEventListener('click', () => {
            productsGrid.style.display = 'none';
            prodOverview.classList.add('active'); // Show #prod-overview
            productsGrid.style.opacity = 0.5; // Dim the grid for focus
        });
    });

    // Optional: Add a close button or click outside to close
    prodOverview.addEventListener('click', (e) => {
        if (e.target === prodOverview) { // Close only when clicking outside
            a = 1;
            num.innerText = "0" + a;
            productsGrid.style.display = 'grid';
            prodOverview.classList.remove('active'); // Hide #prod-overview
            productsGrid.style.opacity = 1; // Restore grid opacity
        }
    });
});

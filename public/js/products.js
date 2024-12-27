
// Filter produk berdasarkan kategori
function filterByCategory(category) {
	let products = document.querySelectorAll('.product-card');

	products.forEach(product => {
		if (category === 'all' || product.dataset.category === category) {
		product.style.display = 'block';
		} else {
		product.style.display = 'none';
		}
	});
}

// Cari produk berdasarkan nama
function filterProducts() {
	let input = document.getElementById('searchInput').value.toLowerCase();
	let products = document.querySelectorAll('.product-card');
	products.forEach(product => {
	let title = product.querySelector('.card-title').textContent.toLowerCase();
		if (title.includes(input)) {
			product.style.display = 'block';
			} else {
			product.style.display = 'none';
		}
	});
}
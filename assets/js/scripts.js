document.getElementById('openModal').addEventListener('click', function () {
    document.getElementById('modal').style.display = 'block';
});

document.querySelector('.close').addEventListener('click', function () {
    document.getElementById('modal').style.display = 'none';
});
document.addEventListener('click', function (event) {
    if (event.target == document.getElementById('modal')) {
        document.getElementById('modal').style.display = 'none';
    }
});
const reviewForm = document.querySelector('.review-form');
const reviewContainer = document.querySelector('.review-container');

reviewForm.addEventListener('submit', (e) => {
    e.preventDefault();
    const name = document.querySelector('#name').value;
    const review = document.querySelector('#review').value;
    const reviewHTML = `
        <div class="review">
            <h3>${name}</h3>
            <p>${review}</p>
        </div>
    `;
    reviewContainer.innerHTML += reviewHTML;
    reviewForm.reset();
});
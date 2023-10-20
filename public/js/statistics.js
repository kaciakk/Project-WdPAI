const likeButtons = document.querySelectorAll(".fa-heart");


function giveLike() {
    const likes = this;
    const container = likes.parentElement.parentElement.parentElement;
    const id = container.getAttribute("id");

    fetch(`/like/${id}`)
        .then(function () {

            likes.innerHTML = parseInt(likes.innerHTML) + 1;
        })
}

likeButtons.forEach(button => button.addEventListener("click", giveLike));
const wrapper = document.querySelector(".wrapper");
const carouselint = document.querySelector(".carouselint");
const firstCardWidth = carouselint.querySelector(".card").offsetWidth;
const arrowBtns = document.querySelectorAll(".wrapper i");
const carouselintChildrens = [...carouselint.children];

let isDragging = false, isAutoPlay = true, startX, startScrollLeft, timeoutId;

// Get the number of cards that can fit in the carouselint at once
let cardPerView = Math.round(carouselint.offsetWidth / firstCardWidth);

// Insert copies of the last few cards to beginning of carouselint for infinite scrolling
carouselintChildrens.slice(-cardPerView).reverse().forEach(card => {
    carouselint.insertAdjacentHTML("afterbegin", card.outerHTML);
});

// Insert copies of the first few cards to end of carouselint for infinite scrolling
carouselintChildrens.slice(0, cardPerView).forEach(card => {
    carouselint.insertAdjacentHTML("beforeend", card.outerHTML);
});

// Scroll the carouselint at appropriate postition to hide first few duplicate cards on Firefox
carouselint.classList.add("no-transition");
carouselint.scrollLeft = carouselint.offsetWidth;
carouselint.classList.remove("no-transition");

// Add event listeners for the arrow buttons to scroll the carouselint left and right
arrowBtns.forEach(btn => {
    btn.addEventListener("click", () => {
        carouselint.scrollLeft += btn.id == "left" ? -firstCardWidth : firstCardWidth;
    });
});

const dragStart = (e) => {
    isDragging = true;
    carouselint.classList.add("dragging");
    // Records the initial cursor and scroll position of the carouselint
    startX = e.pageX;
    startScrollLeft = carouselint.scrollLeft;
}

const dragging = (e) => {
    if(!isDragging) return; // if isDragging is false return from here
    // Updates the scroll position of the carouselint based on the cursor movement
    carouselint.scrollLeft = startScrollLeft - (e.pageX - startX);
}

const dragStop = () => {
    isDragging = false;
    carouselint.classList.remove("dragging");
}

const infiniteScroll = () => {
    // If the carouselint is at the beginning, scroll to the end
    if(carouselint.scrollLeft === 0) {
        carouselint.classList.add("no-transition");
        carouselint.scrollLeft = carouselint.scrollWidth - (2 * carouselint.offsetWidth);
        carouselint.classList.remove("no-transition");
    }
    // If the carouselint is at the end, scroll to the beginning
    else if(Math.ceil(carouselint.scrollLeft) === carouselint.scrollWidth - carouselint.offsetWidth) {
        carouselint.classList.add("no-transition");
        carouselint.scrollLeft = carouselint.offsetWidth;
        carouselint.classList.remove("no-transition");
    }

    // Clear existing timeout & start autoplay if mouse is not hovering over carouselint
    clearTimeout(timeoutId);
    if(!wrapper.matches(":hover")) autoPlay();
}

const autoPlay = () => {
    if(window.innerWidth < 800 || !isAutoPlay) return; // Return if window is smaller than 800 or isAutoPlay is false
    // Autoplay the carouselint after every 2500 ms
    timeoutId = setTimeout(() => carouselint.scrollLeft += firstCardWidth, 2500);
}
autoPlay();

carouselint.addEventListener("mousedown", dragStart);
carouselint.addEventListener("mousemove", dragging);
document.addEventListener("mouseup", dragStop);
carouselint.addEventListener("scroll", infiniteScroll);
wrapper.addEventListener("mouseenter", () => clearTimeout(timeoutId));
wrapper.addEventListener("mouseleave", autoPlay);


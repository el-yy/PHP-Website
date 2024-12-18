window.addEventListener('load', () => {
  const loadingScreen = document.getElementById('loading-screen');
  setTimeout(() => {
    loadingScreen.style.display = 'none';
  }, 1500); // time
});

const slideshowContainer = document.querySelector('.slideshow-container');
const images = slideshowContainer.querySelectorAll('img');
const prevButton = document.querySelector('.prev');
const nextButton = document.querySelector('.next');
const textTitle = document.getElementById('text-title');
const textContent = document.getElementById('text-content');

// text sa bawat image
const textData = [
  {
    title: 'A TRICKY START',
    content: 'Scuderia Ferrari HP did not have a straightforward time of it during Friday free practice for the Singapore Grand Prix, gathering less data than expected from the two sessions.'
  },
  {
    title: 'FERRARI NINTH AT 6 HOURS OF FUJI ',
    content: 'The Ferrari 499P number 50, crewed by Antonio Fuoco, Miguel Molina, and Nicklas Nielsen, finished ninth in the 6 Hours of Fuji, round seven of the FIA WEC 2024.'
  },
  {
    title: 'TECHONOLOGICAL MASTERCLASS',
    content: 'While the 360 Modena was always going to be a hard act to follow, the Ferrari F430 sharp silhouette and high-tech credentials made it a more than worthy successor.'
  }
];

let activeImageIndex = 0;
images[activeImageIndex].classList.add('active');

textTitle.textContent = textData[activeImageIndex].title;
textContent.textContent = textData[activeImageIndex].content;

prevButton.addEventListener('click', () => {
  activeImageIndex = (activeImageIndex - 1 + images.length) % images.length;
  updateSlideshow();
});

nextButton.addEventListener('click', () => {
  activeImageIndex = (activeImageIndex + 1) % images.length;
  updateSlideshow();
});

function updateSlideshow() {
  images.forEach((image) => {
    image.classList.remove('active');
  });
  images[activeImageIndex].classList.add('active');
  updateTextContent();
}

function updateTextContent() {
  textTitle.textContent = textData[activeImageIndex].title;
  textContent.textContent = textData[activeImageIndex].content;
}

// Show the prev and next buttons on hover
slideshowContainer.addEventListener('mouseover', () => {
  prevButton.classList.add('show');
  nextButton.classList.add('show');
});

// Hide the prev and next buttons on mouseout
slideshowContainer.addEventListener('mouseout', () => {
  prevButton.classList.remove('show');
  nextButton.classList.remove('show');
});

// Auto slide functionality
setInterval(() => {
  activeImageIndex = (activeImageIndex + 1) % images.length;
  updateSlideshow();
}, 3000); // Adjust the interval timing here (3000ms = 3 seconds)

window.addEventListener('load', () => {
    const loadingScreen = document.getElementById('loading-screen');
    setTimeout(() => {
      loadingScreen.style.display = 'none';
    }, 2500); // time
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
      title: 'FERRARI ANNOUNCES A TECHNICAL COLLABORATION AGREEMENT WITH CADILLAC FORMULA 1 TEAM',
      content: 'Ferrari is pleased to announce that it has entered into an agreement with General Motors and TWG Global to supply the Cadillac Formula 1 Team with its power unit and gearbox starting in 2026*'
    },
    {
      title: '277 LAPS ON THE LAST DAY AT ABU DHABI',
      content: 'The one day post-season test at the Yas Marina circuit has brought the curtain down on the longest Formula 1 season ever, with its 24 races and two test sessions. Driving for Scuderia Ferrari HP today were Charles Leclerc, Antonio Fuoco and Arthur Leclerc, these last two both driving what was, up until Sunday night, Carlos Sainz’s car, as part of the Young Driver Test. The “young drivers” from all the teams were running this year’s Pirelli tyres, while the other cars were fitted with compounds to be used next season. Charles competed 136 laps, while Antonio did 73 in the morning and then Arthur drove 68 laps in the afternoon, making a team total of 277 laps, equivalent to 1463 kilometres'
    },
    {
      title: 'THE 296 GT3 CELEBRATES ITS 100TH VICTORY AT SEPANG',
      content: 'The Ferrari 296 GT3 crossed the milestone of 100 victories in less than two years of competition, celebrating the achievement in the opening round of the 2024–2025 Asian Le Mans Series at the Sepang circuit. The number 57 car fielded by Car Guy Racing, driven by Yudai Uchida, Esteban Masson, and official Ferrari driver Daniel Serra, clinched victory in the GT class ahead of the number 51 AF Corse car, crewed by Custodio Toledo, Cédric Sbirrazzuoli, and Riccardo Agostini.'
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
  
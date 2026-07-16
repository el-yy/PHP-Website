// Array of car data
const cars = [
    {
      name: 'Ferrari F80',
      image: 'https://www.wsupercars.com/wallpapers-regular/Ferrari/2025-Ferrari-F80-001-1080.jpg',
      specs: 'The three-litre 120° V6 F163CF engine of the F80 produces a peak power of 900 HP, for a specific power of 300 hp/l, to which the electric front axle (e-4WD) and motor (MGU-K) of the hybrid system add another 300 hp. The link with motorsports is strong: the architecture of this engine and many of its components are derived from the powerplant of the 499P which won the 2023 and 2024 editions of the 24 Hours of Le Mans.',
    },
    {
      name: 'SF90 XX Stradale',
      image: 'https://www.wsupercars.com/wallpapers-regular/Ferrari/2024-Ferrari-SF90-XX-Stradale-009-1080.jpg',
      specs: "The SF90 XX Stradale has inherited the SF90 Stradale's signature PHEV layout, in which the V8 internal combustion engine is integrated with three electric motors, two independent on the front axle and one located between the engine and gearbox at the rear. This configuration allows the car to unleash a maximum of 1030 cv (+30 cv more than the SF90 Stradale), setting a whole new Ferrari performancepenchmark.",
    },
    {
      name: 'Ferrari 12Cilindri Spider',
      image: 'https://www.wsupercars.com/wallpapers-regular/Ferrari/2025-Ferrari-12Cilindri-Spider-004-1080.jpg',
      specs: "The Ferrari 12Cilindri Spider is equipped with Maranello's iconic naturally-aspirated 12 engine, the purest expression of Ferrari's spirit. This version delivers 830 hp of power, while the top engine speed is 9500 pm. Some of the developments implemented on this model have already been adopted on the 812 Competizione special series, such as the exhaust system with ceramic catalytic converter, titanium con rods, and pistons made from a lightweight aluminium alloy. Meanwhile, the sliding finger followers - a component derived from Ferrari's experience in Formula 1 - serves to open and close the valves, reducing the coefficient of friction at critical points and significantly improving the performance of the engine.",
    },
  ];
  
  // Populate the car grid
  const carGrid = document.getElementById('carGrid');
  cars.forEach((car, index) => {
    const card = document.createElement('div');
    card.classList.add('car-card');
    card.innerHTML = `
      <img src="${car.image}" alt="${car.name}">
      <h3>${car.name}</h3>
    `;
    card.addEventListener('click', () => openModal(index));
    carGrid.appendChild(card);
  });
  
  // Modal functionality
  const carModal = document.getElementById('carModal');
  const modalTitle = document.getElementById('modalTitle');
  const modalImage = document.getElementById('modalImage');
  const modalDetails = document.getElementById('modalDetails');
  const closeModal = document.getElementById('closeModal');
  
  function openModal(index) {
    const car = cars[index];
    modalTitle.textContent = car.name;
    modalImage.src = car.image;
    modalDetails.textContent = car.specs;
    carModal.style.display = 'flex';
  }
  
  closeModal.addEventListener('click', () => {
    carModal.style.display = 'none';
  });
  
  // Close modal when clicking outside
  window.addEventListener('click', (e) => {
    if (e.target === carModal) carModal.style.display = 'none';
  });
  
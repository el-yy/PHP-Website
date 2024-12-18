// Add event listener to play/pause video on scroll
window.addEventListener('scroll', function() {
  var video = document.getElementById('video-header');
  if (window.scrollY > 0) {
    video.pause();
  } else {
    video.play();
  }
});
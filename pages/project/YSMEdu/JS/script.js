
/* Go to Top */

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("myBtn").style.display = "block";
  } else {
    document.getElementById("myBtn").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}


/* Light/Dark mode */

const toggleSwitch = document.getElementById('toggle-switch');
const toggleBtn = document.getElementById('toggle-btn');
const body = document.body;

toggleSwitch.addEventListener('change', () => { body.classList.toggle('dark-mode', toggleSwitch.checked); });

toggleBtn.addEventListener('click', () => { body.classList.toggle('dark-mode'); });
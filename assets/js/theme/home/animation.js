const screenPosition = window.innerHeight / 2;

// About Us
function animationAboutUs() {
    const aboutUs = document.querySelector('.aboutUs');
    const aboutUsPosition = aboutUs.getBoundingClientRect().top;


    if (aboutUsPosition < screenPosition) {
        aboutUs.classList.add('aboutUs--animation');
    }
}

window.addEventListener('scroll', animationAboutUs);

// DNA
function animationDNA() {
    const dna = document.querySelector('.dna');
    const dnaPosition = dna.getBoundingClientRect().top;

    if (dnaPosition < screenPosition) {
        dna.classList.add('dna--animation');
    }
}

window.addEventListener('scroll', animationDNA);
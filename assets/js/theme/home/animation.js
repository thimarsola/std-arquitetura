const screenPosition = window.innerHeight / 2;

function animationAboutUs() {
    const aboutUs = document.querySelector('.aboutUs');
    const aboutUsPosition = aboutUs.getBoundingClientRect().top;

    if (aboutUsPosition < screenPosition) {
        aboutUs.classList.add('aboutUs--animation');
    }
}

window.addEventListener('scroll', animationAboutUs);
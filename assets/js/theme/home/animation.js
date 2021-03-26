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

// Project Steps
function animationSteps() {
    const steps = document.querySelector('.projectSteps');
    const stepsPosition = steps.getBoundingClientRect().top;

    if (stepsPosition < screenPosition) {
        steps.classList.add('projectSteps--animation');
    }
}

window.addEventListener('scroll', animationSteps);

// Projects
function animationProjects() {
    const projects = document.querySelector('.projects');
    const projectsPosition = projects.getBoundingClientRect().top;

    if (projectsPosition < screenPosition) {
        projects.classList.add('projects--animation');
    }
}

window.addEventListener('scroll', animationProjects);

// Testimonial
function animationTestimonial() {
    const testimonial = document.querySelector('.testimonial');
    const testimonialPosition = testimonial.getBoundingClientRect().top;

    if (testimonialPosition < screenPosition) {
        testimonial.classList.add('testimonial--animation');
    }
}

window.addEventListener('scroll', animationTestimonial);

// Awards
function animationAwards() {
    const awards = document.querySelector('.awards');
    const awardsPosition = awards.getBoundingClientRect().top;

    if (awardsPosition < screenPosition) {
        awards.classList.add('awards--animation');
    }
}

window.addEventListener('scroll', animationAwards);

// Contact
function animationContact() {
    const contact = document.querySelector('.contact');
    const contactPosition = contact.getBoundingClientRect().top;

    if (contactPosition < screenPosition) {
        contact.classList.add('contact--animation');
    }
}

window.addEventListener('scroll', animationContact);

// Office
function animationOffice() {
    const office = document.querySelector('.office');
    const officePosition = office.getBoundingClientRect().top;

    if (officePosition < screenPosition) {
        office.classList.add('office--animation');
    }
}

window.addEventListener('scroll', animationOffice);
export class ProjectLinkDescription {
    constructor() {
        this.projectLinks = document.querySelectorAll('[data-description]');
        console.log('POPUP', this.popup);
        console.log('PROJECT LINKS', this.projectLinks);
        this.init();
    }

    init() {
        this.addEventListeners();
    }  

    addEventListeners() {
        this.projectLinks.forEach(link => {
            // Find the closest parent div that contains both the link and description
            const projectContainer = link.closest('.project');

            // Find the description element that's a sibling of project-links
            const descriptionDiv = projectContainer.querySelector('.project-links-description');
            const descriptionSpan = descriptionDiv.querySelector('span');

            link.addEventListener('mouseover', (e) => {
                const description = link.getAttribute('data-description');
                if (descriptionDiv && descriptionSpan) {
                    descriptionSpan.textContent = description;
                    descriptionDiv.classList.add('active');
                }
            });

            link.addEventListener('mouseout', () => {
                console.log('MOUSE OUT');
                if (descriptionDiv && descriptionSpan) {
                    descriptionSpan.textContent = '';
                    descriptionDiv.classList.remove('active');
                }
            });
        });
    }
}
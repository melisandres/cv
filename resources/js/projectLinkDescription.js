export class ProjectLinkDescription {
    constructor() {
        this.projectLinks = document.querySelectorAll('[data-description]');
        if (this.projectLinks.length === 0) {
            return;
        }
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
                if (descriptionDiv && descriptionSpan) {
                    descriptionSpan.textContent = '';
                    descriptionDiv.classList.remove('active');
                }
            });
        });
    }
}
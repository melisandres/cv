export class ProjectLinkDescription {
    constructor() {
        this.hoverTriggers = document.querySelectorAll(
            '.project-links a[data-description], .circle-img[data-description]'
        );
        this.tabTriggers = document.querySelectorAll('.project-tabs [data-description]');
        if (this.hoverTriggers.length === 0 && this.tabTriggers.length === 0) {
            return;
        }
        this.init();
    }

    init() {
        this.addHoverListeners(this.hoverTriggers);
        this.addTabListeners();
    }

    addHoverListeners(triggers) {
        triggers.forEach(trigger => {
            const { descriptionDiv, descriptionSpan } = this.getDescriptionElements(trigger);
            if (!descriptionDiv || !descriptionSpan) {
                return;
            }

            trigger.addEventListener('mouseover', () => {
                descriptionSpan.textContent = trigger.getAttribute('data-description');
                descriptionDiv.classList.add('active');
            });

            trigger.addEventListener('mouseout', () => {
                descriptionSpan.textContent = '';
                descriptionDiv.classList.remove('active');
            });
        });
    }

    addTabListeners() {
        this.tabTriggers.forEach(trigger => {
            const projectContainer = trigger.closest('.project');
            const { descriptionDiv, descriptionSpan } = this.getDescriptionElements(trigger);

            if (!projectContainer || !descriptionDiv || !descriptionSpan) {
                return;
            }

            trigger.addEventListener('mouseover', () => {
                descriptionSpan.textContent = this.getTabHint(trigger, projectContainer);
                descriptionDiv.classList.add('active');
            });

            trigger.addEventListener('mouseout', () => {
                descriptionSpan.textContent = '';
                descriptionDiv.classList.remove('active');
            });

            trigger.addEventListener('click', () => {
                const isOpen = projectContainer.classList.toggle('details-open');
                trigger.classList.toggle('active', isOpen);

                if (descriptionDiv.classList.contains('active')) {
                    descriptionSpan.textContent = this.getTabHint(trigger, projectContainer);
                }
            });
        });
    }

    getTabHint(trigger, projectContainer) {
        const isOpen = projectContainer.classList.contains('details-open');
        const attribute = isOpen ? 'data-description-hide' : 'data-description';

        return trigger.getAttribute(attribute);
    }

    getDescriptionElements(trigger) {
        const projectContainer = trigger.closest('.project');
        const descriptionDiv = projectContainer?.querySelector('.project-links-description');
        const descriptionSpan = descriptionDiv?.querySelector('span');

        return { descriptionDiv, descriptionSpan };
    }
}

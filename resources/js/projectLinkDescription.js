/**
 * Shows short hints on hover for project links, gallery images, and toggle tabs.
 * Projects use .project with per-tab open classes; other pages use .tab-panel.
 */
export class ProjectLinkDescription {
    static PROJECT_OPEN_CLASS_BY_TAB = {
        technical: 'details-open',
        thoughts: 'thoughts-open',
    };

    static TAB_PANEL_OPEN_CLASS = 'panel-open';

    constructor() {
        this.hoverTriggers = document.querySelectorAll(
            '.project-links a[data-description], .circle-img[data-description]'
        );
        this.tabTriggers = document.querySelectorAll(
            '.project-tabs [data-description], .tab-panel__tabs [data-description]'
        );

        if (this.hoverTriggers.length === 0 && this.tabTriggers.length === 0) {
            return;
        }

        this.init();
    }

    init() {
        this.addHoverListeners(this.hoverTriggers);
        this.addTabListeners(this.tabTriggers);
    }

    addHoverListeners(triggers) {
        triggers.forEach(trigger => {
            this.bindHintHover(trigger, () => trigger.getAttribute('data-description'));
        });
    }

    addTabListeners(triggers) {
        triggers.forEach(trigger => {
            const panel = this.getPanelContainer(trigger);
            if (!panel) {
                return;
            }

            this.bindHintHover(trigger, () => this.getTabHint(trigger, panel));

            trigger.addEventListener('click', () => {
                this.toggleTab(panel, trigger);
            });
        });
    }

    bindHintHover(trigger, getHintText) {
        const { descriptionDiv, descriptionSpan } = this.getDescriptionElements(trigger);
        if (!descriptionDiv || !descriptionSpan) {
            return;
        }

        trigger.addEventListener('mouseover', () => {
            descriptionSpan.textContent = getHintText();
            descriptionDiv.classList.add('active');
        });

        trigger.addEventListener('mouseout', () => {
            descriptionSpan.textContent = '';
            descriptionDiv.classList.remove('active');
        });
    }

    toggleTab(panel, trigger) {
        const { descriptionDiv, descriptionSpan } = this.getDescriptionElements(trigger);
        const openClass = this.getOpenClass(trigger, panel);
        const wasOpen = panel.classList.contains(openClass);

        this.closeAllPanels(panel);

        if (!wasOpen) {
            panel.classList.add(openClass);
        }

        if (descriptionDiv?.classList.contains('active')) {
            descriptionSpan.textContent = this.getTabHint(trigger, panel);
        }
    }

    getPanelContainer(trigger) {
        return trigger.closest('.tab-panel') ?? trigger.closest('.project');
    }

    getTabType(trigger) {
        return trigger.getAttribute('data-tab') || 'technical';
    }

    getOpenClass(trigger, panel) {
        if (panel.classList.contains('tab-panel')) {
            return ProjectLinkDescription.TAB_PANEL_OPEN_CLASS;
        }

        const tabType = this.getTabType(trigger);
        return ProjectLinkDescription.PROJECT_OPEN_CLASS_BY_TAB[tabType]
            ?? ProjectLinkDescription.PROJECT_OPEN_CLASS_BY_TAB.technical;
    }

    isTabOpen(panel, trigger) {
        return panel.classList.contains(this.getOpenClass(trigger, panel));
    }

    closeAllPanels(panel) {
        if (panel.classList.contains('tab-panel')) {
            panel.classList.remove(ProjectLinkDescription.TAB_PANEL_OPEN_CLASS);
            return;
        }

        panel.classList.remove('details-open', 'thoughts-open');
    }

    getTabHint(trigger, panel) {
        const attribute = this.isTabOpen(panel, trigger)
            ? 'data-description-hide'
            : 'data-description';

        return trigger.getAttribute(attribute);
    }

    getDescriptionElements(trigger) {
        const panel = this.getPanelContainer(trigger);
        const descriptionDiv = panel?.querySelector('.tab-panel__hint, .project-links-description');
        const descriptionSpan = descriptionDiv?.querySelector('span');

        return { descriptionDiv, descriptionSpan };
    }
}

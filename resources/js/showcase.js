export class Showcase {
    constructor() {
        // Check if we're on the right page
        const projectsSection = document.querySelector('.projects');
        
        if (!projectsSection) {
            return;
        }

        const dataElement = document.getElementById('portfolio-data');
        
        try {
            const rawData = dataElement.textContent.trim();
            
            if (!rawData) {
                console.error('Portfolio data is empty!');
                return;
            }
            this.galleries = JSON.parse(rawData);

        } catch (error) {
            console.error('Error parsing gallery data:', error);
            return;
        }
        this.currentProject = null;
        this.currentGalleryIndex = 0;
        this.container = document.querySelector('.modal-container');
        this.content = document.querySelector('.modal-content');

        if (!this.container) {
            console.log('No modal container found');
            return;
        }
        this.init();
    }

    init() {
        this.addEventListeners();
    }

    addEventListeners() {
        // Listen for clicks on circle images
        const circleImages = document.querySelectorAll('.circle-img');
        
        circleImages.forEach(img => {
            img.addEventListener('click', (e) => {
                e.preventDefault();
                this.openModal(e);
            });
        });

        // Listen for clicks on the modal container
        this.container.addEventListener('click', (e) => {
            // Close only if clicking the container itself, not its children
            if (e.target === this.container) {
                this.closeModal();
            }
        });

        // Add navigation listeners
        const leftArrow = this.container.querySelector('.arrow-left');
        const rightArrow = this.container.querySelector('.arrow-right');
        
        if (leftArrow) {
            leftArrow.addEventListener('click', () => this.showPreviousImage());
        }
        
        if (rightArrow) {
            rightArrow.addEventListener('click', () => this.showNextImage());
        }

        // Add click handler for the image-links container (event delegation)
        const imageLinks = this.content.querySelector('.image-links');
        if (imageLinks) {
            imageLinks.addEventListener('click', (e) => {
                if (e.target.classList.contains('dot')) {
                    this.showSpecificImage(parseInt(e.target.dataset.index));
                }
            });
        }
    }

    openModal(event) {
        const projectName = event.target.dataset.project;
        if (this.galleries[projectName]) {
            this.currentProject = projectName;
            this.currentGalleryIndex = 0;
            this.updateModalContent();
            this.container.classList.add('active');
        }
    }

    closeModal() {
        this.container.classList.remove('active');
        const modalImage = this.content.querySelectorAll('.modal-image');
        if (modalImage) {
            modalImage.forEach(img => {
                img.src = '';
                img.alt = '';
            });
        }
    }

    showNextImage() {
        const gallery = this.galleries[this.currentProject];
        if (gallery) {
            this.currentGalleryIndex = (this.currentGalleryIndex + 1) % gallery.length;
            this.updateModalContent();
        }
    }

    showPreviousImage() {
        const gallery = this.galleries[this.currentProject];
        if (gallery) {
            this.currentGalleryIndex = (this.currentGalleryIndex - 1 + gallery.length) % gallery.length;
            this.updateModalContent();
        }
    }

    showSpecificImage(index) {
        const gallery = this.galleries[this.currentProject];
        if (gallery && index >= 0 && index < gallery.length) {
            this.currentGalleryIndex = index;
            this.updateModalContent();
        }
    }

    updateModalContent() {
        const gallery = this.galleries[this.currentProject];
        if (!gallery || !gallery[this.currentGalleryIndex]) {
            console.error('No gallery or image found');
            return;
        }

        const currentImage = gallery[this.currentGalleryIndex];
        const imagePath = `img/${currentImage.path}`;


        // Update description
        const description = this.content.querySelector('.image-description');
        if (description) {
            description.textContent = currentImage.description || '';
        }

        // Update navigation dots with data-index attributes
        const imageLinks = this.content.querySelector('.image-links');
        if (imageLinks) {
            imageLinks.innerHTML = gallery.map((_, index) => `
                <span class="dot ${index === this.currentGalleryIndex ? 'active' : ''}"
                      data-index="${index}"></span>
            `).join('');
        }

        // Transition between images
        const upcomingImage = this.content.querySelector('.modal-image.upcoming');
        const currentImageElement = this.content.querySelector('.modal-image.current');

        if (upcomingImage && currentImageElement) {
            // Set up new image but keep it hidden
            upcomingImage.src = imagePath;
            upcomingImage.alt = currentImage.alt || '';

            // Once the new image is loaded
            upcomingImage.onload = () => {
                        currentImageElement.classList.replace('current', 'upcoming');
                        currentImageElement.src = '';
                        currentImageElement.alt = '';

                        upcomingImage.classList.replace('upcoming', 'current');
            };
        }
    }
}
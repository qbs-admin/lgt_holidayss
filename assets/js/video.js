
document.addEventListener('DOMContentLoaded', () => {
    const player = new Plyr('#background-video', {
        autoplay: true,
        muted: true,
        loop: true,
        controls: false,
        quality: {
            default: 1080,
            options: [720, 1080], // Add more resolutions if needed
        },
    });
});
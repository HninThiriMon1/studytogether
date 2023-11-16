// Function to handle double-click event
document.getElementById('video').addEventListener('dblclick', function() {
    var videoContainer = document.querySelector('.video-container');
    
    if (!videoContainer.classList.contains('fullscreen')) {
        videoContainer.classList.add('fullscreen');
    } else {
        videoContainer.classList.remove('fullscreen');
    }
});

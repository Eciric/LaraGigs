const flashMessage = document.getElementsByClassName("flash-message");

if (flashMessage) {
    let isVisible = flashMessage[0].checkVisibility({
        checkOpacity: true, // Check CSS opacity property too
        checkVisibilityCSS: true, // Check CSS visibility property too
    });

    if (isVisible) {
        setTimeout(() => (flashMessage[0].style.display = "none"), 3000);
    }
}

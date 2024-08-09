document.addEventListener('DOMContentLoaded', function () {
    // Function to disable copy and paste in specified elements
    function disableCopyPaste(selector) {
        const elements = document.querySelectorAll(selector);

        elements.forEach(element => {
            element.addEventListener('copy', function (event) {
                event.preventDefault();
            });

            element.addEventListener('paste', function (event) {
                event.preventDefault();
            });

            element.addEventListener('contextmenu', function (event) {
                event.preventDefault();
            });
        });
    }

    // Disable copy and paste in specific sections or elements
    disableCopyPaste('.no-copy-paste');
});

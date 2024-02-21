document.addEventListener('DOMContentLoaded', function () {
    // Get all dropdown references
    const dropdownRefs = document.querySelectorAll('[data-te-dropdown-ref]');

    // Add click event listener to each dropdown reference
    dropdownRefs.forEach(dropdownRef => {
        const toggleRef = dropdownRef.querySelector('[data-te-dropdown-toggle-ref]');
        const menuRef = dropdownRef.querySelector('[data-te-dropdown-menu-ref]');

        // Add click event to toggle the dropdown menu
        toggleRef.addEventListener('click', function () {
            // Toggle the visibility of the dropdown menu
            menuRef.classList.toggle('hidden');
        });

        // Close the dropdown menu when clicking outside of it
        document.addEventListener('click', function (event) {
            if (!dropdownRef.contains(event.target)) {
                menuRef.classList.add('hidden');
            }
        });
    });
});

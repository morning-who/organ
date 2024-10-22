// script.js

// Add event listener to form submission
document.querySelector('form').addEventListener('submit', (e) => {
    e.preventDefault();

    // Get form data
    const formData = new FormData(document.querySelector('form'));

    // Convert form data to JSON
    const jsonData = {};
    formData.forEach((value, key) => {
        jsonData[key] = value;
    });

    // Log JSON data to console
    console.log(jsonData);
});
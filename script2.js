document.querySelector('form').addEventListener('submit', (e) => {
    e.preventDefault();


    const formData = new FormData(document.querySelector('form'));


    const jsonData = {};
    formData.forEach((value, key) => {
        jsonData[key] = value;
    });

    console.log(jsonData);
});

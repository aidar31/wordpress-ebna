document.addEventListener("DOMContentLoaded", function() {
    const numElement = document.getElementById("num");
    let count = parseInt(numElement.textContent);

    const intervalId = setInterval(() => {
        if (count < 100) {
            count++;
            numElement.textContent = count;
        } else {
            clearInterval(intervalId);
        }
    }, 1000);
});

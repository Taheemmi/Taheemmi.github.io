// select elements
const emailInput = document.getElementById("emailInput");
const categoryDropdown = document.getElementById("categoryDropdown");
const submitButton = document.getElementById("submitButton");

const infoEmail = document.getElementById("infoEmail").querySelector("span");
const infoCategory = document.getElementById("infoCategory").querySelector("span")

submitButton.addEventListener("click", () => {
    // get input values
    const email = emailInput.Value.trim();
    const category = categoryDropDown.value;

    // Validate inputs
    if (email === "" ||  category === "") {
        alert("Please fill in all fields.");
        return;
    }

    infoEmail.textContent = email;
    infoCategory.textContent = category;

    emailInput.value = "";
    categoryDropdown.value = "";
});

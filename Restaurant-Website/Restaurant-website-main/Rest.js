function addToCart(name, image, price) {
    // Create a new cart item
    var newItem = document.createElement("div");
    newItem.classList.add("cart-item");

    // Add image
    var img = document.createElement("img");
    img.src = image;
    img.style.width = "50px"; // Adjust the width as needed
    img.style.height = "50px"; // Adjust the height as needed
    newItem.appendChild(img);

    // Add name
    var itemName = document.createElement("p");
    itemName.textContent = name + " "; // Add a space after the name
    newItem.appendChild(itemName);

    // Add price
    var itemPrice = document.createElement("p");
    itemPrice.textContent = "(Price): $" + price;
    newItem.appendChild(itemPrice);

    // Append the new item to the list
    document.getElementById("list").appendChild(newItem);
}

function checkCartAndProceed(action) {
    // Check if there are items in the cart
    var cartItems = document.getElementById("list").children;

    if (cartItems.length === 0) {
        alert("There are no items in the cart. Please add items before proceeding.");
    } else {
        // Calculate the total
        var total = 0;
        for (var i = 0; i < cartItems.length; i++) {
            var priceString = cartItems[i].querySelector("p:last-child").textContent; // Extract price string
            var price = parseFloat(priceString.replace(/\D/g, '')); // Extract numerical value from price string
            total += price;
        }

        // Display appropriate alert message based on the action
        var deliveryMessage = "Your food will be delivered in 30 mins to an hour.";
        var pickupMessage = "Your food will be ready for pick up in 30 mins to an hour.";

        if (action === "delivery") {
            alert("Total: $" + total.toFixed(2) + "\n" + deliveryMessage);
        } else if (action === "pickup") {
            alert("Total: $" + total.toFixed(2) + "\n" + pickupMessage);
        }
    }
}

document.addEventListener("DOMContentLoaded", function () {
    
    document.querySelector('.calculate button:nth-child(1)').addEventListener("click", function () {
        checkCartAndProceed("delivery");
    });

    document.querySelector('.calculate button:nth-child(2)').addEventListener("click", function () {
        checkCartAndProceed("pickup");
    });
});

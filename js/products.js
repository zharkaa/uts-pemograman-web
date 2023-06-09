fetch("../data/products_data.json")
  .then((response) => response.json())
  .then((data) => displayCardData(data))
  .catch((error) => console.error("Error fetching data:", error));

// Selecting DOM element
const cardContainer = document.getElementById("cardContainer");

// Displaying data in the cards
const displayCardData = (data) => {
  // Loop through the data array and create cards for each item
  data.forEach((item) => {
    const cardElement = document.createElement("div");
    cardElement.classList.add("card");
    cardElement.innerHTML = `
            <a href="#">
              <img class="card-img" src="${item.image}" alt="${item.title}">
              <div class="card-info">
                <h2 class="card-title">${item.title}</h2>
                <p class="card-description">${item.description}</p>
              </div>
            </a>
        `;
    cardContainer.appendChild(cardElement);
  });
};

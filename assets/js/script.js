// Category filtering
const categoryCards = document.querySelectorAll(".category-card");
const gameCards = document.querySelectorAll(".game-card");

categoryCards.forEach(category => {
  category.addEventListener("click", () => {
    const selectedCategory = category.dataset.category;

    categoryCards.forEach(c => c.classList.remove("active"));
    category.classList.add("active");
    console.log("JS connected");


    gameCards.forEach(game => {
      const gameGenre = game.dataset.genre;

      if (selectedCategory === "all" || gameGenre === selectedCategory) {
        game.classList.remove("hidden");
      } else {
        game.classList.add("hidden");
      }
    });
  });
});

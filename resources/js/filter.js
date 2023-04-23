const filters = document.querySelectorAll(".filter");
const productsWrapper = document.querySelector(".products");

filters.forEach((filter) => {
    filter.addEventListener("click", function () {
        filters.forEach((currentFilter) => {
            currentFilter.classList.remove("border");
            currentFilter.classList.remove("text-orange-500");
            currentFilter.classList.add("text-zinc-500");
        });
        filter.classList.remove("text-zinc-500");
        filter.classList.add("border");
        filter.classList.add("text-orange-500");
        productsWrapper.classList.remove("opacity-100");
        productsWrapper.classList.add("opacity-0");

        setTimeout(() => {
            let selectedFilter = filter.getAttribute("data-filter");
            let itemsToHide = document.querySelectorAll(
                `.products .product:not([data-filter='${selectedFilter}'])`
            );
            let itemsToShow = document.querySelectorAll(
                `.products [data-filter='${selectedFilter}']`
            );

            if (selectedFilter == "all") {
                itemsToHide = [];
                itemsToShow = document.querySelectorAll(
                    ".products [data-filter]"
                );
            }

            itemsToHide.forEach((el) => {
                el.classList.add("hidden");
                el.classList.remove("block");
            });

            itemsToShow.forEach((el) => {
                el.classList.remove("hidden");
                el.classList.add("block");
            });
        }, 200);
        setTimeout(() => {
            productsWrapper.classList.remove("opacity-0");
            productsWrapper.classList.add("opacity-100");
        }, 400);
    });
});

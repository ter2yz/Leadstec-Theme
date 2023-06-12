const filterWrappers = document.querySelectorAll(".filter-wrapper");
filterWrappers.forEach((filterWrapper) => {
    const filters = filterWrapper.querySelectorAll(".filter");
    const productsWrapper = filterWrapper.querySelector(
        ".filter-items-wrapper"
    );
    const initItems = productsWrapper.querySelectorAll(".filter-item");

    filters.forEach((filter) => {
        filter.addEventListener("click", function () {
            filters.forEach((currentFilter) => {
                currentFilter.classList.remove("border-orange-500");
                currentFilter.classList.remove("text-orange-500");
                currentFilter.classList.add("border-zinc-400/25");
                currentFilter.classList.add("text-[#9f9f9f]");
            });
            filter.classList.remove("border-zinc-400/25");
            filter.classList.remove("text-[#9f9f9f]");
            filter.classList.add("border-orange-500");
            filter.classList.add("text-orange-500");
            productsWrapper.classList.remove("opacity-100");
            productsWrapper.classList.add("opacity-0");

            setTimeout(() => {
                productsWrapper.replaceChildren(...initItems);
                let selectedFilter = filter.getAttribute("data-filter");
                let itemsToHide = productsWrapper.querySelectorAll(
                    `.filter-item:not([data-filter='${selectedFilter}'])`
                );
                let itemsToShow = productsWrapper.querySelectorAll(
                    `.filter-item[data-filter='${selectedFilter}']`
                );

                if (selectedFilter == "all") {
                    itemsToHide = [];
                    itemsToShow = productsWrapper.querySelectorAll(
                        ".filter-item[data-filter]"
                    );
                }

                itemsToHide.forEach((el) => {
                    el.classList.add("hidden");
                    el.classList.remove("block");
                    productsWrapper.removeChild(el);
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
});

document.addEventListener("DOMContentLoaded", () => {
    const filterItem = document.querySelector(".items");
    const filterImg = document.querySelectorAll(".gallery .image");
    const previewBox = document.querySelector(".preview-box");
    const categoryName = previewBox.querySelector(".title p");
    const previewImg = previewBox.querySelector("img");
    const closeIcon = previewBox.querySelector(".icon");
    const shadow = document.querySelector(".shadow");

    filterItem.addEventListener("click", (event) => {
      const selectedItem = event.target.closest(".item");
      if (!selectedItem) return;

      const filterName = selectedItem.getAttribute("data-name") || "all";

      filterItem.querySelector(".active").classList.remove("active");
      selectedItem.classList.add("active");

      filterImg.forEach((image) => {
        const filterImges = image.getAttribute("data-name");
        const shouldShow = filterImges === filterName || filterName === "all";
        image.classList.toggle("hide", !shouldShow);
        image.classList.toggle("show", shouldShow);
      });
    });

    filterImg.forEach((image) => {
      image.addEventListener("click", () => preview(image));
    });

    function preview(element) {
      document.body.style.overflow = "hidden";
      const selectedPrevImg = element.querySelector("img").src;
      const selectedImgCategory = element.getAttribute("data-name");
      previewImg.src = selectedPrevImg;
      categoryName.textContent = selectedImgCategory;
      previewBox.classList.add("show");
      shadow.classList.add("show");

      closeIcon.addEventListener("click", () => {
        previewBox.classList.remove("show");
        shadow.classList.remove("show");
        document.body.style.overflow = "auto";
      });
    }
  });

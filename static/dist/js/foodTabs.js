const tabs = document.querySelectorAll(".drink__list");
const contents = document.querySelectorAll(".foodTabs");

// every tab looping
tabs.forEach((tab) => {
  tab.addEventListener("click", () => {
    removeActiveTab();
    tab.classList.add("active");
    const activeContent = document.querySelector(`#${tab.id}-content`); //#$ achu-chu "gets the element"
    removeActiveContent();
    activeContent.classList.add("active");
  });
});

function removeActiveTab() {
  //loopings to remove present active
  tabs.forEach((tab) => {
    tab.classList.remove("active");
  });
}

function removeActiveContent() {
  contents.forEach((content) => {
    content.classList.remove("active");
  });
}

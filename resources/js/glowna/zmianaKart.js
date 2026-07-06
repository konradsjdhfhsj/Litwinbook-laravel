document.addEventListener("DOMContentLoaded", () => {

    const homeBtn = document.getElementById("homepage");
    const profileBtn = document.getElementById("profile");
    const addPostBtn = document.getElementById("add-post-button");

    const profilePage = document.getElementById("profilePage");
    const addPosts = document.getElementById("add-posts");
    const postsContainer = document.getElementById("posts-container");

    function hideAll() {
        profilePage.classList.add("hidden");
        addPosts.classList.add("hidden");
        postsContainer.classList.add("hidden");
    }

    homeBtn.addEventListener("click", (e) => {
        e.preventDefault();
        hideAll();
        postsContainer.classList.remove("hidden");
    });

    profileBtn.addEventListener("click", (e) => {
        e.preventDefault();
        hideAll();
        profilePage.classList.remove("hidden");
    });

    addPostBtn.addEventListener("click", (e) => {
        e.preventDefault();
        hideAll();
        addPosts.classList.remove("hidden");
    });

});

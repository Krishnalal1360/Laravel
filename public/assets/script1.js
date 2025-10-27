
    // Function to apply hover effects
    function applyHoverEffect(selector, hoverColor, defaultColor = "") {
        // Select all <li> elements inside the given list (ul)
        const items = document.querySelectorAll(selector + " li");

        items.forEach(item => {
            // Mouse Enter (hover)
            item.addEventListener("mouseenter", function () {
                this.style.color = hoverColor;
                this.style.fontWeight = "bold";
                this.style.cursor = "pointer";
            });

            // Mouse Leave
            item.addEventListener("mouseout", function () {
                this.style.color = defaultColor;
                this.style.fontWeight = "normal";
            });
        });
    }

    // Apply hover effects when DOM is loaded
    document.addEventListener("DOMContentLoaded", function () {
        // For Languages list
        applyHoverEffect(".languages", "red", "");

        // For Frameworks list
        applyHoverEffect(".frameworks", "blue", "");
    });
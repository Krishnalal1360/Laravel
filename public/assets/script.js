var ele = document.getElementById("h_id");
ele.style.border = "2px solid blue";
ele.style.padding = "10px";
ele.style.textAlign = "center";     
ele.style.fontFamily = "Arial, sans-serif";
ele.style.fontSize = "24px";
ele.style.fontWeight = "bold";
ele.style.boxShadow = "2px 2px 5px rgba(0, 0, 0, 0.3)";
ele.style.margin = "20px auto";
ele.style.width = "fit-content";
ele.style.transition = "all 0.3s ease";

ele.addEventListener("mouseover", function() {
    ele.style.backgroundColor = "#f0f0f0";
    ele.style.color = "#333";
});

ele.addEventListener("mouseout", function() {
    ele.style.backgroundColor = "yellow";
    ele.style.color = "red";
});


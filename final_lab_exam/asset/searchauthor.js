function search_author() {
  let search = document.getElementById("search").value.trim();
  let xhttp = new XMLHttpRequest();
  xhttp.open("POST", "../controller/search.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("search=" + encodeURIComponent(search));
  
  xhttp.onreadystatechange = function () {
      if (this.readyState === 4 && this.status === 200) {
          let tableBody = document.querySelector("table tbody");
          if (!tableBody) {
              tableBody = document.createElement("tbody");
              document.querySelector("table").appendChild(tableBody);
          }

          if (this.responseText.trim() === "No Author found") {
              let messageRow = document.createElement("tr");
              let messageCell = document.createElement("td");
              messageCell.setAttribute("colspan", "6"); 
              messageCell.innerHTML = "No Author found";
              messageCell.style.cssText = "text-align:center; height:300px; font-size:20px; font-weight:bold; color:red;";
              messageRow.appendChild(messageCell);
              tableBody.innerHTML = "";
              tableBody.appendChild(messageRow);
          } else {
              tableBody.innerHTML = this.responseText;
          }
      }
  };
}

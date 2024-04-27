document.addEventListener("DOMContentLoaded", function() {
    const divSet = document.getElementById("divSet");
    const show10Btn = document.getElementById("show10");
    const show25Btn = document.getElementById("show25");
    const showAllBtn = document.getElementById("showAll");
  
    // Call fetchData with limit 10 when page loads
    fetchData(10);
  
    show10Btn.addEventListener("click", function() {
      fetchData(10);
    });
  
    show25Btn.addEventListener("click", function() {
      fetchData(25);
    });
  
    showAllBtn.addEventListener("click", function() {
      fetchData(); // Default to show all
    });
  
    function fetchData(limit) {
      // Simulate fetching data from database
      const data = Array.from({ length: limit || 50 }, (_, i) => {
        return { id: i + 1, name: "Item " + (i + 1) }; // Sample data
      });
  
      displayData(data);
    }
  
    function displayData(data) {
        let abstract = "Learn the most common Data Structures & Algorithms to solve coding problems. Enrol now! Master core Data Structures & Algorithms to ace interviews from IIT & Stanford Alumni. TA Support. Placements in Companies. Get Certified. 350+ Problems.A data structure is a particular way of organizing data in a computer so that it can be used effectively.Learn the most common Data Structures & Algorithms to solve coding problems. Enrol now! Master core Data Structures & Algorithms to ace interviews from IIT & Stanford Alumni. TA Support. Placements in Companies. Get Certified. 350+ Problems.A data structure is a particular way of organizing data in a computer so that it can be used effectively."


        divSet.innerHTML = "";
        data.forEach(item => {
          const researchDetails = document.createElement("div");
          researchDetails.classList.add("researchdetails", "shadow");
      
          researchDetails.innerHTML = `
            <div class="d-flex p-2 my-2">
              <div class="imagebox"></div>
              <div class="textbox">
                <div class="textnextimage">
                  Developing writers can often benefit from examining an essay, a paragraph, or even a sentence to determine what makes it effective. On the following pages are several paragraphs for you to evaluate on your own, along with the Writing Center's explanation.
                </div>
                <div class="othertexts my-1">
                  <div class="d-flex">
                    <div class="researcher">Name: ${"Kasun Gamage"}</div>
                    <div class="researcher2 mx-1">${"12 March 2024"}</div>
                    <div class="researcher2 mx-1">${12}</div>
                    <div class="researcher2">Volume: ${23}</div>
                  </div>
                </div>
                <div class="readmore my-2">Read more</div>
              </div>
            </div>
            <div class="abstraction-topic">Abstract</div>
            <div class="abstraction">
              ${abstract}
            </div>
            <div class="justify-content-end mx-2">
            </div>
          `;
          
          divSet.appendChild(researchDetails);
          const readMoreBtn = researchDetails.querySelector(".readmore");
          readMoreBtn.addEventListener("click", function() {
            toggleAbstract(researchDetails);
          });
        });
      }
      
      function toggleAbstract(researchDetails) {
        const abstraction = researchDetails.querySelector(".abstraction");
        abstraction.classList.toggle("expanded");
        const readMoreBtn = researchDetails.querySelector(".readmore");
        if (abstraction.classList.contains("expanded")) {
          readMoreBtn.textContent = "Show Less";
        } else {
          readMoreBtn.textContent = "Read more";
        }
      }
      
  
    function toggleVisibility(card) {
      const subCards = card.querySelectorAll(".sub-card");
      const toggleBtn = card.querySelector(".toggle-btn");
      if (toggleBtn.textContent === "Show Less") {
        for (let i = 3; i < subCards.length; i++) {
          subCards[i].classList.add("hidden");
        }
        toggleBtn.textContent = "Show More";
      } else {
        subCards.forEach(subCard => {
          subCard.classList.remove("hidden");
        });
        toggleBtn.textContent = "Show Less";
      }
    }
  });
//read more button
//   function myFunction() {
//     var dots = document.getElementById("dots");
//     var moreText = document.getElementById("more");
//     var btnText = document.getElementById("myBtn");
  
//     if (dots.style.display === "none") {
//       dots.style.display = "inline";
//       btnText.innerHTML = "Read more";
//       moreText.style.display = "none";
//     } else {
//       dots.style.display = "none";
//       btnText.innerHTML = "Read less";
//       moreText.style.display = "inline";
//     }
//   }
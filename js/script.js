function addOverlay() {
          var element = document.getElementById("overlayContent");
          element.classList.add("overlay");
      }

      function removeOverlay() {
          var element = document.getElementById("overlayContent");
          element.classList.remove("overlay");
      }

      function removeSearchResult() {
          var element = document.getElementById("searchResult");
          element.remove();
          removeOverlay();
      }

      function clearForm() {
          var element = document.getElementById("wordForm");
          element.reset();
          console.log("working");
      }
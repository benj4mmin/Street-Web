
// Find each of the .open-panel-button's and attach an event to them.
document.querySelectorAll('.open-panel-button').forEach(function(panelButton) {


// This click event adds the .open class to the selected panel which is specified by the [data-panel] attribute and removes the .open class from all other panels.
panelButton.addEventListener("click", function() {

    target = document.querySelector('.about-panel[data-panel="' + this.getAttribute("data-panel") + '"]');
    others = document.querySelectorAll('.about-panel:not([data-panel="' + this.getAttribute("data-panel") + '"])');

    if (!target.classList.contains("open")) {

      target.classList.add("open");

    }

    others.forEach(function(otherPanel) {
      otherPanel.classList.remove("open");
    });

  });

});

// Add the functionality for close buttons to actually close the panel.
document.querySelectorAll(".close-panel").forEach(function(closeButton) {
  closeButton.addEventListener("click", function() {
    // Find the parent .side-panel and remove the .open class.
    findAncestor(this, "about-panel").classList.remove("open");
  });
});

function findAncestor(el, cls) {
  while ((el = el.parentElement) && !el.classList.contains(cls));
  return el;
}

function openNav() {
  document.getElementById("myNav").style.width = "25%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}

function revealMore(button) {
  // Get the next sibling element which is the <p> with the answer
  const answer = button.nextElementSibling;
  
  // Toggle the display of the answer
  if (answer.style.display === "none" || !answer.style.display) {
    answer.style.display = "block";
    button.innerHTML = button.innerHTML.replace("▼", "▲");
  } else {
    answer.style.display = "none";
    button.innerHTML = button.innerHTML.replace("▲", "▼");
  }
}
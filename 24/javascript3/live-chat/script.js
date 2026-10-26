function sendMessage() {
  const userInput = document.getElementById("user-input");
  const userMesssage = userInput.value.trim();

  if (!userMesssage) return;

  console.log(userMesssage);
  alert(userMesssage);
}

function sendMessage() {
  const input = document.getElementById("user-input");
  const message = input.value.trim();
  if (!message) return;
  const chatBox = document.getElementById("chat-box");
  const userMesssage = document.createElement("div");
  userMesssage.className = "user-message";
  userMesssage.innerText = message;
  chatBox.appendChild(userMesssage);
  input.value = "";
  setTimeout(() => {
    const botMsg = document.createElement("div");
    botMsg.className = "bot-message";
    botMsg.innerText = generateBotReply(message);
    chatBox.appendChild(botMsg);
    chatBox.scrollTop = chatBox.scrollHeight;
  }, 2000);
}

function generateBotReply(message) {
  var msg = message.toLowerCase();
  if (msg.includes("water")) return "need water";
  if (msg.includes("fertilizer")) return "need fertilizer";
  if (msg.includes("hi")) return "hello";

  return "Ok";
}

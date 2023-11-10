<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Porozmawiaj z Botem</title>
    <style>
body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    margin: 0;
    padding: 50px;
    position: relative;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.logo-container {
    position: absolute;
    top: 0;
    left: 0;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.logo-container img {
    max-width: 100px;
    margin: 10px;
    box-shadow: 0 0 15px 10px black !important;
    border-radius: 5px;
}

.main-container {
    width: 80%;
    margin: 0 auto;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.chat-container {
    padding: 20px;
    background-color: #fff;
    border: 1px solid #ccc;
    box-shadow: 0px 0px 10px black;
    border-radius: 5px;
}

.chat-box {
    height: 60vh;
    border: 1px solid grey;
    padding: 10px;
    overflow-y: scroll;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.chat-input {
    margin-top: 10px;
    background-color: #f0f0f0;
    display: flex;
    justify-content: space-between;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.chat-input input[type="text"] {
    width: 82%; /* Same as chat box, minus button */
    padding: 5px;
    border-radius: 5px;
    border: 1px solid grey;
}

.chat-input button {
    width: 15%;
    padding: 5px;
    background-color: #007bff;
    color: white;
    border: none;
    cursor: pointer;
    margin-left: 1%; /* Margin between input and button */
    border-radius: 5px;
    box-shadow: 10px black;
}

.chat-input button:hover {
    background-color: #0056b3;
}
.chat-message {
    padding: 10px;
    margin: 15px 0;
    border-radius: 5px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
}

.question {
    background-color: #f0f0f0;
    padding: 10px;
    border-radius: 5px;
    margin: 5px;
    text-align: right;
}

.answer {
    background-color: #d9eefa;
    padding: 10px;
    border-radius: 5px;
    margin: 5px;
    text-align: left;
}



    </style>
</head>
<body>
    <div class="logo-container">
        <img src="chatbot-logo.png" alt="Logo Chatbota">
    </div>
    <div class="main-container">
        <div class="chat-container">
           <div class="chat-box" id="chat-box">
                <?php foreach ($_SESSION['responses'] as $question => $answer):?>
                    <div class="chat-message">
                        <div class="question"><?php echo $question;?></div>
                        <div class="answer"><?php echo $answer;?></div>
                    </div>
                <?php endforeach; ?>
            </div>
            <form action="chatbot.php" method="post" class="chat-input">
                <input type="text" name="userMessage" id="userMessage" placeholder="Zadaj pytanie..." required>
                <button type="submit">Wyślij</button>
            </form>
        </div>
    </div>
</body>
<script>
    var chatBox = document.getElementById("chat-box");
    chatBox.scrollTop = chatBox.scrollHeight;
    var inputElement = document.getElementById("userMessage");
    inputElement.focus();
</script>
</html>
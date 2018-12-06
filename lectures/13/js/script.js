var questions = [{
    question : "When a user views a page containing a JavaScript program, which machine actually executes the script?",
    choices : [ "The User's machine running a Web browser",
        "The Web server",
        "A central machine deep within Netscape's corporate offices",
        "None of the above"],
    correctAnswer : 0
},{
    question : "Which of the following can't be done with client-side JavaScript?",
    choices : [ "Validating a form",
        "Sending a form's contents by email",
        "Storing the form's contents to a database file on the server",
        "None of the above"],
    correctAnswer : 2
},{
    question : "Using _______ statement is how you test for a specific condition",
    choices : [ "select",
        "if",
        "for",
        "none of the above"],
    correctAnswer : 1
},{
    question : "What was the old name of Sri Lanka?",
        choices : [ "Burma",
        "Ceylon",
    "Batavia",
    "Rawan Lanka"],
    correctAnswer : 1
},{
        question : "Who is called the father of Modern Psychology?",
        choices : [ "Sigmund Freud",
            "Ibn-e-Khaldoom",
            "Adams Smith",
            "Charless Darwin"],
        correctAnswer : 0
    }
];

var currentQuestion = 0;
var correctAnswers = 0;
var quizOver = false;
displayCurrentQuestion();

function displayNext() {
    if(currentQuestion + 1 < questions.length)
    {
        var Answer = document.querySelector("input[name = 'q']:checked");
        if(Answer == null) {
            var msg = document.getElementById("quiz-message");
            msg.style.color = 'red';
            msg.style.display = "block";
            msg.innerText = "No option was Selected";
        }
        else if (Answer.value == questions[currentQuestion].correctAnswer) {
                correctAnswers++;
        }
        currentQuestion++;
        displayCurrentQuestion();
    }
    else
    {
        displayScore();
        quizOver = true;
    }
}

function displayCurrentQuestion() {
    document.getElementById("question").innerHTML = " ";
    document.getElementById("choice-list").innerHTML = " ";
    document.getElementById("quiz-message").innerHTML = " ";
    document.getElementById("question").innerHTML = questions[currentQuestion].question;
    for (var i = 0; i< questions[currentQuestion].choices.length; i++){
        document.getElementById("choice-list").innerHTML+=`<li><input type = "radio" name='q' value = "' + i + "'>${questions[currentQuestion].choices[i]}</li>`;
    }
}

function resetQuiz() {
    currentQuestion = 0;
    correctAnswers = 0;
    hideScore();
}

function displayScore() {
    document.getElementById("result").innerHTML = "you scored: " + correctAnswers + " out of: " + questions.length;
    document.getElementById("result").style.display = 'block';
}

function hideScore() {
    document.getElementById("result").style.display = 'none';
}
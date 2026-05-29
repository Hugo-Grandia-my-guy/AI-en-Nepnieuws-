// quiz
let score = 0;
let answeredQuestions = { 1: false, 2: false, 3: false };

function checkAnswer(questionNum, type, element) {
    if (answeredQuestions[questionNum]) return;

    answeredQuestions[questionNum] = true;
    const feedbackDiv = document.getElementById(`feedback-${questionNum}`);

    const options = element.parentElement.getElementsByClassName('option-card');
    for(let opt of options) {
        opt.style.cursor = 'default';
    }

    if (type === 'echt') {
        score++;
        element.classList.add('correct');
        feedbackDiv.innerHTML = "✅ <strong>Correct!</strong> Dit is een echte foto. Goed gezien!";
        feedbackDiv.className = "quiz-feedback correct-text";
    } else {
        element.classList.add('wrong');
        feedbackDiv.innerHTML = "❌ <strong>Helaas!</strong> Dit beeld is gegenereerd door AI. Let op de vreemde details in de texturen.";
        feedbackDiv.className = "quiz-feedback wrong-text";
    }

    if (answeredQuestions[1] && answeredQuestions[2] && answeredQuestions[3]) {
        showFinalScore();
    }
}

function showFinalScore() {
    const banner = document.getElementById('quiz-score-banner');
    const scoreText = document.getElementById('total-score-text');
    banner.style.display = 'block';
    scoreText.innerHTML = `Je hebt <strong>${score}</strong> van de 3 echte foto's correct geraden.`;
}
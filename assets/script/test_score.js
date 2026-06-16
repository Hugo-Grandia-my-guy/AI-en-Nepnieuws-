let score = 0;

function finishTest(event, testName, maxScore) {
    if (event) event.preventDefault();

    const correctAnswers = document.querySelectorAll('[data-correct="true"]');
    score = 0;

    correctAnswers.forEach(answer => {
        if (answer.checked) {
            score++;
        }
    });

    localStorage.setItem(`${testName}_score`, score);
    localStorage.setItem(`${testName}_max`, maxScore);

    window.location.href = 'index.php?page=score';
}

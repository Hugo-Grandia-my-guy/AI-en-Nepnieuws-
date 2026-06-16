function finishTest(event, testName, maxScore) {
    if (event) event.preventDefault();

    const checkedCorrectAnswers = document.querySelectorAll('input[data-correct="true"]:checked');

    let finalScore = checkedCorrectAnswers.length;

    localStorage.setItem(`${testName}_score`, finalScore);
    localStorage.setItem(`${testName}_max`, maxScore);

    window.location.href = 'index.php?page=score';
}
function loadScores() {

    const tests = [
        { key: 'ai', title: 'AI Test' },
        { key: 'text', title: 'Tekst Test' },
        { key: 'photo', title: 'Foto & Video Test' },
        { key: 'general', title: 'Algemeen Test' }
    ];

    let totalScore = 0;
    let totalMax = 0;

    tests.forEach(test => {

        const score =
            parseInt(localStorage.getItem(`${test.key}_score`)) || 0;

        const max =
            parseInt(localStorage.getItem(`${test.key}_max`)) || 0;

        totalScore += score;
        totalMax += max;

        document.getElementById(`${test.key}-score`)
            .innerHTML = `${score} / ${max}`;
    });

    document.getElementById('total-score')
        .innerHTML = `${totalScore} / ${totalMax}`;
}

window.onload = loadScores;
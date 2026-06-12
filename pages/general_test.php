<h1>verdieping test</h1>

    <h2>Vraag #1</h2>
    <p>De afgelopen jaren is het gebruik van kunstmatige intelligentie (AI) in het onderwijs sterk toegenomen in scholen.
    Door verschillende manieren is dat gebeurd namelijk door:
    kennis te maken met Adobe Illustrastor je kan daar filters op maken helderheid toe te voegen en shaduwen te maken.</p>
        <legend class="legend">Selecteer het juiste antwoord</legend>
        <div class="answers">
            <div class="radio-option">
                <input type="radio" name="Q1" id="Q1_A1" checked> 
                <label for="Q1_A1">Watermerken</label>
            </div>

            <div class="radio-option">
                <input type="radio" name="Q1" id="Q1_A2">
                <label for="Q1_A2">modelhallucinaties</label>
            </div>

            <div class="radio-option">
                <input type="radio" name="Q1" id="Q1_A3">
                <label for="Q1_A3">Generative AI</label><!-- correct answer -->
            </div>

            <div class="radio-option">
                <input type="radio" name="Q1" id="Q1_A4">
                <label for="Q1_A4">deepfakes</label>
            </div>
        </div>
    <h2>Vraag #2</h2>
    <p>veel mensen spelen wel een game die AI gebruiken zeker een openworld game
        bijv minecraft, pokemon en zelfs fortnite, daar gebruiken ze Generative AI voor random wapen plaatsing, NPC’s (non playable character) voor loop patronen en world generation.</p>
         <legend class="legend">Selecteer het juiste antwoord</legend>
        <div class="answers">
            <div class="radio-option">
                <input type="radio" name="Q2" id="Q2_A1" checked> 
                <label for="Q2_A1">Generative AI</label>
            </div>

            <div class="radio-option">
                <input type="radio" name="Q2" id="Q2_A2">
                <label for="Q2_A2">Chatbots</label>
            </div>

            <div class="radio-option">
                <input type="radio" name="Q2" id="Q2_A3">
                <label for="Q2_A3">video generating</label>
            </div>

            <div class="radio-option">
                <input type="radio" name="Q2" id="Q2_A4" checked> <!-- correct answer -->
                <label for="Q2_A4">deeplearning</label>
            </div>
        </div>
    <h2>Vraag #3</h2>
      <div class="quiz-container">
    <h2>Photo & Video Quiz: Echt of AI?</h2>

    <p>Klik op de afbeelding die volgens jou **ECHT** is. Let goed op de details!</p>

    <div class="quiz-question" id="q2">
        <h3>Ronde 1: Welk huis is echt?</h3>

        <div class="quiz-options">
            <div class="option-card" onclick="checkAnswer(1, 'echt', this)">
                <img src="assets/img/house_real_quiz.jpg" alt="Huis 1">
                <span class="label">Optie A</span>
            </div>

            <div class="option-card" onclick="checkAnswer(1, 'ai', this)">
                <img src="assets/img/house_AI_quiz.jpg" alt="Huis 2">
                <span class="label">Optie B</span>
            </div>
        </div>

        <div class="quiz-feedback" id="feedback-1"></div>
    </div>

<div class="bot_button">
    <a href="index.php?page=score" onclick="finishTest('text', 4)">
        Test afronden
    </a>
</div>

<script src="assets/script/test_score.js"></script>
    <h1>Photo & Video</h1>

    <h3>Vraag 1: AI maakt gebruik van Digitale hygiëne om afbeeldingen te creëren?</h2>

        <legend class="legend">Selecteer het juiste antwoord</legend>
        <div class="answers">
            <div class="radio-option">
                <input type="radio" name="Q1" id="Q1_A1">
                <label for="Q1_A1">True</label>
            </div>

            <div class="radio-option">
                <input type="radio" name="Q1" id="Q1_A2" checked>
                <label for="Q1_A2">False</label>
            </div>
        </div>
     <h3>Vraag 2: Als een video afkomstig is van een bekend socialmediaplatform, is de kans op manipulatie verwaarloosbaar.</h2> 
        <legend class="legend">Selecteer het juiste antwoord</legend>
        <div class="answers">
            <div class="radio-option">
                <input type="radio" name="Q2" id="Q2_A1">
                <label for="Q2_A1">True</label>
            </div>

            <div class="radio-option">
                <input type="radio" name="Q2" id="Q2_A2" checked>
                <label for="Q2_A2">False</label>
            </div>
        </div>  
    <h3>Vraag 3: Een video waarin iemand natuurlijk knippert, correcte lichtreflecties in de ogen heeft en een logische kijkrichting toont, kan nog steeds een deepfake zijn.</h3>    
            <legend class="legend">Selecteer het juiste antwoord</legend>
            <div class="answers">
                <div class="radio-option">
                    <input type="radio" name="Q3" id="Q3_A1" checked>
                    <label for="Q3_A1">True</label>
                </div>
    
                <div class="radio-option">
                    <input type="radio" name="Q3" id="Q3_A2">
                    <label for="Q3_A2">False</label>
                </div>
            </div>
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

    <div class="quiz-question" id="q2">
        <h3>Ronde 2: Welke kat is echt?</h3>

        <div class="quiz-options">
            <div class="option-card" onclick="checkAnswer(2, 'echt', this)">
                <img src="assets/img/cat_real_quiz.jpg" alt="Kat 1">
                <span class="label">Optie A</span>
            </div>

            <div class="option-card" onclick="checkAnswer(2, 'ai', this)">
                <img src="assets/img/cat_ai_quiz.jpg" alt="Kat 2">
                <span class="label">Optie B</span>
            </div>
        </div>

        <div class="quiz-feedback" id="feedback-2"></div>
    </div>

    <div class="quiz-question" id="q3">
        <h3>Ronde 3: Welk gezicht is echt?</h3>

        <div class="quiz-options">
            <div class="option-card" onclick="checkAnswer(3, 'ai', this)">
                <img src="assets/img/mens_ai_quiz.jpg" alt="Gezicht 1">
                <span class="label">Optie A</span>
            </div>

            <div class="option-card" onclick="checkAnswer(3, 'echt', this)">
                <img src="assets/img/mens_real_quiz.jpg" alt="Gezicht 2">
                <span class="label">Optie B</span>
            </div>
        </div>

        <div class="quiz-feedback" id="feedback-3"></div>
    </div>

    <div id="quiz-score-banner" style="display: none;">
        <hr>
        <h3>Quiz Afgerond!</h3>
        <p id="total-score-text"></p>
    </div>
</div>

<script src='assets/script/script.js'></script>     

<div class = 'bot_button'>
    <a href="index.php?page=score">Klaar?</a>
</div>
<style>
    body {
        background-image: url("https://dadoroom.com/vinos/Assets/imgs/bg/bg-2-min.jpg");

        background-size: cover;
        background-repeat: no-repeat;
    }

    .dr_grid {
        width: 68%;
        margin: 0 auto;
        background-color: #fff;
        padding: 10px 50px 50px 50px;
        border: 2px solid #7c82;
        display: flex;
        flex-direction: column;
        min-height: 620px;
    }

    * {
        box-sizing: content-box;
    }

    .buttons img {
        width: 150px;
        background-color: #fff;
    }

    .dr_grid h1 {
        font-family: "monospace";
        background-color: #22161c;
        font-size: 35px;
        text-align: center;
        color: #ffffff;
        padding: 2px 0px;
    }

    hr {
        margin-top: 50px;
        color: red;
        background-color: #22161c;
        height: 2px;
        border: none;
    }

    #score {
        color: #22161c;
        text-align: center;
        font-size: 30px;
    }

    .dr_grid #question {

        text-align: center;
        font-family: "monospace";
        font-size: 30px;
        color: #22161c;
    }

    .buttons {
        margin-top: 30px;

    }

    .buttons.ocultar {
        opacity: 0;
    }


    #btn0,
    #btn1,
    #btn2,
    #btn3,
    #btn4,
    #btn5,
    #btn6,
    #btn7,
    #btn8,
    #btn9 {

        padding: 0px;
        font-size: 20px;
        color: #fff;
        border: none;
        margin: 10px 20px 10px 0px;

    }

    #btn0:hover,
    #btn1:hover,
    #btn2:hover,
    #btn3:hover,
    #btn4:hover,
    #btn5:hover,
    #btn6:hover,
    #btn7:hover,
    #btn8:hover,
    #btn9:hover {
        cursor: pointer;
        background-color: #2e2e2e57;
        border: solid 1px black;
    }

    #btn0:focus,
    #btn1:focus,
    #btn2:focus,
    #btn3:focus,
    #btn4:focus,
    #btn5:focus,
    #btn6:focus,
    #btn7:focus,
    #btn8:focus,
    #btn9:focus {
        outline: 0;
    }



    #progress {
        color: #2b2b2b;
        font-size: 18px;
    }

    .button,
    .button-label,
    .customer button,
    .shopify-challenge__button {
        font-size: 1.5rem;
        letter-spacing: .1rem;
        line-height: calc(1 + .2 / var(--font-body-scale));
    }

    .button,
    .customer button,
    .shopify-challenge__button {
        cursor: pointer;
        display: inline-flex;
        justify-content: center;
        align-items: center;
        box-sizing: border-box;
        font: inherit;
        padding: 0.9rem 3rem 1.1rem;
        text-decoration: none;
        border: 0.1rem solid transparent;
        border-radius: 0;
        background-color: #121212;
        box-shadow: 0 0 0 0.1rem #121212;
        color: #fff;
        min-width: 12rem;
        min-height: 4.5rem;
        transition: box-shadow 100ms ease;
        -webkit-appearance: none;
        appearance: none;
    }

    .mensajeGuardado {
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .columna {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 500px;
    }

    #contenedor {
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>
<div id="contenedor" class="container  ">
    <div class="dr_grid">
        <div id="dr-quiz-body">
            <h1>QUIZZ WINE BOX CLUB</h1>
            <hr style="margin-bottom: 20px">
            <p id="question"></p>
            <div class="buttons" id="myDIV">
                <button id="btn0"><span id="choice0"></span></button>
                <button id="btn1"><span id="choice1"></span></button>
                <button id="btn2"><span id="choice2"></span></button>
                <button id="btn3"><span id="choice3"></span></button>
                <button id="btn4"><span id="choice4"></span></button>
                <button id="btn5"><span id="choice5"></span></button>
                <button id="btn6"><span id="choice6"></span></button>
                <button id="btn7"><span id="choice7"></span></button>
                <button id="btn8"><span id="choice8"></span></button>
                <button id="btn9"><span id="choice9"></span></button>

                <hr>

                <div>
                    <p id="progress">Pregunta x de y</p>
                </div>
                <div class="text-center">

                </div>
            </div>
        </div>
        <div id="cuestionario" style="display: none;">
            <div class="columna"> 

                <label>Ingresa tu correo </label>
                <input type="email" name="email" id="v_email">
                <br>
                <div class="w-100 text-center">

                    <input type="button" value="Guardar" id="btnGuardarEmail" class="btn btn-primary  button button--primary">
                </div>
            </div>
        </div>
        <input class=" button button--primary" id="btnEnviarResultados" style="display: none;" value="Enviar" type="button">
    </div>
</div>



<?php include_once 'Views/complementos/referencias/referencias_footer.php'; ?>
<script type="text/javascript">
    var respuestas = [];
    var respuestas1 = [];
    var images = {
        "Principiante": "A1.png",
        "Intermedio": "A2.png",
        "Avanzado": "A3.png",
        "Experto": "A4.png",

        "Vino Espumoso": "B1.png",
        "Vino Blanco": "B2.png",
        "Vino Rosado": "B3.png",
        "Vino Tinto": "B4.png",
        "Vino Dulce": "B5.png",

        "Fruta Cítrica": "C1.png",
        "Fruta de Hueso": "C2.png",
        "Fruta Exótica": "C3.png",
        "Fruta Tropical": "C4.png",

        "Especiados": "D1.png",
        "Florales": "D2.png",
        "Herbales": "D3.png",
        "Minerales": "D4.png",

        "Panaderia": "E1.png",
        "Miel": "E2.png",
        "Compotados": "E3.png",
        "Frutos Secos": "E4.png",

        "Frutos Negros Higo": "F1.png",
        "Frutos Negros Mora": "F2.png",
        "Frutos Rojos Fresa": "F3.png",
        "Frutos Rojos Cereza": "F4.png",

        "Barrica Chocolate": "G1.png",
        "Barrica Café": "G2.png",
        "Sin Barrica Pasas": "G3.png",
        "Sin Barrica Mermelada": "G4.png",


        "Malbec": "H1.png",
        "Cabernet": "H2.png",
        "Shira": "H3.png",
        "Tempranillo": "H4.png",

        "Francia": "Z1.png",
        "Italia": "Z2.png",
        "Portugal": "Z3.png",
        "España": "Z4.png",
        "Estados Unidos": "Z5.png",
        "Argentina": "Z6.png",
        "Chile": "Z7.png",
        "México": "Z8.png",
        "Australia": "Z9.png",
        "Nueva Zelanda": "Z10.png"


    }
    const cuestionario = () => {
        console.log("cuestionario")
        $("#cuestionario").show("slow");
        $("#dr-quiz-body").html("")
        $("#btnGuardarEmail").on("click", function() {
            $("#cuestionario").hide("slow");
            var usuario = $("#v_email").val();
            if (usuario != "") {

                showScores();
                $("#btnEnviarResultados").show("slow");
            } else {
                alert("Coloca un correo")
            }

        });
    }

    function populate() {

        if (quiz.isEnded()) {
            console.log("Finalizo")
            cuestionario();

        } else {
            // show question
            var element = document.getElementById("question");
            element.innerHTML = quiz.getQuestionIndex().text;

            // show options
            var choices = quiz.getQuestionIndex().choices;
            for (var i = 0; i < choices.length; i++) {
                var element = document.getElementById("choice" + i);
                //element.innerHTML = images[choices[i]] ? '<img src="../Assets/imgs/quiz/' + images[choices[i]] + '"/>' : choices[i];
                element.innerHTML = images[choices[i]] ? '<img src="https://dadoroom.com/vinos/Assets/imgs/quiz/' + images[choices[i]] + '"/>' : choices[i];
                guess("btn" + i, choices[i]);
            }

            showProgress();
        }
    };

    function guess(id, guess) {
        var button = document.getElementById(id);


        button.onclick = function() {
            const count = respuestas.push(id);
            console.log(count)
            quiz.guess(guess);
            populate();

        }

    };




    function showProgress() {
        var currentQuestionNumber = quiz.questionIndex + 1;
        var element = document.getElementById("progress");
        element.innerHTML = "Pregunta " + currentQuestionNumber + " de " + quiz.questions.length;
    };

    function showScores() {
        var gameOverHTML = "<h1>Resultados</h1>";
        gameOverHTML += "<h2 id='score'> Tus resultados:  </h2>";

        $.each(respuestas1, function(key, value) {
            /*
            var x = document.getElementById("myDIV"); //esconder div

            x.style.display = "block";
*/
            gameOverHTML += "<br> <h3>" + (key + 1) + " " + value + "</h3>";
        })
        $('#buttons').remove();
        var element = document.getElementById("dr-quiz-body");
        element.innerHTML = gameOverHTML;
    };

    // create questions
    var questions = [
        new Question("¿Qué tanto sabes de vinos?", ["Principiante", "Intermedio", "Avanzado"], "Principiante"),

        new Question("¿Qué estilo de vino te gusta más?", ["Vino Espumoso", "Vino Blanco", "Vino Rosado", "Vino Tinto", "Vino Dulce"], "Vino Espumoso"),
        new Question("¿Cuál de las siguientes frutas te gusta más?", ["Fruta Cítrica", "Fruta de Hueso", "Fruta Exótica", "Fruta Tropical", ""], "Fruta Cítrica"),
        new Question("¿Cuál de los siguientes aromas te gusta más?", ["Especiados", "Florales", "Herbales", "Minerales", ""], "Especiados"),
        new Question("¿Qué aroma crees que acompañe mejor a un vino blanco?", ["Panaderia", "Miel", "Compotados", "Frutos Secos", ""], "Miel"),
        new Question("De las siguientes frutas ¿cuál prefieres?", ["Frutos Negros Higo", "Frutos Negros Mora", "Frutos Rojos Fresa", "Frutos Rojos Cereza", ""], "Frutos Rojos Fresa"),
        new Question("¿Qué sabor disfrutas más?", ["Barrica Chocolate", "Barrica Café", "Sin Barrica Pasas", "Sin Barrica Mermelada", ""], "Barrica Chocolate"),
        new Question("¿Qué sabor disfrutas más?", ["Malbec", "Cabernet", "Shira", "Tempranillo", ""], "Malbec"),
        new Question("¿De qué país consumes más vinos?", ["Francia", "Italia", "Portugal", "España", "Estados Unidos", "Argentina", "Chile", "México", "Australia", "Nueva Zelanda"], "Francia"),
    ];

    function Question(text, choices, answer) {
        this.text = text;
        this.choices = choices;
        this.answer = answer;

    }

    Question.prototype.isCorrectAnswer = function(choice) {
        const count = respuestas1.push(choice);

        return this.answer === choice;
    }


    function Quiz(questions) {
        this.score = 0;
        this.questions = questions;
        this.questionIndex = 0;
    }

    Quiz.prototype.getQuestionIndex = function() {
        return this.questions[this.questionIndex];
    }

    Quiz.prototype.guess = function(answer) {
        if (this.getQuestionIndex().isCorrectAnswer(answer)) {
            this.score++;
        }

        this.questionIndex++;
    }

    Quiz.prototype.isEnded = function() {
        return this.questionIndex === this.questions.length;
    }

    // create quiz
    var quiz = new Quiz(questions);

    // display quiz
    populate();
    $("#btnEnviarResultados").on("click", function() {
        $(this).hide("fast")
        //var usuario = $("#dr-quiz").data("origen");
        var usuario = $("#v_email").val();

        var resultados = JSON.stringify(respuestas1)
        console.log(usuario);

        $.ajax({

            dataType: "json",
            data: {
                Resultados: resultados,
                usuario: usuario
            },
            //url: '../Quiz/GuardarResultados',
            url: 'https://dadoroom.com/vinos/Quiz/GuardarResultados',
            type: 'post',
            success: function(response) {
                console.log("Bien");
                console.log(response)
                $("#dr-quiz-body").html("<div style='height: 100%;display: flex;justify-content: center;align-items: center;'><h2 >Encuesta Guardada</h2></div>")
            },
            error: function(error) {
                console.log("Error");
                console.log(error);
                alert("Ocurrio un error");
            }
        });


    })
</script>
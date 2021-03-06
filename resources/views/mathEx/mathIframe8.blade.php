
	<link rel="stylesheet" href=" {{asset("/css/bootstrap.min.css")}}" />
    <link rel="stylesheet" href=" {{asset('/css/style.css')}} " />




	<style>
#sectionMain {
    text-align: center;
}

.site-btn {
    background: lightskyblue
}

.correctAnswer{
    background: lightgreen;
}
	</style>



	<section class="top-letest-product-section">


	    <div class="section-heading text-center">
	        <h2>{{$courseName}}</h2>
            <div class="line-shape"></div>
            <br>
            <h3 class="">Your points: {{$mathPoints}}</h3>


            <br>
            <br>
            <h4>Examples: 2.6 rounded is 3. 1.3 rounded is 1 </h4>

    

	    </div>

	    </div>

	    </div>

	    <br>
	    <hr>



	   




	    <div id="sectionMain">

	        <p class="nameOfExP">Round <span id="choiceOne"></span>  <span id="choiceTwo"></span>  </p>

	        <input class="answerInput" type="text" name="answer" placeholder="Answer">
            <button onclick="checkIfCorrect()" class="site-btn" type="submit">Submit</button>
            
            <div style="display:none" class="wrongAnswerDiv">
                <p class="wrongAnswerError">Incorrect!</p>
            </div>

            <div style="display:none" class="correctAnswerDiv">
                    <p class="correctAnswerError">Good job! Time for another one</p>
                    

                    <form style="display:none" id="formSuccess" action="{{route('/mathSuccess')}}" method="post">
                    @csrf
                    <input style="display:none" type="text" name="givenPoints" value="1">
                    </form>

                </div>

        </div>
        



        <script>
                var precision = 100; // 2 decimals

        
                let choice1 = Math.floor(Math.random() * (20 * precision - 1 * precision) + 1 * precision) / (1*precision);
                
                document.querySelector('#choiceOne').textContent = choice1;

                let correctAns = document.querySelector(".correctAnswerDiv")
                let wrongAns = document.querySelector(".wrongAnswerDiv");


                function checkIfCorrect(){
                    
                    if( Math.round(choice1) == document.querySelector('.answerInput').value){
                        console.log('TRU');
                        correctAns.attributes[0].value = "display:block";
                        wrongAns.attributes[0].value = "display:none";

                        setTimeout(() => {
                            document.querySelector("#formSuccess").submit()
                        }, 1000);

                    } else {
                        wrongAns.attributes[0].value = "display:block";
                        correctAns.attributes[0].value = "display:none";
                    }
                }
                </script>


	</section>
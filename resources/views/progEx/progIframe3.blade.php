
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
            <h3 class="">Your points: {{$progPoints}}</h3>


            <h4>Comparisons. Example: <br>
            <code>
               10 > 5 <br>
            </code>
            You should know this already :)
            
            </h4>

    

	    </div>

	    </div>

	    </div>

	    <br>
	    <hr>


	   
        @if ($errors->any())
    <ul class="errorsUl">  
    @foreach($errors->all() as $error)
        <li class="errorsLi"> {{$error}}  </li>
    
    
    @endforeach
    </ul>
    @endif




	    <div id="sectionMain">

                <form target="_top" id="formSuccess" action="{{route('/progSuccess3')}}" method="post">
                    @csrf

	        <p class="nameOfExP"> 

                    <h5>Is this true?</h4>
                        <code>
                            6 > 3;<br>
                            
                            </code> </p>
        
                    <input class="answerInput" type="text" name="firstAnswer" placeholder="Answer" value="{{old('firstAnswer')}}">



                <hr>
                
                <h5>Is this true?</h4>
                <code>
                    5 > 9;<br>
                    
                    </code> </p>

            <input class="answerInput" type="text" name="secondAnswer" placeholder="Answer" value="{{old('secondAnswer')}}">
            

         
            
            
           



                <button  class="site-btn" type="submit">Submit</button>

            </form>

        </div>
        



       


	</section>
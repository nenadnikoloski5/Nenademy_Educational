
	<link rel="stylesheet" href=" {{asset('/css/bootstrap.min.css')}}" />
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


            <h4>Variables allow you to store data in them. Example: <br>
            <code>
                let a = 5;<br>
            </code>
            "let" means that the word on the right of it will be the name of the variable. So "a" is the name of the variable, and 5 is the value of it. When I first started learning programming, I was wondering how this can be useful, trust me, they are very useful.
            
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

                <form target="_top"  id="formSuccess" action="{{route('/progSuccess1')}}" method="post">
                    @csrf

	        <p class="nameOfExP"> 

                    <h5>What value is age?</h4>
                        <code>
                            let age = 24;<br>
                            
                            </code> </p>
        
                    <input class="answerInput" type="text" name="firstAnswer" placeholder="Answer" value="{{old('firstAnswer')}}">



                <hr>
                
                <h5>What value is z?</h4>
                <code>
                    let z;<br>
                    z = 5; <br>
                    
                    </code> </p>

            <input class="answerInput" type="text" name="secondAnswer" placeholder="Answer" value="{{old('secondAnswer')}}">
            

            <hr>
                
            <h5>What value is n?</h4>
            <code>
                let z;<br>
                let b; <br>
                n = 55; <br>
                
                </code> </p>
                <br>


        <input class="answerInput" type="text" name="thirdAnswer" placeholder="Answer" value="{{old('thirdAnswer')}}">
            
            
           



                <button  class="site-btn" type="submit">Submit</button>

            </form>

        </div>
        



       


	</section>
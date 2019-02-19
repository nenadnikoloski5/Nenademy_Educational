	@include('partials.header')


	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/font-awesome.min.css" />
	<link rel="stylesheet" href="css/slicknav.min.css" />
	<link rel="stylesheet" href="css/jquery-ui.min.css" />
	<link rel="stylesheet" href="css/owl.carousel.min.css" />
	<link rel="stylesheet" href="css/animate.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/4d3.css">
	
    <script src="https://d3js.org/d3.v5.min.js"></script>



    <style>
    

    
    
    </style>

	<section class="top-letest-product-section">


	    <div class="section-heading text-center">
	        <h2>Leaderboard - Made with D3.js</h2>
	        <div class="line-shape"></div>

	        <h3 class="pointsAnnouncment">Your points: {{$myPoints}}</h3>

	    </div>

	    </div>

	    </div>

	    <br>
	    <hr>



	   



	    <div id="sectionMain">
	      


	           

	           <div id='layout'>
    <!-- <h2>Bar chart example</h2> -->
    <div id='container'>
      <svg />
    </div>
  </div>


	           

                 

	           

<script type="text/javascript">

    let allData = '<?php echo json_encode($everyonePoints) ?>';
    let newest = JSON.parse(allData);
   
    
        const svg = d3.select('svg');
        const svgContainer = d3.select('#container');
        
        const margin = 80;
        const width = 1000 - 2 * margin;
        const height = 600 - 2 * margin;
    
        const chart = svg.append('g')
          .attr('transform', `translate(${margin}, ${margin})`);
    
        const xScale = d3.scaleBand()
          .range([0, width])
          .domain(newest.map((s) => s.username))
          .padding(0.4)
        
        const yScale = d3.scaleLinear()
          .range([height, 0])
          .domain([0, 100]);
    
     
    
        chart.append('g')
          .attr('transform', `translate(0, ${height})`)
          .call(d3.axisBottom(xScale));
    
        chart.append('g')
          .call(d3.axisLeft(yScale));
    
       
    
        const barGroups = chart.selectAll()
          .data(newest)
          .enter()
          .append('g')
    
        barGroups
          .append('rect')
          .attr('class', 'bar')
          .attr('x', (g) => xScale(g.username))
          .attr('y', (g) => yScale(g.mathPoints + g.progPoints))
          .attr('height', (g) => height - yScale(g.mathPoints + g.progPoints))
          .attr('width', xScale.bandwidth())
          
    
        barGroups 
          .append('text')
          .attr('class', 'mathPoints')
          .attr('x', (a) => xScale(a.username) + xScale.bandwidth() / 2)
          .attr('y', (a) => yScale(a.mathPoints + a.progPoints) + 30)
          .attr('text-anchor', 'middle')
          .text((a) => `${a.mathPoints + a.progPoints}`)
        
        svg
          .append('text')
          .attr('class', 'label')
          .attr('x', -(height / 2) - margin)
          .attr('y', margin / 2.4)
          .attr('transform', 'rotate(-90)')
          .attr('text-anchor', 'middle')
          .text('Points')
    
     
    
        svg.append('text')
          .attr('class', 'title')
          .attr('x', width / 2 + margin)
          .attr('y', 40)
          .attr('text-anchor', 'middle')
          .text('Users with most points')
    
    
      


</script>
               

                
	             
	       
	    </div>


	</section>
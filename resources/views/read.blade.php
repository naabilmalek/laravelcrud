@include('inc.header')

<div class="container">
    <div class="row">
      &nbsp
     	<legend>Read Article</legend>
      	<p class="lead">{{$articles->title}} 
      	<br><br>{{$articles->description}} </p>
		
	  	<!-- <p><br>{{$articles->description}} </p> -->

    </div>
</div>



@include('inc.footer')
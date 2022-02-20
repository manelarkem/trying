@extends('layouts.layout')

@section('content')
<section class="featured" id="featured">
        <h1 class="heading"> <span>My Offers</span></h1>
        <a href="#divOne" class="button">Add an offer</a>
	    <div class="overlay" id="divOne">
		<div class="wrapper">
			<h2>Add an offer</h2><a class="close" href="#">&times;</a>
			<div class="content">
				<div class="container">
					<form>
						<label>Appartment name</label>
						<input placeholder="name" type="text">
                        <label>Price</label>
						<input placeholder="price" type="text">
						<label>Address</label>
						<input placeholder="road, city, country" type="text">
						<label>Description</label> 
						<textarea placeholder="description"></textarea>
						<input type="submit" value="Add">
					</form>
				</div>
			  </div>
	    	</div>
    	</div>


         
        <div class="box-container">
        @foreach($appartement as $appartement)
        <div class="box">
            <div class="image-container">
                <img src="/img/home.jpg" alt="">
            </div>
            <div class="content">
                <div class="price">
                    <h3> {{$appartement->price}}</h3>
                </div>
                <div class="location">
                    <h3> Modern Appartment</h3>
                    <p> Address</p>
                </div>
                <div class="details">
                    <h3> <i class="fas fa-expand"></i> 3500 sqft </h3>
                    <h3> <i class="fas fa-bed"></i> 3 beds </h3>
                    <h3> <i class="fas fa-bath"></i> 2 baths </h3>
                </div>
                <div class="buttons">
                    <a href="#" class="btn">delete offer</a>
                    <a href="{{url('/details')}}" class="btn">view details</a>
                </div>
            </div>
        </div>  
        @endforeach 
    </div>
    
</section>

@endsection

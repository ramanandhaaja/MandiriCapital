@extends("layout.mainlayout")
@section("container")

<div class="hero-section">
    <h1 class="center-text" >Investing in tomorrow's leaders</h1>
    <img src="{{ asset('images/home/Ellipse110.png') }}" class="bg-left-1">
    <img src="{{ asset('images/home/Ellipse111.png') }}" class="bg-left-2">
    <img src="{{ asset('images/home/Ellipse112.png') }}" class="bg-left-3">


    <a href="#" >
        <img src="{{ asset('images/home/getInvestment.png') }}" alt="Get Investment" class="button-image center-image">
    </a>

</div>

<div class="grid-container">
    <div class="card event">
        <span class="category">EVENT</span>
        <div class="card-content">
            <h2>Apply Now for Zenith Startup Accelerator</h2>
            <span class="date">June 2020</span>
        </div>
    </div>

    <div class="card white-paper">
        <span class="category">WHITE PAPER</span>
        <div class="card-content">
            <h2>Mandiri Capital Indonesia Siap Jajaki Pasar Regional dan Global</h2>
            <span class="date">June 2020</span>
        </div>
    </div>

    <div class="card podcast">
        <span class="category">PODCAST</span>
        <div class="card-content">
            <h2>Talk about GOTO</h2>
            <span class="date">June 2020</span>
        </div>
    </div>

    <div class="card news">
        <span class="category">NEWS</span>
        <div class="card-content">
            <h2>Article Title</h2>
            <span class="date">June 2020</span>
        </div>
    </div>

    <div class="card white-paper large">
        <span class="category">WHITE PAPER</span>
        <div class="card-content">
            <h2>Understanding the Basics of Stock Market Investing</h2>
            <span class="date">June 2020</span>
        </div>
    </div>
</div>


@extends('layout.layout')

@section('content')
<div class="container">
<div class="title ">
            Contact Me
   </div>
   <br> 
   <p >{{session('mssg')}} </p>

  <form action="/contact" method="POST">
    @csrf  
    <label for="fname">First-Last Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name.." required>

    <label for="email">Email</label>
    <input type="email" id="email" name="email" placeholder="Your e-mail.." required>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea required>

    <input type="submit" value="Submit">

  </form>
</div>
@endsection
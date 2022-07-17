@extends('layouts.dashboard')
@section('content')
    <section id="content">
        <nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Jobs</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<!--<h2>Hello <span>{$data->first_name}} </span><span>{$data->last_name}}</span></h2>-->
			<a href="/profile" class="profile">
				<img src="{{url('images/user.png')}}">
			</a>
		</nav>

        <div class="reportcard">
            <h1>Report a problem...</h1>
            <form action="{{route('reportmsg')}}" method="post">

                @If(Session::has('success'))
                <div class="alert-message green">
                    {{Session::get('success')}}
                </div>
            @endif
            @csrf
                <input type="hidden" name="user_id" value="{{$data->id}}">
                <input type="hidden" name="first_name" value="{{$data->first_name}}">
                <textarea name="report" id="report" cols="30" rows="10" placeholder="What seems to be the problem?"></textarea>
                <button type="submit">Send</button>
            </form>
        </div>
    </section>
@endsection
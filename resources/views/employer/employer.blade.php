<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Jobs</title>
    <link rel="stylesheet" href="{{url('/css/employer.css')}}">
</head>
<body>
    <div class="container">
        <h1>Add A Job</h1>
        <form action="{{route('job')}}" method="post">
            @If(Session::has('success'))
                <div class="alert-message green">
                    {{Session::get('success')}}
                </div>
            @endif
            @If(Session::has('fail'))
                <div class="alert-message red">
                    {{Session::get('fail')}}
                </div>
            @endif
            @csrf
                <div class="form-control">
                    <input type="text" name="job_name" required>
                    <label>Job Name</label>
                </div>
                <div class="form-control">
                <input type="text" name="job_category" required>
                    <label>Job Category</label>
                </div>         
                <div class="form-control">
                    <input type="text" name="job_desc" required>
                    <label>Job Description</label>
                </div>
                <div class="form-control">
                    <input type="text" name="job_location" required>
                    <label>Job Location</label>
                </div>
                <div class="form-control">
                    <input type="text" name="more_info" required>
                    <label>More Information</label>
                </div>
                <div class="form-control">
                    <input type="text" name="job_pay" required>
                    <label>Job Pay</label>
               </div>    
                <button type="submit" class="btn">Add Job</button>
                <p><a href="/viewjobs">Cancel</a></p>
        </form>
    </div>

    <script src="{{url('/js/employer.js')}}"></script>
</body>
</html>
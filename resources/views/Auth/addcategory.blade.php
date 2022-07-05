@extends('layouts/admin')
@section('content')
<div class="content add">
    <div class="add_user_form">
        <div class="formTitle">
            <h1>Add Category</h1>
        </div>
        <form action="" method="post">
            @csrf
                    <label for="task_category">Category Name</label>
                    <input type="text" name="task_category" id="task_category" value="" required>
            <button type="submit">Add</button><br>
        </form>
    </div>
</div>
@endsection
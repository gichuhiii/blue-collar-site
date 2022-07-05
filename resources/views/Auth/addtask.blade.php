@extends('layouts.admin')
@section('content')
<div class="content add">
    <div class="add_user_form">
        <div class="formTitle">
            <h1>Add Task</h1>
        </div>
        <form action="" method="post">
            @csrf
                    <label for="task_name">Task Name</label>
                    <input type="text" name="task_name" id="task_name" value="" required>
                    <label for="task_category">Task Category</label>
                    <input type="text" name="task_category" id="task_category" value="" required>
                    <label for="task_price">Task Price</label>
                    <input type="number" name="task_price" id="task_price"  value="" required>
            <button type="submit">Add</button><br>
        </form>
    </div>
</div>
@endsection
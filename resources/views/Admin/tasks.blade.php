@extends('layouts/admin')
@section('content')
<div class="content">
    <div class="tab">
        <ul>
            <li><a href="/categories">All Categories</a></li>
            <li><a href="/tasks">All Tasks</a></li>
        </ul>
    </div>
    <div class="content-3">
        <div class="recent-payments">
            <div class="title">
                <h2>All Tasks</h2>
                <a href="/addtask" class="btn">Add Task</a>
            </div>
            <table>
                <tr>
                    <th>Task Id</th>
                    <th>Task Name</th>
                    <th>Category</th>
                    <th>Task Price</th>
                    <th>Task Employer</th>
                    <th>Task Employee</th>
                    <th>Progress</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                <tr>
                    <td>000001</td>
                    <td>Cleaning</td>
                    <td>House</td>
                    <td>Ksh. 1000</td>
                    <td>John</td>
                    <td>Jane</td>
                    <td>Pending</td>
                    <td style="align-items: right"><a href="#" class="btn">Edit</a></td>
                    <td style="align-items: right"><a href="#" class="btn">Delete</a></td>
                </tr>
                <tr>
                    <td>000001</td>
                    <td>Cleaning</td>
                    <td>House</td>
                    <td>Ksh. 1000</td>
                    <td>John</td>
                    <td>Jane</td>
                    <td>Pending</td>
                    <td style="align-items: right"><a href="#" class="btn">Edit</a></td>
                    <td style="align-items: right"><a href="#" class="btn">Delete</a></td>
                </tr>
                <tr>
                    <td>000001</td>
                    <td>Cleaning</td>
                    <td>House</td>
                    <td>Ksh. 1000</td>
                    <td>John</td>
                    <td>Jane</td>
                    <td>Pending</td>
                    <td style="align-items: right"><a href="#" class="btn">Edit</a></td>
                    <td style="align-items: right"><a href="#" class="btn">Delete</a></td>
                </tr>
                <tr>
                    <td>000001</td>
                    <td>Cleaning</td>
                    <td>House</td>
                    <td>Ksh. 1000</td>
                    <td>John</td>
                    <td>Jane</td>
                    <td>Pending</td>
                    <td style="align-items: right"><a href="#" class="btn">Edit</a></td>
                    <td style="align-items: right"><a href="#" class="btn">Delete</a></td>
                </tr>
                <tr>
                    <td>000001</td>
                    <td>Cleaning</td>
                    <td>House</td>
                    <td>Ksh. 1000</td>
                    <td>John</td>
                    <td>Jane</td>
                    <td>Pending</td>
                    <td style="align-items: right"><a href="#" class="btn">Edit</a></td>
                    <td style="align-items: right"><a href="#" class="btn">Delete</a></td>
                </tr>
                <tr>
                    <td>000001</td>
                    <td>Cleaning</td>
                    <td>House</td>
                    <td>Ksh. 1000</td>
                    <td>John</td>
                    <td>Jane</td>
                    <td>Pending</td>
                    <td style="align-items: right"><a href="#" class="btn">Edit</a></td>
                    <td style="align-items: right"><a href="#" class="btn">Delete</a></td>
                </tr>
                <tr>
                    <td>000001</td>
                    <td>Cleaning</td>
                    <td>House</td>
                    <td>Ksh. 1000</td>
                    <td>John</td>
                    <td>Jane</td>
                    <td>Pending</td>
                    <td style="align-items: right"><a href="#" class="btn">Edit</a></td>
                    <td style="align-items: right"><a href="#" class="btn">Delete</a></td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection
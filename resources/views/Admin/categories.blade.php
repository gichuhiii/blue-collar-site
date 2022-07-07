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
                <h2>All Categories</h2>
                <a href="/addcategory" class="btn">Add Categories</a>
            </div>
            <table>
                <tr>
                    <th>Category Id</th>
                    <th>Category Name</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                <tr>
                    <td>000001</td>
                    <td>John</td>
                    <td style="align-items: right"><a href="#" class="btn">Edit</a></td>
                    <td style="align-items: right"><a href="#" class="btn">Delete</a></td>
                </tr>
                <tr>
                    <td>000001</td>
                    <td>John</td>
                    <td style="align-items: right"><a href="#" class="btn">Edit</a></td>
                    <td style="align-items: right"><a href="#" class="btn">Delete</a></td>
                </tr>
                <tr>
                    <td>000001</td>
                    <td>John</td>
                    <td style="align-items: right"><a href="#" class="btn">Edit</a></td>
                    <td style="align-items: right"><a href="#" class="btn">Delete</a></td>
                </tr>
                <tr>
                    <td>000001</td>
                    <td>John</td>
                    <td style="align-items: right"><a href="#" class="btn">Edit</a></td>
                    <td style="align-items: right"><a href="#" class="btn">Delete</a></td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection
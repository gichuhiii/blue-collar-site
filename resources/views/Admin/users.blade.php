@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="tab">
        <ul>
            <li><a href="#">All Users</a></li>
            <li><a href="#">Employers</a></li>
            <li><a href="#">Employees</a></li>
            <li><a href="#">Admins</a></li>
        </ul>
    </div>
    <div class="content-3">
        <div class="recent-payments">
            <div class="title">
                <h2>All Users</h2>
                <a href="/adduser" class="btn">Add User</a>
            </div>
            <table>
                <tr>
                    <th>User Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Role</th>
                    <th>Gender</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                <tr>
                    <td>000001</td>
                    <td>John</td>
                    <td>Doe</td>
                    <td>johndoe@gmail.com</td>
                    <td>0712345678</td>
                    <td>1</td>
                    <td>1</td>
                    <td style="align-items: right"><a href="#" class="btn">Edit</a></td>
                    <td style="align-items: right"><a href="#" class="btn">Delete</a></td>
                </tr>
                <tr>
                    <td>000001</td>
                    <td>John</td>
                    <td>Doe</td>
                    <td>johndoe@gmail.com</td>
                    <td>0712345678</td>
                    <td>1</td>
                    <td>1</td>
                    <td style="align-items: right"><a href="#" class="btn">Edit</a></td>
                    <td style="align-items: right"><a href="#" class="btn">Delete</a></td>
                </tr>
                <tr>
                    <td>000001</td>
                    <td>John</td>
                    <td>Doe</td>
                    <td>johndoe@gmail.com</td>
                    <td>0712345678</td>
                    <td>1</td>
                    <td>1</td>
                    <td style="align-items: right"><a href="#" class="btn">Edit</a></td>
                    <td style="align-items: right"><a href="#" class="btn">Delete</a></td>
                </tr>
                <tr>
                    <td>000001</td>
                    <td>John</td>
                    <td>Doe</td>
                    <td>johndoe@gmail.com</td>
                    <td>0712345678</td>
                    <td>1</td>
                    <td>1</td>
                    <td style="align-items: right"><a href="#" class="btn">Edit</a></td>
                    <td style="align-items: right"><a href="#" class="btn">Delete</a></td>
                </tr>
                <tr>
                    <td>000001</td>
                    <td>John</td>
                    <td>Doe</td>
                    <td>johndoe@gmail.com</td>
                    <td>0712345678</td>
                    <td>1</td>
                    <td>1</td>
                    <td style="align-items: right"><a href="#" class="btn">Edit</a></td>
                    <td style="align-items: right"><a href="#" class="btn">Delete</a></td>
                </tr>
                <tr>
                    <td>000001</td>
                    <td>John</td>
                    <td>Doe</td>
                    <td>johndoe@gmail.com</td>
                    <td>0712345678</td>
                    <td>1</td>
                    <td>1</td>
                    <td style="align-items: right"><a href="#" class="btn">Edit</a></td>
                    <td style="align-items: right"><a href="#" class="btn">Delete</a></td>
                </tr>
                <tr>
                    <td>000001</td>
                    <td>John</td>
                    <td>Doe</td>
                    <td>johndoe@gmail.com</td>
                    <td>0712345678</td>
                    <td>1</td>
                    <td>1</td>
                    <td style="align-items: right"><a href="#" class="btn">Edit</a></td>
                    <td style="align-items: right"><a href="#" class="btn">Delete</a></td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection
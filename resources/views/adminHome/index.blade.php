
@extends('layouts.head')

@section('content')

<div class="container">
        <nav class="navbar bg-light">
            <div>
                <a class="navbar-brand menu" href="admin.html">Home</a>
                <a class="navbar-brand menu" href="adminTeacher.html">Teacher</a>
                <a class="navbar-brand menu" href="adminCourse.html">Course</a>
            </div>
            <div>
                <a class="navbar-brand menu" href="signin.html">Sign Out</a>
            <a class="navbar-brand menu" href="#">Welcome {{session('user')->name}}</a>

            </div>
        </nav>


        <div class="row name">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <a class="nav-link active text-center" href="teacher.html">Create Course</a>
            </div>
            <div class="col-md-4">
                <a class="nav-link active text-center" href="teacher.html">Create Techer</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <h3>Course Assign</h3>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-6">
                <table class="table table-sm">
                    <tbody>
                        <tr>
                            <td>Course</td>
                            <td>
                                <select class="custom-select">
                                    <option value="1">Course One</option>
                                    <option value="2">Course Two</option>
                                    <option value="3">Course Three</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Teacher</td>
                            <td>
                                <select class="custom-select">
                                    <option value="1">Teacher One</option>
                                    <option value="2">Teacher Two</option>
                                    <option value="3">Teacher Three</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><button class="btn btn-md btn-primary" type="submit">Assign</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-6">
                <!-- Success or failed notification -->
            </div>
        </div>

        <br><br>
        <div class="row">
            <div class="col-md-6">
                <h3>Enrolled Students</h3>
            </div>
            <div class="col-md-6">
                <a class="nav-link active text-center" href="marks.html">Give Markes</a>
            </div>
        </div>
        <br>
        <div class="row">
            <table class="table table-sm">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Grade</th>
                        <th scope="col">Email</th>
                        <th scope="col">Gender</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Shaira Shuchi</td>
                        <td>A+</td>
                        <td>shaira@hotmail.com</td>
                        <td>Female</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Nayan Ahmed</td>
                        <td> - </td>
                        <td>nayan@live.com</td>
                        <td>Male</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Abdur Rahman</td>
                        <td>A</td>
                        <td>Addur@gmail.com</td>
                        <td>Male</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <footer class="mt-5 mb-3 text-muted text-center">&copy; 2018 - Laravel Sample Project</footer>

    </div>


@endsection
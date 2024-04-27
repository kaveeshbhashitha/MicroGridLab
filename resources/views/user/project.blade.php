<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <title>Add-Project</title>
</head>
<body>
    <x-app-layout>
        <!--Add research-->
        <div style="background-color: rgb(245, 245, 245); display: flex; flex-direction: column; justify-content: center; align-items: center; height: auto; padding: 30px 0 30px 0;">
            <div id="international" class="form-box shadow p-3" style="width: 80%; height: auto; background-color: white; border-radius: 5px; padding-bottom: 30px;">
                <h5>Projects - Add New Project</h5>
                <div style="width: 18%; height: 1px; border: 1px solid rgb(87, 87, 87);" class="mt-1"></div>

                <form class="my-2" method="post" class="col-4" action="{{ url('project') }}" enctype="multipart/form-data">
                    <div class="my-2">
                        @if(session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif

                        @if(session()->has('error'))
                            <div class="alert alert-danger">
                                {{ session()->get('error') }}
                            </div>
                        @endif
                    </div>
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputCity">Project Title</label>
                            <input type="text" name="projecttitle" class="form-control" id="inputCity" placeholder="Enter project title..">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Student(s) Name</label>
                            <input type="text" name="studentname" class="form-control" id="inputEmail4" placeholder="Enter student name...">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Project Instructor</label>
                            <input type="text" name="instructer" class="form-control" id="inputEmail4" placeholder="Enter instructor name...">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputCity">Other project group members (separate using ',' )</label>
                            <input type="text" name="othermembers" class="form-control" id="inputCity" placeholder="Enter project group members..">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="inputAddress">Started Date</label>
                            <input type="date" name="starteddate" class="form-control" id="inputAddress" placeholder="Enter started date..,">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputAddress">Ended Date</label>
                            <input type="date" name="endeddate" class="form-control" id="inputAddress" placeholder="Enter ended date...">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputAddress">Estimated Duration</label>
                            <input type="text" name="estduration" class="form-control" id="inputAddress" placeholder="Enter estimated duration">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputAddress">Budget (Rs.)</label>
                            <input type="text" name="budget" class="form-control" id="inputAddress" placeholder="Enter value of budget...">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-5">
                            <label for="inputCity">Progress</label>
                            <select id="inputState" class="form-control" name="progress">
                                <option selected value="ongoing">On-going</option>
                                <option value="completed">Completed</option>
                                <option value="pending">Pending</option>
                                <option value="holded">Holded</option>
                            </select>
                        </div>
                        <div class="form-group col-md-1">
                            <label for="inputCity">Rate</label>
                            <select id="inputState" class="form-control" name="rate">
                                <option selected value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputAddress">Client</label>
                            <input type="text" name="client" class="form-control" id="inputAddress" placeholder="Enter client name...">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputCity">Project URL</label>
                            <input type="text" name="url" class="form-control" id="inputCity" placeholder="Enter URL...">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Description <div class="text-danger italic">(Limit description up to maximum 100 words)</div></label>
                        <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3" placeholder="Enter small description here..."></textarea>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Upload image</label>
                            <input type="file" name="image" class="form-control" style="border: none;" id="inputPassword4" placeholder="Choose file">
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-danger">Add New</button>
                </form>
            </div>
        </div>
    </x-app-layout>
</body>
</html>
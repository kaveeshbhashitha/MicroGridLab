<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <title>Update-Project</title>
</head>
<body>
    <x-app-layout>
        <!--Add research-->
        <div style="background-color: rgb(245, 245, 245); display: flex; flex-direction: column; justify-content: center; align-items: center; height: auto; padding: 30px 0 30px 0;">
            <div id="international" class="form-box shadow p-3" style="width: 80%; height: auto; background-color: white; border-radius: 5px; padding-bottom: 30px;">
                <h5>Projects - Update Project</h5>
                <div style="width: 15%; height: 1px; border: 1px solid rgb(87, 87, 87);" class="mt-1"></div>

                <form class="my-2" action="{{ route('project.update', $project->id) }}" method="POST" enctype="multipart/form-data">
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
                    @method('PUT') 
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputCity">Project Title</label>
                            <input type="text" name="projecttitle" class="form-control" id="inputCity" value="{{ $project->projecttitle }}">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Student(s) Name</label>
                            <input type="text" name="studentname" class="form-control" id="inputEmail4" value="{{ $project->studentname }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Project Instructor</label>
                            <input type="text" name="instructer" class="form-control" id="inputEmail4" value="{{ $project->instructer }}">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputCity">Other project group members (separate using ',' )</label>
                            <input type="text" name="othermembers" class="form-control" id="inputCity" value="{{ $project->othermembers }}">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="inputAddress">Started Date</label>
                            <input type="date" name="starteddate" class="form-control" id="inputAddress" value="{{ $project->starteddate }}">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputAddress">Ended Date</label>
                            <input type="date" name="endeddate" class="form-control" id="inputAddress" value="{{ $project->endeddate }}">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputAddress">Estimated Duration</label>
                            <input type="text" name="estduration" class="form-control" id="inputAddress" value="{{ $project->estduration }}">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputAddress">Budget (Rs.)</label>
                            <input type="text" name="budget" class="form-control" id="inputAddress" value="{{ $project->budget }}">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-5">
                            <label for="inputCity">Progress</label>
                            <select id="inputState" class="form-control" name="progress">
                                <option selected value="{{ $project->progress }}">{{ $project->progress }}</option>
                                <option value="ongoing">On-going</option>
                                <option value="completed">Completed</option>
                                <option value="pending">Pending</option>
                                <option value="holded">Holded</option>
                            </select>
                        </div>
                        <div class="form-group col-md-1">
                            <label for="inputCity">Rate</label>
                            <select id="inputState" class="form-control" name="rate">
                                <option selected value="{{ $project->rate }}">{{ $project->rate }}</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputAddress">Client</label>
                            <input type="text" name="client" class="form-control" id="inputAddress" value="{{ $project->client }}">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputCity">Project URL</label>
                            <input type="text" name="url" class="form-control" id="inputCity" value="{{ $project->url }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Description <div class="text-danger italic">(Limit description up to maximum 100 words)</div></label>
                        <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3">{{ $project->description }}</textarea>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <img src="{{ $project->image }}" alt="Publication Image">
                        </div>
                        <div class="form-group col-md-8">
                            <label for="inputPassword4">Upload image</label>
                            <input type="file" name="pubimage" class="form-control" style="border: none;" id="inputPassword4" placeholder="Choose file">
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-danger">Update Project</button>
                </form>
            </div>
        </div>
    </x-app-layout>
</body>
</html>
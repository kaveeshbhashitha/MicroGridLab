<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ asset('image/admin.png') }}" type="image/x-icon">
    <title>Update-Course</title>
</head>
<body>
    <x-app-layout>
        <!--Add research-->
        <div style="background-color: rgb(245, 245, 245); display: flex; flex-direction: column; justify-content: center; align-items: center; height: auto; padding: 30px 0 30px 0;">
            <div id="international" class="form-box shadow p-3" style="width: 80%; height: auto; background-color: white; border-radius: 5px; padding-bottom: 30px;">
                <h5>Projects - Update Course</h5>
                <div style="width: 18%; height: 1px; border: 1px solid rgb(87, 87, 87);" class="mt-1"></div>

                <form class="my-2" action="{{ route('course.update', $course->id) }}" method="POST" enctype="multipart/form-data">
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
                            <label for="inputEmail4">Program Name</label>
                            <input type="text" name="coursename" value="{{ $course->coursename }}" class="form-control" id="inputEmail4" placeholder="Enter program name...">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">Duration</label>
                            <select id="inputState" class="form-control" name="duration">
                                <option selected value="{{ $course->duration }}">{{ $course->duration }} Years</option>
                                <option value="1.0">1 Year</option>
                                <option value="0.5">0.5 Year</option>
                                <option value="1.5">1.5 Years</option>
                                <option value="2">2 Years</option>
                                <option value="2.5">2.5 Years</option>
                                <option value="3">3 Years</option>
                                <option value="+3">+3 Years</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputCity">Rate</label>
                            <select id="inputState" class="form-control" name="rank">
                                <option selected value="{{ $course->rank }}">{{ $course->rank }}</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputCity">Program URL (Compulsary)</label>
                            <input type="text" name="moredetailsurl" value="{{ $course->moredetailsurl }}" class="form-control" id="inputCity" placeholder="Enter Program Detail URL...">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Description (Do not exceed more than 100 words)</label>
                        <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3">{{ $course->description }}</textarea>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <img src="{{ $course->image }}" alt="course Image">
                        </div>
                        <div class="form-group col-md-8">
                            <label for="inputPassword4">Upload image</label>
                            <input type="file" name="image" class="form-control" style="border: none;" id="inputPassword4" placeholder="Choose file">
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-danger">Update Program</button>
                </form>
            </div>
        </div>
    </x-app-layout>
</body>
</html>
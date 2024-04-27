<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <title>International</title>
</head>
<body>
    <x-admin-layout>
        <!--International-->
        <div style="background-color: rgb(245, 245, 245); display: flex; flex-direction: column; justify-content: center; align-items: center; height: 100vh; padding: 30px 0;">
            <div id="international" class="form-box shadow p-3" style="width: 80%; height: auto; background-color: white; border-radius: 5px; padding-bottom: 30px;">
                <h5>Academic people - International Update</h5>
                <div style="width: 25%; height: 1px; border: 1px solid rgb(87, 87, 87);"></div>

                <form class="my-2" class="col-4" action="{{ route('international.update', $international->id) }}" method="POST" enctype="multipart/form-data">
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
                        <div class="form-group col-md-1">
                            <label for="inputTitle">Title</label>
                            <select id="inputTitle" class="form-control" name="title" value="{{ $international->title }}">
                                <option value="Prof." {{ old('title') == 'Prof.' ? 'selected' : '' }}>Prof.</option>
                                <option value="Dr." {{ old('title') == 'Dr.' ? 'selected' : '' }}>Dr.</option>
                                <option value="Mr." {{ old('title') == 'Mr.' ? 'selected' : '' }}>Mr.</option>
                                <option value="Miss." {{ old('title') == 'Miss.' ? 'selected' : '' }}>Miss.</option>
                                <option value="Ms." {{ old('title') == 'Ms.' ? 'selected' : '' }}>Ms.</option>
                                <option value="Rev." {{ old('title') == 'Rev.' ? 'selected' : '' }}>Rev.</option>
                            </select>
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                    <div class="form-group col-md-5">
                        <label for="inputEmail4">First Name</label>
                        <input type="text" name="firstname" class="form-control" id="inputEmail4" placeholder="Enter first name" value="{{ $international->firstname }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Last Name</label>
                        <input type="text" name="lastname" class="form-control" id="inputEmail4" placeholder="Enter last name" value="{{ $international->lastname }}">
                    </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputAddress">Email</label>
                            <input type="text" name="email" class="form-control" id="inputAddress" placeholder="Enter email address" value="{{ $international->email }}">
                        </div>
                        <div class="form-group col-md-5">
                            <label for="inputAddress">Country</label>
                            <input type="text" name="country" class="form-control" id="inputAddress" placeholder="Enter country name" value="{{ $international->country }}">
                        </div>
                        <div class="form-group col-md-1">
                            <label for="inputAddress2">Rate</label>
                            <select id="inputState" class="form-control" name="rate">
                                <option selected value="1">{{ $international->rate }}</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="inputCity">Department</label>
                        <input type="text" name="department" class="form-control" id="inputCity" placeholder="Enter department" value="{{ $international->department }}">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputZip">Faculty</label>
                        <input type="text" name="faculty" class="form-control" id="inputZip" placeholder="Enter faculty" value="{{ $international->faculty }}">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputZip">University</label>
                        <input type="text" name="university" class="form-control" id="inputZip" placeholder="Enter university" value="{{ $international->university }}">
                    </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputCity">Profile URL</label>
                            <input type="text" name="profileurl" class="form-control" id="inputCity" placeholder="Enter profile URL: LinkedIn, Web or ..." value="{{ $international->profileurl }}">
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <img src="{{ $international->image }}" alt="International Image" style="height:150px; width: 150px;">
                        </div>

                        <div class="form-group col-md-8">
                            <label for="inputPassword4">Upload image</label>
                            <input type="file" name="image" class="form-control" style="border: none;" id="inputPassword4" placeholder="Choose file">
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-danger">Update international</button>
                </form>
            </div>
        </div> 
    </x-admin-layout>
</body>
</html>
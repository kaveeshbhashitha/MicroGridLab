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
    <title>Alumni</title>
</head>
<body>
    <x-admin-layout>
        <!--alumni-->
        <div style="background-color: rgb(245, 245, 245); display: flex; flex-direction: column; justify-content: center; align-items: center; height: auto; padding: 40px 0;">
            <div id="alumni" class="form-box shadow p-3" style="width: 80%; height: auto; background-color: white; border-radius: 5px; padding-bottom: 30px;">
                <h5>Academic people - Alumnis Update</h5>
                <div style="width: 15%; height: 1px; border: 1px solid rgb(87, 87, 87);"></div>

                <form class="my-2" class="col-4" action="{{ route('alumni.update', $alumni->id) }}" method="POST" enctype="multipart/form-data">
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
                        <select id="inputTitle" class="form-control" name="title" >
                            <option value="Prof." {{ old('title') == 'Prof.' ? 'selected' : '' }}>{{ $alumni->title }}</option>
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
                            <input type="text" name="firstname" class="form-control" id="inputEmail4" value="{{ $alumni->firstname }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Last Name</label>
                            <input type="text" name="lastname" class="form-control" id="inputEmail4" value="{{ $alumni->lastname }}">
                        </div>
                    </div>

                    <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputAddress">Email</label>
                        <input type="text" name="email" class="form-control" id="inputAddress" value="{{ $alumni->email }}">
                    </div>
                    <div class="form-group col-md-1">
                        <label for="inputAddress2">Degree</label>
                        <select id="inputState" class="form-control" name="degree">
                            <option selected value="PhD.">{{ $alumni->degree }}</option>
                            <option value="MSc.">PhD.</option>
                            <option value="MSc.">MSc.</option>
                            <option value="MPhil">MPhil</option>
                            <option value="BSc.">BSc.</option>
                        </select>
                    </div>
                        <div class="form-group col-md-5">
                            <label for="inputAddress2">Study area</label>
                            <input type="text" name="studyarea" class="form-control" id="inputAddress2" value="{{ $alumni->studyarea }}">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-5">
                            <label for="inputCity">Start year</label>
                            <input type="date" name="startedyear" class="form-control" id="inputCity" value="{{ $alumni->startedyear }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputZip">End year</label>
                            <input type="date" name="endedyear" class="form-control" id="inputZip" value="{{ $alumni->endedyear }}">
                        </div>
                        <div class="form-group col-md-1">
                            <label for="inputAddress2">Rate</label>
                            <select id="inputState" class="form-control" name="rate">
                                <option selected value="1">{{ $alumni->rate }}</option>
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
                            <label for="inputCity">Profile URL</label>
                            <input type="text" name="profileurl" class="form-control" id="inputCity" value="{{ $alumni->profileurl }}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputCity">Other URL</label>
                            <input type="text" name="puburl" class="form-control" id="inputCity" value="{{ $alumni->puburl }}">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <img src="{{ $alumni->alumniimage }}" alt="Alumni Image">
                        </div>
                        <div class="form-group col-md-8">
                            <label for="inputPassword4">Upload image</label>
                            <input type="file" name="alumniimage" class="form-control" style="border: none;" id="inputPassword4" placeholder="Choose file">
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-danger">Update Alumni</button>
                </form>
            </div>
        </div>
    </x-admin-layout>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <title>Update-Research</title>
</head>
<body>
    <x-admin-layout>
        <!--Add research-->
        <div style="background-color: rgb(245, 245, 245); display: flex; flex-direction: column; justify-content: center; align-items: center; height: auto; padding: 30px 0 30px 0;">
            <div id="international" class="form-box shadow p-3" style="width: 80%; height: auto; background-color: white; border-radius: 5px; padding-bottom: 30px;">
                <h5>Research - Update Research</h5>
                <div style="width: 15%; height: 1px; border: 1px solid rgb(87, 87, 87);"></div>

                <form class="my-2" class="col-4" action="{{ route('research.update', $research->id) }}" method="POST" enctype="multipart/form-data">
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
                            <label for="inputCity">Research Title</label>
                            <input type="text" name="researchtitle" class="form-control" id="inputCity" placeholder="Enter research title.." value="{{ $research->researchtitle }}">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Main Researcher Name</label>
                            <input type="text" name="researchername" class="form-control" id="inputEmail4" placeholder="Enter main researcher name..." value="{{ $research->researchername }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Research Instructor</label>
                            <input type="text" name="instructer" class="form-control" id="inputEmail4" placeholder="Enter instructor name..." value="{{ $research->instructer }}">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputCity">Other group members</label>
                            <input type="text" name="otherresearchers" class="form-control" id="inputCity" placeholder="Enter others.." value="{{ $research->otherresearchers }}">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="inputAddress">Date</label>
                            <input type="date" name="researchdate" class="form-control" id="inputAddress" placeholder="Enter date" value="{{ $research->researchdate }}">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputAddress">Issue</label>
                            <input type="text" name="issue" class="form-control" id="inputAddress" placeholder="Enter Issue" value="{{ $research->issue }}">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputAddress">Volume</label>
                            <input type="text" name="volume" class="form-control" id="inputAddress" placeholder="Enter volume" value="{{ $research->volume }}">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputAddress">Pages</label>
                            <input type="text" name="pages" class="form-control" id="inputAddress" placeholder="Enter pages" value="{{ $research->pages }}">
                        </div>
                        <div class="form-group col-md-1">
                            <label for="inputAddress2">Rate</label>
                            <select id="inputState" class="form-control" name="rate">
                                <option selected value="1">{{ $research->rate }}</option>
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
                            <label for="inputCity">Publication URL</label>
                            <input type="text" name="puburl" class="form-control" id="inputCity" placeholder="Enter URL..." value="{{ $research->puburl }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Description</label>
                        <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3" placeholder="Enter small description here...">{{ $research->description }}</textarea>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <img src="{{ $research->researchimage }}" alt="Research Image">
                        </div>
                        <div class="form-group col-md-8">
                            <label for="inputPassword4">Upload image</label>
                            <input type="file" name="researchimage" class="form-control" style="border: none;" id="inputPassword4" placeholder="Choose file">
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-danger">Update Research</button>
                </form>
            </div>
        </div>
    </x-admin-layout>
</body>
</html>
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
    <title>Update News</title>
</head>
<body>
    <x-admin-layout>
        <!--Add research-->
        <div style="background-color: rgb(245, 245, 245); display: flex; flex-direction: column; justify-content: center; align-items: center; height: auto; padding: 30px 0 30px 0;">
            <div id="international" class="form-box shadow p-3" style="width: 80%; height: auto; background-color: white; border-radius: 5px; padding-bottom: 30px;">
                <h5>News - Update News</h5>
                <div style="width: 15%; height: 1px; border: 1px solid rgb(87, 87, 87); margin-top:10px"></div>

                <form class="my-2" action="{{ route('newss.update', $news->id) }}" method="POST" enctype="multipart/form-data">
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
                            <label for="inputCity">News Title</label>
                            <input type="text" name="newstitle" class="form-control" id="inputCity" placeholder="Enter news title.." value="{{ $news->newstitle }}">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputCity">News URL</label>
                            <input type="text" name="newsurl" class="form-control" id="inputCity" placeholder="Enter URL..." value="{{ $news->newsurl }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">News</label>
                        <textarea class="form-control" name="news" id="exampleFormControlTextarea1" rows="3" placeholder="Enter small description here...">{{ $news->news }}</textarea>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputAddress">Date</label>
                            <input type="date" name="newsdate" class="form-control" id="inputAddress" placeholder="Enter date address" value="{{ $news->newsdate }}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <img src="{{ $news->newsimage }}" alt="News Image">
                        </div>
                        <div class="form-group col-md-8">
                            <label for="inputPassword4">Upload image</label>
                            <input type="file" name="newsimage" class="form-control" style="border: none;" id="inputPassword4" placeholder="Choose file">
                        </div>
                    </div>
                    
                    <div class="d-flex">
                        <button type="submit" class="rounded bg-danger px-2 py-1 pb-[5px] pt-[6px] text-white">Update News</button>
                    </div>
                </form>
            </div>
        </div>
    </x-admin-layout>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admintable.css') }}" rel="stylesheet">
    <title>Postgraduate</title>
</head>
<body>
    <x-admin-layout>
        <div style="background-color: rgb(245, 245, 245); display: flex; flex-direction: column; justify-content: center; align-items: center; height: auto; padding: 30px 0 30px 0; margin-top: 60px;">
            <div id="international" class="form-box shadow p-3" style="width: 95%; height: auto; background-color: white; border-radius: 5px; padding-bottom: 30px;">
                <h5>Make changes on Postgraduates</h5>
                <div style="width: 15%; height: 1px; border: 1px solid rgb(87, 87, 87); margin:5px 0 8px 0"></div>

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
                <div></div>
                <table class="my-3">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Degree</th>
                            <th>Started Y</th>
                            <th>Ended Y</th>
                            <th>Rate</th>
                            <th>Links</th>
                            <th>Actons</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($postgraduate as $pgs)
                        <tr>
                            <td>{{ $pgs->id }}</td>
                            <td>{{ $pgs->title }} {{ $pgs->firstname }} {{ $pgs->lastname }}</td>
                            <td>{{ $pgs->email }}</td>
                            <td>{{ $pgs->degree }} in {{ $pgs->studyarea }}</td>
                            <td>{{ $pgs->startedyear }}</td>
                            <td>{{ $pgs->endedyear }}</td>
                            <td>{{ $pgs->rate }}</td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <a href="{{ $pgs->profileurl }}" target="blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                                            <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/>
                                        </svg>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="flex justify-content-center">

                                    @if($pgs->status == 'unpublish')
                                        <form method="POST" action="{{ route('postgraduate.publish', $pgs->id) }}">
                                            @csrf
                                            <button type="submit" class="rounded bg-warning px-2 py-1 pb-[5px] pt-[6px] text-white">Publish</button>
                                        </form>
                                    @else
                                        <form method="POST" action="{{ route('postgraduate.unpublish', $pgs->id) }}">
                                            @csrf
                                            <button type="submit" class="rounded bg-danger px-2 py-1 pb-[5px] pt-[6px] text-white">Unpublish</button>
                                        </form>
                                    @endif

                                    <a href="{{ route('postgraduate.edit', $pgs->id) }}" class="rounded bg-primary px-2 py-1 pb-[5px] pt-[6px] text-white mx-1">Edit</a>
                                    <a href="{{ route('postgraduate.edit', $pgs->id) }}" class="rounded bg-success px-2 py-1 pb-[5px] pt-[6px] text-white">View</a>
                                    <form action="{{ route('postgraduate.destroy', $pgs->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="rounded bg-secondary px-2 py-1 pb-[5px] pt-[6px] text-white mx-1">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </x-admin-layout>
</body>
</html>
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
    <title>Staff</title>
</head>
<body>
<x-admin-layout>
   <div style="background-color: rgb(245, 245, 245); display: flex; flex-direction: column; justify-content: center; align-items: center; height: auto; padding: 30px 0 30px 0; margin-top: 60px;">
        <div id="international" class="form-box shadow p-3" style="width: 95%; height: auto; background-color: white; border-radius: 5px; padding-bottom: 30px;">
            <h5>Make changes on Coordinator</h5>
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

            <table class="my-3">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Telephone</th>
                        <th>Department</th>
                        <th>Faculty</th>
                        <th>University</th>
                        <th>Links</th>
                        <th>Actons</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($staff as $staff)
                    <tr>
                        <td>{{ $staff->id }}</td>
                        <td>{{ $staff->title }} {{ $staff->firstname }} {{ $staff->lastname }}</td>
                        <td>{{ $staff->email }}</td>
                        <td>{{ $staff->code }} {{ $staff->telephone }}</td>
                        <td>{{ $staff->department }}</td>
                        <td>{{ $staff->faculty }}</td>
                        <td>{{ $staff->university }}</td>
                        <td>
                            <div class="d-flex justify-content-center">
                                <a href="{{ $staff->image}}" target="blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-image-fill" viewBox="0 0 16 16">
                                        <path d="M.002 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-12a2 2 0 0 1-2-2zm1 9v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V9.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062zm5-6.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0"/>
                                    </svg>
                                </a>
                                <div class="mx-1"></div>
                                <a href="{{ $staff->profileurl }}" target="blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                                        <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/>
                                    </svg>
                                </a>
                            </div>
                        </td>
                        <td>
                            <div class="flex justify-content-center">

                                @if($staff->status == 'unpublish')
                                    <form method="POST" action="{{ route('staff.publish', $staff->id) }}">
                                        @csrf
                                        <button type="submit" class="rounded bg-warning px-2 py-1 pb-[5px] pt-[6px] text-white">Publish</button>
                                    </form>
                                @else
                                    <form method="POST" action="{{ route('staff.unpublish', $staff->id) }}">
                                        @csrf
                                        <button type="submit" class="rounded bg-danger px-2 py-1 pb-[5px] pt-[6px] text-white">Unpublish</button>
                                    </form>
                                @endif

                                <a href="{{ route('staff.edit', $staff->id) }}" class="rounded bg-primary px-2 py-1 pb-[5px] pt-[6px] text-white mx-1">Edit</a>
                                <a href="{{ route('staff.edit', $staff->id) }}" class="rounded bg-success px-2 py-1 pb-[5px] pt-[6px] text-white">View</a>
                                <form action="{{ route('staff.destroy', $staff->id) }}" method="POST">
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
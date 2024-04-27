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
    <title>See Users</title>
</head>
<body>
    <x-admin-layout>
        <x-slot name="header">
            <div class="flex">
            <h5 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Users') }}</h5>
            </div>
        </x-slot> 
        <div style="background-color: rgb(245, 245, 245); display: flex; flex-direction: column; justify-content: center; align-items: center; height: auto; padding: 30px 0 30px 0; margin-top: 60px;">
            <div id="international" class="form-box shadow p-3" style="width: 95%; height: auto; background-color: white; border-radius: 5px; padding-bottom: 30px;">
                <h5>Make changes on Users</h5>
                <div style="width: 12%; height: 1px; border: 1px solid rgb(87, 87, 87);"></div>

                <table class="my-3">
                    <thead>
                        <tr>
                            <th>User ID</th>
                            <th>User's Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Checked IN</th>
                            <th>Actions</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->role }}</td>
                            <td>{{ $user->created_at }}</td>
                            <td>
                                <a href="" class="rounded bg-primary px-2 py-1 pb-[5px] pt-[6px] text-white">Edit</a>
                                <a class="rounded bg-success px-2 py-1 pb-[5px] pt-[6px] text-white">View</a>
                                <a href="{{ route('delete', $user -> id) }}" class="rounded bg-secondary px-2 py-1 pb-[5px] pt-[6px] text-white">Delete</a>
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
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
    <link rel="icon" href="{{ asset('image/admin.png') }}" type="image/x-icon">
    <title>See researchs</title>
</head>
<body>
    <x-admin-layout>

        <div style="background-color: rgb(245, 245, 245); display: flex; flex-direction: column; justify-content: center; align-items: center; height: auto; padding: 30px 0 30px 0; margin-top: 60px;">
            <div id="international" class="form-box shadow p-3" style="width: 95%; height: auto; background-color: white; border-radius: 5px; padding-bottom: 30px;">
                <h5>Make changes on News</h5>
                <div style="width: 12%; height: 1px; border: 1px solid rgb(87, 87, 87);"></div>

                <table class="my-3">
                    <thead>
                        <tr>
                            <th>Column 1</th>
                            <th>Column 2</th>
                            <th>Column 3</th>
                            <th>Column 4</th>
                            <th>Column 5</th>
                            <th>Column 6</th>
                            <th>Publish</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Data 1</td>
                            <td>Data 2</td>
                            <td>Data 3</td>
                            <td>Data 4</td>
                            <td>Data 5</td>
                            <td>Data 6</td>
                            <td>
                                <a href="" class="rounded bg-primary px-2 py-1 pb-[5px] pt-[6px] text-white">Edit</a>
                                <a href="" class="rounded bg-success px-2 py-1 pb-[5px] pt-[6px] text-white">View</a>
                                <a href="" class="rounded bg-secondary px-2 py-1 pb-[5px] pt-[6px] text-white">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Data 1</td>
                            <td>Data 2</td>
                            <td>Data 3</td>
                            <td>Data 4</td>
                            <td>Data 5</td>
                            <td>Data 6</td>
                            <td>
                                <a href="" class="rounded bg-primary px-2 py-1 pb-[5px] pt-[6px] text-white">Edit</a>
                                <a href="" class="rounded bg-success px-2 py-1 pb-[5px] pt-[6px] text-white">View</a>
                                <a href="" class="rounded bg-secondary px-2 py-1 pb-[5px] pt-[6px] text-white">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Data 1</td>
                            <td>Data 2</td>
                            <td>Data 3</td>
                            <td>Data 4</td>
                            <td>Data 5</td>
                            <td>Data 6</td>
                            <td>
                                <a href="" class="rounded bg-primary px-2 py-1 pb-[5px] pt-[6px] text-white">Edit</a>
                                <a href="" class="rounded bg-success px-2 py-1 pb-[5px] pt-[6px] text-white">View</a>
                                <a href="" class="rounded bg-secondary px-2 py-1 pb-[5px] pt-[6px] text-white">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </x-admin-layout>
    </body>
</html>
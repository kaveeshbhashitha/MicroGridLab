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
    <title>Course</title>
</head>
<body>
    <x-admin-layout>

        <div style="background-color: rgb(245, 245, 245); display: flex; flex-direction: column; justify-content: center; align-items: center; height: auto; padding: 30px 0 30px 0;">
            <div id="international" class="form-box shadow p-3" style="width: 95%; height: auto; background-color: white; border-radius: 5px; padding-bottom: 30px;">
                <h5>Make changes on Course</h5>
                <div style="width: 12%; height: 1px; border: 1px solid rgb(87, 87, 87);"></div>
                
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

                @foreach($course as $course)
                    <table class="my-3">
                        <thead>
                            <tr>
                                <th  colspan="5" style="text-align:left;">
                                    <div class="d-flex justify-content-between pl-1 pr-1">
                                        <div>Program: {{ $course->coursetitle }} in {{ $course->coursename }}</div>
                                        <div>Fee: {{ $course->coursefee }}</div>
                                        <div>Duration: {{ $course->duration }} Year(s)</div>
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="text-align:left;">Department: {{ $course->department }}</td>
                                <td style="text-align:left;">Faculty: {{ $course->faculty }}</td>
                                <td style="text-align:left;">University: {{ $course->university }}</td>
                                <td style="text-align:left;">Delivery method: {{ $course->deliverymethod }}</td>
                                <td style="text-align:left;">Next Intake: {{ $course->nextintake }}</td>
                            </tr>
                            <tr>
                                <td colspan="2" style="text-align:left;">Coordinator: {{ $course->coordinator }}</td>
                                <td style="text-align:left;">Telephone: {{ $course->telephone }}</td>
                                <td style="text-align:left;">Email: {{ $course->email }}</td>
                                <td style="text-align:left;">Rank: {{ $course->rank }}</td>
                            </tr>
                            <tr>
                                <td colspan="5" style="text-align:left;">Eligibility 01: {{ $course->eligibility01 }}</td>
                            </tr>
                            <tr>
                                <td colspan="5" style="text-align:left;">Eligibility 02: {{ $course->eligibility02 }}</td>
                            </tr>
                            <tr>
                                <td colspan="5" style="text-align:left;">Eligibility 03: {{ $course->eligibility03 }}</td>
                            </tr>
                            <tr>
                                <td colspan="5" style="text-align:left;">Eligibility 04: {{ $course->eligibility04 }}</td>
                            </tr>
                            <tr>
                                <td colspan="5" style="text-align:left;">Eligibility 05: {{ $course->eligibility05 }}</td>
                            </tr>
                            <tr>
                                <td colspan="5" style="text-align:left;">Eligibility 06: {{ $course->eligibility06 }}</td>
                            </tr>
                            <tr>
                                <td colspan="5" style="text-align:left;">Description: {{ $course->description }}</td>
                            </tr>
                            <tr>
                                <td style="text-align:center;"><a class="bg-danger text-white p-1 rounded" target="blank" href="{{ $course->weburl }}">Web Add URL</a></td>
                                <td style="text-align:center;"><a class="bg-danger text-white p-1 rounded" target="blank" href="{{ $course->moredetailsurl }}">More Details</a></td>
                                <td style="text-align:center;"><a class="bg-danger text-white p-1 rounded" target="blank" href="{{ $course->applyonlineurl }}">Applications</a></td>
                                <td style="text-align:center;"><a class="bg-danger text-white p-1 rounded" href="{{ $course->image}}" target="blank">Program Banner</a></td>
                                <td style="text-align:center;"><a class="bg-danger text-white p-1 rounded" href="mailto:{{ $course->email }}" target="blank">Coordinator Email</a></td>
                            </tr>
                            <tr>
                                <td colspan="5">
                                    <div  class="d-flex justify-content-between">
                                        <div class="d-flex justify-content-center">
                                                <abbr title="See image">
                                                    <a href="{{ $course->image}}" target="blank">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-image-fill" viewBox="0 0 16 16">
                                                            <path d="M.002 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-12a2 2 0 0 1-2-2zm1 9v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V9.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062zm5-6.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0"/>
                                                        </svg>
                                                    </a>
                                                </abbr>
                                            <div class="mx-1"></div>
                                                <abbr title="Read article">
                                                    <a href="{{ $course->weburl }}" target="blank">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-plus-fill" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5m6.5-11a.5.5 0 0 0-1 0V6H6a.5.5 0 0 0 0 1h1.5v1.5a.5.5 0 0 0 1 0V7H10a.5.5 0 0 0 0-1H8.5z"/>
                                                        </svg>
                                                    </a>
                                                </abbr>
                                            </div>
                                        <div class="flex justify-content-center">

                                            @if($course->status == 'unpublish')
                                                <form method="POST" action="{{ route('course.publish', $course->id) }}">
                                                    @csrf
                                                    <button type="submit" class="rounded bg-warning px-2 py-1 pb-[5px] pt-[6px] text-white">Publish</button>
                                                </form>
                                            @else
                                                <form method="POST" action="{{ route('course.unpublish', $course->id) }}">
                                                    @csrf
                                                    <button type="submit" class="rounded bg-danger px-2 py-1 pb-[5px] pt-[6px] text-white">Unpublish</button>
                                                </form>
                                            @endif

                                            <a href="{{ route('course.edit', $course->id) }}" class="rounded bg-primary px-2 py-1 pb-[5px] pt-[6px] text-white mx-1">Edit</a>
                                            <a href="{{ route('course.edit', $course->id) }}" class="rounded bg-success px-2 py-1 pb-[5px] pt-[6px] text-white">View</a>
                                            <form action="{{ route('course.destroy', $course->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="rounded bg-secondary px-2 py-1 pb-[5px] pt-[6px] text-white mx-1">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                @endforeach
            </div>
        </div>
    </x-admin-layout>
</body>
</html>
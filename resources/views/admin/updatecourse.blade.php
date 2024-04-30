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
                        <div class="form-group col-md-1">
                            <label for="inputCity">Title</label>
                            <select id="inputState" class="form-control" name="coursetitle">
                                <option selected value="{{ $course->coursetitle }}">{{ $course->coursetitle }}</option>
                                <option value="PhD.">PhD</option>
                                <option value="MSc.">MSc</option>
                                <option value="MPhil">MPhil</option>
                                <option value="PGDip.">PGDip</option>
                                <option value="BSc.">BSc</option>
                                <option value="BEng.">BEng</option>
                            </select>
                        </div>
                        <div class="form-group col-md-9">
                            <label for="inputEmail4">Program Name</label>
                            <input type="text" name="coursename" value="{{ $course->coursename }}" class="form-control" id="inputEmail4" placeholder="Enter program name...">
                        </div>
                        <div class="form-group col-md-2">
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
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="inputEmail4">Department</label>
                            <input type="text" name="department" value="{{ $course->department }}" class="form-control" id="inputEmail4" placeholder="Enter student name...">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputEmail4">Faculty</label>
                            <input type="text" name="faculty" value="{{ $course->faculty }}" class="form-control" id="inputEmail4" placeholder="Enter instructor name...">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputEmail4">University</label>
                            <input type="text" name="university" value="{{ $course->university }}" class="form-control" id="inputEmail4" placeholder="Enter instructor name...">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputEmail4">Course Fee</label>
                            <input type="text" name="coursefee" value="{{ $course->coursefee }}" class="form-control" id="inputEmail4" placeholder="Enter instructor name...">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="inputCity">Delivery Method</label>
                            <select id="inputState" class="form-control" name="deliverymethod">
                                <option selected value="{{ $course->deliverymethod }}">{{ $course->deliverymethod }}</option>
                                <option value="Online">Online</option>
                                <option value="Onsite">Onsite</option>
                                <option value="Physical">Physical</option>
                                <option value="Hybrid">Hybrid</option>
                                <option value="Combinational">Combinational</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputCity">Next Intake</label>
                            <input type="date" name="nextintake" value="{{ $course->nextintake }}" class="form-control" id="inputCity" placeholder="Enter next intake..">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputCity">Telephone</label>
                            <input type="text" name="telephone" value="{{ $course->telephone }}" class="form-control" id="inputCity" placeholder="Enter telephone number..">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputCity">Email</label>
                            <input type="email" name="email" value="{{ $course->email }}" class="form-control" id="inputCity" placeholder="Enter email address..">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-11">
                            <label for="inputAddress">Coordinator</label>
                            <input type="text" name="coordinator" value="{{ $course->coordinator }}" class="form-control" id="inputAddress" placeholder="Enter client name...">
                        </div>
                        <div class="form-group col-md-1">
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
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputCity">Applycation URL (Not-Compulsary)</label>
                            <input type="text" name="applyonlineurl" value="{{ $course->applyonlineurl }}" class="form-control" id="inputCity" placeholder="Enter Applycation URL...">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputCity">Web URL (Compulsary)</label>
                            <input type="text" name="weburl" value="{{ $course->weburl }}" class="form-control" id="inputCity" placeholder="Enter any other URL...">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Elegibility 01 (Compulsary)</label>
                        <select id="inputState" class="form-control" name="eligibility01">
                            <option value="{{ $course->eligibility01 }}">{{ $course->eligibility01 }}</option>
                            <option value="The Honours Degree of the Bachelor of Science in Information Technology or the Honours Degree of the Bachelor of Science in Electrical Engineering of the University of Moratuwa, Sri Lanka">Honours Degree of the Bachelor of Science in Electrical Engineering of the University of Moratuwa, Sri Lanka</option>
                            <option value="The Honours Degree of the Bachelor of the Science of Engineering of the University of Moratuwa, Sri Lanka in a relevant field of specialization as may be approved by the Senate.">Bachelor of the Science (Hons.) of Engineering  in a relevant field of specialization as may be approved by the Senate.</option>
                            <option value="A four-year degree from a recognized university in Electrical/Electronics Engineering or any other related field may be approved by the Senate.">A four-year degree from a recognized university in Electrical/Electronics Engineering or any other related field may be approved by the Senate.</option>
                            <option value="A four-year Honours Degree from a recognized university in a relevant field with a minimum of one year of appropriate experience as may be approved by the Senate.">A four-year Honours Degree from a recognized university in a relevant field with a minimum of one year of appropriate experience.</option>
                            <option value="A three-year degree from a recognized university in a relevant field with a minimum of two years of appropriate experience may be approved by the Senate.">A three-year degree from a recognized university in a relevant field with a minimum of two years of appropriate experience.</option>
                            <option value="Any recognized category of membership of a recognized professional institute, obtained through an academic route, with a minimum of two years of recognized appropriate experience obtained after the membership, may be approved by the Senate.">Any recognized category of membership of a recognized professional institute, obtained through an academic route, with a two years of experience. </option>
                        </select> 
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Elegibility 02 (Compulsary)</label>
                        <select id="inputState" class="form-control" name="eligibility02">
                            <option value="{{ $course->eligibility02 }}">{{ $course->eligibility02 }}</option>
                            <option value="The Honours Degree of the Bachelor of Science in Information Technology or the Honours Degree of the Bachelor of Science in Electrical Engineering of the University of Moratuwa, Sri Lanka">Honours Degree of the Bachelor of Science in Electrical Engineering of the University of Moratuwa, Sri Lanka</option>
                            <option value="The Honours Degree of the Bachelor of the Science of Engineering of the University of Moratuwa, Sri Lanka in a relevant field of specialization as may be approved by the Senate.">Bachelor of the Science (Hons.) of Engineering  in a relevant field of specialization as may be approved by the Senate.</option>
                            <option value="A four-year degree from a recognized university in Electrical/Electronics Engineering or any other related field may be approved by the Senate.">A four-year degree from a recognized university in Electrical/Electronics Engineering or any other related field may be approved by the Senate.</option>
                            <option value="A four-year Honours Degree from a recognized university in a relevant field with a minimum of one year of appropriate experience as may be approved by the Senate.">A four-year Honours Degree from a recognized university in a relevant field with a minimum of one year of appropriate experience.</option>
                            <option value="A three-year degree from a recognized university in a relevant field with a minimum of two years of appropriate experience may be approved by the Senate.">A three-year degree from a recognized university in a relevant field with a minimum of two years of appropriate experience.</option>
                            <option value="Any recognized category of membership of a recognized professional institute, obtained through an academic route, with a minimum of two years of recognized appropriate experience obtained after the membership, may be approved by the Senate.">Any recognized category of membership of a recognized professional institute, obtained through an academic route, with a two years of experience. </option>
                        </select> 
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Elegibility 03 (Compulsary)</label>
                        <select id="inputState" class="form-control" name="eligibility03">
                            <option value="{{ $course->eligibility03 }}">{{ $course->eligibility03 }}</option>
                            <option value="The Honours Degree of the Bachelor of Science in Information Technology<br>or the Honours Degree of the Bachelor of Science in Electrical Engineering of the University of Moratuwa, Sri Lanka">Honours Degree of the Bachelor of Science in Electrical Engineering of the University of Moratuwa, Sri Lanka</option>
                            <option value="The Honours Degree of the Bachelor of the Science of Engineering of the University of Moratuwa, Sri Lanka in a relevant field of specialization as may be approved by the Senate.">Bachelor of the Science (Hons.) of Engineering  in a relevant field of specialization as may be approved by the Senate.</option>
                            <option value="A four-year degree from a recognized university in Electrical/Electronics Engineering or any other related field may be approved by the Senate.">A four-year degree from a recognized university in Electrical/Electronics Engineering or any other related field may be approved by the Senate.</option>
                            <option value="A four-year Honours Degree from a recognized university in a relevant field with a minimum of one year of appropriate experience as may be approved by the Senate.">A four-year Honours Degree from a recognized university in a relevant field with a minimum of one year of appropriate experience.</option>
                            <option value="A three-year degree from a recognized university in a relevant field with a minimum of two years of appropriate experience may be approved by the Senate.">A three-year degree from a recognized university in a relevant field with a minimum of two years of appropriate experience.</option>
                            <option value="Any recognized category of membership of a recognized professional institute, obtained through an academic route, with a minimum of two years of recognized appropriate experience obtained after the membership, may be approved by the Senate.">Any recognized category of membership of a recognized professional institute, obtained through an academic route, with a two years of experience. </option>
                        </select> 
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Elegibility 04 (Not-Compulsary)</label>
                        <select id="inputState" class="form-control" name="eligibility04">
                            <option value="{{ $course->eligibility04 }}">{{ $course->eligibility04 }}</option>
                            <option value="">Skip</option>
                            <option value="The Honours Degree of the Bachelor of Science in Information Technology<br>or the Honours Degree of the Bachelor of Science in Electrical Engineering of the University of Moratuwa, Sri Lanka">Honours Degree of the Bachelor of Science in Electrical Engineering of the University of Moratuwa, Sri Lanka</option>
                            <option value="The Honours Degree of the Bachelor of the Science of Engineering of the University of Moratuwa, Sri Lanka in a relevant field of specialization as may be approved by the Senate.">Bachelor of the Science (Hons.) of Engineering  in a relevant field of specialization as may be approved by the Senate.</option>
                            <option value="A four-year degree from a recognized university in Electrical/Electronics Engineering or any other related field may be approved by the Senate.">A four-year degree from a recognized university in Electrical/Electronics Engineering or any other related field may be approved by the Senate.</option>
                            <option value="A four-year Honours Degree from a recognized university in a relevant field with a minimum of one year of appropriate experience as may be approved by the Senate.">A four-year Honours Degree from a recognized university in a relevant field with a minimum of one year of appropriate experience.</option>
                            <option value="A three-year degree from a recognized university in a relevant field with a minimum of two years of appropriate experience may be approved by the Senate.">A three-year degree from a recognized university in a relevant field with a minimum of two years of appropriate experience.</option>
                            <option value="Any recognized category of membership of a recognized professional institute, obtained through an academic route, with a minimum of two years of recognized appropriate experience obtained after the membership, may be approved by the Senate.">Any recognized category of membership of a recognized professional institute, obtained through an academic route, with a two years of experience. </option>
                        </select> 
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Elegibility 05 (Not-Compulsary)</label>
                        <select id="inputState" class="form-control" name="eligibility05">
                            <option value="{{ $course->eligibility05 }}">{{ $course->eligibility05 }}</option>
                            <option value="">Skip</option>
                            <option value="The Honours Degree of the Bachelor of Science in Information Technology<br>or the Honours Degree of the Bachelor of Science in Electrical Engineering of the University of Moratuwa, Sri Lanka">Honours Degree of the Bachelor of Science in Electrical Engineering of the University of Moratuwa, Sri Lanka</option>
                            <option value="The Honours Degree of the Bachelor of the Science of Engineering of the University of Moratuwa, Sri Lanka in a relevant field of specialization as may be approved by the Senate.">Bachelor of the Science (Hons.) of Engineering  in a relevant field of specialization as may be approved by the Senate.</option>
                            <option value="A four-year degree from a recognized university in Electrical/Electronics Engineering or any other related field may be approved by the Senate.">A four-year degree from a recognized university in Electrical/Electronics Engineering or any other related field may be approved by the Senate.</option>
                            <option value="A four-year Honours Degree from a recognized university in a relevant field with a minimum of one year of appropriate experience as may be approved by the Senate.">A four-year Honours Degree from a recognized university in a relevant field with a minimum of one year of appropriate experience.</option>
                            <option value="A three-year degree from a recognized university in a relevant field with a minimum of two years of appropriate experience may be approved by the Senate.">A three-year degree from a recognized university in a relevant field with a minimum of two years of appropriate experience.</option>
                            <option value="Any recognized category of membership of a recognized professional institute, obtained through an academic route, with a minimum of two years of recognized appropriate experience obtained after the membership, may be approved by the Senate.">Any recognized category of membership of a recognized professional institute, obtained through an academic route, with a two years of experience. </option>
                        </select> 
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Elegibility 06 (Not-Compulsary)</label>
                        <select id="inputState" class="form-control" name="eligibility06">
                            <option value="{{ $course->eligibility06 }}">{{ $course->eligibility06 }}</option>
                            <option value="">Skip</option>
                            <option value="The Honours Degree of the Bachelor of Science in Information Technology<br>or the Honours Degree of the Bachelor of Science in Electrical Engineering of the University of Moratuwa, Sri Lanka">Honours Degree of the Bachelor of Science in Electrical Engineering of the University of Moratuwa, Sri Lanka</option>
                            <option value="The Honours Degree of the Bachelor of the Science of Engineering of the University of Moratuwa, Sri Lanka in a relevant field of specialization as may be approved by the Senate.">Bachelor of the Science (Hons.) of Engineering  in a relevant field of specialization as may be approved by the Senate.</option>
                            <option value="A four-year degree from a recognized university in Electrical/Electronics Engineering or any other related field may be approved by the Senate.">A four-year degree from a recognized university in Electrical/Electronics Engineering or any other related field may be approved by the Senate.</option>
                            <option value="A four-year Honours Degree from a recognized university in a relevant field with a minimum of one year of appropriate experience as may be approved by the Senate.">A four-year Honours Degree from a recognized university in a relevant field with a minimum of one year of appropriate experience.</option>
                            <option value="A three-year degree from a recognized university in a relevant field with a minimum of two years of appropriate experience may be approved by the Senate.">A three-year degree from a recognized university in a relevant field with a minimum of two years of appropriate experience.</option>
                            <option value="Any recognized category of membership of a recognized professional institute, obtained through an academic route, with a minimum of two years of recognized appropriate experience obtained after the membership, may be approved by the Senate.">Any recognized category of membership of a recognized professional institute, obtained through an academic route, with a two years of experience. </option>
                        </select> 
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
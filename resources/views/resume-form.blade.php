<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Builder</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
   
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <a class="navbar-brand font-weight-bold" href="#">Resume Builder</a>
    </nav>

    <div class="hero-section">
        <h1>Create Your Resume in Minutes</h1>
        <p>Easy, fast, and professional resumes built with AI-powered templates.</p>
    </div>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h4 class="text-center font-weight-bold mb-4">Fill in Your Details</h4>
                        <form id="resume-form" action="{{ route('generate-resume') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">Full Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone" required>
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" id="address" name="address">
                            </div>
                            <div class="form-group">
                                <label for="linkedin">LinkedIn Profile</label>
                                <input type="text" class="form-control" id="linkedin" name="linkedin">
                            </div>
                            <div class="form-group">
                                <label for="degree">Education</label>
                                <input type="text" class="form-control" id="degree" name="degree" placeholder="Degree" required>
                                <input type="text" class="form-control mt-2" id="university" name="university" placeholder="University" required>
                                <input type="text" class="form-control mt-2" id="cgpa" name="cgpa" placeholder="CGPA">
                                <input type="text" class="form-control mt-2" id="year" name="year" placeholder="Year of Passing">
                            </div>
                            <div class="form-group">
                                <label for="jobTitle">Work Experience</label>
                                <input type="text" class="form-control" id="jobTitle" name="jobTitle" placeholder="Job Title">
                                <input type="text" class="form-control mt-2" id="company" name="company" placeholder="Company Name">
                                <input type="text" class="form-control mt-2" id="duration" name="duration" placeholder="Duration">
                                <textarea class="form-control mt-2" id="workDescription" name="workDescription" placeholder="Work Description"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="skills">Skills</label>
                                <input type="text" class="form-control" id="skills" name="skills" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Generate Resume</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Resume Preview Section -->
    <div id="resume-preview" class="container mt-5 p-4 border shadow bg-white" style="display:none;">
        <h2 class="text-center text-primary mb-4">Resume Preview</h2>
        <div id="resume-content"></div>
        <canvas id="qrcode" class="d-block mx-auto mt-3"></canvas>
        <button class="btn btn-success btn-block mt-3" onclick="exportPDF()">Download PDF</button>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrious/4.0.2/qrious.min.js"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>
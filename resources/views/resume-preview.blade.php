<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Preview</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="container mt-5 p-4 border shadow bg-white">
        <h2 class="text-center text-primary mb-4">Resume Preview</h2>
        <div class="resume-box">
            <h3 class="text-center">{{ $data['name'] }}</h3>
            <p class="text-center"><strong>Email:</strong> {{ $data['email'] }} | <strong>Phone:</strong> {{ $data['phone'] }}</p>
            <p class="text-center"><strong>Address:</strong> {{ $data['address'] ?? 'N/A' }}</p>
            <p class="text-center"><strong>LinkedIn:</strong> <a href="{{ $data['linkedin'] ?? '#' }}" target="_blank">{{ $data['linkedin'] ?? 'N/A' }}</a></p>
            <hr>
            <h4>Education</h4>
            <ul>
                <li><strong>Degree:</strong> {{ $data['degree'] }}</li>
                <li><strong>University:</strong> {{ $data['university'] }}</li>
                <li><strong>CGPA:</strong> {{ $data['cgpa'] ?? 'N/A' }}</li>
                <li><strong>Year:</strong> {{ $data['year'] ?? 'N/A' }}</li>
            </ul>
            <hr>
            <h4>Work Experience</h4>
            <ul>
                <li><strong>Job Title:</strong> {{ $data['jobTitle'] ?? 'N/A' }}</li>
                <li><strong>Company:</strong> {{ $data['company'] ?? 'N/A' }}</li>
                <li><strong>Duration:</strong> {{ $data['duration'] ?? 'N/A' }}</li>
                <li><strong>Description:</strong> {{ $data['workDescription'] ?? 'N/A' }}</li>
            </ul>
            <hr>
            <h4>Skills</h4>
            <ul>
                <li>{{ $data['skills'] }}</li>
            </ul>
        </div>
        <canvas id="qrcode" class="d-block mx-auto mt-3"></canvas>
        <button class="btn btn-success btn-block mt-3" onclick="exportPDF()">Download PDF</button>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrious/4.0.2/qrious.min.js"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>

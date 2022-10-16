<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Send Email With GMAIL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
        *,html,body {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }


    </style>
  </head>
  <body class="bg-secondary bg-opacity-25">
    <div class="container">
        <div class="mx-auto">
            <div class="row">
                <div class="col-md-12 bg-white rounded p-2 mt-3">
                    <div class="text-main text-center fw-semibold">
                        <p class="fs-2 text-info">Feedback To Developer</p>
                        <p class="fs-3 text-secondary">GuhCoding.com</p>
                    </div>
                    <form action="{{ url('send-email') }}" method="post">
                        @csrf
                        <div class="first-input mb-2">
                            <span class="fw-semibold">Name</span>
                            @error('name')
                            <div class="bg-danger mt-2 mb-2 rounded text-white p-2 text-center" role="alert">
                                <b>{{ $message }}</b>
                            </div>
                            @enderror
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Full Name...." name="name" id="">
                            </div>
                        </div>
                        <div class="second-input mb-2">
                            <span class="fw-semibold">Comment</span>
                            @error('feedback')
                            <div class="bg-danger mt-2 mb-2 rounded text-white p-2 text-center" role="alert">
                                <b>{{ $message }}</b>
                            </div>
                            @enderror
                            <div class="form-group">
                                <textarea name="feedback" class="form-control" placeholder="Your Feedback...." cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="third-input">
                            <span class="fw-semibold">Email</span>
                            @error('email')
                            <div class="bg-danger mt-2 mb-2 rounded text-white p-2 text-center" role="alert">
                                <b>{{ $message }}</b>
                            </div>
                            @enderror
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Email...." name="email" id="">
                            </div>
                        </div>
                        <div class="text-center mt-3 mb-2">
                            <button type="submit" class="btn btn-primary">Send Feedback</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>
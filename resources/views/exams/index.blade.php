@extends('/layout.main')

@section('content')
<div class="container py-5">
    <h1 class="text-center pb-5">
        Exams Result
    </h1>
    <div class="row g-4 row-cols-1 row-cols-md-3 row-cols-xl-4">
        @foreach($exams as $exam)
        <div id="col" class="col">
            <div id="card" class="card text-center h-100 ">
                <div class="img">
                    <img src="https://w0.peakpx.com/wallpaper/955/713/HD-wallpaper-doctor-medical.jpg" class="card-img-top" alt="...">
                </div>
                <p class="list-group-item">
                    Name: <strong>{{$exam->surname}}</strong>
                </p>
                <p class="list-group-item">
                    Surname: <strong>{{$exam->name}}</strong>
                <p class="list-group-item">
                    Fiscal code: <strong>{{$exam->fiscal_code}}</strong>
                </p>

                <p class="list-group-item">
                    Date of birth: <strong>{{$exam->date_of_birth}}</strong>
                </p>

                <div>
                    <p>Exam Type:</p> <strong>{{$exam->exam_type}}</strong>
                </div>
                <div id="btn" class="pt-3">
                    <a href="{{route('exams.show', $exam->id)}}" class="btn btn-primary">More Info</a>
                </div>
            </div>

        </div>
        @endforeach
    </div>
</div>
@endsection
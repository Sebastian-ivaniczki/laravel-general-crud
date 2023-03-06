@extends('/layout.main')

@section('content')
<div class="container py-5">
    <h1 class="text-center text-primary pb-5">
        Exams
    </h1>
    <div class="row g-4">
        {{-- <div class="row g-3 row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4"> --}}
            @foreach($exams as $exam)

            <div class="col-3">
                <div class="card text-center py-3">
                    <p class="list-group-item">
                        Name: <strong>{{$exam->surname}}</strong>
                    </p>
                    <p class="list-group-item">
                        Surname: <strong>{{$exam->name}}</strong>
                    </p>
                    <p class="list-group-item">
                        Fiscal code: {{$exam->fiscal_code}}
                    </p>

                    <p class="list-group-item">
                        Date of birth: {{$exam->date_of_birth}}
                    </p>

                    <div>
                        <h3>Esame:</h3> {{$exam->exam_type}}
                    </div>

                    </div>
                </div>
                @endforeach
            </div>
    </div>
</div>
@endsection



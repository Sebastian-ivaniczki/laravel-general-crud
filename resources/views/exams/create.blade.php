@extends('layout.main')
@section('content')
    <div class="container my-5">
        <form action="{{ route('exams.store') }}" method="POST">
            @csrf
            <div class="row">
                {{-- patient credentials --}}
                <div class="col-6">
                    <div class="mb-3">
                        <label for="surname" class="form-label">Patient surnamename</label>
                        <input type="text" class="form-control" id="surname" name="surname" placeholder="surname"
                            value="{{ old('surname') }}">

                    </div>
                </div>

                <div class="col-6">
                    <div class="mb-3">
                        <label for="name" class="form-label">name</label>
                        <input type="text" class="form-control" id="name" name="name"
                            value="{{ old('name') }}">

                    </div>
                </div>

                <div class="col-4">
                    <div class="mb-3">
                        <label for="fiscal_code" class="form-label">fiscal_code</label>
                        <input type="text" class="form-control" id="fiscal_code" name="fiscal_code"
                            value="{{ old('fiscal_code') }}">

                    </div>
                </div>
                {{-- patient info --}}
                <div class="col-4">
                    <div class="mb-3">
                        <label for="date_of_birth" class="form-label">date_of_birth</label>
                        <input type="text" class="form-control" id="date_of_birth" name="date_of_birth"
                            value="{{ old('date_of_birth') }}">

                    </div>
                </div>


                <div class="col-4">
                    <select class="form-select" name="genre">
                        <option selected>select genre</option>
                        <option>F</option>
                        <option>M</option>
                        <option>#</option>
                    </select>
                </div>

                <div class="col-4">
                    <div class="mb-3">
                        <label for="exam_type" class="form-label">Exam type</label>
                        <input type="text" class="form-control" id="exam_type" name="exam_type"
                            value="{{ old('exam_type') }}">

                    </div>
                </div>

                {{-- exam results --}}

                <div class="col-3">
                    <div class="mb-3">
                        <label for="blood_platelet" class="form-label">Blood plate</label>
                        <input type="number" class="form-control" id="blood_platelet" name="blood_platelet"
                            value="{{ old('blood_platelet') }}">
                    </div>
                </div>


                <div class="col-3">
                    <div class="mb-3">
                        <label for="white_blood_cells" class="form-label">White blood cells</label>
                        <input type="number" class="form-control" id="white_blood_cells" name="white_blood_cells"
                            value="{{ old('white_blood_cells') }}">
                    </div>
                </div>

                <div class="col-3">
                    <div class="mb-3">
                        <label for="hemoglobin" class="form-label">Hemoglobin</label>
                        <input type="number" class="form-control" id="hemoglobin" name="hemoglobin"
                            value="{{ old('hemoglobin') }}">
                    </div>
                </div>

                <div class="col-3">
                    <div class="mb-3">
                        <label for="hematocrit" class="form-label">Hematocrit</label>
                        <input type="number" class="form-control" id="hematocrit" name="hematocrit"
                            value="{{ old('hematocrit') }}">
                    </div>
                </div>

                <div class="col-3">
                    <div class="mb-3">
                        <label for="hematocrit" class="form-label">Hematocrit</label>
                        <input type="number" class="form-control" id="hematocrit" name="hematocrit"
                            value="{{ old('hematocrit') }}">
                    </div>
                </div>

            </div>

            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-success">Save</button>
            </div>
        </form>
    </div>
@endsection

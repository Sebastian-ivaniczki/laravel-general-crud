@extends('/layout.main')
@section('content')
    <div class="container rounded mt-5">
        <form action="{{ route('exams.update', $exam->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div>
                <div class="mb-3 ">
                    <label for="surname" class="form-label h5">Surname</label>
                    <input type="text" placeholder="Exam surname" class="form-control"
<<<<<<< HEAD
                        value="{{ old('surname', $exam->surname) }}" id="surname" name="surname">
=======
                        value="{{ old('surname', $exam->surname) }}" id="surname" name="surname" required>
>>>>>>> refacturing_graph
                </div>
                <div class="mb-3 ">
                    <label for="name" class="form-label h5">Name</label>
                    <input type="text" placeholder="Exam name" class="form-control"
<<<<<<< HEAD
                        value="{{ old('name', $exam->name) }}" id="name" name="name">
=======
                        value="{{ old('name', $exam->name) }}" id="name" name="name" required>
>>>>>>> refacturing_graph
                </div>
                <div class="mb-3 ">
                    <label for="fiscal_code" class="form-label h5">FiscalCode</label>
                    <input type="text" placeholder="Exam fiscal_code"
                        value="{{ old('fiscal_code', $exam->fiscal_code) }}" class="form-control" id="fiscal_code"
<<<<<<< HEAD
                        name="fiscal_code">
=======
                        name="fiscal_code" required>
>>>>>>> refacturing_graph
                </div>
                <div class="mb-3 ">
                    <label for="date_of_birth" class="form-label h5">Date of birth</label>
                    <input type="text" placeholder="Exam date_of_birth" class="form-control w-75" id="date_of_birth"
<<<<<<< HEAD
                        value="{{ old('date_of_birth', $exam->date_of_birth) }}" name="date_of_birth">
=======
                        value="{{ old('date_of_birth', $exam->date_of_birth) }}" name="date_of_birth" required>
>>>>>>> refacturing_graph
                </div>
                <div class="mb-3 ">
                    <label for="genre" class="form-label h5">Genre</label>
                    <input type="text" placeholder="Exam genre" class="form-control w-75" id="genre"
<<<<<<< HEAD
                        value="{{ old('genre', $exam->genre) }}" name="genre">
=======
                        value="{{ old('genre', $exam->genre) }}" name="genre" required>
>>>>>>> refacturing_graph
                </div>
                <div class="mb-3 ">
                    <label for="exam_type" class="form-label h5">Exam type</label>
                    <input type="text" placeholder="Exam type" class="form-control w-75" id="exam_type"
<<<<<<< HEAD
                        value="{{ old('exam_type', $exam->exam_type) }}" name="exam_type">
=======
                        value="{{ old('exam_type', $exam->exam_type) }}" name="exam_type" required>
>>>>>>> refacturing_graph
                </div>
                <div class="mb-3 ">
                    <label for="blood_platelet" class="form-label h5">Blood platelet</label>
                    <input type="text" placeholder="Exam blood_platelet" class="form-control w-75" id="blood_platelet"
<<<<<<< HEAD
                        value="{{ old('blood_platelet', $exam->blood_platelet) }}" name="blood_platelet">
=======
                        value="{{ old('blood_platelet', $exam->blood_platelet) }}" name="blood_platelet" required>
>>>>>>> refacturing_graph
                </div>
                <div class="mb-3 ">
                    <label for="white_blood_cells" class="form-label h5">White blood cells</label>
                    <input type="text" placeholder="Exam white_blood_cells" class="form-control w-75"
                        id="white_blood_cells" value="{{ old('white_blood_cells', $exam->white_blood_cells) }}"
<<<<<<< HEAD
                        name="white_blood_cells">
=======
                        name="white_blood_cells" required>
>>>>>>> refacturing_graph
                </div>
                <div class="mb-3 ">
                    <label for="hemoglobin" class="form-label h5">Hemoglobin</label>
                    <input type="text" placeholder="Exam hemoglobin" class="form-control w-75" id="hemoglobin"
<<<<<<< HEAD
                        value="{{ old('hemoglobin', $exam->hemoglobin) }}" name="hemoglobin">
=======
                        value="{{ old('hemoglobin', $exam->hemoglobin) }}" name="hemoglobin" required>
>>>>>>> refacturing_graph
                </div>
                <div class="mb-3 ">
                    <label for="hematocrit" class="form-label h5">Hematocrit</label>
                    <input type="text" placeholder="Exam hematocrit" class="form-control w-75" id="hematocrit"
<<<<<<< HEAD
                        value="{{ old('hematocrit', $exam->hematocrit) }}" name="hematocrit">
=======
                        value="{{ old('hematocrit', $exam->hematocrit) }}" name="hematocrit" required>
>>>>>>> refacturing_graph
                </div>
                <div class="mb-3 ">
                    <label for="average_cell_volume" class="form-label h5">Average cell volume</label>
                    <input type="text" placeholder="Exam average_cell_volume" class="form-control w-75"
                        id="average_cell_volume" value="{{ old('average_cell_volume', $exam->average_cell_volume) }}"
<<<<<<< HEAD
                        name="average_cell_volume">
=======
                        name="average_cell_volume" required>
>>>>>>> refacturing_graph
                </div>
                <div class="mb-3 ">
                    <label for="average_cell_content_hb" class="form-label h5">Average cell content hb</label>
                    <input type="text" placeholder="Exam average_cell_content_hb" class="form-control w-75"
                        id="average_cell_content_hb"
                        value="{{ old('average_cell_content_hb', $exam->average_cell_content_hb) }}"
<<<<<<< HEAD
                        name="average_cell_content_hb">
=======
                        name="average_cell_content_hb" required>
>>>>>>> refacturing_graph
                </div>
                <div class="mb-3 ">
                    <label for="average_cell_concentration" class="form-label h5">Average cell concentration</label>
                    <input type="text" placeholder="Exam average_cell_concentration" class="form-control w-75"
                        id="average_cell_concentration"
                        value="{{ old('average_cell_concentration', $exam->average_cell_concentration) }}"
<<<<<<< HEAD
                        name="average_cell_concentration">
=======
                        name="average_cell_concentration" required>
>>>>>>> refacturing_graph
                </div>
                <div class="mb-3 ">
                    <label for="gr" class="form-label h5">gr</label>
                    <input type="text" placeholder="Exam gr" class="form-control w-75" id="gr"
<<<<<<< HEAD
                        value="{{ old('gr', $exam->average_cell_content_hb) }}" name="gr">
=======
                        value="{{ old('gr', $exam->average_cell_content_hb) }}" name="gr" required>
>>>>>>> refacturing_graph
                </div>
                <div class="mb-3 ">
                    <label for="mean_plate_volume" class="form-label h5">Mean plate volume</label>
                    <input type="text" placeholder="Exam mean_plate_volume" class="form-control w-75"
                        id="mean_plate_volume" value="{{ old('mean_plate_volume', $exam->mean_plate_volume) }}"
<<<<<<< HEAD
                        name="mean_plate_volume">
=======
                        name="mean_plate_volume" required>
>>>>>>> refacturing_graph
                </div>
                <div class="mb-3 ">
                    <label for="hypochromic_red_blood_cells" class="form-label h5">Hypochromic red blood cells</label>
                    <input type="text" placeholder="Exam hypochromic_red_blood_cells" class="form-control w-75"
                        id="hypochromic_red_blood_cells"
                        value="{{ old('hypochromic_red_blood_cells', $exam->hypochromic_red_blood_cells) }}"
<<<<<<< HEAD
                        name="hypochromic_red_blood_cells">
=======
                        name="hypochromic_red_blood_cells" required>
>>>>>>> refacturing_graph
                </div>
                <div class="mb-3 ">
                    <label for="sgpt" class="form-label h5">SGPT</label>
                    <input type="text" placeholder="Exam sgpt" class="form-control w-75" id="sgpt"
<<<<<<< HEAD
                        value="{{ old('sgpt', $exam->sgpt) }}" name="sgpt">
=======
                        value="{{ old('sgpt', $exam->sgpt) }}" name="sgpt" required>
>>>>>>> refacturing_graph
                </div>
                <div class="d-flex justify-content-center my-3">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </form>
    </div>
@endsection

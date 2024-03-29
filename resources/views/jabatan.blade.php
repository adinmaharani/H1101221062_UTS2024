@extends('layout.main')
@section('content')
<div class="container py-4">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Master Jabatan</h4>
                </div>
                <div class="card-body">
                    <form id="jobForm">
                        @csrf
                        <input type="hidden" id="jobId">
                        <div class="mb-3">
                            <label for="jobName" class="form-label">Nama Jabatan</label>
                            <input type="text" class="form-control" id="jobName" name="jobName" required>
                        </div>
                        <div class="mb-3">
                            <label for="jobDescription" class="form-label">Deskripsi Jabatan</label>
                            <input type="text" class="form-control" id="jobDescription" name="jobDescription" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="button" class="btn btn-secondary" id="resetBtn">Reset</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Daftar Jabatan</h4>
                </div>
                <div class="card-body" id="jobList"></div>
            </div>
        </div>
    </div>
</div>
@endsection
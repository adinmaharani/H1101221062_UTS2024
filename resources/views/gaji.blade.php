@extends('layout.main')
@section('content')
<div class="container-fluid py-4">
    <!-- Form Gaji Karyawan -->
    <div class="row">
        <div class="col-lg-6 mb-lg-0 mb-4">
            <div class="card">
                <div class="card-header pb-0">
                    <h6 class="mb-2">Gaji Karyawan</h6>
                </div>
                <div class="card-body p-3">
                    <form id="salaryForm">
                        <div class="mb-3">
                            <label for="employeeName" class="form-label">Nama Karyawan</label>
                            <input type="text" class="form-control" id="employeeName" name="employeeName" required>
                        </div>
                        <div class="mb-3">
                            <label for="employeePosition" class="form-label">Jabatan</label>
                            <select class="form-select" id="employeePosition" name="employeePosition" required>
                                <option value="">Pilih Jabatan</option>
                                <option value="Pimpinan">Pimpinan</option>
                                <option value="Manajer">Manajer</option>
                                <option value="Teknisi">Teknisi</option>
                                <option value="Staff">Staff</option>
                                <option value="Office Girl/Boy">Office Girl/Boy</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="basicSalary" class="form-label">Gaji Pokok</label>
                            <input type="number" class="form-control" id="basicSalary" name="basicSalary" required>
                        </div>
                        <div class="mb-3">
                            <label for="allowance" class="form-label">Tunjangan</label>
                            <input type="number" class="form-control" id="allowance" name="allowance" required>
                        </div>
                        <div class="mb-3">
                            <label for="educationLevel" class="form-label">Pendidikan</label>
                            <select class="form-select" id="educationLevel" name="educationLevel" required>
                                <option value="">Pilih tingkat pendidikan</option>
                                <option value="SD">SD</option>
                                <option value="SMP">SMP</option>
                                <option value="SMA">SMA</option>
                                <option value="Diploma">Diploma</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Hitung Gaji</button>
                    </form>
                    <div id="result" class="mt-3"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('salaryForm').addEventListener('submit', function(event) {
        event.preventDefault();

        const employeeName = document.getElementById('employeeName').value;
        const employeePosition = document.getElementById('employeePosition').value;
        const basicSalary = parseFloat(document.getElementById('basicSalary').value);
        const allowance = parseFloat(document.getElementById('allowance').value);
        const educationLevel = document.getElementById('educationLevel').value;

        const totalSalary = basicSalary + allowance;

        document.getElementById('result').innerHTML = `
            <h6 class="mb-3">Detail Gaji Karyawan</h6>
            <p>Nama Karyawan: ${employeeName}</p>
            <p>Jabatan: ${employeePosition}</p>
            <p>Gaji Pokok: Rp${basicSalary.toLocaleString()}</p>
            <p>Tunjangan: Rp${allowance.toLocaleString()}</p>
            <p>Pendidikan: ${educationLevel}</p>
            <hr>
            <h6 class="font-weight-bold">Total Gaji: Rp${totalSalary.toLocaleString()}</h6>
        `;
    });
</script>
@endsection